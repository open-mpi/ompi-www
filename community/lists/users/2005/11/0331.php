<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 06:32:03 2005" -->
<!-- isoreceived="20051114113203" -->
<!-- sent="Mon, 14 Nov 2005 06:31:44 -0500" -->
<!-- isosent="20051114113144" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="ebdfa907513ec54c481dac8d221cfc7a_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a04f8864216a75ee3b7f1844cf524483_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-14 06:31:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0330.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0330.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.0rc6 is now available; we made some minor fixes in gm, the datatype 
<br>
engine, and the shared memory btl.  I'm not sure if your MX problem 
<br>
will be fixed, but please give it a whirl.  Let us know exactly which 
<br>
version of MX you are using, too.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/v1.0/">http://www.open-mpi.org/software/v1.0/</a>
<br>
<p>Thanks!
<br>
<p><p><p>On Nov 13, 2005, at 7:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I can't believe I missed that, sorry.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of the btl's are capable of doing loopback communication except
</span><br>
<span class="quotelev1">&gt; &quot;self.&quot;  Hence, you really can't run &quot;--mca btl foo&quot; if your app ever
</span><br>
<span class="quotelev1">&gt; sends to itself -- you really need to run &quot;--mca btl foo,self&quot; at a
</span><br>
<span class="quotelev1">&gt; minimum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not so much an optimization as it is a software engineering
</span><br>
<span class="quotelev1">&gt; decision; we didn't have to include the special send-to-self case in
</span><br>
<span class="quotelev1">&gt; any of the other btl components this way (i.e., less code, less complex
</span><br>
<span class="quotelev1">&gt; maintenance).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2005, at 7:12 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One other thing I noticed...  You specify -mca btl openib.  Try
</span><br>
<span class="quotelev2">&gt;&gt; specifying -mca btl openib,self.  The self component is used for
</span><br>
<span class="quotelev2">&gt;&gt; &quot;send to self&quot; operations.  This could be the cause of your failures.
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0330.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0330.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
