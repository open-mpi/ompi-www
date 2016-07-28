<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 18:32:55 2006" -->
<!-- isoreceived="20061011223255" -->
<!-- sent="Wed, 11 Oct 2006 17:09:31 -0400 (EDT)" -->
<!-- isosent="20061011210931" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Shared memory file changes" -->
<!-- id="Pine.LNX.4.64.0610111706470.3276_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 17:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Previous message:</strong> <a href="1103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Reply:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Reply:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>A couple of weeks ago, I committed some changes to the trunk that greatly 
<br>
reduced the size of the shared memory file for small numbers of processes. 
<br>
I haven't heard any complaints (the non-blocking send/receive issue is at 
<br>
proc counts greater than the size this patch affected).  Anyone object to 
<br>
moving this to the v1.2 branch (with reviews, of course).
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Previous message:</strong> <a href="1103.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Reply:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<li><strong>Reply:</strong> <a href="1108.php">Jeff Squyres: "Re: [OMPI devel] Shared memory file changes"</a>
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
