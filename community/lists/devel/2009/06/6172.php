<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 23:22:00 2009" -->
<!-- isoreceived="20090603032200" -->
<!-- sent="Tue, 2 Jun 2009 23:21:51 -0400" -->
<!-- isosent="20090603032151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="0B9D0D5F-4FF1-466B-B5EF-52B21E0FCA5F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906021231w3f82a78bx98c58eb2301367a5_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-02 23:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The plan was to leave the arch detection down in OPAL, but instead of  
<br>
util to move it back in the datatype. Therefore, all references to the  
<br>
arch in ORTE are safe.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 2, 2009, at 15:31 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Quick question, George - are you planning on leaving that arch  
</span><br>
<span class="quotelev1">&gt; computation in OPAL, but just moving it to the new opal/datatype  
</span><br>
<span class="quotelev1">&gt; area? If so, then I won't worry about removing the arch-related  
</span><br>
<span class="quotelev1">&gt; calls from ORTE right away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are planning on moving it back to OMPI, then I'll put my  
</span><br>
<span class="quotelev1">&gt; efforts at a higher priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 2, 2009 at 10:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Please feel free to do so, George, as far as I'm concerned. I will  
</span><br>
<span class="quotelev1">&gt; modify the ORTE code in anticipation of it by removing the arch- 
</span><br>
<span class="quotelev1">&gt; related calls. Should have that for you later today or tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it doesn't move, no harm done - like I said, I really don't need  
</span><br>
<span class="quotelev1">&gt; it any more, but was suggesting the move only to finally clear that  
</span><br>
<span class="quotelev1">&gt; abstraction break we all hated when I originally did it (apologies  
</span><br>
<span class="quotelev1">&gt; in hindsight). :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 2, 2009 at 9:45 AM, George Bosilca  
</span><br>
<span class="quotelev1">&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The datatype engine (where the arch code was originally from), needs  
</span><br>
<span class="quotelev1">&gt; a way to describe the architectures in order to know how to convert  
</span><br>
<span class="quotelev1">&gt; the data. Therefore I will advocate the return of the opal/util/ 
</span><br>
<span class="quotelev1">&gt; arch.h back in the datatype.
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
<span class="quotelev1">&gt; Hi Jeff,
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
<span class="quotelev1">&gt;   /* sizeof fortran logical
</span><br>
<span class="quotelev1">&gt;    *
</span><br>
<span class="quotelev1">&gt;    * RHC: technically, use of the ompi_ prefix is
</span><br>
<span class="quotelev1">&gt;    * an abstraction violation. However, this is actually
</span><br>
<span class="quotelev1">&gt;    * an error in our configure scripts that transcends
</span><br>
<span class="quotelev1">&gt;    * all the data types and eventually should be fixed.
</span><br>
<span class="quotelev1">&gt;    * The guilty part is f77_check.m4. Fixing it right
</span><br>
<span class="quotelev1">&gt;    * now is beyond a reasonable scope - this comment is
</span><br>
<span class="quotelev1">&gt;    * placed here to explain the abstraction break and
</span><br>
<span class="quotelev1">&gt;    * indicate that it will eventually be fixed
</span><br>
<span class="quotelev1">&gt;    */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 02 June 2009 09:57:46 am Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 9:08 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt; Rainer -- is it safe for Ralph to move the arch.c stuff back up into
</span><br>
<span class="quotelev1">&gt; OMPI, or will that conflict with your stuff?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, we use it.
</span><br>
<span class="quotelev1">&gt; Please leave it at the OPAL layer. We need a way to describe and
</span><br>
<span class="quotelev1">&gt; store the
</span><br>
<span class="quotelev1">&gt; remote architecture at the OPAL layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question about the fortran stuff in opal/util/arch.c...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the following comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** The fortran integer is dismissed here, since there is no
</span><br>
<span class="quotelev1">&gt; ** platform known to me, were fortran and C-integer do not match
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can tell the intel compiler (and maybe others?) to compile fortran
</span><br>
<span class="quotelev1">&gt; with double-sized integers and reals.  Are we disregarding this?
</span><br>
<span class="quotelev1">&gt; I.e., does this make this portion of the datatype heterogeneity
</span><br>
<span class="quotelev1">&gt; detection incorrect?
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
<li><strong>Next message:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6171.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6173.php">Iain Bason: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
