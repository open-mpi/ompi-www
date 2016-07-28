<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:36:34 2009" -->
<!-- isoreceived="20090114013634" -->
<!-- sent="Tue, 13 Jan 2009 20:36:27 -0500" -->
<!-- isosent="20090114013627" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="FAFB6FEF-092B-4938-815B-B41CB9853459_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F621B97F-334D-448E-9430-68649E8DCDB0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 PML default choice<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5165.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's pretty weird, but you're right. Here is the code that do  
<br>
exactly what you state.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(strcmp(ompi_mtl_base_selected_component- 
<br>
<span class="quotelev1"> &gt;mtl_version.mca_component_name, &quot;psm&quot;) != 0) {
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if mtl is not PSM then back down priority, and require the  
<br>
user to */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  specify pml cm directly if that is what they want  
<br>
priority */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  of 1 is sufficient in that case as it is the only pml  
<br>
that */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*  will be considered */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*priority = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jan 13, 2009, at 20:31 , Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't care what we end up doing, but what you state is wrong.  We  
</span><br>
<span class="quotelev1">&gt; do not use the CM for all other MTLs by default.  PSM is the *ONLY*  
</span><br>
<span class="quotelev1">&gt; MTL that will cause CM to be used by default.  Portals still falls  
</span><br>
<span class="quotelev1">&gt; back to OB1 by default.  Again, don't care, don't want to change,  
</span><br>
<span class="quotelev1">&gt; just want the documentation and current behavior to match.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 6:27 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This topic was raised on the mailing list quite a few times. There  
</span><br>
<span class="quotelev2">&gt;&gt; is a major difference between the PSM and the MX support. For PSM  
</span><br>
<span class="quotelev2">&gt;&gt; there is just an MTL, which makes everything a lot simpler. The  
</span><br>
<span class="quotelev2">&gt;&gt; problem with MX is that we have an MTL and a BTL. In order to  
</span><br>
<span class="quotelev2">&gt;&gt; figure out which one to use, we have to call the init function and  
</span><br>
<span class="quotelev2">&gt;&gt; this function initialize MX. The MTL use the default values for  
</span><br>
<span class="quotelev2">&gt;&gt; this, while the BTL give some hints to the MX library (about how to  
</span><br>
<span class="quotelev2">&gt;&gt; behave based on the support level we want, i.e. such as who will  
</span><br>
<span class="quotelev2">&gt;&gt; deal with shared memory or self communications). As there can be  
</span><br>
<span class="quotelev2">&gt;&gt; only one MX initialization, as the MTL initialize first, the BTL  
</span><br>
<span class="quotelev2">&gt;&gt; will always get a wrongly initialized MX library (which can  
</span><br>
<span class="quotelev2">&gt;&gt; generate some performance problems).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What Brian describe is the best compromise we manage to find few  
</span><br>
<span class="quotelev2">&gt;&gt; months ago. If you want to get the MX CM to run, you will have to  
</span><br>
<span class="quotelev2">&gt;&gt; clearly specify on the command line --mca pml cm. All other MTL  
</span><br>
<span class="quotelev2">&gt;&gt; will have the behavior described on the README.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2009, at 20:18 , Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 13, 2009, at 5:48 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gaah!  I specifically asked Patrick and George about this and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they said that the README text was fine.  Grr...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I looked at that time, I vaguely remember that _both_ PMLs  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; were initialized but CM was eventually used because it was the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; last one. It looked broken, but it worked in the end (MTL was  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used with CM PML). I don't know if that behavior changed since.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just tested 1.3rc4 with MX and it uses the btl by default.  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reason is the cm init lowers the priority to 1 unless the MTL that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loaded is psm, in which case it stays at the higher default of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30.  It's a fairly easy fix, I think.  But the last time this was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussed people in the group had objections to using the MTL by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default with MX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5165.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.2.9rc2 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5163.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
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
