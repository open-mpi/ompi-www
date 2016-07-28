<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 11:59:52 2010" -->
<!-- isoreceived="20100303165952" -->
<!-- sent="Wed, 3 Mar 2010 08:59:45 -0800" -->
<!-- isosent="20100303165945" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="5b7094581003030859r363ab89dm22191d5062568758_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1267603162.5836.130.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init() and MPI_Init_thread()<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 11:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that it specifies the *minimum* threading model supported.  If I
<br>
recall, opmi is already funnel safe even in single mode.  However, if mpi
<br>
calls are made from outside the main thread, you should specify funneled for
<br>
portability
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Mar 2, 2010 11:59 PM, &quot;Terry Frankcombe&quot; &lt;terry_at_[hidden]&gt; wrote:
<br>
<p>I can't speak for the developers.  However, I think it's to do with the
<br>
library internals.
<br>
<p><p><p><span class="quotelev1">&gt;From here: <a href="http://www.mpi-forum.org/docs/mpi-20-html/node165.htm">http://www.mpi-forum.org/docs/mpi-20-html/node165.htm</a>
</span><br>
<p>&quot;Advice to implementors.
<br>
<p>&quot;If provided is not MPI_THREAD_SINGLE then the MPI library should not
<br>
invoke C/ C++/Fortran library calls that are not thread safe, e.g., in
<br>
an environment where malloc is not thread safe, then malloc should not
<br>
be used by the MPI library.
<br>
<p>&quot;Some implementors may want to use different MPI libraries for different
<br>
levels of thread support. They can do so using dynamic linking and
<br>
selecting which library will be linked when MPI_INIT_THREAD is invoked.
<br>
If this is not possible, then optimizations for lower levels of thread
<br>
support will occur only when the level of thread support required is
<br>
specified at link time. ( End of advice to implementors.)&quot;
<br>
<p><p><p><p>On Wed, 2010-03-03 at 16:33 +0900, Yuanyuan ZHANG wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a beginner of MPI an...
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12218.php">Eugene Loh: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12216.php">Ralph Castain: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12211.php">Terry Frankcombe: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12220.php">Richard Treumann: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
