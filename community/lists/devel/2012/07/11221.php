<?
$subject_val = "Re: [OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 14:29:06 2012" -->
<!-- isoreceived="20120703182906" -->
<!-- sent="Tue, 3 Jul 2012 12:28:57 -0600" -->
<!-- isosent="20120703182857" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM component init unload" -->
<!-- id="C5C9AAE6-3E81-4A9F-B4AA-1E40153258B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE25A5F5-1249-4C47-A1F8-F3D5AE43FC1A_at_unex.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM component init unload<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 14:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds strange - the locality is definitely being set in the code. Can you run it with -mca hwloc_base_verbose 5 --display-map? Should tell us where it thinks things are running, and what locality it is recording.
<br>
<p><p>On Jul 3, 2012, at 11:54 AM, Juan Antonio Rico Gallego wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone. Maybe you can help me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got a subversion (r 26725) from the developers trunk. I configure with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../../onecopy/ompi-trunk/configure --prefix=/home/jarico/shared/packages/openmpi-cas-dbg --disable-shared --enable-static --enable-debug --enable-mem-profile --enable-mem-debug CFLAGS=-g
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compiling is ok, but when I try to run in a shared memory machine with the SM component:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --mca mca_base_verbose 100 --mca mca_coll_base_output 100 --mca coll sm,self --mca coll_sm_priority 99  -n 2 ./bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Although some coll components are available on your system, none of
</span><br>
<span class="quotelev1">&gt; them said that they could be used for a new communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is extremely unusual -- either the &quot;basic&quot; or &quot;self&quot; components
</span><br>
<span class="quotelev1">&gt; should be able to be chosen for any communicator.  As such, this
</span><br>
<span class="quotelev1">&gt; likely means that something else is wrong (although you should double
</span><br>
<span class="quotelev1">&gt; check that the &quot;basic&quot; and &quot;self&quot; coll components are available on
</span><br>
<span class="quotelev1">&gt; your system -- check the output of the &quot;ompi_info&quot; command).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mca_coll_base_comm_select(MPI_COMM_WORLD) failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15120] *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15120] *** reported by process [3914661889,0]
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15120] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15120] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15120] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15120] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: Metropolis-01
</span><br>
<span class="quotelev1">&gt;   PID:        15120
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 0 with PID 15120 on
</span><br>
<span class="quotelev1">&gt; node Metropolis-01 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpiexec command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15119] 1 more process has sent help message help-mca-coll-base / comm-select:none-available
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15119] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15119] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15119] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
</span><br>
<span class="quotelev1">&gt; [Metropolis-01:15119] 1 more process has sent help message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
</span><br>
<span class="quotelev1">&gt; [jarico_at_Metropolis-01 examples]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems a problem choosing SM component because of the locality of the processes. The mca_coll_sm_init_query function returns OMPI_ERR_NOT_AVAILABLE. 
</span><br>
<span class="quotelev1">&gt; I remember that in previous releases (about 26206) I needed to change a little the ompi_proc_init() function, adding the lines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         } else {
</span><br>
<span class="quotelev1">&gt; 		  /* get the locality information */
</span><br>
<span class="quotelev1">&gt; 		  proc-&gt;proc_flags = orte_ess.proc_get_locality(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt; 		  /* get the name of the node it is on */
</span><br>
<span class="quotelev1">&gt; 		  proc-&gt;proc_hostname = orte_ess.proc_get_hostname(&amp;proc-&gt;proc_name);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; enough for running ok. But this function has changed and this code does not work. I am not sure now what I am doing bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your time,
</span><br>
<span class="quotelev1">&gt; Juan A. Rico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<li><strong>In reply to:</strong> <a href="11220.php">Juan Antonio Rico Gallego: "[OMPI devel] SM component init unload"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
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
