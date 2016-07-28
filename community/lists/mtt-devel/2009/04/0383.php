<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:27:20 2009" -->
<!-- isoreceived="20090414182720" -->
<!-- sent="Tue, 14 Apr 2009 21:27:14 +0300" -->
<!-- isosent="20090414182714" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="b20b52800904141127rffb0addid098c43730567796_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E79F65FC-69E0-4786-B19B-C64529074D32_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 14:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 14, 2009 at 5:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 13, 2009, at 2:08 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello Ethan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for joining the discussion late... I was on travel last week and that
</span><br>
<span class="quotelev1">&gt; always makes me waaay behind on my INBOX.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mon, Apr 13, 2009 at 5:44 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will this translate to something like
</span><br>
<span class="quotelev2">&gt;&gt; lib/MTT/Reporter/GoogleDatabase.pm?  If we are to move away from the
</span><br>
<span class="quotelev2">&gt;&gt; current MTT Postgres database, we want to be able to submit results to
</span><br>
<span class="quotelev2">&gt;&gt; both the current MTT database and the new Google database during the
</span><br>
<span class="quotelev2">&gt;&gt; transition period. Having a GoogleDatabase.pm would make this easier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we should keep both storage options: current postgress and
</span><br>
<span class="quotelev2">&gt;&gt; datastore. The mtt changes will be minor to support datastore.
</span><br>
<span class="quotelev2">&gt;&gt; Due that fact that google appengine API (as well as datastore API) can be
</span><br>
<span class="quotelev2">&gt;&gt; python or java only, we will create external scripts to manipulate datastore
</span><br>
<span class="quotelev2">&gt;&gt; objects:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, good point (python/java not perl).  But I think that
</span><br>
<span class="quotelev1">&gt; lib/MTT/Reporter/GoogleDataStore.pm could still be a good thing -- we have
</span><br>
<span class="quotelev1">&gt; invested a lot of time/effort into getting our particular mtt clients setup
</span><br>
<span class="quotelev1">&gt; just the way we want them, setting up INI files, submitting to batch
</span><br>
<span class="quotelev1">&gt; schedulers, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A GoogleDataStore.pm reporter could well fork/exec a python/java executable
</span><br>
<span class="quotelev1">&gt; to do the actual communication/storing of the data, right...?  More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>completely agree, once we have external python/java/cobol scripts to
<br>
manipulate GDS objects, we should wrap it by perl and call from MTT in same
<br>
way like it works today for submitting to the postgress.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The mtt will dump test results in xml format. Then, we provide two python
</span><br>
<span class="quotelev2">&gt;&gt; (or java?) scripts:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mtt-results-submit-to-datastore.py - script will be called at the end of
</span><br>
<span class="quotelev2">&gt;&gt; mtt run and will read xml files, create objects and save to datastore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could be pretty easy to have a Reporter/GDS.pm (I keep making that filename
</span><br>
<span class="quotelev1">&gt; shorter, don't I? :-) ) that simply invokes the mtt-result-
</span><br>
<span class="quotelev1">&gt; submit-to-datastore.pt script on the xml that it dumped for that
</span><br>
<span class="quotelev1">&gt; particular test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: I do like having partial results submitted while my MTT tests
</span><br>
<span class="quotelev1">&gt; are running.  Cisco's testing cycle is about 24 hours, but groups of tests
</span><br>
<span class="quotelev1">&gt; are finishing all the time, so it's good to see those results without having
</span><br>
<span class="quotelev1">&gt; to wait the full 24 hours before anything shows up.  I guess that's my only
</span><br>
<span class="quotelev1">&gt; comment on the idea of having a script that traverses the MTT scratch to
</span><br>
<span class="quotelev1">&gt; find / submit everything -- I'd prefer if we kept the same Reporter idea and
</span><br>
<span class="quotelev1">&gt; used an underlying .py script to submit results as they become ready.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this do-able?
</span><br>
<p><p>sounds good, we should introduce some guid (like pid) for mtt session, where
<br>
all mtt results generated by this session will be referring to this guid.
<br>
Later we use this guid to submit partial results as they become ready and
<br>
connect it to the appropriate mtt session object (see models.py)
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mtt-results-query.py - sample script to query datastore and generate some
</span><br>
<span class="quotelev2">&gt;&gt; simple visual/tabular reports. It will serve as tutorial for howto access
</span><br>
<span class="quotelev2">&gt;&gt; mtt data from scripts for reporting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Later, we add another script to replace php web frontend. It will be
</span><br>
<span class="quotelev2">&gt;&gt; hosted on google appengine machines and will provide web viewer for mtt
</span><br>
<span class="quotelev2">&gt;&gt; results. (same way like index.php does today)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;      b. mtt_save_to_db.py - script which will go over mtt scratch dir,
</span><br>
<span class="quotelev2">&gt;&gt; find
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      all xml files generated for every mtt phase, parse it and save to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      datastore, preserving test results relations,i.e. all test results
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      be grouped by mtt general info: mpi version, name, date, ....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      c. same script can scan, parse and save from xml files generated by
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      wrapper scripts for non mtt based executions (fluent, ..)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm confused here.  Can't MTT be outfitted to report results of a
</span><br>
<span class="quotelev2">&gt;&gt; Fluent run?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we can enhance mtt to be not only mpi testing platform, but also
</span><br>
<span class="quotelev2">&gt;&gt; to serve as mpi benchmarking platform. We can use datastore to keep
</span><br>
<span class="quotelev2">&gt;&gt; mpi-based benchmarking results in the same manner like mtt does for testing
</span><br>
<span class="quotelev2">&gt;&gt; results. (no changes to mtt required for that, it is just a side effect of
</span><br>
<span class="quotelev2">&gt;&gt; using datastore to keep data of any type)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that Ethan was asking was: can't MTT run Fluent and then use the
</span><br>
<span class="quotelev1">&gt; normal Reporter mechanism to report the results into whatever back-end data
</span><br>
<span class="quotelev1">&gt; store we have?  (postgres or GDS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>ahhh, okie, i see.
<br>
<p>Correct me if Im wrong, the current mtt implementation allows following way
<br>
of executing mpi test:
<br>
/path/to/mpirun &lt;mpirun options&gt; &lt;test&gt;
<br>
<p>Many mpi based applications have embedded MPI libraries and non-standard way
<br>
to start it, one should set env variable to point to desired mpi
<br>
installation or pass it as cmd line argument, for example:
<br>
<p>for fluent:
<br>
<p>export OPENMPI_ROOT=/path/to/openmpi
<br>
fluent &lt;cmd line args&gt;
<br>
<p><p>for pamcrash:
<br>
pamworld -np 2 -mpidir=/path/to/openmpi/dir ....
<br>
<p>Im not sure if it is possible to express that execution semantic in mtt ini
<br>
file. Please suggest.
<br>
So far, it seems that such executions can be handled externally from mtt but
<br>
using same object model.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see the value of both sides -- a) using the MTT client as the gateway
</span><br>
<span class="quotelev1">&gt; to *all* data storage, or b) making MTT but one (possibly of many) tools
</span><br>
<span class="quotelev1">&gt; that can write into the GDS.  a) certainly is more attractive towards having
</span><br>
<span class="quotelev1">&gt; a common data format back in GDS such that a single web tool is capable of
</span><br>
<span class="quotelev1">&gt; reporting from the data and being able to make conherent sense out of the
</span><br>
<span class="quotelev1">&gt; data (vs. 3rd party tools that put data back in GDS that may not be in
</span><br>
<span class="quotelev1">&gt; exactly the same format / layout and therefore our web reporter may not be
</span><br>
<span class="quotelev1">&gt; able to make sense out of the data and report on it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that having a Reporter/GDS.pm that system()'s the back-end python
</span><br>
<span class="quotelev1">&gt; script gives the best of both worlds -- the MTT client can [continue to]
</span><br>
<span class="quotelev1">&gt; submit results in the normal way, but there's also a standalone script that
</span><br>
<span class="quotelev1">&gt; can submit results from external tool runs (e.g., manually running Fluent,
</span><br>
<span class="quotelev1">&gt; parsing the results, and submitting to our GDS).  And hopefully the back-end
</span><br>
<span class="quotelev1">&gt; python script will enforce a specific structure to the data that is
</span><br>
<span class="quotelev1">&gt; submitted so that all tools -- MTT and any 3rd party tools -- adhere to the
</span><br>
<span class="quotelev1">&gt; same format and the reporter can therefore report on it coherently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>agree. (a) is a preferred form. (b) can be used for tools that cannot be
<br>
called from mtt.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the attachment...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can &quot;sorta read&quot; python, but I'm not familiar with its intricacies and
</span><br>
<span class="quotelev1">&gt; its internal APIs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - models.py: looks good.  I don't know if *all* the fields we have are
</span><br>
<span class="quotelev1">&gt; listed here; it looks fairly short to me.  Did you attempt to include all of
</span><br>
<span class="quotelev1">&gt; the fields we submit through the various phases in Reporter are there, or
</span><br>
<span class="quotelev1">&gt; did you intentionally leave some out?  (I honestly haven't checked; it just
</span><br>
<span class="quotelev1">&gt; &quot;feels short&quot; to me compared to our SQL schema).
</span><br>
<p><p>I listed only some of the fields in every object representing specific test
<br>
result source (called phase in mtt language). This is because every test
<br>
result source object is derived from python provided db.Expando class. This
<br>
gives us great flexibility, like adding dynamic attributes for every
<br>
objects, for example:
<br>
<p>obj = new MttBuildPhaseResult()
<br>
obj.my_favorite_dynamic_key = &quot;hello&quot;
<br>
obj.my_another_dynamic_key = 7
<br>
<p>So, we can have all phase attributes in the phase object without defining it
<br>
in the *sql schema way*. Also we can query object model by these dynamic
<br>
keys.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --&gt; meta question: is it in the zen of GDS to not have too many index
</span><br>
<span class="quotelev1">&gt; fields like you would in SQL?  I.e., if you want to do an operation on GDS
</span><br>
<span class="quotelev1">&gt; that you
</span><br>
<p><p>as far as it seems now, gds creates indexes automatically and also provides
<br>
API to define indexes manually.
<br>
<p><span class="quotelev1">&gt; would typically use an SQL index field for, is the idea that you would do a
</span><br>
<span class="quotelev1">&gt; map/reduce to select the data instead of an index field?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>yep. seems correct.
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - start_datastore.sh: hmm.  This script seems to imply that the datastore
</span><br>
<span class="quotelev1">&gt; is *local*!  Don't we have to HTTP submit the results to Google?  More
</span><br>
<span class="quotelev1">&gt; specifically: what is dev_appserver.py?  Is that, perchance, just a local
</span><br>
<span class="quotelev1">&gt; proxy agent that will end up submitting our data to $datastore_path, which
</span><br>
<span class="quotelev1">&gt; actually resides at Google?  Do we have to use a specific google
</span><br>
<span class="quotelev1">&gt; username/URL to submit (and query) results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>You need to download google`s sdk (dev_appserver.py is a part of it). In
<br>
order to develop for gds you  run your code inside sdk locally, and when
<br>
feel comfortable with it - you upload it to the google cluster. In order to
<br>
run attached example, you need to download sdk, put it in the following dir
<br>
hierarchy:
<br>
<p>somedir/sdk
<br>
somedir/vbench-dev
<br>
<p>and run start_datastore.sh, which will run local instance of GDS on your
<br>
machine.Then in another shell you need to run vbech-dev.py, which simulates
<br>
mtt client accessing GDS, storing some objects in according to proposed
<br>
models and then running some sql-like quires to fetch and manipulate
<br>
results.
<br>
<p>see
<br>
<a href="http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html">http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html</a>
<br>
<p><p><span class="quotelev1">&gt; - there's no comments in vbench-dev.py -- can you explain what's going on
</span><br>
<span class="quotelev1">&gt; in there?  Can you explain how we would use these scripts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is a mtt simulator, it implements google appengine API to receive HTTP
<br>
requests and call appropriate callbacks. (there is a map of specific urls to
<br>
callbacks).
<br>
<p>The main callback (which intercepts http GET requests to specific URL) runs
<br>
the test code which creates objects defined in models.py, groups many test
<br>
results into MTTSession and they run some queries to access previously
<br>
created objects.
<br>
<p>The real mtt client will use URL pointing to MTT python code running at
<br>
google`s cluster, and use near same code to create/query/manipulate objects
<br>
defined in models.py.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - it *looks* like these scripts are for storing data out in the GDS.  Have
</span><br>
<span class="quotelev1">&gt; you looked at the querying side?  Do we know that storing data in the form
</span><br>
<span class="quotelev1">&gt; you listed in models.py are easily retrievable in the ways that we want?
</span><br>
<span class="quotelev1">&gt;  E.g., can you mock up queries that resemble the queries we currently have
</span><br>
<span class="quotelev1">&gt; in our web-based query system today, just to show that storing the data in
</span><br>
<span class="quotelev1">&gt; this way will actually allow us to do the kinds of queries that we want to
</span><br>
<span class="quotelev1">&gt; do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think vbench-dev.py shows some querying capabilities for stored objects,
<br>
there are many ways to query objects by object CLASS and Attributes.
<br>
see many examples here:
<br>
<p>see
<br>
<a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.htmlfor">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.htmlfor</a>
<br>
more querying examples we can use.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: I think I'm missing much of the back-story / rationale of how the
</span><br>
<span class="quotelev1">&gt; scripts in your tarball work / are to be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW -- if it's useful to have a teleconference about this kind of stuff, I
</span><br>
<span class="quotelev1">&gt; can host a WebEx meeting.  WebEx has local dialins around the world,
</span><br>
<span class="quotelev1">&gt; including Israel...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>sure, what about next week?
<br>
<p><p>regards
<br>
<p>Mike
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0382.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
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
