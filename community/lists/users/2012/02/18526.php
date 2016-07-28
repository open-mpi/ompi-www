<?
$subject_val = "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 19 22:53:36 2012" -->
<!-- isoreceived="20120220035336" -->
<!-- sent="Sun, 19 Feb 2012 20:53:28 -0700" -->
<!-- isosent="20120220035328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program" -->
<!-- id="AC407D03-5266-4E65-9B12-0FF0A6FEF9E4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABhBYV5R+s+qKqBeyaKAa7Q+a0zB8-qzjnbQamo4N9vCDCze1Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-19 22:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18527.php">Truls Edvard Stokke: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18525.php">Truls Edvard Stokke: "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>In reply to:</strong> <a href="18525.php">Truls Edvard Stokke: "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18527.php">Truls Edvard Stokke: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Reply:</strong> <a href="18527.php">Truls Edvard Stokke: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If your program returns an error status (i.e., a non-zero exit status), then mpirun passes that along to you so any script you are using can know that something failed.
<br>
<p><p>On Feb 19, 2012, at 7:41 PM, Truls Edvard Stokke wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In running this minimal program (test.c)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char ** argv) {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   exit(EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compiled and ran with the commands
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc test.c
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The return value of mpirun is 1 (presumably the value of EXIT_FAILURE) instead of the expected 0.
</span><br>
<span class="quotelev1">&gt; Citing the manual page of mpirun, &quot;mpirun returns 0 if all ranks started by mpirun exit after calling MPI_FINALIZE.&quot; which should be the case in the program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If EXIT_FAILURE is changed to EXIT_SUCCESS there is no output and mpirun returns 0 as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My OpenMPI version is 1.5.4, the code and output from ompi_info --all is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it is relevant my OS is Fedora 16 and the packages installed are openmpi.i686 and openmpi-devel.i686, the code is ran at a single node with a single Intel atom processor. I have also ensured that no calls to MPI_Init or MPI_Finalize have been optimized out by the compiler.
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info_output.txt&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18527.php">Truls Edvard Stokke: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Previous message:</strong> <a href="18525.php">Truls Edvard Stokke: "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>In reply to:</strong> <a href="18525.php">Truls Edvard Stokke: "[OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18527.php">Truls Edvard Stokke: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>Reply:</strong> <a href="18527.php">Truls Edvard Stokke: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
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
