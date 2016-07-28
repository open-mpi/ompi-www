<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 06:53:41 2013" -->
<!-- isoreceived="20130424105341" -->
<!-- sent="Wed, 24 Apr 2013 03:53:34 -0700" -->
<!-- isosent="20130424105334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="04EE92EC-F1A6-45A9-9FB9-07FAD52DBBC7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD9CA27A.150AB%mclark_at_nvidia.com" -->
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
<strong>Date:</strong> 2013-04-24 06:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21777.php">Christoph Niethammer: "[OMPI users] Open MPI 1.7.1 and nonblocking bcast questions"</a>
<li><strong>Previous message:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2013, at 8:45 PM, Mike Clark &lt;mclark_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to follow up on this.  We have managed to get OpenMPI to run at large
</span><br>
<span class="quotelev1">&gt; scale, to do so we had to use aprun instead of using openmpi's mpirun
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<p>In general, using direct launch will be faster than going thru mpirun. However, Pasha and I were able to eliminate most of the penalty - you might want to talk to him about how to do it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While this has allowed us to now run at the full scale of Titan, we have
</span><br>
<span class="quotelev1">&gt; found a huge drop in MPI_Alltoall performance when running at 18K
</span><br>
<span class="quotelev1">&gt; processors.  E.g., performance per node has decreased by a factor 200X
</span><br>
<span class="quotelev1">&gt; versus running at 4.6K nodes.  Is there any obvious explanation for this
</span><br>
<span class="quotelev1">&gt; that I could have overlooked such as a buffer size or option that needs to
</span><br>
<span class="quotelev1">&gt; be set (configure option or environment variable) when running at such
</span><br>
<span class="quotelev1">&gt; large scale?  We are running inter-communicator one-way sending if this
</span><br>
<span class="quotelev1">&gt; makes any difference.
</span><br>
<p>Regardless of how it is launched, each process is going to read the default MCA parameter file to get any tuning info, so that wouldn't explain the difference. There is a connection time difference as processes have to create direct interprocess sockets for any connection setup that is required. I don't recall if the Cray's transport requires such support (IB does). When launched by mpirun, this time is reduced since the messages are routed along pre-existing connections.
<br>
<p>However, once that handshake is established, it shouldn't impact performance.
<br>
<p>You might check to see that you got the BTLs you were expecting. It's possible that the info exchange (modex) during MPI_Init isn't clearly communicating and so a higher-speed transport disqualified itself. The mechanism is very different when launched via mpirun vs direct-launched.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yours optimistically,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/22/13 3:17 PM, &quot;Mike Clark&quot; &lt;mclark_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run OpenMPI on the Cray XK7 system at Oak Ridge National
</span><br>
<span class="quotelev2">&gt;&gt; Lab (Titan), and am running in an issue whereby MPI_Init seems to hang
</span><br>
<span class="quotelev2">&gt;&gt; indefinitely, but this issue only arises at large scale, e.g., when
</span><br>
<span class="quotelev2">&gt;&gt; running on 18560 compute nodes (with two MPI processes per node).  The
</span><br>
<span class="quotelev2">&gt;&gt; application runs successfully on 4600 nodes, and we are currently trying
</span><br>
<span class="quotelev2">&gt;&gt; to test a 9000 node job to see if this fails or runs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are launching our job using something like the following
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun command  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpicmd=&quot;$OMP_DIR/bin/mpirun --prefix $OMP_DIR -np 37120 --npernode 2
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to core --bind-to numa $app $args&quot;
</span><br>
<span class="quotelev2">&gt;&gt; # Print  and Run the Command
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; echo $mpicmd
</span><br>
<span class="quotelev2">&gt;&gt; $mpicmd &gt;&amp; $output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there any issues that I should be aware of when running OpenMPI on
</span><br>
<span class="quotelev2">&gt;&gt; 37120 processes or when running on the Cray Gemini Interconnect?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are using OpenMPI 1.7.1 (1.7.x is required for Cray Gemini support)
</span><br>
<span class="quotelev2">&gt;&gt; and gcc 4.7.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mike.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="21777.php">Christoph Niethammer: "[OMPI users] Open MPI 1.7.1 and nonblocking bcast questions"</a>
<li><strong>Previous message:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21775.php">Mike Clark: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
