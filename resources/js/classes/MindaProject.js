import { Project } from "./Project";

class MindaProject extends Project{
    constructor(
        name,
        year,
        tech,
    ) {
        super(
            name,
            'LG',
            year,
            tech
        );
    }

}

export {MindaProject};