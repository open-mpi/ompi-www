<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 17:34:16 2005" -->
<!-- isoreceived="20050818223416" -->
<!-- sent="Thu, 18 Aug 2005 16:34:13 -0600" -->
<!-- isosent="20050818223413" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Re:  Question on ROMIO" -->
<!-- id="47DAA141-0784-40A9-BCC6-36E3B69B1F11_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="695BB174-AFD2-49C4-A580-588320C7F798_at_open-mpi.org" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 17:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<li><strong>Previous message:</strong> <a href="0209.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<li><strong>Reply:</strong> <a href="0211.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2005, at 4:24 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 18, 2005, at 4:53 PM, David Daniel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A question for those who did the ROMIO port...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ROMIO component seems to be based on version 1.2.5.1 (the last
</span><br>
<span class="quotelev2">&gt;&gt; version of ROMIO released independently).  Did anyone make any
</span><br>
<span class="quotelev2">&gt;&gt; progress using the ROMIO from later MPICH's (version 1.2.6 etc.)?
</span><br>
<span class="quotelev2">&gt;&gt; Seems to me these are fairly broken as far as compatibility with
</span><br>
<span class="quotelev2">&gt;&gt; other MPIs is concerned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, we took the last stable individual release of ROMIO for OMPI.
</span><br>
<span class="quotelev1">&gt; We haven't looked at bringing in the MPICH-integrated releases.  I'm
</span><br>
<span class="quotelev1">&gt; not sure how hard it will be to rip out the MPICH-specific stuff from
</span><br>
<span class="quotelev1">&gt; ROMIO, but at this point, it would take some work to replicate
</span><br>
<span class="quotelev1">&gt; everything we did to integrate ROMIO into OMPI.  Is this a 1.0
</span><br>
<span class="quotelev1">&gt; requirement?
</span><br>
<p>No -- Don't panic! The parallel I/O folks here are just interested in  
<br>
seeing whether there are fixes in later versions that would help with  
<br>
performance.
<br>
<p>I was trying to port 1.2.6 into LA-MPI but it is painful (i.e.  
<br>
broken) with an MPI implementation that doesn't have MPI_Info  
<br>
defined.  My guess is it will be easier with Open MPI.
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<li><strong>Previous message:</strong> <a href="0209.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0211.php">Brian Barrett: "Re:  Question on ROMIO"</a>
<li><strong>Reply:</strong> <a href="0211.php">Brian Barrett: "Re:  Question on ROMIO"</a>
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
