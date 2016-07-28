<?
$subject_val = "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 14:58:51 2014" -->
<!-- isoreceived="20140821185851" -->
<!-- sent="Thu, 21 Aug 2014 21:58:49 +0300" -->
<!-- isosent="20140821185849" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface" -->
<!-- id="CAAO1KyZMN33MqLv0joUtktDf3_kN5MH3pE3Q6qa=E7DAQTjS2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BDCABF35-AFF5-4E5B-B74F-A85B5A4CB4D1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 14:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25122.php">Bosler, Peter Andrew: "[OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Previous message:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25126.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25126.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi FIlippo,
<br>
<p>I think you can use SLURM_LOCALID var (at least with slurm v14.03.4-2)
<br>
<p>$srun -N2 --ntasks-per-node 3  env |grep SLURM_LOCALID
<br>
SLURM_LOCALID=1
<br>
SLURM_LOCALID=2
<br>
SLURM_LOCALID=0
<br>
SLURM_LOCALID=0
<br>
SLURM_LOCALID=1
<br>
SLURM_LOCALID=2
<br>
$
<br>
<p>Kind Regards,
<br>
M
<br>
<p><p>On Thu, Aug 21, 2014 at 9:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2014, at 10:58 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2014, at 2:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid that none of the mapping or binding options would be available
</span><br>
<span class="quotelev1">&gt; under srun as those only work via mpirun. You can pass MCA params in the
</span><br>
<span class="quotelev1">&gt; environment of course, or in default MCA param files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand. I hopefully be able to still pass the LAMA mca options as
</span><br>
<span class="quotelev1">&gt; environment variables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid not - LAMA doesn't exist in Slurm, only in mpirun itself
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....I fear by default srun completely takes over the process binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got another problem. On my cluster I have two GPU and two Ivy Bridge
</span><br>
<span class="quotelev1">&gt; processors. To maximize the PCIe bandwidth I want to allocate GPU 0 to
</span><br>
<span class="quotelev1">&gt; socket 0 and GPU 1 to socket 1. I use a script like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; lrank=$OMPI_COMM_WORLD_LOCAL_RANK
</span><br>
<span class="quotelev1">&gt; case ${lrank} in
</span><br>
<span class="quotelev1">&gt; 0)
</span><br>
<span class="quotelev1">&gt;  export CUDA_VISIBLE_DEVICES=0
</span><br>
<span class="quotelev1">&gt;  &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; ;;
</span><br>
<span class="quotelev1">&gt; 1)
</span><br>
<span class="quotelev1">&gt;  export CUDA_VISIBLE_DEVICES=1
</span><br>
<span class="quotelev1">&gt;  &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; ;;
</span><br>
<span class="quotelev1">&gt; esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But OMP_COMM_WORLD_LOCAL_RANK is not defined is I use srun with PMI2 as
</span><br>
<span class="quotelev1">&gt; luncher. Is there any equivalent option/environment variable that will help
</span><br>
<span class="quotelev1">&gt; me achieve the same result?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid not - that's something we added. I'm unaware of any similar
</span><br>
<span class="quotelev1">&gt; envar from Slurm, I'm afraid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; F
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL
</span><br>
<span class="quotelev1">&gt; and may be privileged or otherwise protected from disclosure. The contents
</span><br>
<span class="quotelev1">&gt; are not to be disclosed to anyone other than the addressee. Unauthorized
</span><br>
<span class="quotelev1">&gt; recipients are requested to preserve this confidentiality and to advise the
</span><br>
<span class="quotelev1">&gt; sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25119.php">http://www.open-mpi.org/community/lists/users/2014/08/25119.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25120.php">http://www.open-mpi.org/community/lists/users/2014/08/25120.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25122.php">Bosler, Peter Andrew: "[OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Previous message:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25126.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25126.php">Filippo Spiga: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
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
