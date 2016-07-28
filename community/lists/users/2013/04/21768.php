<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 04:21:52 2013" -->
<!-- isoreceived="20130423082152" -->
<!-- sent="Tue, 23 Apr 2013 12:21:49 +0400" -->
<!-- isosent="20130423082149" -->
<!-- name="&#208;&#148;&#208;&#181;&#209;&#128;&#208;&#177;&#209;&#131;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#184;&#209;&#135; &#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185;" -->
<!-- email="abderbunovich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="6b54dfd063c0b416d6a52c2943f0c410_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130422224632.GE76153_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI at scale on Cray XK7<br>
<strong>From:</strong> &#208;&#148;&#208;&#181;&#209;&#128;&#208;&#177;&#209;&#131;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#184;&#209;&#135; &#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185; (<em>abderbunovich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 04:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21769.php">Reuti: "Re: [OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>Previous message:</strong> <a href="21767.php">Manee: "[OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>In reply to:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Nathan,  could you please advise what is expected startup time for OpenMPI
<br>
job at such scale (128K ranks)? I'm interesting in
<br>
1) time from mpirun start to completion of MPI_Init()
<br>
2) time from MPI_Init() start to completion of MPI_Init()
<br>
<p><span class="quotelev1">&gt;From my experience for 52800 rank job
</span><br>
1) took around 20 min
<br>
2) took around 12 min
<br>
that actually looks like a hung.
<br>
<p>Any advice how to improve startup times of large scale jobs would be very
<br>
much appreciated.
<br>
<p>Best regards,
<br>
Andrey
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Nathan Hjelm
<br>
Sent: Tuesday, April 23, 2013 2:47 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI at scale on Cray XK7
<br>
<p>On Mon, Apr 22, 2013 at 03:17:16PM -0700, Mike Clark wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run OpenMPI on the Cray XK7 system at Oak Ridge National
</span><br>
Lab (Titan), and am running in an issue whereby MPI_Init seems to hang
<br>
indefinitely, but this issue only arises at large scale, e.g., when
<br>
running on 18560 compute nodes (with two MPI processes per node).  The
<br>
application runs successfully on 4600 nodes, and we are currently trying
<br>
to test a 9000 node job to see if this fails or runs.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are launching our job using something like the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun command
</span><br>
<p><span class="quotelev1">&gt; mpicmd=&quot;$OMP_DIR/bin/mpirun --prefix $OMP_DIR -np 37120 --npernode 2
</span><br>
--bind-to core --bind-to numa $app $args&quot;
<br>
<span class="quotelev1">&gt; # Print  and Run the Command
</span><br>
<p><span class="quotelev1">&gt; echo $mpicmd
</span><br>
<span class="quotelev1">&gt; $mpicmd &gt;&amp; $output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any issues that I should be aware of when running OpenMPI on
</span><br>
37120 processes or when running on the Cray Gemini Interconnect?
<br>
<p>We have only tested Open MPI up to 131072 ranks on 8192 nodes. Have you
<br>
tried running DDT on the process to see where it is hung up?
<br>
<p>I have a Titan account so I can help with debugging. I would like to get
<br>
this issue fixed in 1.7.2.
<br>
<p>-Nathan
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21769.php">Reuti: "Re: [OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>Previous message:</strong> <a href="21767.php">Manee: "[OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>In reply to:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21771.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
