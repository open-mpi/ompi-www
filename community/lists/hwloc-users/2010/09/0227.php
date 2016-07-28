<?
$subject_val = "[hwloc-users] hwloc 1.0.2 fails to compile on Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 16:42:23 2010" -->
<!-- isoreceived="20100917204223" -->
<!-- sent="Fri, 17 Sep 2010 14:42:19 -0600 (GMT-06:00)" -->
<!-- isosent="20100917204219" -->
<!-- name="jayesh_at_[hidden]" -->
<!-- email="jayesh_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc 1.0.2 fails to compile on Cygwin" -->
<!-- id="743400868.30161284756139660.JavaMail.root_at_zimbra.anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1427996370.30101284756034676.JavaMail.root_at_zimbra.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin<br>
<strong>From:</strong> <a href="mailto:jayesh_at_[hidden]?Subject=Re:%20[hwloc-users]%20hwloc%201.0.2%20fails%20to%20compile%20on%20Cygwin"><em>jayesh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-17 16:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/08/0226.php">Terry Dontje: "[hwloc-users] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin"</a>
<li><strong>Reply:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;I get the following error message when I try to compile hwloc 1.0.2 on Cygwin. Configure and make logs are attached.
<br>
<p>$ uname -a
<br>
CYGWIN_NT-6.1-WOW64 msnehalem1 1.7.6(0.230/5/3) 2010-08-16 16:06 i686 Cygwin
<br>
<p>======================================== make.log ====================================
<br>
...
<br>
&nbsp;&nbsp;CC     lstopo-lstopo-cairo.o
<br>
In file included from /usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/windows.h:87,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /cygdrive/c/Users/jayesh/ANL/hwloc-1.0.2/include/hwloc/config.h:112,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /cygdrive/c/Users/jayesh/ANL/hwloc-1.0.2/include/hwloc.h:17,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from lstopo.h:10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from lstopo-cairo.c:44:
<br>
/usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/winspool.h:255: error: two or more data
<br>
&nbsp;types in declaration specifiers
<br>
/usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/winspool.h:270: error: two or more data
<br>
&nbsp;types in declaration specifiers
<br>
/usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/winspool.h:291: error: two or more data
<br>
&nbsp;types in declaration specifiers
<br>
/usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/winspool.h:316: error: two or more data
<br>
&nbsp;types in declaration specifiers
<br>
/usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/winspool.h:571: error: two or more data
<br>
&nbsp;types in declaration specifiers
<br>
/usr/lib/gcc/i686-pc-cygwin/4.3.4/../../../../include/w32api/winspool.h:594: error: two or more data
<br>
&nbsp;types in declaration specifiers
<br>
make[1]: *** [lstopo-lstopo-cairo.o] Error 1
<br>
make[1]: Leaving directory `/cygdrive/c/Users/jayesh/ANL/hwloc-1.0.2/utils'
<br>
make: *** [all-recursive] Error 1
<br>
======================================== make.log ====================================
<br>
<p>Regards,
<br>
Jayesh
<br>


<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0227/configure.log">configure.log</a>
</ul>
<!-- attachment="configure.log" -->
<hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0227/make.log">make.log</a>
</ul>
<!-- attachment="make.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/08/0226.php">Terry Dontje: "[hwloc-users] Support for solaris lgrp_affinity_set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin"</a>
<li><strong>Reply:</strong> <a href="0228.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.0.2 fails to compile on Cygwin"</a>
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
