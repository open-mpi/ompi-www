<?
$subject_val = "Re: [OMPI devel] TKR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:42:46 2014" -->
<!-- isoreceived="20140827144246" -->
<!-- sent="Wed, 27 Aug 2014 08:42:42 -0600" -->
<!-- isosent="20140827144242" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TKR" -->
<!-- id="53FDEE62.40409_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E1EF1DC1-6833-4518-9210-5E6E2DE01448_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TKR<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15740.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Previous message:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/27/2014 08:32 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Aug 27, 2014, at 10:05 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone give me a quick overview of the tkr/ignore-tkr split in the fortran bindings?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heh.  How much do you want to know?  How far down the Fortran rabbit hole do you want to go?  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the process of updating the Fedora openmpi packages from 1.8.1 in Fedora 21/22 to 1.8.2 we seem to have gone from libmpi_usempi.so to libmpi_usempi_ignore_tkr.so and I'm not sure why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you upgrade gcc/gfortran to 4.9[.x]?  If so, that's likely why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's the trick.  Thanks very much for the description.  I'm glad we 
<br>
got this change in now then, and it looks like we can safely update 
<br>
older releases if needed.
<br>
<p><span class="quotelev1">&gt; In short:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - pre gcc/gfortran-4.9: uses the TKR interface
</span><br>
<span class="quotelev1">&gt; - gcc/gfortran &gt;= 4.9: uses the ignore-TKR interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TKR = Fortran-eese for &quot;type, kind, rank&quot;.  &quot;Type&quot; is what you would expect: INTEGER, DOUBLE PRECISION, ...etc.  &quot;Kind&quot;, as I understand it, is a variant of the type: e.g., there are different kinds of INTEGERs.  I'm sure that a Fortran expert will disagree with me here, but for a software engineer, it comes down to INTEGERs of different sizes: 2 byte integer values, 4 byte integer values, etc.  &quot;Rank&quot; is the array dimension of the variable (which is a little confusing in an MPI context, where &quot;rank&quot; has an entirely different meaning).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before Fortran 08, there was no Fortran equivalent of C's (void*).  Hence, it was actually impossible -- using pure Fortran -- to have Fortran prototypes for MPI subroutines that take a choice buffer (e.g., MPI_Send, which takes a (void*) buffer argument in C).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most Fortran compilers have long-since had various pragmas that tell the compiler to ignore the TKR of a given subroutine parameter -- effectively making it like a C (void*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gfortran tends to be quite pure in its Fortran implementation and did not support this kind of ignore-TKR pragma until the 4.9 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, gfortran &lt;v4.9 uses the old OMPI &quot;TKR&quot;-based implementation (which is old, crotchety, and has various shortcomings).  Gfortran &gt;=4.9 uses the shiny new &quot;ignore TKR&quot;-based implementation, which is significantly simpler, has more features, and is OMPI's defined path fortran for Fortran support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that all of this is based one *one* of the 3 defined Fortran interfaces in MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. mpif.h
</span><br>
<span class="quotelev1">&gt; 2. &quot;mpi&quot; module
</span><br>
<span class="quotelev1">&gt; 3. &quot;mpi_f08&quot; module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specificially, this conversation is about #2.  Many of the aspects also apply to #3, but the issues are (related but) a little different there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15740.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Previous message:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<li><strong>In reply to:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
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
