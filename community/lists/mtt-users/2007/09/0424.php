<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 14:34:17 2007" -->
<!-- isoreceived="20070921183417" -->
<!-- sent="Fri, 21 Sep 2007 13:34:12 -0500" -->
<!-- isosent="20070921183412" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT users] MVAPICH2 configuring problems" -->
<!-- id="46F40EA4.6010609_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="08C9C8CD-851A-46B1-9D17-77D1CC275040_at_cisco.com" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-21 14:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached..
<br>
<p>something to do with libumad i guess..
<br>
<p>interesting enough, if i run mtt driectly from the head node (before i 
<br>
was submitting it as a batch job), the C test passes, but the configure 
<br>
is picking up g77 instead gfortran, which fails the f77 tests since 
<br>
gcc-4.2.0 doesn't have g77..
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yoinks.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does the corresponding config.log say?  It should contain the  
</span><br>
<span class="quotelev1">&gt; exact error that occurred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This configure test is simply checking to see if the C compiler  
</span><br>
<span class="quotelev1">&gt; works.  IIRC, it's trying to compile, link, and run a trivial C  
</span><br>
<span class="quotelev1">&gt; application (something akin to &quot;hello world&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2007, at 1:30 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hey all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to execute the collective bakeoff tests for OMPI,  
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2, and
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH2. OMPI and MPICH2 are working out fine, However when  
</span><br>
<span class="quotelev2">&gt;&gt; MVAPICH2 is
</span><br>
<span class="quotelev2">&gt;&gt; configuring, it gives an error with the C compiler, pasted at the  
</span><br>
<span class="quotelev2">&gt;&gt; end..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that I get the error when im running the mtt client. When i go in
</span><br>
<span class="quotelev2">&gt;&gt; the scratch directory to the MVAPICH2 sources and configure it myself,
</span><br>
<span class="quotelev2">&gt;&gt; with the same configure arguments that it did from config.log, it  
</span><br>
<span class="quotelev2">&gt;&gt; works
</span><br>
<span class="quotelev2">&gt;&gt; out fine..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ive been banging my head a while now to figure this out, but i got
</span><br>
<span class="quotelev2">&gt;&gt; nowhere. Probably it's some environment settings being messed up
</span><br>
<span class="quotelev2">&gt;&gt; somewhere, but i don't know..
</span><br>
<span class="quotelev2">&gt;&gt; If anyone has stumbled upon this before, let me know..
</span><br>
<span class="quotelev2">&gt;&gt; I attached my ini file..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Configuring MVAPICH2...
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev2">&gt;&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/ 
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev2">&gt;&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev2">&gt;&gt; OUT:sourcing
</span><br>
<span class="quotelev2">&gt;&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev2">&gt;&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for gcc... OUT:gcc
</span><br>
<span class="quotelev2">&gt;&gt; OUT:checking for C compiler default output file name... OUT:configure:
</span><br>
<span class="quotelev2">&gt;&gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev2">&gt;&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev2">&gt;&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/ 
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev2">&gt;&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev2">&gt;&gt;    sourcing
</span><br>
<span class="quotelev2">&gt;&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev2">&gt;&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev2">&gt;&gt;    checking for gcc... gcc
</span><br>
<span class="quotelev2">&gt;&gt;    checking for C compiler default output file name... configure:  
</span><br>
<span class="quotelev2">&gt;&gt; error: C
</span><br>
<span class="quotelev2">&gt;&gt;    compiler cannot create executables
</span><br>
<span class="quotelev2">&gt;&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev2">&gt;&gt; OUT:Failure in configuration.
</span><br>
<span class="quotelev2">&gt;&gt;    Please file an error report to mvapich-discuss_at_cse.ohio- 
</span><br>
<span class="quotelev2">&gt;&gt; state.edu with
</span><br>
<span class="quotelev2">&gt;&gt;    all your log files.
</span><br>
<span class="quotelev2">&gt;&gt; Command complete, exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev2">&gt;&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MTT]
</span><br>
<span class="quotelev2">&gt;&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev2">&gt;&gt; # database
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev2">&gt;&gt; description = [testbake]
</span><br>
<span class="quotelev2">&gt;&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real  
</span><br>
<span class="quotelev2">&gt;&gt; results
</span><br>
<span class="quotelev2">&gt;&gt; trial = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Lock]
</span><br>
<span class="quotelev2">&gt;&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Download
</span><br>
<span class="quotelev2">&gt;&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/">http://mvapich.cse.ohio-state.edu/download/mvapich2/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2-0.9.8p3.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Install MPI phase
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_get = mvapich2
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt;&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev2">&gt;&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev2">&gt;&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev2">&gt;&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev2">&gt;&gt; prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = MVAPICH2
</span><br>
<span class="quotelev2">&gt;&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev2">&gt;&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
</span><br>
<span class="quotelev2">&gt;&gt; mvapich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # MPI run details
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev2">&gt;&gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev2">&gt;&gt; # happen).
</span><br>
<span class="quotelev2">&gt;&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev2">&gt;&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt;&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev2">&gt;&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev2">&gt;&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Test get phase
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: skampi]
</span><br>
<span class="quotelev2">&gt;&gt; module = SVN
</span><br>
<span class="quotelev2">&gt;&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Test build phase
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: skampi]
</span><br>
<span class="quotelev2">&gt;&gt; test_get = skampi
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Shell
</span><br>
<span class="quotelev2">&gt;&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Test Run phase
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: skampi]
</span><br>
<span class="quotelev2">&gt;&gt; test_build = skampi
</span><br>
<span class="quotelev2">&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could  
</span><br>
<span class="quotelev2">&gt;&gt; be lost!
</span><br>
<span class="quotelev2">&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt;&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Reporter phase
</span><br>
<span class="quotelev2">&gt;&gt; #===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev2">&gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev2">&gt;&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_username = uh
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mschaara/mtt-testing/ 
</span><br>
<span class="quotelev2">&gt;&gt; mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev2">&gt;&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_platform = shark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev2">&gt;&gt; # file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev2">&gt;&gt; module = TextFile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_summary_footer =
</span><br>
<span class="quotelev2">&gt;&gt; textfile_detail_header =
</span><br>
<span class="quotelev2">&gt;&gt; textfile_detail_footer =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>
<p>
This file contains any messages produced by compilers while
<br>
running configure, to aid debugging if configure makes a mistake.
<br>
<p>It was created by configure, which was
<br>
generated by GNU Autoconf 2.59.  Invocation command line was
<br>
<p>&nbsp;&nbsp;$ ./configure --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd --disable-romio --without-mpe
<br>
<p>## --------- ##
<br>
## Platform. ##
<br>
## --------- ##
<br>
<p>hostname = shark01
<br>
uname -m = x86_64
<br>
uname -r = 2.6.16.21-smp
<br>
uname -s = Linux
<br>
uname -v = #2 SMP Thu Mar 1 10:09:02 CST 2007
<br>
<p>/usr/bin/uname -p = unknown
<br>
/bin/uname -X     = unknown
<br>
<p>/bin/arch              = x86_64
<br>
/usr/bin/arch -k       = unknown
<br>
/usr/convex/getsysinfo = unknown
<br>
hostinfo               = unknown
<br>
/bin/machine           = unknown
<br>
/usr/bin/oslevel       = unknown
<br>
/bin/universe          = unknown
<br>
<p>PATH: /opt/papi-3.5.0/bin
<br>
PATH: /home/mschaara/OpenMPI/bin
<br>
PATH: /opt/gcc-4.2.0/bin
<br>
PATH: /opt/SLURM/bin
<br>
PATH: /opt/papi-3.5.0/bin
<br>
PATH: /home/mschaara/OpenMPI/bin
<br>
PATH: /opt/gcc-4.2.0/bin
<br>
PATH: /opt/SLURM/bin
<br>
PATH: /opt/papi-3.5.0/bin
<br>
PATH: /home/mschaara/OpenMPI/bin
<br>
PATH: /opt/gcc-4.2.0/bin
<br>
PATH: /opt/SLURM/bin
<br>
PATH: /home/mschaara/bin
<br>
PATH: /usr/local/bin
<br>
PATH: /usr/bin
<br>
PATH: /usr/X11R6/bin
<br>
PATH: /bin
<br>
PATH: /usr/games
<br>
PATH: /opt/bin
<br>
PATH: /opt/gnome/bin
<br>
PATH: /opt/kde3/bin
<br>
PATH: /usr/lib64/jvm/jre/bin
<br>
PATH: /opt/c3-4/
<br>
PATH: /usr/local/ofed/bin
<br>
PATH: /usr/lib/mit/bin
<br>
PATH: /usr/lib/mit/sbin
<br>
PATH: /usr/local/ofed/sbin
<br>
<p><p>## ----------- ##
<br>
## Core tests. ##
<br>
## ----------- ##
<br>
<p>configure:2720: checking for gcc
<br>
configure:2746: result: gcc
<br>
configure:2990: checking for C compiler version
<br>
configure:2993: gcc --version &lt;/dev/null &gt;&amp;5
<br>
gcc (GCC) 4.2.0
<br>
Copyright (C) 2007 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>configure:2996: $? = 0
<br>
configure:2998: gcc -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: x86_64-unknown-linux-gnu
<br>
Configured with: ../gcc-4.2.0/configure --prefix=/opt/gcc-4.2.0/ --disable-multilib --enable-languages=c,c++,fortran,java
<br>
Thread model: posix
<br>
gcc version 4.2.0
<br>
configure:3001: $? = 0
<br>
configure:3003: gcc -V &lt;/dev/null &gt;&amp;5
<br>
gcc: '-V' option must have argument
<br>
configure:3006: $? = 1
<br>
configure:3029: checking for C compiler default output file name
<br>
configure:3032: gcc -D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/include -O2   conftest.c -L/usr/local/ofed/lib64   -libverbs -libumad -lpthread &gt;&amp;5
<br>
/usr/bin/ld: cannot find -libumad
<br>
collect2: ld returned 1 exit status
<br>
configure:3035: $? = 1
<br>
configure: failed program was:
<br>
| /* confdefs.h.  */
<br>
| 
<br>
| #define PACKAGE_NAME &quot;&quot;
<br>
| #define PACKAGE_TARNAME &quot;&quot;
<br>
| #define PACKAGE_VERSION &quot;&quot;
<br>
| #define PACKAGE_STRING &quot;&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;&quot;
<br>
| #define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
<br>
| #define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
<br>
| #define USE_LOGGING MPID_LOGGING_NONE
<br>
| #define MPICH_SINGLE_THREADED 1
<br>
| #define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
<br>
| #define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
<br>
| /* end confdefs.h.  */
<br>
| 
<br>
| int
<br>
| main ()
<br>
| {
<br>
| 
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:3074: error: C compiler cannot create executables
<br>
See `config.log' for more details.
<br>
<p>## ---------------- ##
<br>
## Cache variables. ##
<br>
## ---------------- ##
<br>
<p>ac_cv_env_CC_set=set
<br>
ac_cv_env_CC_value=gcc
<br>
ac_cv_env_CFLAGS_set=set
<br>
ac_cv_env_CFLAGS_value='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/include -O2'
<br>
ac_cv_env_CPPFLAGS_set=
<br>
ac_cv_env_CPPFLAGS_value=
<br>
ac_cv_env_CPP_set=
<br>
ac_cv_env_CPP_value=
<br>
ac_cv_env_CXXFLAGS_set=
<br>
ac_cv_env_CXXFLAGS_value=
<br>
ac_cv_env_CXX_set=set
<br>
ac_cv_env_CXX_value=g++
<br>
ac_cv_env_F77_set=set
<br>
ac_cv_env_F77_value=g77
<br>
ac_cv_env_F90FLAGS_set=
<br>
ac_cv_env_F90FLAGS_value=
<br>
ac_cv_env_F90_set=set
<br>
ac_cv_env_F90_value=
<br>
ac_cv_env_FFLAGS_set=set
<br>
ac_cv_env_FFLAGS_value=-L/usr/local/ofed/lib64
<br>
ac_cv_env_LDFLAGS_set=
<br>
ac_cv_env_LDFLAGS_value=
<br>
ac_cv_env_build_alias_set=
<br>
ac_cv_env_build_alias_value=
<br>
ac_cv_env_host_alias_set=
<br>
ac_cv_env_host_alias_value=
<br>
ac_cv_env_target_alias_set=
<br>
ac_cv_env_target_alias_value=
<br>
ac_cv_prog_ac_ct_CC=gcc
<br>
pac_cv_my_conf_dir=/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/src/mvapich2-0.9.8p3
<br>
<p>## ----------------- ##
<br>
## Output variables. ##
<br>
## ----------------- ##
<br>
<p>ADDRESS_KIND=''
<br>
ALLOCA=''
<br>
AR=''
<br>
BSEND_OVERHEAD=''
<br>
BUILD_TVDLL=''
<br>
CC='gcc'
<br>
CC_SHL=''
<br>
CC_SHL_DBG=''
<br>
CFLAGS='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/include -O2'
<br>
CONFIGURE_ARGUMENTS='--prefix=/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd --disable-romio --without-mpe'
<br>
CPP=''
<br>
CPPFLAGS=''
<br>
CREATESHLIB=''
<br>
CXX='g++'
<br>
CXXFLAGS=''
<br>
CXX_LINKPATH_SHL=''
<br>
CXX_SHL=''
<br>
C_LINKPATH_SHL=''
<br>
C_LINK_SHL=''
<br>
C_LINK_SHL_DBG=''
<br>
DEFS=''
<br>
DEVICE='osu_ch3:mrail'
<br>
DLLIMPORT=''
<br>
DOCTEXT=''
<br>
DOCTEXTSTYLE=''
<br>
ECHO_C=''
<br>
ECHO_N='-n'
<br>
ECHO_T=''
<br>
EGREP=''
<br>
ENABLE_SHLIB=''
<br>
ETAGS=''
<br>
ETAGSADD=''
<br>
EXAMPLE_LIBS=''
<br>
EXEEXT=''
<br>
EXTERNAL_SRC_DIRS=''
<br>
EXTRA_STATUS_DECL=''
<br>
F77='g77'
<br>
F77CPP=''
<br>
F77_COMPLEX16=''
<br>
F77_COMPLEX32=''
<br>
F77_COMPLEX8=''
<br>
F77_INCDIR=''
<br>
F77_INTEGER16=''
<br>
F77_INTEGER1=''
<br>
F77_INTEGER2=''
<br>
F77_INTEGER4=''
<br>
F77_INTEGER8=''
<br>
F77_IN_C_LIBS=''
<br>
F77_LIBDIR_LEADER=''
<br>
F77_NAME_MANGLE=''
<br>
F77_REAL16=''
<br>
F77_REAL4=''
<br>
F77_REAL8=''
<br>
F90=''
<br>
F90CPP=''
<br>
F90EXT=''
<br>
F90FLAGS=''
<br>
F90INC=''
<br>
F90INCFLAG=''
<br>
F90MODEXT=''
<br>
F90MODINCFLAG=''
<br>
F90MODINCSPEC=''
<br>
F90_LINKPATH_SHL=''
<br>
F90_SHL=''
<br>
F90_WORK_FILES_ARG=''
<br>
FC=''
<br>
FC_LINKPATH_SHL=''
<br>
FC_SHL=''
<br>
FFLAGS='-L/usr/local/ofed/lib64'
<br>
FINCLUDES=''
<br>
FLIBS=''
<br>
FWRAPNAME='fmpich'
<br>
GCC=''
<br>
HAVE_CXX_EXCEPTIONS=''
<br>
HAVE_ROMIO=''
<br>
INCLUDE_MPICXX_H=''
<br>
INSTALL_DATA=''
<br>
INSTALL_PROGRAM=''
<br>
INSTALL_SCRIPT=''
<br>
INT16_T=''
<br>
INT32_T=''
<br>
INT64_T=''
<br>
LDFLAGS=''
<br>
LIBOBJS=''
<br>
LIBS='-L/usr/local/ofed/lib64   -libverbs -libumad -lpthread'
<br>
LIBTOOL=''
<br>
LTLIBOBJS=''
<br>
MAKE=''
<br>
MAKE_DEPEND_C=''
<br>
MANY_PM='no'
<br>
MKDIR_P=''
<br>
MPE_THREAD_LIB_NAME=''
<br>
MPICC=''
<br>
MPICH_TIMER_KIND=''
<br>
MPICVSHOME=''
<br>
MPICXX=''
<br>
MPICXXLIBNAME='mpichcxx'
<br>
MPID_TIMER_TYPE=''
<br>
MPIF77=''
<br>
MPIF90=''
<br>
MPIFLIBNAME='mpich'
<br>
MPIFPMPI=''
<br>
MPILIBNAME='mpich'
<br>
MPIMODNAME=''
<br>
MPIU_DLL_SPEC_DEF=''
<br>
MPI_2COMPLEX=''
<br>
MPI_2DOUBLE_COMPLEX=''
<br>
MPI_2DOUBLE_PRECISION=''
<br>
MPI_2INT=''
<br>
MPI_2INTEGER=''
<br>
MPI_2REAL=''
<br>
MPI_AINT=''
<br>
MPI_BYTE=''
<br>
MPI_CFLAGS=''
<br>
MPI_CHAR=''
<br>
MPI_CHARACTER=''
<br>
MPI_COMPLEX16=''
<br>
MPI_COMPLEX32=''
<br>
MPI_COMPLEX8=''
<br>
MPI_COMPLEX=''
<br>
MPI_CXXFLAGS=''
<br>
MPI_DOUBLE=''
<br>
MPI_DOUBLE_COMPLEX=''
<br>
MPI_DOUBLE_INT=''
<br>
MPI_DOUBLE_PRECISION=''
<br>
MPI_F77_BYTE=''
<br>
MPI_F77_LB=''
<br>
MPI_F77_PACKED=''
<br>
MPI_F77_UB=''
<br>
MPI_F90FLAGS='-O2'
<br>
MPI_FFLAGS=''
<br>
MPI_FINT=''
<br>
MPI_FLOAT=''
<br>
MPI_FLOAT_INT=''
<br>
MPI_INT=''
<br>
MPI_INTEGER16=''
<br>
MPI_INTEGER1=''
<br>
MPI_INTEGER2=''
<br>
MPI_INTEGER4=''
<br>
MPI_INTEGER8=''
<br>
MPI_INTEGER=''
<br>
MPI_LB=''
<br>
MPI_LDFLAGS=''
<br>
MPI_LOGICAL=''
<br>
MPI_LONG=''
<br>
MPI_LONG_DOUBLE=''
<br>
MPI_LONG_DOUBLE_INT=''
<br>
MPI_LONG_INT=''
<br>
MPI_LONG_LONG=''
<br>
MPI_MAX_PROCESSOR_NAME=''
<br>
MPI_OFFSET=''
<br>
MPI_OFFSET_TYPEDEF=''
<br>
MPI_PACKED=''
<br>
MPI_REAL16=''
<br>
MPI_REAL4=''
<br>
MPI_REAL8=''
<br>
MPI_REAL=''
<br>
MPI_SHORT=''
<br>
MPI_SHORT_INT=''
<br>
MPI_SIGNED_CHAR=''
<br>
MPI_STATUS_SIZE=''
<br>
MPI_UB=''
<br>
MPI_UNSIGNED_CHAR=''
<br>
MPI_UNSIGNED_INT=''
<br>
MPI_UNSIGNED_LONG=''
<br>
MPI_UNSIGNED_LONG_LONG=''
<br>
MPI_UNSIGNED_SHORT=''
<br>
MPI_WCHAR=''
<br>
NEEDSPLIB=''
<br>
NO_WEAK_SYM=''
<br>
NO_WEAK_SYM_TARGET=''
<br>
OBJEXT=''
<br>
OFFSET_KIND=''
<br>
PACKAGE_BUGREPORT='mpich2-maint_at_[hidden]'
<br>
PACKAGE_NAME='MPICH2'
<br>
PACKAGE_STRING=''
<br>
PACKAGE_TARNAME='mpich2-MVAPICH2-0.9.8'
<br>
PACKAGE_VERSION='MVAPICH2-0.9.8'
<br>
PATH_SEPARATOR=':'
<br>
PERL5=''
<br>
PERL=''
<br>
PMPIFLIBNAME='pmpich'
<br>
PMPILIBNAME='pmpich'
<br>
PROFILE_DEF_MPI=''
<br>
RANLIB=''
<br>
RANLIB_AFTER_INSTALL=''
<br>
SET_CFLAGS=''
<br>
SET_MAKE=''
<br>
SHELL='/bin/sh'
<br>
SHLIB_EXT=''
<br>
SHLIB_FROM_LO=''
<br>
SHLIB_INSTALL=''
<br>
SIZEOF_MPI_STATUS=''
<br>
TESTCPP=''
<br>
THR_CFLAGS=''
<br>
THR_CPPFLAGS=''
<br>
THR_DEFS=''
<br>
THR_LDFLAGS=''
<br>
THR_LIBS=''
<br>
VERSION='MVAPICH2-0.9.8'
<br>
VPATH=''
<br>
ac_ct_CC='gcc'
<br>
ac_ct_CXX=''
<br>
ac_ct_F77=''
<br>
ac_ct_F90=''
<br>
ac_ct_RANLIB=''
<br>
bindings=''
<br>
bindings_dirs=''
<br>
bindir='${exec_prefix}/bin'
<br>
build_alias=''
<br>
datadir='${prefix}/share'
<br>
debugger_dir=''
<br>
device_name='osu_ch3'
<br>
docdir='${prefix}/doc'
<br>
exec_prefix='NONE'
<br>
host_alias=''
<br>
htmldir='${prefix}/www'
<br>
includedir='${prefix}/include'
<br>
infodir='${prefix}/info'
<br>
libdir='${exec_prefix}/lib'
<br>
libexecdir='${exec_prefix}/libexec'
<br>
localstatedir='${prefix}/var'
<br>
logging_dir=''
<br>
logging_name='none'
<br>
logging_subdirs=''
<br>
mandir='${prefix}/man'
<br>
master_top_builddir='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/src/mvapich2-0.9.8p3'
<br>
master_top_srcdir='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/src/mvapich2-0.9.8p3'
<br>
modincdir=''
<br>
mpe_dir=''
<br>
nameserv_name=''
<br>
oldincludedir='/usr/include'
<br>
other_install_dirs=' src/pm/mpd'
<br>
other_pm_names=''
<br>
pac_prog=''
<br>
pm_name='mpd'
<br>
pmi_name='simple'
<br>
prefix='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install'
<br>
program_transform_name='s,x,x,'
<br>
romio_dir=''
<br>
sbindir='${exec_prefix}/sbin'
<br>
sharedstatedir='${prefix}/com'
<br>
subdirs=''
<br>
subsystems=' src/pmi/simple src/pm/mpd'
<br>
sysconfdir='${prefix}/etc'
<br>
target_alias=''
<br>
<p>## ------------- ##
<br>
## Output files. ##
<br>
## ------------- ##
<br>
<p>MPE_THREAD_FUNCS=''
<br>
MPE_THREAD_TYPEDEFS=''
<br>
<p>## ----------- ##
<br>
## confdefs.h. ##
<br>
## ----------- ##
<br>
<p>#define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
<br>
#define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
<br>
#define MPICH_SINGLE_THREADED 1
<br>
#define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
<br>
#define PACKAGE_BUGREPORT &quot;&quot;
<br>
#define PACKAGE_NAME &quot;&quot;
<br>
#define PACKAGE_STRING &quot;&quot;
<br>
#define PACKAGE_TARNAME &quot;&quot;
<br>
#define PACKAGE_VERSION &quot;&quot;
<br>
#define USE_LOGGING MPID_LOGGING_NONE
<br>
#define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
<br>
<p>configure: exit 77
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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
