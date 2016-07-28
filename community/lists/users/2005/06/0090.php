<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 17 12:11:15 2005" -->
<!-- isoreceived="20050617171115" -->
<!-- sent="Fri, 17 Jun 2005 17:11:08 +0000" -->
<!-- isosent="20050617171108" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="20050617171108.GB29041_at_flying-walenda.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ad419ed8905d7befba0dd91152a5c120_at_open-mpi.org" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-17 12:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0092.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0092.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please paste the quoted text (appropriately expanded)
<br>
into a readme or install or some other prominent doc location/appendix
<br>
as soon as possible if it isn't there already. 
<br>
Details like this matter a lot to a few of us,
<br>
and many of us haven't drunk completely the 3000 gallons of twisted logic
<br>
that is the autotool conventions.
<br>
<p>thanks,
<br>
ben
<br>
<p>On Thu, Jun 16, 2005 at 08:44:48PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default build is to make libmpi be a shared library and build all 
</span><br>
<span class="quotelev1">&gt; the components as dynamic shared objects (think &quot;plugins&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But we currently use Autoconf+Automake+Libtool, so to build everything 
</span><br>
<span class="quotelev1">&gt; static, the standard flags suffice:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will make libmpi.a, all the components are statically linked into 
</span><br>
<span class="quotelev1">&gt; libmpi.a, etc.  There's more esoteric configure flags that allow 
</span><br>
<span class="quotelev1">&gt; building some components as DSOs and others statically linked into 
</span><br>
<span class="quotelev1">&gt; libmpi, but most people want entirely one way or the other, so I won't 
</span><br>
<span class="quotelev1">&gt; provide the [uninteresting] details here.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0091.php">Ben Allan: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>Previous message:</strong> <a href="0089.php">Tim Mattox: "Re: [O-MPI users] Further thoughts"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0092.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0092.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
