<?
$subject_val = "Re: [hwloc-devel] Docs questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 20:30:01 2010" -->
<!-- isoreceived="20100114013001" -->
<!-- sent="Wed, 13 Jan 2010 20:29:56 -0500" -->
<!-- isosent="20100114012956" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Docs questions" -->
<!-- id="87ACAC58-E113-451F-9C2C-1F695EF7EE8C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100114010555.GO5260_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Docs questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 20:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1645)"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Samuel Thibault: "Re: [hwloc-devel] Docs questions"</a>
<li><strong>In reply to:</strong> <a href="0603.php">Samuel Thibault: "Re: [hwloc-devel] Docs questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool; thanks.
<br>
<p>Check out <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1644">https://svn.open-mpi.org/trac/hwloc/changeset/1644</a> to ensure I got it right.
<br>
<p><p><p>On Jan 13, 2010, at 8:05 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Wed 13 Jan 2010 19:58:45 -0500, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; 1. In the supported list in hwloc.doxy, it says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;li&gt;*FreeBSD&lt;/li&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is the &quot;*&quot; a typo, or is it supposed to indicate any BSD? (or something else?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It means any FreeBSD, i.e. FreeBSD or kFreeBSD/GNU for instance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. In lstopo.1, the colors description says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .TP
</span><br>
<span class="quotelev2">&gt; &gt; White
</span><br>
<span class="quotelev2">&gt; &gt; The CPU is allowed but not in the current CPU binding mask.
</span><br>
<span class="quotelev2">&gt; &gt; .TP
</span><br>
<span class="quotelev2">&gt; &gt; Red
</span><br>
<span class="quotelev2">&gt; &gt; The CPU is not allowed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Who/what allows or disallows a CPU?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Administration rules
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this a reference to Linux cpuset functionality?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I.e., the CPU is online, but the OS won't let you bind to it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes. See the documentation of the allowed_cpuset field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (do other OS's have similar kind of restrictions to Linux's cpuset functionality?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably.  They haven't been implemented in hwloc yet mostly due to lack
</span><br>
<span class="quotelev1">&gt; of administration rights on the machines I've ported hwloc to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1645)"</a>
<li><strong>Previous message:</strong> <a href="0603.php">Samuel Thibault: "Re: [hwloc-devel] Docs questions"</a>
<li><strong>In reply to:</strong> <a href="0603.php">Samuel Thibault: "Re: [hwloc-devel] Docs questions"</a>
<!-- nextthread="start" -->
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
