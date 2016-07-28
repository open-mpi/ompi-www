<?
$subject_val = "Re: [OMPI devel] v1.2 branch mpi_preconnect_all";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 11:11:47 2007" -->
<!-- isoreceived="20071107161147" -->
<!-- sent="Wed, 7 Nov 2007 11:11:39 -0500" -->
<!-- isosent="20071107161139" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.2 branch mpi_preconnect_all" -->
<!-- id="2D3F95CB-93A5-4ABF-96C9-1DFA76B11B4E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47162239.8000406_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-11-07 11:11:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2563.php">Brian W. Barrett: "[OMPI devel] Incorrect one-sided test"</a>
<li><strong>Previous message:</strong> <a href="2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2455.php">Don Kerr: "[OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don, Galen, and I talked about this in depth on the phone today and  
<br>
think that it is a symptom of the same issue discussed in this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2007/10/2382.php">http://www.open-mpi.org/community/lists/devel/2007/10/2382.php</a>
<br>
<p>Note my message in that thread from just a few minutes ago:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2007/11/2561.php">http://www.open-mpi.org/community/lists/devel/2007/11/2561.php</a>
<br>
<p>We think that the proposed solution to that thread will also fix the  
<br>
mpi_preconnect_all issues (i.e., the ping-pong that Don proposes in  
<br>
his mail should not be necessary).
<br>
<p><p><p>On Oct 17, 2007, at 10:54 AM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have noticed an issue in the 1.2 branch when mpi_preconnect_all=1.  
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; one way communication pattern (ranks either send or receive from each
</span><br>
<span class="quotelev1">&gt; other) may not fully establish connection with peers. Example, if I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; a 3 process mpi job and rank 0 does not do any mpi communication after
</span><br>
<span class="quotelev1">&gt; MPI_Init() the other ranks attempts to connect will not be  
</span><br>
<span class="quotelev1">&gt; progressed (I
</span><br>
<span class="quotelev1">&gt; have seen this with tcp and udapl).
</span><br>
<span class="quotelev1">&gt; The preconnect pattern has changed slightly in the trunk but  
</span><br>
<span class="quotelev1">&gt; essentially
</span><br>
<span class="quotelev1">&gt; it is still a one way communication, either send or receive with each
</span><br>
<span class="quotelev1">&gt; rank. So although the issue I see in the 1.2 branch does not appear in
</span><br>
<span class="quotelev1">&gt; the trunk I wonder if this will show up again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An alternative to the preconnect pattern that comes to mind would be  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; perform a send and receive between all ranks to ensure that  
</span><br>
<span class="quotelev1">&gt; connections
</span><br>
<span class="quotelev1">&gt; have been fully established.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have thoughts or comments on this, or reasons not to have
</span><br>
<span class="quotelev1">&gt; all ranks send and receive from all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2563.php">Brian W. Barrett: "[OMPI devel] Incorrect one-sided test"</a>
<li><strong>Previous message:</strong> <a href="2561.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/10/2455.php">Don Kerr: "[OMPI devel] v1.2 branch mpi_preconnect_all"</a>
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
