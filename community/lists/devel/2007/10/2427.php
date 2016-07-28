<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 17:14:53 2007" -->
<!-- isoreceived="20071011211453" -->
<!-- sent="Thu, 11 Oct 2007 17:10:14 -0400" -->
<!-- isosent="20071011211014" -->
<!-- name="Josh Aune" -->
<!-- email="luken_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: delete mvapi BTL for v1.3" -->
<!-- id="98a233180710111410p35c86303se5b01ac96fc6d9a1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Josh Aune (<em>luken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 17:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2426.php">Jeff Squyres: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<li><strong>In reply to:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How long will the 1.2 series be maintained?
<br>
<p>This has been giving some of our customers a bit of heart burn, but it
<br>
can also be used to help push through the OFED upgrades on the
<br>
clusters (a good thing).
<br>
<p>Josh
<br>
<p>On 10/11/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Reminder -- this RFC expires tonight.
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
<span class="quotelev2">&gt; &gt; WHAT: Remove the mvapi BTL for the v1.3 release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHY: None of the IB vendors want to maintain it anymore; our future
</span><br>
<span class="quotelev2">&gt; &gt; is OFED.  If someone still has mvapi IB drivers, they can use the
</span><br>
<span class="quotelev2">&gt; &gt; OMPI v1.2 series.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: svn rm ompi/mca/btl/mvapi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; WHEN: Before the v1.3 release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: COB, Thurs, Oct 11, 2007
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; None of the IB vendors are interested in maintaining the &quot;mvapi&quot; BTL
</span><br>
<span class="quotelev2">&gt; &gt; anymore.  Indeed, none of us have updated it with any of the new/
</span><br>
<span class="quotelev2">&gt; &gt; interesting/better performance features that went into the openib BTL
</span><br>
<span class="quotelev2">&gt; &gt; over the past year (or more).  Additionally, some changes may be
</span><br>
<span class="quotelev2">&gt; &gt; coming in the OMPI infrastructure that would *require* some revamping
</span><br>
<span class="quotelev2">&gt; &gt; in the mvapi BTL -- and no one of Cisco, Voltaire, Mellanox is
</span><br>
<span class="quotelev2">&gt; &gt; willing to do it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So we'd like to ditch the mvapi BTL starting with v1.3 and have the
</span><br>
<span class="quotelev2">&gt; &gt; official guidance be that if you have mvapi, you need to use the OMPI
</span><br>
<span class="quotelev2">&gt; &gt; v1.2 series (i.e., remove this from the SVN trunk in the Very Near
</span><br>
<span class="quotelev2">&gt; &gt; Future).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2428.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2426.php">Jeff Squyres: "Re: [OMPI devel] DDT for v1.2 branch"</a>
<li><strong>In reply to:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
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
