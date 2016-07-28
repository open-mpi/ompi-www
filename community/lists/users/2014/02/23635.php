<?
$subject_val = "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 16:50:46 2014" -->
<!-- isoreceived="20140224215046" -->
<!-- sent="Mon, 24 Feb 2014 21:50:45 +0000" -->
<!-- isosent="20140224215045" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV" -->
<!-- id="4641A09B-7217-45A7-8033-AF218ED80116_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="afc59f6bc35149fdb9ab11b0f4a7be2d_at_AMSPR07MB376.eurprd07.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-24 16:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="23623.php">Samuel Richard: "[OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>I don't see an immediate reason why this would happen, but you might want to double/triple check the count parameters that you are sending.  Are you 100% sure that they are correct?
<br>
<p>It might also be worth checking that you're sending in the right buffer pointer -- perhaps the compiler is doing something wrong with your array slicing...?  OMPI should only be reporting MPI_ERR_BUFFER if the buffer sent in is NULL and the count is &gt; 0.
<br>
<p><p>On Feb 19, 2014, at 11:42 AM, Samuel Richard &lt;samuel.richard_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a code written in Fortran, I have a problem with this part :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (num_node == 0) then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; down_node = num_node-1
</span><br>
<span class="quotelev1">&gt; ! send to down recive from down
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SENDRECV(tab1(3 :4,:,:), size( tab1(3 :4, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node, 101, tab1(1:2, : ,:), size(tab1(1:2, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node,  11, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SENDRECV(tab2(3 :4, : ,:), size( tab2(3 : 4, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node, 201, tab2(1:2, : ,:), size(tab2(1:2, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node,  21, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (num_node+1 == max_node) then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; up_node = num_node+1
</span><br>
<span class="quotelev1">&gt; ! send to up recived from up
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SENDRECV(tab1(n - 3:n - 2, : ,:), size( tab1(n - 3:n - 2, : ,:) ), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node,  11, tab1(n - 1:n, : ,:), size(tab1(n - 1:n, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node, 101, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SENDRECV(tab2(n - 3:n - 2, : ,:), size( tab2(n - 3:n - 2, : ,:) ), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node,  21, tab2(n - 1:n, : ,:), size(tab2(n - 1:n, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node, 201, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I obtain the following error :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [comp104:17175] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev1">&gt; [comp104:17175] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [comp104:17175] *** MPI_ERR_BUFFER: invalid buffer pointer
</span><br>
<span class="quotelev1">&gt; [comp104:17175] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and if I change MPI_SENDRECEV by MPI_SEND + MPI_RECEV only for tab1, it works correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (num_node == 0) then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; down_node = num_node-1
</span><br>
<span class="quotelev1">&gt; ! send to down recive from down
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; CALL MPI_SEND(tab1(3 :4,:,:), size( tab1(3 :4, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node, 101 MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_RECV(tab1(1:2, : ,:), size(tab1(1:2, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node,  11, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_SENDRECV(tab2(3 :4, : ,:), size( tab2(3 : 4, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node, 201, tab2(1:2, : ,:), size(tab2(1:2, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, down_node,  21, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (num_node+1 == max_node) then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; up_node = num_node+1
</span><br>
<span class="quotelev1">&gt; ! send to up recived from up
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_RECV(tab1(n - 3:n - 2, : ,:), size( tab1(n - 3:n - 2, : ,:) ), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node,  11, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SEND(tab1(n - 1:n, : ,:), size(tab1(n - 1:n, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node, 101, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  CALL MPI_SENDRECV(tab2(n - 3:n - 2, : ,:), size( tab2(n - 3:n - 2, : ,:) ), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node,  21, tab2(n - 1:n, : ,:), size(tab2(n - 1:n, : ,:)), &amp;
</span><br>
<span class="quotelev1">&gt;     &amp; MPI_REAL8, up_node, 201, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand why MPI_SENDRECEV works why tab2 but not with tab1, they have the same size.
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
<li><strong>Next message:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="23623.php">Samuel Richard: "[OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<!-- nextthread="start" -->
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
