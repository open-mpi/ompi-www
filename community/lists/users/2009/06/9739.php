<?
$subject_val = "Re: [OMPI users] CPU user time vs. system time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 23:28:17 2009" -->
<!-- isoreceived="20090627032817" -->
<!-- sent="Fri, 26 Jun 2009 21:28:01 -0600" -->
<!-- isosent="20090627032801" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU user time vs. system time" -->
<!-- id="3817D76A-5FD9-42AA-9DC6-813C246829BD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a49be6ca0906262009s4f02a003te2ddec6478638bdb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU user time vs. system time<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 23:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<li><strong>Previous message:</strong> <a href="9738.php">Qiming He: "[OMPI users] CPU user time vs. system time"</a>
<li><strong>In reply to:</strong> <a href="9738.php">Qiming He: "[OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9747.php">Qiming He: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Reply:</strong> <a href="9747.php">Qiming He: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are running fewer processes on your nodes than they have  
<br>
processors, then you can improve performance by adding
<br>
<p>-mca mpi_paffinity_alone 1
<br>
<p>to your cmd line. This will bind your processes to individual cores,  
<br>
which helps with latency. If your program involves collectives, then  
<br>
you can try setting
<br>
<p>-mca coll_hierarch_priority 100
<br>
<p>This will activate the hierarchical collectives, which utilize shared  
<br>
memory for messages between procs on the same node.
<br>
<p>Ralph
<br>
<p><p>On Jun 26, 2009, at 9:09 PM, Qiming He wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to OpenMPI, and have an urgent run-time question. I have  
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2 compiled with Intel Fortran compiler v.11 simply by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;my-dir&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; then I set my LD_LIBRARY_PATH to include &lt;openmpi-lib&gt; and &lt;intel-lib&gt;
</span><br>
<span class="quotelev1">&gt; and compile my Fortran program properly. No compilation error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run my program on single node. Everything looks ok. However, when  
</span><br>
<span class="quotelev1">&gt; I run it on multiple nodes.
</span><br>
<span class="quotelev1">&gt; mpirun -np &lt;num&gt; --hostfile &lt;my-hosts&gt; &lt;my-program&gt;
</span><br>
<span class="quotelev1">&gt; The performance is much worse than a single node with the same size  
</span><br>
<span class="quotelev1">&gt; of the problem to solve (MPICH2 has 50% improvement)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use top and saidar to find that user time (CPU user) is much lower  
</span><br>
<span class="quotelev1">&gt; than system time (CPU system), i.e,
</span><br>
<span class="quotelev1">&gt; only small portion of CPU time is used by user application, while  
</span><br>
<span class="quotelev1">&gt; the rest is busy with system.
</span><br>
<span class="quotelev1">&gt; No wonder I got bad performance.  I am assuming &quot;CPU system&quot; is used  
</span><br>
<span class="quotelev1">&gt; for MPI communication.
</span><br>
<span class="quotelev1">&gt; I notice the total traffic (on eth0) is not that big (~5Mb/sec).  
</span><br>
<span class="quotelev1">&gt; What is CPU system busy for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help? Anything I need to tune?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Qiming
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9740.php">Jeff Squyres: "Re: [OMPI users] Problem with qlogic cards InfiniPath_QLE7240and	AlltoAll call"</a>
<li><strong>Previous message:</strong> <a href="9738.php">Qiming He: "[OMPI users] CPU user time vs. system time"</a>
<li><strong>In reply to:</strong> <a href="9738.php">Qiming He: "[OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9747.php">Qiming He: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Reply:</strong> <a href="9747.php">Qiming He: "Re: [OMPI users] CPU user time vs. system time"</a>
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
