<?php

namespace Tests\Library;

enum JobTagEnum: string
{
    // Языки программирования
    case Java = 'Java';
    case Python = 'Python';
    case JavaScript = 'JavaScript';
    case TypeScript = 'TypeScript';
    case CSharp = 'C#';
    case CPlusPlus = 'C++';
    case Go = 'Go';
    case PHP = 'PHP';
    case Kotlin = 'Kotlin';
    case Swift = 'Swift';
    case Ruby = 'Ruby';
    case Rust = 'Rust';
    case SQL = 'SQL';
    case NoSQL = 'NoSQL';
    case HTML = 'HTML';
    case CSS = 'CSS';
    case SASS = 'SASS';
    case GraphQL = 'GraphQL';
    case Bash = 'Bash';

    // Фреймворки и библиотеки
    case React = 'React';
    case Angular = 'Angular';
    case VueJS = 'Vue.js';
    case NextJS = 'Next.js';
    case NodeJS = 'Node.js';
    case Express = 'Express';
    case SpringBoot = 'Spring Boot';
    case Django = 'Django';
    case Flask = 'Flask';
    case FastAPI = 'FastAPI';
    case Laravel = 'Laravel';
    case DotNETCore = '.NET Core';
    case ASPNET = 'ASP.NET';
    case NestJS = 'NestJS';
    case NuxtJs = 'Nuxt.js';

    // DevOps и инфраструктура
    case Docker = 'Docker';
    case Kubernetes = 'Kubernetes';
    case Terraform = 'Terraform';
    case Ansible = 'Ansible';
    case Jenkins = 'Jenkins';
    case GitLabCICD = 'GitLab CI/CD';
    case AWS = 'AWS';
    case Azure = 'Azure';
    case GoogleCloud = 'Google Cloud';
    case Linux = 'Linux';
    case Nginx = 'Nginx';
    case Apache = 'Apache';
    case Grafana = 'Grafana';
    case Prometheus = 'Prometheus';

    // Базы данных
    case PostgreSQL = 'PostgreSQL';
    case MySQL = 'MySQL';
    case MongoDB = 'MongoDB';
    case Redis = 'Redis';
    case Cassandra = 'Cassandra';
    case Elasticsearch = 'Elasticsearch';
    case DynamoDB = 'DynamoDB';
    case SQLite = 'SQLite';

    // Тестирование и безопасность
    case QA = 'QA';
    case ManualTesting = 'Manual Testing';
    case AutomationTesting = 'Automation Testing';
    case Selenium = 'Selenium';
    case Cypress = 'Cypress';
    case Jest = 'Jest';
    case Mocha = 'Mocha';
    case JUnit = 'JUnit';
    case Security = 'Security';
    case PenetrationTesting = 'Penetration Testing';
    case OWASP = 'OWASP';

    // Методологии
    case Agile = 'Agile';
    case Scrum = 'Scrum';
    case Kanban = 'Kanban';
    case CiCd = 'CI/CD';
    case Git = 'Git';
    case TDD = 'TDD';
    case BDD = 'BDD';

    // Дизайн и фронтенд
    case UiUx = 'UI/UX';
    case Figma = 'Figma';
    case AdobeXD = 'Adobe XD';
    case ResponsiveDesign = 'Responsive Design';
    case Accessibility = 'Accessibility';

    // Data / AI / ML
    case DataScience = 'Data Science';
    case MachineLearning = 'Machine Learning';
    case DeepLearning = 'Deep Learning';
    case TensorFlow = 'TensorFlow';
    case PyTorch = 'PyTorch';
    case Pandas = 'Pandas';
    case NumPy = 'NumPy';
    case DataAnalysis = 'Data Analysis';
    case BigData = 'Big Data';
    case Spark = 'Spark';

    // Роли и направления
    case Backend = 'Backend';
    case Frontend = 'Frontend';
    case Fullstack = 'Fullstack';
    case Mobile = 'Mobile';
    case DevOps = 'DevOps';
    case DataEngineer = 'Data Engineer';
    case DataAnalyst = 'Data Analyst';
    case DataScientist = 'Data Scientist';
    case ProductManager = 'Product Manager';
    case ProjectManager = 'Project Manager';
    case QAEngineer = 'QA Engineer';
    case UiUxDesigner = 'UI/UX Designer';
    case SystemAdministrator = 'System Administrator';
    case SecurityEngineer = 'Security Engineer';
}
