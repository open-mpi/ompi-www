<?
$subject_val = "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 05:24:20 2015" -->
<!-- isoreceived="20150524092420" -->
<!-- sent="Sun, 24 May 2015 18:24:14 +0900" -->
<!-- isosent="20150524092414" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine" -->
<!-- id="CAAkFZ5teL9fMKRC6Ht2Cn7b5ZrAfdHxSmT8FCY=5Yi-q-fgKTw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v98RtygdZNiWhA_373SH0c2rz3LF3mKnf_7b_Rq_RTUX2A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-24 05:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26908.php">XingFENG: "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>In reply to:</strong> <a href="26908.php">XingFENG: "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Reply:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Xing,
<br>
<p>iirc, open MPI default behavior is to bind to cores (vs hyperthreads),
<br>
hence the error message.
<br>
<p>I cannot remember the option to bind to threads, but you can mpirun
<br>
--oversubscribe if you are currently stuck
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, May 24, 2015, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, OPENMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have met some problem while doing experiments on Amazon EC2. I have
</span><br>
<span class="quotelev1">&gt; chosen instance type r3.2xlarge. As amazon claimed, it has 8 vcpu. Each
</span><br>
<span class="quotelev1">&gt; vCPU is a hyperthread of an Intel Xeon core for M3, C4, C3, R3, HS1, G2,
</span><br>
<span class="quotelev1">&gt; I2, and D2. (from *<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>&gt;)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I try to run experiments on 4 machines, each with 8 slots.
</span><br>
<span class="quotelev1">&gt; OPENMPI reminds me that I am oversubscribing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know the reason? Thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26909/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26908.php">XingFENG: "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>In reply to:</strong> <a href="26908.php">XingFENG: "[OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Reply:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
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
