<?
$subject_val = "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 15:34:39 2014" -->
<!-- isoreceived="20140610193439" -->
<!-- sent="Tue, 10 Jun 2014 22:34:36 +0300" -->
<!-- isosent="20140610193436" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed" -->
<!-- id="CAAO1KyY=6R=M11Be-P4FPeQ1c-A=rTMep80PssONt5r0jV6gcg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="86EE8BA4-746F-4568-A322-8A22BEF6DE65_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 15:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24628.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24626.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24563.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24628.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Reply:</strong> <a href="24628.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
btw, the output comes from ompi`s libevent and not from slurm itself (sorry
<br>
about confusion and thanks to Yossi for catching this)
<br>
<p><p>opal/mca/event/libevent2021/libevent/epoll.c:
<br>
event_warn(&quot;Epoll %s(%d) on fd %d failed.  Old events were %d; read change
<br>
was %d (%s); write change was %d (%s)&quot;,
<br>
opal/mca/event/libevent2021/libevent/epoll.c:
<br>
event_debug((&quot;Epoll %s(%d) on fd %d okay. [old events were %d; read change
<br>
was %d; write change was %d]&quot;,
<br>
<p><p><p>On Fri, Jun 6, 2014 at 3:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Possible - honestly don't know
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 12:16 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sometimes,  after termination of the program, launched with the command
</span><br>
<span class="quotelev1">&gt; &quot;sbatch ... -o myprogram.out .....&quot;,  no file &quot;myprogram.out&quot;  is being
</span><br>
<span class="quotelev1">&gt; produced. Could this be due to the above mentioned problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thu, 5 Jun 2014 07:45:01 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: support for the --resv-ports option was deprecated and removed on
</span><br>
<span class="quotelev1">&gt; the OMPI side a long time ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not familiar enough with &quot;oshrun&quot; to know if it is doing anything
</span><br>
<span class="quotelev1">&gt; unusual - I believe it is just a renaming of our usual &quot;mpirun&quot;. I suspect
</span><br>
<span class="quotelev1">&gt; this is some interaction with sbatch, but I'll take a look. I haven't see
</span><br>
<span class="quotelev1">&gt; that warning. Mike indicated he thought it is due to both slurm and OMPI
</span><br>
<span class="quotelev1">&gt; trying to control stdin/stdout, in which case it shouldn't be happening but
</span><br>
<span class="quotelev1">&gt; you can safely ignore it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2014, at 3:04 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $sbatch -p test --exclusive -N 2 -o hello_oshmem.out -e hello_oshmem.err
</span><br>
<span class="quotelev1">&gt; shrun_mxm3.0 ./hello_oshmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where script shrun_mxm3.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $cat shrun_mxm3.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #srun --resv-ports &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;   #exit $?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
</span><br>
<span class="quotelev1">&gt;   HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
</span><br>
<span class="quotelev1">&gt;   srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE ||
</span><br>
<span class="quotelev1">&gt; { rm -f $HOSTFILE; exit 255; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so
</span><br>
<span class="quotelev1">&gt; oshrun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --hostfile $HOSTFILE &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   rc=$?
</span><br>
<span class="quotelev1">&gt;   rm -f $HOSTFILE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   exit $rc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured openmpi using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --prefix=/mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.8.1_mxm-3.0
</span><br>
<span class="quotelev1">&gt; --with-mxm=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/ --with-
</span><br>
<span class="quotelev1">&gt;            slurm --with-platform=contrib/platform/mellanox/optimized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fri, 30 May 2014 07:09:54 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you pass along the cmd line that generated that output, and how OMPI
</span><br>
<span class="quotelev1">&gt; was configured?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 30, 2014, at 5:11 AM, &#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178; &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Open MPI v1.8.1 and slurm 2.5.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got this messages when i try to run example (hello_oshmem.cpp) program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(1) on fd 0 failed. Old events were 0; read change was 1
</span><br>
<span class="quotelev1">&gt; (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(4) on fd 1 failed. Old events were 0; read change was 0
</span><br>
<span class="quotelev1">&gt; (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does this warnings mean?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I lunch this job using sbatch and mpirun with hostfile (got it from :
</span><br>
<span class="quotelev1">&gt;  $srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Timur
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24627/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24628.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Previous message:</strong> <a href="24626.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24563.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24628.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Reply:</strong> <a href="24628.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
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
