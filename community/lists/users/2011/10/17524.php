<?
$subject_val = "[OMPI users] MPI_Waitany segfaults or (maybe) hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  8 04:08:02 2011" -->
<!-- isoreceived="20111008080802" -->
<!-- sent="Sat, 8 Oct 2011 01:06:57 -0700 (PDT)" -->
<!-- isosent="20111008080657" -->
<!-- name="Francesco Salvadore" -->
<!-- email="francescosalvadore_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Waitany segfaults or (maybe) hangs" -->
<!-- id="1318061217.14263.YahooMailNeo_at_web113815.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Waitany segfaults or (maybe) hangs<br>
<strong>From:</strong> Francesco Salvadore (<em>francescosalvadore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-08 04:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17525.php">MM: "[OMPI users] mpirun should run with just the localhost interface on win?"</a>
<li><strong>Previous message:</strong> <a href="17523.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Reply:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear MPI users, 

I am struggling against the bad behaviour of a MPI code. These are the 
basic informations: 

a) fortran intel11 or intel 12 and OpenMPI 1.4.1 and 1.4.3 give the same 
problem. activating -traceback compiler option, I see the program stops 
at MPI_Waitany. MPI_Waitany waits for the completion of an array of 
MPI_IRecv: looping for the number of array components at the end all 
receives should be completed. 
The programs stops at unpredictable points (after 1 or 5 or 24 hours of 
computation). Sometimes I have sigsegv: 

mca_btl_openib.so&#160; 00002BA74D29D181&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
mca_btl_openib.so&#160; 00002BA74D29C6FF&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
mca_btl_openib.so&#160; 00002BA74D29C033&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
libopen-pal.so.0&#160;&#160; 00002BA74835C3E6&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
libmpi.so.0&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00002BA747E485AD&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
libmpi.so.0&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00002BA747E7857D&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
libmpi_f77.so.0&#160;&#160;&#160; 00002BA747C047C4&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00000000004F856B&#160; waitanymessages_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 1292&#160; 
parallelutils.f 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00000000004C8044&#160; cutman_q_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 2084&#160; bc.f 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 0000000000413369&#160; smooth_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 2029&#160; cosa.f 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 0000000000410782&#160; mg_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 810&#160; cosa.f 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 000000000040FB78&#160; MAIN__&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 537&#160; cosa.f 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 000000000040C1FC&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
libc.so.6&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00002BA7490AE994&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 000000000040C109&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
-------------------------------------------------------------------------- 
mpirun has exited due to process rank 34 with PID 10335 on 
node neo251 exiting without calling &quot;finalize&quot;. This may 
have caused other processes in the application to be 
terminated by signals sent by mpirun (as reported here). 
-------------------------------------------------------------------------- 

Waitanymessages is just a wrapper of MPI_Waitany. Sometimes, the run 
stops writing anything on screen and I do not know what is happening 
(probably MPI_Waitany hangs). Before reaching segafault or hanging, 
results are always correct, as checked using the serial version of the 
code. 

b) The problem occurs only using openib (using TCP/IP it works) and only 
using more than one node on our main cluster . Trying many possibile 
workarounds, I found that running using: 

-mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0 -mca 
btl_openib_flags 1 

the problems seems not to occur. 

I would be very thankful to anyone which can help me to make us sure 
there is no bug in the code and, anyway, to discover the reason of such 
a &quot;dangerous&quot; behaviour. 

I can give any further information if needed, and I apologize if the 
post is not enough clear or complete. 

regards, 
Francesco 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17525.php">MM: "[OMPI users] mpirun should run with just the localhost interface on win?"</a>
<li><strong>Previous message:</strong> <a href="17523.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Reply:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
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
