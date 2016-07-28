<?
$subject_val = "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 09:57:10 2011" -->
<!-- isoreceived="20110509135710" -->
<!-- sent="Mon, 9 May 2011 19:27:05 +0530" -->
<!-- isosent="20110509135705" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION" -->
<!-- id="BANLkTi=vt1-z=JCxmnK437JNsXhd66m+ew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EC07A946-E6AD-4CCC-9959-14690D498C4D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 09:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16494.php">hi: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>Previous message:</strong> <a href="16492.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16492.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Test program works fine; but you can notice the difference between the
<br>
callstack images of test program and of my actual application.
<br>
<p>In test program it calls mca_coll_self_allreduce_intra while in my
<br>
application it calls mca_coll_basic_allreduce_intra.
<br>
So I want to know which parameter or setting makes call to
<br>
mca_coll_basic_allreduce_intra compared to
<br>
mca_coll_self_allreduce.intra; if you can comment on this would be
<br>
helpful.
<br>
<p>Just for more information:
<br>
op-&gt;o_func.intrinsic.fns[27]  points to 0 when using
<br>
MPI_Allreduce(...,...,...,MPI_DOUBLE_PRECISION, MPI_SUM,...,...)
<br>
<p>Thank you.
<br>
-Hiral
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16494.php">hi: "Re: [OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>Previous message:</strong> <a href="16492.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16492.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Reply:</strong> <a href="16496.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
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
