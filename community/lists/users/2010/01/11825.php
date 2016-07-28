<?
$subject_val = "Re: [OMPI users] shared memory (sm) module not working properly?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 17:02:04 2010" -->
<!-- isoreceived="20100119220204" -->
<!-- sent="Tue, 19 Jan 2010 15:01:54 -0700" -->
<!-- isosent="20100119220154" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory (sm) module not working properly?" -->
<!-- id="7C2394A6-4C4E-4230-8DB3-363F1158CB42_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="dcf611bd1001191214p12ae2fa3m2783b57352d02349_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory (sm) module not working properly?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 17:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shared memory doesn't extend between comm_spawn'd parent/child processes in Open MPI. Perhaps someday it will, but not yet.
<br>
<p><p>On Jan 19, 2010, at 1:14 PM, Nicolas Bock wrote:
<br>
<p><span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I understand better now what's happening, although I still don't know why. I have attached two small C codes that demonstrate the problem. The code in main.c uses MPI_Comm_spawn() to start the code in the second source, child.c. I can force the issue by running the main.c code with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl self,sm -np 1 ./main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[26121,2],0]) is on host: mujo
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[26121,1],0]) is on host: mujo
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that because the spawned process is in a different group? They are still all running on the same host, so at least in principle they should be able to communicate with each other via shared memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 16:08, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dunno.  Do lower np values succeed?  If so, at what value of np does the job no longer start?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps it's having a hard time creating the shared-memory backing file in /tmp.  I think this is a 64-Mbyte file.  If this is the case, try reducing the size of the shared area per this FAQ item:  <a href="http://www.open-mpi.org/faq/?category=sm#decrease-sm">http://www.open-mpi.org/faq/?category=sm#decrease-sm</a>  Most notably, reduce mpool_sm_min_size below 67108864.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also note trac ticket 2043, which describes problems with the sm BTL exposed by GCC 4.4.x compilers.  You need to get a sufficiently recent build to solve this.  But, those problems don't occur until you start passing messages, and here you're not even starting up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nicolas Bock wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I forgot to give more details on what versions I am using:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu 9.10, kernel 2.6.31-16-generic #53-Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; gcc (Ubuntu 4.4.1-4ubuntu8) 4.4.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 15, 2010 at 15:47, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello list,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running a job on a 4 quadcore AMD Opteron. This machine has 16 cores, which I can verify by looking at /proc/cpuinfo. However, when I run a job with
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 -mca btl self,sm job
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get this error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[56972,2],0]) is on host: rust
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[56972,1],0]) is on host: rust
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self sm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By adding the tcp btl I can run the job. I don't understand why openmpi claims that a pair of processes can not reach each other, all processor cores should have access to all memory after all. Do I need to set some other btl limit?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;main.c&gt;&lt;child.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
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
