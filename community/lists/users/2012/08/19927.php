<?
$subject_val = "Re: [OMPI users] User Interface for MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 10 12:50:49 2012" -->
<!-- isoreceived="20120810165049" -->
<!-- sent="Fri, 10 Aug 2012 16:49:07 +0000" -->
<!-- isosent="20120810164907" -->
<!-- name="Frank Kampe" -->
<!-- email="u2591_at_[hidden]" -->
<!-- subject="Re: [OMPI users] User Interface for MPMD" -->
<!-- id="0CDEDAE65664A9499EF228D403B91A9509E4559E_at_CFWEX01.americas.cray.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A49D9F1-EEA6-4265-A54B-264B9D3DAEC4_at_open-mpi.org" -->
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
<strong>From:</strong> Frank Kampe (<em>u2591_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-10 12:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19928.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19926.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19928.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19928.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No.  I am looking for a user-callable function that will return information about the running OpenMPI MPMD program from within the running program---the information listed below in (1) -- (3).
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Friday, August 10, 2012 11:15 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] User Interface for MPMD
<br>
<p>I'm actually not sure I understand the question - are you talking about a programmatic API where an application wants to spawn an MPI program? Or an inter-program communication API that wants to tell another program some information? Or an API by which the app can tell MPI &quot;I'm going to spawn N threads&quot;? Or...?
<br>
<p><p>On Aug 10, 2012, at 9:00 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 08/10/2012 11:31 AM, Frank Kampe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Are there any user level APIs to provide the following information to a running OpenMPI MPMD program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1) Number of executable instances
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (2) 1st MPI Task rank of each instance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (3) Number of MPI Tasks per instance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
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
<span class="quotelev1">&gt; Hi Frank
</span><br>
<span class="quotelev1">&gt; Check 'man mpiexec', the --app file option, maybe also --rankfile.
</span><br>
<span class="quotelev1">&gt; The on process binding at the end may also help.
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19928.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19926.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19928.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19928.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
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
