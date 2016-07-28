<?
$subject_val = "Re: [OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 05:34:22 2010" -->
<!-- isoreceived="20100728093422" -->
<!-- sent="Wed, 28 Jul 2010 03:34:13 -0600" -->
<!-- isosent="20100728093413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI providing rank?" -->
<!-- id="1C2D4DC4-DF41-4F58-AA92-0FF5A76D14AE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201007280718.02789.yves.caniou_at_ens-lyon.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 05:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13822.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13820.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13826.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13826.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2010, at 11:18 PM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; Le Wednesday 28 July 2010 06:03:21 Nysal Jan, vous avez &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_RANK can be used to get the MPI rank. For other environment
</span><br>
<span class="quotelev2">&gt;&gt; variables -
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are processes affected to nodes sequentially, so that I can get the NODE 
</span><br>
<span class="quotelev1">&gt; number from $OMPI_COMM_WORLD_RANK modulo the number of proc per node?
</span><br>
<p>By default, yes. However, you can select alternative mapping methods.
<br>
<p>Or...you could just use the mpirun cmd line option to report the binding of each process as it is started :-)
<br>
<p>Do &quot;mpirun -h&quot; to see all the options. The one you want is --report-bindings
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For processor affinity see this FAQ entry -
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=all#using-paffinity">http://www.open-mpi.org/faq/?category=all#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, but that's where I had the information that I put in my previous 
</span><br>
<span class="quotelev1">&gt; mail, so it doesn't answer to my question.
</span><br>
<p>Memory affinity is taken care of under-the-covers when paffinity is active. No other options are required.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --Nysal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 28, 2010 at 9:04 AM, Yves Caniou &lt;yves.caniou_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have some performance issue on a parallel machine composed of nodes of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 procs each. The application is launched on multiple of 16 procs for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given numbers of nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was told by people using MX MPI with this machine to attach a script to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec, which 'numactl' things, in order to make the execution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance stable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking on the faq (the oldest one is for OpenMPI v1.3?), I saw that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solution would be for me to use the --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that correct? -- BTW, I have both memory and processor affinity:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does it handle memory too, or do I have to use another option like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca mpi_maffinity 1?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Still, I would like to test the numactl solution. Does OpenMPI provide an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent to $MXMPI_ID which gives at least gives the NODE on which a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process is launched by OpenMPI, so that I can adapt the script that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tkx.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .Yves.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-4212-2412 
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13822.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13820.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13819.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13826.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Reply:</strong> <a href="13826.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
