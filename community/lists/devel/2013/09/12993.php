<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 15:29:05 2013" -->
<!-- isoreceived="20130925192905" -->
<!-- sent="Wed, 25 Sep 2013 19:28:47 +0000" -->
<!-- isosent="20130925192847" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures" -->
<!-- id="CE689554.13C57%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2EE7ED87-B0AA-4F3C-9E22-2E9F0B83A4F5_at_open-mpi.org" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 15:28:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12994.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>In reply to:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12995.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<li><strong>Reply:</strong> <a href="12995.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<li><strong>Reply:</strong> <a href="12996.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, with r29246.
<br>
<p>Brian
<br>
<p>On 9/25/13 1:26 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Is this with current head? Josh committed a fix yesterday that I thought
</span><br>
<span class="quotelev1">&gt;addressed these
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sep 25, 2013, at 12:02 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guys -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think this was mentioned already, but I'm still seeing failures in the
</span><br>
<span class="quotelev2">&gt;&gt; trunk building the SHMEM code (below).  RHEL 6.4, GCC 4.4.7, 64 bit
</span><br>
<span class="quotelev2">&gt;&gt;build.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  CC       spml_yoda.lo
</span><br>
<span class="quotelev2">&gt;&gt; cc1: warnings being treated as errors
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c: In function 'mca_yoda_get_callback':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:231: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:231: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c: In function 'mca_yoda_get_response_callback':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:269: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:269: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_put_internal':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:832: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:832: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c: In function 'mca_spml_yoda_get':
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:1203: error: pointer targets in passing argument 1 of
</span><br>
<span class="quotelev2">&gt;&gt; 'opal_atomic_add_32' differ in signedness
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
</span><br>
<span class="quotelev2">&gt;&gt; 'volatile int32_t *' but argument is of type 'uint32_t *'
</span><br>
<span class="quotelev2">&gt;&gt; spml_yoda.c:1203: error: signed and unsigned type in conditional
</span><br>
<span class="quotelev2">&gt;&gt;expression
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [spml_yoda.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/bwbarre/projects/ompi/trunk/oshmem/mca/spml/yoda'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/bwbarre/projects/ompi/trunk/oshmem'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12993/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12994.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>In reply to:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12995.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<li><strong>Reply:</strong> <a href="12995.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
<li><strong>Reply:</strong> <a href="12996.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  OpenSHMEM failures"</a>
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
