<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 12:04:19 2006" -->
<!-- isoreceived="20060412160419" -->
<!-- sent="Wed, 12 Apr 2006 10:04:18 -0600" -->
<!-- isosent="20060412160418" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SilverStorm IB" -->
<!-- id="EF4BA4F6-590F-421E-BB0B-3B28054F8566_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s7wjkltlies9li_at_rygel.lnxi.com" -->
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
<strong>Date:</strong> 2006-04-12 12:04:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2006, at 9:49 AM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; Disclaimer:  This isn't a support request per se; just gathering data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm able to compile Open MPI when SilverStorm's Linux IB drivers  
</span><br>
<span class="quotelev1">&gt; are being
</span><br>
<span class="quotelev1">&gt; used (using the MVAPI device).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it doesn't really work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A simple 'hello world' that simply returns the MPI rank seems to work
</span><br>
<span class="quotelev1">&gt; fine, but whenever I try to do anything interesting with MPI (even
</span><br>
<span class="quotelev1">&gt; something as common as linpack), nothing happens-- literally.  No  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; messages, no work done; even the CPU utilization is zero.  All the  
</span><br>
<span class="quotelev1">&gt; nodes
</span><br>
<span class="quotelev1">&gt; have PIDs, orted daemons, etc. for the job, but the utilization  
</span><br>
<span class="quotelev1">&gt; from them
</span><br>
<span class="quotelev1">&gt; is zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SilverStorm's IB stack is apprently close enough to MVAPI to  
</span><br>
<span class="quotelev1">&gt; compile, but
</span><br>
<span class="quotelev1">&gt; not close enough to work.  Has anybody had any success with  
</span><br>
<span class="quotelev1">&gt; SilverStorm's
</span><br>
<span class="quotelev1">&gt; Linux drivers with Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, I'm not really asking for somebody to make it to work, or  
</span><br>
<span class="quotelev1">&gt; for any
</span><br>
<span class="quotelev1">&gt; development; but if there is a near zero effort method somebody  
</span><br>
<span class="quotelev1">&gt; knows of
</span><br>
<span class="quotelev1">&gt; to get it to work, I'd be interested.  Beyond that... well, the 2nd  
</span><br>
<span class="quotelev1">&gt; gen
</span><br>
<span class="quotelev1">&gt; OpenIB.org drivers are on the horizon...
</span><br>
<p>We've tested against the SilverStorm drivers for OS X with success,  
<br>
but I don't think anyone has tried the Linux drivers.  A quick poll  
<br>
of the developers show that none of us has access to a Linux cluster  
<br>
using the SilverStorm stack, so we can't really look too deeply at  
<br>
the problem.  If you compile with --enable-debug, are there any error  
<br>
messages that show up?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<li><strong>In reply to:</strong> <a href="1033.php">Troy Telford: "[OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1035.php">Troy Telford: "Re: [OMPI users] SilverStorm IB"</a>
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
