function add_summary_note() {
   $('.summernote').summernote();
}

function addNote() {
	$('.summernote').summernote();
}
function edit_service(id){
  show("loader")
  setValue("service_id",id)
	let url=getValue("url")+"index.php/get_service_details"
	let request=url+"/"+id
	connect(request,"",false,function(outcome){
       let data=JSON.parse(outcome)
       setValue("service_video",data.service_video)
       setValue("service_content",data.service_details)
       setValue("service_description",data.service_description)
       setValue("service_name",data.service_name)
       get("image_for_service").src=getValue("url")+"images/service/"+data.service_picture
       hide("loader")
    })
  $('.summernote').summernote();
}
function edit_subject(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_subject_details"
  let request=url+"/"+id
	connect(request,"",false,function(outcome){
       let data=JSON.parse(outcome)
       //alert(data.service_picture)
       setValue("name",data.name)
       hide("loader")
       
    })
  $('.summernote').summernote();
}
function edit_class(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_class_details"
  let request=url+"/"+id
	connect(request,"",false,function(outcome){
       let data=JSON.parse(outcome)
       //alert(data.service_picture)
       setValue("name",data.name)
       hide("loader")
       
    })
  $('.summernote').summernote();
}

function edit_audio(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_audio_details"
	let request=url+"/"+id
 
	connect(request,"",false,function(outcome){
		  // alert(outcome)
       let data=JSON.parse(outcome)
       setValue("title",data.title)
       setValue("file_now",data.file)
       setValue("tag",data.tag)
       get("picture_edit").src=getValue("url")+"images/audios/"+data.cover
       setValue("picture_now",data.cover)

       var selected=get("class")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.class){
	          selected.selectedIndex=i
	          break
	        }
	      }

      selected=get("category")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.category){
	          selected.selectedIndex=i
	          break
	        }
	      }
        hide("loader")
    })
  $('.summernote').summernote();
}

function edit_video(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_video_details"
	let request=url+"/"+id
 
	connect(request,"",false,function(outcome){
		   //alert(outcome)
       let data=JSON.parse(outcome)
       setValue("title",data.title)
       setValue("link",data.link)
       setValue("tag",data.tag)

       var selected=get("class")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.class){
	          selected.selectedIndex=i
	          break
	        }
	      }

      selected=get("category")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.category){
	          selected.selectedIndex=i
	          break
	        }
	      }
        hide("loader")
    })
  $('.summernote').summernote();
}
function edit_book(id){
  show("loader")
  setValue("book_isbn",id)
	let url=getValue("url")+"home/get_book_details"
	let request=url+"/"+id
  
	connect(request,"",false,function(outcome){
		//alert(outcome)
       let data=JSON.parse(outcome)
       //alert(data.service_picture)
       setValue("book_name",data.book_name)
       setValue("author",data.author)
       setValue("file_now",data.file)
       setValue("book_pages",data.book_pages)
       setValue("summary",data.summary)
       setValue("tags",data.tags)
       setValue("publisher",data.publisher)
       setValue("time",data.time)
       setValue("edition",data.edition)
       setValue("language",data.langauge)
       setValue("topics",data.topics)
       get("picture_edit").src=getValue("url")+"images/books-media/"+data.cover_page
       setValue("picture_now",data.cover_page)

       var selected=get("class")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.class){
	          selected.selectedIndex=i
	          break
	        }
	      }

      selected=get("category")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.category){
	          selected.selectedIndex=i
	          break
	        }
	      }
        hide("loader")
    })
  $('.summernote').summernote();
}

function edit_event(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"get_event_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  //alert(outcome)
       let data=JSON.parse(outcome)
       // alert(data.service_picture)

       setValue("event_name_edit",data.event_name)
       setValue("event_start_date_edit",data.event_start_date)
       setValue("event_start_time_edit",data.event_start_time)
       setValue("event_details_edit",data.event_details)
       setValue("event_end_date_edit",data.event_end_date)
       setValue("event_end_time_edit",data.event_end_time)
       setValue("event_location_edit",data.event_location)
       setValue("event_artwork_hidden",data.event_artwork)
       get("event_artwork_edit").src=getValue("url")+"assets/images/event/"+data.event_artwork

     // hide("loader")
    })
    $('.summernote').summernote();
}


