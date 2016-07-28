<?
$subject_val = "[hwloc-users] Getting the cache hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 12:14:44 2010" -->
<!-- isoreceived="20100606161444" -->
<!-- sent="Sun, 06 Jun 2010 18:14:35 +0200" -->
<!-- isosent="20100606161435" -->
<!-- name="Olivier Cessenat" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="[hwloc-users] Getting the cache hierarchy" -->
<!-- id="1275840875.13649.46.camel_at_iliana.magic" -->
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
<strong>Subject:</strong> [hwloc-users] Getting the cache hierarchy<br>
<strong>From:</strong> Olivier Cessenat (<em>cessenat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 12:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0111.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0109.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0113.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0113.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I get in troubles on my i686 system when compiling hwloc:
<br>
&lt;&lt;
<br>
Making all in src
<br>
make[1]: Entering directory `/tmp/hwloc-1.0.1/src'
<br>
&nbsp;&nbsp;CC     topology.lo
<br>
In file included from topology.c:17:
<br>
/opt/gfortran/irun/bin/../lib/gcc/i386-pc-linux-gnu/4.3.0/include-fixed/sys/stat.h:345: error: expected ',' or ';' before '__wur'
<br>
In file included from /tmp/hwloc-1.0.1/include/hwloc.h:17,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from topology.c:21:
<br>
/tmp/hwloc-1.0.1/include/hwloc/config.h:115:2: error: #error &quot;unknown
<br>
size for unsigned long.&quot;
<br>
/tmp/hwloc-1.0.1/include/hwloc/config.h:119:2: error: #error &quot;unknown
<br>
size for unsigned int.&quot;
<br>
topology.c: In function 'hwloc_get_sysctl':
<br>
topology.c:66: warning: implicit declaration of function 'sysctl'
<br>
make[1]: *** [topology.lo] Erreur 1
<br>
make[1]: Leaving directory `/tmp/hwloc-1.0.1/src'
<br>
make: *** [all-recursive] Erreur 1
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>I removed &quot;/opt/gfortran/irun/bin&quot; from my PATH environment, and
<br>
compilation passed.
<br>
<p>I now get infos such as 
<br>
&lt;&lt;
<br>
hwloc-info
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;depth 1:       1 PU (type #6)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
and my cache sizes are not detected.
<br>
<p>My system is Mandriva 2006.0, uname -a provides:
<br>
Linux papitou 2.6.12-12mdk #1 Fri Sep 9 18:15:22 CEST 2005 i686 Pentium
<br>
III (Katmai) unknown GNU/Linux
<br>
and gcc -dumpversion is 4.3.0, 4.0.1 and 4.2.2 - I've got a few systems.
<br>
<p>What do you think ?
<br>
<p>Cheers,
<br>
<p>Olivier Cessenat.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0111.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0109.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0113.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0113.php">Samuel Thibault: "Re: [hwloc-users] Getting the cache hierarchy"</a>
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
