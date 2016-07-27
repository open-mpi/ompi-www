<?
$subject_val = "Re: [hwloc-devel] hwloc testing review";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 16:02:59 2012" -->
<!-- isoreceived="20121106210259" -->
<!-- sent="Tue, 06 Nov 2012 22:02:52 +0100" -->
<!-- isosent="20121106210252" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc testing review" -->
<!-- id="50997AFC.7070107_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509977AA.3080808_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc testing review<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 16:02:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3374.php">Guy Streeter: "[hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3372.php">John Brier: "[hwloc-devel] hwloc testing review"</a>
<li><strong>In reply to:</strong> <a href="3372.php">John Brier: "[hwloc-devel] hwloc testing review"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/11/2012 21:48, John Brier a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi folks. I've been using Linux since 2000 and supporting it with Red
</span><br>
<span class="quotelev1">&gt; Hat since 2007 and now I'm a Red Hat Quality Assurance Engineer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At Red Hat we use the 'make check' build target to test hwloc. I did a
</span><br>
<span class="quotelev1">&gt; review of what that target tests and what it doesn't and this is what I
</span><br>
<span class="quotelev1">&gt; found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did I miss anything?
</span><br>
<span class="quotelev1">&gt; Are there are additional things that should be tested?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the binaries it would be useful for Red Hat (and maybe others) if we
</span><br>
<span class="quotelev1">&gt; could use the existing 'make check' build target to test *system
</span><br>
<span class="quotelev1">&gt; installed* binaries (aka the ones from our RPM) and not the source
</span><br>
<span class="quotelev1">&gt; distributed built ones. Does that seem like a feature that would be
</span><br>
<span class="quotelev1">&gt; useful for others and is it possible to add that support to the
</span><br>
<span class="quotelev1">&gt; associated autotools files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; note the comments about untested binaries below
</span><br>
<p>Hello John,
<br>
<p>Your list is basically OK.
<br>
Some comments below.
<br>
<p><span class="quotelev1">&gt; [ ] hwloc-bind
</span><br>
<span class="quotelev1">&gt;    - not tested. This seems important enough to test.
</span><br>
<p>Basic testing is easy, but it becomes annoying when you want to test
<br>
things that may not be supported by the OS. Testing CPU binding on Linux
<br>
should be easy. Memory binding too if you check whether the machine is
<br>
NUMA first.
<br>
<p><span class="quotelev1">&gt; [ ] hwloc-ps
</span><br>
<span class="quotelev1">&gt;    - isn't tested and that seems like it would be easy to test. I would
</span><br>
<span class="quotelev1">&gt;      be willing to take a stab at adding that support if that is
</span><br>
<span class="quotelev1">&gt;      acceptable.
</span><br>
<p>This one also has some Linux specific behavior. I'd be interested to see
<br>
if you can get something to work.
<br>
<p><span class="quotelev1">&gt; [x] lstopo
</span><br>
<span class="quotelev1">&gt;    - tested by utils/hwloc-ls.sh
</span><br>
<span class="quotelev1">&gt; [x] lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt;    - tested by utils/hwloc-ls.sh
</span><br>
<p>These are actually very basically tested. We store most lstopo output to
<br>
a file but we don't check its content at all. Obviously, the output
<br>
depends on the machine, so in-depth testing isn't easy. But right now,
<br>
we somehow just check sure they don't crash.
<br>
<p><span class="quotelev1">&gt; = tests/linux/test-topology.sh =
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;This directory contains tarballs of Linux sysfs hierarchies collected on
</span><br>
<p>sysfs + some files from /proc and /proc/device-tree when it matters.
<br>
<p><span class="quotelev1">&gt; various systems.  Each tarball `xyz.tar.bz2' comes with the corresponding
</span><br>
<span class="quotelev1">&gt; `xyz.output', which gives the expected output of &quot;lstopo -v -&quot; for that
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<p>There are also several cases where we add some options to lstopo to
<br>
change its behavior, output to XML, ...
<br>
<p><span class="quotelev1">&gt; = doc/hwloc-hello =
</span><br>
<span class="quotelev1">&gt;    - hwloc-hello is the binary of hwloc-hello.c
</span><br>
<span class="quotelev1">&gt;    - hwloc-hello-cpp is the binary of the hwloc-hello-cpp.cpp source
</span><br>
<span class="quotelev1">&gt;      program
</span><br>
<span class="quotelev1">&gt;    - hwloc-hello.c and hwloc-hello-cpp.cpp contain the same C source
</span><br>
<span class="quotelev1">&gt;      code and are a demonstration of the hwloc C API which is described
</span><br>
<span class="quotelev1">&gt;      in the docs
</span><br>
<span class="quotelev1">&gt;    - for testing, the code is compiled and executed
</span><br>
<p>The CPP is only here to make sure that the hwloc C API is C++-acceptable.
<br>
<p><span class="quotelev1">&gt; = tests/Makefile check_PROGRAMS =
</span><br>
<span class="quotelev1">&gt;    - the following C programs test various functions of the C API
</span><br>
<p>All these files are supposed to have header comments saying what they
<br>
test, but I  wouldn't be surprised if some of those are
<br>
outdated/incomplete. At least, they shouldn't test less than what is said.
<br>
<p><span class="quotelev1">&gt;     hwloc_bind.c
</span><br>
<span class="quotelev1">&gt;         check the binding functions
</span><br>
<p>And compare with what the &quot;support&quot; bitmap says about what hwloc
<br>
supports on this platform.
<br>
<p><span class="quotelev1">&gt;     xmlbuffer.c
</span><br>
<span class="quotelev1">&gt;         test hwloc_topology_export_xmlbuffer() and ??
</span><br>
<p>And set_xmlbuffer() for reimporting what we exported.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3374.php">Guy Streeter: "[hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>Previous message:</strong> <a href="3372.php">John Brier: "[hwloc-devel] hwloc testing review"</a>
<li><strong>In reply to:</strong> <a href="3372.php">John Brier: "[hwloc-devel] hwloc testing review"</a>
<!-- nextthread="start" -->
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
