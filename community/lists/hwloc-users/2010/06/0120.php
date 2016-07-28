<?
$subject_val = "Re: [hwloc-users] Getting the cache hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 14:13:45 2010" -->
<!-- isoreceived="20100606181345" -->
<!-- sent="Sun, 6 Jun 2010 20:13:40 +0200" -->
<!-- isosent="20100606181340" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting the cache hierarchy" -->
<!-- id="20100606181340.GM5358_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1275843741.13649.66.camel_at_iliana.magic" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Getting the cache hierarchy<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 14:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for a non graphic	system..."</a>
<li><strong>Previous message:</strong> <a href="0119.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0122.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier Cessenat, le Sun 06 Jun 2010 19:02:21 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le dimanche 06 juin 2010 &#224; 18:39 +0200, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Olivier Cessenat, le Sun 06 Jun 2010 18:14:35 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In file included from topology.c:17:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /opt/gfortran/irun/bin/../lib/gcc/i386-pc-linux-gnu/4.3.0/include-fixed/sys/stat.h:345: error: expected ',' or ';' before '__wur'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Wow, how odd.  Could you send us the file?  I really wonder what they
</span><br>
<span class="quotelev2">&gt; &gt; put there that errors out like this.
</span><br>
<span class="quotelev1">&gt; ==&gt;
</span><br>
<span class="quotelev1">&gt; Yes, joined. I do not know why this header is used instead of the
</span><br>
<span class="quotelev1">&gt; standard one... I do not see the connection with gfortran !
</span><br>
<p>I don't see it either, and I don't see how hwloc could make that line
<br>
fail. It properly includes &lt;sys/types.h&gt; before including &lt;sys/stat.h&gt;,
<br>
so at least it respects the standard rules. Your stat.h comes from /opt,
<br>
maybe you should post the complete output of ./configure to check which
<br>
mixture of compilers you are using, and maybe try to get odd compilers
<br>
out from PATH.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; In file included from /tmp/hwloc-1.0.1/include/hwloc.h:17,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  from topology.c:21:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:115:2: error: #error &quot;unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; size for unsigned long.&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:119:2: error: #error &quot;unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; size for unsigned int.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Could you tell us how much HWLOC_SIZEOF_UNSIGNED_LONG is defined to?
</span><br>
<span class="quotelev2">&gt; &gt; This looks like autoconf wasn't able to properly determine it actually.
</span><br>
<span class="quotelev1">&gt; ==&gt;
</span><br>
<span class="quotelev1">&gt; What should I do exactly ? I do not see HWLOC_SIZEOF_UNSIGNED_LONG from
</span><br>
<span class="quotelev1">&gt; configure ouput.
</span><br>
<span class="quotelev1">&gt; Here is what find gives:
</span><br>
<span class="quotelev1">&gt; $ find . -name \*.h -exec grep HWLOC_SIZEOF_UNSIGNED_LONG {} /dev/null
</span><br>
<span class="quotelev1">&gt; \;
</span><br>
<span class="quotelev1">&gt; ./include/hwloc/config.h:#define HWLOC_SIZEOF_UNSIGNED_LONG 4
</span><br>
<span class="quotelev1">&gt; ./include/hwloc/config.h:#define HWLOC_BITS_PER_LONG
</span><br>
<span class="quotelev1">&gt; (HWLOC_SIZEOF_UNSIGNED_LONG * 8)
</span><br>
<span class="quotelev1">&gt; ./include/private/config.h:#define HWLOC_SIZEOF_UNSIGNED_LONG 4
</span><br>
<p>So it's 4.  I fail to see how your compiler could not see that 4*8 is
<br>
equal to 32..
<br>
<p><span class="quotelev1">&gt; Oh, by the way, there are some messages provided by configure:
</span><br>
<span class="quotelev1">&gt; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; checking locale.h presence... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: locale.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; configure: WARNING: locale.h:     check for missing prerequisite
</span><br>
<span class="quotelev1">&gt; headers?
</span><br>
<p>This looks like your compiler is a cross-compiler or some odd thing like
<br>
that which autoconf doesn't always correctly handle concerning headers.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-users] Getting a graphics view for a non graphic	system..."</a>
<li><strong>Previous message:</strong> <a href="0119.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0122.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
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
