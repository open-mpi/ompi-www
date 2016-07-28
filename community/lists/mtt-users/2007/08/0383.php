<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 15:35:36 2007" -->
<!-- isoreceived="20070829193536" -->
<!-- sent="Wed, 29 Aug 2007 14:35:32 -0500" -->
<!-- isosent="20070829193532" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT users] starting mtt" -->
<!-- id="46D5CA84.6060203_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07150386-04C8-4A55-BE8A-13EED20F851F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-29 15:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i removed username/password since im sending this publicly..
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 29, 2007, at 2:19 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Im trying to execute mtt on our cluster at uh..
</span><br>
<span class="quotelev2">&gt;&gt; This is the first time we do mtt here so bare with me here..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I edited the ompi-core-template.ini file to test only the trunk and
</span><br>
<span class="quotelev2">&gt;&gt; added the username/password/platform.
</span><br>
<span class="quotelev2">&gt;&gt; I allocated 4 nodes and ran:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; client/mtt -d --force -f samples/ompi-core-template.ini --trial -s  
</span><br>
<span class="quotelev2">&gt;&gt; scratch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send your edited ini file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI configures and compiles fine, and then IBM tests start.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After the IBM tests complete mtt just exits with an error.
</span><br>
<span class="quotelev2">&gt;&gt; I copied some of the output that i saw was not right at the end..
</span><br>
<span class="quotelev2">&gt;&gt; any help is appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -Mohamad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; Making dir:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi- 
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt;    1.3a1r15990/gcc_warnings/ibm/ibm/final (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm)
</span><br>
<span class="quotelev2">&gt;&gt; /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-nightly- 
</span><br>
<span class="quotelev2">&gt;&gt; trunk/1.3
</span><br>
<span class="quotelev2">&gt;&gt;    a1r15990/gcc_warnings/ibm/ibm/final does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir
</span><br>
<span class="quotelev2">&gt;&gt;    /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi- 
</span><br>
<span class="quotelev2">&gt;&gt; nightly-trunk/
</span><br>
<span class="quotelev2">&gt;&gt;    1.3a1r15990/gcc_warnings/ibm/ibm/final/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm
</span><br>
<span class="quotelev2">&gt;&gt;    ### Test progress: 181 of 181 section tests complete (100%)
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Submit(@args)
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase reporter
</span><br>
<span class="quotelev2">&gt;&gt; Got hostname: shark
</span><br>
<span class="quotelev2">&gt;&gt; Submitting to MTTDatabase...
</span><br>
<span class="quotelev2">&gt;&gt; Running command: gzip --force /tmp/3omP2I6lK7.inc
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase trying proxy:  / Default (none)
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev2">&gt;&gt;    mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: test_build_section_name is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt;    database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: variant is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: number_of_results is not in mtt  
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: command is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MTT submission for test run
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: The submitting client did not submit  
</span><br>
<span class="quotelev2">&gt;&gt; valid
</span><br>
<span class="quotelev2">&gt;&gt;    IDs for one or more of the following
</span><br>
<span class="quotelev2">&gt;&gt;    'launcher', 'resource_manager', 'paramters' or 'network'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; some output.....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev2">&gt;&gt;    Simple
</span><br>
<span class="quotelev2">&gt;&gt; *** ERROR: Module aborted during require: MTT::Test::Specify::Simple
</span><br>
<span class="quotelev2">&gt;&gt;     Simple: syntax error at (eval 12728) line 4, near &quot;require
</span><br>
<span class="quotelev2">&gt;&gt;     MTT::Test::Specify::Simple
</span><br>
<span class="quotelev2">&gt;&gt;     Simple
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA

