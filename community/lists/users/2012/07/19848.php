<?
$subject_val = "Re: [OMPI users] OpenMPI and Rmpi/snow";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 00:09:10 2012" -->
<!-- isoreceived="20120727040910" -->
<!-- sent="Thu, 26 Jul 2012 21:09:02 -0700" -->
<!-- isosent="20120727040902" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Rmpi/snow" -->
<!-- id="91F09C4C-E522-4C40-83EA-EB4435CC05E7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="391B9764-1F2C-4C91-A4D4-DF89F4B45C22_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Rmpi/snow<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 00:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19849.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19847.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19843.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, it looks from your original error message that Rmpi/snow is using a single &quot;master&quot; process and then comm_spawn'ing a whole bunch of &quot;workers&quot;. I tried replicating that on a slurm machine by having a single master comm_spawn a whole bunch of processes, and that worked fine. Of course, this was with the current 1.6 branch, which may have something patched in it as we are getting ready for 1.6.1.
<br>
<p>What the error is saying is that a race condition is causing procs to try and communicate before the daemon knows how to route their messages. That shouldn't be possible - the daemon should unpack the routing info prior to starting any local procs. I'll review the code to see if I can spot something.
<br>
<p>Meantime, could you try the current 1.6 branch tarball and/or the trunk, per my earlier note? It would help to know if I'm looking for a bug in 1.6.0 or something more systemic.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p>On Jul 26, 2012, at 4:32 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I think so, sorry if I gave you the impression that Rmpi changed, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2012, at 7:30 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guess I'm confused - your original note indicated that something had changed in Rmpi that broke things. Are you now saying it was something in OMPI?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 26, 2012, at 4:22 PM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok will see, Rmpi we had working with 1.4 and has not been updated after 2010,  this this kinda stinks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will keep digging into it thanks for the help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 26, 2012, at 7:16 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Crud - afraid you'll have to ask them, then :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 26, 2012, at 3:50 PM, Brock Palen wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rmpi wraps everything up, so I tried setting them with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMPI_plm_base_verbose=5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMPI_dpm_base_verbose=5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and I get no extra messages even on helloworld example simple MPI-1.0 code. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 26, 2012, at 6:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Well, it looks like comm_spawn is working on 1.6. Afraid I don't know enough about Rmpi/snow to advise on what changed, but you could add some debug params to get an idea of where the problem is occurring:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca plm_base_verbose 5 -mca dpm_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; should tell you from an OMPI perspective. I can try to help debug that end, at least.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 26, 2012, at 3:02 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Weird - looks like it has done a comm_spawn and having trouble connecting between the jobs. I can check the basic code and make sure it is working - I seem to recall someone else recently talking about Rmpi changes causing problems (different ones than this, IIRC), so you might want to search our user archives for rmpi to see what they ran into. Not sure what rmpi changed, or why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 26, 2012, at 2:41 PM, Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have ran into a problem using Rmpi with OpenMPI (trying to get snow running).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I built OpenMPI following another post where I built static:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=$INSTALL/gcc-4.4.6-static --mandir=$INSTALL/gcc-4.4.6-static/man --with-tm=/usr/local/torque/ --with-openib --with-psm --enable-static CC=gcc CXX=g++ FC=gfortran F77=gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Rmpi/snow work fine when I run on a single node.  When I span more than one node I get nasty errors (pasted below).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tested this mpi install with a simple hello world and that works.  Any thoughts what is different about Rmpi/snow that could cause this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0400.engin.umich.edu:11927] [[48116,0],4] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0400.engin.umich.edu:11927] [[48116,0],4]:route_callback tried routing message from [[48116,2],16] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0405.engin.umich.edu:07707] [[48116,0],8] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0405.engin.umich.edu:07707] [[48116,0],8]:route_callback tried routing message from [[48116,2],32] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2b7e9209e0df]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [1] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(+0x9f77a) [0x2b7e9206577a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [2] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(mca_oob_tcp_msg_recv_complete+0x27f) [0x2b7e920404af]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [3] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(+0x7bed2) [0x2b7e92041ed2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [4] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_event_base_loop+0x238) [0x2b7e92087e38]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [5] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(orte_daemon+0x8d8) [0x2b7e92016768]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [6] func:orted(main+0x66) [0x400966]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [7] func:/lib64/libc.so.6(__libc_start_main+0xfd) [0x3d39c1ecdd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [8] func:orted() [0x400839]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0397.engin.umich.edu:06959] [[48116,0],1] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0397.engin.umich.edu:06959] [[48116,0],1]:route_callback tried routing message from [[48116,2],7] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0401.engin.umich.edu:07782] [[48116,0],5] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0401.engin.umich.edu:07782] [[48116,0],5]:route_callback tried routing message from [[48116,2],23] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0406.engin.umich.edu:07743] [[48116,0],9] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx0406.engin.umich.edu:07743] [[48116,0],9]:route_callback tried routing message from [[48116,2],39] to [[48116,1],0]:16, can't find route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [0] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2ae2ad17d0df]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19849.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19847.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>In reply to:</strong> <a href="19843.php">Brock Palen: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
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
