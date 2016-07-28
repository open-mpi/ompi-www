<?
$subject_val = "Re: [OMPI users] Compiling ompi for use on another machine";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 12:28:47 2009" -->
<!-- isoreceived="20090314162847" -->
<!-- sent="Sat, 14 Mar 2009 10:28:42 -0600" -->
<!-- isosent="20090314162842" -->
<!-- name="ben rodriguez" -->
<!-- email="bramber_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling ompi for use on another machine" -->
<!-- id="COL106-W35222EA702909C12E35D4CA9D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49BB73D4.2050503_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling ompi for use on another machine<br>
<strong>From:</strong> ben rodriguez (<em>bramber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 12:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8451.php">Ted Yu: "[OMPI users] core dump while running openmpi"</a>
<li><strong>Previous message:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8440.php">Raymond Wan: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Reply:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both machines are x86_64, although one is a single quad core and the other is a dual quad core, the RH installs are the same. ompi and the other program were both statically linked. After the compiles I copied the target dirs to the new machine and hoped they would run, the program I wish to run passes all its self tests except the parallel ones. One thing is that there is a previous install of opmi on the machine, ideally I woulkd like to keep that installed as it runs with other stuff. The reason I am doing this is because I have the optimized compiler installed on only one machine. I will try np -1. 
<br>
<p>Ben   
<br>
<p><span class="quotelev1">&gt; Date: Sat, 14 Mar 2009 18:07:32 +0900
</span><br>
<span class="quotelev1">&gt; From: rwan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Compiling ompi for use on another machine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ben,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ben rodriguez wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have compiled ompi and another program for use on another rhel5/x86_64 machine, after transfering the binaries and setting up environment variables is there anything else I need to do for ompi to run properly? When executing my prog I get:
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev2">&gt; &gt; with errorcode 1.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt; &gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt; &gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a few thoughts about your problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are the two machines identical in architecture and RH installation?  Is there any reason why you cannot compile on the other machine too?  (Sometimes the location of dynamic libraries, etc. changes so I try to make a note to always recompile on each machine.)  Are you having problems running your program on each node individually first?  If not, you might try that first (i.e., with &quot;--np 1&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ray
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
<p>_________________________________________________________________
<br>
Express your personality in color! Preview and select themes for Hotmail&#174;. 
<br>
<a href="http://www.windowslive-hotmail.com/LearnMore/personalize.aspx?ocid=TXT_MSGTX_WL_HM_express_032009#colortheme">http://www.windowslive-hotmail.com/LearnMore/personalize.aspx?ocid=TXT_MSGTX_WL_HM_express_032009#colortheme</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8451.php">Ted Yu: "[OMPI users] core dump while running openmpi"</a>
<li><strong>Previous message:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8440.php">Raymond Wan: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Reply:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
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
