<?
$subject_val = "[MTT users] mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 13:14:01 2014" -->
<!-- isoreceived="20140407171401" -->
<!-- sent="Mon, 7 Apr 2014 10:14:00 -0700 (PDT)" -->
<!-- isosent="20140407171400" -->
<!-- name="tesfaye mamuye" -->
<!-- email="tesfa2127_at_[hidden]" -->
<!-- subject="[MTT users] mpirun problem" -->
<!-- id="1396890840.75925.YahooMailNeo_at_web140702.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> [MTT users] mpirun problem<br>
<strong>From:</strong> tesfaye mamuye (<em>tesfa2127_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 13:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0794.php">Jeff Squyres (jsquyres): "Re: [MTT users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/03/0792.php">Ralph Castain: "Re: [MTT users] Account request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0794.php">Jeff Squyres (jsquyres): "Re: [MTT users] mpirun problem"</a>
<li><strong>Reply:</strong> <a href="0794.php">Jeff Squyres (jsquyres): "Re: [MTT users] mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all

I am using python script for simulation on my laptop. The software I'm using support MPI. But at the end&#160; the following problem is reported by mpirun. I'm seeking anyone to fix the problem. Thank you for your time.


-----------------------------------------------------------------|
[tfish-Satellite-Pro-L300:30299] [[10889,1],0]-[[10889,0],0] mca_oob_tcp_msg_recv: readv failed: Connection timed out (110)
[tfish-Satellite-Pro-L300:30299] [[10889,1],0] routed:binomial: Connection to lifeline [[10889,0],0] lost
[tfish-Satellite-Pro-L300:30300] [[10889,1],1]-[[10889,0],0] mca_oob_tcp_msg_recv: readv failed: Connection timed out (110)
[tfish-Satellite-Pro-L300:30300] [[10889,1],1] routed:binomial: Connection to lifeline [[10889,0],0] lost
--------------------------------------------------------------------------
mpirun has exited due to process rank 0 with PID 30297 on
node tfish-Satellite-Pro-L300 exiting without calling &quot;finalize&quot;. This may
have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
tfish_at_tfish-Satellite-Pro-L300:~/Desktop/new/new1$
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0794.php">Jeff Squyres (jsquyres): "Re: [MTT users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/03/0792.php">Ralph Castain: "Re: [MTT users] Account request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0794.php">Jeff Squyres (jsquyres): "Re: [MTT users] mpirun problem"</a>
<li><strong>Reply:</strong> <a href="0794.php">Jeff Squyres (jsquyres): "Re: [MTT users] mpirun problem"</a>
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
