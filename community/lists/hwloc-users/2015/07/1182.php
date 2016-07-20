<?
$subject_val = "[hwloc-users] Difficulty embedding hwloc 1.11.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 14:28:46 2015" -->
<!-- isoreceived="20150707182846" -->
<!-- sent="Tue, 7 Jul 2015 18:28:44 +0000" -->
<!-- isosent="20150707182844" -->
<!-- name="D'Alessandro, Luke K" -->
<!-- email="ldalessa_at_[hidden]" -->
<!-- subject="[hwloc-users] Difficulty embedding hwloc 1.11.0" -->
<!-- id="84091339-BC05-4507-9BF4-D5C083046A4F_at_indiana.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-users] Difficulty embedding hwloc 1.11.0<br>
<strong>From:</strong> D'Alessandro, Luke K (<em>ldalessa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-07 14:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/06/1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Reply:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Maybe reply:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>

<br>
I&#226;&#128;&#153;ve recently tried to update our embedded hwloc from 1.10.0 to 1.11.0 and I&#226;&#128;&#153;m running into an issue. I essentially have:
<br>

<br>
&nbsp;&nbsp;AS_IF([&#226;&#128;&#166;], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[HWLOC_SETUP_CORE([contrib/hwloc-1.11.0], [&#226;&#128;&#166;], [AC_MSG_WARN(&#226;&#128;&#166;)], [1])])
<br>

<br>
&nbsp;&nbsp;HWLOC_DO_AM_CONDITIONALS
<br>

<br>
I have `ACLOCAL_AMFLAGS = -I config -I contrib/hwloc-1.11.0/config` in the top level Makefile.am.
<br>

<br>
It appears that, for whatever reason, (at least) @CONFIGURE_DEPENDENCIES@ isn&#226;&#128;&#153;t being replaced in Makefile.in.
<br>

<br>
&nbsp;&nbsp;$ make
<br>
&nbsp;&nbsp;Making all in contrib
<br>
&nbsp;&nbsp;make[1]: Entering directory `/home/ldalessa/obj/test/contrib'
<br>
&nbsp;&nbsp;Makefile:755: warning: overriding commands for target `check-recursive'
<br>
&nbsp;&nbsp;Makefile:487: warning: ignoring old commands for target `check-recursive'
<br>
&nbsp;&nbsp;Making all in hwloc-1.11.0
<br>
&nbsp;&nbsp;make[2]: Entering directory `/home/ldalessa/obj/test/contrib/hwloc-1.11.0'
<br>
&nbsp;&nbsp;make[2]: *** No rule to make target `@CONFIGURE_DEPENDENCIES@', needed by `/u/ldalessa/src/contrib/hwloc-1.11.0/Makefile.in'.  Stop.
<br>
&nbsp;&nbsp;make[2]: Leaving directory `/home/ldalessa/obj/test/contrib/hwloc-1.11.0'
<br>
&nbsp;&nbsp;make[1]: *** [all-recursive] Error 1
<br>
&nbsp;&nbsp;make[1]: Leaving directory `/home/ldalessa/obj/test/contrib'
<br>
&nbsp;&nbsp;make: *** [all-recursive] Error 1
<br>
&nbsp;&nbsp;$ 
<br>

<br>
I am by no means an AC/AM expert. 
<br>

<br>
Am I likely doing something obviously wrong? 
<br>

<br>
Has the embedding protocol changed since the 1.10 series?
<br>

<br>
Thanks,
<br>
Luke<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/06/1181.php">Brice Goglin: "Re: [hwloc-users] Only one CUDA device showing up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Reply:</strong> <a href="1183.php">Brice Goglin: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
<li><strong>Maybe reply:</strong> <a href="1184.php">D'Alessandro, Luke K: "Re: [hwloc-users] Difficulty embedding hwloc 1.11.0"</a>
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
