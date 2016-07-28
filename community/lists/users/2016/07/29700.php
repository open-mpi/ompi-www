<?
$subject_val = "[OMPI users] ORTE daemon error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 21 19:34:13 2016" -->
<!-- isoreceived="20160721233413" -->
<!-- sent="Thu, 21 Jul 2016 16:34:02 -0700" -->
<!-- isosent="20160721233402" -->
<!-- name="Steven Lo" -->
<!-- email="slo_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE daemon error" -->
<!-- id="57915BEA.4010600_at_cacr.caltech.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] ORTE daemon error<br>
<strong>From:</strong> Steven Lo (<em>slo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-21 19:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<li><strong>Previous message:</strong> <a href="29699.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<li><strong>Reply:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a newbie to openmpi.
<br>
<p><p>We have openmpi 1.10.2 running on RHEL 7 server.  When we submit job using
<br>
&quot;mpirun --mca oob_tcp_if_include ib0 -np 48 ./testjob&quot; via slurm version
<br>
16.05.2, we get the following error:
<br>
<p>--------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>Interesting thing is that when we run version 2.0.0 &quot;mpirun&quot;
<br>
(without --mca oob_tcp_if_include ib0) via slurm, the error
<br>
is gone.
<br>
<p><p>Do you know if this problem is from openmpi or the combination
<br>
of slurm and openmpi.
<br>
<p><p>Thanks
<br>
<p>Steven.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<li><strong>Previous message:</strong> <a href="29699.php">Ralph Castain: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
<li><strong>Reply:</strong> <a href="29701.php">Gilles Gouaillardet: "Re: [OMPI users] ORTE daemon error"</a>
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
