<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 12:06:25 2008" -->
<!-- isoreceived="20080522160625" -->
<!-- sent="Thu, 22 May 2008 16:06:16 +0000" -->
<!-- isosent="20080522160616" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="20080522160616.GA19840_at_master.debian.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48359702.30307_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 12:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 22, 2008 at 06:53:38PM +0300, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; If user will decide to upgrade his ompi +  libibverb rpm/deb package 
</span><br>
<span class="quotelev1">&gt; install , he will be need to do a lot of other &quot;annoying&quot; steps, like: 
</span><br>
<span class="quotelev1">&gt; source code download, installing all required *-dev.rpm , compilation.
</span><br>
<p>No -- Running &quot;apt-get dist-upgrade&quot;, or any of the graphical or
<br>
console alternates will give you _already compiled_ and _already
<br>
configured_ packages.  That's a point of a distribution.
<br>
<p>This whole discussion is about how to set up the default configuration
<br>
(with respect to IB warning which many folks do not have).
<br>
<p>Also, step back for a second.  Many higher-level MPI-using solution
<br>
'hide' all this plumbing.  So someone advocation a Python-based or
<br>
R-based MPI solution will just tell people 'install the package'.
<br>
These user won't know the difference between Open MPI, LAM or MPICH
<br>
and wouldn't even know where to start.
<br>
<p>That said, the task is indeed delicate at the Open MPI level as do of
<br>
course want genuine warnings for genuine failures.  It is encouraging
<br>
how hard everybody tries to help 'the right way' about this.
<br>
<p>Hth, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3991.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3993.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