</pre>
<p>
#
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
hostlist =
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
# trial = 1
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
# local_username =
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
<p>#----------------------------------------------------------------------
<br>
<p>#======================================================================
<br>
# Install MPI phase
<br>
#======================================================================
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
ompi_configure_arguments = CFLAGS=-pipe --enable-picky --enable-debug --enable-sparse-groups --with-openib=/usr/local/ofed
<br>
<p>#----------------------------------------------------------------------
<br>
<p># Sun MPI install section illustrating the use of
<br>
# $var style substitution and &amp;perl()
<br>
[MPI install: sun-autotools]
<br>
<p>configure_arguments = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$prepend_configure_arguments \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$compiler_names \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$compiler_flags \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$append_configure_arguments \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$with_mx_lib_argument \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$with_tm_argument
<br>
<p># ompi-nightly-*
<br>
mpi_get =
<br>
<p># 32|64
<br>
bitness =
<br>
<p># --whatever, ...
<br>
prepend_configure_arguments = 
<br>
<p># --whatever, ...
<br>
append_configure_arguments =
<br>
<p># Files and directories
<br>
arch = &amp;shell(&quot;uname -p&quot;)
<br>
home = &amp;getenv(&quot;HOME&quot;)
<br>
<p>mtt_utils_dir       = $home/mtt-utils
<br>
ompi_build_dir      = $home/ompi-tools/share/ompi-build
<br>
compiler_names      = CC=cc CXX=CC FC=f90 F77=f77
<br>
compiler_flags_file = $ompi_build_dir/comp-flags.sos.$arch.$bitness.opt
<br>
compiler_flags      = &amp;shell(&quot;cat $compiler_flags_file&quot;)
<br>
<p># Only use this option if the MX directory exists 
<br>
mx_lib = /opt/mx/lib
<br>
with_mx_lib_argument = &lt;&lt;EOT
<br>
&amp;perl(&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (-d '$mx_lib') {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return '--with-mx-lib=$mx_lib';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return '';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&quot;)
<br>
EOT
<br>
<p># Only use this option if the OpenPBS directory exists 
<br>
tm = /hpc/rte/OpenPBS-$arch
<br>
with_tm_argument = &lt;&lt;EOT
<br>
&amp;perl(&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (-d '$tm') {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return '--with-tm=$tm';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return '';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&quot;)
<br>
EOT
<br>
<p># Other settings
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 1
<br>
vpath_mode = none
<br>
make_all_arguments = -j 4
<br>
make_check = 0
<br>
compiler_name = sun
<br>
compiler_version = &amp;get_sun_cc_version()
<br>
module = OMPI
<br>
<p><p># Other compiler version funclets that are available:
<br>
#    &amp;get_pgcc_version : PGI compiler suite
<br>
#    &amp;get_pathcc_version : Pathscale compiler suite
<br>
#    &amp;get_sun_version : Sun compiler suite
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
exec = mpirun @hosts@ -np &amp;test_np() @mca@ --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p># ORTE tests
<br>
exec:rte = &amp;test_executable() --host &amp;env_hosts() --prefix &amp;test_prefix() &amp;test_argv()
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,tcp,self&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl tcp,self&quot;)
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
<p>#======================================================================
<br>
# Test get phase
<br>
#======================================================================
<br>
<p>[Test get: ibm]
<br>
module = SVN
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
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: netpipe]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test get: orte]
<br>
module = SVN
<br>
svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/orte">https://svn.open-mpi.org/svn/ompi-tests/trunk/orte</a>
<br>
<p>#======================================================================
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
# skip_mpi_get = ompi-nightly-v1.1
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
<p>module = Shell
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
<p>module = Shell
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
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make mpi
<br>
EOT
<br>
<p>#----------------------------------------------------------------------
<br>
<p>[Test build: orte]
<br>
test_get = orte
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
gmake
<br>
EOT
<br>
<p>#======================================================================
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
<p>specify_module = Simple
<br>
simple_pass:tests = &amp;cat(&quot;run_list&quot;)
<br>
specify_module = Simple
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
<p>specify_module = Simple
<br>
simple_pass:tests = src/mpi2c++_test src/mpi2c++_dynamics_test
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
<p>specify_module = Simple
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
<p>argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;) 
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
<p>#----------------------------------------------------------------------
<br>
<p>[Test run: orte]
<br>
test_build = orte
<br>
pass = &amp;eq(&amp;test_wexitstatus(), 0)
<br>
<p># Give these tests a good long time to run.
<br>
# (E.g., one orte test runs through a long series of
<br>
# hostname patterns)
<br>
timeout = 300
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs()), 2), 2)
<br>
<p>module = Simple
<br>
specify_module = Simple
<br>
<p>mpi_details_exec = rte
<br>
<p>simple_only:tests = &amp;find_executables(&quot;./wrappers&quot;)
<br>
simple_only_if_exec_exists = 1
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
mttdatabase_username = 
<br>
mttdatabase_password = 
<br>
# OMPI Core: Change this to be some short string identifying your
<br>
# cluster.
<br>
mttdatabase_platform = shark
<br>
<p>#----------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0384.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
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
