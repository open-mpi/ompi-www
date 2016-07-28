<?
$subject_val = "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 17:19:12 2014" -->
<!-- isoreceived="20140821211912" -->
<!-- sent="Thu, 21 Aug 2014 22:19:08 +0100" -->
<!-- isosent="20140821211908" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface" -->
<!-- id="96A16389-99AA-4797-8FF9-6AA19B688E02_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyZMN33MqLv0joUtktDf3_kN5MH3pE3Q6qa=E7DAQTjS2w_at_mail.gmail.com" -->
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
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 17:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25127.php">Timur Ismagilov: "[OMPI users]  long initialization"</a>
<li><strong>Previous message:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>In reply to:</strong> <a href="25121.php">Mike Dubman: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mike, it sounds good... the description fits my purposes... I really miss this when I was reading srun man page! I will give it a try
<br>
<p>Thanks to everybody for the help and support!
<br>
<p>F
<br>
<p><span class="quotelev1">&gt; On Aug 21, 2014, at 7:58 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi FIlippo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you can use SLURM_LOCALID var (at least with slurm v14.03.4-2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $srun -N2 --ntasks-per-node 3  env |grep SLURM_LOCALID
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=2
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=1
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=2
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 21, 2014 at 9:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2014, at 10:58 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2014, at 2:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid that none of the mapping or binding options would be available under srun as those only work via mpirun. You can pass MCA params in the environment of course, or in default MCA param files.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I understand. I hopefully be able to still pass the LAMA mca options as environment variables
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid not - LAMA doesn't exist in Slurm, only in mpirun itself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ....I fear by default srun completely takes over the process binding.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I got another problem. On my cluster I have two GPU and two Ivy Bridge processors. To maximize the PCIe bandwidth I want to allocate GPU 0 to socket 0 and GPU 1 to socket 1. I use a script like this
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; lrank=$OMPI_COMM_WORLD_LOCAL_RANK
</span><br>
<span class="quotelev2">&gt;&gt; case ${lrank} in
</span><br>
<span class="quotelev2">&gt;&gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;  export CUDA_VISIBLE_DEVICES=0
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;$@&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ;;
</span><br>
<span class="quotelev2">&gt;&gt; 1)
</span><br>
<span class="quotelev2">&gt;&gt;  export CUDA_VISIBLE_DEVICES=1
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;$@&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ;;
</span><br>
<span class="quotelev2">&gt;&gt; esac
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But OMP_COMM_WORLD_LOCAL_RANK is not defined is I use srun with PMI2 as luncher. Is there any equivalent option/environment variable that will help me achieve the same result?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid not - that's something we added. I'm unaware of any similar envar from Slurm, I'm afraid
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; F
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *****
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25119.php">http://www.open-mpi.org/community/lists/users/2014/08/25119.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25120.php">http://www.open-mpi.org/community/lists/users/2014/08/25120.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25121.php">http://www.open-mpi.org/community/lists/users/2014/08/25121.php</a>
</span><br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25127.php">Timur Ismagilov: "[OMPI users]  long initialization"</a>
<li><strong>Previous message:</strong> <a href="25125.php">Bosler, Peter Andrew: "Re: [OMPI users] [EXTERNAL] Re: building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>In reply to:</strong> <a href="25121.php">Mike Dubman: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
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
