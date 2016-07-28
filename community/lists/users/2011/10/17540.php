<?
$subject_val = "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 10:47:18 2011" -->
<!-- isoreceived="20111014144718" -->
<!-- sent="Fri, 14 Oct 2011 07:47:13 -0700 (PDT)" -->
<!-- isosent="20111014144713" -->
<!-- name="Francesco Salvadore" -->
<!-- email="francescosalvadore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs" -->
<!-- id="1318603633.91085.YahooMailNeo_at_web113813.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1318061217.14263.YahooMailNeo_at_web113815.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs<br>
<strong>From:</strong> Francesco Salvadore (<em>francescosalvadore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 10:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17541.php">Ashwani Kumar Mishra: "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>In reply to:</strong> <a href="17524.php">Francesco Salvadore: "[OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Reply:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear MPI users,
<br>
<p>using Valgrind I found that the possibile error (which leads to segfault or hanging) comes from:
<br>
<p><p>==10334== Conditional jump or move depends on uninitialised value(s)
<br>
==10334== &#160; &#160;at 0xB150740: btl_openib_handle_incoming (btl_openib_component.c:2888)
<br>
==10334== &#160; &#160;by 0xB1525A2: handle_wc (btl_openib_component.c:3189)
<br>
==10334== &#160; &#160;by 0xB150390: btl_openib_component_progress (btl_openib_component.c:3462)
<br>
==10334== &#160; &#160;by 0x581DDD6: opal_progress (opal_progress.c:207)
<br>
==10334== &#160; &#160;by 0x52A75DE: ompi_request_default_wait_any (req_wait.c:154)
<br>
==10334== &#160; &#160;by 0x52ED449: PMPI_Waitany (pwaitany.c:70)
<br>
==10334== &#160; &#160;by 0x50541BF: MPI_WAITANY (pwaitany_f.c:86)
<br>
==10334== &#160; &#160;by 0x4ECCC1: mpiwaitany_ (parallelutils.f:1374)
<br>
==10334== &#160; &#160;by 0x4ECB18: waitanymessages_ (parallelutils.f:1295)
<br>
==10334== &#160; &#160;by 0x484249: cutman_v_ (grid.f:490)
<br>
==10334== &#160; &#160;by 0x40DE62: MAIN__ (cosa.f:379)
<br>
==10334== &#160; &#160;by 0x40BEFB: main (in /work/ady/fsalvado/CAMPOBASSO/CASPUR_MPI/4_MPI/crashtest-valgrind/cosa.mpi)
<br>
==10334==
<br>
==10334== Use of uninitialised value of size 8
<br>
==10334== &#160; &#160;at 0xB150764: btl_openib_handle_incoming (btl_openib_component.c:2892)
<br>
==10334== &#160; &#160;by 0xB1525A2: handle_wc (btl_openib_component.c:3189)
<br>
==10334== &#160; &#160;by 0xB150390: btl_openib_component_progress (btl_openib_component.c:3462)
<br>
==10334== &#160; &#160;by 0x581DDD6: opal_progress (opal_progress.c:207)
<br>
==10334== &#160; &#160;by 0x52A75DE: ompi_request_default_wait_any (req_wait.c:154)
<br>
==10334== &#160; &#160;by 0x52ED449: PMPI_Waitany (pwaitany.c:70)
<br>
==10334== &#160; &#160;by 0x50541BF: MPI_WAITANY (pwaitany_f.c:86)
<br>
==10334== &#160; &#160;by 0x4ECCC1: mpiwaitany_ (parallelutils.f:1374)
<br>
==10334== &#160; &#160;by 0x4ECB18: waitanymessages_ (parallelutils.f:1295)
<br>
==10334== &#160; &#160;by 0x484249: cutman_v_ (grid.f:490)
<br>
==10334== &#160; &#160;by 0x40DE62: MAIN__ (cosa.f:379)
<br>
==10334== &#160; &#160;by 0x40BEFB: main (in /work/ady/fsalvado/CAMPOBASSO/CASPUR_MPI/4_MPI/crashtest-valgrind/cosa.mpi)
<br>
<p>valgrind complains even without using eager_rdma (while the code seems to work in such a case) but complains much less using tcp/ip. there are many other valgrind warning after these and I can send the complete valgrind output if needed.
<br>
<p>the messages recall something from another thread
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/09/14324.php">http://www.open-mpi.org/community/lists/users/2010/09/14324.php</a>
<br>
<p>which, however, concluded without any direct solution.
<br>
<p>can anyone help me in identifying the source of the bug (code or MPI bug)?
<br>
<p>thanks
<br>
Francesco
<br>
________________________________
<br>
From: Francesco Salvadore &lt;francescosalvadore_at_[hidden]&gt;
<br>
To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Saturday, October 8, 2011 10:06 AM
<br>
Subject: [OMPI users] MPI_Waitany segfaults or (maybe) hangs
<br>
<p><p>Dear MPI users, 
<br>
<p>I am struggling against the bad behaviour of a MPI code. These are the 
<br>
basic informations: 
<br>
<p>a) fortran intel11 or intel 12 and OpenMPI 1.4.1 and 1.4.3 give the same 
<br>
problem. activating -traceback compiler option, I see the program stops 
<br>
at MPI_Waitany. MPI_Waitany waits for the completion of an array of 
<br>
MPI_IRecv: looping for the number of array components at the end all 
<br>
receives should be completed. 
<br>
The programs stops at unpredictable points (after 1 or 5 or 24 hours of 
<br>
computation). Sometimes I have sigsegv: 
<br>
<p>mca_btl_openib.so&#160; 00002BA74D29D181&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
mca_btl_openib.so&#160; 00002BA74D29C6FF&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
mca_btl_openib.so&#160; 00002BA74D29C033&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
libopen-pal.so.0&#160;&#160; 00002BA74835C3E6&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
libmpi.so.0&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00002BA747E485AD&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
libmpi.so.0&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00002BA747E7857D&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
libmpi_f77.so.0&#160;&#160;&#160; 00002BA747C047C4&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00000000004F856B&#160; waitanymessages_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 1292&#160; 
<br>
parallelutils.f 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00000000004C8044&#160; cutman_q_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 2084&#160; bc.f 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 0000000000413369&#160; smooth_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 2029&#160; cosa.f 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 0000000000410782&#160; mg_&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 810&#160; cosa.f 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 000000000040FB78&#160; MAIN__&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 537&#160; cosa.f 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 000000000040C1FC&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
libc.so.6&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 00002BA7490AE994&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
cosa.mpi&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 000000000040C109&#160; Unknown&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Unknown&#160; Unknown 
<br>
-------------------------------------------------------------------------- 
<br>
mpirun has exited due to process rank 34 with PID 10335 on 
<br>
node neo251 exiting without calling &quot;finalize&quot;. This may 
<br>
have caused other processes in the application to be 
<br>
terminated by signals sent by mpirun (as reported here). 
<br>
-------------------------------------------------------------------------- 
<br>
<p>Waitanymessages is just a wrapper of MPI_Waitany. Sometimes, the run 
<br>
stops writing anything on screen and I do not know what is happening 
<br>
(probably MPI_Waitany hangs). Before reaching segafault or hanging, 
<br>
results are always correct, as checked using the serial version of the 
<br>
code. 
<br>
<p>b) The problem occurs only using openib (using TCP/IP it works) and only 
<br>
using more than one node on our main cluster . Trying many possibile 
<br>
workarounds, I found that running using: 
<br>
<p>-mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0 -mca 
<br>
btl_openib_flags 1 
<br>
<p>the problems seems not to occur. 
<br>
<p>I would be very thankful to anyone which can help me to make us sure 
<br>
there is no bug in the code and, anyway, to discover the reason of such 
<br>
a &quot;dangerous&quot; behaviour. 
<br>
<p>I can give any further information if needed, and I apologize if the 
<br>
post is not enough clear or complete. 
<br>
<p>regards, 
<br>
Francesco 
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17541.php">Ashwani Kumar Mishra: "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17539.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p?"</a>
<li><strong>In reply to:</strong> <a href="17524.php">Francesco Salvadore: "[OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<li><strong>Reply:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
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
