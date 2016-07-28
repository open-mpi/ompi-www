<?
$subject_val = "Re: [OMPI devel] 1.8.4rc2 now available for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:01:02 2014" -->
<!-- isoreceived="20141212160102" -->
<!-- sent="Fri, 12 Dec 2014 11:00:23 -0500" -->
<!-- isosent="20141212160023" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc2 now available for testing" -->
<!-- id="548B1117.6070702_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="078996A1-B3C5-4238-8DFD-8738500391D5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc2 now available for testing<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 11:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16546.php">Ralph Castain: "[OMPI devel] OpenIB has some borked code"</a>
<li><strong>Previous message:</strong> <a href="16544.php">Nathan Hjelm: "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<li><strong>In reply to:</strong> <a href="16501.php">Ralph Castain: "[OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16548.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Reply:</strong> <a href="16548.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/11/2014 05:45 AM, Ralph Castain wrote:
<br>
...
<br>
<p><span class="quotelev1">&gt; by the reporters. Still, I would appreciate a fairly thorough testing as
</span><br>
<span class="quotelev1">&gt; this is expected to be the last 1.8 series release for some time.
</span><br>
<p>Is is relevant to report valgrind leaks?  Maybe they are &quot;normal&quot; or 
<br>
not, I don't know.  If they are normal, maybe suppressions should be 
<br>
added to .../share/openmpi/openmpi-valgrind.supp before the release?
<br>
<p>Here is a simple test case ;-) :
<br>
<p>cat mpi_init_finalize.c
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>mpicc -o mpi_init_finalize mpi_init_finalize.c
<br>
<p>mpiexec -np 1 valgrind -v 
<br>
--suppressions=/opt/openmpi-1.8.4rc2/share/openmpi/openmpi-valgrind.supp 
<br>
--gen-suppressions=all --leak-check=full --leak-resolution=high 
<br>
--show-reachable=yes --error-limit=no --num-callers=24 --track-fds=yes 
<br>
--log-file=valgrind_out.n%q{OMPI_COMM_WORLD_RANK} ./mpi_init_finalize
<br>
<p>running with 2 processes generates some more:
<br>
<p>mpiexec -np 2 .... 
<br>
--log-file=valgrind_out_2proc.n%q{OMPI_COMM_WORLD_RANK} ./mpi_init_finalize
<br>
<p>which results in the files attached...
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16545/valgrind_out.tgz">valgrind_out.tgz</a>
</ul>
<!-- attachment="valgrind_out.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16546.php">Ralph Castain: "[OMPI devel] OpenIB has some borked code"</a>
<li><strong>Previous message:</strong> <a href="16544.php">Nathan Hjelm: "Re: [OMPI devel] [1.8.4rc2] build broken by default on SGI UV"</a>
<li><strong>In reply to:</strong> <a href="16501.php">Ralph Castain: "[OMPI devel] 1.8.4rc2 now available for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16548.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Reply:</strong> <a href="16548.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
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
