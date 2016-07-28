<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 13:47:42 2009" -->
<!-- isoreceived="20090603174742" -->
<!-- sent="Wed, 3 Jun 2009 11:47:36 -0600" -->
<!-- isosent="20090603174736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="71d2d8cc0906031047q2d5682d3w6684ce692b6d303_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0F02212-A296-4ACE-A16E-589CBE972DB8_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 13:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - thanks for clarifying, George, on both counts! :-)
<br>
<p>On Wed, Jun 3, 2009 at 11:43 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2009, at 13:30 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm not entirely sure what comment is being discussed. The comment in
</span><br>
<span class="quotelev2">&gt;&gt; opal/util/arch.c (written by me long ago) should not be taken seriously - it
</span><br>
<span class="quotelev2">&gt;&gt; was nothing more than a half-hearted attempt to appease the stormy
</span><br>
<span class="quotelev2">&gt;&gt; controversy (mostly objections from George and a little from Brian) created
</span><br>
<span class="quotelev2">&gt;&gt; by my moving this code to OPAL. It had no technical validity behind it at
</span><br>
<span class="quotelev2">&gt;&gt; all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Somewhat amusing to see that comment now used as justification for leaving
</span><br>
<span class="quotelev2">&gt;&gt; the code there by some of the same people. ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think there is a misinterpretation of my justification. The architecture
</span><br>
<span class="quotelev1">&gt; code was, from the beginning,  specifically crafted for the datatype engine.
</span><br>
<span class="quotelev1">&gt; Using it elsewhere, might make sense, however only the datatype engine can
</span><br>
<span class="quotelev1">&gt; really take full advantage of it. Therefore, I believe this code should stay
</span><br>
<span class="quotelev1">&gt; inside the datatype engine, whatever layer in Open MPI this engine will be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The question of whether or not we accurately deal with Fortran variable
</span><br>
<span class="quotelev2">&gt;&gt; sizes was always present, even when this code was in the OMPI layer. It is a
</span><br>
<span class="quotelev2">&gt;&gt; tad troublesome as Fortran advocates -do- occasionally set the flags that
</span><br>
<span class="quotelev2">&gt;&gt; can cause the variables to differ from their C counterparts. Rather than
</span><br>
<span class="quotelev2">&gt;&gt; some obscure comment in the source code, we should probably generate a
</span><br>
<span class="quotelev2">&gt;&gt; warning and (hopefully) abort when someone uses those flags to avoid
</span><br>
<span class="quotelev2">&gt;&gt; creating hard-to-debug errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most types existing in other programming languages will be supported to a
</span><br>
<span class="quotelev1">&gt; certain extent. As an example, all Fortran integer types __WILL__ be
</span><br>
<span class="quotelev1">&gt; supported. One notable exception will be the &quot;QUAD&quot; floating point type
</span><br>
<span class="quotelev1">&gt; provided by the Fortran compiler. While there is a similar type in C, it is
</span><br>
<span class="quotelev1">&gt; compiler and platform dependent, and the representation of the C and the
</span><br>
<span class="quotelev1">&gt; Fortran type differs. As a result, even if we would like to support this
</span><br>
<span class="quotelev1">&gt; type, we will not be able to do the conversions (by lack of knowledge about
</span><br>
<span class="quotelev1">&gt; the internal representation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this is the only type I'm aware of that we will not be able to
</span><br>
<span class="quotelev1">&gt; support. In fact, this type is not supported today in Open MPI, so there
</span><br>
<span class="quotelev1">&gt; will be no lost of functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 3, 2009 at 10:58 AM, Iain Bason &lt;Iain.Bason_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 2, 2009, at 10:24 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; no, that's not an issue. The comment is correct: For any Fortran
</span><br>
<span class="quotelev2">&gt;&gt; integer*kind
</span><br>
<span class="quotelev2">&gt;&gt; we need to have _some_ C-representation as well, otherwise we disregard
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; type (tm), see e.g. the old  and resolved ticket #1094.
</span><br>
<span class="quotelev2">&gt;&gt; The representation chosen is set in opal/util/arch.c and is conclusive as
</span><br>
<span class="quotelev2">&gt;&gt; far
</span><br>
<span class="quotelev2">&gt;&gt; as I can tell...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doesn't that mean that the comment is misleading?  I interpret it as
</span><br>
<span class="quotelev2">&gt;&gt; saying that a Fortran &quot;default integer&quot; is always the same as a C &quot;int&quot;.  I
</span><br>
<span class="quotelev2">&gt;&gt; believe that you are saying that it really means that *any* kind of Fortran
</span><br>
<span class="quotelev2">&gt;&gt; integer must be the same as one of C's integral types, or OpenMPI won't
</span><br>
<span class="quotelev2">&gt;&gt; support it at all.  Shouldn't the comment be clearer?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Iain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6176/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6177.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
