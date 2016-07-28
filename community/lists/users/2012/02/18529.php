<?
$subject_val = "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 10:38:50 2012" -->
<!-- isoreceived="20120220153850" -->
<!-- sent="Mon, 20 Feb 2012 16:38:38 +0100" -->
<!-- isosent="20120220153838" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program" -->
<!-- id="816FE762-BA2E-4729-B27C-B8769E8104AA_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51ABFCC4-A057-431D-BC10-67554B1F3230_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 10:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18530.php">Jeffrey Squyres: "Re: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Previous message:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>In reply to:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.02.2012 um 15:27 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; The return code is expected and the man page is incomplete. This was an intended change in behavior to more accurately report the outcome of a job.
</span><br>
<p>With the recent discussion about a singleton startup: then there won't be any error message as a singleton startup. This is not consistent, but I see the intention.
<br>
<p>Maybe it could be checked against MPI_ERR_LASTCODE: if it's lower or equal: output MPI error message as observed, otherwise treat it as an application error unrelated to MPI, forward it without error message.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On Feb 19, 2012, at 11:08 PM, Truls Edvard Stokke wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, thank you for answering.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So for clarity,
</span><br>
<span class="quotelev2">&gt;&gt; - the return code is expected and there is a bug in the man page,
</span><br>
<span class="quotelev2">&gt;&gt; - the warning is supposed to be printed in the event that a program exits with a non-zero exit status even if it calls MPI_Finalize before it does so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please correct me if either of those aren't really the case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When running the code with an older version of OpenMPI (1.4.3) there is no warning.
</span><br>
<span class="quotelev2">&gt;&gt; If it is relevant there is no warning when running it with MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the warning an intended change from 1.4.x to 1.5.x or is it likely that my installation of OpenMPI is configured incorrectly?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 20, 2012 at 4:53 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If your program returns an error status (i.e., a non-zero exit status), then mpirun passes that along to you so any script you are using can know that something failed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 19, 2012, at 7:41 PM, Truls Edvard Stokke wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In running this minimal program (test.c)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main (int argc, char ** argv) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   exit(EXIT_FAILURE);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiled and ran with the commands
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpicc test.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun -n 1 a.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I get the output
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The return value of mpirun is 1 (presumably the value of EXIT_FAILURE) instead of the expected 0.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Citing the manual page of mpirun, &quot;mpirun returns 0 if all ranks started by mpirun exit after calling MPI_FINALIZE.&quot; which should be the case in the program.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If EXIT_FAILURE is changed to EXIT_SUCCESS there is no output and mpirun returns 0 as expected.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; My OpenMPI version is 1.5.4, the code and output from ompi_info --all is attached.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If it is relevant my OS is Fedora 16 and the packages installed are openmpi.i686 and openmpi-devel.i686, the code is ran at a single node with a single Intel atom processor. I have also ensured that no calls to MPI_Init or MPI_Finalize have been optimized out by the compiler.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;ompi_info_output.txt&gt;&lt;test.c&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18530.php">Jeffrey Squyres: "Re: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Previous message:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
<li><strong>In reply to:</strong> <a href="18528.php">Ralph Castain: "Re: [OMPI users] Unexpected warning/return from mpirun with minimal MPI program"</a>
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
