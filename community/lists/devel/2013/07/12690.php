<?
$subject_val = "Re: [OMPI devel] OpenSHMEM up on bitbucket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 24 09:12:47 2013" -->
<!-- isoreceived="20130724131247" -->
<!-- sent="Wed, 24 Jul 2013 13:12:28 +0000" -->
<!-- isosent="20130724131228" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenSHMEM up on bitbucket" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A21FF2B11_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5D707B56-925D-41F3-B361-FFB54EF10661_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-24 09:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12691.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Previous message:</strong> <a href="12689.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12685.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12686.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph!!! I know the guys have been working hard trying to get this to work with an arbitrary BTL, seems we aren't there yet...
<br>
<p>Josh
<br>
<p><p><p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, July 24, 2013 8:20 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] OpenSHMEM up on bitbucket
<br>
<p>I think this is going to need to be refactored, Josh. Looks to me like whoever wrote this &quot;locked&quot; it to IB. That's a problem for me, at least - I believe that OpenShmem should use the MPI transports, but respect the OMPI abstraction layer.
<br>
<p>In other words, you should use the transports to move data around, but let the underlying abstractions choose how to do it. This would allow OpenShmem to run on top of any fabric, not just IB, which is the right way of doing things inside the OMPI code base.
<br>
<p>Just my $0.02
<br>
Ralph
<br>
<p>On Jul 24, 2013, at 5:03 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hmmmm....I'm afraid this doesn't build for us folks that don't have IB on their system. From what I can see, it looks like you broke a fundamental abstraction layer rule by including a header from a component into a completely different component. That is definitely *not* allowed for precisely this reason.
<br>
<p>In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/spml_base.c:19:
<br>
../../../ompi/mca/btl/openib/btl_openib.h:34:30: error: infiniband/verbs.h: No such file or directory
<br>
In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/spml_base.c:19:
<br>
../../../ompi/mca/btl/openib/btl_openib.h:374: error: field 'ib_dev_attr' has incomplete type
<br>
In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/spml_base.c:19:
<br>
../../../ompi/mca/btl/openib/btl_openib.h:470: error: field 'ib_port_attr' has incomplete type
<br>
In file included from ../../../ompi/mca/btl/openib/btl_openib_endpoint.h:33,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/spml_base.c:19:
<br>
../../../ompi/mca/btl/openib/btl_openib_frag.h:306: error: field 'sg_entry' has incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_frag.h:318: error: field 'sr_desc' has incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_frag.h:345: error: field 'rd_desc' has incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_frag.h:359: error: field 'sr_desc' has incomplete type
<br>
In file included from ../../../oshmem/mca/spml/yoda/spml_yoda_rdmafrag.h:21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../oshmem/mca/spml/yoda/spml_yoda_putreq.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from base/spml_base.c:19:
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'post_recvs':
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:367: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:368: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:376: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:378: error: implicit declaration of function 'ibv_post_recv'
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'ib_send_flags':
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: 'IBV_SEND_SIGNALED' undeclared (first use in this function)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: (Each undeclared identifier is reported only once
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:515: error: for each function it appears in.)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:516: error: 'IBV_SEND_INLINE' undeclared (first use in this function)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h: In function 'post_send':
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:543: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:546: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:546: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:554: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:556: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:556: error: 'IBV_WR_RDMA_WRITE' undeclared (first use in this function)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:557: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:569: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:578: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:584: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:584: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:587: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:587: error: 'IBV_WR_SEND' undeclared (first use in this function)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:589: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:589: error: 'IBV_WR_SEND_WITH_IMM' undeclared (first use in this function)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:593: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:602: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:604: error: dereferencing pointer to incomplete type
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:604: error: 'IBV_SEND_SIGNALED' undeclared (first use in this function)
<br>
../../../ompi/mca/btl/openib/btl_openib_endpoint.h:610: error: implicit declaration of function 'ibv_post_send'
<br>
make[2]: *** [base/spml_base.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>On Jul 24, 2013, at 4:51 AM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>I'm afraid Josh got bit by grabbing the wrong URL - here's the correct clone command for anyone not Josh:
<br>
<p>git clone <a href="https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>
<br>
<p><p>On Jul 23, 2013, at 6:43 AM, Joshua Ladd &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Dear OMPI Developers,
<br>
<p>I have put Mellanox OpenSHMEM up for review on my Bitbucket. Please &quot;git&quot; and test at your leisure. Questions, comments, and critiques are most welcome.
<br>
<p>git clone <a href="https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git<https://bitbucket.org/jladd_math/mlnx-oshmem.git">https://jladd_math&#64;bitbucket.org/jladd_math/mlnx-oshmem.git<https://bitbucket.org/jladd_math/mlnx-oshmem.git</a>&gt;
<br>
<p>To build with OSHMEM support, build as you would OMPI but simply include '--with-oshmem' on your configure line. This will get you started.
<br>
<p>Best regards,
<br>
<p>Josh
<br>
<p><p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12690/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12691.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>Previous message:</strong> <a href="12689.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<li><strong>In reply to:</strong> <a href="12685.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12686.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OpenSHMEM up on bitbucket"</a>
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
