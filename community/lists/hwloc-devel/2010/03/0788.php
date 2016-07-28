<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 17:38:04 2010" -->
<!-- isoreceived="20100322213804" -->
<!-- sent="Mon, 22 Mar 2010 22:37:59 +0100" -->
<!-- isosent="20100322213759" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="4BA7E337.1090806_at_inria.fr" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="36ca99e91003221427y4a2e1fa6jf35a82061f8377ee_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 17:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; In case of the
</span><br>
<span class="quotelev1">&gt; binary cpuset operations I find the '&lt;res&gt; = &lt;arg1&gt; op &lt;arg2&gt;' style
</span><br>
<span class="quotelev1">&gt; more flexible, than the current '&lt;arg1&gt; op= &lt;arg2&gt;' style.
</span><br>
<p>Given that you don't like malloc, you really don't want this :) Your
<br>
proposal would allocate a new cpuset for each operation. Given how many
<br>
&quot;and&quot; or &quot;or&quot; operations we have inside the core library, allocating  a
<br>
new cpuset for all operations wouldn't be good...
<br>
<p>I think the current model is more flexible since you allocate when you
<br>
want (with alloc() or by dup()) and then combine things without
<br>
allocating anymore.
<br>
<p><span class="quotelev1">&gt;  I would
</span><br>
<span class="quotelev1">&gt; also rename hwloc_cpuset_clearset() to hwloc_cpuset_andnotset(), so it
</span><br>
<span class="quotelev1">&gt; fits to the _{or,and,xor,not}set naming style (i.e. they are named
</span><br>
<span class="quotelev1">&gt; after the bit operation).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't like andnotset() at all, sorry.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Bert Wesarg: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
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
