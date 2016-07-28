<?
$subject_val = "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 12:39:10 2010" -->
<!-- isoreceived="20101206173910" -->
<!-- sent="Mon, 6 Dec 2010 19:39:05 +0200" -->
<!-- isosent="20101206173905" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="AANLkTin5zeE0Hx-XJkLtS4232JFHrMYMJEey=gzxDAYp_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTim6zni60YKZLnuoZsZKzk3LgA6DSPpH5GmzenOP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 12:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15012.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15002.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15012.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15012.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
What interconnect and command line do you use? For InfiniBand openib
<br>
component there is a known issue with large transfers (2GB)
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2623">https://svn.open-mpi.org/trac/ompi/ticket/2623</a>
<br>
<p>try disabling memory pinning:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
<br>
<p><p>regards
<br>
M
<br>
<p><p>2010/12/6 &#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my computers(X86-64), the sizeof(int)=4, but the
</span><br>
<span class="quotelev1">&gt; sizeof(long)=sizeof(double)=sizeof(size_t)=8. when I checked my mpi.h file,
</span><br>
<span class="quotelev1">&gt; I found that the definition about the sizeof(int) is correct. meanwhile, I
</span><br>
<span class="quotelev1">&gt; think the mpi.h file was generated according to my compute environment when
</span><br>
<span class="quotelev1">&gt; I compiled the Openmpi. So, my codes still don't work. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Further, I found when I called the collective routines(such as,
</span><br>
<span class="quotelev1">&gt; MPI_Allgatherv(...)) which are implemented by the Point 2 Point don't work
</span><br>
<span class="quotelev1">&gt; either when the data &gt; 2GB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Xianjun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/12/6 Tim Prince &lt;n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/5/2010 7:13 PM, &#195;&#207;&#207;&#220;&#190;&#252; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I met a question recently when I tested the MPI_send and MPI_Recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions. When I run the following codes, the processes hanged and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found there was not data transmission in my network at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW: I finished this test on two X86-64 computers with 16GB memory and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7 int main(int argc, char** argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9 int localID;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10 int numOfPros;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11 size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 13 char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 17 MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 19 MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 20 MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 21 MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 23 if (localID == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24 {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25 MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 26 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 28 if (localID != 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 29 {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30 MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31 MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 33 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 35 MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 37 return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 38 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  You supplied all your constants as 32-bit signed data, so, even if the
</span><br>
<span class="quotelev2">&gt;&gt; count for MPI_Send() and MPI_Recv() were a larger data type, you would see
</span><br>
<span class="quotelev2">&gt;&gt; this limit. Did you look at your &lt;mpi.h&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15012.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15002.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15012.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15012.php">Gus Correa: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
