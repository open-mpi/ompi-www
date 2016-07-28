<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 17:50:05 2014" -->
<!-- isoreceived="20140815215005" -->
<!-- sent="Fri, 15 Aug 2014 21:50:03 +0000" -->
<!-- isosent="20140815215003" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="8BB28E07-7549-4F93-9CE7-C8A02A1D6738_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53EE7DF4.10501_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-15 17:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25041.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25041.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2014, at 5:39 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can it be because torque (pbs_mom) is not running on the head node and mpiexec attempts to contact it ?
</span><br>
<p>Not for Open MPI's mpiexec, no.
<br>
<p>Open MPI's mpiexec (mpirun -- they're the same to us) will only try to use TM stuff (i.e., Torque stuff) if it sees the environment variable markers indicating that it's inside a Torque job.  If not, it just uses rsh/ssh (or localhost launch in your case, since you didn't specify any hosts).
<br>
<p>If you are unable to run even &quot;mpirun -np 4 hostname&quot; (i.e., the non-MPI &quot;hostname&quot; command from Linux), then something is seriously borked with your Open MPI installation.
<br>
<p>Try running with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 --mca plm_base_verbose 10 hostname
<br>
<p>This should show the steps OMPI is trying to take to launch the 4 copies of &quot;hostname&quot; and potentially give some insight into where it's hanging.
<br>
<p>Also, just to make sure, you have ensured that you're compiling everything with a single compiler toolchain, and the support libraries from that specific compiler toolchain are available on any server on which you're running (to include the head node and compute nodes), right?
<br>
<p>And you've verified that PATH and LD_LIBRARY_PATH are pointing to the right places -- i.e., to the Open MPI installation that you expect it to point to.  E.g., if you &quot;ldd ring_c&quot;, it shows the libmpi.so that you expect.  And &quot;which mpiexec&quot; shows the mpirun that you expect.  Etc.
<br>
<p>Correct?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25041.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25041.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25043.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
