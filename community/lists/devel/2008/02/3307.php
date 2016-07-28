<?
$subject_val = "Re: [OMPI devel] plpa";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 10:25:17 2008" -->
<!-- isoreceived="20080227152517" -->
<!-- sent="Wed, 27 Feb 2008 10:24:42 -0500" -->
<!-- isosent="20080227152442" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] plpa" -->
<!-- id="E569BBA2-AA47-4B68-99AD-BE6164DC3D50_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53d4221c0802260043r13ea8aedl11b373b502ac48b1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] plpa<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 10:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3308.php">Ralph Castain: "[OMPI devel] Taking the trunk..."</a>
<li><strong>Previous message:</strong> <a href="3306.php">Ralph H Castain: "Re: [OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<li><strong>In reply to:</strong> <a href="3303.php">Sharon Melamed: "Re: [OMPI devel] plpa"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  Current plan is to wait for Ralph to finish his big ORTE merge,  
<br>
probably give it a day or two to get a solid night's worth of MTT  
<br>
testing in, and then merge in the new PLPA.
<br>
<p>Thanks for all your patience, guys...
<br>
<p><p><p>On Feb 26, 2008, at 3:43 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I prefer option 1. You should use your branch and merge it to the
</span><br>
<span class="quotelev1">&gt; trunk. We shuold synchronize with the trunk and finish our work. The
</span><br>
<span class="quotelev1">&gt; reason that we made the PLPA change in our brunch is that we needed it
</span><br>
<span class="quotelev1">&gt; to our work. But we made it as a temporary change until the real thing
</span><br>
<span class="quotelev1">&gt; will be in the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sharon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 25, 2008 at 5:13 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This confusion is probably all my fault for taking so long to release
</span><br>
<span class="quotelev2">&gt;&gt; PLPA and get it into OMPI.  Sorry about this, guys.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's where we are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - PLPA v1.1 has been released (<a href="http://www.open-mpi.org/projects/">http://www.open-mpi.org/projects/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; plpa/)
</span><br>
<span class="quotelev2">&gt;&gt; - I updated the /vendor/plpa branch this morning
</span><br>
<span class="quotelev2">&gt;&gt; - Rather than try to sync up with Sharon for his paffinity/linux
</span><br>
<span class="quotelev2">&gt;&gt; patch, I made a new branch from trunk r17581: /tmp-public/plpa-v1.1.
</span><br>
<span class="quotelev2">&gt;&gt; I brought in the new PLPA v1.1 on that branch using the SVN 3rd party
</span><br>
<span class="quotelev2">&gt;&gt; import methodology.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From your branch, I'm not sure if we did effectively the same things
</span><br>
<span class="quotelev2">&gt;&gt; (I see that you brought in plpa v1.1, etc.).  So I think we can:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. use my branch and bring in the paffinity and paffinity/linux  
</span><br>
<span class="quotelev2">&gt;&gt; patch,
</span><br>
<span class="quotelev2">&gt;&gt; then merge that to the trunk
</span><br>
<span class="quotelev2">&gt;&gt; 2. use your branch and do something similar (although I'm not sure  
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; used the SVN 3rd party import stuff or not...?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which do you want to do?
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
<li><strong>Next message:</strong> <a href="3308.php">Ralph Castain: "[OMPI devel] Taking the trunk..."</a>
<li><strong>Previous message:</strong> <a href="3306.php">Ralph H Castain: "Re: [OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<li><strong>In reply to:</strong> <a href="3303.php">Sharon Melamed: "Re: [OMPI devel] plpa"</a>
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
