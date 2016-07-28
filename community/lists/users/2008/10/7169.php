<?
$subject_val = "[OMPI users] problem running Open MPI on Cells";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:15:51 2008" -->
<!-- isoreceived="20081031201551" -->
<!-- sent="Fri, 31 Oct 2008 15:38:26 -0400" -->
<!-- isosent="20081031193826" -->
<!-- name="Hahn Kim" -->
<!-- email="hgk_at_[hidden]" -->
<!-- subject="[OMPI users] problem running Open MPI on Cells" -->
<!-- id="4AD6FBC7-F392-4837-8838-F43B2E8612CA_at_ll.mit.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] problem running Open MPI on Cells<br>
<strong>From:</strong> Hahn Kim (<em>hgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 15:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7168.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="7178.php">Mi Yan: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having problems using Open MPI on a cluster of Mercury Computer's  
<br>
Cell Accelerator Boards (CABs).
<br>
<p>We have an MPI application that is running on multiple CABs.  The  
<br>
application uses Mercury's MultiCore Framework (MCF) to use the Cell's  
<br>
SPEs.  Here's the basic problem.  I can log into each CAB and run the  
<br>
application in serial directly from the command line (i.e. without  
<br>
using mpirun) without a problem.  I can also launch a serial job onto  
<br>
each CAB from another machine using mpirun without a problem.
<br>
<p>The problem occurs when I try to launch onto multiple CABs using  
<br>
mpirun.  MCF requires a license file.  After the application  
<br>
initializes MPI, it tries to initialized MCF on each node.  The  
<br>
initialization routine loads the MCF license file and checks for valid  
<br>
license keys.  If the keys are valid, then it continues to initialize  
<br>
MCF.  If not, it throws an error.
<br>
<p>When I run on multiple CABs, most of the time several of the CABs  
<br>
throw an error saying MCF cannot find a valid license key.  The  
<br>
strange this is that this behavior doesn't appear when I launch serial  
<br>
jobs using MCF, only multiple CABs.  Additionally, the errors are  
<br>
inconsistent.  Not all the CABs throw an error, sometimes a few of  
<br>
them error out, sometimes all of them, sometimes none.
<br>
<p>I've talked with the Mercury folks and they're just as stumped as I  
<br>
am.  The only thing we can think of is that OpenMPI is somehow  
<br>
modifying the environment and is interfering with MCF, but we can't  
<br>
think of any reason why.
<br>
<p>Any ideas out there?  Thanks.
<br>
<p>Hahn
<br>
<p><pre>
--
Hahn Kim, hgk_at_[hidden]
MIT Lincoln Laboratory
244 Wood St., Lexington, MA 02420
Tel: 781-981-0940, Fax: 781-981-5255
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7168.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="7178.php">Mi Yan: "Re: [OMPI users] problem running Open MPI on Cells"</a>
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
