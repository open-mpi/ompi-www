<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 14:42:19 2010" -->
<!-- isoreceived="20101202194219" -->
<!-- sent="Thu, 2 Dec 2010 14:42:14 -0500" -->
<!-- isosent="20101202194214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="EC61D77C-C42E-43AD-877E-0FA733504A66_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1291306038.2480.192.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 14:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2010, at 11:07 AM, Bernd Kallies wrote:
<br>
<p><span class="quotelev1">&gt; To implement a hash there
</span><br>
<span class="quotelev1">&gt; exist two ways:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) the easy one: provide a new method like hwloc_get_obj_data(), that
</span><br>
<span class="quotelev1">&gt; gets a &quot;pointer&quot; to the C object and returns a hashref. This would be a
</span><br>
<span class="quotelev1">&gt; simple extension of my current implementation by leaving the children
</span><br>
<span class="quotelev1">&gt; and parent pointers as-is to be used in future calls.
</span><br>
<p>Do you mean that with this idea, you could do something like:
<br>
<p>my $obj = hwloc_get_...($t, ...);
<br>
my $data = hwloc_get_obj_data($obj);
<br>
print Dumper($data);
<br>
<p>$VAR = {
<br>
&nbsp;&nbsp;&nbsp;type =&gt; HWLOC_OJB_CORE,
<br>
&nbsp;&nbsp;&nbsp;os_index =&gt; 42,
<br>
&nbsp;&nbsp;&nbsp;name =&gt; 'core number 42',
<br>
&nbsp;&nbsp;&nbsp;...
<br>
};
<br>
<p>Something like that?  (I typed that in email, so it's just an approximation)  And then that would open the door to something like this:
<br>
<p>my $child_obj = $data{child}[1];
<br>
my $child_data = hwloc_get_obj_data($child_obj);
<br>
print Dumper($child_data);
<br>
<p>$VAR = {
<br>
&nbsp;&nbsp;&nbsp;type =&gt; HWLOC_OJB_PU,
<br>
&nbsp;&nbsp;&nbsp;os_index =&gt; 98,
<br>
&nbsp;&nbsp;&nbsp;name =&gt; 'PU number 98',
<br>
&nbsp;&nbsp;&nbsp;...
<br>
};
<br>
<p>Or are you saying something else?
<br>
<p><span class="quotelev1">&gt; b) the complicated one: make the perl wrapper lib object oriented. One
</span><br>
<span class="quotelev1">&gt; may translate a hwloc_obj_t struct into a perl object. This sounds
</span><br>
<span class="quotelev1">&gt; straightforward at first sight, and indeed I started with this idea. But
</span><br>
<span class="quotelev1">&gt; very soon I got stuck about what to do with the child and parent
</span><br>
<span class="quotelev1">&gt; pointers and arrays. In the OO implementation these should also be perl
</span><br>
<span class="quotelev1">&gt; objects. One ends up with representing the whole topology as perl
</span><br>
<span class="quotelev1">&gt; objects once the topo gets loaded. In addition, one has to take care
</span><br>
<span class="quotelev1">&gt; about circular references because of the perl reference counters, which
</span><br>
<span class="quotelev1">&gt; makes all this very slow and clumsy.
</span><br>
<p>Ah, yes, this is what I was thinking of.  $obj{parent} would be a pointer to the object of the parent, and $obj{children} would be an array of pointers to the children objects.  And so on.
<br>
<p>Do you have much of a feel for how slow this would make it on your machines where lstopo is already expensive?
<br>
<p><span class="quotelev1">&gt; In addition, in the OO
</span><br>
<span class="quotelev1">&gt; implementation one should do true OO, that means one should implement
</span><br>
<span class="quotelev1">&gt; object methods that access object data. The hwloc API is not of this
</span><br>
<span class="quotelev1">&gt; kind.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; These were my ideas. Comments are welcome. Note that we have very big
</span><br>
<span class="quotelev1">&gt; machines with complicated topologies. Executing lstopo (pure C API)
</span><br>
<span class="quotelev1">&gt; takes up to a second there. It made no sense to me to slow this down
</span><br>
<span class="quotelev1">&gt; more.
</span><br>
<p>Also agreed.
<br>
<p>Do you have any feel for if there are particular bottlenecks in hwloc / lstopo that make it take so long?  I wonder if we should just attack those (if possible)...?  Samuel and Brice have done all the work in the guts of the API, so they might know offhand if there are places that can be optimized or not...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1656.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
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
