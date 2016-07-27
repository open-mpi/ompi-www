<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 18:06:46 2010" -->
<!-- isoreceived="20100322220646" -->
<!-- sent="Mon, 22 Mar 2010 23:06:39 +0100" -->
<!-- isosent="20100322220639" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="36ca99e91003221506y17e8c28cwef8d9766b2093beb_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100322214434.GP4589_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 18:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 22, 2010 at 22:44, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Mon 22 Mar 2010 22:37:59 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In case of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; binary cpuset operations I find the '&lt;res&gt; = &lt;arg1&gt; op &lt;arg2&gt;' style
</span><br>
<span class="quotelev3">&gt;&gt; &gt; more flexible, than the current '&lt;arg1&gt; op= &lt;arg2&gt;' style.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that you don't like malloc, you really don't want this :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess he meant
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_and(hwloc_cpuset_t res, hwloc_const_cpuset_t arg1, hwloc_const_cpuset_t arg2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; arg1 and arg2 being allowed to be equal to res, thus keeping the
</span><br>
<span class="quotelev1">&gt; possibility of an arg1 op= arg2 style.
</span><br>
<p>Yes, that was my intention.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would also rename hwloc_cpuset_clearset() to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc_cpuset_andnotset(), so it fits to the _{or,and,xor,not}set
</span><br>
<span class="quotelev3">&gt;&gt; &gt; naming style (i.e. they are named after the bit operation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't like andnotset() at all, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could add an alias.
</span><br>
<p>You don't need to add this, really. Maybe include the description of
<br>
the bit operation inside the documentation. I would search for
<br>
and.*not and would find the appropriate function. I can provide some
<br>
wordings for this.
<br>
<p><p><span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0789.php">Samuel Thibault: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0791.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
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
