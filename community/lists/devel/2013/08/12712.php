<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 10 23:54:08 2013" -->
<!-- isoreceived="20130811035408" -->
<!-- sent="Sat, 10 Aug 2013 20:54:03 -0700" -->
<!-- isosent="20130811035403" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="E102F339-1E72-4F0D-B8DB-B0B8EB2488DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE2C50D6.13422%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-10 23:54:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I couldn't get it to build - this is on a simple Xeon-based system under CentOS 6.2:
<br>
<p>cc1: warnings being treated as errors
<br>
spml_yoda_getreq.c: In function 'mca_spml_yoda_get_completion':
<br>
spml_yoda_getreq.c:98: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda_getreq.c:98: error: signed and unsigned type in conditional expression
<br>
cc1: warnings being treated as errors
<br>
spml_yoda_putreq.c: In function 'mca_spml_yoda_put_completion':
<br>
spml_yoda_putreq.c:81: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda_putreq.c:81: error: signed and unsigned type in conditional expression
<br>
make[2]: *** [spml_yoda_getreq.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[2]: *** [spml_yoda_putreq.lo] Error 1
<br>
cc1: warnings being treated as errors
<br>
spml_yoda.c: In function 'mca_spml_yoda_put_internal':
<br>
spml_yoda.c:725: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda.c:725: error: signed and unsigned type in conditional expression
<br>
spml_yoda.c: In function 'mca_spml_yoda_get':
<br>
spml_yoda.c:1107: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda.c:1107: error: signed and unsigned type in conditional expression
<br>
make[2]: *** [spml_yoda.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
<p>Only configure arguments:
<br>
<p>enable_picky=yes
<br>
enable_debug=yes
<br>
<p><p>gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
<br>
<p><p><p>On Aug 10, 2013, at 7:21 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 8/6/13 10:30 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OMPI Community,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please find on Bitbucket the latest round of OSHMEM changes based on
</span><br>
<span class="quotelev2">&gt;&gt; community feedback. Please git and test at your leisure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, I think everything looks ok.  However, the &quot;right&quot; thing
</span><br>
<span class="quotelev1">&gt; doesn't happen if the CM PML is used (at least, when using the Portals 4
</span><br>
<span class="quotelev1">&gt; MTL).  When configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure --enable-mca-no-build=pml-ob1,pml-bfo,pml-v,btl,bml,mpool
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The build segfaults trying to run a SHMEM program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./bcast
</span><br>
<span class="quotelev1">&gt; [shannon:90397] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [shannon:90397] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [shannon:90397] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [shannon:90397] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [shannon:90398] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [shannon:90398] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [shannon:90398] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [shannon:90398] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [shannon:90397] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
</span><br>
<span class="quotelev1">&gt; [shannon:90397] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [shannon:90398] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
</span><br>
<span class="quotelev1">&gt; [shannon:90398] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 90398 on node shannon exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12713.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
