<?
$subject_val = "Re: [OMPI users] debugging performance regressions between versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 04:35:48 2013" -->
<!-- isoreceived="20131021083548" -->
<!-- sent="Mon, 21 Oct 2013 08:35:46 +0000" -->
<!-- isosent="20131021083546" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging performance regressions between versions" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB318840D085_at_MBX1.rwth-ad.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87sivy1rkv.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] debugging performance regressions between versions<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 04:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22805.php">Patrick Begou: "[OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>In reply to:</strong> <a href="22802.php">Dave Love: "[OMPI users] debugging performance regressions between versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22818.php">Dave Love: "Re: [OMPI users] debugging performance regressions between versions"</a>
<li><strong>Reply:</strong> <a href="22818.php">Dave Love: "Re: [OMPI users] debugging performance regressions between versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>Is it MPI_ALLTOALL or MPI_ALLTOALLV that runs slower? If it is the latter,
<br>
the reason could be that the default implementation of MPI_ALLTOALLV in
<br>
1.6.5 is different from that in 1.5.4. To switch back to the previous one,
<br>
use:
<br>
<p>--mca coll_tuned_use_dynamic_rules 1 --mca coll_tuned_alltoallv_algorithm 1
<br>
<p>The logic that selects the MPI_ALLTOALL implementation is the same in both
<br>
versions, although the pairwise implementation in 1.6.5 is a bit different.
<br>
The difference should have negligible effects though.
<br>
<p>Note that coll_tuned_use_dynamic_rules has to be enabled in order for MCA
<br>
parameters that allows you to select the algorithms to be registered.
<br>
Therefore you have use ompi_info as follows:
<br>
<p>ompi_info --mca coll_tuned_use_dynamic_rules 1 --param coll tuned
<br>
<p>Hope that helps!
<br>
<p>Hristo
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Dave Love
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 18, 2013 6:18 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] debugging performance regressions between versions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been testing an application that turns out to be ~30% slower with
</span><br>
OMPI
<br>
<span class="quotelev1">&gt; 1.6.5 than (the Red Hat packaged version of) 1.5.4, with the same mca-
</span><br>
<span class="quotelev1">&gt; params and the same binary, just flipping the runtime.  It's running over
</span><br>
<span class="quotelev1">&gt; openib, and the profile it prints says that alltoall is a factor of four
</span><br>
slower in
<br>
<span class="quotelev1">&gt; 1.6.5.  (I haven't tried to profile it externally, but I've no reason to
</span><br>
doubt what
<br>
<span class="quotelev1">&gt; it says.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How should I go about finding out why and -- I hope -- fixing it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A possibly relevant side question:  Is there a way of dumping all the MCA
</span><br>
<span class="quotelev1">&gt; parameters in effect?  ompi_info --all doesn't show collective algorithms,
</span><br>
for
<br>
<span class="quotelev1">&gt; instance, though I thought I'd got those out of it at one time.
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
<p><pre>
--
Hristo Iliev, PhD - High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22804/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22805.php">Patrick Begou: "[OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22803.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>In reply to:</strong> <a href="22802.php">Dave Love: "[OMPI users] debugging performance regressions between versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22818.php">Dave Love: "Re: [OMPI users] debugging performance regressions between versions"</a>
<li><strong>Reply:</strong> <a href="22818.php">Dave Love: "Re: [OMPI users] debugging performance regressions between versions"</a>
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
