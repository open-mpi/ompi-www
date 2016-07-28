<?
$subject_val = "Re: [MTT users] unable to pull tests";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 18:25:36 2007" -->
<!-- isoreceived="20071114232536" -->
<!-- sent="Wed, 14 Nov 2007 18:25:30 -0500" -->
<!-- isosent="20071114232530" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] unable to pull tests" -->
<!-- id="20071114232530.GA19507_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="473B70EB.5050906_at_cs.ubc.ca" -->
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
<strong>Subject:</strong> Re: [MTT users] unable to pull tests<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 18:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0452.php">Karol Mroz: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Previous message:</strong> <a href="0450.php">Karol Mroz: "[MTT users] unable to pull tests"</a>
<li><strong>In reply to:</strong> <a href="0450.php">Karol Mroz: "[MTT users] unable to pull tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0452.php">Karol Mroz: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Reply:</strong> <a href="0452.php">Karol Mroz: "Re: [MTT users] unable to pull tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have access to the ompi-tests repository?
<br>
What happens if you do this command outside of MTT?
<br>
<p>&nbsp;&nbsp;$ svn export <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
<br>
<p>You could also try using &quot;http&quot;, instead of &quot;https&quot; in
<br>
your svn_url.
<br>
<p>-Ethan
<br>
<p><p>On Wed, Nov/14/2007 02:04:27PM, Karol Mroz wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello everyone...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been trying to get MTT set up to run tests on the SCTP BTL Brad
</span><br>
<span class="quotelev1">&gt; Penoff and I (over at UBC) have developed. While I'm able to obtain a
</span><br>
<span class="quotelev1">&gt; nightly  tarball, build and install the Open MPI middleware, I'm unable
</span><br>
<span class="quotelev1">&gt; to pull any tests for the various svn repositories. Currently I've tried
</span><br>
<span class="quotelev1">&gt; pulling IBM and Onesided tests as shown in the sample
</span><br>
<span class="quotelev1">&gt; ompi-core-template.ini file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the output I see from the console when running with --verbose:
</span><br>
<span class="quotelev1">&gt; - ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** MTT: ./mtt -f ../samples/ompi-core-template-kmroz.ini --verbose
</span><br>
<span class="quotelev1">&gt; *** Reporter initializing
</span><br>
<span class="quotelev1">&gt; *** Reporter initialized
</span><br>
<span class="quotelev1">&gt; *** MPI get phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI get: [mpi get: ompi-nightly-trunk]
</span><br>
<span class="quotelev1">&gt;    Checking for new MPI sources...
</span><br>
<span class="quotelev1">&gt;    No new MPI sources
</span><br>
<span class="quotelev1">&gt; *** MPI get phase complete
</span><br>
<span class="quotelev1">&gt; *** MPI install phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI install [mpi install: gcc warnings]
</span><br>
<span class="quotelev1">&gt;    Installing MPI: [ompi-nightly-trunk] / [1.3a1r16706] / [gcc warnings]...
</span><br>
<span class="quotelev1">&gt;    Completed MPI install successfully
</span><br>
<span class="quotelev1">&gt;    Installing MPI: [ompi-nightly-trunk] / [1.3a1r16682] / [gcc warnings]...
</span><br>
<span class="quotelev1">&gt;    Completed MPI install successfully
</span><br>
<span class="quotelev1">&gt;    Installing MPI: [ompi-nightly-trunk] / [1.3a1r16723] / [gcc warnings]...
</span><br>
<span class="quotelev1">&gt;    Completed MPI install successfully
</span><br>
<span class="quotelev1">&gt; *** MPI install phase complete
</span><br>
<span class="quotelev1">&gt; *** Test get phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: onesided]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; - ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, MTT seems to hang on 'Checking for new test sources.'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will attach a copy of the .ini file in hopes that someone may be able
</span><br>
<span class="quotelev1">&gt; to point me in the right direction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi-core-template-kmroz.ini:
</span><br>
<span class="quotelev1">&gt; - -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2006-2007 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; # Copyright (c) 2006-2007 Sun Microystems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Template MTT configuration file for Open MPI core testers.  The
</span><br>
<span class="quotelev1">&gt; # intent for this template file is to establish at least some loose
</span><br>
<span class="quotelev1">&gt; # guidelines for what Open MPI core testers should be running on a
</span><br>
<span class="quotelev1">&gt; # nightly basis.  This file is not intended to be an exhaustive sample
</span><br>
<span class="quotelev1">&gt; # of all possible fields and values that MTT offers.  Each site will
</span><br>
<span class="quotelev1">&gt; # undoubtedly have to edit this template for their local needs (e.g.,
</span><br>
<span class="quotelev1">&gt; # pick compilers to use, etc.), but this file provides a baseline set
</span><br>
<span class="quotelev1">&gt; # of configurations that we intend you to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI core members will need to edit some values in this file based
</span><br>
<span class="quotelev1">&gt; # on your local testing environment.  Look for comments with &quot;OMPI
</span><br>
<span class="quotelev1">&gt; # Core:&quot; for instructions on what to change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Note that this file is artificially longer than it really needs to
</span><br>
<span class="quotelev1">&gt; # be -- a bunch of values are explicitly set here that are exactly
</span><br>
<span class="quotelev1">&gt; # equivalent to their defaults.  This is mainly because there is no
</span><br>
<span class="quotelev1">&gt; # reliable form of documentation for this ini file yet, so the values
</span><br>
<span class="quotelev1">&gt; # here comprise a good set of what options are settable (although it
</span><br>
<span class="quotelev1">&gt; # is not a comprehensive set).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Also keep in mind that at the time of this writing, MTT is still
</span><br>
<span class="quotelev1">&gt; # under active development and therefore the baselines established in
</span><br>
<span class="quotelev1">&gt; # this file may change on a relatively frequent basis.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # The guidelines are as follows:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # 1. Download and test nightly snapshot tarballs of at least one of
</span><br>
<span class="quotelev1">&gt; #    the following:
</span><br>
<span class="quotelev1">&gt; #    - the trunk (highest preference)
</span><br>
<span class="quotelev1">&gt; #    - release branches (highest preference is the most recent release
</span><br>
<span class="quotelev1">&gt; #      branch; lowest preference is the oldest release branch)
</span><br>
<span class="quotelev1">&gt; # 2. Run all 4 correctness test suites from the ompi-tests SVN
</span><br>
<span class="quotelev1">&gt; #    - trivial, as many processes as possible
</span><br>
<span class="quotelev1">&gt; #    - intel tests with all_tests_no_perf, up to 64 processes
</span><br>
<span class="quotelev1">&gt; #    - IBM, as many processes as possible
</span><br>
<span class="quotelev1">&gt; #    - IMB, as many processes as possible
</span><br>
<span class="quotelev1">&gt; # 3. Run with as many different components as possible
</span><br>
<span class="quotelev1">&gt; #    - PMLs (ob1, dr)
</span><br>
<span class="quotelev1">&gt; #    - BTLs (iterate through sm, tcp, whatever high speed network(s) you
</span><br>
<span class="quotelev1">&gt; #      have, etc. -- as relevant)
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; # OMPI Core: if you are not running in a scheduled environment and you
</span><br>
<span class="quotelev1">&gt; # have a fixed hostfile for what nodes you'll be running on, fill in
</span><br>
<span class="quotelev1">&gt; # the absolute pathname to it here.  If you do not have a hostfile,
</span><br>
<span class="quotelev1">&gt; # leave it empty.  Example:
</span><br>
<span class="quotelev1">&gt; #     hostfile = /home/me/mtt-runs/mtt-hostfile
</span><br>
<span class="quotelev1">&gt; # This file will be parsed and will automatically set a valid value
</span><br>
<span class="quotelev1">&gt; # for &amp;env_max_np() (it'll count the number of lines in the hostfile,
</span><br>
<span class="quotelev1">&gt; # adding slots/cpu counts if it finds them).  The &quot;hostfile&quot; value is
</span><br>
<span class="quotelev1">&gt; # ignored if you are running in a recognized scheduled environment.
</span><br>
<span class="quotelev1">&gt; hostfile =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: if you would rather list the hosts individually on the
</span><br>
<span class="quotelev1">&gt; # mpirun command line, list hosts here delimited by whitespace (if you
</span><br>
<span class="quotelev1">&gt; # have a hostfile listed above, this value will be ignored!).  Hosts
</span><br>
<span class="quotelev1">&gt; # can optionally be suffixed with &quot;:num&quot;, where &quot;num&quot; is an integer
</span><br>
<span class="quotelev1">&gt; # indicating how many processes may be started on that machine (if not
</span><br>
<span class="quotelev1">&gt; # specified, &quot;:1&quot; is assumed).  The sum of all of these values is used
</span><br>
<span class="quotelev1">&gt; # for &amp;env_max_np() at run time.  Example (4 uniprocessors):
</span><br>
<span class="quotelev1">&gt; #    hostlist = node1 node2 node3 node4
</span><br>
<span class="quotelev1">&gt; # Another example (4 2-way SMPs):
</span><br>
<span class="quotelev1">&gt; #    hostlist = node1:2 node2:2 node3:2 node4:2
</span><br>
<span class="quotelev1">&gt; # The &quot;hostlist&quot; value is ignored if you are running in a scheduled
</span><br>
<span class="quotelev1">&gt; # environment or if you have specified a hostfile.
</span><br>
<span class="quotelev1">&gt; hostlist = localhost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: if you are running in a scheduled environment and want to
</span><br>
<span class="quotelev1">&gt; # override the scheduler and set the maximum number of processes
</span><br>
<span class="quotelev1">&gt; # returned by &amp;env_max_procs(), you can fill in an integer here.
</span><br>
<span class="quotelev1">&gt; max_np = 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Output display preference; the default width at which MTT
</span><br>
<span class="quotelev1">&gt; # output will wrap.
</span><br>
<span class="quotelev1">&gt; textwrap = 76
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: After the timeout for a command has passed, wait this
</span><br>
<span class="quotelev1">&gt; # many additional seconds to drain all output, and then kill it with
</span><br>
<span class="quotelev1">&gt; # extreme prejiduce.
</span><br>
<span class="quotelev1">&gt; drain_timeout = 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Whether this invocation of the client is a test of the
</span><br>
<span class="quotelev1">&gt; # client setup itself.  Specifically, this value should be set to true
</span><br>
<span class="quotelev1">&gt; # (1) if you are testing your MTT client and/or INI file and do not
</span><br>
<span class="quotelev1">&gt; # want the results included in normal reporting in the MTT central
</span><br>
<span class="quotelev1">&gt; # results database.  Results submitted in &quot;trial&quot; mode are not
</span><br>
<span class="quotelev1">&gt; # viewable (by default) on the central database, and are automatically
</span><br>
<span class="quotelev1">&gt; # deleted from the database after a short time period (e.g., a week).
</span><br>
<span class="quotelev1">&gt; # Setting this value to 1 is exactly equivalent to passing &quot;--trial&quot;
</span><br>
<span class="quotelev1">&gt; # on the MTT client command line.  However, any value specified here
</span><br>
<span class="quotelev1">&gt; # in this INI file will override the &quot;--trial&quot; setting on the command
</span><br>
<span class="quotelev1">&gt; # line (i.e., if you set &quot;trial = 0&quot; here in the INI file, that will
</span><br>
<span class="quotelev1">&gt; # override and cancel the effect of &quot;--trial&quot; on the command line).
</span><br>
<span class="quotelev1">&gt; # trial = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Set the scratch parameter here (if you do not want it to
</span><br>
<span class="quotelev1">&gt; # be automatically set to your current working directory). Setting
</span><br>
<span class="quotelev1">&gt; # this parameter accomplishes the same thing that the --scratch option
</span><br>
<span class="quotelev1">&gt; # does.
</span><br>
<span class="quotelev1">&gt; # scratch = &amp;getenv(&quot;HOME&quot;)/mtt-scratch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Set local_username here if you would prefer to not have
</span><br>
<span class="quotelev1">&gt; # your local user ID in the MTT database
</span><br>
<span class="quotelev1">&gt; local_username = kmroz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: --force can be set here, instead of at the command line.
</span><br>
<span class="quotelev1">&gt; # Useful for a developer workspace in which it makes no sense to not
</span><br>
<span class="quotelev1">&gt; # use --force
</span><br>
<span class="quotelev1">&gt; # force = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Specify a list of sentinel files that MTT will regularly
</span><br>
<span class="quotelev1">&gt; # check for.  If these files exist, MTT will exit more-or-less
</span><br>
<span class="quotelev1">&gt; # immediately (i.e., after the current test completes) and report all
</span><br>
<span class="quotelev1">&gt; # of its results.  This is a graceful mechanism to make MTT stop right
</span><br>
<span class="quotelev1">&gt; # where it is but not lose any results.
</span><br>
<span class="quotelev1">&gt; # terminate_files = &amp;getenv(&quot;HOME&quot;)/mtt-stop,&amp;scratch_root()/mtt-stop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Specify a default description string that is used in the
</span><br>
<span class="quotelev1">&gt; # absence of description strings in the MPI install, Test build, and
</span><br>
<span class="quotelev1">&gt; # Test run sections.  The intent of this field is to record variable
</span><br>
<span class="quotelev1">&gt; # data that is outside the scope, but has effect on the software under
</span><br>
<span class="quotelev1">&gt; # test (e.g., firmware version of a NIC).  If no description string is
</span><br>
<span class="quotelev1">&gt; # specified here and no description strings are specified below, the
</span><br>
<span class="quotelev1">&gt; # description data field is left empty when reported.
</span><br>
<span class="quotelev1">&gt; # description = NIC firmware: &amp;system(&quot;get_nic_firmware_rev&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Specify a logfile where you want all MTT output to be
</span><br>
<span class="quotelev1">&gt; # sent in addition to stdout / stderr.
</span><br>
<span class="quotelev1">&gt; # logfile = /tmp/my-logfile.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: If you have additional .pm files for your own funclets,
</span><br>
<span class="quotelev1">&gt; # you can have a comma-delimited list of them here.  Note that each
</span><br>
<span class="quotelev1">&gt; # .pm file *must* be a package within the MTT::Values::Functions
</span><br>
<span class="quotelev1">&gt; # namespace.  For example, having a Cisco.pm file must include the
</span><br>
<span class="quotelev1">&gt; # line:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #     package MTT::Values::Functions::Cisco;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If this file contains a perl function named foo, you can invoke this
</span><br>
<span class="quotelev1">&gt; # functlet as &amp;Cisco::foo().  Note that funclet files are loaded
</span><br>
<span class="quotelev1">&gt; # almost immediately, so you can use them even for other field values
</span><br>
<span class="quotelev1">&gt; # in the MTT section.
</span><br>
<span class="quotelev1">&gt; # funclet_files = /path/to/file1.pm, /path/to/file2.pm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Lock]
</span><br>
<span class="quotelev1">&gt; # The only module available is the MTTLockServer, and requires running
</span><br>
<span class="quotelev1">&gt; # the mtt-lock-server executable somewhere.  You can leave this
</span><br>
<span class="quotelev1">&gt; # section blank and there will be no locking.
</span><br>
<span class="quotelev1">&gt; #module = MTTLockServer
</span><br>
<span class="quotelev1">&gt; #mttlockserver_host = hostname where mtt-lock-server is running
</span><br>
<span class="quotelev1">&gt; #mttlockserver_port = integer port number of the mtt-lock-server
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
<span class="quotelev1">&gt; [MPI install: gcc warnings]
</span><br>
<span class="quotelev1">&gt; mpi_get = ompi-nightly-trunk
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; bitness = 32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = OMPI
</span><br>
<span class="quotelev1">&gt; ompi_vpath_mode = none
</span><br>
<span class="quotelev1">&gt; # OMPI Core: This is a GNU make option; if you are not using GNU make,
</span><br>
<span class="quotelev1">&gt; # you'll probably want to delete this field (i.e., leave it to its
</span><br>
<span class="quotelev1">&gt; # default [empty] value).
</span><br>
<span class="quotelev1">&gt; ompi_make_all_arguments = -j 4
</span><br>
<span class="quotelev1">&gt; ompi_make_check = 1
</span><br>
<span class="quotelev1">&gt; # OMPI Core: You will likely need to update these values for whatever
</span><br>
<span class="quotelev1">&gt; # compiler you want to use.  You can pass any configure flags that you
</span><br>
<span class="quotelev1">&gt; # want, including those that change which compiler to use (e.g., CC=cc
</span><br>
<span class="quotelev1">&gt; # CXX=CC F77=f77 FC=f90).  Valid compiler names are: gnu, pgi, intel,
</span><br>
<span class="quotelev1">&gt; # ibm, kai, absoft, pathscale, sun.  If you have other compiler names
</span><br>
<span class="quotelev1">&gt; # that you need, let us know.  Note that the compiler_name flag is
</span><br>
<span class="quotelev1">&gt; # solely for classifying test results; it does not automatically pass
</span><br>
<span class="quotelev1">&gt; # values to configure to set the compiler.
</span><br>
<span class="quotelev1">&gt; ompi_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; ompi_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; ompi_configure_arguments = CFLAGS=-pipe --enable-picky --enable-debug
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
<span class="quotelev1">&gt; [MPI Details: Open MPI]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # MPI tests
</span><br>
<span class="quotelev1">&gt; exec = mpirun @hosts@ -np &amp;test_np() @mca@ --prefix &amp;test_prefix()
</span><br>
<span class="quotelev1">&gt; &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ORTE tests
</span><br>
<span class="quotelev1">&gt; exec:rte = &amp;test_executable() --host &amp;env_hosts() --prefix
</span><br>
<span class="quotelev1">&gt; &amp;test_prefix() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;--hostfile &quot; . &amp;hostfile(), \
</span><br>
<span class="quotelev1">&gt;             &amp;if(&amp;have_hostlist(), &quot;--host &quot; . &amp;hostlist(), &quot;&quot;))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Example showing conditional substitution based on the MPI get
</span><br>
<span class="quotelev1">&gt; # section name (e.g., different versions of OMPI have different
</span><br>
<span class="quotelev1">&gt; # capabilities / bugs).
</span><br>
<span class="quotelev1">&gt; mca = &amp;enumerate( \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,tcp,self_at_v1_1_mca_params@&quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl tcp,self_at_v1_1_mca_params@&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Boolean indicating IB connectivity
</span><br>
<span class="quotelev1">&gt; is_up = &amp;check_ipoib_connectivity()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Figure out which mca's to use
</span><br>
<span class="quotelev1">&gt; mca = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; &amp;perl('
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      # Return cached mca, if we have it
</span><br>
<span class="quotelev1">&gt;      if (defined(@mca)) {
</span><br>
<span class="quotelev1">&gt;          return \@mca;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      my @hosts = split /\s+|,/, hostlist_hosts();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (scalar(@hosts) &lt; 2) {
</span><br>
<span class="quotelev1">&gt;          push(@mca, &quot;--mca btl self,sm&quot;);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          if ($ib_up) {
</span><br>
<span class="quotelev1">&gt;              push(@mca, &quot;--mca btl self,udapl&quot;);
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              push(@mca, &quot;--mca btl self,tcp&quot;);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return \@mca;
</span><br>
<span class="quotelev1">&gt; ')
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI v1.1 cannot handle heterogeneous numbers of TCP or OpenIB
</span><br>
<span class="quotelev1">&gt; # interfaces within a single job.  So restrict it to a finite number
</span><br>
<span class="quotelev1">&gt; # that will be the same across all processes in the job (adjust for
</span><br>
<span class="quotelev1">&gt; # your own site, of course -- this particular example is meaningless
</span><br>
<span class="quotelev1">&gt; # if all nodes at your site have a homogeneous type and number of
</span><br>
<span class="quotelev1">&gt; # network interfaces).
</span><br>
<span class="quotelev1">&gt; v1_1_mca_params = &amp;if(&amp;eq(&amp;mpi_get_name(), &quot;ompi-nightly-v1.1&quot;), \
</span><br>
<span class="quotelev1">&gt; 	&quot; --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca
</span><br>
<span class="quotelev1">&gt; btl_openib_max_btls 1&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # WARNING: THIS DEFAULT after_each_exec STEP IS PRONE TO FAILURE!
</span><br>
<span class="quotelev1">&gt; # Given that part of what we are testing is ORTE itself, using orterun
</span><br>
<span class="quotelev1">&gt; # to launch something to cleanup can be problematic.  We *HIGHLY*
</span><br>
<span class="quotelev1">&gt; # recommend that you replace the after_each_exec section default value
</span><br>
<span class="quotelev1">&gt; # below with something that your run-time system can performan
</span><br>
<span class="quotelev1">&gt; # natively.  For example, putting &quot;srun -N $SLURM_NNODES killall -9
</span><br>
<span class="quotelev1">&gt; # mpirun orted &amp;test_executable()&quot; works nicely on SLURM / Linux
</span><br>
<span class="quotelev1">&gt; # systems -- assuming that your MTT run has all nodes exclusively to
</span><br>
<span class="quotelev1">&gt; # itself (i.e., that the &quot;killall&quot; won't kill some legitimate jobs).
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # A helper script is installed by the &quot;OMPI&quot; MPI Install module named
</span><br>
<span class="quotelev1">&gt; # &quot;mtt_ompi_cleanup.pl&quot;.  This script is orterun-able and will kill
</span><br>
<span class="quotelev1">&gt; # all rogue orteds on a node and whack any session directories.
</span><br>
<span class="quotelev1">&gt; # Invoke via orterun just to emphasize that it is not an MPI
</span><br>
<span class="quotelev1">&gt; # application.  The helper script is installed in OMPI's bin dir, so
</span><br>
<span class="quotelev1">&gt; # it'll automatically be found in the path (because OMPI's bin dir is
</span><br>
<span class="quotelev1">&gt; # in the path).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; # We can exit if the test passed or was skipped (i.e., there's no need
</span><br>
<span class="quotelev1">&gt; # to cleanup).
</span><br>
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
</span><br>
<span class="quotelev1">&gt; &quot;skipped&quot;; then
</span><br>
<span class="quotelev1">&gt;     exit 0
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;     args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;     args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; #[Test get: ibm]
</span><br>
<span class="quotelev1">&gt; #module = SVN
</span><br>
<span class="quotelev1">&gt; #svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev1">&gt; #svn_post_export = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; #./autogen.sh
</span><br>
<span class="quotelev1">&gt; #EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: onesided]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
</span><br>
<span class="quotelev1">&gt; svn_post_export = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; [Test build: ibm]
</span><br>
<span class="quotelev1">&gt; test_get = ibm
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
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; ./configure CC=mpicc CXX=mpic++ F77=mpif77
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #[Test build: onesided]
</span><br>
<span class="quotelev1">&gt; #test_get = onesided
</span><br>
<span class="quotelev1">&gt; #save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; #merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; #stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; # Have the onesided tests skip the OMPI 1.1 testing; MPI-2 one-sided
</span><br>
<span class="quotelev1">&gt; # just plain doesn't work there and won't be fixed.
</span><br>
<span class="quotelev1">&gt; #skip_mpi_get = ompi-nightly-v1.1
</span><br>
<span class="quotelev1">&gt; # Can also have a skip_mpi_install for the same purpose (skip specific
</span><br>
<span class="quotelev1">&gt; # installs)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #module = Shell
</span><br>
<span class="quotelev1">&gt; #shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; #./configure
</span><br>
<span class="quotelev1">&gt; #make
</span><br>
<span class="quotelev1">&gt; #EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; [Test run: ibm]
</span><br>
<span class="quotelev1">&gt; test_build = ibm
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; skipped = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 77))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
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
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt;  Similar rationale to the intel test run section
</span><br>
<span class="quotelev1">&gt; simple_first:tests = &amp;find_executables(&quot;collective&quot;, &quot;communicator&quot;, \
</span><br>
<span class="quotelev1">&gt;                                        &quot;datatype&quot;, &quot;dynamic&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;environment&quot;, \
</span><br>
<span class="quotelev1">&gt;                                        &quot;group&quot;, &quot;info&quot;, &quot;io&quot;, &quot;onesided&quot;, \
</span><br>
<span class="quotelev1">&gt;                                        &quot;pt2pt&quot;, &quot;topology&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Similar rationale to the intel test run section
</span><br>
<span class="quotelev1">&gt; simple_fail:tests = environment/abort environment/final
</span><br>
<span class="quotelev1">&gt; simple_fail:pass = &amp;and(&amp;cmd_wifexited(), &amp;ne(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; simple_fail:exclusive = 1
</span><br>
<span class="quotelev1">&gt; simple_fail:np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #[Test run: onesided]
</span><br>
<span class="quotelev1">&gt; #test_build = onesided
</span><br>
<span class="quotelev1">&gt; #pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; #timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; #save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; #merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; #stdout_save_lines = 100
</span><br>
<span class="quotelev1">&gt; #np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs()),
</span><br>
<span class="quotelev1">&gt; 2), 2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #specify_module = Simple
</span><br>
<span class="quotelev1">&gt; #simple_pass:tests = &amp;cat(&quot;run_list&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; #[Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; #module = MTTDatabase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; #mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev1">&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; #mttdatabase_username = you must set this value
</span><br>
<span class="quotelev1">&gt; #mttdatabase_password = you must set this value
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev1">&gt; # cluster.
</span><br>
<span class="quotelev1">&gt; #mttdatabase_platform = you must set this value
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #[Reporter: text file backup]
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
<span class="quotelev1">&gt; hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #textfile_summary_footer =
</span><br>
<span class="quotelev1">&gt; #textfile_detail_header =
</span><br>
<span class="quotelev1">&gt; #textfile_detail_footer =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; Karol Mroz
</span><br>
<span class="quotelev1">&gt; kmroz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.6 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iD8DBQFHO3Druoug78g/Mz8RAiReAJ0fl9txgv+VjI2St+c88dN9iR8oBQCfead+
</span><br>
<span class="quotelev1">&gt; qfz2+ijSfk8GMvy+z3Lbi04=
</span><br>
<span class="quotelev1">&gt; =SHO4
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
<li><strong>Next message:</strong> <a href="0452.php">Karol Mroz: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Previous message:</strong> <a href="0450.php">Karol Mroz: "[MTT users] unable to pull tests"</a>
<li><strong>In reply to:</strong> <a href="0450.php">Karol Mroz: "[MTT users] unable to pull tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0452.php">Karol Mroz: "Re: [MTT users] unable to pull tests"</a>
<li><strong>Reply:</strong> <a href="0452.php">Karol Mroz: "Re: [MTT users] unable to pull tests"</a>
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
