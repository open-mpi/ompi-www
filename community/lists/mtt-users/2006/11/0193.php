<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 14:25:16 2006" -->
<!-- isoreceived="20061103192516" -->
<!-- sent="Fri, 3 Nov 2006 14:25:11 -0500" -->
<!-- isosent="20061103192511" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT users] Valid INI file and MPI Details section" -->
<!-- id="4B958685-C643-4452-AE20-59B0605F8ACD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 14:25:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Reply:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Reply:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an INI File that looks something like what is enclose at the  
<br>
end of this message.
<br>
<p>So I have multiple MPI Details sections. It seems like only the first  
<br>
one is running. Do I have to list them out somewhere?
<br>
<p>As a side question:
<br>
Instead of using multiple MPI Details sections, if I use a single MPI  
<br>
Details section and told MTT to iterate over the parameters to mpirun  
<br>
at what point in the aggregation chain does this happen?
<br>
Meaning will I see something like:
<br>
<p>Building trunk
<br>
Running trivial
<br>
Runing mpirun -mca btl tcp,self
<br>
Runing mpirun -mca btl mx,self
<br>
Runing mpirun -mca btl mvapi,self
<br>
Running intel
<br>
Runing mpirun -mca btl tcp,self
<br>
Runing mpirun -mca btl mx,self
<br>
Runing mpirun -mca btl mvapi,self
<br>
<p>or will I see
<br>
<p>Building trunk
<br>
Runing mpirun -mca btl tcp,self
<br>
Running trivial
<br>
Running intel
<br>
Runing mpirun -mca btl mx,self
<br>
Running trivial
<br>
Running intel
<br>
Runing mpirun -mca btl mvapi,self
<br>
Running trivial
<br>
Running intel
<br>
<p><p>I would actually prefer the last because if something is broken with  
<br>
the IB interconnect it doesn't slow down the other tests from  
<br>
reporting. E.g. I can prioritize a bit in the INI file.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
<br>
#======================================================================
<br>
# Overall configuration
<br>
#======================================================================
<br>
<p>[MTT]
<br>
<p>hostfile =
<br>
hostlist =
<br>
max_np =
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# MPI get phase
<br>
#======================================================================
<br>
<p>[MPI get: ompi-nightly-trunk]
<br>
mpi_details = Open MPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# Install MPI phase
<br>
#======================================================================
<br>
<p>[MPI install: odin 32 bit gcc]
<br>
mpi_get = ompi-nightly-trunk
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
vpath_mode = none
<br>
<p>make_all_arguments = -j 6
<br>
make_check = 1
<br>
<p>compiler_name = gnu
<br>
compiler_version = &amp;shell(&quot;gcc --version | head -n 1 | awk '{ print \ 
<br>
$3 }'&quot;)
<br>
configure_arguments = \
<br>
FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 \
<br>
--with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32 --with- 
<br>
wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
<br>
<p>module = OMPI
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# MPI run details
<br>
#======================================================================
<br>
<p>[MPI Details: Open MPI tcp sm]
<br>
exec = mpirun @hosts@ -mca btl tcp,sm,self -np &amp;test_np() --prefix  
<br>
&amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p># Yes, all these quotes are necessary.  Don't mess with them!
<br>
hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
<br>
()&quot;)&quot;, &quot;&quot;)&quot;)
<br>
<p>after_each_exec = &lt;&lt;EOT
<br>
if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
fi
<br>
orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
<br>
mtt_ompi_cleanup.pl
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: Open MPI mx sm]
<br>
exec = mpirun @hosts@ -mca btl mx,sm,self -np &amp;test_np() --prefix  
<br>
&amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p># Yes, all these quotes are necessary.  Don't mess with them!
<br>
hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
<br>
()&quot;)&quot;, &quot;&quot;)&quot;)
<br>
<p>after_each_exec = &lt;&lt;EOT
<br>
if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
fi
<br>
orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
<br>
mtt_ompi_cleanup.pl
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[MPI Details: Open MPI mvapi sm]
<br>
exec = mpirun @hosts@ -mca btl mvapi,sm,self -np &amp;test_np() --prefix  
<br>
&amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p># Yes, all these quotes are necessary.  Don't mess with them!
<br>
hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
<br>
()&quot;)&quot;, &quot;&quot;)&quot;)
<br>
<p>after_each_exec = &lt;&lt;EOT
<br>
if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
fi
<br>
orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
<br>
mtt_ompi_cleanup.pl
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# Test get phase
<br>
#======================================================================
<br>
<p>[Test get: trivial]
<br>
module = Trivial
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# Test build phase
<br>
#======================================================================
<br>
<p>[Test build: trivial]
<br>
test_get = trivial
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = -1
<br>
<p>module = Trivial
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# Test Run phase
<br>
#======================================================================
<br>
<p>[Test run: trivial]
<br>
test_build = trivial
<br>
pass = &amp;eq(&amp;test_exit_status(), 0)
<br>
timeout = &amp;multiply(2, test_np())
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;env_max_procs()
<br>
<p>module = Simple
<br>
simple_only:tests = &amp;find_executables(&quot;.&quot;)
<br>
<p>#----------------------------------------------------------------------
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
# OMPI Core: Change this to be the username and password for your
<br>
# submit user.  Get this from the OMPI MTT administrator.
<br>
mttdatabase_username = XX
<br>
mttdatabase_password = XX
<br>
# OMPI Core: Change this to be some short string identifying your
<br>
# cluster.
<br>
mttdatabase_platform = IU - Thor - TESTING
<br>
<p>#----------------------------------------------------------------------
<br>
<p># This is a backup for while debugging MTT; it also writes results to
<br>
# a local text file
<br>
[Reporter: text file backup]
<br>
module = TextFile
<br>
<p>textfile_filename = mtt-debug-report-2-$phase-$section-$mpi_name- 
<br>
$mpi_version.txt
<br>
textfile_separator =  
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;----------------------------------------------------------&lt;&lt;&lt;&lt;
</span><br>
<p><p>#----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0194.php">Jeff Squyres: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<li><strong>Previous message:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT users] &amp;join funclet and EvaluateString"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Reply:</strong> <a href="0196.php">Ethan Mallove: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Reply:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
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
