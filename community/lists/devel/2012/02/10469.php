<?
$subject_val = "[OMPI devel] trunk build failure on NetBSD-5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 03:49:26 2012" -->
<!-- isoreceived="20120217084926" -->
<!-- sent="Fri, 17 Feb 2012 00:49:21 -0800" -->
<!-- isosent="20120217084921" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk build failure on NetBSD-5.0" -->
<!-- id="CAAvDA15K6z0SrFqJc92HD_j_=uF1H3whn81iKDQJMDLrPcm2+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk build failure on NetBSD-5.0<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 03:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10470.php">Paul Hargrove: "[OMPI devel] trunk build failure on OpenBSD-5.0"</a>
<li><strong>Previous message:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Reply:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following small patch was require to build the ompi trunk on NetBSD-5.0.
<br>
I am not sure if this was the proper header in which to add this include,
<br>
but it is the first one that needs &quot;struct timeval&quot;.
<br>
<p>-Paul
<br>
<p>--- openmpi-1.7a1r25944/opal/dss/dss_types.h~   2012-02-17
<br>
00:30:09.000000000 -0800
<br>
+++ openmpi-1.7a1r25944/opal/dss/dss_types.h    2012-02-17
<br>
00:34:04.000000000 -0800
<br>
@@ -31,6 +31,10 @@
<br>
&nbsp;#include &quot;opal/class/opal_object.h&quot;
<br>
&nbsp;#include &quot;opal/class/opal_list.h&quot;
<br>
<p>+#ifdef OPAL_HAVE_SYS_TIME_H
<br>
+#include &lt;sys/time.h&gt; /* for struct timeval */
<br>
+#endif
<br>
+
<br>
&nbsp;BEGIN_C_DECLS
<br>
<p>&nbsp;typedef uint8_t opal_data_type_t;  /** data type indicators */
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10470.php">Paul Hargrove: "[OMPI devel] trunk build failure on OpenBSD-5.0"</a>
<li><strong>Previous message:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>Reply:</strong> <a href="10471.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
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
