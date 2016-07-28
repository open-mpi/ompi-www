<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 15:20:44 2014" -->
<!-- isoreceived="20140521192044" -->
<!-- sent="Wed, 21 May 2014 14:20:23 -0500" -->
<!-- isosent="20140521192023" -->
<!-- name="Ben Lash" -->
<!-- email="bl10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="CAOiaXW3ONV4c6Tf=1SeZn5RhLkpSzHMT5-adEsnsY4bp-dhtNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="537CF9B1.7090800_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-05-21 15:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used a different build of netcdf 4.1.3, and the code seems to run now. I
<br>
have a totally different, non-mpi related error in part of it, but there's
<br>
no way for the list to help, I mostly just wanted to report that this
<br>
particular problem seems to be solved for the record. It doesn't seem to
<br>
fail quite as gracefully anymore, but I'm still getting enough of the error
<br>
messages to know what's going on.
<br>
<p>MPI_ABORT was invoked on rank 52 in communicator MPI_COMM_WORLD
<br>
with errorcode 0.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],52]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],54]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],55]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-158.davinci.rice.edu:12459] [[63355,0],1]-[[63355,1],15]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-158.davinci.rice.edu:12459] [[63355,0],1]-[[63355,1],17]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],56]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],53]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],51]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[cn-099.davinci.rice.edu:26185] [[63355,0],4]-[[63355,1],57]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
Image              PC                Routine            Line        Source
<br>
<p>....
<br>
<p>[cn-158.davinci.rice.edu:12459] [[63355,0],1]-[[63355,1],16]
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 49 with PID 26187 on
<br>
node cn-099 exiting improperly. There are two reasons this could occur:
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
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
Image              PC                Routine            Line        Source
<br>
CCTM_V5g_Linux2_x  00000000007FEA29  Unknown               Unknown  Unknown
<br>
CCTM_V5g_Linux2_x  00000000007FD3A0  Unknown               Unknown  Unknown
<br>
CCTM_V5g_Linux2_x  00000000007BA9A2  Unknown               Unknown  Unknown
<br>
CCTM_V5g_Linux2_x  0000000000759288  Unknown               Unknown  Unknown
<br>
<p>...
<br>
<p><p><p>On Wed, May 21, 2014 at 2:08 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that your sys admins may have built NetCDF
</span><br>
<span class="quotelev1">&gt; with parallel support, pnetcdf, and the latter with OpenMPI,
</span><br>
<span class="quotelev1">&gt; which could explain the dependency.
</span><br>
<span class="quotelev1">&gt; Ideally, they should have built it again with the latest default OpenMPI
</span><br>
<span class="quotelev1">&gt; (1.6.5?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check if there is a NetCDF module that either doesn't have any
</span><br>
<span class="quotelev1">&gt; dependence on MPI, or depends on the current Open MPI that
</span><br>
<span class="quotelev1">&gt; you are using (1.6.5 I think).
</span><br>
<span class="quotelev1">&gt; A  'module show netcdf/bla/bla'
</span><br>
<span class="quotelev1">&gt; on the available netcdf modules will tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the application code is old as you said, it probably doesn't use
</span><br>
<span class="quotelev1">&gt; any pnetcdf. In addition, it should work even with NetCDF 3.X.Y,
</span><br>
<span class="quotelev1">&gt; which probably doesn't have any pnetcdf built in.
</span><br>
<span class="quotelev1">&gt; Newer netcdf (4.Z.W &gt; 4.1.3) should also work, and in this case
</span><br>
<span class="quotelev1">&gt; pick one that requires the default OpenMPI, if available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just out of curiosity, besides netcdf/4.1.3, did you load openmpi/1.6.5?
</span><br>
<span class="quotelev1">&gt; Somehow the openmpi/1.6.5 should have been marked
</span><br>
<span class="quotelev1">&gt; to conflict with 1.4.4.
</span><br>
<span class="quotelev1">&gt; Is it?
</span><br>
<span class="quotelev1">&gt; Anyway, you may want to do a 'which mpiexec' to see which one is
</span><br>
<span class="quotelev1">&gt; taking precedence in your environment (1.6.5 or 1.4.4)
</span><br>
<span class="quotelev1">&gt; Probably 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the code work now, or does it continue to fail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/21/2014 02:36 PM, Ben Lash wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yep, there is is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [bl10_at_login2 USlogsminus10]$ module show netcdf/4.1.3
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/modulefiles/netcdf/4.1.3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module           load openmpi/1.4.4-intel
</span><br>
<span class="quotelev2">&gt;&gt; prepend-path     PATH
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/netcdf/4.1.3/bin:/opt/apps/netcdf/4.1.3/deps/hdf5/1.8.7/bin
</span><br>
<span class="quotelev2">&gt;&gt; prepend-path     LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/netcdf/4.1.3/lib:/opt/apps/netcdf/4.1.3/deps/
</span><br>
<span class="quotelev2">&gt;&gt; hdf5/1.8.7/lib:/opt/apps/netcdf/4.1.3/deps/szip/2.1/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prepend-path     MANPATH /opt/apps/netcdf/4.1.3/share/man
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 21, 2014 at 1:34 PM, Douglas L Reeder &lt;dlr1_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:dlr1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Ben,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The netcdf/4.1.3 module maybe loading the openmpi/1.4.4 module. Can
</span><br>
<span class="quotelev2">&gt;&gt;     you do module show the netcdf module file to to see if there is a
</span><br>
<span class="quotelev2">&gt;&gt;     module load openmpi command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On May 21, 2014, at 12:23 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      I just wanted to follow up for anyone else who got a similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     problem - module load netcdf/4.1.3 *also* loaded openmpi/1.4.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;<a href="http://1.4.4./">http://1.4.4./</a>&gt; Don't ask me why. My code doesn't seem to fail as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     gracefully but otherwise works now. Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Sat, May 17, 2014 at 6:02 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Ditto -- Lmod looks pretty cool.  Thanks for the heads up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On May 16, 2014, at 6:23 PM, Douglas L Reeder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;dlr1_at_[hidden] &lt;mailto:dlr1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Maxime,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; I was unaware of Lmod. Thanks for bringing it to my attention.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Doug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; On May 16, 2014, at 4:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; Instead of using the outdated and not maintained Module
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         environment, why not use Lmod :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; It is a drop-in replacement for Module environment that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         supports all of their features and much, much more, such as :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; - module hierarchies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; - module properties and color highlighting (we use it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         higlight bioinformatic modules or tools for example)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; - module caching (very useful for a parallel filesystem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         with tons of modules)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; - path priorities (useful to make sure personal modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         take precendence over system modules)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; - export module tree to json
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; It works like a charm, understand both TCL and Lua modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and is actively developped and debugged. There are litteraly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         new features every month or so. If it does not do what you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         want, odds are that the developper will add it shortly (I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         had it happen).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; Maxime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; Ben,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; You might want to use module (source forge) to manage
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         paths to different mpi implementations. It is fairly easy to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         set up and very robust for this type of problem. You would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         remove contentious application paths from you standard PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and then use module to switch them in and out as needed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; My cluster has just upgraded to a new version of MPI, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I'm using an old one. It seems that I'm having trouble
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         compiling due to the compiler wrapper file moving (full error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data.txt&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; I've found the file on the cluster at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper-data.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /opt/apps/openmpi/retired/1.4.4-intel/, which is in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         software I'm trying to recompile's lib folder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ideas. I also tried changing $pkgdatadir based on what I read
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default">http://www.open-mpi.org/faq/?category=mpi-apps#default</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper-compiler-flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; --Ben L
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;         &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;         &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --Ben L
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24445.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24447.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
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
