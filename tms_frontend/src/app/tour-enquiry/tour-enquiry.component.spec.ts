import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TourEnquiryComponent } from './tour-enquiry.component';

describe('TourEnquiryComponent', () => {
  let component: TourEnquiryComponent;
  let fixture: ComponentFixture<TourEnquiryComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TourEnquiryComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TourEnquiryComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
