<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 03:20:52 2008" -->
<!-- isoreceived="20080807072052" -->
<!-- sent="Thu, 7 Aug 2008 09:20:26 +0200" -->
<!-- isosent="20080807072026" -->
<!-- name="Jan Ploski" -->
<!-- email="Jan.Ploski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="OF7750E814.13F04D7B-ONC125749E.0027A84C-C125749E.002852ED_at_offis.uni-oldenburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6DA584B0-F402-46BB-AEC4-F74BA0FFF1C6_at_cisco.com" -->
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
<strong>From:</strong> Jan Ploski (<em>Jan.Ploski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 03:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6284.php">Dave Grote: "[OMPI users] memory leak in alltoallw"</a>
<li><strong>In reply to:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-bounces_at_[hidden] schrieb am 08/06/2008 07:44:03 PM:
<br>
<p><span class="quotelev1">&gt; On Aug 6, 2008, at 12:37 PM, Jan Ploski wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using the latest of Open MPI compiled with debug turned on, and 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; valgrind 3.3.0. From your trace it looks like there is a conflict 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between two memory managers. I'm not having the same problem as I 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; disable the Open MPI memory manager on my builds (configure option 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --without-memory-manager).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the tip! I confirm that the problem goes away after 
</span><br>
<span class="quotelev2">&gt; &gt; rebuilding --without-memory-manager.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I also have the same problem in another cluster, I'd like to know 
</span><br>
<span class="quotelev2">&gt; &gt; what side effects using this configuration option might have before 
</span><br>
<span class="quotelev2">&gt; &gt; suggesting it as a solution to that cluster's admin. I didn't find 
</span><br>
<span class="quotelev2">&gt; &gt; an explanation of what it does in the FAQ (beyond a recommendation 
</span><br>
<span class="quotelev2">&gt; &gt; to use it for static builds). Could you please explain this option, 
</span><br>
<span class="quotelev2">&gt; &gt; especially why one might want to *not* use it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is on my to-do list (add this to the FAQ); sorry it isn't done yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a recent post where I've explained it a bit more:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2008/07/6161.php">http://www.open-mpi.org/community/lists/users/2008/07/6161.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you'd like to know more.
</span><br>
<p>Jeff,
<br>
<p>Thanks for this explanation. According to what you wrote, 
<br>
--without-memory-manager can make my and other applications run 
<br>
significantly slower. While I can find out just how much for my app, I 
<br>
hardly can do it for other (unknown) users. So it would be nice if my heap 
<br>
profiling problem could be resolved in another way in the future. Is the 
<br>
planned mpi_leave_pinned change in v1.3 going to correct it?
<br>
<p>Regards,
<br>
Jan Ploski
<br>
<p><pre>
--
Dipl.-Inform. (FH) Jan Ploski
OFFIS
FuE Bereich Energie | R&amp;D Division Energy
Escherweg 2  - 26121 Oldenburg - Germany
Phone/Fax: +49 441 9722 - 184 / 202
E-Mail: Jan.Ploski_at_[hidden]
URL: <a href="http://www.offis.de">http://www.offis.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6284.php">Dave Grote: "[OMPI users] memory leak in alltoallw"</a>
<li><strong>In reply to:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