function edit_news(id){
  //show("loader")
  setValue("slug",id);
  let url=getValue("url")+"news/get_details"
  let request=url+"/"+id
  
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  console.log(outcome)
       let data=JSON.parse(outcome)
       //alert(data)

       setValue("title",data.title)
       setValue("author",data.author)
       setValue("content",data.content)
       setValue("current_picture",data.picture_url)
       get("picture_edit").src=getValue("url")+"images/news/"+data.picture_url

      //hide("loader")
    })
    $('.summernote').summernote();
}
function edit_member(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_member_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(data)

       setValue("shortname",data.shortname)
       setValue("fullname",data.fullname)
       setValue("profile",data.profile)
       setValue("email",data.email)
       setValue("phone",data.phone)
       setValue("website",data.website)
       setValue("campus_current",data.campus)
       get("campus_edit").src=getValue("url")+"assets/images/members/"+data.campus

      //hide("loader")
    })
    $('.summernote').summernote();
}
function edit_student(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_student_details"
	let request=url+"?id="+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		   //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(data)

       setValue("name",data.name)
       setValue("email",data.email)
       //setValue("phone",data.phone)
       setValue("email",data.email)

       var selected=get("class")
	      for(var i=0;i<selected.options.length;i++){
	        if(selected.options[i].value==data.class){
	          selected.selectedIndex=i
	          break
	        }
	      }

     // hide("loader")
    })
    $('.summernote').summernote();
}
function edit_team(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_team_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		   //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(data)

       setValue("name",data.name)
       setValue("position",data.position)
       setValue("phone",data.profile)
       setValue("email",data.email)
       setValue("facebook",data.phone)
       setValue("twitter",data.twitter)
       setValue("picture_now",data.picture)
       setValue("skills",data.skills)
       setValue("about",data.about)
       get("picture_edit").src=getValue("url")+"assets/images/team/"+data.picture

      //hide("loader")
    })
    $('.summernote').summernote();
}
function edit_user(id){
  show("loader")
  setValue("username",id)
  hide("loader")
}
function edit_gallery(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_gallery_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(data)

       setValue("name",data.name)
       setValue("category",data.category)
       setValue("details",data.details)
       setValue("caption_by",data.caption_by)
       setValue("picture_edit_current",data.picture)
       get("picture_edit").src=getValue("url")+"assets/images/gallery/"+data.picture

      //hide("loader")
    })
    $('.summernote').summernote();
}
function edit_publication(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_publication_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(data.url)

       setValue("name",data.name)
       setValue("url_now",data.url)
       setValue("cost",data.cost)
       setValue("details",data.details)
       setValue("time",data.time)
       setValue("picture_now",data.picture)
       get("picture_edit").src=getValue("url")+"assets/images/publications/"+data.picture

      hide("loader")
    })
    $('.summernote').summernote();
}
function edit_research(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_research_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  //alert(outcome)
       let data=JSON.parse(outcome)

       setValue("name",data.name)
       setValue("url_now",data.url)
       setValue("details",data.details)
       setValue("time",data.time)
       setValue("owner",data.owner)
       setValue("downloads",data.downloads)
       setValue("picture_now",data.picture)
       get("picture_edit").src=getValue("url")+"assets/images/research/"+data.picture

      hide("loader")
    })
    $('.summernote').summernote();
}
function edit_downloads(id){
  show("loader")
  setValue("id",id)
	let url=getValue("url")+"home/get_download_details"
	let request=url+"/"+id
	
	//alert(request)
	connect(request,"",false,function(outcome){
		  //alert(outcome)
       let data=JSON.parse(outcome)

       setValue("name",data.name)
       setValue("url_now",data.url)
       setValue("downloads",data.downloads)
       setValue("picture_now",data.picture)
       get("picture_edit").src=getValue("url")+"assets/images/downloads/"+data.picture

      hide("loader")
    })
    $('.summernote').summernote();
}

