<?
$subject_val = "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 11:41:22 2010" -->
<!-- isoreceived="20100615154122" -->
<!-- sent="Tue, 15 Jun 2010 09:41:13 -0600" -->
<!-- isosent="20100615154113" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV" -->
<!-- id="45F49D50-10AF-4445-9C1E-470E279EB6B3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C179D1C.5020005_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 11:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<li><strong>Previous message:</strong> <a href="8108.php">Damien Guinier: "[OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="8108.php">Damien Guinier: "[OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Makes sense to me - thanks!
<br>
<p>On Jun 15, 2010, at 9:32 AM, Damien Guinier wrote:
<br>
<p><span class="quotelev1">&gt; Using Intel OpenMP in conjunction with srun seems to cause a segmentation fault, at least in the 1.5 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After a long time tracking this strange bug, I finally found out that the slurmd ess component was corrupting the __environ structure. This results in a crash in Intel OpenMP, which calls getenv() after MPI_Finalize.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In fact, during MPI_Init, the slurmd component calls putenv(), which creates a reference to a const string located in the mmap'ed text. At MPI_Finalize, we unmap() the component, which makes the __environ structure point to something that no longer exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since Intel OpenMP is looking for a environment variable that does not exist, it reads all variables in __environ and crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a reproducer :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* launched by &quot;srun --resv-port&quot; */
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;             /* dlopens ess_slurmd.so */
</span><br>
<span class="quotelev1">&gt;             /* ess_slurmd.so will call putenv() */
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;             /* dlcloses ess_slurmd.so */
</span><br>
<span class="quotelev1">&gt;             /* unmaps the reference, __environ is corrupted */
</span><br>
<span class="quotelev1">&gt;     getenv(&quot;unknown_var&quot;);
</span><br>
<span class="quotelev1">&gt;             /* Will read all vars from __environ and crash */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a patch to fix the bug. It calls unsetenv() at MPI_Finalize() to clean the environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks you
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -r 9d999fdda967 -r 57de231642e2 orte/mca/ess/slurmd/ess_slurmd_module.c
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/slurmd/ess_slurmd_module.c	Fri Jun 04 15:29:28 2010 +0200
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/slurmd/ess_slurmd_module.c	Tue Jun 15 11:45:02 2010 +0200
</span><br>
<span class="quotelev1">&gt; @@ -387,7 +387,8 @@
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; +    unsetenv(&quot;OMPI_MCA_grpcomm&quot;);
</span><br>
<span class="quotelev1">&gt; +    unsetenv(&quot;OMPI_MCA_routed&quot;);
</span><br>
<span class="quotelev1">&gt;     /* deconstruct my nidmap and jobmap arrays - this
</span><br>
<span class="quotelev1">&gt;      * function protects itself from being called
</span><br>
<span class="quotelev1">&gt;      * before things were initialized
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<li><strong>Previous message:</strong> <a href="8108.php">Damien Guinier: "[OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>In reply to:</strong> <a href="8108.php">Damien Guinier: "[OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
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
