<?
$subject_val = "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 03:18:32 2014" -->
<!-- isoreceived="20140606071832" -->
<!-- sent="Fri, 06 Jun 2014 11:16:45 +0400" -->
<!-- isosent="20140606071645" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed" -->
<!-- id="1402039005.238841999_at_f39.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5BAD1949-472C-4951-9744-EBE989957E2B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 03:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24561.php">Timur Ismagilov: "[OMPI users] Problem with yoda component in oshmem."</a>
<li><strong>Previous message:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24563.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Reply:</strong> <a href="24563.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Sometimes,&#194;&#160;&#194;&#160;after termination of the program, launched with the command &quot;sbatch ... -o myprogram.out .....&quot;,&#194;&#160;&#194;&#160;no file&#194;&#160;&quot;myprogram.out&quot;&#194;&#160;&#194;&#160;is being produced. Could this be due to&#194;&#160;the above mentioned problem?
<br>
<p><p>Thu, 5 Jun 2014 07:45:01 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;FWIW: support for the --resv-ports option was deprecated and removed on the OMPI side a long time ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not familiar enough with &quot;oshrun&quot; to know if it is doing anything unusual - I believe it is just a renaming of our usual &quot;mpirun&quot;. I suspect this is some interaction with sbatch, but I'll take a look. I haven't see that warning. Mike indicated he thought it is due to both slurm and OMPI trying to control stdin/stdout, in which case it shouldn't be happening but you can safely ignore it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jun 5, 2014, at 3:04 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;I use cmd line
</span><br>
<span class="quotelev2">&gt;&gt;$sbatch -p test --exclusive -N 2 -o hello_oshmem.out -e hello_oshmem.err shrun_mxm3.0 ./hello_oshmem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;where script shrun_mxm3.0:
</span><br>
<span class="quotelev2">&gt;&gt;$cat shrun_mxm3.0
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; #srun --resv-ports &quot;$@&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; #exit $?
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; [ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE || { rm -f $HOSTFILE; exit 255; }
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so oshrun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --hostfile $HOSTFILE &quot;$@&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; rc=$?
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; rm -f $HOSTFILE
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; exit $rc
</span><br>
<span class="quotelev2">&gt;&gt;I configured openmpi using
</span><br>
<span class="quotelev2">&gt;&gt;./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.8.1_mxm-3.0 --with-mxm=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/ --with- &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;slurm --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Fri, 30 May 2014 07:09:54 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt; rhc_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Can you pass along the cmd line that generated that output, and how OMPI was configured?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On May 30, 2014, at 5:11 AM, &#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178; &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I am using Open MPI v1.8.1 and slurm 2.5.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I got this messages when i try to run example (hello_oshmem.cpp) program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[warn] Epoll ADD(1) on fd 0 failed. Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[warn] Epoll ADD(4) on fd 1 failed. Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello, world, I am 0 of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello, world, I am 1 of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;What does this warnings mean?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I lunch this job using sbatch and mpirun with hostfile (got it from : &#194;&#160;$srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Timur
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24561.php">Timur Ismagilov: "[OMPI users] Problem with yoda component in oshmem."</a>
<li><strong>Previous message:</strong> <a href="24559.php">Ralph Castain: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24563.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Reply:</strong> <a href="24563.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
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
