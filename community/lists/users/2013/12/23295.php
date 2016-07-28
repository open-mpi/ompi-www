<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 27 04:02:35 2013" -->
<!-- isoreceived="20131227090235" -->
<!-- sent="Fri, 27 Dec 2013 03:01:54 -0600" -->
<!-- isosent="20131227090154" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm" -->
<!-- id="CAPkf6e27TxbKgP1X-Ltt6KtZ+mqBCmdXtazD-dozMh9aEZuq5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5C691E518F345F4882FAB9E9839E60BA1883743E71_at_EXCHMB.ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-27 04:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23296.php">Javier Garcia Blas: "[OMPI users] CFP: EuroMPI/Asia 2014. The 21st European MPI Users' Group	Meeting. Kyoto, Japan. 9th - 12th September, 2014"</a>
<li><strong>Previous message:</strong> <a href="23294.php">Shamis, Pavel: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>In reply to:</strong> <a href="23294.php">Shamis, Pavel: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23353.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Pasha! The difference between btl_*_rndv_eager_limit and
<br>
btl_*_rndv_eager_limit
<br>
is now clear.
<br>
<p>-- Sid
<br>
<p><p>On 26 December 2013 10:19, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey Sid ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see inline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.1.  What is the meaning of &quot;phase 1&quot; fragment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[Shamis, Pavel] Phase one of the rendezvous (RNDV) protocol. Essentially,
</span><br>
<span class="quotelev1">&gt; the first request of the RNDV we send as an eager message of size N,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Receiver  unpacks the messages and switches RNDV get or put semantics.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.2.  Is my understanding correct that the btl_*_eager_limit is
</span><br>
<span class="quotelev1">&gt; applicable only in case of one-sided communication?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[Shamis, Pavel] It is actually used for small messages in the
</span><br>
<span class="quotelev1">&gt; send-receive semantics. The idea is that the cost of memory registration is
</span><br>
<span class="quotelev1">&gt; relatively high,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To avoid it, we memcopy the data to a pre-registred /allocated buffer.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Best,*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *P.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 16 December 2013 14:36, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything that Brian said, plus: note that the MCA param that Christoph
</span><br>
<span class="quotelev1">&gt; mentioned is specifically for the &quot;sm&quot; (shared memory) transport.  Each
</span><br>
<span class="quotelev1">&gt; transport has their own set of MCA params (e.g., mca_btl_tcp_eager_limit,
</span><br>
<span class="quotelev1">&gt; and friends).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 16, 2013, at 3:19 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siddhartha -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Christoph mentioned how to change the cross-over for shared memory, but
</span><br>
<span class="quotelev1">&gt; it's really per-transport (so you'd have to change it for your off-node
</span><br>
<span class="quotelev1">&gt; transport as well).  That's all in the FAQ you mentioned, so hopefully you
</span><br>
<span class="quotelev1">&gt; can take it from there.  Note that, in general, moving the eager limits has
</span><br>
<span class="quotelev1">&gt; some unintended side effects.  For example, it can cause more / less
</span><br>
<span class="quotelev1">&gt; copies.  It can also greatly increase memory usage.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Good luck,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12/16/13 1:49 AM, &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks Christoph.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I should have looked into the FAQ section on MCA params setting @ :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#available-mca-params">http://www.open-mpi.org/faq/?category=tuning#available-mca-params</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks again,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Siddhartha
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 16 December 2013 02:41, Christoph Niethammer &lt;niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Siddhartha,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Send/Recv in Open MPI implements both protocols and chooses based
</span><br>
<span class="quotelev1">&gt; on the message size which one to use.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You can use the mca parameter &quot;btl_sm_eager_limit&quot; to modify the
</span><br>
<span class="quotelev1">&gt; behaviour.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here the corresponding info obtained from the ompi_info tool:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data source: default
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nobelstrasse 19
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Von: &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; An: &quot;OpenMPI users mailing list&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gesendet: Samstag, 14. Dezember 2013 13:44:12
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Betreff: [OMPI users] Configuration for rendezvous and eager
</span><br>
<span class="quotelev1">&gt; protocols: two-sided comm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In OpenMPI, are MPI_Send, MPI_Recv (and friends) implemented using
</span><br>
<span class="quotelev1">&gt; rendezvous protocol or eager protocol?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If both, is there a way to choose one or the other during runtime or
</span><br>
<span class="quotelev1">&gt; while building the library?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If there is a threshold of the message size that dictates the protocol
</span><br>
<span class="quotelev1">&gt; to be used, is there a way I can alter that threshold value?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If different protocols were used for different versions of the library
</span><br>
<span class="quotelev1">&gt; in the past, could someone please direct me to the exact version numbers of
</span><br>
<span class="quotelev1">&gt; the implementations that used one or the other protocol?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siddhartha
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Scalable System Software Group
</span><br>
<span class="quotelev2">&gt; &gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23296.php">Javier Garcia Blas: "[OMPI users] CFP: EuroMPI/Asia 2014. The 21st European MPI Users' Group	Meeting. Kyoto, Japan. 9th - 12th September, 2014"</a>
<li><strong>Previous message:</strong> <a href="23294.php">Shamis, Pavel: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>In reply to:</strong> <a href="23294.php">Shamis, Pavel: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23353.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
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
