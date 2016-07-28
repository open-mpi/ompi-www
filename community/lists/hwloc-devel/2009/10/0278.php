<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 08:32:12 2009" -->
<!-- isoreceived="20091029123212" -->
<!-- sent="Thu, 29 Oct 2009 08:32:09 -0400" -->
<!-- isosent="20091029123209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255" -->
<!-- id="75D8A1E5-F8EC-4B83-8936-71B3A2F75BB0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091029113842.GC4630_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 08:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1 -- ready?"</a>
<li><strong>In reply to:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0281.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Reply:</strong> <a href="0281.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 29, 2009, at 7:38 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; I'm just wondering: maybe by default hwloc should try strict binding
</span><br>
<span class="quotelev1">&gt; and if it fails, if the strict flag is set, error out, else revert to
</span><br>
<span class="quotelev1">&gt; non-strict binding. That way only people who really want absolute  
</span><br>
<span class="quotelev1">&gt; strict
</span><br>
<span class="quotelev1">&gt; binding and fail if it is not available will use the hwloc strict  
</span><br>
<span class="quotelev1">&gt; flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I think there's 3 cases:
<br>
<p>1. If I specify STRICT, then I would expect strict binding to occur,  
<br>
or the function fail if the OS can't deliver it.  I think we agree on  
<br>
this case.
<br>
<p>2. If I specify LOOSE (or whatever the opposite of STRICT is -- and I  
<br>
see there's currently no flag for that), then I think you get whatever  
<br>
the OS gives you -- even if it happens to be strict.  I.e., strict is  
<br>
a subset of loose.  We might agree on this case, too...?
<br>
<p>3. If I don't specify anything, I think this is an open question as to  
<br>
what happens here.  I'd be in favor of making LOOSE be the default.   
<br>
What I'm not in favor of is having it try STRICT and if that fails,  
<br>
try LOOSE.  It feels to me like if the user wants STRICT, they should  
<br>
try it.  And if it fails, they should be notified of that (through the  
<br>
function failing) and then they can choose how to react.
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
<li><strong>Next message:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1 -- ready?"</a>
<li><strong>In reply to:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0281.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Reply:</strong> <a href="0281.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
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
