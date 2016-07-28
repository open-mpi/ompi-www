<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 13:43:24 2009" -->
<!-- isoreceived="20090603174324" -->
<!-- sent="Wed, 3 Jun 2009 13:43:14 -0400" -->
<!-- isosent="20090603174314" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="E0F02212-A296-4ACE-A16E-589CBE972DB8_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906031030g7b002b5ax2240084e80ea1ba1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal / fortran / Flogical<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 13:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2009, at 13:30 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm not entirely sure what comment is being discussed. The comment  
</span><br>
<span class="quotelev1">&gt; in opal/util/arch.c (written by me long ago) should not be taken  
</span><br>
<span class="quotelev1">&gt; seriously - it was nothing more than a half-hearted attempt to  
</span><br>
<span class="quotelev1">&gt; appease the stormy controversy (mostly objections from George and a  
</span><br>
<span class="quotelev1">&gt; little from Brian) created by my moving this code to OPAL. It had no  
</span><br>
<span class="quotelev1">&gt; technical validity behind it at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhat amusing to see that comment now used as justification for  
</span><br>
<span class="quotelev1">&gt; leaving the code there by some of the same people. ;-)
</span><br>
<p>I think there is a misinterpretation of my justification. The  
<br>
architecture code was, from the beginning,  specifically crafted for  
<br>
the datatype engine. Using it elsewhere, might make sense, however  
<br>
only the datatype engine can really take full advantage of it.  
<br>
Therefore, I believe this code should stay inside the datatype engine,  
<br>
whatever layer in Open MPI this engine will be.
<br>
<p><span class="quotelev1">&gt; The question of whether or not we accurately deal with Fortran  
</span><br>
<span class="quotelev1">&gt; variable sizes was always present, even when this code was in the  
</span><br>
<span class="quotelev1">&gt; OMPI layer. It is a tad troublesome as Fortran advocates -do-  
</span><br>
<span class="quotelev1">&gt; occasionally set the flags that can cause the variables to differ  
</span><br>
<span class="quotelev1">&gt; from their C counterparts. Rather than some obscure comment in the  
</span><br>
<span class="quotelev1">&gt; source code, we should probably generate a warning and (hopefully)  
</span><br>
<span class="quotelev1">&gt; abort when someone uses those flags to avoid creating hard-to-debug  
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<p>Most types existing in other programming languages will be supported  
<br>
to a certain extent. As an example, all Fortran integer types __WILL__  
<br>
be supported. One notable exception will be the &quot;QUAD&quot; floating point  
<br>
type provided by the Fortran compiler. While there is a similar type  
<br>
in C, it is compiler and platform dependent, and the representation of  
<br>
the C and the Fortran type differs. As a result, even if we would like  
<br>
to support this type, we will not be able to do the conversions (by  
<br>
lack of knowledge about the internal representation).
<br>
<p>However, this is the only type I'm aware of that we will not be able  
<br>
to support. In fact, this type is not supported today in Open MPI, so  
<br>
there will be no lost of functionality.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 3, 2009 at 10:58 AM, Iain Bason &lt;Iain.Bason_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 10:24 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; no, that's not an issue. The comment is correct: For any Fortran  
</span><br>
<span class="quotelev1">&gt; integer*kind
</span><br>
<span class="quotelev1">&gt; we need to have _some_ C-representation as well, otherwise we  
</span><br>
<span class="quotelev1">&gt; disregard the
</span><br>
<span class="quotelev1">&gt; type (tm), see e.g. the old  and resolved ticket #1094.
</span><br>
<span class="quotelev1">&gt; The representation chosen is set in opal/util/arch.c and is  
</span><br>
<span class="quotelev1">&gt; conclusive as far
</span><br>
<span class="quotelev1">&gt; as I can tell...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doesn't that mean that the comment is misleading?  I interpret it as  
</span><br>
<span class="quotelev1">&gt; saying that a Fortran &quot;default integer&quot; is always the same as a C  
</span><br>
<span class="quotelev1">&gt; &quot;int&quot;.  I believe that you are saying that it really means that  
</span><br>
<span class="quotelev1">&gt; *any* kind of Fortran integer must be the same as one of C's  
</span><br>
<span class="quotelev1">&gt; integral types, or OpenMPI won't support it at all.  Shouldn't the  
</span><br>
<span class="quotelev1">&gt; comment be clearer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6174.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6176.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
