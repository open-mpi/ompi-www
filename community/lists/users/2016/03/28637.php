<?
$subject_val = "Re: [OMPI users] Pass RoCE flags to srun under SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 11:01:51 2016" -->
<!-- isoreceived="20160304160151" -->
<!-- sent="Fri, 04 Mar 2016 10:01:46 -0600" -->
<!-- isosent="20160304160146" -->
<!-- name="Davide Vanzo" -->
<!-- email="vanzod_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pass RoCE flags to srun under SLURM" -->
<!-- id="1457107306.3708.4.camel_at_accre.vanderbilt.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1457044856.12102.11.camel_at_accre.vanderbilt.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pass RoCE flags to srun under SLURM<br>
<strong>From:</strong> Davide Vanzo (<em>vanzod_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-04 11:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28638.php">Hans-Jürgen Greif: "[OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>In reply to:</strong> <a href="28630.php">Davide Vanzo: "[OMPI users] Pass RoCE flags to srun under SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I solved the problem. For some reason the
<br>
OMPI_MCA_btl_openib_cpc_include environment variable was set to udcm
<br>
during the tests. By ensuring that it is set to rdmacm solved the
<br>
issue.
<br>
Thanks anyway!
<br>
Davide
<br>
On Thu, 2016-03-03 at 16:40 -0600, Davide Vanzo wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; In our cluster the nodes are interconnected with RoCE and I want to
</span><br>
<span class="quotelev1">&gt; set up OpenMPI to run on it via SLURM.
</span><br>
<span class="quotelev1">&gt; I initially compiled OpenMPI 1.10.2 only with IB verbs support and I
</span><br>
<span class="quotelev1">&gt; have no problem making it run over RoCE.
</span><br>
<span class="quotelev1">&gt; Then I have successfully built it with SLURM support as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure&#194;&#160;--with-slurm&#194;&#160;--with-pmi=/usr/scheduler/slurm&#194;&#160;--with-
</span><br>
<span class="quotelev1">&gt; verbs&#194;&#160;--with-hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that I cannot let it use the RoCE network when I'm
</span><br>
<span class="quotelev1">&gt; using srun. I also tried to export the OpenMPI runtime options but
</span><br>
<span class="quotelev1">&gt; still I cannot correctly initialize the network:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ echo $OMPI_MCA_btl
</span><br>
<span class="quotelev1">&gt; openib,self,sm
</span><br>
<span class="quotelev1">&gt; $ echo $OMPI_MCA_btl_openib_cpc_include&#194;&#160;
</span><br>
<span class="quotelev1">&gt; rdmacm
</span><br>
<span class="quotelev1">&gt; $ srun -n 2 --mpi=pmi2 ./osu_latency
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.&#194;&#160;&#194;&#160;As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Local host:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;test-vmp1245
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Local device:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;mlx4_0
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Local port:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;2
</span><br>
<span class="quotelev1">&gt; &#194;&#160; CPCs attempted:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;udcm
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.&#194;&#160;&#194;&#160;As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Local host:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;test-vmp1244
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Local device:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;mlx4_0
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Local port:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;2
</span><br>
<span class="quotelev1">&gt; &#194;&#160; CPCs attempted:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;udcm
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.&#194;&#160;&#194;&#160;This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.&#194;&#160;&#194;&#160;This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.&#194;&#160;&#194;&#160;This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Process 1 ([[27,4],0]) is on host: test-vmp1244
</span><br>
<span class="quotelev1">&gt; &#194;&#160; Process 2 ([[27,4],1]) is on host: test-vmp1245
</span><br>
<span class="quotelev1">&gt; &#194;&#160; BTLs attempted: self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt; from another.&#194;&#160;&#194;&#160;This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt; allowed itself to be used.&#194;&#160;&#194;&#160;Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#194;&#160;* Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;available.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;* Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;* Set the MCA parameter btl_base_verbose to 100 (or
</span><br>
<span class="quotelev1">&gt; mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt; abort,
</span><br>
<span class="quotelev1">&gt; ***&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [test-vmp1245:3603] Local abort before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt; successfully; not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; srun: error: test-vmp1244: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: error: test-vmp1245: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestion?
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Davide
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016">http://www.open-mpi.org/community/lists/users/2016</a>
</span><br>
<span class="quotelev1">&gt; /03/28630.php
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28638.php">Hans-Jürgen Greif: "[OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>In reply to:</strong> <a href="28630.php">Davide Vanzo: "[OMPI users] Pass RoCE flags to srun under SLURM"</a>
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
