<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 17:45:43 2014" -->
<!-- isoreceived="20140521214543" -->
<!-- sent="Wed, 21 May 2014 16:45:22 -0500" -->
<!-- isosent="20140521214522" -->
<!-- name="Ben Lash" -->
<!-- email="bl10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="CAOiaXW3HsJFcdnCk9ykaGX40Z3onAE_74NY6ByEK2wCb2r6-hg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="537D147A.3060200_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi configuration error?<br>
<strong>From:</strong> Ben Lash (<em>bl10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-21 17:45:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24449.php">W Spector: "[OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Previous message:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know why it quite - M3EXIT was called - but thanks for looking.
<br>
<p><p>On Wed, May 21, 2014 at 4:02 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the ranks (52) called MPI_Abort.
</span><br>
<span class="quotelev1">&gt; This may be a bug in the code, or a problem with the setup
</span><br>
<span class="quotelev1">&gt; (e.g. a missing or incorrect input file).
</span><br>
<span class="quotelev1">&gt; For instance, the CCTM Wiki says:
</span><br>
<span class="quotelev1">&gt; &quot;AERO6 expects emissions inputs for 13 new PM species. CCTM will crash if
</span><br>
<span class="quotelev1">&gt; any emitted PM species is not included in the emissions input file&quot;
</span><br>
<span class="quotelev1">&gt; I am not familiar to CCTM, so these are just guesses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't look like an MPI problem, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to check any other logs that the CCTM code may
</span><br>
<span class="quotelev1">&gt; produce, for any clue on where it fails.
</span><br>
<span class="quotelev1">&gt; Otherwise, you could compile with -g -traceback (and remove any
</span><br>
<span class="quotelev1">&gt; optimization options in FFLAGS, FCFLAGS, CFLAGS, etc.)
</span><br>
<span class="quotelev1">&gt; It may also have a -DDEBUG or similar that can be turned on
</span><br>
<span class="quotelev1">&gt; in the CPPFLAGS, which in many models makes a more verbose log.
</span><br>
<span class="quotelev1">&gt; This *may* tell you where it fails (source file, subroutine and line),
</span><br>
<span class="quotelev1">&gt; and may help understand why it fails.
</span><br>
<span class="quotelev1">&gt; If it dumps a core file, you can trace the failure point with
</span><br>
<span class="quotelev1">&gt; a debugger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/21/2014 03:20 PM, Ben Lash wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used a different build of netcdf 4.1.3, and the code seems to run now.
</span><br>
<span class="quotelev2">&gt;&gt; I have a totally different, non-mpi related error in part of it, but
</span><br>
<span class="quotelev2">&gt;&gt; there's no way for the list to help, I mostly just wanted to report that
</span><br>
<span class="quotelev2">&gt;&gt; this particular problem seems to be solved for the record. It doesn't
</span><br>
<span class="quotelev2">&gt;&gt; seem to fail quite as gracefully anymore, but I'm still getting enough
</span><br>
<span class="quotelev2">&gt;&gt; of the error messages to know what's going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 52 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],52] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],54] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],55] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-158.davinci.rice.edu:12459 &lt;<a href="http://cn-158.davinci.rice.edu:12459">http://cn-158.davinci.rice.edu:12459</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],1]-[[63355,1],15] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-158.davinci.rice.edu:12459 &lt;<a href="http://cn-158.davinci.rice.edu:12459">http://cn-158.davinci.rice.edu:12459</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],1]-[[63355,1],17] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],56] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],53] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],51] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],4]-[[63355,1],57] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev2">&gt;&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cn-158.davinci.rice.edu:12459 &lt;<a href="http://cn-158.davinci.rice.edu:12459">http://cn-158.davinci.rice.edu:12459</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [[63355,0],1]-[[63355,1],16] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev2">&gt;&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec has exited due to process rank 49 with PID 26187 on
</span><br>
<span class="quotelev2">&gt;&gt; node cn-099 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev2">&gt;&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev2">&gt;&gt; CCTM_V5g_Linux2_x  00000000007FEA29  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt;  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; CCTM_V5g_Linux2_x  00000000007FD3A0  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt;  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; CCTM_V5g_Linux2_x  00000000007BA9A2  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt;  Unknown
</span><br>
<span class="quotelev2">&gt;&gt; CCTM_V5g_Linux2_x  0000000000759288  Unknown               Unknown
</span><br>
<span class="quotelev2">&gt;&gt;  Unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 21, 2014 at 2:08 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Ben
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     My guess is that your sys admins may have built NetCDF
</span><br>
<span class="quotelev2">&gt;&gt;     with parallel support, pnetcdf, and the latter with OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt;     which could explain the dependency.
</span><br>
<span class="quotelev2">&gt;&gt;     Ideally, they should have built it again with the latest default
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI (1.6.5?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Check if there is a NetCDF module that either doesn't have any
</span><br>
<span class="quotelev2">&gt;&gt;     dependence on MPI, or depends on the current Open MPI that
</span><br>
<span class="quotelev2">&gt;&gt;     you are using (1.6.5 I think).
</span><br>
<span class="quotelev2">&gt;&gt;     A  'module show netcdf/bla/bla'
</span><br>
<span class="quotelev2">&gt;&gt;     on the available netcdf modules will tell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If the application code is old as you said, it probably doesn't use
</span><br>
<span class="quotelev2">&gt;&gt;     any pnetcdf. In addition, it should work even with NetCDF 3.X.Y,
</span><br>
<span class="quotelev2">&gt;&gt;     which probably doesn't have any pnetcdf built in.
</span><br>
<span class="quotelev2">&gt;&gt;     Newer netcdf (4.Z.W &gt; 4.1.3) should also work, and in this case
</span><br>
<span class="quotelev2">&gt;&gt;     pick one that requires the default OpenMPI, if available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Just out of curiosity, besides netcdf/4.1.3, did you load
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/1.6.5?
</span><br>
<span class="quotelev2">&gt;&gt;     Somehow the openmpi/1.6.5 should have been marked
</span><br>
<span class="quotelev2">&gt;&gt;     to conflict with 1.4.4.
</span><br>
<span class="quotelev2">&gt;&gt;     Is it?
</span><br>
<span class="quotelev2">&gt;&gt;     Anyway, you may want to do a 'which mpiexec' to see which one is
</span><br>
<span class="quotelev2">&gt;&gt;     taking precedence in your environment (1.6.5 or 1.4.4)
</span><br>
<span class="quotelev2">&gt;&gt;     Probably 1.6.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Does the code work now, or does it continue to fail?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;     Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 05/21/2014 02:36 PM, Ben Lash wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Yep, there is is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         [bl10_at_login2 USlogsminus10]$ module show netcdf/4.1.3
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------__----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --__-------
</span><br>
<span class="quotelev2">&gt;&gt;         /opt/apps/modulefiles/netcdf/__4.1.3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         module           load openmpi/1.4.4-intel
</span><br>
<span class="quotelev2">&gt;&gt;         prepend-path     PATH
</span><br>
<span class="quotelev2">&gt;&gt;         /opt/apps/netcdf/4.1.3/bin:/__opt/apps/netcdf/4.1.3/deps/__
</span><br>
<span class="quotelev2">&gt;&gt; hdf5/1.8.7/bin
</span><br>
<span class="quotelev2">&gt;&gt;         prepend-path     LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;         /opt/apps/netcdf/4.1.3/lib:/__opt/apps/netcdf/4.1.3/deps/__
</span><br>
<span class="quotelev2">&gt;&gt; hdf5/1.8.7/lib:/opt/apps/__netcdf/4.1.3/deps/szip/2.1/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         prepend-path     MANPATH /opt/apps/netcdf/4.1.3/share/__man
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------__----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --__-------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Wed, May 21, 2014 at 1:34 PM, Douglas L Reeder
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Ben,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              The netcdf/4.1.3 module maybe loading the openmpi/1.4.4
</span><br>
<span class="quotelev2">&gt;&gt;         module. Can
</span><br>
<span class="quotelev2">&gt;&gt;              you do module show the netcdf module file to to see if
</span><br>
<span class="quotelev2">&gt;&gt;         there is a
</span><br>
<span class="quotelev2">&gt;&gt;              module load openmpi command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              On May 21, 2014, at 12:23 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:bl10_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              &lt;mailto:bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  I just wanted to follow up for anyone else who got a
</span><br>
<span class="quotelev2">&gt;&gt;             similar
</span><br>
<span class="quotelev2">&gt;&gt;                  problem - module load netcdf/4.1.3 *also* loaded
</span><br>
<span class="quotelev2">&gt;&gt;             openmpi/1.4.4. &lt;<a href="http://1.4.4">http://1.4.4</a>.&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  &lt;<a href="http://1.4.4./">http://1.4.4./</a>&gt; Don't ask me why. My code doesn't seem
</span><br>
<span class="quotelev2">&gt;&gt;             to fail as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  gracefully but otherwise works now. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  On Sat, May 17, 2014 at 6:02 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;                  &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      Ditto -- Lmod looks pretty cool.  Thanks for the
</span><br>
<span class="quotelev2">&gt;&gt;             heads up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      On May 16, 2014, at 6:23 PM, Douglas L Reeder
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; Maxime,
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; I was unaware of Lmod. Thanks for bringing it to
</span><br>
<span class="quotelev2">&gt;&gt;             my attention.
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; Doug
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; On May 16, 2014, at 4:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;maxime.boissonneault@__calculquebec.ca
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:maxime.boissonneault_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:maxime.boissonneault@__calculquebec.ca
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; Instead of using the outdated and not maintained
</span><br>
<span class="quotelev2">&gt;&gt;             Module
</span><br>
<span class="quotelev2">&gt;&gt;                      environment, why not use Lmod :
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="https://www.tacc.utexas.edu/__tacc-projects/lmod">https://www.tacc.utexas.edu/__tacc-projects/lmod</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; It is a drop-in replacement for Module
</span><br>
<span class="quotelev2">&gt;&gt;             environment that
</span><br>
<span class="quotelev2">&gt;&gt;                      supports all of their features and much, much more,
</span><br>
<span class="quotelev2">&gt;&gt;             such as :
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; - module hierarchies
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; - module properties and color highlighting (we
</span><br>
<span class="quotelev2">&gt;&gt;             use it to
</span><br>
<span class="quotelev2">&gt;&gt;                      higlight bioinformatic modules or tools for example)
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; - module caching (very useful for a parallel
</span><br>
<span class="quotelev2">&gt;&gt;             filesystem
</span><br>
<span class="quotelev2">&gt;&gt;                      with tons of modules)
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; - path priorities (useful to make sure personal
</span><br>
<span class="quotelev2">&gt;&gt;             modules
</span><br>
<span class="quotelev2">&gt;&gt;                      take precendence over system modules)
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; - export module tree to json
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; It works like a charm, understand both TCL and
</span><br>
<span class="quotelev2">&gt;&gt;             Lua modules
</span><br>
<span class="quotelev2">&gt;&gt;                      and is actively developped and debugged. There are
</span><br>
<span class="quotelev2">&gt;&gt;             litteraly
</span><br>
<span class="quotelev2">&gt;&gt;                      new features every month or so. If it does not do
</span><br>
<span class="quotelev2">&gt;&gt;             what you
</span><br>
<span class="quotelev2">&gt;&gt;                      want, odds are that the developper will add it
</span><br>
<span class="quotelev2">&gt;&gt;             shortly (I've
</span><br>
<span class="quotelev2">&gt;&gt;                      had it happen).
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; Ben,
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; You might want to use module (source forge) to
</span><br>
<span class="quotelev2">&gt;&gt;             manage
</span><br>
<span class="quotelev2">&gt;&gt;                      paths to different mpi implementations. It is
</span><br>
<span class="quotelev2">&gt;&gt;             fairly easy to
</span><br>
<span class="quotelev2">&gt;&gt;                      set up and very robust for this type of problem.
</span><br>
<span class="quotelev2">&gt;&gt;             You would
</span><br>
<span class="quotelev2">&gt;&gt;                      remove contentious application paths from you
</span><br>
<span class="quotelev2">&gt;&gt;             standard PATH
</span><br>
<span class="quotelev2">&gt;&gt;                      and then use module to switch them in and out as
</span><br>
<span class="quotelev2">&gt;&gt;             needed.
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; On May 16, 2014, at 3:39 PM, Ben Lash
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; My cluster has just upgraded to a new version
</span><br>
<span class="quotelev2">&gt;&gt;             of MPI, and
</span><br>
<span class="quotelev2">&gt;&gt;                      I'm using an old one. It seems that I'm having
</span><br>
<span class="quotelev2">&gt;&gt; trouble
</span><br>
<span class="quotelev2">&gt;&gt;                      compiling due to the compiler wrapper file moving
</span><br>
<span class="quotelev2">&gt;&gt;             (full error
</span><br>
<span class="quotelev2">&gt;&gt;                      here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             /opt/apps/openmpi/1.4.4-intel/__share/openmpi/mpif90-
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-__data.txt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; I've found the file on the cluster at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               /opt/apps/openmpi/retired/1.4.__4-intel/share/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mpif90-__wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; How do I tell the old mpi wrapper where this
</span><br>
<span class="quotelev2">&gt;&gt;             file is?
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      /opt/apps/openmpi/retired/1.4.__4-intel/, which is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             in the
</span><br>
<span class="quotelev2">&gt;&gt;                      software I'm trying to recompile's lib folder
</span><br>
<span class="quotelev2">&gt;&gt;                      (/home/bl10/CMAQv5.0.1/lib/__x86_64/ifort). Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             for any
</span><br>
<span class="quotelev2">&gt;&gt;                      ideas. I also tried changing $pkgdatadir based on
</span><br>
<span class="quotelev2">&gt;&gt;             what I read
</span><br>
<span class="quotelev2">&gt;&gt;                      here:
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/faq/?__category=mpi-apps#default">http://www.open-mpi.org/faq/?__category=mpi-apps#default</a>-__
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-compiler-flags
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#default">http://www.open-mpi.org/faq/?category=mpi-apps#default</a>-
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-compiler-flags&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; --Ben L
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; ___________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; ______________________________
</span><br>
<span class="quotelev2">&gt;&gt; ___________________
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; ------------------------------__---
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169;
</span><br>
<span class="quotelev2">&gt;&gt; Laval
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;                      &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt;
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; _________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;                      &gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --
</span><br>
<span class="quotelev2">&gt;&gt;                      Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;             jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  --
</span><br>
<span class="quotelev2">&gt;&gt;                  --Ben L
</span><br>
<span class="quotelev2">&gt;&gt;                  _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;              users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         --Ben L
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; --Ben L
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
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
--Ben L
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24449.php">W Spector: "[OMPI users] False positive from valgrind in sec_basic.c"</a>
<li><strong>Previous message:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
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
