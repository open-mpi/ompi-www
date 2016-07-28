<?
$subject_val = "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 10:39:41 2009" -->
<!-- isoreceived="20090127153941" -->
<!-- sent="Tue, 27 Jan 2009 16:39:21 +0100" -->
<!-- isosent="20090127153921" -->
<!-- name="Anthony Thevenin" -->
<!-- email="anthony.thevenin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7" -->
<!-- id="497F2AA9.3050606_at_cerfacs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="111B8C08-670C-4AAD-89CC-A77BBD252253_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7<br>
<strong>From:</strong> Anthony Thevenin (<em>anthony.thevenin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 10:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
<p>Yes, I am trying to do over 1000 MPI_Comm_spawn on a single node.
<br>
But as I mentioned in my previous email, the MPI_Comm_spawn is in a 
<br>
do-loop. So in this single node, I only have 2 procs (master and slave). 
<br>
The next spawned slave comes only when the previous slave is dead.
<br>
We (my team and me) are developing a coupler which launch the codes 
<br>
dynamically. Sometimes, depending on the coupling algorithm, we need to 
<br>
spawn a code (which can be parallel or not) a lot of times (more than 1000).
<br>
<p>Anthony
<br>
<p><p><p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just to be clear - you are doing over 1000 MPI_Comm_spawn calls to 
</span><br>
<span class="quotelev1">&gt; launch all the procs on a single node???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.2 series, every call to MPI_Comm_spawn would launch another 
</span><br>
<span class="quotelev1">&gt; daemon on the node, which would then fork/exec the specified app. If 
</span><br>
<span class="quotelev1">&gt; you look at your process table, you will see a whole lot of &quot;orted&quot; 
</span><br>
<span class="quotelev1">&gt; processes. Thus, you wouldn't run out of pipes because every orted 
</span><br>
<span class="quotelev1">&gt; only opened enough for a single process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.3 series, there is only one daemon on each node (mpirun fills 
</span><br>
<span class="quotelev1">&gt; that function on its node). MPI_Comm_spawn simply reuses that daemon 
</span><br>
<span class="quotelev1">&gt; to launch the new proc(s). Thus, there is a limit to the number of 
</span><br>
<span class="quotelev1">&gt; procs you can start on any node that is set by the #pipes a process 
</span><br>
<span class="quotelev1">&gt; can open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can adjust that number, of course. You can look it up readily 
</span><br>
<span class="quotelev1">&gt; enough for your particular system. However, you may find that 1000 
</span><br>
<span class="quotelev1">&gt; comm_spawns on a single node will lead to poor performance as the 
</span><br>
<span class="quotelev1">&gt; procs contend for processor attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2009, at 7:59 AM, Anthony Thevenin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two C codes :
</span><br>
<span class="quotelev2">&gt;&gt;   - master.c : spawns a slave
</span><br>
<span class="quotelev2">&gt;&gt;   - slave.c : spwaned by the master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the spawn is include in a do-loop, I can do only 123 spawns before 
</span><br>
<span class="quotelev2">&gt;&gt; having the folowing errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: The system limit on number of pipes a process can 
</span><br>
<span class="quotelev2">&gt;&gt; open was reached in file base/iof_base_setup.c at line 112
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: The system limit on number of pipes a process can 
</span><br>
<span class="quotelev2">&gt;&gt; open was reached in file odls_default_module.c at line 203
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This test works perfectly even for a lot of spawns (more than 1000) 
</span><br>
<span class="quotelev2">&gt;&gt; with Open-MPI 1.2.7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You will find the following files attached:
</span><br>
<span class="quotelev2">&gt;&gt; config.log.tgz
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info.out.tgz
</span><br>
<span class="quotelev2">&gt;&gt; ifconfig.out.tgz
</span><br>
<span class="quotelev2">&gt;&gt; master.c.tgz
</span><br>
<span class="quotelev2">&gt;&gt; slave.c.tgz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; command used to run my application :
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 1 ./master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPILER:
</span><br>
<span class="quotelev2">&gt;&gt; PGI 7.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH : 
</span><br>
<span class="quotelev2">&gt;&gt; /space/thevenin/openmpi-1.3_pgi/bin:/usr/local/tecplot/bin:/usr/local/pgi/linux86-64/7.1/bin:/usr/totalview/bin:/usr/local/matlab71/bin:/usr/bin:/usr/ucb:/usr/sbin:/usr/bsd:/sbin:/bin:/usr/bin/X11:/usr/etc:/usr/local/bin:/usr/bin:/usr/bsd:/sbin:/usr/bin/X11:. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH:
</span><br>
<span class="quotelev2">&gt;&gt; /space/thevenin/openmpi-1.3_pgi/lib:/usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have any idea of what this occurs, please tell me what to do 
</span><br>
<span class="quotelev2">&gt;&gt; to make it works.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anthony
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.tgz&gt;&lt;ifconfig.out.tgz&gt;&lt;master.c.tgz&gt;&lt;ompi_info.out.tgz&gt;&lt;slave.c.tgz&gt;_______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7861.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="7859.php">Ralph Castain: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
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
