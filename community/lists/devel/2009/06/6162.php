<?
$subject_val = "Re: [OMPI devel] opal / fortran / Flogical";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 16:53:24 2009" -->
<!-- isoreceived="20090601205324" -->
<!-- sent="Mon, 1 Jun 2009 16:53:19 -0400" -->
<!-- isosent="20090601205319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal / fortran / Flogical" -->
<!-- id="E3D834BB-4506-4FE4-91C5-AB1FE6ECE1C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0906011322020.26546_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2009-06-01 16:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6163.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="6158.php">Brian W. Barrett: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6163.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6163.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the MPI_Flogical issue -- I think Rainer just exposed some old  
<br>
ugliness.  We've apparently had MPI_Flogical defined in  
<br>
ompi_config.h.in for a long, long time -- we used it in some places  
<br>
and used ompi_fortran_logical_t in other places.
<br>
<p>Even though I *may* be responsible for this particular bit of ugliness  
<br>
way back in the past :-), I think the #define for MPI_Flogical should  
<br>
be removed if for no other reason than 6-12 months from now when  
<br>
someone else re-discovers it, they'll have to go lookup to see if it's  
<br>
a real MPI type -- which it's not.  Even though it's longer, we should  
<br>
use ompi_fortran_logical_t everywhere.
<br>
<p>My $0.02.
<br>
<p><p><p>On Jun 1, 2009, at 1:23 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Well, this may just be another sign that the push of the DDT to OPAL  
</span><br>
<span class="quotelev1">&gt; is a
</span><br>
<span class="quotelev1">&gt; bad idea.  That's been my opinion from the start, so I'm biased.   
</span><br>
<span class="quotelev1">&gt; But OPAL
</span><br>
<span class="quotelev1">&gt; was intended to be single process systems portability, not MPI crud.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 1 Jun 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmm, OK, I see.
</span><br>
<span class="quotelev2">&gt; &gt; However, I do see potentially a problem with work getting ddt on  
</span><br>
<span class="quotelev1">&gt; the OPAL
</span><br>
<span class="quotelev2">&gt; &gt; layer when we do have a fortran compiler with different alignment  
</span><br>
<span class="quotelev1">&gt; requirements
</span><br>
<span class="quotelev2">&gt; &gt; for the same-sized basic types...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As far as I understand the OPAL layer to abstract away from  
</span><br>
<span class="quotelev1">&gt; underlying system
</span><br>
<span class="quotelev2">&gt; &gt; portability, libc-quirks, and compiler information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But I am perfectly fine with reverting this!
</span><br>
<span class="quotelev2">&gt; &gt; Let's discuss, maybe phone?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Rainer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Monday 01 June 2009 10:38:51 am Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmm.  I'm not sure that I like this commit.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George, Brian, and I specifically kept Fortran out of (the non-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; generated code in) opal because the MPI layer is the *only* layer  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; uses Fortran.  There was one or two minor abstraction breaks (you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cited opal/util/arch.c), but now we have Fortran all throughout  
</span><br>
<span class="quotelev1">&gt; Opal.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmmm...  :-\
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is MPI_Flogical a real type?  I don't see it defined in the MPI-2.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; latex sources, but I could be missing it.  I *thought* we used
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_fortran_logical_t internally because there was no officially
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sanctioned MPI_&lt;foo&gt; type for it...?
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
<li><strong>Next message:</strong> <a href="6163.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="6158.php">Brian W. Barrett: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6163.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Reply:</strong> <a href="6163.php">Rainer Keller: "Re: [OMPI devel] opal / fortran / Flogical"</a>
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
