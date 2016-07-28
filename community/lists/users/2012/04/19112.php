<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 18:47:05 2012" -->
<!-- isoreceived="20120424224705" -->
<!-- sent="Tue, 24 Apr 2012 16:46:59 -0600" -->
<!-- isosent="20120424224659" -->
<!-- name="Kyle Boe" -->
<!-- email="boex0040_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="CA+vDB+M6OHijtndO10SvG32G5s2ErY_=6jB=mQZ4RNAEKw2swQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Kyle Boe (<em>boex0040_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 18:46:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19113.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19111.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="19108.php">Kyle Boe: "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19114.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19114.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19120.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19131.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right, I tried using a hostfile, and it made no difference. This is running
<br>
OpenMPI 1.4.4 on CentOS 5.x machines. The original issue was an error trap
<br>
built into my code, where it said one of the cores was asking for
<br>
information it already owned. I'm sorry to be vague, but I can't share
<br>
anything from the code in this forum. Basically, it is a CFD code,
<br>
parallelized by splitting the grid points in the simulation up amongst the
<br>
processors assigned to the job. As a pre-processing step, each processor
<br>
must figure out which other processors it must communicate with by virtue
<br>
of sharing neighboring gridpoints. The error I received told me that the
<br>
grid points were not being split amongst different processors. I have used
<br>
this exact same code using OpenMPI on other (larger) architectures, which,
<br>
combined with the MPI error I shared before, leads me to believe I must
<br>
have something not configured correctly, or there is some run time option
<br>
I'm not setting properly, etc.
<br>
<p>Thanks
<br>
<p>Kyle
<br>
<p>On Tue, Apr 24, 2012 at 4:15 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI doesn't recognize multiple cores
</span><br>
<span class="quotelev1">&gt;        available on    multicore machines
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;F9D4FCE5-9974-4814-9BCF-A39124961B32_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You don't need a hostfile to run multiple procs on the localhost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of OMPI are you using? What was the original issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19112/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19113.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19111.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="19108.php">Kyle Boe: "[OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19114.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19114.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19120.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19131.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
