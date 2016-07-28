<?
$subject_val = "Re: [OMPI users] random error bugging me..";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 11:45:04 2014" -->
<!-- isoreceived="20140119164504" -->
<!-- sent="Sun, 19 Jan 2014 08:44:45 -0800" -->
<!-- isosent="20140119164445" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random error bugging me.." -->
<!-- id="FDBFEA9E-25A5-4355-B12C-E18C098BD1D1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7215F9DF-082B-4F9E-8924-5C797F9518C8_at_ulstein.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 11:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hard to say what could be the cause of the problem without a better understanding of the code, but the root cause appears to be some code path that allows you to call an MPI function after you called MPI_Finalize. From your description, it appears you have a race condition in the code that activates the code path.
<br>
<p><p>On Jan 19, 2014, at 6:33 AM, thomas.forde_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Yes. It's a shared NSF partition on the nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sendt fra min iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Den 19. jan. 2014 kl. 13:29 skrev &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 18.01.2014 um 22:43 schrieb thomas.forde_at_[hidden]:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have had a running cluster going good for a while, and 2 days ago we decided to upgrade it from 128 to 256 cores. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Most om my deployment of nodes goes through cobbler and scripting, and it has worked fine before.on the first 8 nodes. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The same version of Open MPI is installed also on the new nodes?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But after adding new nodes, everything is fucked up and i have no idea why:( 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #*** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** This is disallowed by the MPI standard. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** Your MPI job will now abort. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [dpn10.cfd.local:14994] Local abort after MPI_FINALIZE completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** This is disallowed by the MPI standard. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** Your MPI job will now abort. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The random strange issue that if i launch 8 32core jobs, 3 end of running, while the other 5 dies with this error, and its even using a few of new nodes in the job. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any idea what is causing it?, its so random i dont know where to start.. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./Thomas 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Denne e-posten kan innehalde informasjon som er konfidensiell 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This e-mail may contain confidential information, or otherwise 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PBefore 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; printing, think about the environment
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Denne e-posten kan innehalde informasjon som er konfidensiell og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential information, or otherwise be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PBefore printing, think about the environment
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Previous message:</strong> <a href="23417.php">Ralph Castain: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23414.php">thomas.forde_at_[hidden]: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>Reply:</strong> <a href="23419.php">George Bosilca: "Re: [OMPI users] random error bugging me.."</a>
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
