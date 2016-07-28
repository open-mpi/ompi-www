<?
$subject_val = "Re: [OMPI users] Infiniband requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 11:42:44 2009" -->
<!-- isoreceived="20090630154244" -->
<!-- sent="Tue, 30 Jun 2009 11:42:38 -0400" -->
<!-- isosent="20090630154238" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband requirements" -->
<!-- id="4A4A326E.9070107_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A43FB00.2000505_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband requirements<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 11:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9783.php">David Ronis: "[OMPI users] Network Problem?"</a>
<li><strong>Previous message:</strong> <a href="9781.php">Kritiraj Sajadah: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>In reply to:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9726.php">Jeff Squyres: "Re: [OMPI users] Infiniband requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Jim, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Your first question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I opened a thread on this list two months or so ago about a similar
</span><br>
<span class="quotelev1">&gt; situation: when OpenMPI would use/not use libnuma.
</span><br>
<span class="quotelev1">&gt; I asked a question very similar to your question about IB support,
</span><br>
<span class="quotelev1">&gt; and how the configure script would provide it or not.
</span><br>
<span class="quotelev1">&gt; Jeff answerer it, and I asked him to post the answer in the FAQ,
</span><br>
<span class="quotelev1">&gt; which he kindly did (or an edited version of it):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#default-build">http://www.open-mpi.org/faq/?category=building#default-build</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The wisdom is that OpenMPI will search for IB on standard places,
</span><br>
<span class="quotelev1">&gt; and will use it if it finds it.
</span><br>
<span class="quotelev1">&gt; If you don't have IB on a standard place, then you can use the
</span><br>
<span class="quotelev1">&gt; switch --with-openib=/dir to force IB to be part of your OpenMPI.
</span><br>
<span class="quotelev1">&gt; If I understood it right, the bottom line is that you
</span><br>
<span class="quotelev1">&gt; only don't get IB if it is hidden, or doesn't exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've found that on 64-bit RHEL systems, many configure scripts don't
<br>
consider /lib64 and /usr/lib64 &quot;standard&quot; locations to look for
<br>
libraries, so I often have to do something like
<br>
<p>./configure --with-pkg=/usr/lib64
<br>
<p>or ./configure --with-pkg-lib=/usr/lib64
<br>
<p>depending on the package's configure script. I just checked my notes
<br>
form compiling OMPI 1.2.8 and 1.3, and all I needed was &quot;--with-openib&quot;
<br>
for my distro (a rebuild of RHEL 5.3), but you never know - you may need
<br>
just such a trick.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9783.php">David Ronis: "[OMPI users] Network Problem?"</a>
<li><strong>Previous message:</strong> <a href="9781.php">Kritiraj Sajadah: "Re: [OMPI users] Checkpointing automatically at regular intervals"</a>
<li><strong>In reply to:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9726.php">Jeff Squyres: "Re: [OMPI users] Infiniband requirements"</a>
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
