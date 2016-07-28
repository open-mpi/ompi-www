<?
$subject_val = "[OMPI users]  problem calling mpirun from script invoked";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 04:34:29 2009" -->
<!-- isoreceived="20091029083429" -->
<!-- sent="Thu, 29 Oct 2009 09:34:23 +0100" -->
<!-- isosent="20091029083423" -->
<!-- name="Per Madsen" -->
<!-- email="Per.Madsen_at_[hidden]" -->
<!-- subject="[OMPI users]  problem calling mpirun from script invoked" -->
<!-- id="9F0721FDD4F12D4B95AD894274F388EC01A2BBE15C27_at_DJFEXMBX01.djf.agrsci.dk" -->
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
<strong>Subject:</strong> [OMPI users]  problem calling mpirun from script invoked<br>
<strong>From:</strong> Per Madsen (<em>Per.Madsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 04:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<li><strong>Previous message:</strong> <a href="10996.php">Natarajan CS: "[OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<li><strong>Reply:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could your problem is related to the MCA parameter &quot;contamination&quot; problem, where the child MPI process inherits MCA environment variables from the parent process still exists.
<br>
<p><p><p>Back in 2007 I was implementing a program that solves two large interrelated systems of equations (+200.000.000 eq.) using PCG iteration. The program starts to iterate on the first system until a certain degree of convergence, then the master node executes a shell script which starts the parallel solver on the second system. Again the iteration is to certain degree of convergence, some parameters from solving the second system are stored in files. After the solving of the second system, the stored parameters are used in the solver for the first system. Both before and after the master node makes the system call the nodes are synchronized via calls of MPI_BARRIER.
<br>
<p><p><p>The program was hanging when the master node executed the shell script.
<br>
<p><p><p>I found that it was because MCA environment variables was inherited form the parent process, and solved the problem by adding the following to the script starting the second MPI program:
<br>
<p><p><p>for i in $(env | grep OMPI_MCA |sed 's/=/ /' | awk '{print $1}')
<br>
<p>&nbsp;&nbsp;do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;unset $i
<br>
<p>&nbsp;&nbsp;done
<br>
<p><p><p><p>Med venlig hilsen / Regards
<br>
<p>Per Madsen
<br>
Seniorforsker / Senior scientist
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AARHUS UNIVERSITET / UNIVERSITY OF AARHUS
<br>
Det Jordbrugsvidenskabelige Fakultet / Faculty of Agricultural Sciences
<br>
Inst. for Genetik og Bioteknologi / Dept. of Genetics and Biotechnology
<br>
Blichers All&#233; 20, P.O. BOX 50
<br>
DK-8830 Tjele
<br>
<p>Tel:     +45 8999 1900
<br>
Direct:  +45 8999 1216
<br>
Mobile:  +45
<br>
E-mail:  Per.Madsen_at_[hidden]&lt;mailto:Per.Madsen_at_[hidden]&gt;
<br>
Web:     www.agrsci.dk&lt;<a href="http://www.agrsci.dk/">http://www.agrsci.dk/</a>&gt;
<br>
&nbsp;&nbsp;_____
<br>
<p>DJF udbyder nye uddannelser&lt;<a href="http://www.agrsci.dk/ny_navigation/uddannelse/">http://www.agrsci.dk/ny_navigation/uddannelse/</a>&gt; / DJF now offers new degree programmes&lt;<a href="http://www.agrsci.org/content/view/full/34133">http://www.agrsci.org/content/view/full/34133</a>&gt;.
<br>
<p>Tilmeld dig DJF's nyhedsbrev / Subscribe Faculty of Agricultural Sciences Newsletter&lt;<a href="http://www.agrsci.dk/user/register?lan=dan-DK">http://www.agrsci.dk/user/register?lan=dan-DK</a>&gt;.
<br>
<p>Denne email kan indeholde fortrolig information. Enhver brug eller offentligg&#248;relse af denne email uden skriftlig tilladelse fra DJF er ikke tilladt. Hvis De ikke er den tilt&#230;nkte adressat, bedes De venligst straks underrette DJF samt slette emailen.
<br>
<p>This email may contain information that is confidential. Any use or publication of this email without written permission from Faculty of Agricultural Sciences is not allowed. If you are not the intended recipient, please notify Faculty of Agricultural Sciences immediately and delete this email.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<li><strong>Previous message:</strong> <a href="10996.php">Natarajan CS: "[OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
<li><strong>Reply:</strong> <a href="10998.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked"</a>
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
