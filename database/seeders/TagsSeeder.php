<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    public function run(): void
    {
        $categoriesWithTags = [
            'Языки программирования' => [
                'Java',
                'Python',
                'JavaScript',
                'TypeScript',
                'C#',
                'C++',
                'Go',
                'PHP',
                'Kotlin',
                'Swift',
                'Ruby',
                'Rust',
                'SQL',
                'NoSQL',
                'HTML',
                'CSS',
                'SASS',
                'GraphQL',
                'Bash',
            ],
            'Фреймворки и библиотеки' => [
                'React',
                'Angular',
                'Vue.js',
                'Next.js',
                'Node.js',
                'Express',
                'Spring Boot',
                'Django',
                'Flask',
                'FastAPI',
                'Laravel',
                '.NET Core',
                'ASP.NET',
                'NestJS',
                'Nuxt.js'
            ],
            'DevOps и инфраструктура' => [
                'Docker',
                'Kubernetes',
                'Terraform',
                'Ansible',
                'Jenkins',
                'GitLab CI/CD',
                'AWS',
                'Azure',
                'Google Cloud',
                'Linux',
                'Nginx',
                'Apache',
                'Grafana',
                'Prometheus',
            ],
            'Базы данных' => [
                'PostgreSQL',
                'MySQL',
                'MongoDB',
                'Redis',
                'Cassandra',
                'Elasticsearch',
                'DynamoDB',
                'SQLite',
            ],
            'Тестирование и безопасность' => [
                'QA',
                'Manual Testing',
                'Automation Testing',
                'Selenium',
                'Cypress',
                'Jest',
                'Mocha',
                'JUnit',
                'Security',
                'Penetration Testing',
                'OWASP'
            ],
            'Методологии' => [
                'Agile',
                'Scrum',
                'Kanban',
                'CI/CD',
                'Git',
                'TDD',
                'BDD',
            ],
            'Дизайн и фронтенд' => [
                'UI/UX',
                'Figma',
                'Adobe XD',
                'Responsive Design',
                'Accessibility',
            ],
            'Data / AI / ML' => [
                'Data Science',
                'Machine Learning',
                'Deep Learning',
                'TensorFlow',
                'PyTorch',
                'Pandas',
                'NumPy',
                'Data Analysis',
                'Big Data',
                'Spark',
            ],
            'Роли и направления' => [
                'Backend',
                'Frontend',
                'Fullstack',
                'Mobile',
                'DevOps',
                'Data Engineer',
                'Data Analyst',
                'Data Scientist',
                'Product Manager',
                'Project Manager',
                'QA Engineer',
                'UI/UX Designer',
                'System Administrator',
                'Security Engineer',
            ]
        ];

        foreach ($categoriesWithTags as $categoryName => $tagNames) {
            $category = Category::factory()->create(['name' => $categoryName]);
            foreach ($tagNames as $tagName) {
                Tag::factory()->for($category)->create(['name' => $tagName]);
            }
        }
    }
}
