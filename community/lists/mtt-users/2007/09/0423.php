<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 14:04:07 2007" -->
<!-- isoreceived="20070921180407" -->
<!-- sent="Fri, 21 Sep 2007 14:03:41 -0400" -->
<!-- isosent="20070921180341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MVAPICH2 configuring problems" -->
<!-- id="08C9C8CD-851A-46B1-9D17-77D1CC275040_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F3FFB8.3020105_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 14:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Mohamad Chaarawi: "[MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Mohamad Chaarawi: "[MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoinks.  :-(
<br>
<p>What does the corresponding config.log say?  It should contain the  
<br>
exact error that occurred.
<br>
<p>This configure test is simply checking to see if the C compiler  
<br>
works.  IIRC, it's trying to compile, link, and run a trivial C  
<br>
application (something akin to &quot;hello world&quot;).
<br>
<p><p>On Sep 21, 2007, at 1:30 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; Hey all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to execute the collective bakeoff tests for OMPI,  
</span><br>
<span class="quotelev1">&gt; MPICH2, and
</span><br>
<span class="quotelev1">&gt; MVAPICH2. OMPI and MPICH2 are working out fine, However when  
</span><br>
<span class="quotelev1">&gt; MVAPICH2 is
</span><br>
<span class="quotelev1">&gt; configuring, it gives an error with the C compiler, pasted at the  
</span><br>
<span class="quotelev1">&gt; end..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I get the error when im running the mtt client. When i go in
</span><br>
<span class="quotelev1">&gt; the scratch directory to the MVAPICH2 sources and configure it myself,
</span><br>
<span class="quotelev1">&gt; with the same configure arguments that it did from config.log, it  
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt; out fine..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ive been banging my head a while now to figure this out, but i got
</span><br>
<span class="quotelev1">&gt; nowhere. Probably it's some environment settings being messed up
</span><br>
<span class="quotelev1">&gt; somewhere, but i don't know..
</span><br>
<span class="quotelev1">&gt; If anyone has stumbled upon this before, let me know..
</span><br>
<span class="quotelev1">&gt; I attached my ini file..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT:Configuring MVAPICH2...
</span><br>
<span class="quotelev1">&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev1">&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/ 
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev1">&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev1">&gt; OUT:sourcing
</span><br>
<span class="quotelev1">&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/ 
</span><br>
<span class="quotelev1">&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev1">&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev1">&gt; OUT:checking for gcc... OUT:gcc
</span><br>
<span class="quotelev1">&gt; OUT:checking for C compiler default output file name... OUT:configure:
</span><br>
<span class="quotelev1">&gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev1">&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/ 
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev1">&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev1">&gt;    sourcing
</span><br>
<span class="quotelev1">&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/ 
</span><br>
<span class="quotelev1">&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev1">&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev1">&gt;    checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt;    checking for C compiler default output file name... configure:  
</span><br>
<span class="quotelev1">&gt; error: C
</span><br>
<span class="quotelev1">&gt;    compiler cannot create executables
</span><br>
<span class="quotelev1">&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt; OUT:Failure in configuration.
</span><br>
<span class="quotelev1">&gt;    Please file an error report to mvapich-discuss_at_cse.ohio- 
</span><br>
<span class="quotelev1">&gt; state.edu with
</span><br>
<span class="quotelev1">&gt;    all your log files.
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev1">&gt; # database
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev1">&gt; description = [testbake]
</span><br>
<span class="quotelev1">&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real  
</span><br>
<span class="quotelev1">&gt; results
</span><br>
<span class="quotelev1">&gt; trial = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Lock]
</span><br>
<span class="quotelev1">&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/">http://mvapich.cse.ohio-state.edu/download/mvapich2/</a> 
</span><br>
<span class="quotelev1">&gt; mvapich2-0.9.8p3.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Install MPI phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_get = mvapich2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev1">&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev1">&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev1">&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev1">&gt; prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = MVAPICH2
</span><br>
<span class="quotelev1">&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
</span><br>
<span class="quotelev1">&gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev1">&gt; mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
</span><br>
<span class="quotelev1">&gt; mvapich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # MPI run details
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev1">&gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev1">&gt; # happen).
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev1">&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Test get phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: skampi]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Test build phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: skampi]
</span><br>
<span class="quotelev1">&gt; test_get = skampi
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Test Run phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: skampi]
</span><br>
<span class="quotelev1">&gt; test_build = skampi
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could  
</span><br>
<span class="quotelev1">&gt; be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Reporter phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; module = MTTDatabase
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev1">&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = uh
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mschaara/mtt-testing/ 
</span><br>
<span class="quotelev1">&gt; mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev1">&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = shark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev1">&gt; # file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; module = TextFile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; textfile_summary_footer =
</span><br>
<span class="quotelev1">&gt; textfile_detail_header =
</span><br>
<span class="quotelev1">&gt; textfile_detail_footer =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Mohamad Chaarawi: "[MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0422.php">Mohamad Chaarawi: "[MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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
