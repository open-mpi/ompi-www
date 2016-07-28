<?
$subject_val = "[OMPI users] Incorrect function call in simple C program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 18:18:20 2016" -->
<!-- isoreceived="20160509221820" -->
<!-- sent="Mon, 9 May 2016 15:17:39 -0700" -->
<!-- isosent="20160509221739" -->
<!-- name="Devon Hollowood" -->
<!-- email="devonhollowood_at_[hidden]" -->
<!-- subject="[OMPI users] Incorrect function call in simple C program" -->
<!-- id="CAHE40rrk5kwxn3DL5bO-1NKT-cfQxFM8Sy2EW5aNtKLC_sn8bA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Incorrect function call in simple C program<br>
<strong>From:</strong> Devon Hollowood (<em>devonhollowood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 18:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Reply:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am having trouble understanding why I am getting an error when running
<br>
the program produced by the attached C file. In this file, there are three
<br>
short functions: send(), bounce() and main(). send() and bounce() both use
<br>
MPI_Send() and MPI_Recv(), but critically, neither one is called from
<br>
main(), so as I understand it, neither function should ever be run. main()
<br>
is just:
<br>
<p>int main(int argc, char *argv[]) {
<br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Despite the fact that the program should never enter send() or bounce(),
<br>
when I compile with
<br>
<p>mpicc mpi-issue.c -o mpi-issue
<br>
<span class="quotelev1">&gt;
</span><br>
<p>and run with
<br>
<p>mpirun -n 2 --verbose ./mpi-issue
<br>
<span class="quotelev1">&gt;
</span><br>
<p>I get the following:
<br>
<p>*** An error occurred in MPI_Send
<br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [dhcp-visitor-enr-117-111.slac.stanford.edu:99119] Local abort before
</span><br>
<span class="quotelev1">&gt; MPI_INIT completed successfully; not able to aggregate error messages, and
</span><br>
<span class="quotelev1">&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[2829,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>How is it possible to be getting an error in MPI_Send(), if MPI_Send()
<br>
never gets run?
<br>
<p>I am running open-mpi 1.10.2, installed via the Homebrew open-mpi package,
<br>
and this is running on my Macbook, which is running OSX Yosemite. I have
<br>
attached the results of ompi_info --all as ompi_info.txt.bz2
<br>
<p>Any help would be appreciated! Sorry if this is a newb question and I am
<br>
missing something obvious--I tried my best to search for this issue but I
<br>
couldn't find anything.
<br>
<p>-Devon
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29146/mpi-issue.c">mpi-issue.c</a>
</ul>
<!-- attachment="mpi-issue.c" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29146/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Reply:</strong> <a href="29147.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
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
