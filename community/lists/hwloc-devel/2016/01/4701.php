<?
$subject_val = "Re: [hwloc-devel] Static analysis";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 09:00:59 2016" -->
<!-- isoreceived="20160112140059" -->
<!-- sent="Tue, 12 Jan 2016 15:00:54 +0100" -->
<!-- isosent="20160112140054" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Static analysis" -->
<!-- id="CAE4VaGA11uZWTD_MrVwchKvYFz5G6pNYF-i6LNvMugCgVRy69g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D6EDEBF1F91015459DB866AC4EE162CC0234A50E_at_IRSMSX103.ger.corp.intel.com" -->
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
<strong>Date:</strong> 2016-01-12 09:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Reply:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I use following custom routines to check for malloc related errors.
<br>
<p>Just my 2 cents.
<br>
<p>Jirka
<br>
<p>void *util_Malloc (size_t size)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;void *p;
<br>
&nbsp;&nbsp;&nbsp;errno = 0;
<br>
&nbsp;&nbsp;&nbsp;p = malloc (size);
<br>
&nbsp;&nbsp;&nbsp;if (p == NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stdout, &quot;\nmalloc failed: %s\n\n&quot;, strerror (errno));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit (EXIT_FAILURE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;     /* to eliminate a warning from the compiler */
<br>
&nbsp;&nbsp;&nbsp;} else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return p;
<br>
}
<br>
<p>void *util_Calloc (size_t count, size_t esize)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;void *p;
<br>
&nbsp;&nbsp;&nbsp;errno = 0;
<br>
&nbsp;&nbsp;&nbsp;p = calloc (count, esize);
<br>
&nbsp;&nbsp;&nbsp;if (p == NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stdout, &quot;\ncalloc failed: %s\n\n&quot;, strerror (errno));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit (EXIT_FAILURE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;     /* to eliminate a warning from the compiler */
<br>
&nbsp;&nbsp;&nbsp;} else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return p;
<br>
}
<br>
<p>void *util_Realloc (void *ptr, size_t size)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;void *p;
<br>
&nbsp;&nbsp;&nbsp;errno = 0;
<br>
&nbsp;&nbsp;&nbsp;p = realloc (ptr, size);
<br>
&nbsp;&nbsp;&nbsp;if ((p == NULL) &amp;&amp; (size != 0)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf (stdout, &quot;\nrealloc failed: %s\n\n&quot;, strerror (errno));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit (EXIT_FAILURE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ptr;      /* to eliminate a warning from the compiler */
<br>
&nbsp;&nbsp;&nbsp;} else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return p;
<br>
<p>}
<br>
<p>void *util_Free (void *p)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;if (p == NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;free (p);
<br>
&nbsp;&nbsp;&nbsp;return NULL;
<br>
}
<br>
<p><p><p><p><p>On Tue, Jan 12, 2016 at 2:26 PM, Odzioba, Lukasz &lt;lukasz.odzioba_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4701/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Reply:</strong> <a href="4702.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
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
