<?
$subject_val = "[OMPI users] problem with alltoall with ppn=8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 17:01:02 2008" -->
<!-- isoreceived="20080815210102" -->
<!-- sent="Fri, 15 Aug 2008 22:00:56 +0100" -->
<!-- isosent="20080815210056" -->
<!-- name="Kozin, I \(Igor\)" -->
<!-- email="i.kozin_at_[hidden]" -->
<!-- subject="[OMPI users] problem with alltoall with ppn=8" -->
<!-- id="CC86E164E4091C4D88A62DADB4AC6479014CA6AE_at_exchange06.fed.cclrc.ac.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem with alltoall with ppn=8<br>
<strong>From:</strong> Kozin, I \(Igor\) (<em>i.kozin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 17:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6356.php">Hartzman, Les (MS): "[OMPI users] Newbie: API usage"</a>
<li><strong>Previous message:</strong> <a href="6354.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6357.php">Daniël Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6357.php">Daniël Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I would really appreciate any advice on troubleshooting/tuning Open MPI over ConnectX. More details about our setup can be found here <a href="http://www.cse.scitech.ac.uk/disco/database/search-machine.php?MID=52">http://www.cse.scitech.ac.uk/disco/database/search-machine.php?MID=52</a> Single process per node (ppn=1) seems to be fine (the results for IMB can be found here <a href="http://www.cse.scitech.ac.uk/disco/database/search-pmb.php">http://www.cse.scitech.ac.uk/disco/database/search-pmb.php</a>) However there is a problem with Alltoall and ppn=8
<br>
mpiexec --mca btl ^tcp  -machinefile hosts32x8.txt -n 128 src/IMB-MPI1.openmpi -npmin 128 Alltoall
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.01         0.02         0.01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        95.70        95.87        95.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000       107.59       107.64       107.62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000       108.46       108.52       108.49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000       112.25       112.30       112.28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000       121.07       121.12       121.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000       154.12       154.18       154.15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000       207.85       207.93       207.89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000       334.52       334.63       334.58
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000      9303.66      9305.98      9304.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000      8953.59      8955.71      8955.08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000      8607.87      8608.78      8608.42
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000      8642.59      8643.30      8643.03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000      8478.45      8478.64      8478.58
<br>
<p>I&#146;ve tried playing with various parameters but to no avail. The step up for the same message size is noticeable for n=64 and 32 as well but progressively less so. Even more surprising is the fact that Gigabit performs better for this message size.
<br>
mpiexec --mca btl self,sm,tcp --mca btl_tcp_if_include eth1 -machinefile hosts32x8.txt -n 128 src/IMB-MPI1.openmpi -npmin 128 Alltoall
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000       598.66       599.11       598.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000       723.07       723.48       723.29
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000      1144.79      1145.46      1145.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000      1850.25      1850.97      1850.66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000      3794.32      3795.23      3794.82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000      5653.55      5653.97      5653.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000      7107.96      7109.90      7109.66
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000     10310.53     10315.90     10315.63
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000    350066.92    350152.90    350091.89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000     42238.60     42239.53     42239.27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000    112781.11    112782.55    112782.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000   2450606.75   2450625.01   2450617.86
<br>
Unfortunately this task never completes&#133;
<br>
<p>Thanks in advance. Sorry for the long post.
<br>
Igor 
<br>
<p>PS  I&#146;m following the discussion on slow sm btl but not sure if this particular problem is related or not. BTW the Open MPI build I&#146;m using is for Intel compiler. 
<br>
PPS MVAPICH and MVAPICH2 behave much better but not perfect too. Unfortunately I have other problems with them.
<br>
<p><p>I. Kozin  (i.kozin at dl.ac.uk)
<br>
STFC Daresbury Laboratory, WA4 4AD, UK
<br>
<a href="http://www.cse.clrc.ac.uk/disco">http://www.cse.clrc.ac.uk/disco</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6356.php">Hartzman, Les (MS): "[OMPI users] Newbie: API usage"</a>
<li><strong>Previous message:</strong> <a href="6354.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6357.php">Daniël Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6357.php">Daniël Mantione: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
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
