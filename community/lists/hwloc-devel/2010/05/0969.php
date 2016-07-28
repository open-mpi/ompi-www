<?
$subject_val = "[hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 15:35:29 2010" -->
<!-- isoreceived="20100506193529" -->
<!-- sent="Fri, 07 May 2010 04:45:05 +1000" -->
<!-- isosent="20100506184505" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E4EC_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 14:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0970.php">Christopher Samuel: "[hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>Previous message:</strong> <a href="0968.php">Christopher Samuel: "Re: [hwloc-devel] 1.0rc5 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0971.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>Reply:</strong> <a href="0971.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>Reply:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>Reply:</strong> <a href="0987.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This bug seems easy to reproduce:
<br>
<p>../configure
<br>
make
<br>
make distclean
<br>
../configure
<br>
make
<br>
[...]
<br>
make[1]: *** No rule to make target `hwloc.7', needed by `all-am'.  Stop.
<br>
make[1]: Leaving directory `/home/samuel/Downloads/HWLOC/hwloc-1.0rc5/utils'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0969/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0970.php">Christopher Samuel: "[hwloc-devel] Requirements for building hwloc with XML support ?"</a>
<li><strong>Previous message:</strong> <a href="0968.php">Christopher Samuel: "Re: [hwloc-devel] 1.0rc5 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0971.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>Reply:</strong> <a href="0971.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>Reply:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<li><strong>Reply:</strong> <a href="0987.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
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
