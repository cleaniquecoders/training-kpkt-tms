# Training Management System

Manage training events for an organization

## Installation

Clone this project. Create `training_management_system` database.

```bash
cd /path/to/training-kpkt-tms/
cp .env.example .env 
composer install 
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

On another terminal, run:

```bash
npm install 
npm run dev
```

Login using:

email: admin@app
password: password

## Domains

- [x] Trainings
  - [x] table design: program name, trainer name, company name, venue, start date, end date
- [x] Participants
  - [x] table design: user_id, training_id
- [x] Attendance
  - [x] table design: participant_id, user_id, status, date

## User Stories

- [ ] As an administrator, I can create, update, delete and see training details.
  - [ ] Training details: program name, trainer name, company name, venue, start and end date.
- [ ] As an administrator, I can add / remove participant from training events
- [ ] As a trainer of the program, I can set start / end time for participant to mark their attendance
- [ ] As a training participant, I can see trainings been invited to me
- [ ] As a training participant, I can mark my attendance at start of the training, and end of the training
- [ ] As a training participant, I can only mark my attendance if trainer already open for mark the attendance time.
