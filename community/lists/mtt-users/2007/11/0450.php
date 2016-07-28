<?
$subject_val = "[MTT users] unable to pull tests";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 17:04:44 2007" -->
<!-- isoreceived="20071114220444" -->
<!-- sent="Wed, 14 Nov 2007 14:04:27 -0800" -->
<!-- isosent="20071114220427" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="[MTT users] unable to pull tests" -->
<!-- id="473B70EB.5050906_at_cs.ubc.ca" -->
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
<strong>Subject:</strong> [MTT users] unable to pull tests<br>
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 17:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/10/0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Reply:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT users] unable to pull tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hello everyone...
<br>
<p>I've been trying to get MTT set up to run tests on the SCTP BTL Brad
<br>
Penoff and I (over at UBC) have developed. While I'm able to obtain a
<br>
nightly  tarball, build and install the Open MPI middleware, I'm unable
<br>
to pull any tests for the various svn repositories. Currently I've tried
<br>
pulling IBM and Onesided tests as shown in the sample
<br>
ompi-core-template.ini file.
<br>
<p>Here is the output I see from the console when running with --verbose:
<br>
- ----------------------------------------------------------------------
<br>
*** MTT: ./mtt -f ../samples/ompi-core-template-kmroz.ini --verbose
<br>
*** Reporter initializing
<br>
*** Reporter initialized
<br>
*** MPI get phase starting
<br>
<span class="quotelev2">&gt;&gt; MPI get: [mpi get: ompi-nightly-trunk]
</span><br>
&nbsp;&nbsp;&nbsp;Checking for new MPI sources...
<br>
&nbsp;&nbsp;&nbsp;No new MPI sources
<br>
*** MPI get phase complete
<br>
*** MPI install phase starting
<br>
<span class="quotelev2">&gt;&gt; MPI install [mpi install: gcc warnings]
</span><br>
&nbsp;&nbsp;&nbsp;Installing MPI: [ompi-nightly-trunk] / [1.3a1r16706] / [gcc warnings]...
<br>
&nbsp;&nbsp;&nbsp;Completed MPI install successfully
<br>
&nbsp;&nbsp;&nbsp;Installing MPI: [ompi-nightly-trunk] / [1.3a1r16682] / [gcc warnings]...
<br>
&nbsp;&nbsp;&nbsp;Completed MPI install successfully
<br>
&nbsp;&nbsp;&nbsp;Installing MPI: [ompi-nightly-trunk] / [1.3a1r16723] / [gcc warnings]...
<br>
&nbsp;&nbsp;&nbsp;Completed MPI install successfully
<br>
*** MPI install phase complete
<br>
*** Test get phase starting
<br>
<span class="quotelev2">&gt;&gt; Test get: [test get: onesided]
</span><br>
&nbsp;&nbsp;&nbsp;Checking for new test sources...
<br>
- ----------------------------------------------------------------------
<br>
<p>As you can see, MTT seems to hang on 'Checking for new test sources.'
<br>
<p>I will attach a copy of the .ini file in hopes that someone may be able
<br>
to point me in the right direction.
<br>
<p>Thanks in advance.
<br>
<p><p>ompi-core-template-kmroz.ini:
<br>
- -----------------------------------------------------------------------
<br>
# Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
<br>
# Copyright (c) 2006-2007 Sun Microystems, Inc.  All rights reserved.
<br>
#
<br>
<p># Template MTT configuration file for Open MPI core testers.  The
<br>
# intent for this template file is to establish at least some loose
<br>
# guidelines for what Open MPI core testers should be running on a
<br>
# nightly basis.  This file is not intended to be an exhaustive sample
<br>
# of all possible fields and values that MTT offers.  Each site will
<br>
# undoubtedly have to edit this template for their local needs (e.g.,
<br>
# pick compilers to use, etc.), but this file provides a baseline set
<br>
# of configurations that we intend you to run.
<br>
<p># OMPI core members will need to edit some values in this file based
<br>
# on your local testing environment.  Look for comments with &quot;OMPI
<br>
# Core:&quot; for instructions on what to change.
<br>
<p># Note that this file is artificially longer than it really needs to
<br>
# be -- a bunch of values are explicitly set here that are exactly
<br>
# equivalent to their defaults.  This is mainly because there is no
<br>
# reliable form of documentation for this ini file yet, so the values
<br>
# here comprise a good set of what options are settable (although it
<br>
# is not a comprehensive set).
<br>
<p># Also keep in mind that at the time of this writing, MTT is still
<br>
# under active development and therefore the baselines established in
<br>
# this file may change on a relatively frequent basis.
<br>
<p># The guidelines are as follows:
<br>
#
<br>
# 1. Download and test nightly snapshot tarballs of at least one of
<br>
#    the following:
<br>
#    - the trunk (highest preference)
<br>
#    - release branches (highest preference is the most recent release
<br>
#      branch; lowest preference is the oldest release branch)
<br>
# 2. Run all 4 correctness test suites from the ompi-tests SVN
<br>
#    - trivial, as many processes as possible
<br>
#    - intel tests with all_tests_no_perf, up to 64 processes
<br>
#    - IBM, as many processes as possible
<br>
#    - IMB, as many processes as possible
<br>
# 3. Run with as many different components as possible
<br>
#    - PMLs (ob1, dr)
<br>
#    - BTLs (iterate through sm, tcp, whatever high speed network(s) you
<br>
#      have, etc. -- as relevant)
<br>
<p>#======================================================================
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
hostlist = localhost
<br>
<p># OMPI Core: if you are running in a scheduled environment and want to
<br>
# override the scheduler and set the maximum number of processes
<br>
# returned by &amp;env_max_procs(), you can fill in an integer here.
<br>
max_np = 2
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
# trial = 0
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
local_username = kmroz
<br>
<p># OMPI Core: --force can be set here, instead of at the command line.
<br>
# Useful for a developer workspace in which it makes no sense to not
<br>
# use --force
<br>
# force = 1
<br>
<p># OMPI Core: Specify a list of sentinel files that MTT will regularly
<br>
# check for.  If these files exist, MTT will exit more-or-less
<br>
# immediately (i.e., after the current test completes) and report all
<br>
# of its results.  This is a graceful mechanism to make MTT stop right
<br>
# where it is but not lose any results.
<br>
# terminate_files = &amp;getenv(&quot;HOME&quot;)/mtt-stop,&amp;scratch_root()/mtt-stop
<br>
<p># OMPI Core: Specify a default description string that is used in the
<br>
# absence of description strings in the MPI install, Test build, and
<br>
# Test run sections.  The intent of this field is to record variable
<br>
# data that is outside the scope, but has effect on the software under
<br>
# test (e.g., firmware version of a NIC).  If no description string is
<br>
# specified here and no description strings are specified below, the
<br>
# description data field is left empty when reported.
<br>
# description = NIC firmware: &amp;system(&quot;get_nic_firmware_rev&quot;)
<br>
<p># OMPI Core: Specify a logfile where you want all MTT output to be
<br>
# sent in addition to stdout / stderr.
<br>
# logfile = /tmp/my-logfile.txt
<br>
<p># OMPI Core: If you have additional .pm files for your own funclets,
<br>
# you can have a comma-delimited list of them here.  Note that each
<br>
# .pm file *must* be a package within the MTT::Values::Functions
<br>
# namespace.  For example, having a Cisco.pm file must include the
<br>
# line:
<br>
#
<br>
#     package MTT::Values::Functions::Cisco;
<br>
#
<br>
# If this file contains a perl function named foo, you can invoke this
<br>
# functlet as &amp;Cisco::foo().  Note that funclet files are loaded
<br>
# almost immediately, so you can use them even for other field values
<br>
# in the MTT section.
<br>
# funclet_files = /path/to/file1.pm, /path/to/file2.pm
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Lock]
<br>
# The only module available is the MTTLockServer, and requires running
<br>
# the mtt-lock-server executable somewhere.  You can leave this
<br>
# section blank and there will be no locking.
<br>
#module = MTTLockServer
<br>
#mttlockserver_host = hostname where mtt-lock-server is running
<br>
#mttlockserver_port = integer port number of the mtt-lock-server
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
<p>[MPI install: gcc warnings]
<br>
mpi_get = ompi-nightly-trunk
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0
<br>
bitness = 32
<br>
<p>module = OMPI
<br>
ompi_vpath_mode = none
<br>
# OMPI Core: This is a GNU make option; if you are not using GNU make,
<br>
# you'll probably want to delete this field (i.e., leave it to its
<br>
# default [empty] value).
<br>
ompi_make_all_arguments = -j 4
<br>
ompi_make_check = 1
<br>
# OMPI Core: You will likely need to update these values for whatever
<br>
# compiler you want to use.  You can pass any configure flags that you
<br>
# want, including those that change which compiler to use (e.g., CC=cc
<br>
# CXX=CC F77=f77 FC=f90).  Valid compiler names are: gnu, pgi, intel,
<br>
# ibm, kai, absoft, pathscale, sun.  If you have other compiler names
<br>
# that you need, let us know.  Note that the compiler_name flag is
<br>
# solely for classifying test results; it does not automatically pass
<br>
# values to configure to set the compiler.
<br>
ompi_compiler_name = gnu
<br>
ompi_compiler_version = &amp;get_gcc_version()
<br>
ompi_configure_arguments = CFLAGS=-pipe --enable-picky --enable-debug
<br>
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# MPI run details
<br>
#======================================================================
<br>
<p>[MPI Details: Open MPI]
<br>
<p># MPI tests
<br>
exec = mpirun @hosts@ -np &amp;test_np() @mca@ --prefix &amp;test_prefix()
<br>
&amp;test_executable() &amp;test_argv()
<br>
<p># ORTE tests
<br>
exec:rte = &amp;test_executable() --host &amp;env_hosts() --prefix
<br>
&amp;test_prefix() &amp;test_argv()
<br>
<p>hosts = &amp;if(&amp;have_hostfile(), &quot;--hostfile &quot; . &amp;hostfile(), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;if(&amp;have_hostlist(), &quot;--host &quot; . &amp;hostlist(), &quot;&quot;))
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
<p># Boolean indicating IB connectivity
<br>
is_up = &amp;check_ipoib_connectivity()
<br>
<p># Figure out which mca's to use
<br>
mca = &lt;&lt;EOT
<br>
&amp;perl('
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Return cached mca, if we have it
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (defined(@mca)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \@mca;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my @hosts = split /\s+|,/, hostlist_hosts();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (scalar(@hosts) &lt; 2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@mca, &quot;--mca btl self,sm&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($ib_up) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@mca, &quot;--mca btl self,udapl&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@mca, &quot;--mca btl self,tcp&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return \@mca;
<br>
')
<br>
EOT
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
v1_1_mca_params = &amp;if(&amp;eq(&amp;mpi_get_name(), &quot;ompi-nightly-v1.1&quot;), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
<br>
btl_openib_max_btls 1&quot;, &quot;&quot;)
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
if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
<br>
&quot;skipped&quot;; then
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
<p><p>#======================================================================
<br>
# Test get phase
<br>
#======================================================================
<br>
<p>#[Test get: ibm]
<br>
#module = SVN
<br>
#svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
<br>
#svn_post_export = &lt;&lt;EOT
<br>
#./autogen.sh
<br>
#EOT
<br>
<p>[Test get: onesided]
<br>
module = SVN
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
<p><p>#======================================================================
<br>
# Test build phase
<br>
#======================================================================
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
<p>#[Test build: onesided]
<br>
#test_get = onesided
<br>
#save_stdout_on_success = 1
<br>
#merge_stdout_stderr = 1
<br>
#stderr_save_lines = 100
<br>
# Have the onesided tests skip the OMPI 1.1 testing; MPI-2 one-sided
<br>
# just plain doesn't work there and won't be fixed.
<br>
#skip_mpi_get = ompi-nightly-v1.1
<br>
# Can also have a skip_mpi_install for the same purpose (skip specific
<br>
# installs)
<br>
<p>#module = Shell
<br>
#shell_build_command = &lt;&lt;EOT
<br>
#./configure
<br>
#make
<br>
#EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p><p>#======================================================================
<br>
# Test Run phase
<br>
#======================================================================
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
<p>specify_module = Simple
<br>
&nbsp;Similar rationale to the intel test run section
<br>
simple_first:tests = &amp;find_executables(&quot;collective&quot;, &quot;communicator&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;datatype&quot;, &quot;dynamic&quot;,
<br>
&quot;environment&quot;, \
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
<p>#[Test run: onesided]
<br>
#test_build = onesided
<br>
#pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
#timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
#save_stdout_on_pass = 1
<br>
#merge_stdout_stderr = 1
<br>
#stdout_save_lines = 100
<br>
#np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs()),
<br>
2), 2)
<br>
<p>#specify_module = Simple
<br>
#simple_pass:tests = &amp;cat(&quot;run_list&quot;)
<br>
<p><p>#----------------------------------------------------------------------
<br>
<p><p>#======================================================================
<br>
# Reporter phase
<br>
#======================================================================
<br>
<p>#[Reporter: IU database]
<br>
#module = MTTDatabase
<br>
<p>#mttdatabase_realm = OMPI
<br>
#mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
<br>
# OMPI Core: Change this to be the username and password for your
<br>
# submit user.  Get this from the OMPI MTT administrator.
<br>
#mttdatabase_username = you must set this value
<br>
#mttdatabase_password = you must set this value
<br>
# OMPI Core: Change this to be some short string identifying your
<br>
# cluster.
<br>
#mttdatabase_platform = you must set this value
<br>
<p>#----------------------------------------------------------------------
<br>
<p># This is a backup for while debugging MTT; it also writes results to
<br>
# a local text file
<br>
<p>#[Reporter: text file backup]
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
<p>#textfile_summary_footer =
<br>
#textfile_detail_header =
<br>
#textfile_detail_footer =
<br>
<p>textfile_textwrap = 78
<br>
<p>- --
<br>
Karol Mroz
<br>
kmroz_at_[hidden]
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.6 (GNU/Linux)
<br>
<p>iD8DBQFHO3Druoug78g/Mz8RAiReAJ0fl9txgv+VjI2St+c88dN9iR8oBQCfead+
<br>
qfz2+ijSfk8GMvy+z3Lbi04=
<br>
=SHO4
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/10/0449.php">Jeff Squyres: "Re: [MTT users] &quot;Passed&quot; result on a run-time linker error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Reply:</strong> <a href="0451.php">Ethan Mallove: "Re: [MTT users] unable to pull tests"</a>
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
