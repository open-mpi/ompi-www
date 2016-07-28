<?
$subject_val = "Re: [OMPI users] OpenMPI providing rank?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 08:37:38 2010" -->
<!-- isoreceived="20100728123738" -->
<!-- sent="Wed, 28 Jul 2010 14:37:26 +0200" -->
<!-- isosent="20100728123726" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI providing rank?" -->
<!-- id="201007281437.26678.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1C2D4DC4-DF41-4F58-AA92-0FF5A76D14AE_at_open-mpi.org" -->
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
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 08:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13827.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on	MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13821.php">Ralph Castain: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le Wednesday 28 July 2010 11:34:13 Ralph Castain, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; On Jul 27, 2010, at 11:18 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Le Wednesday 28 July 2010 06:03:21 Nysal Jan, vous avez &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI_COMM_WORLD_RANK can be used to get the MPI rank. For other
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment variables -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variable">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variable</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;s
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are processes affected to nodes sequentially, so that I can get the NODE
</span><br>
<span class="quotelev2">&gt; &gt; number from $OMPI_COMM_WORLD_RANK modulo the number of proc per node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By default, yes. However, you can select alternative mapping methods.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or...you could just use the mpirun cmd line option to report the binding of
</span><br>
<span class="quotelev1">&gt; each process as it is started :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do &quot;mpirun -h&quot; to see all the options. The one you want is
</span><br>
<span class="quotelev1">&gt; --report-bindings
</span><br>
<p>It reports to stderr, so the $OMPI_COMM_WORLD_RANK modulo the number of proc 
<br>
per nodes seems more appropriate for what I need, right?
<br>
<p>So is the following valid to put memory affinity?
<br>
<p>script.sh:
<br>
&nbsp;&nbsp;MYRANK=$OMPI_COMM_WORLD_RANK
<br>
&nbsp;&nbsp;MYVAL=$(expr $MYRANK / 4)
<br>
&nbsp;&nbsp;NODE=$(expr $MYVAL % 4)
<br>
&nbsp;&nbsp;numactl --cpunodebind=$NODE --membind=$NODE $@
<br>
<p>mpiexec ./script.sh -n 128 myappli myparam
<br>
<p><span class="quotelev3">&gt; &gt;&gt; For processor affinity see this FAQ entry -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=all#using-paffinity">http://www.open-mpi.org/faq/?category=all#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you, but that's where I had the information that I put in my
</span><br>
<span class="quotelev2">&gt; &gt; previous mail, so it doesn't answer to my question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory affinity is taken care of under-the-covers when paffinity is active.
</span><br>
<span class="quotelev1">&gt; No other options are required.
</span><br>
<p>Which is better: using this option, or the cmd line with numactl (if it 
<br>
works)? What is the difference?
<br>
<p>Tkx.
<br>
<p>.Yves.
<br>
<p><span class="quotelev2">&gt; &gt; .Yves.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --Nysal
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jul 28, 2010 at 9:04 AM, Yves Caniou 
</span><br>
&lt;yves.caniou_at_[hidden]&gt;wrote:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have some performance issue on a parallel machine composed of nodes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of 16 procs each. The application is launched on multiple of 16 procs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for given numbers of nodes.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I was told by people using MX MPI with this machine to attach a script
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to mpiexec, which 'numactl' things, in order to make the execution
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; performance stable.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Looking on the faq (the oldest one is for OpenMPI v1.3?), I saw that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; maybe the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; solution would be for me to use the --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is that correct? -- BTW, I have both memory and processor affinity:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ompi_info | grep affinity
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;          MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;          MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; v1.4.2) MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Does it handle memory too, or do I have to use another option like
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --mca mpi_maffinity 1?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Still, I would like to test the numactl solution. Does OpenMPI provide
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; an equivalent to $MXMPI_ID which gives at least gives the NODE on which
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a process is launched by OpenMPI, so that I can adapt the script that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; was given
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to me?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tkx.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; .Yves.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13827.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on	MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13821.php">Ralph Castain: "Re: [OMPI users] OpenMPI providing rank?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13829.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
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
