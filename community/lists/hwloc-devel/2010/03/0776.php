<?
$subject_val = "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 19 02:26:11 2010" -->
<!-- isoreceived="20100319062611" -->
<!-- sent="Fri, 19 Mar 2010 07:26:06 +0100" -->
<!-- isosent="20100319062606" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()" -->
<!-- id="36ca99e91003182326s7bac0fd1h269dd8df684758e6_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20100318224501.GT4788_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-19 02:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0777.php">Bert Wesarg: "[hwloc-devel] Change bind API."</a>
<li><strong>Previous message:</strong> <a href="0775.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1838)"</a>
<li><strong>In reply to:</strong> <a href="0774.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 18, 2010 at 23:45, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 18 Mar 2010 23:37:57 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Brice Goglin, le Thu 18 Mar 2010 22:58:35 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Make the linux backend more re-entrant safe by using readdir_r() instead
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; of readdir().
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Changing so many lines because of bugs that don't exist yet doesn't
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; look like a good idea to me.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Err, they do already exist. &#194;&#160;We've just documented that it was safe to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; work on separate topology objects in different threads, so readdir is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; indeed an issue :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Only if using the same directory stream. It's not the case here.
</span><br>
<p>Thanks, I didn't know that. The linux manual page doesn't mention
<br>
this, but POSIX do.
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0777.php">Bert Wesarg: "[hwloc-devel] Change bind API."</a>
<li><strong>Previous message:</strong> <a href="0775.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1838)"</a>
<li><strong>In reply to:</strong> <a href="0774.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
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
