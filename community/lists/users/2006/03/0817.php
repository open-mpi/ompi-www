<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 06:02:53 2006" -->
<!-- isoreceived="20060310110253" -->
<!-- sent="Fri, 10 Mar 2006 12:01:06 +0100" -->
<!-- isosent="20060310110106" -->
<!-- name="Cezary Sliwa" -->
<!-- email="sliwa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]" -->
<!-- id="44115C72.4060907_at_blue.cft.edu.pl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD05F942-50FC-4644-AD5B-FF88BF7B802C_at_open-mpi.org" -->
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
<strong>From:</strong> Cezary Sliwa (<em>sliwa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-10 06:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0803.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Please note that I replied to your original post:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2006/02/0712.php">http://www.open-mpi.org/community/lists/users/2006/02/0712.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was that not sufficient?  If not, please provide more details on what  
</span><br>
<span class="quotelev1">&gt; you are attempting to do and what is occurring.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I have a simple program in which the rank 0 task dispatches compute 
<br>
tasks to other processes. It works fine on one 4-way SMP machine, but 
<br>
when I try to run it on two nodes, the processes on the other machine 
<br>
seem to spin in a loop inside MPI_SEND (a message is not delivered).
<br>
<p>Cezary Sliwa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 7, 2006, at 2:36 PM, Cezary Sliwa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hello again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that MPI_SEND blocks forever (the message is still  
</span><br>
<span class="quotelev2">&gt;&gt; not delivered after many hours).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cezary Sliwa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Cezary Sliwa &lt;sliwa_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: February 22, 2006 10:07:04 AM EST
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: MPI_SEND blocks when crossing node boundary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My program runs fine with openmpi-1.0.1 when run from the command  
</span><br>
<span class="quotelev2">&gt;&gt; line (5 processes with empty host file), but when I schedule it  
</span><br>
<span class="quotelev2">&gt;&gt; with qsub to run on 2 nodes it blocks on MPI_SEND
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) info stack
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00000034db30c441 in __libc_sigaction () from /lib64/tls/ 
</span><br>
<span class="quotelev2">&gt;&gt; libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x0000000000573002 in opal_evsignal_recalc ()
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x0000000000582a3c in poll_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00000000005729f2 in opal_event_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x0000000000577e68 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00000000004eed4a in mca_pml_ob1_send ()
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x000000000049abdd in PMPI_Send ()
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x0000000000499dc0 in pmpi_send__ ()
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x000000000042d5d8 in MAIN__ () at main.f:90
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00000000005877de in main (argc=Variable &quot;argc&quot; is not available.
</span><br>
<span class="quotelev2">&gt;&gt; )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0816.php">Jeff Squyres: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0803.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0818.php">Cezary Sliwa: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Reply:</strong> <a href="0819.php">Jeff Squyres: "Re: [OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
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
