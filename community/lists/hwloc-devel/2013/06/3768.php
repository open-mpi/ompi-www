<?
$subject_val = "[hwloc-devel] plugins inside plugin broken, as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 04:45:53 2013" -->
<!-- isoreceived="20130603084553" -->
<!-- sent="Mon, 03 Jun 2013 10:45:47 +0200" -->
<!-- isosent="20130603084547" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] plugins inside plugin broken, as expected" -->
<!-- id="51AC57BB.5020009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] plugins inside plugin broken, as expected<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-03 04:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3767.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5657)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Reply:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I recently got the first report of what we knew would happen one day or
<br>
another: plugin namespace issues caused by somebody loading a
<br>
plugin-enabled hwloc as a plugin. It comes from OpenCL (which uses
<br>
plugins to select implementations) because one implementation depends on
<br>
hwloc. What happens is that hwloc fails to load its plugins because they
<br>
need some functions from the hwloc core, but they cannot find them
<br>
because hwloc was loaded in a private namespace within a OpenCL plugin.
<br>
<p>What's annoying is that the program completely seems to load plugins
<br>
fine but later aborts at use-time because of the missing symbol (and
<br>
there's no portable/easy way to force load-time lookup from what I see
<br>
in the ltdl documentation).
<br>
<p>One easy workaround is to set HWLOC_PLUGINS_PATH=/none in the
<br>
environment, so that no hwloc plugin is found. But this may remove some
<br>
features.
<br>
<p>The proper fix for now is to rebuild hwloc without plugins. So we don't
<br>
have to hurry and fix this for v1.7.2, but we can still look at it for v1.8.
<br>
<p>Two solutions were envisioned earlier:
<br>
* Have hwloc plugins depend on libhwloc. Jeff didn't like it because it
<br>
will cause multiple instances of libhwloc to be loaded, which will break
<br>
if we have internal/global state in libhwloc. I think we actually have
<br>
no such internal state, but this way may still be dangerous.
<br>
* Have the core tell plugins where core symbols are. Basically means
<br>
doing our own symbol lookup manually. Possible issues:
<br>
&nbsp;&nbsp;+ We have maaaaaaany symbols, it's not easy to define which ones are
<br>
available to plugins and which ones are not. Quick look [1].
<br>
&nbsp;&nbsp;+ Plugins won't be able to call hwloc functions directly anymore, and
<br>
they won't be able to use inline helpers anymore (since those often call
<br>
hwloc core functions explicitly).
<br>
&nbsp;&nbsp;+ Need to implement that without causing future ABI breaks when
<br>
extending to API that is available to plugins. Maybe have plugins pass
<br>
an array of strings listing which symbols they need.
<br>
<p>Other ideas?
<br>
<p>Brice
<br>
<p><p>[1] Review of public symbols:
<br>
<p>Things that shouldn't be available to plugins:
<br>
* init/load/destroy
<br>
* topology_set_*() topology_ignore_*() topology_restrict()
<br>
* XML export/import
<br>
* cpubind/membind/last_cpu_location (as well alloc/free)
<br>
* custom_insert_*
<br>
<p>Things that should be available:
<br>
* hwloc/plugins.h
<br>
* other insert() functions (not sure)
<br>
* most of our get() functions
<br>
* most stringification functions
<br>
* minor other things
<br>
(about 30 total)
<br>
<p>hwloc/bitmap.h is the biggest problem, plugins should be allowed to use
<br>
all of them but there are maaaaany of them. Splitting hwloc-bitmap.so
<br>
out of hwloc.so would be an easy way to solve this. The bitmap API is
<br>
totally independent from the hwloc core anyway.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/05/3767.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5657)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Reply:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
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
