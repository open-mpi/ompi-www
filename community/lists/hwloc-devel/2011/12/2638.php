<?
$subject_val = "Re: [hwloc-devel] very sched_setaffinity support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:48:42 2011" -->
<!-- isoreceived="20111214104842" -->
<!-- sent="Wed, 14 Dec 2011 11:48:33 +0100" -->
<!-- isosent="20111214104833" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] very sched_setaffinity support" -->
<!-- id="20111214104833.GU4197_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="123812851.5608.1323859444448.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] very sched_setaffinity support<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2639.php">Jeff Squyres: "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="2637.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe in reply to:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Wed 14 Dec 2011 11:44:04 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Wed 14 Dec 2011 11:42:37 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Le 14/12/2011 11:34, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brice Goglin, le Wed 14 Dec 2011 11:21:30 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; His sched.h defines the very old prototype of sched_setaffinity (pid,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; len, ulong*).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Urgl. Is it actually &quot;very old&quot;? I thought it was just a transient
</span><br>
<span class="quotelev3">&gt; &gt; &gt; prototype in glibc, between pid,mask and pid,size,mask, which IIRC was
</span><br>
<span class="quotelev3">&gt; &gt; &gt; never officially released... (there is a thread about it on the hwloc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mailing list).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Redhat 8 was released on 2002/09/30 and maintained until 2003/12/31,
</span><br>
<span class="quotelev2">&gt; &gt; looks very old to me :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, but I mean that AIUI the pid,mask is yet older.
</span><br>
<p>Answering myself: no, at some point Drepper replaced pid,len,mask with
<br>
pid,mask... So it's indeed not &quot;very old&quot;, but just &quot;old&quot;, as you said.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2639.php">Jeff Squyres: "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="2637.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe in reply to:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
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
