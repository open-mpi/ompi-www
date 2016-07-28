<?
$subject_val = "Re: [OMPI devel] No such file(s) or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 14:47:06 2013" -->
<!-- isoreceived="20130708184706" -->
<!-- sent="Mon, 8 Jul 2013 20:47:00 +0200" -->
<!-- isosent="20130708184700" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] No such file(s) or directory" -->
<!-- id="CAHYyVz4LJx6Cc37w1NvRkF1+-HOB3o+dzQsiZErqe3dZvkNGbQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHYyVz7ttHjEikTdW0wM=PCM9fw=CRH=xGBATpf1keeYWP3HBA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-07-08 14:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12544.php">Vasiliy: "[OMPI devel] the sensors do not compile"</a>
<li><strong>In reply to:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12554.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12554.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
there're more to come:
<br>
&lt;code&gt;
<br>
Making all in mca/sensor/resusage
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/mca/sensor/resusage'
<br>
&nbsp;&nbsp;CC       sensor_resusage.lo
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/resusage/sensor_resusage.c:35:28:
<br>
fatal error: orte/mca/db/db.h: No such file or directory
<br>
&nbsp;#include &quot;orte/mca/db/db.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
Makefile:1594: recipe for target 'sensor_resusage.lo' failed
<br>
&lt;/code&gt;
<br>
<p>On Mon, Jul 8, 2013 at 8:38 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Oh, well, it does not:
</span><br>
<span class="quotelev1">&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev1">&gt;   CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev1">&gt; In function &#145;sqlite_component_query&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:93:17:
</span><br>
<span class="quotelev1">&gt; warning: assignment from incompatible pointer type [enabled by
</span><br>
<span class="quotelev1">&gt; default]
</span><br>
<span class="quotelev1">&gt;          *module = (mca_base_module_t*)&amp;opal_db_sqlite_module;
</span><br>
<span class="quotelev1">&gt;                  ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev1">&gt; In function &#145;sqlite_component_close&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
</span><br>
<span class="quotelev1">&gt; error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
</span><br>
<span class="quotelev1">&gt; note: each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev1">&gt; function it appears in
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev1">&gt; In function &#145;sqlite_component_register&#146;:
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:127:12:
</span><br>
<span class="quotelev1">&gt; error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev1">&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt;   CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev1">&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev1">&gt; fatal error: opal/runtime/opal_globals.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/runtime/opal_globals.h&quot;
</span><br>
<span class="quotelev1">&gt;                                        ^
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 8:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, those headers needed to be deleted - done. I take it you were deliberately trying to build that support? Otherwise, it shouldn't have built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 8, 2013, at 11:11 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could somebody add these required headers to the repository? Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in advance:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:23:33:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fatal error: opal/util/proc_info.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/util/proc_info.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fatal error: opal/mca/errmgr/base/base.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                       ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12546.php">Vasiliy: "[OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12544.php">Vasiliy: "[OMPI devel] the sensors do not compile"</a>
<li><strong>In reply to:</strong> <a href="12543.php">Vasiliy: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12554.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12554.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
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
