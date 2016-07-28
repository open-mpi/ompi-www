<?
$subject_val = "Re: [OMPI users] problem running Open MPI on Cells";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:52:43 2008" -->
<!-- isoreceived="20081031205243" -->
<!-- sent="Fri, 31 Oct 2008 21:52:38 +0100" -->
<!-- isosent="20081031205238" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Open MPI on Cells" -->
<!-- id="Pine.LNX.4.58.0810312146020.28861_at_lxplus238.cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AD6FBC7-F392-4837-8838-F43B2E8612CA_at_ll.mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem running Open MPI on Cells<br>
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:52:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7175.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7169.php">Hahn Kim: "[OMPI users] problem running Open MPI on Cells"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;To monitor the environment from inside the application, it could be useful to
<br>
issue a 'system(&quot;printenv&quot;)' call at the very beginning of the main program,
<br>
even before (and after, btw) the MPI_Init call, when running in serial job mode
<br>
with a single CAB, using mpirun.
<br>
<p>&nbsp;HTH,               Gilbert.
<br>
<p>On Fri, 31 Oct 2008, Hahn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having problems using Open MPI on a cluster of Mercury Computer's Cell
</span><br>
<span class="quotelev1">&gt; Accelerator Boards (CABs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have an MPI application that is running on multiple CABs.  The application
</span><br>
<span class="quotelev1">&gt; uses Mercury's MultiCore Framework (MCF) to use the Cell's SPEs.  Here's the
</span><br>
<span class="quotelev1">&gt; basic problem.  I can log into each CAB and run the application in serial
</span><br>
<span class="quotelev1">&gt; directly from the command line (i.e. without using mpirun) without a problem.
</span><br>
<span class="quotelev1">&gt; I can also launch a serial job onto each CAB from another machine using mpirun
</span><br>
<span class="quotelev1">&gt; without a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem occurs when I try to launch onto multiple CABs using mpirun.  MCF
</span><br>
<span class="quotelev1">&gt; requires a license file.  After the application initializes MPI, it tries to
</span><br>
<span class="quotelev1">&gt; initialized MCF on each node.  The initialization routine loads the MCF
</span><br>
<span class="quotelev1">&gt; license file and checks for valid license keys.  If the keys are valid, then
</span><br>
<span class="quotelev1">&gt; it continues to initialize MCF.  If not, it throws an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run on multiple CABs, most of the time several of the CABs throw an
</span><br>
<span class="quotelev1">&gt; error saying MCF cannot find a valid license key.  The strange this is that
</span><br>
<span class="quotelev1">&gt; this behavior doesn't appear when I launch serial jobs using MCF, only
</span><br>
<span class="quotelev1">&gt; multiple CABs.  Additionally, the errors are inconsistent.  Not all the CABs
</span><br>
<span class="quotelev1">&gt; throw an error, sometimes a few of them error out, sometimes all of them,
</span><br>
<span class="quotelev1">&gt; sometimes none.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've talked with the Mercury folks and they're just as stumped as I am.  The
</span><br>
<span class="quotelev1">&gt; only thing we can think of is that OpenMPI is somehow modifying the
</span><br>
<span class="quotelev1">&gt; environment and is interfering with MCF, but we can't think of any reason why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas out there?  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hahn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hahn Kim, hgk_at_[hidden]
</span><br>
<span class="quotelev1">&gt; MIT Lincoln Laboratory
</span><br>
<span class="quotelev1">&gt; 244 Wood St., Lexington, MA 02420
</span><br>
<span class="quotelev1">&gt; Tel: 781-981-0940, Fax: 781-981-5255
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7175.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7169.php">Hahn Kim: "[OMPI users] problem running Open MPI on Cells"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
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
