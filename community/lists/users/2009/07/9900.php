<?
$subject_val = "Re: [OMPI users] Segfault when using valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 11:09:07 2009" -->
<!-- isoreceived="20090709150907" -->
<!-- sent="Thu, 9 Jul 2009 09:08:42 -0600" -->
<!-- isosent="20090709150842" -->
<!-- name="Justin Luitjens" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault when using valgrind" -->
<!-- id="913d17a50907090808rf89a7cfj2d82e63a66b042b1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD0D500C-4BD2-4F99-AC85-77149B63E775_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault when using valgrind<br>
<strong>From:</strong> Justin Luitjens (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 11:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9899.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI users] Segfault when using valgrind"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to get rid of  the segfaults/invalid reads by disabling the
<br>
shared memory path.  They still reported an error with uninitialized memory
<br>
in the same spot which I believe is due to the struct being padded for
<br>
alignment.  I added a supression and was able to get past this part just
<br>
fine.
<br>
<p>Thanks,
<br>
Justin
<br>
<p>On Thu, Jul 9, 2009 at 5:16 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 7, 2009, at 11:47 AM, Justin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (Sorry if this is posted twice, I sent the same email yesterday but it
</span><br>
<span class="quotelev2">&gt;&gt; never appeared on the list).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying.  FWIW, I got your original message as
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,  I am attempting to debug a memory corruption in an mpi program
</span><br>
<span class="quotelev2">&gt;&gt; using valgrind.  However, when I run with valgrind I get semi-random
</span><br>
<span class="quotelev2">&gt;&gt; segfaults and valgrind messages with the openmpi library.  Here is an
</span><br>
<span class="quotelev2">&gt;&gt; example of such a seg fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==6153==
</span><br>
<span class="quotelev2">&gt;&gt; ==6153== Invalid read of size 8
</span><br>
<span class="quotelev2">&gt;&gt; ==6153==    at 0x19102EA0: (within /usr/lib/openmpi/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_sm.so)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==6153==  Address 0x10 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev2">&gt;&gt; ^G^G^GThread &quot;main&quot;(pid 6153) caught signal SIGSEGV at address (nil)
</span><br>
<span class="quotelev2">&gt;&gt; (segmentation violation)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the code for our isend at SFC.h:298 does not seem to have any
</span><br>
<span class="quotelev2">&gt;&gt; errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =============================================
</span><br>
<span class="quotelev2">&gt;&gt;  MergeInfo&lt;BITS&gt; myinfo,theirinfo;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Request srequest, rrequest;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  myinfo.n=n;
</span><br>
<span class="quotelev2">&gt;&gt;  if(n!=0)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;    myinfo.min=sendbuf[0].bits;
</span><br>
<span class="quotelev2">&gt;&gt;    myinfo.max=sendbuf[n-1].bits;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  //cout &lt;&lt; rank &lt;&lt; &quot; n:&quot; &lt;&lt; n &lt;&lt; &quot; min:&quot; &lt;&lt; (int)myinfo.min &lt;&lt; &quot;max:&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt; (int)myinfo.max &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Isend(&amp;myinfo,sizeof(MergeInfo&lt;BITS&gt;),MPI_BYTE,to,0,Comm,&amp;srequest);
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; myinfo is a struct located on the stack, to is the rank of the processor
</span><br>
<span class="quotelev2">&gt;&gt; that the message is being sent to, and srequest is also on the stack.
</span><br>
<span class="quotelev2">&gt;&gt; In addition this message is waited on prior to exiting this block of
</span><br>
<span class="quotelev2">&gt;&gt; code so they still exist on the stack.  When I don't run with valgrind
</span><br>
<span class="quotelev2">&gt;&gt; my program runs past this point just fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Strange.  I can't think of an immediate reason as to why this would happen
</span><br>
<span class="quotelev1">&gt; -- does it also happen if you use a blocking send (vs. an Isend)?  Is myinfo
</span><br>
<span class="quotelev1">&gt; a complex object, or a variable-length object?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am currently using openmpi 1.3 from the debian unstable branch.  I
</span><br>
<span class="quotelev2">&gt;&gt; also see the same type of segfault in a different portion of the code
</span><br>
<span class="quotelev2">&gt;&gt; involving an MPI_Allgather which can be seen below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================
</span><br>
<span class="quotelev2">&gt;&gt; ==22736== Use of uninitialised value of size 8
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    at 0x19104775: mca_btl_sm_component_progress
</span><br>
<span class="quotelev2">&gt;&gt; (opal_list.h:322)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x1382CE09: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0xB404264: ompi_request_default_wait_all (condition.h:99)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x1A1ADC16: ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev2">&gt;&gt; (coll_tuned_util.c:55)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x1A1B61E1: ompi_coll_tuned_allgatherv_intra_bruck
</span><br>
<span class="quotelev2">&gt;&gt; (coll_tuned_util.h:60)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0xB418B2E: PMPI_Allgatherv (pallgatherv.c:121)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x646CCF7: Uintah::Level::setBCTypes() (Level.cc:728)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x646D823: Uintah::Level::finalizeLevel() (Level.cc:537)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x6465457:
</span><br>
<span class="quotelev2">&gt;&gt; Uintah::Grid::problemSetup(Uintah::Handle&lt;Uintah::ProblemSpec&gt; const&amp;,
</span><br>
<span class="quotelev2">&gt;&gt; Uintah::ProcessorGroup const*, bool) (Grid.cc:866)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x8345759: Uintah::SimulationController::gridSetup()
</span><br>
<span class="quotelev2">&gt;&gt; (SimulationController.cc:243)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x834F418: Uintah::AMRSimulationController::run()
</span><br>
<span class="quotelev2">&gt;&gt; (AMRSimulationController.cc:117)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x4089AE: main (sus.cc:629)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==
</span><br>
<span class="quotelev2">&gt;&gt; ==22736== Invalid read of size 8
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    at 0x19104775: mca_btl_sm_component_progress
</span><br>
<span class="quotelev2">&gt;&gt; (opal_list.h:322)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x1382CE09: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0xB404264: ompi_request_default_wait_all (condition.h:99)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x1A1ADC16: ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev2">&gt;&gt; (coll_tuned_util.c:55)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x1A1B61E1: ompi_coll_tuned_allgatherv_intra_bruck
</span><br>
<span class="quotelev2">&gt;&gt; (coll_tuned_util.h:60)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0xB418B2E: PMPI_Allgatherv (pallgatherv.c:121)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x646CCF7: Uintah::Level::setBCTypes() (Level.cc:728)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x646D823: Uintah::Level::finalizeLevel() (Level.cc:537)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x6465457:
</span><br>
<span class="quotelev2">&gt;&gt; Uintah::Grid::problemSetup(Uintah::Handle&lt;Uintah::ProblemSpec&gt; const&amp;,
</span><br>
<span class="quotelev2">&gt;&gt; Uintah::ProcessorGroup const*, bool) (Grid.cc:866)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x8345759: Uintah::SimulationController::gridSetup()
</span><br>
<span class="quotelev2">&gt;&gt; (SimulationController.cc:243)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x834F418: Uintah::AMRSimulationController::run()
</span><br>
<span class="quotelev2">&gt;&gt; (AMRSimulationController.cc:117)
</span><br>
<span class="quotelev2">&gt;&gt; ==22736==    by 0x4089AE: main (sus.cc:629)
</span><br>
<span class="quotelev2">&gt;&gt; ================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these problems with openmpi and is there any known work arounds?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are new to me.  The problem does seem to occur with OMPI's shared
</span><br>
<span class="quotelev1">&gt; memory device; you might want to try a different point-to-point device
</span><br>
<span class="quotelev1">&gt; (e.g., tcp?) to see if the problem goes away.  But be aware that the problem
</span><br>
<span class="quotelev1">&gt; &quot;going away&quot; does not really pinpoint the location of the problem -- moving
</span><br>
<span class="quotelev1">&gt; to a slower transport (like tcp) may simply change timing such that the
</span><br>
<span class="quotelev1">&gt; problem does not occur.  I.e., the problem could still exist in either your
</span><br>
<span class="quotelev1">&gt; code or OMPI -- this would simply be a workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9899.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI users] Segfault when using valgrind"</a>
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
