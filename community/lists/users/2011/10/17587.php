<?
$subject_val = "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 20 13:00:52 2011" -->
<!-- isoreceived="20111020170052" -->
<!-- sent="Thu, 20 Oct 2011 10:00:46 -0700 (PDT)" -->
<!-- isosent="20111020170046" -->
<!-- name="Francesco Salvadore" -->
<!-- email="francescosalvadore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs" -->
<!-- id="1319130046.61423.YahooMailNeo_at_web113807.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="78E5F008-0695-4FE3-81BC-0A013D864C78_at_cisco.com" -->
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
<strong>Date:</strong> 2011-10-20 13:00:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17588.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17586.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>thanks for replying and for providing MPI implementation details. &#160;As you say, the possible problem is a subtle memory bug.
<br>
<p>In our code, MPI communications are limited to a few subroutines named cutman_**** and sharing a similar structure involving a possibile large number (1000 or even more) of non blocking send and receive. Segfaults always occur during execution of cutman_q subroutine.
<br>
Using openib, valgrind warns about all cutman_**** subroutine, while using TCP only cutman_v gives &quot;uninitialised value&quot; problems.
<br>
<p>As an additional information, we tested the code using different clusters employing openib protocol and the run were always ok, i.e. we see the problem only in one cluster (Opteron Barcelona with&#160;InfiniBand: Mellanox Technologies MT25204), while anything seems ok with another cluster (Intel Westmere with&#160;&#160;Network controller: Mellanox Technologies MT26438)
<br>
<p>best regards,&#160;
<br>
Francesco
<br>
<p><p><p>----- Original Message -----
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
To: Francesco Salvadore &lt;francescosalvadore_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Cc: 
<br>
Sent: Thursday, October 20, 2011 2:26 PM
<br>
Subject: Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs
<br>
<p>Sorry for the delay in replying.&#160; 
<br>
<p>Unfortunately, the &quot;uninitialized values&quot; kinds of warnings from valgrind are to be expected when using the OFED stack.&#160; Specifically, a bunch of memory in an OMPI process comes directly from OS-bypass kinds of mechanisms, which effectively translates into valgrind-bypass, too.&#160; Hence, even though the memory *has* been initialized, valgrind didn't &quot;see&quot; it get initialized, so it complains.&#160; :-\
<br>
<p>Running with TCP should give much more predictable valgrind results, but there are still some tolerable valgrind warnings that we don't care about.&#160; Specifically, when we write a struct down a file descriptor, sometimes there's an alignment &quot;hole&quot; (e.g., a 2 byte short followed by a 2 byte hole followed by a 4 byte int) that wasn't initialized.&#160; We don't care if such holes are uninitialized.
<br>
<p>You said that the program runs correctly with TCP but not with openib.&#160; That could well be explained if there is some subtle memory bug somewhere; the openib and TCP underlying drivers are quite different from each other.&#160; It is very possible that openib interacts in such a way that causes the real bug to be fatal, but TCP interacts with it in a different way that does not cause it to be fatal.
<br>
<p>Do the TCP valgrind results show anything illuminating?
<br>
<p><p>On Oct 14, 2011, at 10:47 AM, Francesco Salvadore wrote:
<br>
<p><span class="quotelev1">&gt; Dear MPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using Valgrind I found that the possibile error (which leads to segfault or hanging) comes from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==10334== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; at 0xB150740: btl_openib_handle_incoming (btl_openib_component.c:2888)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0xB1525A2: handle_wc (btl_openib_component.c:3189)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0xB150390: btl_openib_component_progress (btl_openib_component.c:3462)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x581DDD6: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x52A75DE: ompi_request_default_wait_any (req_wait.c:154)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x52ED449: PMPI_Waitany (pwaitany.c:70)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x50541BF: MPI_WAITANY (pwaitany_f.c:86)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x4ECCC1: mpiwaitany_ (parallelutils.f:1374)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x4ECB18: waitanymessages_ (parallelutils.f:1295)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x484249: cutman_v_ (grid.f:490)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x40DE62: MAIN__ (cosa.f:379)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x40BEFB: main (in /work/ady/fsalvado/CAMPOBASSO/CASPUR_MPI/4_MPI/crashtest-valgrind/cosa.mpi)
</span><br>
<span class="quotelev1">&gt; ==10334==
</span><br>
<span class="quotelev1">&gt; ==10334== Use of uninitialised value of size 8
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; at 0xB150764: btl_openib_handle_incoming (btl_openib_component.c:2892)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0xB1525A2: handle_wc (btl_openib_component.c:3189)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0xB150390: btl_openib_component_progress (btl_openib_component.c:3462)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x581DDD6: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x52A75DE: ompi_request_default_wait_any (req_wait.c:154)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x52ED449: PMPI_Waitany (pwaitany.c:70)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x50541BF: MPI_WAITANY (pwaitany_f.c:86)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x4ECCC1: mpiwaitany_ (parallelutils.f:1374)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x4ECB18: waitanymessages_ (parallelutils.f:1295)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x484249: cutman_v_ (grid.f:490)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x40DE62: MAIN__ (cosa.f:379)
</span><br>
<span class="quotelev1">&gt; ==10334==&#160; &#160; by 0x40BEFB: main (in /work/ady/fsalvado/CAMPOBASSO/CASPUR_MPI/4_MPI/crashtest-valgrind/cosa.mpi)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; valgrind complains even without using eager_rdma (while the code seems to work in such a case) but complains much less using tcp/ip. there are many other valgrind warning after these and I can send the complete valgrind output if needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the messages recall something from another thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/09/14324.php">http://www.open-mpi.org/community/lists/users/2010/09/14324.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which, however, concluded without any direct solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can anyone help me in identifying the source of the bug (code or MPI bug)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Francesco
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: Francesco Salvadore &lt;francescosalvadore_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, October 8, 2011 10:06 AM
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_Waitany segfaults or (maybe) hangs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear MPI users, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am struggling against the bad behaviour of a MPI code. These are the 
</span><br>
<span class="quotelev1">&gt; basic informations: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) fortran intel11 or intel 12 and OpenMPI 1.4.1 and 1.4.3 give the same 
</span><br>
<span class="quotelev1">&gt; problem. activating -traceback compiler option, I see the program stops 
</span><br>
<span class="quotelev1">&gt; at MPI_Waitany. MPI_Waitany waits for the completion of an array of 
</span><br>
<span class="quotelev1">&gt; MPI_IRecv: looping for the number of array components at the end all 
</span><br>
<span class="quotelev1">&gt; receives should be completed. 
</span><br>
<span class="quotelev1">&gt; The programs stops at unpredictable points (after 1 or 5 or 24 hours of 
</span><br>
<span class="quotelev1">&gt; computation). Sometimes I have sigsegv: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so&#160; 00002BA74D29D181&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so&#160; 00002BA74D29C6FF&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; mca_btl_openib.so&#160; 00002BA74D29C033&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0&#160;  00002BA74835C3E6&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0&#160; &#160; &#160; &#160; 00002BA747E485AD&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0&#160; &#160; &#160; &#160; 00002BA747E7857D&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0&#160; &#160; 00002BA747C047C4&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  00000000004F856B&#160; waitanymessages_&#160; &#160; &#160; &#160;  1292&#160; 
</span><br>
<span class="quotelev1">&gt; parallelutils.f 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  00000000004C8044&#160; cutman_q_&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 2084&#160; bc.f 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  0000000000413369&#160; smooth_&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 2029&#160; cosa.f 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  0000000000410782&#160; mg_&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  810&#160; cosa.f 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  000000000040FB78&#160; MAIN__&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 537&#160; cosa.f 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  000000000040C1FC&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; libc.so.6&#160; &#160; &#160; &#160; &#160; 00002BA7490AE994&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; cosa.mpi&#160; &#160; &#160; &#160; &#160;  000000000040C109&#160; Unknown&#160; &#160; &#160; &#160; &#160; &#160; &#160;  Unknown&#160; Unknown 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 34 with PID 10335 on 
</span><br>
<span class="quotelev1">&gt; node neo251 exiting without calling &quot;finalize&quot;. This may 
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be 
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here). 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Waitanymessages is just a wrapper of MPI_Waitany. Sometimes, the run 
</span><br>
<span class="quotelev1">&gt; stops writing anything on screen and I do not know what is happening 
</span><br>
<span class="quotelev1">&gt; (probably MPI_Waitany hangs). Before reaching segafault or hanging, 
</span><br>
<span class="quotelev1">&gt; results are always correct, as checked using the serial version of the 
</span><br>
<span class="quotelev1">&gt; code. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) The problem occurs only using openib (using TCP/IP it works) and only 
</span><br>
<span class="quotelev1">&gt; using more than one node on our main cluster . Trying many possibile 
</span><br>
<span class="quotelev1">&gt; workarounds, I found that running using: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0 -mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_flags 1 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the problems seems not to occur. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be very thankful to anyone which can help me to make us sure 
</span><br>
<span class="quotelev1">&gt; there is no bug in the code and, anyway, to discover the reason of such 
</span><br>
<span class="quotelev1">&gt; a &quot;dangerous&quot; behaviour. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can give any further information if needed, and I apologize if the 
</span><br>
<span class="quotelev1">&gt; post is not enough clear or complete. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards, 
</span><br>
<span class="quotelev1">&gt; Francesco 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17588.php">Gus Correa: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17586.php">Ralph Castain: "Re: [OMPI users] Application in a cluster"</a>
<li><strong>In reply to:</strong> <a href="17584.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
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
