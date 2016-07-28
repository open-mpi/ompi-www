<?
$subject_val = "Re: [OMPI users] How to program with openmpi under MFC?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 04:03:42 2010" -->
<!-- isoreceived="20100812080342" -->
<!-- sent="Thu, 12 Aug 2010 10:05:14 +0200" -->
<!-- isosent="20100812080514" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to program with openmpi under MFC?" -->
<!-- id="4C63AB3A.9040609_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C639F0A.5050300_at_163.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 04:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13980.php">lyb: "[OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13980.php">lyb: "[OMPI users] How to program with openmpi under MFC?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi,
<br>
<p>I personally haven't try to program MPI with MFC, but in principle it 
<br>
should work. What kind of error did you get, was there any error 
<br>
message? Thanks.
<br>
<p>Shiqing
<br>
<p><p><p>On 2010-8-12 9:13 AM, lyb wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a MFC project, and need to add mpi functions in it,  and  
</span><br>
<span class="quotelev1">&gt; choose openmpi.
</span><br>
<span class="quotelev1">&gt; but I  searched all of mail list ,  not. find the answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I try to call mpi functions under MFC, as follows,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int ompi_test(int *argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello, world, I am %d of %d\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; void CSchedulerDlg::OnBnClickedButton1()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     ompi_test(NULL, NULL);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but break at MPI_Init(argc, &amp;argv);.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what should I do?
</span><br>
<span class="quotelev1">&gt; Can anybody help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards.
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13982.php">Saygin Arkan: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="13980.php">lyb: "[OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13980.php">lyb: "[OMPI users] How to program with openmpi under MFC?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="13984.php">lyb: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
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