function auto_adjust(start,end){
  setValue(end,getValue(start))
}
function edit_company(id){
     show("loader")
     try{
      $('.summernote').summernote();
     }catch{
      hide("loader")
     }
     hide("loader")
}

function edit_company_policy(id){
  show("loader")
  setValue("company_identify",id)
  let url=getValue("url")+"index.php/get_company_details"
  let request=url+"/"+id
  
  connect(request,"",false,function(outcome){
      // alert(outcome)
       let data=JSON.parse(outcome)
       setValue("company_environmental_policy",data.company_environmental_policy)
       hide("loader")
    })

     $('.summernote').summernote();
}

function reflesh(){
   window.location=location
}

function edit_activism(id){
    setValue("slug",id)
	let url=`get_activism_details/${id}`
	connect(url,"",false,function(outcome){
		console.log(outcome)
       let data=JSON.parse(outcome)
       setValue("current_picture",data.picture_url)
       setValue("content",data.content)
       setValue("title",data.title)
       get("picture_edit").src=getValue("url")+"images/activism/"+data.picture_url
    })
}


function edit_children_corner(id){
	setValue("slug",id)
	let url=`children-corner_details/${id}`
	connect(url,"",false,function(outcome){
		console.log(outcome)
		let data=JSON.parse(outcome)
		setValue("current_picture",data.picture_url)
		setValue("content",data.content)
		setValue("title",data.title)
		get("picture_edit").src=getValue("url")+"images/children_corner/"+data.picture_url
	})
}


function edit_event(id){
	setValue("slug",id)
	let url=`events_details/${id}`
	connect(url,"",false,function(outcome){
		console.log(outcome)
		let data=JSON.parse(outcome)
		setValue("name",data.name)
		setValue("place",data.place)
		setValue("time",data.time)
		setValue("content",data.content)
		setValue("occation_date",data.occation_date)
	})
}



function edit_slider(id){
  setValue("slider_id",id)
  let url=getValue("url")+"index.php/get_slider_details"
  let request=url+"/"+id
  //alert(request)
  connect(request,"",false,function(outcome){
       //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(outcome)
       //alert(data.service_picture)
       setValue("slider_heading",data.slider_heading)
       setValue("slider_subheading",data.slider_subheading)
       get("slider_image").src=getValue("url")+"images/slider/"+data.slider_picture
       
    })

  //adding summary note
  add_summary_note()
}

function edit_product(id){
  show("loader")
  setValue("product_id",id)
  let url=getValue("url")+"index.php/get_product_details"
  let request=url+"/"+id
  // alert(request)
  connect(request,"",false,function(outcome){
       //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(outcome)
       //alert(data.service_picture)
       setValue("product_name",data.product_name)
       setValue("product_description",data.product_description)
       get("product_image_edit").src=getValue("url")+"images/product/"+data.product_picture
       hide("loader")
    })
  //adding summary note
  add_summary_note()
}

function edit_equipment(id){
  show("loader")
  setValue("equipment_id",id)
  let url=getValue("url")+"index.php/get_equipment_details"
  let request=url+"/"+id
  //alert(request)
  connect(request,"",false,function(outcome){
       //alert(outcome)
       let data=JSON.parse(outcome)
       //alert(outcome)
       //alert(data.service_picture)
       setValue("equipment_name",data.equipment_name)
       setValue("equipment_description",data.equipment_idescription)
       get("equipment_image_edit").src=getValue("url")+"images/equipment/"+data.equipment_picture

       var selected=get("equipment_category")
        for(var i=0;i<selected.options.length;i++){
          if(selected.options[i].value==data.equipments_category){
            selected.selectedIndex=i
            break
          }
        }
       hide("loader")
    })
  //adding summary note
  add_summary_note()
}



