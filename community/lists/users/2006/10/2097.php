<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 14:52:06 2006" -->
<!-- isoreceived="20061031195206" -->
<!-- sent="Tue, 31 Oct 2006 12:51:59 -0700" -->
<!-- isosent="20061031195159" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem starting rank other than zero" -->
<!-- id="C16CF76F.57A4%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAY102-DAV171012EAC9146801D8CF1B8DF90_at_phx.gbl" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 14:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2098.php">Christian Bell: "Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<li><strong>Previous message:</strong> <a href="2096.php">Nader Ahmadi: "[OMPI users] Problem starting rank other than zero"</a>
<li><strong>In reply to:</strong> <a href="2096.php">Nader Ahmadi: "[OMPI users] Problem starting rank other than zero"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2103.php">Jeff Squyres: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2103.php">Jeff Squyres: "Re: [OMPI users] Problem starting rank other than zero"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just out of curiosity &#173; what environment (i.e., allocator and launcher) are
<br>
you running in? POE?
<br>
<p>I&#185;m not sure the POE support is all that good, which is why I ask.
<br>
Ralph
<br>
<p><p>On 10/31/06 12:37 PM, &quot;Nader Ahmadi&quot; &lt;a_nader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am a new OpenMPI user. We are planing to move from IBM AIX POE to OpenMPI.
</span><br>
<span class="quotelev1">&gt; I had noproblem to install, configure, and compile my application, using
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.2.
</span><br>
<span class="quotelev1">&gt; (thank you, for making it so easy).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;ompi_inf -all&quot; runs fine (see attached ompi_info.txt file), my application
</span><br>
<span class="quotelev1">&gt; runs with no problem,
</span><br>
<span class="quotelev1">&gt; except it only create rank 0. for example if I
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;        &gt;&gt; mpirun  -np 4  my-prog arg1  arg2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I expect mpirun start 4 processes on local host with ranks 0,1,2, and 3.
</span><br>
<span class="quotelev1">&gt; I see 4 processes started with rank 0 (see  attahed mpirun_log.txt file).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The behavior is the same, regardless of using local host, or using -host file
</span><br>
<span class="quotelev1">&gt; or -app file.
</span><br>
<span class="quotelev1">&gt; In all cases correct number of the processes starts on local or remote nodes
</span><br>
<span class="quotelev1">&gt; as specified, with rank 0 for all process.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Note: I have no problem running this application on IBM AIX using POE.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I know this must be new user's problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any comments
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Nader, 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2098.php">Christian Bell: "Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<li><strong>Previous message:</strong> <a href="2096.php">Nader Ahmadi: "[OMPI users] Problem starting rank other than zero"</a>
<li><strong>In reply to:</strong> <a href="2096.php">Nader Ahmadi: "[OMPI users] Problem starting rank other than zero"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2103.php">Jeff Squyres: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2103.php">Jeff Squyres: "Re: [OMPI users] Problem starting rank other than zero"</a>
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
