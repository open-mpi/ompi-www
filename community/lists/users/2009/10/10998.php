<?
$subject_val = "Re: [OMPI users] problem calling mpirun from script invoked";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 04:42:00 2009" -->
<!-- isoreceived="20091029084200" -->
<!-- sent="Thu, 29 Oct 2009 02:41:54 -0600" -->
<!-- isosent="20091029084154" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem calling mpirun from script invoked" -->
<!-- id="71d2d8cc0910290141r2ed39430x2fa0e0f93a0e3e17_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9F0721FDD4F12D4B95AD894274F388EC01A2BBE15C27_at_DJFEXMBX01.djf.agrsci.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem calling mpirun from script invoked<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 04:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10999.php">Vincent Loechner: "[OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="10997.php">Per Madsen: "[OMPI users]  problem calling mpirun from script invoked"</a>
<li><strong>In reply to:</strong> <a href="10997.php">Per Madsen: "[OMPI users]  problem calling mpirun from script invoked"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see my earlier response. This proposed solution will work, but may be
<br>
unstable as it (a) removes all of OMPI's internal variables, some of which
<br>
are required; and (b) also removes all the variables that might be needed by
<br>
your system. For example, envars directing the use of specific transports,
<br>
or defining buffer sizes, will all be removed from the subsequent execution.
<br>
<p>So it can work - but may lead to surprising results. Definitely a &quot;user
<br>
beware&quot; method.
<br>
<p>:-)
<br>
<p>Ralph
<br>
<p><p>On Thu, Oct 29, 2009 at 2:34 AM, Per Madsen &lt;Per.Madsen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Could your problem is related to the MCA parameter &#147;contamination&#148;
</span><br>
<span class="quotelev1">&gt; problem, where the child MPI process inherits MCA environment variables from
</span><br>
<span class="quotelev1">&gt; the parent process still exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back in 2007 I was implementing a program that solves two large
</span><br>
<span class="quotelev1">&gt; interrelated systems of equations (+200.000.000 eq.) using PCG iteration.
</span><br>
<span class="quotelev1">&gt; The program starts to iterate on the first system until a certain degree of
</span><br>
<span class="quotelev1">&gt; convergence, then the master node executes a shell script which starts the
</span><br>
<span class="quotelev1">&gt; parallel solver on the second system. Again the iteration is to certain
</span><br>
<span class="quotelev1">&gt; degree of convergence, some parameters from solving the second system are
</span><br>
<span class="quotelev1">&gt; stored in files. After the solving of the second system, the stored
</span><br>
<span class="quotelev1">&gt; parameters are used in the solver for the first system. Both before and
</span><br>
<span class="quotelev1">&gt; after the master node makes the system call the nodes are synchronized via
</span><br>
<span class="quotelev1">&gt; calls of MPI_BARRIER.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program was hanging when the master node executed the shell script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found that it was because MCA environment variables was inherited form
</span><br>
<span class="quotelev1">&gt; the parent process, and solved the problem by adding the following to the
</span><br>
<span class="quotelev1">&gt; script starting the second MPI program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for i in $(env | grep OMPI_MCA |sed 's/=/ /' | awk '{print $1}')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     unset $i
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Med venlig hilsen / Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Per Madsen*
</span><br>
<span class="quotelev1">&gt; Seniorforsker / Senior scientist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             *AARHUS UNIVERSITET / UNIVERSITY OF AARHUS*  *Det
</span><br>
<span class="quotelev1">&gt; Jordbrugsvidenskabelige Fakultet / Faculty of Agricultural Sciences*  Inst.
</span><br>
<span class="quotelev1">&gt; for Genetik og Bioteknologi / Dept. of Genetics and Biotechnology  Blichers
</span><br>
<span class="quotelev1">&gt; All&#233; 20, P.O. BOX 50  DK-8830 Tjele       Tel: +45 8999 1900  Direct: +45
</span><br>
<span class="quotelev1">&gt; 8999 1216  Mobile: +45  E-mail: Per.Madsen_at_[hidden]  Web: www.agrsci.dk
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; DJF udbyder nye uddannelser&lt;<a href="http://www.agrsci.dk/ny_navigation/uddannelse/">http://www.agrsci.dk/ny_navigation/uddannelse/</a>&gt;/ DJF
</span><br>
<span class="quotelev1">&gt; now offers new degree programmes&lt;<a href="http://www.agrsci.org/content/view/full/34133">http://www.agrsci.org/content/view/full/34133</a>&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tilmeld dig DJF's nyhedsbrev / Subscribe Faculty of Agricultural Sciences
</span><br>
<span class="quotelev1">&gt; Newsletter &lt;<a href="http://www.agrsci.dk/user/register?lan=dan-DK">http://www.agrsci.dk/user/register?lan=dan-DK</a>&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Denne email kan indeholde fortrolig information. Enhver brug eller
</span><br>
<span class="quotelev1">&gt; offentligg&#248;relse af denne email uden skriftlig tilladelse fra DJF er ikke
</span><br>
<span class="quotelev1">&gt; tilladt. Hvis De ikke er den tilt&#230;nkte adressat, bedes De venligst straks
</span><br>
<span class="quotelev1">&gt; underrette DJF samt slette emailen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email may contain information that is confidential. Any use or
</span><br>
<span class="quotelev1">&gt; publication of this email without written permission from Faculty of
</span><br>
<span class="quotelev1">&gt; Agricultural Sciences is not allowed. If you are not the intended recipient,
</span><br>
<span class="quotelev1">&gt; please notify Faculty of Agricultural Sciences immediately and delete this
</span><br>
<span class="quotelev1">&gt; email.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10998/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10999.php">Vincent Loechner: "[OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>Previous message:</strong> <a href="10997.php">Per Madsen: "[OMPI users]  problem calling mpirun from script invoked"</a>
<li><strong>In reply to:</strong> <a href="10997.php">Per Madsen: "[OMPI users]  problem calling mpirun from script invoked"</a>
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
