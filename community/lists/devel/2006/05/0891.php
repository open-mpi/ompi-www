<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 06:12:31 2006" -->
<!-- isoreceived="20060524101231" -->
<!-- sent="Wed, 24 May 2006 12:12:27 +0200" -->
<!-- isosent="20060524101227" -->
<!-- name="Andre Lichei" -->
<!-- email="andre.lichei_at_[hidden]" -->
<!-- subject="[OMPI devel] behavior of the r2 component" -->
<!-- id="20060524121227.0iezybg7k8cc40ww_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Andre Lichei (<em>andre.lichei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 06:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Bug tracking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Reply:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>currently I'm working at the r2 component of the bml framework. When I 
<br>
tried to get an deeper understanding of the component I experienced 
<br>
difficulties to figure out how the add_proc function should behave. So 
<br>
my question is how should the function behave, and what is the purpose 
<br>
of the bml_endpoint array? An explanation of my difficulties follows.
<br>
<p>The add_proc function is implemented in bml_r2.c and starts at line 164
<br>
mca_bml_r2_add_procs(size_t nprocs,
<br>
<span class="quotelev1">&gt;                         struct ompi_proc_t** procs,
</span><br>
<span class="quotelev1">&gt;                         struct mca_bml_base_endpoint_t** bml_endpoints,
</span><br>
<span class="quotelev1">&gt;                         struct ompi_bitmap_t* reachable
</span><br>
<span class="quotelev1">&gt;                     )
</span><br>
<p>When I first read it, it seems that the function accepts an array of 
<br>
ompi_proc_t structs and return an array of the same size which contains 
<br>
one bml_endpoint for every process in the procs array.
<br>
At the beginning of the function (line 193 to 204) is a loop checking 
<br>
if there are processes which are not new. If this is the case the 
<br>
existing bml_endpoint is selected and stored in the endpoint array. New 
<br>
processes are stored in an different array. This means if all processes 
<br>
are known the function behaves like described above.
<br>
When there are new processes the procs array is overwritten with the 
<br>
newly created array of new processes.(line 210) This array may be 
<br>
shorter. (When there was at least one known process) So the number of 
<br>
elements in nprocs is overwritten too. (line 211) But this nummber is 
<br>
no pointer so the calling function couldn't notice it.
<br>
Now new bml_endpoints are created an stored in the bml_endpoints array. 
<br>
But they are stored at the  position the process has in the new 
<br>
array!(line 271) So existing entries may be overwritten.
<br>
<p>Example:
<br>
The function receives an array with 4 processes (process 0 to 3). 
<br>
Process 2 is already known. So in the first loop the bml_endpoint of 
<br>
process 2 is stored at bml_endpoints[2]. Also a new array is created 
<br>
containing process 0,1,3. This new array replaces the procs array. Then 
<br>
for all three processes bml_endpoints are created and stored at 
<br>
bml_endpoint[0,1,2]. So the existing entry (bml_endpoint[2]) is 
<br>
overwritten.
<br>
So the bml_endpoint array contains only three elements, but the calling 
<br>
function has as number 4, because the new number can't be returned.
<br>
<p>So my question again. Is this the intended behavior or is it a bug? How 
<br>
should the function behave?
<br>
<p>Thanks,
<br>
Andr&#233;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Bug tracking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<li><strong>Reply:</strong> <a href="0894.php">George Bosilca: "Re: [OMPI devel] behavior of the r2 component"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
