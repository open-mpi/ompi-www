<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 19:45:49 2013" -->
<!-- isoreceived="20130318234549" -->
<!-- sent="Tue, 19 Mar 2013 08:45:27 +0900" -->
<!-- isosent="20130318234527" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OF13321931.B890493B-ON49257B32.00816DC5-49257B32.00828678_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43FADD0B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20modified%20hostfile%20does%20not%20work%20with%20openmpi1.7rc8"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-18 19:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21556.php">Francisco Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013 Paper. Last days for submissions. Deadline: March 29th, 2013"</a>
<li><strong>In reply to:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Correa and Jeff,
<br>
<p>Thank you for your comments. I quickly checked your suggestion.
<br>
<p>As a result, my simple example case worked well.
<br>
export OMP_NUM_THREADS=4
<br>
mpiexec -bynode -np 2 ./my_program   &amp;&amp;   #PBS -l nodes=2:ppn=4
<br>
<p>But, practical case that more than 1 process was allocated to a node like
<br>
below did not work.
<br>
export OMP_NUM_THREADS=4
<br>
mpiexec -bynode -np 4 ./my_program   &amp;&amp;   #PBS -l nodes=2:ppn=8
<br>
<p>The error message is as follows:
<br>
[node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact infor
<br>
mation is unknown in file rml_oob_send.c at line 316
<br>
[node08.cluster:11946] [[30666,0],3] unable to find address for
<br>
[[30666,0],1]
<br>
[node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact infor
<br>
mation is unknown in file base/grpcomm_base_rollup.c at line 123
<br>
<p>Here is our openmpi configuration:
<br>
./configure \
<br>
--prefix=/home/mishima/opt/mpi/openmpi-1.7rc8-pgi12.9 \
<br>
--with-tm \
<br>
--with-verbs \
<br>
--disable-ipv6 \
<br>
CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
<br>
CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
<br>
F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
<br>
FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; On Mar 17, 2013, at 10:55 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In your example, have you tried not to modify the node file,
</span><br>
<span class="quotelev2">&gt; &gt; launch two mpi processes with mpiexec, and request a &quot;-bynode&quot;
</span><br>
distribution of processes:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -bynode -np 2 ./my_program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should work in 1.7, too (I use these kinds of options with SLURM all
</span><br>
the time).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we should probably verify that the hostfile functionality in
</span><br>
batch jobs hasn't been broken in 1.7, too, because I'm pretty sure that
<br>
what you described should work.  However, Ralph, our
<br>
<span class="quotelev1">&gt; run-time guy, is on vacation this week.  There might be a delay in
</span><br>
checking into this.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21556.php">Francisco Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013 Paper. Last days for submissions. Deadline: March 29th, 2013"</a>
<li><strong>In reply to:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
