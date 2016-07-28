<?
$subject_val = "[OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 23:01:29 2009" -->
<!-- isoreceived="20090327030129" -->
<!-- sent="Fri, 27 Mar 2009 11:01:30 +0800" -->
<!-- isosent="20090327030130" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="[OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]" -->
<!-- id="49CC418A.7020504_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 23:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8606.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8604.php">Russell McQueeney: "[OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-------- Original Message --------
<br>
Subject: Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)
<br>
Date: Fri, 27 Mar 2009 04:36:39 +0800
<br>
From: Jerome BENOIT &lt;jgmbenoit_at_[hidden]&gt;
<br>
Reply-To: jgmbenoit_at_[hidden]
<br>
Organization: none
<br>
CC: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
References: &lt;49C8997D.5050102_at_[hidden]&gt;&lt;1237886338.4246.5.camel_at_[hidden]&gt; &lt;49C8FF04.6080908_at_[hidden]&gt; &lt;28E4AA43-42B2-4720-A318-FDAF026CEB72_at_[hidden]&gt;
<br>
<p>Hello LIST,
<br>
<p>thanks for for your advices.
<br>
<p>Finally I succeeded with the sbatch approach ... when my firewall are stopped !
<br>
So I guess that I have to configure my firewall (I use firehol):
<br>
I have just tried but without success. I will try again later.
<br>
Is there any other ports than the SLURM ones which are involved ?
<br>
<p><p>Thanks,
<br>
Jerome   
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 24, 2009, at 8:40 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I read what you said on the web before I sent my email.
</span><br>
<span class="quotelev2">&gt;&gt; But it does not work with my sample. It is an old LAM source C.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you be a little more explicit in what does not work?  You didn't 
</span><br>
<span class="quotelev1">&gt; give a lot of explanation for us to work with. :-)  Please send all the 
</span><br>
<span class="quotelev1">&gt; information listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use Open MPI on SLURM all the time (my internal testing cluster at 
</span><br>
<span class="quotelev1">&gt; Cisco uses SLURM).  I frequently use &quot;salloc&quot; to launch individual MPI 
</span><br>
<span class="quotelev1">&gt; jobs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     salloc -N 4 mpirun my_mpi_application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Jerome BENOIT
jgmbenoit_at_mailsnare_dot_net
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8606.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8604.php">Russell McQueeney: "[OMPI users] 'orte_ess_base_select failed'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
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
