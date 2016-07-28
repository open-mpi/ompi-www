<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 23:45:59 2013" -->
<!-- isoreceived="20130424034559" -->
<!-- sent="Tue, 23 Apr 2013 20:45:53 -0700" -->
<!-- isosent="20130424034553" -->
<!-- name="Mike Clark" -->
<!-- email="mclark_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="CD9CA27A.150AB%mclark_at_nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21F18986-C03E-4CB3-9C9A-72ED1173CF7B_at_nvidia.com" -->
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
<strong>From:</strong> Mike Clark (<em>mclark_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 23:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21764.php">Mike Clark: "[OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Just to follow up on this.  We have managed to get OpenMPI to run at large
<br>
scale, to do so we had to use aprun instead of using openmpi's mpirun
<br>
command.
<br>
<p>While this has allowed us to now run at the full scale of Titan, we have
<br>
found a huge drop in MPI_Alltoall performance when running at 18K
<br>
processors.  E.g., performance per node has decreased by a factor 200X
<br>
versus running at 4.6K nodes.  Is there any obvious explanation for this
<br>
that I could have overlooked such as a buffer size or option that needs to
<br>
be set (configure option or environment variable) when running at such
<br>
large scale?  We are running inter-communicator one-way sending if this
<br>
makes any difference.
<br>
<p>Yours optimistically,
<br>
<p>Mike.
<br>
<p><p>On 4/22/13 3:17 PM, &quot;Mike Clark&quot; &lt;mclark_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to run OpenMPI on the Cray XK7 system at Oak Ridge National
</span><br>
<span class="quotelev1">&gt;Lab (Titan), and am running in an issue whereby MPI_Init seems to hang
</span><br>
<span class="quotelev1">&gt;indefinitely, but this issue only arises at large scale, e.g., when
</span><br>
<span class="quotelev1">&gt;running on 18560 compute nodes (with two MPI processes per node).  The
</span><br>
<span class="quotelev1">&gt;application runs successfully on 4600 nodes, and we are currently trying
</span><br>
<span class="quotelev1">&gt;to test a 9000 node job to see if this fails or runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We are launching our job using something like the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;# mpirun command  
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;mpicmd=&quot;$OMP_DIR/bin/mpirun --prefix $OMP_DIR -np 37120 --npernode 2
</span><br>
<span class="quotelev1">&gt;--bind-to core --bind-to numa $app $args&quot;
</span><br>
<span class="quotelev1">&gt;# Print  and Run the Command
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;echo $mpicmd
</span><br>
<span class="quotelev1">&gt;$mpicmd &gt;&amp; $output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are there any issues that I should be aware of when running OpenMPI on
</span><br>
<span class="quotelev1">&gt;37120 processes or when running on the Cray Gemini Interconnect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We are using OpenMPI 1.7.1 (1.7.x is required for Cray Gemini support)
</span><br>
<span class="quotelev1">&gt;and gcc 4.7.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Mike.
</span><br>
<p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21764.php">Mike Clark: "[OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21776.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
