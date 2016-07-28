<?
$subject_val = "Re: [OMPI devel] 1.4.5rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 10:39:51 2012" -->
<!-- isoreceived="20120131153951" -->
<!-- sent="Tue, 31 Jan 2012 10:39:46 -0500" -->
<!-- isosent="20120131153946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc3 released" -->
<!-- id="3BEFF057-5CA8-4547-867B-C5E19DD326D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F27C592.1070008_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 10:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10286.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10286.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I blame the solar flares from last week.
<br>
<p>We'll look at the remaining items from Paul's list (many thanks, Paul!) today on the weekly call.
<br>
<p><p>On Jan 31, 2012, at 5:42 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Good catch, for some reason the CMR of the patch I attached to ticket #2977 didn't apply the CXX part.  I've reopened the ticket asking Jeff to apply that part of the patch :-).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/30/2012 6:17 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I don't plan to rerun the dozens of different platforms for which I reported 1.4.5rc2 as PASSing. 
</span><br>
<span class="quotelev2">&gt;&gt; I will try to recheck all the FAILure cases I reported. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If anybody wants me to retest any specific platforms, please let me know. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do see that Terry did NOT yet add &quot;use CXX=CC but not CXX=sunCC&quot; to the README. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/30/2012 2:25 PM, Jeff Squyres wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A few little fixes incorporated; posted in the usual location: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The shared library versions still need to be updated before final release.         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Combined patch from Fujitsu. Fixes a collections of typos over the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code and man pages. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modify Solaris Studio Complier notes about using xarch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixes #2967: pretty much copy the text from MPI-2.2 in the description 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the group argument to MPI_COMM_CREATE. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixes #2844: ensure to take the value of --with(out)-memory-manager 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into account when configuring the components of the faramework.  If 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-memory-manager was given, then we really don't want any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory managers to be used. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NEWS and README updated 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10288.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10286.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10286.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10283.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
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
