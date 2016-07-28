<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 15:08:22 2008" -->
<!-- isoreceived="20081211200822" -->
<!-- sent="Thu, 11 Dec 2008 15:08:16 -0500" -->
<!-- isosent="20081211200816" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="F41D3450-6851-481B-BC2E-835BC2E95227_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49417044.2000602_at_sun.com" -->
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
<strong>Date:</strong> 2008-12-11 15:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2008, at 2:55 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Well under SGE it allows you to have SGE send mpirun SIGUSR1 so many  
</span><br>
<span class="quotelev1">&gt; minutes before sending the Suspend signal.
</span><br>
<p><p>My point is that the right approach might be to work in the context of  
<br>
Josh's CR stuff -- he's already got hooks for &quot;do this right before  
<br>
pausing for checkpoint&quot; / &quot;do this right after resuming&quot;, etc.
<br>
<p>Sure, we're not checkpointing, but several of the characteristics of  
<br>
this action are pretty similar to what is required for checkpointing/ 
<br>
restarting.  So it might be good to use that framework for it...?
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
<li><strong>Next message:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5040.php">Terry Dontje: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
