class Project {
    constructor(
        name,
        company,
        year,
        tech,
    ){
        this.name = name;
        this.company = company;
        this.year = year;
        this.tech = tech;

    }
    //
    // get name(){
    //     return this.name;
    // }
    //
    // get company(){
    //     return this.company;
    // }
    //
    // get year(){
    //     return this.year;
    // }
    //
    // get tech(){
    //     return this.tech;
    // }

    toStdObject(){
        return {
            name: this.name,
            company: this.company,
            year: this.year,
            tech: this.tech,
        }
    }
}

export {Project};