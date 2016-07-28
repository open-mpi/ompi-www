<?
$subject_val = "[OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 13:24:29 2010" -->
<!-- isoreceived="20100923172429" -->
<!-- sent="Thu, 23 Sep 2010 10:24:25 -0700" -->
<!-- isosent="20100923172425" -->
<!-- name="Ken Mighell" -->
<!-- email="mighell_at_[hidden]" -->
<!-- subject="[OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?" -->
<!-- id="2937AFE7-C237-4CA8-A444-319352AA1C55_at_noao.edu" -->
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
<strong>Subject:</strong> [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?<br>
<strong>From:</strong> Ken Mighell (<em>mighell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 13:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14300.php">Fernando Saez: "[OMPI users] How to know which process is running on which core?"</a>
<li><strong>Previous message:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14337.php">Jeff Squyres: "Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
<li><strong>Reply:</strong> <a href="14337.php">Jeff Squyres: "Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI,
<br>
<p>How essential is Open MPI's opal_sys_timer_get_cycles() function?
<br>
It apparently needs to access a timestamp register directly.  That is
<br>
a trivial operation in PPC (mftb) or x86 (tsc), but the ARM processor
<br>
apparently doesn't have a similar function in its instruction set.
<br>
<p>Is it critical that opal_sys_timer_get_cycles() be written in assembly?
<br>
<p>Would a hack written in C suffice?
<br>
<p>Sincerely yours,
<br>
<p>Ken Mighell
<br>
<p>================================
<br>
Kenneth Mighell, Scientist
<br>
National Optical Astronomy Observatory
<br>
950 North Cherry Avenue
<br>
Tucson, AZ 85719 U.S.A.
<br>
email: mighell_at_[hidden]
<br>
voice: (520) 318-8391 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14300.php">Fernando Saez: "[OMPI users] How to know which process is running on which core?"</a>
<li><strong>Previous message:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14337.php">Jeff Squyres: "Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
<li><strong>Reply:</strong> <a href="14337.php">Jeff Squyres: "Re: [OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
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
