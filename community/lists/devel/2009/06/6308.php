<?
$subject_val = "[OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 11:04:15 2009" -->
<!-- isoreceived="20090623150415" -->
<!-- sent="Tue, 23 Jun 2009 08:04:12 -0700" -->
<!-- isosent="20090623150412" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="4A40EEEC.1070404_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] trac ticket 1944 and pending sends<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 11:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6307.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6310.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Maybe reply:</strong> <a href="6323.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The sm BTL used to have two mechanisms for dealing with congested 
<br>
FIFOs.  One was to grow the FIFOs.  Another was to queue pending sends 
<br>
locally (on the sender's side).  I think the grow-FIFO mechanism was 
<br>
typically invoked and the pending-send mechanism used only under extreme 
<br>
circumstances (no more memory).
<br>
<p>With the sm makeover of 1.3.2, we dropped the ability to grow FIFOs.  
<br>
The code added complexity and there seemed to be no need to have two 
<br>
mechanisms to deal with congested FIFOs.  In ticket 1944, however, we 
<br>
see that repeated collectives can produce hangs, and this seems to be 
<br>
due to the pending-send code not adequately dealing with congested FIFOs.
<br>
<p>Today, when a process tries to write to a remote FIFO and fails, it 
<br>
queues the write as a pending send.  The only condition under which it 
<br>
retries pending sends is when it gets a fragment back from a remote process.
<br>
<p>I think the logic must have been that the FIFO got congested because we 
<br>
issued too many sends.  Getting a fragment back indicates that the 
<br>
remote process has made progress digesting those sends.  In ticket 1944, 
<br>
we see that a FIFO can also get congested from too many returning 
<br>
fragments.  Further, with shared FIFOs, a FIFO could become congested 
<br>
due to the activity of a third-party process.
<br>
<p>In sum, getting a fragment back from a remote process is a poor 
<br>
indicator that it's time to retry pending sends.
<br>
<p>Maybe the real way to know when to retry pending sends is just to check 
<br>
if there's room on the FIFO.
<br>
<p>So, I'll try modifying MCA_BTL_SM_FIFO_WRITE.  It'll start by checking 
<br>
if there are pending sends.  If so, it'll retry them before performing 
<br>
the requested write.  This should also help preserve ordering a little 
<br>
better.  I'm guessing this will not hurt our message latency in any 
<br>
meaningful way, but I'll check this out.
<br>
<p>Meanwhile, I wanted to check in with y'all for any guidance you might have.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6307.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6310.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Maybe reply:</strong> <a href="6323.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
