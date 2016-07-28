<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 19:45:47 2005" -->
<!-- isoreceived="20050824004547" -->
<!-- sent="Tue, 23 Aug 2005 19:45:39 -0500" -->
<!-- isosent="20050824004539" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MIPS64 question" -->
<!-- id="B949AFF3-0F78-4736-B35C-02E94DD30A79_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050824003552.14517.qmail_at_web31507.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-23 19:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0118.php">Jonathan Day: "[O-MPI users] MIPS64 question"</a>
<li><strong>In reply to:</strong> <a href="0118.php">Jonathan Day: "[O-MPI users] MIPS64 question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 23, 2005, at 7:35 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; I notice that MIPS is not listed amongst the &quot;known&quot;
</span><br>
<span class="quotelev1">&gt; architectures in the README, and on trying to compile
</span><br>
<span class="quotelev1">&gt; OpenMPI on a Linux/MIPS64 platform it blew up in the
</span><br>
<span class="quotelev1">&gt; configuration code.
</span><br>
<p>Correct.  The only MIPS machines most of the developers have access  
<br>
to are some SGI workstations sitting in a lab in Indiana University's  
<br>
fine arts building.  The fine arts grad students get really confused  
<br>
when you start firing up MPI jobs on the workstations, so we don't  
<br>
test on that platform very often ;).
<br>
<p><span class="quotelev1">&gt; Having said that, there does seem to be MIPS stuff in
</span><br>
<span class="quotelev1">&gt; those directories listing assembly code, but I do NOT
</span><br>
<span class="quotelev1">&gt; know if this includes MIPS64 support.
</span><br>
<p>I believe the workstations are at least R10K, at one time Open MPI  
<br>
has run on 64 bit MIPS machines.
<br>
<p><span class="quotelev1">&gt; The exact error message I'm getting is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for
</span><br>
<span class="quotelev1">&gt; mips64-unknown-linux-gnu
</span><br>
<p>Can you send config.log to the list?  It has oodles of information  
<br>
that will help figure out what is going on.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0118.php">Jonathan Day: "[O-MPI users] MIPS64 question"</a>
<li><strong>In reply to:</strong> <a href="0118.php">Jonathan Day: "[O-MPI users] MIPS64 question"</a>
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
