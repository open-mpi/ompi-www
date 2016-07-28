<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 12:48:29 2010" -->
<!-- isoreceived="20100825164829" -->
<!-- sent="Wed, 25 Aug 2010 12:50:08 -0400" -->
<!-- isosent="20100825165008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664" -->
<!-- id="BAF38CED-C491-4762-9CC0-DD6A8294F68A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201008251646.o7PGkbHV013184_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r23664<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 12:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8351.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI.  This is an ABI-changing commit.
<br>
<p>We've unfortunately had some F90 API parameters wrong *for years* and no one noticed.
<br>
<p>I'm inclined not to change this in the 1.4 series, just because it changes the ABI.  But it should go into 1.5.0 since we're already breaking ABI from 1.4.x -&gt; 1.5.0.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: August 25, 2010 12:46:37 PM EDT
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r23664
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2010-08-25 12:46:36 EDT (Wed, 25 Aug 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23664
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23664">https://svn.open-mpi.org/trac/ompi/changeset/23664</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Several EXTRA_STATE parameter types were erroneously &quot;INTEGER&quot; (they
</span><br>
<span class="quotelev1">&gt; should be &quot;INTEGER(kind=MPI_ADDRESS_KIND)&quot;).  This has been wrong for
</span><br>
<span class="quotelev1">&gt; ''years''.  Apparently no one who uses the F90 bindings also uses MPI
</span><br>
<span class="quotelev1">&gt; attributes.  Sigh.
</span><br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8351.php">George Bosilca: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<li><strong>Previous message:</strong> <a href="8349.php">Ralph Castain: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
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
