<?
$subject_val = "Re: [OMPI users] User Interface for MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 10 12:15:36 2012" -->
<!-- isoreceived="20120810161536" -->
<!-- sent="Fri, 10 Aug 2012 09:15:29 -0700" -->
<!-- isosent="20120810161529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] User Interface for MPMD" -->
<!-- id="4A49D9F1-EEA6-4265-A54B-264B9D3DAEC4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50253006.70808_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2012-08-10 12:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19926.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19924.php">Gus Correa: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19924.php">Gus Correa: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm actually not sure I understand the question - are you talking about a programmatic API where an application wants to spawn an MPI program? Or an inter-program communication API that wants to tell another program some information? Or an API by which the app can tell MPI &quot;I'm going to spawn N threads&quot;? Or...?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19926.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19924.php">Gus Correa: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19924.php">Gus Correa: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19927.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
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
