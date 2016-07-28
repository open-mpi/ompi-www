<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 16:48:42 2007" -->
<!-- isoreceived="20070921204842" -->
<!-- sent="Fri, 21 Sep 2007 15:48:37 -0500" -->
<!-- isosent="20070921204837" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT users] MVAPICH2 configuring problems" -->
<!-- id="46F42E25.8040109_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E3A20B17-8F42-4FDE-97A4-2555294682E6_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-21 16:48:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have ofed 1.1 installed..
<br>
I looked in the lib64 dir, there is something called libibumad..
<br>
BUT anyway i tried what u told with setenvying the variables myself in 
<br>
the ini file:
<br>
<p>mvapich2_setenv = F77 gfortran
<br>
mvapich2_setenv = LIBS -L/usr/local/ofed/lib64 -libverbs -lpthread
<br>
<p>and that worked fine :)
<br>
<p>in their make.* file however when they set LIB they had
<br>
-L${OPEN_IB_LIB} ${BLCR_LIB} ${RDMA_CM_LIBS} -libverbs -libumad -lpthread
<br>
i tried using the variables instead of hardcoding the 
<br>
(/usr/local/ofed/lib64), but it wouldn't translate them.
<br>
mvapich2_setenv = LIBS -L${OPEN_IB_LIB} ${BLCR_LIB} ${RDMA_CM_LIBS} 
<br>
-libverbs -lpthread
<br>
is there a way for setenv to do as they did with export?
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 21, 2007, at 2:34 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Attached..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; something to do with libumad i guess..
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:3032: gcc -D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  - 
</span><br>
<span class="quotelev1">&gt; DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ 
</span><br>
<span class="quotelev1">&gt; ofed/include -O2   conftest.c -L/usr/local/ofed/lib64   -libverbs - 
</span><br>
<span class="quotelev1">&gt; libumad -lpthread &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -libumad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Weird.  I see that both MVAPICH and MVAPICH2 hard-code LIBS to  
</span><br>
<span class="quotelev1">&gt; include -lumad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of OFED do you have installed?  I don't remember if  
</span><br>
<span class="quotelev1">&gt; libumad was something new in OFED 1.2 or not (I see it installed via  
</span><br>
<span class="quotelev1">&gt; OFED 1.2 but I don't have any machines left that have OFED 1.1  
</span><br>
<span class="quotelev1">&gt; installed).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><span class="quotelev1">&gt; You may want to run it by hand and run it through MTT and compare the  
</span><br>
<span class="quotelev1">&gt; config.logs -- *something* is different if it works by hand and  
</span><br>
<span class="quotelev1">&gt; doesn't work via MTT...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; interesting enough, if i run mtt driectly from the head node  
</span><br>
<span class="quotelev2">&gt;&gt; (before i was submitting it as a batch job), the C test passes, but  
</span><br>
<span class="quotelev2">&gt;&gt; the configure is picking up g77 instead gfortran, which fails the  
</span><br>
<span class="quotelev2">&gt;&gt; f77 tests since gcc-4.2.0 doesn't have g77..
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking through their two make.* scripts, you can setenv F77 in the  
</span><br>
<span class="quotelev1">&gt; MPI install section to override this.  This will override their hard- 
</span><br>
<span class="quotelev1">&gt; coded default of g77.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similarly, you can override their settings of -lumad by setenv'ing  
</span><br>
<span class="quotelev1">&gt; your own LIBS in the MPI install section.  Look at their make.*  
</span><br>
<span class="quotelev1">&gt; scripts to see the values that they're setting and then set your own  
</span><br>
<span class="quotelev1">&gt; override without -lumad (if that's the proper solution).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yoinks.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does the corresponding config.log say?  It should contain  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the  exact error that occurred.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This configure test is simply checking to see if the C compiler   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works.  IIRC, it's trying to compile, link, and run a trivial C   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application (something akin to &quot;hello world&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 21, 2007, at 1:30 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hey all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to execute the collective bakeoff tests for OMPI,   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH2, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MVAPICH2. OMPI and MPICH2 are working out fine, However when   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MVAPICH2 is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuring, it gives an error with the C compiler, pasted at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the  end..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that I get the error when im running the mtt client. When i  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; go in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the scratch directory to the MVAPICH2 sources and configure it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; myself,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the same configure arguments that it did from config.log,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it  works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out fine..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ive been banging my head a while now to figure this out, but i got
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nowhere. Probably it's some environment settings being messed up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somewhere, but i don't know..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If anyone has stumbled upon this before, let me know..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I attached my ini file..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:Configuring MVAPICH2...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NhjQ/ install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:sourcing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:checking for gcc... OUT:gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:checking for C compiler default output file name...  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:configure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error: C compiler cannot create executables
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --prefix=/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NhjQ/ install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --disable-romio --without-mpe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    sourcing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2-0.9.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    p3/src/pm/mpd/setup_pm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    checking for gcc... gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    checking for C compiler default output file name...  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure:  error: C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    compiler cannot create executables
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OUT:Failure in configuration.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Please file an error report to mvapich-discuss_at_cse.ohio-  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; state.edu with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    all your log files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Command complete, exit status: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [MTT]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # database
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; description = [testbake]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trial = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Lock]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module = Download
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/">http://mvapich.cse.ohio-state.edu/download/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2/ mvapich2-0.9.8p3.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Install MPI phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_get = mvapich2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Adjust this for your site (this is what works at Cisco).   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Needed to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module = MVAPICH2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mvapich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # MPI run details
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # ensure that multiple mpd's on the same node don't conflict (or  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # happen).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Test get phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Test get: skampi]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module = SVN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Test build phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Test build: skampi]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test_get = skampi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module = Shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Test Run phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Test run: skampi]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test_build = skampi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could  be lost!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Reporter phase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #=================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_username = uh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mschaara/mtt- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing/ mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_platform = shark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module = TextFile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; textfile_summary_footer =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; textfile_detail_header =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; textfile_detail_footer =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev2">&gt;&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It was created by configure, which was
</span><br>
<span class="quotelev2">&gt;&gt; generated by GNU Autoconf 2.59.  Invocation command line was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   $ ./configure --prefix=/home/mschaara/mtt-testing/scratch-coll/ 
</span><br>
<span class="quotelev2">&gt;&gt; installs/UvUA/install --with-device=osu_ch3:mrail --with-rdma=gen2  
</span><br>
<span class="quotelev2">&gt;&gt; --with-pm=mpd --disable-romio --without-mpe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## --------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Platform. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## --------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hostname = shark01
</span><br>
<span class="quotelev2">&gt;&gt; uname -m = x86_64
</span><br>
<span class="quotelev2">&gt;&gt; uname -r = 2.6.16.21-smp
</span><br>
<span class="quotelev2">&gt;&gt; uname -s = Linux
</span><br>
<span class="quotelev2">&gt;&gt; uname -v = #2 SMP Thu Mar 1 10:09:02 CST 2007
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/uname -p = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /bin/uname -X     = unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/arch              = x86_64
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/arch -k       = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /usr/convex/getsysinfo = unknown
</span><br>
<span class="quotelev2">&gt;&gt; hostinfo               = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /bin/machine           = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/oslevel       = unknown
</span><br>
<span class="quotelev2">&gt;&gt; /bin/universe          = unknown
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/papi-3.5.0/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /home/mschaara/OpenMPI/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/gcc-4.2.0/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/SLURM/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/papi-3.5.0/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /home/mschaara/OpenMPI/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/gcc-4.2.0/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/SLURM/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/papi-3.5.0/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /home/mschaara/OpenMPI/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/gcc-4.2.0/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/SLURM/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /home/mschaara/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/local/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/X11R6/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/games
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/gnome/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/kde3/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/lib64/jvm/jre/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /opt/c3-4/
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/local/ofed/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/lib/mit/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/lib/mit/sbin
</span><br>
<span class="quotelev2">&gt;&gt; PATH: /usr/local/ofed/sbin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Core tests. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:2720: checking for gcc
</span><br>
<span class="quotelev2">&gt;&gt; configure:2746: result: gcc
</span><br>
<span class="quotelev2">&gt;&gt; configure:2990: checking for C compiler version
</span><br>
<span class="quotelev2">&gt;&gt; configure:2993: gcc --version &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.2.0
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2007 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.   
</span><br>
<span class="quotelev2">&gt;&gt; There is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR  
</span><br>
<span class="quotelev2">&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:2996: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:2998: gcc -v &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../gcc-4.2.0/configure --prefix=/opt/gcc-4.2.0/ -- 
</span><br>
<span class="quotelev2">&gt;&gt; disable-multilib --enable-languages=c,c++,fortran,java
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.2.0
</span><br>
<span class="quotelev2">&gt;&gt; configure:3001: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:3003: gcc -V &lt;/dev/null &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; gcc: '-V' option must have argument
</span><br>
<span class="quotelev2">&gt;&gt; configure:3006: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; configure:3029: checking for C compiler default output file name
</span><br>
<span class="quotelev2">&gt;&gt; configure:3032: gcc -D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  - 
</span><br>
<span class="quotelev2">&gt;&gt; DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/ofed/include -O2   conftest.c -L/usr/local/ofed/lib64   - 
</span><br>
<span class="quotelev2">&gt;&gt; libverbs -libumad -lpthread &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -libumad
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; configure:3035: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; configure: failed program was:
</span><br>
<span class="quotelev2">&gt;&gt; | /* confdefs.h.  */
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; | #define PACKAGE_NAME &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; | #define PACKAGE_TARNAME &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; | #define PACKAGE_VERSION &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; | #define PACKAGE_STRING &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; | #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; | #define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
</span><br>
<span class="quotelev2">&gt;&gt; | #define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
</span><br>
<span class="quotelev2">&gt;&gt; | #define USE_LOGGING MPID_LOGGING_NONE
</span><br>
<span class="quotelev2">&gt;&gt; | #define MPICH_SINGLE_THREADED 1
</span><br>
<span class="quotelev2">&gt;&gt; | #define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
</span><br>
<span class="quotelev2">&gt;&gt; | #define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
</span><br>
<span class="quotelev2">&gt;&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; | int
</span><br>
<span class="quotelev2">&gt;&gt; | main ()
</span><br>
<span class="quotelev2">&gt;&gt; | {
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; |   ;
</span><br>
<span class="quotelev2">&gt;&gt; |   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; | }
</span><br>
<span class="quotelev2">&gt;&gt; configure:3074: error: C compiler cannot create executables
</span><br>
<span class="quotelev2">&gt;&gt; See `config.log' for more details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## ---------------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Cache variables. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ---------------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CC_set=set
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CC_value=gcc
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CFLAGS_set=set
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CFLAGS_value='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  - 
</span><br>
<span class="quotelev2">&gt;&gt; DONE_SIDED -DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/ofed/include -O2'
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CPPFLAGS_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CPPFLAGS_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CPP_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CPP_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CXXFLAGS_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CXXFLAGS_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CXX_set=set
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_CXX_value=g++
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_F77_set=set
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_F77_value=g77
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_F90FLAGS_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_F90FLAGS_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_F90_set=set
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_F90_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_FFLAGS_set=set
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_FFLAGS_value=-L/usr/local/ofed/lib64
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_LDFLAGS_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_LDFLAGS_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_build_alias_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_build_alias_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_host_alias_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_host_alias_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_target_alias_set=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_env_target_alias_value=
</span><br>
<span class="quotelev2">&gt;&gt; ac_cv_prog_ac_ct_CC=gcc
</span><br>
<span class="quotelev2">&gt;&gt; pac_cv_my_conf_dir=/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev2">&gt;&gt; UvUA/src/mvapich2-0.9.8p3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Output variables. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ADDRESS_KIND=''
</span><br>
<span class="quotelev2">&gt;&gt; ALLOCA=''
</span><br>
<span class="quotelev2">&gt;&gt; AR=''
</span><br>
<span class="quotelev2">&gt;&gt; BSEND_OVERHEAD=''
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_TVDLL=''
</span><br>
<span class="quotelev2">&gt;&gt; CC='gcc'
</span><br>
<span class="quotelev2">&gt;&gt; CC_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; CC_SHL_DBG=''
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS='-D_X86_64_ -D_SMP_ -DUSE_HEADER_CACHING  -DONE_SIDED - 
</span><br>
<span class="quotelev2">&gt;&gt; DMPID_USE_SEQUENCE_NUMBERS -D_SHMEM_COLL_    -I/usr/local/ofed/ 
</span><br>
<span class="quotelev2">&gt;&gt; include -O2'
</span><br>
<span class="quotelev2">&gt;&gt; CONFIGURE_ARGUMENTS='--prefix=/home/mschaara/mtt-testing/scratch- 
</span><br>
<span class="quotelev2">&gt;&gt; coll/installs/UvUA/install --with-device=osu_ch3:mrail --with- 
</span><br>
<span class="quotelev2">&gt;&gt; rdma=gen2 --with-pm=mpd --disable-romio --without-mpe'
</span><br>
<span class="quotelev2">&gt;&gt; CPP=''
</span><br>
<span class="quotelev2">&gt;&gt; CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; CREATESHLIB=''
</span><br>
<span class="quotelev2">&gt;&gt; CXX='g++'
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; CXX_LINKPATH_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; CXX_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; C_LINKPATH_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; C_LINK_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; C_LINK_SHL_DBG=''
</span><br>
<span class="quotelev2">&gt;&gt; DEFS=''
</span><br>
<span class="quotelev2">&gt;&gt; DEVICE='osu_ch3:mrail'
</span><br>
<span class="quotelev2">&gt;&gt; DLLIMPORT=''
</span><br>
<span class="quotelev2">&gt;&gt; DOCTEXT=''
</span><br>
<span class="quotelev2">&gt;&gt; DOCTEXTSTYLE=''
</span><br>
<span class="quotelev2">&gt;&gt; ECHO_C=''
</span><br>
<span class="quotelev2">&gt;&gt; ECHO_N='-n'
</span><br>
<span class="quotelev2">&gt;&gt; ECHO_T=''
</span><br>
<span class="quotelev2">&gt;&gt; EGREP=''
</span><br>
<span class="quotelev2">&gt;&gt; ENABLE_SHLIB=''
</span><br>
<span class="quotelev2">&gt;&gt; ETAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; ETAGSADD=''
</span><br>
<span class="quotelev2">&gt;&gt; EXAMPLE_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; EXEEXT=''
</span><br>
<span class="quotelev2">&gt;&gt; EXTERNAL_SRC_DIRS=''
</span><br>
<span class="quotelev2">&gt;&gt; EXTRA_STATUS_DECL=''
</span><br>
<span class="quotelev2">&gt;&gt; F77='g77'
</span><br>
<span class="quotelev2">&gt;&gt; F77CPP=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_COMPLEX16=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_COMPLEX32=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_COMPLEX8=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_INCDIR=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_INTEGER16=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_INTEGER1=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_INTEGER2=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_INTEGER4=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_INTEGER8=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_IN_C_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_LIBDIR_LEADER=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_NAME_MANGLE=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_REAL16=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_REAL4=''
</span><br>
<span class="quotelev2">&gt;&gt; F77_REAL8=''
</span><br>
<span class="quotelev2">&gt;&gt; F90=''
</span><br>
<span class="quotelev2">&gt;&gt; F90CPP=''
</span><br>
<span class="quotelev2">&gt;&gt; F90EXT=''
</span><br>
<span class="quotelev2">&gt;&gt; F90FLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; F90INC=''
</span><br>
<span class="quotelev2">&gt;&gt; F90INCFLAG=''
</span><br>
<span class="quotelev2">&gt;&gt; F90MODEXT=''
</span><br>
<span class="quotelev2">&gt;&gt; F90MODINCFLAG=''
</span><br>
<span class="quotelev2">&gt;&gt; F90MODINCSPEC=''
</span><br>
<span class="quotelev2">&gt;&gt; F90_LINKPATH_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; F90_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; F90_WORK_FILES_ARG=''
</span><br>
<span class="quotelev2">&gt;&gt; FC=''
</span><br>
<span class="quotelev2">&gt;&gt; FC_LINKPATH_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; FC_SHL=''
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS='-L/usr/local/ofed/lib64'
</span><br>
<span class="quotelev2">&gt;&gt; FINCLUDES=''
</span><br>
<span class="quotelev2">&gt;&gt; FLIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; FWRAPNAME='fmpich'
</span><br>
<span class="quotelev2">&gt;&gt; GCC=''
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_CXX_EXCEPTIONS=''
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_ROMIO=''
</span><br>
<span class="quotelev2">&gt;&gt; INCLUDE_MPICXX_H=''
</span><br>
<span class="quotelev2">&gt;&gt; INSTALL_DATA=''
</span><br>
<span class="quotelev2">&gt;&gt; INSTALL_PROGRAM=''
</span><br>
<span class="quotelev2">&gt;&gt; INSTALL_SCRIPT=''
</span><br>
<span class="quotelev2">&gt;&gt; INT16_T=''
</span><br>
<span class="quotelev2">&gt;&gt; INT32_T=''
</span><br>
<span class="quotelev2">&gt;&gt; INT64_T=''
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; LIBOBJS=''
</span><br>
<span class="quotelev2">&gt;&gt; LIBS='-L/usr/local/ofed/lib64   -libverbs -libumad -lpthread'
</span><br>
<span class="quotelev2">&gt;&gt; LIBTOOL=''
</span><br>
<span class="quotelev2">&gt;&gt; LTLIBOBJS=''
</span><br>
<span class="quotelev2">&gt;&gt; MAKE=''
</span><br>
<span class="quotelev2">&gt;&gt; MAKE_DEPEND_C=''
</span><br>
<span class="quotelev2">&gt;&gt; MANY_PM='no'
</span><br>
<span class="quotelev2">&gt;&gt; MKDIR_P=''
</span><br>
<span class="quotelev2">&gt;&gt; MPE_THREAD_LIB_NAME=''
</span><br>
<span class="quotelev2">&gt;&gt; MPICC=''
</span><br>
<span class="quotelev2">&gt;&gt; MPICH_TIMER_KIND=''
</span><br>
<span class="quotelev2">&gt;&gt; MPICVSHOME=''
</span><br>
<span class="quotelev2">&gt;&gt; MPICXX=''
</span><br>
<span class="quotelev2">&gt;&gt; MPICXXLIBNAME='mpichcxx'
</span><br>
<span class="quotelev2">&gt;&gt; MPID_TIMER_TYPE=''
</span><br>
<span class="quotelev2">&gt;&gt; MPIF77=''
</span><br>
<span class="quotelev2">&gt;&gt; MPIF90=''
</span><br>
<span class="quotelev2">&gt;&gt; MPIFLIBNAME='mpich'
</span><br>
<span class="quotelev2">&gt;&gt; MPIFPMPI=''
</span><br>
<span class="quotelev2">&gt;&gt; MPILIBNAME='mpich'
</span><br>
<span class="quotelev2">&gt;&gt; MPIMODNAME=''
</span><br>
<span class="quotelev2">&gt;&gt; MPIU_DLL_SPEC_DEF=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_2COMPLEX=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_2DOUBLE_COMPLEX=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_2DOUBLE_PRECISION=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_2INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_2INTEGER=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_2REAL=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_AINT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_BYTE=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CHAR=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CHARACTER=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMPLEX16=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMPLEX32=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMPLEX8=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMPLEX=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_CXXFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_COMPLEX=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_PRECISION=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_F77_BYTE=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_F77_LB=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_F77_PACKED=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_F77_UB=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_F90FLAGS='-O2'
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FINT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FLOAT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FLOAT_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INTEGER16=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INTEGER1=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INTEGER2=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INTEGER4=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INTEGER8=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INTEGER=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LB=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LOGICAL=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG_DOUBLE=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG_DOUBLE_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG_LONG=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MAX_PROCESSOR_NAME=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_OFFSET=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_OFFSET_TYPEDEF=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_PACKED=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REAL16=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REAL4=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REAL8=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REAL=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SHORT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SHORT_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SIGNED_CHAR=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_STATUS_SIZE=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_UB=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_UNSIGNED_CHAR=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_UNSIGNED_INT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_UNSIGNED_LONG=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_UNSIGNED_LONG_LONG=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_UNSIGNED_SHORT=''
</span><br>
<span class="quotelev2">&gt;&gt; MPI_WCHAR=''
</span><br>
<span class="quotelev2">&gt;&gt; NEEDSPLIB=''
</span><br>
<span class="quotelev2">&gt;&gt; NO_WEAK_SYM=''
</span><br>
<span class="quotelev2">&gt;&gt; NO_WEAK_SYM_TARGET=''
</span><br>
<span class="quotelev2">&gt;&gt; OBJEXT=''
</span><br>
<span class="quotelev2">&gt;&gt; OFFSET_KIND=''
</span><br>
<span class="quotelev2">&gt;&gt; PACKAGE_BUGREPORT='mpich2-maint_at_[hidden]'
</span><br>
<span class="quotelev2">&gt;&gt; PACKAGE_NAME='MPICH2'
</span><br>
<span class="quotelev2">&gt;&gt; PACKAGE_STRING=''
</span><br>
<span class="quotelev2">&gt;&gt; PACKAGE_TARNAME='mpich2-MVAPICH2-0.9.8'
</span><br>
<span class="quotelev2">&gt;&gt; PACKAGE_VERSION='MVAPICH2-0.9.8'
</span><br>
<span class="quotelev2">&gt;&gt; PATH_SEPARATOR=':'
</span><br>
<span class="quotelev2">&gt;&gt; PERL5=''
</span><br>
<span class="quotelev2">&gt;&gt; PERL=''
</span><br>
<span class="quotelev2">&gt;&gt; PMPIFLIBNAME='pmpich'
</span><br>
<span class="quotelev2">&gt;&gt; PMPILIBNAME='pmpich'
</span><br>
<span class="quotelev2">&gt;&gt; PROFILE_DEF_MPI=''
</span><br>
<span class="quotelev2">&gt;&gt; RANLIB=''
</span><br>
<span class="quotelev2">&gt;&gt; RANLIB_AFTER_INSTALL=''
</span><br>
<span class="quotelev2">&gt;&gt; SET_CFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; SET_MAKE=''
</span><br>
<span class="quotelev2">&gt;&gt; SHELL='/bin/sh'
</span><br>
<span class="quotelev2">&gt;&gt; SHLIB_EXT=''
</span><br>
<span class="quotelev2">&gt;&gt; SHLIB_FROM_LO=''
</span><br>
<span class="quotelev2">&gt;&gt; SHLIB_INSTALL=''
</span><br>
<span class="quotelev2">&gt;&gt; SIZEOF_MPI_STATUS=''
</span><br>
<span class="quotelev2">&gt;&gt; TESTCPP=''
</span><br>
<span class="quotelev2">&gt;&gt; THR_CFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; THR_CPPFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; THR_DEFS=''
</span><br>
<span class="quotelev2">&gt;&gt; THR_LDFLAGS=''
</span><br>
<span class="quotelev2">&gt;&gt; THR_LIBS=''
</span><br>
<span class="quotelev2">&gt;&gt; VERSION='MVAPICH2-0.9.8'
</span><br>
<span class="quotelev2">&gt;&gt; VPATH=''
</span><br>
<span class="quotelev2">&gt;&gt; ac_ct_CC='gcc'
</span><br>
<span class="quotelev2">&gt;&gt; ac_ct_CXX=''
</span><br>
<span class="quotelev2">&gt;&gt; ac_ct_F77=''
</span><br>
<span class="quotelev2">&gt;&gt; ac_ct_F90=''
</span><br>
<span class="quotelev2">&gt;&gt; ac_ct_RANLIB=''
</span><br>
<span class="quotelev2">&gt;&gt; bindings=''
</span><br>
<span class="quotelev2">&gt;&gt; bindings_dirs=''
</span><br>
<span class="quotelev2">&gt;&gt; bindir='${exec_prefix}/bin'
</span><br>
<span class="quotelev2">&gt;&gt; build_alias=''
</span><br>
<span class="quotelev2">&gt;&gt; datadir='${prefix}/share'
</span><br>
<span class="quotelev2">&gt;&gt; debugger_dir=''
</span><br>
<span class="quotelev2">&gt;&gt; device_name='osu_ch3'
</span><br>
<span class="quotelev2">&gt;&gt; docdir='${prefix}/doc'
</span><br>
<span class="quotelev2">&gt;&gt; exec_prefix='NONE'
</span><br>
<span class="quotelev2">&gt;&gt; host_alias=''
</span><br>
<span class="quotelev2">&gt;&gt; htmldir='${prefix}/www'
</span><br>
<span class="quotelev2">&gt;&gt; includedir='${prefix}/include'
</span><br>
<span class="quotelev2">&gt;&gt; infodir='${prefix}/info'
</span><br>
<span class="quotelev2">&gt;&gt; libdir='${exec_prefix}/lib'
</span><br>
<span class="quotelev2">&gt;&gt; libexecdir='${exec_prefix}/libexec'
</span><br>
<span class="quotelev2">&gt;&gt; localstatedir='${prefix}/var'
</span><br>
<span class="quotelev2">&gt;&gt; logging_dir=''
</span><br>
<span class="quotelev2">&gt;&gt; logging_name='none'
</span><br>
<span class="quotelev2">&gt;&gt; logging_subdirs=''
</span><br>
<span class="quotelev2">&gt;&gt; mandir='${prefix}/man'
</span><br>
<span class="quotelev2">&gt;&gt; master_top_builddir='/home/mschaara/mtt-testing/scratch-coll/ 
</span><br>
<span class="quotelev2">&gt;&gt; installs/UvUA/src/mvapich2-0.9.8p3'
</span><br>
<span class="quotelev2">&gt;&gt; master_top_srcdir='/home/mschaara/mtt-testing/scratch-coll/installs/ 
</span><br>
<span class="quotelev2">&gt;&gt; UvUA/src/mvapich2-0.9.8p3'
</span><br>
<span class="quotelev2">&gt;&gt; modincdir=''
</span><br>
<span class="quotelev2">&gt;&gt; mpe_dir=''
</span><br>
<span class="quotelev2">&gt;&gt; nameserv_name=''
</span><br>
<span class="quotelev2">&gt;&gt; oldincludedir='/usr/include'
</span><br>
<span class="quotelev2">&gt;&gt; other_install_dirs=' src/pm/mpd'
</span><br>
<span class="quotelev2">&gt;&gt; other_pm_names=''
</span><br>
<span class="quotelev2">&gt;&gt; pac_prog=''
</span><br>
<span class="quotelev2">&gt;&gt; pm_name='mpd'
</span><br>
<span class="quotelev2">&gt;&gt; pmi_name='simple'
</span><br>
<span class="quotelev2">&gt;&gt; prefix='/home/mschaara/mtt-testing/scratch-coll/installs/UvUA/install'
</span><br>
<span class="quotelev2">&gt;&gt; program_transform_name='s,x,x,'
</span><br>
<span class="quotelev2">&gt;&gt; romio_dir=''
</span><br>
<span class="quotelev2">&gt;&gt; sbindir='${exec_prefix}/sbin'
</span><br>
<span class="quotelev2">&gt;&gt; sharedstatedir='${prefix}/com'
</span><br>
<span class="quotelev2">&gt;&gt; subdirs=''
</span><br>
<span class="quotelev2">&gt;&gt; subsystems=' src/pmi/simple src/pm/mpd'
</span><br>
<span class="quotelev2">&gt;&gt; sysconfdir='${prefix}/etc'
</span><br>
<span class="quotelev2">&gt;&gt; target_alias=''
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## ------------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## Output files. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ------------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPE_THREAD_FUNCS=''
</span><br>
<span class="quotelev2">&gt;&gt; MPE_THREAD_TYPEDEFS=''
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt;&gt; ## confdefs.h. ##
</span><br>
<span class="quotelev2">&gt;&gt; ## ----------- ##
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define HAVE_ERROR_CHECKING MPID_ERROR_LEVEL_ALL
</span><br>
<span class="quotelev2">&gt;&gt; #define MPICH_ERROR_MSG_LEVEL MPICH_ERROR_MSG_ALL
</span><br>
<span class="quotelev2">&gt;&gt; #define MPICH_SINGLE_THREADED 1
</span><br>
<span class="quotelev2">&gt;&gt; #define MPICH_THREAD_LEVEL MPI_THREAD_FUNNELED
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_BUGREPORT &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_NAME &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_STRING &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_TARNAME &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define PACKAGE_VERSION &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #define USE_LOGGING MPID_LOGGING_NONE
</span><br>
<span class="quotelev2">&gt;&gt; #define USE_THREAD_IMPL MPICH_THREAD_IMPL_NONE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: exit 77
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0425.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0427.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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
