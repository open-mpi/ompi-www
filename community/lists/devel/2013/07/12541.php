<?
$subject_val = "[OMPI devel] No such file(s) or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:11:52 2013" -->
<!-- isoreceived="20130708181152" -->
<!-- sent="Mon, 8 Jul 2013 20:11:48 +0200" -->
<!-- isosent="20130708181148" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="[OMPI devel] No such file(s) or directory" -->
<!-- id="CAHYyVz4uwf7i4CWn=FH_mxgSTTE5L=m31k95zwr_tsL9Pg_yxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] No such file(s) or directory<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 14:11:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could somebody add these required headers to the repository? Thank you
<br>
in advance:
<br>
&lt;code&gt;
<br>
Making all in mca/db/sqlite
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
<br>
&nbsp;&nbsp;CC       libmca_db_sqlite_la-db_sqlite_component.lo
<br>
&nbsp;&nbsp;CC       libmca_db_sqlite_la-db_sqlite.lo
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:23:33:
<br>
fatal error: opal/util/proc_info.h: No such file or directory
<br>
&nbsp;#include &quot;opal/util/proc_info.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
Makefile:1608: recipe for target
<br>
'libmca_db_sqlite_la-db_sqlite_component.lo' failed
<br>
make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
<br>
fatal error: opal/mca/errmgr/base/base.h: No such file or directory
<br>
&nbsp;#include &quot;opal/mca/errmgr/base/base.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
&lt;/code&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
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
