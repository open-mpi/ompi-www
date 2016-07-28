<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 11 13:24:18 2013" -->
<!-- isoreceived="20130811172418" -->
<!-- sent="Sun, 11 Aug 2013 10:24:15 -0700" -->
<!-- isosent="20130811172415" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="59A7BAD9-3BC8-4FE7-8C69-A5CCC33D059E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E102F339-1E72-4F0D-B8DB-B0B8EB2488DD_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-08-11 13:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Turning off the enable_picky, I get it to compile with the following warnings:
<br>
<p>pget_elements_x_f.c:70: warning: no previous prototype for 'ompi_get_elements_x_f'
<br>
pstatus_set_elements_x_f.c:70: warning: no previous prototype for 'ompi_status_set_elements_x_f'
<br>
ptype_get_extent_x_f.c:69: warning: no previous prototype for 'ompi_type_get_extent_x_f'
<br>
ptype_get_true_extent_x_f.c:69: warning: no previous prototype for 'ompi_type_get_true_extent_x_f'
<br>
ptype_size_x_f.c:69: warning: no previous prototype for 'ompi_type_size_x_f'
<br>
<p>I also found that OpenShmem is still building by default. Is that intended? I thought you were only going to build if --with-shmem (or whatever option) was given.
<br>
<p>Looks like some cleanup is required
<br>
<p>On Aug 10, 2013, at 8:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I couldn't get it to build - this is on a simple Xeon-based system under CentOS 6.2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev1">&gt; spml_yoda_getreq.c: In function 'mca_spml_yoda_get_completion':
</span><br>
<span class="quotelev1">&gt; spml_yoda_getreq.c:98: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev1">&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev1">&gt; spml_yoda_getreq.c:98: error: signed and unsigned type in conditional expression
</span><br>
<span class="quotelev1">&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev1">&gt; spml_yoda_putreq.c: In function 'mca_spml_yoda_put_completion':
</span><br>
<span class="quotelev1">&gt; spml_yoda_putreq.c:81: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev1">&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev1">&gt; spml_yoda_putreq.c:81: error: signed and unsigned type in conditional expression
</span><br>
<span class="quotelev1">&gt; make[2]: *** [spml_yoda_getreq.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[2]: *** [spml_yoda_putreq.lo] Error 1
</span><br>
<span class="quotelev1">&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev1">&gt; spml_yoda.c: In function 'mca_spml_yoda_put_internal':
</span><br>
<span class="quotelev1">&gt; spml_yoda.c:725: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev1">&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev1">&gt; spml_yoda.c:725: error: signed and unsigned type in conditional expression
</span><br>
<span class="quotelev1">&gt; spml_yoda.c: In function 'mca_spml_yoda_get':
</span><br>
<span class="quotelev1">&gt; spml_yoda.c:1107: error: pointer targets in passing argument 1 of 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev1">&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev1">&gt; spml_yoda.c:1107: error: signed and unsigned type in conditional expression
</span><br>
<span class="quotelev1">&gt; make[2]: *** [spml_yoda.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only configure arguments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; enable_picky=yes
</span><br>
<span class="quotelev1">&gt; enable_debug=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2013, at 7:21 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/6/13 10:30 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OMPI Community,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please find on Bitbucket the latest round of OSHMEM changes based on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community feedback. Please git and test at your leisure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In general, I think everything looks ok.  However, the &quot;right&quot; thing
</span><br>
<span class="quotelev2">&gt;&gt; doesn't happen if the CM PML is used (at least, when using the Portals 4
</span><br>
<span class="quotelev2">&gt;&gt; MTL).  When configured with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-mca-no-build=pml-ob1,pml-bfo,pml-v,btl,bml,mpool
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The build segfaults trying to run a SHMEM program:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./bcast
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90397] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90397] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90397] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90397] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90398] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90398] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90398] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90398] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90397] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90397] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90398] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0]
</span><br>
<span class="quotelev2">&gt;&gt; [shannon:90398] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 90398 on node shannon exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12712.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12714.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
