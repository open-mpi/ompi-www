<?
$subject_val = "[OMPI devel] OPAL timing framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 10:20:54 2014" -->
<!-- isoreceived="20140916142054" -->
<!-- sent="Tue, 16 Sep 2014 21:20:53 +0700" -->
<!-- isosent="20140916142053" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="[OMPI devel] OPAL timing framework" -->
<!-- id="CAJ2Qj5qUumC0AB_xkiCR=FePVbv-W8sHpLVZ=OJVse4a=tXaiw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] OPAL timing framework<br>
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 10:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15838.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Previous message:</strong> <a href="15836.php">Gilles Gouaillardet: "[OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15869.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Reply:</strong> <a href="15869.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL timing framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to introduce OMPI timing framework that was included into the
<br>
trunk yesterday (r32738). The code is new so if you'll hit some bugs - just
<br>
let me know.
<br>
<p>The framework consists of the set of macro's and routines for internal OMPI
<br>
usage + standalone tool mpisync and few additional scripts: mpirun_prof and
<br>
ompi_timing_post. The set of features is very basic and I am open for
<br>
discussion of new things that are desirable there.
<br>
<p>To enable framework compilation you should configure OMPI with
<br>
--enable-timing option. If the option was passed to ./configure, standalone
<br>
tools and scripts will be installed into &lt;prefix&gt;/bin.
<br>
<p>The timing code is located in OPAL (opal/utils/timing.[ch]). There is a set
<br>
of macro's that should be used to preprocess out all mentions of the timing
<br>
code in case it wasn't requested with --enable-timing:
<br>
OPAL_TIMING_DECLARE(t) - declare timing handler structure with name &quot;t&quot;.
<br>
OPAL_TIMING_DECLARE_EXT(x, t) - external declaration of a timing handler
<br>
&quot;t&quot;.
<br>
OPAL_TIMING_INIT(t) - initialize timing handler &quot;t&quot;
<br>
OPAL_TIMING_EVENT(x) - printf-like event declaration similar to OPAL_OUTPUT.
<br>
The information about the event will be quickly inserted into the linked
<br>
list. Maximum event description is limited by OPAL_TIMING_DESCR_MAX.
<br>
The malloc is performed in buckets (OPAL_TIMING_BUFSIZE at once) and
<br>
overhead (time to malloc and prepare the bucket) is accounted in
<br>
corresponding list element. It might be excluded from the timing results
<br>
(controlled by OMPI_MCA_opal_timing_overhead parameter).
<br>
OPAL_TIMING_REPORT(enable, t, prefix) - prepare and print out timing
<br>
information. If OMPI_MCA_opal_timing_file was specified the output will go
<br>
to that file. In other case the output will be directed using opal_output,
<br>
each line will be prefixed with &quot;prefix&quot; to ease grep'ing. &quot;enable&quot; is a
<br>
boolean/integer variable that is used for runtime selection of what should
<br>
be reported.
<br>
OPAL_TIMING_RELEASE(t) - the counterpart for OPAL_TIMING_INIT.
<br>
<p>There are several examples in OMPI code. And here is another simple example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_DECLARE(tm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_INIT(&amp;tm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_EVENT((&amp;tm,&quot;Begin of timing: %s&quot;,
<br>
ORTE_NAME_PRINT(&amp;(peer-&gt;name)) ));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_EVENT((&amp;tm,&quot;Next timing event with condition x = %d&quot;, x ));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_EVENT((&amp;tm,&quot;Finish&quot;));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_REPORT(enable_var, &amp;tm,&quot;MPI Init&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TIMING_RELEASE(&amp;tm);
<br>
<p><p>An output from all OMPI processes (mpirun, orted's, user processes) is
<br>
merged together. NTP provides 1 millisecond - 100 microsecond level of
<br>
precision. This may not be sufficient to order events globally.
<br>
To help developers extract the most realistic picture of what is going on,
<br>
additional time synchronisation might be performed before profiling. The
<br>
mpisync program should be runned 1-user-process-per-node to acquire the
<br>
file with time offsets relative to HNP of each node. If the cluster runs
<br>
over Gig Ethernet the precision will be 30-50 microseconds, in case of
<br>
Infiniband - 4 microseconds. mpisync produces output file that might be
<br>
readed and used by timing framework (OMPI_MCA_opal_clksync_file parameter).
<br>
The bad news is that this synchronisation is not enough because of
<br>
different clock skew on different nodes. Additional periodical
<br>
synchronisation is needed. This is planned for the near future (me and
<br>
Ralph discussing possible ways now).
<br>
<p>the mpirun_prof &amp; ompi_timing_post script may be used to automate clock
<br>
synchronisation in following manner:
<br>
export OMPI_MCA_ompi_timing=true
<br>
export OMPI_MCA_orte_oob_timing=true
<br>
export OMPI_MCA_orte_rml_timing=true
<br>
export OMPI_MCA_opal_timing_file=timing.out
<br>
mpirun_prof &lt;ompi-params&gt; ./mpiprog
<br>
ompi_timing_post timing.out
<br>
<p>ompi_timing_post will simply sort the events and made all times to be
<br>
relative to the first one.
<br>
<p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15838.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Previous message:</strong> <a href="15836.php">Gilles Gouaillardet: "[OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15869.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Reply:</strong> <a href="15869.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL timing framework"</a>
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
