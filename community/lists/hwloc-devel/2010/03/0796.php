<?
$subject_val = "Re: [hwloc-devel] Attribute unsed not regognized";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 06:44:59 2010" -->
<!-- isoreceived="20100326104459" -->
<!-- sent="Fri, 26 Mar 2010 11:44:51 +0100" -->
<!-- isosent="20100326104451" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute unsed not regognized" -->
<!-- id="36ca99e91003260344h350a7502i7e104d0fa6dfc468_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="36ca99e91003260309p6a2cbd78nc8513c225d5fd235_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute unsed not regognized<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 06:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0795.php">Bert Wesarg: "[hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>In reply to:</strong> <a href="0795.php">Bert Wesarg: "[hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is also a problem, that these __hwloc_attributes defines don't
<br>
get through after install:
<br>
<p>$ gcc -DHAVE_CONFIG_H -I.
<br>
-DSYSCONFDIR=\&quot;/home/wesarg/opt/htop-dev/etc\&quot;
<br>
-I/home/wesarg/opt/hwloc-dev/include   -W -Wunused-parameter -Wall
<br>
-std=gnu99 -D_XOPEN_SOURCE_EXTENDED -g -O2 -MT htop-AffinityPanel.o
<br>
-MD -MP -MF .deps/htop-AffinityPanel.Tpo -c -o htop-AffinityPanel.o
<br>
`test -f 'AffinityPanel.c' || echo './'`AffinityPanel.c
<br>
In file included from /home/wesarg/opt/hwloc-dev/include/hwloc.h:856,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from Process.h:35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ProcessList.h:17,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from AffinityPanel.h:9,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from AffinityPanel.c:1:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_get_ancestor_obj_by_depth&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:95: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_get_ancestor_obj_by_type&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:107: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_get_next_child&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:168: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_get_common_ancestor_obj&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:179: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_obj_is_in_subtree&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:195: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_get_child_covering_cpuset&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:356: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h: In function
<br>
&#226;&#128;&#152;hwloc_get_shared_cache_covering_obj&#226;&#128;&#153;:
<br>
/home/wesarg/opt/hwloc-dev/include/hwloc/helper.h:472: warning: unused
<br>
parameter &#226;&#128;&#152;topology&#226;&#128;&#153;
<br>
<p>I have attached the -E output for this AffinityPanel.c file.
<br>
<p>Regards,
<br>
Bert
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0796/AffinityPanel.i.txt">AffinityPanel.i.txt</a>
</ul>
<!-- attachment="AffinityPanel.i.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0795.php">Bert Wesarg: "[hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>In reply to:</strong> <a href="0795.php">Bert Wesarg: "[hwloc-devel] Attribute unsed not regognized"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Reply:</strong> <a href="0797.php">Brice Goglin: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
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
