<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 21:54:07 2013" -->
<!-- isoreceived="20130319015407" -->
<!-- sent="Tue, 19 Mar 2013 01:54:01 +0000" -->
<!-- isosent="20130319015401" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FB2E3E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF13321931.B890493B-ON49257B32.00816DC5-49257B32.00828678_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-18 21:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21559.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21557.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21557.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21559.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21559.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oy; that's weird.
<br>
<p>I'm afraid we're going to have to wait for Ralph to answer why that is happening -- sorry!
<br>
<p><p>On Mar 18, 2013, at 4:45 PM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Correa and Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your comments. I quickly checked your suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result, my simple example case worked well.
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt; mpiexec -bynode -np 2 ./my_program   &amp;&amp;   #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, practical case that more than 1 process was allocated to a node like
</span><br>
<span class="quotelev1">&gt; below did not work.
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt; mpiexec -bynode -np 4 ./my_program   &amp;&amp;   #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message is as follows:
</span><br>
<span class="quotelev1">&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev1">&gt; mation is unknown in file rml_oob_send.c at line 316
</span><br>
<span class="quotelev1">&gt; [node08.cluster:11946] [[30666,0],3] unable to find address for
</span><br>
<span class="quotelev1">&gt; [[30666,0],1]
</span><br>
<span class="quotelev1">&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev1">&gt; mation is unknown in file base/grpcomm_base_rollup.c at line 123
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is our openmpi configuration:
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7rc8-pgi12.9 \
</span><br>
<span class="quotelev1">&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt; CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2013, at 10:55 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In your example, have you tried not to modify the node file,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch two mpi processes with mpiexec, and request a &quot;-bynode&quot;
</span><br>
<span class="quotelev1">&gt; distribution of processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This should work in 1.7, too (I use these kinds of options with SLURM all
</span><br>
<span class="quotelev1">&gt; the time).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, we should probably verify that the hostfile functionality in
</span><br>
<span class="quotelev1">&gt; batch jobs hasn't been broken in 1.7, too, because I'm pretty sure that
</span><br>
<span class="quotelev1">&gt; what you described should work.  However, Ralph, our
</span><br>
<span class="quotelev2">&gt;&gt; run-time guy, is on vacation this week.  There might be a delay in
</span><br>
<span class="quotelev1">&gt; checking into this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21559.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21557.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21557.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21559.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21559.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
