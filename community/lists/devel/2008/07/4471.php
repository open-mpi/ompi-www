<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 12:26:24 2008" -->
<!-- isoreceived="20080728162624" -->
<!-- sent="Mon, 28 Jul 2008 12:22:01 -0400" -->
<!-- isosent="20080728162201" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="7BBB840E-C933-4982-A34A-AFD5A03111A0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="301DF092-0A08-4181-8090-194602EE69CF_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs since r19010<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 12:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4462.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2008, at 11:05 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; only openib works for me too,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but Glebs said to me once that it's illigal and I always need to  
</span><br>
<span class="quotelev2">&gt;&gt; use self btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't know - could be true. But if that is true, then we should  
</span><br>
<span class="quotelev1">&gt; check to see if that condition is met and error out - with an  
</span><br>
<span class="quotelev1">&gt; appropriate message - if so. Otherwise, how is a user supposed to  
</span><br>
<span class="quotelev1">&gt; know this condition?
</span><br>
<p>This used to be true, but I think we changed it a while ago (Pasha: do  
<br>
you remember?) because Mellanox HCAs are capable of send-to-self  
<br>
(process) and there were no code changes necessary to enable it.  So  
<br>
it allowed a slightly simpler command line.  This was quite a while  
<br>
ago, IIRC.
<br>
<p>All current iWARP adapters do not allow loopback communication at all  
<br>
(i.e., communication to either the same proc or other procs on the  
<br>
same host), so we added the following test in openib's add_procs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (IBV_TRANSPORT_IWARP == openib_btl-&gt;device-&gt;ib_dev- 
<br>
<span class="quotelev1"> &gt;transport_type &amp;&amp;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 != (ompi_proc-&gt;proc_flags &amp;&amp; OMPI_PROC_FLAG_LOCAL)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>(meaning: skip this proc if it's on the same host; let btl self handle  
<br>
it, etc.)
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
<li><strong>Next message:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4470.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4462.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
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
