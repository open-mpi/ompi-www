<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 04:51:20 2007" -->
<!-- isoreceived="20070518085120" -->
<!-- sent="Fri, 18 May 2007 11:51:07 +0300" -->
<!-- isosent="20070518085107" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto" -->
<!-- id="20070518085107.GA32628_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3C51D572-4B69-43BB-AABA-91CDAFEB1B32_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 04:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 17, 2007 at 10:20:35AM -0600, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On the other hand, since the MPI standard explicitly says you're not  
</span><br>
<span class="quotelev1">&gt; allowed to call fork() or system() during the MPI application and  
</span><br>
<span class="quotelev1">&gt; sense the network should really cope with this in some way, if it  
</span><br>
<span class="quotelev1">&gt; further complicates the code *at all*, I'm strongly against it.   
</span><br>
<span class="quotelev1">&gt; Especially since it won't really solve the problem.  For example,  
</span><br>
<span class="quotelev1">&gt; with one-sided, I'm not going to go out of my way to send the first  
</span><br>
<span class="quotelev1">&gt; and last bit of the buffer so the user can touch those pages while  
</span><br>
<span class="quotelev1">&gt; calling fork.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if I understand the leave_pinned protocol, this still won't  
</span><br>
<span class="quotelev1">&gt; really solve anything for the general case -- leave pinned won't send  
</span><br>
<span class="quotelev1">&gt; any data eagerly if the buffer is already pinned, so there are still  
</span><br>
<span class="quotelev1">&gt; going to be situations where the user can cause problems.  Now we  
</span><br>
<span class="quotelev1">&gt; have a situation where sometimes it works and sometimes it doesn't  
</span><br>
<span class="quotelev1">&gt; and we pretend to support fork()/system() in certain cases.  Seems  
</span><br>
<span class="quotelev1">&gt; like actually fixing the problem the &quot;right way&quot; would be the right  
</span><br>
<span class="quotelev1">&gt; path forward...
</span><br>
<p>This will not solve all the problems, it just slightly decries a chance
<br>
of a program to get SIGSEGV. We will not going to pretend that we
<br>
support fork() or system(). Obviously this change will not help to one
<br>
sided, leave_pinned or leave_pinned_pipeline cases. About &quot;complicating
<br>
the code&quot; issue I am working on solving deadlock in pipeline protocol
<br>
and for this I need a capability to send any part of a message by copy
<br>
in/out. The change I propose will be trivial to do on top of this. The
<br>
code will be more complex because of deadlock issues and not because of
<br>
the change we discuss now :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 17, 2007, at 10:10 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Moving to devel; this question seems worthwhile to push out to the
</span><br>
<span class="quotelev2">&gt; &gt; general development community.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been coming across an increasing number of customers and other
</span><br>
<span class="quotelev2">&gt; &gt; random OMPI users who use system().  So if there's zero impact on
</span><br>
<span class="quotelev2">&gt; &gt; performance and it doesn't make the code [more] incredibly horrible
</span><br>
<span class="quotelev2">&gt; &gt; [than it already is], I'm in favor of this change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 17, 2007, at 7:00 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  I thought about changing pipeline protocol to send data from the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the message instead of the middle like it does now. The rationale
</span><br>
<span class="quotelev3">&gt; &gt;&gt; behind
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this is better fork() support. When application forks, child doesn't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; inherit registered memory, so IB providers educate users to not touch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffers that were owned by the MPI before fork in a child process.  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem is that granularity of registration is HW page (4K), so last
</span><br>
<span class="quotelev3">&gt; &gt;&gt; page of the buffer may contain also other application's data and user
</span><br>
<span class="quotelev3">&gt; &gt;&gt; may be unaware of this and be very surprised by SIGSEGV. If pipeline
</span><br>
<span class="quotelev3">&gt; &gt;&gt; protocol will send data from the end of a buffer then the last  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; page of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the buffer will not be registered (and first page is never registered
</span><br>
<span class="quotelev3">&gt; &gt;&gt; because we send beginning of the buffer eagerly with rendezvous
</span><br>
<span class="quotelev3">&gt; &gt;&gt; packet)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so this situation will be avoided. It should have zero impact on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance. What do you think? How common for MPI applications to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fork()?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 			Gleb.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1556.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>Previous message:</strong> <a href="1554.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<li><strong>In reply to:</strong> <a href="1550.php">Brian Barrett: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1551.php">Patrick Geoffray: "Re: [OMPI devel] [RFC] Send data from the end of a buffer during pipeline proto"</a>
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
