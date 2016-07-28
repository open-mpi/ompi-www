<?
$subject_val = "[OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 17:51:26 2009" -->
<!-- isoreceived="20090817215126" -->
<!-- sent="Mon, 17 Aug 2009 17:51:15 -0400" -->
<!-- isosent="20090817215115" -->
<!-- name="Craig Plaisance" -->
<!-- email="cpp6f_at_[hidden]" -->
<!-- subject="[OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="4A89D0D3.4090000_at_virginia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> Craig Plaisance (<em>cpp6f_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 17:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10401.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="10415.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi - I have compiled vasp 4.6.34 using the Intel fortran compiler 11.1 
<br>
with openmpi 1.3.3 on a cluster of 104 nodes running Rocks 5.2 with two 
<br>
quad core opterons connected by a Gbit ethernet.  Running in parallel on 
<br>
one node (8 cores) runs very well, faster than any other cluster I have 
<br>
run it on.  However, running on 2 nodes in parallel only improves the 
<br>
performance by 10% over the one node case while running on 4 and 8 nodes 
<br>
yields no improvement over the two node case.  Furthermore, when running 
<br>
multiple (3-4) jobs simultaneously, the performance decreases by around 
<br>
50% compared to running only a single job on the entire cluster.  The 
<br>
nodes are connected by a Dell Powerconnect 6248 managed switch.  I get 
<br>
the same performance with mpich2, so I don't think it is a problem 
<br>
specific to openmpi.  Other vasp users have reported very good scaling 
<br>
up to 4 nodes on a similar cluster, so I don't think the problem is vasp 
<br>
either.  Could something be wrong with the way mpi is configured to work 
<br>
with the switch?  Or the operating system is not configured to work with 
<br>
the switch properly?  Or the switch itself needs to be configured?  Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Reply:</strong> <a href="10401.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="10415.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
