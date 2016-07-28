<?
$subject_val = "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 14:37:41 2010" -->
<!-- isoreceived="20101207193741" -->
<!-- sent="Tue, 7 Dec 2010 14:37:30 -0500" -->
<!-- isosent="20101207193730" -->
<!-- name="Bowen Zhou" -->
<!-- email="bwzhou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="BLU0-SMTP113CB81FD037FFCB4CA47D6D22C0_at_phx.gbl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTima02kWJYbXdGCkOuqaNV8k_iyi_iJE72-Pc5t__at_mail.gmail.com" -->
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
<strong>From:</strong> Bowen Zhou (<em>bwzhou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 14:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15033.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15000.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15034.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15034.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/05/2010 10:13 PM,
<br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I met a question recently when I tested the MPI_send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; functions.  When I run the following codes, the  processes hanged and I
</span><br>
<span class="quotelev1">&gt; found there was not data transmission in my network at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: I finished this test on two X86-64 computers with 16GB memory and
</span><br>
<span class="quotelev1">&gt; installed Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;   2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;   3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;   4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;   5
</span><br>
<span class="quotelev1">&gt;   6
</span><br>
<span class="quotelev1">&gt;   7 int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt;   8 {
</span><br>
<span class="quotelev1">&gt;   9       int localID;
</span><br>
<span class="quotelev1">&gt;   10     int numOfPros;
</span><br>
<span class="quotelev1">&gt;   11     size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev1">&gt;   12
</span><br>
<span class="quotelev1">&gt;   13     char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev1">&gt;   14
</span><br>
<span class="quotelev1">&gt;   15     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   16     MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev1">&gt;   17     MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev1">&gt;   18
</span><br>
<span class="quotelev1">&gt;   19     MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev1">&gt;   20     MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev1">&gt;   21     MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev1">&gt;   22
</span><br>
<span class="quotelev1">&gt;   23     if (localID == 0)
</span><br>
<span class="quotelev1">&gt;   24     {
</span><br>
<span class="quotelev1">&gt;   25         MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   26     }
</span><br>
<span class="quotelev1">&gt;   27
</span><br>
<span class="quotelev1">&gt;   28     if (localID != 0)
</span><br>
<span class="quotelev1">&gt;   29     {
</span><br>
<span class="quotelev1">&gt;   30         MPI_Status status;
</span><br>
<span class="quotelev1">&gt;   31         MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev1">&gt;   32                 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;   33     }
</span><br>
<span class="quotelev1">&gt;   34
</span><br>
<span class="quotelev1">&gt;   35     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   36
</span><br>
<span class="quotelev1">&gt;   37     return 0;
</span><br>
<span class="quotelev1">&gt;   38 }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Xianjun
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
Hi,
<br>
<p>It might be a problem with the Linux TCP stack. The similar issue 
<br>
happens with MPICH2 too. Can you try with message size (2G-1) bytes?
<br>
<a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1080">http://trac.mcs.anl.gov/projects/mpich2/ticket/1080</a>
<br>
<p>Best,
<br>
Bowen Zhou
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15033.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15031.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15000.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15034.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Reply:</strong> <a href="15034.php">цооэ╬Э: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
