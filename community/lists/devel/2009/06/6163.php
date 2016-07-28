<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 17:02:35 2009" -->
<!-- isoreceived="20090601210235" -->
<!-- sent="Mon, 01 Jun 2009 17:02:24 -0400" -->
<!-- isosent="20090601210224" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="200906011702.24379.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E3D834BB-4506-4FE4-91C5-AB1FE6ECE1C8_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 17:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff!
<br>
<p><p>On Monday 01 June 2009 04:53:19 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Per the MPI_Flogical issue -- I think Rainer just exposed some old
</span><br>
<span class="quotelev1">&gt; ugliness.  We've apparently had MPI_Flogical defined in
</span><br>
<span class="quotelev1">&gt; ompi_config.h.in for a long, long time -- we used it in some places
</span><br>
<span class="quotelev1">&gt; and used ompi_fortran_logical_t in other places.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though I *may* be responsible for this particular bit of ugliness
</span><br>
<span class="quotelev1">&gt; way back in the past :-), I think the #define for MPI_Flogical should
</span><br>
<span class="quotelev1">&gt; be removed if for no other reason than 6-12 months from now when
</span><br>
<span class="quotelev1">&gt; someone else re-discovers it, they'll have to go lookup to see if it's
</span><br>
<span class="quotelev1">&gt; a real MPI type -- which it's not.  Even though it's longer, we should
</span><br>
<span class="quotelev1">&gt; use ompi_fortran_logical_t everywhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2009, at 1:23 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Well, this may just be another sign that the push of the DDT to OPAL
</span><br>
<span class="quotelev2">&gt; &gt; is a
</span><br>
<span class="quotelev2">&gt; &gt; bad idea.  That's been my opinion from the start, so I'm biased.
</span><br>
<span class="quotelev2">&gt; &gt; But OPAL
</span><br>
<span class="quotelev2">&gt; &gt; was intended to be single process systems portability, not MPI crud.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 1 Jun 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hmm, OK, I see.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, I do see potentially a problem with work getting ddt on
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the OPAL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; layer when we do have a fortran compiler with different alignment
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; requirements
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for the same-sized basic types...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As far as I understand the OPAL layer to abstract away from
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; underlying system
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; portability, libc-quirks, and compiler information.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But I am perfectly fine with reverting this!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Let's discuss, maybe phone?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rainer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Monday 01 June 2009 10:38:51 am Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hmm.  I'm not sure that I like this commit.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; George, Brian, and I specifically kept Fortran out of (the non-
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; generated code in) opal because the MPI layer is the *only* layer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; uses Fortran.  There was one or two minor abstraction breaks (you
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; cited opal/util/arch.c), but now we have Fortran all throughout
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Opal.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hmmm...  :-\
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Is MPI_Flogical a real type?  I don't see it defined in the MPI-2.2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; latex sources, but I could be missing it.  I *thought* we used
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ompi_fortran_logical_t internally because there was no officially
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; sanctioned MPI_&lt;foo&gt; type for it...?
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>In reply to:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6164.php">Ralph Castain: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
