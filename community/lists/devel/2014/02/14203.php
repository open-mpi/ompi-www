<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn under Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 22:05:34 2014" -->
<!-- isoreceived="20140221030534" -->
<!-- sent="Fri, 21 Feb 2014 04:05:28 +0100" -->
<!-- isosent="20140221030528" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn under Torque" -->
<!-- id="85995436-5612-426F-8E4C-DDE7DFB89D9A_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BF23FAEE-6B89-4BC9-A9D5-84F10B47F3CC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_spawn under Torque<br>
<strong>From:</strong> Suraj Prabhakaran (<em>suraj.prabhakaran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 22:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14204.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14202.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14202.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14204.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Reply:</strong> <a href="14204.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph!
<br>
<p>I must have mentioned though. Without the Torque environment, spawning with ssh works ok. But Under the torque environment, not. 
<br>
<p>I started the simple_spawn with 3 processes and spawned 9 processes (3 per node on 3 nodes). 
<br>
<p>There is no problem with the Torque environment because all the 9 processes are started on the respective nodes. But the MPI_Comm_spawn of the parent and MPI_Init of the children, &quot;sometimes&quot; don't return!
<br>
<p>This is the output of simple_spawn - which confirms the above statement. 
<br>
<p>[pid 31208] starting up!
<br>
[pid 31209] starting up!
<br>
[pid 31210] starting up!
<br>
0 completed MPI_Init
<br>
Parent [pid 31208] about to spawn!
<br>
1 completed MPI_Init
<br>
Parent [pid 31209] about to spawn!
<br>
2 completed MPI_Init
<br>
Parent [pid 31210] about to spawn!
<br>
[pid 28630] starting up!
<br>
[pid 28631] starting up!
<br>
[pid 9846] starting up!
<br>
[pid 9847] starting up!
<br>
[pid 9848] starting up!
<br>
[pid 6363] starting up!
<br>
[pid 6361] starting up!
<br>
[pid 6362] starting up!
<br>
[pid 28632] starting up!
<br>
<p>Any hints?
<br>
<p>Best,
<br>
Suraj
<br>
<p>On Feb 21, 2014, at 3:44 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...I don't see anything immediately glaring. What do you mean by &quot;doesn't work&quot;? Is there some specific behavior you see?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might try the attached program. It's a simple spawn test we use - 1.7.4 seems happy with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;simple_spawn.c&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2014, at 10:14 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using 1.7.4! 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 20, 2014, at 7:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What OMPI version are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 20, 2014, at 7:56 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having problem using MPI_Comm_spawn under torque. It doesn't work when spawning more than 12 processes on various nodes. To be more precise, &quot;sometimes&quot; it works, and &quot;sometimes&quot; it doesn't!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is my case. I obtain 5 nodes, 3 cores per node and my $PBS_NODEFILE looks like below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I started a hello program (which just spawns itself and of course, the children don't spawn), with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec -np 3 ./hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Spawning 3 more processes (on node 2) - works!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spawning 6 more processes (node 2 and 3) - works!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spawning 9 processes (node 2,3,4) - &quot;sometimes&quot; OK, &quot;sometimes&quot; not!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spawning 12 processes (node 2,3,4,5) - &quot;mostly&quot; not!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I ideally want to spawn about 32 processes with large number of nodes, but this is at the moment impossible. I have attached my hello program to this email. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will be happy to provide any more info or verbose outputs if you could please tell me what exactly you would like to see.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Suraj
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;hello.c&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14204.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14202.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14202.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14204.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Reply:</strong> <a href="14204.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
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
