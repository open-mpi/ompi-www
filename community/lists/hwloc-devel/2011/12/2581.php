<?
$subject_val = "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 17:03:06 2011" -->
<!-- isoreceived="20111208220306" -->
<!-- sent="Thu, 08 Dec 2011 23:02:59 +0100" -->
<!-- isosent="20111208220259" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="4EE13413.4020200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALNAia2qvucH8DAo6SfSyOsm_QAod_dt1A0fQ_W5gAJGCw_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 17:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>Previous message:</strong> <a href="2580.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>In reply to:</strong> <a href="2579.php">Rayson Ho: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2583.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="2583.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/12/2011 18:21, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; On Thu, Dec 8, 2011 at 11:27 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well, we didn't plan to release another 1.2.x release (the stable branch
</span><br>
<span class="quotelev2">&gt;&gt; is now 1.3). But I can provide a custom tarball of 1.2.2 + the libnuma
</span><br>
<span class="quotelev2">&gt;&gt; patch.
</span><br>
<span class="quotelev1">&gt; Oh, then don't worry about it, as I should backport the patch to 1.2.2
</span><br>
<span class="quotelev1">&gt; myself as 1.2 is not officially supported. Also, thanks a lot for the
</span><br>
<span class="quotelev1">&gt; help!
</span><br>
<p>Here's the backported patch for 1.2.2.
<br>
<p><span class="quotelev1">&gt; BTW, is there work to be done in Open MPI (like passing down
</span><br>
<span class="quotelev1">&gt; &quot;--disable-libnuma&quot; to hwloc's configure)?
</span><br>
<p>I don't see --disable-libnuma in my OMPI configure help. Does it
<br>
actually exist?
<br>
<p>Otherwise, my understanding is that these hwloc configure options will
<br>
automatically appear in OMPI configure. So it may just work out of the
<br>
box. But I may well be wrong.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2581/disable-libnuma.patch">disable-libnuma.patch</a>
</ul>
<!-- attachment="disable-libnuma.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2582.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>Previous message:</strong> <a href="2580.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4025"</a>
<li><strong>In reply to:</strong> <a href="2579.php">Rayson Ho: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2583.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="2583.php">Jeff Squyres: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
