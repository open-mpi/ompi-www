<?
$subject_val = "Re: [OMPI users] random error bugging me..";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 07:29:10 2014" -->
<!-- isoreceived="20140119122910" -->
<!-- sent="Sun, 19 Jan 2014 13:28:58 +0100" -->
<!-- isosent="20140119122858" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random error bugging me.." -->
<!-- id="DE35C014-FEC4-41A7-A0B8-41049046716E_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF63A695C5.66B8C73B-ONC1257C64.00764C6E-C1257C64.00775D44_at_ulstein.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] random error bugging me..<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 07:28:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23413.php">Fischer, Greg A.: "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23411.php">Syed Ahsan Ali: "[OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23409.php">thomas.forde_at_[hidden]: "[OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 18.01.2014 um 22:43 schrieb thomas.forde_at_[hidden]:
<br>
<p><span class="quotelev1">&gt; I have had a running cluster going good for a while, and 2 days ago we decided to upgrade it from 128 to 256 cores. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most om my deployment of nodes goes through cobbler and scripting, and it has worked fine before.on the first 8 nodes. 
</span><br>
<p>The same version of Open MPI is installed also on the new nodes?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; But after adding new nodes, everything is fucked up and i have no idea why:( 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #*** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked. 
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard. 
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort. 
</span><br>
<span class="quotelev1">&gt; [dpn10.cfd.local:14994] Local abort after MPI_FINALIZE completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
</span><br>
<span class="quotelev1">&gt; *** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked. 
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard. 
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort. 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The random strange issue that if i launch 8 32core jobs, 3 end of running, while the other 5 dies with this error, and its even using a few of new nodes in the job. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what is causing it?, its so random i dont know where to start.. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./Thomas 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Denne e-posten kan innehalde informasjon som er konfidensiell 
</span><br>
<span class="quotelev1">&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang 
</span><br>
<span class="quotelev1">&gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential information, or otherwise 
</span><br>
<span class="quotelev1">&gt; be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. 
</span><br>
<span class="quotelev1">&gt; If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PBefore 
</span><br>
<span class="quotelev1">&gt; printing, think about the environment
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23413.php">Fischer, Greg A.: "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23411.php">Syed Ahsan Ali: "[OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23409.php">thomas.forde_at_[hidden]: "[OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
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
