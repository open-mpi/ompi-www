<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 09:28:36 2009" -->
<!-- isoreceived="20091029132836" -->
<!-- sent="Thu, 29 Oct 2009 14:28:31 +0100" -->
<!-- isosent="20091029132831" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255" -->
<!-- id="20091029132831.GE4630_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="75D8A1E5-F8EC-4B83-8936-71B3A2F75BB0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 09:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>In reply to:</strong> <a href="0278.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Reply:</strong> <a href="0282.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 29 Oct 2009 08:32:09 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; I think there's 3 cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If I specify STRICT, then I would expect strict binding to occur,  
</span><br>
<span class="quotelev1">&gt; or the function fail if the OS can't deliver it.  I think we agree on  
</span><br>
<span class="quotelev1">&gt; this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If I specify LOOSE (or whatever the opposite of STRICT is -- and I  
</span><br>
<span class="quotelev1">&gt; see there's currently no flag for that), then I think you get whatever  
</span><br>
<span class="quotelev1">&gt; the OS gives you -- even if it happens to be strict.  I.e., strict is  
</span><br>
<span class="quotelev1">&gt; a subset of loose.  We might agree on this case, too...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. If I don't specify anything, I think this is an open question as to  
</span><br>
<span class="quotelev1">&gt; what happens here.  I'd be in favor of making LOOSE be the default.   
</span><br>
<p>That is what hwloc already does.
<br>
<p><span class="quotelev1">&gt; What I'm not in favor of is having it try STRICT and if that fails,  
</span><br>
<span class="quotelev1">&gt; try LOOSE.  It feels to me like if the user wants STRICT, they should  
</span><br>
<span class="quotelev1">&gt; try it.  And if it fails, they should be notified of that (through the  
</span><br>
<span class="quotelev1">&gt; function failing) and then they can choose how to react.
</span><br>
<p>Ok, I just wanted to save the programmer the retry step.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>In reply to:</strong> <a href="0278.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Reply:</strong> <a href="0282.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
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
