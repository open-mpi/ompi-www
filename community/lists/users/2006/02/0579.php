<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  4 11:38:01 2006" -->
<!-- isoreceived="20060204163801" -->
<!-- sent="Sat, 4 Feb 2006 08:37:53 -0800 (PST)" -->
<!-- isosent="20060204163753" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open-MPI all-to-all performance" -->
<!-- id="20060204163753.15493.qmail_at_web52013.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2D3EF6C7-F8FD-4667-A10B-F7BE5A26309A_at_open-mpi.org" -->
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
<strong>From:</strong> Konstantin Kudin (<em>konstantin_kudin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-04 11:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0580.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Dear Jeff and Galen,
<br>
<p>&nbsp;I have tried openmpi-1.1a1r8890. The good news is that it seems like
<br>
the freaky long latencies for certain packet sizes went away with the
<br>
options they showed up with before. Also, one version of all-to-all
<br>
appears to behave nicer with a specified set of parameters. However, I
<br>
still get only 1cpu performance out of 8 with the actual application,
<br>
and all this time is spent doing parallel FFTs. What is interesting is
<br>
that even with the tuned parameters, the other version of all-to-all
<br>
still performs quite poorly (see below).
<br>
<p>#/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
<br>
mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
<br>
mpi_paffinity_alone 1 skampi41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     272.1      3.7      8     272.1      3.7      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1800.5     72.9      8    1800.5     72.9      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    3074.0     61.0      8    3074.0     61.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    5705.5    102.0      8    5705.5    102.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6    8054.2    282.3      8    8054.2    282.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7    9462.9    104.2      8    9462.9    104.2      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8   11245.8     66.9      8   11245.8     66.9      8
<br>
<p>mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
<br>
mpi_paffinity_alone 1  -mca coll_basic_crossover 8 skampi41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     267.7      1.5      8     267.7      1.5      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1591.2      8.4      8    1591.2      8.4      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2704.4     17.1      8    2704.4     17.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    4813.7    307.9      3    4813.7    307.9      3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6    5329.1     57.0      2    5329.1     57.0      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  198767.6  49076.2      5  198767.6  49076.2      5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  254832.6  11235.3      5  254832.6  11235.3      5
<br>
<p>&nbsp;
<br>
&nbsp;Still poor performance:
<br>
<p>#/*@insyncol_MPI_Alltoall_Isend_Irecv-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     235.0      0.7      8     235.0      0.7      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1565.6     15.3      8    1565.6     15.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2694.8     24.3      8    2694.8     24.3      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5   11389.9   6971.9      6   11389.9   6971.9      6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  249612.0  21102.1      2  249612.0  21102.1      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  239051.9   3915.0      2  239051.9   3915.0      2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  262356.5  12324.6      2  262356.5  12324.6      2
<br>
<p><p>&nbsp;Kostya
<br>
<p>&nbsp;
<br>
<p><p>--- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings Konstantin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for this report.  Another user submitted almost the same 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; issue earlier today (poor performance of Open MPI 1.0.x collectives; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; see <a href="http://www.open-mpi.org/community/lists/users/2006/02/0558.php">http://www.open-mpi.org/community/lists/users/2006/02/0558.php</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me provide an additional clarification on Galen's reply:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The collectives in Open MPI 1.0.x are known to be sub-optimal -- they
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; return correct results, but they are not optimized at all.  This is  
</span><br>
<span class="quotelev1">&gt; what Galen meant by &quot;If I use the basic collectives then things do  
</span><br>
<span class="quotelev1">&gt; fall apart with long messages, but this is expected&quot;.  The  
</span><br>
<span class="quotelev1">&gt; collectives in the Open MPI 1.1.x series (i.e., our current  
</span><br>
<span class="quotelev1">&gt; development trunk) provide *much* better performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen ran his tests using the &quot;tuned&quot; collective module in the 1.1.x 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; series -- these are the &quot;better&quot; collectives that I referred to  
</span><br>
<span class="quotelev1">&gt; above.  This &quot;tuned&quot; module does not exist in the 1.0.x series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can download a 1.1.x nightly snapshot -- including the new  
</span><br>
<span class="quotelev1">&gt; &quot;tuned&quot; module -- from here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you get the opportunity, could you re-try your application with a 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.1 snapshot?
</span><br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0580.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0571.php">Jeff Squyres: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Reply:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
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
