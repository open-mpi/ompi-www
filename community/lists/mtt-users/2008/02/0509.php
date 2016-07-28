<?
$subject_val = "[MTT users] NetPIPE timeouts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 14:19:41 2008" -->
<!-- isoreceived="20080227191941" -->
<!-- sent="Wed, 27 Feb 2008 14:19:36 -0500" -->
<!-- isosent="20080227191936" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] NetPIPE timeouts" -->
<!-- id="20080227191935.GC51303_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] NetPIPE timeouts<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 14:19:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT users] NetPIPE timeouts"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Jeff Squyres: "Re: [MTT users] Good MPI collectives bakeoff permalinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT users] NetPIPE timeouts"</a>
<li><strong>Reply:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT users] NetPIPE timeouts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks, 
<br>
<p>We were seeing NetPIPE runs timing around 45sec the other
<br>
day, so I set the timeout value to -1 (which is infinity),
<br>
and last night a v1.2 NetPIPE run took 3 hrs! It looks like
<br>
the test got stuck:
<br>
<p>&nbsp;&nbsp;0: burl-ct-v440-2
<br>
&nbsp;&nbsp;1: burl-ct-v440-2
<br>
&nbsp;&nbsp;2: burl-ct-v440-2
<br>
&nbsp;&nbsp;3: burl-ct-v440-2
<br>
&nbsp;&nbsp;Now starting the main loop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0:       1 bytes      5 times --&gt;      0.49 Mbps in      15.59 usec
<br>
<p>The other bizarre thing is that NetPIPE now passes with the
<br>
infinite timeout, but seems to take the *same* duration as
<br>
the timed out runs:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=539">http://www.open-mpi.org/mtt/index.php?do_redir=539</a>
<br>
<p>(I was expecting NetPIPE to take *longer* than 45sec.)
<br>
<p>Any ideas why this would be?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT users] NetPIPE timeouts"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Jeff Squyres: "Re: [MTT users] Good MPI collectives bakeoff permalinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT users] NetPIPE timeouts"</a>
<li><strong>Reply:</strong> <a href="0510.php">Jeff Squyres: "Re: [MTT users] NetPIPE timeouts"</a>
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
