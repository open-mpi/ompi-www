<?
$subject_val = "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 19:16:33 2010" -->
<!-- isoreceived="20100206001633" -->
<!-- sent="Fri, 05 Feb 2010 16:16:29 -0800" -->
<!-- isosent="20100206001629" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?" -->
<!-- id="E1NdYLd-0005aS-MX_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 19:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12026.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12024.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote
<br>
<p><span class="quotelev1">&gt; We haven't tried Solaris 8 in quite some time.  However, for your first 
</span><br>
<span class="quotelev1">&gt; issue did you include the --enable-heterogeneous option on your 
</span><br>
<span class="quotelev1">&gt; configure command?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you are mix IA-32 and SPARC nodes you'll want to include this so 
</span><br>
<span class="quotelev1">&gt; the endian issue doesn't bite you.
</span><br>
<p>Added that on the configure, rebuilt, installed, and now the examples work. 
<br>
&nbsp;
<br>
Any thoughts on the Forte compiler issue?  This is not quite as pressing
<br>
now that the gcc version works, and most of the computation will be on
<br>
the remote nodes anyway.  Still, the Forte compilers should generate
<br>
faster code than gcc, and I would prefer to use them if possible.
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12026.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12024.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
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
