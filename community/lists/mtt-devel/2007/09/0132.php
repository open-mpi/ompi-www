<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 10:50:10 2007" -->
<!-- isoreceived="20070925145010" -->
<!-- sent="Tue, 25 Sep 2007 10:49:52 -0400" -->
<!-- isosent="20070925144952" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT server error (user: uh)" -->
<!-- id="4E9905A8-5637-49E3-ACE6-7F6C5C4F2735_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F91D94.3080409_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2007-09-25 10:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0133.php">Josh Hursey: "[MTT devel] Toy of the day: Cacti"</a>
<li><strong>Previous message:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You know -- I think the run_random_hostname_patterns.pl thingy was  
<br>
from the ORTE tests that Sun started but never had a chance to finish  
<br>
(under ompi-tests/orte).
<br>
<p>Were you running something under there, perchance?
<br>
<p>Regardless, I think we now know that we can discard these errors from  
<br>
UH -- they're nothing to worry about.
<br>
<p><p>On Sep 25, 2007, at 10:39 AM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; attached now ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, somehow i missed it!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what's going on exactly here, Ive never seen the
</span><br>
<span class="quotelev2">&gt;&gt; run_random_hostname_patterns.pl value..
</span><br>
<span class="quotelev2">&gt;&gt; but i remember that i had some issues with hosts when setting the  
</span><br>
<span class="quotelev2">&gt;&gt; hosts
</span><br>
<span class="quotelev2">&gt;&gt; value. But then i commented them out. i don't know if that's the
</span><br>
<span class="quotelev2">&gt;&gt; problem, but i attached also all the ini files that im using..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;--hostfile &quot; . &amp;hostfile(), \
</span><br>
<span class="quotelev2">&gt;&gt;             &amp;if(&amp;have_hostlist(), &quot;--host &quot; . &amp;hostlist(), &quot;&quot;))
</span><br>
<span class="quotelev2">&gt;&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev2">&gt;&gt; #hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt;&gt; #            &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mohamad --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you have a chance to look at this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 19, 2007, at 7:30 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's weird; I don't know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mohamad: can you send a snipit of your INI file that sets up the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;run_random_hostname_patterns.pl&quot;?  I'm curious to see how it's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; propagating down into the resource_manager value...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 18, 2007, at 8:43 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is weird. How could the script &quot;./wrappers/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run_random_hostname_patterns.pl&quot; be submitted as the 'launcher' to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the database? I thought submit.php would only get valid launchers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the client?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 18, 2007, at 8:05 PM, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SQL QUERY: INSERT INTO test_run_command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (test_run_command_id, launcher, resource_mgr, parameters,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; network,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; test_run_network_id) VALUES
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     ('132', './wrappers/run_random_hostname_patterns.pl',  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 'slurm', '',
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '', '2')
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SQL ERROR: ERROR:  value too long for type character varying(16)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SQL ERROR:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; ompi_configure_arguments = --enable-picky --enable-debug --enable- 
</span><br>
<span class="quotelev1">&gt; sparse-groups --with-openib=/usr/local/ofed
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
<span class="quotelev1">&gt; #hosts = &amp;if(&amp;have_hostfile(), &quot;--hostfile &quot; . &amp;hostfile(), \
</span><br>
<span class="quotelev1">&gt; #            &amp;if(&amp;have_hostlist(), &quot;--host &quot; . &amp;hostlist(), &quot;&quot;))
</span><br>
<span class="quotelev1">&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev1">&gt; #hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile 
</span><br>
<span class="quotelev1">&gt; ()&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt; #            &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist 
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
<span class="quotelev1">&gt;         &quot;--mca btl openib,sm,self --mca mpi_leave_pinned 1&quot;)
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
<span class="quotelev1">&gt;              push(@mca, &quot;--mca btl self,openib&quot;);
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
<span class="quotelev1">&gt; #after_each_exec = &amp;if(&amp;ne(&quot;&quot;, &amp;getenv(&quot;SLURM_NNODES&quot;)), &quot;srun -N  
</span><br>
<span class="quotelev1">&gt; &amp;getenv(&quot;SLURM_NNODES&quot;)&quot;) ~/mtt-testing/after_each_exec.pl
</span><br>
<span class="quotelev1">&gt; after_each_exec = srun -N $SLURM_NNODES killall -9 mpirun orted  
</span><br>
<span class="quotelev1">&gt; &amp;test_executable()
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
<span class="quotelev1">&gt; timeout = 5:00
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
<span class="quotelev1">&gt; mttdatabase_username = uh
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = mttdatabase_password = &amp;stringify(&amp;cat(&quot;/ 
</span><br>
<span class="quotelev1">&gt; home/mschaara/mtt-testing/mtt-db-password.txt&quot;))
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
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev1">&gt; #===================================================================== 
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev1">&gt; # database
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev1">&gt; description = [testbake]
</span><br>
<span class="quotelev1">&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real  
</span><br>
<span class="quotelev1">&gt; results
</span><br>
<span class="quotelev1">&gt; trial = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Put other values here as relevant to your environment.
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
<span class="quotelev1">&gt; # Put values here as relevant to your environment.
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
<span class="quotelev1">&gt; mpi_details = OMPI
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
<span class="quotelev1">&gt; [MPI get: MPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_details = MPICH2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/">http://www-unix.mcs.anl.gov/mpi/mpich2/downloads/</a> 
</span><br>
<span class="quotelev1">&gt; mpich2-1.0.5p4.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI get: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_details = MVAPICH2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://mvapich.cse.ohio-state.edu/download/mvapich2/">http://mvapich.cse.ohio-state.edu/download/mvapich2/</a> 
</span><br>
<span class="quotelev1">&gt; mvapich2-0.9.8p3.tar.gz
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
<span class="quotelev1">&gt; # All flavors of Open MPI
</span><br>
<span class="quotelev1">&gt; [MPI install: OMPI/GNU-standard]
</span><br>
<span class="quotelev1">&gt; mpi_get = ompi-nightly-trunk
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = OMPI
</span><br>
<span class="quotelev1">&gt; ompi_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; ompi_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; # Adjust these configure flags for your site
</span><br>
<span class="quotelev1">&gt; ompi_configure_arguments = CFLAGS=-O3 --enable-mpirun-prefix-by- 
</span><br>
<span class="quotelev1">&gt; default --enable-branch-probabilities --disable-heterogeneous -- 
</span><br>
<span class="quotelev1">&gt; without-mpi-param-check --enable-sparse-groups --with-openib=/usr/ 
</span><br>
<span class="quotelev1">&gt; local/ofed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI install: MPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_get = mpich2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev1">&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev1">&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev1">&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev1">&gt; prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = MPICH2
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mpich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; mpich2_configure_arguments = --disable-f90 CFLAGS=-O3 --enable-fast  
</span><br>
<span class="quotelev1">&gt; --with-device=ch3:nemesis
</span><br>
<span class="quotelev1">&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev1">&gt; mpich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
</span><br>
<span class="quotelev1">&gt; mpich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI install: MVAPICH2]
</span><br>
<span class="quotelev1">&gt; mpi_get = mvapich2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; # Adjust this for your site (this is what works at Cisco).  Needed to
</span><br>
<span class="quotelev1">&gt; # launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
</span><br>
<span class="quotelev1">&gt; # all the way through the test run phases that use this MPI install,
</span><br>
<span class="quotelev1">&gt; # where the test executables will need to have this set.
</span><br>
<span class="quotelev1">&gt; prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = MVAPICH2
</span><br>
<span class="quotelev1">&gt; # Adjust this to be where your OFED is installed
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = F77 gfortran
</span><br>
<span class="quotelev1">&gt; mvapich2_setenv = LIBS -L/usr/local/ofed/lib64 -libverbs -lpthread
</span><br>
<span class="quotelev1">&gt; mvapich2_build_script = make.mvapich2.ofa
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_name = gnu
</span><br>
<span class="quotelev1">&gt; mvapich2_compiler_version = &amp;get_gcc_version()
</span><br>
<span class="quotelev1">&gt; # These are needed to launch through SLURM; adjust as appropriate.
</span><br>
<span class="quotelev1">&gt; mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib
</span><br>
<span class="quotelev1">&gt; mvapich2_additional_wrapper_libs = -lpmi
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
<span class="quotelev1">&gt; [MPI Details: OMPI]
</span><br>
<span class="quotelev1">&gt; # Check &amp;test_alloc() for byslot or bynode
</span><br>
<span class="quotelev1">&gt; exec = mpirun @alloc@ -np &amp;test_np() @mca@ &amp;test_executable()  
</span><br>
<span class="quotelev1">&gt; &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; parameters = &amp;MPI::OMPI::find_mpirun_params(&amp;test_command_line(), \
</span><br>
<span class="quotelev1">&gt;                                             &amp;test_executable())
</span><br>
<span class="quotelev1">&gt; network = &amp;MPI::OMPI::find_network(&amp;test_command_line(),  
</span><br>
<span class="quotelev1">&gt; &amp;test_executable())
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;--bynode&quot;, &quot;--byslot&quot;)
</span><br>
<span class="quotelev1">&gt; mca = &amp;enumerate( \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,tcp,self &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl tcp,self &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,openib,self &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl sm,openib,self --mca mpi_leave_pinned 1 &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self --mca mpi_leave_pinned 1 &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self --mca mpi_leave_pinned_pipeline 1 &quot;, \
</span><br>
<span class="quotelev1">&gt;         &quot;--mca btl openib,self --mca btl_openib_use_srq 1 &quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # It is important that the after_each_exec step is a single
</span><br>
<span class="quotelev1">&gt; # command/line so that MTT will launch it directly (instead of via a
</span><br>
<span class="quotelev1">&gt; # temporary script).  This is because the &quot;srun&quot; command is
</span><br>
<span class="quotelev1">&gt; # (intentionally) difficult to kill in some cases.  See
</span><br>
<span class="quotelev1">&gt; # <a href="https://svn.open-mpi.org/trac/mtt/changeset/657">https://svn.open-mpi.org/trac/mtt/changeset/657</a> for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after_each_exec = &amp;if(&amp;ne(&quot;&quot;, &amp;getenv(&quot;SLURM_NNODES&quot;)), &quot;srun -N  
</span><br>
<span class="quotelev1">&gt; &quot; . &amp;getenv(&quot;SLURM_NNODES&quot;)) /home/mschaara/mtt-testing/ 
</span><br>
<span class="quotelev1">&gt; after_each_exec.pl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI Details: MPICH2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev1">&gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev1">&gt; # happen).
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; network = loopback,ethernet,shmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # In this SLURM example, if each node has 4 CPUs, telling SLURM to
</span><br>
<span class="quotelev1">&gt; # launching &quot;by node&quot; means specifying that each MPI process will  
</span><br>
<span class="quotelev1">&gt; use 4
</span><br>
<span class="quotelev1">&gt; # CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MPI Details: MVAPICH2]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Launching through SLURM.  If you use mpdboot instead, you need to
</span><br>
<span class="quotelev1">&gt; # ensure that multiple mpd's on the same node don't conflict (or never
</span><br>
<span class="quotelev1">&gt; # happen).
</span><br>
<span class="quotelev1">&gt; exec = srun @alloc@ -n &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # If not using SLURM, you'll need something like this (not tested).
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; #exec = mpiexec -np &amp;test_np() --host &amp;hostlist() &amp;test_executable()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; network = loopback,verbs,shmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # In this example, each node has 4 CPUs, so to launch &quot;by node&quot;, just
</span><br>
<span class="quotelev1">&gt; # specify that each MPI process will use 4 CPUs.
</span><br>
<span class="quotelev1">&gt; alloc = &amp;if(&amp;eq(&amp;test_alloc(), &quot;node&quot;), &quot;-c 2&quot;, &quot;&quot;)
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
<span class="quotelev1">&gt; [Test get: netpipe]
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www.scl.ameslab.gov/netpipe/code/">http://www.scl.ameslab.gov/netpipe/code/</a> 
</span><br>
<span class="quotelev1">&gt; NetPIPE_3.6.2.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: osu]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/osu">https://svn.open-mpi.org/svn/ompi-tests/trunk/osu</a>
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
<span class="quotelev1">&gt; [Test get: skampi]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
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
<span class="quotelev1">&gt; [Test build: osu]
</span><br>
<span class="quotelev1">&gt; test_get = osu
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
<span class="quotelev1">&gt; make osu_latency osu_bw osu_bibw
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
<span class="quotelev1">&gt; [Test build: skampi]
</span><br>
<span class="quotelev1">&gt; test_get = skampi
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
<span class="quotelev1">&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
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
<span class="quotelev1">&gt; [Test run: netpipe]
</span><br>
<span class="quotelev1">&gt; test_build = netpipe
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
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
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; alloc = node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = NetPipe
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; [Test run: osu]
</span><br>
<span class="quotelev1">&gt; test_build = osu
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
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
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; alloc = node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = OSU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = osu_bw osu_latency osu_bibw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test run: imb]
</span><br>
<span class="quotelev1">&gt; test_build = imb
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
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
<span class="quotelev1">&gt; np = &amp;env_max_procs()
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; [Test run: skampi]
</span><br>
<span class="quotelev1">&gt; test_build = skampi
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
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
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = skampi
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
<span class="quotelev1">&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev1">&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = uh
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = &amp;stringify(&amp;cat(&quot;/home/mschaara/mtt-testing/ 
</span><br>
<span class="quotelev1">&gt; mtt-db-password.txt&quot;))
</span><br>
<span class="quotelev1">&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = shark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #--------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev1">&gt; # file
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
<span class="quotelev1">&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; Username: &amp;shell(&quot;who am i&quot;)
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0133.php">Josh Hursey: "[MTT devel] Toy of the day: Cacti"</a>
<li><strong>Previous message:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Mohamad Chaarawi: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
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
