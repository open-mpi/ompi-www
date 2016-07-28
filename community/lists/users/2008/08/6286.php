<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 03:28:05 2008" -->
<!-- isoreceived="20080807072805" -->
<!-- sent="Thu, 07 Aug 2008 17:27:39 +1000" -->
<!-- isosent="20080807072739" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="1218094060.5590.73.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="OF7750E814.13F04D7B-ONC125749E.0027A84C-C125749E.002852ED_at_offis.uni-oldenburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 03:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak for Jeff, but my understanding of the changes for 1.3
<br>
should allow you to switch off the memory manager when running your
<br>
checks.
<br>
<p>It seems to me an obvious interim solution would be to have two versions
<br>
of OpenMPI installed, one with and one without the memory manager.  Use
<br>
one for debugging, and (if desired) the pinning-capable version for
<br>
production.
<br>
<p><p>On Thu, 2008-08-07 at 09:20 +0200, Jan Ploski wrote:
<br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] schrieb am 08/06/2008 07:44:03 PM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 6, 2008, at 12:37 PM, Jan Ploski wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm using the latest of Open MPI compiled with debug turned on, and 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; valgrind 3.3.0. From your trace it looks like there is a conflict 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; between two memory managers. I'm not having the same problem as I 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; disable the Open MPI memory manager on my builds (configure option 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --without-memory-manager).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for the tip! I confirm that the problem goes away after 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rebuilding --without-memory-manager.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As I also have the same problem in another cluster, I'd like to know 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; what side effects using this configuration option might have before 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; suggesting it as a solution to that cluster's admin. I didn't find 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; an explanation of what it does in the FAQ (beyond a recommendation 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to use it for static builds). Could you please explain this option, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; especially why one might want to *not* use it?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is on my to-do list (add this to the FAQ); sorry it isn't done yet.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here's a recent post where I've explained it a bit more:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/users/2008/07/6161.php">http://www.open-mpi.org/community/lists/users/2008/07/6161.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if you'd like to know more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for this explanation. According to what you wrote, 
</span><br>
<span class="quotelev1">&gt; --without-memory-manager can make my and other applications run 
</span><br>
<span class="quotelev1">&gt; significantly slower. While I can find out just how much for my app, I 
</span><br>
<span class="quotelev1">&gt; hardly can do it for other (unknown) users. So it would be nice if my heap 
</span><br>
<span class="quotelev1">&gt; profiling problem could be resolved in another way in the future. Is the 
</span><br>
<span class="quotelev1">&gt; planned mpi_leave_pinned change in v1.3 going to correct it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jan Ploski
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. (FH) Jan Ploski
</span><br>
<span class="quotelev1">&gt; OFFIS
</span><br>
<span class="quotelev1">&gt; FuE Bereich Energie | R&amp;D Division Energy
</span><br>
<span class="quotelev1">&gt; Escherweg 2  - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; Phone/Fax: +49 441 9722 - 184 / 202
</span><br>
<span class="quotelev1">&gt; E-Mail: Jan.Ploski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://www.offis.de">http://www.offis.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6285.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6287.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
