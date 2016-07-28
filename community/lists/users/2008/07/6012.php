<?
$subject_val = "[OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 10:18:32 2008" -->
<!-- isoreceived="20080702141832" -->
<!-- sent="Wed, 2 Jul 2008 10:17:53 -0400" -->
<!-- isosent="20080702141753" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI locking up only on IB" -->
<!-- id="DE546A1E-2E21-45E7-8CD9-098FE5ADFC12_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI locking up only on IB<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 10:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6011.php">Ralph H Castain: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a code (arts)  that locks up only when running on IB.  Works  
<br>
fine on tcp and sm.
<br>
<p>When we ran it in a debugger.  It locked up on a MPI_Comm_split()   
<br>
That as far as I could tell was valid.
<br>
Because the split was a hack they did to use MPI_File_open() on a  
<br>
single cpu,  we reworked it to remove the split.  The code then locks  
<br>
up again.
<br>
<p>This time its locked up on an MPI_Allreduce()  Which was really  
<br>
strange.  When running on 8 cpus only rank 4 would get sucks.  The  
<br>
rest of the ranks are fine and get the right value.  (we are using  
<br>
ddt as our debugger).
<br>
<p>Its very strange.  Do you have any idea what could cause this to  
<br>
happen?  We are using openmpi-1.2.3/1.2.6  with PGI compilers.
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6011.php">Ralph H Castain: "Re: [OMPI users] Need some help regarding Linpack execution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
