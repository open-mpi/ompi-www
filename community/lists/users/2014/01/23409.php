<?
$subject_val = "[OMPI users] random error bugging me..";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 18 16:43:50 2014" -->
<!-- isoreceived="20140118214350" -->
<!-- sent="Sat, 18 Jan 2014 22:43:47 +0100" -->
<!-- isosent="20140118214347" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="[OMPI users] random error bugging me.." -->
<!-- id="OF63A695C5.66B8C73B-ONC1257C64.00764C6E-C1257C64.00775D44_at_ulstein.com" -->
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
<strong>Subject:</strong> [OMPI users] random error bugging me..<br>
<strong>From:</strong> <a href="mailto:thomas.forde_at_[hidden]?Subject=Re:%20[OMPI%20users]%20random%20error%20bugging%20me.."><em>thomas.forde_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-01-18 16:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23410.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23408.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have had a running cluster going good for a while, and 2 days ago we 
<br>
decided to upgrade it from 128 to 256 cores.
<br>
<p>Most om my deployment of nodes goes through cobbler and scripting, and it 
<br>
has worked fine before.on the first 8 nodes.
<br>
<p>But after adding new nodes, everything is fucked up and i have no idea 
<br>
why:(
<br>
<p>#*** The MPI_Comm_f2c() function was called after MPI_FINALIZE was 
<br>
invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[dpn10.cfd.local:14994] Local abort after MPI_FINALIZE completed 
<br>
successfully; not able to aggregate error messages, and not able to 
<br>
guarantee that all other processes were killed!
<br>
*** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
#
<br>
<p>The random strange issue that if i launch 8 32core jobs, 3 end of running, 
<br>
while the other 5 dies with this error, and its even using a few of new 
<br>
nodes in the job.
<br>
<p>Any idea what is causing it?, its so random i dont know where to start..
<br>
<p><p>./Thomas
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Denne e-posten kan innehalde informasjon som er konfidensiell 
<br>
og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har 
<br>
adgang 
<br>
til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. 
<br>
Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr 
<br>
e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og 
<br>
kopiar av den.
<br>
<p>This e-mail may contain confidential information, or otherwise 
<br>
be protected against unauthorised use. Any disclosure, distribution or 
<br>
other use of the information by anyone but the intended recipient is 
<br>
strictly prohibited. 
<br>
If you have received this e-mail in error, please advise the sender by 
<br>
immediate reply and destroy the received documents and any copies hereof.
<br>
<p><p>PBefore 
<br>
printing, think about the environment
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23410.php">tmishima_at_[hidden]: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<li><strong>Previous message:</strong> <a href="23408.php">Ralph Castain: "Re: [OMPI users] hosfile issue of openmpi-1.7.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23412.php">Reuti: "Re: [OMPI users] random error bugging me.."</a>
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
