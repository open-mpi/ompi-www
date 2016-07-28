<?
$subject_val = "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 19:17:32 2014" -->
<!-- isoreceived="20140303001732" -->
<!-- sent="Sun, 2 Mar 2014 16:17:31 -0800" -->
<!-- isosent="20140303001731" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls" -->
<!-- id="CAAvDA15Jvwuk2amDPe0M4ibgGD4+KJYaNCs3v5S91kYweqQn8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 19:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Previous message:</strong> <a href="14258.php">Paul Hargrove: "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>Reply:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The failure below (from OpenBSD5-amd64) shows unresolved calls to pthread
<br>
&quot;setpshared&quot; interfaces for mutex and condition vars.   Thesw were not part
<br>
of the initial POSIX threads specification, and therefore configure-time
<br>
check is required before these calls can safely be included.
<br>
<p>Like my previous report (unresolved __sync_synchronize) this is from the
<br>
osc/sm component code, and there is no relation to VT (it just happens that
<br>
otfmerge-mpi is the first executable linked to libmpi).
<br>
<p>-Paul
<br>
<p>/home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm_component.o)(.text+0xba5):
<br>
In function `component_select':
<br>
/home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/osc_sm_component.c:349:
<br>
undefined reference to `pthread_mutexattr_setpshared'
<br>
/home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm_component.o)(.text+0xc14):/home/phargrov/OMPI/openmpi-1.7.5rc1-openbsd5-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/osc_sm_component.c:358:
<br>
undefined reference to `pthread_condattr_setpshared'
<br>
collect2: ld returned 1 exit status
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Previous message:</strong> <a href="14258.php">Paul Hargrove: "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>Reply:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
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
