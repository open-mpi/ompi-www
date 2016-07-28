<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 07:57:51 2009" -->
<!-- isoreceived="20090904115751" -->
<!-- sent="Fri, 4 Sep 2009 13:55:25 +0200 (CEST)" -->
<!-- isosent="20090904115525" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="alpine.DEB.2.00.0909041346190.31624_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8429E171-4226-487C-8F4C-35C3F65C969D_at_cisco.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 07:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6768.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6768.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 4 Sep 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I haven't looked at the code deeply, so forgive me if I'm parsing this wrong: 
</span><br>
<span class="quotelev1">&gt; is the code actually reading the file into one list and then moving the 
</span><br>
<span class="quotelev1">&gt; values to another list?  If so, that seems a little hackish.  Can't it just 
</span><br>
<span class="quotelev1">&gt; read directly to the target list?
</span><br>
On the basic approach, I would have another suggestion, reducing parsing 
<br>
and maybe a bit less hackish : do not introduce another file but only a 
<br>
keyword indicating that further overriding is disabled (&quot;fixed&quot;, 
<br>
&quot;restricted&quot;, &quot;read-only&quot; ?).
<br>
<p>You would therefore write in your configuration file something like:
<br>
notifier_threshold_severity=notice fixed
<br>
or more generally :
<br>
key=value flags
<br>
<p>Maybe we don't have a way to differenciate flags at the end with the 
<br>
current parser, so maybe a leading &quot;!&quot; or &quot;%&quot; or any other strong 
<br>
character would be simpler to implement while still ensuring 
<br>
retro-compatibility.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6765.php">Rolf Vandevaart: "Re: [OMPI devel] Deadlock on openib when using hindexed types"</a>
<li><strong>Previous message:</strong> <a href="6763.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6760.php">Jeff Squyres: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6768.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6768.php">Nadia Derbey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
