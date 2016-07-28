<?
$subject_val = "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 16:27:01 2009" -->
<!-- isoreceived="20090826202701" -->
<!-- sent="Wed, 26 Aug 2009 16:26:50 -0400" -->
<!-- isosent="20090826202650" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects" -->
<!-- id="FF66C526-83CC-47E3-AC9B-1754558399EA_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF0BC70DDF.BEE0726D-ON8525761E.006E3D12-8525761E.006FC573_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-26 16:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10493.php">Tim Miller: "[OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>In reply to:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2009, at 4:20 PM, twurgl_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I see.  My one script for all clusters calls
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl openib,mx,gm,tcp,sm,self ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so I'd need to add some logic above the mpirun line to figure out what
</span><br>
<span class="quotelev1">&gt; cluster I am on to setup the correct  mpirun line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; still seems like I should be able to do the mpirun line I have and  
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev1">&gt; tell me what it found, not what it can't find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the workaround...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -tom
</span><br>
<p>Rather than list them all, OMPI will try them all since they are all  
<br>
compiled. By default, it tries faster networks before TCP. Simply run:
<br>
<p>$ mpirun ...
<br>
<p>and do not specify the network. It should so the right thing.
<br>
<p>I think others have asked for a confirmation of selected network, but  
<br>
I do not know if that feature exists.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10493.php">Tim Miller: "[OMPI users] Problem with repeatedly spawning a few processes"</a>
<li><strong>Previous message:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
<li><strong>In reply to:</strong> <a href="10491.php">twurgl_at_[hidden]: "Re: [OMPI users] Using OPENMPI configured for MX, GM and OPENIB interconnects"</a>
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
