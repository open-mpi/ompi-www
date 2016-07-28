<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn under Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 13:14:19 2014" -->
<!-- isoreceived="20140220181419" -->
<!-- sent="Thu, 20 Feb 2014 19:14:13 +0100" -->
<!-- isosent="20140220181413" -->
<!-- name="Suraj Prabhakaran" -->
<!-- email="suraj.prabhakaran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn under Torque" -->
<!-- id="D4EDF2EC-99A0-449D-B844-6B33C4EDCAED_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20E1E841-20B8-481F-B54F-C63C27B2FB49_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-02-20 13:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14200.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] Please remove me from this distribution"</a>
<li><strong>Previous message:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14200.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] Please remove me from this distribution"</a>
<li><strong>Reply:</strong> <a href="14200.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] Please remove me from this distribution"</a>
<li><strong>Reply:</strong> <a href="14202.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using 1.7.4! 
<br>
<p>On Feb 20, 2014, at 7:00 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What OMPI version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2014, at 7:56 AM, Suraj Prabhakaran &lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am having problem using MPI_Comm_spawn under torque. It doesn't work when spawning more than 12 processes on various nodes. To be more precise, &quot;sometimes&quot; it works, and &quot;sometimes&quot; it doesn't!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is my case. I obtain 5 nodes, 3 cores per node and my $PBS_NODEFILE looks like below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; node2
</span><br>
<span class="quotelev2">&gt;&gt; node2
</span><br>
<span class="quotelev2">&gt;&gt; node2
</span><br>
<span class="quotelev2">&gt;&gt; node3
</span><br>
<span class="quotelev2">&gt;&gt; node3
</span><br>
<span class="quotelev2">&gt;&gt; node3
</span><br>
<span class="quotelev2">&gt;&gt; node4
</span><br>
<span class="quotelev2">&gt;&gt; node4
</span><br>
<span class="quotelev2">&gt;&gt; node4
</span><br>
<span class="quotelev2">&gt;&gt; node5
</span><br>
<span class="quotelev2">&gt;&gt; node5
</span><br>
<span class="quotelev2">&gt;&gt; node5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I started a hello program (which just spawns itself and of course, the children don't spawn), with 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 3 ./hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Spawning 3 more processes (on node 2) - works!
</span><br>
<span class="quotelev2">&gt;&gt; spawning 6 more processes (node 2 and 3) - works!
</span><br>
<span class="quotelev2">&gt;&gt; spawning 9 processes (node 2,3,4) - &quot;sometimes&quot; OK, &quot;sometimes&quot; not!
</span><br>
<span class="quotelev2">&gt;&gt; spawning 12 processes (node 2,3,4,5) - &quot;mostly&quot; not!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ideally want to spawn about 32 processes with large number of nodes, but this is at the moment impossible. I have attached my hello program to this email. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will be happy to provide any more info or verbose outputs if you could please tell me what exactly you would like to see.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Suraj
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hello.c&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="14200.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] Please remove me from this distribution"</a>
<li><strong>Previous message:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14198.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14200.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] Please remove me from this distribution"</a>
<li><strong>Reply:</strong> <a href="14200.php">Julia.Dudascik.Contractor_at_[hidden]: "[OMPI devel] Please remove me from this distribution"</a>
<li><strong>Reply:</strong> <a href="14202.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
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
