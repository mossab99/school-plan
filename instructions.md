

WordPress Plugin Analysis: Olama School Weekly Plan System
Based on the image showing an Arabic school weekly plan, I'll analyze the requirements and suggest all necessary forms to develop this plugin.

Core Features Identified from the Image
Date & Day Display - التاريخ (2025-12-14, الأحد/Sunday)
Semester Information - الفصل الأول (First Semester)
Week Number - الأسبوع الثالث (Week 3)
Month - شهر 12 (Month 12)
Subject - اللغة الانجليزية (English Language)
Lesson Number - الحصة الثانية (Second Period)
Unit Number - الوحدة الخامسة (Unit 5)
Lesson Title - Writing : Student Book : Page 65
Homework Sections:
Student Book (Page 49)
Exercise Book (Page #)
Notebook (لا يوجد - None)
Worksheet (لا يوجد - None)
Teacher Notes - ملاحظات المعلم (with star rating system)
Required Forms for Plugin Development
1. Plugin Settings Form
Purpose: Configure global plugin settings

Fields:

School name (Arabic & English)
Academic year start/end dates
Number of semesters
Number of weeks per semester
School days (which days are active)
Number of daily periods
Period duration
Time zone settings
Default language (Arabic/English/Both)
Date format preferences
Enable/disable RTL support
2. Academic Structure Form
Purpose: Define the school's academic framework

Fields:

Semester management (Add/Edit/Delete)
Semester number
Start date
End date
Holidays/breaks
Week configuration
Week numbers
Date ranges
Grade levels
Academic calendar integration
3. Subject Management Form
Purpose: Create and manage subjects

Fields:

Subject name (Arabic & English)
Subject code
Grade level(s)
Subject color/icon
Active/Inactive status
Subject description
Related textbooks/materials
4. Teacher Management Form
Purpose: Manage teacher profiles

Fields:

Teacher name (Arabic & English)
Employee ID
Email address
Phone number
Subjects taught
Grade levels assigned
Profile picture
User account linking (WordPress user)
5. Student Management Form
Purpose: Manage student records

Fields:

Student name (Arabic & English)
Student ID
Grade level
Section/Class
Parent contact information
Enrollment date
Profile picture
Active/Inactive status
6. Class/Section Management Form
Purpose: Organize students into classes

Fields:

Class name (e.g., "Grade 5-A")
Grade level
Section identifier
Assigned students (multi-select)
Class teacher
Room number
Maximum capacity
7. Curriculum Planning Form
Purpose: Define curriculum structure for subjects

Fields:

Subject selection
Grade level
Semester
Units/Chapters:
Unit number
Unit name (Arabic & English)
Lessons within unit:
Lesson number
Lesson title
Learning objectives
Required pages (Student Book)
Duration (number of periods)
Resources needed
8. Weekly Plan Creation Form ⭐ (Main Form)
Purpose: Create the actual weekly plan (as shown in image)

Fields:

Header Section:

Date picker (auto-calculates day name)
Semester dropdown
Week number
Month
Subject dropdown
Grade/Class selection
Teacher (auto-filled based on logged-in user)
Lesson Details:

Period/Session number (الحصة)
Unit number dropdown (populated from curriculum)
Lesson title/topic
Student Book page(s)
Learning objectives (optional)
Teaching method (optional)
Homework Section:

Student Book homework (page number or "لا يوجد")
Exercise Book homework (page number or "لا يوجد")
Notebook homework (description or "لا يوجد")
Worksheet assignment (description or "لا يوجد")
Assessment/Notes:

Teacher notes (text area)
Rating system (1-5 stars)
Completion status
Attachments (upload files/links)
Action Buttons:

Save as draft
Publish
Duplicate for next week
Print
Export (PDF/Excel)
Share with parents
9. Bulk Weekly Plan Form
Purpose: Create multiple plans efficiently

Fields:

Date range selector
Subject multi-select
Class multi-select
Template selection (pre-filled plans)
Batch settings
Review before publish option
10. Template Management Form
Purpose: Create reusable lesson plan templates

Fields:

Template name
Subject
Grade level
Pre-filled sections (objectives, homework structure)
Save template
Load template
11. Homework Assignment Form
Purpose: Detailed homework management

Fields:

Assignment title
Subject
Class/Students
Due date
Assignment type (Student Book, Exercise Book, Notebook, Worksheet, Project)
Description
Attachments
Points/Grade
Submission status tracking
12. Report Generation Form
Purpose: Generate various reports

Fields:

Report type:
Weekly plan summary
Monthly overview
Semester completion rate
Homework statistics
Teacher performance
Student progress
Date range
Filter by: Subject, Class, Teacher, Student
Format: PDF, Excel, Print
Include/exclude sections
13. Parent Portal Settings Form
Purpose: Configure parent access

Fields:

Enable parent access (yes/no)
Registration method (invitation/self-register)
Information visibility settings:
Show weekly plans
Show homework
Show teacher notes
Show ratings
Notification settings:
Email notifications
SMS notifications (if integrated)
Notification frequency
14. Notification Settings Form
Purpose: Configure automated notifications

Fields:

Enable notifications (yes/no)
Notification events:
New weekly plan published
Homework assigned
Homework due date reminder
Plan changes/updates
Recipients:
Teachers
Students
Parents
Administrators
Delivery methods:
Email
In-app notification
SMS (optional)
Push notification (optional)
15. Import/Export Form
Purpose: Data migration and backup

Fields:

Import options:
CSV file upload
Excel file upload
JSON import
Data type (students, teachers, subjects, plans)
Export options:
Date range
Data type selection
Format (CSV, Excel, JSON, PDF)
Include attachments
16. Permissions & Roles Form
Purpose: Manage user capabilities

Fields:

Role selection (Administrator, Teacher, Student, Parent)
Permissions checklist:
Create weekly plans
Edit own plans
Edit all plans
Delete plans
View plans
Assign homework
View students
View reports
Manage settings
17. Calendar Integration Form
Purpose: Sync with school calendar

Fields:

Academic events:
Holidays
Exams
School events
Professional development days
Event name (Arabic & English)
Start/End date
Affects weekly plans (yes/no)
Notification
18. Print/Display Options Form
Purpose: Customize output appearance

Fields:

Page size (A4, Letter)
Orientation (Portrait/Landscape)
Include school logo
Include teacher name
Include date/time stamp
Color scheme
Font size
Language preference
Sections to include/exclude
Header/Footer customization
Database Structure Recommendations
Required Tables:
wp_school_plans - Main weekly plans
wp_school_subjects - Subject list
wp_school_teachers - Teacher profiles
wp_school_students - Student records
wp_school_classes - Class organization
wp_school_curriculum - Curriculum structure
wp_school_homework - Homework assignments
wp_school_units - Units/chapters
wp_school_lessons - Individual lessons
wp_school_calendar - Academic calendar
wp_school_settings - Plugin settings
wp_school_notifications - Notification log
Additional Features to Consider
Dashboard Widgets: Quick stats, upcoming plans, pending homework
Mobile Responsiveness: Full mobile support for teachers on-the-go
Multi-language Support: Arabic/English interface switching
Version Control: Track changes to weekly plans
Collaboration: Multiple teachers co-planning
Analytics: Usage statistics, completion rates
API Integration: Connect with school management systems
Offline Mode: Work without internet, sync later
Accessibility: WCAG compliance for inclusive use
Would you like me to create detailed wireframes, database schema diagrams, or start developing specific forms for this plugin?

each grade has a section and each section has its own plan

12:39 PM
School Weekly Plan System - Hierarchical Structure
Interactive artifact 
no i mean update the analysis with this information

12:40 PM
WordPress Plugin Analysis: School Weekly Plan System
Updated with Grade → Section → Individual Plan Hierarchy
Based on the image showing an Arabic school weekly plan, with the clarification that each grade has multiple sections, and each section has its own independent weekly plan.

System Architecture Overview
School
  └── Academic Year
      └── Semester 1, 2, 3...
          └── Grade 1, 2, 3... 12
              └── Section A, B, C, D...
                  └── Weekly Plans (Individual per section)
                      └── Daily Lessons
                          └── Homework Assignments
Key Principle: Plans are created at the Section Level, not Grade Level. Grade 5-A and Grade 5-B will have completely separate, independent weekly plans.

Updated Core Features
Hierarchical Structure: School → Grade → Section → Weekly Plan
Section Independence: Each section maintains its own curriculum pace and plans
Teacher Assignment: Teachers assigned to specific sections
Student Enrollment: Students belong to specific sections
Plan Customization: Different sections can be at different curriculum points
Cross-Section Comparison: Compare progress across sections of the same grade
Required Forms for Plugin Development
1. Plugin Settings Form
Purpose: Configure global plugin settings

Fields:

School name (Arabic & English)
Academic year start/end dates
Number of semesters
Number of weeks per semester
School days (which days are active)
Number of daily periods
Period duration
Time zone settings
Default language (Arabic/English/Both)
Date format preferences
Enable/disable RTL support
Section naming convention (A, B, C or 1, 2, 3 or custom)
2. Academic Structure Form
Purpose: Define the school's academic framework

Fields:

Semester management (Add/Edit/Delete)
Semester number
Start date
End date
Holidays/breaks
Week configuration
Week numbers
Date ranges
Grade levels (with ability to add multiple grades)
Academic calendar integration
3. Grade Management Form ⭐ UPDATED
Purpose: Create and manage grade levels

Fields:

Grade number/name (e.g., "Grade 5", "الصف الخامس")
Grade level (1-12 or KG1, KG2, etc.)
Active/Inactive status
Description
Number of sections (dynamic - can add/remove)
Default subjects for this grade
Grade coordinator/supervisor
4. Section Management Form ⭐ NEW - CRITICAL
Purpose: Create and manage sections within each grade

Fields:

Basic Information:

Parent grade (dropdown)
Section identifier (A, B, C, D... or custom)
Section name (auto-generated: "Grade 5-A" or custom)
Section name Arabic (auto-generated or custom)
Active/Inactive status
Academic year
Capacity & Enrollment:

Maximum student capacity
Current enrollment count (auto-calculated)
Classroom/Room number
Class schedule (which periods this section uses)
Staff Assignment:

Homeroom teacher (primary teacher for this section)
Subject teachers (multi-select with subject mapping):
English → Teacher Name
Math → Teacher Name
Science → Teacher Name
etc.
Students:

Enrolled students (multi-select from student list)
Bulk import students (CSV)
Transfer students to/from other sections
Curriculum Settings:

Follow standard grade curriculum (yes/no)
Custom curriculum modifications (if applicable)
Current curriculum position (which unit/lesson they're on)
Display Settings:

Section color code (for visual identification)
Display order (for sorting)
Actions:

Duplicate section settings (for creating similar sections)
Archive section (end of year)
Merge with another section
5. Subject Management Form
Purpose: Create and manage subjects

Fields:

Subject name (Arabic & English)
Subject code
Grade level(s) (multi-select)
Subject color/icon
Active/Inactive status
Subject description
Related textbooks/materials
Weekly periods allocated
6. Teacher Management Form ⭐ UPDATED
Purpose: Manage teacher profiles

Fields:

Teacher name (Arabic & English)
Employee ID
Email address
Phone number
Subjects taught (multi-select)
Assigned sections (multi-select with subject mapping):
Grade 5-A: English, Science
Grade 5-B: English
Grade 6-C: English, Science
Grade levels assigned
Profile picture
User account linking (WordPress user)
Maximum sections allowed (workload management)
Preferred language interface
7. Student Management Form ⭐ UPDATED
Purpose: Manage student records

Fields:

Student name (Arabic & English)
Student ID
Specific section (Grade 5-A, NOT just Grade 5)
Date of birth
Parent contact information
Enrollment date
Profile picture
Active/Inactive status
Transfer history (if moved between sections)
8. Class/Section Roster Form ⭐ NEW
Purpose: Visual overview of all sections and their students

Features:

Grid view of all grades and sections
Student count per section
Teacher assignments visible
Quick actions: Add student, Move student, View plan
Filter by grade, section, teacher
Export roster (PDF/Excel)
9. Curriculum Planning Form ⭐ UPDATED
Purpose: Define curriculum structure for subjects at grade level

Fields:

Subject selection
Grade level (this curriculum applies to all sections of this grade)
Semester
Units/Chapters:
Unit number
Unit name (Arabic & English)
Lessons within unit:
Lesson number
Lesson title
Learning objectives
Required pages (Student Book)
Duration (number of periods)
Resources needed
Note: This creates a template curriculum that sections can follow at their own pace.

10. Weekly Plan Creation Form ⭐⭐ (MAIN FORM - UPDATED)
Purpose: Create the actual weekly plan for a SPECIFIC SECTION

Fields:

Section Selection (CRITICAL):

Grade dropdown (e.g., Grade 5)
Section dropdown (e.g., Section A) → This determines which section's plan is being created
Auto-display: "Creating plan for Grade 5-A" (clear confirmation)
Show current section info:
Number of students
Assigned teacher
Last plan created date
Header Section:

Date picker (auto-calculates day name)
Semester dropdown (auto-filled based on date)
Week number (auto-calculated or manual)
Month
Subject dropdown
Teacher (auto-filled based on logged-in user OR section assignment)
Lesson Details:

Period/Session number (الحصة)
Unit number dropdown (populated from curriculum)
Lesson title/topic
Student Book page(s)
Learning objectives (optional)
Teaching method (optional)
Curriculum progress indicator (shows where this section is in the curriculum)
Homework Section:

Student Book homework (page number or "لا يوجد")
Exercise Book homework (page number or "لا يوجد")
Notebook homework (description or "لا يوجد")
Worksheet assignment (description or "لا يوجد")
Due date (optional)
Assessment/Notes:

Teacher notes (text area)
Rating system (1-5 stars)
Lesson completion status
Student participation notes
Attachments (upload files/links)
Action Buttons:

Save as draft
Publish (makes visible to students/parents)
Duplicate to other sections (select which sections to copy to)
Print
Export (PDF/Excel)
Share with parents
Copy from another section's plan (with modifications)
Visual Indicators:

Show if this lesson is ahead/behind curriculum schedule
Display other sections' progress for comparison
11. Bulk Weekly Plan Form ⭐ UPDATED
Purpose: Create multiple plans efficiently

Fields:

Section selection (multi-select specific sections):
Grade 5-A ☑
Grade 5-B ☑
Grade 5-C ☐
Grade 6-A ☐
Date range selector
Subject selection
Template selection (pre-filled plans)
Option: Create identical plans for selected sections
Option: Create different plans based on section's current curriculum position
Review before publish option
Batch publish/save
12. Template Management Form
Purpose: Create reusable lesson plan templates

Fields:

Template name
Subject
Grade level (can be used by any section in this grade)
Pre-filled sections (objectives, homework structure)
Save template
Load template
Share template with other teachers
Mark as "Recommended template"
13. Section Comparison Dashboard ⭐ NEW
Purpose: Compare progress across sections of the same grade

Features:

Select grade level
View all sections side-by-side
Compare:
Current unit/lesson
Number of plans completed
Curriculum completion percentage
Homework completion rates (if tracking enabled)
Average student performance
Identify sections that are ahead/behind
Visual charts and graphs
Export comparison report
Use Cases:

Grade coordinator monitoring all sections
Ensuring all sections cover required material
Identifying sections that need support
Balancing curriculum pace
14. Section Weekly Schedule Form ⭐ NEW
Purpose: Define the weekly schedule for a specific section

Fields:

Section selection
Weekly timetable grid:
Days (Saturday - Friday or custom)
Periods (1-8 or custom)
Subject assignment per period
Teacher assignment per period
Break times
Special periods (assembly, sports, library)
Save as template
Copy schedule from another section
Integration: When creating weekly plans, the system suggests subjects based on the section's schedule.

15. Homework Assignment Form ⭐ UPDATED
Purpose: Detailed homework management

Fields:

Assignment title
Subject
Specific section(s) (can assign to multiple sections)
Assigned date
Due date
Assignment type (Student Book, Exercise Book, Notebook, Worksheet, Project)
Description
Attachments
Points/Grade
Submission tracking per student
Group assignment (yes/no)
Related lesson/unit
16. Report Generation Form ⭐ UPDATED
Purpose: Generate various reports

Fields:

Report type:
Weekly plan summary by section
Monthly overview by section
Section comparison report (new)
Semester completion rate by section
Homework statistics by section
Teacher workload report
Curriculum progress by section (new)
Student progress (individual or section-wide)
Date range
Filter by:
Grade
Specific section(s) (multi-select)
Subject
Teacher
Student
Format: PDF, Excel, Print
Include/exclude sections
Group by: Grade, Section, Subject, Teacher
New Report Types:

Section Performance Report: Compare all sections in a grade
Cross-Section Analysis: Identify teaching strategies that work best
Curriculum Alignment Report: Show which sections are on track
17. Parent Portal Settings Form ⭐ UPDATED
Purpose: Configure parent access

Fields:

Enable parent access (yes/no)
Registration method (invitation/self-register)
Section-specific access: Parents only see their child's section's plans
Information visibility settings:
Show weekly plans
Show homework
Show teacher notes
Show ratings
Show section schedule
Show curriculum progress
Notification settings:
Email notifications
SMS notifications (if integrated)
Notification frequency
Notify when new plan is published for their section
Multi-child support: Parents with children in different sections see both
18. Teacher Dashboard Form ⭐ NEW
Purpose: Personalized dashboard for teachers

Features:

My Sections widget (shows all sections teacher is assigned to)
Quick actions per section:
Create new plan
View current week
View homework submissions
View student list
Section switcher (easy navigation between assigned sections)
Upcoming plans that need creation
Pending homework to grade
Recent notifications
Calendar view of all sections' plans
Workload indicator (how many plans created vs. needed)
19. Section Performance Tracking Form ⭐ NEW
Purpose: Track and analyze section-level performance

Fields:

Section selection
Academic year/semester
Metrics to track:
Plans completed on time
Curriculum completion rate
Homework submission rates
Assessment scores (if integrated)
Attendance rates (if integrated)
Comparison with other sections in same grade
Trend analysis (improving/declining)
Action items/notes
Export performance report
20. Section Transfer/Management Form ⭐ NEW
Purpose: Manage student transfers between sections

Fields:

Student selection
Current section (auto-filled)
Target section (dropdown of available sections in same grade)
Reason for transfer
Effective date
Transfer notes
Update student record (automatic)
Notify relevant teachers (automatic)
Update section rosters (automatic)
21. Section Curriculum Progress Tracker ⭐ NEW
Purpose: Track where each section is in the curriculum

Fields:

Section selection
Subject selection
Current unit
Current lesson
Lessons completed
Lessons remaining
Estimated completion date
Behind/On track/Ahead indicator
Visual timeline showing curriculum progress
Compare with grade-level expected progress
Notes on why ahead/behind
Action plan if behind schedule
22. Cross-Section Planning Tools ⭐ NEW
Purpose: Tools for coordinating across sections

Features:

Plan Library: View plans from all sections
Copy Plan to Multiple Sections:
Select source section and plan
Select target sections
Choose: Exact copy OR Adapt to section's curriculum position
Synchronized Planning: Create aligned plans for multiple sections
Common Assessments: Schedule same tests across sections
Resource Sharing: Share materials across sections
23. Notification Settings Form ⭐ UPDATED
Purpose: Configure automated notifications

Fields:

Enable notifications (yes/no)
Notification events:
New weekly plan published for specific section
Homework assigned to specific section
Homework due date reminder
Plan changes/updates by section
Section progress alerts (falling behind curriculum)
Cross-section announcements (grade-level updates)
Recipients:
Teachers (only for their assigned sections)
Students (only for their section)
Parents (only for their child's section)
Administrators (all sections)
Grade coordinators (all sections in their grade)
Delivery methods:
Email
In-app notification
SMS (optional)
Push notification (optional)
Section-specific notification settings
24. Import/Export Form ⭐ UPDATED
Purpose: Data migration and backup

Fields:

Import options:
CSV file upload
Excel file upload
JSON import
Data type:
Students (must include section)
Teachers (with section assignments)
Subjects
Sections (with all details)
Plans (by section)
Export options:
Date range
Section selection (export specific sections' data)
Data type selection
Format (CSV, Excel, JSON, PDF)
Include attachments
Bulk export: All sections in a grade
25. Permissions & Roles Form ⭐ UPDATED
Purpose: Manage user capabilities

Roles:

Administrator: Full system access
Grade Coordinator: Manages all sections in specific grade(s)
Teacher: Manages only assigned sections
Student: Views only their section's content
Parent: Views only their child's section's content
Permissions Checklist:

For Teachers:

Create weekly plans (only for assigned sections)
Edit own plans (only for assigned sections)
View all plans in assigned sections
View students in assigned sections
Assign homework to assigned sections
View reports for assigned sections
Cannot access other sections' data
For Grade Coordinators:

View all sections in their grade(s)
Create/edit plans for any section in their grade
Compare sections
Generate grade-level reports
Manage section settings
Assign/reassign teachers
For Students:

View their section's weekly plans
View their homework
Submit homework (if feature enabled)
Cannot view other sections' plans
For Parents:

View their child's section's plans
View their child's homework
Receive notifications for their child's section
Cannot view other sections' plans
26. Calendar Integration Form ⭐ UPDATED
Purpose: Sync with school calendar

Fields:

Academic events:
Holidays
Exams (can be section-specific or grade-wide)
School events
Professional development days
Section-specific events (field trips, guest speakers)
Event name (Arabic & English)
Start/End date
Applies to:
All school
Specific grade(s)
Specific section(s)
Affects weekly plans (yes/no)
Notification settings
Recurring events
27. Print/Display Options Form ⭐ UPDATED
Purpose: Customize output appearance

Fields:

Page size (A4, Letter)
Orientation (Portrait/Landscape)
Include school logo
Include section name (Grade 5-A)
Include teacher name
Include student count
Include date/time stamp
Color scheme
Font size
Language preference
Sections to include/exclude
Header/Footer customization
Section identifier prominence (large/small display)
Print multiple sections at once (comparison view)
Updated Database Structure
Required Tables:
wp_school_settings - Plugin global settings
wp_school_grades ⭐ NEW - Grade levels
id, grade_name, grade_name_ar, grade_number, active, description
wp_school_sections ⭐⭐ NEW - CRITICAL TABLE
id, grade_id (FK), section_identifier (A, B, C), section_name, section_name_ar, max_capacity, current_enrollment, room_number, homeroom_teacher_id, active, academic_year, color_code, display_order
wp_school_section_teachers ⭐ NEW - Teacher-Section-Subject mapping
id, section_id (FK), teacher_id (FK), subject_id (FK)
wp_school_subjects - Subject list
Add: grade_levels (JSON array of applicable grades)
wp_school_teachers - Teacher profiles
No major changes, but relationships managed in section_teachers
wp_school_students ⭐ UPDATED
Add: section_id (FK) - REQUIRED field, not optional
Add: transfer_history (JSON)
wp_school_weekly_plans ⭐⭐ CRITICAL UPDATE
Add: section_id (FK) - REQUIRED field
Remove: grade_id or make it derivable from section
Add: duplicated_from_plan_id (for tracking copies)
wp_school_curriculum - Curriculum structure (grade-level templates)
wp_school_units - Units/chapters
wp_school_lessons - Individual lessons
wp_school_homework ⭐ UPDATED
Add: section_id (FK) or section_ids (JSON array for multi-section assignments)
wp_school_calendar - Academic calendar
Add: applies_to_type (all/grade/section)
Add: applies_to_ids (JSON array)
wp_school_section_schedules ⭐ NEW - Weekly schedules per section
id, section_id, day_of_week, period_number, subject_id, teacher_id
wp_school_section_progress ⭐ NEW - Curriculum progress tracking
id, section_id, subject_id, current_unit_id, current_lesson_id, last_updated
wp_school_notifications - Notification log
Add: section_id (FK) for section-specific notifications
wp_school_section_transfers ⭐ NEW - Student transfer history
id, student_id, from_section_id, to_section_id, transfer_date, reason, notes
Critical Database Relationships
sql
-- Core Hierarchy
School (1) → Grades (Many) → Sections (Many) → Weekly Plans (Many)

-- Teacher Assignment
Section (Many) ←→ Teachers (Many) through section_teachers table
Subject also involved in this relationship

-- Student Enrollment
Section (1) → Students (Many)
Student belongs to exactly ONE section at a time

-- Plans
Section (1) → Weekly Plans (Many)
Each plan belongs to ONE section

-- Homework
Homework can belong to:
  - One section (most common)
  - Multiple sections (when same assignment given to multiple sections)
Key Indexing Requirements
sql
-- Critical indexes for performance
INDEX on wp_school_sections(grade_id, active)
INDEX on wp_school_students(section_id)
INDEX on wp_school_weekly_plans(section_id, date)
INDEX on wp_school_section_teachers(section_id, teacher_id)
INDEX on wp_school_homework(section_id, due_date)
```

---

## Updated User Flow Examples

### **Example 1: Teacher Creates Weekly Plan**

1. Teacher logs in
2. Dashboard shows "My Sections": Grade 5-A, Grade 5-B, Grade 6-C
3. Clicks "Create Plan" for Grade 5-A
4. System shows:
   - Section: Grade 5-A
   - Current students: 28
   - Current curriculum position: Unit 3, Lesson 5
   - Last plan created: 2025-12-10
5. Teacher fills in plan details
6. Option: "Copy this plan to other sections?" → Can select Grade 5-B
7. Saves/Publishes plan
8. Plan is now visible to Grade 5-A students and parents ONLY

### **Example 2: Administrator Compares Sections**

1. Admin navigates to "Section Comparison"
2. Selects "Grade 5"
3. Views comparison table:
```
   Section | Students | Current Unit | Plans Completed | % Curriculum
   5-A     | 28       | Unit 4       | 12/14          | 78%
   5-B     | 25       | Unit 3       | 11/14          | 68%
   5-C     | 30       | Unit 4       | 13/14          | 82%
Notices Section B is behind
Clicks on 5-B to view details
Can message teacher or offer support
Example 3: Parent Views Plans
Parent logs in
Sees child's section: Grade 5-A
Views current week's plan for Grade 5-A ONLY
Cannot see Grade 5-B or 5-C plans
Receives notification when new plan is published for Grade 5-A
Example 4: Bulk Plan Creation
Grade 5 English teacher wants to create same plan for all sections
Navigates to "Bulk Plan Creation"
Selects sections: 5-A, 5-B, 5-C
Chooses "Create identical plans" OR "Adapt to each section's progress"
If "Adapt": System adjusts lesson numbers based on each section's current position
Reviews and publishes
Three separate plans created, one for each section
Additional Plugin Features (Section-Specific)
1. Section Dashboard Widget
Shows all sections at a glance
Quick stats per section
Color-coded status indicators
Click to drill down into section details
2. Section Analytics
Performance metrics per section
Comparison graphs
Trend analysis
Identify high-performing sections
Identify sections needing support
3. Section Collaboration Tools
Teachers of same section can co-plan
Share notes about specific students in section
Internal messaging per section
4. Section Archives
End-of-year section archiving
Historical data preservation
Year-over-year comparison
"This section last year" comparisons
5. Section Cloning
Duplicate entire section for next year
Clone section settings
Copy successful structures
6. Load Balancing Tools
Distribute students evenly across sections
Balance teacher workloads
Suggest optimal section sizes
Mobile App Considerations
Section-Specific Features:
Teachers: Quick section switcher in header
Students: Only see their section (simplified)
Parents: Multi-child view if children in different sections
Push notifications tagged by section
Offline access to assigned section's plans
Implementation Priority
Phase 1 (MVP):
Grade Management Form
Section Management Form
Teacher Assignment to Sections
Student Assignment to Sections
Weekly Plan Creation (Section-specific)
Basic section dashboard
Phase 2:
Section Comparison Dashboard
Bulk Plan Creation
Section Performance Tracking
Parent Portal (section-specific access)
Teacher Dashboard with section switcher
Phase 3:
Advanced Analytics
Cross-section planning tools
Section curriculum progress tracker
Historical comparisons
Mobile app optimization
This updated analysis ensures that the plugin properly handles the hierarchical structure where each grade has multiple sections, and each section maintains its own independent weekly plans, while still allowing coordination and comparison across sections when needed.

update the analysis to include the folowing features :
admin will define the academic year eg. 2025/2026 start at 01-6-2025 ends at 30-06-2026
then teachers will  populate the curruiculam 
where they select the academic year (defined earlier), and the grade (defined in the system ) and the subject  (defined in the systen for example science , math , etc they will select )and the semester (defined in the system first or second)
and they will fill all lessons that are related to that  subject

now when we select the homework , in the weekly plan , it should be based from a list that reads from the curriculim

12:55 PM
WordPress Plugin Analysis: School Weekly Plan System
Updated with Academic Year & Curriculum-Driven Homework Assignment
Based on the image showing an Arabic school weekly plan, with hierarchical structure (Grade → Section → Plan) and new curriculum management workflow.

System Architecture Overview
School
  └── Academic Year (2025/2026: 01-06-2025 to 30-06-2026)
      └── Semesters (First, Second)
          └── Grades (1-12)
              └── Subjects (Math, Science, English, etc.)
                  └── Curriculum (Teacher-populated lessons)
                      └── Sections (A, B, C...)
                          └── Weekly Plans
                              └── Lessons (from Curriculum)
                                  └── Homework (from Curriculum lessons)
Key Principles:

Admin defines academic year structure
Teachers populate curriculum content per subject/grade/semester
Weekly plans reference curriculum lessons
Homework assignments pulled from curriculum lesson pool
Core Workflow
Admin Workflow:
Create Academic Year (e.g., 2025/2026)
Define start/end dates
Define semesters within the year
System is ready for teachers
Teacher Workflow:
Select Academic Year + Grade + Subject + Semester
Populate all lessons for that curriculum
Each lesson can have associated homework options
Weekly Plan Creation:
Select Section + Week + Subject
Choose lessons from pre-populated curriculum
Assign homework from curriculum lesson's homework pool
Homework dropdown populated automatically based on selected lesson
Required Forms for Plugin Development
1. Plugin Settings Form
Purpose: Configure global plugin settings

Fields:

School name (Arabic & English)
School logo
Time zone settings
Default language (Arabic/English/Both)
Date format preferences
Enable/disable RTL support
Section naming convention (A, B, C or 1, 2, 3 or custom)
Number of daily periods
Period duration
School days (which days are active)
2. Academic Year Management Form ⭐⭐ CRITICAL - ADMIN ONLY
Purpose: Define academic years - Foundation of the entire system

Fields:

Basic Information:

Academic year name (e.g., "2025/2026")
Academic year name (Arabic) (e.g., "٢٠٢٥/٢٠٢٦")
Start date (e.g., 01-06-2025)
End date (e.g., 30-06-2026)
Description (optional)
Active/Inactive status
Set as current academic year (checkbox)
Semester Configuration:

Number of semesters (typically 2)
For each semester:
Semester name (e.g., "First Semester", "الفصل الأول")
Semester number (1, 2, 3...)
Start date
End date
Number of weeks
Holidays/breaks within semester:
Holiday name
Start date
End date
Affects curriculum (yes/no)
Week Configuration (Auto-calculated or Manual):

Week numbering system:
Continuous (Week 1-40 for entire year)
Per semester (Week 1-20 per semester)
Custom
Week ranges auto-generated based on dates
Exclude holidays from week count
Academic Calendar:

Important dates:
Registration period
First day of school
Exam periods
Report card dates
Last day of school
Actions:

Save academic year
Duplicate from previous year
Archive old academic year
Generate academic calendar PDF
View curriculum status (how many subjects have been populated)
Validation Rules:

End date must be after start date
Semesters cannot overlap
Semester dates must fall within academic year dates
At least one semester required
Cannot delete academic year if curriculum exists
Display:

Academic Year: 2025/2026
Start: June 1, 2025 | End: June 30, 2026
Status: ✓ Active

Semesters:
├── First Semester: 01-06-2025 to 15-12-2025 (20 weeks)
│   └── Holidays: Eid Al-Adha (17-06 to 21-06)
└── Second Semester: 01-01-2026 to 30-06-2026 (20 weeks)
    └── Holidays: Spring Break (15-03 to 20-03)

Curriculum Progress: 
- Math: 45/60 subjects populated (75%)
- Science: 30/60 subjects populated (50%)
- English: 58/60 subjects populated (97%)
3. Grade Management Form
Purpose: Create and manage grade levels

Fields:

Grade number/name (e.g., "Grade 5", "الصف الخامس")
Grade level (1-12 or KG1, KG2, etc.)
Active/Inactive status
Description
Default subjects for this grade (multi-select)
Grade coordinator/supervisor
4. Subject Management Form
Purpose: Create and manage subjects

Fields:

Subject name (Arabic & English)
Subject code
Grade level(s) applicable (multi-select)
Subject color/icon
Active/Inactive status
Subject description
Related textbooks:
Student book name
Exercise book name
Teacher guide
Weekly periods allocated per grade
5. Curriculum Population Form ⭐⭐⭐ CRITICAL - TEACHER INTERFACE
Purpose: Teachers populate all lessons for a subject/grade/semester

Access Control:

Teachers can only populate curriculum for subjects they teach
Can edit curriculum for current and future academic years
Cannot edit past curriculum (archived)
Selection Section:

┌─────────────────────────────────────────────────────┐
│ Populate Curriculum For:                            │
├─────────────────────────────────────────────────────┤
│ Academic Year: [2025/2026 ▼]                        │
│ Grade:         [Grade 5 ▼]                           │
│ Subject:       [Science ▼]                           │
│ Semester:      [First Semester ▼]                    │
│                                                      │
│ [Load Existing] [Start Fresh] [Copy from Previous]  │
└─────────────────────────────────────────────────────┘
After Selection Shows:

Current curriculum status: "12 lessons added" or "Empty - Start adding lessons"
Option to copy from previous year's curriculum
Option to import from template
Curriculum Structure (Hierarchical):

Units/Chapters (Optional but recommended):

Unit number (1, 2, 3...)
Unit name (Arabic & English)
Unit description
Estimated weeks to complete
Add/Remove unit button
Lessons within Unit (or standalone if no units):

For each lesson:

Basic Lesson Information:

Lesson number (auto-incremented or manual)
Lesson title (Arabic & English)
Lesson description/objectives
Student book pages (e.g., "Pages 45-48")
Exercise book pages (if applicable)
Estimated periods needed (1, 2, 3...)
Lesson type (New material, Review, Assessment, Lab work)
Teaching Resources:

Required materials/resources
Teaching notes
Vocabulary/key terms
Attachments (PDFs, videos, links)
Associated Homework Options ⭐⭐ CRITICAL: This section defines ALL possible homework that can be assigned for this lesson:

Homework Options for this Lesson:
┌─────────────────────────────────────────────────────┐
│ ✓ Student Book: Pages 49-50, Exercises 1-5         │
│ ✓ Exercise Book: Pages 23-24, All exercises        │
│ ✓ Notebook: Write summary of the lesson             │
│ ✓ Worksheet: Complete "Solar System" worksheet      │
│ ✓ Project: Build a model of the Solar System       │
│ + Add another homework option                        │
└─────────────────────────────────────────────────────┘
Each homework option includes:

Homework type (Student Book, Exercise Book, Notebook, Worksheet, Project, Online, Reading, Research)
Homework description/details (Arabic & English)
Specific pages or tasks
Estimated time to complete
Difficulty level (Easy, Medium, Hard)
Required materials
Active/Inactive (teacher can disable certain homework options)
Lesson Order:

Drag-and-drop reordering
Lesson dependencies (optional - "Lesson 5 requires Lesson 3 completion")
Actions per Lesson:

Edit lesson
Duplicate lesson
Delete lesson
Preview lesson
Mark as completed (for tracking purposes)
Bulk Actions:

Import lessons from CSV/Excel
Export curriculum to PDF
Copy all lessons to another semester/grade
Reorder all lessons
Bulk edit homework options
Save Options:

Save as draft (not visible to other teachers)
Publish (makes available for weekly plan creation)
Save template (reusable for other grades/years)
Validation:

At least one lesson required
Lesson titles must be unique within the curriculum
Cannot publish without at least one homework option per lesson (warning, not error)
Visual Display:

Science - Grade 5 - First Semester - 2025/2026

Unit 1: The Solar System (4 weeks)
├── Lesson 1: Introduction to Space
│   └── Homework: Student Book p.10-11, Exercise Book p.5
├── Lesson 2: The Sun
│   └── Homework: Student Book p.15, Notebook summary
├── Lesson 3: Planets
│   └── Homework: Exercise Book p.8-9, Build planet model
└── Lesson 4: Unit Review
    └── Homework: Review all exercises, Prepare for test

Unit 2: Forces and Motion (5 weeks)
├── Lesson 5: What is Force?
│   └── Homework: Student Book p.28-30, Worksheet
...

Total: 24 lessons across 6 units
Status: Published ✓
6. Curriculum Templates Form ⭐ NEW
Purpose: Create reusable curriculum templates

Use Case:

Experienced teacher creates curriculum for Grade 5 Science
Saves as template
Other teachers can use this template for other sections or future years
Fields:

Template name
Based on: Academic Year, Grade, Subject, Semester
Visibility: Private, School-wide, Grade-level only
Template description
All lesson data (copied from curriculum)
Allow modifications when applying (yes/no)
Actions:

Save current curriculum as template
Apply template to new curriculum
Share template with other teachers
Rate/review templates (if school-wide)
7. Section Management Form
Purpose: Create and manage sections within each grade

Fields:

Basic Information:

Parent grade (dropdown)
Section identifier (A, B, C, D... or custom)
Section name (auto-generated: "Grade 5-A" or custom)
Section name Arabic (auto-generated or custom)
Active/Inactive status
Academic year (linked to active academic year)
Capacity & Enrollment:

Maximum student capacity
Current enrollment count (auto-calculated)
Classroom/Room number
Class schedule (which periods this section uses)
Staff Assignment:

Homeroom teacher (primary teacher for this section)
Subject teachers (multi-select with subject mapping):
English → Teacher Name
Math → Teacher Name
Science → Teacher Name
Students:

Enrolled students (multi-select from student list)
Bulk import students (CSV)
Curriculum Association ⭐ NEW:

Shows which subjects have curriculum populated for this grade
Status indicators:
✓ Science: 24 lessons (Published)
✓ Math: 30 lessons (Published)
⚠ English: 10 lessons (Draft)
✗ Arabic: Not started
8. Teacher Management Form
Purpose: Manage teacher profiles

Fields:

Teacher name (Arabic & English)
Employee ID
Email address
Phone number
Subjects taught (multi-select)
Assigned sections (multi-select with subject mapping)
Curriculum permissions:
Can populate curriculum: Yes/No
Can edit curriculum: Yes/No
Subjects authorized to create curriculum for
Profile picture
User account linking (WordPress user)
9. Student Management Form
Purpose: Manage student records

Fields:

Student name (Arabic & English)
Student ID
Specific section (Grade 5-A, NOT just Grade 5)
Academic year enrolled
Date of birth
Parent contact information
Enrollment date
Profile picture
Active/Inactive status
10. Weekly Plan Creation Form ⭐⭐⭐ CRITICAL - UPDATED WITH CURRICULUM INTEGRATION
Purpose: Create weekly plan with curriculum-driven lesson and homework selection

Selection Section:

┌─────────────────────────────────────────────────────┐
│ Create Weekly Plan For:                             │
├─────────────────────────────────────────────────────┤
│ Academic Year: 2025/2026 (auto-selected)            │
│ Grade:         [Grade 5 ▼]                           │
│ Section:       [Section A ▼]                         │
│ Week Number:   [Week 3 ▼] or [Date: 14-12-2025]    │
│ Day:           [Sunday ▼]                            │
│ Period:        [Period 2 ▼]                          │
│ Subject:       [Science ▼]                           │
└─────────────────────────────────────────────────────┘
After Subject Selection: System automatically loads:

Semester (based on current date)
Available curriculum for that subject/grade/semester
Teacher's name (auto-filled)
Section info (students count, room number)
Lesson Selection ⭐⭐ CRITICAL - FROM CURRICULUM:

┌─────────────────────────────────────────────────────┐
│ Select Lesson from Curriculum:                      │
├─────────────────────────────────────────────────────┤
│ Unit: [Unit 2: Forces and Motion ▼]                 │
│                                                      │
│ Lesson: [Lesson 5: What is Force? ▼]               │
│         ├─ Pages: 28-30 (Student Book)              │
│         ├─ Duration: 2 periods                       │
│         └─ Objectives: Understand force concept...   │
│                                                      │
│ OR Search: [Search lessons...........................] │
│                                                      │
│ Lesson Progress Tracker:                            │
│ ▓▓▓▓▓▓▓░░░░░░░░░ 45% complete (11/24 lessons)      │
└─────────────────────────────────────────────────────┘
Dropdown shows:

All lessons from the curriculum
Organized by unit (if units exist)
Shows lesson number, title, and pages
Indicates which lessons were already used in previous plans
Shows next recommended lesson based on curriculum sequence
Selected Lesson Auto-Fills:

Lesson title
Student book pages
Objectives
Teaching notes
Required materials
Homework Assignment ⭐⭐⭐ CRITICAL - FROM CURRICULUM HOMEWORK OPTIONS:

Once a lesson is selected, the homework section dynamically populates:

┌─────────────────────────────────────────────────────┐
│ Assign Homework (from selected lesson):             │
├─────────────────────────────────────────────────────┤
│ ☐ Student Book:                                     │
│   [▼ Pages 49-50, Exercises 1-5]                    │
│   └─ Estimated time: 20 minutes                     │
│                                                      │
│ ☑ Exercise Book:                                    │
│   [▼ Pages 23-24, All exercises]                    │
│   └─ Estimated time: 15 minutes                     │
│                                                      │
│ ☑ Notebook:                                         │
│   [▼ Write summary of the lesson]                   │
│   └─ Estimated time: 10 minutes                     │
│                                                      │
│ ☐ Worksheet:                                        │
│   [▼ Complete "Forces" worksheet]                   │
│   └─ Estimated time: 25 minutes                     │
│                                                      │
│ ☐ Project:                                          │
│   [▼ Build a model demonstrating force]             │
│   └─ Estimated time: 2 days                         │
│                                                      │
│ ☐ No homework (لا يوجد)                             │
└─────────────────────────────────────────────────────┘

Total estimated homework time: 45 minutes
Due date: [16-12-2025 ▼] (Optional)
Key Features:

Checkboxes to select which homework to assign
Dropdowns populated from curriculum's homework options for that lesson
If no homework defined in curriculum: Show "No homework available - Add to curriculum"
Can select multiple homework types
Can add custom homework (not in curriculum) with warning
Shows estimated completion time
Option to set due date
Option to modify homework text for this specific assignment
Custom Homework Option (if teacher wants to add something not in curriculum):

+ Add custom homework (not from curriculum)
  Type: [Worksheet ▼]
  Description: [................................................]
  ⚠ Note: This homework is not saved to curriculum
  □ Save to curriculum for future use
Lesson Details Section:

Lesson objectives (auto-filled from curriculum, editable)
Teaching method (optional additional notes)
Resources used (auto-filled from curriculum, editable)
Actual pages covered (if different from planned)
Assessment/Notes:

Teacher notes (text area)
Lesson completion status (Completed, Partially completed, Not completed)
Student participation notes
Challenges encountered
Rating system (1-5 stars) - lesson effectiveness
Attachments (upload additional files/links)
Curriculum Progress Display ⭐:

Science Curriculum Progress (Grade 5-A, First Semester):
Unit 1: Complete ✓ (4/4 lessons)
Unit 2: In Progress... (2/5 lessons) ← Current lesson
Unit 3: Not started (0/6 lessons)
Unit 4: Not started (0/5 lessons)
Action Buttons:

Save as draft
Publish (makes visible to students/parents)
Duplicate to other sections (copies lesson selection and homework)
Print
Export (PDF/Excel)
Share with parents
Copy from another section's plan
View curriculum (opens curriculum in modal)
Report issue with curriculum (feedback to curriculum creator)
Validation:

Must select a lesson from curriculum
Warning if lesson was already used in previous week
Warning if skipping lessons in sequence
Warning if no homework assigned
Cannot publish without lesson selection
Smart Suggestions:

"Next lesson in sequence: Lesson 6"
"This lesson typically takes 2 periods - you've allocated 1"
"Other sections are on Lesson 8 - you're on Lesson 5"
11. Homework Management Dashboard ⭐ NEW
Purpose: Centralized view of all homework assignments

Features:

Filter by:
Academic year
Semester
Grade
Section
Subject
Date range
Homework type
Status (Assigned, Due today, Overdue, Completed)
Display:

Homework Assignments - Grade 5-A - Science

Week 1:
├── Lesson 1 homework
│   ├─ Student Book: Pages 10-11 ✓ (from curriculum)
│   └─ Due: 05-06-2025 | Status: Completed
├── Lesson 2 homework
│   ├─ Exercise Book: Pages 5-6 ✓ (from curriculum)
│   ├─ Notebook: Summary ✓ (from curriculum)
│   └─ Due: 08-06-2025 | Status: In Progress

Week 2:
├── Lesson 3 homework
│   └─ ...
Actions:

View homework details
Edit homework (if not from curriculum, or override)
Track student submissions (if tracking enabled)
Send reminders
Generate homework report
12. Curriculum Status Dashboard ⭐⭐ NEW - IMPORTANT
Purpose: Monitor curriculum population status across the school

Access: Administrators and Grade Coordinators

Display Matrix:

Curriculum Status - 2025/2026 Academic Year

                First Semester              Second Semester
            Math  Science English Arabic   Math Science English Arabic
Grade 1     ✓     ✓       ✓       ✓        ✓    ⚠       ✓       ✗
Grade 2     ✓     ✓       ✓       ✓        ✓    ✓       ✓       ✓
Grade 3     ✓     ⚠       ✓       ✓        ✗    ✗       ⚠       ✗
Grade 4     ✓     ✓       ✓       ✓        ✓    ✓       ✓       ✓
Grade 5     ✓     ✓       ✓       ⚠        ✓    ✓       ⚠       ✗

Legend:
✓ Complete (published)
⚠ In Progress (draft)
✗ Not Started
Drill Down: Click any cell to see:

Number of lessons
Who created it
Last modified date
Status
Quick actions (View, Edit, Copy, Publish)
Alerts:

"Science curriculum for Grade 3 Second Semester is missing"
"Arabic curriculum for Grade 5 First Semester needs review"
"Teacher Ahmed hasn't started Grade 1 Math Second Semester"
Bulk Actions:

Send reminders to teachers
Lock/unlock curriculum editing
Archive old academic year curricula
Generate completion report
13. Curriculum Progress Tracker ⭐ NEW
Purpose: Track how far each section has progressed through curriculum

Selection:

Academic Year
Semester
Grade
Subject
Display:

Science Curriculum Progress - Grade 5 - First Semester

Section A: ▓▓▓▓▓▓▓▓░░░░ 68% (16/24 lessons)
  Current: Unit 3, Lesson 16
  Status: On track ✓
  Last updated: 14-12-2025

Section B: ▓▓▓▓▓▓░░░░░░ 58% (14/24 lessons)
  Current: Unit 3, Lesson 14
  Status: Slightly behind ⚠
  Last updated: 13-12-2025

Section C: ▓▓▓▓▓▓▓▓▓░░░ 75% (18/24 lessons)
  Current: Unit 4, Lesson 18
  Status: Ahead ↑
  Last updated: 14-12-2025
Features:

Visual progress bars
Lesson-by-lesson breakdown
Comparison across sections
Projected completion date
Recommendations for sections falling behind
Export progress report
14. Curriculum Copy/Migration Tools ⭐ NEW
Purpose: Efficiently reuse and adapt curriculum

Copy Curriculum Between Years:

Source:
  Academic Year: 2024/2025
  Grade: Grade 5
  Subject: Science
  Semester: First Semester

Target:
  Academic Year: 2025/2026
  Grade: Grade 5
  Subject: Science
  Semester: First Semester

Options:
  ☑ Copy all lessons
  ☑ Copy homework options
  ☑ Copy teaching notes
  ☐ Copy attachments
  ☐ Update lesson numbers
  ☐ Reset progress tracking

[Copy Curriculum]
Copy Curriculum Between Grades:

Useful for similar content at different levels
Automatic adjustment suggestions
Bulk modification tools
Share Curriculum:

Export curriculum as JSON/Excel
Import curriculum from file
Share with other schools (if multi-school system)
15. Bulk Weekly Plan Form ⭐ UPDATED
Purpose: Create multiple plans efficiently

Fields:

Academic Year (auto-selected)
Section selection (multi-select specific sections)
Date range selector
Subject selection
Lesson selection mode:
Same lesson for all sections (copies identical lesson)
Sequential lessons (each section gets next lesson in their sequence)
Custom per section
Homework selection:
Same homework for all
Based on selected lesson's homework options
Custom per section
Review before publish
Example Use Case: Teacher wants to create plans for Sections A, B, C for next week:

Selects all three sections
Selects Science
Chooses "Sequential lessons" mode
System shows:
Section A: Next lesson = Lesson 6
Section B: Next lesson = Lesson 5
Section C: Next lesson = Lesson 7
Auto-assigns homework from each lesson's curriculum
Teacher reviews and publishes all at once
16. Curriculum Approval Workflow ⭐ NEW - OPTIONAL
Purpose: Quality control for curriculum before it's used

Workflow:

Teacher creates curriculum → Status: Draft
Teacher submits for review → Status: Under Review
Grade Coordinator/Subject Head reviews
Approver can:
Approve → Status: Published (available for weekly plans)
Request changes → Status: Needs Revision
Reject → Status: Rejected
Teacher receives notification and can revise
Approval Form:

Curriculum details (read-only)
Review checklist:
☐ All lessons have clear objectives
☐ Homework is age-appropriate
☐ Covers all required topics
☐ Lesson sequence is logical
☐ No duplicate lessons
Comments/feedback
Approval decision
Notify teacher
17. Report Generation Form ⭐ UPDATED
Purpose: Generate various reports including curriculum-related reports

New Report Types:

Curriculum Reports:

Curriculum Completion Status (by grade/subject/semester)
Lessons Usage Report (which lessons are used most in weekly plans)
Homework Assignment Frequency (which homework types are assigned most)
Curriculum vs. Actual Progress (planned vs. actual curriculum coverage)
Teacher Curriculum Contribution Report
Weekly Plan Reports:

Weekly plan summary by section
Monthly overview by section
Section comparison report
Semester completion rate by section
Homework statistics by section
Curriculum progress by section
Student progress (individual or section-wide)
Filters:

Academic Year ⭐ NEW
Semester ⭐ NEW
Date range
Grade
Specific section(s)
Subject
Teacher
Student
Format: PDF, Excel, Print

18. Parent Portal Settings Form ⭐ UPDATED
Purpose: Configure parent access

Fields:

Enable parent access (yes/no)
Registration method
Section-specific access
Information visibility settings:
Show weekly plans
Show homework
Show curriculum progress ⭐ NEW
Show lesson objectives ⭐ NEW
Show teacher notes
Show ratings
Show section schedule
Notification settings:
New weekly plan published
New lesson started ⭐ NEW
Homework assigned
Homework due reminders
Curriculum milestone reached ⭐ NEW (e.g., "Unit completed")
19. Teacher Dashboard Form ⭐ UPDATED
Purpose: Personalized dashboard for teachers

Widgets:

My Sections:

Shows all assigned sections
Quick stats per section
Curriculum Status ⭐ NEW:

My Curriculum Responsibilities:

Grade 5 Science - First Semester:
  Status: ✓ Published (24 lessons)
  Last updated: 01-06-2025
  Used in: 12 weekly plans

Grade 5 Science - Second Semester:
  Status: ⚠ Draft (8/24 lessons)
  Deadline: 15-12-2025
  [Continue editing]

Grade 6 Science - First Semester:
  Status: ✗ Not started
  Deadline: 01-06-2025
  [Start now]
Upcoming Plans ⭐ UPDATED:

Shows plans that need to be created
Suggests next lessons based on curriculum sequence
"Section A: Next lesson - Lesson 7: Newton's Laws"
Quick Actions:

Create weekly plan
Edit curriculum
View curriculum progress
Generate reports
20. Notification Settings Form ⭐ UPDATED
Purpose: Configure automated notifications

New Notification Events:

Curriculum submitted for approval
Curriculum approved/rejected
Curriculum deadline approaching
Section falling behind curriculum
Homework from curriculum not assigned (reminder)
New weekly plan published
Homework assigned
Homework due reminder
21. Import/Export Form ⭐ UPDATED
Purpose: Data migration and backup

Import Options:

Curriculum from Excel ⭐ NEW:
Template download available
Columns: Lesson Number, Title, Pages, Homework Options, etc.
Validation before import
Curriculum from previous system ⭐ NEW
Students (with sections)
Teachers (with section assignments)
Weekly plans
Export Options:

Curriculum to Excel ⭐ NEW
Curriculum to PDF ⭐ NEW (formatted curriculum guide)
Weekly plans by section
Homework assignments
Progress reports
22. Curriculum Versioning ⭐ NEW - ADVANCED FEATURE
Purpose: Track changes to curriculum over time

Features:

Every curriculum edit creates a new version
Version history shows:
Date/time of change
Who made the change
What changed (diff view)
Ability to revert to previous version
Compare versions side-by-side
Lock curriculum after academic year starts (optional)
Allow minor edits even when locked (typos, notes)
Use Case:

Teacher accidentally deletes lessons
Can revert to previous version
Admin can see who changed what
23. Calendar Integration Form ⭐ UPDATED
Purpose: Sync with school calendar and curriculum

Fields:

Academic events (same as before)
Curriculum milestones ⭐ NEW:
Unit completion targets
Curriculum review periods
Assessment periods
Mid-semester curriculum check
Event applies to: All school, specific grade(s), specific section(s)
Curriculum pacing alerts ⭐ NEW:
Notify if section behind by X lessons
Suggest catch-up plans
24. Curriculum Analytics Dashboard ⭐ NEW - ADVANCED
Purpose: Analyze curriculum usage and effectiveness

Metrics:

Most used lessons
Most assigned homework types
Average time per lesson (if tracked)
Lesson difficulty ratings (from teacher feedback
Continue

12:31 AM
)

Correlation between lessons and student performance
Homework completion rates by lesson
Visualizations:

Heatmap of lesson usage across sections
Timeline of curriculum progress
Comparison of planned vs. actual pace
Homework type distribution
Insights:

"Lesson 12 is consistently skipped - consider removing"
"Sections spend 2x longer on Unit 3 than planned"
"Exercise Book homework has 95% completion, Projects have 60%"
Updated Database Structure
New/Updated Tables:
wp_school_academic_years ⭐⭐ NEW - CRITICAL
sql
   id
   year_name (e.g., "2025/2026")
   year_name_ar
   start_date
   end_date
   is_current (boolean)
   is_active (boolean)
   description
   created_at
   updated_at
wp_school_semesters ⭐⭐ NEW - CRITICAL
sql
   id
   academic_year_id (FK)
   semester_number (1, 2, 3)
   semester_name
   semester_name_ar
   start_date
   end_date
   number_of_weeks
   created_at
wp_school_semester_holidays ⭐ NEW
sql
   id
   semester_id (FK)
   holiday_name
   holiday_name_ar
   start_date
   end_date
   affects_curriculum (boolean)
wp_school_curriculum ⭐⭐⭐ NEW - CRITICAL
sql
   id
   academic_year_id (FK)
   grade_id (FK)
   subject_id (FK)
   semester_id (FK)
   created_by_teacher_id (FK)
   status (draft, under_review, published, archived)
   version_number
   created_at
   updated_at
   published_at
   approved_by_user_id (FK, nullable)
   approval_notes
wp_school_curriculum_units ⭐⭐ NEW
sql
   id
   curriculum_id (FK)
   unit_number
   unit_name
   unit_name_ar
   unit_description
   estimated_weeks
   display_order
wp_school_curriculum_lessons ⭐⭐⭐ NEW - CRITICAL
sql
   id
   curriculum_id (FK)
   unit_id (FK, nullable - if using units)
   lesson_number
   lesson_title
   lesson_title_ar
   lesson_description
   learning_objectives
   student_book_pages
   exercise_book_pages
   estimated_periods
   lesson_type (new, review, assessment, lab)
   required_materials
   teaching_notes
   vocabulary
   display_order
   created_at
   updated_at
wp_school_curriculum_homework_options ⭐⭐⭐ NEW - CRITICAL
sql
   id
   lesson_id (FK)
   homework_type (student_book, exercise_book, notebook, worksheet, project, online, reading, research)
   homework_description
   homework_description_ar
   specific_pages
   estimated_time_minutes
   difficulty_level (easy, medium, hard)
   required_materials
   is_active (boolean)
   display_order
   created_at
wp_school_curriculum_attachments ⭐ NEW
sql
   id
   lesson_id (FK)
   file_name
   file_path
   file_type
   uploaded_at
wp_school_weekly_plans ⭐⭐ UPDATED
sql
   id
   academic_year_id (FK) ⭐ NEW
   semester_id (FK) ⭐ NEW
   section_id (FK)
   subject_id (FK)
   week_number
   plan_date
   day_of_week
   period_number
   curriculum_lesson_id (FK) ⭐⭐ NEW - CRITICAL
   lesson_title_override (nullable - if teacher modifies)
   student_book_pages_override
   lesson_objectives_override
   teaching_method_notes
   teacher_notes
   lesson_completion_status
   rating
   created_by_teacher_id (FK)
   created_at
   updated_at
   published_at
   duplicated_from_plan_id (FK, nullable)
wp_school_plan_homework ⭐⭐⭐ NEW - REPLACES inline homework
sql
    id
    weekly_plan_id (FK)
    curriculum_homework_option_id (FK) ⭐⭐ CRITICAL - links to curriculum
    homework_description_override (nullable)
    is_custom (boolean) ⭐ if not from curriculum
    due_date
    assigned_date
    is_active (boolean)
    created_at
wp_school_curriculum_versions ⭐ NEW - for versioning
sql
    id
    curriculum_id (FK)
    version_number
    version_data (JSON - full curriculum snapshot)
    created_by_user_id (FK)
    created_at
    change_description
wp_school_curriculum_progress ⭐ UPDATED
sql
    id
    section_id (FK)
    subject_id (FK)
    curriculum_id (FK) ⭐ NEW
    current_lesson_id (FK) ⭐ UPDATED - links to curriculum lesson
    last_completed_lesson_id (FK)
    lessons_completed_count
    total_lessons_count
    completion_percentage
    last_updated
wp_school_sections - EXISTING, no major changes
wp_school_grades - EXISTING, no major changes
wp_school_subjects - EXISTING, may add curriculum_required (boolean)
wp_school_teachers - EXISTING, may add curriculum_permissions
wp_school_students - EXISTING, already has section_id
Critical Database Relationships
sql
-- Academic Structure
Academic_Year (1) → Semesters (Many)
Semester (1) → Holidays (Many)

-- Curriculum Structure
Academic_Year + Grade + Subject + Semester (1) → Curriculum (1)
Curriculum (1) → Units (Many)
Curriculum (1) → Lessons (Many)
Unit (1) → Lessons (Many)
Lesson (1) → Homework_Options (Many)
Lesson (1) → Attachments (Many)

-- Weekly Plans Connection
Weekly_Plan (1) → Curriculum_Lesson (1) ⭐⭐ CRITICAL LINK
Weekly_Plan (1) → Plan_Homework (Many)
Plan_Homework (1) → Curriculum_Homework_Option (1) ⭐⭐ CRITICAL LINK

-- Progress Tracking
Section + Subject (1) → Curriculum_Progress (1)
Curriculum_Progress → Current_Lesson (FK)

-- Versions
Curriculum (1) → Curriculum_Versions (Many)
Key Queries Examples
sql
-- Get all homework options for a specific lesson
SELECT * FROM wp_school_curriculum_homework_options
WHERE lesson_id = ? AND is_active = 1
ORDER BY display_order;

-- Get curriculum progress for a section
SELECT 
  cp.*,
  cl.lesson_title,
  COUNT(wp.id) as plans_created
FROM wp_school_curriculum_progress cp
LEFT JOIN wp_school_curriculum_lessons cl ON cp.current_lesson_id = cl.id
LEFT JOIN wp_school_weekly_plans wp ON wp.section_id = cp.section_id 
  AND wp.curriculum_lesson_id = cl.id
WHERE cp.section_id = ? AND cp.subject_id = ?
GROUP BY cp.id;

-- Get all lessons in curriculum with their homework counts
SELECT 
  cl.*,
  COUNT(DISTINCT cho.id) as homework_options_count,
  COUNT(DISTINCT wp.id) as times_used_in_plans
FROM wp_school_curriculum_lessons cl
LEFT JOIN wp_school_curriculum_homework_options cho ON cl.id = cho.lesson_id
LEFT JOIN wp_school_weekly_plans wp ON cl.id = wp.curriculum_lesson_id
WHERE cl.curriculum_id = ?
GROUP BY cl.id
ORDER BY cl.display_order;

-- Check if curriculum exists for specific criteria
SELECT * FROM wp_school_curriculum
WHERE academic_year_id = ?
  AND grade_id = ?
  AND subject_id = ?
  AND semester_id = ?
  AND status = 'published';

-- Get next lesson in sequence for a section
SELECT cl.* FROM wp_school_curriculum_lessons cl
WHERE cl.curriculum_id = ?
  AND cl.display_order > (
    SELECT current_lesson_display_order 
    FROM wp_school_curriculum_progress
    WHERE section_id = ?
  )
ORDER BY cl.display_order ASC
LIMIT 1;
```

---

## Implementation Priority (Updated)

### **Phase 1 (MVP - Weeks 1-4)**:
1. ✅ Academic Year Management Form (Admin)
2. ✅ Semester Management (within Academic Year form)
3. ✅ Grade Management
4. ✅ Subject Management
5. ✅ Section Management
6. ✅ Teacher/Student Management
7. ✅ Curriculum Population Form (Teacher) - CRITICAL
8. ✅ Weekly Plan Creation with Curriculum Integration - CRITICAL
9. ✅ Basic curriculum status dashboard

### **Phase 2 (Weeks 5-8)**:
1. Curriculum approval workflow
2. Curriculum templates
3. Homework management dashboard
4. Curriculum progress tracker
5. Section comparison for curriculum progress
6. Parent portal with curriculum visibility
7. Teacher dashboard with curriculum status
8. Bulk weekly plan creation

### **Phase 3 (Weeks 9-12)**:
1. Curriculum versioning
2. Curriculum copy/migration tools
3. Advanced reports (curriculum analytics)
4. Curriculum import/export (Excel)
5. Calendar integration with curriculum milestones
6. Notification system for curriculum events
7. Mobile app optimization

### **Phase 4 (Future Enhancements)**:
1. Curriculum analytics dashboard
2. AI-powered curriculum suggestions
3. Student performance correlation with lessons
4. Collaborative curriculum editing
5. Curriculum marketplace (share between schools)
6. Video/multimedia integration for lessons
7. Homework submission tracking

---

## User Flow Example: Complete Workflow

### **1. Admin Setup (Start of Year)**:
```
June 1, 2025:
1. Admin creates Academic Year "2025/2026"
   - Start: 01-06-2025
   - End: 30-06-2026
2. Defines First Semester (01-06 to 15-12)
3. Defines Second Semester (01-01 to 30-06)
4. Adds holidays
5. System ready ✓
```

### **2. Teacher Populates Curriculum (Before School Starts)**:
```
Teacher Ahmed - Science Grade 5:
1. Goes to "Curriculum Population"
2. Selects:
   - Academic Year: 2025/2026
   - Grade: Grade 5
   - Subject: Science
   - Semester: First Semester
3. Adds Unit 1: The Solar System
4. Adds Lesson 1: Introduction to Space
   - Pages: 10-12
   - Homework options:
     ✓ Student Book: Pages 13-14, Ex. 1-3
     ✓ Exercise Book: Page 5, All exercises
     ✓ Notebook: Draw the solar system
5. Adds Lesson 2, 3, 4... (24 total lessons)
6. Publishes curriculum ✓
7. System shows: "Grade 5 Science First Semester: 24 lessons published"
```

### **3. Teacher Creates Weekly Plan (During School Year)**:
```
December 14, 2025 (Week 3):
1. Teacher logs in
2. Clicks "Create Plan" for Grade 5-A
3. Selects:
   - Date: 14-12-2025 (Sunday)
   - Period: 2
   - Subject: Science
4. System shows: "Curriculum available: 24 lessons"
5. System suggests: "Next lesson for this section: Lesson 7"
6. Teacher selects Lesson 7: Newton's First Law
   - Auto-fills: Pages 28-30
7. Homework section auto-populates:
   ☑ Student Book: Pages 31-32, Ex. 1-4 (from curriculum)
   ☑ Exercise Book: Page 15 (from curriculum)
   ☐ Notebook: Summary (not selected)
8. Teacher adds notes: "Students struggled with concept, review next class"
9. Publishes plan ✓
10. System updates: Section 5-A progress: 7/24 lessons (29%)
11. Parents receive notification: "New Science plan for Grade 5-A"
```

### **4. Parent Views Plan**:
```
Parent portal shows:
- Date: Sunday, December 14, 2025
- Subject: Science
- Lesson: Newton's First Law (Unit 2, Lesson 7)
- Pages covered: 28-30
- Homework assigned:
  • Student Book: Pages 31-32, Exercises 1-4
  • Exercise Book: Page 15
- Estimated time: 25 minutes
- Progress: Your child's section has completed 29% of Science curriculum
```

### **5. Admin Monitors (Mid-Semester)**:
```
Admin dashboard shows:
Grade 5 Science - First Semester Progress:
- Section A: 29% (7/24) - On track ✓
- Section B: 21% (5/24) - Behind ⚠
- Section C: 33% (8/24) - Ahead ↑

Action: Send reminder to Section B teacher
```

---

## Data Validation Rules

1. **Academic Year**:
   - Only one academic year can be "current" at a time
   - End date must be after start date
   - Cannot delete if curriculum exists

2. **Semesters**:
   - Must be within academic year dates
   - Cannot overlap
   - Minimum 1 semester required

3. **Curriculum**:
   - Unique constraint: academic_year + grade + subject + semester
   - Cannot publish without at least 1 lesson
   - Cannot delete if used in weekly plans

4. **Lessons**:
   - Lesson numbers must be unique within curriculum
   - At least 1 homework option recommended (warning)

5. **Weekly Plans**:
   - Must reference existing curriculum lesson
   - Cannot reference lesson from different grade/subject
   - Must select at least 1 homework (warning)

6. **Homework**:
   - If curriculum_homework_option_id is null, is_custom must be true
   - Due date must be after assignment date

---

## API Endpoints (for future reference)

### Curriculum Endpoints:
```
GET    /api/curriculum/list
GET    /api/curriculum/{id}
POST   /api/curriculum/create
PUT    /api/curriculum/{id}/update
DELETE /api/curriculum/{id}/delete
POST   /api/curriculum/{id}/publish
GET    /api/curriculum/{id}/lessons
POST   /api/curriculum/{id}/lessons/add
GET    /api/curriculum/homework-options/{lesson_id}
```

### Weekly Plan Endpoints:
```
GET    /api/plans/{section_id}
POST   /api/plans/create
PUT    /api/plans/{id}/update
GET    /api/plans/{id}/homework
POST   /api/plans/{id}/assign-homework
```

### Progress Endpoints:
```
GET    /api/progress/section/{section_id}/subject/{subject_id}
PUT    /api/progress/update
GET    /api/progress/compare/{grade_id}
This comprehensive updated analysis now includes:

✅ Admin-defined academic years with semesters
✅ Teacher-populated curriculum with lessons and homework options
✅ Curriculum-driven weekly plan creation
✅ Homework assignment from curriculum lesson pool
✅ Complete database structure with all relationships
✅ Full user workflows from start to finish
✅ All necessary forms and dashboards
✅ Progress tracking integrated with curriculum






