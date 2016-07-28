<?
$subject_val = "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 10:20:36 2009" -->
<!-- isoreceived="20090127152036" -->
<!-- sent="Tue, 27 Jan 2009 08:20:12 -0700" -->
<!-- isosent="20090127152012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7" -->
<!-- id="111B8C08-670C-4AAD-89CC-A77BBD252253_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497F2147.9050404_at_cerfacs.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 10:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7857.php">Anthony Thevenin: "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Reply:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be clear - you are doing over 1000 MPI_Comm_spawn calls to  
<br>
launch all the procs on a single node???
<br>
<p>In the 1.2 series, every call to MPI_Comm_spawn would launch another  
<br>
daemon on the node, which would then fork/exec the specified app. If  
<br>
you look at your process table, you will see a whole lot of &quot;orted&quot;  
<br>
processes. Thus, you wouldn't run out of pipes because every orted  
<br>
only opened enough for a single process.
<br>
<p>In the 1.3 series, there is only one daemon on each node (mpirun fills  
<br>
that function on its node). MPI_Comm_spawn simply reuses that daemon  
<br>
to launch the new proc(s). Thus, there is a limit to the number of  
<br>
procs you can start on any node that is set by the #pipes a process  
<br>
can open.
<br>
<p>You can adjust that number, of course. You can look it up readily  
<br>
enough for your particular system. However, you may find that 1000  
<br>
comm_spawns on a single node will lead to poor performance as the  
<br>
procs contend for processor attention.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On Jan 27, 2009, at 7:59 AM, Anthony Thevenin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two C codes :
</span><br>
<span class="quotelev1">&gt;   - master.c : spawns a slave
</span><br>
<span class="quotelev1">&gt;   - slave.c : spwaned by the master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the spawn is include in a do-loop, I can do only 123 spawns  
</span><br>
<span class="quotelev1">&gt; before having the folowing errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: The system limit on number of pipes a process can  
</span><br>
<span class="quotelev1">&gt; open was reached in file base/iof_base_setup.c at line 112
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: The system limit on number of pipes a process can  
</span><br>
<span class="quotelev1">&gt; open was reached in file odls_default_module.c at line 203
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test works perfectly even for a lot of spawns (more than 1000)  
</span><br>
<span class="quotelev1">&gt; with Open-MPI 1.2.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will find the following files attached:
</span><br>
<span class="quotelev1">&gt; config.log.tgz
</span><br>
<span class="quotelev1">&gt; ompi_info.out.tgz
</span><br>
<span class="quotelev1">&gt; ifconfig.out.tgz
</span><br>
<span class="quotelev1">&gt; master.c.tgz
</span><br>
<span class="quotelev1">&gt; slave.c.tgz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command used to run my application :
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 ./master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMPILER:
</span><br>
<span class="quotelev1">&gt; PGI 7.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH : /space/thevenin/openmpi-1.3_pgi/bin:/usr/local/tecplot/bin:/ 
</span><br>
<span class="quotelev1">&gt; usr/local/pgi/linux86-64/7.1/bin:/usr/totalview/bin:/usr/local/ 
</span><br>
<span class="quotelev1">&gt; matlab71/bin:/usr/bin:/usr/ucb:/usr/sbin:/usr/bsd:/sbin:/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; bin/X11:/usr/etc:/usr/local/bin:/usr/bin:/usr/bsd:/sbin:/usr/bin/X11:.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt; /space/thevenin/openmpi-1.3_pgi/lib:/usr/local/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have any idea of what this occurs, please tell me what to do  
</span><br>
<span class="quotelev1">&gt; to make it works.
</span><br>
<span class="quotelev1">&gt; Thank you very much
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anthony
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .log 
</span><br>
<span class="quotelev1">&gt; .tgz 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ifconfig 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev1">&gt; .tgz 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; master 
</span><br>
<span class="quotelev1">&gt; .c 
</span><br>
<span class="quotelev1">&gt; .tgz 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ompi_info 
</span><br>
<span class="quotelev1">&gt; .out.tgz&gt;&lt;slave.c.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="7858.php">Peter Kjellstrom: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7857.php">Anthony Thevenin: "[OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
<li><strong>Reply:</strong> <a href="7860.php">Anthony Thevenin: "Re: [OMPI users] Doing a lot of spawns does not work with ompi 1.3 BUT works with ompi 1.2.7"</a>
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
