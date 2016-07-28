<?
$subject_val = "[OMPI devel] Makefile.am updates";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 13:37:29 2008" -->
<!-- isoreceived="20080321173729" -->
<!-- sent="Fri, 21 Mar 2008 13:37:01 -0400" -->
<!-- isosent="20080321173701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Makefile.am updates" -->
<!-- id="9C63018E-A5D4-4FAD-884C-7CA4B237E3F6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Makefile.am updates<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-21 13:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3495.php">Josh Hursey: "Re: [OMPI devel] New libevent to trunk?"</a>
<li><strong>Previous message:</strong> <a href="3493.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Short outage of the OSL web/mail servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<li><strong>Reply:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just wanted to give a heads-up to developers on two changes that will  
<br>
be coming in in the [hopefully] not-distant future:
<br>
<p>1. Per recent off-list discussions about the build system, I have done  
<br>
some cleanups and standardizations in the various */tools/*/ 
<br>
Makefile.am files.  A commit is coming soon that will:
<br>
&nbsp;&nbsp;&nbsp;- Somewhat simplify these Makefile.am's
<br>
&nbsp;&nbsp;&nbsp;- Make them consistent with each other (do similar actions in  
<br>
similar ways)
<br>
&nbsp;&nbsp;&nbsp;- Update to remove old kruft that was required by older versions of  
<br>
AM
<br>
<p>This work is nearly done; barring any problems from a code review,  
<br>
it'll likely be committed soon.
<br>
<p>2. Per discussions on the GNU libtool list and some advice from the  
<br>
ever-helpful Ralf W., I now know how to remove much of the code  
<br>
duplication in nearly every OMPI component Makefile.am.  The resulting  
<br>
Makefile.am's are much smaller and simpler.
<br>
<p>This work is barely started; I'll likely do this with low frequency  
<br>
over time (when I'm bored/brain-fried/procrastinating real work/etc.)  
<br>
and make a big commit when it's all done.
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
<li><strong>Next message:</strong> <a href="3495.php">Josh Hursey: "Re: [OMPI devel] New libevent to trunk?"</a>
<li><strong>Previous message:</strong> <a href="3493.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Short outage of the OSL web/mail servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
<li><strong>Reply:</strong> <a href="3498.php">Jeff Squyres: "Re: [OMPI devel] Makefile.am updates"</a>
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
