<?
$subject_val = "Re: [OMPI users] shared memory (sm) module not working properly?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 15:14:36 2010" -->
<!-- isoreceived="20100119201436" -->
<!-- sent="Tue, 19 Jan 2010 13:14:09 -0700" -->
<!-- isosent="20100119201409" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory (sm) module not working properly?" -->
<!-- id="dcf611bd1001191214p12ae2fa3m2783b57352d02349_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B50F55C.1080806_at_sun.com" -->
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
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 15:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11825.php">Ralph Castain: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11825.php">Ralph Castain: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11825.php">Ralph Castain: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>I think I understand better now what's happening, although I still don't
<br>
know why. I have attached two small C codes that demonstrate the problem.
<br>
The code in main.c uses MPI_Comm_spawn() to start the code in the second
<br>
source, child.c. I can force the issue by running the main.c code with
<br>
<p>mpirun -mca btl self,sm -np 1 ./main
<br>
<p>and get this error:
<br>
<p>--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[26121,2],0]) is on host: mujo
<br>
&nbsp;&nbsp;Process 2 ([[26121,1],0]) is on host: mujo
<br>
&nbsp;&nbsp;BTLs attempted: self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
<p>Is that because the spawned process is in a different group? They are still
<br>
all running on the same host, so at least in principle they should be able
<br>
to communicate with each other via shared memory.
<br>
<p>nick
<br>
<p><p><p>On Fri, Jan 15, 2010 at 16:08, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Dunno.  Do lower np values succeed?  If so, at what value of np does the
</span><br>
<span class="quotelev1">&gt; job no longer start?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps it's having a hard time creating the shared-memory backing file in
</span><br>
<span class="quotelev1">&gt; /tmp.  I think this is a 64-Mbyte file.  If this is the case, try reducing
</span><br>
<span class="quotelev1">&gt; the size of the shared area per this FAQ item:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=sm#decrease-sm">http://www.open-mpi.org/faq/?category=sm#decrease-sm</a>  Most notably, reduce
</span><br>
<span class="quotelev1">&gt; mpool_sm_min_size below 67108864.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also note trac ticket 2043, which describes problems with the sm BTL
</span><br>
<span class="quotelev1">&gt; exposed by GCC 4.4.x compilers.  You need to get a sufficiently recent build
</span><br>
<span class="quotelev1">&gt; to solve this.  But, those problems don't occur until you start passing
</span><br>
<span class="quotelev1">&gt; messages, and here you're not even starting up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I forgot to give more details on what versions I am using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4
</span><br>
<span class="quotelev1">&gt; Ubuntu 9.10, kernel 2.6.31-16-generic #53-Ubuntu
</span><br>
<span class="quotelev1">&gt; gcc (Ubuntu 4.4.1-4ubuntu8) 4.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 15:47, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running a job on a 4 quadcore AMD Opteron. This machine has 16 cores,
</span><br>
<span class="quotelev2">&gt;&gt; which I can verify by looking at /proc/cpuinfo. However, when I run a job
</span><br>
<span class="quotelev2">&gt;&gt; with
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
<span class="quotelev2">&gt;&gt; By adding the tcp btl I can run the job. I don't understand why openmpi
</span><br>
<span class="quotelev2">&gt;&gt; claims that a pair of processes can not reach each other, all processor
</span><br>
<span class="quotelev2">&gt;&gt; cores should have access to all memory after all. Do I need to set some
</span><br>
<span class="quotelev2">&gt;&gt; other btl limit?
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11824/main.c">main.c</a>
</ul>
<!-- attachment="main.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11824/child.c">child.c</a>
</ul>
<!-- attachment="child.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11825.php">Ralph Castain: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11803.php">Eugene Loh: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11825.php">Ralph Castain: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Reply:</strong> <a href="11825.php">Ralph Castain: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
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
