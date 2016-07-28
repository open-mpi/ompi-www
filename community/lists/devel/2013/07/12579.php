<?
$subject_val = "Re: [OMPI devel] No such file(s) or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 10 14:58:35 2013" -->
<!-- isoreceived="20130710185835" -->
<!-- sent="Wed, 10 Jul 2013 20:58:31 +0200" -->
<!-- isosent="20130710185831" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] No such file(s) or directory" -->
<!-- id="CAHYyVz5=gynJytPfbu-ViQTiDSBhbfcin+YE+nrVipWLB220_g_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="99E1A056-B7A7-4C60-9EA1-9FACDDCCB2E1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-07-10 14:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12578.php">Josh Hursey: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>In reply to:</strong> <a href="12571.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
not exactly the subject, however, since I've mentioned 'trace' here,
<br>
it's for this thread:
<br>
- undeclared 'value', or should I have configured it with
<br>
-Dvalue=&lt;something&gt;, it wouldn't compile anyway
<br>
&lt;code&gt;
<br>
make[3]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/util'
<br>
&nbsp;&nbsp;CC       trace.lo
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:
<br>
In function &#145;opal_trace_init&#146;:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:44:13:
<br>
error: &#145;value&#146; undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 &gt; value) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:44:13:
<br>
note: each undeclared identifier is reported only once for each
<br>
function it appears in
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:63:35:
<br>
error: incompatible type for argument 11 of &#145;mca_base_var_register&#146;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;tracer.lds_verbose_level);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:23:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: expected &#145;mca_base_var_scope_t&#146; but argument is of type &#145;int *&#146;
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:63:35:
<br>
error: too few arguments to function &#145;mca_base_var_register&#146;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;tracer.lds_verbose_level);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:23:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
<br>
note: declared here
<br>
&nbsp;OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
<br>
const char *framework_name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:
<br>
In function &#145;opal_trace_finalize&#146;:
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:72:5:
<br>
warning: implicit declaration of function &#145;mca_base_var_dereg_group&#146;
<br>
[-Wimplicit-function-declaration]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_var_dereg_group (mca_base_var_find_group (&quot;opal&quot;, &quot;trace&quot;, NULL));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:72:5:
<br>
warning: implicit declaration of function &#145;mca_base_var_find_group&#146;
<br>
[-Wimplicit-function-declaration]
<br>
Makefile:1708: recipe for target 'trace.lo' failed
<br>
&lt;/code&gt;
<br>
<p>There're also 'misqueried' dependencies as shown in the next excerpt:
<br>
&lt;code&gt;
<br>
make[3]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/mpi/fortran/mpif-h'
<br>
&nbsp;&nbsp;CCLD     libmpi_mpifh.la
<br>
.libs/abort_f.o: In function `ompi_abort_f':
<br>
... (a LOT of unjustified 'undefined references', likely, resulted
<br>
from mis-ordered libraries)
<br>
profile/.libs/libmpi_mpifh_pmpi.a(pregister_datarep_f.o): In function
<br>
`opal_obj_new':
<br>
/usr/src/debug/openmpi-1.9.0-a1/opal/class/opal_object.h:471:
<br>
undefined reference to `opal_class_initialize'
<br>
collect2: error: ld returned 1 exit status
<br>
Makefile:2366: recipe for target 'libmpi_mpifh.la' failed
<br>
&lt;/code&gt;
<br>
<p>also in:
<br>
&lt;code&gt;
<br>
Making install in mca/common/sm
<br>
make[2]: Entering directory
<br>
'/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/mca/common/sm'
<br>
if test -z &quot;libmca_common_sm.la&quot;; then \
<br>
&nbsp;&nbsp;rm -f &quot;libmca_common_sm.la&quot;; \
<br>
&nbsp;&nbsp;ln -s &quot;libmca_common_sm_noinst.la&quot; &quot;libmca_common_sm.la&quot;; \
<br>
fi
<br>
&nbsp;&nbsp;CC       common_sm_rml.lo
<br>
&nbsp;&nbsp;CC       common_sm.lo
<br>
&nbsp;&nbsp;CCLD     libmca_common_sm.la
<br>
.libs/common_sm_rml.o: In function `mca_common_sm_rml_info_bcast':
<br>
/usr/src/debug/openmpi-1.9.0-a1/ompi/mca/common/sm/common_sm_rml.c:102:
<br>
undefined reference to `opal_progress_event_users_increment'
<br>
...
<br>
.libs/common_sm.o:common_sm.c:(.data+0x8): undefined reference to
<br>
`opal_list_item_t_class'
<br>
collect2: error: ld returned 1 exit status
<br>
Makefile:1619: recipe for target 'libmca_common_sm.la' failed
<br>
&lt;/code&gt;
<br>
<p>On Tue, Jul 9, 2013 at 3:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; No issue with doing so. If this was someone trying to use it, I'd put it at a high priority. If just someone trying all the configure options, then a lower priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem stems from a little bit-rot. Those components are updated and working on a side branch being used by my old company, but I didn't make it a priority to bring them across as nobody else was using them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 8, 2013, at 11:44 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (giggling) No, it's unsafe. I've disabled 'trace' for now. On a more
</span><br>
<span class="quotelev2">&gt;&gt; serious note, why not adding those, if they should be here?
</span><br>
<span class="quotelev2">&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making check in mca/sensor/resusage
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/mca/sensor/resusage'
</span><br>
<span class="quotelev2">&gt;&gt;  CC       sensor_resusage.lo
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/resusage/sensor_resusage.c:35:28:
</span><br>
<span class="quotelev2">&gt;&gt; fatal error: orte/mca/db/db.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;orte/mca/db/db.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                            ^
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1594: recipe for target 'sensor_resusage.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 9, 2013 at 1:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it safe to say that you are going thru an exercise testing every option that exists? Just want to know so I can set expectations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 8, 2013, at 11:47 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there're more to come:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in mca/sensor/resusage
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/mca/sensor/resusage'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC       sensor_resusage.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/resusage/sensor_resusage.c:35:28:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fatal error: orte/mca/db/db.h: No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;orte/mca/db/db.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                           ^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile:1594: recipe for target 'sensor_resusage.lo' failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Jul 8, 2013 at 8:38 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oh, well, it does not:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In function &#145;sqlite_component_query&#146;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:93:17:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; warning: assignment from incompatible pointer type [enabled by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        *module = (mca_base_module_t*)&amp;opal_db_sqlite_module;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In function &#145;sqlite_component_close&#146;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; note: each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function it appears in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In function &#145;sqlite_component_register&#146;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:127:12:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fatal error: opal/runtime/opal_globals.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;opal/runtime/opal_globals.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                      ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Jul 8, 2013 at 8:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Actually, those headers needed to be deleted - done. I take it you were deliberately trying to build that support? Otherwise, it shouldn't have built.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 8, 2013, at 11:11 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could somebody add these required headers to the repository? Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in advance:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:23:33:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fatal error: opal/util/proc_info.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/util/proc_info.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                               ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fatal error: opal/mca/errmgr/base/base.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12578.php">Josh Hursey: "Re: [OMPI devel] Annual OMPI membership review: SVN accounts"</a>
<li><strong>In reply to:</strong> <a href="12571.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
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
