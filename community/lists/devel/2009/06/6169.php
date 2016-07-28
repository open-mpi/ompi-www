<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 11:45:48 2009" -->
<!-- isoreceived="20090602154548" -->
<!-- sent="Tue, 2 Jun 2009 08:45:38 -0700" -->
<!-- isosent="20090602154538" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="11C7C8D8-0F17-4999-A572-9A3AB3DB4835_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906021024.26158.keller_at_ornl.gov" -->
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
<strong>Date:</strong> 2009-06-02 11:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6170.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6170.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6170.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The datatype engine (where the arch code was originally from), needs a  
<br>
way to describe the architectures in order to know how to convert the  
<br>
data. Therefore I will advocate the return of the opal/util/arch.h  
<br>
back in the datatype.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 2, 2009, at 07:24 , Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
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
<span class="quotelev1">&gt; We do however still have a buglet with FCFLAGS='-i8 -r16', but  
</span><br>
<span class="quotelev1">&gt; that's with our
</span><br>
<span class="quotelev1">&gt; internal storage of [cdw]_f_to_c_index, so it's a different issue  
</span><br>
<span class="quotelev1">&gt; (ticket
</span><br>
<span class="quotelev1">&gt; #1812).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CU,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I especially like the comment in opal/util/arch.c ;-):
</span><br>
<span class="quotelev1">&gt;    /* sizeof fortran logical
</span><br>
<span class="quotelev1">&gt;     *
</span><br>
<span class="quotelev1">&gt;     * RHC: technically, use of the ompi_ prefix is
</span><br>
<span class="quotelev1">&gt;     * an abstraction violation. However, this is actually
</span><br>
<span class="quotelev1">&gt;     * an error in our configure scripts that transcends
</span><br>
<span class="quotelev1">&gt;     * all the data types and eventually should be fixed.
</span><br>
<span class="quotelev1">&gt;     * The guilty part is f77_check.m4. Fixing it right
</span><br>
<span class="quotelev1">&gt;     * now is beyond a reasonable scope - this comment is
</span><br>
<span class="quotelev1">&gt;     * placed here to explain the abstraction break and
</span><br>
<span class="quotelev1">&gt;     * indicate that it will eventually be fixed
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 02 June 2009 09:57:46 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2009, at 9:08 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rainer -- is it safe for Ralph to move the arch.c stuff back up  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI, or will that conflict with your stuff?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, we use it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please leave it at the OPAL layer. We need a way to describe and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; store the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote architecture at the OPAL layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question about the fortran stuff in opal/util/arch.c...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see the following comment:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev2">&gt;&gt; ** platform known to me, were fortran and C-integer do not match
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can tell the intel compiler (and maybe others?) to compile  
</span><br>
<span class="quotelev2">&gt;&gt; fortran
</span><br>
<span class="quotelev2">&gt;&gt; with double-sized integers and reals.  Are we disregarding this?
</span><br>
<span class="quotelev2">&gt;&gt; I.e., does this make this portion of the datatype heterogeneity
</span><br>
<span class="quotelev2">&gt;&gt; detection incorrect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6170.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6168.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6170.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6170.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
