<?
$subject_val = "Re: [OMPI devel] opal_config_bottom.h problem with trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 19:55:41 2014" -->
<!-- isoreceived="20140728235541" -->
<!-- sent="Mon, 28 Jul 2014 23:55:39 +0000" -->
<!-- isosent="20140728235539" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_config_bottom.h problem with trunk" -->
<!-- id="5E32261F-7F44-48A9-B35C-C462770A16BA_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05ACB949_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_config_bottom.h problem with trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-28 19:55:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15302.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="15300.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>In reply to:</strong> <a href="15300.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h problem with trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15315.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Reply:</strong> <a href="15315.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, haven't seen that before...
<br>
<p>On Jul 28, 2014, at 6:43 PM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I was feeling lucky and decided to a fresh svn checkout of trunk and simple ./autogen.pl, ./configure
</span><br>
<span class="quotelev1">&gt; make on a opensuse 13.1. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I get a blowup in opal_config_bottom.h:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; pp_at_hagel-vm:~&gt;../../opal/include/opal_config_bottom.h:383:38: error: expected declaration specifiers or '...' before '(' token
</span><br>
<span class="quotelev1">&gt; bash: ../../opal/include/opal_config_bottom.h:383:38:: No such file or directory
</span><br>
<span class="quotelev1">&gt; hpp_at_hagel-vm:~&gt; #    define malloc(size) opal_malloc((size), __FILE__, __LINE__)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; anyone else see this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;ll spend some time on it tomorrow.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15300.php">http://www.open-mpi.org/community/lists/devel/2014/07/15300.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15302.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="15300.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>In reply to:</strong> <a href="15300.php">Pritchard Jr., Howard: "[OMPI devel] opal_config_bottom.h problem with trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15315.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Reply:</strong> <a href="15315.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
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
