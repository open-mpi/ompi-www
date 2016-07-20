<?
$subject_val = "Re: [hwloc-users] Getting the cache hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 13:02:28 2010" -->
<!-- isoreceived="20100606170228" -->
<!-- sent="Sun, 06 Jun 2010 19:02:21 +0200" -->
<!-- isosent="20100606170221" -->
<!-- name="Olivier Cessenat" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting the cache hierarchy" -->
<!-- id="1275843741.13649.66.camel_at_iliana.magic" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100606163937.GE5358_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Olivier Cessenat (<em>cessenat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 13:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Olivier Cessenat: "[hwloc-users] Getting a graphics view for a non graphic system..."</a>
<li><strong>Previous message:</strong> <a href="0115.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0113.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0120.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le dimanche 06 juin 2010 &#195;&#160; 18:39 +0200, Samuel Thibault a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Olivier Cessenat, le Sun 06 Jun 2010 18:14:35 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; In file included from topology.c:17:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/gfortran/irun/bin/../lib/gcc/i386-pc-linux-gnu/4.3.0/include-fixed/sys/stat.h:345: error: expected ',' or ';' before '__wur'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wow, how odd.  Could you send us the file?  I really wonder what they
</span><br>
<span class="quotelev1">&gt; put there that errors out like this.
</span><br>
==&gt;
<br>
Yes, joined. I do not know why this header is used instead of the
<br>
standard one... I do not see the connection with gfortran !
<br>
<p><span class="quotelev2">&gt; &gt; In file included from /tmp/hwloc-1.0.1/include/hwloc.h:17,
</span><br>
<span class="quotelev2">&gt; &gt;                  from topology.c:21:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:115:2: error: #error &quot;unknown
</span><br>
<span class="quotelev2">&gt; &gt; size for unsigned long.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:119:2: error: #error &quot;unknown
</span><br>
<span class="quotelev2">&gt; &gt; size for unsigned int.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you tell us how much HWLOC_SIZEOF_UNSIGNED_LONG is defined to?
</span><br>
<span class="quotelev1">&gt; This looks like autoconf wasn't able to properly determine it actually.
</span><br>
==&gt;
<br>
What should I do exactly ? I do not see HWLOC_SIZEOF_UNSIGNED_LONG from
<br>
configure ouput.
<br>
Here is what find gives:
<br>
$ find . -name \*.h -exec grep HWLOC_SIZEOF_UNSIGNED_LONG {} /dev/null
<br>
\;
<br>
./include/hwloc/config.h:#define HWLOC_SIZEOF_UNSIGNED_LONG 4
<br>
./include/hwloc/config.h:#define HWLOC_BITS_PER_LONG
<br>
(HWLOC_SIZEOF_UNSIGNED_LONG * 8)
<br>
./include/private/config.h:#define HWLOC_SIZEOF_UNSIGNED_LONG 4
<br>
<p><p>Oh, by the way, there are some messages provided by configure:
<br>
&lt;&lt;
<br>
checking locale.h presence... yes
<br>
configure: WARNING: locale.h: present but cannot be compiled
<br>
configure: WARNING: locale.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: locale.h: see the Autoconf documentation
<br>
configure: WARNING: locale.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: locale.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for locale.h... no
<br>
checking langinfo.h usability... no
<br>
checking langinfo.h presence... yes
<br>
configure: WARNING: langinfo.h: present but cannot be compiled
<br>
configure: WARNING: langinfo.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: langinfo.h: see the Autoconf documentation
<br>
configure: WARNING: langinfo.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: langinfo.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for langinfo.h... no
<br>
checking curses.h usability... no
<br>
checking curses.h presence... yes
<br>
configure: WARNING: curses.h: present but cannot be compiled
<br>
configure: WARNING: curses.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: curses.h: see the Autoconf documentation
<br>
configure: WARNING: curses.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: curses.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for curses.h... no
<br>
... blablabla ...
<br>
checking sys/param.h presence... yes
<br>
configure: WARNING: sys/param.h: present but cannot be compiled
<br>
configure: WARNING: sys/param.h:     check for missing prerequisite
<br>
headers?
<br>
configure: WARNING: sys/param.h: see the Autoconf documentation
<br>
configure: WARNING: sys/param.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
configure: WARNING: sys/param.h: proceeding with the compiler's result
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
configure: WARNING:     ## Report this to
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
configure: WARNING:     ##
<br>
------------------------------------------------------ ##
<br>
checking for sys/param.h... no
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p>
<br><p>
<p><p><p><hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0116/stat.h__charset_utf-8">stat.h__charset_utf-8</a>
</ul>
<!-- attachment="stat.h__charset_utf-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0117.php">Olivier Cessenat: "[hwloc-users] Getting a graphics view for a non graphic system..."</a>
<li><strong>Previous message:</strong> <a href="0115.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0113.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0120.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
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
