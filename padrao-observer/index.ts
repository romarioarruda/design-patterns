import { Bitcoin } from "./crypto/Bitcoin";
import { Investor } from "./investor/Investor";
import { Newsletter } from "./news/Newsletter";

const bitcoin = new Bitcoin()

bitcoin.registerObservers([new Investor(), new Newsletter()])

bitcoin.setPrice(100)
bitcoin.setPrice(200)