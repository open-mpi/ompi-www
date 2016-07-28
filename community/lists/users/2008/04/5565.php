<?
$subject_val = "Re: [OMPI users] setting the btl_tcp_eager_limit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 11:19:46 2008" -->
<!-- isoreceived="20080429151946" -->
<!-- sent="Tue, 29 Apr 2008 11:19:31 -0400" -->
<!-- isosent="20080429151931" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setting the btl_tcp_eager_limit" -->
<!-- id="9A7FC513-771A-4CFE-911A-B08EFD1DF839_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48160760.4040205_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] setting the btl_tcp_eager_limit<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 11:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5566.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5564.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5554.php">jean-christophe.mignot_at_[hidden]: "[OMPI users] setting the btl_tcp_eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5599.php">jean-christophe.mignot_at_[hidden]: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5599.php">jean-christophe.mignot_at_[hidden]: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The btl_tcp_sndbuf and btl_tcp_rcvbuf are limited by the kernel  
<br>
(usually 128K), so there is no reason to set them to something huge,  
<br>
if the kernel is unable to support these values. The eager didn't get  
<br>
modified between 1.1 and 1.2, so it should work as expected.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 28, 2008, at 1:20 PM, Jean-Christophe.Mignot_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;   Hi all,
</span><br>
<span class="quotelev1">&gt; We're using a pingpong in order to measure the bandwidth and latency
</span><br>
<span class="quotelev1">&gt; available with open MPI.
</span><br>
<span class="quotelev1">&gt; In our first experiments done with the 1.1.4 version, we were using  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; btl_tcp_eager_limit parameter to modify the eager limit. We've  
</span><br>
<span class="quotelev1">&gt; upgraded
</span><br>
<span class="quotelev1">&gt; to the 1.2.6 version and the limit parameter we fix doesn't seem to be
</span><br>
<span class="quotelev1">&gt; taken in account.  The value we want to use is 67108864. The command
</span><br>
<span class="quotelev1">&gt; line is:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -machinefile node_file -mca btl_tcp_sndbuf 4194304 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_rcvbuf 4194304 -mca btl_tcp_eager_limit 67108864 pingpong.
</span><br>
<span class="quotelev1">&gt; Is this parameter still useful (ompi_info shows that this parameter is
</span><br>
<span class="quotelev1">&gt; still available) ?
</span><br>
<span class="quotelev1">&gt; Does anybody have any idea ?
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; JC Mignot and Ludovic Hablot
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5565/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5566.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5564.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5554.php">jean-christophe.mignot_at_[hidden]: "[OMPI users] setting the btl_tcp_eager_limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5599.php">jean-christophe.mignot_at_[hidden]: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5599.php">jean-christophe.mignot_at_[hidden]: "Re: [OMPI users] setting the btl_tcp_eager_limit"</a>
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
