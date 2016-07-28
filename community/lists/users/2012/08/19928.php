<?
$subject_val = "Re: [OMPI users] User Interface for MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 10 13:00:21 2012" -->
<!-- isoreceived="20120810170021" -->
<!-- sent="Fri, 10 Aug 2012 10:00:14 -0700" -->
<!-- isosent="20120810170014" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] User Interface for MPMD" -->
<!-- id="D1B6B269-34F8-44C2-B01C-2D2D0E680109_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0CDEDAE65664A9499EF228D403B91A9509E4559E_at_CFWEX01.americas.cray.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] User Interface for MPMD<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-10 13:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19929.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19929.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19929.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I gather you don't want to use the MPI calls to get it? Perhaps it would help if we understood a little more about what you are trying to do.
<br>
<p>Or maybe we just aren't understanding the term &quot;instance&quot; - e.g., for #1, you want to know how many processes are executing in the job, yes?
<br>
<p>If that's correct, then the second question doesn't make sense to me - so I'm a little lost.
<br>
<p><p>On Aug 10, 2012, at 9:49 AM, Frank Kampe &lt;u2591_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No.  I am looking for a user-callable function that will return information about the running OpenMPI MPMD program from within the running program---the information listed below in (1) -- (3).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, August 10, 2012 11:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] User Interface for MPMD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm actually not sure I understand the question - are you talking about a programmatic API where an application wants to spawn an MPI program? Or an inter-program communication API that wants to tell another program some information? Or an API by which the app can tell MPI &quot;I'm going to spawn N threads&quot;? Or...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2012, at 9:00 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 08/10/2012 11:31 AM, Frank Kampe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there any user level APIs to provide the following information to a running OpenMPI MPMD program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) Number of executable instances
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) 1st MPI Task rank of each instance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (3) Number of MPI Tasks per instance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Hi Frank
</span><br>
<span class="quotelev2">&gt;&gt; Check 'man mpiexec', the --app file option, maybe also --rankfile.
</span><br>
<span class="quotelev2">&gt;&gt; The on process binding at the end may also help.
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="19929.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19929.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19929.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
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
