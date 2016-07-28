<?
$subject_val = "[OMPI devel] Please remove me from this distribution";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 15:45:45 2014" -->
<!-- isoreceived="20140220204545" -->
<!-- sent="Thu, 20 Feb 2014 15:45:25 -0500" -->
<!-- isosent="20140220204525" -->
<!-- name="Julia.Dudascik.Contractor_at_[hidden]" -->
<!-- email="Julia.Dudascik.Contractor_at_[hidden]" -->
<!-- subject="[OMPI devel] Please remove me from this distribution" -->
<!-- id="519DC26FE4C14A46AA92A26E24A1EF67C21DEA_at_UIBETPEXV1.ias.unrpnet.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D4EDF2EC-99A0-449D-B844-6B33C4EDCAED_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Please remove me from this distribution<br>
<strong>From:</strong> <a href="mailto:Julia.Dudascik.Contractor_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Please%20remove%20me%20from%20this%20distribution"><em>Julia.Dudascik.Contractor_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-20 15:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14201.php">Andreas Schäfer: "Re: [OMPI devel] Please remove me from this distribution"</a>
<li><strong>Previous message:</strong> <a href="14199.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14199.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14201.php">Andreas Schäfer: "Re: [OMPI devel] Please remove me from this distribution"</a>
<li><strong>Reply:</strong> <a href="14201.php">Andreas Schäfer: "Re: [OMPI devel] Please remove me from this distribution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please take me off distribution. 
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Suraj
<br>
Prabhakaran
<br>
Sent: Thursday, February 20, 2014 1:14 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] MPI_Comm_spawn under Torque
<br>
<p>I am using 1.7.4! 
<br>
<p>On Feb 20, 2014, at 7:00 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What OMPI version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2014, at 7:56 AM, Suraj Prabhakaran
</span><br>
&lt;suraj.prabhakaran_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am having problem using MPI_Comm_spawn under torque. It doesn't
</span><br>
work when spawning more than 12 processes on various nodes. To be more
<br>
precise, &quot;sometimes&quot; it works, and &quot;sometimes&quot; it doesn't!
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is my case. I obtain 5 nodes, 3 cores per node and my
</span><br>
$PBS_NODEFILE looks like below.
<br>
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
<span class="quotelev2">&gt;&gt; I started a hello program (which just spawns itself and of course,
</span><br>
the children don't spawn), with 
<br>
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
<span class="quotelev2">&gt;&gt; I ideally want to spawn about 32 processes with large number of
</span><br>
nodes, but this is at the moment impossible. I have attached my hello
<br>
program to this email. 
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will be happy to provide any more info or verbose outputs if you
</span><br>
could please tell me what exactly you would like to see.
<br>
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14201.php">Andreas Schäfer: "Re: [OMPI devel] Please remove me from this distribution"</a>
<li><strong>Previous message:</strong> <a href="14199.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14199.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14201.php">Andreas Schäfer: "Re: [OMPI devel] Please remove me from this distribution"</a>
<li><strong>Reply:</strong> <a href="14201.php">Andreas Schäfer: "Re: [OMPI devel] Please remove me from this distribution"</a>
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
