<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 08:38:32 2010" -->
<!-- isoreceived="20100402123832" -->
<!-- sent="Fri, 2 Apr 2010 14:38:26 +0200" -->
<!-- isosent="20100402123826" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="BE52FB14-1808-4F97-8014-D26FC8DDBC2C_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BB5D195.2020109_at_inria.fr" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 08:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0866.php">Jeff Squyres: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2-apr-10, at 13:14, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Building tools
</span><br>
<span class="quotelev2">&gt;&gt; rather new autoconf/automake/libtool are requested
</span><br>
<span class="quotelev2">&gt;&gt; I had to install them even on new clusters, nothing terrible, but I
</span><br>
<span class="quotelev2">&gt;&gt; just noted it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but there are nightly snapshots in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/">http://www.open-mpi.org/software/hwloc/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt; You don't need autotools there.
</span><br>
<p>ok good to know, but I like svn... especially before the release...
<br>
<p><span class="quotelev2">&gt;&gt; pages info, before there were free pages, now I suppose that the
</span><br>
<span class="quotelev2">&gt;&gt; page_types array might contain several pages, and so also the free
</span><br>
<span class="quotelev2">&gt;&gt; pages, any place to get information about the meaning of the various
</span><br>
<span class="quotelev2">&gt;&gt; page types? or is it still possible to get the free pages?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We only had the number of free pages for huge pages if I remember
</span><br>
<span class="quotelev1">&gt; correctly. Now we're supposed to have only the total number of pages,
</span><br>
<span class="quotelev1">&gt; huge or not, not the number of free ones. But Linux only reports the
</span><br>
<span class="quotelev1">&gt; number of free huge pages so that's what we actually show there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The different page types are just (one page size + how many such pages
</span><br>
<span class="quotelev1">&gt; are available at boot). There's nothing specific about each page type
</span><br>
<span class="quotelev1">&gt; except its page size. So when you have hugepages, you have a page type
</span><br>
<span class="quotelev1">&gt; for 4kB pages, and another one for 2MB pages for instance. This was
</span><br>
<span class="quotelev1">&gt; designed to better cope with multiple page size since most modern
</span><br>
<span class="quotelev1">&gt; architectures support multiple huge page sizes. And some OS are  
</span><br>
<span class="quotelev1">&gt; already
</span><br>
<span class="quotelev1">&gt; able to use them. So in the end some machine may show 4 page type  
</span><br>
<span class="quotelev1">&gt; slots,
</span><br>
<span class="quotelev1">&gt; one for 4kB, one for 64kB, one for 2MB, one for 1GB, ...
</span><br>
<p>ok makes sense, so that one-off scan is enough, a pity I liked having  
<br>
free huge_pages (not that I really used that), and yes I realize that  
<br>
even then it was not updated.
<br>
<p><span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; C bitfields are used, normally they are avoided because they are slow
</span><br>
<span class="quotelev2">&gt;&gt; (a compiler can bit or at compile time the constants and check/set
</span><br>
<span class="quotelev2">&gt;&gt; several at once.
</span><br>
<span class="quotelev2">&gt;&gt; Speed is not a concern here, but in any case I am wrapping to D that
</span><br>
<span class="quotelev2">&gt;&gt; does not support bitfields directly, so I used flags, I was just
</span><br>
<span class="quotelev2">&gt;&gt; wondering why bitfields were used...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which bitfields are you concerned about?
</span><br>
<p>well not really concerned, but I was talking about
<br>
hw_topology_support where instead of enum with flags a C bitfield  
<br>
struct is used...
<br>
<p><p><span class="quotelev1">&gt; Topology flags shouldn't be performance critical. Binding could be a  
</span><br>
<span class="quotelev1">&gt; bit
</span><br>
<span class="quotelev1">&gt; more performance critical, but I suspect that even a slow compiler  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; generate code that's faster at parsing binding bitfields than the  
</span><br>
<span class="quotelev1">&gt; actual
</span><br>
<span class="quotelev1">&gt; binding system call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_OBJ_SYSTEM seems on the way out
</span><br>
<span class="quotelev2">&gt;&gt; I treated it just as a MACHINE anyway, but I wonder, as the constant
</span><br>
<span class="quotelev2">&gt;&gt; is still there, does it have special attributes?, has it machine
</span><br>
<span class="quotelev2">&gt;&gt; attributes? the documentation could be clearer...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This behavior changes completely in 1.0. SYSTEM will only be used when
</span><br>
<span class="quotelev1">&gt; assembling multiple independent machines, for instance with kerrighed,
</span><br>
<span class="quotelev1">&gt; or maybe for network topologies. MACHINE is always used now, and  
</span><br>
<span class="quotelev1">&gt; SYSTEM
</span><br>
<span class="quotelev1">&gt; should be very rare.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SYSTEM doesn't have any specific attribute, but it may have the
</span><br>
<span class="quotelev1">&gt; obj-&gt;name field set to != NULL so as to tell you what kind of
</span><br>
<span class="quotelev1">&gt; multiple-machine-assembly we're talking about.
</span><br>
<p>ok now it is clear
<br>
<p><span class="quotelev1">&gt; We're slowly trying to move out of the type-specific attributes as  
</span><br>
<span class="quotelev1">&gt; much
</span><br>
<span class="quotelev1">&gt; as possible. In 1.1, we'll probably have an array of strings to  
</span><br>
<span class="quotelev1">&gt; contain
</span><br>
<span class="quotelev1">&gt; custom attributes such as machine name, model, system, ...
</span><br>
<p>good, yes one has always to strike a balance between uniformity/speed,  
<br>
and flexibility, for things like names,... a generic attribute system  
<br>
is probably the best choice
<br>
<p><span class="quotelev2">&gt;&gt; I am looking forward to 1.0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Me too, it's been way too long already :) We moved some features out  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; 1.0 back to 1.1 (memory binding for instance) because we wanted 1.0
</span><br>
<span class="quotelev1">&gt; early. We would probably have had time top implement them twice in the
</span><br>
<span class="quotelev1">&gt; meantime ;)
</span><br>
<p>still it is the best lib that I found to detect the structure of a  
<br>
machine and then bind to it in a cross platform way.
<br>
<p>I would take advantage more info about the possible numa node  
<br>
connectivity (to know where to steal tasks), but I don't have access  
<br>
to machines that would really take advantage of that, and probably  
<br>
even then using the HW structure as topology would not bad.
<br>
<p><span class="quotelev1">&gt; Could you point me at some precise documentation that is unclear or
</span><br>
<span class="quotelev1">&gt; missing so that I try to improve them before the 1.0 final release  
</span><br>
<span class="quotelev1">&gt; arrives?
</span><br>
<p>I will try to look at what can be improved later...
<br>
<p><span class="quotelev1">&gt; thanks,
</span><br>
<p>no thank you for the quick and extensive answers...
<br>
<p>ciao
<br>
Fawzi
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0866.php">Jeff Squyres: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0864.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0868.php">Brice Goglin: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
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
