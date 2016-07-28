<?
$subject_val = "[OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 14:49:51 2011" -->
<!-- isoreceived="20110209194951" -->
<!-- sent="Wed, 9 Feb 2011 19:49:44 +0000" -->
<!-- isosent="20110209194944" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="[OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x" -->
<!-- id="E36055DA85A60A45A79E06154DCD60CE4BB79562_at_CSGMBX202W.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F564C25DA8D2AC4091972A6CE1EEA00202A560F4_at_PUSMNEG2.pwemail.us" -->
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
<strong>Subject:</strong> [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x<br>
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 14:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<li><strong>In reply to:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Reply:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm encountering a strange problem and can't find it having been discussed on this mailing list.
<br>
<p>When building and running my parallel program using any recent Intel compiler and OpenMPI 1.2.8, TotalView behaves entirely correctly, displaying the &quot;Process mpirun is a parallel job. Do you want to stop the job now?&quot; dialog box, and stopping at the start of the program. The code displayed is the source code of my program's function main, and the stack trace window shows that we are stopped in the poll function many levels &quot;up&quot; from my main function's call to MPI_Init. I can then set breakpoints, single step, etc., and the code runs appropriately.
<br>
<p>But when building and running using Intel compilers with OpenMPI 1.3.x or 1.4.x, TotalView displays the usual dialog box, and stops at the start of the program; but my main program's source code is *not* displayed. The stack trace window again shows that we are stopped in the poll function several levels &quot;up&quot; from my main function's call to MPI_Init; but this time, the code displayed is the assembler code for the poll function itself.
<br>
<p>If I click on 'main' in the stack trace window, the source code for my program's function main is then displayed, and I can now set breakpoints, single step, etc. as usual.
<br>
<p>So why is the program's source code not displayed when using 1.3.x and 1.4.x, but is displayed when using 1.2.8. This change in behavior is fairly confusing to our users, and it would be nice to have it work as it used to, if possible.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
<p>Dennis McRitchie
<br>
Computational Science and Engineering Support (CSES)
<br>
Academic Services Department
<br>
Office of Information Technology
<br>
Princeton University
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<li><strong>In reply to:</strong> <a href="15537.php">Sindhi, Waris             PW: "[OMPI users] Mpirun --app option not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>Reply:</strong> <a href="15539.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
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
