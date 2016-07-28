<?
$subject_val = "Re: [hwloc-devel] Static analysis";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 02:52:53 2016" -->
<!-- isoreceived="20160113075253" -->
<!-- sent="Wed, 13 Jan 2016 08:52:51 +0100" -->
<!-- isosent="20160113075251" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Static analysis" -->
<!-- id="CAE4VaGAyonQ=F4N3O-i3zi0Rd9ei1WTXsdhEt2CB5bkfb+rhdg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D6EDEBF1F91015459DB866AC4EE162CC0234A649_at_IRSMSX103.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Static analysis<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-13 02:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4704.php">Brice Goglin: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4704.php">Brice Goglin: "Re: [hwloc-devel] Static analysis"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lukas,
<br>
<p>good points! I use these routines for ages and they definitively deserve
<br>
the suggested updates.
<br>
<p>Thanks!
<br>
Jirka
<br>
<p><p>On Tue, Jan 12, 2016 at 8:02 PM, Odzioba, Lukasz &lt;lukasz.odzioba_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jirka,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be safe to do free(NULL) so last function can be shortened to
</span><br>
<span class="quotelev1">&gt; only 2 lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC *alloc fuctions should not set errno on error to anything else than
</span><br>
<span class="quotelev1">&gt; ENOMEM so you could get rid of errno references in your wrappers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing else before return p; statement should take care of the warning,
</span><br>
<span class="quotelev1">&gt; so you don&#226;&#128;&#153;t need return NULL then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] *On Behalf
</span><br>
<span class="quotelev1">&gt; Of *Jirka Hladky
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, January 12, 2016 3:01 PM
</span><br>
<span class="quotelev1">&gt; *To:* Hardware locality development list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [hwloc-devel] Static analysis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use following custom routines to check for malloc related errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my 2 cents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void *util_Malloc (size_t size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    void *p;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    errno = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    p = malloc (size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (p == NULL) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       fprintf (stdout, &quot;\nmalloc failed: %s\n\n&quot;, strerror (errno));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return NULL;     /* to eliminate a warning from the compiler */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    } else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return p;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void *util_Calloc (size_t count, size_t esize)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    void *p;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    errno = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    p = calloc (count, esize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (p == NULL) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       fprintf (stdout, &quot;\ncalloc failed: %s\n\n&quot;, strerror (errno));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return NULL;     /* to eliminate a warning from the compiler */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    } else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return p;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void *util_Realloc (void *ptr, size_t size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    void *p;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    errno = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    p = realloc (ptr, size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if ((p == NULL) &amp;&amp; (size != 0)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       fprintf (stdout, &quot;\nrealloc failed: %s\n\n&quot;, strerror (errno));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return ptr;      /* to eliminate a warning from the compiler */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    } else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return p;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void *util_Free (void *p)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (p == NULL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    free (p);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2016 at 2:26 PM, Odzioba, Lukasz &lt;lukasz.odzioba_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I use klocwork, which doesn't mean it is better it just reports different
</span><br>
<span class="quotelev1">&gt; subset of potential errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ignoring malloc errors is your design decision, I don't mind it.
</span><br>
<span class="quotelev1">&gt; From debugging perspective it makes it easier to track it down since you
</span><br>
<span class="quotelev1">&gt; have null ptr dereference somewhere near malloc .
</span><br>
<span class="quotelev1">&gt; Malloc might start failing as well as just fail once in process live (i.e.
</span><br>
<span class="quotelev1">&gt; some other process requested free memory for a short period of time), if an
</span><br>
<span class="quotelev1">&gt; app is able to survive it's nice if not then well we have to live with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Brice Goglin
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 12, 2016 12:57 PM
</span><br>
<span class="quotelev1">&gt; To: hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-devel] Static analysis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're running coverity every night and I try to address most of what it
</span><br>
<span class="quotelev1">&gt; reports (except the netloc/ directory git master which still needs a lot
</span><br>
<span class="quotelev1">&gt; of work). What tool do you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's true we don't check malloc() return values in many cases (hopefully
</span><br>
<span class="quotelev1">&gt; only the small allocations), mostly because we're lazy (and also because
</span><br>
<span class="quotelev1">&gt; many other things would go wrong when malloc starts failing :/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 12/01/2016 12:23, Odzioba, Lukasz a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; Static analysis tool we use has found quite a lot of potential issues in
</span><br>
<span class="quotelev1">&gt; hwloc.
</span><br>
<span class="quotelev2">&gt; &gt; Most of them are type of &quot;NULL ptr dereference&quot; i.e. when pointer is not
</span><br>
<span class="quotelev1">&gt; checked for null after allocation, but there are some more interesting
</span><br>
<span class="quotelev1">&gt; cases as well.
</span><br>
<span class="quotelev2">&gt; &gt; My team distributes hwloc as a part of software package and we could
</span><br>
<span class="quotelev1">&gt; just ignore those, but I wanted to let you know in case you are interested
</span><br>
<span class="quotelev1">&gt; in fixing some or all of them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know If you would like to get a full list, so I'll prepare
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Lukas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4699.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4699.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4702.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4702.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4704.php">Brice Goglin: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4704.php">Brice Goglin: "Re: [hwloc-devel] Static analysis"</a>
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
