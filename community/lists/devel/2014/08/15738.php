<?
$subject_val = "Re: [OMPI devel] TKR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:32:11 2014" -->
<!-- isoreceived="20140827143211" -->
<!-- sent="Wed, 27 Aug 2014 14:32:10 +0000" -->
<!-- isosent="20140827143210" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TKR" -->
<!-- id="E1EF1DC1-6833-4518-9210-5E6E2DE01448_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53FDE5B7.5040605_at_cora.nwra.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:32:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>Previous message:</strong> <a href="15737.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>In reply to:</strong> <a href="15734.php">Orion Poplawski: "[OMPI devel] TKR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>Reply:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>Reply:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2014, at 10:05 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can someone give me a quick overview of the tkr/ignore-tkr split in the fortran bindings?  
</span><br>
<p>Heh.  How much do you want to know?  How far down the Fortran rabbit hole do you want to go?  :-)
<br>
<p><span class="quotelev1">&gt; In the process of updating the Fedora openmpi packages from 1.8.1 in Fedora 21/22 to 1.8.2 we seem to have gone from libmpi_usempi.so to libmpi_usempi_ignore_tkr.so and I'm not sure why.
</span><br>
<p>Did you upgrade gcc/gfortran to 4.9[.x]?  If so, that's likely why.
<br>
<p>In short:
<br>
<p>- pre gcc/gfortran-4.9: uses the TKR interface
<br>
- gcc/gfortran &gt;= 4.9: uses the ignore-TKR interface
<br>
<p>TKR = Fortran-eese for &quot;type, kind, rank&quot;.  &quot;Type&quot; is what you would expect: INTEGER, DOUBLE PRECISION, ...etc.  &quot;Kind&quot;, as I understand it, is a variant of the type: e.g., there are different kinds of INTEGERs.  I'm sure that a Fortran expert will disagree with me here, but for a software engineer, it comes down to INTEGERs of different sizes: 2 byte integer values, 4 byte integer values, etc.  &quot;Rank&quot; is the array dimension of the variable (which is a little confusing in an MPI context, where &quot;rank&quot; has an entirely different meaning).
<br>
<p>Before Fortran 08, there was no Fortran equivalent of C's (void*).  Hence, it was actually impossible -- using pure Fortran -- to have Fortran prototypes for MPI subroutines that take a choice buffer (e.g., MPI_Send, which takes a (void*) buffer argument in C).
<br>
<p>Most Fortran compilers have long-since had various pragmas that tell the compiler to ignore the TKR of a given subroutine parameter -- effectively making it like a C (void*).  
<br>
<p>Gfortran tends to be quite pure in its Fortran implementation and did not support this kind of ignore-TKR pragma until the 4.9 series.
<br>
<p>Hence, gfortran &lt;v4.9 uses the old OMPI &quot;TKR&quot;-based implementation (which is old, crotchety, and has various shortcomings).  Gfortran &gt;=4.9 uses the shiny new &quot;ignore TKR&quot;-based implementation, which is significantly simpler, has more features, and is OMPI's defined path fortran for Fortran support.
<br>
<p>Keep in mind that all of this is based one *one* of the 3 defined Fortran interfaces in MPI:
<br>
<p>1. mpif.h
<br>
2. &quot;mpi&quot; module
<br>
3. &quot;mpi_f08&quot; module
<br>
<p>Specificially, this conversation is about #2.  Many of the aspects also apply to #3, but the issues are (related but) a little different there.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>Previous message:</strong> <a href="15737.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>In reply to:</strong> <a href="15734.php">Orion Poplawski: "[OMPI devel] TKR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>Reply:</strong> <a href="15739.php">Orion Poplawski: "Re: [OMPI devel] TKR"</a>
<li><strong>Reply:</strong> <a href="15741.php">Jed Brown: "Re: [OMPI devel] TKR"</a>
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
