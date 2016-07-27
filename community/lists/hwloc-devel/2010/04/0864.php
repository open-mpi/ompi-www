<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 07:14:34 2010" -->
<!-- isoreceived="20100402111434" -->
<!-- sent="Fri, 02 Apr 2010 13:14:29 +0200" -->
<!-- isosent="20100402111429" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="4BB5D195.2020109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A9BE30E-8702-433B-ABA2-75237DEBEF17_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] comments on API changes<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 07:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0865.php">Jeff Squyres: "Re: [hwloc-devel] need CONFIG_STATUS_DEPENDENCIES ?"</a>
<li><strong>Previous message:</strong> <a href="0863.php">Fawzi Mohamed: "[hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Fawzi Mohamed: "[hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0866.php">Jeff Squyres: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0866.php">Jeff Squyres: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0867.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed wrote:
<br>
<span class="quotelev1">&gt; Building tools
</span><br>
<span class="quotelev1">&gt; rather new autoconf/automake/libtool are requested
</span><br>
<span class="quotelev1">&gt; I had to install them even on new clusters, nothing terrible, but I
</span><br>
<span class="quotelev1">&gt; just noted it...
</span><br>
<p>Yes, but there are nightly snapshots in
<br>
<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/">http://www.open-mpi.org/software/hwloc/nightly/trunk/</a>
<br>
You don't need autotools there.
<br>
<p><span class="quotelev1">&gt; pages info, before there were free pages, now I suppose that the
</span><br>
<span class="quotelev1">&gt; page_types array might contain several pages, and so also the free
</span><br>
<span class="quotelev1">&gt; pages, any place to get information about the meaning of the various
</span><br>
<span class="quotelev1">&gt; page types? or is it still possible to get the free pages?
</span><br>
<p>We only had the number of free pages for huge pages if I remember
<br>
correctly. Now we're supposed to have only the total number of pages,
<br>
huge or not, not the number of free ones. But Linux only reports the
<br>
number of free huge pages so that's what we actually show there.
<br>
<p>The different page types are just (one page size + how many such pages
<br>
are available at boot). There's nothing specific about each page type
<br>
except its page size. So when you have hugepages, you have a page type
<br>
for 4kB pages, and another one for 2MB pages for instance. This was
<br>
designed to better cope with multiple page size since most modern
<br>
architectures support multiple huge page sizes. And some OS are already
<br>
able to use them. So in the end some machine may show 4 page type slots,
<br>
one for 4kB, one for 64kB, one for 2MB, one for 1GB, ...
<br>
<p><span class="quotelev1">&gt; checkout, configure -&gt; HWLOC_DEBUG 1 -&gt; very chatty
</span><br>
<span class="quotelev1">&gt; it could be that the debug is still considered the default for trunk,
</span><br>
<span class="quotelev1">&gt; but 1.0 should definitely switch it off by default...
</span><br>
<p>Debug is enabled by default when you build from a SVN checkout. I
<br>
actually never saw it since I always build outside of the source tree :)
<br>
Anyway, debug is not enabled by default in the tarballs (nightly
<br>
snapshots or actual releases) since there are no .svn directory there.
<br>
<p><span class="quotelev1">&gt; C bitfields are used, normally they are avoided because they are slow
</span><br>
<span class="quotelev1">&gt; (a compiler can bit or at compile time the constants and check/set
</span><br>
<span class="quotelev1">&gt; several at once.
</span><br>
<span class="quotelev1">&gt; Speed is not a concern here, but in any case I am wrapping to D that
</span><br>
<span class="quotelev1">&gt; does not support bitfields directly, so I used flags, I was just
</span><br>
<span class="quotelev1">&gt; wondering why bitfields were used...
</span><br>
<p>Which bitfields are you concerned about?
<br>
<p>Topology flags shouldn't be performance critical. Binding could be a bit
<br>
more performance critical, but I suspect that even a slow compiler will
<br>
generate code that's faster at parsing binding bitfields than the actual
<br>
binding system call.
<br>
<p><span class="quotelev1">&gt; HWLOC_OBJ_SYSTEM seems on the way out
</span><br>
<span class="quotelev1">&gt; I treated it just as a MACHINE anyway, but I wonder, as the constant
</span><br>
<span class="quotelev1">&gt; is still there, does it have special attributes?, has it machine
</span><br>
<span class="quotelev1">&gt; attributes? the documentation could be clearer...
</span><br>
<p>This behavior changes completely in 1.0. SYSTEM will only be used when
<br>
assembling multiple independent machines, for instance with kerrighed,
<br>
or maybe for network topologies. MACHINE is always used now, and SYSTEM
<br>
should be very rare.
<br>
<p>SYSTEM doesn't have any specific attribute, but it may have the
<br>
obj-&gt;name field set to != NULL so as to tell you what kind of
<br>
multiple-machine-assembly we're talking about.
<br>
<p>We're slowly trying to move out of the type-specific attributes as much
<br>
as possible. In 1.1, we'll probably have an array of strings to contain
<br>
custom attributes such as machine name, model, system, ...
<br>
<p><span class="quotelev1">&gt; I am looking forward to 1.0 ...
</span><br>
<p>Me too, it's been way too long already :) We moved some features out of
<br>
1.0 back to 1.1 (memory binding for instance) because we wanted 1.0
<br>
early. We would probably have had time top implement them twice in the
<br>
meantime ;)
<br>
<p><p>Could you point me at some precise documentation that is unclear or
<br>
missing so that I try to improve them before the 1.0 final release arrives?
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0865.php">Jeff Squyres: "Re: [hwloc-devel] need CONFIG_STATUS_DEPENDENCIES ?"</a>
<li><strong>Previous message:</strong> <a href="0863.php">Fawzi Mohamed: "[hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Fawzi Mohamed: "[hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0866.php">Jeff Squyres: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0866.php">Jeff Squyres: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0867.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
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
