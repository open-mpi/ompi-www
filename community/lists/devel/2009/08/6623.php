<?
$subject_val = "Re: [OMPI devel] RFC: PML/CM priority";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:50:55 2009" -->
<!-- isoreceived="20090811195055" -->
<!-- sent="Tue, 11 Aug 2009 15:50:43 -0400" -->
<!-- isosent="20090811195043" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: PML/CM priority" -->
<!-- id="CF134FB7-36F2-40C6-8FF7-07CF5DBBD671_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C704E15-B19E-4BF3-A144-79D1E3B06474_at_eecs.utk.edu" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 15:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6624.php">Ralph Castain: "[OMPI devel] MTL PSM errors"</a>
<li><strong>Previous message:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>When asked about MTL versus BTL, we always suggest that users try both  
<br>
with their application and determine which is best. I have had  
<br>
customers report the BTL is better on Solaris (memory registration is  
<br>
expensive and the BTL can overlap registration and communication when  
<br>
it fragments a large message) and sometimes better on Linux, but not  
<br>
always.
<br>
<p>The most common issue lately is that users see a failure on high core  
<br>
count machines (8 or 16) due to the fact that both the MTL and BTL are  
<br>
opening endpoints. They run into the max number of allowable endpoints  
<br>
and OMPI aborts. I would suggest that OMPI clearly selects one CM and  
<br>
only open endpoints for that CM, if possible.
<br>
<p>Scott
<br>
<p>On Aug 11, 2009, at 3:29 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Here is an alternative solution. If instead of setting a hard coded  
</span><br>
<span class="quotelev1">&gt; value for the priority of CM, we make it use the priority of the MTL  
</span><br>
<span class="quotelev1">&gt; that get selected, we can solve this problem on a case by case  
</span><br>
<span class="quotelev1">&gt; approach by carefully setting the MTL's priority (bump up the  
</span><br>
<span class="quotelev1">&gt; portals and PSM one and decrease the MX MTL). As a result we can  
</span><br>
<span class="quotelev1">&gt; remove all the extra selection logic and priority management from  
</span><br>
<span class="quotelev1">&gt; the pml_cm_component.c, and still have a satisfactory solution for  
</span><br>
<span class="quotelev1">&gt; everybody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at 15:23 , Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 11 Aug 2009, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When compiling on systems with MX or Portals, we offer MTLs and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTLs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If MTLs are used, the PML/CM is loaded as well as the PML/OB1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question 1: Is favoring OB1 over CM required for any MTL (MX,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Portals, PSM)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George has in the past had srtong feelings on this issue, believing  
</span><br>
<span class="quotelev2">&gt;&gt; that for MX, OB1 is prefered over CM.  For Portals, it's probably  
</span><br>
<span class="quotelev2">&gt;&gt; in the noise, but the BTL had been better tested than the MTL, so  
</span><br>
<span class="quotelev2">&gt;&gt; it was left as the default.  Obviously, PSM is a much better choice  
</span><br>
<span class="quotelev2">&gt;&gt; on InfiniPath than straight OFED, hence the odd priority bump.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point, I would have no objection to making CM's priority  
</span><br>
<span class="quotelev2">&gt;&gt; higher for Portals.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question 2: If it is, I would like to reflect this in the default  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priorities,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aka have CM have a priority lower than OB1 and in the case of PSM  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; raising it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have strong feelings on this one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6624.php">Ralph Castain: "[OMPI devel] MTL PSM errors"</a>
<li><strong>Previous message:</strong> <a href="6622.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6620.php">George Bosilca: "Re: [OMPI devel] RFC: PML/CM priority"</a>
<!-- nextthread="start" -->
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
