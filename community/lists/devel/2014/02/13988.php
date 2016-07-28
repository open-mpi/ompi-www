<?
$subject_val = "[OMPI devel] 1.7.4rc: additional solaris warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 18:22:08 2014" -->
<!-- isoreceived="20140203232208" -->
<!-- sent="Mon, 3 Feb 2014 15:22:06 -0800" -->
<!-- isosent="20140203232206" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: additional solaris warnings" -->
<!-- id="CAAvDA17C2Hmi4KGLDaGiU4jcKQVMHw223kzw9viix_241zTupg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: additional solaris warnings<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 18:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13989.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13987.php">Ralph Castain: "Re: [OMPI devel] Problem compiling openmpi 1.7.4rc3 against system libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13990.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: additional solaris warnings"</a>
<li><strong>Reply:</strong> <a href="13990.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: additional solaris warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warnings below come from the Solaris Studio 12.3 compilers when testing
<br>
r30538 on the v1.7 branch (to confirm the undefined MB problem has been
<br>
resolved).
<br>
<p>These are in addition to the shmem/{posix,svsv} ones reported yesterday.
<br>
I am NOT saying that any/all of these are new, just that I didn't report
<br>
them yet.
<br>
<p>-Paul
<br>
<p>&quot;[SRCDIR]/opal/mca/base/mca_base_param.c&quot;, line 583: warning: enum type
<br>
mismatch: op &quot;=&quot;
<br>
<p>&quot;[SRCDIR]/opal/mca/hwloc/hwloc172/hwloc/src/topology-synthetic.c&quot;, line
<br>
433: warning: initializer will be sign-extended: -1
<br>
&quot;[SRCDIR]/opal/mca/hwloc/hwloc172/hwloc/src/topology-custom.c&quot;, line 85:
<br>
warning: initializer will be sign-extended: -1
<br>
&quot;[SRCDIR]/opal/mca/hwloc/hwloc172/hwloc/src/topology-xml.c&quot;, line 1152:
<br>
warning: initializer will be sign-extended: -1
<br>
<p>&quot;[SRCDIR]/orte/mca/rmaps/base/rmaps_base_binding.c&quot;, line 975: warning:
<br>
statement not reached
<br>
<p>&quot;[SRCDIR]/orte/mca/odls/default/odls_default_module.c&quot;, line 512: warning:
<br>
statement not reached
<br>
<p>&quot;[SRCDIR]/ompi/datatype/ompi_datatype_args.c&quot;, line 515: warning: improper
<br>
pointer/integer combination: op &quot;=&quot;
<br>
<p>&quot;[SRCDIR]/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 315:
<br>
warning: statement not reached
<br>
<p>&quot;[SRCDIR]/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 143: warning:
<br>
assignment type mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to struct sm_offset {struct  {..} mutex, long long offset}
<br>
&quot;=&quot; pointer to char
<br>
&quot;[SRCDIR]/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 216: warning:
<br>
argument #1 is incompatible with prototype:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 165
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument : pointer to struct sm_offset {struct  {..} mutex, long
<br>
long offset}
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13988/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13989.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13987.php">Ralph Castain: "Re: [OMPI devel] Problem compiling openmpi 1.7.4rc3 against system libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13990.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: additional solaris warnings"</a>
<li><strong>Reply:</strong> <a href="13990.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: additional solaris warnings"</a>
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
