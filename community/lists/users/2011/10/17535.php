<?
$subject_val = "[OMPI users] Running MPI apps (example apps in OpenMPI) on OFED stack without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 13 14:00:12 2011" -->
<!-- isoreceived="20111013180012" -->
<!-- sent="Thu, 13 Oct 2011 17:53:45 +0000 (UTC)" -->
<!-- isosent="20111013175345" -->
<!-- name="ramu" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="[OMPI users] Running MPI apps (example apps in OpenMPI) on OFED stack without IPoIB" -->
<!-- id="loom.20111013T194436-937_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] Running MPI apps (example apps in OpenMPI) on OFED stack without IPoIB<br>
<strong>From:</strong> ramu (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-13 13:53:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17536.php">bhimesh akula: "[OMPI users] How to run open MPI without ipoib"</a>
<li><strong>Previous message:</strong> <a href="17534.php">Gabriele Fatigati: "[OMPI users] Memory mapped memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to run various MPI apps (for e.g., example apps in OpenMPI, IMB etc)
<br>
on my OFED setup (two hosts with CentOS5.4 connected back to back using Mellanox
<br>
infiniband hardware).  I want to run these MPI apps without IPoIB i.e, using
<br>
infiniband verbs.  
<br>
Below is the command I have tried.
<br>
&quot;mpirun --prefix /usr/local/ -np 2 --mca btl openib,self --mca
<br>
btl_openib_cpc_include rdmacm --mca btl_openib_if_include &quot;mthca_0:1&quot; -hostfile
<br>
tmp_host_file ring_c&quot;
<br>
With this I am getting error as
<br>
&quot;At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications. This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes. This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other. This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.&quot;
<br>
<p>I am using OpenMPI version 1.4.3
<br>
<p>Is it possible to avoid IPoIB while running MPI app on top of OFED stack ? If
<br>
yes, what is that I am missing in the above command ? Pleas suggest me.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17536.php">bhimesh akula: "[OMPI users] How to run open MPI without ipoib"</a>
<li><strong>Previous message:</strong> <a href="17534.php">Gabriele Fatigati: "[OMPI users] Memory mapped memory"</a>
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
