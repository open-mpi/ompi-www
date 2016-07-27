<?
$subject_val = "Re: [hwloc-devel] upcoming hwloc v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 14:35:06 2013" -->
<!-- isoreceived="20130322183506" -->
<!-- sent="Fri, 22 Mar 2013 19:35:01 +0100" -->
<!-- isosent="20130322183501" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming hwloc v1.7" -->
<!-- id="20130322183501.GH6125_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51391BAB.2010905_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming hwloc v1.7<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 14:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3591.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5501)"</a>
<li><strong>Previous message:</strong> <a href="3589.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.3rc1r5468)"</a>
<li><strong>In reply to:</strong> <a href="3581.php">Brice Goglin: "[hwloc-devel] upcoming hwloc v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3593.php">Brice Goglin: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<li><strong>Reply:</strong> <a href="3593.php">Brice Goglin: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 07 Mar 2013 23:59:54 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; We have a specific ABI field in the main component structure
</span><br>
<span class="quotelev1">&gt; (hwloc_component) to avoid problems in case we break this new ABI.
</span><br>
<span class="quotelev1">&gt; Breaking it isn't as bad as breaking the main hwloc ABI, but it'd still
</span><br>
<span class="quotelev1">&gt; be good to not break it in every major release anyway. If you see
</span><br>
<span class="quotelev1">&gt; anything to change to make things more future-proof, let me know, I'd
</span><br>
<span class="quotelev1">&gt; rather change it before v1.7.
</span><br>
<p>I'm wondering about the hwloc_disc_component_type_e values and excludes.
<br>
AIUI, GLOBAL is supposed to exclude anything else, while CPU excludes
<br>
with other CPUs, and ADDITIONAL isn't supposed to exclude with anything
<br>
except GLOBAL.  I hope I have made it clearer in the documentation.
<br>
BTW, it seems we're not supposed to set multiple types in the type
<br>
field; that might be a concern, I'd tend to see the type field as an OR
<br>
of types.
<br>
<p>I'm wondering whether these rules &quot;you should always set GLOBAL in
<br>
excludes&quot;, and &quot;GLOBAL should always set all types&quot; are really nice.
<br>
For instance, some component built against 1.7 will not include flags
<br>
that we will introduce in 1.8, etc.
<br>
<p>So I'd say that GLOBAL should rather be special-cased, by making it ~0,
<br>
as for now it's a bit confusing that it looks like CPU.  ADDITIONAL
<br>
could be renamed MISC, meaning that it's something that another
<br>
component should not have to care about. We can for instance document
<br>
that it does not make sense to exclude MISC, unless through GLOBAL.
<br>
<p>I'm wondering whether we should already introduce various types for the
<br>
various additional plugins we already have: OpenCL, PCI, nvml, gl, cuda.
<br>
I'd tend to reckon it makes sense to, so that third-party can already
<br>
exclude them from their plugins, if they ever need to (better provide
<br>
the feature than wait for people to ask for it next century).
<br>
<p>About extensibility in general, the abi field will indeed allow us to be
<br>
able to introduce e.g. other callbacks.
<br>
<p>BTW, is there really a reason for making the next field last in the
<br>
structure?  When we'll add other fields, it'll look odd being in the
<br>
middle of the structure. Perhaps it's the methods which should go last,
<br>
as we'll probably introduce methods in the future?
<br>
<p>Also, shouldn't we already bump the COMPONENT_ABI on 1.7 release?
<br>
Perhaps it should be put along others in VERSION, so we easily take the
<br>
same care as the soname?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3591.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5501)"</a>
<li><strong>Previous message:</strong> <a href="3589.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.3rc1r5468)"</a>
<li><strong>In reply to:</strong> <a href="3581.php">Brice Goglin: "[hwloc-devel] upcoming hwloc v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3593.php">Brice Goglin: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
<li><strong>Reply:</strong> <a href="3593.php">Brice Goglin: "Re: [hwloc-devel] upcoming hwloc v1.7"</a>
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
