<?
$subject_val = "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 05:41:22 2015" -->
<!-- isoreceived="20150524094122" -->
<!-- sent="Sun, 24 May 2015 18:41:16 +0900" -->
<!-- isosent="20150524094116" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine" -->
<!-- id="CAAkFZ5sHjDFzsvrmRo28zMx6VXDte5FSPTyM4AdRwi0DhW_LxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v993K=beykwxNjzg6XN5u_qfKqtCACXzu=freaMGyLoY_Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-24 05:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>In reply to:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Reply:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, that is clearly suboptimal.
<br>
<p>the optimal option is something like -bind-to hwthreads
<br>
(I am afk so I cannot confirm this)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, May 24, 2015, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for your respond. But if I oversubscribe, would the
</span><br>
<span class="quotelev1">&gt; performance be influenced?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 24, 2015 at 7:24 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Xing,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iirc, open MPI default behavior is to bind to cores (vs hyperthreads),
</span><br>
<span class="quotelev2">&gt;&gt; hence the error message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot remember the option to bind to threads, but you can mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --oversubscribe if you are currently stuck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sunday, May 24, 2015, XingFENG &lt;xingfeng_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','xingfeng_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, OPENMPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have met some problem while doing experiments on Amazon EC2. I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chosen instance type r3.2xlarge. As amazon claimed, it has 8 vcpu. Each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vCPU is a hyperthread of an Intel Xeon core for M3, C4, C3, R3, HS1, G2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I2, and D2. (from *<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="https://aws.amazon.com/ec2/instance-types/">https://aws.amazon.com/ec2/instance-types/</a>&gt;)*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I try to run experiments on 4 machines, each with 8 slots.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPENMPI reminds me that I am oversubscribing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know the reason? Thanks in advance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26909.php">http://www.open-mpi.org/community/lists/users/2015/05/26909.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Previous message:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>In reply to:</strong> <a href="26910.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
<li><strong>Reply:</strong> <a href="26912.php">XingFENG: "Re: [OMPI users] OPENMPI only recognize 4 cores of AWS EC2 machine"</a>
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
