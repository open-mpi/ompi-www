<?
$subject_val = "Re: [hwloc-devel] Static analysis";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 14:02:35 2016" -->
<!-- isoreceived="20160112190235" -->
<!-- sent="Tue, 12 Jan 2016 19:02:27 +0000" -->
<!-- isosent="20160112190227" -->
<!-- name="Odzioba, Lukasz" -->
<!-- email="lukasz.odzioba_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Static analysis" -->
<!-- id="D6EDEBF1F91015459DB866AC4EE162CC0234A649_at_IRSMSX103.ger.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAE4VaGA11uZWTD_MrVwchKvYFz5G6pNYF-i6LNvMugCgVRy69g_at_mail.gmail.com" -->
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
<strong>From:</strong> Odzioba, Lukasz (<em>lukasz.odzioba_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 14:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4701.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4701.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Reply:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jirka,
<br>
It should be safe to do free(NULL) so last function can be shortened to only 2 lines.
<br>
IIRC *alloc fuctions should not set errno on error to anything else than ENOMEM so you could get rid of errno references in your wrappers.
<br>
Removing else before return p; statement should take care of the warning, so you don&#226;&#128;&#153;t need return NULL then.
<br>

<br>
Thanks,
<br>
Lukas
<br>

<br>
From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Jirka Hladky
<br>
Sent: Tuesday, January 12, 2016 3:01 PM
<br>
To: Hardware locality development list
<br>
Subject: Re: [hwloc-devel] Static analysis
<br>

<br>
Hi Brice,
<br>

<br>
I use following custom routines to check for malloc related errors.
<br>

<br>
Just my 2 cents.
<br>

<br>
Jirka
<br>

<br>
void *util_Malloc (size_t size)
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

<br>
void *util_Calloc (size_t count, size_t esize)
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

<br>
void *util_Realloc (void *ptr, size_t size)
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

<br>
}
<br>

<br>
void *util_Free (void *p)
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

<br>

<br>

<br>

<br>

<br>
On Tue, Jan 12, 2016 at 2:26 PM, Odzioba, Lukasz &lt;lukasz.odzioba_at_[hidden]&lt;mailto:lukasz.odzioba_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
I use klocwork, which doesn't mean it is better it just reports different subset of potential errors.
<br>

<br>
Ignoring malloc errors is your design decision, I don't mind it.
<br>
From debugging perspective it makes it easier to track it down since you have null ptr dereference somewhere near malloc .
<br>
Malloc might start failing as well as just fail once in process live (i.e. some other process requested free memory for a short period of time), if an app is able to survive it's nice if not then well we have to live with that.
<br>

<br>
Thanks,
<br>
Lukas
<br>

<br>

<br>
-----Original Message-----
<br>
From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]&lt;mailto:hwloc-devel-bounces_at_[hidden]&gt;] On Behalf Of Brice Goglin
<br>
Sent: Tuesday, January 12, 2016 12:57 PM
<br>
To: hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
<br>
Subject: Re: [hwloc-devel] Static analysis
<br>

<br>
Hello
<br>

<br>
We're running coverity every night and I try to address most of what it
<br>
reports (except the netloc/ directory git master which still needs a lot
<br>
of work). What tool do you use?
<br>

<br>
It's true we don't check malloc() return values in many cases (hopefully
<br>
only the small allocations), mostly because we're lazy (and also because
<br>
many other things would go wrong when malloc starts failing :/)
<br>

<br>
Brice
<br>

<br>

<br>

<br>
Le 12/01/2016 12:23, Odzioba, Lukasz a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Static analysis tool we use has found quite a lot of potential issues in hwloc.
</span><br>
<span class="quotelev1">&gt; Most of them are type of &quot;NULL ptr dereference&quot; i.e. when pointer is not checked for null after allocation, but there are some more interesting cases as well.
</span><br>
<span class="quotelev1">&gt; My team distributes hwloc as a part of software package and we could just ignore those, but I wanted to let you know in case you are interested in fixing some or all of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know If you would like to get a full list, so I'll prepare it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php</a>
</span><br>

<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4699.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4699.php</a>
<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Previous message:</strong> <a href="4701.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4701.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>Reply:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
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
