<?
$subject_val = "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 15:30:49 2008" -->
<!-- isoreceived="20081211203049" -->
<!-- sent="Thu, 11 Dec 2008 15:30:40 -0500" -->
<!-- isosent="20081211203040" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT" -->
<!-- id="5AEE43A2-86DC-4D58-8F1F-4341109F9D7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3E888CCD-135D-4A18-B4E2-581B75276D89_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-12-11 15:30:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm quite sure that the CM CPC stuff (both IBCM -- which doesn't fully  
<br>
work anyway -- and RDMA CM) will timeout and Bad Things will happen if  
<br>
you interrupt it in the middle of some network transactions.  The  
<br>
(kernel-imposed) timeout for RDMACM is pretty short -- on the order of  
<br>
a minute or two.
<br>
<p><p>On Dec 11, 2008, at 3:19 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I would expect that you will hit problems with timeouts throughout  
</span><br>
<span class="quotelev1">&gt; the codebase as Jeff mentioned, particularly with network  
</span><br>
<span class="quotelev1">&gt; connections. Having a 'prepare to suspend' signal followed by a  
</span><br>
<span class="quotelev1">&gt; 'suspend now' signal might work since it should provide enough of a  
</span><br>
<span class="quotelev1">&gt; window to ready the application for the suspension.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the first step is to try it, being sure to let the process  
</span><br>
<span class="quotelev1">&gt; stay suspended for a considerable amount of time (15 min to an hour  
</span><br>
<span class="quotelev1">&gt; at least) and see what effects this has. I would expect a series of  
</span><br>
<span class="quotelev1">&gt; errors, but I haven't tried it so I can't say for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are errors then looking at the internal notification stuff  
</span><br>
<span class="quotelev1">&gt; that the C/R mechanism uses would be a good place to start since it  
</span><br>
<span class="quotelev1">&gt; handles these types of issues for a checkpoint operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2008, at 3:08 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2008, at 2:55 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well under SGE it allows you to have SGE send mpirun SIGUSR1 so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many minutes before sending the Suspend signal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My point is that the right approach might be to work in the context  
</span><br>
<span class="quotelev2">&gt;&gt; of Josh's CR stuff -- he's already got hooks for &quot;do this right  
</span><br>
<span class="quotelev2">&gt;&gt; before pausing for checkpoint&quot; / &quot;do this right after resuming&quot;, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure, we're not checkpointing, but several of the characteristics  
</span><br>
<span class="quotelev2">&gt;&gt; of this action are pretty similar to what is required for  
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing/restarting.  So it might be good to use that  
</span><br>
<span class="quotelev2">&gt;&gt; framework for it...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5042.php">Josh Hursey: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
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
