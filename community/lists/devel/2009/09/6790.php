<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  5 11:10:58 2009" -->
<!-- isoreceived="20090905151058" -->
<!-- sent="Sat, 5 Sep 2009 09:10:43 -0600" -->
<!-- isosent="20090905151043" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="E9892E6B-9EF3-47CA-B6AA-59A78C19AE95_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6791396F-E4BF-4F6E-A901-D707B0C3252D_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-05 11:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6791.php">Wolfgang Bangerth: "[OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>Previous message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2009, at 3:00 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 4, 2009, at 5:47 PM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Understood. So, let's say that we're only implementing a hurdle to
</span><br>
<span class="quotelev2">&gt;&gt; discourage users from doing things wrong. I guess the efficiency of  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; will reside in the message displayed to the user (&quot;You are about to  
</span><br>
<span class="quotelev2">&gt;&gt; break
</span><br>
<span class="quotelev2">&gt;&gt; the entire machine and you will be fined if you try to circumvent  
</span><br>
<span class="quotelev2">&gt;&gt; this in
</span><br>
<span class="quotelev2">&gt;&gt; any way&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the warning message should be set by administrators
</span><br>
<span class="quotelev2">&gt;&gt; ($OMPI/.../no-override.txt). It would certainly be more efficient :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph is certainly right: there is no way that we can prevent users  
</span><br>
<span class="quotelev1">&gt; -- even those with the best of intentions -- from circumventing the  
</span><br>
<span class="quotelev1">&gt; system when they perceive the system not working they way they want  
</span><br>
<span class="quotelev1">&gt; it to (such is the nature of open source).  So this functionality is  
</span><br>
<span class="quotelev1">&gt; just adding another hurdle towards trying to help prevent that  
</span><br>
<span class="quotelev1">&gt; behavior.  It does help in [ISV] applications where OMPI is  
</span><br>
<span class="quotelev1">&gt; statically linked to the app -- in that case, the user *won't* be  
</span><br>
<span class="quotelev1">&gt; able to just replace the system OMPI with their own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, it does seem like the best-functioning hurdle would  
</span><br>
<span class="quotelev1">&gt; be to print a site-specific message when users try to override priv  
</span><br>
<span class="quotelev1">&gt; params (&quot;Bob the sysadmin set a parameter for this system that you  
</span><br>
<span class="quotelev1">&gt; tried to override.  See <a href="http://internal/why-ompi-is-set-this-way.hml">http://internal/why-ompi-is-set-this-way.hml</a>  
</span><br>
<span class="quotelev1">&gt; for an explanation of OMPI site-wide settings&quot;).  This might give  
</span><br>
<span class="quotelev1">&gt; well-intentioned users a clue as to *why* the system is not  
</span><br>
<span class="quotelev1">&gt; functioning the way that they expect, potentially educating them and  
</span><br>
<span class="quotelev1">&gt; deterring circumventing the system.
</span><br>
<p>I really like this addition - if users just see something not work,  
<br>
they will tend to believe something is broken and try to develop  
<br>
workarounds. Explaining -why- it is restricted will help reduce that  
<br>
reaction.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that's the best that we can do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6791.php">Wolfgang Bangerth: "[OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>Previous message:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6789.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
