<?
$subject_val = "[OMPI users] How to program with openmpi under MFC?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 03:13:23 2010" -->
<!-- isoreceived="20100812071323" -->
<!-- sent="Thu, 12 Aug 2010 15:13:14 +0800" -->
<!-- isosent="20100812071314" -->
<!-- name="lyb" -->
<!-- email="linyb79_at_[hidden]" -->
<!-- subject="[OMPI users] How to program with openmpi under MFC?" -->
<!-- id="4C639F0A.5050300_at_163.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.4014.1281539402.1857.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] How to program with openmpi under MFC?<br>
<strong>From:</strong> lyb (<em>linyb79_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 03:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13979.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a MFC project, and need to add mpi functions in it,  and  choose 
<br>
openmpi.
<br>
but I  searched all of mail list ,  not. find the answer.
<br>
<p>And I try to call mpi functions under MFC, as follows,
<br>
<p>int ompi_test(int *argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, world, I am %d of %d\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
void CSchedulerDlg::OnBnClickedButton1()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_test(NULL, NULL);
<br>
}
<br>
<p>but break at MPI_Init(argc, &amp;argv);.
<br>
<p>So what should I do?
<br>
Can anybody help me?
<br>
<p>Thanks in advance.
<br>
<p>Best Regards.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13979.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Reply:</strong> <a href="13981.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
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
