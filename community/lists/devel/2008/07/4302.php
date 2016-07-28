<?
$subject_val = "Re: [OMPI devel] v1.3 RM: need a ruling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 11:33:25 2008" -->
<!-- isoreceived="20080710153325" -->
<!-- sent="Thu, 10 Jul 2008 10:33:11 -0500" -->
<!-- isosent="20080710153311" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3 RM: need a ruling" -->
<!-- id="44079e5f0807100833o11b782acseed4bfa01f1066ae_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FB926456-A40A-47C1-BFAB-57612C50000A_at_cisco.com" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 11:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4303.php">George Bosilca: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4294.php">Jeff Squyres: "[OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4303.php">George Bosilca: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4303.php">George Bosilca: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is very reasonable to go ahead and include for 1.3.  I find
<br>
that preferable to a 1.3-specific &quot;wonky&quot; workaround.  Plus, this sounds
<br>
like something that is very good to have in general.
<br>
<p>--brad
<br>
<p><p>On Wed, Jul 9, 2008 at 8:49 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; v1.3 RMs: Due to some recent work, the MCA parameter mpi_paffinity_alone
</span><br>
<span class="quotelev1">&gt; disappeared -- it was moved and renamed to be opal_paffinity_alone.  This is
</span><br>
<span class="quotelev1">&gt; Bad because we have a lot of historical precent based on the MCA param name
</span><br>
<span class="quotelev1">&gt; &quot;mpi_paffinity_alone&quot; (FAQ, PPT presentations, e-mails on public lists,
</span><br>
<span class="quotelev1">&gt; etc.).  So it needed to be restored for v1.3.  I just noticed that I hadn't
</span><br>
<span class="quotelev1">&gt; opened a ticket on this -- sorry -- I opened #1383 tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a variety of reasons described in the commit message r1383, Lenny and I
</span><br>
<span class="quotelev1">&gt; first decided that it would be best to fix this problem by the functionality
</span><br>
<span class="quotelev1">&gt; committed in r18770 (have the ability to find out where an MCA parameter was
</span><br>
<span class="quotelev1">&gt; set).  This would allow us to register two MCA params: mpi_paffinity_alone
</span><br>
<span class="quotelev1">&gt; and opal_paffinity_alone, and generally do the Right Thing (because we could
</span><br>
<span class="quotelev1">&gt; then tell if a user had set a value or whether it was a default MCA param
</span><br>
<span class="quotelev1">&gt; value).  This functionality will also be useful in the openib BTL, where
</span><br>
<span class="quotelev1">&gt; there is a blend of MCA parameters and INI file parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, after doing that, it seemed like only a few more steps to
</span><br>
<span class="quotelev1">&gt; implement an overall better solution: implement &quot;synonyms&quot; for MCA
</span><br>
<span class="quotelev1">&gt; parameters.  I.e., register the name &quot;mpi_paffinity_alone&quot; as a synonym for
</span><br>
<span class="quotelev1">&gt; opal_paffinity_alone.  Along the way, it was trivial to add a &quot;deprecated&quot;
</span><br>
<span class="quotelev1">&gt; flag for MCA parameters that we no longer want to use anymore (this
</span><br>
<span class="quotelev1">&gt; deprecated flag is also useful in the OB1 PML and openib BTL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to fix a problem that needed to be fixed for v1.3 (restore the MCA
</span><br>
<span class="quotelev1">&gt; parameter &quot;mpi_paffinity_alone&quot;), I ended up implementing new functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this go into v1.3, or do we need to implement some kind of alternate
</span><br>
<span class="quotelev1">&gt; fix?  (I admit to not having thought through what it would take to fix
</span><br>
<span class="quotelev1">&gt; without the new MCA parameter functionality -- it might be kinda wonky)
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4303.php">George Bosilca: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4294.php">Jeff Squyres: "[OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4303.php">George Bosilca: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4303.php">George Bosilca: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
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
