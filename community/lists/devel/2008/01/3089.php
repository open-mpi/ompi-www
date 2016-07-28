<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:36:32 2008" -->
<!-- isoreceived="20080130143632" -->
<!-- sent="Wed, 30 Jan 2008 15:36:22 +0100" -->
<!-- isosent="20080130143622" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="20080130143622.GW11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ea86ce220801300620x276cb674xda7517b8c1030ba_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2008 at 09:20:45AM -0500, Tim Mattox wrote:
<br>
<p><span class="quotelev2">&gt; &gt; As mentioned earlier: it's very common to have multiple addresses per
</span><br>
<span class="quotelev2">&gt; &gt; interface, and it's the kernel who assigns the source address, so
</span><br>
<span class="quotelev2">&gt; &gt; there's nothing one could say about an incoming connection. Only that it
</span><br>
<span class="quotelev2">&gt; &gt; could be any of all exported addresses. Any.
</span><br>
<span class="quotelev1">&gt; This is only partially correct.  Yes, by default the Linux kernel will
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^
<br>
<span class="quotelev1">&gt; fill in the IP header with any of the IP addresses associated with
</span><br>
<p>I just reverted the patch and will look for a fix. As Jeff always says:
<br>
Let OMPI work out of the box.
<br>
<p>So I cannot rely on special /proc settings.
<br>
<p><p>Anyway, thanks for the pointer.
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3088.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