function readURL(input,img_id) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
              let image_place="#"+img_id
              //alert(image_place)
              var reader = new FileReader();

              reader.onload = function (e) {
                  $(image_place)
                      .attr('src', e.target.result);
                      //image_preview(image_place,e.target.result)
              };

              reader.readAsDataURL(input.files[i]);
            }
        }
  }


 function add_gallery(input,img_id) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
              let image_place="#"+img_id+i
              //alert(image_place)
              var reader = new FileReader();

              reader.onload = function (e) {
                  $(image_place)
                      .attr('src', e.target.result);
                      //image_preview(image_place,e.target.result)
              };

              reader.readAsDataURL(input.files[i]);
            }
        }
  }

  function add_project_gallery(id){
        setValue("project_id",id)
        let url=getValue("url")+"index.php/get_product_gallery"
        let request=url+"/"+id
        //alert(request)
        connect(request,"",false,function(outcome){
            // alert(outcome)
             let data=JSON.parse(outcome)

             //reset gallery for new images
             reset_project_gallery()

             //add new images
             let fid=0
             for (var prop in data) {
               let picture=data[prop].gallery_picture
               get("product_gallery"+fid).src=getValue("url")+"images/project/"+picture
               fid++
             }         
          })
  }

  function reset_project_gallery(){
     for (var i = 0; i < 4; i++) {
           get("product_gallery"+i).src=""
      }
  }

  function delete_book(id, title){
    let x=confirm("Confirm Deleting Book  Titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_book"+"/"+id

    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="books_admin"
	        }else{
	        	alert(outcome)
	        }
        })
    }
  } 
  function delete_class(id, title){
    let x=confirm("Confirm Deleting Class  Titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_class"+"/"+id

    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="class_admin"
	        }else{
	        	alert(outcome)
	        }
        })
    }
  } 
  function delete_category(id, title){
    let x=confirm("Confirm Deleting Subject  Titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_subject"+"/"+id

    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="subjects_admin"
	        }else{
	        	alert(outcome)
	        }
        })
    }
  } 
  function delete_audio(id, title){
    let x=confirm("Confirm Deleting Audio  Titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_audio"+"/"+id

    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="audios_admin"
	        }else{
	        	alert(outcome)
	        }
        })
    }
  } 
  function delete_user(id, title){
    let x=confirm("Confirm Deleting User  '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_user"+"/"+id

    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="users_admin"
	        }else{
	        	windows.location=location
	        }
        })
    }
  } 
  function delete_student(id, title){
    let x=confirm("Confirm Deleting Student  '"+title+"'")
    if (x==true) {
      let request=getValue("url")+"home/delete_student"+"?id="+id
      //alert(request)
    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="students_admin"
	        }else{
	        	windows.location="students_admin"
	        }
        })
    }
  } 

  function delete_video(id, title){
    let x=confirm("Confirm Deleting Video  Titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_video"+"/"+id

    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="videos_admin"
	        }else{
	        	alert(outcome)
	        }
        })
    }
  } 
  function delete_gallery(id, title){
    let x=confirm("Confirm deleting gallery titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_gallery"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 
  function delete_team(id, title){
    let x=confirm("Confirm deleting team titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_team"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 

  function delete_downloads(id, title){
    let x=confirm("Confirm deleting download titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_downloads"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 

  function delete_research(id, title){
    let x=confirm("Confirm deleting research titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_research"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 
  function delete_publication(id, title){
    let x=confirm("Confirm deleting publication titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_publication"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 

  function delete_project(id, project_name){
    let x=confirm("Confirm deleting project called '"+project_name+"'")
    if (x==true) {
    	let request=getValue("url")+"index.php/delete_project"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        let data=JSON.parse(outcome)
	        if (data.status==true) {
	        	window.location="projects_admin"
	        }else{
	        	alert(outcome)
	        }
        })
    }
  }

   function delete_news(id, news_title){
    let x=confirm("Confirm deleting news titled '"+news_title+"'")
    if (x==true) {
    	let request=getValue("url")+"home/delete_news"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 

  function delete_event(id, title){
    let x=confirm("Confirm deleting event titled '"+title+"'")
    if (x==true) {
    	let request=getValue("url")+"delete_event"+"/"+id
    	//alert(request)
    	connect(request,"",false,function(outcome){
	        	window.location=location
        })
    }
  } 

  function delete_activism(id, name){
      let message=`Confirm deleting element titled ${name}`
	  let url=getValue("url")+"delete_activism"+"/"+id
	  askPermission(message,url)
  }


function delete_event(id, name){
	let message=`Confirm deleting element titled ${name}`
	let url=getValue("url")+"delete_event"+"/"+id
	askPermission(message,url)
}

function deleteItem(id, name, endpoint){
	let message=`Confirm deleting element titled ${name}`
	let url=getValue("url")+`${endpoint}/${id}`
	askPermission(message,url)
}


  function askPermission(item, url){
	  const swalWithBootstrapButtons = Swal.mixin({
		  customClass: {
			  confirmButton: 'btn btn-success',
			  cancelButton: 'btn btn-danger'
		  },
		  buttonsStyling: true
	  })

	  swalWithBootstrapButtons.fire({
		  title: "Delete",
		  text: `${item}`,
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonText: 'Yes, delete it!',
		  cancelButtonText: 'No, cancel!',
		  reverseButtons: true
	  }).then((result) => {
		  if (result.isConfirmed) {
			  connect(url,"",false,function(outcome){
				  if (outcome==true) {
					  Swal.fire("Poof! Your imaginary file has been deleted!", {
						  icon: "success",
					  });
					  window.location=window.location.href
				  }else{
					  alert(outcome)
				  }
			  })
			  swalWithBootstrapButtons.fire(
				  'Deleted!',
				  item+' has been deleted.',
				  'success'
			  )
		  } else if (
			  /* Read more about handling dismissals below */
			  result.dismiss === Swal.DismissReason.cancel
		  ) {
			  swalWithBootstrapButtons.fire(
				  'Cancelled',
				  item+' is safe :)',
				  'error'
			  )
		  }
	  })
  }

  function delete_comment(id, comment_by){
    let x=confirm("Confirm deleting comment '"+comment_by+"'")
    if (x==true) {
      let request=getValue("url")+"index.php/delete_comment"+"/"+id
      //alert(request)
      connect(request,"",false,function(outcome){
          let data=JSON.parse(outcome)
          if (data.status==true) {
            window.location="comments_admin"
          }else{
            alert(outcome)
          }
        })
    }
  }  

   function delete_equipment(id, name){
    let x=confirm("Confirm deleting equipment '"+name+"'")
    if (x==true) {
      let request=getValue("url")+"index.php/delete_equipment"+"/"+id
      //alert(request)
      connect(request,"",false,function(outcome){
          let data=JSON.parse(outcome)
          if (data.status==true) {
            window.location=getValue("url")+"index.php/for_hire_admin"
          }else{
            alert(outcome)
          }
        })
    }
  }  

  function delete_product(id, name){
    let x=confirm("Confirm deleting product '"+name+"'")
    if (x==true) {
      let request=getValue("url")+"index.php/delete_product"+"/"+id
      //alert(request)
      connect(request,"",false,function(outcome){
          let data=JSON.parse(outcome)
          if (data.status==true) {
            window.location=getValue("url")+"index.php/products_admin"
          }else{
            alert(outcome)
          }
        })
    }
  }   

  function delete_project_gallery(id){
    let x=confirm("Confirm Deleting Entire Project Gallery")
    if (x==true) {
      let request=getValue("url")+"index.php/delete_project_gallery"+"/"+id
      //alert(request)
      connect(request,"",false,function(outcome){
          let data=JSON.parse(outcome)
          if (data.status==true) {
            reset_project_gallery()
          }else{
            alert(outcome)
          }
        })
    }
  } 
