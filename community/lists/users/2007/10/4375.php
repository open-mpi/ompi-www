<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 19:07:07 2007" -->
<!-- isoreceived="20071031230707" -->
<!-- sent="Wed, 31 Oct 2007 19:07:01 -0400" -->
<!-- isosent="20071031230701" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Too many open files Error" -->
<!-- id="D1B59946-9D23-445D-9247-C4609D233928_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710311855.47930.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 19:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4373.php">Tim Prins: "Re: [OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4384.php">Bruno Coutinho: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4384.php">Bruno Coutinho: "Re: [OMPI users] Too many open files Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For some version of Open MPI (recent versions) you can use the  
<br>
btl_tcp_disable_family MCA parameter to disable the IPv6 at runtime.  
<br>
Unfortunately, there is no similar option allowing you to disable IPv6  
<br>
for the runtime environment.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 31, 2007, at 6:55 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi Clement,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seem to recall (though this may have changed) that if a system  
</span><br>
<span class="quotelev1">&gt; supports
</span><br>
<span class="quotelev1">&gt; ipv6, we may open both ipv4 and ipv6 sockets. This can be worked  
</span><br>
<span class="quotelev1">&gt; around by
</span><br>
<span class="quotelev1">&gt; configuring Open MPI with --disable-ipv6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other then that, I don't know of anything else to do except raise  
</span><br>
<span class="quotelev1">&gt; the limit
</span><br>
<span class="quotelev1">&gt; for the number of open files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know it doesn't help you now, but we are actively working on this  
</span><br>
<span class="quotelev1">&gt; problem
</span><br>
<span class="quotelev1">&gt; for Open MPI 1.3. This version will introduce a tree routing scheme  
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev1">&gt; will dramatically reduce the number of open sockets that the runtime  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 30 October 2007 07:15:42 pm Clement Kam Man Chu wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I got a &quot;Too many open files&quot; error while running over 1024  
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; on 512 cpus.  I found the same error on
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/11/2216.php">http://www.open-mpi.org/community/lists/users/2006/11/2216.php</a>, but I
</span><br>
<span class="quotelev2">&gt;&gt; would like to know whether it is another solution instead of changing
</span><br>
<span class="quotelev2">&gt;&gt; limit descriptors.  The limit descriptors is changed by root access  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; needs to restart the system that I don't want to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Clement
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4375/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4376.php">Jeff Squyres: "Re: [OMPI users] problems running parallel program"</a>
<li><strong>Previous message:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4373.php">Tim Prins: "Re: [OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4384.php">Bruno Coutinho: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4384.php">Bruno Coutinho: "Re: [OMPI users] Too many open files Error"</a>
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
