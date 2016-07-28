<?
$subject_val = "Re: [OMPI devel] v1.3 RM: need a ruling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 15:42:43 2008" -->
<!-- isoreceived="20080710194243" -->
<!-- sent="Thu, 10 Jul 2008 15:42:36 -0400" -->
<!-- isosent="20080710194236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3 RM: need a ruling" -->
<!-- id="AE1F7F44-A5CE-40AE-9AA0-D3DB15C0B130_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1840C432-DDCE-4D50-BC17-402E8DE925C8_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 15:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4309.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4307.php">Jeff Squyres: "Re: [OMPI devel] July meeting"</a>
<li><strong>In reply to:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check that -- Ralph and I talked more about #1383 and have come up  
<br>
with a decent/better solution that a) is not wonky and b) does not  
<br>
involve MCA parameter synonyms.  We're working on it in an hg and will  
<br>
put it back when done (probably within a business day or three).
<br>
<p>So I think the MCA synonym stuff *isn't* needed for v1.3 after all.
<br>
<p>I think the MCA param synonyms and &quot;deprecated&quot; stuff is useful for  
<br>
the future, but at this point, nothing in v1.3 would use it.  So my  
<br>
$0.02 is that we should leave it out.
<br>
<p><p><p>On Jul 10, 2008, at 2:00 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; K, will do.  Note that it turns out that we did not yet solve the
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone issue, but we're working on it.  I'm working on
</span><br>
<span class="quotelev1">&gt; the IOF issue ATM; will return to mpi_paffinity_alone in a bit...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2008, at 1:56 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm 100% with Brad on this. Please go ahead and include this feature
</span><br>
<span class="quotelev2">&gt; &gt; in the 1.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 10, 2008, at 11:33 AM, Brad Benton wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think this is very reasonable to go ahead and include for 1.3.  I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; find that preferable to a 1.3-specific &quot;wonky&quot; workaround.  Plus,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this sounds like something that is very good to have in general.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --brad
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jul 9, 2008 at 8:49 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; v1.3 RMs: Due to some recent work, the MCA parameter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi_paffinity_alone disappeared -- it was moved and renamed to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_paffinity_alone.  This is Bad because we have a lot of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; historical precent based on the MCA param name
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;mpi_paffinity_alone&quot; (FAQ, PPT presentations, e-mails on public
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lists, etc.).  So it needed to be restored for v1.3.  I just
</span><br>
<span class="quotelev3">&gt; &gt;&gt; noticed that I hadn't opened a ticket on this -- sorry -- I opened
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #1383 tonight.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For a variety of reasons described in the commit message r1383,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lenny and I first decided that it would be best to fix this problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; by the functionality committed in r18770 (have the ability to find
</span><br>
<span class="quotelev3">&gt; &gt;&gt; out where an MCA parameter was set).  This would allow us to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; register two MCA params: mpi_paffinity_alone and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; opal_paffinity_alone, and generally do the Right Thing (because we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; could then tell if a user had set a value or whether it was a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default MCA param value).  This functionality will also be useful
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in the openib BTL, where there is a blend of MCA parameters and INI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file parameters.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, after doing that, it seemed like only a few more steps to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implement an overall better solution: implement &quot;synonyms&quot; for MCA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parameters.  I.e., register the name &quot;mpi_paffinity_alone&quot; as a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; synonym for opal_paffinity_alone.  Along the way, it was trivial to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; add a &quot;deprecated&quot; flag for MCA parameters that we no longer want
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to use anymore (this deprecated flag is also useful in the OB1 PML
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and openib BTL).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So to fix a problem that needed to be fixed for v1.3 (restore the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MCA parameter &quot;mpi_paffinity_alone&quot;), I ended up implementing new
</span><br>
<span class="quotelev3">&gt; &gt;&gt; functionality.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can this go into v1.3, or do we need to implement some kind of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alternate fix?  (I admit to not having thought through what it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would take to fix without the new MCA parameter functionality -- it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; might be kinda wonky)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4309.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4307.php">Jeff Squyres: "Re: [OMPI devel] July meeting"</a>
<li><strong>In reply to:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Reply:</strong> <a href="4313.php">Terry Dontje: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
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
