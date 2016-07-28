<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 16:08:07 2007" -->
<!-- isoreceived="20070829200807" -->
<!-- sent="Wed, 29 Aug 2007 16:07:31 -0400" -->
<!-- isosent="20070829200731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] starting mtt" -->
<!-- id="E3533B5D-835E-43C8-AC29-7C39EC864750_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D5CA84.6060203_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2007-08-29 16:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0385.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0387.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the problem -- this is pretty obscure.  :-(
<br>
<p>The specify_module field is listed twice in the [Test run: onesided]  
<br>
section.
<br>
<p>I can explain what exactly is happening, but it's neither important  
<br>
nor interesting.  :-)  Remove one of them, and you should be ok.
<br>
<p>FWIW, I've been using a funclet to get my DB password recently, like  
<br>
this:
<br>
<p>mttdatabase_username = cisco
<br>
mttdatabase_password = &amp;cat(&quot;/home/mpiteam/mtt-db-password.txt&quot;)
<br>
mttdatabase_platform = svbu-mpi
<br>
<p>That allows me to SVN commit my INI file to the ompi-tests  
<br>
repository, etc.
<br>
<p><p><p>On Aug 29, 2007, at 3:35 PM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; i removed username/password since im sending this publicly..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2007, at 2:19 PM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Im trying to execute mtt on our cluster at uh..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the first time we do mtt here so bare with me here..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I edited the ompi-core-template.ini file to test only the trunk and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added the username/password/platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I allocated 4 nodes and ran:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; client/mtt -d --force -f samples/ompi-core-template.ini --trial -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scratch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send your edited ini file?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI configures and compiles fine, and then IBM tests start.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After the IBM tests complete mtt just exits with an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I copied some of the output that i saw was not right at the end..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any help is appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Mohamad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making dir:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly-trunk/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1.3a1r15990/gcc_warnings/ibm/ibm/final (cwd:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-nightly-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    a1r15990/gcc_warnings/ibm/ibm/final does not exist -- creating
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chdir
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/mschaara/mtt/trunk/scratch/test_runs/test_runs/ompi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly-trunk/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1.3a1r15990/gcc_warnings/ibm/ibm/final/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chdir /home/mschaara/mtt/trunk/scratch/installs/iCPw/tests/ibm/ibm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ### Test progress: 181 of 181 section tests complete (100%)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Submit(@args)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase reporter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Got hostname: shark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Submitting to MTTDatabase...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running command: gzip --force /tmp/3omP2I6lK7.inc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase trying proxy:  / Default (none)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: test_build_section_name is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: variant is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: command is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTT submission for test run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: The submitting client did not submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    IDs for one or more of the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    'launcher', 'resource_manager', 'paramters' or 'network'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some output.....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** ERROR: Module aborted during require: MTT::Test::Specify::Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Simple: syntax error at (eval 12728) line 4, near &quot;require
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTT::Test::Specify::Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &quot;
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi
</span><br>
<span class="quotelev1">&gt; Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science	  University of Houston
</span><br>
<span class="quotelev1">&gt; 4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</span><br>
<span class="quotelev1">&gt; #
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
<span class="quotelev1">&gt; #    - BTLs (iterate through sm, tcp, whatever high speed network 
</span><br>
<span class="quotelev1">&gt; (s) you
</span><br>
<span class="quotelev1">&gt; #      have, etc. -- as relevant)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Overall configuration
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; hostlist =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OMPI Core: if you are running in a scheduled environment and want to
</span><br>
<span class="quotelev1">&gt; # override the scheduler and set the maximum number of processes
</span><br>
<span class="quotelev1">&gt; # returned by &amp;env_max_procs(), you can fill in an integer here.
</span><br>
<span class="quotelev1">&gt; max_np =
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
<span class="quotelev1">&gt; # trial = 1
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
<span class="quotelev1">&gt; # local_username =
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
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
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Install MPI phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; ompi_configure_arguments = CFLAGS=-pipe --enable-picky --enable- 
</span><br>
<span class="quotelev1">&gt; debug --enable-sparse-groups --with-openib=/usr/local/ofed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Sun MPI install section illustrating the use of
</span><br>
<span class="quotelev1">&gt; # $var style substitution and &amp;perl()
</span><br>
<span class="quotelev1">&gt; [MPI install: sun-autotools]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure_arguments = \
</span><br>
<span class="quotelev1">&gt;         $prepend_configure_arguments \
</span><br>
<span class="quotelev1">&gt;         $compiler_names \
</span><br>
<span class="quotelev1">&gt;         $compiler_flags \
</span><br>
<span class="quotelev1">&gt;         $append_configure_arguments \
</span><br>
<span class="quotelev1">&gt;         $with_mx_lib_argument \
</span><br>
<span class="quotelev1">&gt;         $with_tm_argument
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ompi-nightly-*
</span><br>
<span class="quotelev1">&gt; mpi_get =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # 32|64
</span><br>
<span class="quotelev1">&gt; bitness =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # --whatever, ...
</span><br>
<span class="quotelev1">&gt; prepend_configure_arguments =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # --whatever, ...
</span><br>
<span class="quotelev1">&gt; append_configure_arguments =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Files and directories
</span><br>
<span class="quotelev1">&gt; arch = &amp;shell(&quot;uname -p&quot;)
</span><br>
<span class="quotelev1">&gt; home = &amp;getenv(&quot;HOME&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtt_utils_dir       = $home/mtt-utils
</span><br>
<span class="quotelev1">&gt; ompi_build_dir      = $home/ompi-tools/share/ompi-build
</span><br>
<span class="quotelev1">&gt; compiler_names      = CC=cc CXX=CC FC=f90 F77=f77
</span><br>
<span class="quotelev1">&gt; compiler_flags_file = $ompi_build_dir/comp-flags.sos.$arch. 
</span><br>
<span class="quotelev1">&gt; $bitness.opt
</span><br>
<span class="quotelev1">&gt; compiler_flags      = &amp;shell(&quot;cat $compiler_flags_file&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Only use this option if the MX directory exists
</span><br>
<span class="quotelev1">&gt; mx_lib = /opt/mx/lib
</span><br>
<span class="quotelev1">&gt; with_mx_lib_argument = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; &amp;perl(&quot;
</span><br>
<span class="quotelev1">&gt;     if (-d '$mx_lib') {
</span><br>
<span class="quotelev1">&gt;         return '--with-mx-lib=$mx_lib';
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         return '';
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; &quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Only use this option if the OpenPBS directory exists
</span><br>
<span class="quotelev1">&gt; tm = /hpc/rte/OpenPBS-$arch
</span><br>
<span class="quotelev1">&gt; with_tm_argument = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; &amp;perl(&quot;
</span><br>
<span class="quotelev1">&gt;     if (-d '$tm') {
</span><br>
<span class="quotelev1">&gt;         return '--with-tm=$tm';
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         return '';
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; &quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Other settings
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; vpath_mode = none
</span><br>
<span class="quotelev1">&gt; make_all_arguments = -j 4
</span><br>
<span class="quotelev1">&gt; make_check = 0
</span><br>
<span class="quotelev1">&gt; compiler_name = sun
</span><br>
<span class="quotelev1">&gt; compiler_version = &amp;get_sun_cc_version()
</span><br>
<span class="quotelev1">&gt; module = OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Other compiler version funclets that are available:
</span><br>
<span class="quotelev1">&gt; #    &amp;get_pgcc_version : PGI compiler suite
</span><br>
<span class="quotelev1">&gt; #    &amp;get_pathcc_version : Pathscale compiler suite
</span><br>
<span class="quotelev1">&gt; #    &amp;get_sun_version : Sun compiler suite
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # MPI run details
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev1">&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;             &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
</span><br>
<span class="quotelev1">&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
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
<span class="quotelev1">&gt;         &quot;--mca btl sm,tcp,self&quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl tcp,self&quot;)
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
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
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot;  
</span><br>
<span class="quotelev1">&gt; = &quot;skipped&quot;; then
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
<span class="quotelev1">&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX  
</span><br>
<span class="quotelev1">&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Test get phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: ibm]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev1">&gt; svn_post_export = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: mpicxx]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
</span><br>
<span class="quotelev1">&gt; svn_post_export = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: imb]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: netpipe]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: orte]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/orte">https://svn.open-mpi.org/svn/ompi-tests/trunk/orte</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Test build phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: onesided]
</span><br>
<span class="quotelev1">&gt; test_get = onesided
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; # Have the onesided tests skip the OMPI 1.1 testing; MPI-2 one-sided
</span><br>
<span class="quotelev1">&gt; # just plain doesn't work there and won't be fixed.
</span><br>
<span class="quotelev1">&gt; # skip_mpi_get = ompi-nightly-v1.1
</span><br>
<span class="quotelev1">&gt; # Can also have a skip_mpi_install for the same purpose (skip specific
</span><br>
<span class="quotelev1">&gt; # installs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: mpicxx]
</span><br>
<span class="quotelev1">&gt; test_get = mpicxx
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; ./configure CC=mpicc CXX=mpic++
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: imb]
</span><br>
<span class="quotelev1">&gt; test_get = imb
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
<span class="quotelev1">&gt; cd src
</span><br>
<span class="quotelev1">&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: netpipe]
</span><br>
<span class="quotelev1">&gt; test_get = netpipe
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
<span class="quotelev1">&gt; make mpi
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: orte]
</span><br>
<span class="quotelev1">&gt; test_get = orte
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
<span class="quotelev1">&gt; gmake
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Test Run phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; # Similar rationale to the intel test run section
</span><br>
<span class="quotelev1">&gt; simple_first:tests = &amp;find_executables(&quot;collective&quot;, &quot;communicator&quot;, \
</span><br>
<span class="quotelev1">&gt;                                        &quot;datatype&quot;, &quot;dynamic&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;environment&quot;, \
</span><br>
<span class="quotelev1">&gt;                                        &quot;group&quot;, &quot;info&quot;, &quot;io&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;onesided&quot;, \
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
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: onesided]
</span><br>
<span class="quotelev1">&gt; test_build = onesided
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = 100
</span><br>
<span class="quotelev1">&gt; np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs 
</span><br>
<span class="quotelev1">&gt; ()), 2), 2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = &amp;cat(&quot;run_list&quot;)
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: mpicxx]
</span><br>
<span class="quotelev1">&gt; test_build = mpicxx
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; argv = &amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot;-nothrow&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = src/mpi2c++_test src/mpi2c++_dynamics_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: imb correctness]
</span><br>
<span class="quotelev1">&gt; test_build = imb
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(1800, &amp;multiply(50, &amp;test_np()))
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
<span class="quotelev1">&gt; simple_only:tests = src/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: imb performance]
</span><br>
<span class="quotelev1">&gt; test_build = imb
</span><br>
<span class="quotelev1">&gt; pass = &amp;eq(&amp;cmd_wexitstatus(), 0)
</span><br>
<span class="quotelev1">&gt; timeout = -1
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could  
</span><br>
<span class="quotelev1">&gt; be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = IMB
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = src/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: netpipe]
</span><br>
<span class="quotelev1">&gt; test_build = netpipe
</span><br>
<span class="quotelev1">&gt; pass = &amp;eq(&amp;cmd_wexitstatus(), 0)
</span><br>
<span class="quotelev1">&gt; timeout = -1
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could  
</span><br>
<span class="quotelev1">&gt; be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; # NetPIPE is ping-pong only, so we only need 2 procs
</span><br>
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = NetPipe
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = NPmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: orte]
</span><br>
<span class="quotelev1">&gt; test_build = orte
</span><br>
<span class="quotelev1">&gt; pass = &amp;eq(&amp;test_wexitstatus(), 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Give these tests a good long time to run.
</span><br>
<span class="quotelev1">&gt; # (E.g., one orte test runs through a long series of
</span><br>
<span class="quotelev1">&gt; # hostname patterns)
</span><br>
<span class="quotelev1">&gt; timeout = 300
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs 
</span><br>
<span class="quotelev1">&gt; ()), 2), 2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Simple
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_details_exec = rte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple_only:tests = &amp;find_executables(&quot;./wrappers&quot;)
</span><br>
<span class="quotelev1">&gt; simple_only_if_exec_exists = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Reporter phase
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
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
<span class="quotelev1">&gt; mttdatabase_username =
</span><br>
<span class="quotelev1">&gt; mttdatabase_password =
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev1">&gt; # cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = shark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This is a backup for while debugging MTT; it also writes results to
</span><br>
<span class="quotelev1">&gt; # a local text file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
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
<span class="quotelev1">&gt; textfile_summary_footer =
</span><br>
<span class="quotelev1">&gt; textfile_detail_header =
</span><br>
<span class="quotelev1">&gt; textfile_detail_footer =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
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
<li><strong>Next message:</strong> <a href="0385.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0385.php">Mohamad Chaarawi: "Re: [MTT users] starting mtt"</a>
<li><strong>Reply:</strong> <a href="0387.php">Jeff Squyres: "Re: [MTT users] starting mtt"</a>
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
