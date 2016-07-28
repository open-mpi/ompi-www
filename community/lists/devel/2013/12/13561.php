<?
$subject_val = "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 25 00:19:02 2013" -->
<!-- isoreceived="20131225051902" -->
<!-- sent="Tue, 24 Dec 2013 21:18:58 -0800" -->
<!-- isosent="20131225051858" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID" -->
<!-- id="CAAvDA16hkYpAudH-VV3erY0128GkXveoHH-RzGVEvdvk21Uk6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-25 00:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>Previous message:</strong> <a href="13560.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>Reply:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get a warning from the current 1.7.4rc2r30076:
<br>
<p>--------------------------------------------------------------------------
<br>
<p>WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;Local host:            pcp-j-20
<br>
&nbsp;&nbsp;Device name:           mthca0
<br>
&nbsp;&nbsp;Device vendor ID:      0x15b3
<br>
&nbsp;&nbsp;Device vendor part ID: 23108
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
<p>This is the same vendor ID I reported as missing back in the 1.5rc series:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/02/10615.php">http://www.open-mpi.org/community/lists/devel/2012/02/10615.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13561/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>Previous message:</strong> <a href="13560.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>Reply:</strong> <a href="13562.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
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
