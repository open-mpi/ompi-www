<?
$subject_val = "Re: [OMPI devel] No such file(s) or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:38:59 2013" -->
<!-- isoreceived="20130708183859" -->
<!-- sent="Mon, 8 Jul 2013 20:38:55 +0200" -->
<!-- isosent="20130708183855" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] No such file(s) or directory" -->
<!-- id="CAHYyVz7ttHjEikTdW0wM=PCM9fw=CRH=xGBATpf1keeYWP3HBA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25FCCA4F-6239-4FFA-8B44-69E15A0A137D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] No such file(s) or directory<br>
<strong>From:</strong> Vasiliy (<em>testtest_2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 14:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12544.php">Vasiliy: "[OMPI devel] the sensors do not compile"</a>
<li><strong>Previous message:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>In reply to:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, well, it does not:
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
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
<br>
In function &#145;sqlite_component_query&#146;:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:93:17:
<br>
warning: assignment from incompatible pointer type [enabled by
<br>
default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*module = (mca_base_module_t*)&amp;opal_db_sqlite_module;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
<br>
In function &#145;sqlite_component_close&#146;:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
<br>
error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
<br>
note: each undeclared identifier is reported only once for each
<br>
function it appears in
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
<br>
In function &#145;sqlite_component_register&#146;:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:127:12:
<br>
error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
Makefile:1608: recipe for target
<br>
'libmca_db_sqlite_la-db_sqlite_component.lo' failed
<br>
make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
<br>
&nbsp;&nbsp;CC       libmca_db_sqlite_la-db_sqlite.lo
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
<br>
fatal error: opal/runtime/opal_globals.h: No such file or directory
<br>
&nbsp;#include &quot;opal/runtime/opal_globals.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
&lt;/code&gt;
<br>
On Mon, Jul 8, 2013 at 8:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Actually, those headers needed to be deleted - done. I take it you were deliberately trying to build that support? Otherwise, it shouldn't have built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2013, at 11:11 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could somebody add these required headers to the repository? Thank you
</span><br>
<span class="quotelev2">&gt;&gt; in advance:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:23:33:
</span><br>
<span class="quotelev2">&gt;&gt; fatal error: opal/util/proc_info.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/util/proc_info.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                 ^
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev2">&gt;&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev2">&gt;&gt; fatal error: opal/mca/errmgr/base/base.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                       ^
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12544.php">Vasiliy: "[OMPI devel] the sensors do not compile"</a>
<li><strong>Previous message:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>In reply to:</strong> <a href="12542.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12545.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
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
