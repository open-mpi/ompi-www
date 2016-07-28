<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 25 11:17:59 2006" -->
<!-- isoreceived="20060225161759" -->
<!-- sent="Sat, 25 Feb 2006 11:17:52 -0500" -->
<!-- isosent="20060225161752" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SEND blocks when crossing node boundary" -->
<!-- id="CCDAE69E-274D-42F9-AA46-F9FEFA656D5B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43FC7E18.30309_at_blue.cft.edu.pl" -->
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
<strong>Date:</strong> 2006-02-25 11:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0713.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0685.php">Cezary Sliwa: "[OMPI users] MPI_SEND blocks when crossing node boundary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that this is correct MPI behavior -- the MPI standard does not  
<br>
define whether MPI_SEND blocks or not.  Indeed, codes that assume  
<br>
that MPI_SEND blocks (or doesn't block) are technically not correct  
<br>
MPI codes.  The issue is that different networks (e.g., shared memory  
<br>
vs. TCP) may have different transport characteristics, and the MPI  
<br>
may need to block in some situations (especially for large messages).
<br>
<p>But don't worry -- it's usually pretty easy to fix such issues in  
<br>
applications.  Check out the MPI-1 document, section 3.5, &quot;Semantics  
<br>
of point to point communication&quot; -- in particular, example 3.9 (page  
<br>
33).
<br>
<p>For example, if you have code that tries to exchange messages but  
<br>
relies on the MPI implementation to buffer sends (i.e., assumes that  
<br>
MPI_SEND won't block), it may look something like this:
<br>
<p>if (rank == 0 &amp;&amp; rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(..., 1-rank, tag, comm)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(..., 1-rank, tag, comm, &amp;request)
<br>
}
<br>
<p>This code can potentially deadlock if MPI_SEND decides to block.   
<br>
It's easy enough to fix -- one way is to do something like this:
<br>
<p>if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(..., 1, tag, comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(..., 1, tag, comm, &amp;status);
<br>
} else if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(..., 0, tag, comm, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(..., 0, tag, comm);
<br>
}
<br>
<p>This ensures that the send from 0-&gt;1 completes before you try to send  
<br>
1-&gt;0.  If you want to get concurrency of both sends, then use non- 
<br>
blocking primitives (e.g., MPI_Isend).
<br>
<p>Good luck.
<br>
<p><p>On Feb 22, 2006, at 10:07 AM, Cezary Sliwa wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program runs fine with openmpi-1.0.1 when run from the command line
</span><br>
<span class="quotelev1">&gt; (5 processes with empty host file), but when I schedule it with  
</span><br>
<span class="quotelev1">&gt; qsub to
</span><br>
<span class="quotelev1">&gt; run on 2 nodes it blocks on MPI_SEND
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) info stack
</span><br>
<span class="quotelev1">&gt; #0  0x00000034db30c441 in __libc_sigaction () from
</span><br>
<span class="quotelev1">&gt; /lib64/tls/libpthread.so.0
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
<li><strong>Next message:</strong> <a href="0713.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] Job fails with mpiP"</a>
<li><strong>Previous message:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0685.php">Cezary Sliwa: "[OMPI users] MPI_SEND blocks when crossing node boundary"</a>
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
