<?
$subject_val = "[OMPI devel] Incorrect timer frequency [w/ patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 15:01:42 2015" -->
<!-- isoreceived="20150422190142" -->
<!-- sent="Wed, 22 Apr 2015 12:01:22 -0700" -->
<!-- isosent="20150422190122" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Incorrect timer frequency [w/ patch]" -->
<!-- id="CAAvDA14V-hOcXkJKWdnbHifV0FHSocDUc6+PhF5irD=4NwAYbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Incorrect timer frequency [w/ patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 15:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17313.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17311.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<li><strong>Reply:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had reason to look at the linux timer code today and noticed what I
<br>
believe to be a subtle error.
<br>
This is in both 'master' and v1.8.5rc2
<br>
<p>Since casts bind tighter than multiplication in C, I believe that the
<br>
1-line patch below is required to produce the desired result of conversion
<br>
to an integer *after* the multiplication.
<br>
While I don't see how to exercise the code, I can see that cpu_f=2692.841
<br>
will yield opal_timer_linux_freq=2,692,000,000 rather than 2,692,841,000.
<br>
<p>-Paul
<br>
<p><p>diff --git a/opal/mca/timer/linux/timer_linux_component.c
<br>
b/opal/mca/timer/linux/timer_linux_component.c
<br>
index b130826..7abe578 100644
<br>
--- a/opal/mca/timer/linux/timer_linux_component.c
<br>
+++ b/opal/mca/timer/linux/timer_linux_component.c
<br>
@@ -128,7 +128,7 @@ static int opal_timer_linux_find_freq(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = sscanf(loc, &quot;%f&quot;, &amp;cpu_f);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (1 == ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* numer is in MHz - convert to Hz and make an integer */
<br>
-                opal_timer_linux_freq = (opal_timer_t) cpu_f * 1000000;
<br>
+                opal_timer_linux_freq = (opal_timer_t) (cpu_f * 1000000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17312/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17313.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17311.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<li><strong>Reply:</strong> <a href="17319.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Incorrect timer frequency [w/ patch]"</a>
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
