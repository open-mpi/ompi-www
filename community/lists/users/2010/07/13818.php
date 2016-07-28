<?
$subject_val = "Re: [OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 00:03:26 2010" -->
<!-- isoreceived="20100728040326" -->
<!-- sent="Wed, 28 Jul 2010 09:33:21 +0530" -->
<!-- isosent="20100728040321" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI providing rank?" -->
<!-- id="AANLkTinw46WLGww1ODAav+RumMGZ+HAy2nX1eTZtxLO4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007280534.49846.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI providing rank?<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 00:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13816.php">Yves Caniou: "[OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI_COMM_WORLD_RANK can be used to get the MPI rank. For other environment
<br>
variables -
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
<br>
For processor affinity see this FAQ entry -
<br>
<a href="http://www.open-mpi.org/faq/?category=all#using-paffinity">http://www.open-mpi.org/faq/?category=all#using-paffinity</a>
<br>
<p>--Nysal
<br>
<p>On Wed, Jul 28, 2010 at 9:04 AM, Yves Caniou &lt;yves.caniou_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some performance issue on a parallel machine composed of nodes of 16
</span><br>
<span class="quotelev1">&gt; procs each. The application is launched on multiple of 16 procs for given
</span><br>
<span class="quotelev1">&gt; numbers of nodes.
</span><br>
<span class="quotelev1">&gt; I was told by people using MX MPI with this machine to attach a script to
</span><br>
<span class="quotelev1">&gt; mpiexec, which 'numactl' things, in order to make the execution performance
</span><br>
<span class="quotelev1">&gt; stable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking on the faq (the oldest one is for OpenMPI v1.3?), I saw that maybe
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; solution would be for me to use the --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt; Is that correct? -- BTW, I have both memory and processor affinity:
</span><br>
<span class="quotelev2">&gt; &gt;ompi_info | grep affinity
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; Does it handle memory too, or do I have to use another option like
</span><br>
<span class="quotelev1">&gt; --mca mpi_maffinity 1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, I would like to test the numactl solution. Does OpenMPI provide an
</span><br>
<span class="quotelev1">&gt; equivalent to $MXMPI_ID which gives at least gives the NODE on which a
</span><br>
<span class="quotelev1">&gt; process is launched by OpenMPI, so that I can adapt the script that was
</span><br>
<span class="quotelev1">&gt; given
</span><br>
<span class="quotelev1">&gt; to me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tkx.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13818/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13817.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13816.php">Yves Caniou: "[OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
