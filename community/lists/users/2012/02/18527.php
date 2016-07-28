<?
$subject_val = "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 01:08:32 2012" -->
<!-- isoreceived="20120220060832" -->
<!-- sent="Mon, 20 Feb 2012 07:08:27 +0100" -->
<!-- isosent="20120220060827" -->
<!-- name="Truls Edvard Stokke" -->
<!-- email="trulses_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program" -->
<!-- id="CABhBYV7nM68F_rKMWf+SOGOdCm41WEOBjdJCTEbYvqxCOkY1RQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC407D03-5266-4E65-9B12-0FF0A6FEF9E4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program<br>
<strong>From:</strong> Truls Edvard Stokke (<em>trulses_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 01:08:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>In reply to:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Reply:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, thank you for answering.
<br>
<p>So for clarity,
<br>
- the return code is expected and there is a bug in the man page,
<br>
- the warning is supposed to be printed in the event that a program exits
<br>
with a non-zero exit status even if it calls MPI_Finalize before it does so.
<br>
<p>Please correct me if either of those aren't really the case.
<br>
<p>When running the code with an older version of OpenMPI (1.4.3) there is no
<br>
warning.
<br>
If it is relevant there is no warning when running it with MPICH2.
<br>
<p>Is the warning an intended change from 1.4.x to 1.5.x or is it likely that
<br>
my installation of OpenMPI is configured incorrectly?
<br>
<p>On Mon, Feb 20, 2012 at 4:53 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If your program returns an error status (i.e., a non-zero exit status),
</span><br>
<span class="quotelev1">&gt; then mpirun passes that along to you so any script you are using can know
</span><br>
<span class="quotelev1">&gt; that something failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2012, at 7:41 PM, Truls Edvard Stokke wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In running this minimal program (test.c)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char ** argv) {
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   exit(EXIT_FAILURE);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compiled and ran with the commands
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpicc test.c
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 1 a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The return value of mpirun is 1 (presumably the value of EXIT_FAILURE)
</span><br>
<span class="quotelev1">&gt; instead of the expected 0.
</span><br>
<span class="quotelev2">&gt; &gt; Citing the manual page of mpirun, &quot;mpirun returns 0 if all ranks started
</span><br>
<span class="quotelev1">&gt; by mpirun exit after calling MPI_FINALIZE.&quot; which should be the case in the
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If EXIT_FAILURE is changed to EXIT_SUCCESS there is no output and mpirun
</span><br>
<span class="quotelev1">&gt; returns 0 as expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My OpenMPI version is 1.5.4, the code and output from ompi_info --all is
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it is relevant my OS is Fedora 16 and the packages installed are
</span><br>
<span class="quotelev1">&gt; openmpi.i686 and openmpi-devel.i686, the code is ran at a single node with
</span><br>
<span class="quotelev1">&gt; a single Intel atom processor. I have also ensured that no calls to
</span><br>
<span class="quotelev1">&gt; MPI_Init or MPI_Finalize have been optimized out by the compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info_output.txt&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>In reply to:</strong> <a href="18526.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Reply:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
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
