import { Project } from "./Project";

class LgProject extends Project{
    constructor(
        name,
        year,
    ) {
        super(
            name,
            'LG',
            year,
            ['Android']
        );
    }

}

export {LgProject};