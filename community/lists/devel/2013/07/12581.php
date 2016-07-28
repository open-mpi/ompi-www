<?
$subject_val = "Re: [OMPI devel] No such file(s) or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 10 15:40:30 2013" -->
<!-- isoreceived="20130710194030" -->
<!-- sent="Wed, 10 Jul 2013 21:40:26 +0200" -->
<!-- isosent="20130710194026" -->
<!-- name="Vasiliy" -->
<!-- email="testtest_2005_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] No such file(s) or directory" -->
<!-- id="CAHYyVz5-46rHv00fPmAJ0CO2B9yUU6OPLez7ooiEbLur5q5KGw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F70EA42_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-07-10 15:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>In reply to:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nothing special, for a trace it's just --enable-trace. I'm not
<br>
building libompitrace though, following marco's suggestion, only
<br>
arbitrary defined MCA_BASE_VAR_VERBOSE_MPIDEV_ALL = 2 (it wasn't
<br>
defined anyway), and did not change the library ordering.
<br>
<p>It wonderfully passes almost all the tests even though -Ofast is
<br>
present, however, the full string is awfully long as I'm pretty picky
<br>
in choosing the components to compile, patching the sources before
<br>
that, what in no way should interfere with the main compilation line.
<br>
There's a nasty trick with coll/hcoll and coll/coll_ml in DSO mode
<br>
though, since the configure script doesn't provide the easy way of
<br>
disabling DSO components - only during runtime. There's still some
<br>
work to be done about few missing dependencies to have all components
<br>
DSO-compile.
<br>
<p>On Wed, Jul 10, 2013 at 9:13 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What command are you using to configure OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2013, at 2:58 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not exactly the subject, however, since I've mentioned 'trace' here,
</span><br>
<span class="quotelev2">&gt;&gt; it's for this thread:
</span><br>
<span class="quotelev2">&gt;&gt; - undeclared 'value', or should I have configured it with
</span><br>
<span class="quotelev2">&gt;&gt; -Dvalue=&lt;something&gt;, it wouldn't compile anyway
</span><br>
<span class="quotelev2">&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/util'
</span><br>
<span class="quotelev2">&gt;&gt;  CC       trace.lo
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function &#145;opal_trace_init&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:44:13:
</span><br>
<span class="quotelev2">&gt;&gt; error: &#145;value&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt;     if (0 &gt; value) {
</span><br>
<span class="quotelev2">&gt;&gt;             ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:44:13:
</span><br>
<span class="quotelev2">&gt;&gt; note: each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev2">&gt;&gt; function it appears in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:63:35:
</span><br>
<span class="quotelev2">&gt;&gt; error: incompatible type for argument 11 of &#145;mca_base_var_register&#146;
</span><br>
<span class="quotelev2">&gt;&gt;                                   &amp;tracer.lds_verbose_level);
</span><br>
<span class="quotelev2">&gt;&gt;                                   ^
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev2">&gt;&gt;                 from
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:23:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev2">&gt;&gt; note: expected &#145;mca_base_var_scope_t&#146; but argument is of type &#145;int *&#146;
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev2">&gt;&gt; const char *framework_name,
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:63:35:
</span><br>
<span class="quotelev2">&gt;&gt; error: too few arguments to function &#145;mca_base_var_register&#146;
</span><br>
<span class="quotelev2">&gt;&gt;                                   &amp;tracer.lds_verbose_level);
</span><br>
<span class="quotelev2">&gt;&gt;                                   ^
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/base.h:35:0,
</span><br>
<span class="quotelev2">&gt;&gt;                 from
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:23:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/base/mca_base_var.h:503:19:
</span><br>
<span class="quotelev2">&gt;&gt; note: declared here
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_DECLSPEC int mca_base_var_register (const char *project_name,
</span><br>
<span class="quotelev2">&gt;&gt; const char *framework_name,
</span><br>
<span class="quotelev2">&gt;&gt;                   ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function &#145;opal_trace_finalize&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:72:5:
</span><br>
<span class="quotelev2">&gt;&gt; warning: implicit declaration of function &#145;mca_base_var_dereg_group&#146;
</span><br>
<span class="quotelev2">&gt;&gt; [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev2">&gt;&gt;     mca_base_var_dereg_group (mca_base_var_find_group (&quot;opal&quot;, &quot;trace&quot;, NULL));
</span><br>
<span class="quotelev2">&gt;&gt;     ^
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/util/trace.c:72:5:
</span><br>
<span class="quotelev2">&gt;&gt; warning: implicit declaration of function &#145;mca_base_var_find_group&#146;
</span><br>
<span class="quotelev2">&gt;&gt; [-Wimplicit-function-declaration]
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1708: recipe for target 'trace.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There're also 'misqueried' dependencies as shown in the next excerpt:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     libmpi_mpifh.la
</span><br>
<span class="quotelev2">&gt;&gt; .libs/abort_f.o: In function `ompi_abort_f':
</span><br>
<span class="quotelev2">&gt;&gt; ... (a LOT of unjustified 'undefined references', likely, resulted
</span><br>
<span class="quotelev2">&gt;&gt; from mis-ordered libraries)
</span><br>
<span class="quotelev2">&gt;&gt; profile/.libs/libmpi_mpifh_pmpi.a(pregister_datarep_f.o): In function
</span><br>
<span class="quotelev2">&gt;&gt; `opal_obj_new':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/debug/openmpi-1.9.0-a1/opal/class/opal_object.h:471:
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `opal_class_initialize'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:2366: recipe for target 'libmpi_mpifh.la' failed
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; also in:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making install in mca/common/sm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/ompi/mca/common/sm'
</span><br>
<span class="quotelev2">&gt;&gt; if test -z &quot;libmca_common_sm.la&quot;; then \
</span><br>
<span class="quotelev2">&gt;&gt;  rm -f &quot;libmca_common_sm.la&quot;; \
</span><br>
<span class="quotelev2">&gt;&gt;  ln -s &quot;libmca_common_sm_noinst.la&quot; &quot;libmca_common_sm.la&quot;; \
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;  CC       common_sm_rml.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       common_sm.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     libmca_common_sm.la
</span><br>
<span class="quotelev2">&gt;&gt; .libs/common_sm_rml.o: In function `mca_common_sm_rml_info_bcast':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/debug/openmpi-1.9.0-a1/ompi/mca/common/sm/common_sm_rml.c:102:
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `opal_progress_event_users_increment'
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; .libs/common_sm.o:common_sm.c:(.data+0x8): undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `opal_list_item_t_class'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; Makefile:1619: recipe for target 'libmca_common_sm.la' failed
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 9, 2013 at 3:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No issue with doing so. If this was someone trying to use it, I'd put it at a high priority. If just someone trying all the configure options, then a lower priority.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem stems from a little bit-rot. Those components are updated and working on a side branch being used by my old company, but I didn't make it a priority to bring them across as nobody else was using them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 8, 2013, at 11:44 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (giggling) No, it's unsafe. I've disabled 'trace' for now. On a more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; serious note, why not adding those, if they should be here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making check in mca/sensor/resusage
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
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Jul 9, 2013 at 1:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it safe to say that you are going thru an exercise testing every option that exists? Just want to know so I can set expectations
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 8, 2013, at 11:47 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; there're more to come:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Making all in mca/sensor/resusage
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/orte/mca/sensor/resusage'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CC       sensor_resusage.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/orte/mca/sensor/resusage/sensor_resusage.c:35:28:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fatal error: orte/mca/db/db.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;orte/mca/db/db.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                          ^
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Makefile:1594: recipe for target 'sensor_resusage.lo' failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Jul 8, 2013 at 8:38 PM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oh, well, it does not:
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
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In function &#145;sqlite_component_query&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:93:17:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; warning: assignment from incompatible pointer type [enabled by
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       *module = (mca_base_module_t*)&amp;opal_db_sqlite_module;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In function &#145;sqlite_component_close&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;          ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:104:12:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; note: each undeclared identifier is reported only once for each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; function it appears in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In function &#145;sqlite_component_register&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:127:12:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error: &#145;ORTE_SUCCESS&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;          ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fatal error: opal/runtime/opal_globals.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/runtime/opal_globals.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                     ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Jul 8, 2013 at 8:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Actually, those headers needed to be deleted - done. I take it you were deliberately trying to build that support? Otherwise, it shouldn't have built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 8, 2013, at 11:11 AM, Vasiliy &lt;testtest_2005_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could somebody add these required headers to the repository? Thank you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in advance:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;code&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making all in mca/db/sqlite
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '/usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/build/opal/mca/db/sqlite'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite_component.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CC       libmca_db_sqlite_la-db_sqlite.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite_component.c:23:33:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fatal error: opal/util/proc_info.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                              ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Makefile:1608: recipe for target
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'libmca_db_sqlite_la-db_sqlite_component.lo' failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [libmca_db_sqlite_la-db_sqlite_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/src/64bit/release/openmpi/openmpi-1.9.0-a1/src/openmpi-1.9.0/opal/mca/db/sqlite/db_sqlite.c:39:39:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fatal error: opal/mca/errmgr/base/base.h: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;opal/mca/errmgr/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                    ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;/code&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>In reply to:</strong> <a href="12580.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] No such file(s) or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
<li><strong>Reply:</strong> <a href="12582.php">Ralph Castain: "Re: [OMPI devel] No such file(s) or directory"</a>
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
