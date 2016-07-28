<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 06:27:14 2015" -->
<!-- isoreceived="20150610102714" -->
<!-- sent="Wed, 10 Jun 2015 10:27:12 +0000" -->
<!-- isosent="20150610102712" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="E55DDFC9-1162-4830-B105-9D77CE2C31FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5577B66C.40802_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 06:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27079.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27077.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27068.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2015, at 12:00 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that can happen indeed, in a complex but legitimate environment :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mkdir ~/src
</span><br>
<span class="quotelev1">&gt; cd ~/src
</span><br>
<span class="quotelev1">&gt; tar xvfj openmpi-1.8.tar.bz2
</span><br>
<span class="quotelev1">&gt; mkdir ~/build/openmpi-v1.8
</span><br>
<span class="quotelev1">&gt; cd ~/build/openmpi-v1.8
</span><br>
<span class="quotelev1">&gt; ~/src/openmpi-1.8/configure
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then a few days later
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd ~/src
</span><br>
<span class="quotelev1">&gt; tar xvfj openmpi-v1.8.5-46-g9f5f498.tar.bz2
</span><br>
<span class="quotelev1">&gt; # use the *same* build directory
</span><br>
<span class="quotelev1">&gt; cd ~/build/openmpi-v1.8
</span><br>
<span class="quotelev1">&gt; # (~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
</span><br>
<span class="quotelev1">&gt; # must be more recent than ~/src/openmpi-1.8/ompi/include/mpi_portable_platform.h
</span><br>
<span class="quotelev1">&gt; # just touch ~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
</span><br>
<span class="quotelev1">&gt; # to force the issue
</span><br>
<span class="quotelev1">&gt; ~/src/openmpi-v1.8.5-46-g9f5f498/configure
</span><br>
<span class="quotelev1">&gt; make =&gt; BOUM
</span><br>
<p>Mmmm.  Interesting.  Ok, good to know!
<br>
<p>That means that the fix I committed should, indeed, fix this scenario (see <a href="https://github.com/open-mpi/ompi/commit/fbaf6888f8905acc428d9a26eab9983f378d9326">https://github.com/open-mpi/ompi/commit/fbaf6888f8905acc428d9a26eab9983f378d9326</a>).
<br>
<p><span class="quotelev1">&gt; i just found an other issue with this scenario :
</span><br>
<span class="quotelev1">&gt; symlinks in the profile directories (ompi/mpi/c/profile, ompi/mpi/fortran/mpif-h/profile, oshmem/shmem/c/profile) are not recreated and points to the previous source tree.
</span><br>
<span class="quotelev1">&gt; (that caused one crash at least, and likely silently compiles old sources most of the time)
</span><br>
<p>Mmmm... yes, I guess you're right; that could lead to super-subtle bugs.  I guess I should add the &quot;rm&quot; to those sym link rules, too.
<br>
<p>Good catch!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27079.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27077.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27068.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
