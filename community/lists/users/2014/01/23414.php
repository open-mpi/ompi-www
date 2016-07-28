<?
$subject_val = "Re: [OMPI users] random error bugging me..";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 09:33:26 2014" -->
<!-- isoreceived="20140119143326" -->
<!-- sent="Sun, 19 Jan 2014 15:33:25 +0100" -->
<!-- isosent="20140119143325" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random error bugging me.." -->
<!-- id="7215F9DF-082B-4F9E-8924-5C797F9518C8_at_ulstein.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE35C014-FEC4-41A7-A0B8-41049046716E_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> <a href="mailto:thomas.forde_at_[hidden]?Subject=Re:%20[OMPI%20users]%20random%20error%20bugging%20me.."><em>thomas.forde_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-19 09:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23415.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23413.php">Fischer, Greg A.: "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. It's a shared NSF partition on the nodes.
<br>
<p>Sendt fra min iPhone
<br>
<p><span class="quotelev1">&gt; Den 19. jan. 2014 kl. 13:29 skrev &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 18.01.2014 um 22:43 schrieb thomas.forde_at_[hidden]:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have had a running cluster going good for a while, and 2 days ago we
</span><br>
decided to upgrade it from 128 to 256 cores.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Most om my deployment of nodes goes through cobbler and scripting, and
</span><br>
it has worked fine before.on the first 8 nodes.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same version of Open MPI is installed also on the new nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But after adding new nodes, everything is fucked up and i have no idea
</span><br>
why:(
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #*** The MPI_Comm_f2c() function was called after MPI_FINALIZE was
</span><br>
invoked.
<br>
<span class="quotelev2">&gt; &gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt; &gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; [dpn10.cfd.local:14994] Local abort after MPI_FINALIZE completed
</span><br>
successfully; not able to aggregate error messages, and not able to
<br>
guarantee that all other processes were killed!
<br>
<span class="quotelev2">&gt; &gt; *** The MPI_Comm_f2c() function was called after MPI_FINALIZE was
</span><br>
invoked.
<br>
<span class="quotelev2">&gt; &gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt; &gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The random strange issue that if i launch 8 32core jobs, 3 end of
</span><br>
running, while the other 5 dies with this error, and its even using a few
<br>
of new nodes in the job.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea what is causing it?, its so random i dont know where to
</span><br>
start..
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./Thomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev2">&gt; &gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har
</span><br>
adgang
<br>
<span class="quotelev2">&gt; &gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande
</span><br>
vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt
<br>
avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige
<br>
utskrifter og kopiar av den.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev2">&gt; &gt; be protected against unauthorised use. Any disclosure, distribution or
</span><br>
other use of the information by anyone but the intended recipient is
<br>
strictly prohibited.
<br>
<span class="quotelev2">&gt; &gt; If you have received this e-mail in error, please advise the sender by
</span><br>
immediate reply and destroy the received documents and any copies hereof.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PBefore
</span><br>
<span class="quotelev2">&gt; &gt; printing, think about the environment
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p>Denne e-posten kan innehalde informasjon som er konfidensiell og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den. 
<br>
This e-mail may contain confidential information, or otherwise be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof. 
<br>
P Before printing, think about the environment 
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23415.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23413.php">Fischer, Greg A.: "[OMPI users] simple test problem hangs on mpi_finalize and consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
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
