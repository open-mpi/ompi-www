<?
$subject_val = "[OMPI users] Error in mx_init (error MX library incompatible with driver version)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 13:05:51 2009" -->
<!-- isoreceived="20090619170551" -->
<!-- sent="Fri, 19 Jun 2009 18:05:51 +0100" -->
<!-- isosent="20090619170551" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] Error in mx_init (error MX library incompatible with driver version)" -->
<!-- id="5504C1518E7EAE4C912A724C518C079247CA0C_at_DURMAIL1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Error in mx_init (error MX library incompatible with driver version)<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 13:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9641.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>Reply:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a question I raised before but for OpenMPI over IB.
<br>
<p>I have build the app with the Portland compiler and OpenMPI 1.2.3 for
<br>
Myrinet and InfiniBand. Now I wish to run this on some nodes that have
<br>
no fast interconnect. We use GridEngine, this is the script:
<br>
<p>#!/bin/csh
<br>
#$ -cwd
<br>
##$ -j y
<br>
<p>module purge
<br>
module load dot sge openmpi/pgi/64/1.2.3
<br>
<p>echo &quot;Got slots&quot;
<br>
<p>mpirun -np $NSLOTS --mca btl &quot;sm,self,tcp&quot; ./t2eco2n_mp
<br>
<p>This gives the following error message:
<br>
<p>[node168:30330] Error in mx_init (error MX library incompatible with
<br>
driver version)
<br>
MX:driver-api-seq-num differ (lib=5.1,kernel=2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MX Lib Version=1.2.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MX Lib Build=dcl0hpc_at_hamilton:/tmp/dcl0hpc/myrinet/mx-1.2.5 Wed
<br>
Apr 16 10:48:48 BST 2008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MX Kernel Version=1.1.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MX Kernel Build=root_at_node014:/tmp/mx-1.1.6 Fri Nov 24 13:41:44
<br>
GMT 2006
<br>
[node168:30331] Error in mx_init (error MX library incompatible with
<br>
driver version)
<br>
[node168:30330] *** Process received signal ***
<br>
[node168:30330] Signal: Segmentation fault (11)
<br>
[node168:30330] Signal code:  (128)
<br>
[node168:30330] Failing at address: (nil)
<br>
[node168:30330] *** End of error message ***
<br>
<p><p>Although the mismatch between MX lib version and the kernel version
<br>
appears to cause the mx_init error this should never be called as there
<br>
is no mx card on those nodes.
<br>
<p>Thanks in advance for any advice to solve this
<br>
<p>Henk
<br>
<p><p>Dr. H.A. Slim
<br>
IT Consultant, Scientific and High Performance Computing
<br>
IT Service,
<br>
Durham University, UK
<br>
e-mail: h.a.slim_at_[hidden]
<br>
Tel.: 0191 - 334 2724
<br>
FAX: 0191 - 3342701 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9643.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9641.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>Reply:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
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
