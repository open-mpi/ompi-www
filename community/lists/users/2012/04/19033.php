<?
$subject_val = "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 16:15:51 2012" -->
<!-- isoreceived="20120417201551" -->
<!-- sent="Tue, 17 Apr 2012 16:15:46 -0400" -->
<!-- isosent="20120417201546" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux" -->
<!-- id="3A063208-30A3-4B51-A584-4CA247FFD1D5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMY80yh7enKFyWcM_8Sztn95O6twoUEjSG+3so+vXf72LBsSSQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 16:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19034.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19032.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>In reply to:</strong> <a href="18998.php">Peter Sels: "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; I was out last week.
<br>
<p>MPI_SEND and MPI_RECV take pointers to the buffer to send and receive, respectively.
<br>
<p>When you send a scalar variable, like an int, you get the address of the buffer via the &amp; operator (e.g., MPI_Send(&amp;i, ...)).  When you send a new'ed/malloc'ed array, you only need to send the pointer value -- i.e., the address pointing to the buffer.  Don't send the address of the pointer, because then you're telling MPI to overwrite the pointer itself.  I.e.,:
<br>
<p>&nbsp;&nbsp;work = new char[...];
<br>
&nbsp;&nbsp;MPI_Send(work, ...)
<br>
<p>not
<br>
<p>&nbsp;&nbsp;work = new char[...];
<br>
&nbsp;&nbsp;MPI_Send(&amp;work, ...);
<br>
<p>More below.
<br>
<p>On Apr 11, 2012, at 3:03 PM, Peter Sels wrote:
<br>
<p><span class="quotelev1">&gt; Probably a buffer overrun or so, but I cannot see where.
</span><br>
<p>The buffer overrun is where you specify &amp;array in your MPI_SEND/MPI_RECV calls.
<br>
<p><span class="quotelev1">&gt; On linux I get:  Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Increasing the length gives more problems...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I get this code stable?
</span><br>
<span class="quotelev1">&gt; What am I doing wrong?
</span><br>
<span class="quotelev1">&gt; Is there a maximum length to MPI messages?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; For sending a string, do I use MPI_CHARACTER or MPI_BYTE or ...?
</span><br>
<p>MPI_BYTE.  MPI_CHARACTER is for Fortran CHARACTERs.
<br>
<p><span class="quotelev1">&gt; How come I cannot assert that my messages end in '\0' when received?
</span><br>
<span class="quotelev1">&gt; And how come that when I print them, I also get a segmentation fault?
</span><br>
<p>I think these two issues are symptoms of (work) vs. (&amp;work), from above.
<br>
<p><span class="quotelev1">&gt; Can I send two subsequent messages using MPI_Send, or do I have to do
</span><br>
<p>Sure.
<br>
<p><span class="quotelev1">&gt; the first as MPI_Isend and then do a MPI_Wait before the next
</span><br>
<span class="quotelev1">&gt; MPI_Send?...
</span><br>
<p>You can do multiple Isend's and then a Waitall, if you want.
<br>
<p><span class="quotelev1">&gt; Why do I not find code online for receiving the length first and then
</span><br>
<span class="quotelev1">&gt; allocating a buffer of this size and then receiving the next message?
</span><br>
<p>I don't know.  Perhaps you didn't google enough?  :-)
<br>
<p>FWIW, the new MPI-3 functions MPI_MPROBE and MPI_IMPROBE will help with unknown-length messages, too.  We have that implemented on the Open MPI SVN trunk, but they are not yet available in a stable release.  They'll debut in OMPI v1.7.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19034.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19032.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>In reply to:</strong> <a href="18998.php">Peter Sels: "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Reply:</strong> <a href="19037.php">Peter Sels: "Re: [OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
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
