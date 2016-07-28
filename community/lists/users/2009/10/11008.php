<?
$subject_val = "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 14:51:32 2009" -->
<!-- isoreceived="20091029185132" -->
<!-- sent="Thu, 29 Oct 2009 12:51:27 -0600" -->
<!-- isosent="20091029185127" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3" -->
<!-- id="71d2d8cc0910291151t6d56f1c2re5c1864283ca66ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9E6EA75-01C1-4D02-8567-F6FE78AC9C00_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 14:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11006.php">David Gunter: "[OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave
<br>
<p>I believe you can turn it &quot;off&quot; by setting
<br>
<p>-mca coll ^tuned
<br>
<p>This will tell the system to consider all collective modules -except- for
<br>
tuned.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Thu, Oct 29, 2009 at 12:13 PM, David Gunter &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We have a user who's hitting a hang in MPI_Allgather that totalview is
</span><br>
<span class="quotelev1">&gt; showing is in a tuned collective operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do we disable the use of tuned collectives?  We have tried setting the
</span><br>
<span class="quotelev1">&gt; priority to 0 but maybe that wasn't the correct way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca coll_tuned_priority 0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should it have been a higher number or is there another param that should
</span><br>
<span class="quotelev1">&gt; be set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Previous message:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>In reply to:</strong> <a href="11006.php">David Gunter: "[OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
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
