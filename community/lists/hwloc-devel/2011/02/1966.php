<?
$subject_val = "[hwloc-devel] de-c99";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 11:18:38 2011" -->
<!-- isoreceived="20110218161838" -->
<!-- sent="Fri, 18 Feb 2011 11:18:30 -0500" -->
<!-- isosent="20110218161830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] de-c99" -->
<!-- id="6FA7D729-54DF-45C0-A490-12AE158F8196_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-devel] de-c99<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 11:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Previous message:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1971.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<li><strong>Maybe reply:</strong> <a href="1971.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<li><strong>Maybe reply:</strong> <a href="1972.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice: I gave you commit access to the bitbucket if you want to just directly push anything else.  
<br>
<p>I don't know if Samuel has a BB ID, but if this goes back to the SVN trunk soon, the point is moot.
<br>
<p>I hard-coded the array initialization:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/hwloc-de-c99/changeset/782bde127834">https://bitbucket.org/jsquyres/hwloc-de-c99/changeset/782bde127834</a>
<br>
<p>I still see a bunch of C99 warnings from the other ports.  I can take a whack at these, maybe later today.  All I'll be able to do is verify that they compile cleanly; I won't be able to test correctness.
<br>
<p>-----
<br>
make[3]: Entering directory `/home/jsquyres/hg/hwloc-de-c99/tests/ports'
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology.lo
<br>
In file included from topology.c:44:0:
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:23:1: warning: function declaration isn&#146;t a prototype
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:27:1: warning: C++ style comments are not allowed in ISO C90
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:27:1: warning: (this will be reported only once per input file)
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-traversal.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-synthetic.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-solaris.lo
<br>
In file included from topology-solaris.c:25:0:
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/sys/lgrp_user.h:25:14: warning: comma at end of enumerator list
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/sys/lgrp_user.h:30:23: warning: comma at end of enumerator list
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/sys/lgrp_user.h:40:17: warning: comma at end of enumerator list
<br>
topology-solaris.c: In function &#145;browse&#146;:
<br>
topology-solaris.c:347:5: warning: ISO C90 forbids variable length array &#145;cpuids&#146;
<br>
topology-solaris.c:378:5: warning: ISO C90 forbids variable length array &#145;lgrps&#146;
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-aix.lo
<br>
topology-aix.c: In function &#145;hwloc_aix_set_thisproc_cpubind&#146;:
<br>
topology-aix.c:90:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:90:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_get_thisproc_cpubind&#146;:
<br>
topology-aix.c:97:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:97:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_set_thisthread_cpubind&#146;:
<br>
topology-aix.c:104:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:104:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_get_thisthread_cpubind&#146;:
<br>
topology-aix.c:111:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:111:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_set_proc_cpubind&#146;:
<br>
topology-aix.c:118:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:118:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_get_proc_cpubind&#146;:
<br>
topology-aix.c:125:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:125:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_set_thisproc_membind&#146;:
<br>
topology-aix.c:281:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:281:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_get_thisproc_membind&#146;:
<br>
topology-aix.c:288:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:288:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_set_thisthread_membind&#146;:
<br>
topology-aix.c:295:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:295:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_get_thisthread_membind&#146;:
<br>
topology-aix.c:302:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:302:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_set_proc_membind&#146;:
<br>
topology-aix.c:309:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:309:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_aix_get_proc_membind&#146;:
<br>
topology-aix.c:316:18: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-aix.c:316:3: warning: initializer element is not computable at load time
<br>
topology-aix.c: In function &#145;hwloc_set_aix_hooks&#146;:
<br>
topology-aix.c:563:3: warning: C++ style comments are not allowed in ISO C90
<br>
topology-aix.c:563:3: warning: (this will be reported only once per input file)
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-osf.lo
<br>
topology-osf.c: In function &#145;hwloc_look_osf&#146;:
<br>
topology-osf.c:257:7: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-osf.c:258:7: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-osf.c:258:24: warning: ISO C90 forbids specifying subobject to initialize
<br>
topology-osf.c:258:7: warning: initializer element is not computable at load time
<br>
topology-osf.c:258:7: warning: initializer element is not computable at load time
<br>
topology-osf.c:259:7: warning: ISO C90 forbids specifying subobject to initialize
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-windows.lo
<br>
In file included from topology-windows.c:17:0:
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:23:1: warning: function declaration isn&#146;t a prototype
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:27:1: warning: C++ style comments are not allowed in ISO C90
<br>
/users/jsquyres/hg/hwloc-de-c99/tests/ports/include/windows.h:27:1: warning: (this will be reported only once per input file)
<br>
topology-windows.c:157:5: warning: type of bit-field &#145;Valid&#146; is a GCC extension
<br>
topology-windows.c:158:5: warning: type of bit-field &#145;ShareCount&#146; is a GCC extension
<br>
topology-windows.c:159:5: warning: type of bit-field &#145;Win32Protection&#146; is a GCC extension
<br>
topology-windows.c:160:5: warning: type of bit-field &#145;Shared&#146; is a GCC extension
<br>
topology-windows.c:161:5: warning: type of bit-field &#145;Node&#146; is a GCC extension
<br>
topology-windows.c:162:5: warning: type of bit-field &#145;Locked&#146; is a GCC extension
<br>
topology-windows.c:163:5: warning: type of bit-field &#145;LargePage&#146; is a GCC extension
<br>
topology-windows.c:164:4: warning: ISO C doesn&#146;t support unnamed structs/unions
<br>
topology-windows.c: In function &#145;hwloc_win_set_thread_cpubind&#146;:
<br>
topology-windows.c:186:3: warning: ISO C90 forbids mixed declarations and code
<br>
topology-windows.c: In function &#145;hwloc_win_set_proc_cpubind&#146;:
<br>
topology-windows.c:229:3: warning: ISO C90 forbids mixed declarations and code
<br>
topology-windows.c: In function &#145;hwloc_win_get_VirtualAllocExNumaProc&#146;:
<br>
topology-windows.c:318:17: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c:319:16: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c:323:30: warning: assignment from incompatible pointer type
<br>
topology-windows.c:328:28: warning: assignment from incompatible pointer type
<br>
topology-windows.c: In function &#145;hwloc_win_get_QueryWorkingSetExProc&#146;:
<br>
topology-windows.c:387:11: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c:391:13: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c: In function &#145;hwloc_win_get_area_membind&#146;:
<br>
topology-windows.c:418:3: warning: ISO C90 forbids mixed declarations and code
<br>
topology-windows.c:425:5: warning: ISO C90 forbids variable length array &#145;pv&#146;
<br>
topology-windows.c: In function &#145;hwloc_look_windows&#146;:
<br>
topology-windows.c:468:40: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c:469:36: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c:470:38: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
topology-windows.c:471:42: warning: ISO C forbids assignment between function pointer and &#145;void *&#146;
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-darwin.lo
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-freebsd.lo
<br>
topology-freebsd.c: In function &#145;hwloc_freebsd_set_thread_cpubind&#146;:
<br>
topology-freebsd.c:126:3: warning: passing argument 3 of &#145;pthread_setaffinity_np&#146; from incompatible pointer type
<br>
/usr/include/pthread.h:445:12: note: expected &#145;const struct cpu_set_t *&#146; but argument is of type &#145;cpuset_t *&#146;
<br>
topology-freebsd.c: In function &#145;hwloc_freebsd_get_thread_cpubind&#146;:
<br>
topology-freebsd.c:150:3: warning: passing argument 3 of &#145;pthread_getaffinity_np&#146; from incompatible pointer type
<br>
/usr/include/pthread.h:450:12: note: expected &#145;struct cpu_set_t *&#146; but argument is of type &#145;cpuset_t *&#146;
<br>
&nbsp;&nbsp;CC     libhwloc_ports_la-topology-hpux.lo
<br>
&nbsp;&nbsp;CCLD   libhwloc-ports.la
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1967.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: Fw: How to get cache sizes on AIX 6.1 ?"</a>
<li><strong>Previous message:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1971.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<li><strong>Maybe reply:</strong> <a href="1971.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
<li><strong>Maybe reply:</strong> <a href="1972.php">Samuel Thibault: "Re: [hwloc-devel] de-c99"</a>
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
