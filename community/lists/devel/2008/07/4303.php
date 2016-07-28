<?
$subject_val = "Re: [OMPI devel] v1.3 RM: need a ruling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 13:56:35 2008" -->
<!-- isoreceived="20080710175635" -->
<!-- sent="Thu, 10 Jul 2008 13:56:23 -0400" -->
<!-- isosent="20080710175623" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3 RM: need a ruling" -->
<!-- id="444B7F11-0804-4F93-A552-B59CE71BB282_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44079e5f0807100833o11b782acseed4bfa01f1066ae_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.3 RM: need a ruling<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 13:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm 100% with Brad on this. Please go ahead and include this feature  
<br>
in the 1.3.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 10, 2008, at 11:33 AM, Brad Benton wrote:
<br>
<p><span class="quotelev1">&gt; I think this is very reasonable to go ahead and include for 1.3.  I  
</span><br>
<span class="quotelev1">&gt; find that preferable to a 1.3-specific &quot;wonky&quot; workaround.  Plus,  
</span><br>
<span class="quotelev1">&gt; this sounds like something that is very good to have in general.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 9, 2008 at 8:49 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; v1.3 RMs: Due to some recent work, the MCA parameter  
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone disappeared -- it was moved and renamed to be  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_alone.  This is Bad because we have a lot of  
</span><br>
<span class="quotelev1">&gt; historical precent based on the MCA param name  
</span><br>
<span class="quotelev1">&gt; &quot;mpi_paffinity_alone&quot; (FAQ, PPT presentations, e-mails on public  
</span><br>
<span class="quotelev1">&gt; lists, etc.).  So it needed to be restored for v1.3.  I just noticed  
</span><br>
<span class="quotelev1">&gt; that I hadn't opened a ticket on this -- sorry -- I opened #1383  
</span><br>
<span class="quotelev1">&gt; tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a variety of reasons described in the commit message r1383,  
</span><br>
<span class="quotelev1">&gt; Lenny and I first decided that it would be best to fix this problem  
</span><br>
<span class="quotelev1">&gt; by the functionality committed in r18770 (have the ability to find  
</span><br>
<span class="quotelev1">&gt; out where an MCA parameter was set).  This would allow us to  
</span><br>
<span class="quotelev1">&gt; register two MCA params: mpi_paffinity_alone and  
</span><br>
<span class="quotelev1">&gt; opal_paffinity_alone, and generally do the Right Thing (because we  
</span><br>
<span class="quotelev1">&gt; could then tell if a user had set a value or whether it was a  
</span><br>
<span class="quotelev1">&gt; default MCA param value).  This functionality will also be useful in  
</span><br>
<span class="quotelev1">&gt; the openib BTL, where there is a blend of MCA parameters and INI  
</span><br>
<span class="quotelev1">&gt; file parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, after doing that, it seemed like only a few more steps to  
</span><br>
<span class="quotelev1">&gt; implement an overall better solution: implement &quot;synonyms&quot; for MCA  
</span><br>
<span class="quotelev1">&gt; parameters.  I.e., register the name &quot;mpi_paffinity_alone&quot; as a  
</span><br>
<span class="quotelev1">&gt; synonym for opal_paffinity_alone.  Along the way, it was trivial to  
</span><br>
<span class="quotelev1">&gt; add a &quot;deprecated&quot; flag for MCA parameters that we no longer want to  
</span><br>
<span class="quotelev1">&gt; use anymore (this deprecated flag is also useful in the OB1 PML and  
</span><br>
<span class="quotelev1">&gt; openib BTL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to fix a problem that needed to be fixed for v1.3 (restore the  
</span><br>
<span class="quotelev1">&gt; MCA parameter &quot;mpi_paffinity_alone&quot;), I ended up implementing new  
</span><br>
<span class="quotelev1">&gt; functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this go into v1.3, or do we need to implement some kind of  
</span><br>
<span class="quotelev1">&gt; alternate fix?  (I admit to not having thought through what it would  
</span><br>
<span class="quotelev1">&gt; take to fix without the new MCA parameter functionality -- it might  
</span><br>
<span class="quotelev1">&gt; be kinda wonky)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4303/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
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
