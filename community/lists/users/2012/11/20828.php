<?
$subject_val = "Re: [OMPI users] BLCR + Qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 11:41:18 2012" -->
<!-- isoreceived="20121130164118" -->
<!-- sent="Fri, 30 Nov 2012 10:41:14 -0600" -->
<!-- isosent="20121130164114" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR + Qlogic infiniband" -->
<!-- id="CAANzjE=Qda2yFCezz8r6JJpabratFo1R7H68ODpj-Ev4eiqh=w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOEAUJ7rYWHKWdfOgq6wqLuzr8TP=ZqWqDFRhRo4GT8wOqYm4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR + Qlogic infiniband<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 11:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Previous message:</strong> <a href="20827.php">Josh Hursey: "Re: [OMPI users] MCA crs: none (MCA v2.0, API v2.0, Component v1.6.3)"</a>
<li><strong>In reply to:</strong> <a href="20785.php">William Hay: "[OMPI users] BLCR + Qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The openib BTL and BLCR support in Open MPI were working about a year ago
<br>
(when I last checked). The psm BTL is not supported at the moment though.
<br>
<p><span class="quotelev1">&gt;From the error, I suspect that we are not fully closing the openib btl
</span><br>
driver before the checkpoint thus when we try to restart it is looking for
<br>
a resource that is no longer present. I created a ticket for us to
<br>
investigate further if you want to follow it:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3417">https://svn.open-mpi.org/trac/ompi/ticket/3417</a>
<br>
<p>Unfortunately, I do not know who is currently supporting that code path (I
<br>
might pick it back up at some point, but cannot promise anything in the
<br>
near future). But I will keep an eye on the ticket and see what I can do.
<br>
If it is what I think it is, then it should not take too much work to get
<br>
it working again.
<br>
<p>-- Josh
<br>
<p>On Wed, Nov 28, 2012 at 5:14 AM, William Hay &lt;w.hay_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build openmpi with support for BLCR plus qlogic infiniband
</span><br>
<span class="quotelev1">&gt; (plus grid engine).  Everything seems to compile OK and checkpoints are
</span><br>
<span class="quotelev1">&gt; taken but whenever I try to restore a checkpoint I get the following error:
</span><br>
<span class="quotelev1">&gt; - do_mmap(&lt;file&gt;, 00002aaab18c7000, 0000000000001000, ...) failed:
</span><br>
<span class="quotelev1">&gt; ffffffffffffffea
</span><br>
<span class="quotelev1">&gt; - mmap failed: /dev/ipath
</span><br>
<span class="quotelev1">&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev1">&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev1">&gt; Restart failed: Invalid argument
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This occurs whether I specify psm or openib as the btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like the sort of thing I would expect to be handled by the blcr
</span><br>
<span class="quotelev1">&gt; supporting code in openmpi.  So I guess I have a couple ofquestions.
</span><br>
<span class="quotelev1">&gt; 1)Are Infiniband and BLCR support in openmpi compatible?
</span><br>
<span class="quotelev1">&gt; 2)Are there any special tricks necessary to get them working together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Previous message:</strong> <a href="20827.php">Josh Hursey: "Re: [OMPI users] MCA crs: none (MCA v2.0, API v2.0, Component v1.6.3)"</a>
<li><strong>In reply to:</strong> <a href="20785.php">William Hay: "[OMPI users] BLCR + Qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
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
