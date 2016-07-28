<?
$subject_val = "[OMPI users]  Segmentation fault during MPI initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 13:57:26 2012" -->
<!-- isoreceived="20120424175726" -->
<!-- sent="Tue, 24 Apr 2012 13:57:39 -0400" -->
<!-- isosent="20120424175739" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="[OMPI users]  Segmentation fault during MPI initialization" -->
<!-- id="OF594FACFA.16A51C6D-ON852579EA.0062238D-852579EA.0062A692_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1335282226.79171.YahooMailNeo_at_web130106.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users]  Segmentation fault during MPI initialization<br>
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 13:57:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Previous message:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been having an intermittent failure during MPI initialization (v 
<br>
1.4.3) for several months.  It comes and goes as I make changes to my 
<br>
application, that is changes unrelated to MPI calls.  Even when I have a 
<br>
version of my app which shows the problem, it doesn't happen on every 
<br>
submittal.  This is a representative stack trace:
<br>
<p>[mtcompute-6-6:05845] *** Process received signal ***
<br>
[mtcompute-6-6:05845] Signal: Segmentation fault (11)
<br>
[mtcompute-6-6:05845] Signal code: Address not mapped (1)
<br>
[mtcompute-6-6:05845] Failing at address: 0x2ac352e0bd80
<br>
[mtcompute-6-6:05845] [ 0] /lib64/libpthread.so.0 [0x314ee0eb10]
<br>
[mtcompute-6-6:05845] [ 1] /opt/openmpi/lib/libmpi.so.0 [0x2b2b3d42fa70]
<br>
[mtcompute-6-6:05845] [ 2] 
<br>
/opt/openmpi/lib/libopen-pal.so.0(opal_progress+0x5a) [0x2b2b3fa694ea]
<br>
[mtcompute-6-6:05845] [ 3] /opt/openmpi/lib/libopen-rte.so.0 
<br>
[0x2b2b3f80913c]
<br>
[mtcompute-6-6:05845] [ 4] /opt/openmpi/lib/libmpi.so.0 [0x2b2b3d3f160c]
<br>
[mtcompute-6-6:05845] [ 5] /opt/openmpi/lib/libmpi.so.0(MPI_Init+0xf0) 
<br>
[0x2b2b3d40eb00]
<br>
[mtcompute-6-6:05845] [ 6] 
<br>
/home/cummings/DART/DARTHome/bin/linux/DebrisProp [0x418610]
<br>
[mtcompute-6-6:05845] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) 
<br>
[0x31df41d994]
<br>
[mtcompute-6-6:05845] [ 8] 
<br>
/home/cummings/DART/DARTHome/bin/linux/DebrisProp [0x417992]
<br>
[mtcompute-6-6:05845] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 5845 on node 
<br>
mtcompute-6-6.local exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Any suggestions would be welcome.
<br>
<p>- Jeff Cummings
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Previous message:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
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
