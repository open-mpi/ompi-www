<?
$subject_val = "[OMPI users] Run time error of openmpi 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 19:36:53 2010" -->
<!-- isoreceived="20100504233653" -->
<!-- sent="Wed, 05 May 2010 09:07:48 +0930" -->
<!-- isosent="20100504233748" -->
<!-- name="David Logan" -->
<!-- email="david.logan_at_[hidden]" -->
<!-- subject="[OMPI users] Run time error of openmpi 1.4.1" -->
<!-- id="4BE0AFCC.3030400_at_adelaide.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Run time error of openmpi 1.4.1<br>
<strong>From:</strong> David Logan (<em>david.logan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 19:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12890.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12888.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12894.php">Ralph Castain: "Re: [OMPI users] Run time error of openmpi 1.4.1"</a>
<li><strong>Reply:</strong> <a href="12894.php">Ralph Castain: "Re: [OMPI users] Run time error of openmpi 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I'm having problems withe openmpi 1.4.1 and am receiving the following 
<br>
error message when I try to run a test job.
<br>
<p>[root_at_hydra ~]# mpirun -n 2 --prefix `dirname $MPILIBDIR` -v 
<br>
-show-progress -machinefile ./nodes.to.use -pernode ./dml_test
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;opal_paffinity_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[hydra:10645] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init.c at line 77
<br>
[hydra:10645] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
orterun.c at line 541
<br>
<p>I have built openmpi with the following configure options
<br>
<p>./configure --with-gm=/usr/local/gm 
<br>
--prefix=/opt/apps/system/openmpi/1.4.1/intel
<br>
<p>and it appears to build correctly, finds the right libraries and 
<br>
generally doesn't have too much of a problem.
<br>
<p>This was built on
<br>
<p>Linux hydra 2.6.18-164.el5 #1 SMP Thu Sep 3 03:33:56 EDT 2009 i686 i686 
<br>
i386 GNU/Linux
<br>
<p>and after reading the docs, trawling the archives, I can't find much 
<br>
that resembles the errors noted above.
<br>
<p>Does anybody have any idea or pointers on where to look or what to debug?
<br>
<p>Thanks and regards
<br>
David
<br>
<p><pre>
-- 
David Logan
eResearch SA, ARCS Grid Administrator
Level 1, School of Physics and Chemistry
North Terrace, Adelaide, 5005
(W) 08 8303 7301
(M) 0458 631 117
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12890.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12888.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12894.php">Ralph Castain: "Re: [OMPI users] Run time error of openmpi 1.4.1"</a>
<li><strong>Reply:</strong> <a href="12894.php">Ralph Castain: "Re: [OMPI users] Run time error of openmpi 1.4.1"</a>
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
