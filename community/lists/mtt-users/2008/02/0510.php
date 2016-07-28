<?
$subject_val = "Re: [MTT users] NetPIPE timeouts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 29 10:25:13 2008" -->
<!-- isoreceived="20080229152513" -->
<!-- sent="Fri, 29 Feb 2008 10:25:04 -0500" -->
<!-- isosent="20080229152504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] NetPIPE timeouts" -->
<!-- id="71A8C090-FB15-4B58-9CF1-A1D94FA64F26_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080227191935.GC51303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] NetPIPE timeouts<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-29 10:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Ethan Mallove: "Re: [MTT users] Good MPI collectives bakeoff permalinks"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Ethan Mallove: "[MTT users] NetPIPE timeouts"</a>
<li><strong>In reply to:</strong> <a href="0509.php">Ethan Mallove: "[MTT users] NetPIPE timeouts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2008, at 2:19 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; We were seeing NetPIPE runs timing around 45sec the other
</span><br>
<span class="quotelev1">&gt; day, so I set the timeout value to -1 (which is infinity),
</span><br>
<span class="quotelev1">&gt; and last night a v1.2 NetPIPE run took 3 hrs!
</span><br>
<p>Yoinks!
<br>
<p><span class="quotelev1">&gt; It looks like
</span><br>
<span class="quotelev1">&gt; the test got stuck:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0: burl-ct-v440-2
</span><br>
<span class="quotelev1">&gt;  1: burl-ct-v440-2
</span><br>
<span class="quotelev1">&gt;  2: burl-ct-v440-2
</span><br>
<span class="quotelev1">&gt;  3: burl-ct-v440-2
</span><br>
<span class="quotelev1">&gt;  Now starting the main loop
</span><br>
<span class="quotelev1">&gt;    0:       1 bytes      5 times --&gt;      0.49 Mbps in      15.59 usec
</span><br>
<p>You might want to run this by hand and see what's going on.  Don did  
<br>
make some udapl btl changes recently.
<br>
<p><span class="quotelev1">&gt; The other bizarre thing is that NetPIPE now passes with the
</span><br>
<span class="quotelev1">&gt; infinite timeout, but seems to take the *same* duration as
</span><br>
<span class="quotelev1">&gt; the timed out runs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mtt/index.php?do_redir=539">http://www.open-mpi.org/mtt/index.php?do_redir=539</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I was expecting NetPIPE to take *longer* than 45sec.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas why this would be?
</span><br>
<p>Not offhand, no.  I'd run them by hand and see what's going on...
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
<li><strong>Next message:</strong> <a href="0511.php">Ethan Mallove: "Re: [MTT users] Good MPI collectives bakeoff permalinks"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Ethan Mallove: "[MTT users] NetPIPE timeouts"</a>
<li><strong>In reply to:</strong> <a href="0509.php">Ethan Mallove: "[MTT users] NetPIPE timeouts"</a>
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
