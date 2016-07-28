<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 15:42:53 2008" -->
<!-- isoreceived="20080522194253" -->
<!-- sent="Thu, 22 May 2008 19:42:45 +0000" -->
<!-- isosent="20080522194245" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="20080522194245.GA7172_at_master.debian.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A8D0D5B-9FAA-4D22-888A-6325FECEAC4E_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-22 15:42:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 22, 2008 at 03:35:03PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Dirk / Debian guys --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you install binary OMPI (which pulls in libibverbs and all the  
</span><br>
<span class="quotelev1">&gt; rest), do you set the OpenFabrics kernel drivers to start upon boot?   
</span><br>
<span class="quotelev1">&gt; Or does the user have to do that manually?
</span><br>
<p>I think so. To the best of my knowledge, we don't do anything explicitly. 
<br>
<p>There is really just a Depends: on whatever is needed to run the
<br>
code. E.g. because we build against libibverbs, the libopenmpi1
<br>
library package ends up with
<br>
<p>&nbsp;&nbsp;&nbsp;Depends: libc6 (&gt;= 2.7-1), libgcc1 (&gt;= 1:4.1.1-21), libgfortran3 (&gt;= 4.3), \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs1 (&gt;= 1.1), libstdc++6 (&gt;= 4.1.1-21)
<br>
<p>which is rather standard.  
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I ask because of the check Pasha proposes: if the user has started the  
</span><br>
<span class="quotelev1">&gt; OpenFabrics kernel drivers, it's ok for OMPI to print warning messages  
</span><br>
<span class="quotelev1">&gt; (this is better than the current: if libibverbs exists, it's ok for  
</span><br>
<span class="quotelev1">&gt; OMPI to print warning messages).
</span><br>
<p>Yes, that sounds fine.
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
<li><strong>Next message:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3997.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
