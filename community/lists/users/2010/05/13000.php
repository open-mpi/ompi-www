<?
$subject_val = "Re: [OMPI users] 'readv failed: Connection timed out' issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 11:00:33 2010" -->
<!-- isoreceived="20100510150033" -->
<!-- sent="Mon, 10 May 2010 23:00:27 +0800" -->
<!-- isosent="20100510150027" -->
<!-- name="Guanyinzhu" -->
<!-- email="buptzhugy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'readv failed: Connection timed out' issue" -->
<!-- id="SNT129-W44F18EC5BAB5C268C4F871A5F90_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="2F79D224-F80D-44E4-98CA-2AFF9B96B220_at_scinet.utoronto.ca" -->
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
<strong>From:</strong> Guanyinzhu (<em>buptzhugy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 11:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12999.php">Dave Love: "[OMPI users] sunstudio patch needed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13050.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="13050.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did &quot;--mca mpi_preconnect_all 1&quot; work?
<br>
<p>&nbsp;
<br>
<p>I also face this problem &quot;readv failed: connection time out&quot; in the production environment, and our engineer has reproduced this scenario at 20 nodes with gigabye ethernet and limit one ethernet speed to 2MB/s, then a MPI_Isend &amp;&amp; MPI_Recv ring that means each node call MPI_Isend send data to the next node and then call MPI_Recv recv data from the prior with large size for many cycles, then we get the following error log:
<br>
<p>[btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv  failed: Connection timed out (110)
<br>
<p>&nbsp;
<br>
<p>our environment:
<br>
<p>Open MPI version 1.3.1,  using btl tcp component.
<br>
<p>&nbsp;
<br>
<p>I thought it might because the network fd was set nonblocking, and the nonblocking call of connect() might be error and the epoll_wait() was wake up by the error but treat it as success and call mca_btl_tcp_endpoint_recv_handler(), the nonblocking readv() call on a failed connected fd, so it return -1, and set the errorno to 110 which means connection timed out.
<br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; From: ljdursi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Apr 2010 09:24:17 -0400
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 'readv failed: Connection timed out' issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2010-04-20, at 9:18AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jonathan,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you know what the top level function is or communication pattern? Is it some type of collective or a pattern that has a many to one. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, should have mentioned. The best-characterized code that we're seeing this with is an absolutely standard (logically) regular grid hydrodynamics code, only does nearest neighbour communication for exchanging guardcells; the Wait in this case is, I think, just a matter of overlapping communication with computation of the inner zones. There are things like allreduces in there, as well, for setting timesteps, but the communication pattern is overall extremely regular and well-behaved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What might be happening is that since OMPI uses a lazy connections by default if all processes are trying to establish communications to the same process you might run into the below.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You might want to see if setting &quot;--mca mpi_preconnect_all 1&quot; helps any. But beware this will cause your startup to increase. However, this might give us insight as to whether the problem is flooding a single rank with connect requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm certainly willing to try it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jonathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
&#210;&#187;&#213;&#197;&#213;&#213;&#198;&#172;&#181;&#196;&#215;&#212;&#176;&#215;&#161;&#170;&#161;&#170;Windows Live&#213;&#213;&#198;&#172;&#181;&#196;&#191;&#201;&#176;&#174;&#202;&#211;&#198;&#181;&#189;&#233;&#201;&#220;
<br>
<a href="http://windowslivesky.spaces.live.com/blog/cns!5892B6048E2498BD!889.entry">http://windowslivesky.spaces.live.com/blog/cns!5892B6048E2498BD!889.entry</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13001.php">Prentice Bisbal: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12999.php">Dave Love: "[OMPI users] sunstudio patch needed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13050.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="13050.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
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
