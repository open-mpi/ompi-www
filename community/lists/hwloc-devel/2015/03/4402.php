<?
$subject_val = "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  7 12:53:56 2015" -->
<!-- isoreceived="20150307175356" -->
<!-- sent="Sat, 07 Mar 2015 18:53:55 +0100" -->
<!-- isosent="20150307175355" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?" -->
<!-- id="54FB3B33.1030604_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEcYPwDQsRAX04K=7J+t8bo1Pt4OE-GqawgNyGBn=DzXKpqzSA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-07 12:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4403.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-459-g4208a31)"</a>
<li><strong>Previous message:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Maybe in reply to:</strong> <a href="4400.php">Balaji, Pavan: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/03/2015 12:13, Lisandro Dalcin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; OK, I finally figured out what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently upgraded to Mac OS X Yosemite, and I did not install the
</span><br>
<span class="quotelev1">&gt; Xcode command line tools. My /usr/include directory was missing,
</span><br>
<span class="quotelev1">&gt; however I had /usr/bin/clang (not sure wether it is there because of
</span><br>
<span class="quotelev1">&gt; the default Xcode install, or it was a leftover of my previous OS X
</span><br>
<span class="quotelev1">&gt; system). I also had pkg-config installed trough Homebrew, and
</span><br>
<span class="quotelev1">&gt; &quot;pkg-config --cflags libxml-2.0&quot; prints &quot;-I/usr/include/libxml2&quot;,
</span><br>
<span class="quotelev1">&gt; however remember I did not have &quot;/usr/include&quot;. Do this pkg-config
</span><br>
<span class="quotelev1">&gt; install is assuming /usr/include do exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thing is that MPICH is able to build fine (and in fact, many other
</span><br>
<span class="quotelev1">&gt; software packages) as long as you pass --disable-libxml2 to workaround
</span><br>
<span class="quotelev1">&gt; the hwloc issue. But after spending some time looking at hwloc build
</span><br>
<span class="quotelev1">&gt; system, I realized the dependence on pkg-config to look for libxml2,
</span><br>
<span class="quotelev1">&gt; and then there is no easy workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I've installed the Xcode command line tools (with
</span><br>
<span class="quotelev1">&gt; &quot;xcode-select --install&quot;) and MPICH + embed hwloc built just fine. Now
</span><br>
<span class="quotelev1">&gt; I had the cmd line tools in my system, but it makes sense anyway,
</span><br>
<span class="quotelev1">&gt; after all I use it everyday for development and the lack of it will
</span><br>
<span class="quotelev1">&gt; likely cause me headaches in the near future with some other software.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some final comment for hwloc folks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Relying in pkg-config for building is totally fine, but please note
</span><br>
<span class="quotelev1">&gt; this tool is non-standard in OS X.
</span><br>
<p>It's also not always available on Linux either. I got annoyed several
<br>
times in the past when scrolling up many pages of configure before I
<br>
found a small 'cannot check without pkg-config'. So upstream hwloc will
<br>
issue a warning when pkg-config is missing in next releases at the end
<br>
of configure (hwloc embedders will need a small change to do the same).
<br>
<p><span class="quotelev1">&gt; * Looking in config/hwloc_pkg.m4, I noticed you somehow do check for
</span><br>
<span class="quotelev1">&gt; broken stuff by attempting to link with package libraries. Well, if
</span><br>
<span class="quotelev1">&gt; would be nice to extend this macro to also check you are able to
</span><br>
<span class="quotelev1">&gt; compile by #include'ing package headers. IMHO, such sanity checks save
</span><br>
<span class="quotelev1">&gt; time in the long run for both developer and users. Sorry I do not
</span><br>
<span class="quotelev1">&gt; offer a patch, I have very limited knowledge of autotools and M4.
</span><br>
<p>That would be a reasonable idea. pkg-config doesn't tell us which
<br>
headers come with a package, so we may have to modify hwloc_pkg.m4
<br>
(which is already slightly modified from the official pkg.m4) to add one
<br>
header argument to the m4 macro. I'll see what I can do.
<br>
<p>Thanks for looking into this !
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4403.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-459-g4208a31)"</a>
<li><strong>Previous message:</strong> <a href="4401.php">Brice Goglin: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
<li><strong>Maybe in reply to:</strong> <a href="4400.php">Balaji, Pavan: "Re: [hwloc-devel] [mpich-devel] Build failure in OS X, libxml required?"</a>
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
