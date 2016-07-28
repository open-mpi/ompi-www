<?
$subject_val = "[OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 22 18:17:21 2013" -->
<!-- isoreceived="20130422221721" -->
<!-- sent="Mon, 22 Apr 2013 15:17:16 -0700" -->
<!-- isosent="20130422221716" -->
<!-- name="Mike Clark" -->
<!-- email="mclark_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="21F18986-C03E-4CB3-9C9A-72ED1173CF7B_at_nvidia.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI at scale on Cray XK7<br>
<strong>From:</strong> Mike Clark (<em>mclark_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-22 18:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21763.php">Thomas Watson: "[OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run OpenMPI on the Cray XK7 system at Oak Ridge National Lab (Titan), and am running in an issue whereby MPI_Init seems to hang indefinitely, but this issue only arises at large scale, e.g., when running on 18560 compute nodes (with two MPI processes per node).  The application runs successfully on 4600 nodes, and we are currently trying to test a 9000 node job to see if this fails or runs.
<br>
<p>We are launching our job using something like the following
<br>
<p># mpirun command                                                                                   
<br>
mpicmd=&quot;$OMP_DIR/bin/mpirun --prefix $OMP_DIR -np 37120 --npernode 2 --bind-to core --bind-to numa $app $args&quot;
<br>
# Print  and Run the Command                                                                       
<br>
echo $mpicmd
<br>
$mpicmd &gt;&amp; $output
<br>
<p>Are there any issues that I should be aware of when running OpenMPI on 37120 processes or when running on the Cray Gemini Interconnect?
<br>
<p>We are using OpenMPI 1.7.1 (1.7.x is required for Cray Gemini support) and gcc 4.7.2.
<br>
<p>Thanks,
<br>
<p>Mike.
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21763.php">Thomas Watson: "[OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
