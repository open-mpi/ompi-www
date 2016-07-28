<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 05:00:33 2009" -->
<!-- isoreceived="20090905090033" -->
<!-- sent="Sat, 5 Sep 2009 12:00:29 +0300" -->
<!-- isosent="20090905090029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="6791396F-E4BF-4F6E-A901-D707B0C3252D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0909041641270.31624_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 05:00:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<li><strong>In reply to:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2009, at 5:47 PM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Understood. So, let's say that we're only implementing a hurdle to
</span><br>
<span class="quotelev1">&gt; discourage users from doing things wrong. I guess the efficiency of  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; will reside in the message displayed to the user (&quot;You are about to  
</span><br>
<span class="quotelev1">&gt; break
</span><br>
<span class="quotelev1">&gt; the entire machine and you will be fined if you try to circumvent  
</span><br>
<span class="quotelev1">&gt; this in
</span><br>
<span class="quotelev1">&gt; any way&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the warning message should be set by administrators
</span><br>
<span class="quotelev1">&gt; ($OMPI/.../no-override.txt). It would certainly be more efficient :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ralph is certainly right: there is no way that we can prevent users --  
<br>
even those with the best of intentions -- from circumventing the  
<br>
system when they perceive the system not working they way they want it  
<br>
to (such is the nature of open source).  So this functionality is just  
<br>
adding another hurdle towards trying to help prevent that behavior.   
<br>
It does help in [ISV] applications where OMPI is statically linked to  
<br>
the app -- in that case, the user *won't* be able to just replace the  
<br>
system OMPI with their own.
<br>
<p>That being said, it does seem like the best-functioning hurdle would  
<br>
be to print a site-specific message when users try to override priv  
<br>
params (&quot;Bob the sysadmin set a parameter for this system that you  
<br>
tried to override.  See <a href="http://internal/why-ompi-is-set-this-way.hml">http://internal/why-ompi-is-set-this-way.hml</a>  
<br>
for an explanation of OMPI site-wide settings&quot;).  This might give well- 
<br>
intentioned users a clue as to *why* the system is not functioning the  
<br>
way that they expect, potentially educating them and deterring  
<br>
circumventing the system.
<br>
<p>I think that's the best that we can do.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<li><strong>In reply to:</strong> <a href="6777.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6790.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
