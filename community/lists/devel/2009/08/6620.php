<?
$subject_val = "Re: [OMPI devel] RFC: PML/CM priority";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:29:28 2009" -->
<!-- isoreceived="20090811192928" -->
<!-- sent="Tue, 11 Aug 2009 15:29:19 -0400" -->
<!-- isosent="20090811192919" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: PML/CM priority" -->
<!-- id="4C704E15-B19E-4BF3-A144-79D1E3B06474_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0908111518440.21604_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: PML/CM priority<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 15:29:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>In reply to:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Reply:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is an alternative solution. If instead of setting a hard coded  
<br>
value for the priority of CM, we make it use the priority of the MTL  
<br>
that get selected, we can solve this problem on a case by case  
<br>
approach by carefully setting the MTL's priority (bump up the portals  
<br>
and PSM one and decrease the MX MTL). As a result we can remove all  
<br>
the extra selection logic and priority management from the  
<br>
pml_cm_component.c, and still have a satisfactory solution for  
<br>
everybody.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 11, 2009, at 15:23 , Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 11 Aug 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When compiling on systems with MX or Portals, we offer MTLs and BTLs.
</span><br>
<span class="quotelev2">&gt;&gt; If MTLs are used, the PML/CM is loaded as well as the PML/OB1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question 1: Is favoring OB1 over CM required for any MTL (MX,  
</span><br>
<span class="quotelev2">&gt;&gt; Portals, PSM)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George has in the past had srtong feelings on this issue, believing  
</span><br>
<span class="quotelev1">&gt; that for MX, OB1 is prefered over CM.  For Portals, it's probably in  
</span><br>
<span class="quotelev1">&gt; the noise, but the BTL had been better tested than the MTL, so it  
</span><br>
<span class="quotelev1">&gt; was left as the default.  Obviously, PSM is a much better choice on  
</span><br>
<span class="quotelev1">&gt; InfiniPath than straight OFED, hence the odd priority bump.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point, I would have no objection to making CM's priority  
</span><br>
<span class="quotelev1">&gt; higher for Portals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question 2: If it is, I would like to reflect this in the default  
</span><br>
<span class="quotelev2">&gt;&gt; priorities,
</span><br>
<span class="quotelev2">&gt;&gt; aka have CM have a priority lower than OB1 and in the case of PSM  
</span><br>
<span class="quotelev2">&gt;&gt; raising it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have strong feelings on this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>In reply to:</strong> <a href="6619.php">Brian W. Barrett: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<li><strong>Reply:</strong> <a href="6623.php">Scott Atchley: "Re: [OMPI devel] RFC: PML/CM priority"</a>
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
