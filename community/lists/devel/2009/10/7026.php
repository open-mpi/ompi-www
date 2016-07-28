<?
$subject_val = "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 11:15:02 2009" -->
<!-- isoreceived="20091026151502" -->
<!-- sent="Mon, 26 Oct 2009 11:14:51 -0400" -->
<!-- isosent="20091026151451" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)" -->
<!-- id="D523A311-A142-4B12-AD99-1577F93B2AA9_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="34E23316-7C09-4E77-987F-2BE6F61D7DF9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 11:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<li><strong>Previous message:</strong> <a href="7025.php">Jeff Squyres: "[OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>In reply to:</strong> <a href="7024.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<li><strong>Reply:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While these emails might have crossed on the wire, the patches  
<br>
regarding the revamping of the configure framework have been pushed  
<br>
into the trunk before the RFC ... And this is what Rainer is referring  
<br>
too.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 26, 2009, at 10:23 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It looks like Rainer's an my emails crossed in the ether:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7022.php">http://www.open-mpi.org/community/lists/devel/2009/10/7022.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2009, at 9:27 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; the patches to split the configure-magic into sub-project related  
</span><br>
<span class="quotelev2">&gt;&gt; config-
</span><br>
<span class="quotelev2">&gt;&gt; directories is certainly of the type &quot;Doing the Right Thing&quot; and as  
</span><br>
<span class="quotelev2">&gt;&gt; discussed
</span><br>
<span class="quotelev2">&gt;&gt; in a private conversation I appreciate the effort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, in the light of last weeks breakage and considering the  
</span><br>
<span class="quotelev2">&gt;&gt; criticism
</span><br>
<span class="quotelev2">&gt;&gt; others have been met with adhering to &quot;good community policy&quot;, I  
</span><br>
<span class="quotelev2">&gt;&gt; believe it
</span><br>
<span class="quotelev2">&gt;&gt; was not &quot;Done the Right Way&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; For us, having to sustain sub-projects or in my case branches, it  
</span><br>
<span class="quotelev2">&gt;&gt; makes it a
</span><br>
<span class="quotelev2">&gt;&gt; bit harder (as always not impossible ;-) to keep up, patch up, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, as is normally requested for such intrusive changes, an RFC  
</span><br>
<span class="quotelev2">&gt;&gt; letting people
</span><br>
<span class="quotelev2">&gt;&gt; know in advance would have been nice ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<li><strong>Previous message:</strong> <a href="7025.php">Jeff Squyres: "[OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>In reply to:</strong> <a href="7024.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followup fixes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<li><strong>Reply:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
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
