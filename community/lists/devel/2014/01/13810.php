<?
$subject_val = "[OMPI devel] out-of-date item in README?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 00:58:48 2014" -->
<!-- isoreceived="20140118055848" -->
<!-- sent="Fri, 17 Jan 2014 21:58:46 -0800" -->
<!-- isosent="20140118055846" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] out-of-date item in README?" -->
<!-- id="CAAvDA17DFA4gp-XvyFViHpcHnswm6KMp5SreeiTYo5WWvt4m5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] out-of-date item in README?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-18 00:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13811.php">Ralph Castain: "Re: [OMPI devel] gcc sync atomics broken in 1.7"</a>
<li><strong>Previous message:</strong> <a href="13809.php">Paul Hargrove: "[OMPI devel] gcc sync atomics broken in 1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>Reply:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The README in trunk and v1.7 both read:
<br>
<p>- ROMIO is not supported on OpenBSD.  You will need to specify the
<br>
&nbsp;&nbsp;--disable-io-romio flag to configure when building on OpenBSD.
<br>
<p>However, I have no current problems building it:
<br>
<p>$ ./INST/bin/ompi_info --parsable | grep -e :arch: -e romio
<br>
config:arch:x86_64-unknown-openbsd5.3
<br>
mca:io:romio:version:mca:2.0
<br>
mca:io:romio:version:api:2.0
<br>
mca:io:romio:version:component:1.7.4
<br>
<p>This item in the README entered v1.5 in r25845 and was syned to trunk in
<br>
r26034.
<br>
The 02/23/2012 date for r25845 comes weeks AFTER I had resolved problems I
<br>
was having when testing v1.5 on OpenBSD (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10300.php">http://www.open-mpi.org/community/lists/devel/2012/01/10300.php</a>).  So, I am
<br>
not sure why it was decided that ROMIO was broken on OpenBSD in 1.5.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13810/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13811.php">Ralph Castain: "Re: [OMPI devel] gcc sync atomics broken in 1.7"</a>
<li><strong>Previous message:</strong> <a href="13809.php">Paul Hargrove: "[OMPI devel] gcc sync atomics broken in 1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
<li><strong>Reply:</strong> <a href="13812.php">Ralph Castain: "Re: [OMPI devel] out-of-date item in README?"</a>
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
