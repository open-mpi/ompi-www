<?
$subject_val = "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 01:53:14 2016" -->
<!-- isoreceived="20160224065314" -->
<!-- sent="Wed, 24 Feb 2016 15:53:13 +0900" -->
<!-- isosent="20160224065313" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1" -->
<!-- id="CAAkFZ5uMtP2gJQq=s+y1z9dge=aeHmmMLsCk2RFt4iJF5OzFzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHgSaRSnLssdY6T4ZhrSS7LS3_VAS02dzyCiFFrJVXMD34+SCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-24 01:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28574.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28572.php">Eva: "[OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="28572.php">Eva: "[OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28584.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you be more specific on how you measure time ?
<br>
<p>is this wall time (e.g. it does include mpirun, MPI_Init and MPI_Finalize) ?
<br>
is this elapsed time between MPI_Init() and MPI_Finalize() ?
<br>
assuming extra time is spent in MPI, do you know in which subroutine the
<br>
extra time is spent ?
<br>
OpenMPI 1.4.1 is very old now, and some collective also might have changed,
<br>
or different ones might be used by 1.10.2rc3, so that could be fixed
<br>
by some tuning
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wed, Feb 24, 2016 at 2:49 PM, Eva &lt;wuzhh01_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I compile the same program by using 1.4.1 and 1.10.2rc3 and then run them
</span><br>
<span class="quotelev1">&gt; under the same environment. 1.4.1 is 8.89% faster than 1.10.2rc3. Is there
</span><br>
<span class="quotelev1">&gt; any official performance report for each version upgrade?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28572.php">http://www.open-mpi.org/community/lists/users/2016/02/28572.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28574.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28572.php">Eva: "[OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="28572.php">Eva: "[OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28584.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
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
