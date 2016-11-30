<script>
function time_get()
		{
			d = new Date();
			mon = d.getMonth()+1;
			time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
			posting_txt.txt_post_time.value=time;
		}
</script>
<div class="form-profilebg">
		<div class="profile">
                <img src="upload/<?php echo $photo ?>" width="100%" />
                
            <h6><?php echo $name ?></h6>
           
        </div>

		<div class="form-profile">
        
                  <form name="sendmsg" action="homepath.php?action=m&pageowner=<?php echo $pageowner ?>" method="POST" >
                    <input type="text"  name="feedtext" class="mainform" placeholder="Post Your Awesome Lines" />
                	<input type="submit" class="mainform-butt" value="blog" onClick="time_get()" />
                    </form>
        </div>
        
</div>