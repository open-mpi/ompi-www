<?
$subject_val = "Re: [OMPI devel] Checkpoint/restart question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 08:44:52 2010" -->
<!-- isoreceived="20100826124452" -->
<!-- sent="Thu, 26 Aug 2010 08:44:41 -0400" -->
<!-- isosent="20100826124441" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Checkpoint/restart question" -->
<!-- id="C64806BD-3C2E-4E51-9CCC-0A66D83C6B85_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.58.1008260121100.23969_at_kcse01.nada.kth.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Checkpoint/restart question<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 08:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8379.php">Joshua Hursey: "Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>In reply to:</strong> <a href="8366.php">Tomas Oppelstrup: "[OMPI devel] Checkpoint/restart question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not played with the Condor checkpoint/restart library in quite some time. Supporting it should be fairly straight forward though (though the devil is always in the details with such things).
<br>
<p>In Open MPI, all of the code to support checkpoint/restart services like BLCR or condor is part of a framework component in OPAL called CRS (for Checkpoint/Restart Service). To support a new checkpointer you will need to develop a new component under opal/mca/crs/. If you are (or someone you know is) interested in doing the development, you should be able to use the BLCR module to help guide you through the details.
<br>
<p>This integration would allow you to use all of the Open MPI's current C/R infrastructure just with the Condor C/R library capturing the per process checkpoints. Storage and coordination is handled in other frameworks in the Open MPI environment so you should not need to worry about that at this level.
<br>
<p>If you have any questions let me know and I can try to help you navigate the code base.
<br>
<p>-- Josh
<br>
<p>On Aug 25, 2010, at 7:36 PM, Tomas Oppelstrup wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a question about checkpoint-restart operation with opem-mpi. I
</span><br>
<span class="quotelev1">&gt; hope this is an apropriate forum for my question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not have access to recopmile the kernel or load kernel modules,
</span><br>
<span class="quotelev1">&gt; so I would like to use the condor checkpoint-restart library. Can
</span><br>
<span class="quotelev1">&gt; that me made to work with openmpi's checkpoint-restart
</span><br>
<span class="quotelev1">&gt; infrastructure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The condor library, upon recept of a signal or calling its checkpoint
</span><br>
<span class="quotelev1">&gt; function from within the program, generates a file containing the
</span><br>
<span class="quotelev1">&gt; complete (as complete as possible) state of the process, including
</span><br>
<span class="quotelev1">&gt; the state of libraries, e.g. openmpi. On restart, the process
</span><br>
<span class="quotelev1">&gt; image/state is loaded into memory and execution is resumed at the
</span><br>
<span class="quotelev1">&gt; checkpoint location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On restart, I assume that some information in the mpi-state may need
</span><br>
<span class="quotelev1">&gt; to be reinitalized, since e.g. the names of the hosts of the
</span><br>
<span class="quotelev1">&gt; mpi-process, and pids of possible support processes will have
</span><br>
<span class="quotelev1">&gt; changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this tricky to fix (that code must somehow be there for the BLCR
</span><br>
<span class="quotelev1">&gt; compatibility)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps it can be achieved by (in violation of the mpi-standard)
</span><br>
<span class="quotelev1">&gt; calling MPI_Finalize before the checkpoint, and MPI_Init after
</span><br>
<span class="quotelev1">&gt; restart? This seems like a conceptually appealing solution, but may
</span><br>
<span class="quotelev1">&gt; not be allowed nor to the correct thing in openmpi?!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks for any ideas/help/pointers to more information!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Tomas
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8379.php">Joshua Hursey: "Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>Previous message:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>In reply to:</strong> <a href="8366.php">Tomas Oppelstrup: "[OMPI devel] Checkpoint/restart question"</a>
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
