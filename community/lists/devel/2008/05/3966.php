<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 13:14:33 2008" -->
<!-- isoreceived="20080521171433" -->
<!-- sent="Wed, 21 May 2008 17:14:28 +0000" -->
<!-- isosent="20080521171428" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="20080521171428.GA21485_at_master.debian.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="483450D6.8020202_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-21 13:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 21, 2008 at 07:41:58PM +0300, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; As I know only Openib kernel drivers is installed by default with 
</span><br>
<span class="quotelev1">&gt; distribution.
</span><br>
<span class="quotelev1">&gt; But the user level - libibverbs and other openib stuff is not installed 
</span><br>
<span class="quotelev1">&gt; by default. User need go to the package manager and explicitly
</span><br>
<span class="quotelev1">&gt; select libibverb.  So if user decided to install libibverbs he had 
</span><br>
<span class="quotelev1">&gt; reasons for it, and I think it will be ok to show this warning.
</span><br>
<p>Debian builds with libibverbs because it is available -- we'd be doing
<br>
a disservice to those who have the hardware if we didn't.
<br>
<p>Because we build with it, Open MPI packages depend on it. So if you
<br>
install Open MPI on Debian (and hence Ubuntu and ....), you get libibverbs.
<br>
<p>So yes, suppressing the warning would be great as a default. 
<br>
<p>And generally speaking, we prefer to not diverge from upstream so if
<br>
you made it a default, we wouldn;t have to differ in what we
<br>
ship. That's how the thread started.
<br>
<p>Thanks to all for considering this.
<br>
<p>Dirk (who as Debian co-maintainer is rather happy with all your good work :)
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3965.php">Pavel Shamis (Pasha): "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
