<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 18:38:39 2006" -->
<!-- isoreceived="20060309233839" -->
<!-- sent="Thu, 9 Mar 2006 18:38:29 -0500" -->
<!-- isosent="20060309233829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]" -->
<!-- id="CD05F942-50FC-4644-AD5B-FF88BF7B802C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="440DE0AE.9080709_at_blue.cft.edu.pl" -->
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
<strong>Date:</strong> 2006-03-09 18:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Jeff Squyres: "Re: [OMPI users] MPI for DSP"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0793.php">Cezary Sliwa: "[OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please note that I replied to your original post:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2006/02/0712.php">http://www.open-mpi.org/community/lists/users/2006/02/0712.php</a>
<br>
<p>Was that not sufficient?  If not, please provide more details on what  
<br>
you are attempting to do and what is occurring.  Thanks.
<br>
<p><p><p>On Mar 7, 2006, at 2:36 PM, Cezary Sliwa wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that MPI_SEND blocks forever (the message is still  
</span><br>
<span class="quotelev1">&gt; not delivered after many hours).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cezary Sliwa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Cezary Sliwa &lt;sliwa_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: February 22, 2006 10:07:04 AM EST
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: MPI_SEND blocks when crossing node boundary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program runs fine with openmpi-1.0.1 when run from the command  
</span><br>
<span class="quotelev1">&gt; line (5 processes with empty host file), but when I schedule it  
</span><br>
<span class="quotelev1">&gt; with qsub to run on 2 nodes it blocks on MPI_SEND
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) info stack
</span><br>
<span class="quotelev1">&gt; #0  0x00000034db30c441 in __libc_sigaction () from /lib64/tls/ 
</span><br>
<span class="quotelev1">&gt; libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000573002 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000582a3c in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt; #3  0x00000000005729f2 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000577e68 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #5  0x00000000004eed4a in mca_pml_ob1_send ()
</span><br>
<span class="quotelev1">&gt; #6  0x000000000049abdd in PMPI_Send ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000499dc0 in pmpi_send__ ()
</span><br>
<span class="quotelev1">&gt; #8  0x000000000042d5d8 in MAIN__ () at main.f:90
</span><br>
<span class="quotelev1">&gt; #9  0x00000000005877de in main (argc=Variable &quot;argc&quot; is not available.
</span><br>
<span class="quotelev1">&gt; )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Jeff Squyres: "Re: [OMPI users] MPI for DSP"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Tom Rosmond: "[OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0793.php">Cezary Sliwa: "[OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0817.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
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
