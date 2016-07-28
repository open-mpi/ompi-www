<?
$subject_val = "[OMPI users] Error when calling MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 11:46:46 2011" -->
<!-- isoreceived="20111031154646" -->
<!-- sent="Mon, 31 Oct 2011 15:46:38 +0000" -->
<!-- isosent="20111031154638" -->
<!-- name="Weston, Stephen" -->
<!-- email="stephen.weston_at_[hidden]" -->
<!-- subject="[OMPI users] Error when calling MPI_Init" -->
<!-- id="F07A5A8C4255D14FA860AD5452EE2C3B03E36B2B_at_x10-mbx7.yu.yale.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Error when calling MPI_Init<br>
<strong>From:</strong> Weston, Stephen (<em>stephen.weston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-31 11:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17656.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17656.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Reply:</strong> <a href="17656.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm seeing an error on one of our clusters when executing the
<br>
MPI_Init function in a program that is _not_ invoked using the
<br>
mpirun command.  The error is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Error obtaining unique transport key from ORTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(orte_precondition_transports not present in the environment).
<br>
<p>followed by &quot;It looks like MPI_INIT failed for some reason; your
<br>
parallel process is likely to abort.&quot;, etc.  Since mpirun sets
<br>
this environment variable, it's not surprising that it isn't
<br>
set, but in our other Open MPI installations it doesn't seem
<br>
necessary for this environment variable to be set.
<br>
<p>I can work around the problem by setting the
<br>
&quot;OMPI_MCA_orte_precondition_transports&quot; environment variable
<br>
before running the program using the command:
<br>
<p>&nbsp;&nbsp;% eval &quot;export `mpirun env | grep OMPI_MCA_orte_precondition_transports`&quot;
<br>
<p>But I'm very curious what is causing this error, since it only
<br>
happens on one of our clusters.  Could this indicate a problem
<br>
with the way we configured Open MPI when we installed it?
<br>
<p>Any pointers on how to further investigate this issue would be
<br>
appreciated.
<br>
<p>- Steve Weston
<br>
<p>P.S.  I'm using Open MPI 1.4.3 on a Linux cluster using CentOS
<br>
release 5.5.  It happens in any MPI program that I execute
<br>
without mpirun.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17656.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17656.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
<li><strong>Reply:</strong> <a href="17656.php">Ralph Castain: "Re: [OMPI users] Error when calling MPI_Init"</a>
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
