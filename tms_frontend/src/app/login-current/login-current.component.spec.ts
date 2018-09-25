import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LoginCurrentComponent } from './login-current.component';

describe('LoginCurrentComponent', () => {
  let component: LoginCurrentComponent;
  let fixture: ComponentFixture<LoginCurrentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LoginCurrentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LoginCurrentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
