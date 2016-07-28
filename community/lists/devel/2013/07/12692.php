<?
$subject_val = "Re: [OMPI devel] OpenSHMEM up on bitbucket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 24 14:27:53 2013" -->
<!-- isoreceived="20130724182753" -->
<!-- sent="Wed, 24 Jul 2013 12:27:38 -0600" -->
<!-- isosent="20130724182738" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenSHMEM up on bitbucket" -->
<!-- id="20130724182738.GD63454_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A21FF2AF4_at_MTIDAG01.mtl.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-24 14:27:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12693.php">Ralph Castain: "[OMPI devel] IPv6 support"</a>
<li><strong>Previous message:</strong> <a href="12691.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12688.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its MAP_ANON on OS X... It works on Linux as well but it is marked deprecated.
<br>
<p>-Nathan
<br>
<p>On Wed, Jul 24, 2013 at 01:10:38PM +0000, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt; Great feedback. Thanks, Jeff. We always compile on IB machines (in fact, no one in MLNX has a Mac to test on OSX.) We appreciate the help!! We will iterate on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 24, 2013 8:31 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] OpenSHMEM up on bitbucket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to the I-don't-have-verbs compile errors on my Mac, I also get these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.c: In function '__shm_attach':
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.c:216: error: 'SHM_HUGETLB' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.c:216: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.c:216: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.c: In function '__mmap_attach':
</span><br>
<span class="quotelev1">&gt; base/memheap_base_alloc.c:275: error: 'MAP_ANONYMOUS' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/memheap_base_alloc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2013, at 8:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hmmmm....I'm afraid this doesn't build for us folks that don't have IB on their system. From what I can see, it looks like you broke a fundamental abstraction layer rule by including a header from a component into a completely different component. That is definitely *not* allowed for precisely this reason.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib.h:34:30: error: 
</span><br>
<span class="quotelev2">&gt; &gt; infiniband/verbs.h: No such file or directory In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib.h:374: error: field 
</span><br>
<span class="quotelev2">&gt; &gt; 'ib_dev_attr' has incomplete type In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib.h:470: error: field 
</span><br>
<span class="quotelev2">&gt; &gt; 'ib_port_attr' has incomplete type In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:33,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:306: error: field 
</span><br>
<span class="quotelev2">&gt; &gt; 'sg_entry' has incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:318: error: field 
</span><br>
<span class="quotelev2">&gt; &gt; 'sr_desc' has incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:345: error: field 
</span><br>
<span class="quotelev2">&gt; &gt; 'rd_desc' has incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_frag.h:359: error: field 
</span><br>
<span class="quotelev2">&gt; &gt; 'sr_desc' has incomplete type In file included from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
</span><br>
<span class="quotelev2">&gt; &gt;                  from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
</span><br>
<span class="quotelev2">&gt; &gt;                  from base/spml_base.c:19:
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'post_recvs':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:367: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:376: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:378: error: implicit declaration of function 'ibv_post_recv'
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'ib_send_flags':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: 
</span><br>
<span class="quotelev2">&gt; &gt; 'IBV_SEND_SIGNALED' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: (Each 
</span><br>
<span class="quotelev2">&gt; &gt; undeclared identifier is reported only once
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: for 
</span><br>
<span class="quotelev2">&gt; &gt; each function it appears in.)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:516: error: 
</span><br>
<span class="quotelev2">&gt; &gt; 'IBV_SEND_INLINE' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'post_send':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:543: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:546: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:546: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:554: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:556: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:556: error: 
</span><br>
<span class="quotelev2">&gt; &gt; 'IBV_WR_RDMA_WRITE' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:557: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:569: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:578: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:584: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:584: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:587: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:587: error: 
</span><br>
<span class="quotelev2">&gt; &gt; 'IBV_WR_SEND' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:589: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:589: error: 
</span><br>
<span class="quotelev2">&gt; &gt; 'IBV_WR_SEND_WITH_IMM' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:593: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:602: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:604: error: 
</span><br>
<span class="quotelev2">&gt; &gt; dereferencing pointer to incomplete type
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:604: error: 
</span><br>
<span class="quotelev2">&gt; &gt; 'IBV_SEND_SIGNALED' undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt; ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:610: error: implicit declaration of function 'ibv_post_send'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [base/spml_base.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 24, 2013, at 4:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm afraid Josh got bit by grabbing the wrong URL - here's the correct clone command for anyone not Josh:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; git clone <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 23, 2013, at 6:43 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear OMPI Developers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have put Mellanox OpenSHMEM up for review on my Bitbucket. Please &quot;git&quot; and test at your leisure. Questions, comments, and critiques are most welcome.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; git clone 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git">https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To build with OSHMEM support, build as you would OMPI but simply include '--with-oshmem' on your configure line. This will get you started.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="12693.php">Ralph Castain: "[OMPI devel] IPv6 support"</a>
<li><strong>Previous message:</strong> <a href="12691.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12688.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
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
