<?
$subject_val = "[OMPI devel] PLPA update: #@$!@#$";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 19:25:14 2008" -->
<!-- isoreceived="20080305002514" -->
<!-- sent="Tue, 4 Mar 2008 19:25:04 -0500" -->
<!-- isosent="20080305002504" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] PLPA update: #@$!@#$" -->
<!-- id="61B9DC03-210B-4FC0-9B69-C1678046A498_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] PLPA update: #@$!@#$<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 19:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3363.php">Ralph Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3364.php">Jeff Squyres: "Re: [OMPI devel] PLPA update: #@$!@#$"</a>
<li><strong>Reply:</strong> <a href="3364.php">Jeff Squyres: "Re: [OMPI devel] PLPA update: #@$!@#$"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies; apparently the SVN merge of PLPA somehow didn't work  
<br>
properly.  The next time you &quot;svn up&quot;, you'll get a conflict warning  
<br>
about opal/mca/paffinity/linux/plpa already existing.  Do this to fix  
<br>
the problem:
<br>
<p>cd path-to-your-ompi-checkout
<br>
svn up
<br>
# see warning
<br>
rm -rf opal/mca/paffinity/linux/plpa
<br>
svn up
<br>
<p>And then it should be fine.
<br>
<p>I'm sorry about this.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3363.php">Ralph Castain: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3361.php">Greg Watson: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3364.php">Jeff Squyres: "Re: [OMPI devel] PLPA update: #@$!@#$"</a>
<li><strong>Reply:</strong> <a href="3364.php">Jeff Squyres: "Re: [OMPI devel] PLPA update: #@$!@#$"</a>
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
