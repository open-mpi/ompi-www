<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 16:07:42 2012" -->
<!-- isoreceived="20120202210742" -->
<!-- sent="Thu, 2 Feb 2012 16:07:36 -0500" -->
<!-- isosent="20120202210736" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss [PATCH]" -->
<!-- id="2062E579-710C-49C0-8CD7-C6D9BBD245BD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120202110035.GO4314_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 16:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2796.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4246)"</a>
<li><strong>Previous message:</strong> <a href="2794.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My $0.02 is that we should disable FFS on all versions of that compiler.  It's not like this is performance-critical code.  I'd rather it be &quot;slow&quot; and guaranteed correct than fast and maybe wrong.
<br>
<p>Meaning: I'm good with Paul's patch.  I'll commit, since no one has posted any alternatives.
<br>
<p><p>On Feb 2, 2012, at 6:00 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Paul H. Hargrove, le Thu 02 Feb 2012 02:29:08 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; + The configure-time logic is NOT trying to determine the version number, as
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a way (yet?) to pinpoint which version(s) work correctly, and
</span><br>
<span class="quotelev2">&gt;&gt; the Oracle Forums thread on the subject doesn't say.  So, it is
</span><br>
<span class="quotelev2">&gt;&gt; conservatively assuming all &quot;gccfss&quot; versions are broken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't necessarily need to be precise, suffice to know that at least
</span><br>
<span class="quotelev1">&gt; from some version the bug was fixed, and be fine with spuriously use the
</span><br>
<span class="quotelev1">&gt; generic code with old non-broken gccfss.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2796.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4246)"</a>
<li><strong>Previous message:</strong> <a href="2794.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
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
