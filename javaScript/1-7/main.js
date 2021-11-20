class Taiyaki {

    constructor(anko, cream, cheese) {
        this.anko = anko;
        this.cream = cream;
        this.cheese = cheese;
    }

kansei () {
    console.log(`中身は${this.anko}です\n中身は${this.cream}です\n中身は${this.cheese}です`);
    }
}

let nakami = new Taiyaki('あんこ', 'クリーム','チーズ');
nakami.kansei();