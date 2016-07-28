<?
$subject_val = "Re: [OMPI devel] version number issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  7 03:06:43 2009" -->
<!-- isoreceived="20090907070643" -->
<!-- sent="Mon, 07 Sep 2009 09:00:41 +0200" -->
<!-- isosent="20090907070041" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] version number issues" -->
<!-- id="1252306841.2636.303.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="96B30E5A-388B-47D0-8876-5DBB97520B8B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] version number issues<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-07 03:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6793.php">Ralf Wildenhues: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6791.php">Wolfgang Bangerth: "[OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>In reply to:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6827.php">Jeff Squyres: "Re: [OMPI devel] version number issues"</a>
<li><strong>Reply:</strong> <a href="6827.php">Jeff Squyres: "Re: [OMPI devel] version number issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2009-09-05 at 11:33 +0300, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 2:56 PM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Actually, I didn't have the problem on my side, because hg is not  
</span><br>
<span class="quotelev2">&gt; &gt; known
</span><br>
<span class="quotelev2">&gt; &gt; in my build environment. Never noticed these lines:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Checking versions
</span><br>
<span class="quotelev2">&gt; &gt; checking for SVN version... ../configure: line 4285: hg: command not
</span><br>
<span class="quotelev2">&gt; &gt; found
</span><br>
<span class="quotelev2">&gt; &gt; done
</span><br>
<span class="quotelev2">&gt; &gt; checking Open MPI version... 1.4a1hg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I changed the subject since we're digressing a bit off the original  
</span><br>
<span class="quotelev1">&gt; RFC...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an interesting failure mode that we evidently didn't consider  
</span><br>
<span class="quotelev1">&gt; when we wrote that script.  ;-)  I guess we should check $? when  
</span><br>
<span class="quotelev1">&gt; returning and ensure that the command executed properly.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only question is -- should we abort in this case, or just put in  
</span><br>
<span class="quotelev1">&gt; &quot;unknown -- could not find hg&quot; (or whatever) as the version?  I would  
</span><br>
<span class="quotelev1">&gt; lean towards the latter;
</span><br>
<p>+1 : I think asking people to have hg in their build environment is too
<br>
constraining.
<br>
<p><p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt;  development machines may vary wildly in what  
</span><br>
<span class="quotelev1">&gt; software is installed...  Unless anyone objects, I'll do the latter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6793.php">Ralf Wildenhues: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6791.php">Wolfgang Bangerth: "[OMPI devel] Deadlock when creating too many communicators"</a>
<li><strong>In reply to:</strong> <a href="6788.php">Jeff Squyres: "[OMPI devel] version number issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6827.php">Jeff Squyres: "Re: [OMPI devel] version number issues"</a>
<li><strong>Reply:</strong> <a href="6827.php">Jeff Squyres: "Re: [OMPI devel] version number issues"</a>
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
