<?
$subject_val = "Re: [OMPI users] Rmpi and LAM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 13:21:57 2009" -->
<!-- isoreceived="20090130182157" -->
<!-- sent="Fri, 30 Jan 2009 13:21:53 -0500 (EST)" -->
<!-- isosent="20090130182153" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rmpi and LAM" -->
<!-- id="alpine.DEB.1.10.0901301320130.3885_at_marvin.we-be-smart.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f4adc5a90901290257y3a8cfecavfa681b7b7d45a58a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rmpi and LAM<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 13:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<li><strong>Previous message:</strong> <a href="7899.php">Brian W. Barrett: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>In reply to:</strong> <a href="7870.php">Paul Wardman: "[OMPI users] Rmpi and LAM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 29 Jan 2009, Paul Wardman wrote:
<br>
<p><span class="quotelev1">&gt; I'm using R on a Ubuntu 8.10 machine, and, in particular, quite a lot of
</span><br>
<span class="quotelev1">&gt; papply calls to analyse data. I'm currently using the LAM implementation,
</span><br>
<span class="quotelev1">&gt; as it's the only one I've got to work properly. However, while it works
</span><br>
<span class="quotelev1">&gt; fine on one PC, it fails with the error message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error in mpi.comm.spawn(slave = system.file(&quot;Rslaves.sh&quot;, package =
</span><br>
<span class="quotelev1">&gt; &quot;Rmpi&quot;),&#160; :
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Error_string: error spawning process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when I try to run it over a network on two machines. However, I've got
</span><br>
<span class="quotelev1">&gt; passwordless ssh working fine, and the lamnodes command seems to suggest
</span><br>
<span class="quotelev1">&gt; I've got all the nodes up and running fine (the other computer is also
</span><br>
<span class="quotelev1">&gt; Ubuntu 8.10) and lamhosts() from within R shows all the nodes perfectly
</span><br>
<span class="quotelev1">&gt; well. I've even got mpirun to work on both machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help with (A) getting my current setup with R to work and / or
</span><br>
<span class="quotelev1">&gt; (B) suggestions for getting OpenMPI to work at all! (and preferably on
</span><br>
<span class="quotelev1">&gt; multiple machines).
</span><br>
<p>For help with LAM/MPI, I'd suggest posting to the LAM mailing list, 
<br>
although I don't think we'll be able to help you much, since it looks like 
<br>
R's MPI package ends up eating the useful error message.  It might be 
<br>
useful to ask the developers of that package if they've seen such problems 
<br>
before.
<br>
<p>For Open MPI, you're going to have to provide a bit more detail (like what 
<br>
doesn't work!).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<li><strong>Previous message:</strong> <a href="7899.php">Brian W. Barrett: "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>In reply to:</strong> <a href="7870.php">Paul Wardman: "[OMPI users] Rmpi and LAM"</a>
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
