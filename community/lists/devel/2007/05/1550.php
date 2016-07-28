<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 17 12:21:16 2007" -->
<!-- isoreceived="20070517162116" -->
<!-- sent="Thu, 17 May 2007 10:20:35 -0600" -->
<!-- isosent="20070517162035" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="3C51D572-4B69-43BB-AABA-91CDAFEB1B32_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AA76F64A-C47A-44A4-9CFB-CDB036980B1E_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-17 12:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1549.php">Jeff Squyres: "[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1549.php">Jeff Squyres: "[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the other hand, since the MPI standard explicitly says you're not  
<br>
allowed to call fork() or system() during the MPI application and  
<br>
sense the network should really cope with this in some way, if it  
<br>
further complicates the code *at all*, I'm strongly against it.   
<br>
Especially since it won't really solve the problem.  For example,  
<br>
with one-sided, I'm not going to go out of my way to send the first  
<br>
and last bit of the buffer so the user can touch those pages while  
<br>
calling fork.
<br>
<p>Also, if I understand the leave_pinned protocol, this still won't  
<br>
really solve anything for the general case -- leave pinned won't send  
<br>
any data eagerly if the buffer is already pinned, so there are still  
<br>
going to be situations where the user can cause problems.  Now we  
<br>
have a situation where sometimes it works and sometimes it doesn't  
<br>
and we pretend to support fork()/system() in certain cases.  Seems  
<br>
like actually fixing the problem the &quot;right way&quot; would be the right  
<br>
path forward...
<br>
<p>Brian
<br>
<p>On May 17, 2007, at 10:10 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Moving to devel; this question seems worthwhile to push out to the
</span><br>
<span class="quotelev1">&gt; general development community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been coming across an increasing number of customers and other
</span><br>
<span class="quotelev1">&gt; random OMPI users who use system().  So if there's zero impact on
</span><br>
<span class="quotelev1">&gt; performance and it doesn't make the code [more] incredibly horrible
</span><br>
<span class="quotelev1">&gt; [than it already is], I'm in favor of this change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 17, 2007, at 7:00 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I thought about changing pipeline protocol to send data from the
</span><br>
<span class="quotelev2">&gt;&gt; end of
</span><br>
<span class="quotelev2">&gt;&gt; the message instead of the middle like it does now. The rationale
</span><br>
<span class="quotelev2">&gt;&gt; behind
</span><br>
<span class="quotelev2">&gt;&gt; this is better fork() support. When application forks, child doesn't
</span><br>
<span class="quotelev2">&gt;&gt; inherit registered memory, so IB providers educate users to not touch
</span><br>
<span class="quotelev2">&gt;&gt; buffers that were owned by the MPI before fork in a child process.  
</span><br>
<span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt; problem is that granularity of registration is HW page (4K), so last
</span><br>
<span class="quotelev2">&gt;&gt; page of the buffer may contain also other application's data and user
</span><br>
<span class="quotelev2">&gt;&gt; may be unaware of this and be very surprised by SIGSEGV. If pipeline
</span><br>
<span class="quotelev2">&gt;&gt; protocol will send data from the end of a buffer then the last  
</span><br>
<span class="quotelev2">&gt;&gt; page of
</span><br>
<span class="quotelev2">&gt;&gt; the buffer will not be registered (and first page is never registered
</span><br>
<span class="quotelev2">&gt;&gt; because we send beginning of the buffer eagerly with rendezvous
</span><br>
<span class="quotelev2">&gt;&gt; packet)
</span><br>
<span class="quotelev2">&gt;&gt; so this situation will be avoided. It should have zero impact on
</span><br>
<span class="quotelev2">&gt;&gt; performance. What do you think? How common for MPI applications to
</span><br>
<span class="quotelev2">&gt;&gt; fork()?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1549.php">Jeff Squyres: "[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1549.php">Jeff Squyres: "[OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1552.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Reply:</strong> <a href="1555.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
