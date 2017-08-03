import { Component, OnInit } from '@angular/core';
import { APIService} from '../service/api.service';

@Component({
  selector: 'app-course-list',
  templateUrl: './course-list.component.html',
  styleUrls: ['./course-list.component.css']
})
export class CourseListComponent implements OnInit {

  constructor(private api:APIService) { }
  
  ngOnInit() {
  }

   newName: string = "";
  newLecture: string = "";
  addData(){
      this.api.courseList.push({"name": this.newName, "lecture": this.newLecture })
      this.newName= "";
      this.newLecture= "";
      
    }


  }
