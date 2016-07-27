<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 11:50:04 2009" -->
<!-- isoreceived="20090311155004" -->
<!-- sent="Wed, 11 Mar 2009 16:49:58 +0100" -->
<!-- isosent="20090311154958" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="49B7DDA6.4070302_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8B9CFC9-D40A-439D-A909-D54550BD4186_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT on Windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 11:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0330.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0330.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0330.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev2">&gt;&gt; I'm not sure about this. From what's written in the comment, restoring
</span><br>
<span class="quotelev2">&gt;&gt; %ENV is only for a 'make check' step, but we don't have such step for
</span><br>
<span class="quotelev2">&gt;&gt; cmake. That's why I skipped it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I mention it because you're modifying LD_LIBRARY_PATH above -- so you 
</span><br>
<span class="quotelev1">&gt; should restore it when you're done.
</span><br>
<p>Aha, yes, you're right. The portion of modifying LD_LIBRARY_PATH should 
<br>
also be removed.
<br>
<p><span class="quotelev1">&gt; Gotcha.  So if our Cmake system is only targeted at windows, then I 
</span><br>
<span class="quotelev1">&gt; think OMPI.pm can make the determination automatically to call the 
</span><br>
<span class="quotelev1">&gt; GNU_Install or Cmake version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps the _do_step stuff should be factored out into a separate .pm 
</span><br>
<span class="quotelev1">&gt; so that you don't have to duplicate all that code between 
</span><br>
<span class="quotelev1">&gt; GNU_Install.pm and Cmake.pm...?
</span><br>
<p>Yes, that might be the easiest and best solution so far. :-)
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0330.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0330.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0330.php">Jeff Squyres: "Re: [MTT devel] MTT on Windows"</a>
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
