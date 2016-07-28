<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  6 09:12:35 2006" -->
<!-- isoreceived="20060206141235" -->
<!-- sent="Mon, 6 Feb 2006 06:12:23 -0800 (PST)" -->
<!-- isosent="20060206141223" -->
<!-- name="Konstantin Kudin" -->
<!-- email="konstantin_kudin_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open-MPI all-to-all performance" -->
<!-- id="20060206141223.33917.qmail_at_web52010.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6F9DB1D3-C7FD-4E0D-A0F6-213109CF01BE_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-02-06 09:12:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0586.php">Glenn Morris: "[O-MPI users] mpirun sets umask to 0"</a>
<li><strong>Previous message:</strong> <a href="0584.php">Josh Hursey: "Re: [O-MPI users] ft state in ompi"</a>
<li><strong>In reply to:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0580.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Dear Galen,
<br>
<p>&nbsp;It actually turns out that there is a problem not only with
<br>
MPI_Alltoall_Isend_Irecv, but also with another related operation
<br>
insyncol_MPI_Alltoallv-nodes-long-SM.ski (this what seems to be holding
<br>
down the FFTs, I checked the source code, and it uses alltoallv):
<br>
<p>#/*@insyncol_MPI_Alltoallv-nodes-long-SM.ski*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     250.8      1.0      8     250.8      1.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3    1779.6     27.0      8    1779.6     27.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4    2975.1     45.8      8    2975.1     45.8      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5    4413.1     76.0      8    4413.1     76.0      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6   93370.6  42900.6      8   93370.6  42900.6      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  199634.4  43273.1      8  199634.4  43273.1      8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8  262469.6   5896.3      8  262469.6   5896.3      8
<br>
<p>&nbsp;The file .skampi I am using is the standard one that came with version
<br>
4.1, with only one notable change:
<br>
@STANDARDERRORDEFAULT 100.00
<br>
<p>&nbsp;Thanks!
<br>
&nbsp;Kostya
<br>
<p><p><p>--- &quot;Galen M. Shipman&quot; &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Konstantin,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Alltoall_Isend_Irecv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a very unscalable algorithm in skampi as it simply posts N  
</span><br>
<span class="quotelev1">&gt; MPI_Irecv's and MPI_Isend's and then does a Waitall. We shouldn't  
</span><br>
<span class="quotelev1">&gt; have an issue though on 8 procs but in general I would expect the  
</span><br>
<span class="quotelev1">&gt; performance of this  algorithm to degrade quite quickly especially  
</span><br>
<span class="quotelev1">&gt; compared to Open MPI's tuned collectives. I can dig into this a bit  
</span><br>
<span class="quotelev1">&gt; more if you send me your .skampi file configured to run this  
</span><br>
<span class="quotelev1">&gt; particular benchmark.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2006, at 9:37 AM, Konstantin Kudin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Dear Jeff and Galen,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I have tried openmpi-1.1a1r8890. The good news is that it seems
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev2">&gt; &gt; the freaky long latencies for certain packet sizes went away with
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; options they showed up with before. Also, one version of all-to-all
</span><br>
<span class="quotelev2">&gt; &gt; appears to behave nicer with a specified set of parameters.
</span><br>
<span class="quotelev1">&gt; However, I
</span><br>
<span class="quotelev2">&gt; &gt; still get only 1cpu performance out of 8 with the actual
</span><br>
<span class="quotelev1">&gt; application,
</span><br>
<span class="quotelev2">&gt; &gt; and all this time is spent doing parallel FFTs. What is interesting
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; that even with the tuned parameters, the other version of
</span><br>
<span class="quotelev1">&gt; all-to-all
</span><br>
<span class="quotelev2">&gt; &gt; still performs quite poorly (see below).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #/*@insyncol_MPI_Alltoall-nodes-long-SM.ski*/
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
</span><br>
<span class="quotelev2">&gt; &gt; mpi_paffinity_alone 1 skampi41
</span><br>
<span class="quotelev2">&gt; &gt;        2     272.1      3.7      8     272.1      3.7      8
</span><br>
<span class="quotelev2">&gt; &gt;        3    1800.5     72.9      8    1800.5     72.9      8
</span><br>
<span class="quotelev2">&gt; &gt;        4    3074.0     61.0      8    3074.0     61.0      8
</span><br>
<span class="quotelev2">&gt; &gt;        5    5705.5    102.0      8    5705.5    102.0      8
</span><br>
<span class="quotelev2">&gt; &gt;        6    8054.2    282.3      8    8054.2    282.3      8
</span><br>
<span class="quotelev2">&gt; &gt;        7    9462.9    104.2      8    9462.9    104.2      8
</span><br>
<span class="quotelev2">&gt; &gt;        8   11245.8     66.9      8   11245.8     66.9      8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 8 -mca btl tcp -mca coll self,basic,tuned -mca  \
</span><br>
<span class="quotelev2">&gt; &gt; mpi_paffinity_alone 1  -mca coll_basic_crossover 8 skampi41
</span><br>
<span class="quotelev2">&gt; &gt;        2     267.7      1.5      8     267.7      1.5      8
</span><br>
<span class="quotelev2">&gt; &gt;        3    1591.2      8.4      8    1591.2      8.4      8
</span><br>
<span class="quotelev2">&gt; &gt;        4    2704.4     17.1      8    2704.4     17.1      8
</span><br>
<span class="quotelev2">&gt; &gt;        5    4813.7    307.9      3    4813.7    307.9      3
</span><br>
<span class="quotelev2">&gt; &gt;        6    5329.1     57.0      2    5329.1     57.0      2
</span><br>
<span class="quotelev2">&gt; &gt;        7  198767.6  49076.2      5  198767.6  49076.2      5
</span><br>
<span class="quotelev2">&gt; &gt;        8  254832.6  11235.3      5  254832.6  11235.3      5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Still poor performance:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #/*@insyncol_MPI_Alltoall_Isend_Irecv-nodes-long-SM.ski*/
</span><br>
<span class="quotelev2">&gt; &gt;        2     235.0      0.7      8     235.0      0.7      8
</span><br>
<span class="quotelev2">&gt; &gt;        3    1565.6     15.3      8    1565.6     15.3      8
</span><br>
<span class="quotelev2">&gt; &gt;        4    2694.8     24.3      8    2694.8     24.3      8
</span><br>
<span class="quotelev2">&gt; &gt;        5   11389.9   6971.9      6   11389.9   6971.9      6
</span><br>
<span class="quotelev2">&gt; &gt;        6  249612.0  21102.1      2  249612.0  21102.1      2
</span><br>
<span class="quotelev2">&gt; &gt;        7  239051.9   3915.0      2  239051.9   3915.0      2
</span><br>
<span class="quotelev2">&gt; &gt;        8  262356.5  12324.6      2  262356.5  12324.6      2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Kostya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Greetings Konstantin.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Many thanks for this report.  Another user submitted almost the
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issue earlier today (poor performance of Open MPI 1.0.x
</span><br>
<span class="quotelev1">&gt; collectives;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/02/0558.php">http://www.open-mpi.org/community/lists/users/2006/02/0558.php</a>).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Let me provide an additional clarification on Galen's reply:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The collectives in Open MPI 1.0.x are known to be sub-optimal --
</span><br>
<span class="quotelev1">&gt; they
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; return correct results, but they are not optimized at all.  This
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; what Galen meant by &quot;If I use the basic collectives then things do
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fall apart with long messages, but this is expected&quot;.  The
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collectives in the Open MPI 1.1.x series (i.e., our current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; development trunk) provide *much* better performance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Galen ran his tests using the &quot;tuned&quot; collective module in the
</span><br>
<span class="quotelev1">&gt; 1.1.x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; series -- these are the &quot;better&quot; collectives that I referred to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; above.  This &quot;tuned&quot; module does not exist in the 1.0.x series.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can download a 1.1.x nightly snapshot -- including the new
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;tuned&quot; module -- from here:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 	<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you get the opportunity, could you re-try your application with
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.1 snapshot?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; __________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Do You Yahoo!?
</span><br>
<span class="quotelev2">&gt; &gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><p><p>__________________________________________________
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
<li><strong>Next message:</strong> <a href="0586.php">Glenn Morris: "[O-MPI users] mpirun sets umask to 0"</a>
<li><strong>Previous message:</strong> <a href="0584.php">Josh Hursey: "Re: [O-MPI users] ft state in ompi"</a>
<li><strong>In reply to:</strong> <a href="0582.php">Galen M. Shipman: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0580.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
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
