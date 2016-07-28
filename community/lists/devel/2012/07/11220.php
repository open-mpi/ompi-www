<?
$subject_val = "[OMPI devel] SM component init unload";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 13:54:25 2012" -->
<!-- isoreceived="20120703175425" -->
<!-- sent="Tue, 3 Jul 2012 19:54:20 +0200" -->
<!-- isosent="20120703175420" -->
<!-- name="Juan Antonio Rico Gallego" -->
<!-- email="jarico_at_[hidden]" -->
<!-- subject="[OMPI devel] SM component init unload" -->
<!-- id="DE25A5F5-1249-4C47-A1F8-F3D5AE43FC1A_at_unex.es" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] SM component init unload<br>
<strong>From:</strong> Juan Antonio Rico Gallego (<em>jarico_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 13:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Maybe reply:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone. Maybe you can help me:
<br>
<p>I got a subversion (r 26725) from the developers trunk. I configure with:
<br>
<p>../../onecopy/ompi-trunk/configure --prefix=/home/jarico/shared/packages/openmpi-cas-dbg --disable-shared --enable-static --enable-debug --enable-mem-profile --enable-mem-debug CFLAGS=-g
<br>
<p>Compiling is ok, but when I try to run in a shared memory machine with the SM component:
<br>
<p>/home/jarico/shared/packages/openmpi-cas-dbg/bin/mpiexec --mca mca_base_verbose 100 --mca mca_coll_base_output 100 --mca coll sm,self --mca coll_sm_priority 99  -n 2 ./bcast
<br>
<p>I get the error message:
<br>
<p><p>--------------------------------------------------------------------------
<br>
Although some coll components are available on your system, none of
<br>
them said that they could be used for a new communicator.
<br>
<p>This is extremely unusual -- either the &quot;basic&quot; or &quot;self&quot; components
<br>
should be able to be chosen for any communicator.  As such, this
<br>
likely means that something else is wrong (although you should double
<br>
check that the &quot;basic&quot; and &quot;self&quot; coll components are available on
<br>
your system -- check the output of the &quot;ompi_info&quot; command).
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;mca_coll_base_comm_select(MPI_COMM_WORLD) failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[Metropolis-01:15120] *** An error occurred in MPI_Init
<br>
[Metropolis-01:15120] *** reported by process [3914661889,0]
<br>
[Metropolis-01:15120] *** on a NULL communicator
<br>
[Metropolis-01:15120] *** Unknown error
<br>
[Metropolis-01:15120] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[Metropolis-01:15120] ***    and potentially your MPI job)
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: Metropolis-01
<br>
&nbsp;&nbsp;PID:        15120
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 0 with PID 15120 on
<br>
node Metropolis-01 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpiexec command line.
<br>
<p>--------------------------------------------------------------------------
<br>
[Metropolis-01:15119] 1 more process has sent help message help-mca-coll-base / comm-select:none-available
<br>
[Metropolis-01:15119] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[Metropolis-01:15119] 1 more process has sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
[Metropolis-01:15119] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal unknown handle
<br>
[Metropolis-01:15119] 1 more process has sent help message help-mpi-runtime.txt / ompi mpi abort:cannot guarantee all killed
<br>
[jarico_at_Metropolis-01 examples]$ 
<br>
<p><p><p>It seems a problem choosing SM component because of the locality of the processes. The mca_coll_sm_init_query function returns OMPI_ERR_NOT_AVAILABLE. 
<br>
I remember that in previous releases (about 26206) I needed to change a little the ompi_proc_init() function, adding the lines:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get the locality information */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc-&gt;proc_flags = orte_ess.proc_get_locality(&amp;proc-&gt;proc_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get the name of the node it is on */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc-&gt;proc_hostname = orte_ess.proc_get_hostname(&amp;proc-&gt;proc_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>enough for running ok. But this function has changed and this code does not work. I am not sure now what I am doing bad.
<br>
<p>Thanks for your time,
<br>
Juan A. Rico
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Previous message:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Reply:</strong> <a href="11221.php">Ralph Castain: "Re: [OMPI devel] SM component init unload"</a>
<li><strong>Maybe reply:</strong> <a href="11222.php">Juan Antonio Rico Gallego: "Re: [OMPI devel] SM component init unload"</a>
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
