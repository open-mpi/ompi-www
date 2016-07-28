<?
$subject_val = "[OMPI users] Openmpi 1.8.8 and affinty";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 09:54:32 2016" -->
<!-- isoreceived="20160115145432" -->
<!-- sent="Fri, 15 Jan 2016 09:53:57 -0500" -->
<!-- isosent="20160115145357" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.8.8 and affinty" -->
<!-- id="y9b4meej3lm.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi 1.8.8 and affinty<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Openmpi%201.8.8%20and%20affinty"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-01-15 09:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28287.php">Matt Thompson: "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Reply:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Reply:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the past (v 1.6.4-) we used mpirun args of
<br>
<p>--mca mpi_paffinity_alone 1 --mca btl openib,tcp,sm,self
<br>
<p>with lsf 7.0.6, and this was enough to make cores not be oversubscribed when
<br>
submitting 2 or more jobs to the same node.
<br>
<p>Now I am using 1.8.8 and thus far don't have the right combination of args to
<br>
make sure cores don't oversubscribe.
<br>
<p>I am currently using:
<br>
<p>-report-bindings --map-by core --bind-to core --nooversubscribe --mca btl
<br>
&nbsp;openib,tcp,sm,self 
<br>
<p>Do I have the incorrect options or am I missing an option? 
<br>
<p>Thanks for any info
<br>
<p>tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28287.php">Matt Thompson: "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Reply:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Reply:</strong> <a href="28325.php">Dave Love: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
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
