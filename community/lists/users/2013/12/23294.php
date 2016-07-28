<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 26 11:20:01 2013" -->
<!-- isoreceived="20131226162001" -->
<!-- sent="Thu, 26 Dec 2013 11:19:59 -0500" -->
<!-- isosent="20131226161959" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm" -->
<!-- id="5C691E518F345F4882FAB9E9839E60BA1883743E71_at_EXCHMB.ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkf6e1qsQeE88U4EgoJveEt+Ju=j_CiNRZ11zpdNU75nOQF9w_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-26 11:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23295.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23293.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for	our	magny	cours	based 32	core node"</a>
<li><strong>In reply to:</strong> <a href="23290.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23295.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23295.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Sid ;)
<br>
Please see inline.
<br>
<p><p>1.1.  What is the meaning of &quot;phase 1&quot; fragment?
<br>
[Shamis, Pavel] Phase one of the rendezvous (RNDV) protocol. Essentially, the first request of the RNDV we send as an eager message of size N,
<br>
Receiver  unpacks the messages and switches RNDV get or put semantics.
<br>
<p>1.2.  Is my understanding correct that the btl_*_eager_limit is applicable only in case of one-sided communication?
<br>
<p><p><p>[Shamis, Pavel] It is actually used for small messages in the send-receive semantics. The idea is that the cost of memory registration is relatively high,
<br>
<p>To avoid it, we memcopy the data to a pre-registred /allocated buffer.
<br>
<p>Best,
<br>
<p>P.
<br>
<p>On 16 December 2013 14:36, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
Everything that Brian said, plus: note that the MCA param that Christoph mentioned is specifically for the &quot;sm&quot; (shared memory) transport.  Each transport has their own set of MCA params (e.g., mca_btl_tcp_eager_limit, and friends).
<br>
<p><p>On Dec 16, 2013, at 3:19 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&lt;mailto:bwbarre_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Siddhartha -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christoph mentioned how to change the cross-over for shared memory, but it's really per-transport (so you'd have to change it for your off-node transport as well).  That's all in the FAQ you mentioned, so hopefully you can take it from there.  Note that, in general, moving the eager limits has some unintended side effects.  For example, it can cause more / less copies.  It can also greatly increase memory usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/16/13 1:49 AM, &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&lt;mailto:siddharthajana24_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Christoph.
</span><br>
<span class="quotelev2">&gt;&gt; I should have looked into the FAQ section on MCA params setting @ :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#available-mca-params">http://www.open-mpi.org/faq/?category=tuning#available-mca-params</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again,
</span><br>
<span class="quotelev2">&gt;&gt; -- Siddhartha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 16 December 2013 02:41, Christoph Niethammer &lt;niethammer_at_[hidden]&lt;mailto:niethammer_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Siddhartha,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send/Recv in Open MPI implements both protocols and chooses based on the message size which one to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can use the mca parameter &quot;btl_sm_eager_limit&quot; to modify the behaviour.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the corresponding info obtained from the ompi_info tool:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data source: default value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Christoph Niethammer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nobelstrasse 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 70569 Stuttgart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: ++49(0)711-685-87203&lt;tel:%2B%2B49%280%29711-685-87203&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: niethammer_at_[hidden]&lt;mailto:niethammer_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Von: &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&lt;mailto:siddharthajana24_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An: &quot;OpenMPI users mailing list&quot; &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gesendet: Samstag, 14. Dezember 2013 13:44:12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Betreff: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In OpenMPI, are MPI_Send, MPI_Recv (and friends) implemented using rendezvous protocol or eager protocol?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If both, is there a way to choose one or the other during runtime or while building the library?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there is a threshold of the message size that dictates the protocol to be used, is there a way I can alter that threshold value?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If different protocols were used for different versions of the library in the past, could someone please direct me to the exact version numbers of the implementations that used one or the other protocol?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siddhartha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23295.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23293.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for	our	magny	cours	based 32	core node"</a>
<li><strong>In reply to:</strong> <a href="23290.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23295.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23295.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
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
