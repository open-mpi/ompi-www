<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 21 13:30:38 2007" -->
<!-- isoreceived="20070921173038" -->
<!-- sent="Fri, 21 Sep 2007 12:30:32 -0500" -->
<!-- isosent="20070921173032" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="[MTT users] MVAPICH2 configuring problems" -->
<!-- id="46F3FFB8.3020105_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-09-21 13:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Ethan Mallove: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for	business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
<p>I'm trying to execute the collective bakeoff tests for OMPI, MPICH2, and
<br>
MVAPICH2. OMPI and MPICH2 are working out fine, However when MVAPICH2 is
<br>
configuring, it gives an error with the C compiler, pasted at the end..
<br>
<p>Note that I get the error when im running the mtt client. When i go in
<br>
the scratch directory to the MVAPICH2 sources and configure it myself,
<br>
with the same configure arguments that it did from config.log, it works
<br>
out fine..
<br>
<p>Ive been banging my head a while now to figure this out, but i got
<br>
nowhere. Probably it's some environment settings being messed up
<br>
somewhere, but i don't know..
<br>
If anyone has stumbled upon this before, let me know..
<br>
I attached my ini file..
<br>
<p><p><p><p><p>OUT:Configuring MVAPICH2...
<br>
OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
<br>
&nbsp;&nbsp;&nbsp;--prefix=/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/install
<br>
&nbsp;&nbsp;&nbsp;--with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
<br>
&nbsp;&nbsp;&nbsp;--disable-romio --without-mpe
<br>
OUT:sourcing
<br>
&nbsp;&nbsp;&nbsp;/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/mvapich2-0.9.8
<br>
&nbsp;&nbsp;&nbsp;p3/src/pm/mpd/setup_pm
<br>
OUT:checking for gcc... OUT:gcc
<br>
OUT:checking for C compiler default output file name... OUT:configure:
<br>
error: C compiler cannot create executables
<br>
&nbsp;&nbsp;&nbsp;See `config.log' for more details.
<br>
OUT:Configuring MPICH2 version MVAPICH2-0.9.8 with
<br>
&nbsp;&nbsp;&nbsp;--prefix=/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/install
<br>
&nbsp;&nbsp;&nbsp;--with-device=osu_ch3:mrail --with-rdma=gen2 --with-pm=mpd
<br>
&nbsp;&nbsp;&nbsp;--disable-romio --without-mpe
<br>
&nbsp;&nbsp;&nbsp;sourcing
<br>
&nbsp;&nbsp;&nbsp;/home/mschaara/mtt-testing/scratch-coll/installs/NhjQ/src/mvapich2-0.9.8
<br>
&nbsp;&nbsp;&nbsp;p3/src/pm/mpd/setup_pm
<br>
&nbsp;&nbsp;&nbsp;checking for gcc... gcc
<br>
&nbsp;&nbsp;&nbsp;checking for C compiler default output file name... configure: error: C
<br>
&nbsp;&nbsp;&nbsp;compiler cannot create executables
<br>
&nbsp;&nbsp;&nbsp;See `config.log' for more details.
<br>
OUT:Failure in configuration.
<br>
&nbsp;&nbsp;&nbsp;Please file an error report to mvapich-discuss_at_[hidden] with
<br>
&nbsp;&nbsp;&nbsp;all your log files.
<br>
Command complete, exit status: 1
<br>
<p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA

