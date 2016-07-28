<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 14:48:09 2008" -->
<!-- isoreceived="20081211194809" -->
<!-- sent="Thu, 11 Dec 2008 14:48:02 -0500" -->
<!-- isosent="20081211194802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="6D3A3623-0E32-4A88-B112-A6D1B219D00C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="922038D8-2503-4281-BBB9-674841C00A82_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 14:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>In reply to:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2008, at 11:11 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It sounds reasonable to me. I agree with Ralf W about having mpirun  
</span><br>
<span class="quotelev1">&gt; send a STOP to itself - that would seem to solve the problem about  
</span><br>
<span class="quotelev1">&gt; stopping everything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would seem, however, that you cannot similarly STOP the daemons  
</span><br>
<span class="quotelev1">&gt; or else you won't be able to CONT the job. I'm not sure how big a  
</span><br>
<span class="quotelev1">&gt; deal that is - I can't think of any issue it creates offhand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any issue in the MPI comm layers if you abruptly STOP a  
</span><br>
<span class="quotelev1">&gt; process while it's communicating? Especially since the STOP is going  
</span><br>
<span class="quotelev1">&gt; to be asynchronous. Do you need to quiet networks like IB first?
</span><br>
<p>It might be better to allow the MPI procs to do &quot;something&quot; before  
<br>
actually stopping.  This might prevent timeout-sensitive stuff from  
<br>
failing (although I don't know if Josh's CR code even handles these  
<br>
kinds of things...?).  The obvious case that I can think of is if the  
<br>
MPI process is stopped in the middle of an openib CM action.  None of  
<br>
the openib CPC's can currently handle a timeout nicely.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5038.php">Jeff Squyres: "Re: [OMPI devel] BTL move - the notion"</a>
<li><strong>In reply to:</strong> <a href="5020.php">Ralph Castain: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
