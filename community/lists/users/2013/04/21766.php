<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 22 19:22:14 2013" -->
<!-- isoreceived="20130422232214" -->
<!-- sent="Mon, 22 Apr 2013 16:22:07 -0700" -->
<!-- isosent="20130422232207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="03A0AC7D-C106-47FC-BA26-E638CDA93C37_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-22 19:22:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21767.php">Manee: "[OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>Previous message:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21768.php">Дербунович Андрей: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2013, at 3:46 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 22, 2013 at 03:17:16PM -0700, Mike Clark wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run OpenMPI on the Cray XK7 system at Oak Ridge National Lab (Titan), and am running in an issue whereby MPI_Init seems to hang indefinitely, but this issue only arises at large scale, e.g., when running on 18560 compute nodes (with two MPI processes per node).  The application runs successfully on 4600 nodes, and we are currently trying to test a 9000 node job to see if this fails or runs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are launching our job using something like the following
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun command                                                                                   
</span><br>
<span class="quotelev2">&gt;&gt; mpicmd=&quot;$OMP_DIR/bin/mpirun --prefix $OMP_DIR -np 37120 --npernode 2 --bind-to core --bind-to numa $app $args&quot;
</span><br>
<span class="quotelev2">&gt;&gt; # Print  and Run the Command                                                                       
</span><br>
<span class="quotelev2">&gt;&gt; echo $mpicmd
</span><br>
<span class="quotelev2">&gt;&gt; $mpicmd &gt;&amp; $output
</span><br>
<p>Actually, I see something here that bothers me - you specify two conflicting binding directives. I would have thought OMPI would abort when seeing that, but apparently not (I'll fix it). Which one did you actually want?
<br>
<p>You also don't need to specify the --prefix argument because you are giving mpirun as an absolute path - we detect that and automatically set the prefix.
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there any issues that I should be aware of when running OpenMPI on 37120 processes or when running on the Cray Gemini Interconnect?
</span><br>
<p>Do you have evidence to support your statement that MPI_Init is hanging? In other words, do you know for certain that the daemons on all those nodes are running and wired up correctly, and that it is the application itself that is hanging?
<br>
<p>One way to test this is to run &quot;hostname&quot; as your app - if that runs successfully, then you have reason to believe that the daemons are getting started correctly, and that they are successfully passing the app launch cmd to all nodes. This is one area that could fail at larger scale as it never gets tested.
<br>
<p>If that works, then you could use the test code (in the source directory) orte/test/system/orte_no_op.c. This simply calls orte_init/finalize and verifies that process wireup is working.
<br>
<p>If both of those work, then indeed it is something in the MPI layer itself. We could then try to find that issue.
<br>
<p>BTW: what version of OMPI are you using?
<br>
<p><p><span class="quotelev1">&gt; We have only tested Open MPI up to 131072 ranks on 8192 nodes. Have you tried running DDT on the process to see where it is hung up?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a Titan account so I can help with debugging. I would like to get this issue fixed in 1.7.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="21767.php">Manee: "[OMPI users] Copying installed runtimes to another machine and using it"</a>
<li><strong>Previous message:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21765.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21768.php">Дербунович Андрей: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
