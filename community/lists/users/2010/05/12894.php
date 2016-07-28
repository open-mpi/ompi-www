<?
$subject_val = "Re: [OMPI users] Run time error of openmpi 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 22:12:15 2010" -->
<!-- isoreceived="20100505021215" -->
<!-- sent="Tue, 4 May 2010 20:12:07 -0600" -->
<!-- isosent="20100505021207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run time error of openmpi 1.4.1" -->
<!-- id="7B528529-DB63-4552-8F2E-9E275DEA7BCE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE0AFCC.3030400_at_adelaide.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run time error of openmpi 1.4.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 22:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12895.php">Doug Reeder: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12889.php">David Logan: "[OMPI users] Run time error of openmpi 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange - can you check your prefix/lib area to see if there are any *paffinity* libs in it? For some reason, it looks like nothing built.
<br>
<p>On May 4, 2010, at 5:37 PM, David Logan wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having problems withe openmpi 1.4.1 and am receiving the following error message when I try to run a test job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_hydra ~]# mpirun -n 2 --prefix `dirname $MPILIBDIR` -v -show-progress -machinefile ./nodes.to.use -pernode ./dml_test
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_paffinity_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [hydra:10645] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; [hydra:10645] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at line 541
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built openmpi with the following configure options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-gm=/usr/local/gm --prefix=/opt/apps/system/openmpi/1.4.1/intel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it appears to build correctly, finds the right libraries and generally doesn't have too much of a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was built on
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux hydra 2.6.18-164.el5 #1 SMP Thu Sep 3 03:33:56 EDT 2009 i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and after reading the docs, trawling the archives, I can't find much that resembles the errors noted above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have any idea or pointers on where to look or what to debug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and regards
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Logan
</span><br>
<span class="quotelev1">&gt; eResearch SA, ARCS Grid Administrator
</span><br>
<span class="quotelev1">&gt; Level 1, School of Physics and Chemistry
</span><br>
<span class="quotelev1">&gt; North Terrace, Adelaide, 5005
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (W) 08 8303 7301
</span><br>
<span class="quotelev1">&gt; (M) 0458 631 117
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12895.php">Doug Reeder: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12889.php">David Logan: "[OMPI users] Run time error of openmpi 1.4.1"</a>
<!-- nextthread="start" -->
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
