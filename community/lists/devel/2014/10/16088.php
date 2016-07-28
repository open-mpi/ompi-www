<?
$subject_val = "[OMPI devel] Deprecated call in sharedfp framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 12:04:27 2014" -->
<!-- isoreceived="20141024160427" -->
<!-- sent="Fri, 24 Oct 2014 09:04:24 -0700" -->
<!-- isosent="20141024160424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Deprecated call in sharedfp framework" -->
<!-- id="69317162-65DC-436C-AB08-D3045E0A42FE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Deprecated call in sharedfp framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 12:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16087.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m not sure who owns that framework, but I&#226;&#128;&#153;m seeing this warning:
<br>
<p>sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_open':
<br>
sharedfp_sm_file_open.c:159:5: warning: 'sem_init' is deprecated (declared at /usr/include/sys/semaphore.h:55) [-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(sem_init(&amp;sm_offset_ptr-&gt;mutex, 1, 1) != -1){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_close':
<br>
sharedfp_sm_file_open.c:214:13: warning: 'sem_destroy' is deprecated (declared at /usr/include/sys/semaphore.h:53) [-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sem_destroy(&amp;file_data-&gt;sm_offset_ptr-&gt;mutex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>This is with gcc (MacPorts gcc49 4.9.1_0) 4.9.1
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Previous message:</strong> <a href="16087.php">Ralph Castain: "Re: [OMPI devel] origin/v1.8 - compilation failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
<li><strong>Reply:</strong> <a href="16089.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Deprecated call in sharedfp framework"</a>
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
