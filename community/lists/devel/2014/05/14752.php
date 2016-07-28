<?
$subject_val = "Re: [OMPI devel] RFC: Remove autogen.sh sym link";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 08:59:03 2014" -->
<!-- isoreceived="20140508125903" -->
<!-- sent="Thu, 8 May 2014 13:59:01 +0100" -->
<!-- isosent="20140508125901" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove autogen.sh sym link" -->
<!-- id="8E1425A8-7550-45D7-ACD6-BFCDC12BFFE8_at_pittman.co.uk" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DCF2990E-73E4-4766-924E-F632F7E9F83F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove autogen.sh sym link<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 08:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14753.php">Ashley Pittman: "[OMPI devel] VPATH builds broken?"</a>
<li><strong>Previous message:</strong> <a href="14751.php">Stephen Poole: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>In reply to:</strong> <a href="14749.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This will break my build but it&#146;s an easy fix so don&#146;t let that stop you.
<br>
<p>Ashley.
<br>
<p>On 8 May 2014, at 11:08, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove the backwards-compatibility autogen.sh sym link
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Because it's time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: svn rm autogen.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconf next Tuesday, 13 May 2014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We converted from autogen.sh to autogen.pl nearly 4 years ago (2010-09-17).  The autogen.sh-&gt;autogen.pl sym link was put in shortly thereafter as a stopgap measure to give people time to update their automated scripts from autogen.sh to autogen.pl (or better yet, test and see which name they should invoke).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every time I type &quot;./au&lt;tab&gt;&quot;, it stops at &quot;./autogen.&quot;, which is just annoying.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's been nearly 4 years.  I think it's time to cut the cord: remove the autogen.sh sym link and move on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14749.php">http://www.open-mpi.org/community/lists/devel/2014/05/14749.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14753.php">Ashley Pittman: "[OMPI devel] VPATH builds broken?"</a>
<li><strong>Previous message:</strong> <a href="14751.php">Stephen Poole: "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>In reply to:</strong> <a href="14749.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove autogen.sh sym link"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
<li><strong>Reply:</strong> <a href="14756.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove autogen.sh sym link"</a>
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
