<?
$subject_val = "[hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 13:19:29 2013" -->
<!-- isoreceived="20130117181929" -->
<!-- sent="Thu, 17 Jan 2013 13:19:25 -0500" -->
<!-- isosent="20130117181925" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler" -->
<!-- id="CADKQjjcUsmefsw5GKyLcxba5RNwoFNKPHS+2dE4GTzoJs46s1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 13:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0814.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0812.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0814.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0814.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0815.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hwloc-1.6.1rc2 fails to build with the Cray compiler
<br>
<p>Cray C : Version 8.1.2  Thu Jan 17, 2013  12:18:54
<br>
<p>The error message is
<br>
<p>&nbsp;&nbsp;CC       bitmap.lo
<br>
CC-147 craycc: ERROR
<br>
&nbsp;&nbsp;Declaration is incompatible with &quot;int ffsl(long)&quot; (declared at line 526 of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;/opt/cray/xe-sysroot/4.1.20/usr/include/string.h&quot;).
<br>
<p>(Yes, there is no line number with the error message.)
<br>
<p>This seems to be caused by the fact that the Cray compiler sets __GNUC__,
<br>
but is not quite compatible. A work-around is to change line 56 of
<br>
include/private/misc.h from
<br>
<p>#elif defined(__GNUC__)
<br>
<p>to
<br>
<p>#elif defined(__GNUC__) &amp;&amp; !defined(_CRAYC)
<br>
<p>-erik
<br>
<p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0814.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Previous message:</strong> <a href="0812.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0814.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0814.php">Brice Goglin: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
<li><strong>Reply:</strong> <a href="0815.php">Jeff Hammond: "Re: [hwloc-users] hwloc-1.6.1rc2 Build failure with Cray compiler"</a>
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
