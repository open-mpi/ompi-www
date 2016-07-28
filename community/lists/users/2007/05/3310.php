<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 23 03:59:08 2007" -->
<!-- isoreceived="20070523075908" -->
<!-- sent="Wed, 23 May 2007 00:59:04 -0700 (PDT)" -->
<!-- isosent="20070523075904" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="[OMPI users] Cross platform run: error occurred in MPI_Waitall..." -->
<!-- id="636937.24506.qm_at_web33307.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Rob (<em>spamrefuse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-23 03:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3311.php">Adrian Knoth: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Previous message:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3311.php">Adrian Knoth: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Reply:</strong> <a href="3311.php">Adrian Knoth: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Maybe reply:</strong> <a href="3312.php">Rob: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to run my code parallel on an HP/Itanium
<br>
workstation (hp) and an Compaq/AlphaServer (es40).
<br>
<p>The program starts on both machines, but then quickly
<br>
bails out with following messages:
<br>
<p>[es40:01939] mca_btl_tcp_frag_send: writev failed with
<br>
errno=54
<br>
[es40][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=61
<br>
[es40][0,1,0][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=61
<br>
[hp:06442] *** An error occurred in MPI_Waitall
<br>
[hp:06442] *** on communicator MPI COMMUNICATOR 5
<br>
SPLIT FROM 3
<br>
[hp:06442] *** MPI_ERR_TRUNCATE: message truncated
<br>
[hp:06442] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[es40:01937] mca_btl_tcp_frag_send: writev failed with
<br>
errno=54
<br>
[es40][0,1,1][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=61
<br>
[hp:06443] *** An error occurred in MPI_Waitall
<br>
[hp:06443] *** on communicator MPI COMMUNICATOR 5
<br>
SPLIT FROM 3
<br>
[hp:06443] *** MPI_ERR_TRUNCATE: message truncated
<br>
[hp:06443] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[es40][0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=61
<br>
[es40][0,1,2][btl_tcp_endpoint.c:572:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with errno=61
<br>
mpiexec noticed that job rank 0 with PID 1936 on node
<br>
es40 exited on signal 15 (Terminated). 
<br>
4 additional processes aborted (not shown)
<br>
<p><p>Could somebody give me a clue what has gone wrong
<br>
here?
<br>
<p>Thanks,
<br>
Rob.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
____________________________________________________________________________________You snooze, you lose. Get messages ASAP with AutoCheck
<br>
in the all-new Yahoo! Mail Beta.
<br>
<a href="http://advision.webevents.yahoo.com/mailbeta/newmail_html.html">http://advision.webevents.yahoo.com/mailbeta/newmail_html.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3311.php">Adrian Knoth: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Previous message:</strong> <a href="3309.php">Tom Clune: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3311.php">Adrian Knoth: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Reply:</strong> <a href="3311.php">Adrian Knoth: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
<li><strong>Maybe reply:</strong> <a href="3312.php">Rob: "Re: [OMPI users] Cross platform run: error occurred in MPI_Waitall..."</a>
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
