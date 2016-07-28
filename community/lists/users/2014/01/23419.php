<?
$subject_val = "Re: [OMPI users] random error bugging me..";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 19 14:18:46 2014" -->
<!-- isoreceived="20140119191846" -->
<!-- sent="Sun, 19 Jan 2014 20:18:51 +0100" -->
<!-- isosent="20140119191851" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] random error bugging me.." -->
<!-- id="7F9CFC7A-0343-46C7-A75F-02CE6A6E4C32_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FDBFEA9E-25A5-4355-B12C-E18C098BD1D1_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-19 14:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>In reply to:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>Here is a quick way to see how a function get called after MPI_Finalize. In the following I will use gdb scripting, but with little effort you can adapt this to work with your preferred debugger (lldb as an example).
<br>
<p>The idea is to break on the function generating the error you get on the output, which in Open MPI is ompi_mpi_errors_are_fatal_comm_handler. You will need to convince gdb to break on this function, show you the stack and then continue and quit
<br>
<p>Step 1: Prepare the gdb command file (cmd.gdb) which should contain:
<br>
<p>break ompi_mpi_errors_are_fatal_comm_handler
<br>
continue
<br>
bt
<br>
disable 1
<br>
continue
<br>
quit
<br>
<p>Step 2: prepend a call to the debugger to your application
<br>
<p>mpirun -np 64 &lt;other options&gt; gdb -x cmd.gdb &lt;application arguments&gt;
<br>
<p>Step 3:
<br>
Look for the printed stack on your output to see which function is called after MPI_Finalize and where it is called.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jan 19, 2014, at 17:44 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hard to say what could be the cause of the problem without a better understanding of the code, but the root cause appears to be some code path that allows you to call an MPI function after you called MPI_Finalize. From your description, it appears you have a race condition in the code that activates the code path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2014, at 6:33 AM, thomas.forde_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes. It's a shared NSF partition on the nodes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sendt fra min iPhone
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Den 19. jan. 2014 kl. 13:29 skrev &quot;Reuti&quot; &lt;reuti_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am 18.01.2014 um 22:43 schrieb thomas.forde_at_[hidden]:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I have had a running cluster going good for a while, and 2 days ago we decided to upgrade it from 128 to 256 cores. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Most om my deployment of nodes goes through cobbler and scripting, and it has worked fine before.on the first 8 nodes. 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The same version of Open MPI is installed also on the new nodes?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; But after adding new nodes, everything is fucked up and i have no idea why:( 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; #*** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; *** This is disallowed by the MPI standard. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; *** Your MPI job will now abort. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; [dpn10.cfd.local:14994] Local abort after MPI_FINALIZE completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed! 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; *** The MPI_Comm_f2c() function was called after MPI_FINALIZE was invoked. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; *** This is disallowed by the MPI standard. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; *** Your MPI job will now abort. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; # 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The random strange issue that if i launch 8 32core jobs, 3 end of running, while the other 5 dies with this error, and its even using a few of new nodes in the job. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Any idea what is causing it?, its so random i dont know where to start.. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ./Thomas 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Denne e-posten kan innehalde informasjon som er konfidensiell 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; This e-mail may contain confidential information, or otherwise 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; PBefore 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; printing, think about the environment
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Denne e-posten kan innehalde informasjon som er konfidensiell og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail may contain confidential information, or otherwise be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PBefore printing, think about the environment
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23420.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on mpi_finalize and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
<li><strong>In reply to:</strong> <a href="23418.php">Ralph Castain: "Re: [OMPI users] random error bugging me.."</a>
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
