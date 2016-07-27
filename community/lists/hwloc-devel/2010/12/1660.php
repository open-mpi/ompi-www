<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 16:26:08 2010" -->
<!-- isoreceived="20101202212608" -->
<!-- sent="Thu, 02 Dec 2010 22:25:44 +0100" -->
<!-- isosent="20101202212544" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="1291325144.2480.327.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="EC61D77C-C42E-43AD-877E-0FA733504A66_at_cisco.com" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 16:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1661.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1659.php">Samuel Thibault: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1663.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1663.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-12-02 at 14:42 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 2, 2010, at 11:07 AM, Bernd Kallies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To implement a hash there
</span><br>
<span class="quotelev2">&gt; &gt; exist two ways:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; a) the easy one: provide a new method like hwloc_get_obj_data(), that
</span><br>
<span class="quotelev2">&gt; &gt; gets a &quot;pointer&quot; to the C object and returns a hashref. This would be a
</span><br>
<span class="quotelev2">&gt; &gt; simple extension of my current implementation by leaving the children
</span><br>
<span class="quotelev2">&gt; &gt; and parent pointers as-is to be used in future calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean that with this idea, you could do something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my $obj = hwloc_get_...($t, ...);
</span><br>
<span class="quotelev1">&gt; my $data = hwloc_get_obj_data($obj);
</span><br>
<span class="quotelev1">&gt; print Dumper($data);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $VAR = {
</span><br>
<span class="quotelev1">&gt;    type =&gt; HWLOC_OJB_CORE,
</span><br>
<span class="quotelev1">&gt;    os_index =&gt; 42,
</span><br>
<span class="quotelev1">&gt;    name =&gt; 'core number 42',
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like that?  (I typed that in email, so it's just an approximation)  And then that would open the door to something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my $child_obj = $data{child}[1];
</span><br>
<span class="quotelev1">&gt; my $child_data = hwloc_get_obj_data($child_obj);
</span><br>
<span class="quotelev1">&gt; print Dumper($child_data);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $VAR = {
</span><br>
<span class="quotelev1">&gt;    type =&gt; HWLOC_OJB_PU,
</span><br>
<span class="quotelev1">&gt;    os_index =&gt; 98,
</span><br>
<span class="quotelev1">&gt;    name =&gt; 'PU number 98',
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or are you saying something else?
</span><br>
<p>Your understanding was right. There may be a method hwloc_get_obj_data
<br>
which returns a hasref containing (at least most of) the hwloc_obj_t
<br>
struct members in a perl representation. The hwloc_obj_t struct members
<br>
that are of type hwloc_obj_t would be still the C pointer values, which
<br>
are meaningless outside the API.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; b) the complicated one: make the perl wrapper lib object oriented. One
</span><br>
<span class="quotelev2">&gt; &gt; may translate a hwloc_obj_t struct into a perl object. This sounds
</span><br>
<span class="quotelev2">&gt; &gt; straightforward at first sight, and indeed I started with this idea. But
</span><br>
<span class="quotelev2">&gt; &gt; very soon I got stuck about what to do with the child and parent
</span><br>
<span class="quotelev2">&gt; &gt; pointers and arrays. In the OO implementation these should also be perl
</span><br>
<span class="quotelev2">&gt; &gt; objects. One ends up with representing the whole topology as perl
</span><br>
<span class="quotelev2">&gt; &gt; objects once the topo gets loaded. In addition, one has to take care
</span><br>
<span class="quotelev2">&gt; &gt; about circular references because of the perl reference counters, which
</span><br>
<span class="quotelev2">&gt; &gt; makes all this very slow and clumsy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, yes, this is what I was thinking of.  $obj{parent} would be a pointer to the object of the parent, and $obj{children} would be an array of pointers to the children objects.  And so on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have much of a feel for how slow this would make it on your machines where lstopo is already expensive?
</span><br>
<p>I tried to represent the whole topology as usual perl hashes with
<br>
references to other hashes. Then the problem is the garbage collector of
<br>
perl. You know that perl maintains reference counters for everything
<br>
that is not a scalar. It frees the memory that is allocated for an
<br>
object once its reference counter is zero. This is heavy house-keeping,
<br>
especially for the hwloc topology tree (a child object has a reference
<br>
to its ancestor, which has references to its children, and each child
<br>
has references to its neighbors, which reference their ancestor ...). I
<br>
don't remember exactly how much time it took to destroy a big topology,
<br>
when it is build up completely from perl objects, but I remember that I
<br>
throwed this away because it looked senseless to deal with this idea
<br>
further. In addition, circular references in perl have a high potential
<br>
to cause memory leaks.
<br>
<p>But probably there exists a better solution for the problem by
<br>
implementing accessor functions for the attributes of a hwloc_obj_t
<br>
object, instead of storing the attribute in a perl hash. I'll think a
<br>
bit over this. This requires a bit more knowledge about perl internals
<br>
than I currently have.
<br>
<p><span class="quotelev2">&gt; &gt; In addition, in the OO
</span><br>
<span class="quotelev2">&gt; &gt; implementation one should do true OO, that means one should implement
</span><br>
<span class="quotelev2">&gt; &gt; object methods that access object data. The hwloc API is not of this
</span><br>
<span class="quotelev2">&gt; &gt; kind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.
</span><br>
<p><span class="quotelev2">&gt; &gt; These were my ideas. Comments are welcome. Note that we have very big
</span><br>
<span class="quotelev2">&gt; &gt; machines with complicated topologies. Executing lstopo (pure C API)
</span><br>
<span class="quotelev2">&gt; &gt; takes up to a second there. It made no sense to me to slow this down
</span><br>
<span class="quotelev2">&gt; &gt; more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also agreed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any feel for if there are particular bottlenecks in hwloc / lstopo that make it take so long?  I wonder if we should just attack those (if possible)...?  Samuel and Brice have done all the work in the guts of the API, so they might know offhand if there are places that can be optimized or not...
</span><br>
<p>Hmm. I did no profiling. The machines in question have 64 NUMA nodes
<br>
with 16 logical CPUs, each. The topology depth is 10. So parsing
<br>
of /sys/devices/system/node/* and evaluating the distance matrix to
<br>
fiddle out the topology tree should be quite expensive. But I guess this
<br>
statement is trivial and does not help very much.
<br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1661.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1659.php">Samuel Thibault: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1663.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1663.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1665.php">Brice Goglin: "Re: [hwloc-devel] SWIG bindings"</a>
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
