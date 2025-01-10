import { BitcoinObserver } from "../crypto/BitcoinObserver";

export class Investor implements BitcoinObserver {

    update(oldPrice: number, newPrice: number) {
        console.log('=================INVESTOR================')
        console.log(`Novo preço: ${newPrice} Preço antigo: ${oldPrice}`)
        console.log(`=================INVESTOR================\n\n`)
    }
}