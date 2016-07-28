<?
$subject_val = "[OMPI users] Clean install fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 07:36:44 2011" -->
<!-- isoreceived="20111221123644" -->
<!-- sent="Wed, 21 Dec 2011 12:36:26 -0000" -->
<!-- isosent="20111221123626" -->
<!-- name="Rushton Martin" -->
<!-- email="JMRUSHTON_at_[hidden]" -->
<!-- subject="[OMPI users] Clean install fails" -->
<!-- id="201112211236.pBLCaeKb019406_at_milliways.osl.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E78AC41.4090203_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Clean install fails<br>
<strong>From:</strong> Rushton Martin (<em>JMRUSHTON_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 07:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17359.php">Gus Correa: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just completed installing OpenSuSE 12.1 on a standalone node.
<br>
Using the bundled GCC and OpenMPI the user code fails.  I've reduced the
<br>
problem to that below, but without the source I'm not sure what
<br>
orte_init is after.  Using mpirun -np 1 or -np 2 both fail in the same
<br>
way.  Any suggestions?
<br>
<p>$ cat test.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
$ gfortran -o test-f test.f
<br>
$ ./test-f
<br>
$ echo $?
<br>
0
<br>
$ mpirun ./test-f
<br>
[isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init.c at line 125
<br>
------------------------------------------------------------------------
<br>
<pre>
--
It looks like orte_init failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during orte_init; some of which are due to configuration or
environment problems.  This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):
  orte_ess_base_select failed
  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
------------------------------------------------------------------------
--
[isis:02474] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
orterun.c at line 543
$
Martin Rushton
HPC System Manager, Weapons Technologies
Tel: 01959 514777, Mobile: 07939 219057
email: jmrushton_at_[hidden]
www.QinetiQ.com
QinetiQ - Delivering customer-focused solutions
Please consider the environment before printing this email.
This email and any attachments to it may be confidential and are
intended solely for the use of the individual to whom it is 
addressed. If you are not the intended recipient of this email,
you must neither take any action based upon its contents, nor 
copy or show it to anyone. Please contact the sender if you 
believe you have received this email in error. QinetiQ may 
monitor email traffic data and also the content of email for 
the purposes of security. QinetiQ Limited (Registered in England
&amp; Wales: Company Number: 3796233) Registered office: Cody Technology 
Park, Ively Road, Farnborough, Hampshire, GU14 0LX  <a href="http://www.qinetiq.com">http://www.qinetiq.com</a>.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<li><strong>Previous message:</strong> <a href="18020.php">Mathieu westphal: "[OMPI users]  Strange Execution block each second"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17359.php">Gus Correa: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
<li><strong>Reply:</strong> <a href="18022.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Clean install fails"</a>
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
