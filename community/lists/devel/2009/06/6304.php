<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 13:48:32 2009" -->
<!-- isoreceived="20090622174832" -->
<!-- sent="Mon, 22 Jun 2009 13:48:20 -0400" -->
<!-- isosent="20090622174820" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="4A3FC3E4.1030908_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72767474-25D0-444C-9778-A8EE669F91B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_REAL16<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 13:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Previous message:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Thanks, Nick, for explaining that kind values are compiler-dependent. I 
<br>
was too lazy to do that.)
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Given that I'll inevitably get the language wrong, can someone suggest 
</span><br>
<span class="quotelev1">&gt; proper verbiage for this statement in the OMPI README:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - MPI_REAL16 and MPI_COMPLEX32 are only supported on platforms where a
</span><br>
<span class="quotelev1">&gt; portable C datatype can be found that matches the Fortran type
</span><br>
<span class="quotelev1">&gt; REAL*16, both in size and bit representation. The Intel v11
</span><br>
<span class="quotelev1">&gt; compiler, for example, supports these types, but requires the use of
</span><br>
<span class="quotelev1">&gt; the &quot;_16&quot; suffix in Fortran when assigning constants to REAL*16
</span><br>
<span class="quotelev1">&gt; variables. 
</span><br>
<p>The _16 suffix really has nothing to do with whether there is a C 
<br>
datatype that corresponds to REAL*16. There are two separate issues here:
<br>
<p>&nbsp;&nbsp;&nbsp;1. In Fortran code, any floating point literal has the default kind
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unless otherwise specified. That means that you can get surprising
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;results from a simple program designed to test whether a C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler has a data type that corresponds to REAL*16: the least
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;significant bits of a REAL*16 variable will be set to zero when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the literal is assigned to it.
<br>
&nbsp;&nbsp;&nbsp;2. Open MPI requires the C compiler to have a data type that has the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;same bit representation as the Fortran compiler's REAL*16. If the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler does not have such a data type, then Open MPI cannot
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support REAL*16 in its Fortran interface.
<br>
<p>My understanding is that the Intel representative said that there is 
<br>
some compiler switch that allows the C compiler to have such a data 
<br>
type. I didn't pay enough attention to see whether there was some reason 
<br>
not to use the switch.
<br>
<p>She also pointed out a bug in the Fortran test code that checks for the 
<br>
presence of the C data type. She suggested using a _16 suffix on a 
<br>
literal in that test code. Nick pointed out that that _16 suffix means, 
<br>
&quot;make this literal a KIND=16 literal,&quot; which may mean different things 
<br>
to different compilers. In particular, REAL*16 may not be the same as 
<br>
REAL(KIND=16).
<br>
<p>However, there is no standard way to specify, &quot;make this literal a 
<br>
REAL*16 literal.&quot; That means that you have to do one of:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Declare the variable REAL(KIND=16) and use the _16 suffix on the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;literal.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Define some parameter QUAD using the SELECTED_REAL_KIND intrinsic,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;declare the variable REAL(KIND=QUAD), and use the _QUAD suffix on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the literal.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Assume that REAL*16 is the same as REAL(KIND=16) and use the _16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;suffix on the literal.
<br>
<p>That assumption turns out to be safer than one might imagine. It is 
<br>
certainly true for the Sun and Intel compilers. I am pretty sure it is 
<br>
true for the PGI, Pathscale, and GNU compilers. I am not aware of any 
<br>
compilers for which it is not true, but that doesn't mean there is no 
<br>
such compiler.
<br>
<p>All of which is a long winded way of saying that maybe the README ought 
<br>
to just say:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_REAL16 and MPI_COMPLEX32 are only supported on platforms where a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;portable C datatype can be found that matches the Fortran type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;REAL*16, both in size and bit representation.
<br>
<p><p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Previous message:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>In reply to:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
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
