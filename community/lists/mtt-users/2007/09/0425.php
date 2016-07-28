<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 15:12:08 2007" -->
<!-- isoreceived="20070921191208" -->
<!-- sent="Fri, 21 Sep 2007 15:06:27 -0400" -->
<!-- isosent="20070921190627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MVAPICH2 configuring problems" -->
<!-- id="E3A20B17-8F42-4FDE-97A4-2555294682E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F40EA4.6010609_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2007-09-21 15:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2007, at 2:34 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; Attached..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; something to do with libumad i guess..
</span><br>
<p>configure:3032: gcc -D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  - 
<br>
DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ 
<br>
ofed/include -O2   conftest.c -L/usr/local/ofed/lib64   -libverbs - 
<br>
libumad -lpthread &gt;&amp;5
<br>
/usr/bin/ld: cannot find -libumad
<br>
<p>Weird.  I see that both MVAPICH and MVAPICH2 hard-code LIBS to  
<br>
include -lumad.
<br>
<p>What version of OFED do you have installed?  I don't remember if  
<br>
libumad was something new in OFED 1.2 or not (I see it installed via  
<br>
OFED 1.2 but I don't have any machines left that have OFED 1.1  
<br>
installed).
<br>
<p>You may want to run it by hand and run it through MTT and compare the  
<br>
config.logs -- *something* is different if it works by hand and  
<br>
doesn't work via MTT...
<br>
<p>See below.
<br>
<p><span class="quotelev1">&gt; interesting enough, if i run mtt driectly from the head node  
</span><br>
<span class="quotelev1">&gt; (before i was submitting it as a batch job), the C test passes, but  
</span><br>
<span class="quotelev1">&gt; the configure is picking up g77 instead gfortran, which fails the  
</span><br>
<span class="quotelev1">&gt; f77 tests since gcc-4.2.0 doesn't have g77..
</span><br>
<p>Looking through their two make.* scripts, you can setenv F77 in the  
<br>
MPI install section to override this.  This will override their hard- 
<br>
coded default of g77.
<br>
<p>Similarly, you can override their settings of -lumad by setenv'ing  
<br>
your own LIBS in the MPI install section.  Look at their make.*  
<br>
scripts to see the values that they're setting and then set your own  
<br>
override without -lumad (if that's the proper solution).
<br>
<p>Make sense?
<br>
<p><p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yoinks.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does the corresponding config.log say?  It should contain  
</span><br>
<span class="quotelev2">&gt;&gt; the  exact error that occurred.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This configure test is simply checking to see if the C compiler   
</span><br>
<span class="quotelev2">&gt;&gt; works.  IIRC, it's trying to compile, link, and run a trivial C   
</span><br>
<span class="quotelev2">&gt;&gt; application (something akin to &quot;hello world&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 21, 2007, at 1:30 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to execute the collective bakeoff tests for OMPI,   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH2, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH2. OMPI and MPICH2 are working out fine, However when   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MVAPICH2 is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuring, it gives an error with the C compiler, pasted at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the  end..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that I get the error when im running the mtt client. When i  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the scratch directory to the MVAPICH2 sources and configure it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myself,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the same configure arguments that it did from config.log,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it  works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out fine..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ive been banging my head a while now to figure this out, but i got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nowhere. Probably it's some environment settings being messed up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somewhere, but i don't know..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anyone has stumbled upon this before, let me know..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attached my ini file..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:Configuring MVAPICH2...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NhjQ/ install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:sourcing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:checking for gcc... OUT:gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:checking for C compiler default output file name...  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NhjQ/ install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sourcing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    checking for gcc... gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    checking for C compiler default output file name...  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:  error: C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    compiler cannot create executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT:Failure in configuration.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Please file an error report to mvapich-discuss_at_cse.ohio-  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state.edu with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    all your log files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Command complete, exit status: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [MTT]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # database
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; description = [testbake]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trial = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Lock]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = Download
</span><br>
<span class="quotelev3">&gt;&gt;&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/">http://mvapich.cse.ohio-state.edu/download/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2/ mvapich2-0.9.8p3.tar.gz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Install MPI phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_get = mvapich2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Adjust this for your site (this is what works at Cisco).   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Needed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = MVAPICH2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPI run details
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ensure that multiple mpd's on the same node don't conflict (or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # happen).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Test get phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Test get: skampi]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = SVN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Test build phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Test build: skampi]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_get = skampi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = Shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Test Run phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Test run: skampi]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_build = skampi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could  be lost!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Reporter phase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_username = uh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mschaara/mtt- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing/ mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_platform = shark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = TextFile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; textfile_summary_footer =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; textfile_detail_header =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; textfile_detail_footer =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev1">&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was created by configure, which was
</span><br>
<span class="quotelev1">&gt; generated by GNU Autoconf 2.59.  Invocation command line was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ ./configure --prefix=/home/mschaara/mtt-testing/scratch-coll/ 
</span><br>
<span class="quotelev1">&gt; installs/UvUA/install --with-device=osu_ch3:mrail --with-rdma=gen2  
</span><br>
<span class="quotelev1">&gt; --with-pm=mpd --disable-romio --without-mpe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt; ## Platform. ##
</span><br>
<span class="quotelev1">&gt; ## --------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostname = shark01
</span><br>
<span class="quotelev1">&gt; uname -m = x86_64
</span><br>
<span class="quotelev1">&gt; uname -r = 2.6.16.21-smp
</span><br>
<span class="quotelev1">&gt; uname -s = Linux
</span><br>
<span class="quotelev1">&gt; uname -v = #2 SMP Thu Mar 1 10:09:02 CST 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev1">&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/arch              = x86_64
</span><br>
<span class="quotelev1">&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev1">&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev1">&gt; hostinfo               = unknown
</span><br>
<span class="quotelev1">&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev1">&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev1">&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH: /opt/papi-3.5.0/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/mschaara/OpenMPI/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/gcc-4.2.0/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/SLURM/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/papi-3.5.0/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/mschaara/OpenMPI/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/gcc-4.2.0/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/SLURM/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/papi-3.5.0/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/mschaara/OpenMPI/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/gcc-4.2.0/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/SLURM/bin
</span><br>
<span class="quotelev1">&gt; PATH: /home/mschaara/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/X11R6/bin
</span><br>
<span class="quotelev1">&gt; PATH: /bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/games
</span><br>
<span class="quotelev1">&gt; PATH: /opt/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/gnome/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/kde3/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/lib64/jvm/jre/bin
</span><br>
<span class="quotelev1">&gt; PATH: /opt/c3-4/
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/ofed/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/lib/mit/bin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/lib/mit/sbin
</span><br>
<span class="quotelev1">&gt; PATH: /usr/local/ofed/sbin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## Core tests. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:2720: checking for gcc
</span><br>
<span class="quotelev1">&gt; configure:2746: result: gcc
</span><br>
<span class="quotelev1">&gt; configure:2990: checking for C compiler version
</span><br>
<span class="quotelev1">&gt; configure:2993: gcc --version &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.2.0
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.   
</span><br>
<span class="quotelev1">&gt; There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:2996: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:2998: gcc -v &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc-4.2.0/configure --prefix=/opt/gcc-4.2.0/ -- 
</span><br>
<span class="quotelev1">&gt; disable-multilib --enable-languages=c,c++,fortran,java
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.0
</span><br>
<span class="quotelev1">&gt; configure:3001: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:3003: gcc -V &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gcc: '-V' option must have argument
</span><br>
<span class="quotelev1">&gt; configure:3006: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:3029: checking for C compiler default output file name
</span><br>
<span class="quotelev1">&gt; configure:3032: gcc -D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  - 
</span><br>
<span class="quotelev1">&gt; DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/ 
</span><br>
<span class="quotelev1">&gt; local/ofed/include -O2   conftest.c -L/usr/local/ofed/lib64   - 
</span><br>
<span class="quotelev1">&gt; libverbs -libumad -lpthread &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -libumad
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:3035: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_NAME &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_TARNAME &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_STRING &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev1">&gt; | #define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
</span><br>
<span class="quotelev1">&gt; | #define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
</span><br>
<span class="quotelev1">&gt; | #define USE_LOGGING MPID_LOGGING_NONE
</span><br>
<span class="quotelev1">&gt; | #define MPICH_SINGLE_THREADED 1
</span><br>
<span class="quotelev1">&gt; | #define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
</span><br>
<span class="quotelev1">&gt; | #define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
</span><br>
<span class="quotelev1">&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | int
</span><br>
<span class="quotelev1">&gt; | main ()
</span><br>
<span class="quotelev1">&gt; | {
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   ;
</span><br>
<span class="quotelev1">&gt; |   return 0;
</span><br>
<span class="quotelev1">&gt; | }
</span><br>
<span class="quotelev1">&gt; configure:3074: error: C compiler cannot create executables
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt; ## Cache variables. ##
</span><br>
<span class="quotelev1">&gt; ## ---------------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CC_value=gcc
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CFLAGS_value='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  - 
</span><br>
<span class="quotelev1">&gt; DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/ 
</span><br>
<span class="quotelev1">&gt; local/ofed/include -O2'
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPPFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPPFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPP_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CPP_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXXFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXX_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_CXX_value=g++
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F77_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F77_value=g77
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F90FLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F90FLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F90_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_F90_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FFLAGS_set=set
</span><br>
<span class="quotelev1">&gt; ac_cv_env_FFLAGS_value=-L/usr/local/ofed/lib64
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_LDFLAGS_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_build_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_build_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_host_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_host_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_target_alias_set=
</span><br>
<span class="quotelev1">&gt; ac_cv_env_target_alias_value=
</span><br>
<span class="quotelev1">&gt; ac_cv_prog_ac_ct_CC=gcc
</span><br>
<span class="quotelev1">&gt; pac_cv_my_conf_dir=/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev1">&gt; UvUA/src/mvapich2-0.9.8p3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ----------------- ##
</span><br>
<span class="quotelev1">&gt; ## Output variables. ##
</span><br>
<span class="quotelev1">&gt; ## ----------------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ADDRESS_KIND=''
</span><br>
<span class="quotelev1">&gt; ALLOCA=''
</span><br>
<span class="quotelev1">&gt; AR=''
</span><br>
<span class="quotelev1">&gt; BSEND_OVERHEAD=''
</span><br>
<span class="quotelev1">&gt; BUILD_TVDLL=''
</span><br>
<span class="quotelev1">&gt; CC='gcc'
</span><br>
<span class="quotelev1">&gt; CC_SHL=''
</span><br>
<span class="quotelev1">&gt; CC_SHL_DBG=''
</span><br>
<span class="quotelev1">&gt; CFLAGS='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED - 
</span><br>
<span class="quotelev1">&gt; DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/ 
</span><br>
<span class="quotelev1">&gt; include -O2'
</span><br>
<span class="quotelev1">&gt; CONFIGURE_ARGUMENTS='--prefix=/home/mschaara/mtt-testing/scratch- 
</span><br>
<span class="quotelev1">&gt; coll/installs/UvUA/install --with-device=osu_ch3:mrail --with- 
</span><br>
<span class="quotelev1">&gt; rdma=gen2 --with-pm=mpd --disable-romio --without-mpe'
</span><br>
<span class="quotelev1">&gt; CPP=''
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; CREATESHLIB=''
</span><br>
<span class="quotelev1">&gt; CXX='g++'
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; CXX_LINKPATH_SHL=''
</span><br>
<span class="quotelev1">&gt; CXX_SHL=''
</span><br>
<span class="quotelev1">&gt; C_LINKPATH_SHL=''
</span><br>
<span class="quotelev1">&gt; C_LINK_SHL=''
</span><br>
<span class="quotelev1">&gt; C_LINK_SHL_DBG=''
</span><br>
<span class="quotelev1">&gt; DEFS=''
</span><br>
<span class="quotelev1">&gt; DEVICE='osu_ch3:mrail'
</span><br>
<span class="quotelev1">&gt; DLLIMPORT=''
</span><br>
<span class="quotelev1">&gt; DOCTEXT=''
</span><br>
<span class="quotelev1">&gt; DOCTEXTSTYLE=''
</span><br>
<span class="quotelev1">&gt; ECHO_C=''
</span><br>
<span class="quotelev1">&gt; ECHO_N='-n'
</span><br>
<span class="quotelev1">&gt; ECHO_T=''
</span><br>
<span class="quotelev1">&gt; EGREP=''
</span><br>
<span class="quotelev1">&gt; ENABLE_SHLIB=''
</span><br>
<span class="quotelev1">&gt; ETAGS=''
</span><br>
<span class="quotelev1">&gt; ETAGSADD=''
</span><br>
<span class="quotelev1">&gt; EXAMPLE_LIBS=''
</span><br>
<span class="quotelev1">&gt; EXEEXT=''
</span><br>
<span class="quotelev1">&gt; EXTERNAL_SRC_DIRS=''
</span><br>
<span class="quotelev1">&gt; EXTRA_STATUS_DECL=''
</span><br>
<span class="quotelev1">&gt; F77='g77'
</span><br>
<span class="quotelev1">&gt; F77CPP=''
</span><br>
<span class="quotelev1">&gt; F77_COMPLEX16=''
</span><br>
<span class="quotelev1">&gt; F77_COMPLEX32=''
</span><br>
<span class="quotelev1">&gt; F77_COMPLEX8=''
</span><br>
<span class="quotelev1">&gt; F77_INCDIR=''
</span><br>
<span class="quotelev1">&gt; F77_INTEGER16=''
</span><br>
<span class="quotelev1">&gt; F77_INTEGER1=''
</span><br>
<span class="quotelev1">&gt; F77_INTEGER2=''
</span><br>
<span class="quotelev1">&gt; F77_INTEGER4=''
</span><br>
<span class="quotelev1">&gt; F77_INTEGER8=''
</span><br>
<span class="quotelev1">&gt; F77_IN_C_LIBS=''
</span><br>
<span class="quotelev1">&gt; F77_LIBDIR_LEADER=''
</span><br>
<span class="quotelev1">&gt; F77_NAME_MANGLE=''
</span><br>
<span class="quotelev1">&gt; F77_REAL16=''
</span><br>
<span class="quotelev1">&gt; F77_REAL4=''
</span><br>
<span class="quotelev1">&gt; F77_REAL8=''
</span><br>
<span class="quotelev1">&gt; F90=''
</span><br>
<span class="quotelev1">&gt; F90CPP=''
</span><br>
<span class="quotelev1">&gt; F90EXT=''
</span><br>
<span class="quotelev1">&gt; F90FLAGS=''
</span><br>
<span class="quotelev1">&gt; F90INC=''
</span><br>
<span class="quotelev1">&gt; F90INCFLAG=''
</span><br>
<span class="quotelev1">&gt; F90MODEXT=''
</span><br>
<span class="quotelev1">&gt; F90MODINCFLAG=''
</span><br>
<span class="quotelev1">&gt; F90MODINCSPEC=''
</span><br>
<span class="quotelev1">&gt; F90_LINKPATH_SHL=''
</span><br>
<span class="quotelev1">&gt; F90_SHL=''
</span><br>
<span class="quotelev1">&gt; F90_WORK_FILES_ARG=''
</span><br>
<span class="quotelev1">&gt; FC=''
</span><br>
<span class="quotelev1">&gt; FC_LINKPATH_SHL=''
</span><br>
<span class="quotelev1">&gt; FC_SHL=''
</span><br>
<span class="quotelev1">&gt; FFLAGS='-L/usr/local/ofed/lib64'
</span><br>
<span class="quotelev1">&gt; FINCLUDES=''
</span><br>
<span class="quotelev1">&gt; FLIBS=''
</span><br>
<span class="quotelev1">&gt; FWRAPNAME='fmpich'
</span><br>
<span class="quotelev1">&gt; GCC=''
</span><br>
<span class="quotelev1">&gt; HAVE_CXX_EXCEPTIONS=''
</span><br>
<span class="quotelev1">&gt; HAVE_ROMIO=''
</span><br>
<span class="quotelev1">&gt; INCLUDE_MPICXX_H=''
</span><br>
<span class="quotelev1">&gt; INSTALL_DATA=''
</span><br>
<span class="quotelev1">&gt; INSTALL_PROGRAM=''
</span><br>
<span class="quotelev1">&gt; INSTALL_SCRIPT=''
</span><br>
<span class="quotelev1">&gt; INT16_T=''
</span><br>
<span class="quotelev1">&gt; INT32_T=''
</span><br>
<span class="quotelev1">&gt; INT64_T=''
</span><br>
<span class="quotelev1">&gt; LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; LIBOBJS=''
</span><br>
<span class="quotelev1">&gt; LIBS='-L/usr/local/ofed/lib64   -libverbs -libumad -lpthread'
</span><br>
<span class="quotelev1">&gt; LIBTOOL=''
</span><br>
<span class="quotelev1">&gt; LTLIBOBJS=''
</span><br>
<span class="quotelev1">&gt; MAKE=''
</span><br>
<span class="quotelev1">&gt; MAKE_DEPEND_C=''
</span><br>
<span class="quotelev1">&gt; MANY_PM='no'
</span><br>
<span class="quotelev1">&gt; MKDIR_P=''
</span><br>
<span class="quotelev1">&gt; MPE_THREAD_LIB_NAME=''
</span><br>
<span class="quotelev1">&gt; MPICC=''
</span><br>
<span class="quotelev1">&gt; MPICH_TIMER_KIND=''
</span><br>
<span class="quotelev1">&gt; MPICVSHOME=''
</span><br>
<span class="quotelev1">&gt; MPICXX=''
</span><br>
<span class="quotelev1">&gt; MPICXXLIBNAME='mpichcxx'
</span><br>
<span class="quotelev1">&gt; MPID_TIMER_TYPE=''
</span><br>
<span class="quotelev1">&gt; MPIF77=''
</span><br>
<span class="quotelev1">&gt; MPIF90=''
</span><br>
<span class="quotelev1">&gt; MPIFLIBNAME='mpich'
</span><br>
<span class="quotelev1">&gt; MPIFPMPI=''
</span><br>
<span class="quotelev1">&gt; MPILIBNAME='mpich'
</span><br>
<span class="quotelev1">&gt; MPIMODNAME=''
</span><br>
<span class="quotelev1">&gt; MPIU_DLL_SPEC_DEF=''
</span><br>
<span class="quotelev1">&gt; MPI_2COMPLEX=''
</span><br>
<span class="quotelev1">&gt; MPI_2DOUBLE_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; MPI_2DOUBLE_PRECISION=''
</span><br>
<span class="quotelev1">&gt; MPI_2INT=''
</span><br>
<span class="quotelev1">&gt; MPI_2INTEGER=''
</span><br>
<span class="quotelev1">&gt; MPI_2REAL=''
</span><br>
<span class="quotelev1">&gt; MPI_AINT=''
</span><br>
<span class="quotelev1">&gt; MPI_BYTE=''
</span><br>
<span class="quotelev1">&gt; MPI_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; MPI_CHAR=''
</span><br>
<span class="quotelev1">&gt; MPI_CHARACTER=''
</span><br>
<span class="quotelev1">&gt; MPI_COMPLEX16=''
</span><br>
<span class="quotelev1">&gt; MPI_COMPLEX32=''
</span><br>
<span class="quotelev1">&gt; MPI_COMPLEX8=''
</span><br>
<span class="quotelev1">&gt; MPI_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; MPI_CXXFLAGS=''
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE=''
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_COMPLEX=''
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION=''
</span><br>
<span class="quotelev1">&gt; MPI_F77_BYTE=''
</span><br>
<span class="quotelev1">&gt; MPI_F77_LB=''
</span><br>
<span class="quotelev1">&gt; MPI_F77_PACKED=''
</span><br>
<span class="quotelev1">&gt; MPI_F77_UB=''
</span><br>
<span class="quotelev1">&gt; MPI_F90FLAGS='-O2'
</span><br>
<span class="quotelev1">&gt; MPI_FFLAGS=''
</span><br>
<span class="quotelev1">&gt; MPI_FINT=''
</span><br>
<span class="quotelev1">&gt; MPI_FLOAT=''
</span><br>
<span class="quotelev1">&gt; MPI_FLOAT_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER16=''
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER1=''
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER2=''
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER4=''
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER8=''
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER=''
</span><br>
<span class="quotelev1">&gt; MPI_LB=''
</span><br>
<span class="quotelev1">&gt; MPI_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; MPI_LOGICAL=''
</span><br>
<span class="quotelev1">&gt; MPI_LONG=''
</span><br>
<span class="quotelev1">&gt; MPI_LONG_DOUBLE=''
</span><br>
<span class="quotelev1">&gt; MPI_LONG_DOUBLE_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_LONG_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_LONG_LONG=''
</span><br>
<span class="quotelev1">&gt; MPI_MAX_PROCESSOR_NAME=''
</span><br>
<span class="quotelev1">&gt; MPI_OFFSET=''
</span><br>
<span class="quotelev1">&gt; MPI_OFFSET_TYPEDEF=''
</span><br>
<span class="quotelev1">&gt; MPI_PACKED=''
</span><br>
<span class="quotelev1">&gt; MPI_REAL16=''
</span><br>
<span class="quotelev1">&gt; MPI_REAL4=''
</span><br>
<span class="quotelev1">&gt; MPI_REAL8=''
</span><br>
<span class="quotelev1">&gt; MPI_REAL=''
</span><br>
<span class="quotelev1">&gt; MPI_SHORT=''
</span><br>
<span class="quotelev1">&gt; MPI_SHORT_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_SIGNED_CHAR=''
</span><br>
<span class="quotelev1">&gt; MPI_STATUS_SIZE=''
</span><br>
<span class="quotelev1">&gt; MPI_UB=''
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_CHAR=''
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_INT=''
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_LONG=''
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_LONG_LONG=''
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_SHORT=''
</span><br>
<span class="quotelev1">&gt; MPI_WCHAR=''
</span><br>
<span class="quotelev1">&gt; NEEDSPLIB=''
</span><br>
<span class="quotelev1">&gt; NO_WEAK_SYM=''
</span><br>
<span class="quotelev1">&gt; NO_WEAK_SYM_TARGET=''
</span><br>
<span class="quotelev1">&gt; OBJEXT=''
</span><br>
<span class="quotelev1">&gt; OFFSET_KIND=''
</span><br>
<span class="quotelev1">&gt; PACKAGE_BUGREPORT='mpich2-maint_at_[hidden]'
</span><br>
<span class="quotelev1">&gt; PACKAGE_NAME='MPICH2'
</span><br>
<span class="quotelev1">&gt; PACKAGE_STRING=''
</span><br>
<span class="quotelev1">&gt; PACKAGE_TARNAME='mpich2-MVAPICH2-0.9.8'
</span><br>
<span class="quotelev1">&gt; PACKAGE_VERSION='MVAPICH2-0.9.8'
</span><br>
<span class="quotelev1">&gt; PATH_SEPARATOR=':'
</span><br>
<span class="quotelev1">&gt; PERL5=''
</span><br>
<span class="quotelev1">&gt; PERL=''
</span><br>
<span class="quotelev1">&gt; PMPIFLIBNAME='pmpich'
</span><br>
<span class="quotelev1">&gt; PMPILIBNAME='pmpich'
</span><br>
<span class="quotelev1">&gt; PROFILE_DEF_MPI=''
</span><br>
<span class="quotelev1">&gt; RANLIB=''
</span><br>
<span class="quotelev1">&gt; RANLIB_AFTER_INSTALL=''
</span><br>
<span class="quotelev1">&gt; SET_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; SET_MAKE=''
</span><br>
<span class="quotelev1">&gt; SHELL='/bin/sh'
</span><br>
<span class="quotelev1">&gt; SHLIB_EXT=''
</span><br>
<span class="quotelev1">&gt; SHLIB_FROM_LO=''
</span><br>
<span class="quotelev1">&gt; SHLIB_INSTALL=''
</span><br>
<span class="quotelev1">&gt; SIZEOF_MPI_STATUS=''
</span><br>
<span class="quotelev1">&gt; TESTCPP=''
</span><br>
<span class="quotelev1">&gt; THR_CFLAGS=''
</span><br>
<span class="quotelev1">&gt; THR_CPPFLAGS=''
</span><br>
<span class="quotelev1">&gt; THR_DEFS=''
</span><br>
<span class="quotelev1">&gt; THR_LDFLAGS=''
</span><br>
<span class="quotelev1">&gt; THR_LIBS=''
</span><br>
<span class="quotelev1">&gt; VERSION='MVAPICH2-0.9.8'
</span><br>
<span class="quotelev1">&gt; VPATH=''
</span><br>
<span class="quotelev1">&gt; ac_ct_CC='gcc'
</span><br>
<span class="quotelev1">&gt; ac_ct_CXX=''
</span><br>
<span class="quotelev1">&gt; ac_ct_F77=''
</span><br>
<span class="quotelev1">&gt; ac_ct_F90=''
</span><br>
<span class="quotelev1">&gt; ac_ct_RANLIB=''
</span><br>
<span class="quotelev1">&gt; bindings=''
</span><br>
<span class="quotelev1">&gt; bindings_dirs=''
</span><br>
<span class="quotelev1">&gt; bindir='${exec_prefix}/bin'
</span><br>
<span class="quotelev1">&gt; build_alias=''
</span><br>
<span class="quotelev1">&gt; datadir='${prefix}/share'
</span><br>
<span class="quotelev1">&gt; debugger_dir=''
</span><br>
<span class="quotelev1">&gt; device_name='osu_ch3'
</span><br>
<span class="quotelev1">&gt; docdir='${prefix}/doc'
</span><br>
<span class="quotelev1">&gt; exec_prefix='NONE'
</span><br>
<span class="quotelev1">&gt; host_alias=''
</span><br>
<span class="quotelev1">&gt; htmldir='${prefix}/www'
</span><br>
<span class="quotelev1">&gt; includedir='${prefix}/include'
</span><br>
<span class="quotelev1">&gt; infodir='${prefix}/info'
</span><br>
<span class="quotelev1">&gt; libdir='${exec_prefix}/lib'
</span><br>
<span class="quotelev1">&gt; libexecdir='${exec_prefix}/libexec'
</span><br>
<span class="quotelev1">&gt; localstatedir='${prefix}/var'
</span><br>
<span class="quotelev1">&gt; logging_dir=''
</span><br>
<span class="quotelev1">&gt; logging_name='none'
</span><br>
<span class="quotelev1">&gt; logging_subdirs=''
</span><br>
<span class="quotelev1">&gt; mandir='${prefix}/man'
</span><br>
<span class="quotelev1">&gt; master_top_builddir='/home/mschaara/mtt-testing/scratch-coll/ 
</span><br>
<span class="quotelev1">&gt; installs/UvUA/src/mvapich2-0.9.8p3'
</span><br>
<span class="quotelev1">&gt; master_top_srcdir='/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev1">&gt; UvUA/src/mvapich2-0.9.8p3'
</span><br>
<span class="quotelev1">&gt; modincdir=''
</span><br>
<span class="quotelev1">&gt; mpe_dir=''
</span><br>
<span class="quotelev1">&gt; nameserv_name=''
</span><br>
<span class="quotelev1">&gt; oldincludedir='/usr/include'
</span><br>
<span class="quotelev1">&gt; other_install_dirs=' src/pm/mpd'
</span><br>
<span class="quotelev1">&gt; other_pm_names=''
</span><br>
<span class="quotelev1">&gt; pac_prog=''
</span><br>
<span class="quotelev1">&gt; pm_name='mpd'
</span><br>
<span class="quotelev1">&gt; pmi_name='simple'
</span><br>
<span class="quotelev1">&gt; prefix='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install'
</span><br>
<span class="quotelev1">&gt; program_transform_name='s,x,x,'
</span><br>
<span class="quotelev1">&gt; romio_dir=''
</span><br>
<span class="quotelev1">&gt; sbindir='${exec_prefix}/sbin'
</span><br>
<span class="quotelev1">&gt; sharedstatedir='${prefix}/com'
</span><br>
<span class="quotelev1">&gt; subdirs=''
</span><br>
<span class="quotelev1">&gt; subsystems=' src/pmi/simple src/pm/mpd'
</span><br>
<span class="quotelev1">&gt; sysconfdir='${prefix}/etc'
</span><br>
<span class="quotelev1">&gt; target_alias=''
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ------------- ##
</span><br>
<span class="quotelev1">&gt; ## Output files. ##
</span><br>
<span class="quotelev1">&gt; ## ------------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPE_THREAD_FUNCS=''
</span><br>
<span class="quotelev1">&gt; MPE_THREAD_TYPEDEFS=''
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt; ## confdefs.h. ##
</span><br>
<span class="quotelev1">&gt; ## ----------- ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
</span><br>
<span class="quotelev1">&gt; #define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
</span><br>
<span class="quotelev1">&gt; #define MPICH_SINGLE_THREADED 1
</span><br>
<span class="quotelev1">&gt; #define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_NAME &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_STRING &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_TARNAME &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define PACKAGE_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; #define USE_LOGGING MPID_LOGGING_NONE
</span><br>
<span class="quotelev1">&gt; #define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: exit 77
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
<li><strong>Next message:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0424.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0426.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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
