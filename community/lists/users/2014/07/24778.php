<?
$subject_val = "Re: [OMPI users] Salloc and mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 07:20:35 2014" -->
<!-- isoreceived="20140716112035" -->
<!-- sent="Wed, 16 Jul 2014 14:20:33 +0300" -->
<!-- isosent="20140716112033" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Salloc and mpirun problem" -->
<!-- id="CAAO1KyZZfL=easUW7ALXDU=S70SEK7jgMQD_Kj1EzoPXAEXD8Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1405498360.186675205_at_f317.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] Salloc and mpirun problem<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 07:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24777.php">Timur Ismagilov: "[OMPI users] Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24777.php">Timur Ismagilov: "[OMPI users] Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please add following flags to mpirun &quot;--mca plm_base_verbose 10
<br>
--debug-daemons&quot; and attach output.
<br>
Thx
<br>
<p><p>On Wed, Jul 16, 2014 at 11:12 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; I have Open MPI v1.9a1r32142 and slurm 2.5.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can not use mpirun after salloc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev1">&gt; $LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; But if i use mpirun in sbutch script it looks correct:
</span><br>
<span class="quotelev1">&gt; $cat ompi_mxm3.0
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so
</span><br>
<span class="quotelev1">&gt; mpirun  -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --map-by slot:pe=8 &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $sbatch -N2  --exclusive -p test -J ompi  ompi_mxm3.0 ./hello_c
</span><br>
<span class="quotelev1">&gt; Submitted batch job 645039
</span><br>
<span class="quotelev1">&gt; $cat slurm-645039.out
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(1) on fd 0 failed.  Old events were 0; read change was 1
</span><br>
<span class="quotelev1">&gt; (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(4) on fd 1 failed.  Old events were 0; read change was 0
</span><br>
<span class="quotelev1">&gt; (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, (Open MPI v1.9a1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142,
</span><br>
<span class="quotelev1">&gt; Jul 04, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, (Open MPI v1.9a1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142,
</span><br>
<span class="quotelev1">&gt; Jul 04, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Timur
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24777.php">http://www.open-mpi.org/community/lists/users/2014/07/24777.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24777.php">Timur Ismagilov: "[OMPI users] Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24777.php">Timur Ismagilov: "[OMPI users] Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24779.php">Timur Ismagilov: "Re: [OMPI users] Salloc and mpirun problem"</a>
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
