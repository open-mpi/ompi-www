<?
$subject_val = "Re: [hwloc-devel] random api questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 11:57:32 2010" -->
<!-- isoreceived="20100130165732" -->
<!-- sent="Sat, 30 Jan 2010 17:57:25 +0100" -->
<!-- isosent="20100130165725" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] random api questions" -->
<!-- id="20100130165725.GU4798_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B6460FD.707_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] random api questions<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 11:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sat 30 Jan 2010 17:40:29 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Sat 30 Jan 2010 17:34:32 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But now that I understand all this, I wonder what application developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will think about it. Most applications want the list of procs that are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; online and allowed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And that's what they already get by default unless they set the
</span><br>
<span class="quotelev2">&gt; &gt; WHOLE_SYSTEM flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r1711 says about obj-&gt;cpuset:
</span><br>
<span class="quotelev1">&gt; &quot;They however may be offline, or not allowed for binding&quot;
</span><br>
<p>I've added &quot;if the WHOLE_SYSTEM flag is set&quot;?
<br>
<p>Yes, if we weren't wanting to express contradictory things it'd be way
<br>
simpler, but we want to.  I don't believe duplicating information will
<br>
help the programmer to understand things.  For now, I can see three
<br>
usage cases:
<br>
<p>- An application wants to bind itself somewhere.  That's what the
<br>
&nbsp;&nbsp;default configuration is meant for.
<br>
- A user monitoring application wants to check where things are bound.
<br>
&nbsp;&nbsp;The default configuration works for that too, provided it is started
<br>
&nbsp;&nbsp;from the same environment.  If not, an hwloc_topology_set_pid()
<br>
&nbsp;&nbsp;configuration function is needed to get the proper restrictions.
<br>
- A global monitoring application wants to check which processors are
<br>
&nbsp;&nbsp;online/allowed and where applications are running etc.  That's what
<br>
&nbsp;&nbsp;the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM flag helps for.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-devel] random api questions"</a>
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
