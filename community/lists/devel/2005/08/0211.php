<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 18:07:19 2005" -->
<!-- isoreceived="20050818230719" -->
<!-- sent="Thu, 18 Aug 2005 18:07:09 -0500" -->
<!-- isosent="20050818230709" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Question on ROMIO" -->
<!-- id="003B434A-1A1E-4319-8286-A0E41C7B4931_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47DAA141-0784-40A9-BCC6-36E3B69B1F11_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-08-18 18:07:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0212.php">Josh Hursey: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0210.php">David Daniel: "Re:  Question on ROMIO"</a>
<li><strong>In reply to:</strong> <a href="0210.php">David Daniel: "Re:  Question on ROMIO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2005, at 5:34 PM, David Daniel wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 18, 2005, at 4:24 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2005, at 4:53 PM, David Daniel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A question for those who did the ROMIO port...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ROMIO component seems to be based on version 1.2.5.1 (the last
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version of ROMIO released independently).  Did anyone make any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; progress using the ROMIO from later MPICH's (version 1.2.6 etc.)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to me these are fairly broken as far as compatibility with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other MPIs is concerned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, we took the last stable individual release of ROMIO for OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; We haven't looked at bringing in the MPICH-integrated releases.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; not sure how hard it will be to rip out the MPICH-specific stuff from
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO, but at this point, it would take some work to replicate
</span><br>
<span class="quotelev2">&gt;&gt; everything we did to integrate ROMIO into OMPI.  Is this a 1.0
</span><br>
<span class="quotelev2">&gt;&gt; requirement?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No -- Don't panic! The parallel I/O folks here are just interested in
</span><br>
<span class="quotelev1">&gt; seeing whether there are fixes in later versions that would help with
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to port 1.2.6 into LA-MPI but it is painful (i.e.
</span><br>
<span class="quotelev1">&gt; broken) with an MPI implementation that doesn't have MPI_Info
</span><br>
<span class="quotelev1">&gt; defined.  My guess is it will be easier with Open MPI.
</span><br>
<p>Ok.  It's something we're half looking at for 1.0, but it's going to  
<br>
be really tight on schedule.  Realistically, probably wouldn't fit in  
<br>
the schedule for the 1.0 release, but would be doable for a SC release.
<br>
<p>Brian
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
<li><strong>Next message:</strong> <a href="0212.php">Josh Hursey: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0210.php">David Daniel: "Re:  Question on ROMIO"</a>
<li><strong>In reply to:</strong> <a href="0210.php">David Daniel: "Re:  Question on ROMIO"</a>
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
