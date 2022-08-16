# Training Management System

Manage training events for an organization

## Domains

- [ ] Trainings
  - [ ] table design: program name, trainer name, company name, venue, start date, end date
- [ ] Participants
  - [ ] table design: user_id, training_id
- [ ] Attendance
  - [ ] table design: participant_id, user_id, status, date

## User Stories

- [ ] As an administrator, I can create, update, delete and see training details.
  - [ ] Training details: program name, trainer name, company name, venue, start and end date.
- [ ] As an administrator, I can add / remove participant from training events
- [ ] As a trainer of the program, I can set start / end time for participant to mark their attendance
- [ ] As a training participant, I can see trainings been invited to me
- [ ] As a training participant, I can mark my attendance at start of the training, and end of the training
- [ ] As a training participant, I can only mark my attendance if trainer already open for mark the attendance time.
