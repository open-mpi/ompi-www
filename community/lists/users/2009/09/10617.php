<?
$subject_val = "Re: [OMPI users] undefined symbol error when built as asharedlibrary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 07:55:36 2009" -->
<!-- isoreceived="20090911115536" -->
<!-- sent="Fri, 11 Sep 2009 07:55:31 -0400" -->
<!-- isosent="20090911115531" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol error when built as asharedlibrary" -->
<!-- id="9AEF8D00-F51B-4C8A-A515-EF901435270F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="54E496B4-9EF2-4BE9-9C07-1C3839A9E23D_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined symbol error when built as asharedlibrary<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 07:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Previous message:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>In reply to:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2009, at 7:26 AM, Reuti wrote:
<br>
<p><span class="quotelev2">&gt; &gt; OMPI's --disable-dlopen configure option has Open MPI build in a
</span><br>
<span class="quotelev2">&gt; &gt; different way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aha - this might also explain what I faced some time ago. I tried to
</span><br>
<span class="quotelev1">&gt; compile an application called Molpro with GlobalArrays which I
</span><br>
<span class="quotelev1">&gt; compiled with Open MPI. I faced similar errors - the compilation
</span><br>
<span class="quotelev1">&gt; worked without any problem, but I couldn't run the application, as it
</span><br>
<span class="quotelev1">&gt; resulted in a similar error. Finally I gave up and stayed with mpich
</span><br>
<span class="quotelev1">&gt; (1) for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>IMHO (and knowing very little about how linkers actually work), the  
<br>
problem is with linker namespaces.  If they could be inherited (e.g.,  
<br>
a *tree* of scopes could be private), then things might work.  It  
<br>
would probably be interesting to sit down with a run-time linker  
<br>
developer sometime and ask about this (I know that linkers are  
<br>
fantastically complicated; there might be Good reasons why such a  
<br>
scheme doesn't already exist).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Previous message:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<li><strong>In reply to:</strong> <a href="10616.php">Reuti: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10634.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a sharedlibrary"</a>
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
