<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 18:46:16 2008" -->
<!-- isoreceived="20081021224616" -->
<!-- sent="Tue, 21 Oct 2008 16:46:08 -0600" -->
<!-- isosent="20081021224608" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="A0801CEC7AFED846978515099D145DA512837379C6_at_ES01SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21603_1224628054_m9LMGgaZ023050_1E72C1C2-BF54-4B8C-A2EE-367D2BE4F1BE_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 18:46:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I'm not sure I understand the problem. The ale3d program from
</span><br>
<span class="quotelev1">&gt; LLNL operates exactly as you describe and it can be built
</span><br>
<span class="quotelev1">&gt; with mpich, lam, or openmpi.
</span><br>
<p>Hi Doug,
<br>
<p>I'm not sure what reply would be most helpful, so here's an attempt.
<br>
<p>It sounds like we're on the same page with regard to the desired behavior.  Historically, we've been able to detect serial vs. parallel launch of the binary foo, with a whole host of implementations, including those you mention, as well as some vendor-specific implementations (possibly including DEC/OSF, SGI, Sun, and AIX/poe, though I don't know all the details).  We typically distinguish serial from parallel executions on the basis of environment variables set only in the MPI runtime environment.  I was just trying to ascertain what variable would be best to test for in an OpenMPI environment, and I think Ralph helped with that.
<br>
<p>If the ale3d code takes a different approach, I'd love to hear about it, off-list if necessary.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7052.php">Adams, Brian M: "[OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
