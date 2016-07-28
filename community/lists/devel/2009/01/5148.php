<?
$subject_val = "[OMPI devel] 1.3rc4 README &quot;nit&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 16:44:43 2009" -->
<!-- isoreceived="20090113214443" -->
<!-- sent="Tue, 13 Jan 2009 13:44:34 -0800" -->
<!-- isosent="20090113214434" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3rc4 README &amp;quot;nit&amp;quot;" -->
<!-- id="496D0B42.2030704_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3rc4 README &quot;nit&quot;<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 16:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<li><strong>Previous message:</strong> <a href="5147.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5150.php">Jeff Squyres: "Re: [OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>Reply:</strong> <a href="5150.php">Jeff Squyres: "Re: [OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Again, sorry for the last-minute input.
<br>
<p>I noticed the following in README:
<br>
- Open MPI includes support for a wide variety of supplemental
<br>
&nbsp;&nbsp;hardware and software package.  When configuring Open MPI, you may
<br>
&nbsp;&nbsp;need to supply additional flags to the &quot;configure&quot; script in order
<br>
&nbsp;&nbsp;to tell Open MPI where the header files, libraries, and any other
<br>
&nbsp;&nbsp;required files are located.  As such, running &quot;configure&quot; by itself
<br>
&nbsp;&nbsp;may include support for all the devices (etc.) that you expect,
<br>
&nbsp;&nbsp;especially if their support headers / libraries are installed in
<br>
&nbsp;&nbsp;non-standard locations.  Network interconnects are an easy example
<br>
&nbsp;&nbsp;to discuss -- Myrinet and OpenFabrics networks, for example, both
<br>
&nbsp;&nbsp;have supplemental headers and libraries that must be found before
<br>
&nbsp;&nbsp;Open MPI can build support for them.  You must specify where these
<br>
&nbsp;&nbsp;files are with the appropriate options to configure.  See the
<br>
&nbsp;&nbsp;listing of configure command-line switches, below, for more details.
<br>
<p><p>And think the intended meaning requires adding the word &quot;not&quot;:
<br>
&nbsp;&nbsp;&nbsp;required files are located.  As such, running &quot;configure&quot; by itself
<br>
-  may include support for all the devices (etc.) that you expect,
<br>
+  may not include support for all the devices (etc.) that you expect,
<br>
&nbsp;&nbsp;&nbsp;especially if their support headers / libraries are installed in
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5149.php">George Bosilca: "Re: [OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<li><strong>Previous message:</strong> <a href="5147.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.3rc4 build failure with qsnet4.30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5150.php">Jeff Squyres: "Re: [OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
<li><strong>Reply:</strong> <a href="5150.php">Jeff Squyres: "Re: [OMPI devel] 1.3rc4 README &quot;nit&quot;"</a>
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
