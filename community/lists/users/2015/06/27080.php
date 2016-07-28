<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 06:49:18 2015" -->
<!-- isoreceived="20150610104918" -->
<!-- sent="Wed, 10 Jun 2015 19:49:17 +0900" -->
<!-- isosent="20150610104917" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="CAAkFZ5svXjzXn1xCyNxfv7+RJk8D0FJxr+z7_nPo=Gteoqwx4A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E55DDFC9-1162-4830-B105-9D77CE2C31FB_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 06:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27079.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it is a bit different for those links since they are created only if they
<br>
do not exist.
<br>
I guess thede links should be recreated if they are older than Makefile
<br>
<p>btw, does make check for the date of the symlink or the linked file ?
<br>
<p>On Wednesday, June 10, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 10, 2015, at 12:00 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that can happen indeed, in a complex but legitimate environment :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mkdir ~/src
</span><br>
<span class="quotelev2">&gt; &gt; cd ~/src
</span><br>
<span class="quotelev2">&gt; &gt; tar xvfj openmpi-1.8.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; mkdir ~/build/openmpi-v1.8
</span><br>
<span class="quotelev2">&gt; &gt; cd ~/build/openmpi-v1.8
</span><br>
<span class="quotelev2">&gt; &gt; ~/src/openmpi-1.8/configure
</span><br>
<span class="quotelev2">&gt; &gt; make
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; then a few days later
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd ~/src
</span><br>
<span class="quotelev2">&gt; &gt; tar xvfj openmpi-v1.8.5-46-g9f5f498.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt; # use the *same* build directory
</span><br>
<span class="quotelev2">&gt; &gt; cd ~/build/openmpi-v1.8
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev1">&gt; (~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
</span><br>
<span class="quotelev2">&gt; &gt; # must be more recent than
</span><br>
<span class="quotelev1">&gt; ~/src/openmpi-1.8/ompi/include/mpi_portable_platform.h
</span><br>
<span class="quotelev2">&gt; &gt; # just touch
</span><br>
<span class="quotelev1">&gt; ~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
</span><br>
<span class="quotelev2">&gt; &gt; # to force the issue
</span><br>
<span class="quotelev2">&gt; &gt; ~/src/openmpi-v1.8.5-46-g9f5f498/configure
</span><br>
<span class="quotelev2">&gt; &gt; make =&gt; BOUM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmmm.  Interesting.  Ok, good to know!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That means that the fix I committed should, indeed, fix this scenario (see
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/fbaf6888f8905acc428d9a26eab9983f378d9326">https://github.com/open-mpi/ompi/commit/fbaf6888f8905acc428d9a26eab9983f378d9326</a>
</span><br>
<span class="quotelev1">&gt; ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i just found an other issue with this scenario :
</span><br>
<span class="quotelev2">&gt; &gt; symlinks in the profile directories (ompi/mpi/c/profile,
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/mpif-h/profile, oshmem/shmem/c/profile) are not recreated
</span><br>
<span class="quotelev1">&gt; and points to the previous source tree.
</span><br>
<span class="quotelev2">&gt; &gt; (that caused one crash at least, and likely silently compiles old
</span><br>
<span class="quotelev1">&gt; sources most of the time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmmm... yes, I guess you're right; that could lead to super-subtle bugs.
</span><br>
<span class="quotelev1">&gt; I guess I should add the &quot;rm&quot; to those sym link rules, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good catch!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27078.php">http://www.open-mpi.org/community/lists/users/2015/06/27078.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27079.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
