<?
$subject_val = "Re: [hwloc-users] Solaris and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 04:10:02 2012" -->
<!-- isoreceived="20120913081002" -->
<!-- sent="Thu, 13 Sep 2012 10:09:56 +0200" -->
<!-- isosent="20120913080956" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Solaris and hwloc" -->
<!-- id="505194D4.60307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B92289-04FB-4CC5-A54E-1FC8EA4C5C49_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Solaris and hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 04:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0720.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0713.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(resending because the formatting was bad)
<br>
<p><p>Le 13/09/2012 00:26, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 12, 2012, at 10:30 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sidenote: if hwloc-bind fails to bind, should we still launch the child process?
</span><br>
<span class="quotelev2">&gt;&gt; Well, it's up to you to decide :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have an opinion?  I'm 60/40 in favor of not letting it run, under the rationale that the user asked for something that we can't deliver, so we shouldn't continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what numactl does if it can't bind?
</span><br>
<p>Let me add taskset to the list of tools to compare to, and distinguish
<br>
several cases:
<br>
<p>1) invalid command line
<br>
* taskset (with invalid list &quot;2,&quot;) errors out
<br>
* numactl (with invalid list &quot;2,&quot;) errors out
<br>
* hwloc-bind (with invalid location followed by &quot;-- executable&quot;) errors
<br>
out (considers the invalid location as the executable name)
<br>
<p>2) valid command-line containing *only* non-existing objects:
<br>
* taskset errors out
<br>
* numactl errors out
<br>
* hwloc-bind succeeds, binds to nothing
<br>
<p>3) valid command-line containing some existing objects and some
<br>
non-existing:
<br>
* taskset succeed (ignores unexisting objects, bind to others)
<br>
* numactl errors out
<br>
* hwloc-bind succeeds (ignores unexisting objects, bind to others)
<br>
<p>4) valid command-line with only valid objects but missing OS support
<br>
* doesn't apply to taskset and numactl afaik
<br>
* hwloc-bind succeeds (ignores failure to bind)
<br>
<p><p>We have a --strict option, which translate into the STRICT binding flag
<br>
which is documented as
<br>
&nbsp;&nbsp;&quot;Request strict binding from the OS.  The function will fail if the
<br>
binding can not be guaranteed / completely enforced.&quot;
<br>
I usually see &quot;non-strict&quot; as 'if you can't do what I want, do something
<br>
similar&quot;. I wouldn't be too bad to say that this applies to (3) (bind to
<br>
smaller than requested).
<br>
<p>But (2) and (4) are different. Not binding at all or binding to nothing
<br>
is far from &quot;non-strict&quot;. But I wonder if adding a new command-line flag
<br>
to exit on such errors would be confusing with respect to the existing
<br>
--strict.
<br>
<p>We could also change the default to exit on error, and add --force to
<br>
launch the process even on failure to bind. But changing defaults isn't
<br>
always a good idea.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0720.php">Brice Goglin: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>In reply to:</strong> <a href="0713.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Reply:</strong> <a href="0722.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
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
