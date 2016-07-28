<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 14:56:07 2008" -->
<!-- isoreceived="20081211195607" -->
<!-- sent="Thu, 11 Dec 2008 14:55:48 -0500" -->
<!-- isosent="20081211195548" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="49417044.2000602_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D3A3623-0E32-4A88-B112-A6D1B219D00C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 14:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 8, 2008, at 11:11 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds reasonable to me. I agree with Ralf W about having mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; send a STOP to itself - that would seem to solve the problem about 
</span><br>
<span class="quotelev2">&gt;&gt; stopping everything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would seem, however, that you cannot similarly STOP the daemons or 
</span><br>
<span class="quotelev2">&gt;&gt; else you won't be able to CONT the job. I'm not sure how big a deal 
</span><br>
<span class="quotelev2">&gt;&gt; that is - I can't think of any issue it creates offhand.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any issue in the MPI comm layers if you abruptly STOP a 
</span><br>
<span class="quotelev2">&gt;&gt; process while it's communicating? Especially since the STOP is going 
</span><br>
<span class="quotelev2">&gt;&gt; to be asynchronous. Do you need to quiet networks like IB first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It might be better to allow the MPI procs to do &quot;something&quot; before 
</span><br>
<span class="quotelev1">&gt; actually stopping.  This might prevent timeout-sensitive stuff from 
</span><br>
<span class="quotelev1">&gt; failing (although I don't know if Josh's CR code even handles these 
</span><br>
<span class="quotelev1">&gt; kinds of things...?).  The obvious case that I can think of is if the 
</span><br>
<span class="quotelev1">&gt; MPI process is stopped in the middle of an openib CM action.  None of 
</span><br>
<span class="quotelev1">&gt; the openib CPC's can currently handle a timeout nicely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well under SGE it allows you to have SGE send mpirun SIGUSR1 so many 
<br>
minutes before sending the Suspend signal.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5039.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
