<?
$subject_val = "[OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 22:06:03 2013" -->
<!-- isoreceived="20131220030603" -->
<!-- sent="Thu, 19 Dec 2013 19:06:01 -0800" -->
<!-- isosent="20131220030601" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="CAAvDA17JC70h4Buz_WgyWdH5Ojw3eS-SkjffSqYJc-i9E-1ZMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 22:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13516.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13514.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13748.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13748.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached is the output from &quot;make install&quot; of 1.7.4rc1 + Jeff's fix for the
<br>
symbol conflict on &quot;if_mtu&quot;.
<br>
<p>There appear to be at least 2 issues.
<br>
<p>1) There are lots of (not fatal) messages about ldconfig not existing, but
<br>
according to he NetBSD lists that utility went away with the conversion
<br>
from a.out to ELF.
<br>
<p>2) Many warnings of the form
<br>
&nbsp;&nbsp;&nbsp;*** Warning: linker path does not have real file for library
<br>
<p>3) The final (fatal) error about .libs/mca_btl_sm.soT not existing.
<br>
<p>I am going to see if I can get a better result using the system libtool
<br>
(which is 2.2.6b, thus OLDER than OMPI's 2.4.2) and will report back with
<br>
my results.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13515/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13515/install.log.bz2">install.log.bz2</a>
</ul>
<!-- attachment="install.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13516.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13514.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13748.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13748.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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
