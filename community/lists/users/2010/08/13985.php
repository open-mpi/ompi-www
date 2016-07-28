<?
$subject_val = "Re: [OMPI users] How to program with openmpi under MFC?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 07:21:11 2010" -->
<!-- isoreceived="20100812112111" -->
<!-- sent="Thu, 12 Aug 2010 19:20:57 +0800" -->
<!-- isosent="20100812112057" -->
<!-- name="lyb" -->
<!-- email="linyb79_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to program with openmpi under MFC?" -->
<!-- id="4C63D919.5050600_at_163.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C63D74D.7060702_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to program with openmpi under MFC?<br>
<strong>From:</strong> lyb (<em>linyb79_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 07:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="14035.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Some other information supply. the function breaks at the 3rd ASSERT. 
<br>
Send you the picture. thanks
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  the message is,
</span><br>
<span class="quotelev1">&gt; Unhandle exception at 0x7835b701 (mfc80ud.dll) : 0xC0000005: conflit 
</span><br>
<span class="quotelev1">&gt; while read 0xf78e9e00.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I personally haven't try to program MPI with MFC, but in principle it 
</span><br>
<span class="quotelev2">&gt;&gt; should work. What kind of error did you get, was there any error 
</span><br>
<span class="quotelev2">&gt;&gt; message? Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2010-8-12 9:13 AM, lyb wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a MFC project, and need to add mpi functions in it,  and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; choose openmpi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I  searched all of mail list ,  not. find the answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And I try to call mpi functions under MFC, as follows,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int ompi_test(int *argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Init(argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;Hello, world, I am %d of %d\n&quot;, rank, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void CSchedulerDlg::OnBnClickedButton1()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ompi_test(NULL, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but break at MPI_Init(argc, &amp;argv);.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So what should I do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13985/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13985/moz-screenshot.png" alt="moz-screenshot.png">
<!-- attachment="moz-screenshot.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13986.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="14035.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
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
