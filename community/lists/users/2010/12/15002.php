<?
$subject_val = "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  5 23:17:50 2010" -->
<!-- isoreceived="20101206041750" -->
<!-- sent="Mon, 6 Dec 2010 12:17:43 +0800" -->
<!-- isosent="20101206041743" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="AANLkTim6zni60YKZLnuoZsZKzk3LgA6DSPpH5GmzenOP_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="4CFC573E.8000702_at_aol.com" -->
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
<strong>From:</strong> &#195;&#207;&#207;&#220;&#190;&#252; (<em>xjun.meng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-05 23:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15003.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15001.php">Tim Prince: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>In reply to:</strong> <a href="15001.php">Tim Prince: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15011.php">Mike Dubman: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15011.php">Mike Dubman: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>In my computers(X86-64), the sizeof(int)=4, but the
<br>
sizeof(long)=sizeof(double)=sizeof(size_t)=8. when I checked my mpi.h file,
<br>
I found that the definition about the sizeof(int) is correct. meanwhile, I
<br>
think the mpi.h file was generated according to my compute environment when
<br>
I compiled the Openmpi. So, my codes still don't work. :(
<br>
<p>Further, I found when I called the collective routines(such as,
<br>
MPI_Allgatherv(...)) which are implemented by the Point 2 Point don't work
<br>
either when the data &gt; 2GB.
<br>
<p>Thanks
<br>
Xianjun
<br>
<p>2010/12/6 Tim Prince &lt;n8tm_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On 12/5/2010 7:13 PM, &#195;&#207;&#207;&#220;&#190;&#252; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I met a question recently when I tested the MPI_send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; functions. When I run the following codes, the processes hanged and I
</span><br>
<span class="quotelev2">&gt;&gt; found there was not data transmission in my network at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW: I finished this test on two X86-64 computers with 16GB memory and
</span><br>
<span class="quotelev2">&gt;&gt; installed Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5
</span><br>
<span class="quotelev2">&gt;&gt; 6
</span><br>
<span class="quotelev2">&gt;&gt; 7 int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; 8 {
</span><br>
<span class="quotelev2">&gt;&gt; 9 int localID;
</span><br>
<span class="quotelev2">&gt;&gt; 10 int numOfPros;
</span><br>
<span class="quotelev2">&gt;&gt; 11 size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev2">&gt;&gt; 12
</span><br>
<span class="quotelev2">&gt;&gt; 13 char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev2">&gt;&gt; 14
</span><br>
<span class="quotelev2">&gt;&gt; 15 MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; 16 MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev2">&gt;&gt; 17 MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev2">&gt;&gt; 18
</span><br>
<span class="quotelev2">&gt;&gt; 19 MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev2">&gt;&gt; 20 MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev2">&gt;&gt; 21 MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev2">&gt;&gt; 22
</span><br>
<span class="quotelev2">&gt;&gt; 23 if (localID == 0)
</span><br>
<span class="quotelev2">&gt;&gt; 24 {
</span><br>
<span class="quotelev2">&gt;&gt; 25 MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; 26 }
</span><br>
<span class="quotelev2">&gt;&gt; 27
</span><br>
<span class="quotelev2">&gt;&gt; 28 if (localID != 0)
</span><br>
<span class="quotelev2">&gt;&gt; 29 {
</span><br>
<span class="quotelev2">&gt;&gt; 30 MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt; 31 MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev2">&gt;&gt; 32 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt; 33 }
</span><br>
<span class="quotelev2">&gt;&gt; 34
</span><br>
<span class="quotelev2">&gt;&gt; 35 MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 36
</span><br>
<span class="quotelev2">&gt;&gt; 37 return 0;
</span><br>
<span class="quotelev2">&gt;&gt; 38 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  You supplied all your constants as 32-bit signed data, so, even if the
</span><br>
<span class="quotelev1">&gt; count for MPI_Send() and MPI_Recv() were a larger data type, you would see
</span><br>
<span class="quotelev1">&gt; this limit. Did you look at your &lt;mpi.h&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15003.php">Gustavo Correa: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15001.php">Tim Prince: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>In reply to:</strong> <a href="15001.php">Tim Prince: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15011.php">Mike Dubman: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15011.php">Mike Dubman: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
