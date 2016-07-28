<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 07:38:00 2007" -->
<!-- isoreceived="20070717113800" -->
<!-- sent="Tue, 17 Jul 2007 07:37:51 -0400" -->
<!-- isosent="20070717113751" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 801, Issue 1" -->
<!-- id="07EB5F2B-1132-4328-AA83-13622F81950D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="325001540707161128r7a59d3d5t55a2da63cb37c123_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 07:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1908.php">Pavel Shamis (Pasha): "Re: [OMPI devel] InfiniBand timeout errors"</a>
<li><strong>In reply to:</strong> <a href="1906.php">Matthew Moskewicz: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2007, at 2:28 PM, Matthew Moskewicz wrote:
<br>
<p><span class="quotelev2">&gt;&gt; MPI-2 does support the MPI_COMM_JOIN and MPI_COMM_ACCEPT/
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_CONNECT models.  We do support this in Open MPI, but the
</span><br>
<span class="quotelev2">&gt;&gt; restrictions (in terms of ORTE) may not be sufficient for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; perhaps i'll experiment -- any clues as to what the orte  
</span><br>
<span class="quotelev1">&gt; restrictions might be?
</span><br>
<p>The main constraint is that you have to run a &quot;persistent&quot; orted that  
<br>
will span all your MPI_COMM_WORLD's.  We have only lightly tested  
<br>
this scenario -- Ralph, can you comment more here?
<br>
<p><span class="quotelev2">&gt;&gt; - It also likely doesn't work yet; we started the integration work
</span><br>
<span class="quotelev2">&gt;&gt; and ran into a technical issue that required further discussion with
</span><br>
<span class="quotelev2">&gt;&gt; Platform.  They're currently looking into it; we stopped the LSF work
</span><br>
<span class="quotelev2">&gt;&gt; in ORTE until they get back to us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i see -- i might be trying to work on the 6.x support today. can you
</span><br>
<span class="quotelev1">&gt; give me any hints on what the problem was in case i run into the same
</span><br>
<span class="quotelev1">&gt; issue?
</span><br>
<p>Something was wrong with the lsb_launch() function; using it caused a  
<br>
significant slowdown in the job and it generally wasn't behaving as  
<br>
expected.  Platform issued a fix for me yesterday (i.e., a one-off/ 
<br>
unsupported binary for development purposes) that I haven't gotten to  
<br>
test yet.
<br>
<p><span class="quotelev2">&gt;&gt; - That being said, MPI_THREAD_MULTIPLE and MPI_COMM_SPAWN *might*
</span><br>
<span class="quotelev2">&gt;&gt; offer a way out here.  But I think a) THREAD_MULTIPLE isn't working
</span><br>
<span class="quotelev2">&gt;&gt; yet (other OMPI members are working on this), and b) even when
</span><br>
<span class="quotelev2">&gt;&gt; THREAD_MULTIPLE works, there will be ORTE issues to deal with
</span><br>
<span class="quotelev2">&gt;&gt; (canceling pending resource allocations, etc.).  Ralph mentioned that
</span><br>
<span class="quotelev2">&gt;&gt; someone else is working on such things on the TM/PBS/Torque side; I
</span><br>
<span class="quotelev2">&gt;&gt; haven't followed that effort closely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems that MPI_THREAD_MULTIPLE is to be avoided for now, but there
</span><br>
<span class="quotelev1">&gt; are perhaps other workarounds (using threads in other ways, etc.).
</span><br>
<span class="quotelev1">&gt; also, i'd love to hear about the existing efforts -- i'm hoping
</span><br>
<span class="quotelev1">&gt; someone working on them might be reading this ... ;)
</span><br>
<p>Ralph -- can you chime in on the TM/PBS/Torque efforts?
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
<li><strong>Next message:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1908.php">Pavel Shamis (Pasha): "Re: [OMPI devel] InfiniBand timeout errors"</a>
<li><strong>In reply to:</strong> <a href="1906.php">Matthew Moskewicz: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1910.php">Ralph Castain: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
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
