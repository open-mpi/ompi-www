<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 12:10:47 2007" -->
<!-- isoreceived="20070517161047" -->
<!-- sent="Thu, 17 May 2007 09:10:30 -0700" -->
<!-- isosent="20070517161030" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="AA76F64A-C47A-44A4-9CFB-CDB036980B1E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070517140004.GT6273_at_minantech.com" -->
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
<strong>Date:</strong> 2007-05-17 12:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Moving to devel; this question seems worthwhile to push out to the  
<br>
general development community.
<br>
<p>I've been coming across an increasing number of customers and other  
<br>
random OMPI users who use system().  So if there's zero impact on  
<br>
performance and it doesn't make the code [more] incredibly horrible  
<br>
[than it already is], I'm in favor of this change.
<br>
<p><p><p>On May 17, 2007, at 7:00 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I thought about changing pipeline protocol to send data from the  
</span><br>
<span class="quotelev1">&gt; end of
</span><br>
<span class="quotelev1">&gt; the message instead of the middle like it does now. The rationale  
</span><br>
<span class="quotelev1">&gt; behind
</span><br>
<span class="quotelev1">&gt; this is better fork() support. When application forks, child doesn't
</span><br>
<span class="quotelev1">&gt; inherit registered memory, so IB providers educate users to not touch
</span><br>
<span class="quotelev1">&gt; buffers that were owned by the MPI before fork in a child process. The
</span><br>
<span class="quotelev1">&gt; problem is that granularity of registration is HW page (4K), so last
</span><br>
<span class="quotelev1">&gt; page of the buffer may contain also other application's data and user
</span><br>
<span class="quotelev1">&gt; may be unaware of this and be very surprised by SIGSEGV. If pipeline
</span><br>
<span class="quotelev1">&gt; protocol will send data from the end of a buffer then the last page of
</span><br>
<span class="quotelev1">&gt; the buffer will not be registered (and first page is never registered
</span><br>
<span class="quotelev1">&gt; because we send beginning of the buffer eagerly with rendezvous  
</span><br>
<span class="quotelev1">&gt; packet)
</span><br>
<span class="quotelev1">&gt; so this situation will be avoided. It should have zero impact on
</span><br>
<span class="quotelev1">&gt; performance. What do you think? How common for MPI applications to
</span><br>
<span class="quotelev1">&gt; fork()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
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
<li><strong>Next message:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1548.php">Brian Barrett: "Re: [OMPI devel] Autotools Upgrade Time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
