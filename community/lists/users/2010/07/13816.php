<?
$subject_val = "[OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 23:35:00 2010" -->
<!-- isoreceived="20100728033500" -->
<!-- sent="Wed, 28 Jul 2010 05:34:49 +0200" -->
<!-- isosent="20100728033449" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI providing rank?" -->
<!-- id="201007280534.49846.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI providing rank?<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 23:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13818.php">Nysal Jan: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13818.php">Nysal Jan: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Maybe reply:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have some performance issue on a parallel machine composed of nodes of 16 
<br>
procs each. The application is launched on multiple of 16 procs for given 
<br>
numbers of nodes.
<br>
I was told by people using MX MPI with this machine to attach a script to 
<br>
mpiexec, which 'numactl' things, in order to make the execution performance 
<br>
stable.
<br>
<p>Looking on the faq (the oldest one is for OpenMPI v1.3?), I saw that maybe the 
<br>
solution would be for me to use the --mca mpi_paffinity_alone 1
<br>
Is that correct? -- BTW, I have both memory and processor affinity:
<br>
<span class="quotelev1">&gt;ompi_info | grep affinity
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
<br>
Does it handle memory too, or do I have to use another option like 
<br>
--mca mpi_maffinity 1?
<br>
<p>Still, I would like to test the numactl solution. Does OpenMPI provide an 
<br>
equivalent to $MXMPI_ID which gives at least gives the NODE on which a 
<br>
process is launched by OpenMPI, so that I can adapt the script that was given 
<br>
to me?
<br>
<p>Tkx.
<br>
<p>.Yves.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13815.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13818.php">Nysal Jan: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13818.php">Nysal Jan: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Maybe reply:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
