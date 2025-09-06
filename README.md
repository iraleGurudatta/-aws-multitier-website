AWS Multi-Tier Web Hosting Project
📌 Overview

This project demonstrates the deployment of a highly available, scalable, and secure multi-tier web application on Amazon Web Services (AWS). The architecture is designed to host a PHP-based website with separate layers for compute, storage, and database.

🏗️ Architecture

The project follows the multi-tier architecture pattern:

Presentation Layer (Frontend + Backend)

Deployed on Amazon EC2 instances running PHP.

Managed through Auto Scaling Group (ASG) for scalability.

Application Load Balancer (ALB) distributes incoming traffic across multiple instances.

Application/Storage Layer

Amazon Elastic File System (EFS) or Elastic Block Store (EBS) for shared storage.

Ensures persistent and scalable storage for application data.

Database Layer

Amazon RDS (MySQL) for relational database management.

Provides durability, security, and automated backups.

⚙️ Services Used

Amazon EC2 – Virtual servers for hosting frontend/backend.

Amazon RDS (MySQL) – Relational database service.

Amazon EFS / EBS – Storage solutions for web content and data persistence.

Elastic Load Balancer (ALB) – Distributes traffic across EC2 instances.

Auto Scaling Group (ASG) – Maintains high availability by scaling instances.

Amazon VPC – Provides secure networking environment.

Security Groups & IAM – Control access and permissions.

🚀 Deployment Steps

Setup Networking (VPC, Subnets, Route Tables, IGW, NAT Gateway).

Launch RDS MySQL instance in a private subnet.

Create EC2 instances in public subnets to host PHP application.

Mount EFS / EBS volumes for shared storage.

Configure Application Load Balancer (ALB) to distribute traffic.

Setup Auto Scaling Group (ASG) with launch template for EC2.

Deploy PHP application code on EC2 instances.

Test connectivity between EC2 and RDS.

Access application via ALB DNS name.

🔐 Security Considerations

EC2 instances in public subnets, RDS in private subnets.

Restricted Security Groups:

ALB → EC2 (HTTP/HTTPS).

EC2 → RDS (MySQL).

SSH access restricted to admin IP only.

IAM roles for least privilege access.

📊 Key Features

Multi-tier architecture for scalability and modularity.

High availability with Auto Scaling + Load Balancer.

Secure database deployment in private subnet.

Cost-effective and production-ready design.

📷 Architecture Diagram

(Insert your Lucidchart diagram or AWS architecture screenshot here)

🧑‍💻 Author

Gurudatta Vijay Irale

BE Computer Engineering | Cloud & DevOps Enthusiast

🚀 Skilled in AWS, EC2, RDS, EFS, VPC, Auto Scaling, Load Balancers

💼 Project: Multi-tier website hosting on AWS
