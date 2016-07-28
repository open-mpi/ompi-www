<?
$subject_val = "[OMPI users] failure to launch MPMD program on win32 w 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 06:05:46 2010" -->
<!-- isoreceived="20101130110546" -->
<!-- sent="Tue, 30 Nov 2010 06:05:42 -0500" -->
<!-- isosent="20101130110542" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="[OMPI users] failure to launch MPMD program on win32 w 1.4.3" -->
<!-- id="20101130060542.31128_at_web004.roc2.bluetie.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] failure to launch MPMD program on win32 w 1.4.3<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 06:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14943.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14941.php">nadia.derbey: "Re: [OMPI users] write out mca parameters after mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14948.php">Ralph Castain: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14948.php">Ralph Castain: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Maybe reply:</strong> <a href="14949.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14957.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&#194;&#160;
<br>
I have successfully run&#194;&#160;
<br>
&#194;&#160;
<br>
mpirun -np 3 .\test.exe
<br>
&#194;&#160;
<br>
when I try MPMP
<br>
&#194;&#160;
<br>
mpirun -np 3 .\test.exe : -np 3 .\test2.exe
<br>
&#194;&#160;
<br>
where test and test2 are identical (just for a trial), I get this error:
<br>
&#194;&#160;
<br>
[hostname:04960] [[47427,1],0]-[[47427,0],0] mca_oob_tcp_peer_send_blocking: send() failed: Unknown error (10057)
<br>
[hostname:04960] [[47427,1],0] routed:binomial: Connection to lifeline [[47427,0],0] lost
<br>
<p>Granted this uses boost::mpi, but it worked for SPMD, and the source for the main function is trivial:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;boost/mpi.hpp&gt;
<br>
<p>namespace mpi = boost::mpi;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;mpi::environment env(argc, argv);
<br>
&nbsp;&nbsp;mpi::communicator world;
<br>
<p>&nbsp;&nbsp;std::cout &lt;&lt; &quot;Process #&quot; &lt;&lt; world.rank() &lt;&lt; &quot; says &quot;&lt;&lt; std::endl;
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>as far as I understand, there should be 1 world with 6 processes, ranking 0 1 2 ,  3 4 5
<br>
<p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14943.php">Terry Dontje: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14941.php">nadia.derbey: "Re: [OMPI users] write out mca parameters after mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14948.php">Ralph Castain: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14948.php">Ralph Castain: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Maybe reply:</strong> <a href="14949.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Reply:</strong> <a href="14957.php">Shiqing Fan: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
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
