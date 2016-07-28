<?
$subject_val = "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 09:57:02 2015" -->
<!-- isoreceived="20150410135702" -->
<!-- sent="Fri, 10 Apr 2015 13:57:00 +0000" -->
<!-- isosent="20150410135700" -->
<!-- name="Alan Wild" -->
<!-- email="alan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?" -->
<!-- id="CAATyho6d8psM81LOpi4HAKb5fGEShb3eLFj7taFh4K311wUsEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?<br>
<strong>From:</strong> Alan Wild (<em>alan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 09:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26665.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="26645.php">Alan Wild: "[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I didn't get back to your right away.  1) I'm on the digest, 2) not
<br>
real familiar with git and 3) just learned the hard way how to update the
<br>
build to work with the latest versions of automake, autoconf, and libtool.
<br>
:)
<br>
<p>Anyway, I believe the patch is an improvement.  Looking at it, I can tell
<br>
you are now checking the first three characters.  I know the plan is to go
<br>
to 1.9 and then 2.0, but if the numbering ever went more like the linux
<br>
kernel into, say, a 2.10.0 release then your number of characters would be
<br>
off.  Also, doesn't the current ABI promise allow 1.7 to be compatible with
<br>
1.8?
<br>
<p>Personally, I'm fine with the solution, but I wanted to point out the
<br>
potential shortcoming(s) should an issue arise again.
<br>
<p>One other thought, maybe this is an case where the code should emit a
<br>
warning (that could be suppressed with a command line parameter) when the
<br>
versions aren't identical?   Certainly if the versions are outside the
<br>
&quot;allowed&quot; range (whatever you determine that to be) should be an error and
<br>
a refused connection, but rather than silently accepting mixed versions
<br>
(which you indicated has caused problems in the past would be to warn of a
<br>
potential issue (and users could then consciously suppress the warning if
<br>
they are fine with it).  Food for thought.
<br>
<p>Unfortunately, the patch didn't actually solve my particular problem (yet,
<br>
anyway) because the vendor application statically linked 1.8.3 into their
<br>
executable.  (I honestly didn't realize it when I made my previous post).
<br>
So the code on their side of the connection is still rejecting the
<br>
connection:
<br>
<p>[arwild1_at_hplcslsp2 ~]$ mpirun -n 6 -H localhost vendor_mpi_app
<br>
[hplcslsp2:23064] [[44148,1],0] tcp_peer_recv_connect_ack: received
<br>
different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
<br>
[hplcslsp2:23065] [[44148,1],1] tcp_peer_recv_connect_ack: received
<br>
different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
<br>
[hplcslsp2:23067] [[44148,1],2] tcp_peer_recv_connect_ack: received
<br>
different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
<br>
[hplcslsp2:23069] [[44148,1],3] tcp_peer_recv_connect_ack: received
<br>
different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
<br>
[hplcslsp2:23071] [[44148,1],4] tcp_peer_recv_connect_ack: received
<br>
different version from [[44148,0],0]: 1.8.5rc2 instead of 1.8.3
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
<p><p>However, I believe if I can get the vendor to adopt this patch (or at least
<br>
dynamically link) the patch should help alleviate the need to stay in
<br>
lock-step version for version.
<br>
<p>Thank you,
<br>
<p>-Alan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26666/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26665.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="26645.php">Alan Wild: "[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26667.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
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
