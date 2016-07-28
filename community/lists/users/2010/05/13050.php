<?
$subject_val = "Re: [OMPI users] 'readv failed: Connection timed out' issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 08:31:19 2010" -->
<!-- isoreceived="20100515123119" -->
<!-- sent="Sat, 15 May 2010 08:31:15 -0400" -->
<!-- isosent="20100515123115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'readv failed: Connection timed out' issue" -->
<!-- id="4089ABC6-B70A-4CCB-AE7B-4E8F98B65E08_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT129-W44F18EC5BAB5C268C4F871A5F90_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'readv failed: Connection timed out' issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 08:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Previous message:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>In reply to:</strong> <a href="13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12727.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2010, at 11:00 AM, Guanyinzhu wrote:
<br>
<p><span class="quotelev1">&gt; Did &quot;--mca mpi_preconnect_all 1&quot; work?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I also face this problem &quot;readv failed: connection time out&quot; in the production environment, and our engineer has reproduced this scenario at 20 nodes with gigabye ethernet and limit one ethernet speed to 2MB/s, then a MPI_Isend &amp;&amp; MPI_Recv ring that means each node call MPI_Isend send data to the next node and then call MPI_Recv recv data from the prior with large size for many cycles, then we get the following error log:
</span><br>
<span class="quotelev1">&gt; [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv  failed: Connection timed out (110)
</span><br>
<p>FWIW, I just had a customer last week have these kinds of issues; in every case, he actually tracked the problem down to hardware issues (e.g., he swapped out ethernet cables and the problems went away).
<br>
<p>Keep in mind that Open MPI is simply reporting what the OS tells us.  Specifically, Linux has decided to close the socket with a &quot;timed out&quot; error when we tried to read from it.  
<br>
<p><span class="quotelev1">&gt; I thought it might because the network fd was set nonblocking, and the nonblocking call of connect() might be error and the epoll_wait() was wake up by the error but treat it as success and call mca_btl_tcp_endpoint_recv_handler(), the nonblocking readv() call on a failed connected fd, so it return -1, and set the errorno to 110 which means connection timed out.
</span><br>
<p>Hmm.  That's an interesting scenario; do you know that that is happening?
<br>
<p>But even if it is -- meaning that we're simply printing out the wrong error message -- the connect() shouldn't fail.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13051.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>Previous message:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>In reply to:</strong> <a href="13000.php">Guanyinzhu: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12727.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
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
