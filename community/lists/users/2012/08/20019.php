<?
$subject_val = "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 12:29:29 2012" -->
<!-- isoreceived="20120827162929" -->
<!-- sent="Mon, 27 Aug 2012 12:29:24 -0400" -->
<!-- isosent="20120827162924" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed" -->
<!-- id="941459E2-DD89-4442-BC64-DB1A4A972323_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0317FE82-339A-4802-A4D2-19AD05BAEA2D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 12:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20020.php">Lloyd Brown: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you install Open MPI on a network share, or is it installed locally on each machine?
<br>
<p>If you installed it locally on each machine, you may want to double check your installation on AV8 to ensure it was installed correctly.
<br>
<p>Also, you might want to double check that Open MPI is available at the same paths on every machine one which you're trying to run (e.g., if you installed in /opt/openmpi on one machine, make sure you installed on /opt/openmpi on all machines).  You don't *have* to do this -- Open MPI *can* run if it's installed in different directories on each machine -- but it's *significantly* simpler if Open MPI is installed in the same directory on each machine.
<br>
<p><p>On Aug 26, 2012, at 10:59 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I have no further ideas, I'm afraid. The only thing I can see is that your directory tree doesn't look right - if /usr/local is your prefix, then there should be a /usr/local/lib/openmpi directory, and the .la's should be in there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might try reinstalling it to somewhere other than /usr/local - perhaps put it somewhere under your home directory instead so you don't need root permissions to do the install. See if the directory tree looks any different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would also help to see your configure line, and know something more about your system. It looks like you have slurm, so I assume this is some kind of Linux box?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2012, at 7:23 PM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib is in my LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; I am running the right version of mpirun and I do have all permissions on them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Shanthini
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 24, 2012 at 7:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; And just to be sure - /usr/local/lib is in your ld_lib_path, yes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might also check the permissions to ensure you can read them. Also, check &quot;which mpirun&quot; - let's make sure you are running the one you think!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2012, at 4:22 PM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Ralph.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My prefix is /usr/local and I see that mca_ess_env.la is present in /usr/local/lib directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-4.2# pwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-4.2# ls mca_ess*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_ess_env.la  mca_ess_singleton.la  mca_ess_slurm.la   mca_ess_tool.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_ess_env.so  mca_ess_singleton.so  mca_ess_slurm.so   mca_ess_tool.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_ess_hnp.la  mca_ess_slave.la      mca_ess_slurmd.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_ess_hnp.so  mca_ess_slave.so      mca_ess_slurmd.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-4.2#
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Aug 24, 2012 at 7:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check you &lt;prefix&gt;/lib directory - there should be an openmpi directory under it, and that should have a bunch of libs in it. One of those should be mca_ess_env.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 24, 2012, at 3:27 PM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had the OMPI lib directory added in /etc/ld.so.conf.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also added it in LD_LIBRARY_PATH, but it made no difference.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I call mpirun, should I specify the MCA in command-line?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Aug 24, 2012 at 2:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect your LD_LIBRARY_PATH doesn't include the OMPI lib location
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 24, 2012, at 10:58 AM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am running mpptest over Open MPI (v1.5.4). 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get the following error saying component &quot;env&quot; in Framework &quot;ess&quot; is not found. Am I missing something?  I am new to MPI and any help you can offer is appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Host:      AV8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Framework: ess
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Component: env
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [AV8:05354] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 120
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   orte_ess_base_open failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Shanthini
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20020.php">Lloyd Brown: "Re: [OMPI users] PG compilers and OpenMPI 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20018.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
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
