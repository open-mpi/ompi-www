<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  1 10:48:01 2006" -->
<!-- isoreceived="20061101154801" -->
<!-- sent="Wed, 1 Nov 2006 10:47:39 -0500" -->
<!-- isosent="20061101154739" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem starting rank other than zero" -->
<!-- id="2B7001B9-E8E6-46FC-8FC0-231C0B8B30CF_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C16CF76F.57A4%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-11-01 10:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2104.php">Michael Kluskens: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="2102.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An additional question -- did you re-compile / re-link your  
<br>
application with Open MPI?  If you're running an MPI application  
<br>
compiled / linked against another MPI implementation, it may not see  
<br>
the Open MPI-specific startup information about how to startup  
<br>
parallel processes (e.g., their rank in MPI_COMM_WORLD, etc.), and  
<br>
therefore assume that each process is its own singleton  
<br>
MPI_COMM_WORLD (i.e., 4 different COMM_WORLDs, each with a single  
<br>
process: rank 0).
<br>
<p><p>On Oct 31, 2006, at 2:51 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just out of curiosity &#150; what environment (i.e., allocator and  
</span><br>
<span class="quotelev1">&gt; launcher) are you running in? POE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m not sure the POE support is all that good, which is why I ask.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/31/06 12:37 PM, &quot;Nader Ahmadi&quot; &lt;a_nader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a new OpenMPI user. We are planing to move from IBM AIX POE  
</span><br>
<span class="quotelev2">&gt;&gt; to OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; I had noproblem to install, configure, and compile my application,  
</span><br>
<span class="quotelev2">&gt;&gt; using OpenMPI 1.1.2.
</span><br>
<span class="quotelev2">&gt;&gt; (thank you, for making it so easy).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi_inf -all&quot; runs fine (see attached ompi_info.txt file), my  
</span><br>
<span class="quotelev2">&gt;&gt; application runs with no problem,
</span><br>
<span class="quotelev2">&gt;&gt; except it only create rank 0. for example if I
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;        &gt;&gt; mpirun  -np 4  my-prog arg1  arg2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I expect mpirun start 4 processes on local host with ranks 0,1,2,  
</span><br>
<span class="quotelev2">&gt;&gt; and 3.
</span><br>
<span class="quotelev2">&gt;&gt; I see 4 processes started with rank 0 (see  attahed mpirun_log.txt  
</span><br>
<span class="quotelev2">&gt;&gt; file).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The behavior is the same, regardless of using local host, or using  
</span><br>
<span class="quotelev2">&gt;&gt; -host file or -app file.
</span><br>
<span class="quotelev2">&gt;&gt; In all cases correct number of the processes starts on local or  
</span><br>
<span class="quotelev2">&gt;&gt; remote nodes as specified, with rank 0 for all process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note: I have no problem running this application on IBM AIX using  
</span><br>
<span class="quotelev2">&gt;&gt; POE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know this must be new user's problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any comments
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nader,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2104.php">Michael Kluskens: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="2102.php">George Bosilca: "Re: [OMPI users] about the openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
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
