<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 17:44:40 2010" -->
<!-- isoreceived="20100322214440" -->
<!-- sent="Mon, 22 Mar 2010 22:44:34 +0100" -->
<!-- isosent="20100322214434" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="20100322214434.GP4589_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BA7E337.1090806_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 17:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0790.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0790.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0790.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 22 Mar 2010 22:37:59 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In case of the
</span><br>
<span class="quotelev2">&gt; &gt; binary cpuset operations I find the '&lt;res&gt; = &lt;arg1&gt; op &lt;arg2&gt;' style
</span><br>
<span class="quotelev2">&gt; &gt; more flexible, than the current '&lt;arg1&gt; op= &lt;arg2&gt;' style.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that you don't like malloc, you really don't want this :)
</span><br>
<p>I guess he meant
<br>
<p>hwloc_cpuset_and(hwloc_cpuset_t res, hwloc_const_cpuset_t arg1, hwloc_const_cpuset_t arg2);
<br>
<p>arg1 and arg2 being allowed to be equal to res, thus keeping the
<br>
possibility of an arg1 op= arg2 style.
<br>
<p><span class="quotelev2">&gt; &gt; I would also rename hwloc_cpuset_clearset() to
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_cpuset_andnotset(), so it fits to the _{or,and,xor,not}set
</span><br>
<span class="quotelev2">&gt; &gt; naming style (i.e. they are named after the bit operation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't like andnotset() at all, sorry.
</span><br>
<p>We could add an alias.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0790.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0790.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0790.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
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
