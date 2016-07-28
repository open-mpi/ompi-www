<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 12:15:32 2010" -->
<!-- isoreceived="20100304171532" -->
<!-- sent="Thu, 4 Mar 2010 11:15:22 -0600" -->
<!-- isosent="20100304171522" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="D9296D8D-E00B-40C3-8B00-2238A6A604AC_at_mcs.anl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="25823481.1117601267721557436.JavaMail.root_at_zimbra" -->
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
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 12:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12280.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2010, at 10:52 AM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt; ----- &quot;Yuanyuan ZHANG&quot; &lt;zhang.yuanyuan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For an OpenMP/MPI hybrid program, if I only want to make MPI calls
</span><br>
<span class="quotelev2">&gt;&gt; using the main thread, ie., only in between parallel sections, can  
</span><br>
<span class="quotelev2">&gt;&gt; I just
</span><br>
<span class="quotelev2">&gt;&gt; use SINGLE or MPI_Init?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your MPI calls is NOT within OpenMP directives, MPI does not even
</span><br>
<span class="quotelev1">&gt; know you are using threads.  So calling MPI_Init is good enough.
</span><br>
<p>This is *not true*.  Please read Dick's previous post for a good  
<br>
example of why this is not the case.
<br>
<p>In practice, on most platforms, implementation support for SINGLE and  
<br>
FUNNELED are identical (true for stock MPICH2, for example).  However  
<br>
Dick's example of thread-safe versus non-thread-safe malloc options  
<br>
clearly shows why programs need to request (and check &quot;provided&quot; for)  
<br>
<span class="quotelev1"> &gt;=FUNNELED in this scenario if they wish to be truly portable.
</span><br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12251.php">Dave Love: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12249.php">Anthony Chan: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12280.php">Yuanyuan ZHANG: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
