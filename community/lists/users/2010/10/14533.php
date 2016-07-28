<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 10:39:53 2010" -->
<!-- isoreceived="20101021143953" -->
<!-- sent="Thu, 21 Oct 2010 09:39:40 -0500" -->
<!-- isosent="20101021143940" -->
<!-- name="Raymond Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="4CC050AC.4080601_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6592652A-DE08-462D-B372-28C030191BEA_at_myri.com" -->
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
<strong>From:</strong> Raymond Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 10:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14532.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/20/2010 8:30 PM, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; We have fixed this bug in the most recent 1.4.x and 1.5.x releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
OK, a few more tests.  I was using PGI 10.4 as the compiler.
<br>
<p>I have now tried OpenMPI 1.4.3 with PGI 10.8 and Intel 11.1.  I get the 
<br>
same results in each case, mpirun seg faults. (I really did not expect 
<br>
that to change anything).
<br>
<p>I tried OpenMPI 1.5.  Under PGI, I could not get it to compile.   With 
<br>
Intel 11.1, it compiles. When I try to run a simple test, mpirun just 
<br>
seems to hang and I never see anything start on the nodes.  I would 
<br>
rather stick with 1.4.x for now since that is what we are running on our 
<br>
other production cluster.  I will leave this for a later day.
<br>
<p>I grabbed the 1.4.3 version from this page.
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
<br>
<p>When you say this bug is fixed in recent  1.4.x releases,  should I try 
<br>
one from here?
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
<br>
<p>For grins, I compiled the OpenMPI 1.4.1 tree.  This what Myricom 
<br>
supplied with the MX roll. Same result.  I can still run with their 
<br>
compiled version of mpirun, even when I compile with the other build 
<br>
trees and compilers.  I just do not know what options they compiled with.
<br>
<p>Any insight would be appreciated.
<br>
<p>-Ray Muno
<br>
&nbsp;&nbsp;University of Minnesota
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14532.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14516.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
