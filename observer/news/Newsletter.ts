import { BitcoinObserver } from "../crypto/BitcoinObserver";

export class Newsletter implements BitcoinObserver {

    update(oldPrice: number, newPrice: number) {
        console.log('=================NEWS================')
        console.log(`Novo preço: ${newPrice} Preço antigo: ${oldPrice}`)
        console.log(`=================NEWS================\n\n`)
    }
}