<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 18:28:33 2006" -->
<!-- isoreceived="20061220232833" -->
<!-- sent="Wed, 20 Dec 2006 17:28:26 -0600" -->
<!-- isosent="20061220232826" -->
<!-- name="Michael John Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband - Any suggestions on &amp;quot;How can you prove to me that OpenMPI is using it?&amp;quot;" -->
<!-- id="1783B976DF8DCD49B4463FB606CADB222E054B_at_UABEXMB2.ad.uab.edu" -->
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
<strong>From:</strong> Michael John Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-20 18:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2390.php">Andrus, Mr. Brian \(Contractor\): "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Reply:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy, I'm new to cluster administration, MPI and high speed networks.
<br>
<p>I've compiled my OpenMPI using these settings:
<br>
<p>./configure CC='icc' CXX='icpc' FC='ifort' F77='ifort'
<br>
--with-mvapi=/usr/local/topspin
<br>
--with-mvapi-libdir=/usr/local/topspin/lib64 --enable-static
<br>
--prefix=/share/apps/openmpi/1.1.2
<br>
<p>I'm running a Gromacs -np 16 job that I submitting using Sun Grid Engine
<br>
and OpenMPI that's going to run for several hours.
<br>
<p>The job was submitted with:
<br>
mpirun -np 16 -machinefile machines mdrun ......
<br>
<p>I've been asked by the owner of the cluster &quot;How can you prove to me
<br>
that this openmpi job is using the Infiniband network?&quot;
<br>
<p>At first I thought a simple netstat -an on the compute nodes might tell
<br>
me, however I don't see the Infiniband IP's in the list so I'm thinking
<br>
maybe I need to be looking elsewhere.
<br>
<p>Ompi_info reports:
<br>
&nbsp;&nbsp;MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.1.2)
<br>
<p>Thanks for any suggestions,
<br>
<p>Mike
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Previous message:</strong> <a href="2390.php">Andrus, Mr. Brian \(Contractor\): "Re: [OMPI users] How do I compile OpenMPI with PGI compilers andF90 support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Reply:</strong> <a href="2392.php">Jeff Squyres: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
<li><strong>Maybe reply:</strong> <a href="2396.php">Michael John Hanby: "Re: [OMPI users] Infiniband - Any suggestions on &quot;How can you prove to me that OpenMPI is using it?&quot;"</a>
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
