<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 16:50:13 2009" -->
<!-- isoreceived="20090414205013" -->
<!-- sent="Tue, 14 Apr 2009 16:50:07 -0400" -->
<!-- isosent="20090414205007" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="20090414205007.GR26923_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52800904141127rffb0addid098c43730567796_at_mail.gmail.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 16:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0386.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0386.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr/14/2009 09:27:14PM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    On Tue, Apr 14, 2009 at 5:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Apr 13, 2009, at 2:08 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hello Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Sorry for joining the discussion late... I was on travel last week and
</span><br>
<span class="quotelev1">&gt;      that always makes me waaay behind on my INBOX. *:-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        On Mon, Apr 13, 2009 at 5:44 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;        wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Will this translate to something like
</span><br>
<span class="quotelev1">&gt;        lib/MTT/Reporter/GoogleDatabase.pm? *If we are to move away from the
</span><br>
<span class="quotelev1">&gt;        current MTT Postgres database, we want to be able to submit results to
</span><br>
<span class="quotelev1">&gt;        both the current MTT database and the new Google database during the
</span><br>
<span class="quotelev1">&gt;        transition period. Having a GoogleDatabase.pm would make this easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        I think we should keep both storage options: current postgress and
</span><br>
<span class="quotelev1">&gt;        datastore. The mtt changes will be minor to support datastore.
</span><br>
<span class="quotelev1">&gt;        Due that fact that google appengine API (as well as datastore API) can
</span><br>
<span class="quotelev1">&gt;        be python or java only, we will create external scripts to manipulate
</span><br>
<span class="quotelev1">&gt;        datastore objects:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Ah, good point (python/java not perl). *But I think that
</span><br>
<span class="quotelev1">&gt;      lib/MTT/Reporter/GoogleDataStore.pm could still be a good thing -- we
</span><br>
<span class="quotelev1">&gt;      have invested a lot of time/effort into getting our particular mtt
</span><br>
<span class="quotelev1">&gt;      clients setup just the way we want them, setting up INI files,
</span><br>
<span class="quotelev1">&gt;      submitting to batch schedulers, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      A GoogleDataStore.pm reporter could well fork/exec a python/java
</span><br>
<span class="quotelev1">&gt;      executable to do the actual communication/storing of the data, right...?
</span><br>
<span class="quotelev1">&gt;      *More below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    completely agree, once we have external python/java/cobol scripts to
</span><br>
<span class="quotelev1">&gt;    manipulate GDS objects, we should wrap it by perl and call from MTT in
</span><br>
<span class="quotelev1">&gt;    same way like it works today for submitting to the postgress.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        The mtt will dump test results in xml format. Then, we provide two
</span><br>
<span class="quotelev1">&gt;        python (or java?) scripts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mtt-results-submit-to-datastore.py - script will be called at the end
</span><br>
<span class="quotelev1">&gt;        of mtt run and will read xml files, create objects and save to
</span><br>
<span class="quotelev1">&gt;        datastore
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Could be pretty easy to have a Reporter/GDS.pm (I keep making that
</span><br>
<span class="quotelev1">&gt;      filename shorter, don't I? :-) ) that simply invokes the
</span><br>
<span class="quotelev1">&gt;      mtt-result-submit-to-datastore.pt script on the xml that it dumped for
</span><br>
<span class="quotelev1">&gt;      that particular test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Specifically: I do like having partial results submitted while my MTT
</span><br>
<span class="quotelev1">&gt;      tests are running. *Cisco's testing cycle is about 24 hours, but groups
</span><br>
<span class="quotelev1">&gt;      of tests are finishing all the time, so it's good to see those results
</span><br>
<span class="quotelev1">&gt;      without having to wait the full 24 hours before anything shows up. *I
</span><br>
<span class="quotelev1">&gt;      guess that's my only comment on the idea of having a script that
</span><br>
<span class="quotelev1">&gt;      traverses the MTT scratch to find / submit everything -- I'd prefer if
</span><br>
<span class="quotelev1">&gt;      we kept the same Reporter idea and used an underlying .py script to
</span><br>
<span class="quotelev1">&gt;      submit results as they become ready.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Is this do-able?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    sounds good, we should introduce some guid (like pid) for mtt session,
</span><br>
<span class="quotelev1">&gt;    where all mtt results generated by this session will be referring to this
</span><br>
<span class="quotelev1">&gt;    guid.* Later we use this guid to submit partial results as they become
</span><br>
<span class="quotelev1">&gt;    ready and connect it to the appropriate mtt session object (see models.py)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mtt-results-query.py - sample script to query datastore and generate
</span><br>
<span class="quotelev1">&gt;        some simple visual/tabular reports. It will serve as tutorial for
</span><br>
<span class="quotelev1">&gt;        howto access mtt data from scripts for reporting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Later, we add another script to replace php web frontend. It will be
</span><br>
<span class="quotelev1">&gt;        hosted on google appengine machines and will provide web viewer for
</span><br>
<span class="quotelev1">&gt;        mtt results. (same way like index.php does today)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Sounds good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;        &gt; * * *b. mtt_save_to_db.py - script which will go over mtt scratch
</span><br>
<span class="quotelev1">&gt;        dir, find
</span><br>
<span class="quotelev2">&gt;        &gt; * * *all xml files generated for every mtt phase, parse it and save
</span><br>
<span class="quotelev1">&gt;        to
</span><br>
<span class="quotelev2">&gt;        &gt; * * *datastore, preserving test results relations,i.e. all test
</span><br>
<span class="quotelev1">&gt;        results will
</span><br>
<span class="quotelev2">&gt;        &gt; * * *be grouped by mtt general info: mpi version, name, date, ....
</span><br>
<span class="quotelev2">&gt;        &gt;
</span><br>
<span class="quotelev2">&gt;        &gt; * * *c. same script can scan, parse and save from xml files
</span><br>
<span class="quotelev1">&gt;        generated by
</span><br>
<span class="quotelev2">&gt;        &gt; * * *wrapper scripts for non mtt based executions (fluent, ..)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        I'm confused here. *Can't MTT be outfitted to report results of a
</span><br>
<span class="quotelev1">&gt;        Fluent run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        I think we can enhance mtt to be not only mpi testing platform, but
</span><br>
<span class="quotelev1">&gt;        also to serve as mpi benchmarking platform. We can use datastore to
</span><br>
<span class="quotelev1">&gt;        keep mpi-based benchmarking results in the same manner like mtt does
</span><br>
<span class="quotelev1">&gt;        for testing results. (no changes to mtt required for that, it is just
</span><br>
<span class="quotelev1">&gt;        a side effect of using datastore to keep data of any type)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I think that Ethan was asking was: can't MTT run Fluent and then use the
</span><br>
<span class="quotelev1">&gt;      normal Reporter mechanism to report the results into whatever back-end
</span><br>
<span class="quotelev1">&gt;      data store we have? *(postgres or GDS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ahhh, okie, i see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Correct me if Im wrong, the current mtt implementation allows following
</span><br>
<span class="quotelev1">&gt;    way of executing mpi test:
</span><br>
<span class="quotelev1">&gt;    /path/to/mpirun &lt;mpirun options&gt; &lt;test&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Many mpi based applications have embedded MPI libraries and non-standard
</span><br>
<span class="quotelev1">&gt;    way to start it, one should set env variable to point to desired mpi
</span><br>
<span class="quotelev1">&gt;    installation or pass it as cmd line argument, for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for fluent:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    export OPENMPI_ROOT=/path/to/openmpi
</span><br>
<span class="quotelev1">&gt;    fluent &lt;cmd line args&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We'd probably want a special &quot;MPI details&quot; INI section to run Fluent,
<br>
e.g.,
<br>
<p>&nbsp;&nbsp;[MPI Details: Fluent]
<br>
&nbsp;&nbsp;exec = fluent @fluent_args@
<br>
&nbsp;&nbsp;...
<br>
<p><span class="quotelev1">&gt;    for pamcrash:
</span><br>
<span class="quotelev1">&gt;    pamworld -np 2 -mpidir=/path/to/openmpi/dir ....
</span><br>
<p>Ditto for pamcrash.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Im not sure if it is possible to express that execution semantic in mtt
</span><br>
<span class="quotelev1">&gt;    ini file. Please suggest.
</span><br>
<span class="quotelev1">&gt;    So far, it seems that such executions can be handled externally from mtt
</span><br>
<span class="quotelev1">&gt;    but using same object model.
</span><br>
<p>MTT supports the following INI parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;* setenv
<br>
&nbsp;&nbsp;&nbsp;* prepend_path
<br>
&nbsp;&nbsp;&nbsp;* env_module
<br>
&nbsp;&nbsp;&nbsp;* env_importer
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I can see the value of both sides -- a) using the MTT client as the
</span><br>
<span class="quotelev1">&gt;      gateway to *all* data storage, or b) making MTT but one (possibly of
</span><br>
<span class="quotelev1">&gt;      many) tools that can write into the GDS. *a) certainly is more
</span><br>
<span class="quotelev1">&gt;      attractive towards having a common data format back in GDS such that a
</span><br>
<span class="quotelev1">&gt;      single web tool is capable of reporting from the data and being able to
</span><br>
<span class="quotelev1">&gt;      make conherent sense out of the data (vs. 3rd party tools that put data
</span><br>
<span class="quotelev1">&gt;      back in GDS that may not be in exactly the same format / layout and
</span><br>
<span class="quotelev1">&gt;      therefore our web reporter may not be able to make sense out of the data
</span><br>
<span class="quotelev1">&gt;      and report on it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I think that having a Reporter/GDS.pm that system()'s the back-end
</span><br>
<span class="quotelev1">&gt;      python script gives the best of both worlds -- the MTT client can
</span><br>
<span class="quotelev1">&gt;      [continue to] submit results in the normal way, but there's also a
</span><br>
<span class="quotelev1">&gt;      standalone script that can submit results from external tool runs (e.g.,
</span><br>
<span class="quotelev1">&gt;      manually running Fluent, parsing the results, and submitting to our
</span><br>
<span class="quotelev1">&gt;      GDS). *And hopefully the back-end python script will enforce a specific
</span><br>
<span class="quotelev1">&gt;      structure to the data that is submitted so that all tools -- MTT and any
</span><br>
<span class="quotelev1">&gt;      3rd party tools -- adhere to the same format and the reporter can
</span><br>
<span class="quotelev1">&gt;      therefore report on it coherently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    agree. (a) is a preferred form. (b) can be used for tools that cannot be
</span><br>
<span class="quotelev1">&gt;    called from mtt.
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      For the attachment...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I can &quot;sorta read&quot; python, but I'm not familiar with its intricacies and
</span><br>
<span class="quotelev1">&gt;      its internal APIs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      - models.py: looks good. *I don't know if *all* the fields we have are
</span><br>
<span class="quotelev1">&gt;      listed here; it looks fairly short to me. *Did you attempt to include
</span><br>
<span class="quotelev1">&gt;      all of the fields we submit through the various phases in Reporter are
</span><br>
<span class="quotelev1">&gt;      there, or did you intentionally leave some out? *(I honestly haven't
</span><br>
<span class="quotelev1">&gt;      checked; it just &quot;feels short&quot; to me compared to our SQL schema).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I listed only some of the fields in every object representing specific
</span><br>
<span class="quotelev1">&gt;    test result source (called phase in mtt language). This is because every
</span><br>
<span class="quotelev1">&gt;    test result source object is derived from python provided db.Expando
</span><br>
<span class="quotelev1">&gt;    class. This gives us great flexibility, like adding dynamic attributes for
</span><br>
<span class="quotelev1">&gt;    every objects, for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    obj = new MttBuildPhaseResult()
</span><br>
<span class="quotelev1">&gt;    obj.my_favorite_dynamic_key = &quot;hello&quot;
</span><br>
<span class="quotelev1">&gt;    obj.my_another_dynamic_key = 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    So, we can have all phase attributes in the phase object without defining
</span><br>
<span class="quotelev1">&gt;    it in the *sql schema way*. Also we can query object model by these
</span><br>
<span class="quotelev1">&gt;    dynamic keys.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<p>It looks like model.py doesn't have the daisy chain of inheritance
<br>
that the SQL schema requires.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/mtt/browser/trunk/docs/sql-schema-v3.pdf">http://svn.open-mpi.org/trac/mtt/browser/trunk/docs/sql-schema-v3.pdf</a>
<br>
<p>Shouldn't RunTestPhase back-reference the MPIInstallPhase,
<br>
TestBuildPhase, and TestSession phase? E.g., we might need to look at
<br>
the configure arguments that are keyed to a given test run.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --&gt; meta question: is it in the zen of GDS to not have too many index
</span><br>
<span class="quotelev1">&gt;      fields like you would in SQL? *I.e., if you want to do an operation on
</span><br>
<span class="quotelev1">&gt;      GDS that you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    as far as it seems now, gds creates indexes automatically and also
</span><br>
<span class="quotelev1">&gt;    provides API to define indexes manually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      would typically use an SQL index field for, is the idea that you would
</span><br>
<span class="quotelev1">&gt;      do a map/reduce to select the data instead of an index field?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    yep. seems correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      - start_datastore.sh: hmm. *This script seems to imply that the
</span><br>
<span class="quotelev1">&gt;      datastore is *local*! *Don't we have to HTTP submit the results to
</span><br>
<span class="quotelev1">&gt;      Google? *More specifically: what is dev_appserver.py? *Is that,
</span><br>
<span class="quotelev1">&gt;      perchance, just a local proxy agent that will end up submitting our data
</span><br>
<span class="quotelev1">&gt;      to $datastore_path, which actually resides at Google? *Do we have to use
</span><br>
<span class="quotelev1">&gt;      a specific google username/URL to submit (and query) results?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    You need to download google`s sdk (dev_appserver.py is a part of it). In
</span><br>
<span class="quotelev1">&gt;    order to develop for gds you* run your code inside sdk locally, and when
</span><br>
<span class="quotelev1">&gt;    feel comfortable with it - you upload it to the google cluster. In order
</span><br>
<span class="quotelev1">&gt;    to run attached example, you need to download sdk, put it in the following
</span><br>
<span class="quotelev1">&gt;    dir hierarchy:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    somedir/sdk
</span><br>
<span class="quotelev1">&gt;    somedir/vbench-dev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    and run start_datastore.sh, which will run local instance of GDS on your
</span><br>
<span class="quotelev1">&gt;    machine.Then in another shell you need to run vbech-dev.py, which
</span><br>
<span class="quotelev1">&gt;    simulates mtt client accessing GDS, storing some objects in according to
</span><br>
<span class="quotelev1">&gt;    proposed models and then running some sql-like quires to fetch and
</span><br>
<span class="quotelev1">&gt;    manipulate results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    see
</span><br>
<span class="quotelev1">&gt;    <a href="http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html">http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      - there's no comments in vbench-dev.py -- can you explain what's going
</span><br>
<span class="quotelev1">&gt;      on in there? *Can you explain how we would use these scripts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This is a mtt simulator, it implements google appengine API to receive
</span><br>
<span class="quotelev1">&gt;    HTTP requests and call appropriate callbacks. (there is a map of specific
</span><br>
<span class="quotelev1">&gt;    urls to callbacks).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The main callback (which intercepts http GET requests to specific URL)
</span><br>
<span class="quotelev1">&gt;    runs the test code which creates objects defined in models.py, groups many
</span><br>
<span class="quotelev1">&gt;    test results into MTTSession and they run some queries to access
</span><br>
<span class="quotelev1">&gt;    previously created objects.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The real mtt client will use URL pointing to MTT python code running at
</span><br>
<span class="quotelev1">&gt;    google`s cluster, and use near same code to create/query/manipulate
</span><br>
<span class="quotelev1">&gt;    objects defined in models.py.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      - it *looks* like these scripts are for storing data out in the GDS.
</span><br>
<span class="quotelev1">&gt;      *Have you looked at the querying side? *Do we know that storing data in
</span><br>
<span class="quotelev1">&gt;      the form you listed in models.py are easily retrievable in the ways that
</span><br>
<span class="quotelev1">&gt;      we want? *E.g., can you mock up queries that resemble the queries we
</span><br>
<span class="quotelev1">&gt;      currently have in our web-based query system today, just to show that
</span><br>
<span class="quotelev1">&gt;      storing the data in this way will actually allow us to do the kinds of
</span><br>
<span class="quotelev1">&gt;      queries that we want to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I think vbench-dev.py shows some querying capabilities for stored objects,
</span><br>
<span class="quotelev1">&gt;    there are many ways to query objects by object CLASS and Attributes.
</span><br>
<span class="quotelev1">&gt;    see many examples here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    see
</span><br>
<span class="quotelev1">&gt;    <a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
</span><br>
<span class="quotelev1">&gt;    for more querying examples we can use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      In short: I think I'm missing much of the back-story / rationale of how
</span><br>
<span class="quotelev1">&gt;      the scripts in your tarball work / are to be used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      BTW -- if it's useful to have a teleconference about this kind of stuff,
</span><br>
<span class="quotelev1">&gt;      I can host a WebEx meeting. *WebEx has local dialins around the world,
</span><br>
<span class="quotelev1">&gt;      including Israel...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    sure, what about next week?
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Jeff Squyres
</span><br>
<span class="quotelev1">&gt;      Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . mailto:ethan.mallove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    . <a href="http://submit-to-datastore.pt/">http://submit-to-datastore.pt/</a>
</span><br>
<span class="quotelev1">&gt;    . <a href="http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html">http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html</a>
</span><br>
<span class="quotelev1">&gt;    . <a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0386.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0386.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
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
