import { BitcoinObserver } from "./BitcoinObserver";

export class Bitcoin {

    private observers: BitcoinObserver[] = []
    private price: number = 0
    private oldPrice: number = 0

    public setPrice(newPrice: number): void {
        if(newPrice != this.price) {
            this.oldPrice = this.price
            this.price = newPrice

            this.notifyObservers()
        }
    }

    public getPrice(): number {
        return this.price
    }

    public registerObservers(observer: BitcoinObserver | BitcoinObserver[]): void {
        if (Array.isArray(observer)) {
            this.observers = this.observers.concat(observer)
        } else {
            this.observers.push(observer)
        }
    }

    private notifyObservers(): void {
        this.observers.forEach(obs => obs.update(this.oldPrice, this.price))
    }
}