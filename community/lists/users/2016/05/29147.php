<?
$subject_val = "Re: [OMPI users] Incorrect function call in simple C program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 18:42:27 2016" -->
<!-- isoreceived="20160509224227" -->
<!-- sent="Tue, 10 May 2016 07:42:25 +0900" -->
<!-- isosent="20160509224225" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect function call in simple C program" -->
<!-- id="CAAkFZ5vukcg90uKX8EzSKpHcP6Vqk+kN+kovwnO9scaOYygDAA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHE40rrk5kwxn3DL5bO-1NKT-cfQxFM8Sy2EW5aNtKLC_sn8bA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Incorrect function call in simple C program<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 18:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29148.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29146.php">Devon Hollowood: "[OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29146.php">Devon Hollowood: "[OMPI users] Incorrect function call in simple C program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Reply:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Devon,
<br>
<p>send() is a libc function that is used internally by Open MPI, and it uses
<br>
your user function instead of the libc ne.
<br>
simply rename your function mysend() or something else that is not used by
<br>
libc, and your issue will likely be fixed
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, May 10, 2016, Devon Hollowood &lt;devonhollowood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having trouble understanding why I am getting an error when running
</span><br>
<span class="quotelev1">&gt; the program produced by the attached C file. In this file, there are three
</span><br>
<span class="quotelev1">&gt; short functions: send(), bounce() and main(). send() and bounce() both use
</span><br>
<span class="quotelev1">&gt; MPI_Send() and MPI_Recv(), but critically, neither one is called from
</span><br>
<span class="quotelev1">&gt; main(), so as I understand it, neither function should ever be run. main()
</span><br>
<span class="quotelev1">&gt; is just:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;     int rank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Despite the fact that the program should never enter send() or bounce(),
</span><br>
<span class="quotelev1">&gt; when I compile with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc mpi-issue.c -o mpi-issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and run with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 --verbose ./mpi-issue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-visitor-enr-117-111.slac.stanford.edu:99119] Local abort before
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT completed successfully; not able to aggregate error messages, and
</span><br>
<span class="quotelev2">&gt;&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt;&gt; thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[2829,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How is it possible to be getting an error in MPI_Send(), if MPI_Send()
</span><br>
<span class="quotelev1">&gt; never gets run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running open-mpi 1.10.2, installed via the Homebrew open-mpi package,
</span><br>
<span class="quotelev1">&gt; and this is running on my Macbook, which is running OSX Yosemite. I have
</span><br>
<span class="quotelev1">&gt; attached the results of ompi_info --all as ompi_info.txt.bz2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated! Sorry if this is a newb question and I am
</span><br>
<span class="quotelev1">&gt; missing something obvious--I tried my best to search for this issue but I
</span><br>
<span class="quotelev1">&gt; couldn't find anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29148.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29146.php">Devon Hollowood: "[OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29146.php">Devon Hollowood: "[OMPI users] Incorrect function call in simple C program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Reply:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
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
