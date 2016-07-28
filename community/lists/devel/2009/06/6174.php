<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 13:30:44 2009" -->
<!-- isoreceived="20090603173044" -->
<!-- sent="Wed, 3 Jun 2009 11:30:36 -0600" -->
<!-- isosent="20090603173036" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="71d2d8cc0906031030g7b002b5ax2240084e80ea1ba1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D08E092-8A62-427D-91B5-512FF1BC74EE_at_sun.com" -->
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
<strong>Date:</strong> 2009-06-03 13:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not entirely sure what comment is being discussed. The comment in
<br>
opal/util/arch.c (written by me long ago) should not be taken seriously - it
<br>
was nothing more than a half-hearted attempt to appease the stormy
<br>
controversy (mostly objections from George and a little from Brian) created
<br>
by my moving this code to OPAL. It had no technical validity behind it at
<br>
all.
<br>
<p>Somewhat amusing to see that comment now used as justification for leaving
<br>
the code there by some of the same people. ;-)
<br>
<p>The question of whether or not we accurately deal with Fortran variable
<br>
sizes was always present, even when this code was in the OMPI layer. It is a
<br>
tad troublesome as Fortran advocates -do- occasionally set the flags that
<br>
can cause the variables to differ from their C counterparts. Rather than
<br>
some obscure comment in the source code, we should probably generate a
<br>
warning and (hopefully) abort when someone uses those flags to avoid
<br>
creating hard-to-debug errors.
<br>
<p><p>On Wed, Jun 3, 2009 at 10:58 AM, Iain Bason &lt;Iain.Bason_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 10:24 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  no, that's not an issue. The comment is correct: For any Fortran
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doesn't that mean that the comment is misleading?  I interpret it as saying
</span><br>
<span class="quotelev1">&gt; that a Fortran &quot;default integer&quot; is always the same as a C &quot;int&quot;.  I believe
</span><br>
<span class="quotelev1">&gt; that you are saying that it really means that *any* kind of Fortran integer
</span><br>
<span class="quotelev1">&gt; must be the same as one of C's integral types, or OpenMPI won't support it
</span><br>
<span class="quotelev1">&gt; at all.  Shouldn't the comment be clearer?
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6175.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6178.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
