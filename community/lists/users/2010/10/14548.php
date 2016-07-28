<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 08:36:28 2010" -->
<!-- isoreceived="20101022123628" -->
<!-- sent="Fri, 22 Oct 2010 08:36:22 -0400" -->
<!-- isosent="20101022123622" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="E5C17D00-DE64-44E5-A9E1-F0FCD1EB3C96_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CC050AC.4080601_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 08:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14549.php">Olivier Riff: "[OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>Previous message:</strong> <a href="14547.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14533.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ray,
<br>
<p>Looking back at your original message, you say that it works if you use the Myricom supplied mpirun from the Myrinet roll. I wonder if this is a mismatch between libraries on the compute nodes.
<br>
<p>What do you get if you use your OMPI's mpirun with:
<br>
<p>$ mpirun -n 1 -H &lt;remote_host&gt; ldd $PWD/&lt;your_binary&gt;
<br>
<p>I am wondering if ldd find the libraries from your compile or the Myrinet roll.
<br>
<p>Scott
<br>
<p>On Oct 21, 2010, at 10:39 AM, Raymond Muno wrote:
<br>
<p><span class="quotelev1">&gt; On 10/20/2010 8:30 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We have fixed this bug in the most recent 1.4.x and 1.5.x releases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt; OK, a few more tests.  I was using PGI 10.4 as the compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have now tried OpenMPI 1.4.3 with PGI 10.8 and Intel 11.1.  I get the same results in each case, mpirun seg faults. (I really did not expect that to change anything).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried OpenMPI 1.5.  Under PGI, I could not get it to compile.   With Intel 11.1, it compiles. When I try to run a simple test, mpirun just seems to hang and I never see anything start on the nodes.  I would rather stick with 1.4.x for now since that is what we are running on our other production cluster.  I will leave this for a later day.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I grabbed the 1.4.3 version from this page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you say this bug is fixed in recent  1.4.x releases,  should I try one from here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For grins, I compiled the OpenMPI 1.4.1 tree.  This what Myricom supplied with the MX roll. Same result.  I can still run with their compiled version of mpirun, even when I compile with the other build trees and compilers.  I just do not know what options they compiled with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any insight would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ray Muno
</span><br>
<span class="quotelev1">&gt; University of Minnesota
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
<li><strong>Next message:</strong> <a href="14549.php">Olivier Riff: "[OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>Previous message:</strong> <a href="14547.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14533.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
