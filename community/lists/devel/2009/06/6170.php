<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 12:31:04 2009" -->
<!-- isoreceived="20090602163104" -->
<!-- sent="Tue, 2 Jun 2009 10:30:58 -0600" -->
<!-- isosent="20090602163058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="71d2d8cc0906020930s3de1e2ddsde6b8ae3e2110946_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11C7C8D8-0F17-4999-A572-9A3AB3DB4835_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-06-02 12:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please feel free to do so, George, as far as I'm concerned. I will modify
<br>
the ORTE code in anticipation of it by removing the arch-related calls.
<br>
Should have that for you later today or tomorrow.
<br>
<p>If it doesn't move, no harm done - like I said, I really don't need it any
<br>
more, but was suggesting the move only to finally clear that abstraction
<br>
break we all hated when I originally did it (apologies in hindsight). :-)
<br>
<p><p>On Tue, Jun 2, 2009 at 9:45 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The datatype engine (where the arch code was originally from), needs a way
</span><br>
<span class="quotelev1">&gt; to describe the architectures in order to know how to convert the data.
</span><br>
<span class="quotelev1">&gt; Therefore I will advocate the return of the opal/util/arch.h back in the
</span><br>
<span class="quotelev1">&gt; datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 07:24 , Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Jeff,
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
<span class="quotelev2">&gt;&gt; We do however still have a buglet with FCFLAGS='-i8 -r16', but that's with
</span><br>
<span class="quotelev2">&gt;&gt; our
</span><br>
<span class="quotelev2">&gt;&gt; internal storage of [cdw]_f_to_c_index, so it's a different issue (ticket
</span><br>
<span class="quotelev2">&gt;&gt; #1812).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CU,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: I especially like the comment in opal/util/arch.c ;-):
</span><br>
<span class="quotelev2">&gt;&gt;   /* sizeof fortran logical
</span><br>
<span class="quotelev2">&gt;&gt;    *
</span><br>
<span class="quotelev2">&gt;&gt;    * RHC: technically, use of the ompi_ prefix is
</span><br>
<span class="quotelev2">&gt;&gt;    * an abstraction violation. However, this is actually
</span><br>
<span class="quotelev2">&gt;&gt;    * an error in our configure scripts that transcends
</span><br>
<span class="quotelev2">&gt;&gt;    * all the data types and eventually should be fixed.
</span><br>
<span class="quotelev2">&gt;&gt;    * The guilty part is f77_check.m4. Fixing it right
</span><br>
<span class="quotelev2">&gt;&gt;    * now is beyond a reasonable scope - this comment is
</span><br>
<span class="quotelev2">&gt;&gt;    * placed here to explain the abstraction break and
</span><br>
<span class="quotelev2">&gt;&gt;    * indicate that it will eventually be fixed
</span><br>
<span class="quotelev2">&gt;&gt;    */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 02 June 2009 09:57:46 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 2, 2009, at 9:08 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rainer -- is it safe for Ralph to move the arch.c stuff back up into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI, or will that conflict with your stuff?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, we use it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please leave it at the OPAL layer. We need a way to describe and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; store the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; remote architecture at the OPAL layer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question about the fortran stuff in opal/util/arch.c...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see the following comment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** platform known to me, were fortran and C-integer do not match
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can tell the intel compiler (and maybe others?) to compile fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with double-sized integers and reals.  Are we disregarding this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., does this make this portion of the datatype heterogeneity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detection incorrect?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6169.php">George Bosilca: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
