<?
$subject_val = "Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 14:47:28 2014" -->
<!-- isoreceived="20140203194728" -->
<!-- sent="Mon, 3 Feb 2014 11:46:37 -0800" -->
<!-- isosent="20140203194637" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv" -->
<!-- id="06FB83D4-8E72-4FDA-8518-77F1A9AA9F7D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14_LE_OeVN9XiFvxH3-sFCywmRuZGgLDgKQ9hPmvuoEyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 14:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13984.php">Adrian Reber: "[OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Previous message:</strong> <a href="13982.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Paul Hargrove: "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed a fix for these in the trunk - I've asked Jeff to review for 1.7.4, but let me know if you get a chance to verify it
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Feb 2, 2014, at 1:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see the following warnings when building 1.7.4rc3 on Solaris10 on SPARC w/ the Solaris Studio 12.3 compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_common_utils.c&quot;, line 75: warning: implicit function declaration: shm_open
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_
</span><br>
<span class="quotelev1">&gt; posix_component.c&quot;, line 186: warning: implicit function declaration: shm_unlink
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;, line 212: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt;         pointer to struct opal_shmem_seg_hdr_t {struct opal_atomic_lock_t {..} lock, int cpid} &quot;=&quot; pointer to char
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;, line 285: warning: implicit function declaration: shm_unlink
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;, line 288: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev1">&gt;         prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 165
</span><br>
<span class="quotelev1">&gt;         argument : pointer to struct opal_shmem_seg_hdr_t {struct opal_atomic_lock_t {..} lock, int cpid}
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;, line 306: warning: implicit function declaration: shm_open
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;, line 315: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt;         pointer to unsigned char &quot;=&quot; pointer to char
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/posix/shmem_posix_module.c&quot;, line 378: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev1">&gt;         prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 165
</span><br>
<span class="quotelev1">&gt;         argument : pointer to unsigned char
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/sysv/shmem_sysv_module.c&quot;, line 278: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev1">&gt;         prototype: pointer to char : &quot;/usr/include/sys/shm.h&quot;, line 131
</span><br>
<span class="quotelev1">&gt;         argument : pointer to struct opal_shmem_seg_hdr_t {struct opal_atomic_lock_t {..} lock, int cpid}
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/openmpi-1.7.4rc2-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc2/opal/mca/shmem/sysv/shmem_sysv_module.c&quot;, line 342: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev1">&gt;         prototype: pointer to char : &quot;/usr/include/sys/shm.h&quot;, line 131
</span><br>
<span class="quotelev1">&gt;         argument : pointer to unsigned char
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some appear to be missing casts for pointer types (as args and in assignments).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Others seem to be missing prototypes for shm_*(), despite including the right headers.
</span><br>
<span class="quotelev1">&gt; In GASNet we found we need to deal with POSIX shared memory as follows on Solaris:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if PLATFORM_OS_SOLARIS &amp;&amp; !defined(_POSIX_C_SOURCE)
</span><br>
<span class="quotelev1">&gt;   #define _POSIX_C_SOURCE 200112L /* Required for shm_{open,unlink} decls */
</span><br>
<span class="quotelev1">&gt;   #include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev1">&gt;   #undef _POSIX_C_SOURCE
</span><br>
<span class="quotelev1">&gt; #elif HAVE_SYS_MMAN_H
</span><br>
<span class="quotelev1">&gt;   #include &lt;sys/mman.h&gt;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;   ....
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13983/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13984.php">Adrian Reber: "[OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<li><strong>Previous message:</strong> <a href="13982.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Speedup for MPI_Dims_create()"</a>
<li><strong>In reply to:</strong> <a href="13974.php">Paul Hargrove: "[OMPI devel] 1.7.4rc3: solaris warnings in shmem/posix and shmem/sysv"</a>
<!-- nextthread="start" -->
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
