<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 16:23:34 2009" -->
<!-- isoreceived="20090402202334" -->
<!-- sent="Fri, 03 Apr 2009 04:23:24 +0800" -->
<!-- isosent="20090402202324" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="49D51EBC.1070509_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18901.6685.980988.883045_at_ron.nulle.part" -->
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
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 16:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi !
<br>
<p>Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; On 3 April 2009 at 03:33, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; | The above submission works the same on my clusters.
</span><br>
<span class="quotelev1">&gt; | But in fact, my issue involve interconnection between the nodes of the clusters:
</span><br>
<span class="quotelev1">&gt; | in the above examples involve no connection between nodes.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | My cluster is a cluster of quadcore computers:
</span><br>
<span class="quotelev1">&gt; | if in the sbatch script
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #SBATCH --nodes=7
</span><br>
<span class="quotelev1">&gt; | #SBATCH --ntasks=15
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | is replaced by
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | #SBATCH --nodes=1
</span><br>
<span class="quotelev1">&gt; | #SBATCH --ntasks=4
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | everything is fine as no interconnection is involved.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | Can you test the inconnection part of the story ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, think about in terms of layers. You have a problem with slurm on top
</span><br>
<span class="quotelev1">&gt; of Open MPI.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So before blaming Open MPI, I would try something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ~$ orterun -np 2 -H abc,xyz /tmp/jerome_hw
</span><br>
<span class="quotelev1">&gt; Hello world! I am 1 of 2 and my name is `abc'
</span><br>
<span class="quotelev1">&gt; Hello world! I am 0 of 2 and my name is `xyz'
</span><br>
<span class="quotelev1">&gt; ~$
</span><br>
<p>I got it: I am very new with openmpi.
<br>
It is working with each nodes except one (`green'):
<br>
I have to blame my cluster.
<br>
<p>I will try to fix it soon. 
<br>
<p><p>Thanks you very much for you help,
<br>
Jerome
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ie whether the simple MPI example can be launched successfully on two nodes or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8751.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
