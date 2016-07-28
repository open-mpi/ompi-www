<?
$subject_val = "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 22:30:01 2010" -->
<!-- isoreceived="20101208033001" -->
<!-- sent="Wed, 8 Dec 2010 11:29:55 +0800" -->
<!-- isosent="20101208032955" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="AANLkTikVqzBHASu77Tc1L_s+SiQVKqru1wpFc1VUrx+-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU0-SMTP113CB81FD037FFCB4CA47D6D22C0_at_phx.gbl" -->
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
<strong>Date:</strong> 2010-12-07 22:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15035.php">Nguyen Toan: "[OMPI users]  mpirun error in OpenMPI 1.5"</a>
<li><strong>Previous message:</strong> <a href="15033.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15032.php">Bowen Zhou: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bowen,
<br>
<p>Thanks very much. I had checked my writev system call, I thought it was him
<br>
that caused all these bad things :)
<br>
<p><p>Best Regards
<br>
Xianjun Meng
<br>
<p>2010/12/8 Bowen Zhou &lt;bwzhou_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On 12/05/2010 10:13 PM,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I met a question recently when I tested the MPI_send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; functions.  When I run the following codes, the  processes hanged and I
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
<span class="quotelev2">&gt;&gt;  1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  5
</span><br>
<span class="quotelev2">&gt;&gt;  6
</span><br>
<span class="quotelev2">&gt;&gt;  7 int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt;  8 {
</span><br>
<span class="quotelev2">&gt;&gt;  9       int localID;
</span><br>
<span class="quotelev2">&gt;&gt;  10     int numOfPros;
</span><br>
<span class="quotelev2">&gt;&gt;  11     size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev2">&gt;&gt;  12
</span><br>
<span class="quotelev2">&gt;&gt;  13     char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev2">&gt;&gt;  14
</span><br>
<span class="quotelev2">&gt;&gt;  15     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  16     MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev2">&gt;&gt;  17     MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev2">&gt;&gt;  18
</span><br>
<span class="quotelev2">&gt;&gt;  19     MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev2">&gt;&gt;  20     MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev2">&gt;&gt;  21     MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev2">&gt;&gt;  22
</span><br>
<span class="quotelev2">&gt;&gt;  23     if (localID == 0)
</span><br>
<span class="quotelev2">&gt;&gt;  24     {
</span><br>
<span class="quotelev2">&gt;&gt;  25         MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  26     }
</span><br>
<span class="quotelev2">&gt;&gt;  27
</span><br>
<span class="quotelev2">&gt;&gt;  28     if (localID != 0)
</span><br>
<span class="quotelev2">&gt;&gt;  29     {
</span><br>
<span class="quotelev2">&gt;&gt;  30         MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;  31         MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev2">&gt;&gt;  32                 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;  33     }
</span><br>
<span class="quotelev2">&gt;&gt;  34
</span><br>
<span class="quotelev2">&gt;&gt;  35     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  36
</span><br>
<span class="quotelev2">&gt;&gt;  37     return 0;
</span><br>
<span class="quotelev2">&gt;&gt;  38 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Xianjun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It might be a problem with the Linux TCP stack. The similar issue happens
</span><br>
<span class="quotelev1">&gt; with MPICH2 too. Can you try with message size (2G-1) bytes?
</span><br>
<span class="quotelev1">&gt; <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1080">http://trac.mcs.anl.gov/projects/mpich2/ticket/1080</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Bowen Zhou
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15035.php">Nguyen Toan: "[OMPI users]  mpirun error in OpenMPI 1.5"</a>
<li><strong>Previous message:</strong> <a href="15033.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15032.php">Bowen Zhou: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
