<?
$subject_val = "Re: [OMPI devel] OpenSHMEM up on bitbucket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 24 08:30:29 2013" -->
<!-- isoreceived="20130724123029" -->
<!-- sent="Wed, 24 Jul 2013 12:30:25 +0000" -->
<!-- isosent="20130724123025" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenSHMEM up on bitbucket" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F764937_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="057CD542-0B8C-4200-9F09-1D597343EEAB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenSHMEM up on bitbucket<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-24 08:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Previous message:</strong> <a href="12685.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12684.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12688.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Reply:</strong> <a href="12688.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to the I-don't-have-verbs compile errors on my Mac, I also get these:
<br>
<p>base/memheap_base_alloc.c: In function '__shm_attach':
<br>
base/memheap_base_alloc.c:216: error: 'SHM_HUGETLB' undeclared (first use in this function)
<br>
base/memheap_base_alloc.c:216: error: (Each undeclared identifier is reported only once
<br>
base/memheap_base_alloc.c:216: error: for each function it appears in.)
<br>
base/memheap_base_alloc.c: In function '__mmap_attach':
<br>
base/memheap_base_alloc.c:275: error: 'MAP_ANONYMOUS' undeclared (first use in this function)
<br>
make[2]: *** [base/memheap_base_alloc.lo] Error 1
<br>
<p><p><p>On Jul 24, 2013, at 8:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Hmmmm....I'm afraid this doesn't build for us folks that don't have IB on their system. From what I can see, it looks like you broke a fundamental abstraction layer rule by including a header from a component into a completely different component. That is definitely *not* allowed for precisely this reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev1">&gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib.h:34:30: error: infiniband/verbs.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev1">&gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib.h:374: error: field 'ib_dev_attr' has incomplete type
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev1">&gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib.h:470: error: field 'ib_port_attr' has incomplete type
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:33,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev1">&gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:306: error: field 'sg_entry' has incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:318: error: field 'sr_desc' has incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:345: error: field 'rd_desc' has incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:359: error: field 'sr_desc' has incomplete type
</span><br>
<span class="quotelev1">&gt; In file included from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev1">&gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev1">&gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'post_recvs':
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:367: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:376: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:378: error: implicit declaration of function 'ibv_post_recv'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'ib_send_flags':
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: 'IBV_SEND_SIGNALED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:516: error: 'IBV_SEND_INLINE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'post_send':
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:543: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:546: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:546: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:554: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:556: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:556: error: 'IBV_WR_RDMA_WRITE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:557: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:569: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:578: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:584: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:584: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:587: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:587: error: 'IBV_WR_SEND' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:589: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:589: error: 'IBV_WR_SEND_WITH_IMM' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:593: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:602: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:604: error: dereferencing pointer to incomplete type
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:604: error: 'IBV_SEND_SIGNALED' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:610: error: implicit declaration of function 'ibv_post_send'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/spml_base.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2013, at 4:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid Josh got bit by grabbing the wrong URL - here's the correct clone command for anyone not Josh:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; git clone <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2013, at 6:43 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OMPI Developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have put Mellanox OpenSHMEM up for review on my Bitbucket. Please &#147;git&#148; and test at your leisure. Questions, comments, and critiques are most welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; git clone <a href="https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git">https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To build with OSHMEM support, build as you would OMPI but simply include &#145;--with-oshmem&#146; on your configure line. This will get you started.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell: +1 (865) 258 - 8898
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Previous message:</strong> <a href="12685.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12684.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12688.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Reply:</strong> <a href="12688.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
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
