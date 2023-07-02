export interface User {
    id: number;
    name: string;
    email: string;
    image: string;
}

export interface Paragraph {
    id: number; 
    heading: string; 
    body: string;
    order: number;
}

export interface Blog {
    id: number; 
    title: string;
    description: string;
    thumbnail: string;
    tags: string;
    author: User;
    paragraphs: Paragraph[];
}