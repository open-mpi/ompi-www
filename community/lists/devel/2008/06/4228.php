<?
$subject_val = "Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 11:23:19 2008" -->
<!-- isoreceived="20080625152319" -->
<!-- sent="Wed, 25 Jun 2008 11:23:13 -0400" -->
<!-- isosent="20080625152313" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy" -->
<!-- id="7B43C3F3-EA59-4314-883B-49C6095E58CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44079e5f0806241933y71dcfcddida699cecf6b0a439_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-25 11:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4229.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4227.php">Jeff Squyres: "[OMPI devel] openib btl: HCA -&gt; device"</a>
<li><strong>In reply to:</strong> <a href="4225.php">Brad Benton: "[OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per our fearless leaders' request, I've branched for v1.3.  I did the  
<br>
following:
<br>
<p>- copied trunk to a new /branches/v1.3 tree
<br>
- per RM direction, all developers are &quot;weapons free&quot; in the new v1.3  
<br>
tree
<br>
- changed VERSION on the trunk to v1.4.0a1
<br>
- updated <a href="http://www.open-mpi.org/nightly/">http://www.open-mpi.org/nightly/</a> to include v1.3 nightly  
<br>
snapshot tarballs
<br>
- updated the IU scripts to make nightly snapshot tarballs to include  
<br>
the new branch
<br>
<p>I ran the updated IU nightly snapshot tarball script; it should  
<br>
populate the new v1.3 page and put a new &quot;v1.4&quot; snapshot tarball on  
<br>
the trunk page in the next 30-60 minutes (it takes a while because we  
<br>
do a full &quot;make distcheck&quot; on each tarball).
<br>
<p><p>On Jun 24, 2008, at 10:33 PM, Brad Benton wrote:
<br>
<p><span class="quotelev1">&gt; All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The trunk is now ready to be branched for the 1.3 release.  Jeff has  
</span><br>
<span class="quotelev1">&gt; volunteered to do the branch in his copious spare time (thanks  
</span><br>
<span class="quotelev1">&gt; Jeff!).  So, I expect that to happen either this evening or sometime  
</span><br>
<span class="quotelev1">&gt; tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are numerous tickets to resolve to get 1.3 ready for release.   
</span><br>
<span class="quotelev1">&gt; So, for the time being (i.e., the next 2-4 weeks) we will not be  
</span><br>
<span class="quotelev1">&gt; formally managing updates to the 1.3 branch.  However, please relate  
</span><br>
<span class="quotelev1">&gt; all checkins to one or more tickets.  Also, please ensure that large  
</span><br>
<span class="quotelev1">&gt; changes get reviewed before checking in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --brad
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
<li><strong>Next message:</strong> <a href="4229.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4227.php">Jeff Squyres: "[OMPI devel] openib btl: HCA -&gt; device"</a>
<li><strong>In reply to:</strong> <a href="4225.php">Brad Benton: "[OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<!-- nextthread="start" -->
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
