<?
$subject_val = "[OMPI devel] srun + Intel OpenMP = SIGSEGV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 11:32:49 2010" -->
<!-- isoreceived="20100615153249" -->
<!-- sent="Tue, 15 Jun 2010 17:32:44 +0200" -->
<!-- isosent="20100615153244" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] srun + Intel OpenMP = SIGSEGV" -->
<!-- id="4C179D1C.5020005_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] srun + Intel OpenMP = SIGSEGV<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 11:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="8107.php">Jeff Squyres: "Re: [OMPI devel] Error (mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefinedsymbol: orte_rmaps_base_get_starting_point )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using Intel OpenMP in conjunction with srun seems to cause a 
<br>
segmentation fault, at least in the 1.5 branch.
<br>
<p>After a long time tracking this strange bug, I finally found out that 
<br>
the slurmd ess component was corrupting the __environ structure. This 
<br>
results in a crash in Intel OpenMP, which calls getenv() after 
<br>
MPI_Finalize.
<br>
<p>In fact, during MPI_Init, the slurmd component calls putenv(), which 
<br>
creates a reference to a const string located in the mmap'ed text. At 
<br>
MPI_Finalize, we unmap() the component, which makes the __environ 
<br>
structure point to something that no longer exists.
<br>
<p>Since Intel OpenMP is looking for a environment variable that does not 
<br>
exist, it reads all variables in __environ and crashes.
<br>
<p>Here is a reproducer :
<br>
<p>/* launched by &quot;srun --resv-port&quot; */
<br>
int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* dlopens ess_slurmd.so */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* ess_slurmd.so will call putenv() */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* dlcloses ess_slurmd.so */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* unmaps the reference, __environ is corrupted */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getenv(&quot;unknown_var&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Will read all vars from __environ and crash */
<br>
}
<br>
<p>Attached is a patch to fix the bug. It calls unsetenv() at 
<br>
MPI_Finalize() to clean the environment.
<br>
<p>Thanks you
<br>
Damien
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8108/ess_slurmd_openmp_intel.patch">ess_slurmd_openmp_intel.patch</a>
</ul>
<!-- attachment="ess_slurmd_openmp_intel.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="8107.php">Jeff Squyres: "Re: [OMPI devel] Error (mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefinedsymbol: orte_rmaps_base_get_starting_point )"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>Reply:</strong> <a href="8109.php">Ralph Castain: "Re: [OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
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
