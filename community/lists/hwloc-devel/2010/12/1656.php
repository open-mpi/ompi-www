<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 11:08:12 2010" -->
<!-- isoreceived="20101202160812" -->
<!-- sent="Thu, 02 Dec 2010 17:07:18 +0100" -->
<!-- isosent="20101202160718" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="1291306038.2480.192.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="72A81386-8444-409F-89BC-C422541CD496_at_cisco.com" -->
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
<strong>Date:</strong> 2010-12-02 11:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-12-02 at 10:28 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This looks great!  Probably much better than SWIG-based bindings that I would have come up with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One question: is there any value in having the $topology be a hash of public values instead of using the hwloc_get_obj_data() method?  I ask because in all the perl scripty-foo that I've written that parses &quot;lstopo -.xml&quot;, having the entire data structure available as a big hash has turned out to be quite useful, particularly on some heterogeneous development machines where the hwloc accessor functions can be misleading, or may require more logic than just trawling the data tree directly.
</span><br>
<p>I had to write this wrapper in two days because we needed this quickly
<br>
to handle our new SGI UltraViolet Machines (1024 logical cores per rack
<br>
with several levels of NUMA).
<br>
<p>However, I thought about providing the members of the hwloc_obj_t struct
<br>
all at once in a hashref, but it turned out that this is not so easy
<br>
because of the pointer interface of hwloc. To implement a hash there
<br>
exist two ways:
<br>
<p>a) the easy one: provide a new method like hwloc_get_obj_data(), that
<br>
gets a &quot;pointer&quot; to the C object and returns a hashref. This would be a
<br>
simple extension of my current implementation by leaving the children
<br>
and parent pointers as-is to be used in future calls.
<br>
<p>b) the complicated one: make the perl wrapper lib object oriented. One
<br>
may translate a hwloc_obj_t struct into a perl object. This sounds
<br>
straightforward at first sight, and indeed I started with this idea. But
<br>
very soon I got stuck about what to do with the child and parent
<br>
pointers and arrays. In the OO implementation these should also be perl
<br>
objects. One ends up with representing the whole topology as perl
<br>
objects once the topo gets loaded. In addition, one has to take care
<br>
about circular references because of the perl reference counters, which
<br>
makes all this very slow and clumsy. In addition, in the OO
<br>
implementation one should do true OO, that means one should implement
<br>
object methods that access object data. The hwloc API is not of this
<br>
kind.
<br>
<p>These were my ideas. Comments are welcome. Note that we have very big
<br>
machines with complicated topologies. Executing lstopo (pure C API)
<br>
takes up to a second there. It made no sense to me to slow this down
<br>
more.
<br>
<p>Cheers BK
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2010, at 4:25 AM, Bernd Kallies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a perl-wrapper lib for hwloc based on hwloc-1.0.2. It is written
</span><br>
<span class="quotelev2">&gt; &gt; manually because of the pointer things. However, the lib is not
</span><br>
<span class="quotelev2">&gt; &gt; complete. I use it mainly for discovering topologies. Supporting pinning
</span><br>
<span class="quotelev2">&gt; &gt; does not make sense for perl scripts to my opinion
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm thinking about either submitting this to CPAN or to the hwloc dev
</span><br>
<span class="quotelev2">&gt; &gt; team. However, I first wanted to wait how things with hwloc 1.1 will
</span><br>
<span class="quotelev2">&gt; &gt; look, when the dust has settled somehow.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any hints or ideas?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Attached you find the man page.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2010-11-30 at 11:07 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Would anyone object if I take a whack at making some SWIG bindings for hwloc?  I'm thinking specifically for perl (because that's my scripting language of choice), but I could probably be convinced to look at python as well.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (this would be for 1.2 at the earliest -- definitely not for 1.1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Dr. Bernd Kallies
</span><br>
<span class="quotelev2">&gt; &gt; Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
</span><br>
<span class="quotelev2">&gt; &gt; Takustr. 7
</span><br>
<span class="quotelev2">&gt; &gt; 14195 Berlin
</span><br>
<span class="quotelev2">&gt; &gt; Tel: +49-30-84185-270
</span><br>
<span class="quotelev2">&gt; &gt; Fax: +49-30-84185-311
</span><br>
<span class="quotelev2">&gt; &gt; e-mail: kallies_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Hwloc.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<li><strong>Next message:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1655.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1657.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
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
