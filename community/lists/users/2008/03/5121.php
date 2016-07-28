<?
$subject_val = "[OMPI users] eager limits?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 15:19:38 2008" -->
<!-- isoreceived="20080303201938" -->
<!-- sent="Mon, 3 Mar 2008 15:18:32 -0500" -->
<!-- isosent="20080303201832" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] eager limits?" -->
<!-- id="C0B6F2CD-7965-4E4F-967D-0140D10A8D6F_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] eager limits?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 15:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
<li><strong>Previous message:</strong> <a href="5120.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
<li><strong>Reply:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was writing a simple code to demonstrate deadlock.  I create an  
<br>
array of some number of doubles, when sizeof(double)*SIZE is &gt;  
<br>
btl_sm_eager_limit (on a smp machine) I expect the code to deadlock  
<br>
but not until the buffer size is greater than the eager limit.
<br>
<p>Now in 1.2.3 sm_eager_limit is 4096 (bytes?)  So i expect a buffer of  
<br>
doubles created with malloc to have up to 512 before the code  
<br>
deadlocks.  (remember this is for demonstrations only) The code  
<br>
deadlocks at 504 doubles, does the eager limit not include the  
<br>
envelope overhead?  Is it really 64 Kbytes?
<br>
<p>Thus does every message take up 64K no matter the size of buffer* ?
<br>
<p><p>Brock Palen
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
<li><strong>Next message:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
<li><strong>Previous message:</strong> <a href="5120.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
<li><strong>Reply:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
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
