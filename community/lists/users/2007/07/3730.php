<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 06:40:09 2007" -->
<!-- isoreceived="20070723104009" -->
<!-- sent="Mon, 23 Jul 2007 11:39:47 +0100" -->
<!-- isosent="20070723103947" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] sge qdel fails" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE83AC414_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 06:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3731.php">Biagio Cosenza: "[OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using OpenMPI 1.2.3 with SGE 6.0u7 over InfiniBand (OFED 1.2),
<br>
following the recommendation in the OpenMPI FAQ
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
<br>
<p>The job runs but when the user wants to delete the job with the qdel
<br>
command, this fails. Does the mpirun command
<br>
<p>mpirun -np $NSLOTS ./exe
<br>
<p>in the sge script require extra parameters?
<br>
<p>Thanks for any advice
<br>
<p>Henk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3731.php">Biagio Cosenza: "[OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3734.php">Kelley, Sean: "[OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>Reply:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
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
