<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 17:02:53 2014" -->
<!-- isoreceived="20140521210253" -->
<!-- sent="Wed, 21 May 2014 17:02:50 -0400" -->
<!-- isosent="20140521210250" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="537D147A.3060200_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOiaXW3ONV4c6Tf=1SeZn5RhLkpSzHMT5-adEsnsY4bp-dhtNg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-21 17:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben
<br>
<p>One of the ranks (52) called MPI_Abort.
<br>
This may be a bug in the code, or a problem with the setup
<br>
(e.g. a missing or incorrect input file).
<br>
For instance, the CCTM Wiki says:
<br>
&quot;AERO6 expects emissions inputs for 13 new PM species. CCTM will crash 
<br>
if any emitted PM species is not included in the emissions input file&quot;
<br>
I am not familiar to CCTM, so these are just guesses.
<br>
<p>It doesn't look like an MPI problem, though.
<br>
<p>You may want to check any other logs that the CCTM code may
<br>
produce, for any clue on where it fails.
<br>
Otherwise, you could compile with -g -traceback (and remove any
<br>
optimization options in FFLAGS, FCFLAGS, CFLAGS, etc.)
<br>
It may also have a -DDEBUG or similar that can be turned on
<br>
in the CPPFLAGS, which in many models makes a more verbose log.
<br>
This *may* tell you where it fails (source file, subroutine and line),
<br>
and may help understand why it fails.
<br>
If it dumps a core file, you can trace the failure point with
<br>
a debugger.
<br>
<p>I hope this helps,
<br>
Gus
<br>
<p>On 05/21/2014 03:20 PM, Ben Lash wrote:
<br>
<span class="quotelev1">&gt; I used a different build of netcdf 4.1.3, and the code seems to run now.
</span><br>
<span class="quotelev1">&gt; I have a totally different, non-mpi related error in part of it, but
</span><br>
<span class="quotelev1">&gt; there's no way for the list to help, I mostly just wanted to report that
</span><br>
<span class="quotelev1">&gt; this particular problem seems to be solved for the record. It doesn't
</span><br>
<span class="quotelev1">&gt; seem to fail quite as gracefully anymore, but I'm still getting enough
</span><br>
<span class="quotelev1">&gt; of the error messages to know what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 52 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],52] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],54] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],55] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-158.davinci.rice.edu:12459 &lt;<a href="http://cn-158.davinci.rice.edu:12459">http://cn-158.davinci.rice.edu:12459</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],1]-[[63355,1],15] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-158.davinci.rice.edu:12459 &lt;<a href="http://cn-158.davinci.rice.edu:12459">http://cn-158.davinci.rice.edu:12459</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],1]-[[63355,1],17] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],56] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],53] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],51] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [cn-099.davinci.rice.edu:26185 &lt;<a href="http://cn-099.davinci.rice.edu:26185">http://cn-099.davinci.rice.edu:26185</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],4]-[[63355,1],57] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cn-158.davinci.rice.edu:12459 &lt;<a href="http://cn-158.davinci.rice.edu:12459">http://cn-158.davinci.rice.edu:12459</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[63355,0],1]-[[63355,1],16] mca_oob_tcp_msg_recv: readv failed:
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec has exited due to process rank 49 with PID 26187 on
</span><br>
<span class="quotelev1">&gt; node cn-099 exiting improperly. There are two reasons this could occur:
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
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpiexec (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        Source
</span><br>
<span class="quotelev1">&gt; CCTM_V5g_Linux2_x  00000000007FEA29  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; CCTM_V5g_Linux2_x  00000000007FD3A0  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; CCTM_V5g_Linux2_x  00000000007BA9A2  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; CCTM_V5g_Linux2_x  0000000000759288  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 21, 2014 at 2:08 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     My guess is that your sys admins may have built NetCDF
</span><br>
<span class="quotelev1">&gt;     with parallel support, pnetcdf, and the latter with OpenMPI,
</span><br>
<span class="quotelev1">&gt;     which could explain the dependency.
</span><br>
<span class="quotelev1">&gt;     Ideally, they should have built it again with the latest default
</span><br>
<span class="quotelev1">&gt;     OpenMPI (1.6.5?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Check if there is a NetCDF module that either doesn't have any
</span><br>
<span class="quotelev1">&gt;     dependence on MPI, or depends on the current Open MPI that
</span><br>
<span class="quotelev1">&gt;     you are using (1.6.5 I think).
</span><br>
<span class="quotelev1">&gt;     A  'module show netcdf/bla/bla'
</span><br>
<span class="quotelev1">&gt;     on the available netcdf modules will tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If the application code is old as you said, it probably doesn't use
</span><br>
<span class="quotelev1">&gt;     any pnetcdf. In addition, it should work even with NetCDF 3.X.Y,
</span><br>
<span class="quotelev1">&gt;     which probably doesn't have any pnetcdf built in.
</span><br>
<span class="quotelev1">&gt;     Newer netcdf (4.Z.W &gt; 4.1.3) should also work, and in this case
</span><br>
<span class="quotelev1">&gt;     pick one that requires the default OpenMPI, if available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Just out of curiosity, besides netcdf/4.1.3, did you load openmpi/1.6.5?
</span><br>
<span class="quotelev1">&gt;     Somehow the openmpi/1.6.5 should have been marked
</span><br>
<span class="quotelev1">&gt;     to conflict with 1.4.4.
</span><br>
<span class="quotelev1">&gt;     Is it?
</span><br>
<span class="quotelev1">&gt;     Anyway, you may want to do a 'which mpiexec' to see which one is
</span><br>
<span class="quotelev1">&gt;     taking precedence in your environment (1.6.5 or 1.4.4)
</span><br>
<span class="quotelev1">&gt;     Probably 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does the code work now, or does it continue to fail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05/21/2014 02:36 PM, Ben Lash wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Yep, there is is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [bl10_at_login2 USlogsminus10]$ module show netcdf/4.1.3
</span><br>
<span class="quotelev1">&gt;         ------------------------------__------------------------------__-------
</span><br>
<span class="quotelev1">&gt;         /opt/apps/modulefiles/netcdf/__4.1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         module           load openmpi/1.4.4-intel
</span><br>
<span class="quotelev1">&gt;         prepend-path     PATH
</span><br>
<span class="quotelev1">&gt;         /opt/apps/netcdf/4.1.3/bin:/__opt/apps/netcdf/4.1.3/deps/__hdf5/1.8.7/bin
</span><br>
<span class="quotelev1">&gt;         prepend-path     LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;         /opt/apps/netcdf/4.1.3/lib:/__opt/apps/netcdf/4.1.3/deps/__hdf5/1.8.7/lib:/opt/apps/__netcdf/4.1.3/deps/szip/2.1/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         prepend-path     MANPATH /opt/apps/netcdf/4.1.3/share/__man
</span><br>
<span class="quotelev1">&gt;         ------------------------------__------------------------------__-------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Wed, May 21, 2014 at 1:34 PM, Douglas L Reeder
</span><br>
<span class="quotelev1">&gt;         &lt;dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              The netcdf/4.1.3 module maybe loading the openmpi/1.4.4
</span><br>
<span class="quotelev1">&gt;         module. Can
</span><br>
<span class="quotelev1">&gt;              you do module show the netcdf module file to to see if
</span><br>
<span class="quotelev1">&gt;         there is a
</span><br>
<span class="quotelev1">&gt;              module load openmpi command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              On May 21, 2014, at 12:23 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:bl10_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;              &lt;mailto:bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  I just wanted to follow up for anyone else who got a
</span><br>
<span class="quotelev1">&gt;             similar
</span><br>
<span class="quotelev1">&gt;                  problem - module load netcdf/4.1.3 *also* loaded
</span><br>
<span class="quotelev1">&gt;             openmpi/1.4.4. &lt;<a href="http://1.4.4">http://1.4.4</a>.&gt;
</span><br>
<span class="quotelev1">&gt;                  &lt;<a href="http://1.4.4./">http://1.4.4./</a>&gt; Don't ask me why. My code doesn't seem
</span><br>
<span class="quotelev1">&gt;             to fail as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  gracefully but otherwise works now. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  On Sat, May 17, 2014 at 6:02 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;                  &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      Ditto -- Lmod looks pretty cool.  Thanks for the
</span><br>
<span class="quotelev1">&gt;             heads up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      On May 16, 2014, at 6:23 PM, Douglas L Reeder
</span><br>
<span class="quotelev1">&gt;                      &lt;dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                      &gt; Maxime,
</span><br>
<span class="quotelev2">&gt;                      &gt;
</span><br>
<span class="quotelev2">&gt;                      &gt; I was unaware of Lmod. Thanks for bringing it to
</span><br>
<span class="quotelev1">&gt;             my attention.
</span><br>
<span class="quotelev2">&gt;                      &gt;
</span><br>
<span class="quotelev2">&gt;                      &gt; Doug
</span><br>
<span class="quotelev2">&gt;                      &gt; On May 16, 2014, at 4:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;                      &lt;maxime.boissonneault@__calculquebec.ca
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:maxime.boissonneault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:maxime.boissonneault@__calculquebec.ca
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;                      &gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; Instead of using the outdated and not maintained
</span><br>
<span class="quotelev1">&gt;             Module
</span><br>
<span class="quotelev1">&gt;                      environment, why not use Lmod :
</span><br>
<span class="quotelev1">&gt;             <a href="https://www.tacc.utexas.edu/__tacc-projects/lmod">https://www.tacc.utexas.edu/__tacc-projects/lmod</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; It is a drop-in replacement for Module
</span><br>
<span class="quotelev1">&gt;             environment that
</span><br>
<span class="quotelev1">&gt;                      supports all of their features and much, much more,
</span><br>
<span class="quotelev1">&gt;             such as :
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; - module hierarchies
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; - module properties and color highlighting (we
</span><br>
<span class="quotelev1">&gt;             use it to
</span><br>
<span class="quotelev1">&gt;                      higlight bioinformatic modules or tools for example)
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; - module caching (very useful for a parallel
</span><br>
<span class="quotelev1">&gt;             filesystem
</span><br>
<span class="quotelev1">&gt;                      with tons of modules)
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; - path priorities (useful to make sure personal
</span><br>
<span class="quotelev1">&gt;             modules
</span><br>
<span class="quotelev1">&gt;                      take precendence over system modules)
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; - export module tree to json
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; It works like a charm, understand both TCL and
</span><br>
<span class="quotelev1">&gt;             Lua modules
</span><br>
<span class="quotelev1">&gt;                      and is actively developped and debugged. There are
</span><br>
<span class="quotelev1">&gt;             litteraly
</span><br>
<span class="quotelev1">&gt;                      new features every month or so. If it does not do
</span><br>
<span class="quotelev1">&gt;             what you
</span><br>
<span class="quotelev1">&gt;                      want, odds are that the developper will add it
</span><br>
<span class="quotelev1">&gt;             shortly (I've
</span><br>
<span class="quotelev1">&gt;                      had it happen).
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#233;crit :
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; Ben,
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; You might want to use module (source forge) to
</span><br>
<span class="quotelev1">&gt;             manage
</span><br>
<span class="quotelev1">&gt;                      paths to different mpi implementations. It is
</span><br>
<span class="quotelev1">&gt;             fairly easy to
</span><br>
<span class="quotelev1">&gt;                      set up and very robust for this type of problem.
</span><br>
<span class="quotelev1">&gt;             You would
</span><br>
<span class="quotelev1">&gt;                      remove contentious application paths from you
</span><br>
<span class="quotelev1">&gt;             standard PATH
</span><br>
<span class="quotelev1">&gt;                      and then use module to switch them in and out as
</span><br>
<span class="quotelev1">&gt;             needed.
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; On May 16, 2014, at 3:39 PM, Ben Lash
</span><br>
<span class="quotelev1">&gt;             &lt;bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                      &lt;mailto:bl10_at_[hidden] &lt;mailto:bl10_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; My cluster has just upgraded to a new version
</span><br>
<span class="quotelev1">&gt;             of MPI, and
</span><br>
<span class="quotelev1">&gt;                      I'm using an old one. It seems that I'm having trouble
</span><br>
<span class="quotelev1">&gt;                      compiling due to the compiler wrapper file moving
</span><br>
<span class="quotelev1">&gt;             (full error
</span><br>
<span class="quotelev1">&gt;                      here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /opt/apps/openmpi/1.4.4-intel/__share/openmpi/mpif90-wrapper-__data.txt&quot;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; I've found the file on the cluster at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               /opt/apps/openmpi/retired/1.4.__4-intel/share/openmpi/mpif90-__wrapper-data.txt
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; How do I tell the old mpi wrapper where this
</span><br>
<span class="quotelev1">&gt;             file is?
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev1">&gt;                      /opt/apps/openmpi/retired/1.4.__4-intel/, which is
</span><br>
<span class="quotelev1">&gt;             in the
</span><br>
<span class="quotelev1">&gt;                      software I'm trying to recompile's lib folder
</span><br>
<span class="quotelev1">&gt;                      (/home/bl10/CMAQv5.0.1/lib/__x86_64/ifort). Thanks
</span><br>
<span class="quotelev1">&gt;             for any
</span><br>
<span class="quotelev1">&gt;                      ideas. I also tried changing $pkgdatadir based on
</span><br>
<span class="quotelev1">&gt;             what I read
</span><br>
<span class="quotelev1">&gt;                      here:
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/faq/?__category=mpi-apps#default-__wrapper-compiler-flags">http://www.open-mpi.org/faq/?__category=mpi-apps#default-__wrapper-compiler-flags</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>&gt;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; --Ben L
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; _________________________________________________
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; _________________________________________________
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;                      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; ------------------------------__---
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; _________________________________________________
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;                      &gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;                      &gt;
</span><br>
<span class="quotelev2">&gt;                      &gt; _________________________________________________
</span><br>
<span class="quotelev2">&gt;                      &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;                      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                      &gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      --
</span><br>
<span class="quotelev1">&gt;                      Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.cisco.com/web/__about/doing_business/legal/__cri/">http://www.cisco.com/web/__about/doing_business/legal/__cri/</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                      _________________________________________________
</span><br>
<span class="quotelev1">&gt;                      users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  --
</span><br>
<span class="quotelev1">&gt;                  --Ben L
</span><br>
<span class="quotelev1">&gt;                  _________________________________________________
</span><br>
<span class="quotelev1">&gt;                  users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              _________________________________________________
</span><br>
<span class="quotelev1">&gt;              users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         --Ben L
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _________________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --Ben L
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24446.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24448.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
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
