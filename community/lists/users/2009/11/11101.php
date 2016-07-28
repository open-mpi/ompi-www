<?
$subject_val = "Re: [OMPI users] Distribute app over open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  7 01:49:43 2009" -->
<!-- isoreceived="20091107064943" -->
<!-- sent="Sat, 07 Nov 2009 17:49:33 +1100" -->
<!-- isosent="20091107064933" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Distribute app over open mpi" -->
<!-- id="1257576573.5823.5.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="331795.32121.qm_at_web43142.mail.sp1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Distribute app over open mpi<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-07 01:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11102.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-11-06 at 08:10 -0800, Arnaud Westenberg wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the newbie question, but I'm having a hard time finding the answer, as I'm not even familiar with the terminology...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've setup a small cluster on Ubuntu (hardy) and everything is working great, including slurm etc. If I run the well known 'Pi' program I get the proper results returned from all the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I'm looking for a way such that I wouldn't need to install the application on each node, nor on the shared nfs. Currently I get the obvious error that the app is not found on the nodes on which it isn't installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The idea is that the master node would thus distribute the required (parts of the) program to the slave nodes so they can perform the assigned work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason is that I want to run an FEA package on a much larger (redhat) cluster we currently use for CDF calculations. I really don't want to mess up the cluster as we bought it already configured and compiling new versions of the FEA package on it turns out to be a missing library nightmare.
</span><br>
<p>I don't understand the question.  Do you have a binary that works on
<br>
your new cluster or not?  I just don't see how recompiling the code fits
<br>
with the rest of the question.  If you have an OpenMPI-linked binary for
<br>
your FEA, simply copy it out to your nodes, then run it.  There are many
<br>
ways to do this: which is best depends on many factors.  Probably scp is
<br>
your friend if you don't have a common filesystem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11102.php">Lee Amy: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11100.php">Ralph Castain: "Re: [OMPI users] Distribute app over open mpi"</a>
<li><strong>In reply to:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
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
