export interface BitcoinObserver {
    update(oldPrice: number, newPrice: number): void
}