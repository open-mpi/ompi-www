<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:31:08 2009" -->
<!-- isoreceived="20090114013108" -->
<!-- sent="Tue, 13 Jan 2009 18:31:02 -0700" -->
<!-- isosent="20090114013102" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="F621B97F-334D-448E-9430-68649E8DCDB0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8E7883C2-21FF-4219-A38F-C6ACDB4E23A2_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5164.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5164.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5164.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -
<br>
<p>I don't care what we end up doing, but what you state is wrong.  We do  
<br>
not use the CM for all other MTLs by default.  PSM is the *ONLY* MTL  
<br>
that will cause CM to be used by default.  Portals still falls back to  
<br>
OB1 by default.  Again, don't care, don't want to change, just want  
<br>
the documentation and current behavior to match.
<br>
<p>Brian
<br>
<p>On Jan 13, 2009, at 6:27 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This topic was raised on the mailing list quite a few times. There  
</span><br>
<span class="quotelev1">&gt; is a major difference between the PSM and the MX support. For PSM  
</span><br>
<span class="quotelev1">&gt; there is just an MTL, which makes everything a lot simpler. The  
</span><br>
<span class="quotelev1">&gt; problem with MX is that we have an MTL and a BTL. In order to figure  
</span><br>
<span class="quotelev1">&gt; out which one to use, we have to call the init function and this  
</span><br>
<span class="quotelev1">&gt; function initialize MX. The MTL use the default values for this,  
</span><br>
<span class="quotelev1">&gt; while the BTL give some hints to the MX library (about how to behave  
</span><br>
<span class="quotelev1">&gt; based on the support level we want, i.e. such as who will deal with  
</span><br>
<span class="quotelev1">&gt; shared memory or self communications). As there can be only one MX  
</span><br>
<span class="quotelev1">&gt; initialization, as the MTL initialize first, the BTL will always get  
</span><br>
<span class="quotelev1">&gt; a wrongly initialized MX library (which can generate some  
</span><br>
<span class="quotelev1">&gt; performance problems).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What Brian describe is the best compromise we manage to find few  
</span><br>
<span class="quotelev1">&gt; months ago. If you want to get the MX CM to run, you will have to  
</span><br>
<span class="quotelev1">&gt; clearly specify on the command line --mca pml cm. All other MTL will  
</span><br>
<span class="quotelev1">&gt; have the behavior described on the README.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 20:18 , Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2009, at 5:48 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gaah!  I specifically asked Patrick and George about this and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they said that the README text was fine.  Grr...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I looked at that time, I vaguely remember that _both_ PMLs  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were initialized but CM was eventually used because it was the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; last one. It looked broken, but it worked in the end (MTL was used  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with CM PML). I don't know if that behavior changed since.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just tested 1.3rc4 with MX and it uses the btl by default.  The  
</span><br>
<span class="quotelev2">&gt;&gt; reason is the cm init lowers the priority to 1 unless the MTL that  
</span><br>
<span class="quotelev2">&gt;&gt; loaded is psm, in which case it stays at the higher default of 30.   
</span><br>
<span class="quotelev2">&gt;&gt; It's a fairly easy fix, I think.  But the last time this was  
</span><br>
<span class="quotelev2">&gt;&gt; discussed people in the group had objections to using the MTL by  
</span><br>
<span class="quotelev2">&gt;&gt; default with MX.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5164.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5164.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5164.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
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
