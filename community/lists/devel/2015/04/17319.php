<?
$subject_val = "Re: [OMPI devel] Incorrect timer frequency [w/ patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 16:44:11 2015" -->
<!-- isoreceived="20150422204411" -->
<!-- sent="Wed, 22 Apr 2015 20:44:09 +0000" -->
<!-- isosent="20150422204409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Incorrect timer frequency [w/ patch]" -->
<!-- id="A78F950A-7761-4380-8E0F-6CB56D512A4B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14V-hOcXkJKWdnbHifV0FHSocDUc6+PhF5irD=4NwAYbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Incorrect timer frequency [w/ patch]<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 16:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Previous message:</strong> <a href="17318.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17312.php">Paul Hargrove: "[OMPI devel] Incorrect timer frequency [w/ patch]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in <a href="https://github.com/open-mpi/ompi/commit/46aa20a9191db2f5cc1850c0f4f881ac51653cb4">https://github.com/open-mpi/ompi/commit/46aa20a9191db2f5cc1850c0f4f881ac51653cb4</a>.
<br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2015, at 3:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had reason to look at the linux timer code today and noticed what I believe to be a subtle error.
</span><br>
<span class="quotelev1">&gt; This is in both 'master' and v1.8.5rc2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since casts bind tighter than multiplication in C, I believe that the 1-line patch below is required to produce the desired result of conversion to an integer *after* the multiplication.
</span><br>
<span class="quotelev1">&gt; While I don't see how to exercise the code, I can see that cpu_f=2692.841 will yield opal_timer_linux_freq=2,692,000,000 rather than 2,692,841,000.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/timer/linux/timer_linux_component.c b/opal/mca/timer/linux/timer_linux_component.c
</span><br>
<span class="quotelev1">&gt; index b130826..7abe578 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/timer/linux/timer_linux_component.c
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/timer/linux/timer_linux_component.c
</span><br>
<span class="quotelev1">&gt; @@ -128,7 +128,7 @@ static int opal_timer_linux_find_freq(void)
</span><br>
<span class="quotelev1">&gt;              ret = sscanf(loc, &quot;%f&quot;, &amp;cpu_f);
</span><br>
<span class="quotelev1">&gt;              if (1 == ret) {
</span><br>
<span class="quotelev1">&gt;                  /* numer is in MHz - convert to Hz and make an integer */
</span><br>
<span class="quotelev1">&gt; -                opal_timer_linux_freq = (opal_timer_t) cpu_f * 1000000;
</span><br>
<span class="quotelev1">&gt; +                opal_timer_linux_freq = (opal_timer_t) (cpu_f * 1000000);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17312.php">http://www.open-mpi.org/community/lists/devel/2015/04/17312.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17320.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Broken flex-required error message"</a>
<li><strong>Previous message:</strong> <a href="17318.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17312.php">Paul Hargrove: "[OMPI devel] Incorrect timer frequency [w/ patch]"</a>
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
