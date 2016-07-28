<?
$subject_val = "Re: [OMPI users] Pros and cons of --enable-heterogeneous";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  8 15:48:38 2010" -->
<!-- isoreceived="20101008194838" -->
<!-- sent="Fri, 8 Oct 2010 15:48:33 -0400" -->
<!-- isosent="20101008194833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pros and cons of --enable-heterogeneous" -->
<!-- id="BB98D7CF-BA78-45F9-8863-118C4468AB51_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7252EB6E-C0B2-4F3A-9BEC-9D5E7A5CEB31_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pros and cons of --enable-heterogeneous<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-08 15:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14433.php">Mikael Lavoie: "[OMPI users] Need a programmer to implement MPI to a research application ($)"</a>
<li><strong>Previous message:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14428.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14412.php">Ralph Castain: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2010, at 2:21 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; No.  Open MPI does not have MPD -- I think you're thinking of a different MPI implementation.  :-)
</span><br>
<p>Someone pointed out to me off-list that I wasn't quite clear here...
<br>
<p>*If* all of your architectures are the same endian and otherwise equivalent, you can just compile 32 bit and be ok.  If your architectures are a mix of endians and/or other representations, you need the heterogeneous support.
<br>
<p>Also note that there is a --hetero flag to mpirun that you will need to use.  Here's the relevant bit from mpirun(1):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--hetero
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indicates that multiple app_contexts are being provided that are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a mix of 32/64-bit binaries.
<br>
<p>It seems a little klunky to have to specify --enable-heterogeneous in configure *and* specify --hetero on the command line, but as I mentioned, this is unfortunately not a common scenario and we therefore haven't really optimized it.  :-\
<br>
<p>I *swear* I just read in some of our documentation somewhere the part about mixing 32 and 64 bit MPI_DOUBLE (for example), but for the life of me, I can't find it now.  :-(
<br>
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
<li><strong>Next message:</strong> <a href="14433.php">Mikael Lavoie: "[OMPI users] Need a programmer to implement MPI to a research application ($)"</a>
<li><strong>Previous message:</strong> <a href="14431.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14428.php">Jeff Squyres: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14412.php">Ralph Castain: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
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
