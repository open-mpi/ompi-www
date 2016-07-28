<?
$subject_val = "[OMPI users] Ramifications of not posting receive";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  7 18:11:18 2012" -->
<!-- isoreceived="20120407221118" -->
<!-- sent="Sat, 7 Apr 2012 18:11:14 -0400" -->
<!-- isosent="20120407221114" -->
<!-- name="Jason Murphy" -->
<!-- email="thejaymurphy_at_[hidden]" -->
<!-- subject="[OMPI users] Ramifications of not posting receive" -->
<!-- id="CAF09UAMGXGaNo+pDLgWPbwcQtCYvEkXhQzNDJGvmZQ9RezsKXA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Ramifications of not posting receive<br>
<strong>From:</strong> Jason Murphy (<em>thejaymurphy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-07 18:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18968.php">ffffaa fffff4 ffffaem ffffb3 fffff3: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="18966.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an MPI configuration (x86) with multiple processes communicating
<br>
within a serverbetween 2 servers (one comm group). There are more processes
<br>
than cores available on each server, so to avoid busy-poll, processes block
<br>
during intra-node communication on message queues, sender performs
<br>
mpi_bsend and sends message queue wakeup. Receiver blocks on message queue,
<br>
receives tag in wakeup, performs blocking receive with ANY_SOURCE and tag
<br>
(msg Id). For inter-node communication, am using UDP socket wakeup for same
<br>
purpose (block and not busy wait), however, I am concerned about rare
<br>
instance if UDP wakeup is dropped (network env is fairly 'closed' but could
<br>
happen; could use TCP but looking to avoid overhead if possible). In the
<br>
case where frequent periodic messages of the same type are sent, there
<br>
wouldn't be an issue (even if same message tag sent from multiple processes
<br>
since ANY_SOURCE is used in mpi_recv) except the final message might not be
<br>
never be processed (if a wakeup is dropped somewhere in the middle of
<br>
execution). On the other hand, in the case where infrequent aperiodic
<br>
messages are sent, if the associated UDP wakeup is dropped, a receive might
<br>
never be posted by the receiver for a bsend call made. What are the
<br>
ramifications - might this eventually lead to deadlock since the queue tail
<br>
? I realize this architecture is somewhat problematic, however, I have some
<br>
design constraints and am wondering if there are any suggestions for
<br>
dealing with this potential issue.
<br>
<p>Thank you,
<br>
Jay
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18967/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18968.php">ffffaa fffff4 ffffaem ffffb3 fffff3: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="18966.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
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
