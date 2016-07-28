<?
$subject_val = "Re: [MTT users] MTT Error on SLES11";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 16:06:01 2009" -->
<!-- isoreceived="20090409200601" -->
<!-- sent="Thu, 9 Apr 2009 16:05:53 -0400" -->
<!-- isosent="20090409200553" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT Error on SLES11" -->
<!-- id="20090409200552.GO26923_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1239221130.6617.114.camel_at_T42" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 16:05:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0677.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0675.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0677.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0677.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr/08/2009 05:05:30PM, Rafael Folco wrote:
<br>
<span class="quotelev1">&gt; Ethan, Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the perl confusion, nevermind...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is attached the log and ini files, and also how I run MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; client/mtt -d -v -p -f openmpi.ini 2&gt;&amp;1 |tee test.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Run test phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test run [trivial]
</span><br>
<span class="quotelev1">&gt; Evaluating: trivial
</span><br>
<span class="quotelev1">&gt; Found a match! trivial [trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: Simple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running with [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; Found MPI details: [mpi details: open mpi]
</span><br>
<span class="quotelev1">&gt; Using [mpi details: open mpi] with [MPI Install: openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; Evaluating: # We can exit if the test passed or was skipped (i.e.,
</span><br>
<span class="quotelev1">&gt; there's
</span><br>
<span class="quotelev1">&gt;    no need
</span><br>
<span class="quotelev1">&gt;    # to cleanup).
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
</span><br>
<span class="quotelev1">&gt;    &quot;skipped&quot;; then
</span><br>
<span class="quotelev1">&gt;        exit 0
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;        args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt;    elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;        args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev1">&gt;    mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostfile()&quot;)&quot;,		&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() --mca btl openib,self --debug
</span><br>
<span class="quotelev1">&gt;    --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/trivial/test_get__trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Specify::Simple::Specify(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: find_executables
</span><br>
<span class="quotelev1">&gt; Got args: &quot;.&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;find_executables got .
</span><br>
<span class="quotelev1">&gt; &amp;find_exectuables returning: ./c_ring ./f77_ring ./f90_hello ./cxx_ring
</span><br>
<span class="quotelev1">&gt;    ./f77_hello ./cxx_hello ./f90_ring ./c_hello
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev1">&gt;     string (&quot;8&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev1">&gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<p>You see this in both the &quot;trunk&quot; and &quot;ompi-core-testers&quot;? I think this 
<br>
problem with array references was ironed out in the trunk.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2009-04-08 at 14:15 -0400, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Apr/08/2009 11:36:05AM, Rafael Folco wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Well, I took a look at /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This piece of code looks wrong to me:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  if ($#{@$ret} &lt; 0) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ret references an array
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @$ret points to the first element of this array
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $# returns the number of elements
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So this line is trying to count elements of the first element??! Doesn't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make sense. Correct me if I am wrong, what am I missing here ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;if ($#{$ret} &lt; 0) {&quot; would be correct, without @. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I believe &quot;strict refs&quot; has been forced somewhere on SLES11... I also
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tried on other distro and it works fine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How do perl -V differ between the two distros?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can not reproduce the error on a SLES 10 machine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you run MTT with the --debug option and send the output with the
</span><br>
<span class="quotelev2">&gt; &gt; line 75 perl error? That might help me determine which INI param is
</span><br>
<span class="quotelev2">&gt; &gt; responsible for the error.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rafael
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, 2009-04-07 at 15:53 -0300, Rafael Folco wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm trying to run MTT on SLES11, but I am getting an error message
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; during the RUN phase and I can't figure out what is the problem.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     string (&quot;183&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; What I could see was that this error is nothing specific to any
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; particular test, it happens at certain points during the RUN phase.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Also, the BUILD phase has been completed successfully for all tests.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Anybody have already seen this? Any thoughts ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Rafael
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rafael Folco
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenHPC / Test Lead
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IBM Linux Technology Center
</span><br>
<span class="quotelev3">&gt; &gt; &gt; E-Mail: rfolco_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rafael Folco
</span><br>
<span class="quotelev1">&gt; OpenHPC / Test Lead
</span><br>
<span class="quotelev1">&gt; IBM Linux Technology Center
</span><br>
<span class="quotelev1">&gt; E-Mail: rfolco_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; #======================================================================
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
<span class="quotelev1">&gt; hostlist = cluster-ib-6 cluster-ib-7
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
<span class="quotelev1">&gt; trial = 1
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
<span class="quotelev1">&gt; local_username = root 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: --force can be set here, instead of at the command line.
</span><br>
<span class="quotelev1">&gt; # Useful for a developer workspace in which it makes no sense to not
</span><br>
<span class="quotelev1">&gt; # use --force
</span><br>
<span class="quotelev1">&gt; force = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; logfile = &amp;getenv(&quot;HOME&quot;)/mtt.log
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
<span class="quotelev1">&gt; exec = mpirun @hosts@ -np &amp;test_np() --mca btl openib,self --debug --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev1">&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile()&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;             &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;)
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
<span class="quotelev1">&gt; v1_1_mca_params = &amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), \
</span><br>
<span class="quotelev1">&gt;         &quot; --mca btl_tcp_if_include eth0 --mca oob_tcp_if_include eth0 --mca btl_openib_max_btls 1&quot;, &quot;&quot;)
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
<span class="quotelev1">&gt; if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;skipped&quot;; then
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
<span class="quotelev1">&gt; [MPI get: openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; mpi_details = openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_dir = /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI install: openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; module = Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; mpi_get = openmpi-1.2.8
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
<span class="quotelev1">&gt; [Test get: ibm]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_username = ******
</span><br>
<span class="quotelev1">&gt; svn_password = ******
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: onesided]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_username = ******
</span><br>
<span class="quotelev1">&gt; svn_password = ******
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
<span class="quotelev1">&gt; [Test get: mpicxx]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_username = ******
</span><br>
<span class="quotelev1">&gt; svn_password = ******
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: imb]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_username = ******
</span><br>
<span class="quotelev1">&gt; svn_password = ******
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: netpipe]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_username = ******
</span><br>
<span class="quotelev1">&gt; svn_password = ******
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
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
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; skip_mpi_get = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; skip_mpi_install = ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
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
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;test_np()
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
<span class="quotelev1">&gt; simple_only:tests = &amp;find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; # Similar rationale to the intel test run section
</span><br>
<span class="quotelev1">&gt; simple_first:tests = &amp;find_executables(&quot;collective&quot;, &quot;communicator&quot;, \
</span><br>
<span class="quotelev1">&gt;                                        &quot;datatype&quot;, &quot;dynamic&quot;, &quot;environment&quot;, \
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; np = &amp;if(&amp;gt(&amp;env_max_procs(), 0), &amp;step(2, &amp;max(2, &amp;env_max_procs()), 2), 2)
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = &amp;cat(&quot;run_list&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; argv = &amp;if(&amp;eq(&quot;&amp;mpi_get_name()&quot;, &quot;ompi-nightly-v1.1&quot;), &quot;-nothrow&quot;, &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = src/mpi2c++_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_only:tests = src/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;) 
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
<span class="quotelev1">&gt; #----------------------------------------------------------------------
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
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
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
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Reporter phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
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
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev1">&gt; *** MTT: client/mtt -d -v -p -f openmpi.ini
</span><br>
<span class="quotelev1">&gt; chdir client
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers
</span><br>
<span class="quotelev1">&gt; Copying: openmpi.ini to /tmp/QHpNrmfy2n.ini
</span><br>
<span class="quotelev1">&gt; Reading ini file: openmpi.ini
</span><br>
<span class="quotelev1">&gt; Validating INI inifile: /tmp/QHpNrmfy2n.ini
</span><br>
<span class="quotelev1">&gt; Scratch: .
</span><br>
<span class="quotelev1">&gt; Scratch resolved: /tmp/ompi-core-testers
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Making dir: /tmp/ompi-core-testers/sources (cwd: /tmp/ompi-core-testers)
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers
</span><br>
<span class="quotelev1">&gt; Making dir: /tmp/ompi-core-testers/installs (cwd: /tmp/ompi-core-testers)
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers
</span><br>
<span class="quotelev1">&gt; Making dir: /tmp/ompi-core-testers/test_runs (cwd: /tmp/ompi-core-testers)
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/test_runs/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers
</span><br>
<span class="quotelev1">&gt; Evaluating: 
</span><br>
<span class="quotelev1">&gt; Evaluating: cluster-ib-6 cluster-ib-7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Got default hostlist: cluster-ib-6,cluster-ib-7, max_np: 2
</span><br>
<span class="quotelev1">&gt; Evaluating: 
</span><br>
<span class="quotelev1">&gt; Evaluating: 76
</span><br>
<span class="quotelev1">&gt; Evaluating: 5
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; *** Reporter initializing
</span><br>
<span class="quotelev1">&gt; Evaluating: TextFile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Init(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev1">&gt; Evaluating: hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: shell
</span><br>
<span class="quotelev1">&gt; Got args: &quot;hostname&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;shell: got hostname
</span><br>
<span class="quotelev1">&gt; &amp;shell: returning cluster-ib-6
</span><br>
<span class="quotelev1">&gt; String now: hostname: cluster-ib-6
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: shell
</span><br>
<span class="quotelev1">&gt; Got args: &quot;uname -a&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;shell: got uname -a
</span><br>
<span class="quotelev1">&gt; &amp;shell: returning Linux cluster-ib-6 2.6.27.19-5-ppc64 #1 SMP 2009-02-28
</span><br>
<span class="quotelev1">&gt;    04:40:21 +0100 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; String now: hostname: cluster-ib-6
</span><br>
<span class="quotelev1">&gt;    uname: Linux cluster-ib-6 2.6.27.19-5-ppc64 #1 SMP 2009-02-28 04:40:21
</span><br>
<span class="quotelev1">&gt;    +0100 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;    who am i: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: shell
</span><br>
<span class="quotelev1">&gt; Got args: &quot;who am i&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;shell: got who am i
</span><br>
<span class="quotelev1">&gt; &amp;shell: returning root	   pts/1	2009-04-08 07:13 (9.12.235.149)
</span><br>
<span class="quotelev1">&gt; String now: hostname: cluster-ib-6
</span><br>
<span class="quotelev1">&gt;    uname: Linux cluster-ib-6 2.6.27.19-5-ppc64 #1 SMP 2009-02-28 04:40:21
</span><br>
<span class="quotelev1">&gt;    +0100 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;    who am i: root     pts/1	   2009-04-08 07:13 (9.12.235.149)
</span><br>
<span class="quotelev1">&gt; Evaluating: 
</span><br>
<span class="quotelev1">&gt; Evaluating: 78
</span><br>
<span class="quotelev1">&gt; File reporter initialized
</span><br>
<span class="quotelev1">&gt;    (/tmp/ompi-core-testers/$phase-$section-$mpi_name-$mpi_version.txt)
</span><br>
<span class="quotelev1">&gt; *** Reporter initialized
</span><br>
<span class="quotelev1">&gt; *** MPI get phase starting
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI get: [mpi get: openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt;    Checking for new MPI sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: mpi_get__openmpi-1.2.8 (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir mpi_get__openmpi-1.2.8/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/mpi_get__openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::MPI::Get::AlreadyInstalled::Get(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt; Using MPI in /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.2.8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::MPI::Get::AlreadyInstalled::_get_ompi_version returning 1.2.8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::MPI::Get::AlreadyInstalled complete
</span><br>
<span class="quotelev1">&gt;    Got new MPI sources: version 1.2.8
</span><br>
<span class="quotelev1">&gt; *** MPI get phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: MPI Get
</span><br>
<span class="quotelev1">&gt;    Started:       Wed Apr  8 12:45:57 2009
</span><br>
<span class="quotelev1">&gt;    Stopped:       Wed Apr  8 12:45:57 2009
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:00
</span><br>
<span class="quotelev1">&gt; *** MPI install phase starting
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI install [mpi install: openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; Evaluating: openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; Checking for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt;    Installing MPI: [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8]...
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; Unique directory: dLS2
</span><br>
<span class="quotelev1">&gt; Making dir: dLS2 (cwd: /tmp/ompi-core-testers/installs)
</span><br>
<span class="quotelev1">&gt; dLS2 does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir dLS2/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir ..
</span><br>
<span class="quotelev1">&gt; chdir openmpi-1.2.8#openmpi-1.2.8#1.2.8
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf /tmp/ompi-core-testers/installs/iIGf
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Sym linked: dLS2 to openmpi-1.2.8#openmpi-1.2.8#1.2.8
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf src
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Making dir: src (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; src does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir src/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/src
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret =
</span><br>
<span class="quotelev1">&gt;    &amp;MTT::MPI::Get::AlreadyInstalled::PrepareForInstall(@args)
</span><br>
<span class="quotelev1">&gt; chdir 1
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/src
</span><br>
<span class="quotelev1">&gt; Making dir: /tmp/ompi-core-testers/installs/dLS2/install (cwd:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/src)
</span><br>
<span class="quotelev1">&gt; /tmp/ompi-core-testers/installs/dLS2/install does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/install/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/src
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Install::Analyze::OMPI
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::MPI::Install::Analyze::OMPI::Install(@args)
</span><br>
<span class="quotelev1">&gt; Have C bindings: 1
</span><br>
<span class="quotelev1">&gt; Have C++ bindings: 1
</span><br>
<span class="quotelev1">&gt; Have F77 bindings: 1
</span><br>
<span class="quotelev1">&gt; Have F90 bindings: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;get_mpi_install_bitness(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: get_mpi_install_bitness
</span><br>
<span class="quotelev1">&gt; Got args: &quot;&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::get_mpi_install_bitness(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;get_mpi_intall_bitness
</span><br>
<span class="quotelev1">&gt; &amp;_find_libmpi returning: 
</span><br>
<span class="quotelev1">&gt; Couldn't find libmpi!
</span><br>
<span class="quotelev1">&gt; String now: 0
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;get_mpi_install_endian(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: get_mpi_install_endian
</span><br>
<span class="quotelev1">&gt; Got args: &quot;&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::get_mpi_install_endian(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;get_mpi_intall_endian
</span><br>
<span class="quotelev1">&gt; &amp;_find_libmpi returning: 
</span><br>
<span class="quotelev1">&gt; *** Could not find libmpi to calculate endian-ness
</span><br>
<span class="quotelev1">&gt; String now: 0
</span><br>
<span class="quotelev1">&gt; Found whatami: /tmp/ompi-core-testers/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/MPI_Install-openmpi-1.2.8-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/MPI_Install-openmpi-1.2.8-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed MPI install successfully
</span><br>
<span class="quotelev1">&gt; *** MPI install phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: MPI Install
</span><br>
<span class="quotelev1">&gt;    Started:       Wed Apr  8 12:45:57 2009
</span><br>
<span class="quotelev1">&gt;    Stopped:       Wed Apr  8 12:45:57 2009
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:00
</span><br>
<span class="quotelev1">&gt; *** Test get phase starting
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: trivial]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: Trivial
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__trivial (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir test_get__trivial/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::Trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::Trivial::Get(@args)
</span><br>
<span class="quotelev1">&gt; Getting Trivial
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: ibm]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: SVN
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__ibm (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir test_get__ibm/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::SVN
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::SVN::Get(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in SVN get
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: got url <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: performing export
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: exporting
</span><br>
<span class="quotelev1">&gt; Evaluating: ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: 0p3nhpc
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__ibm
</span><br>
<span class="quotelev1">&gt; SVN checkout: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf ibm
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Locking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Running command: svn export --username ibm --password 0p3nhpc
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm">https://svn.open-mpi.org/svn/ompi-tests/trunk/ibm</a>
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/LICENSE
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/dynamic
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/dynamic/spawn_multiple.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/dynamic/client_server.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/dynamic/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/dynamic/spawn.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/dynamic/comm_join.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/scatter_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/gatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/bcast_struct.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/allreduce.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/reduce_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/allgather.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/gather_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/alltoall.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/struct_gatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/scatter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/reduce.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/gather.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/reduce_scatter_inter2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/allreduce_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/allgather_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/alltoall_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/scatter_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/barrier_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/reduce_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/alltoallv_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/gather_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/alltoallw_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/scatterv_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/bcast_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/intercomm/reduce_scatter_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/op.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/scan_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/exscan.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/allgatherv_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/scan.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/scatterv_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/barrier.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/reduce_scatter_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/reduce_big.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/allgatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/allreduce_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/gatherv_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/alltoallw.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/scatterv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/bcast.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/reduce_scatter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/collective/allgather_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_create_no_free.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_fence_get.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_fence.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_win_errhandler.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_call_errhandler.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_win_attr.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_get_group.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_create_info.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_get.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_create_size.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_lock_illegal.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_create_disp.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_simple_lock.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_create.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_win_attr.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_fence_put_1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_create_size.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_get_big.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_create_info.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_create.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_create_disp.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_create_info_half.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_put.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_alloc.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_accumulate_atomic.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_win_name.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_accumulate.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_fence_asserts.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_put_big.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/c_fence_simple.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/onesided/cxx_create_info_half.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/40_getvaluelen.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/10_set_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/30_get.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/00_create.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/50_getnkeys_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/20_delete.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/40_getvaluelen_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/30_get_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/00_create_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/20_delete_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/10_set.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/info/50_getnkeys.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/group
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/group/groupfree.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/group/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/group/group.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/group/range.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/README
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/attrsetget_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/comm_get_name_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/mpisplit.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/commdup.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/attrsetget.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/compare.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/self_atexit.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/attr.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/commfree.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/communicator/intercomm.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/configure.ac
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/pcontrol.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/procname.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/initialized.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/init_thread_serialized.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/init_thread_multiple.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/finalized.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/abort.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/init_thread_funneled.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/init_thread_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/is_thr_main_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/query_thread_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/wtime.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/err.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/final.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/init_thread.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/is_thr_main_mt.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/is_thr_main.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/query_thread.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/environment/attrs.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_check_cxx.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_check_f77.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_check_supposed_f77.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/runtests.sh.in
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_check_optional_fortran_types_int8.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/Makefile.options
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_check_io.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_get_version.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/get_ompi_version
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/mpi_check_mpi_h.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/mpi_check_link.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/config/ompitest_check_optional_fortran_types_real16.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/acinclude.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/io
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/io/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/io/file_status_get_count.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/waitnull.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/isend.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/rsend.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/send2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/ssend.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/sendrecv_rep.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/sendrecv_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/free.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/send.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/wildcard.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/bsend_free.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/waitall.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/test1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/test2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/test3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/testsome.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/probe.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/testall.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/buffer.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/sendrecv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/waitany.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/iprobe.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/startall.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/testany.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/interf.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/waitsome.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/seq.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/getcount.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/allocmem.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/bsend.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/start.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/pt2pt/rsend2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/reporting
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/reporting/ompitest_error.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/reporting/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/reporting/ompitest_progress.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/reporting/ompitest_error.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/reporting/ompitest_error_nonmpi.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/getel.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/fint8_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/datatype_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/zero1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/zero2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/zero3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/bottom.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/zero5.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/zero6.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/lbub2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/pptransp.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/transp.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/freal16_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/transpa.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/loop.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/paktest.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/structsr2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/lbub.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/freal4_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/bakstr.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/freal8_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/structsr.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/transp2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/fint2_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/transp3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/strangest1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/datatype/fint4_f.f
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/autogen.sh
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/topology
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/topology/dimscreate.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/topology/graph.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/topology/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/topology/cart.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 ibm/topology/sub.c
</span><br>
<span class="quotelev1">&gt; OUT:Exported revision 1635.
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Unlocking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Evaluating: ./autogen.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: returning successfully
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: onesided]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: SVN
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__onesided (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir test_get__onesided/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__onesided
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::SVN
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::SVN::Get(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in SVN get
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: got url <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: performing export
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: exporting
</span><br>
<span class="quotelev1">&gt; Evaluating: ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: 0p3nhpc
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__onesided
</span><br>
<span class="quotelev1">&gt; SVN checkout: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf onesided
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Locking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Running command: svn export --username ibm --password 0p3nhpc
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided">https://svn.open-mpi.org/svn/ompi-tests/trunk/onesided</a>
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_winattrs.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/utils.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_winf.f90
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_f2c_c2f.f90
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/utils.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_lock1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_lock2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_lock3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_lock4.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_lock5.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/run_list
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t.f90
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_winattrsf.f90
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/configure.ac
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_cs1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_um_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/autogen.sh
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_winerror.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_put4.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_put5.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_put6.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_get1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_rma1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_get2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_get3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_wincreate1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_acc1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_acc2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_acc3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_um_lock1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/cmpf2c.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_start1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_cl1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_start2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_cl2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_start3.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_um_mixed_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_win.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_dan1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_cxx.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_f77.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_supposed_f77.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_optional_fortran_types_int8.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_io.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_get_version.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/mpi_check_mpi_h.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompi_check_vendor.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/mpi_check_link.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_f90.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/config/ompitest_check_optional_fortran_types_real16.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/acinclude.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_mt_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/test_mwin1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 onesided/t_winself.c
</span><br>
<span class="quotelev1">&gt; OUT:Exported revision 1635.
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Unlocking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Evaluating: ./autogen.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: returning successfully
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: mpicxx]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: SVN
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__mpicxx (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir test_get__mpicxx/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__mpicxx
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::SVN
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::SVN::Get(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in SVN get
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: got url
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: performing export
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: exporting
</span><br>
<span class="quotelev1">&gt; Evaluating: ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: 0p3nhpc
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__mpicxx
</span><br>
<span class="quotelev1">&gt; SVN checkout: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf cxx-test-suite
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Locking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Running command: svn export --username ibm --password 0p3nhpc
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite">https://svn.open-mpi.org/svn/ompi-tests/trunk/cxx-test-suite</a>
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/configure.ac
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/config
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/config/ompitest_check_cxx.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/config/ompitest_check_io.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/config/mpi_check_mpi_h.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/config/mpi_check_link.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/acinclude.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/bsend.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/range.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/group.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/bcast.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/typekeyval.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/mpi2c++_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/grequest.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/mpi2c++_test.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/handleconversion.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/test3.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/allgather.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/procname.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/c_s.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/cartcomm.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/testall.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/request1.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/attr.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/rsend.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/waitany.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/sendrecv_rep.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/iprobe.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/topo.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/type.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/badbuf.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/wtime.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/dup_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/getcount.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/waitsome.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/alltoallv.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/info.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/split.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/commname.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/waitall.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/pcontrol.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/isend.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/reduce.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/probe.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/buffer.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/winkeyval.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/signal.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/typemap.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/status_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/rank_size.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/errhandler.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/initialized2.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/allgatherv.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/scatterv.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/reduce_scatter.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/dims.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/querythread.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/intercomm.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/commfree.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/start.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/groupfree.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/allreduce.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/getel.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/test1.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/alltoall.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/commdup.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/scatter.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/finalized.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/stack.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/graphcomm.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/scan.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/mpi2c++_dynamics_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/initialized1.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/startall.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/send.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/win_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/bcast_struct.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/testsome.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/bottom.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/struct_gatherv.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/messages.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/window.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/sendrecv.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/gather.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/constants.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/ssend.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/pack_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/op_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/chandles.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/seek_constants.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/cancel.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/compare.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/interf.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/testany.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/commgethandler.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/connect.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/src/info_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/Makefile.am
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/autogen.sh
</span><br>
<span class="quotelev1">&gt; OUT:A	 cxx-test-suite/README
</span><br>
<span class="quotelev1">&gt; OUT:Exported revision 1635.
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Unlocking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Evaluating: ./autogen.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: returning successfully
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: imb]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: SVN
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__imb (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir test_get__imb/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__imb
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::SVN
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::SVN::Get(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in SVN get
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: got url <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: performing export
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: exporting
</span><br>
<span class="quotelev1">&gt; Evaluating: ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: 0p3nhpc
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__imb
</span><br>
<span class="quotelev1">&gt; SVN checkout: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf IMB_2.3
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Locking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Running command: svn export --username ibm --password 0p3nhpc
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/license
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/license/license.txt
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/license/use-of-trademark-license.txt
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/ReadMe_first
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/versions_news
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/versions_news/Version_history
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/doc
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/doc/ReadMe_IMB.txt
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/doc/IMB_ug.pdf
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_sgi
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_window.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_sendrecv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/Makefile.in
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_pingping.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_t3e
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_pingpong.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_open_close.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Allreduce.log
</span><br>
<span class="quotelev1">&gt;    .ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Reduce.linear
</span><br>
<span class="quotelev1">&gt;    .ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Reduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Reduce.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Barrier-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Bcast-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Allreduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Allreduce.lin
</span><br>
<span class="quotelev1">&gt;    ear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Alltoall-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Bcast.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Reduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Reduce.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Alltoall.log.
</span><br>
<span class="quotelev1">&gt;    ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Barrier-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Bcast-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Allreduce.lin
</span><br>
<span class="quotelev1">&gt;    ear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Allreduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Bcast.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Alltoall-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Reduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Alltoall.log.
</span><br>
<span class="quotelev1">&gt;    ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Barrier-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Bcast-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Bcast.linear.
</span><br>
<span class="quotelev1">&gt;    ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Allreduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Alltoall-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Alltoall.line
</span><br>
<span class="quotelev1">&gt;    ar.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Reduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Allreduce.log
</span><br>
<span class="quotelev1">&gt;    .ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-r12344-Reduce.linear
</span><br>
<span class="quotelev1">&gt;    .ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12290-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Barrier-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-bynode-r12344-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Bcast.linear.
</span><br>
<span class="quotelev1">&gt;    ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Bcast-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-Allreduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12290-r12344-Alltoall.line
</span><br>
<span class="quotelev1">&gt;    ar.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Alltoall-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/results/imb-openmpi-byslot-r12344-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Allreduce.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Reduce.linear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Reduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Reduce.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Barrier-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Bcast-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Allreduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Allreduce.linear.p
</span><br>
<span class="quotelev1">&gt;    s
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Alltoall-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Bcast.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Reduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Reduce.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Alltoall.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Barrier-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Bcast-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Allreduce.linear.p
</span><br>
<span class="quotelev1">&gt;    s
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Allreduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Bcast.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Alltoall-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Reduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Alltoall.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Reduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Reduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Barrier-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Reduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Bcast-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Bcast.linear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Allreduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Alltoall-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Alltoall.linear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Bcast-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Reduce-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Allreduce.log.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-r12344-Reduce.linear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Bcast-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Barrier-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Bcast-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Allreduce-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Allreduce-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Alltoall-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12290-Allreduce-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Alltoall-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Barrier-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-bynode-r12344-Alltoall-8.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Bcast.linear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Bcast-16.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-Allreduce-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	
</span><br>
<span class="quotelev1">&gt;    IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12290-r12344-Alltoall.linear.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Barrier-2.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Alltoall-32.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/r2/imb-openmpi-byslot-r12344-Barrier-4.out
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/scripts
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/scripts/graph_me
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/cisco/scripts/run
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_allgatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_parse_name_ext.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/configure.ac
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_bcast.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_prototypes.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_appl_errors.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_ibm_sp
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/Makefile.std
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_benchmark.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_ones_accu.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_parse_name_mpi1.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_parse_name_io.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_bnames_io.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_mem_manager.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_warm_up.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_comm_info.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_benchlist.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_ones_unidir.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_exchange.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_err_handler.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_barrier.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/config.h.in
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_reduce_scatter.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_declare.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_allgather.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_declare.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_reduce.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_sr2201
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/config.guess
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/config.sub
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_ia64
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_sun
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_openmpi
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_settings_io.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_chk_diff.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_bnames_mpi1.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_allreduce.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_output.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_g_info.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_strgs.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_init.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_user_set_info.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_init_transfer.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_read.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_ones_bidir.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_ia32
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_write.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_comments.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_bnames_ext.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_err_check.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_vpp
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_cpu_exploit.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_init_file.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/make_sx4
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_alltoall.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/aclocal.m4
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/IMB_settings.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 IMB_2.3/src/install-sh
</span><br>
<span class="quotelev1">&gt; OUT:Exported revision 1635.
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Unlocking: /root/.subversion/servers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: returning successfully
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: netpipe]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Evaluating: SVN
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__netpipe (cwd: /tmp/ompi-core-testers/sources)
</span><br>
<span class="quotelev1">&gt; chdir test_get__netpipe/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__netpipe
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::SVN
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::SVN::Get(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in SVN get
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: got url <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: performing export
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: exporting
</span><br>
<span class="quotelev1">&gt; Evaluating: ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: 0p3nhpc
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/sources/test_get__netpipe
</span><br>
<span class="quotelev1">&gt; SVN checkout: <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Locking: /root/.subversion/servers
</span><br>
<span class="quotelev1">&gt; Running command: svn export --username ibm --password 0p3nhpc
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/NetPIPE_3.6.2</a>
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/patch
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/patch/patch-3.6.2-windows.diff
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/patch/Readme.txt
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts/NPtcgmsg.p
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts/p4hosts
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts/mvich.hosts
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts/mvich.param
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts/batchLapi
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/hosts/lamhosts
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/get_mpi_type
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/gpshmem.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/pvm.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/gm.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/netpipe.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/mpi2.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/shmem.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/netpipe.h
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/ibv.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/tcgmsg.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/mpi.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/lapi.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/tcp.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/MP_memcpy.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/memcpy.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/ib.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/src/armci.c
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/bin
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/bin/nplaunch
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/bin/feplot
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/bin/geplot
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/dox
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/dox/np_euro.pdf
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/dox/netpipe.1
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/dox/np_cluster2002.pdf
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/dox/netpipe_paper.ps
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/dox/README
</span><br>
<span class="quotelev1">&gt; OUT:A	 NetPIPE_3.6.2/makefile
</span><br>
<span class="quotelev1">&gt; OUT:Exported revision 1635.
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Unlocking: /root/.subversion/servers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn: returning successfully
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev1">&gt; *** Test get phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: Test Get
</span><br>
<span class="quotelev1">&gt;    Started:       Wed Apr  8 12:45:57 2009
</span><br>
<span class="quotelev1">&gt;    Stopped:       Wed Apr  8 12:46:31 2009
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:34
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:34
</span><br>
<span class="quotelev1">&gt; *** Test build phase starting
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: trivial]
</span><br>
<span class="quotelev1">&gt; Evaluating: trivial
</span><br>
<span class="quotelev1">&gt;    Building for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8] / [trivial]
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Trivial
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; tests does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir tests/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; Making dir: trivial (cwd: /tmp/ompi-core-testers/installs/dLS2/tests)
</span><br>
<span class="quotelev1">&gt; trivial does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir trivial/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to /tmp/ompi-core-testers/installs/dLS2/tests/trivial
</span><br>
<span class="quotelev1">&gt; Copying directory: /tmp/ompi-core-testers/sources/test_get__trivial
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf test_get__trivial
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r /tmp/ompi-core-testers/sources/test_get__trivial .
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; chdir test_get__trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt;    1
</span><br>
<span class="quotelev1">&gt; Evaluating: 100
</span><br>
<span class="quotelev1">&gt;    100
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Trivial::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Trivial
</span><br>
<span class="quotelev1">&gt; Test compile/link sample C MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpicc	hello.c -o c_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpicc	ring.c -o c_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Test compile/link sample C++ MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpic++  hello.cc -o cxx_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpic++  ring.cc -o cxx_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Test compile/link sample F77 MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpif77  hello.f -o f77_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpif77  ring.f -o f77_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Test compile/link sample F90 MPI application
</span><br>
<span class="quotelev1">&gt; Running command: mpif90  hello.f90 -o f90_hello
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: mpif90  ring.f90 -o f90_ring
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/tests/trivial/test_get__trivial/tes
</span><br>
<span class="quotelev1">&gt;    t_built.ini
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-trivial-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-trivial-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: ibm]
</span><br>
<span class="quotelev1">&gt; Evaluating: ibm
</span><br>
<span class="quotelev1">&gt;    Building for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8] / [ibm]
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Shell
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; chdir tests/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; Making dir: ibm (cwd: /tmp/ompi-core-testers/installs/dLS2/tests)
</span><br>
<span class="quotelev1">&gt; ibm does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir ibm/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to /tmp/ompi-core-testers/installs/dLS2/tests/ibm
</span><br>
<span class="quotelev1">&gt; Copying directory: /tmp/ompi-core-testers/sources/test_get__ibm/ibm
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf ibm
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r /tmp/ompi-core-testers/sources/test_get__ibm/ibm .
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir ibm
</span><br>
<span class="quotelev1">&gt; copytree running post_copy command: ./autogen.sh
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/Ty7RnQFDln
</span><br>
<span class="quotelev1">&gt; OUT:
</span><br>
<span class="quotelev1">&gt;    *** Running GNU tools in directory: 
</span><br>
<span class="quotelev1">&gt;    ***	 /tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm
</span><br>
<span class="quotelev1">&gt; OUT:aclocal
</span><br>
<span class="quotelev1">&gt; OUT:autoheader
</span><br>
<span class="quotelev1">&gt; OUT:autoconf
</span><br>
<span class="quotelev1">&gt; OUT:libtoolize --automake --copy
</span><br>
<span class="quotelev1">&gt; OUT:automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:56: installing `./config/config.guess'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:56: installing `./config/config.sub'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:25: installing `./config/install-sh'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:25: installing `./config/missing'
</span><br>
<span class="quotelev1">&gt; OUT:collective/Makefile.am: installing `./config/depcomp'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/ibm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; chdir ibm
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 100
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Shell::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: ./configure CC=mpicc CXX=mpic++ F77=mpif77
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/M8ohoLi5bA
</span><br>
<span class="quotelev1">&gt; OUT:Configuring Open MPI/IBM test suite
</span><br>
<span class="quotelev1">&gt;    checking for a BSD-compatible install... OUT:/usr/bin/install -c
</span><br>
<span class="quotelev1">&gt;    checking whether build environment is sane... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for a thread-safe mkdir -p... OUT:/bin/mkdir -p
</span><br>
<span class="quotelev1">&gt;    checking for gawk... gawk
</span><br>
<span class="quotelev1">&gt;    checking whether make sets $(MAKE)... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking build system type... OUT:powerpc64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt;    checking host system type... powerpc64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking for gcc... mpicc
</span><br>
<span class="quotelev1">&gt; OUT:checking for C compiler default output file name... OUT:a.out
</span><br>
<span class="quotelev1">&gt;    checking whether the C compiler works... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are cross compiling... OUT:no
</span><br>
<span class="quotelev1">&gt;    checking for suffix of executables... OUT:
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of object files... OUT:o
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpicc accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpicc option to accept ISO C89... OUT:none needed
</span><br>
<span class="quotelev1">&gt; OUT:checking for style of include used by make... OUT:GNU
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpicc... OUT:gcc3
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C++ compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpic++ accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpic++... OUT:gcc3
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpif77... yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU Fortran 77 compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpif77 accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for ranlib... ranlib
</span><br>
<span class="quotelev1">&gt;    checking for mpi.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for MPI_Initialized in -lmpi... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have Fortran MPI bindings... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have Fortran optional types, integer*8... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have Fortran optional types, real*16... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for Open MPI support of MPI_REAL16... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have MPI-2 C++ support... OUT:yes
</span><br>
<span class="quotelev1">&gt;    checking if have MPI-2 one-sided support... OUT:yes
</span><br>
<span class="quotelev1">&gt;    checking if have MPI-2 IO support... OUT:yes
</span><br>
<span class="quotelev1">&gt;    checking if have MPI-2 thread support... OUT:no
</span><br>
<span class="quotelev1">&gt;    checking if checking MPI API params... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating config/runtests.sh
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating config/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating reporting/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating collective/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating collective/intercomm/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating communicator/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating datatype/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating dynamic/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating environment/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating group/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating info/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating io/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating onesided/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating pt2pt/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating topology/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating reporting/ompitest_config.h
</span><br>
<span class="quotelev1">&gt; OUT:config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; OUT:Making all in reporting
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/reporting'
</span><br>
<span class="quotelev1">&gt;    make  all-am
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/reporting'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -g -MT ompitest_progress.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/ompitest_progress.Tpo -c -o ompitest_progress.o
</span><br>
<span class="quotelev1">&gt;    ompitest_progress.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/ompitest_progress.Tpo .deps/ompitest_progress.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -g -MT ompitest_error.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/ompitest_error.Tpo -c -o ompitest_error.o ompitest_error.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/ompitest_error.Tpo .deps/ompitest_error.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -g -MT ompitest_error_nonmpi.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/ompitest_error_nonmpi.Tpo -c -o ompitest_error_nonmpi.o
</span><br>
<span class="quotelev1">&gt;    ompitest_error_nonmpi.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/ompitest_error_nonmpi.Tpo .deps/ompitest_error_nonmpi.Po
</span><br>
<span class="quotelev1">&gt; OUT:rm -f libompitest.a
</span><br>
<span class="quotelev1">&gt; OUT:ar cru libompitest.a ompitest_progress.o ompitest_error.o
</span><br>
<span class="quotelev1">&gt;    ompitest_error_nonmpi.o 
</span><br>
<span class="quotelev1">&gt; OUT:ranlib libompitest.a
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/reporting'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/reporting'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in collective
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/collective'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in intercomm
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/collective/intercomm
</span><br>
<span class="quotelev1">&gt;    '
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT
</span><br>
<span class="quotelev1">&gt;    allgather_inter.o -MD -MP -MF .deps/allgather_inter.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    allgather_inter.o allgather_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgather_inter.Tpo .deps/allgather_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allgather_inter allgather_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT
</span><br>
<span class="quotelev1">&gt;    allreduce_inter.o -MD -MP -MF .deps/allreduce_inter.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    allreduce_inter.o allreduce_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allreduce_inter.Tpo .deps/allreduce_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allreduce_inter allreduce_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT alltoall_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/alltoall_inter.Tpo -c -o alltoall_inter.o
</span><br>
<span class="quotelev1">&gt;    alltoall_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoall_inter.Tpo .deps/alltoall_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o alltoall_inter alltoall_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT
</span><br>
<span class="quotelev1">&gt;    alltoallv_inter.o -MD -MP -MF .deps/alltoallv_inter.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    alltoallv_inter.o alltoallv_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoallv_inter.Tpo .deps/alltoallv_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o alltoallv_inter alltoallv_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT
</span><br>
<span class="quotelev1">&gt;    alltoallw_inter.o -MD -MP -MF .deps/alltoallw_inter.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    alltoallw_inter.o alltoallw_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoallw_inter.Tpo .deps/alltoallw_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o alltoallw_inter alltoallw_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT barrier_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/barrier_inter.Tpo -c -o barrier_inter.o
</span><br>
<span class="quotelev1">&gt;    barrier_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/barrier_inter.Tpo .deps/barrier_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o barrier_inter barrier_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT bcast_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/bcast_inter.Tpo -c -o bcast_inter.o bcast_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bcast_inter.Tpo .deps/bcast_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bcast_inter bcast_inter.o -L../../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT gather_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/gather_inter.Tpo -c -o gather_inter.o gather_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/gather_inter.Tpo .deps/gather_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o gather_inter gather_inter.o -L../../reporting -lompitest OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT reduce_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/reduce_inter.Tpo -c -o reduce_inter.o reduce_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_inter.Tpo .deps/reduce_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_inter reduce_inter.o -L../../reporting -lompitest OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT
</span><br>
<span class="quotelev1">&gt;    reduce_scatter_inter.o -MD -MP -MF .deps/reduce_scatter_inter.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    reduce_scatter_inter.o reduce_scatter_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_scatter_inter.Tpo .deps/reduce_scatter_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_scatter_inter reduce_scatter_inter.o
</span><br>
<span class="quotelev1">&gt;    -L../../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT
</span><br>
<span class="quotelev1">&gt;    reduce_scatter_inter2.o -MD -MP -MF .deps/reduce_scatter_inter2.Tpo -c
</span><br>
<span class="quotelev1">&gt;    -o reduce_scatter_inter2.o reduce_scatter_inter2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_scatter_inter2.Tpo .deps/reduce_scatter_inter2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_scatter_inter2 reduce_scatter_inter2.o
</span><br>
<span class="quotelev1">&gt;    -L../../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT scatter_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/scatter_inter.Tpo -c -o scatter_inter.o
</span><br>
<span class="quotelev1">&gt;    scatter_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatter_inter.Tpo .deps/scatter_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scatter_inter scatter_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../../reporting     -g -MT scatterv_inter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/scatterv_inter.Tpo -c -o scatterv_inter.o
</span><br>
<span class="quotelev1">&gt;    scatterv_inter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatterv_inter.Tpo .deps/scatterv_inter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scatterv_inter scatterv_inter.o -L../../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/collective/intercomm
</span><br>
<span class="quotelev1">&gt;    '
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/collective'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT allgather.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/allgather.Tpo -c -o allgather.o allgather.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgather.Tpo .deps/allgather.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allgather allgather.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    allgather_in_place.o -MD -MP -MF .deps/allgather_in_place.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    allgather_in_place.o allgather_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgather_in_place.Tpo .deps/allgather_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allgather_in_place allgather_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT allgatherv.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/allgatherv.Tpo -c -o allgatherv.o allgatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgatherv.Tpo .deps/allgatherv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allgatherv allgatherv.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    allgatherv_in_place.o -MD -MP -MF .deps/allgatherv_in_place.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    allgatherv_in_place.o allgatherv_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgatherv_in_place.Tpo .deps/allgatherv_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allgatherv_in_place allgatherv_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT allreduce.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/allreduce.Tpo -c -o allreduce.o allreduce.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allreduce.Tpo .deps/allreduce.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allreduce allreduce.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    allreduce_in_place.o -MD -MP -MF .deps/allreduce_in_place.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    allreduce_in_place.o allreduce_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allreduce_in_place.Tpo .deps/allreduce_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allreduce_in_place allreduce_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT alltoall.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/alltoall.Tpo -c -o alltoall.o alltoall.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoall.Tpo .deps/alltoall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o alltoall alltoall.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT alltoallw.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/alltoallw.Tpo -c -o alltoallw.o alltoallw.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoallw.Tpo .deps/alltoallw.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o alltoallw alltoallw.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT barrier.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/barrier.Tpo -c -o barrier.o barrier.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/barrier.Tpo .deps/barrier.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o barrier barrier.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT bcast.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bcast.Tpo -c -o bcast.o bcast.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bcast.Tpo .deps/bcast.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bcast bcast.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT bcast_struct.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/bcast_struct.Tpo -c -o bcast_struct.o bcast_struct.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bcast_struct.Tpo .deps/bcast_struct.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bcast_struct bcast_struct.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT exscan.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/exscan.Tpo -c -o exscan.o exscan.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/exscan.Tpo .deps/exscan.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o exscan exscan.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT gather.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/gather.Tpo -c -o gather.o gather.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/gather.Tpo .deps/gather.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o gather gather.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT gather_in_place.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/gather_in_place.Tpo -c -o gather_in_place.o
</span><br>
<span class="quotelev1">&gt;    gather_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/gather_in_place.Tpo .deps/gather_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o gather_in_place gather_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT gatherv.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/gatherv.Tpo -c -o gatherv.o gatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/gatherv.Tpo .deps/gatherv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o gatherv gatherv.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT gatherv_in_place.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/gatherv_in_place.Tpo -c -o gatherv_in_place.o
</span><br>
<span class="quotelev1">&gt;    gatherv_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/gatherv_in_place.Tpo .deps/gatherv_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o gatherv_in_place gatherv_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT op.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/op.Tpo -c -o op.o op.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/op.Tpo .deps/op.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o op op.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT reduce.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/reduce.Tpo -c -o reduce.o reduce.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce.Tpo .deps/reduce.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce reduce.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT reduce_big.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/reduce_big.Tpo -c -o reduce_big.o reduce_big.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_big.Tpo .deps/reduce_big.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_big reduce_big.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT reduce_in_place.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/reduce_in_place.Tpo -c -o reduce_in_place.o
</span><br>
<span class="quotelev1">&gt;    reduce_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_in_place.Tpo .deps/reduce_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_in_place reduce_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT reduce_scatter.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/reduce_scatter.Tpo -c -o reduce_scatter.o
</span><br>
<span class="quotelev1">&gt;    reduce_scatter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_scatter.Tpo .deps/reduce_scatter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_scatter reduce_scatter.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    reduce_scatter_in_place.o -MD -MP -MF .deps/reduce_scatter_in_place.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o reduce_scatter_in_place.o reduce_scatter_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_scatter_in_place.Tpo
</span><br>
<span class="quotelev1">&gt;    .deps/reduce_scatter_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o reduce_scatter_in_place reduce_scatter_in_place.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT scan.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/scan.Tpo -c -o scan.o scan.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scan.Tpo .deps/scan.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scan scan.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT scan_in_place.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/scan_in_place.Tpo -c -o scan_in_place.o scan_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scan_in_place.Tpo .deps/scan_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scan_in_place scan_in_place.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT scatter.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/scatter.Tpo -c -o scatter.o scatter.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatter.Tpo .deps/scatter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scatter scatter.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT scatter_in_place.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/scatter_in_place.Tpo -c -o scatter_in_place.o
</span><br>
<span class="quotelev1">&gt;    scatter_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatter_in_place.Tpo .deps/scatter_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scatter_in_place scatter_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT scatterv.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/scatterv.Tpo -c -o scatterv.o scatterv.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatterv.Tpo .deps/scatterv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scatterv scatterv.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT scatterv_in_place.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/scatterv_in_place.Tpo -c -o scatterv_in_place.o
</span><br>
<span class="quotelev1">&gt;    scatterv_in_place.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatterv_in_place.Tpo .deps/scatterv_in_place.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o scatterv_in_place scatterv_in_place.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT struct_gatherv.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/struct_gatherv.Tpo -c -o struct_gatherv.o
</span><br>
<span class="quotelev1">&gt;    struct_gatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/struct_gatherv.Tpo .deps/struct_gatherv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o struct_gatherv struct_gatherv.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/collective'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/collective'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in communicator
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/communicator'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT attrsetget.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/attrsetget.Tpo -c -o attrsetget.o attrsetget.c
</span><br>
<span class="quotelev1">&gt; OUT:attrsetget.c: In function ?attr_set_c?:OUT:
</span><br>
<span class="quotelev1">&gt;    attrsetget.c:27: warning: cast to pointer from integer of different size
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/attrsetget.Tpo .deps/attrsetget.Po
</span><br>
<span class="quotelev1">&gt; OUT:rm -f libattrsetget.a
</span><br>
<span class="quotelev1">&gt; OUT:ar cru libattrsetget.a attrsetget.o attrsetget.o
</span><br>
<span class="quotelev1">&gt; OUT:ranlib libattrsetget.a
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT attr.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/attr.Tpo -c -o attr.o attr.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/attr.Tpo .deps/attr.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o attr attr.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT commdup.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/commdup.Tpo -c -o commdup.o commdup.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/commdup.Tpo .deps/commdup.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o commdup commdup.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT commfree.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/commfree.Tpo -c -o commfree.o commfree.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/commfree.Tpo .deps/commfree.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o commfree commfree.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT compare.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/compare.Tpo -c -o compare.o compare.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/compare.Tpo .deps/compare.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o compare compare.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT intercomm.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/intercomm.Tpo -c -o intercomm.o intercomm.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/intercomm.Tpo .deps/intercomm.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o intercomm intercomm.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT mpisplit.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/mpisplit.Tpo -c -o mpisplit.o mpisplit.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/mpisplit.Tpo .deps/mpisplit.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o mpisplit mpisplit.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT self_atexit.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/self_atexit.Tpo -c -o self_atexit.o self_atexit.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/self_atexit.Tpo .deps/self_atexit.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o self_atexit self_atexit.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT
</span><br>
<span class="quotelev1">&gt;    comm_get_name_cxx.o -MD -MP -MF .deps/comm_get_name_cxx.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    comm_get_name_cxx.o comm_get_name_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/comm_get_name_cxx.Tpo .deps/comm_get_name_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o comm_get_name_cxx comm_get_name_cxx.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o attrsetget_f.o attrsetget_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o attrsetget_f attrsetget_f.o -L../reporting -lompitest -L.
</span><br>
<span class="quotelev1">&gt;    -lattrsetget 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/communicator'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in config
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/config'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt;    make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/config'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in datatype
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/datatype'
</span><br>
<span class="quotelev1">&gt;    mpicc -DHAVE_CONFIG_H -I. -I../reporting	-g -MT bakstr.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bakstr.Tpo -c -o bakstr.o bakstr.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bakstr.Tpo .deps/bakstr.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bakstr bakstr.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT bottom.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/bottom.Tpo -c -o bottom.o bottom.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bottom.Tpo .deps/bottom.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bottom bottom.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT getel.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/getel.Tpo -c -o getel.o getel.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/getel.Tpo .deps/getel.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o getel getel.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT lbub.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/lbub.Tpo -c -o lbub.o lbub.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/lbub.Tpo .deps/lbub.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o lbub lbub.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT lbub2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/lbub2.Tpo -c -o lbub2.o lbub2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/lbub2.Tpo .deps/lbub2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o lbub2 lbub2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT loop.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/loop.Tpo -c -o loop.o loop.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/loop.Tpo .deps/loop.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o loop loop.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT paktest.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/paktest.Tpo -c -o paktest.o paktest.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/paktest.Tpo .deps/paktest.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o paktest paktest.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT pptransp.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/pptransp.Tpo -c -o pptransp.o pptransp.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/pptransp.Tpo .deps/pptransp.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o pptransp pptransp.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT strangest1.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/strangest1.Tpo -c -o strangest1.o strangest1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/strangest1.Tpo .deps/strangest1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o strangest1 strangest1.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT structsr.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/structsr.Tpo -c -o structsr.o structsr.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/structsr.Tpo .deps/structsr.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o structsr structsr.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT structsr2.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/structsr2.Tpo -c -o structsr2.o structsr2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/structsr2.Tpo .deps/structsr2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o structsr2 structsr2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT transp.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/transp.Tpo -c -o transp.o transp.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/transp.Tpo .deps/transp.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o transp transp.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT transp2.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/transp2.Tpo -c -o transp2.o transp2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/transp2.Tpo .deps/transp2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o transp2 transp2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT transp3.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/transp3.Tpo -c -o transp3.o transp3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/transp3.Tpo .deps/transp3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o transp3 transp3.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT transpa.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/transpa.Tpo -c -o transpa.o transpa.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/transpa.Tpo .deps/transpa.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o transpa transpa.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT zero1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/zero1.Tpo -c -o zero1.o zero1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/zero1.Tpo .deps/zero1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o zero1 zero1.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT zero2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/zero2.Tpo -c -o zero2.o zero2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/zero2.Tpo .deps/zero2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o zero2 zero2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT zero3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/zero3.Tpo -c -o zero3.o zero3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/zero3.Tpo .deps/zero3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o zero3 zero3.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT zero5.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/zero5.Tpo -c -o zero5.o zero5.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/zero5.Tpo .deps/zero5.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o zero5 zero5.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT zero6.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/zero6.Tpo -c -o zero6.o zero6.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/zero6.Tpo .deps/zero6.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o zero6 zero6.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT datatype_cxx.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/datatype_cxx.Tpo -c -o datatype_cxx.o datatype_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/datatype_cxx.Tpo .deps/datatype_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o datatype_cxx datatype_cxx.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o fint2_f.o fint2_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o fint2_f fint2_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o fint4_f.o fint4_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o fint4_f fint4_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o freal4_f.o freal4_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o freal4_f freal4_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o freal8_f.o freal8_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o freal8_f freal8_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o fint8_f.o fint8_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o fint8_f fint8_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpif77   -c -o freal16_f.o freal16_f.f
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o freal16_f freal16_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/datatype'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in dynamic
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/dynamic'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT spawn.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/spawn.Tpo -c -o spawn.o spawn.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/spawn.Tpo .deps/spawn.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o spawn spawn.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT spawn_multiple.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/spawn_multiple.Tpo -c -o spawn_multiple.o
</span><br>
<span class="quotelev1">&gt;    spawn_multiple.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/spawn_multiple.Tpo .deps/spawn_multiple.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o spawn_multiple spawn_multiple.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT client_server.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/client_server.Tpo -c -o client_server.o client_server.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/client_server.Tpo .deps/client_server.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o client_server client_server.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT comm_join.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/comm_join.Tpo -c -o comm_join.o comm_join.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/comm_join.Tpo .deps/comm_join.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o comm_join comm_join.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/dynamic'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in environment
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/environment'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT abort.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/abort.Tpo -c -o abort.o abort.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/abort.Tpo .deps/abort.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o abort abort.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT attrs.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/attrs.Tpo -c -o attrs.o attrs.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/attrs.Tpo .deps/attrs.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o attrs attrs.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT err.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/err.Tpo -c -o err.o err.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/err.Tpo .deps/err.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o err err.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT final.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/final.Tpo -c -o final.o final.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/final.Tpo .deps/final.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o final final.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT finalized.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/finalized.Tpo -c -o finalized.o finalized.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/finalized.Tpo .deps/finalized.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o finalized finalized.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT init_thread.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/init_thread.Tpo -c -o init_thread.o init_thread.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/init_thread.Tpo .deps/init_thread.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o init_thread init_thread.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    init_thread_funneled.o -MD -MP -MF .deps/init_thread_funneled.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    init_thread_funneled.o init_thread_funneled.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/init_thread_funneled.Tpo .deps/init_thread_funneled.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o init_thread_funneled init_thread_funneled.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    init_thread_serialized.o -MD -MP -MF .deps/init_thread_serialized.Tpo -c
</span><br>
<span class="quotelev1">&gt;    -o init_thread_serialized.o init_thread_serialized.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/init_thread_serialized.Tpo .deps/init_thread_serialized.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o init_thread_serialized init_thread_serialized.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    init_thread_multiple.o -MD -MP -MF .deps/init_thread_multiple.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    init_thread_multiple.o init_thread_multiple.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/init_thread_multiple.Tpo .deps/init_thread_multiple.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o init_thread_multiple init_thread_multiple.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT initialized.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/initialized.Tpo -c -o initialized.o initialized.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/initialized.Tpo .deps/initialized.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o initialized initialized.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT is_thr_main.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/is_thr_main.Tpo -c -o is_thr_main.o is_thr_main.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/is_thr_main.Tpo .deps/is_thr_main.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o is_thr_main is_thr_main.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT pcontrol.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/pcontrol.Tpo -c -o pcontrol.o pcontrol.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/pcontrol.Tpo .deps/pcontrol.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o pcontrol pcontrol.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT procname.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/procname.Tpo -c -o procname.o procname.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/procname.Tpo .deps/procname.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o procname procname.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT query_thread.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/query_thread.Tpo -c -o query_thread.o query_thread.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/query_thread.Tpo .deps/query_thread.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o query_thread query_thread.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT wtime.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/wtime.Tpo -c -o wtime.o wtime.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/wtime.Tpo .deps/wtime.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o wtime wtime.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT init_thread_cxx.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/init_thread_cxx.Tpo -c -o init_thread_cxx.o
</span><br>
<span class="quotelev1">&gt;    init_thread_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/init_thread_cxx.Tpo .deps/init_thread_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o init_thread_cxx init_thread_cxx.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT is_thr_main_cxx.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/is_thr_main_cxx.Tpo -c -o is_thr_main_cxx.o
</span><br>
<span class="quotelev1">&gt;    is_thr_main_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/is_thr_main_cxx.Tpo .deps/is_thr_main_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o is_thr_main_cxx is_thr_main_cxx.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT query_thread_cxx.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/query_thread_cxx.Tpo -c -o query_thread_cxx.o
</span><br>
<span class="quotelev1">&gt;    query_thread_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/query_thread_cxx.Tpo .deps/query_thread_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o query_thread_cxx query_thread_cxx.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/environment'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in group
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/group'
</span><br>
<span class="quotelev1">&gt;    mpicc -DHAVE_CONFIG_H -I. -I../reporting	-g -MT group.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/group.Tpo -c -o group.o group.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/group.Tpo .deps/group.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o group group.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT groupfree.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/groupfree.Tpo -c -o groupfree.o groupfree.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/groupfree.Tpo .deps/groupfree.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o groupfree groupfree.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT range.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/range.Tpo -c -o range.o range.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/range.Tpo .deps/range.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o range range.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/group'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in io
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/io'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    file_status_get_count.o -MD -MP -MF .deps/file_status_get_count.Tpo -c
</span><br>
<span class="quotelev1">&gt;    -o file_status_get_count.o file_status_get_count.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/file_status_get_count.Tpo .deps/file_status_get_count.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o file_status_get_count file_status_get_count.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/io'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in info
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/info'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT 00_create.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/00_create.Tpo -c -o 00_create.o 00_create.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/00_create.Tpo .deps/00_create.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o 00_create 00_create.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT 10_set.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/10_set.Tpo -c -o 10_set.o 10_set.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/10_set.Tpo .deps/10_set.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o 10_set 10_set.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT 20_delete.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/20_delete.Tpo -c -o 20_delete.o 20_delete.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/20_delete.Tpo .deps/20_delete.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o 20_delete 20_delete.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT 30_get.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/30_get.Tpo -c -o 30_get.o 30_get.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/30_get.Tpo .deps/30_get.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o 30_get 30_get.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT 40_getvaluelen.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/40_getvaluelen.Tpo -c -o 40_getvaluelen.o
</span><br>
<span class="quotelev1">&gt;    40_getvaluelen.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/40_getvaluelen.Tpo .deps/40_getvaluelen.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o 40_getvaluelen 40_getvaluelen.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT 50_getnkeys.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/50_getnkeys.Tpo -c -o 50_getnkeys.o 50_getnkeys.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/50_getnkeys.Tpo .deps/50_getnkeys.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o 50_getnkeys 50_getnkeys.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT 00_create_cxx.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/00_create_cxx.Tpo -c -o 00_create_cxx.o
</span><br>
<span class="quotelev1">&gt;    00_create_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/00_create_cxx.Tpo .deps/00_create_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o 00_create_cxx 00_create_cxx.o -L../reporting -lompitest OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT 10_set_cxx.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/10_set_cxx.Tpo -c -o 10_set_cxx.o 10_set_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/10_set_cxx.Tpo .deps/10_set_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o 10_set_cxx 10_set_cxx.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT 20_delete_cxx.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/20_delete_cxx.Tpo -c -o 20_delete_cxx.o
</span><br>
<span class="quotelev1">&gt;    20_delete_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/20_delete_cxx.Tpo .deps/20_delete_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o 20_delete_cxx 20_delete_cxx.o -L../reporting -lompitest OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT 30_get_cxx.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/30_get_cxx.Tpo -c -o 30_get_cxx.o 30_get_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/30_get_cxx.Tpo .deps/30_get_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o 30_get_cxx 30_get_cxx.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT
</span><br>
<span class="quotelev1">&gt;    40_getvaluelen_cxx.o -MD -MP -MF .deps/40_getvaluelen_cxx.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    40_getvaluelen_cxx.o 40_getvaluelen_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/40_getvaluelen_cxx.Tpo .deps/40_getvaluelen_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o 40_getvaluelen_cxx 40_getvaluelen_cxx.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT 50_getnkeys_cxx.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/50_getnkeys_cxx.Tpo -c -o 50_getnkeys_cxx.o
</span><br>
<span class="quotelev1">&gt;    50_getnkeys_cxx.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/50_getnkeys_cxx.Tpo .deps/50_getnkeys_cxx.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o 50_getnkeys_cxx 50_getnkeys_cxx.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/info'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in onesided
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/onesided'
</span><br>
<span class="quotelev1">&gt;    mpicc -DHAVE_CONFIG_H -I. -I../reporting	-g -MT c_create.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/c_create.Tpo -c -o c_create.o c_create.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_create.Tpo .deps/c_create.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_create c_create.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_create_size.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/c_create_size.Tpo -c -o c_create_size.o c_create_size.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_create_size.Tpo .deps/c_create_size.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_create_size c_create_size.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_create_disp.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/c_create_disp.Tpo -c -o c_create_disp.o c_create_disp.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_create_disp.Tpo .deps/c_create_disp.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_create_disp c_create_disp.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_create_info.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/c_create_info.Tpo -c -o c_create_info.o c_create_info.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_create_info.Tpo .deps/c_create_info.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_create_info c_create_info.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    c_create_info_half.o -MD -MP -MF .deps/c_create_info_half.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    c_create_info_half.o c_create_info_half.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_create_info_half.Tpo .deps/c_create_info_half.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_create_info_half c_create_info_half.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_create_no_free.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/c_create_no_free.Tpo -c -o c_create_no_free.o
</span><br>
<span class="quotelev1">&gt;    c_create_no_free.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_create_no_free.Tpo .deps/c_create_no_free.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_create_no_free c_create_no_free.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_win_attr.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/c_win_attr.Tpo -c -o c_win_attr.o c_win_attr.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_win_attr.Tpo .deps/c_win_attr.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_win_attr c_win_attr.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_win_errhandler.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/c_win_errhandler.Tpo -c -o c_win_errhandler.o
</span><br>
<span class="quotelev1">&gt;    c_win_errhandler.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_win_errhandler.Tpo .deps/c_win_errhandler.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_win_errhandler c_win_errhandler.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_fence_simple.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/c_fence_simple.Tpo -c -o c_fence_simple.o
</span><br>
<span class="quotelev1">&gt;    c_fence_simple.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_fence_simple.Tpo .deps/c_fence_simple.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_fence_simple c_fence_simple.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_fence_asserts.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/c_fence_asserts.Tpo -c -o c_fence_asserts.o
</span><br>
<span class="quotelev1">&gt;    c_fence_asserts.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_fence_asserts.Tpo .deps/c_fence_asserts.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_fence_asserts c_fence_asserts.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_fence_put_1.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/c_fence_put_1.Tpo -c -o c_fence_put_1.o c_fence_put_1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_fence_put_1.Tpo .deps/c_fence_put_1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_fence_put_1 c_fence_put_1.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_lock_illegal.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/c_lock_illegal.Tpo -c -o c_lock_illegal.o
</span><br>
<span class="quotelev1">&gt;    c_lock_illegal.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_lock_illegal.Tpo .deps/c_lock_illegal.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_lock_illegal c_lock_illegal.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_put.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/c_put.Tpo -c -o c_put.o c_put.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_put.Tpo .deps/c_put.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_put c_put.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_put_big.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/c_put_big.Tpo -c -o c_put_big.o c_put_big.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_put_big.Tpo .deps/c_put_big.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_put_big c_put_big.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_accumulate.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/c_accumulate.Tpo -c -o c_accumulate.o c_accumulate.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_accumulate.Tpo .deps/c_accumulate.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_accumulate c_accumulate.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT
</span><br>
<span class="quotelev1">&gt;    c_accumulate_atomic.o -MD -MP -MF .deps/c_accumulate_atomic.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    c_accumulate_atomic.o c_accumulate_atomic.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_accumulate_atomic.Tpo .deps/c_accumulate_atomic.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_accumulate_atomic c_accumulate_atomic.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_get.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/c_get.Tpo -c -o c_get.o c_get.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_get.Tpo .deps/c_get.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_get c_get.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT c_get_big.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/c_get_big.Tpo -c -o c_get_big.o c_get_big.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_get_big.Tpo .deps/c_get_big.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o c_get_big c_get_big.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_alloc.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/cxx_alloc.Tpo -c -o cxx_alloc.o cxx_alloc.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_alloc.Tpo .deps/cxx_alloc.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_alloc cxx_alloc.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_create.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/cxx_create.Tpo -c -o cxx_create.o cxx_create.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_create.Tpo .deps/cxx_create.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_create cxx_create.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_create_size.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/cxx_create_size.Tpo -c -o cxx_create_size.o
</span><br>
<span class="quotelev1">&gt;    cxx_create_size.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_create_size.Tpo .deps/cxx_create_size.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_create_size cxx_create_size.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_create_disp.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/cxx_create_disp.Tpo -c -o cxx_create_disp.o
</span><br>
<span class="quotelev1">&gt;    cxx_create_disp.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_create_disp.Tpo .deps/cxx_create_disp.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_create_disp cxx_create_disp.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_create_info.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/cxx_create_info.Tpo -c -o cxx_create_info.o
</span><br>
<span class="quotelev1">&gt;    cxx_create_info.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_create_info.Tpo .deps/cxx_create_info.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_create_info cxx_create_info.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT
</span><br>
<span class="quotelev1">&gt;    cxx_create_info_half.o -MD -MP -MF .deps/cxx_create_info_half.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    cxx_create_info_half.o cxx_create_info_half.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_create_info_half.Tpo .deps/cxx_create_info_half.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_create_info_half cxx_create_info_half.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT
</span><br>
<span class="quotelev1">&gt;    cxx_call_errhandler.o -MD -MP -MF .deps/cxx_call_errhandler.Tpo -c -o
</span><br>
<span class="quotelev1">&gt;    cxx_call_errhandler.o cxx_call_errhandler.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_call_errhandler.Tpo .deps/cxx_call_errhandler.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_call_errhandler cxx_call_errhandler.o
</span><br>
<span class="quotelev1">&gt;    -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_fence.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/cxx_fence.Tpo -c -o cxx_fence.o cxx_fence.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_fence.Tpo .deps/cxx_fence.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_fence cxx_fence.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_fence_get.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/cxx_fence_get.Tpo -c -o cxx_fence_get.o
</span><br>
<span class="quotelev1">&gt;    cxx_fence_get.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_fence_get.Tpo .deps/cxx_fence_get.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_fence_get cxx_fence_get.o -L../reporting -lompitest OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_get_group.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/cxx_get_group.Tpo -c -o cxx_get_group.o
</span><br>
<span class="quotelev1">&gt;    cxx_get_group.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_get_group.Tpo .deps/cxx_get_group.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_get_group cxx_get_group.o -L../reporting -lompitest OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_simple_lock.o
</span><br>
<span class="quotelev1">&gt;    -MD -MP -MF .deps/cxx_simple_lock.Tpo -c -o cxx_simple_lock.o
</span><br>
<span class="quotelev1">&gt;    cxx_simple_lock.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_simple_lock.Tpo .deps/cxx_simple_lock.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_simple_lock cxx_simple_lock.o -L../reporting
</span><br>
<span class="quotelev1">&gt;    -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_win_attr.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/cxx_win_attr.Tpo -c -o cxx_win_attr.o cxx_win_attr.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_win_attr.Tpo .deps/cxx_win_attr.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_win_attr cxx_win_attr.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I. -I../reporting	  -g -MT cxx_win_name.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/cxx_win_name.Tpo -c -o cxx_win_name.o cxx_win_name.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cxx_win_name.Tpo .deps/cxx_win_name.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o cxx_win_name cxx_win_name.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/onesided'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in pt2pt
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/pt2pt'
</span><br>
<span class="quotelev1">&gt;    mpif77   -c -o sendrecv_f.o sendrecv_f.f
</span><br>
<span class="quotelev1">&gt; OUT:sendrecv_f.f:119.72:
</span><br>
<span class="quotelev1">&gt; OUT:	    go to 121							   
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; 									  1
</span><br>
<span class="quotelev1">&gt;    sendrecv_f.f:121.72:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     121     end do							   
</span><br>
<span class="quotelev1">&gt; 									  2
</span><br>
<span class="quotelev1">&gt;    Warning: Deleted feature: GOTO at (1) jumps to END of construct at (2)
</span><br>
<span class="quotelev1">&gt; OUT:sendrecv_f.f:163.72:
</span><br>
<span class="quotelev1">&gt; OUT:		go to 165						   
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; 									  1
</span><br>
<span class="quotelev1">&gt;    sendrecv_f.f:165.72:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     165  end do 							   
</span><br>
<span class="quotelev1">&gt; 									  2
</span><br>
<span class="quotelev1">&gt;    Warning: Deleted feature: GOTO at (1) jumps to END of construct at (2)
</span><br>
<span class="quotelev1">&gt; OUT:mpif77     -o sendrecv_f sendrecv_f.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT allocmem.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/allocmem.Tpo -c -o allocmem.o allocmem.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allocmem.Tpo .deps/allocmem.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o allocmem allocmem.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT bsend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bsend.Tpo -c -o bsend.o bsend.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bsend.Tpo .deps/bsend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bsend bsend.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT bsend_free.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/bsend_free.Tpo -c -o bsend_free.o bsend_free.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bsend_free.Tpo .deps/bsend_free.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o bsend_free bsend_free.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT buffer.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/buffer.Tpo -c -o buffer.o buffer.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/buffer.Tpo .deps/buffer.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o buffer buffer.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT free.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/free.Tpo -c -o free.o free.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/free.Tpo .deps/free.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o free free.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT getcount.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/getcount.Tpo -c -o getcount.o getcount.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/getcount.Tpo .deps/getcount.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o getcount getcount.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT interf.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/interf.Tpo -c -o interf.o interf.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/interf.Tpo .deps/interf.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o interf interf.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT iprobe.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/iprobe.Tpo -c -o iprobe.o iprobe.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/iprobe.Tpo .deps/iprobe.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o iprobe iprobe.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT isend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/isend.Tpo -c -o isend.o isend.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/isend.Tpo .deps/isend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o isend isend.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT probe.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/probe.Tpo -c -o probe.o probe.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/probe.Tpo .deps/probe.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o probe probe.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT rsend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/rsend.Tpo -c -o rsend.o rsend.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/rsend.Tpo .deps/rsend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o rsend rsend.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT rsend2.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/rsend2.Tpo -c -o rsend2.o rsend2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/rsend2.Tpo .deps/rsend2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o rsend2 rsend2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT send.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/send.Tpo -c -o send.o send.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/send.Tpo .deps/send.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o send send.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT send2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/send2.Tpo -c -o send2.o send2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/send2.Tpo .deps/send2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o send2 send2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT sendrecv.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/sendrecv.Tpo -c -o sendrecv.o sendrecv.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/sendrecv.Tpo .deps/sendrecv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o sendrecv sendrecv.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT sendrecv_rep.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/sendrecv_rep.Tpo -c -o sendrecv_rep.o sendrecv_rep.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/sendrecv_rep.Tpo .deps/sendrecv_rep.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o sendrecv_rep sendrecv_rep.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT seq.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/seq.Tpo -c -o seq.o seq.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/seq.Tpo .deps/seq.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o seq seq.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT ssend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/ssend.Tpo -c -o ssend.o ssend.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/ssend.Tpo .deps/ssend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o ssend ssend.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT start.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/start.Tpo -c -o start.o start.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/start.Tpo .deps/start.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o start start.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT startall.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/startall.Tpo -c -o startall.o startall.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/startall.Tpo .deps/startall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o startall startall.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT test1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test1.Tpo -c -o test1.o test1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test1.Tpo .deps/test1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o test1 test1.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT test2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test2.Tpo -c -o test2.o test2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test2.Tpo .deps/test2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o test2 test2.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT test3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test3.Tpo -c -o test3.o test3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test3.Tpo .deps/test3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o test3 test3.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT testall.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/testall.Tpo -c -o testall.o testall.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/testall.Tpo .deps/testall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o testall testall.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT testany.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/testany.Tpo -c -o testany.o testany.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/testany.Tpo .deps/testany.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o testany testany.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT testsome.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/testsome.Tpo -c -o testsome.o testsome.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/testsome.Tpo .deps/testsome.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o testsome testsome.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT waitall.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/waitall.Tpo -c -o waitall.o waitall.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitall.Tpo .deps/waitall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o waitall waitall.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT waitany.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/waitany.Tpo -c -o waitany.o waitany.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitany.Tpo .deps/waitany.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o waitany waitany.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT waitnull.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/waitnull.Tpo -c -o waitnull.o waitnull.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitnull.Tpo .deps/waitnull.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o waitnull waitnull.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT waitsome.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/waitsome.Tpo -c -o waitsome.o waitsome.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitsome.Tpo .deps/waitsome.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o waitsome waitsome.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT wildcard.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/wildcard.Tpo -c -o wildcard.o wildcard.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/wildcard.Tpo .deps/wildcard.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o wildcard wildcard.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/pt2pt'
</span><br>
<span class="quotelev1">&gt; OUT:Making all in topology
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/topology'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT cart.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/cart.Tpo -c -o cart.o cart.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cart.Tpo .deps/cart.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o cart cart.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT dimscreate.o -MD
</span><br>
<span class="quotelev1">&gt;    -MP -MF .deps/dimscreate.Tpo -c -o dimscreate.o dimscreate.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/dimscreate.Tpo .deps/dimscreate.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o dimscreate dimscreate.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT graph.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/graph.Tpo -c -o graph.o graph.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/graph.Tpo .deps/graph.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o graph graph.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I. -I../reporting	 -g -MT sub.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/sub.Tpo -c -o sub.o sub.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/sub.Tpo .deps/sub.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -g	-o sub sub.o -L../reporting -lompitest 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/topology'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt;    make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/tests/ibm/ibm/test_built.ini
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-ibm-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-ibm-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: onesided]
</span><br>
<span class="quotelev1">&gt; Evaluating: onesided
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt;    Building for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8] / [onesided]
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Shell
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; chdir tests/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; Making dir: onesided (cwd: /tmp/ompi-core-testers/installs/dLS2/tests)
</span><br>
<span class="quotelev1">&gt; onesided does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir onesided/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/onesided
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to /tmp/ompi-core-testers/installs/dLS2/tests/onesided
</span><br>
<span class="quotelev1">&gt; Copying directory:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/sources/test_get__onesided/onesided
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf onesided
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/sources/test_get__onesided/onesided .
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir onesided
</span><br>
<span class="quotelev1">&gt; copytree running post_copy command: ./autogen.sh
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/QcIdt4zs6S
</span><br>
<span class="quotelev1">&gt; OUT:
</span><br>
<span class="quotelev1">&gt;    *** Running GNU tools in directory: 
</span><br>
<span class="quotelev1">&gt;    ***	 /tmp/ompi-core-testers/installs/dLS2/tests/onesided/onesided
</span><br>
<span class="quotelev1">&gt; OUT:aclocal
</span><br>
<span class="quotelev1">&gt; OUT:autoheader
</span><br>
<span class="quotelev1">&gt; OUT:autoconf
</span><br>
<span class="quotelev1">&gt; OUT:automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:37: installing `./config.guess'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:37: installing `./config.sub'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:24: installing `./install-sh'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:24: installing `./missing'
</span><br>
<span class="quotelev1">&gt; OUT:Makefile.am: installing `./depcomp'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/onesided
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; chdir onesided
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 100
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Shell::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: ./configure
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/xxwjpM49dT
</span><br>
<span class="quotelev1">&gt; OUT:Configuring Open MPI/onesided test suite
</span><br>
<span class="quotelev1">&gt; OUT:checking for a BSD-compatible install... OUT:/usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; OUT:checking whether build environment is sane... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for a thread-safe mkdir -p... OUT:/bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; OUT:checking for gawk... OUT:gawk
</span><br>
<span class="quotelev1">&gt; OUT:checking whether make sets $(MAKE)... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking build system type... OUT:powerpc64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking host system type... OUT:powerpc64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpicc... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for gcc... OUT:mpicc
</span><br>
<span class="quotelev1">&gt; OUT:checking for C compiler default output file name... OUT:a.out
</span><br>
<span class="quotelev1">&gt; OUT:checking whether the C compiler works... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are cross compiling... OUT:no
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of executables... OUT:
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of object files... OUT:o
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpicc accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpicc option to accept ISO C89... OUT:none needed
</span><br>
<span class="quotelev1">&gt; OUT:checking for style of include used by make... OUT:GNU
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpicc... OUT:gcc3
</span><br>
<span class="quotelev1">&gt; OUT:checking how to run the C preprocessor... OUT:mpicc -E
</span><br>
<span class="quotelev1">&gt; OUT:checking for grep that handles long lines and -e... OUT:/usr/bin/grep
</span><br>
<span class="quotelev1">&gt; OUT:checking for egrep... OUT:/usr/bin/grep -E
</span><br>
<span class="quotelev1">&gt; OUT:checking for ANSI C header files... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for sys/types.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for sys/stat.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for stdlib.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for string.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for memory.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for strings.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for inttypes.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for stdint.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for unistd.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking size of void *... OUT:8
</span><br>
<span class="quotelev1">&gt; OUT:checking for the C compiler vendor... OUT:gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking for C compiler-specific debug flags... OUT:-Wall
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpic++... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C++ compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpic++ accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpic++... OUT:gcc3
</span><br>
<span class="quotelev1">&gt; OUT:checking for the C++ compiler vendor... OUT:gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking for C++ compiler-specific debug flags... OUT:-Wall
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpif77... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU Fortran 77 compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpif77 accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for Fortran 77 compiler-specific flags... OUT:-fcray-pointer
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpif90... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU Fortran compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpif90 accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for Fortran 90 compiler-specific flags... OUT:-fcray-pointer
</span><br>
<span class="quotelev1">&gt; OUT:checking for ranlib... OUT:ranlib
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpi.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for MPI_Initialized in -lmpi... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have Fortran 77 MPI bindings... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have Fortran 90 MPI bindings... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have MPI-2 C++ support... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if checking MPI API params... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating onesided_config.h
</span><br>
<span class="quotelev1">&gt; OUT:config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; OUT:make  all-am
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/onesided/onesided'
</span><br>
<span class="quotelev1">&gt;    mpicc -DHAVE_CONFIG_H -I.	 -Wall -g -MT utils.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/utils.Tpo -c -o utils.o utils.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/utils.Tpo .deps/utils.Po
</span><br>
<span class="quotelev1">&gt; OUT:rm -f libonesided_util.a
</span><br>
<span class="quotelev1">&gt; OUT:ar cru libonesided_util.a utils.o 
</span><br>
<span class="quotelev1">&gt; OUT:ranlib libonesided_util.a
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT cmpf2c.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/cmpf2c.Tpo -c -o cmpf2c.o cmpf2c.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cmpf2c.Tpo .deps/cmpf2c.Po
</span><br>
<span class="quotelev1">&gt; OUT:rm -f libonesided_f2c.a
</span><br>
<span class="quotelev1">&gt; OUT:ar cru libonesided_f2c.a cmpf2c.o 
</span><br>
<span class="quotelev1">&gt; OUT:ranlib libonesided_f2c.a
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_acc1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_acc1.Tpo -c -o test_acc1.o test_acc1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_acc1.Tpo .deps/test_acc1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_acc1 test_acc1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_acc2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_acc2.Tpo -c -o test_acc2.o test_acc2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_acc2.Tpo .deps/test_acc2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_acc2 test_acc2.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_acc3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_acc3.Tpo -c -o test_acc3.o test_acc3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_acc3.Tpo .deps/test_acc3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_acc3 test_acc3.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_dan1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_dan1.Tpo -c -o test_dan1.o test_dan1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_dan1.Tpo .deps/test_dan1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_dan1 test_dan1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_get1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_get1.Tpo -c -o test_get1.o test_get1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_get1.Tpo .deps/test_get1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_get1 test_get1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_get2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_get2.Tpo -c -o test_get2.o test_get2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_get2.Tpo .deps/test_get2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_get2 test_get2.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_get3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_get3.Tpo -c -o test_get3.o test_get3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_get3.Tpo .deps/test_get3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_get3 test_get3.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_lock1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_lock1.Tpo -c -o test_lock1.o test_lock1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_lock1.Tpo .deps/test_lock1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_lock1 test_lock1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_lock2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_lock2.Tpo -c -o test_lock2.o test_lock2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_lock2.Tpo .deps/test_lock2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_lock2 test_lock2.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_lock3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_lock3.Tpo -c -o test_lock3.o test_lock3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_lock3.Tpo .deps/test_lock3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_lock3 test_lock3.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_lock4.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_lock4.Tpo -c -o test_lock4.o test_lock4.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_lock4.Tpo .deps/test_lock4.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_lock4 test_lock4.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_lock5.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_lock5.Tpo -c -o test_lock5.o test_lock5.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_lock5.Tpo .deps/test_lock5.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_lock5 test_lock5.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_mt_put1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_mt_put1.Tpo -c -o test_mt_put1.o test_mt_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_mt_put1.Tpo .deps/test_mt_put1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_mt_put1 test_mt_put1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_mwin1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_mwin1.Tpo -c -o test_mwin1.o test_mwin1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_mwin1.Tpo .deps/test_mwin1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_mwin1 test_mwin1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_put1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_put1.Tpo -c -o test_put1.o test_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_put1.Tpo .deps/test_put1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_put1 test_put1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_put4.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_put4.Tpo -c -o test_put4.o test_put4.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_put4.Tpo .deps/test_put4.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_put4 test_put4.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_put5.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_put5.Tpo -c -o test_put5.o test_put5.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_put5.Tpo .deps/test_put5.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_put5 test_put5.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_put6.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_put6.Tpo -c -o test_put6.o test_put6.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_put6.Tpo .deps/test_put6.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_put6 test_put6.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_rma1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_rma1.Tpo -c -o test_rma1.o test_rma1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_rma1.Tpo .deps/test_rma1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_rma1 test_rma1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_start1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_start1.Tpo -c -o test_start1.o test_start1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_start1.Tpo .deps/test_start1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_start1 test_start1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_start2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_start2.Tpo -c -o test_start2.o test_start2.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_start2.Tpo .deps/test_start2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_start2 test_start2.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_start3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_start3.Tpo -c -o test_start3.o test_start3.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_start3.Tpo .deps/test_start3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_start3 test_start3.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_um_lock1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_um_lock1.Tpo -c -o test_um_lock1.o test_um_lock1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_um_lock1.Tpo .deps/test_um_lock1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_um_lock1 test_um_lock1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_um_mixed_put1.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/test_um_mixed_put1.Tpo -c -o test_um_mixed_put1.o
</span><br>
<span class="quotelev1">&gt;    test_um_mixed_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_um_mixed_put1.Tpo .deps/test_um_mixed_put1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_um_mixed_put1 test_um_mixed_put1.o
</span><br>
<span class="quotelev1">&gt;    libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_um_put1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test_um_put1.Tpo -c -o test_um_put1.o test_um_put1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_um_put1.Tpo .deps/test_um_put1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_um_put1 test_um_put1.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT test_wincreate1.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/test_wincreate1.Tpo -c -o test_wincreate1.o test_wincreate1.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test_wincreate1.Tpo .deps/test_wincreate1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o test_wincreate1 test_wincreate1.o
</span><br>
<span class="quotelev1">&gt;    libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT t_winattrs.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/t_winattrs.Tpo -c -o t_winattrs.o t_winattrs.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/t_winattrs.Tpo .deps/t_winattrs.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o t_winattrs t_winattrs.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT t_win.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/t_win.Tpo -c -o t_win.o t_win.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/t_win.Tpo .deps/t_win.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o t_win t_win.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT t_winerror.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/t_winerror.Tpo -c -o t_winerror.o t_winerror.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/t_winerror.Tpo .deps/t_winerror.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o t_winerror t_winerror.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -Wall -g -MT t_winself.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/t_winself.Tpo -c -o t_winself.o t_winself.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/t_winself.Tpo .deps/t_winself.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -Wall -g   -o t_winself t_winself.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g -c -o t.o t.f90
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g	-o t t.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g -c -o t_winattrsf.o t_winattrsf.f90
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g	-o t_winattrsf t_winattrsf.o
</span><br>
<span class="quotelev1">&gt;    libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g -c -o t_f2c_c2f.o t_f2c_c2f.f90
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g	-o t_f2c_c2f t_f2c_c2f.o libonesided_f2c.a
</span><br>
<span class="quotelev1">&gt;    libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g -c -o t_winf.o t_winf.f90
</span><br>
<span class="quotelev1">&gt; OUT:mpif90  -fcray-pointer -g	-o t_winf t_winf.o libonesided_util.a 
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/onesided/onesided'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/tests/onesided/onesided/test_built.
</span><br>
<span class="quotelev1">&gt;    ini
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-onesided-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-onesided-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: mpicxx]
</span><br>
<span class="quotelev1">&gt; Evaluating: mpicxx
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt;    Building for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8] / [mpicxx]
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Shell
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; chdir tests/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; Making dir: mpicxx (cwd: /tmp/ompi-core-testers/installs/dLS2/tests)
</span><br>
<span class="quotelev1">&gt; mpicxx does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir mpicxx/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/mpicxx
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to /tmp/ompi-core-testers/installs/dLS2/tests/mpicxx
</span><br>
<span class="quotelev1">&gt; Copying directory:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/sources/test_get__mpicxx/cxx-test-suite
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf cxx-test-suite
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/sources/test_get__mpicxx/cxx-test-suite .
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir cxx-test-suite
</span><br>
<span class="quotelev1">&gt; copytree running post_copy command: ./autogen.sh
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/qCdoLhIgjx
</span><br>
<span class="quotelev1">&gt; OUT:
</span><br>
<span class="quotelev1">&gt;    *** Running GNU tools in directory: 
</span><br>
<span class="quotelev1">&gt;    ***	 /tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite
</span><br>
<span class="quotelev1">&gt; OUT:aclocal
</span><br>
<span class="quotelev1">&gt; OUT:autoheader
</span><br>
<span class="quotelev1">&gt; OUT:autoconf
</span><br>
<span class="quotelev1">&gt; OUT:libtoolize --automake --copy
</span><br>
<span class="quotelev1">&gt; OUT:automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:40: installing `./config/config.guess'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:40: installing `./config/config.sub'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:20: installing `./config/install-sh'
</span><br>
<span class="quotelev1">&gt; OUT:configure.ac:20: installing `./config/missing'
</span><br>
<span class="quotelev1">&gt; OUT:src/Makefile.am: installing `./config/depcomp'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/mpicxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; chdir cxx-test-suite
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Shell::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: ./configure CC=mpicc CXX=mpic++
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/TXYRC9ZW7U
</span><br>
<span class="quotelev1">&gt; OUT:Configuring Open MPI C++ test suite
</span><br>
<span class="quotelev1">&gt; OUT:checking for a BSD-compatible install... OUT:/usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; OUT:checking whether build environment is sane... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for a thread-safe mkdir -p... OUT:/bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; OUT:checking for gawk... OUT:gawk
</span><br>
<span class="quotelev1">&gt; OUT:checking whether make sets $(MAKE)... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking build system type... OUT:powerpc64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking host system type... OUT:powerpc64-suse-linux-gnu
</span><br>
<span class="quotelev1">&gt; OUT:checking for gcc... OUT:mpicc
</span><br>
<span class="quotelev1">&gt; OUT:checking for C compiler default output file name... OUT:a.out
</span><br>
<span class="quotelev1">&gt; OUT:checking whether the C compiler works... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are cross compiling... OUT:no
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of executables... OUT:
</span><br>
<span class="quotelev1">&gt; OUT:checking for suffix of object files... OUT:o
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpicc accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpicc option to accept ISO C89... OUT:none needed
</span><br>
<span class="quotelev1">&gt; OUT:checking for style of include used by make... OUT:GNU
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpicc... OUT:gcc3
</span><br>
<span class="quotelev1">&gt; OUT:checking whether we are using the GNU C++ compiler... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking whether mpic++ accepts -g... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking dependency style of mpic++... OUT:gcc3
</span><br>
<span class="quotelev1">&gt; OUT:checking for ranlib... OUT:ranlib
</span><br>
<span class="quotelev1">&gt; OUT:checking for mpi.h... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for MPI_Initialized in -lmpi... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have MPI-2 C++ support... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking if have MPI-2 IO support... OUT:yes
</span><br>
<span class="quotelev1">&gt; OUT:checking for signal declaration... OUT:SYSV
</span><br>
<span class="quotelev1">&gt; OUT:configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating src/Makefile
</span><br>
<span class="quotelev1">&gt; OUT:config.status: creating src/test_config.h
</span><br>
<span class="quotelev1">&gt; OUT:config.status: executing depfiles commands
</span><br>
<span class="quotelev1">&gt; OUT:Making all in src
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite/src'
</span><br>
<span class="quotelev1">&gt; OUT:make  all-am
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite/src'
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT connect.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/connect.Tpo -c -o connect.o connect.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/connect.Tpo .deps/connect.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o connect connect.o  
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT mpi2c++_dynamics_test.o -MD -MP
</span><br>
<span class="quotelev1">&gt;    -MF .deps/mpi2c++_dynamics_test.Tpo -c -o mpi2c++_dynamics_test.o
</span><br>
<span class="quotelev1">&gt;    mpi2c++_dynamics_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/mpi2c++_dynamics_test.Tpo .deps/mpi2c++_dynamics_test.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT messages.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/messages.Tpo -c -o messages.o messages.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/messages.Tpo .deps/messages.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT stack.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/stack.Tpo -c -o stack.o stack.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/stack.Tpo .deps/stack.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT signal.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/signal.Tpo -c -o signal.o signal.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/signal.Tpo .deps/signal.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT c_s.o -MD -MP -MF .deps/c_s.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o c_s.o c_s.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/c_s.Tpo .deps/c_s.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o mpi2c++_dynamics_test mpi2c++_dynamics_test.o
</span><br>
<span class="quotelev1">&gt;    messages.o stack.o signal.o c_s.o  
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT mpi2c++_test.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/mpi2c++_test.Tpo -c -o mpi2c++_test.o mpi2c++_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/mpi2c++_test.Tpo .deps/mpi2c++_test.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT allgather.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/allgather.Tpo -c -o allgather.o allgather.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgather.Tpo .deps/allgather.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT allgatherv.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/allgatherv.Tpo -c -o allgatherv.o allgatherv.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allgatherv.Tpo .deps/allgatherv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT allreduce.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/allreduce.Tpo -c -o allreduce.o allreduce.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/allreduce.Tpo .deps/allreduce.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT alltoall.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/alltoall.Tpo -c -o alltoall.o alltoall.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoall.Tpo .deps/alltoall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT alltoallv.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/alltoallv.Tpo -c -o alltoallv.o alltoallv.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/alltoallv.Tpo .deps/alltoallv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT attr.o -MD -MP -MF .deps/attr.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o attr.o attr.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/attr.Tpo .deps/attr.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT badbuf.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/badbuf.Tpo -c -o badbuf.o badbuf.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/badbuf.Tpo .deps/badbuf.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT bcast.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bcast.Tpo -c -o bcast.o bcast.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bcast.Tpo .deps/bcast.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT bcast_struct.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bcast_struct.Tpo -c -o bcast_struct.o bcast_struct.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bcast_struct.Tpo .deps/bcast_struct.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT bottom.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bottom.Tpo -c -o bottom.o bottom.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bottom.Tpo .deps/bottom.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT bsend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/bsend.Tpo -c -o bsend.o bsend.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/bsend.Tpo .deps/bsend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT buffer.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/buffer.Tpo -c -o buffer.o buffer.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/buffer.Tpo .deps/buffer.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT cancel.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/cancel.Tpo -c -o cancel.o cancel.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cancel.Tpo .deps/cancel.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT cartcomm.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/cartcomm.Tpo -c -o cartcomm.o cartcomm.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/cartcomm.Tpo .deps/cartcomm.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -DHAVE_CONFIG_H -I.	  -g -MT chandles.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/chandles.Tpo -c -o chandles.o chandles.c
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/chandles.Tpo .deps/chandles.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT commdup.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/commdup.Tpo -c -o commdup.o commdup.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/commdup.Tpo .deps/commdup.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT commfree.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/commfree.Tpo -c -o commfree.o commfree.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/commfree.Tpo .deps/commfree.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT commgethandler.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/commgethandler.Tpo -c -o commgethandler.o commgethandler.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/commgethandler.Tpo .deps/commgethandler.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT commname.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/commname.Tpo -c -o commname.o commname.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/commname.Tpo .deps/commname.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT compare.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/compare.Tpo -c -o compare.o compare.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/compare.Tpo .deps/compare.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT constants.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/constants.Tpo -c -o constants.o constants.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/constants.Tpo .deps/constants.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT dims.o -MD -MP -MF .deps/dims.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o dims.o dims.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/dims.Tpo .deps/dims.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT dup_test.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/dup_test.Tpo -c -o dup_test.o dup_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/dup_test.Tpo .deps/dup_test.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT errhandler.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/errhandler.Tpo -c -o errhandler.o errhandler.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/errhandler.Tpo .deps/errhandler.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT finalized.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/finalized.Tpo -c -o finalized.o finalized.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/finalized.Tpo .deps/finalized.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT gather.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/gather.Tpo -c -o gather.o gather.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/gather.Tpo .deps/gather.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT getcount.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/getcount.Tpo -c -o getcount.o getcount.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/getcount.Tpo .deps/getcount.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT getel.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/getel.Tpo -c -o getel.o getel.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/getel.Tpo .deps/getel.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT graphcomm.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/graphcomm.Tpo -c -o graphcomm.o graphcomm.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/graphcomm.Tpo .deps/graphcomm.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT grequest.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/grequest.Tpo -c -o grequest.o grequest.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/grequest.Tpo .deps/grequest.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT group.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/group.Tpo -c -o group.o group.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/group.Tpo .deps/group.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT groupfree.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/groupfree.Tpo -c -o groupfree.o groupfree.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/groupfree.Tpo .deps/groupfree.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT handleconversion.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/handleconversion.Tpo -c -o handleconversion.o handleconversion.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/handleconversion.Tpo .deps/handleconversion.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT info.o -MD -MP -MF .deps/info.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o info.o info.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/info.Tpo .deps/info.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT initialized1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/initialized1.Tpo -c -o initialized1.o initialized1.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/initialized1.Tpo .deps/initialized1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT initialized2.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/initialized2.Tpo -c -o initialized2.o initialized2.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/initialized2.Tpo .deps/initialized2.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT intercomm.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/intercomm.Tpo -c -o intercomm.o intercomm.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/intercomm.Tpo .deps/intercomm.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT interf.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/interf.Tpo -c -o interf.o interf.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/interf.Tpo .deps/interf.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT iprobe.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/iprobe.Tpo -c -o iprobe.o iprobe.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/iprobe.Tpo .deps/iprobe.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT isend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/isend.Tpo -c -o isend.o isend.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/isend.Tpo .deps/isend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT op_test.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/op_test.Tpo -c -o op_test.o op_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/op_test.Tpo .deps/op_test.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT pack_test.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/pack_test.Tpo -c -o pack_test.o pack_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/pack_test.Tpo .deps/pack_test.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT pcontrol.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/pcontrol.Tpo -c -o pcontrol.o pcontrol.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/pcontrol.Tpo .deps/pcontrol.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT probe.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/probe.Tpo -c -o probe.o probe.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/probe.Tpo .deps/probe.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT procname.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/procname.Tpo -c -o procname.o procname.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/procname.Tpo .deps/procname.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT querythread.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/querythread.Tpo -c -o querythread.o querythread.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/querythread.Tpo .deps/querythread.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT rank_size.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/rank_size.Tpo -c -o rank_size.o rank_size.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/rank_size.Tpo .deps/rank_size.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT reduce.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/reduce.Tpo -c -o reduce.o reduce.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce.Tpo .deps/reduce.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT reduce_scatter.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/reduce_scatter.Tpo -c -o reduce_scatter.o reduce_scatter.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/reduce_scatter.Tpo .deps/reduce_scatter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT request1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/request1.Tpo -c -o request1.o request1.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/request1.Tpo .deps/request1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT rsend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/rsend.Tpo -c -o rsend.o rsend.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/rsend.Tpo .deps/rsend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT scan.o -MD -MP -MF .deps/scan.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o scan.o scan.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scan.Tpo .deps/scan.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT scatter.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/scatter.Tpo -c -o scatter.o scatter.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatter.Tpo .deps/scatter.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT scatterv.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/scatterv.Tpo -c -o scatterv.o scatterv.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/scatterv.Tpo .deps/scatterv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT seek_constants.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/seek_constants.Tpo -c -o seek_constants.o seek_constants.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/seek_constants.Tpo .deps/seek_constants.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT send.o -MD -MP -MF .deps/send.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o send.o send.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/send.Tpo .deps/send.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT sendrecv.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/sendrecv.Tpo -c -o sendrecv.o sendrecv.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/sendrecv.Tpo .deps/sendrecv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT sendrecv_rep.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/sendrecv_rep.Tpo -c -o sendrecv_rep.o sendrecv_rep.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/sendrecv_rep.Tpo .deps/sendrecv_rep.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT split.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/split.Tpo -c -o split.o split.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/split.Tpo .deps/split.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT ssend.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/ssend.Tpo -c -o ssend.o ssend.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/ssend.Tpo .deps/ssend.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT start.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/start.Tpo -c -o start.o start.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/start.Tpo .deps/start.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT startall.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/startall.Tpo -c -o startall.o startall.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/startall.Tpo .deps/startall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT status_test.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/status_test.Tpo -c -o status_test.o status_test.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/status_test.Tpo .deps/status_test.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT struct_gatherv.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/struct_gatherv.Tpo -c -o struct_gatherv.o struct_gatherv.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/struct_gatherv.Tpo .deps/struct_gatherv.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT test1.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test1.Tpo -c -o test1.o test1.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test1.Tpo .deps/test1.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT test3.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/test3.Tpo -c -o test3.o test3.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/test3.Tpo .deps/test3.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT testall.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/testall.Tpo -c -o testall.o testall.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/testall.Tpo .deps/testall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT testany.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/testany.Tpo -c -o testany.o testany.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/testany.Tpo .deps/testany.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT testsome.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/testsome.Tpo -c -o testsome.o testsome.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/testsome.Tpo .deps/testsome.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT topo.o -MD -MP -MF .deps/topo.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o topo.o topo.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/topo.Tpo .deps/topo.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT type.o -MD -MP -MF .deps/type.Tpo
</span><br>
<span class="quotelev1">&gt;    -c -o type.o type.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/type.Tpo .deps/type.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT typekeyval.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/typekeyval.Tpo -c -o typekeyval.o typekeyval.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/typekeyval.Tpo .deps/typekeyval.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT typemap.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/typemap.Tpo -c -o typemap.o typemap.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/typemap.Tpo .deps/typemap.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT waitall.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/waitall.Tpo -c -o waitall.o waitall.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitall.Tpo .deps/waitall.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT waitany.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/waitany.Tpo -c -o waitany.o waitany.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitany.Tpo .deps/waitany.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT waitsome.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/waitsome.Tpo -c -o waitsome.o waitsome.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/waitsome.Tpo .deps/waitsome.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT window.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/window.Tpo -c -o window.o window.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/window.Tpo .deps/window.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT wtime.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/wtime.Tpo -c -o wtime.o wtime.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/wtime.Tpo .deps/wtime.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++ -DHAVE_CONFIG_H -I.	   -g -MT winkeyval.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;    .deps/winkeyval.Tpo -c -o winkeyval.o winkeyval.cc
</span><br>
<span class="quotelev1">&gt; OUT:mv -f .deps/winkeyval.Tpo .deps/winkeyval.Po
</span><br>
<span class="quotelev1">&gt; OUT:mpic++  -g	 -o mpi2c++_test mpi2c++_test.o messages.o stack.o signal.o
</span><br>
<span class="quotelev1">&gt;    allgather.o allgatherv.o allreduce.o alltoall.o alltoallv.o attr.o
</span><br>
<span class="quotelev1">&gt;    badbuf.o bcast.o bcast_struct.o bottom.o bsend.o buffer.o cancel.o
</span><br>
<span class="quotelev1">&gt;    cartcomm.o chandles.o commdup.o commfree.o commgethandler.o commname.o
</span><br>
<span class="quotelev1">&gt;    compare.o constants.o dims.o dup_test.o errhandler.o finalized.o
</span><br>
<span class="quotelev1">&gt;    gather.o getcount.o getel.o graphcomm.o grequest.o group.o groupfree.o
</span><br>
<span class="quotelev1">&gt;    handleconversion.o info.o initialized1.o initialized2.o intercomm.o
</span><br>
<span class="quotelev1">&gt;    interf.o iprobe.o isend.o op_test.o pack_test.o pcontrol.o probe.o
</span><br>
<span class="quotelev1">&gt;    procname.o querythread.o rank_size.o reduce.o reduce_scatter.o
</span><br>
<span class="quotelev1">&gt;    request1.o rsend.o scan.o scatter.o scatterv.o seek_constants.o send.o
</span><br>
<span class="quotelev1">&gt;    sendrecv.o sendrecv_rep.o split.o ssend.o start.o startall.o
</span><br>
<span class="quotelev1">&gt;    status_test.o struct_gatherv.o test1.o test3.o testall.o testany.o
</span><br>
<span class="quotelev1">&gt;    testsome.o topo.o type.o typekeyval.o typemap.o waitall.o waitany.o
</span><br>
<span class="quotelev1">&gt;    waitsome.o window.o wtime.o winkeyval.o  
</span><br>
<span class="quotelev1">&gt; OUT:make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite/src'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite/src'
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite'
</span><br>
<span class="quotelev1">&gt;    make[1]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/tests/mpicxx/cxx-test-suite/test_bu
</span><br>
<span class="quotelev1">&gt;    ilt.ini
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-mpicxx-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-mpicxx-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: imb]
</span><br>
<span class="quotelev1">&gt; Evaluating: imb
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt;    Building for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8] / [imb]
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Shell
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; chdir tests/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; Making dir: imb (cwd: /tmp/ompi-core-testers/installs/dLS2/tests)
</span><br>
<span class="quotelev1">&gt; imb does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir imb/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/imb
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to /tmp/ompi-core-testers/installs/dLS2/tests/imb
</span><br>
<span class="quotelev1">&gt; Copying directory: /tmp/ompi-core-testers/sources/test_get__imb/IMB_2.3
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf IMB_2.3
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r /tmp/ompi-core-testers/sources/test_get__imb/IMB_2.3
</span><br>
<span class="quotelev1">&gt;    .
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; chdir IMB_2.3
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 100
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Shell::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: cd src
</span><br>
<span class="quotelev1">&gt;    make clean IMB-MPI1
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/duHd9tMJe5
</span><br>
<span class="quotelev1">&gt; OUT:/bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext
</span><br>
<span class="quotelev1">&gt;    exe_mpi1
</span><br>
<span class="quotelev1">&gt; OUT:touch exe_mpi1 *.c; rm -rf exe_io exe_ext
</span><br>
<span class="quotelev1">&gt; OUT:make MPI1 CPP=MPI1
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/imb/IMB_2.3/src'
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_declare.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_init.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_mem_manager.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_parse_name_mpi1.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_benchlist.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_strgs.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_err_handler.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_g_info.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_warm_up.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_output.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_pingpong.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_pingping.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_allreduce.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_reduce_scatter.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_reduce.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_exchange.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_bcast.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_barrier.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_allgather.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_allgatherv.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_alltoall.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_sendrecv.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_init_transfer.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_chk_diff.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc  -I.	-DMPI1 -O -c IMB_cpu_exploit.c
</span><br>
<span class="quotelev1">&gt; OUT:mpicc   -o IMB-MPI1 IMB.o IMB_declare.o  IMB_init.o IMB_mem_manager.o
</span><br>
<span class="quotelev1">&gt;    IMB_parse_name_mpi1.o  IMB_benchlist.o IMB_strgs.o IMB_err_handler.o
</span><br>
<span class="quotelev1">&gt;    IMB_g_info.o  IMB_warm_up.o IMB_output.o IMB_pingpong.o IMB_pingping.o
</span><br>
<span class="quotelev1">&gt;    IMB_allreduce.o IMB_reduce_scatter.o IMB_reduce.o IMB_exchange.o
</span><br>
<span class="quotelev1">&gt;    IMB_bcast.o IMB_barrier.o IMB_allgather.o IMB_allgatherv.o
</span><br>
<span class="quotelev1">&gt;    IMB_alltoall.o IMB_sendrecv.o IMB_init_transfer.o  IMB_chk_diff.o
</span><br>
<span class="quotelev1">&gt;    IMB_cpu_exploit.o   
</span><br>
<span class="quotelev1">&gt; OUT:make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;    `/tmp/ompi-core-testers/installs/dLS2/tests/imb/IMB_2.3/src'
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/tests/imb/IMB_2.3/test_built.ini
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-imb-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-imb-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: netpipe]
</span><br>
<span class="quotelev1">&gt; Evaluating: netpipe
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt; Evaluating: ompi-nightly-v1.1, ompi-nightly-trunk, ompi-nightly-v1.2
</span><br>
<span class="quotelev1">&gt;    Building for [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8] / [netpipe]
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; Evaluating: Shell
</span><br>
<span class="quotelev1">&gt; Making dir: tests (cwd: /tmp/ompi-core-testers/installs/dLS2)
</span><br>
<span class="quotelev1">&gt; chdir tests/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; Making dir: netpipe (cwd: /tmp/ompi-core-testers/installs/dLS2/tests)
</span><br>
<span class="quotelev1">&gt; netpipe does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir netpipe/
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/netpipe
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Common::Copytree
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Common::Copytree::PrepareForInstall(@args)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree copying to /tmp/ompi-core-testers/installs/dLS2/tests/netpipe
</span><br>
<span class="quotelev1">&gt; Copying directory:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/sources/test_get__netpipe/NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Running command: cp -r
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/sources/test_get__netpipe/NetPIPE_3.6.2 .
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; copytree finished copying
</span><br>
<span class="quotelev1">&gt; chdir NetPIPE_3.6.2
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Evaluating: 100
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Build::Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Build::Shell::Build(@args)
</span><br>
<span class="quotelev1">&gt; Building Shell
</span><br>
<span class="quotelev1">&gt; Evaluating: make mpi
</span><br>
<span class="quotelev1">&gt; Running command: /tmp/fcesGYV0ih
</span><br>
<span class="quotelev1">&gt; OUT:mpicc -O -DMPI ./src/netpipe.c ./src/mpi.c -o NPmpi -I./src
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Writing built file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/installs/dLS2/tests/netpipe/NetPIPE_3.6.2/test_bu
</span><br>
<span class="quotelev1">&gt;    ilt.ini
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Submit(@args)
</span><br>
<span class="quotelev1">&gt; File reporter
</span><br>
<span class="quotelev1">&gt; Writing to text file:
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-netpipe-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reported to text file
</span><br>
<span class="quotelev1">&gt;    /tmp/ompi-core-testers/Test_Build-netpipe-openmpi-1.2.8-1.2.8.txt
</span><br>
<span class="quotelev1">&gt;    Completed test build successfully
</span><br>
<span class="quotelev1">&gt; *** Test build phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: Test Build
</span><br>
<span class="quotelev1">&gt;    Started:       Wed Apr  8 12:46:31 2009
</span><br>
<span class="quotelev1">&gt;    Stopped:       Wed Apr  8 12:48:56 2009
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:02:25
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:02:59
</span><br>
<span class="quotelev1">&gt; *** Run test phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test run [trivial]
</span><br>
<span class="quotelev1">&gt; Evaluating: trivial
</span><br>
<span class="quotelev1">&gt; Found a match! trivial [trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: Simple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running with [openmpi-1.2.8] / [1.2.8] / [openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; Found MPI details: [mpi details: open mpi]
</span><br>
<span class="quotelev1">&gt; Using [mpi details: open mpi] with [MPI Install: openmpi-1.2.8]
</span><br>
<span class="quotelev1">&gt; Evaluating: # We can exit if the test passed or was skipped (i.e., there's
</span><br>
<span class="quotelev1">&gt;    no need
</span><br>
<span class="quotelev1">&gt;    # to cleanup).
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_RUN_RESULT&quot; = &quot;passed&quot; -o &quot;$MTT_TEST_RUN_RESULT&quot; =
</span><br>
<span class="quotelev1">&gt;    &quot;skipped&quot;; then
</span><br>
<span class="quotelev1">&gt;        exit 0
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;        args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev1">&gt;    elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev1">&gt;        args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev1">&gt;    mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev1">&gt; Got final exec: mpirun &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostfile()&quot;)&quot;,		&quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;,
</span><br>
<span class="quotelev1">&gt;    &quot;&amp;hostlist()&quot;)&quot;, &quot;&quot;)&quot;) -np &amp;test_np() --mca btl openib,self --debug
</span><br>
<span class="quotelev1">&gt;    --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; chdir /tmp/ompi-core-testers/installs/dLS2/tests/trivial/test_get__trivial
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Specify::Simple
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Specify::Simple::Specify(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; Got name: find_executables
</span><br>
<span class="quotelev1">&gt; Got args: &quot;.&quot;
</span><br>
<span class="quotelev1">&gt; _do: $ret = MTT::Values::Functions::find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev1">&gt; &amp;find_executables got .
</span><br>
<span class="quotelev1">&gt; &amp;find_exectuables returning: ./c_ring ./f77_ring ./f90_hello ./cxx_ring
</span><br>
<span class="quotelev1">&gt;    ./f77_hello ./cxx_hello ./f90_ring ./c_hello
</span><br>
<span class="quotelev1">&gt; *** ERROR: Module aborted: MTT::Test::Specify::Simple:Specify: Can't use
</span><br>
<span class="quotelev1">&gt;     string (&quot;8&quot;) as an ARRAY ref while &quot;strict refs&quot; in use at
</span><br>
<span class="quotelev1">&gt;     /tmp/ompi-core-testers/lib/MTT/Values.pm line 75.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0677.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>In reply to:</strong> <a href="0675.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0677.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
<li><strong>Reply:</strong> <a href="0677.php">Rafael Folco: "Re: [MTT users] MTT Error on SLES11"</a>
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
