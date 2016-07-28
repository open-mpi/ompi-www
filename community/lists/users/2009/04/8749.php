<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 16:03:48 2009" -->
<!-- isoreceived="20090402200348" -->
<!-- sent="Thu, 2 Apr 2009 15:03:41 -0500" -->
<!-- isosent="20090402200341" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="18901.6685.980988.883045_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D5130D.706_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 16:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3 April 2009 at 03:33, Jerome BENOIT wrote:
<br>
| The above submission works the same on my clusters.
<br>
| But in fact, my issue involve interconnection between the nodes of the clusters:
<br>
| in the above examples involve no connection between nodes.
<br>
| 
<br>
| My cluster is a cluster of quadcore computers:
<br>
| if in the sbatch script
<br>
| 
<br>
| #SBATCH --nodes=7
<br>
| #SBATCH --ntasks=15
<br>
| 
<br>
| is replaced by
<br>
| 
<br>
| #SBATCH --nodes=1
<br>
| #SBATCH --ntasks=4
<br>
| 
<br>
| everything is fine as no interconnection is involved.
<br>
| 
<br>
| Can you test the inconnection part of the story ?
<br>
<p>Again, think about in terms of layers. You have a problem with slurm on top
<br>
of Open MPI.  
<br>
<p>So before blaming Open MPI, I would try something like this:
<br>
<p>~$ orterun -np 2 -H abc,xyz /tmp/jerome_hw
<br>
Hello world! I am 1 of 2 and my name is `abc'
<br>
Hello world! I am 0 of 2 and my name is `xyz'
<br>
~$
<br>
<p>ie whether the simple MPI example can be launched successfully on two nodes or not.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8750.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