</pre>
<p>
#======================================================================
<br>
# Generic OMPI core performance testing template configuration
<br>
#======================================================================
<br>
<p>[MTT]
<br>
# Leave this string so that we can identify this data subset in the
<br>
# database
<br>
# OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
<br>
description = [testbake]
<br>
#description = [2007 collective performance bakeoff]
<br>
# OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real results
<br>
trial = 1
<br>
<p># Put other values here as relevant to your environment.
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Lock]
<br>
# Put values here as relevant to your environment.
<br>
<p>#======================================================================
<br>
# MPI get phase
<br>
#======================================================================
<br>
<p>[MPI get: MVAPICH2]
<br>
mpi_details = MVAPICH2
<br>
<p>module = Download
<br>
download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz">http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz</a>
<br>
<p>#======================================================================
<br>
# Install MPI phase
<br>
#======================================================================
<br>
<p>[MPI install: MVAPICH2]
<br>
mpi_get = mvapich2
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
# Adjust this for your site (this is what works at Cisco).  Needed to
<br>
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
<br>
# all the way through the test run phases that use this MPI install,
<br>
# where the test executables will need to have this set.
<br>
prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
<br>
<p>module = MVAPICH2
<br>
# Adjust this to be where your OFED is installed
<br>
mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
<br>
mvapich2_build_script = make.mvapich2.ofa
<br>
mvapich2_compiler_name = gnu
<br>
mvapich2_compiler_version = &amp;get_gcc_version()
<br>
# These are needed to launch through SLURM; adjust as appropriate.
<br>
mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib 
<br>
mvapich2_additional_wrapper_libs = -lpmi
<br>
<p>#======================================================================
<br>
# MPI run details
<br>
#======================================================================
<br>
<p>[MPI Details: MVAPICH2]
<br>
<p># Launching through SLURM.  If you use mpdboot instead, you need to
<br>
# ensure that multiple mpd's on the same node don't conflict (or never
<br>
# happen).
<br>
exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
<br>
<p># If not using SLURM, you'll need something like this (not tested).
<br>
# You may need different hostfiles for running by slot/by node.
<br>
#exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
<br>
<p>network = loopback,verbs,shmem
<br>
<p># In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
<br>
# specify that each MPI process will use 4 CPUs.
<br>
alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
<br>
<p>#======================================================================
<br>
# Test get phase
<br>
#======================================================================
<br>
<p>[Test get: skampi]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
<br>
<p>#======================================================================
<br>
# Test build phase
<br>
#======================================================================
<br>
<p>[Test build: skampi]
<br>
test_get = skampi
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Shell
<br>
# Set EVERYONE_CAN_MPI_IO for HP MPI
<br>
shell_build_command = &lt;&lt;EOT
<br>
make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
<br>
EOT
<br>
<p>#======================================================================
<br>
# Test Run phase
<br>
#======================================================================
<br>
<p>[Test run: skampi]
<br>
test_build = skampi
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
# Timeout hueristic: 10 minutes
<br>
timeout = 10:00
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
np = &amp;env_max_procs()
<br>
<p>argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
<br>
<p>specify_module = Simple
<br>
analyze_module = SKaMPI
<br>
<p>simple_pass:tests = skampi
<br>
<p>#======================================================================
<br>
# Reporter phase
<br>
#======================================================================
<br>
<p>[Reporter: IU database]
<br>
module = MTTDatabase
<br>
<p>mttdatabase_realm = OMPI
<br>
mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
<br>
# Change this to be the username and password for your submit user.
<br>
# Get this from the OMPI MTT administrator.
<br>
mttdatabase_username = uh
<br>
mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mschaara/mtt-testing/mtt-db-password.txt&quot;))
<br>
# Change this to be some short string identifying your cluster.
<br>
mttdatabase_platform = shark
<br>
<p>mttdatabase_debug_filename = mttdb_debug_file_perf
<br>
mttdatabase_keep_debug_files = 1
<br>
<p>#----------------------------------------------------------------------
<br>
<p># This is a backup reporter; it also writes results to a local text
<br>
# file
<br>
<p>[Reporter: text file backup]
<br>
module = TextFile
<br>
<p>textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
<br>
<p>textfile_summary_header = &lt;&lt;EOT
<br>
Hostname: &amp;shell(&quot;hostname&quot;)
<br>
uname: &amp;shell(&quot;uname -a&quot;)
<br>
Username: &amp;shell(&quot;who am i&quot;)
<br>
EOT
<br>
<p>textfile_summary_footer =
<br>
textfile_detail_header =
<br>
textfile_detail_footer =
<br>
<p>textfile_textwrap = 78
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Ethan Mallove: "Re: [MTT users] [devel-core] MTT collective bakeoff: now open for	business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>Reply:</strong> <a href="0423.php">Jeff Squyres: "Re: [MTT users] MVAPICH2 configuring problems"</a>
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
