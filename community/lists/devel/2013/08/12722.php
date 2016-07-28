<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 14 17:52:33 2013" -->
<!-- isoreceived="20130814215233" -->
<!-- sent="Wed, 14 Aug 2013 21:52:29 +0000" -->
<!-- isosent="20130814215229" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A2200083F_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE40D334-ED05-4FB7-9F31-1DE94CE50B59_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-14 17:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12723.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12721.php">Ralph Castain: "[OMPI devel] RFC: rewrite of ORTE OOB - reissued"</a>
<li><strong>In reply to:</strong> <a href="12720.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12723.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12723.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12724.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following simple test code will exercise the following:
<br>
<p>start_pes()
<br>
<p>shmalloc()
<br>
<p>shmem_int_get()  
<br>
<p>shmem_int_put()
<br>
<p>shmem_barrier_all()  
<br>
<p>To compile:
<br>
<p>shmemcc test_shmem.c -o test_shmem 
<br>
<p>To launch:
<br>
<p>shmemrun -np 2  test_shmem
<br>
<p>or for those who prefer to launch with SLURM
<br>
<p>srun -n 2 test_shmem
<br>
<p>Josh
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, August 14, 2013 5:32 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [EXTERNAL] OpenSHMEM round 2
<br>
<p>Can you point me to a test program that would exercise it? I'd like to give it a try first.
<br>
<p>I'm okay with on by default as it builds its own separate library, and with the RFC
<br>
<p>On Aug 14, 2013, at 2:03 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, I don't have a strong opinion of whether OpenSHMEM is on 
</span><br>
<span class="quotelev1">&gt; by default or not.  It might cause unexpected behavior for some users 
</span><br>
<span class="quotelev1">&gt; (like on Crays, where one should really use Cray's SHMEM), but maybe 
</span><br>
<span class="quotelev1">&gt; it's better on other platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also would have no objection to the RFC, provided the segfaults I 
</span><br>
<span class="quotelev1">&gt; found get resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/14/13 2:08 PM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, and Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a bunch for taking the time to review this. It is extremely 
</span><br>
<span class="quotelev2">&gt;&gt; helpful. Let me comment of the building of OSHMEM and solicit some 
</span><br>
<span class="quotelev2">&gt;&gt; feedback from you guys (along with the rest of the community.) 
</span><br>
<span class="quotelev2">&gt;&gt; Originally we had planned to enable OSHMEM to build only if 
</span><br>
<span class="quotelev2">&gt;&gt; '--with-oshmem' flag was passed at configure time. However, 
</span><br>
<span class="quotelev2">&gt;&gt; (unbeknownst to me) this behavior was changed and now OSHMEM is built by default, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; yes, Ralph this is the intended behavior now. I am wondering if this 
</span><br>
<span class="quotelev2">&gt;&gt; is such a good idea. Do folks have a strong opinion on this one way 
</span><br>
<span class="quotelev2">&gt;&gt; or the other? From my perspective I can see arguments for both sides 
</span><br>
<span class="quotelev2">&gt;&gt; of the coin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Other than cleaning up warnings and resolving the segfault that Brian 
</span><br>
<span class="quotelev2">&gt;&gt; observed are we on a good course to getting this upstream? Is it 
</span><br>
<span class="quotelev2">&gt;&gt; reasonable to file an RFC for three weeks out?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Barrett, 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, August 11, 2013 1:42 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [EXTERNAL] OpenSHMEM round 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think those warnings are just because of when they last synced with 
</span><br>
<span class="quotelev2">&gt;&gt; the trunk; it looks like they haven't updated in the last week, when 
</span><br>
<span class="quotelev2">&gt;&gt; those (and some usnic fixes) went in.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More concerning is the --enable-picky stuff and the disabling of 
</span><br>
<span class="quotelev2">&gt;&gt; SHMEM in the right places.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/11/13 11:24 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Turning off the enable_picky, I get it to compile with the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warnings:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pget_elements_x_f.c:70: warning: no previous prototype for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'ompi_get_elements_x_f'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pstatus_set_elements_x_f.c:70: warning: no previous prototype for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'ompi_status_set_elements_x_f'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptype_get_extent_x_f.c:69: warning: no previous prototype for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'ompi_type_get_extent_x_f'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptype_get_true_extent_x_f.c:69: warning: no previous prototype for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'ompi_type_get_true_extent_x_f'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptype_size_x_f.c:69: warning: no previous prototype for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'ompi_type_size_x_f'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also found that OpenShmem is still building by default. Is that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended? I thought you were only going to build if --with-shmem (or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whatever option) was given.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like some cleanup is required
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 10, 2013, at 8:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, I couldn't get it to build - this is on a simple Xeon-based 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system under CentOS 6.2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda_getreq.c: In function 'mca_spml_yoda_get_completion':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda_getreq.c:98: error: pointer targets in passing argument 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda_getreq.c:98: error: signed and unsigned type in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conditional expression
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda_putreq.c: In function 'mca_spml_yoda_put_completion':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda_putreq.c:81: error: pointer targets in passing argument 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda_putreq.c:81: error: signed and unsigned type in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; conditional expression
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [spml_yoda_getreq.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [spml_yoda_putreq.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_put_internal':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda.c:725: error: pointer targets in passing argument 1 of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda.c:725: error: signed and unsigned type in conditional 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expression
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_get':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda.c:1107: error: pointer targets in passing argument 1 of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expected 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; spml_yoda.c:1107: error: signed and unsigned type in conditional 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; expression
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [spml_yoda.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Only configure arguments:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable_picky=yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable_debug=yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 10, 2013, at 7:21 PM, &quot;Barrett, Brian W&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 8/6/13 10:30 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear OMPI Community,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please find on Bitbucket the latest round of OSHMEM changes based 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on community feedback. Please git and test at your leisure.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In general, I think everything looks ok.  However, the &quot;right&quot; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thing doesn't happen if the CM PML is used (at least, when using 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the Portals
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MTL).  When configured with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --enable-mca-no-build=pml-ob1,pml-bfo,pml-v,btl,bml,mpool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The build segfaults trying to run a SHMEM program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 2 ./bcast
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shannon:90397] *** Process received signal *** [shannon:90397]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Signal: Segmentation fault (11) [shannon:90397] Signal code: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Address not mapped (1) [shannon:90397] Failing at address: (nil) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shannon:90398] *** Process received signal *** [shannon:90398]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Signal: Segmentation fault (11) [shannon:90398] Signal code: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Address not mapped (1) [shannon:90398] Failing at address: (nil) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shannon:90397] [ 0] /lib64/libpthread.so.0() [0x38b7a0f4a0] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shannon:90397] *** End of error message *** [shannon:90398] [ 0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib64/libpthread.so.0() [0x38b7a0f4a0] [shannon:90398] *** End of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 90398 on node shannon 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exited  on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12722/test_shmem.c">test_shmem.c</a>
</ul>
<!-- attachment="test_shmem.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12723.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12721.php">Ralph Castain: "[OMPI devel] RFC: rewrite of ORTE OOB - reissued"</a>
<li><strong>In reply to:</strong> <a href="12720.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12723.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12723.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Reply:</strong> <a href="12724.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
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
