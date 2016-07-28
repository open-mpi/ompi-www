<?
$subject_val = "[OMPI devel] IBV_EVENT_QP_ACCESS_ERR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 30 20:44:37 2010" -->
<!-- isoreceived="20101231014437" -->
<!-- sent="Thu, 30 Dec 2010 17:43:21 -0800" -->
<!-- isosent="20101231014321" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] IBV_EVENT_QP_ACCESS_ERR" -->
<!-- id="4D1D3539.7030904_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] IBV_EVENT_QP_ACCESS_ERR<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-30 20:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was running a bunch of np=4 test programs over two nodes.  
<br>
Occasionally, *one* of the codes would see an IBV_EVENT_QP_ACCESS_ERR 
<br>
during MPI_Finalize().  I traced the code and ran another program that 
<br>
mimicked the particular MPI calls made by that program.  This other 
<br>
program, too, would occasionally trigger this error.  I never saw the 
<br>
problem with other tests.  Rate of incidence could go from consecutive 
<br>
runs (I saw this once) to 1:100s (more typically) to even less 
<br>
frequently -- I've had 1000s of consecutive runs with no problems.  (The 
<br>
tests run a few seconds apiece.)  The traffic pattern is sends from 
<br>
non-zero ranks to rank 0, with root-0 gathers, and lots of Allgathers.  
<br>
The largest messages are 1000bytes.  It appears the problem is always 
<br>
seen on rank 3.
<br>
<p>Now, I wouldn't mind someone telling me, based on that little 
<br>
information, what the problem is here, but I guess I don't expect that.  
<br>
What I am asking is what IBV_EVENT_QP_ACCESS_ERR means.  Again, it's 
<br>
seen during MPI_Finalize.  The async thread is seeing this.  What is 
<br>
this error trying to tell me?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI devel] IBV_EVENT_QP_ACCESS_ERR"</a>
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
