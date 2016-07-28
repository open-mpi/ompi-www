<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 11:49:38 2006" -->
<!-- isoreceived="20060412154938" -->
<!-- sent="Wed, 12 Apr 2006 09:49:23 -0600" -->
<!-- isosent="20060412154923" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="[OMPI users] SilverStorm IB" -->
<!-- id="op.s7wjkltlies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 11:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Maybe reply:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disclaimer:  This isn't a support request per se; just gathering data.
<br>
<p>I'm able to compile Open MPI when SilverStorm's Linux IB drivers are being  
<br>
used (using the MVAPI device).
<br>
<p>However, it doesn't really work.
<br>
<p>A simple 'hello world' that simply returns the MPI rank seems to work  
<br>
fine, but whenever I try to do anything interesting with MPI (even  
<br>
something as common as linpack), nothing happens-- literally.  No error  
<br>
messages, no work done; even the CPU utilization is zero.  All the nodes  
<br>
have PIDs, orted daemons, etc. for the job, but the utilization from them  
<br>
is zero.
<br>
<p>SilverStorm's IB stack is apprently close enough to MVAPI to compile, but  
<br>
not close enough to work.  Has anybody had any success with SilverStorm's  
<br>
Linux drivers with Open MPI?
<br>
<p>Again, I'm not really asking for somebody to make it to work, or for any  
<br>
development; but if there is a near zero effort method somebody knows of  
<br>
to get it to work, I'd be interested.  Beyond that... well, the 2nd gen  
<br>
OpenIB.org drivers are on the horizon...
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Hugh Merz: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Reply:</strong> <a href="1034.php">Brian Barrett: "Re: [OMPI users] SilverStorm IB"</a>
<li><strong>Maybe reply:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
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
