<?
$subject_val = "Re: [hwloc-users] Creating a D wrapper around hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 17:11:09 2010" -->
<!-- isoreceived="20100416211109" -->
<!-- sent="Fri, 16 Apr 2010 15:11:04 -0600" -->
<!-- isosent="20100416211104" -->
<!-- name="Jim Burnes" -->
<!-- email="jvburnes_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Creating a D wrapper around hwloc" -->
<!-- id="x2hb3ec41ba1004161411q703e204g5b7ec5bbcb264e22_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BC8C8AF.50006_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Creating a D wrapper around hwloc<br>
<strong>From:</strong> Jim Burnes (<em>jvburnes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 17:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Fawzi Mohamed: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Previous message:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>In reply to:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0056.php">Fawzi Mohamed: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>Thanks for the clarification.
<br>
<p>Since I'm not familiar with them, do you happen to know the scoping of
<br>
static inlines?  Are they expanded using the current scope?  Are they
<br>
pure?
<br>
<p>Since they aren't guaranteed to be available in the library I'll
<br>
implement them using templates, though it may make an automated
<br>
translator more challlenging.
<br>
<p>I'll post when I'm done.
<br>
<p>Thanks
<br>
<p>JB
<br>
Thanks
<br>
<p>Jim Burnes
<br>
<p>On 4/16/10, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jim Burnes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I can make these available to D in several different ways, but I need
</span><br>
<span class="quotelev2">&gt;&gt; to know the true intent of marking them as &quot;static __inline&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Are they marked that way simply to increase performance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Are they marked that way to avoid some sort of thread safety issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the answer is (1) then I can safely remove their &quot;static __inline&quot;
</span><br>
<span class="quotelev2">&gt;&gt; markup and compile them into the library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the beginning, one reason was to have examples of easy traversal
</span><br>
<span class="quotelev1">&gt; routines in the headers, so as to improve documentation a bit. It offers
</span><br>
<span class="quotelev1">&gt; more features, shows developers how to implement them, without
</span><br>
<span class="quotelev1">&gt; increasing the core library size, and without increasing the ABI size too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a cool library.  Thanks for the extensive work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Fawzi Mohamed: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>Previous message:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<li><strong>In reply to:</strong> <a href="0054.php">Brice Goglin: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0056.php">Fawzi Mohamed: "Re: [hwloc-users] Creating a D wrapper around hwloc"</a>
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
