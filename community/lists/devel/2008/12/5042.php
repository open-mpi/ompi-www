<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 15:19:11 2008" -->
<!-- isoreceived="20081211201911" -->
<!-- sent="Thu, 11 Dec 2008 15:19:10 -0500" -->
<!-- isosent="20081211201910" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="3E888CCD-135D-4A18-B4E2-581B75276D89_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F41D3450-6851-481B-BC2E-835BC2E95227_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 15:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would expect that you will hit problems with timeouts throughout the  
<br>
codebase as Jeff mentioned, particularly with network connections.  
<br>
Having a 'prepare to suspend' signal followed by a 'suspend now'  
<br>
signal might work since it should provide enough of a window to ready  
<br>
the application for the suspension.
<br>
<p>I think the first step is to try it, being sure to let the process  
<br>
stay suspended for a considerable amount of time (15 min to an hour at  
<br>
least) and see what effects this has. I would expect a series of  
<br>
errors, but I haven't tried it so I can't say for sure.
<br>
<p>If there are errors then looking at the internal notification stuff  
<br>
that the C/R mechanism uses would be a good place to start since it  
<br>
handles these types of issues for a checkpoint operation.
<br>
<p>-- Josh
<br>
<p>On Dec 11, 2008, at 3:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 11, 2008, at 2:55 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well under SGE it allows you to have SGE send mpirun SIGUSR1 so  
</span><br>
<span class="quotelev2">&gt;&gt; many minutes before sending the Suspend signal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point is that the right approach might be to work in the context  
</span><br>
<span class="quotelev1">&gt; of Josh's CR stuff -- he's already got hooks for &quot;do this right  
</span><br>
<span class="quotelev1">&gt; before pausing for checkpoint&quot; / &quot;do this right after resuming&quot;, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, we're not checkpointing, but several of the characteristics of  
</span><br>
<span class="quotelev1">&gt; this action are pretty similar to what is required for checkpointing/ 
</span><br>
<span class="quotelev1">&gt; restarting.  So it might be good to use that framework for it...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Previous message:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5041.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>Reply:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
