<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 23:14:50 2009" -->
<!-- isoreceived="20090724031450" -->
<!-- sent="Thu, 23 Jul 2009 21:14:37 -0600" -->
<!-- isosent="20090724031437" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler" -->
<!-- id="C6B79287-3DCB-49F4-86D7-BC8AA96842A1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7A0423E5E193F40BE6E94126930C49307852451AB_at_MBCLUSTER.xchange.nist.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 23:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10081.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10081.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay - thanks!
<br>
<p>First, be assured we run 64-bit ifort code under Torque at large scale  
<br>
all the time here at LANL, so this is likely to be something trivial  
<br>
in your environment.
<br>
<p>A few things to consider/try:
<br>
<p>1. most likely culprit is that your LD_LIBRARY_PATH is pointing to the  
<br>
32-bit libraries on the other nodes. Torque does -not- copy your  
<br>
environment by default, and neither does OMPI. Try adding
<br>
<p>-x LD_LIBRARY_PATH
<br>
<p>to your cmd line, making sure that the 64-bit libs are before any 32- 
<br>
bit libs in that envar. This tells mpirun to pickup that envar and  
<br>
propagate it for you.
<br>
<p>2. check to ensure you are in fact using a 64-bit version of OMPI. Run  
<br>
&quot;ompi_info --config&quot; to see how it was built. Also run &quot;mpif90 -- 
<br>
showme&quot; and see what libs it is linked to. Does your LD_LIBRARY_PATH  
<br>
match the names and ordering?
<br>
<p>3. get a multi-node allocation and run &quot;pbsdsh echo $LD_LIBRARY_PATH&quot;  
<br>
and see what libs you are defaulting to on the other nodes.
<br>
<p>I realize these are somewhat overlapping, but I think you catch the  
<br>
drift - I suspect you are getting the infamous &quot;library confusion&quot;  
<br>
problem.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jul 23, 2009, at 7:49 PM, Sims, James S. Dr. wrote:
<br>
<p><span class="quotelev1">&gt; [sims_at_raritan openmpi]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.3.1rc4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On  
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 23, 2009 5:44 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and  
</span><br>
<span class="quotelev1">&gt; intel        compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What OMPI version are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2009, at 3:00 PM, Sims, James S. Dr. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have an OpenMPI  program compiled with a version of OpenMPI built
</span><br>
<span class="quotelev2">&gt;&gt; using the ifort 10.1
</span><br>
<span class="quotelev2">&gt;&gt; compiler. I can compile and run this code with no problem, using the
</span><br>
<span class="quotelev2">&gt;&gt; 32 bit
</span><br>
<span class="quotelev2">&gt;&gt; version of ifort. And I can also submit batch jobs using torque with
</span><br>
<span class="quotelev2">&gt;&gt; this 32-bit code.
</span><br>
<span class="quotelev2">&gt;&gt; However, compiling the same code to produce a 64 bit executable
</span><br>
<span class="quotelev2">&gt;&gt; produces a code
</span><br>
<span class="quotelev2">&gt;&gt; that runs correctly only in the simplest cases. It does not run
</span><br>
<span class="quotelev2">&gt;&gt; correctly when run
</span><br>
<span class="quotelev2">&gt;&gt; under the torque batch queuing system, running for awhile and then
</span><br>
<span class="quotelev2">&gt;&gt; giving a
</span><br>
<span class="quotelev2">&gt;&gt; segmentation violation in s section of code that is fine in the 32
</span><br>
<span class="quotelev2">&gt;&gt; bit version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have to run the mpi multinode jobs using our torque batch queuing
</span><br>
<span class="quotelev2">&gt;&gt; system,
</span><br>
<span class="quotelev2">&gt;&gt; but we do have the capability of running the jobs in an interactive
</span><br>
<span class="quotelev2">&gt;&gt; batch environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I do a qsub -I -l nodes=1:x4gb
</span><br>
<span class="quotelev2">&gt;&gt; I get an interactive session on the remote node assigned to my job.
</span><br>
<span class="quotelev2">&gt;&gt; I can run the
</span><br>
<span class="quotelev2">&gt;&gt; job using either
</span><br>
<span class="quotelev2">&gt;&gt; ./MPI_li_64 or
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./MPI_li_64
</span><br>
<span class="quotelev2">&gt;&gt; and the job runs successfully to completion. I can also
</span><br>
<span class="quotelev2">&gt;&gt; start an interactive shell using
</span><br>
<span class="quotelev2">&gt;&gt; qsub -I -l nodes=1:ppn=2:x4gb
</span><br>
<span class="quotelev2">&gt;&gt; and I will get a single dual processor (or greater node). On this
</span><br>
<span class="quotelev2">&gt;&gt; single node,
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./MPI_li_64 works.
</span><br>
<span class="quotelev2">&gt;&gt; However, if instead I ask for two nodes in my interactive batch node,
</span><br>
<span class="quotelev2">&gt;&gt; qsub -I -l nodes=2:x4gb,
</span><br>
<span class="quotelev2">&gt;&gt; Two nodes will be assigned to me but when I enter
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./MPI_li_64
</span><br>
<span class="quotelev2">&gt;&gt; the job runs awhile, then fails with a
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 23104 on node n339
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can trace this in the intel debugger and see that the segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault is occuring in what should
</span><br>
<span class="quotelev2">&gt;&gt; be good code, and in code that executes with no problem when
</span><br>
<span class="quotelev2">&gt;&gt; everything is compiled 32-bit. I am
</span><br>
<span class="quotelev2">&gt;&gt; at a loss for what could be preventing this code to run within the
</span><br>
<span class="quotelev2">&gt;&gt; batch queuing environment in the
</span><br>
<span class="quotelev2">&gt;&gt; 64-bit version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10081.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10081.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
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
