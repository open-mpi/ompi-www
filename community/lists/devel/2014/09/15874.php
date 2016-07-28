<?
$subject_val = "Re: [OMPI devel] OPAL timing framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 11:01:43 2014" -->
<!-- isoreceived="20140918150143" -->
<!-- sent="Thu, 18 Sep 2014 22:01:42 +0700" -->
<!-- isosent="20140918150142" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPAL timing framework" -->
<!-- id="CAJ2Qj5rSuq01uMnnZjBWqU76JQNfVX1q3AYw9zEpRw6vS+6mfg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6ED1C11F-3AD9-4C57-A7E7-2913EA69655F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPAL timing framework<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 11:01:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15875.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Previous message:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>In reply to:</strong> <a href="15872.php">Ralph Castain: "Re: [OMPI devel] OPAL timing framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16028.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got that. Thank you!
<br>
<p>&#209;&#135;&#208;&#181;&#209;&#130;&#208;&#178;&#208;&#181;&#209;&#128;&#208;&#179;, 18 &#209;&#129;&#208;&#181;&#208;&#189;&#209;&#130;&#209;&#143;&#208;&#177;&#209;&#128;&#209;&#143; 2014 &#208;&#179;. &#208;&#191;&#208;&#190;&#208;&#187;&#209;&#140;&#208;&#183;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140; Ralph Castain &#208;&#189;&#208;&#176;&#208;&#191;&#208;&#184;&#209;&#129;&#208;&#176;&#208;&#187;:
<br>
<p><span class="quotelev1">&gt; I believe compile-time is preferable as there is a non-zero time impact of
</span><br>
<span class="quotelev1">&gt; enabling this code. It's really more for developers to improve scalability
</span><br>
<span class="quotelev1">&gt; - if a user is actually interested, I think it isn't that hard for them to
</span><br>
<span class="quotelev1">&gt; configure it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2014, at 7:16 AM, Artem Polyakov &lt;artpol84_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','artpol84_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, thank you for the feedback! All of mentioned issues are clear and I
</span><br>
<span class="quotelev1">&gt; will fix them shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One important thing that needs additional discussion is compile-time vs
</span><br>
<span class="quotelev1">&gt; runtime selection. Ralph, what do you think about that? Several of issues
</span><br>
<span class="quotelev1">&gt; depends on that decision.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-09-18 20:09 GMT+07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a few comments:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - This looks nice.  Thanks for the contribution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - I notice that the ORTE timing stuff is now a compile-time decision, not
</span><br>
<span class="quotelev2">&gt;&gt; a run-time decision.  Do we care that we've now taken away the ability for
</span><br>
<span class="quotelev2">&gt;&gt; users to do timings in a production build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &quot;clksync&quot; -- can we use &quot;clocksync&quot;?  It's only 2 letters.  We tend to
</span><br>
<span class="quotelev2">&gt;&gt; use real words in the OMPI code base; unnecessary abbreviation should be
</span><br>
<span class="quotelev2">&gt;&gt; avoided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - r32738 introduced a several files into the code base that have no
</span><br>
<span class="quotelev2">&gt;&gt; copyrights, and do not have the standard OMPI copyright header block.
</span><br>
<span class="quotelev2">&gt;&gt; Please fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - There's no documentation on how to use mpisync, mpirun_prof, or
</span><br>
<span class="quotelev2">&gt;&gt; ompi_timing_post, even though they're installed when you --enable-timing.
</span><br>
<span class="quotelev2">&gt;&gt; What are these 3 executables?  Can we get man pages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I post their description in the first e-mail. Sure I can prepare man pages
</span><br>
<span class="quotelev1">&gt; for them,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - What's the purpose of the MCA param orte_rml_base_timing?  A *quick*
</span><br>
<span class="quotelev2">&gt;&gt; look through the code seems to indicate that it is ignored.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - What's the purpose of the MCA params opal_clksync_file,
</span><br>
<span class="quotelev2">&gt;&gt; opal_timing_file, and opal_timing_overhead?  E.g., what is a &quot;clksync&quot;
</span><br>
<span class="quotelev2">&gt;&gt; file, what is it for, and what is its format?  Does the user have to
</span><br>
<span class="quotelev2">&gt;&gt; provide one?  If so, how to you get one?  Or is it an output file?
</span><br>
<span class="quotelev2">&gt;&gt; ...etc.  The brief descriptions given in the MCA help strings don't really
</span><br>
<span class="quotelev2">&gt;&gt; provide enough information for someone who has no idea what the timing
</span><br>
<span class="quotelev2">&gt;&gt; stuff is.  Also, can those 3 params have a common prefix?  I.e., it's not
</span><br>
<span class="quotelev2">&gt;&gt; obvious that opal_clksync_file is related to opal_timing_* at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - A *quick* look at ompi/tools/mpisync shows that a bunch of that code
</span><br>
<span class="quotelev2">&gt;&gt; came from an external project.  Is the license compatible with OMPI's
</span><br>
<span class="quotelev2">&gt;&gt; license?  What do we need to do to conform to their license?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - opal/util/timings.h is protected by OPAL_SYS_TIMING_H -- shouldn't it
</span><br>
<span class="quotelev2">&gt;&gt; be OPAL_UTIL_TIMINGS_H?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - There's commented-out code in opal/util/timings.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - There's no doxygen-style documentation in opal/util/timings.h to tell
</span><br>
<span class="quotelev2">&gt;&gt; developers how to use it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - There's &quot;TODO&quot; comments in opal/util/timings.c; should those be fixed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - opal_config.h should be the first include in opal/util/timings.c.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - If timing support is not to be compiled in, then opal/util/timings.c
</span><br>
<span class="quotelev2">&gt;&gt; should not be be compiled via the Makefile.am (rather than entirely #if'ed
</span><br>
<span class="quotelev2">&gt;&gt; out).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like this work is about 95% complete.  Finishing the remaining
</span><br>
<span class="quotelev2">&gt;&gt; 5% would make it great and genuinely useful to the rest of the code base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2014, at 10:20 AM, Artem Polyakov &lt;artpol84_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','artpol84_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would like to introduce OMPI timing framework that was included into
</span><br>
<span class="quotelev2">&gt;&gt; the trunk yesterday (r32738). The code is new so if you'll hit some bugs -
</span><br>
<span class="quotelev2">&gt;&gt; just let me know.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The framework consists of the set of macro's and routines for internal
</span><br>
<span class="quotelev2">&gt;&gt; OMPI usage + standalone tool mpisync and few additional scripts:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun_prof and ompi_timing_post. The set of features is very basic and I
</span><br>
<span class="quotelev2">&gt;&gt; am open for discussion of new things that are desirable there.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To enable framework compilation you should configure OMPI with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-timing option. If the option was passed to ./configure, standalone
</span><br>
<span class="quotelev2">&gt;&gt; tools and scripts will be installed into &lt;prefix&gt;/bin.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The timing code is located in OPAL (opal/utils/timing.[ch]). There is a
</span><br>
<span class="quotelev2">&gt;&gt; set of macro's that should be used to preprocess out all mentions of the
</span><br>
<span class="quotelev2">&gt;&gt; timing code in case it wasn't requested with --enable-timing:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_TIMING_DECLARE(t) - declare timing handler structure with name &quot;t&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_TIMING_DECLARE_EXT(x, t) - external declaration of a timing
</span><br>
<span class="quotelev2">&gt;&gt; handler &quot;t&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_TIMING_INIT(t) - initialize timing handler &quot;t&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_TIMING_EVENT(x) - printf-like event declaration similar to
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_OUTPUT.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The information about the event will be quickly inserted into the
</span><br>
<span class="quotelev2">&gt;&gt; linked list. Maximum event description is limited by OPAL_TIMING_DESCR_MAX.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The malloc is performed in buckets (OPAL_TIMING_BUFSIZE at once) and
</span><br>
<span class="quotelev2">&gt;&gt; overhead (time to malloc and prepare the bucket) is accounted in
</span><br>
<span class="quotelev2">&gt;&gt; corresponding list element. It might be excluded from the timing results
</span><br>
<span class="quotelev2">&gt;&gt; (controlled by OMPI_MCA_opal_timing_overhead parameter).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_TIMING_REPORT(enable, t, prefix) - prepare and print out timing
</span><br>
<span class="quotelev2">&gt;&gt; information. If OMPI_MCA_opal_timing_file was specified the output will go
</span><br>
<span class="quotelev2">&gt;&gt; to that file. In other case the output will be directed using opal_output,
</span><br>
<span class="quotelev2">&gt;&gt; each line will be prefixed with &quot;prefix&quot; to ease grep'ing. &quot;enable&quot; is a
</span><br>
<span class="quotelev2">&gt;&gt; boolean/integer variable that is used for runtime selection of what should
</span><br>
<span class="quotelev2">&gt;&gt; be reported.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OPAL_TIMING_RELEASE(t) - the counterpart for OPAL_TIMING_INIT.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There are several examples in OMPI code. And here is another simple
</span><br>
<span class="quotelev2">&gt;&gt; example:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_DECLARE(tm);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_INIT(&amp;tm);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_EVENT((&amp;tm,&quot;Begin of timing: %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(&amp;(peer-&gt;name)) ));
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     ....
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_EVENT((&amp;tm,&quot;Next timing event with condition x = %d&quot;, x
</span><br>
<span class="quotelev2">&gt;&gt; ));
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_EVENT((&amp;tm,&quot;Finish&quot;));
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_REPORT(enable_var, &amp;tm,&quot;MPI Init&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     OPAL_TIMING_RELEASE(&amp;tm);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; An output from all OMPI processes (mpirun, orted's, user processes) is
</span><br>
<span class="quotelev2">&gt;&gt; merged together. NTP provides 1 millisecond - 100 microsecond level of
</span><br>
<span class="quotelev2">&gt;&gt; precision. This may not be sufficient to order events globally.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To help developers extract the most realistic picture of what is going
</span><br>
<span class="quotelev2">&gt;&gt; on, additional time synchronisation might be performed before profiling.
</span><br>
<span class="quotelev2">&gt;&gt; The mpisync program should be runned 1-user-process-per-node to acquire the
</span><br>
<span class="quotelev2">&gt;&gt; file with time offsets relative to HNP of each node. If the cluster runs
</span><br>
<span class="quotelev2">&gt;&gt; over Gig Ethernet the precision will be 30-50 microseconds, in case of
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband - 4 microseconds. mpisync produces output file that might be
</span><br>
<span class="quotelev2">&gt;&gt; readed and used by timing framework (OMPI_MCA_opal_clksync_file parameter).
</span><br>
<span class="quotelev2">&gt;&gt; The bad news is that this synchronisation is not enough because of
</span><br>
<span class="quotelev2">&gt;&gt; different clock skew on different nodes. Additional periodical
</span><br>
<span class="quotelev2">&gt;&gt; synchronisation is needed. This is planned for the near future (me and
</span><br>
<span class="quotelev2">&gt;&gt; Ralph discussing possible ways now).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the mpirun_prof &amp; ompi_timing_post script may be used to automate clock
</span><br>
<span class="quotelev2">&gt;&gt; synchronisation in following manner:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export OMPI_MCA_ompi_timing=true
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export OMPI_MCA_orte_oob_timing=true
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export OMPI_MCA_orte_rml_timing=true
</span><br>
<span class="quotelev3">&gt;&gt; &gt; export OMPI_MCA_opal_timing_file=timing.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun_prof &lt;ompi-params&gt; ./mpiprog
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi_timing_post timing.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi_timing_post will simply sort the events and made all times to be
</span><br>
<span class="quotelev2">&gt;&gt; relative to the first one.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15837.php">http://www.open-mpi.org/community/lists/devel/2014/09/15837.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15869.php">http://www.open-mpi.org/community/lists/devel/2014/09/15869.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15870.php">http://www.open-mpi.org/community/lists/devel/2014/09/15870.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
-----
Best regards, Artem Polyakov
(Mobile mail)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15875.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>Previous message:</strong> <a href="15873.php">Ralph Castain: "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>In reply to:</strong> <a href="15872.php">Ralph Castain: "Re: [OMPI devel] OPAL timing framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16028.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
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
