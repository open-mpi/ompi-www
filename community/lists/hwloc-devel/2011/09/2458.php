<?
$subject_val = "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 08:12:10 2011" -->
<!-- isoreceived="20110924121210" -->
<!-- sent="Sat, 24 Sep 2011 08:12:03 -0400" -->
<!-- isosent="20110924121203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity" -->
<!-- id="F227C4CE-1D23-47CA-B157-B2C1FADDDDAB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E788DA7.4050609_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 08:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2459.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>How's this?  <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3852">https://svn.open-mpi.org/trac/hwloc/changeset/3852</a>
<br>
<p><p>On Sep 20, 2011, at 8:57 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 20/09/2011 14:44, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 1. Is it permissible to use _PROCESS or _THREAD with get_proc_last_cpu_location() and get_proc_cpubind()?  I'm thinking that it doesn't make sense to use _THREAD here, and using _PROCESS would be redundant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's almost true. Except that Linux has this notion of &quot;tid&quot; to
</span><br>
<span class="quotelev1">&gt; identify single threads. So if you pass THREAD with a thread id, you end
</span><br>
<span class="quotelev1">&gt; up doing get_cpubind/get_last_location on the corresponding single
</span><br>
<span class="quotelev1">&gt; thread (without having to use a pthread_t).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is Linux-specific corner case, sometimes useful, but maybe not
</span><br>
<span class="quotelev1">&gt; required in the doc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Is it permissible to use _PROCESS or _THREAD with get_last_cpu_location() and get_cpubind()?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Is it permissible to use _NOMEMBIND with any of these 4 functions?  I'm guessing that it's meaningless.  Should we document that this flag will be ignored, or that it is erroneous to use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This flag is meaningless and ignored there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2459.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2422.php">Brice Goglin: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
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
