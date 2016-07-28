<?
$subject_val = "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 13:17:13 2012" -->
<!-- isoreceived="20121127181713" -->
<!-- sent="Tue, 27 Nov 2012 19:16:54 +0100" -->
<!-- isosent="20121127181654" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes" -->
<!-- id="50B50396.1090805_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29C10F31-755C-49CD-8AE0-A4B85915C868_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-27 13:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20779.php">Joseph Farran: "[OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20777.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20777.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>For the file descriptors the declared limit is over 65536 files but if 
<br>
OMPI needs several of them, then this can be interesting. Is there any 
<br>
source to read about it or I just should do trials? About the child 
<br>
processes again, can I do something? I have root access, so I can change 
<br>
the values.
<br>
<p><p>Best regards,
<br>
George Markomanolis
<br>
<p>On 11/27/2012 05:58 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just glancing at the code, I don't see anything tied to 2**12 that pops out at me. I suspect the issue is that you are hitting a system limit on the number of child processes a process can spawn - this is different from the total number of processes allowed on the node - or the number of file descriptors a process can have open (we need several per process for I/O forwarding).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2012, at 8:24 AM, George Markomanolis &lt;george_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the answer, I am using OMPI v1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; George Markomanolis
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/26/2012 05:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What version of OMPI are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 26, 2012, at 1:02 AM, George Markomanolis &lt;george_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initially I would like an advice of how to identify the maximum number of MPI processes that can be executed on a node with oversubscribing. When I try to execute an application with 4096 MPI processes on a 24-cores node with 48GB of memory, I have an error &quot;Unknown error: 1&quot; while the memory is not even at the half. I can execute the same application with 2048 MPI processes in less than one minute. I have checked linux settings about maximum number of processes and it is much bigger than 4096.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another more generic question, is about discovering nodes with faulty memory. Is there any way to identify nodes with faulty memory? I found accidentally that a node with exact the same hardware couldn't execute an MPI application when it was using more than 12GB of ram while the second one could use all of the 48GB of memory. If I have 500+ nodes is difficult to check all of them and I am not familiar with any efficient solution. Initially I thought about memtester but it takes a lot of time. I know that this does not apply exactly on this mailing list but I thought that maybe an OpenMPI user knows something about.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George Markomanolis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20779.php">Joseph Farran: "[OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20777.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20777.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
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
