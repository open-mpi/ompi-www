<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 15 10:18:13 2006" -->
<!-- isoreceived="20060615141813" -->
<!-- sent="Thu, 15 Jun 2006 16:18:06 +0200" -->
<!-- isosent="20060615141806" -->
<!-- name="Martin Schaff&#195;&#182;ner" -->
<!-- email="martin.schaffoener_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface" -->
<!-- id="200606151618.06625.martin.schaffoener_at_e-technik.uni-magdeburg.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="690642A4-6DB1-4C3A-B3AF-843AF5C5FAA0_at_umich.edu" -->
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
<strong>From:</strong> Martin Schaff&#195;&#182;ner (<em>martin.schaffoener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-15 10:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1425.php">Anoop Rajendra: "[OMPI users] SEGV_MAPERR during execution"</a>
<li><strong>Previous message:</strong> <a href="1423.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>In reply to:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 15 June 2006 16:05, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I dont know about ompi-1.0.3 snapshots,  but we use ompi-1.0.2 with
</span><br>
<span class="quotelev1">&gt; both torque-2.0.0p8 and torque-2.1.0p0 using the tm interface without
</span><br>
<span class="quotelev1">&gt; any problems.
</span><br>
<p>Hm, I just went for the 1.0.3 snapshots cause I couldn't get it to work with 
<br>
1.0.2 so I thought I'd go for the latest and greatest.
<br>
<p><span class="quotelev1">&gt; Are you using PBSPro?  OpenPBS?
</span><br>
<p>No, I'm using torque 2.1.1 (also snapshot due to some issues with 2.1.0p0).
<br>
<p><span class="quotelev1">&gt; As for you mpiexec  is that the one included with OpenMPI  (just a
</span><br>
<span class="quotelev1">&gt; symlink to orterun)  or the one from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.osc.edu/~pw/mpiexec/index.php">http://www.osc.edu/~pw/mpiexec/index.php</a>
</span><br>
<p>Hey, I already thought this might come up: No, I'm using the right [tm] 
<br>
mpiexec for the respective MPI implementation, i.e. 
<br>
<a href="http://www.osc.edu/~pw/mpiexec/index.php">http://www.osc.edu/~pw/mpiexec/index.php</a> for mpich and openmpi-mpiexec for 
<br>
openmpi.
<br>
<p>I already checked everything that I could think of: orted is reachable via 
<br>
$configure_prefix/bin/orted as expected, all necessary shared libraries can 
<br>
be found for either orted or my app, ... can't think of more difficult things 
<br>
to look at.
<br>
<p>BTW: I apologize for the first email being so scrambled. I hope this won't 
<br>
happen to this one also.
<br>
<p>Regards,
<br>
<pre>
-- 
Martin Schaff&#195;&#182;ner
Cognitive Systems Group, Institute of Electronics, Signal Processing and 
Communication Technologies, Department of Electrical Engineering, 
Otto-von-Guericke University Magdeburg
Phone: +49 391 6720063
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1425.php">Anoop Rajendra: "[OMPI users] SEGV_MAPERR during execution"</a>
<li><strong>Previous message:</strong> <a href="1423.php">Doolittle, Joshua: "Re: [OMPI users] Trouble with open MPI and Slurm"</a>
<li><strong>In reply to:</strong> <a href="1421.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1422.php">Brock Palen: "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps through TM interface"</a>
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
