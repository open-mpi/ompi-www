<?
$subject_val = "Re: [OMPI users] MPI_Request and attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:18:49 2007" -->
<!-- isoreceived="20071105221849" -->
<!-- sent="Mon, 5 Nov 2007 16:18:45 -0600" -->
<!-- isosent="20071105221845" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Request and attributes" -->
<!-- id="20071105221844.GA28759_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6ab5deaf0711020418u6cea583bq28d41aa03bfe879c_at_mail.gmail.com" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:18:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Previous message:</strong> <a href="4402.php">Benjamin, Ted G.: "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>In reply to:</strong> <a href="4389.php">Oleg Morajko: "[OMPI users] MPI_Request and attributes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov 02, 2007 at 12:18:54PM +0100, Oleg Morajko wrote:
<br>
<span class="quotelev1">&gt; Is there any standard way of attaching/retrieving attributes to MPI_Request
</span><br>
<span class="quotelev1">&gt; object?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eg. Typically there are dynamic user data created when starting the
</span><br>
<span class="quotelev1">&gt; asynchronous operation and freed when it completes. It would be convenient
</span><br>
<span class="quotelev1">&gt; to associate them with the request object itself to simplify the code.
</span><br>
<p>You might find generalized requests offer what you want if you don't
<br>
mind spawning threads.  You don't get to hook an attribute onto an
<br>
MPI_Request object, but you do get a void * ponter which the
<br>
implementation then associates with your user-defined request.  This
<br>
void * could be a datatype containing the orginali MPI_Request and
<br>
your user data.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4404.php">Mike Hanby: "[OMPI users] Compiling OpenMPI 1.2.4 with Topspin Infiniband support &quot;IPO link: can not find -lvapi&quot;"</a>
<li><strong>Previous message:</strong> <a href="4402.php">Benjamin, Ted G.: "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>In reply to:</strong> <a href="4389.php">Oleg Morajko: "[OMPI users] MPI_Request and attributes"</a>
<!-- nextthread="start" -->
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
