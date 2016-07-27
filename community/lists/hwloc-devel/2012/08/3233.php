<?
$subject_val = "[hwloc-devel] userdata import/export";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 26 05:53:08 2012" -->
<!-- isoreceived="20120826095308" -->
<!-- sent="Sun, 26 Aug 2012 11:52:43 +0200" -->
<!-- isosent="20120826095243" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] userdata import/export" -->
<!-- id="5039F1EB.4060007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2AE9724E-CDBC-452C-A36E-B2A09B23F436_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] userdata import/export<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-26 05:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Previous message:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Reply:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(breaking the thread since we're far from valarrays now).
<br>
<p>I've played with this idea and came with the attached interface change.
<br>
Aside from low-level backend changes, everything was very easy to implement.
<br>
<p>Let's take an example. I modified lstopo to add some userdata to the
<br>
root object and define the following export callback:
<br>
<p>static void export(void *reserved, hwloc_topology_t topo, hwloc_obj_t obj)
<br>
{
<br>
&nbsp;&nbsp;/* we export random stuff instead of the actual userdata content */
<br>
&nbsp;&nbsp;hwloc_export_obj_userdata(reserved, topo, obj, NULL, &quot;coincoin&quot;, 8); /* no name */
<br>
&nbsp;&nbsp;hwloc_export_obj_userdata(reserved, topo, obj, &quot;MyName&quot;, &quot;foobar&quot;, 6);
<br>
&nbsp;&nbsp;hwloc_export_obj_userdata(reserved, topo, obj, &quot;MyValue&quot;, &quot;foobarbarbar&quot;, 10); /* truncated to 10 chars */
<br>
}
<br>
<p><p>This callback is only called for the root object since others have
<br>
userdata=NULL. It exports three lines to XML:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;userdata length=&quot;8&quot;&gt;coincoin&lt;/userdata&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;userdata name=&quot;MyName&quot; length=&quot;6&quot;&gt;foobar&lt;/userdata&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;userdata name=&quot;MyValue&quot; length=&quot;10&quot;&gt;foobarbarb&lt;/userdata&gt;
<br>
<p><p>The idea behind multiple userdata lines per object is that it helps the
<br>
application structure its userdata without having to create a single
<br>
contigous buffer.
<br>
<p>When you import this with an import() callback, you get three
<br>
invocations of the callback:
<br>
<p>##### name (null) value coincoin length 8
<br>
##### name MyName value foobar length 6
<br>
##### name MyValue value foobarbarb length 10
<br>
<p><p>The optional &quot;name&quot; attribute lets the application recognize things (but
<br>
they always looked in-order in my testing).
<br>
<p>My user that wants valarrays would likely export:
<br>
* the number of elements in his arrays as a first line
<br>
* the content of his latency array as a second line
<br>
* the content of his bandwidth array as a third line
<br>
<p>We set import() and export() callbacks with two different function
<br>
because it makes the doc much more clear and the requirements are
<br>
different (import() must be set before load(), export() must use
<br>
export_userdata()).
<br>
<p>I am satisfied with all this, I don't have any concern with the
<br>
genericity of the interface anymore.
<br>
<p><p>Now, I still think we should offer some optional basic encoding
<br>
capability since many users have no clue about XDR or base64. For
<br>
instance, add export_userdata_encoded() on the side of
<br>
export_userdata(). On the import side, we could let the application
<br>
decode with a dedicated hwloc function. But I think I would rather mark
<br>
the XML line as &quot;encoded&quot; so that hwloc transparently decodes before
<br>
passing the data to the import() callback.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3233/userdata.patch">userdata.patch</a>
</ul>
<!-- attachment="userdata.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Previous message:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
<li><strong>Reply:</strong> <a href="3234.php">Jeff Squyres: "Re: [hwloc-devel] userdata import/export"</a>
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
