<?
$subject_val = "Re: [OMPI users] Segfault when using valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 07:16:27 2009" -->
<!-- isoreceived="20090709111627" -->
<!-- sent="Thu, 9 Jul 2009 07:16:22 -0400" -->
<!-- isosent="20090709111622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault when using valgrind" -->
<!-- id="FD0D500C-4BD2-4F99-AC85-77149B63E775_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A536E2D.9020903_at_cs.utah.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 07:16:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9896.php">Jeff Squyres: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9894.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9871.php">Justin: "[OMPI users] Segfault when using valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9900.php">Justin Luitjens: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>Reply:</strong> <a href="9900.php">Justin Luitjens: "Re: [OMPI users] Segfault when using valgrind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2009, at 11:47 AM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; (Sorry if this is posted twice, I sent the same email yesterday but it
</span><br>
<span class="quotelev1">&gt; never appeared on the list).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay in replying.  FWIW, I got your original message as  
<br>
well.
<br>
<p><span class="quotelev1">&gt; Hi,  I am attempting to debug a memory corruption in an mpi program
</span><br>
<span class="quotelev1">&gt; using valgrind.  However, when I run with valgrind I get semi-random
</span><br>
<span class="quotelev1">&gt; segfaults and valgrind messages with the openmpi library.  Here is an
</span><br>
<span class="quotelev1">&gt; example of such a seg fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==6153==
</span><br>
<span class="quotelev1">&gt; ==6153== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==6153==    at 0x19102EA0: (within /usr/lib/openmpi/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so)
</span><br>
<span class="quotelev1">&gt;
</span><br>
...
<br>
<span class="quotelev1">&gt; ==6153==  Address 0x10 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; ^G^G^GThread &quot;main&quot;(pid 6153) caught signal SIGSEGV at address (nil)
</span><br>
<span class="quotelev1">&gt; (segmentation violation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the code for our isend at SFC.h:298 does not seem to have  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =============================================
</span><br>
<span class="quotelev1">&gt;   MergeInfo&lt;BITS&gt; myinfo,theirinfo;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Request srequest, rrequest;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   myinfo.n=n;
</span><br>
<span class="quotelev1">&gt;   if(n!=0)
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     myinfo.min=sendbuf[0].bits;
</span><br>
<span class="quotelev1">&gt;     myinfo.max=sendbuf[n-1].bits;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   //cout &lt;&lt; rank &lt;&lt; &quot; n:&quot; &lt;&lt; n &lt;&lt; &quot; min:&quot; &lt;&lt; (int)myinfo.min &lt;&lt; &quot;max:&quot;
</span><br>
<span class="quotelev1">&gt; &lt;&lt; (int)myinfo.max &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Isend(&amp;myinfo,sizeof(MergeInfo&lt;BITS&gt;),MPI_BYTE,to, 
</span><br>
<span class="quotelev1">&gt; 0,Comm,&amp;srequest);
</span><br>
<span class="quotelev1">&gt; ==============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; myinfo is a struct located on the stack, to is the rank of the  
</span><br>
<span class="quotelev1">&gt; processor
</span><br>
<span class="quotelev1">&gt; that the message is being sent to, and srequest is also on the stack.
</span><br>
<span class="quotelev1">&gt; In addition this message is waited on prior to exiting this block of
</span><br>
<span class="quotelev1">&gt; code so they still exist on the stack.  When I don't run with valgrind
</span><br>
<span class="quotelev1">&gt; my program runs past this point just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Strange.  I can't think of an immediate reason as to why this would  
<br>
happen -- does it also happen if you use a blocking send (vs. an  
<br>
Isend)?  Is myinfo a complex object, or a variable-length object?
<br>
<p><span class="quotelev1">&gt; I am currently using openmpi 1.3 from the debian unstable branch.  I
</span><br>
<span class="quotelev1">&gt; also see the same type of segfault in a different portion of the code
</span><br>
<span class="quotelev1">&gt; involving an MPI_Allgather which can be seen below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================
</span><br>
<span class="quotelev1">&gt; ==22736== Use of uninitialised value of size 8
</span><br>
<span class="quotelev1">&gt; ==22736==    at 0x19104775: mca_btl_sm_component_progress  
</span><br>
<span class="quotelev1">&gt; (opal_list.h:322)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x1382CE09: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0xB404264: ompi_request_default_wait_all  
</span><br>
<span class="quotelev1">&gt; (condition.h:99)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x1A1ADC16: ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev1">&gt; (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x1A1B61E1: ompi_coll_tuned_allgatherv_intra_bruck
</span><br>
<span class="quotelev1">&gt; (coll_tuned_util.h:60)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0xB418B2E: PMPI_Allgatherv (pallgatherv.c:121)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x646CCF7: Uintah::Level::setBCTypes() (Level.cc:728)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x646D823: Uintah::Level::finalizeLevel() (Level.cc: 
</span><br>
<span class="quotelev1">&gt; 537)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x6465457:
</span><br>
<span class="quotelev1">&gt; Uintah::Grid::problemSetup(Uintah::Handle&lt;Uintah::ProblemSpec&gt; const&amp;,
</span><br>
<span class="quotelev1">&gt; Uintah::ProcessorGroup const*, bool) (Grid.cc:866)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x8345759: Uintah::SimulationController::gridSetup()
</span><br>
<span class="quotelev1">&gt; (SimulationController.cc:243)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x834F418: Uintah::AMRSimulationController::run()
</span><br>
<span class="quotelev1">&gt; (AMRSimulationController.cc:117)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x4089AE: main (sus.cc:629)
</span><br>
<span class="quotelev1">&gt; ==22736==
</span><br>
<span class="quotelev1">&gt; ==22736== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==22736==    at 0x19104775: mca_btl_sm_component_progress  
</span><br>
<span class="quotelev1">&gt; (opal_list.h:322)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x1382CE09: opal_progress (opal_progress.c:207)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0xB404264: ompi_request_default_wait_all  
</span><br>
<span class="quotelev1">&gt; (condition.h:99)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x1A1ADC16: ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev1">&gt; (coll_tuned_util.c:55)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x1A1B61E1: ompi_coll_tuned_allgatherv_intra_bruck
</span><br>
<span class="quotelev1">&gt; (coll_tuned_util.h:60)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0xB418B2E: PMPI_Allgatherv (pallgatherv.c:121)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x646CCF7: Uintah::Level::setBCTypes() (Level.cc:728)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x646D823: Uintah::Level::finalizeLevel() (Level.cc: 
</span><br>
<span class="quotelev1">&gt; 537)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x6465457:
</span><br>
<span class="quotelev1">&gt; Uintah::Grid::problemSetup(Uintah::Handle&lt;Uintah::ProblemSpec&gt; const&amp;,
</span><br>
<span class="quotelev1">&gt; Uintah::ProcessorGroup const*, bool) (Grid.cc:866)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x8345759: Uintah::SimulationController::gridSetup()
</span><br>
<span class="quotelev1">&gt; (SimulationController.cc:243)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x834F418: Uintah::AMRSimulationController::run()
</span><br>
<span class="quotelev1">&gt; (AMRSimulationController.cc:117)
</span><br>
<span class="quotelev1">&gt; ==22736==    by 0x4089AE: main (sus.cc:629)
</span><br>
<span class="quotelev1">&gt; ================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are these problems with openmpi and is there any known work arounds?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>These are new to me.  The problem does seem to occur with OMPI's  
<br>
shared memory device; you might want to try a different point-to-point  
<br>
device (e.g., tcp?) to see if the problem goes away.  But be aware  
<br>
that the problem &quot;going away&quot; does not really pinpoint the location of  
<br>
the problem -- moving to a slower transport (like tcp) may simply  
<br>
change timing such that the problem does not occur.  I.e., the problem  
<br>
could still exist in either your code or OMPI -- this would simply be  
<br>
a workaround.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9896.php">Jeff Squyres: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9894.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>In reply to:</strong> <a href="9871.php">Justin: "[OMPI users] Segfault when using valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9900.php">Justin Luitjens: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>Reply:</strong> <a href="9900.php">Justin Luitjens: "Re: [OMPI users] Segfault when using valgrind"</a>
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
