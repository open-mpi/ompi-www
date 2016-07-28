<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 19:39:33 2011" -->
<!-- isoreceived="20111129003933" -->
<!-- sent="Mon, 28 Nov 2011 17:39:25 -0700" -->
<!-- isosent="20111129003925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="899CB849-DB8B-4C02-8591-5750E9B1032B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B1F152A0-1C93-446B-B2D0-FF73DB68409B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 19:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17849.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17849.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2011, at 5:32 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 28, 2011, at 6:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; Right-o.  Knew there was something I forgot...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So on rsh, we do not put envar mca params onto the orted cmd line. This has been noted repeatedly on the user and devel lists, so it really has always been the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So they're sent as part of the launch command (i.e., out of band -- not on the rsh/ssh command line), right?
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning that per my output from above, what Paul was trying should have worked, no?  I.e., setenv'ing OMPI_&lt;whatever&gt;, and those env vars should magically show up in the launched process.
</span><br>
<p>In the -launched process- yes. However, his problem was that they do not show up for the -orteds-, and thus the orteds don't wireup correctly.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17849.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17849.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
