<?
$subject_val = "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 05:19:24 2010" -->
<!-- isoreceived="20101118101924" -->
<!-- sent="Thu, 18 Nov 2010 19:19:13 +0900" -->
<!-- isosent="20101118101913" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3" -->
<!-- id="OFAA0AEAC2.DAFD36A0-ON492577DF.00364E81-492577DF.0038AEB6_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF3A33D3B6.FC717240-ON492577DD.000075A9-492577DD.0003440D_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20SYSTEM%20CPU%20with%20OpenMPI%201.4.3"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-11-18 05:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14822.php">George Markomanolis: "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<li><strong>In reply to:</strong> <a href="14773.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I found that ./openmpi-1.4.3/ompi/runtime/ompi_mpi_init.c was changed.
<br>
Calling opal_progress_event_users_decrement was deleted as below.
<br>
<p>$diff openmpi-1.4.2/ompi/runtime/ompi_mpi_init.c openmpi-1.4.3
<br>
/ompi/runtime/ompi_mpi_init.c
<br>
813,819d812
<br>
&lt;     /* Undo ORTE calling opal_progress_event_users_increment() during
<br>
&lt;        MPI lifetime, to get better latency when not using TCP.  Do
<br>
&lt;        this *after* dyn_init, as dyn init uses lots of ORTE
<br>
&lt;        communication and we don't want to hinder the performance of
<br>
&lt;        that code. */
<br>
&lt;     opal_progress_event_users_decrement();
<br>
&lt;
<br>
<p>I confirmed that this change affects SYSTEM CPU &amp; performace decrement.
<br>
Is it safe to replace the routine with older one?
<br>
<p>Anyway, if it's just a mistake, please fix it in the next version.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14824.php">Krzysztof Zarzycki: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14822.php">George Markomanolis: "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<li><strong>In reply to:</strong> <a href="14773.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
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
