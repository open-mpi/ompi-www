<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 15:38:46 2013" -->
<!-- isoreceived="20130925193846" -->
<!-- sent="Wed, 25 Sep 2013 19:38:25 +0000" -->
<!-- isosent="20130925193825" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8C96A0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CE689554.13C57%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 15:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12996.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12994.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>In reply to:</strong> <a href="12993.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12996.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, I see configure.params files in the oshmem tree.  This is another indication that oshmem was developed for the v1.6 branch, but then only sorta forward-ported to the trunk:
<br>

<br>
&nbsp;&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; find . -name configure.params
<br>
./mca/atomic/basic/configure.params
<br>
./mca/atomic/mxm/configure.params
<br>
./mca/memheap/buddy/configure.params
<br>
./mca/memheap/ptmalloc/configure.params
<br>
./mca/scoll/basic/configure.params
<br>
./mca/scoll/fca/configure.params
<br>
./mca/spml/ikrit/configure.params
<br>
./mca/spml/yoda/configure.params
<br>

<br>
Can these leftover-from-v1.6 issues be fixed?  And perhaps audit the oshmem tree to find/remove-or-fix any other leftover-from-v1.6 issues?
<br>

<br>

<br>

<br>
On Sep 25, 2013, at 3:28 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Yes, with r29246.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/25/13 1:26 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this with current head? Josh committed a fix yesterday that I thought
</span><br>
<span class="quotelev2">&gt;&gt; addressed these
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 25, 2013, at 12:02 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guys -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this was mentioned already, but I'm still seeing failures in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk building the SHMEM code (below).  RHEL 6.4, GCC 4.4.7, 64 bit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC       spml_yoda.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c: In function 'mca_yoda_get_callback':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:231: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:231: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c: In function 'mca_yoda_get_response_callback':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:269: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:269: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_put_internal':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:832: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:832: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_get':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:1203: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spml_yoda.c:1203: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [spml_yoda.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/home/bwbarre/projects/ompi/trunk/oshmem/mca/spml/yoda'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/bwbarre/projects/ompi/trunk/oshmem'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12996.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12994.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>In reply to:</strong> <a href="12993.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12996.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
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
