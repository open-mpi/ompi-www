<?
$subject_val = "[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 17:42:54 2014" -->
<!-- isoreceived="20140813214254" -->
<!-- sent="Wed, 13 Aug 2014 14:42:52 -0700" -->
<!-- isosent="20140813214252" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics" -->
<!-- id="CAAvDA14PWfcR1DtrMc6b19BwydtRTaVrsmvdz_Ri=xxDPPGigw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 17:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15643.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15644.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Reply:</strong> <a href="15644.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When configured with --enable-osx-builtin-atomics
<br>
<p>Making all in asm
<br>
&nbsp;&nbsp;CC       asm.lo
<br>
In file included from
<br>
/Users/Paul/OMPI/openmpi-1.8.2rc4-macos10.8-x86-clang-atomics/openmpi-1.8.2rc4/opal/asm/asm.c:21:
<br>
/Users/Paul/OMPI/openmpi-1.8.2rc4-macos10.8-x86-clang-atomics/openmpi-1.8.2rc4/opal/include/opal/sys/atomic.h:145:10:
<br>
fatal error: 'opal/sys/osx/atomic.h' file not found
<br>
#include &quot;opal/sys/osx/atomic.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
1 error generated.
<br>
<p>I reported the same issue to George in the trunk last week.
<br>
So, I am 95% certain one just needs to cmr r32390 (commit msg == 'Dont miss
<br>
the Os X atomics on &quot;make dist&quot;')
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15643.php">Paul Hargrove: "[OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15641.php">George Bosilca: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15644.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
<li><strong>Reply:</strong> <a href="15644.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc4] build failure with --enable-osx-builtin-atomics"</a>
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
