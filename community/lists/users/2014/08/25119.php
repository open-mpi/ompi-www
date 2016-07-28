<?
$subject_val = "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 13:58:25 2014" -->
<!-- isoreceived="20140821175825" -->
<!-- sent="Thu, 21 Aug 2014 18:58:21 +0100" -->
<!-- isosent="20140821175821" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface" -->
<!-- id="F4DB014C-C972-4857-A863-E6B77B5B9F52_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A09F8F31-D50F-4502-9144-D247CE6663F2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-08-21 13:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25118.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 to 1.8.2rc4"</a>
<li><strong>In reply to:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph
<br>
<p>On Aug 21, 2014, at 2:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I'm afraid that none of the mapping or binding options would be available under srun as those only work via mpirun. You can pass MCA params in the environment of course, or in default MCA param files.
</span><br>
<p>I understand. I hopefully be able to still pass the LAMA mca options as environment variables....I fear by default srun completely takes over the process binding.
<br>
<p><p>I got another problem. On my cluster I have two GPU and two Ivy Bridge processors. To maximize the PCIe bandwidth I want to allocate GPU 0 to socket 0 and GPU 1 to socket 1. I use a script like this
<br>
<p>#!/bin/bash
<br>
lrank=$OMPI_COMM_WORLD_LOCAL_RANK
<br>
case ${lrank} in
<br>
0)
<br>
&nbsp;export CUDA_VISIBLE_DEVICES=0
<br>
&nbsp;&quot;$@&quot;
<br>
;;
<br>
1)
<br>
&nbsp;export CUDA_VISIBLE_DEVICES=1
<br>
&nbsp;&quot;$@&quot;
<br>
;;
<br>
esac
<br>
<p><p>But OMP_COMM_WORLD_LOCAL_RANK is not defined is I use srun with PMI2 as luncher. Is there any equivalent option/environment variable that will help me achieve the same result?
<br>
<p>Thanks in advance!
<br>
F
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Previous message:</strong> <a href="25118.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.1 to 1.8.2rc4"</a>
<li><strong>In reply to:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>Reply:</strong> <a href="25120.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
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
