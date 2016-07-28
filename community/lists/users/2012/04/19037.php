<?
$subject_val = "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 18 03:15:36 2012" -->
<!-- isoreceived="20120418071536" -->
<!-- sent="Wed, 18 Apr 2012 09:15:31 +0200" -->
<!-- isosent="20120418071531" -->
<!-- name="Peter Sels" -->
<!-- email="sels.peter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux" -->
<!-- id="CAMY80yjODXinbQ-dHgA65_=ojhzbUFpN1R9KtZbyQA1F4y+zEA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3A063208-30A3-4B51-A584-4CA247FFD1D5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux<br>
<strong>From:</strong> Peter Sels (<em>sels.peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-18 03:15:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19038.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19033.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19039.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19039.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeffrey,
<br>
<p>Thanks a lot for answering my message.
<br>
The &amp;work io work thing escaped my attention.
<br>
(Usually the compiler catches these things but of course here any
<br>
pointer type should work.
<br>
I suppose with C++ MPI it's possible to enforce more strict type
<br>
checking using template or so.)
<br>
<p>Anyway in the meantime I rewrote everything without this mistake, but still
<br>
wasn't aware of it.
<br>
Everything works as expected now.
<br>
<p>thanks,
<br>
<p>Peter
<br>
<p>On 17 April 2012 22:15, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying; I was out last week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_SEND and MPI_RECV take pointers to the buffer to send and receive, respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you send a scalar variable, like an int, you get the address of the buffer via the &amp; operator (e.g., MPI_Send(&amp;i, ...)). &#160;When you send a new'ed/malloc'ed array, you only need to send the pointer value -- i.e., the address pointing to the buffer. &#160;Don't send the address of the pointer, because then you're telling MPI to overwrite the pointer itself. &#160;I.e.,:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;work = new char[...];
</span><br>
<span class="quotelev1">&gt; &#160;MPI_Send(work, ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;work = new char[...];
</span><br>
<span class="quotelev1">&gt; &#160;MPI_Send(&amp;work, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2012, at 3:03 PM, Peter Sels wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probably a buffer overrun or so, but I cannot see where.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The buffer overrun is where you specify &amp;array in your MPI_SEND/MPI_RECV calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On linux I get: &#160;Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Increasing the length gives more problems...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I get this code stable?
</span><br>
<span class="quotelev2">&gt;&gt; What am I doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a maximum length to MPI messages?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For sending a string, do I use MPI_CHARACTER or MPI_BYTE or ...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_BYTE. &#160;MPI_CHARACTER is for Fortran CHARACTERs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How come I cannot assert that my messages end in '\0' when received?
</span><br>
<span class="quotelev2">&gt;&gt; And how come that when I print them, I also get a segmentation fault?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think these two issues are symptoms of (work) vs. (&amp;work), from above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I send two subsequent messages using MPI_Send, or do I have to do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the first as MPI_Isend and then do a MPI_Wait before the next
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send?...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do multiple Isend's and then a Waitall, if you want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why do I not find code online for receiving the length first and then
</span><br>
<span class="quotelev2">&gt;&gt; allocating a buffer of this size and then receiving the next message?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know. &#160;Perhaps you didn't google enough? &#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, the new MPI-3 functions MPI_MPROBE and MPI_IMPROBE will help with unknown-length messages, too. &#160;We have that implemented on the Open MPI SVN trunk, but they are not yet available in a stable release. &#160;They'll debut in OMPI v1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Peter Sels
www.LogicallyYours.com
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19038.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19036.php">Rohan Deshpande: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19033.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19039.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19039.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
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
