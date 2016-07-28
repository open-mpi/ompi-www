<?
$subject_val = "[OMPI users] MPI_Recv hang because readv failed at mca_btl_tcp_frag_recv()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 06:43:07 2010" -->
<!-- isoreceived="20100505104307" -->
<!-- sent="Wed, 5 May 2010 18:43:02 +0800" -->
<!-- isosent="20100505104302" -->
<!-- name="Guanyinzhu" -->
<!-- email="buptzhugy_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Recv hang because readv failed at mca_btl_tcp_frag_recv()" -->
<!-- id="SNT129-W57B31F92915814974B6AE7A5F40_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Recv hang because readv failed at mca_btl_tcp_frag_recv()<br>
<strong>From:</strong> Guanyinzhu (<em>buptzhugy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 06:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12899.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi! 
<br>
&nbsp;&nbsp;I'm using OpenMPI 1.3 on 30 nodes connected with Gigabit Ethernet on Redhat Linux x86_64. 
<br>
&nbsp;
<br>
Our MPI job sometimes hang and show follow error logs:
<br>
<p>&nbsp;
<br>
<p>&nbsp;[btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv  failed: Connection timed out (110)
<br>
<p>&nbsp;
<br>
<p>I run a test like this: write a hello world program, send &quot;helloworld&quot; from rank 0 to rank 1,  and modified the recv() return value at btl_tcp_frag.c:mca_btl_tcp_frag_recv() , force the readv return value cnt equals to -1, and rebuild openmpi and change the dynamic libs, then run the helloworld, the MPI job hang at MPI_Recv().
<br>
&nbsp;
<br>
I have the follow questions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does OpenMPI support check the btl tcp network error, such as readv or writev failed ? I found mca_btl_tcp_endpoint_recv_handler() at btl layer couldn't return the error stat to PML, how could I made it?
<br>
<p>&nbsp;
<br>
<p>how could MPI_Send, MPI_Isend, MPI_Recv, MPI_Irecv detect those error and avoid hang ?
<br>
&nbsp;
<br>
&nbsp;
<br>
thanks a lot!
<br>
&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
&#210;&#187;&#213;&#197;&#213;&#213;&#198;&#172;&#181;&#196;&#215;&#212;&#176;&#215;&#161;&#170;&#161;&#170;Windows Live&#213;&#213;&#198;&#172;&#181;&#196;&#191;&#201;&#176;&#174;&#202;&#211;&#198;&#181;&#189;&#233;&#201;&#220;
<br>
<a href="http://windowslivesky.spaces.live.com/blog/cns!5892B6048E2498BD!889.entry">http://windowslivesky.spaces.live.com/blog/cns!5892B6048E2498BD!889.entry</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12899.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
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
