<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 07:48:08 2009" -->
<!-- isoreceived="20090602114808" -->
<!-- sent="Tue, 2 Jun 2009 07:48:02 -0400" -->
<!-- isosent="20090602114802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="FE28DE33-E9A7-4B1A-9752-549DC2C22B9F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3E0BFDA-CBD7-4DCA-8D48-049C5A4B5C2D_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 07:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like Rainer reverted the stuff in r21342.
<br>
<p>Rainer -- is it safe for Ralph to move the arch.c stuff back up into  
<br>
OMPI, or will that conflict with your stuff?
<br>
<p><p>On Jun 1, 2009, at 11:12 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just to throw some $0.002 into this overall discussion...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not knowing this was going to be happening, I was actually about to
</span><br>
<span class="quotelev1">&gt; propose moving the opal/util/arch.c code back to the ompi layer. The
</span><br>
<span class="quotelev1">&gt; original move had caused quite a bit of angst due to the fortran
</span><br>
<span class="quotelev1">&gt; stuff. Originally, I had needed to make the move because the design
</span><br>
<span class="quotelev1">&gt; for modex-less operations needed to know the architecture prior to
</span><br>
<span class="quotelev1">&gt; launching the app. However, as things evolved, it turns out that this
</span><br>
<span class="quotelev1">&gt; isn't necessary at all - in fact, the launch system doesn't actually
</span><br>
<span class="quotelev1">&gt; take advantage of the ORTE layer knowing the arch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So from the point of view of the current system, there is no value in
</span><br>
<span class="quotelev1">&gt; having the opal/util/arch.c code - it can be restored to the original
</span><br>
<span class="quotelev1">&gt; datatype area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize that Rainer is pursuing a different objective, and that's
</span><br>
<span class="quotelev1">&gt; fine. My point here is that the original motivation for breaking the
</span><br>
<span class="quotelev1">&gt; abstraction barrier no longer exists, so whatever we do here is free
</span><br>
<span class="quotelev1">&gt; to reflect that change in requirement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would personally like to see OPAL retain its original objective and
</span><br>
<span class="quotelev1">&gt; avoid having Fortran knowledge down there.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2009, at 3:02 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Jeff!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Monday 01 June 2009 04:53:19 pm Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Per the MPI_Flogical issue -- I think Rainer just exposed some old
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ugliness.  We've apparently had MPI_Flogical defined in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_config.h.in for a long, long time -- we used it in some places
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and used ompi_fortran_logical_t in other places.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Even though I *may* be responsible for this particular bit of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ugliness
</span><br>
<span class="quotelev3">&gt; &gt;&gt; way back in the past :-), I think the #define for MPI_Flogical  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be removed if for no other reason than 6-12 months from now when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; someone else re-discovers it, they'll have to go lookup to see if
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a real MPI type -- which it's not.  Even though it's longer, we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use ompi_fortran_logical_t everywhere.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My $0.02.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 1, 2009, at 1:23 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Well, this may just be another sign that the push of the DDT to  
</span><br>
<span class="quotelev1">&gt; OPAL
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bad idea.  That's been my opinion from the start, so I'm biased.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But OPAL
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; was intended to be single process systems portability, not MPI  
</span><br>
<span class="quotelev1">&gt; crud.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mon, 1 Jun 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hmm, OK, I see.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; However, I do see potentially a problem with work getting ddt on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the OPAL
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; layer when we do have a fortran compiler with different alignment
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; requirements
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for the same-sized basic types...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As far as I understand the OPAL layer to abstract away from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; underlying system
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; portability, libc-quirks, and compiler information.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; But I am perfectly fine with reverting this!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Let's discuss, maybe phone?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Rainer
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Monday 01 June 2009 10:38:51 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hmm.  I'm not sure that I like this commit.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; George, Brian, and I specifically kept Fortran out of (the non-
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; generated code in) opal because the MPI layer is the *only*  
</span><br>
<span class="quotelev1">&gt; layer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; uses Fortran.  There was one or two minor abstraction breaks  
</span><br>
<span class="quotelev1">&gt; (you
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cited opal/util/arch.c), but now we have Fortran all throughout
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Opal.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hmmm...  :-\
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is MPI_Flogical a real type?  I don't see it defined in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MPI-2.2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; latex sources, but I could be missing it.  I *thought* we used
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ompi_fortran_logical_t internally because there was no  
</span><br>
<span class="quotelev1">&gt; officially
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; sanctioned MPI_&lt;foo&gt; type for it...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt; &gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6166.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
