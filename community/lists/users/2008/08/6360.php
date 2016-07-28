<?
$subject_val = "Re: [OMPI users] problem with alltoall with ppn=8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 08:03:36 2008" -->
<!-- isoreceived="20080816120336" -->
<!-- sent="Sat, 16 Aug 2008 08:03:29 -0400" -->
<!-- isosent="20080816120329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with alltoall with ppn=8" -->
<!-- id="604D05AF-1D51-49DC-AF5E-53DE86CBB9F9_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="CC86E164E4091C4D88A62DADB4AC6479014CA6AE_at_exchange06.fed.cclrc.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with alltoall with ppn=8<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 08:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Previous message:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="6355.php">Kozin, I \(Igor\): "[OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are likely many issues going on here:
<br>
<p>- large all to all operations are very stressful on the network, even  
<br>
if you have very low latency / high bandwidth networking such as DDR IB
<br>
<p>- if you only have 1 IB HCA in a machine with 8 cores, the problem  
<br>
becomes even more difficult because all 8 of your MPI processes will  
<br>
be hammering the HCA with read and write requests; it's a simple I/O  
<br>
resource contention issue
<br>
<p>- there are several different algorithms in Open MPI for performing  
<br>
alltoall, but they were not tuned for ppn&gt;4 (honestly, they were tuned  
<br>
for ppn=1, but they still usually work &quot;well enough&quot; for ppn&lt;=4).  In  
<br>
Open MPI v1.3, we introduce the &quot;hierarch&quot; collective module, which  
<br>
should greatly help with ppn&gt;4 kinds of scenarios for collectives  
<br>
(including, at least to some degree, all to all)
<br>
<p>- per the &quot;sm&quot; thread, you might want to try with just IB (and not  
<br>
shared memory), just to see if that helps (I don't expect that it  
<br>
will, but every situation is different).  Try running &quot;mpirun --mca  
<br>
btl openib ...&quot; (vs. &quot;--mca btl ^tcp&quot;).
<br>
<p><p><p>On Aug 15, 2008, at 5:00 PM, Kozin, I (Igor) wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I would really appreciate any advice on troubleshooting/tuning Open  
</span><br>
<span class="quotelev1">&gt; MPI over ConnectX. More details about our setup can be found here <a href="http://www.cse.scitech.ac.uk/disco/database/search-machine.php?MID=52">http://www.cse.scitech.ac.uk/disco/database/search-machine.php?MID=52</a> 
</span><br>
<span class="quotelev1">&gt;  Single process per node (ppn=1) seems to be fine (the results for  
</span><br>
<span class="quotelev1">&gt; IMB can be found here <a href="http://www.cse.scitech.ac.uk/disco/database/search-pmb.php">http://www.cse.scitech.ac.uk/disco/database/search-pmb.php</a>) 
</span><br>
<span class="quotelev1">&gt;  However there is a problem with Alltoall and ppn=8
</span><br>
<span class="quotelev1">&gt; mpiexec --mca btl ^tcp  -machinefile hosts32x8.txt -n 128 src/IMB- 
</span><br>
<span class="quotelev1">&gt; MPI1.openmpi -npmin 128 Alltoall
</span><br>
<span class="quotelev1">&gt;       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;            0         1000         0.01         0.02         0.01
</span><br>
<span class="quotelev1">&gt;            1         1000        95.70        95.87        95.81
</span><br>
<span class="quotelev1">&gt;            2         1000       107.59       107.64       107.62
</span><br>
<span class="quotelev1">&gt;            4         1000       108.46       108.52       108.49
</span><br>
<span class="quotelev1">&gt;            8         1000       112.25       112.30       112.28
</span><br>
<span class="quotelev1">&gt;           16         1000       121.07       121.12       121.10
</span><br>
<span class="quotelev1">&gt;           32         1000       154.12       154.18       154.15
</span><br>
<span class="quotelev1">&gt;           64         1000       207.85       207.93       207.89
</span><br>
<span class="quotelev1">&gt;          128         1000       334.52       334.63       334.58
</span><br>
<span class="quotelev1">&gt;          256         1000      9303.66      9305.98      9304.99
</span><br>
<span class="quotelev1">&gt;          512         1000      8953.59      8955.71      8955.08
</span><br>
<span class="quotelev1">&gt;         1024         1000      8607.87      8608.78      8608.42
</span><br>
<span class="quotelev1">&gt;         2048         1000      8642.59      8643.30      8643.03
</span><br>
<span class="quotelev1">&gt;         4096         1000      8478.45      8478.64      8478.58
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve tried playing with various parameters but to no avail. The step  
</span><br>
<span class="quotelev1">&gt; up for the same message size is noticeable for n=64 and 32 as well  
</span><br>
<span class="quotelev1">&gt; but progressively less so. Even more surprising is the fact that  
</span><br>
<span class="quotelev1">&gt; Gigabit performs better for this message size.
</span><br>
<span class="quotelev1">&gt; mpiexec --mca btl self,sm,tcp --mca btl_tcp_if_include eth1 - 
</span><br>
<span class="quotelev1">&gt; machinefile hosts32x8.txt -n 128 src/IMB-MPI1.openmpi -npmin 128  
</span><br>
<span class="quotelev1">&gt; Alltoall
</span><br>
<span class="quotelev1">&gt;            8         1000       598.66       599.11       598.95
</span><br>
<span class="quotelev1">&gt;           16         1000       723.07       723.48       723.29
</span><br>
<span class="quotelev1">&gt;           32         1000      1144.79      1145.46      1145.18
</span><br>
<span class="quotelev1">&gt;           64         1000      1850.25      1850.97      1850.66
</span><br>
<span class="quotelev1">&gt;          128         1000      3794.32      3795.23      3794.82
</span><br>
<span class="quotelev1">&gt;          256         1000      5653.55      5653.97      5653.81
</span><br>
<span class="quotelev1">&gt;          512         1000      7107.96      7109.90      7109.66
</span><br>
<span class="quotelev1">&gt;         1024         1000     10310.53     10315.90     10315.63
</span><br>
<span class="quotelev1">&gt;         2048         1000    350066.92    350152.90    350091.89
</span><br>
<span class="quotelev1">&gt;         4096         1000     42238.60     42239.53     42239.27
</span><br>
<span class="quotelev1">&gt;         8192         1000    112781.11    112782.55    112782.10
</span><br>
<span class="quotelev1">&gt;        16384         1000   2450606.75   2450625.01   2450617.86
</span><br>
<span class="quotelev1">&gt; Unfortunately this task never completes&#133;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance. Sorry for the long post.
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS  I&#146;m following the discussion on slow sm btl but not sure if this  
</span><br>
<span class="quotelev1">&gt; particular problem is related or not. BTW the Open MPI build I&#146;m  
</span><br>
<span class="quotelev1">&gt; using is for Intel compiler.
</span><br>
<span class="quotelev1">&gt; PPS MVAPICH and MVAPICH2 behave much better but not perfect too.  
</span><br>
<span class="quotelev1">&gt; Unfortunately I have other problems with them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I. Kozin  (i.kozin at dl.ac.uk)
</span><br>
<span class="quotelev1">&gt; STFC Daresbury Laboratory, WA4 4AD, UK
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.clrc.ac.uk/disco">http://www.cse.clrc.ac.uk/disco</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6361.php">Jeff Squyres: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Previous message:</strong> <a href="6359.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault (11) Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="6355.php">Kozin, I \(Igor\): "[OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
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
