<?
$subject_val = "[OMPI users] Building on SPARC-Enterprise-T5120";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 01:23:59 2010" -->
<!-- isoreceived="20100616052359" -->
<!-- sent="Wed, 16 Jun 2010 17:23:50 +1200" -->
<!-- isosent="20100616052350" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="[OMPI users] Building on SPARC-Enterprise-T5120" -->
<!-- id="4b103f9a1afd1380f9418b93ffa9e721.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> [OMPI users] Building on SPARC-Enterprise-T5120<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Building%20on%20SPARC-Enterprise-T5120"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-06-16 01:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Beyond what's documented at the FAQ (Questions 20 and 21)
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>
<br>
<p>is there anything else worth tweaking for building on a
<br>
SPARC-Enterprise-T5120 with the June 2010 Express compiler
<br>
suite ?
<br>
<p>Perhaps, instead of
<br>
<p>-xtarget=ultra3
<br>
<p>one should, as suggested by  CC -xtarget=native -dryrun, use
<br>
<p>-xtarget=ultraT2
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
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
