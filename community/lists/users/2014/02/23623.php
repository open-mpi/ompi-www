<?
$subject_val = "[OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 19 11:42:16 2014" -->
<!-- isoreceived="20140219164216" -->
<!-- sent="Wed, 19 Feb 2014 16:42:13 +0000" -->
<!-- isosent="20140219164213" -->
<!-- name="Samuel Richard" -->
<!-- email="samuel.richard_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV" -->
<!-- id="afc59f6bc35149fdb9ab11b0f4a7be2d_at_AMSPR07MB376.eurprd07.prod.outlook.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV<br>
<strong>From:</strong> Samuel Richard (<em>samuel.richard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-19 11:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23624.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>Reply:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p><p>In a code written in Fortran, I have a problem with this part :
<br>
<p><p><p>if (num_node == 0) then
<br>
<p><p>...
<br>
<p><p>else
<br>
<p>down_node = num_node-1
<br>
! send to down recive from down
<br>
<p>&nbsp;CALL MPI_SENDRECV(tab1(3 :4,:,:), size( tab1(3 :4, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node, 101, tab1(1:2, : ,:), size(tab1(1:2, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node,  11, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p><p>&nbsp;CALL MPI_SENDRECV(tab2(3 :4, : ,:), size( tab2(3 : 4, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node, 201, tab2(1:2, : ,:), size(tab2(1:2, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node,  21, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p>endif
<br>
<p>if (num_node+1 == max_node) then
<br>
<p><p>...
<br>
<p><p>else
<br>
<p>up_node = num_node+1
<br>
<p>! send to up recived from up
<br>
<p>&nbsp;CALL MPI_SENDRECV(tab1(n - 3:n - 2, : ,:), size( tab1(n - 3:n - 2, : ,:) ), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node,  11, tab1(n - 1:n, : ,:), size(tab1(n - 1:n, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node, 101, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p>&nbsp;CALL MPI_SENDRECV(tab2(n - 3:n - 2, : ,:), size( tab2(n - 3:n - 2, : ,:) ), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node,  21, tab2(n - 1:n, : ,:), size(tab2(n - 1:n, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node, 201, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p><p>endif
<br>
<p><p><p>I obtain the following error :
<br>
<p><p><p>[comp104:17175] *** An error occurred in MPI_Sendrecv
<br>
<p>[comp104:17175] *** on communicator MPI_COMM_WORLD
<br>
<p>[comp104:17175] *** MPI_ERR_BUFFER: invalid buffer pointer
<br>
<p>[comp104:17175] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p><p><p>and if I change MPI_SENDRECEV by MPI_SEND + MPI_RECEV only for tab1, it works correctly.
<br>
<p><p><p>if (num_node == 0) then
<br>
<p><p>...
<br>
<p><p>else
<br>
<p>down_node = num_node-1
<br>
! send to down recive from down
<br>
<p><p>CALL MPI_SEND(tab1(3 :4,:,:), size( tab1(3 :4, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node, 101 MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p>CALL MPI_RECV(tab1(1:2, : ,:), size(tab1(1:2, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node,  11, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p><p>CALL MPI_SENDRECV(tab2(3 :4, : ,:), size( tab2(3 : 4, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node, 201, tab2(1:2, : ,:), size(tab2(1:2, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, down_node,  21, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p>endif
<br>
<p>if (num_node+1 == max_node) then
<br>
<p><p>...
<br>
<p><p>else
<br>
<p>up_node = num_node+1
<br>
<p>! send to up recived from up
<br>
<p>&nbsp;CALL MPI_RECV(tab1(n - 3:n - 2, : ,:), size( tab1(n - 3:n - 2, : ,:) ), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node,  11, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p><p>&nbsp;CALL MPI_SEND(tab1(n - 1:n, : ,:), size(tab1(n - 1:n, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node, 101, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p><p>&nbsp;CALL MPI_SENDRECV(tab2(n - 3:n - 2, : ,:), size( tab2(n - 3:n - 2, : ,:) ), &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node,  21, tab2(n - 1:n, : ,:), size(tab2(n - 1:n, : ,:)), &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_REAL8, up_node, 201, MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
<p><p>endif
<br>
<p><p>I don't understand why MPI_SENDRECEV works why tab2 but not with tab1, they have the same size.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23624.php">Eric Chamberland: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23622.php">tmishima_at_[hidden]: "Re: [OMPI users] map-by node with openmpi-1.7.5a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>Reply:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
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
