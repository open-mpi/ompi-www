<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 21:02:19 2006" -->
<!-- isoreceived="20060630010219" -->
<!-- sent="Thu, 29 Jun 2006 21:02:18 -0400" -->
<!-- isosent="20060630010218" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test output to perfbase" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9E47_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] Test output to perfbase" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 21:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] mtt-users mail archive"</a>
<li><strong>Maybe in reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Reply:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Andrew Friedley
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 29, 2006 1:06 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] Test output to perfbase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Which efficiency?  Uploads?  Database storage?  Querying?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Primarily database - each run is stored in postgres as a table in a 
</span><br>
<span class="quotelev1">&gt; database.  Fields that vary are stored as rows in the 
</span><br>
<span class="quotelev1">&gt; database - one row 
</span><br>
<span class="quotelev1">&gt; has all the varying fields i.e. each field is a column.  I think 
</span><br>
<span class="quotelev1">&gt; non-varying fields are stored once as a row in a special, 
</span><br>
<span class="quotelev1">&gt; separate table.
</span><br>
<p>Ok, let's take a concrete example (and our first target): the intel test
<br>
suite.  There's hundreds of tests that each return &quot;pass&quot; or &quot;fail&quot;.
<br>
Specifically: these are correctness tests (MPICH and IBM tests fall into
<br>
this category as well).
<br>
<p>If we lump all the intel tests all into a single &quot;run&quot;, don't we have to
<br>
have a column for each intel test, and therefore have a specific input
<br>
.xml for the intel tests?  If so, then I agree that a single run should
<br>
be all the intel tests, because we'd want to have a value for every
<br>
column.
<br>
<p>But I thought that the plan for correctness tests was to have *one* XML
<br>
that would work for any correctness test (intel, IBM, MPICH, ...).  This
<br>
XML would have a bunch of identifier fields (some fixed for the test
<br>
suite, like the architecture, OS, etc., and others that are varying,
<br>
such as the individual test name, etc.) and then a &quot;pass/fail&quot; field.
<br>
Hence, a single &quot;run&quot; would be a single test and its main output data is
<br>
&quot;pass/fail&quot; (and probably stdout/stderr).  This is certainly the way
<br>
that inp_test_run.xml is written right now (and this is why I'm confused
<br>
that you're saying something different).
<br>
<p>Specifically -- if a &quot;run&quot; is a single row, the way that
<br>
inp_test_run.xml is currently structured, I don't see any difference in
<br>
whether we submit 1 or multiple results at the same time -- they're
<br>
still going to be multiple rows in the database.
<br>
<p><span class="quotelev2">&gt; &gt; In a conversation with Sun, it turns out that we both want 
</span><br>
<span class="quotelev1">&gt; to have the
</span><br>
<span class="quotelev2">&gt; &gt; ability to see partial results (e.g., running the entire 
</span><br>
<span class="quotelev1">&gt; Intel suite may
</span><br>
<span class="quotelev2">&gt; &gt; take many hours -- it would be good to be able to see results
</span><br>
<span class="quotelev2">&gt; &gt; more-or-less as they occur).  Is there a technical issue that would
</span><br>
<span class="quotelev2">&gt; &gt; prevent submitting 1 (or small batches of) result(s) at a time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we're getting into the realm of 'too much' here.  Both the 
</span><br>
<p>Why?  There is certainly [a lot of] value in being able to check on the
<br>
intermediate status of a test suite if the entire test suite takes many
<br>
hours to run.  Keep in mind that we're only using this for nightly runs
<br>
in the beginning -- it's likely that MTT is going to run *more* than
<br>
nightly at times (e.g., during release cycles).  Starting a run at 8am
<br>
and then checking on it at 10am can certainly be useful (even if it's
<br>
got 6 more hours to run).
<br>
<p><span class="quotelev1">&gt; current design and especially your new proposed design are batch 
</span><br>
<span class="quotelev1">&gt; oriented, not stream oriented.  Heck, MTT in general.
</span><br>
<p>MTT does large groups of tasks at a given time, but it can report at any
<br>
time (as it does now).
<br>
<p><span class="quotelev1">&gt; This is doable, but when we start hammering/scaling this 
</span><br>
<span class="quotelev1">&gt; system, getting 
</span><br>
<span class="quotelev1">&gt; as much information as possible in a perfbase run is going to be very 
</span><br>
<span class="quotelev1">&gt; important.  I remember Brian agreeing with me, tens/hundreds of 
</span><br>
<span class="quotelev1">&gt; thousands of tables in postgres is a bad idea.
</span><br>
<p>Based on inp_test_run.xml, I don't see how this implies any more tables.
<br>
&nbsp;
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;1. send all results from the above intel run in a single 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;submit (i.e.,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;all tcp and all openib results).  Since we submit the MCA 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;params as part
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;of the data, our queries later can distinguish tcp vs. openib data.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;This is what I want.  We can easily construct queries to only
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So I guess I'm still not clear on *why* you want this.  :-)  Can you
</span><br>
<span class="quotelev2">&gt; &gt; specify the reasons?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I think having a test suite run with all its variations 
</span><br>
<span class="quotelev1">&gt; interpreted as a single perfbase run makes sense.  We could certainly 
</span><br>
<span class="quotelev1">&gt; draw the line elsewhere, but I think its appropriate that a 
</span><br>
<span class="quotelev1">&gt; test suite 
</span><br>
<span class="quotelev1">&gt; run with a particular mpi install on a particular system makes a 
</span><br>
<span class="quotelev1">&gt; suitable base unit.  It matches both the MTT and perfbase 
</span><br>
<span class="quotelev1">&gt; architectures 
</span><br>
<span class="quotelev1">&gt; well - we can support this easily in MTT, it scales well in perfbase, 
</span><br>
<span class="quotelev1">&gt; doesn't compromise our query ability, and just plain gets the 
</span><br>
<span class="quotelev1">&gt; job done.
</span><br>
<p>I think we can make MTT do whatever we want it to do (indeed, right now,
<br>
it reports each individual test, so the argument of &quot;get the job done&quot;
<br>
could work more in my favor than yours ;-) ).  And I think perfbase will
<br>
do whatever we define it to do as well -- indeed, the way that
<br>
int_mpi_test.xml is, I think we have defined it to take individual
<br>
correctness tests.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; Yes, that information (tcp vs. openib) is in one of the 
</span><br>
<span class="quotelev1">&gt; fields that we
</span><br>
<span class="quotelev2">&gt; &gt; send back (it has to be, otherwise the results are somewhat
</span><br>
<span class="quotelev2">&gt; &gt; meaningless).  It's not a standalone &quot;btl&quot; field, though -- 
</span><br>
<span class="quotelev1">&gt; it's more of
</span><br>
<span class="quotelev2">&gt; &gt; a &quot;here's the MCA parameters that were specified&quot; field.  
</span><br>
<span class="quotelev1">&gt; So queries for
</span><br>
<span class="quotelev2">&gt; &gt; tcp results will probably need to search for &quot;tcp&quot; in the 
</span><br>
<span class="quotelev1">&gt; MCA parameters
</span><br>
<span class="quotelev2">&gt; &gt; field.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But this is the same issue regardless of whether we submit 
</span><br>
<span class="quotelev1">&gt; 1 result at a
</span><br>
<span class="quotelev2">&gt; &gt; time or all at once, right?  I guess I don't see the difference for
</span><br>
<span class="quotelev2">&gt; &gt; selecting &quot;tcp&quot; vs. &quot;openib&quot; results based on whether we 
</span><br>
<span class="quotelev1">&gt; submit 1 result
</span><br>
<span class="quotelev2">&gt; &gt; at a time or all at once -- can you clarify?  I think I 
</span><br>
<span class="quotelev1">&gt; must be missing
</span><br>
<span class="quotelev2">&gt; &gt; something...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you missed what I was saying - picking which BTL was used for 
</span><br>
<span class="quotelev1">&gt; any kind of storage differentiation just seems completely 
</span><br>
<span class="quotelev1">&gt; arbitrary to 
</span><br>
<span class="quotelev1">&gt; me.  Not only that, its open mpi specific, or do we not care 
</span><br>
<span class="quotelev1">&gt; about being 
</span><br>
<span class="quotelev1">&gt; MPI agnostic any more?
</span><br>
<p>The &quot;here's the MCA parameters that were specified&quot; field is the mpirun
<br>
command line.  So this is MPI agnostic.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; You're right in that it doesn't have much/anything to do with 
</span><br>
<span class="quotelev1">&gt; the split 
</span><br>
<span class="quotelev1">&gt; submission issue.
</span><br>
<p>Ok.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; If this is all possible, then -- at least in my mind -- I 
</span><br>
<span class="quotelev1">&gt; don't see a
</span><br>
<span class="quotelev2">&gt; &gt; reason why multiple submits vs. a single submit is *required*.
</span><br>
<span class="quotelev2">&gt; &gt; Obviously, multiple submits will take more bandwidth than a single
</span><br>
<span class="quotelev2">&gt; &gt; submit -- but I see that as an optimization that we can [and should]
</span><br>
<span class="quotelev2">&gt; &gt; work out later.  Specifically: reducing the bandwidth of 
</span><br>
<span class="quotelev1">&gt; submits doesn't
</span><br>
<span class="quotelev2">&gt; &gt; need to be in the initial version since our primary, 
</span><br>
<span class="quotelev1">&gt; immediate goal is
</span><br>
<span class="quotelev2">&gt; &gt; to get this functional, running nightly tests, and sending out test
</span><br>
<span class="quotelev2">&gt; &gt; results in the morning as long as the current, unoptimized bandwidth
</span><br>
<span class="quotelev2">&gt; &gt; requirements are not too onerous on milliways.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, the direction I was going with the server side was that a test 
</span><br>
<span class="quotelev1">&gt; suite run would be in one HTTP POST.  As far as I'm concerned its a 
</span><br>
<span class="quotelev1">&gt; matter of writing code to do it differently, and how soon you 
</span><br>
<span class="quotelev1">&gt; want this 
</span><br>
<span class="quotelev1">&gt; to work.
</span><br>
<p>Ah -- you weren't clued in on what happened in MA last week.  :-)
<br>
<p>Because MTT has been identified as a critical deficiency to the project,
<br>
Sun is volunteering 2 engineers to work on MTT starting in the immediate
<br>
future and get it finished and working for the whole group.  Hence, MTT
<br>
is finally no longer a &quot;spare time&quot; project.
<br>
<p>I'm doing some final cleanup of some things that I was aware of and
<br>
ramping them up in the code base so that they can take over and take MTT
<br>
to completion and we can all start using it.  We got SSH accounts for
<br>
Ethan and Anya on milliways today so that they can access perfbase,
<br>
write web pages, etc.
<br>
<p>I was given 2 weeks by my management (this week and next week) for this
<br>
task, which is why you've seen commits from me and why I've been asking
<br>
questions about the server side of MTT.  :-)
<br>
<p>Specifically, I have finished most of the client-side work that I wanted
<br>
to get done.  The next critical tasks that need to get done are (in
<br>
order):
<br>
<p>- audit the fields being sent between the client and the server for all
<br>
the relevant phases and ensure they match (Brian found some problems in
<br>
this area)
<br>
- implement whatever client-side/server-side is necessary/missing (e.g.,
<br>
compression, fragmenting/reassembly, etc.) to deal with max apache
<br>
upload size issues
<br>
- ensure that all submissions are getting all the way from running in
<br>
the MTT client to being stored in perfbase
<br>
- write a simple query to show failures from the last 24 hours and send
<br>
an e-mail with the results
<br>
- complete the &quot;trim&quot; phase code
<br>
<p>Sun is on a company-wide annual shutdown all of next week, which works
<br>
perfectly with my timescale.  When they return, Ethan and Anya will pick
<br>
up where I left off.  Once the above list is complete, they'll continue
<br>
on and do all the other stuff in MTT (e.g., writing query web pages for
<br>
more interesting reports than just showing the failures from the last 24
<br>
hours, adding more test suite modules, adding more client features,
<br>
etc.).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] mtt-users mail archive"</a>
<li><strong>Maybe in reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
<li><strong>Reply:</strong> <a href="0029.php">Ethan Mallove: "[MTT users] escaping quotes issue in DoCommand.pm"</a>
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
