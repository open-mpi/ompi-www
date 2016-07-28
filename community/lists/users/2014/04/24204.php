<?
$subject_val = "[OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 13:46:48 2014" -->
<!-- isoreceived="20140415174648" -->
<!-- sent="Tue, 15 Apr 2014 12:46:48 -0500" -->
<!-- isosent="20140415174648" -->
<!-- name="Oscar Mojica" -->
<!-- email="o_mojical_at_[hidden]" -->
<!-- subject="[OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="BLU177-W306EC9F35D308408F3635090500_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Where is the error? (MPI program in fortran)<br>
<strong>From:</strong> Oscar Mojica (<em>o_mojical_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 13:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24205.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody
<br>
I implemented a parallel simulated annealing algorithm in fortran.  The algorithm is describes as follows
<br>
1. The MPI program initially generates P processes that have rank 0,1,...,P-1. 2. The MPI program generates a starting point and sends it  for all processes set T=T03. At the current temperature T, each process begins to execute iterative operations4. At end of iterations, process with rank 0 is responsible for collecting the solution obatined by 5. Each process at current temperature and broadcast the best solution of them among all participatingprocess6. Each process cools the temperatue and goes back to step 3, until the maximum number of temperatures is reach
<br>
I compiled with: mpif90 -o exe mpivfsa_version2.fand run with: mpirun -np 4 ./exe in a single machine
<br>
So I have 4 processes, 1 iteration per temperature and for example 15 temperatures. When I run the program with just 5 temperatures it works well, but when the number of temperatures is higher than 5 it doesn't write theouput files and I get the following error message:
<br>
<p>[oscar-Vostro-3550:06740] *** Process received signal ***[oscar-Vostro-3550:06741] *** Process received signal ***[oscar-Vostro-3550:06741] Signal: Segmentation fault (11)[oscar-Vostro-3550:06741] Signal code: Address not mapped (1)[oscar-Vostro-3550:06741] Failing at address: 0xad6af[oscar-Vostro-3550:06742] *** Process received signal ***[oscar-Vostro-3550:06740] Signal: Segmentation fault (11)[oscar-Vostro-3550:06740] Signal code: Address not mapped (1)[oscar-Vostro-3550:06740] Failing at address: 0xad6af[oscar-Vostro-3550:06742] Signal: Segmentation fault (11)[oscar-Vostro-3550:06742] Signal code: Address not mapped (1)[oscar-Vostro-3550:06742] Failing at address: 0xad6af[oscar-Vostro-3550:06740] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f49ee2224a0][oscar-Vostro-3550:06740] [ 1] /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f49ee26f54c][oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742][oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9][oscar-Vostro-3550:06740] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f49ee20d76d][oscar-Vostro-3550:06742] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6877fdc4a0][oscar-Vostro-3550:06742] [ 1] /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f687802954c][oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742][oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9][oscar-Vostro-3550:06742] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f6877fc776d][oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399][oscar-Vostro-3550:06742] *** End of error message ***[oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399][oscar-Vostro-3550:06740] *** End of error message ***[oscar-Vostro-3550:06741] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7fa6c4c6e4a0][oscar-Vostro-3550:06741] [ 1] /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7fa6c4cbb54c][oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742][oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9][oscar-Vostro-3550:06741] [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa6c4c5976d][oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399][oscar-Vostro-3550:06741] *** End of error message ***--------------------------------------------------------------------------mpirun noticed that process rank 0 with PID 6917 on node oscar-Vostro-3550 exited on signal 11 (Segmentation fault).--------------------------------------------------------------------------2 total processes killed (some possibly by mpirun during cleanup)
<br>
If there is a segmentation fault in no case it must work .I checked the program and didn't find the error. Why does the program work with five temperatures?Could someone help me to find the error and answer my question please.
<br>
The program and the necessary files to run it  are attached
<br>
Thanks
<br>
<p>Oscar Fabian Mojica Ladino
<br>
Geologist M.S. in  Geophysics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24204/mpivfsa_versao2.f">mpivfsa_versao2.f</a>
</ul>
<!-- attachment="mpivfsa_versao2.f" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24204/observado.dat">observado.dat</a>
</ul>
<!-- attachment="observado.dat" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24204/sinteticoxyz.dat">sinteticoxyz.dat</a>
</ul>
<!-- attachment="sinteticoxyz.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24205.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24203.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Reply:</strong> <a href="24208.php">Ralph Castain: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
