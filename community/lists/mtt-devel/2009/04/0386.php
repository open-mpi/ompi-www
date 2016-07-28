<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 08:57:13 2009" -->
<!-- isoreceived="20090415125713" -->
<!-- sent="Wed, 15 Apr 2009 15:57:07 +0300" -->
<!-- isosent="20090415125707" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="b20b52800904150557m2df27281pad83160eb0b17dcb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090414205007.GR26923_at_sun.com" -->
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
<strong>Date:</strong> 2009-04-15 08:57:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0387.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 14, 2009 at 11:50 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  On Tue, Apr/14/2009 09:27:14PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    On Tue, Apr 14, 2009 at 5:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      On Apr 13, 2009, at 2:08 PM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Hello Ethan,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Sorry for joining the discussion late... I was on travel last week
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;      that always makes me waaay behind on my INBOX. *:-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        On Mon, Apr 13, 2009 at 5:44 PM, Ethan Mallove &lt;
</span><br>
<span class="quotelev1">&gt; ethan.mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Will this translate to something like
</span><br>
<span class="quotelev2">&gt; &gt;        lib/MTT/Reporter/GoogleDatabase.pm? *If we are to move away from
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;        current MTT Postgres database, we want to be able to submit
</span><br>
<span class="quotelev1">&gt; results to
</span><br>
<span class="quotelev2">&gt; &gt;        both the current MTT database and the new Google database during
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;        transition period. Having a GoogleDatabase.pm would make this
</span><br>
<span class="quotelev1">&gt; easier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        I think we should keep both storage options: current postgress and
</span><br>
<span class="quotelev2">&gt; &gt;        datastore. The mtt changes will be minor to support datastore.
</span><br>
<span class="quotelev2">&gt; &gt;        Due that fact that google appengine API (as well as datastore API)
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev2">&gt; &gt;        be python or java only, we will create external scripts to
</span><br>
<span class="quotelev1">&gt; manipulate
</span><br>
<span class="quotelev2">&gt; &gt;        datastore objects:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Ah, good point (python/java not perl). *But I think that
</span><br>
<span class="quotelev2">&gt; &gt;      lib/MTT/Reporter/GoogleDataStore.pm could still be a good thing --
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev2">&gt; &gt;      have invested a lot of time/effort into getting our particular mtt
</span><br>
<span class="quotelev2">&gt; &gt;      clients setup just the way we want them, setting up INI files,
</span><br>
<span class="quotelev2">&gt; &gt;      submitting to batch schedulers, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      A GoogleDataStore.pm reporter could well fork/exec a python/java
</span><br>
<span class="quotelev2">&gt; &gt;      executable to do the actual communication/storing of the data,
</span><br>
<span class="quotelev1">&gt; right...?
</span><br>
<span class="quotelev2">&gt; &gt;      *More below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    completely agree, once we have external python/java/cobol scripts to
</span><br>
<span class="quotelev2">&gt; &gt;    manipulate GDS objects, we should wrap it by perl and call from MTT in
</span><br>
<span class="quotelev2">&gt; &gt;    same way like it works today for submitting to the postgress.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        The mtt will dump test results in xml format. Then, we provide two
</span><br>
<span class="quotelev2">&gt; &gt;        python (or java?) scripts:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        mtt-results-submit-to-datastore.py - script will be called at the
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev2">&gt; &gt;        of mtt run and will read xml files, create objects and save to
</span><br>
<span class="quotelev2">&gt; &gt;        datastore
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Could be pretty easy to have a Reporter/GDS.pm (I keep making that
</span><br>
<span class="quotelev2">&gt; &gt;      filename shorter, don't I? :-) ) that simply invokes the
</span><br>
<span class="quotelev2">&gt; &gt;      mtt-result-submit-to-datastore.pt script on the xml that it dumped
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt;      that particular test.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Specifically: I do like having partial results submitted while my
</span><br>
<span class="quotelev1">&gt; MTT
</span><br>
<span class="quotelev2">&gt; &gt;      tests are running. *Cisco's testing cycle is about 24 hours, but
</span><br>
<span class="quotelev1">&gt; groups
</span><br>
<span class="quotelev2">&gt; &gt;      of tests are finishing all the time, so it's good to see those
</span><br>
<span class="quotelev1">&gt; results
</span><br>
<span class="quotelev2">&gt; &gt;      without having to wait the full 24 hours before anything shows up.
</span><br>
<span class="quotelev1">&gt; *I
</span><br>
<span class="quotelev2">&gt; &gt;      guess that's my only comment on the idea of having a script that
</span><br>
<span class="quotelev2">&gt; &gt;      traverses the MTT scratch to find / submit everything -- I'd prefer
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev2">&gt; &gt;      we kept the same Reporter idea and used an underlying .py script to
</span><br>
<span class="quotelev2">&gt; &gt;      submit results as they become ready.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Is this do-able?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    sounds good, we should introduce some guid (like pid) for mtt session,
</span><br>
<span class="quotelev2">&gt; &gt;    where all mtt results generated by this session will be referring to
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt;    guid.* Later we use this guid to submit partial results as they become
</span><br>
<span class="quotelev2">&gt; &gt;    ready and connect it to the appropriate mtt session object (see
</span><br>
<span class="quotelev1">&gt; models.py)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        mtt-results-query.py - sample script to query datastore and
</span><br>
<span class="quotelev1">&gt; generate
</span><br>
<span class="quotelev2">&gt; &gt;        some simple visual/tabular reports. It will serve as tutorial for
</span><br>
<span class="quotelev2">&gt; &gt;        howto access mtt data from scripts for reporting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Later, we add another script to replace php web frontend. It will
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev2">&gt; &gt;        hosted on google appengine machines and will provide web viewer
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt;        mtt results. (same way like index.php does today)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Sounds good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; * * *b. mtt_save_to_db.py - script which will go over mtt
</span><br>
<span class="quotelev1">&gt; scratch
</span><br>
<span class="quotelev2">&gt; &gt;        dir, find
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; * * *all xml files generated for every mtt phase, parse it and
</span><br>
<span class="quotelev1">&gt; save
</span><br>
<span class="quotelev2">&gt; &gt;        to
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; * * *datastore, preserving test results relations,i.e. all test
</span><br>
<span class="quotelev2">&gt; &gt;        results will
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; * * *be grouped by mtt general info: mpi version, name, date,
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;        &gt;
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; * * *c. same script can scan, parse and save from xml files
</span><br>
<span class="quotelev2">&gt; &gt;        generated by
</span><br>
<span class="quotelev3">&gt; &gt;        &gt; * * *wrapper scripts for non mtt based executions (fluent, ..)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        I'm confused here. *Can't MTT be outfitted to report results of a
</span><br>
<span class="quotelev2">&gt; &gt;        Fluent run?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        I think we can enhance mtt to be not only mpi testing platform,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt; &gt;        also to serve as mpi benchmarking platform. We can use datastore
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;        keep mpi-based benchmarking results in the same manner like mtt
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev2">&gt; &gt;        for testing results. (no changes to mtt required for that, it is
</span><br>
<span class="quotelev1">&gt; just
</span><br>
<span class="quotelev2">&gt; &gt;        a side effect of using datastore to keep data of any type)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I think that Ethan was asking was: can't MTT run Fluent and then use
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;      normal Reporter mechanism to report the results into whatever
</span><br>
<span class="quotelev1">&gt; back-end
</span><br>
<span class="quotelev2">&gt; &gt;      data store we have? *(postgres or GDS)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    ahhh, okie, i see.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Correct me if Im wrong, the current mtt implementation allows
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev2">&gt; &gt;    way of executing mpi test:
</span><br>
<span class="quotelev2">&gt; &gt;    /path/to/mpirun &lt;mpirun options&gt; &lt;test&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Many mpi based applications have embedded MPI libraries and
</span><br>
<span class="quotelev1">&gt; non-standard
</span><br>
<span class="quotelev2">&gt; &gt;    way to start it, one should set env variable to point to desired mpi
</span><br>
<span class="quotelev2">&gt; &gt;    installation or pass it as cmd line argument, for example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    for fluent:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    export OPENMPI_ROOT=/path/to/openmpi
</span><br>
<span class="quotelev2">&gt; &gt;    fluent &lt;cmd line args&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'd probably want a special &quot;MPI details&quot; INI section to run Fluent,
</span><br>
<span class="quotelev1">&gt; e.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [MPI Details: Fluent]
</span><br>
<span class="quotelev1">&gt;  exec = fluent @fluent_args@
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    for pamcrash:
</span><br>
<span class="quotelev2">&gt; &gt;    pamworld -np 2 -mpidir=/path/to/openmpi/dir ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ditto for pamcrash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Im not sure if it is possible to express that execution semantic in
</span><br>
<span class="quotelev1">&gt; mtt
</span><br>
<span class="quotelev2">&gt; &gt;    ini file. Please suggest.
</span><br>
<span class="quotelev2">&gt; &gt;    So far, it seems that such executions can be handled externally from
</span><br>
<span class="quotelev1">&gt; mtt
</span><br>
<span class="quotelev2">&gt; &gt;    but using same object model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT supports the following INI parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * setenv
</span><br>
<span class="quotelev1">&gt;   * prepend_path
</span><br>
<span class="quotelev1">&gt;   * env_module
</span><br>
<span class="quotelev1">&gt;   * env_importer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>aha, great
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I can see the value of both sides -- a) using the MTT client as the
</span><br>
<span class="quotelev2">&gt; &gt;      gateway to *all* data storage, or b) making MTT but one (possibly of
</span><br>
<span class="quotelev2">&gt; &gt;      many) tools that can write into the GDS. *a) certainly is more
</span><br>
<span class="quotelev2">&gt; &gt;      attractive towards having a common data format back in GDS such that
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt;      single web tool is capable of reporting from the data and being able
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;      make conherent sense out of the data (vs. 3rd party tools that put
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev2">&gt; &gt;      back in GDS that may not be in exactly the same format / layout and
</span><br>
<span class="quotelev2">&gt; &gt;      therefore our web reporter may not be able to make sense out of the
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev2">&gt; &gt;      and report on it).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I think that having a Reporter/GDS.pm that system()'s the back-end
</span><br>
<span class="quotelev2">&gt; &gt;      python script gives the best of both worlds -- the MTT client can
</span><br>
<span class="quotelev2">&gt; &gt;      [continue to] submit results in the normal way, but there's also a
</span><br>
<span class="quotelev2">&gt; &gt;      standalone script that can submit results from external tool runs
</span><br>
<span class="quotelev1">&gt; (e.g.,
</span><br>
<span class="quotelev2">&gt; &gt;      manually running Fluent, parsing the results, and submitting to our
</span><br>
<span class="quotelev2">&gt; &gt;      GDS). *And hopefully the back-end python script will enforce a
</span><br>
<span class="quotelev1">&gt; specific
</span><br>
<span class="quotelev2">&gt; &gt;      structure to the data that is submitted so that all tools -- MTT and
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev2">&gt; &gt;      3rd party tools -- adhere to the same format and the reporter can
</span><br>
<span class="quotelev2">&gt; &gt;      therefore report on it coherently.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    agree. (a) is a preferred form. (b) can be used for tools that cannot
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev2">&gt; &gt;    called from mtt.
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      For the attachment...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      I can &quot;sorta read&quot; python, but I'm not familiar with its intricacies
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;      its internal APIs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      - models.py: looks good. *I don't know if *all* the fields we have
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev2">&gt; &gt;      listed here; it looks fairly short to me. *Did you attempt to
</span><br>
<span class="quotelev1">&gt; include
</span><br>
<span class="quotelev2">&gt; &gt;      all of the fields we submit through the various phases in Reporter
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev2">&gt; &gt;      there, or did you intentionally leave some out? *(I honestly haven't
</span><br>
<span class="quotelev2">&gt; &gt;      checked; it just &quot;feels short&quot; to me compared to our SQL schema).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I listed only some of the fields in every object representing specific
</span><br>
<span class="quotelev2">&gt; &gt;    test result source (called phase in mtt language). This is because
</span><br>
<span class="quotelev1">&gt; every
</span><br>
<span class="quotelev2">&gt; &gt;    test result source object is derived from python provided db.Expando
</span><br>
<span class="quotelev2">&gt; &gt;    class. This gives us great flexibility, like adding dynamic attributes
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt;    every objects, for example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    obj = new MttBuildPhaseResult()
</span><br>
<span class="quotelev2">&gt; &gt;    obj.my_favorite_dynamic_key = &quot;hello&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    obj.my_another_dynamic_key = 7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    So, we can have all phase attributes in the phase object without
</span><br>
<span class="quotelev1">&gt; defining
</span><br>
<span class="quotelev2">&gt; &gt;    it in the *sql schema way*. Also we can query object model by these
</span><br>
<span class="quotelev2">&gt; &gt;    dynamic keys.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like model.py doesn't have the daisy chain of inheritance
</span><br>
<span class="quotelev1">&gt; that the SQL schema requires.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://svn.open-mpi.org/trac/mtt/browser/trunk/docs/sql-schema-v3.pdf">http://svn.open-mpi.org/trac/mtt/browser/trunk/docs/sql-schema-v3.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't RunTestPhase back-reference the MPIInstallPhase,
</span><br>
<span class="quotelev1">&gt; TestBuildPhase, and TestSession phase? E.g., we might need to look at
</span><br>
<span class="quotelev1">&gt; the configure arguments that are keyed to a given test run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><span class="quotelev1">&gt;  you are right, will add it to the model. Every phase object will have a
</span><br>
<span class="quotelev1">&gt; reference to other relevant phase objects, i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>RunTestPhase -&gt; MPIInstallPhase
<br>
RunTestPhase -&gt; TestBuildPhase
<br>
*Phase -&gt; TestSession
<br>
<p><p>sounds good? Will go over sql schema and try to track additional relations.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      --&gt; meta question: is it in the zen of GDS to not have too many
</span><br>
<span class="quotelev1">&gt; index
</span><br>
<span class="quotelev2">&gt; &gt;      fields like you would in SQL? *I.e., if you want to do an operation
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt;      GDS that you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    as far as it seems now, gds creates indexes automatically and also
</span><br>
<span class="quotelev2">&gt; &gt;    provides API to define indexes manually.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      would typically use an SQL index field for, is the idea that you
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev2">&gt; &gt;      do a map/reduce to select the data instead of an index field?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    yep. seems correct.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      - start_datastore.sh: hmm. *This script seems to imply that the
</span><br>
<span class="quotelev2">&gt; &gt;      datastore is *local*! *Don't we have to HTTP submit the results to
</span><br>
<span class="quotelev2">&gt; &gt;      Google? *More specifically: what is dev_appserver.py? *Is that,
</span><br>
<span class="quotelev2">&gt; &gt;      perchance, just a local proxy agent that will end up submitting our
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev2">&gt; &gt;      to $datastore_path, which actually resides at Google? *Do we have to
</span><br>
<span class="quotelev1">&gt; use
</span><br>
<span class="quotelev2">&gt; &gt;      a specific google username/URL to submit (and query) results?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    You need to download google`s sdk (dev_appserver.py is a part of it).
</span><br>
<span class="quotelev1">&gt; In
</span><br>
<span class="quotelev2">&gt; &gt;    order to develop for gds you* run your code inside sdk locally, and
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev2">&gt; &gt;    feel comfortable with it - you upload it to the google cluster. In
</span><br>
<span class="quotelev1">&gt; order
</span><br>
<span class="quotelev2">&gt; &gt;    to run attached example, you need to download sdk, put it in the
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev2">&gt; &gt;    dir hierarchy:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    somedir/sdk
</span><br>
<span class="quotelev2">&gt; &gt;    somedir/vbench-dev
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    and run start_datastore.sh, which will run local instance of GDS on
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev2">&gt; &gt;    machine.Then in another shell you need to run vbech-dev.py, which
</span><br>
<span class="quotelev2">&gt; &gt;    simulates mtt client accessing GDS, storing some objects in according
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;    proposed models and then running some sql-like quires to fetch and
</span><br>
<span class="quotelev2">&gt; &gt;    manipulate results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    see
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html">http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      - there's no comments in vbench-dev.py -- can you explain what's
</span><br>
<span class="quotelev1">&gt; going
</span><br>
<span class="quotelev2">&gt; &gt;      on in there? *Can you explain how we would use these scripts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This is a mtt simulator, it implements google appengine API to receive
</span><br>
<span class="quotelev2">&gt; &gt;    HTTP requests and call appropriate callbacks. (there is a map of
</span><br>
<span class="quotelev1">&gt; specific
</span><br>
<span class="quotelev2">&gt; &gt;    urls to callbacks).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    The main callback (which intercepts http GET requests to specific URL)
</span><br>
<span class="quotelev2">&gt; &gt;    runs the test code which creates objects defined in models.py, groups
</span><br>
<span class="quotelev1">&gt; many
</span><br>
<span class="quotelev2">&gt; &gt;    test results into MTTSession and they run some queries to access
</span><br>
<span class="quotelev2">&gt; &gt;    previously created objects.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    The real mtt client will use URL pointing to MTT python code running
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev2">&gt; &gt;    google`s cluster, and use near same code to create/query/manipulate
</span><br>
<span class="quotelev2">&gt; &gt;    objects defined in models.py.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      - it *looks* like these scripts are for storing data out in the GDS.
</span><br>
<span class="quotelev2">&gt; &gt;      *Have you looked at the querying side? *Do we know that storing data
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt; &gt;      the form you listed in models.py are easily retrievable in the ways
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt;      we want? *E.g., can you mock up queries that resemble the queries we
</span><br>
<span class="quotelev2">&gt; &gt;      currently have in our web-based query system today, just to show
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt;      storing the data in this way will actually allow us to do the kinds
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt;      queries that we want to do?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I think vbench-dev.py shows some querying capabilities for stored
</span><br>
<span class="quotelev1">&gt; objects,
</span><br>
<span class="quotelev2">&gt; &gt;    there are many ways to query objects by object CLASS and Attributes.
</span><br>
<span class="quotelev2">&gt; &gt;    see many examples here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    see
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;    for more querying examples we can use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      In short: I think I'm missing much of the back-story / rationale of
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev2">&gt; &gt;      the scripts in your tarball work / are to be used.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      BTW -- if it's useful to have a teleconference about this kind of
</span><br>
<span class="quotelev1">&gt; stuff,
</span><br>
<span class="quotelev2">&gt; &gt;      I can host a WebEx meeting. *WebEx has local dialins around the
</span><br>
<span class="quotelev1">&gt; world,
</span><br>
<span class="quotelev2">&gt; &gt;      including Israel...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    sure, what about next week?
</span><br>
<span class="quotelev2">&gt; &gt;    *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Mike
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;      Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; References
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Visible links
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . mailto:ethan.mallove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    . <a href="http://submit-to-datastore.pt/">http://submit-to-datastore.pt/</a>
</span><br>
<span class="quotelev2">&gt; &gt;    .
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html">http://code.google.com/appengine/docs/python/gettingstarted/devenvironment.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;    .
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html">http://code.google.com/appengine/docs/python/gettingstarted/usingdatastore.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0387.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
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
