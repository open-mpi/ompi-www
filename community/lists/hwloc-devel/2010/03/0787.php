<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 17:27:33 2010" -->
<!-- isoreceived="20100322212733" -->
<!-- sent="Mon, 22 Mar 2010 22:27:28 +0100" -->
<!-- isosent="20100322212728" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="36ca99e91003221427y4a2e1fa6jf35a82061f8377ee_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="40D95EDA-D068-4DF3-B3F7-527EC3788699_at_cisco.com" -->
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
<strong>Date:</strong> 2010-03-22 17:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0786.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0786.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 22, 2010 at 21:49, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mar 22, 2010, at 4:34 PM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Same question again :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect, I can't propose API changes after that, right? ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be good, yes. &#194;&#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you had a good look around hwloc? &#194;&#160;I.e., do you have a feel for whether you will be suggesting any more API changes?
</span><br>
<p>Only a cursory one and mostly inside the linux backend. Here are some
<br>
thoughts: Thats more a personal favor, but anyway: In case of the
<br>
binary cpuset operations I find the '&lt;res&gt; = &lt;arg1&gt; op &lt;arg2&gt;' style
<br>
more flexible, than the current '&lt;arg1&gt; op= &lt;arg2&gt;' style. I would
<br>
also rename hwloc_cpuset_clearset() to hwloc_cpuset_andnotset(), so it
<br>
fits to the _{or,and,xor,not}set naming style (i.e. they are named
<br>
after the bit operation).
<br>
<p>I myself don't expect any API changes from me anymore.
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0786.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="0786.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0788.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
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
