<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 17:28:15 2008" -->
<!-- isoreceived="20080714212815" -->
<!-- sent="Mon, 14 Jul 2008 17:28:09 -0400" -->
<!-- isosent="20080714212809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="572936FD-BD6D-4E2A-969D-28C19F902D10_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="000601c8e5f7$2f2e5eb0$9d37170a_at_amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 17:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 5:18 PM, Sean Hefty wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Open MPI certainly could be buggy with IBCM, of course -- but it's
</span><br>
<span class="quotelev2">&gt;&gt; fishy that the same exact &quot;mpirun ...&quot; command line works one time  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; fails the next (it's kinda random when the problem occurs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just want to make sure that service ID collision isn't the issue.   
</span><br>
<span class="quotelev1">&gt; (It may be
</span><br>
<span class="quotelev1">&gt; unlikely, but it could happen.)  Using the PID is random, and could  
</span><br>
<span class="quotelev1">&gt; cause
</span><br>
<span class="quotelev1">&gt; conflicts with other services, depending on the value that's used.   
</span><br>
<span class="quotelev1">&gt; I know SDP
</span><br>
<span class="quotelev1">&gt; reserve ranges of service ID values.
</span><br>
<p>Ah!  I did not realize that there were other services on the machine  
<br>
that were using / reserving IBCM service ID's.
<br>
<p>Is there a service ID range that is guaranteed to be available for  
<br>
user apps?
<br>
<p><span class="quotelev1">&gt; Is the service ID specified in host or network order?
</span><br>
<p>Host order -- just the result of getpid().
<br>
<p><span class="quotelev1">&gt; Do you know the range of
</span><br>
<span class="quotelev1">&gt; PIDs?  I can see if any well known apps might collide.
</span><br>
<p>I never looked at the range of PIDs that failed.  Pasha / Brad --  
<br>
could you look into this?  It might be that simple...
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
<li><strong>Next message:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4348.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
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
