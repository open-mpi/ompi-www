<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 19:04:56 2015" -->
<!-- isoreceived="20151005230456" -->
<!-- sent="Tue, 6 Oct 2015 08:04:44 +0900" -->
<!-- isosent="20151005230444" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="OFBE6A1FFE.FFFD6CA1-ON49257ED5.007DA9F5-49257ED5.007ECBB5_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="58366C2E-49FE-457F-B1CF-993C8CEF5961_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Hybrid%20OpenMPI%2BOpenMP%20tasks%20using%20SLURM"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-10-05 19:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27810.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27808.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>In reply to:</strong> <a href="27806.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27810.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27810.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27817.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, it's been a long time.
<br>

<br>
The option &quot;map-by core&quot; does not work when pe=N &gt; 1 is specified.
<br>
So, you should use &quot;map-by slot:pe=N&quot; as far as I remember.
<br>

<br>
Regards,
<br>
Tetsuya Mishima
<br>

<br>
2015/10/06 5:40:33&#227;&#128;&#129;&quot;users&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;Re: [OMPI users] Hybrid OpenMPI+OpenMP
<br>
tasks using SLURM&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
<br>
<span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;okay, try -map-by socket:pe=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We&#226;&#128;&#153;ll still hit the asymmetric topology issue, but otherwise this should
</span><br>
work
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 5, 2015, at 1:25 PM, marcin.krotkiewski
</span><br>
&lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for a fast response! Sounds very good, unfortunately I get an
</span><br>
error:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --map-by core:pe=4 ./affinity
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt; &gt; was also give to map to an object level that cannot support that
</span><br>
<span class="quotelev2">&gt; &gt; directive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please specify a mapping level that has more than one cpu, or
</span><br>
<span class="quotelev2">&gt; &gt; else let us define a default mapping that will allow multiple
</span><br>
<span class="quotelev2">&gt; &gt; cpus-per-proc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have allocated my slurm job as
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have checked in 1.10.0 and 1.10.1rc1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 10/05/2015 09:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You would presently do:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun &#226;&#128;&#148;map-by core:pe=4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to get what you are seeking. If we don&#226;&#128;&#153;t already set that qualifier
</span><br>
when we see &#226;&#128;&#156;cpus_per_task&#226;&#128;&#157;, then we probably should do so as there isn&#226;&#128;&#153;t
<br>
any reason to make you set it twice (well, other than
<br>
<span class="quotelev1">&gt; trying to track which envar slurm is using now).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Oct 5, 2015, at 12:38 PM, marcin.krotkiewski
</span><br>
&lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yet another question about cpu binding under SLURM environment..
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the
</span><br>
purpose of cpu binding?
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Full version: When you allocate a job like, e.g., this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks.
</span><br>
This is useful for hybrid jobs, where each MPI process spawns some internal
<br>
worker threads (e.g., OpenMP). The intention is
<br>
<span class="quotelev1">&gt; that there are 2 MPI procs started, each of them 'bound' to 4 cores.
</span><br>
SLURM will also set an environment variable
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; which should (probably?) be taken into account by the method that
</span><br>
launches the MPI processes to figure out the cpuset. In case of OpenMPI +
<br>
mpirun I think something should happen in
<br>
<span class="quotelev1">&gt; orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ actually
</span><br>
parsed. Unfortunately, it is never really used...
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As a result, cpuset of all tasks started on a given compute node
</span><br>
includes all CPU cores of all MPI tasks on that node, just as provided by
<br>
SLURM (in the above example - 8). In general, there is
<br>
<span class="quotelev1">&gt; no simple way for the user code in the MPI procs to 'split' the cores
</span><br>
between themselves. I imagine the original intention to support this in
<br>
OpenMPI was something like
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun --bind-to subtask_cpuset
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with an artificial bind target that would cause OpenMPI to divide the
</span><br>
allocated cores between the mpi tasks. Is this right? If so, it seems that
<br>
at this point this is not implemented. Is there
<br>
<span class="quotelev1">&gt; plans to do this? If no, does anyone know another way to achieve that?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2015/10/27803.php">http://www.open-mpi.org/community/lists/users/2015/10/27803.php</a>
<br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2015/10/27804.php">http://www.open-mpi.org/community/lists/users/2015/10/27804.php</a>
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2015/10/27805.php">http://www.open-mpi.org/community/lists/users/2015/10/27805.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/usersLink">http://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27806.php">http://www.open-mpi.org/community/lists/users/2015/10/27806.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27810.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27808.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI Announce] Open MPI v1.10.1rc1 release"</a>
<li><strong>In reply to:</strong> <a href="27806.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27810.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27810.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27817.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
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
