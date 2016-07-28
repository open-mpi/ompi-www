<?
$subject_val = "Re: [OMPI users] ABI stabilization/versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 12:54:12 2010" -->
<!-- isoreceived="20100125175412" -->
<!-- sent="Mon, 25 Jan 2010 18:55:51 +0100" -->
<!-- isosent="20100125175551" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ABI stabilization/versioning" -->
<!-- id="87ockiqdaw.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1DE1A9C7-2690-43D3-A00F-251794C8AC23_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ABI stabilization/versioning<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 12:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="11871.php">Jeff Squyres: "[OMPI users] Searching the FAQ"</a>
<li><strong>In reply to:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 25 Jan 2010 09:09:47 -0500, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The short version is that the possibility of static linking really
</span><br>
<span class="quotelev1">&gt; fouls up the scheme, and we haven't figured out a good way around this
</span><br>
<span class="quotelev1">&gt; yet.  :-(
</span><br>
<p>So pkg-config addresses this with it's Libs.private field and an
<br>
explicit command-line argument when you want static libs, e.g.
<br>
<p>&nbsp;&nbsp;$ pkg-config --libs libavcodec
<br>
&nbsp;&nbsp;-lavcodec  
<br>
&nbsp;&nbsp;$ pkg-config --libs --static libavcodec
<br>
&nbsp;&nbsp;-pthread -lavcodec -lz -lbz2 -lfaac -lfaad -lmp3lame -lopencore-amrnb -lopencore-amrwb -ltheoraenc -ltheoradec -lvorbisenc -lvorbis -logg -lx264 -lm -lxvidcore -ldl -lasound -lavutil
<br>
<p>There is no way to simultaneously (a) prevent overlinking shared libs
<br>
and (b) correctly link static libs without an explicit statement from
<br>
the user about whether to link *your library* statically or dynamically.
<br>
<p>Unfortunately, pkgconfig doesn't work well with multiple builds of a
<br>
package, and doesn't know how to link some libs statically and some
<br>
dynamically.
<br>
<p><p>On the cited bug report, I just wanted to note that collapsing
<br>
libopen-rte and libopen-pal (even only in production builds) has the
<br>
undesirable effect that their ABI cannot change without incrementing the
<br>
soname of libmpi (i.e. user binaries are coupled just as tightly to
<br>
these libraries as when they were separate but linked explicitly, so
<br>
this offers no benefit at all).
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="11871.php">Jeff Squyres: "[OMPI users] Searching the FAQ"</a>
<li><strong>In reply to:</strong> <a href="11866.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Reply:</strong> <a href="11874.php">Jeff Squyres: "Re: [OMPI users] ABI stabilization/versioning"</a>
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
