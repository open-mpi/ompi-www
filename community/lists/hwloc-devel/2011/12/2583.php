<?
$subject_val = "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 17:14:57 2011" -->
<!-- isoreceived="20111208221457" -->
<!-- sent="Thu, 8 Dec 2011 17:14:48 -0500" -->
<!-- isosent="20111208221448" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="69DC0344-15DF-4A6D-88E4-5AAFB3424150_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE13413.4020200_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 17:14:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2584.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4027)"</a>
<li><strong>Previous message:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>In reply to:</strong> <a href="2581.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2011, at 5:02 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; BTW, is there work to be done in Open MPI (like passing down
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--disable-libnuma&quot; to hwloc's configure)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see --disable-libnuma in my OMPI configure help. Does it
</span><br>
<span class="quotelev1">&gt; actually exist?
</span><br>
<p>We *had* libnuma as a separate plugin, but hwloc has now fully replaced it.  Without checking to be sure, I'm guessing libnuma is still in 1.4.x, but not in the latest 1.5.x.
<br>
<p><span class="quotelev1">&gt; Otherwise, my understanding is that these hwloc configure options will
</span><br>
<span class="quotelev1">&gt; automatically appear in OMPI configure. So it may just work out of the
</span><br>
<span class="quotelev1">&gt; box. But I may well be wrong.
</span><br>
<p>You are correct.
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
<li><strong>Next message:</strong> <a href="2584.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4027)"</a>
<li><strong>Previous message:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>In reply to:</strong> <a href="2581.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
