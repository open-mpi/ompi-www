<?
$subject_val = "[hwloc-devel] CPUBIND flags when getting proc/thread affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 08:44:34 2011" -->
<!-- isoreceived="20110920124434" -->
<!-- sent="Tue, 20 Sep 2011 08:44:27 -0400" -->
<!-- isosent="20110920124427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] CPUBIND flags when getting proc/thread affinity" -->
<!-- id="A7B0FE94-149E-45A3-BE2E-40340F83A706_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] CPUBIND flags when getting proc/thread affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 08:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Previous message:</strong> <a href="2420.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Reply:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some questions about CPU binding flags...
<br>
<p>I see in the doxy for hwloc_cpubind_flags_t that _STRICT explicitly says that it is meaningless when used to get the binding of a thread, and provides the definition for what happens when you get the binding of a process.  Good! (this is just background for the following 3 points...).
<br>
<p>1. Is it permissible to use _PROCESS or _THREAD with get_proc_last_cpu_location() and get_proc_cpubind()?  I'm thinking that it doesn't make sense to use _THREAD here, and using _PROCESS would be redundant.  Right?  If so, should we document that you can't use either of these, or, if you specify _PROCESS, it'll be ignored?
<br>
<p>2. Is it permissible to use _PROCESS or _THREAD with get_last_cpu_location() and get_cpubind()?  I'm assuming that both of these are permissible (subject to OS constraints, of course).
<br>
<p>3. Is it permissible to use _NOMEMBIND with any of these 4 functions?  I'm guessing that it's meaningless.  Should we document that this flag will be ignored, or that it is erroneous to use?
<br>
<p>#1 and #3 are asking about what we should advise people to do in the documentation (e.g., even if you *can* use _PROCESS in get_proc_*() because the logic of the code ignores it, should we document that it will be ignored, or that you should not use it?).
<br>
<p>I can update the docs with the results of this discussion (probably mainly the docs of these 4 functions, but maybe a sentence or two in the descriptions of the flags in cpu_flags_t section.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Previous message:</strong> <a href="2420.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Reply:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
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
