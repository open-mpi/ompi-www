<?
$subject_val = "Re: [hwloc-devel] userdata import/export";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 27 11:30:10 2012" -->
<!-- isoreceived="20120827153010" -->
<!-- sent="Mon, 27 Aug 2012 17:30:04 +0200" -->
<!-- isosent="20120827153004" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] userdata import/export" -->
<!-- id="503B927C.4080604_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FBAA2FCA-A4BA-4C13-9744-FC9724EA2BA3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] userdata import/export<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-27 11:30:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3236.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Previous message:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>In reply to:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3236.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Reply:</strong> <a href="3236.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes it's an internal output state (which XML document/file are we
<br>
writing to, which XML node are we currently setting up, ...). Hiding
<br>
inside the topology would cause problems if multiple threads export at
<br>
the same time :)
<br>
<p>I thought about renaming it from &quot;reserved&quot; to &quot;private_context&quot; or so,
<br>
but we're already talking about exporting &quot;application-private&quot; data, so
<br>
talking about another &quot;private&quot; wasn't a lot more clear :)
<br>
<p>Brice
<br>
<p><p><p>Le 27/08/2012 17:26, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Looks good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My only comment is that it seems a little odd to pass the &quot;reserved&quot; context through.  Is that some internal XML state?  Can that be hidden somewhere else, on the topo or the obj?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that's a minor quibble.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2012, at 5:52 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (breaking the thread since we're far from valarrays now).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've played with this idea and came with the attached interface change.
</span><br>
<span class="quotelev2">&gt;&gt; Aside from low-level backend changes, everything was very easy to implement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's take an example. I modified lstopo to add some userdata to the
</span><br>
<span class="quotelev2">&gt;&gt; root object and define the following export callback:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static void export(void *reserved, hwloc_topology_t topo, hwloc_obj_t obj)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  /* we export random stuff instead of the actual userdata content */
</span><br>
<span class="quotelev2">&gt;&gt;  hwloc_export_obj_userdata(reserved, topo, obj, NULL, &quot;coincoin&quot;, 8); /* no name */
</span><br>
<span class="quotelev2">&gt;&gt;  hwloc_export_obj_userdata(reserved, topo, obj, &quot;MyName&quot;, &quot;foobar&quot;, 6);
</span><br>
<span class="quotelev2">&gt;&gt;  hwloc_export_obj_userdata(reserved, topo, obj, &quot;MyValue&quot;, &quot;foobarbarbar&quot;, 10); /* truncated to 10 chars */
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This callback is only called for the root object since others have
</span><br>
<span class="quotelev2">&gt;&gt; userdata=NULL. It exports three lines to XML:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;userdata length=&quot;8&quot;&gt;coincoin&lt;/userdata&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;userdata name=&quot;MyName&quot; length=&quot;6&quot;&gt;foobar&lt;/userdata&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;userdata name=&quot;MyValue&quot; length=&quot;10&quot;&gt;foobarbarb&lt;/userdata&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The idea behind multiple userdata lines per object is that it helps the
</span><br>
<span class="quotelev2">&gt;&gt; application structure its userdata without having to create a single
</span><br>
<span class="quotelev2">&gt;&gt; contigous buffer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you import this with an import() callback, you get three
</span><br>
<span class="quotelev2">&gt;&gt; invocations of the callback:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ##### name (null) value coincoin length 8
</span><br>
<span class="quotelev2">&gt;&gt; ##### name MyName value foobar length 6
</span><br>
<span class="quotelev2">&gt;&gt; ##### name MyValue value foobarbarb length 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The optional &quot;name&quot; attribute lets the application recognize things (but
</span><br>
<span class="quotelev2">&gt;&gt; they always looked in-order in my testing).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My user that wants valarrays would likely export:
</span><br>
<span class="quotelev2">&gt;&gt; * the number of elements in his arrays as a first line
</span><br>
<span class="quotelev2">&gt;&gt; * the content of his latency array as a second line
</span><br>
<span class="quotelev2">&gt;&gt; * the content of his bandwidth array as a third line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We set import() and export() callbacks with two different function
</span><br>
<span class="quotelev2">&gt;&gt; because it makes the doc much more clear and the requirements are
</span><br>
<span class="quotelev2">&gt;&gt; different (import() must be set before load(), export() must use
</span><br>
<span class="quotelev2">&gt;&gt; export_userdata()).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am satisfied with all this, I don't have any concern with the
</span><br>
<span class="quotelev2">&gt;&gt; genericity of the interface anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, I still think we should offer some optional basic encoding
</span><br>
<span class="quotelev2">&gt;&gt; capability since many users have no clue about XDR or base64. For
</span><br>
<span class="quotelev2">&gt;&gt; instance, add export_userdata_encoded() on the side of
</span><br>
<span class="quotelev2">&gt;&gt; export_userdata(). On the import side, we could let the application
</span><br>
<span class="quotelev2">&gt;&gt; decode with a dedicated hwloc function. But I think I would rather mark
</span><br>
<span class="quotelev2">&gt;&gt; the XML line as &quot;encoded&quot; so that hwloc transparently decodes before
</span><br>
<span class="quotelev2">&gt;&gt; passing the data to the import() callback.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;userdata.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3236.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Previous message:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>In reply to:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3236.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Reply:</strong> <a href="3236.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
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
