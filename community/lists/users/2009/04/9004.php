<?
$subject_val = "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 10:48:20 2009" -->
<!-- isoreceived="20090421144820" -->
<!-- sent="Tue, 21 Apr 2009 10:48:09 -0400" -->
<!-- isosent="20090421144809" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?" -->
<!-- id="D96AEAD1-8081-45B6-A04F-2E843A661F45_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F2CFEE5244_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 10:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9005.php">Tsung Han Shie: "[OMPI users] Could following situations caused by RDMA mca parameters?"</a>
<li><strong>Previous message:</strong> <a href="9003.php">Luis Vitorio Cargnini: "[OMPI users] Problems with SSH"</a>
<li><strong>In reply to:</strong> <a href="8996.php">Katz, Jacob: "[OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>Reply:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With few exceptions, Open MPI will choose the best BTL. There are two  
<br>
exceptions I know about:
<br>
1. sm - we didn't figure out a clean way to do it, nor we spent too  
<br>
much time trying to
<br>
2. elan - the initialization of the device is a global operation, and  
<br>
we cannot guarantee that all nodes are involved in the accept/connect.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 21, 2009, at 09:28 , Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a dynamically connected client/server-style application, where  
</span><br>
<span class="quotelev1">&gt; the server uses MPI_OPEN_PORT/MPI_COMM_ACCEPT and the client uses  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_CONNECT, what will be the communication method (BTL) chosen  
</span><br>
<span class="quotelev1">&gt; by OMPI? Will the communication thru the resultant inter- 
</span><br>
<span class="quotelev1">&gt; communicator use TCP, or will OMPI choose the best possible method  
</span><br>
<span class="quotelev1">&gt; (e.g. sm if the client and the server are on the same node)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet:  
</span><br>
<span class="quotelev1">&gt; (8)-465-5726
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9005.php">Tsung Han Shie: "[OMPI users] Could following situations caused by RDMA mca parameters?"</a>
<li><strong>Previous message:</strong> <a href="9003.php">Luis Vitorio Cargnini: "[OMPI users] Problems with SSH"</a>
<li><strong>In reply to:</strong> <a href="8996.php">Katz, Jacob: "[OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the connected processes use?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>Reply:</strong> <a href="9010.php">Katz, Jacob: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
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
