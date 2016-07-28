<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:32:05 2010" -->
<!-- isoreceived="20100503153205" -->
<!-- sent="03 May 2010 16:32:01 +0100" -->
<!-- isosent="20100503153201" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing" -->
<!-- id="Prayer.1.3.2.1005031632010.11031_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA2BA7E1-AFF0-4C39-B110-9DD4051AF7D4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 3 2010, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Write a small C program that does something like the following (this is 
</span><br>
<span class="quotelev1">&gt; off the top of my head):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;fork a child
</span><br>
<span class="quotelev1">&gt;child goes to sleep immediately
</span><br>
<span class="quotelev1">&gt;sysv alloc a segment
</span><br>
<span class="quotelev1">&gt;attach to it
</span><br>
<span class="quotelev1">&gt;ipc rm it
</span><br>
<span class="quotelev1">&gt;parent wakes up child
</span><br>
<span class="quotelev1">&gt;child tries to attach to segment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If that succeeds, then all is good.  If not, then don't use this stuff.  
</span><br>
<p>Not quite.  You haven't allowed for the ipc rm being scheduled for
<br>
immediate effect, but the action not happening immediately - while I
<br>
haven't used that facility, I have seen such effects with quite a few
<br>
shared facilities.  That can happen when the facility is partially
<br>
managed by a daemon or kernel thread, that is otherwise engaged at the
<br>
time of the ipc rm, and the daemon needs to be called for allocation
<br>
and deallocation but not attaching to an existing segment.  Is that
<br>
ever done for this facility?  Dunno.  Does POSIX forbid it?  Not that
<br>
I can see.
<br>
<p>To reduce that, I would put in a sleep after the ipc rm, for at least
<br>
a few seconds, but that will merely reduce the probability of a race
<br>
condition and not remove it.  But I don't have a good solution for it,
<br>
in general :-(
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7876.php">Ralf Wildenhues: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
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
