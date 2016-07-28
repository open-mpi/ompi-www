<?
$subject_val = "Re: [OMPI users] User Interface for MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 10 12:00:15 2012" -->
<!-- isoreceived="20120810160015" -->
<!-- sent="Fri, 10 Aug 2012 12:00:06 -0400" -->
<!-- isosent="20120810160006" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] User Interface for MPMD" -->
<!-- id="50253006.70808_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0CDEDAE65664A9499EF228D403B91A9509E4556F_at_CFWEX01.americas.cray.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-10 12:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19923.php">Frank Kampe: "[OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19923.php">Frank Kampe: "[OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19926.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/10/2012 11:31 AM, Frank Kampe wrote:
<br>
<span class="quotelev1">&gt; Are there any user level APIs to provide the following information to 
</span><br>
<span class="quotelev1">&gt; a running OpenMPI MPMD program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) Number of executable instances
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) 1st MPI Task rank of each instance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (3) Number of MPI Tasks per instance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
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
Hi Frank
<br>
Check 'man mpiexec', the --app file option, maybe also --rankfile.
<br>
The on process binding at the end may also help.
<br>
I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Previous message:</strong> <a href="19923.php">Frank Kampe: "[OMPI users] User Interface for MPMD"</a>
<li><strong>In reply to:</strong> <a href="19923.php">Frank Kampe: "[OMPI users] User Interface for MPMD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19925.php">Ralph Castain: "Re: [OMPI users] User Interface for MPMD"</a>
<li><strong>Reply:</strong> <a href="19926.php">Frank Kampe: "Re: [OMPI users] User Interface for MPMD"</a>
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
