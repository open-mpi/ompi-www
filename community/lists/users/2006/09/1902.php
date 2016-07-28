<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 28 15:04:04 2006" -->
<!-- isoreceived="20060928190404" -->
<!-- sent="Thu, 28 Sep 2006 14:03:58 -0500" -->
<!-- isosent="20060928190358" -->
<!-- name="Glenn Johnson" -->
<!-- email="gjohnson_at_[hidden]" -->
<!-- subject="[OMPI users] using both 64 and 32 bit mpi" -->
<!-- id="1159470238.28535.15.camel_at_modeler.srrc.ars.usda.gov" -->
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
<strong>From:</strong> Glenn Johnson (<em>gjohnson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-28 15:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1903.php">Caird, Andrew J: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Previous message:</strong> <a href="1901.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1903.php">Caird, Andrew J: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Reply:</strong> <a href="1903.php">Caird, Andrew J: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Reply:</strong> <a href="1910.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an 8-way AMD64 system. I built a 64 bit open-mpi-1.1
<br>
implementation and then compiled software to use it. That all works
<br>
fine.
<br>
<p>In addition, I have a 32 bit binary program (Schrodinger Jaguar) that I
<br>
would like to run on this machine with mpi. Schrodinger provides source
<br>
code to build an mpi compatibility layer. This compatibility layer
<br>
allows jaguar to use a different mpi implementation than that which the
<br>
software was compiled with. I do not want to give up the 64 bit open-mpi
<br>
that I already have and am using.
<br>
<p>So my questions are:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Can I build/install a 32 bit version of open-mpi even though I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;already have a 64 bit version installed?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. What &quot;tricks&quot; might I need to do to make sure a program calls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the correct version of mpi (32 or 64 bit)?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Would I do better considering running jaguar in a 32 bit chroot
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;environment?
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Glenn Johnson &lt;gjohnson_at_[hidden]&gt;
USDA, ARS, SRRC
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1903.php">Caird, Andrew J: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Previous message:</strong> <a href="1901.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1903.php">Caird, Andrew J: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Reply:</strong> <a href="1903.php">Caird, Andrew J: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Reply:</strong> <a href="1910.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "Re: [OMPI users] using both 64 and 32 bit mpi"</a>
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
