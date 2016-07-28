<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 16:06:01 2009" -->
<!-- isoreceived="20090408200601" -->
<!-- sent="Wed, 08 Apr 2009 17:05:30 -0300" -->
<!-- isosent="20090408200530" -->
<!-- name="Rafael Folco" -->
<!-- email="rfolco_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="1239221130.6617.114.camel_at_T42" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20090408181554.GC26926_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT Error on SLES11<br>
<strong>From:</strong> Rafael Folco (<em>rfolco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 16:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0676.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0674.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0676.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan, Jeff,
<br>
<p>Sorry for the perl confusion, nevermind...
<br>
<p>Below is attached the log and ini files, and also how I run MTT.
<br>
<p>Thanks,
<br>
<p>Rafael
<br>
<p><p>client/mtt -d -v -p -f openmpi.ini 2&gt;&amp;1 |tee test.log
<br>
<p>...
<br>
<p><p>*** Run test phase starting
<br>
<span class="quotelev2">&gt;&gt; Test run [trivial]
</span><br>
Evaluating: trivial
<br>
Found a match! trivial [trivial
<br>
Evaluating: Simple
<br>
<span class="quotelev2">&gt;&gt; Running with [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8]
</span><br>
Found MPI details: [mpi details: open mpi]
<br>
Using [mpi details: open mpi] with [MPI Install: openmpi-1.2.8]
<br>
Evaluating: # We can exit if the test passed or was skipped (i.e.,
<br>
there's
<br>
&nbsp;&nbsp;&nbsp;no need
<br>
&nbsp;&nbsp;&nbsp;# to cleanup).
<br>
&nbsp;&nbsp;&nbsp;if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
<br>
&nbsp;&nbsp;&nbsp;&quot;skipped&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 0
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
&nbsp;&nbsp;&nbsp;elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
<br>
&nbsp;&nbsp;&nbsp;mtt_ompi_cleanup.pl
<br>
Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
<br>
&nbsp;&nbsp;&nbsp;&quot;&amp;hostfile()&quot;)&quot;,		&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
<br>
&nbsp;&nbsp;&nbsp;&quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() --mca btl openib,self --debug
<br>
&nbsp;&nbsp;&nbsp;--prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
chdir /tmp/ompi-core-testers/installs/dLS2/tests/trivial/test_get__trivial
<br>
Evaluating: require MTT::Test::Specify::Simple
<br>
Evaluating: $ret = &amp;MTT::Test::Specify::Simple::Specify(@args)
<br>
Evaluating: &amp;find_executables(&quot;.&quot;)
<br>
Got name: find_executables
<br>
Got args: &quot;.&quot;
<br>
_do: $ret = MTT::Values::Functions::find_executables(&quot;.&quot;)
<br>
&amp;find_executables got .
<br>
&amp;find_exectuables returning: ./c_ring ./f77_ring ./f90_hello ./cxx_ring
<br>
&nbsp;&nbsp;&nbsp;./f77_hello ./cxx_hello ./f90_ring ./c_hello
<br>
*** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;string (&quot;8&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
<br>
<p><p><p>On Wed, 2009-04-08 at 14:15 -0400, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Wed, Apr/08/2009 11:36:05AM, Rafael Folco wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Well, I took a look at /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This piece of code looks wrong to me:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  if ($#{@$ret} &lt; 0) {
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ret references an array
</span><br>
<span class="quotelev2">&gt; &gt; @$ret points to the first element of this array
</span><br>
<span class="quotelev2">&gt; &gt; $# returns the number of elements
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So this line is trying to count elements of the first element??! Doesn't
</span><br>
<span class="quotelev2">&gt; &gt; make sense. Correct me if I am wrong, what am I missing here ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;if ($#{$ret} &lt; 0) {&quot; would be correct, without @. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe &quot;strict refs&quot; has been forced somewhere on SLES11... I also
</span><br>
<span class="quotelev2">&gt; &gt; tried on other distro and it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do perl -V differ between the two distros?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can not reproduce the error on a SLES 10 machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you run MTT with the --debug option and send the output with the
</span><br>
<span class="quotelev1">&gt; line 75 perl error? That might help me determine which INI param is
</span><br>
<span class="quotelev1">&gt; responsible for the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rafael
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2009-04-07 at 15:53 -0300, Rafael Folco wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm trying to run MTT on SLES11, but I am getting an error message
</span><br>
<span class="quotelev3">&gt; &gt; &gt; during the RUN phase and I can't figure out what is the problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     string (&quot;183&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What I could see was that this error is nothing specific to any
</span><br>
<span class="quotelev3">&gt; &gt; &gt; particular test, it happens at certain points during the RUN phase.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, the BUILD phase has been completed successfully for all tests.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anybody have already seen this? Any thoughts ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rafael
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Rafael Folco
</span><br>
<span class="quotelev2">&gt; &gt; OpenHPC / Test Lead
</span><br>
<span class="quotelev2">&gt; &gt; IBM Linux Technology Center
</span><br>
<span class="quotelev2">&gt; &gt; E-Mail: rfolco_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><pre>
-- 
Rafael Folco
OpenHPC / Test Lead
IBM Linux Technology Center
E-Mail: rfolco_at_[hidden]

</pre>
<p>
#======================================================================
<br>
# Overall configuration
<br>
#======================================================================
<br>
<p>[MTT]
<br>
<p># OMPI Core: if you are not running in a scheduled environment and you
<br>
# have a fixed hostfile for what nodes you'll be running on, fill in
<br>
# the absolute pathname to it here.  If you do not have a hostfile,
<br>
# leave it empty.  Example:
<br>
#     hostfile = /home/me/mtt-runs/mtt-hostfile
<br>
# This file will be parsed and will automatically set a valid value
<br>
# for &amp;env_max_np() (it'll count the number of lines in the hostfile,
<br>
# adding slots/cpu counts if it finds them).  The &quot;hostfile&quot; value is
<br>
# ignored if you are running in a recognized scheduled environment.
<br>
hostfile =
<br>
<p># OMPI Core: if you would rather list the hosts individually on the
<br>
# mpirun command line, list hosts here delimited by whitespace (if you
<br>
# have a hostfile listed above, this value will be ignored!).  Hosts
<br>
# can optionally be suffixed with &quot;:num&quot;, where &quot;num&quot; is an integer
<br>
# indicating how many processes may be started on that machine (if not
<br>
# specified, &quot;:1&quot; is assumed).  The sum of all of these values is used
<br>
# for &amp;env_max_np() at run time.  Example (4 uniprocessors):
<br>
#    hostlist = node1 node2 node3 node4
<br>
# Another example (4 2-way SMPs):
<br>
#    hostlist = node1:2 node2:2 node3:2 node4:2
<br>
# The &quot;hostlist&quot; value is ignored if you are running in a scheduled
<br>
# environment or if you have specified a hostfile.
<br>
hostlist = cluster-ib-6 cluster-ib-7
<br>
<p># OMPI Core: if you are running in a scheduled environment and want to
<br>
# override the scheduler and set the maximum number of processes
<br>
# returned by &amp;env_max_procs(), you can fill in an integer here.
<br>
max_np = 
<br>
<p># OMPI Core: Output display preference; the default width at which MTT
<br>
# output will wrap.
<br>
textwrap = 76
<br>
<p># OMPI Core: After the timeout for a command has passed, wait this
<br>
# many additional seconds to drain all output, and then kill it with
<br>
# extreme prejiduce.
<br>
drain_timeout = 5
<br>
<p># OMPI Core: Whether this invocation of the client is a test of the
<br>
# client setup itself.  Specifically, this value should be set to true
<br>
# (1) if you are testing your MTT client and/or INI file and do not
<br>
# want the results included in normal reporting in the MTT central
<br>
# results database.  Results submitted in &quot;trial&quot; mode are not
<br>
# viewable (by default) on the central database, and are automatically
<br>
# deleted from the database after a short time period (e.g., a week).
<br>
# Setting this value to 1 is exactly equivalent to passing &quot;--trial&quot;
<br>
# on the MTT client command line.  However, any value specified here
<br>
# in this INI file will override the &quot;--trial&quot; setting on the command
<br>
# line (i.e., if you set &quot;trial = 0&quot; here in the INI file, that will
<br>
# override and cancel the effect of &quot;--trial&quot; on the command line).
<br>
trial = 1
<br>
<p># OMPI Core: Set the scratch parameter here (if you do not want it to
<br>
# be automatically set to your current working directory). Setting
<br>
# this parameter accomplishes the same thing that the --scratch option
<br>
# does.
<br>
# scratch = &amp;getenv(&quot;HOME&quot;)/mtt-scratch
<br>
<p># OMPI Core: Set local_username here if you would prefer to not have
<br>
# your local user ID in the MTT database
<br>
local_username = root 
<br>
<p># OMPI Core: --force can be set here, instead of at the command line.
<br>
# Useful for a developer workspace in which it makes no sense to not
<br>
# use --force
<br>
force = 1
<br>
<p>logfile = &amp;getenv(&quot;HOME&quot;)/mtt.log
<br>
<p>#======================================================================
<br>
# MPI run details
<br>
#======================================================================
<br>
<p>[MPI Details: Open MPI]
<br>
exec = mpirun @hosts@ -np &amp;test_np() --mca btl openib,self --debug --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p># Yes, all these quotes are necessary.  Don't mess with them!
<br>
hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;)
<br>
<p># Example showing conditional substitution based on the MPI get
<br>
# section name (e.g., different versions of OMPI have different
<br>
# capabilities / bugs).
<br>
mca = &amp;enumerate( \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,tcp,self_at_v1_1_mca_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl tcp,self_at_v1_1_mca_params@&quot;)
<br>
<p># OMPI v1.1 cannot handle heterogeneous numbers of TCP or OpenIB
<br>
# interfaces within a single job.  So restrict it to a finite number
<br>
# that will be the same across all processes in the job (adjust for
<br>
# your own site, of course -- this particular example is meaningless
<br>
# if all nodes at your site have a homogeneous type and number of
<br>
# network interfaces).
<br>
v1_1_mca_params = &amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca btl_openib_max_btls 1&quot;, &quot;&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
# WARNING: THIS DEFAULT after_each_exec STEP IS PRONE TO FAILURE!
<br>
# Given that part of what we are testing is ORTE itself, using orterun
<br>
# to launch something to cleanup can be problematic.  We *HIGHLY*
<br>
# recommend that you replace the after_each_exec section default value
<br>
# below with something that your run-time system can performan
<br>
# natively.  For example, putting &quot;srun -N $SLURM_NNODES killall -9
<br>
# mpirun orted &amp;test_executable()&quot; works nicely on SLURM / Linux
<br>
# systems -- assuming that your MTT run has all nodes exclusively to
<br>
# itself (i.e., that the &quot;killall&quot; won't kill some legitimate jobs).
<br>
#----------------------------------------------------------------------
<br>
<p># A helper script is installed by the &quot;OMPI&quot; MPI Install module named
<br>
# &quot;mtt_ompi_cleanup.pl&quot;.  This script is orterun-able and will kill
<br>
# all rogue orteds on a node and whack any session directories.
<br>
# Invoke via orterun just to emphasize that it is not an MPI
<br>
# application.  The helper script is installed in OMPI's bin dir, so
<br>
# it'll automatically be found in the path (because OMPI's bin dir is
<br>
# in the path).
<br>
<p>after_each_exec = &lt;&lt;EOT
<br>
# We can exit if the test passed or was skipped (i.e., there's no need
<br>
# to cleanup).
<br>
if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;skipped&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit 0
<br>
fi
<br>
<p>if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
<br>
elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;args=&quot;--host $MTT_TEST_HOSTLIST&quot;
<br>
fi
<br>
orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX mtt_ompi_cleanup.pl
<br>
EOT
<br>
<p>[MPI get: openmpi-1.2.8]
<br>
mpi_details = openmpi-1.2.8
<br>
alreadyinstalled_dir = /usr/lib64/mpi/gcc/openmpi
<br>
module = AlreadyInstalled
<br>
<p>[MPI install: openmpi-1.2.8]
<br>
module = Analyze::OMPI
<br>
mpi_get = openmpi-1.2.8
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
&nbsp;
<br>
#----------------------------------------------------------------------
<br>
<p>[Test get: ibm]
<br>
module = SVN
<br>
svn_username = ******
<br>
svn_password = ******
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
<br>
svn_post_export = &lt;&lt;EOT
<br>
./autogen.sh
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: onesided]
<br>
module = SVN
<br>
svn_username = ******
<br>
svn_password = ******
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
<br>
svn_post_export = &lt;&lt;EOT
<br>
./autogen.sh
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: mpicxx]
<br>
module = SVN
<br>
svn_username = ******
<br>
svn_password = ******
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
<br>
svn_post_export = &lt;&lt;EOT
<br>
./autogen.sh
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: imb]
<br>
module = SVN
<br>
svn_username = ******
<br>
svn_password = ******
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: netpipe]
<br>
module = SVN
<br>
svn_username = ******
<br>
svn_password = ******
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
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
stderr_save_lines = 100
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Trivial
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: ibm]
<br>
test_get = ibm
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
./configure CC=mpicc CXX=mpic++ F77=mpif77
<br>
make
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: onesided]
<br>
test_get = onesided
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
# Have the onesided tests skip the OMPI 1.1 testing; MPI-2 one-sided
<br>
# just plain doesn't work there and won't be fixed.
<br>
skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
# Can also have a skip_mpi_install for the same purpose (skip specific
<br>
# installs)
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
./configure
<br>
make
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: mpicxx]
<br>
test_get = mpicxx
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
<p>skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
./configure CC=mpicc CXX=mpic++
<br>
make
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: imb]
<br>
test_get = imb
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
cd src
<br>
make clean IMB-MPI1
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: netpipe]
<br>
test_get = netpipe
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
stderr_save_lines = 100
<br>
<p>skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
<br>
module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make mpi
<br>
EOT
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
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;test_np()
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;env_max_procs()
<br>
&nbsp;
<br>
specify_module = Simple
<br>
simple_only:tests = &amp;find_executables(&quot;.&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: ibm]
<br>
test_build = ibm
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
skipped = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 77))
<br>
timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;env_max_procs()
<br>
specify_module = Simple
<br>
# Similar rationale to the intel test run section
<br>
simple_first:tests = &amp;find_executables(&quot;collective&quot;, &quot;communicator&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;datatype&quot;, &quot;dynamic&quot;, &quot;environment&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;group&quot;, &quot;info&quot;, &quot;io&quot;, &quot;onesided&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;pt2pt&quot;, &quot;topology&quot;)
<br>
<p># Similar rationale to the intel test run section
<br>
simple_fail:tests = environment/abort environment/final
<br>
simple_fail:pass = &amp;and(&amp;cmd_wifexited(), &amp;ne(&amp;cmd_wexitstatus(), 0))
<br>
simple_fail:exclusive = 1
<br>
simple_fail:np = &amp;env_max_procs()
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: onesided]
<br>
test_build = onesided
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs()), 2), 2)
<br>
specify_module = Simple
<br>
simple_pass:tests = &amp;cat(&quot;run_list&quot;)
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: mpicxx]
<br>
test_build = mpicxx
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
argv = &amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot;-nothrow&quot;, &quot;&quot;)
<br>
np = &amp;env_max_procs()
<br>
specify_module = Simple
<br>
simple_pass:tests = src/mpi2c++_test
<br>
<p>#----------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[Test run: imb correctness]
<br>
test_build = imb
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;max(1800, &amp;multiply(50, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 100
<br>
np = &amp;env_max_procs()
<br>
specify_module = Simple
<br>
simple_only:tests = src/IMB-MPI1
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: imb performance]
<br>
test_build = imb
<br>
pass = &amp;eq(&amp;cmd_wexitstatus(), 0)
<br>
timeout = -1
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
argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;) 
<br>
<p>specify_module = Simple
<br>
analyze_module = IMB
<br>
simple_pass:tests = src/IMB-MPI1
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: netpipe]
<br>
test_build = netpipe
<br>
pass = &amp;eq(&amp;cmd_wexitstatus(), 0)
<br>
timeout = -1
<br>
save_stdout_on_pass = 1
<br>
# Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
<br>
stdout_save_lines = -1
<br>
merge_stdout_stderr = 1
<br>
# NetPIPE is ping-pong only, so we only need 2 procs
<br>
np = 2
<br>
<p>specify_module = Simple
<br>
analyze_module = NetPipe
<br>
simple_pass:tests = NPmpi
<br>
<p>#======================================================================
<br>
# Reporter phase
<br>
#======================================================================
<br>
<p># This is a backup for while debugging MTT; it also writes results to
<br>
# a local text file
<br>
<p>[Reporter: text file backup]
<br>
module = TextFile
<br>
<p>textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
<br>
<p>textfile_summary_header = &lt;&lt;EOT
<br>
hostname: &amp;shell(&quot;hostname&quot;)
<br>
uname: &amp;shell(&quot;uname -a&quot;)
<br>
who am i: &amp;shell(&quot;who am i&quot;)
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
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0675/test.log">test.log</a>
</ul>
<!-- attachment="test.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0676.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0674.php">Jeff Squyres (jsquyres): "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0676.php">Ethan Mallove: "Re: [MTT users] MTT Error on SLES11"</a>
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
