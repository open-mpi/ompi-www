<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 11:10:27 2012" -->
<!-- isoreceived="20120621151027" -->
<!-- sent="Thu, 21 Jun 2012 11:10:22 -0400" -->
<!-- isosent="20120621151022" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="6461DBD9-4ADB-48AC-89F9-51BD98C85BF0_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E81FD41C-84BB-4CC4-BF72-300E10E5119C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 11:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11146.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11146.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 20, 2012, at 4:25 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hate it ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as I understand it is not reason to rename it. The OFED-lovin components should look at $with_openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, sorry -- I didn't think this would be controversial.
</span><br>
<p>It is not controversial. The &quot;hate&quot; was only the option on the list :)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious: why do you hate it?  OpenIB is a name that hasn't existed in years -- we already have to 'splain it.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why not use a name that is commonly recognizable, like --with-ofed, or --with-of?
</span><br>
<p>OpenIB BTL is the primary source cause for existence of the OOB UD component. So, it is very natural, that in order to enable OPENIB BTL (with all he supportive components, like oob)  user uses --with-openib-*  . Logically it sounds very reasonable.
<br>
<p>OFUD - with all the respect, this components is a leftover of the DR PML, which was removed from the trunk. I'm not sure why we keep OFUD in the trunk.
<br>
<p>I remember that some people are expressed interested in reincarnation of the  OFUD BTL.Well,  when the new OFUD (or whatever) will be ready, we may discuss the naming issue again. 
<br>
<p>Bottom line, on this stage the renaming seems totally confusing. 
<br>
&nbsp;&nbsp;
<br>
Regards,
<br>
Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11145.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11143.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11146.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11146.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
