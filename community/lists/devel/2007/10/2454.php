<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 10:12:30 2007" -->
<!-- isoreceived="20071017141230" -->
<!-- sent="Wed, 17 Oct 2007 10:12:04 -0400" -->
<!-- isosent="20071017141204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: delete mvapi BTL for v1.3" -->
<!-- id="2F49265A-FBB3-4772-B6CA-10A044A55A86_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4F12E47D-0601-4BB0-91F2-781476A16202_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 10:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2455.php">Don Kerr: "[OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<li><strong>Previous message:</strong> <a href="2453.php">Jeff Squyres: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Aune confirms that it's ok for his customers to remove the mvapi  
<br>
BTL such that it will not be available from v1.3 and forward.
<br>
<p>Since the RFC expired and only one person had any comment (which we  
<br>
resolved off-list), I have therefore svn rm'ed the mvapi BTL from the  
<br>
OMPI trunk (<a href="https://svn.open-mpi.org/trac/ompi/changeset/16483">https://svn.open-mpi.org/trac/ompi/changeset/16483</a>).
<br>
<p>Woo hoo!
<br>
<p><p><p>On Oct 11, 2007, at 2:56 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Reminder -- this RFC expires tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Speak now or forever hold your peace...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2007, at 7:46 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Remove the mvapi BTL for the v1.3 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: None of the IB vendors want to maintain it anymore; our future
</span><br>
<span class="quotelev2">&gt;&gt; is OFED.  If someone still has mvapi IB drivers, they can use the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI v1.2 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: svn rm ompi/mca/btl/mvapi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Before the v1.3 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: COB, Thurs, Oct 11, 2007
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; None of the IB vendors are interested in maintaining the &quot;mvapi&quot; BTL
</span><br>
<span class="quotelev2">&gt;&gt; anymore.  Indeed, none of us have updated it with any of the new/
</span><br>
<span class="quotelev2">&gt;&gt; interesting/better performance features that went into the openib BTL
</span><br>
<span class="quotelev2">&gt;&gt; over the past year (or more).  Additionally, some changes may be
</span><br>
<span class="quotelev2">&gt;&gt; coming in the OMPI infrastructure that would *require* some revamping
</span><br>
<span class="quotelev2">&gt;&gt; in the mvapi BTL -- and no one of Cisco, Voltaire, Mellanox is
</span><br>
<span class="quotelev2">&gt;&gt; willing to do it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we'd like to ditch the mvapi BTL starting with v1.3 and have the
</span><br>
<span class="quotelev2">&gt;&gt; official guidance be that if you have mvapi, you need to use the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; v1.2 series (i.e., remove this from the SVN trunk in the Very Near
</span><br>
<span class="quotelev2">&gt;&gt; Future).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2455.php">Don Kerr: "[OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<li><strong>Previous message:</strong> <a href="2453.php">Jeff Squyres: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>In reply to:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
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
