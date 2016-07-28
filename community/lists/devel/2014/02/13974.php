<?
$subject_val = "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  2 16:46:31 2014" -->
<!-- isoreceived="20140202214631" -->
<!-- sent="Sun, 2 Feb 2014 13:46:30 -0800" -->
<!-- isosent="20140202214630" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv" -->
<!-- id="CAAvDA14_LE_OeVN9XiFvxH3-sFCywmRuZGgLDgKQ9hPmvuoEyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-02 16:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13975.php">Mike Dubman: "[OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Previous message:</strong> <a href="13973.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<li><strong>Reply:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the following warnings when building 1.7.4rc3 on Solaris10 on SPARC
<br>
w/ the Solaris Studio 12.3 compilers.
<br>
<p>&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_common_utils.c&quot;,
<br>
line 75: warning: implicit function declaration: shm_open
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_
<br>
posix_component.c&quot;, line 186: warning: implicit function declaration:
<br>
shm_unlink
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;,
<br>
line 212: warning: assignment type mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to struct opal_shmem_seg_hdr_t {struct opal_atomic_lock_t
<br>
{..} lock, int cpid} &quot;=&quot; pointer to char
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;,
<br>
line 285: warning: implicit function declaration: shm_unlink
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;,
<br>
line 288: warning: argument #1 is incompatible with prototype:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 165
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument : pointer to struct opal_shmem_seg_hdr_t {struct
<br>
opal_atomic_lock_t {..} lock, int cpid}
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;,
<br>
line 306: warning: implicit function declaration: shm_open
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;,
<br>
line 315: warning: assignment type mismatch:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointer to unsigned char &quot;=&quot; pointer to char
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;,
<br>
line 378: warning: argument #1 is incompatible with prototype:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 165
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument : pointer to unsigned char
<br>
<p>&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/sysv/shmem_sysv_module.c&quot;,
<br>
line 278: warning: argument #1 is incompatible with prototype:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prototype: pointer to char : &quot;/usr/include/sys/shm.h&quot;, line 131
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument : pointer to struct opal_shmem_seg_hdr_t {struct
<br>
opal_atomic_lock_t {..} lock, int cpid}
<br>
&quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/sysv/shmem_sysv_module.c&quot;,
<br>
line 342: warning: argument #1 is incompatible with prototype:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prototype: pointer to char : &quot;/usr/include/sys/shm.h&quot;, line 131
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argument : pointer to unsigned char
<br>
<p>Some appear to be missing casts for pointer types (as args and in
<br>
assignments).
<br>
<p>Others seem to be missing prototypes for shm_*(), despite including the
<br>
right headers.
<br>
In GASNet we found we need to deal with POSIX shared memory as follows on
<br>
Solaris:
<br>
<p>#if PLATFORM_OS_SOLARIS &amp;&amp; !defined(_POSIX_C_SOURCE)
<br>
&nbsp;&nbsp;#define _POSIX_C_SOURCE 200112L /* Required for shm_{open,unlink} decls */
<br>
&nbsp;&nbsp;#include &lt;sys/mman.h&gt;
<br>
&nbsp;&nbsp;#undef _POSIX_C_SOURCE
<br>
#elif HAVE_SYS_MMAN_H
<br>
&nbsp;&nbsp;#include &lt;sys/mman.h&gt;
<br>
#else
<br>
&nbsp;&nbsp;....
<br>
#endif
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13975.php">Mike Dubman: "[OMPI devel] OMPI 1.7 compilation error with icc"</a>
<li><strong>Previous message:</strong> <a href="13973.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<li><strong>Reply:</strong> <a href="13983.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
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
