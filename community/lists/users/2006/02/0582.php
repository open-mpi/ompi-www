<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb  5 13:38:47 2006" -->
<!-- isoreceived="20060205183847" -->
<!-- sent="Sun, 5 Feb 2006 11:38:41 -0700" -->
<!-- isosent="20060205183841" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open-MPI all-to-all performance" -->
<!-- id="6F9DB1D3-C7FD-4E0D-A0F6-213109CF01BE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060204163753.15493.qmail_at_web52013.mail.yahoo.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-05 13:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0583.php">m listus: "[O-MPI users] ft state in ompi"</a>
<li><strong>Previous message:</strong> <a href="0581.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>In reply to:</strong> <a href="0579.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0585.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0585.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Konstantin,
<br>
<p><span class="quotelev1">&gt; MPI_Alltoall_Isend_Irecv
</span><br>
<p>This is a very unscalable algorithm in skampi as it simply posts N  
<br>
MPI_Irecv's and MPI_Isend's and then does a Waitall. We shouldn't  
<br>
have an issue though on 8 procs but in general I would expect the  
<br>
performance of this  algorithm to degrade quite quickly especially  
<br>
compared to Open MPI's tuned collectives. I can dig into this a bit  
<br>
more if you send me your .skampi file configured to run this  
<br>
particular benchmark.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Feb 4, 2006, at 9:37 AM, Konstantin Kudin wrote:
<br>
<p><span class="quotelev1">&gt;  Dear Jeff and Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have tried openmpi-1.1a1r8890. The good news is that it seems like
</span><br>
<span class="quotelev1">&gt; the freaky long latencies for certain packet sizes went away with the
</span><br>
<span class="quotelev1">&gt; options they showed up with before. Also, one version of all-to-all
</span><br>
<span class="quotelev1">&gt; appears to behave nicer with a specified set of parameters. However, I
</span><br>
<span class="quotelev1">&gt; still get only 1cpu performance out of 8 with the actual application,
</span><br>
<span class="quotelev1">&gt; and all this time is spent doing parallel FFTs. What is interesting is
</span><br>
<span class="quotelev1">&gt; that even with the tuned parameters, the other version of all-to-all
</span><br>
<span class="quotelev1">&gt; still performs quite poorly (see below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone 1 skampi41
</span><br>
<span class="quotelev1">&gt;        2     272.1      3.7      8     272.1      3.7      8
</span><br>
<span class="quotelev1">&gt;        3    1800.5     72.9      8    1800.5     72.9      8
</span><br>
<span class="quotelev1">&gt;        4    3074.0     61.0      8    3074.0     61.0      8
</span><br>
<span class="quotelev1">&gt;        5    5705.5    102.0      8    5705.5    102.0      8
</span><br>
<span class="quotelev1">&gt;        6    8054.2    282.3      8    8054.2    282.3      8
</span><br>
<span class="quotelev1">&gt;        7    9462.9    104.2      8    9462.9    104.2      8
</span><br>
<span class="quotelev1">&gt;        8   11245.8     66.9      8   11245.8     66.9      8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
</span><br>
<span class="quotelev1">&gt; mpi_paffinity_alone 1  -mca coll_basic_crossover 8 skampi41
</span><br>
<span class="quotelev1">&gt;        2     267.7      1.5      8     267.7      1.5      8
</span><br>
<span class="quotelev1">&gt;        3    1591.2      8.4      8    1591.2      8.4      8
</span><br>
<span class="quotelev1">&gt;        4    2704.4     17.1      8    2704.4     17.1      8
</span><br>
<span class="quotelev1">&gt;        5    4813.7    307.9      3    4813.7    307.9      3
</span><br>
<span class="quotelev1">&gt;        6    5329.1     57.0      2    5329.1     57.0      2
</span><br>
<span class="quotelev1">&gt;        7  198767.6  49076.2      5  198767.6  49076.2      5
</span><br>
<span class="quotelev1">&gt;        8  254832.6  11235.3      5  254832.6  11235.3      5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Still poor performance:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #/*@insyncol_MPI_Alltoall_Isend_Irecv-nodes-long-SM.ski*/
</span><br>
<span class="quotelev1">&gt;        2     235.0      0.7      8     235.0      0.7      8
</span><br>
<span class="quotelev1">&gt;        3    1565.6     15.3      8    1565.6     15.3      8
</span><br>
<span class="quotelev1">&gt;        4    2694.8     24.3      8    2694.8     24.3      8
</span><br>
<span class="quotelev1">&gt;        5   11389.9   6971.9      6   11389.9   6971.9      6
</span><br>
<span class="quotelev1">&gt;        6  249612.0  21102.1      2  249612.0  21102.1      2
</span><br>
<span class="quotelev1">&gt;        7  239051.9   3915.0      2  239051.9   3915.0      2
</span><br>
<span class="quotelev1">&gt;        8  262356.5  12324.6      2  262356.5  12324.6      2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Kostya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings Konstantin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for this report.  Another user submitted almost the same
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; issue earlier today (poor performance of Open MPI 1.0.x collectives;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; see <a href="http://www.open-mpi.org/community/lists/users/2006/02/0558.php">http://www.open-mpi.org/community/lists/users/2006/02/0558.php</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me provide an additional clarification on Galen's reply:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The collectives in Open MPI 1.0.x are known to be sub-optimal -- they
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; return correct results, but they are not optimized at all.  This is
</span><br>
<span class="quotelev2">&gt;&gt; what Galen meant by &quot;If I use the basic collectives then things do
</span><br>
<span class="quotelev2">&gt;&gt; fall apart with long messages, but this is expected&quot;.  The
</span><br>
<span class="quotelev2">&gt;&gt; collectives in the Open MPI 1.1.x series (i.e., our current
</span><br>
<span class="quotelev2">&gt;&gt; development trunk) provide *much* better performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen ran his tests using the &quot;tuned&quot; collective module in the 1.1.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; series -- these are the &quot;better&quot; collectives that I referred to
</span><br>
<span class="quotelev2">&gt;&gt; above.  This &quot;tuned&quot; module does not exist in the 1.0.x series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can download a 1.1.x nightly snapshot -- including the new
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tuned&quot; module -- from here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you get the opportunity, could you re-try your application with a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.1 snapshot?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<li><strong>Next message:</strong> <a href="0583.php">m listus: "[O-MPI users] ft state in ompi"</a>
<li><strong>Previous message:</strong> <a href="0581.php">Brian Barrett: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>In reply to:</strong> <a href="0579.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0585.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0585.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
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
