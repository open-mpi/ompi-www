<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov  4 15:55:08 2006" -->
<!-- isoreceived="20061104205508" -->
<!-- sent="Fri, 3 Nov 2006 16:19:30 -0500" -->
<!-- isosent="20061103211930" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Valid INI file and MPI Details section" -->
<!-- id="20061103211930.GC39413_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B958685-C643-4452-AE20-59B0605F8ACD_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 16:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0197.php">Jeff Squyres: "Re: [MTT users] mtt results"</a>
<li><strong>Previous message:</strong> <a href="0195.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0193.php">Josh Hursey: "[MTT users] Valid INI file and MPI Details section"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think MTT iterates over MPI Details sections the way
<br>
you expect. To run all the MPI Details sections, I think you
<br>
can factor down all those MPI Details sections to ''one''
<br>
using &amp;enumerate():
<br>
<p>exec = mpirun @hosts@ -mca 
<br>
&nbsp;&nbsp;&amp;enumerate(&quot;btl tcp,self&quot;, &quot;btl
<br>
&nbsp;&nbsp;mx,self&quot;, &quot;btl mvapi,self&quot;) -np &amp;test_np() --prefix
<br>
&nbsp;&nbsp;&amp;test_prefix() &amp;test_executable() &amp;test_argv() 
<br>
<p>On Fri, Nov/03/2006 02:25:11PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I have an INI File that looks something like what is enclose at the  
</span><br>
<span class="quotelev1">&gt; end of this message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I have multiple MPI Details sections. It seems like only the first  
</span><br>
<span class="quotelev1">&gt; one is running. Do I have to list them out somewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a side question:
</span><br>
<span class="quotelev1">&gt; Instead of using multiple MPI Details sections, if I use a single MPI  
</span><br>
<span class="quotelev1">&gt; Details section and told MTT to iterate over the parameters to mpirun  
</span><br>
<span class="quotelev1">&gt; at what point in the aggregation chain does this happen?
</span><br>
<span class="quotelev1">&gt; Meaning will I see something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building trunk
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or will I see
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building trunk
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would actually prefer the last because if something is broken with  
</span><br>
<span class="quotelev1">&gt; the IB interconnect it doesn't slow down the other tests from  
</span><br>
<span class="quotelev1">&gt; reporting. E.g. I can prioritize a bit in the INI file.
</span><br>
<p>I do not think the last is possible at the moment, since
<br>
that would require iteration over a series of MPI Details
<br>
sections.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Overall configuration
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hostfile =
</span><br>
<span class="quotelev1">&gt; hostlist =
</span><br>
<span class="quotelev1">&gt; max_np =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev1">&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev1">&gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Install MPI phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: odin 32 bit gcc]
</span><br>
<span class="quotelev1">&gt; mpi_get = ompi-nightly-trunk
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; vpath_mode = none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make_all_arguments = -j 6
</span><br>
<span class="quotelev1">&gt; make_check = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; compiler_version = &amp;shell(&quot;gcc --version | head -n 1 | awk '{ print \ 
</span><br>
<span class="quotelev1">&gt; $3 }'&quot;)
</span><br>
<span class="quotelev1">&gt; configure_arguments = \
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 \
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32 --with- 
</span><br>
<span class="quotelev1">&gt; wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI run details
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI tcp sm]
</span><br>
<span class="quotelev1">&gt; exec = mpirun @hosts@ -mca btl tcp,sm,self -np &amp;test_np() --prefix  
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev1">&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;              &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
</span><br>
<span class="quotelev1">&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;      args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;      args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
</span><br>
<span class="quotelev1">&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI mx sm]
</span><br>
<span class="quotelev1">&gt; exec = mpirun @hosts@ -mca btl mx,sm,self -np &amp;test_np() --prefix  
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix() &amp;test_executable() &amp;test_argv() 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev1">&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;              &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
</span><br>
<span class="quotelev1">&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;      args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;      args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
</span><br>
<span class="quotelev1">&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: Open MPI mvapi sm]
</span><br>
<span class="quotelev1">&gt; exec = mpirun @hosts@ -mca btl mvapi,sm,self -np &amp;test_np() --prefix  
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev1">&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;              &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
</span><br>
<span class="quotelev1">&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;      args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;      args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
</span><br>
<span class="quotelev1">&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: trivial]
</span><br>
<span class="quotelev1">&gt; module = Trivial
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test build phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: trivial]
</span><br>
<span class="quotelev1">&gt; test_get = trivial
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Trivial
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test Run phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: trivial]
</span><br>
<span class="quotelev1">&gt; test_build = trivial
</span><br>
<span class="quotelev1">&gt; pass = &amp;eq(&amp;test_exit_status(), 0)
</span><br>
<span class="quotelev1">&gt; timeout = &amp;multiply(2, test_np())
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = 100
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Simple
</span><br>
<span class="quotelev1">&gt; simple_only:tests = &amp;find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Reporter phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
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
<span class="quotelev1">&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev1">&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = XX
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = XX
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev1">&gt; # cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = IU - Thor - TESTING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # This is a backup for while debugging MTT; it also writes results to
</span><br>
<span class="quotelev1">&gt; # a local text file
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; module = TextFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_filename = mtt-debug-report-2-$phase-$section-$mpi_name- 
</span><br>
<span class="quotelev1">&gt; $mpi_version.txt
</span><br>
<span class="quotelev1">&gt; textfile_separator =  
</span><br>
<span class="quotelev1">&gt;  &gt;&gt;&gt;&gt;----------------------------------------------------------&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0197.php">Jeff Squyres: "Re: [MTT users] mtt results"</a>
<li><strong>Previous message:</strong> <a href="0195.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>In reply to:</strong> <a href="0193.php">Josh Hursey: "[MTT users] Valid INI file and MPI Details section"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
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
