<?
$subject_val = "Re: [OMPI users] MPI_Allreduce for INTEGER8?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 15:23:56 2011" -->
<!-- isoreceived="20110126202356" -->
<!-- sent="Wed, 26 Jan 2011 21:23:51 +0100" -->
<!-- isosent="20110126202351" -->
<!-- name="Harald Anlauf" -->
<!-- email="anlauf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce for INTEGER8?" -->
<!-- id="4D4082D7.1030903_at_gmx.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20110124222803.304570_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce for INTEGER8?<br>
<strong>From:</strong> Harald Anlauf (<em>anlauf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-26 15:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15426.php">Michael Curtis: "[OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/24/2011 11:28 PM, Harald Anlauf wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce works for me with MPI_INTEGER8 for all OpenMPI
</span><br>
<span class="quotelev1">&gt; versions up to 1.4.3.  However, with OpenMPI 1.5.1 I get a
</span><br>
<span class="quotelev1">&gt; failure at runtime:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [proton:23642] *** An error occurred in MPI_Allreduce: the reduction operation MPI_SUM is not defined on the MPI_INTEGER8 datatype
</span><br>
<span class="quotelev1">&gt; [proton:23642] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [proton:23642] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [proton:23642] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<p>Since I got no reply yet, I have attached an enhanced test case.
<br>
<p>With openmpi-1.5.1 and np=1, also tested with gfortran:
<br>
<p>&nbsp;Real kind,    digits:           8          53
<br>
&nbsp;Integer kind,   bits:           8                   64
<br>
&nbsp;Default Integer     :           4          32
<br>
&nbsp;Sum[real(8)]:   1.0000000000000000        2.0000000000000000
<br>
3.0000000000000000
<br>
&nbsp;Sum[integer(4)]:           1           2           3
<br>
[proton:16920] *** An error occurred in MPI_Allreduce: the reduction
<br>
operation MPI_SUM is not defined on the MPI_INTEGER8 datatype
<br>
[proton:16920] *** on communicator MPI_COMM_WORLD
<br>
[proton:16920] *** MPI_ERR_OP: invalid reduce operation
<br>
[proton:16920] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>With openmpi-1.4.3:
<br>
<p>&nbsp;Real kind,    digits:           8          53
<br>
&nbsp;Integer kind,   bits:           8                   64
<br>
&nbsp;Default Integer     :           4          32
<br>
&nbsp;Sum[real(8)]:   1.0000000000000000        2.0000000000000000
<br>
3.0000000000000000
<br>
&nbsp;Sum[integer(4)]:           1           2           3
<br>
&nbsp;Sum[integer(8)]:                    1                    2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3
<br>
<p>That's clearly a regression.
<br>
<p>Harald
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15425/mpiallreducetest.f90">mpiallreducetest.f90</a>
</ul>
<!-- attachment="mpiallreducetest.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15426.php">Michael Curtis: "[OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15424.php">Ashley Pittman: "Re: [OMPI users] Issue Resolved: Re:  bash: orted: ..."</a>
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
