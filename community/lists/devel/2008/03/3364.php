<?
$subject_val = "Re: [OMPI devel] PLPA update: #@$!@#$";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 19:33:24 2008" -->
<!-- isoreceived="20080305003324" -->
<!-- sent="Tue, 4 Mar 2008 19:33:16 -0500" -->
<!-- isosent="20080305003316" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA update: #@$!@#$" -->
<!-- id="8A19DCA5-773A-448A-868F-B1500B98AAD2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="61B9DC03-210B-4FC0-9B69-C1678046A498_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA update: #@$!@#$<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 19:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3365.php">Jeff Squyres: "[OMPI devel] documentation trac ticket type"</a>
<li><strong>Previous message:</strong> <a href="3363.php">Ralph Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3362.php">Jeff Squyres: "[OMPI devel] PLPA update: #@$!@#$"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind; this commit didn't work at all.  I'm going to back it  
<br>
out.  :-(
<br>
<p>On Mar 4, 2008, at 7:25 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; My apologies; apparently the SVN merge of PLPA somehow didn't work
</span><br>
<span class="quotelev1">&gt; properly.  The next time you &quot;svn up&quot;, you'll get a conflict warning
</span><br>
<span class="quotelev1">&gt; about opal/mca/paffinity/linux/plpa already existing.  Do this to fix
</span><br>
<span class="quotelev1">&gt; the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd path-to-your-ompi-checkout
</span><br>
<span class="quotelev1">&gt; svn up
</span><br>
<span class="quotelev1">&gt; # see warning
</span><br>
<span class="quotelev1">&gt; rm -rf opal/mca/paffinity/linux/plpa
</span><br>
<span class="quotelev1">&gt; svn up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then it should be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry about this.  :-(
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
<li><strong>Next message:</strong> <a href="3365.php">Jeff Squyres: "[OMPI devel] documentation trac ticket type"</a>
<li><strong>Previous message:</strong> <a href="3363.php">Ralph Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>In reply to:</strong> <a href="3362.php">Jeff Squyres: "[OMPI devel] PLPA update: #@$!@#$"</a>
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
