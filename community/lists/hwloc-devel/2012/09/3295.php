<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 03:49:50 2012" -->
<!-- isoreceived="20120925074950" -->
<!-- sent="Tue, 25 Sep 2012 09:49:44 +0200" -->
<!-- isosent="20120925074944" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120925074944.GE6096_at_type.oeaw.ads" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50615CC2.30508_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging plugins?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 03:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 25 Sep 2012 09:27:23 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; On most OS, we already have multiple &quot;core os&quot; components, one native
</span><br>
<span class="quotelev1">&gt; (linux, ...) with priority 10 and the &quot;noos&quot; one with priority 0. If
</span><br>
<span class="quotelev1">&gt; nothing forces a specific component in the list (no env variable, no
</span><br>
<span class="quotelev1">&gt; set_xml, ...), we instantiate the first one (higher priority), which is
</span><br>
<span class="quotelev1">&gt; the native component when it exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is &quot;loaded&quot; and added to some list. Only one is enabled in
</span><br>
<span class="quotelev1">&gt; the core os list. All are enabled in the additional list (except if some
</span><br>
<span class="quotelev1">&gt; flag in the core os component disables things, that's what XML/synthetic
</span><br>
<span class="quotelev1">&gt; do to disable PCI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pci (additional list) is always loaded, and it gets enabled except if
</span><br>
<span class="quotelev1">&gt; XML/synthetic set a flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linuxx86 (os list) only gets enabled if first in the list (priority) or
</span><br>
<span class="quotelev1">&gt; an env var forces it.
</span><br>
<p>Well, I guess all of this should go into the documentation, otherwise
<br>
it's difficult to get an idea of what plugin gets loaded.
<br>
<p>One thing which can be confusing for the user is that core_linux goes
<br>
to the core os list while core_libpci goes to the additional list.  It
<br>
would probably be better to use a different class name. I actually don't
<br>
currently understand what classes are used for.
<br>
<p><span class="quotelev2">&gt; &gt; Also, I guess that we probably want that some plugins be enabled by
</span><br>
<span class="quotelev2">&gt; &gt; default if they are found (because they add useful information but
</span><br>
<span class="quotelev2">&gt; &gt; depend on an external dep), and that some others are not enabled by
</span><br>
<span class="quotelev2">&gt; &gt; default (because they add information, but e.g. to the expense of
</span><br>
<span class="quotelev2">&gt; &gt; computation time, due to e.g. measurements etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have no way to force disable one specific additional component.
</span><br>
<span class="quotelev1">&gt; Could be a &quot;expensive&quot; flag or &quot;cost&quot; in the component struct with a env
</span><br>
<span class="quotelev1">&gt; var.
</span><br>
<p>&quot;expensive&quot; was just an example of what makes loading it by default a
<br>
bad idea. We can't invent a thorough list of such things, so I'd say
<br>
plugins could rather just enable a &quot;default_load&quot; flag or not.
<br>
<p><span class="quotelev1">&gt; And a syntax such as pci,^servet to select manually.
</span><br>
<p>Why a ^?
<br>
<p><span class="quotelev2">&gt; &gt; It could also be to use another PCI detection plugin that libpci.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, two good reason to let us change the list the additional components.
</span><br>
<span class="quotelev1">&gt; Do we want to specifiy the &quot;core OS&quot; component and the &quot;core additional&quot;
</span><br>
<span class="quotelev1">&gt; list in the same env var?
</span><br>
<p>It would make it clear that they are different things, but see below.
<br>
<p><span class="quotelev1">&gt; There's currently no way to prevent two PCI backends to be used
</span><br>
<span class="quotelev1">&gt; simultaneously. Might use another flag so that only the first one
</span><br>
<span class="quotelev1">&gt; (libpci) or a specific one (env var) is enabled.
</span><br>
<p>Well, perhaps we should rather define well-known names which act as
<br>
exclusion points and document them. I.e. what is currently called
<br>
&quot;core os&quot; should perhaps actually be an &quot;os&quot; exclusion point, while
<br>
core_libpci would use the &quot;pci&quot; exclusion point, and another pci
<br>
detection plugin would use the same exclusion point. Priorities can then
<br>
be used among plugins of the same exclusion point to sort out which one
<br>
should be used.
<br>
<p>Actually, the current core os plugins should perhaps be split into a
<br>
&quot;bind&quot; exclusion point and a &quot;cpu&quot; exclusion point. One issue I had with
<br>
linuxx86 is that I need the part that provides binding functions, but
<br>
not the part which provides the cpu detection. And it will be the same
<br>
in other OSes. Also, loading another plugin for &quot;bind&quot; operations can
<br>
make sense.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
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
