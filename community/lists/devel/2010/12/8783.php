<?
$subject_val = "[OMPI devel] Connection architectures behind the MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 02:48:01 2010" -->
<!-- isoreceived="20101217074801" -->
<!-- sent="Fri, 17 Dec 2010 15:47:55 +0800" -->
<!-- isosent="20101217074755" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="[OMPI devel] Connection architectures behind the MPI" -->
<!-- id="AANLkTimr+GJSPj_HO7Sv3F87VxFXQzb0A85oWKY9Wc+q_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
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
<strong>Subject:</strong> [OMPI devel] Connection architectures behind the MPI<br>
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 02:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>Reply:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the MPI_THREAD_MULTIPLE mode ,every thread can use MPI_Send(),
<br>
MPI_Recv() simulately. I wonder the connection architectures behind the
<br>
implement&#161;&#163;Does every thread have its own specific socket storage&#163;&#191;Or all the
<br>
thread share the same socket when they connect to the same rank process and
<br>
use some synchronization  mechanism&#161;&#163;Is there any paper relate to this topic?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<li><strong>Previous message:</strong> <a href="8782.php">Manuel Prinz: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>Reply:</strong> <a href="8788.php">George Bosilca: "Re: [OMPI devel] Connection architectures behind the MPI"</a>
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
