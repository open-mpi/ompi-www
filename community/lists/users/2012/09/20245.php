<?
$subject_val = "[OMPI users] MPI_Probe causes a crash with signal 6.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 19 18:22:49 2012" -->
<!-- isoreceived="20120919222249" -->
<!-- sent="Wed, 19 Sep 2012 23:22:44 +0100 (BST)" -->
<!-- isosent="20120919222244" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Probe causes a crash with signal 6." -->
<!-- id="1348093364.88212.YahooMailNeo_at_web133204.mail.ir2.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Probe causes a crash with signal 6.<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-19 18:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20246.php">Ralph Castain: "Re: [OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>Previous message:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,

I have an application which calls MPI_Probe. Strangely enough, the call leads to a crash with signal 6. 

I am using OpenMPI-1.6, built using gcc-4.6, running on Linux-3.23.

For reference, I am attaching four snapshots:

(1). opal-list-H: The assertion which seems to have caused signal 6 in file opal_list.h (<a href="http://goo.gl/P5pWJ">http://goo.gl/P5pWJ</a>)
(2). stack-trace: The relevant stack-trace, (<a href="http://goo.gl/HW0kM">http://goo.gl/HW0kM</a>)
(3). watch-expressions: Related watch expressions in the debugger window (<a href="http://goo.gl/ejl7d">http://goo.gl/ejl7d</a>)
(4). top-level-call: The point in the user-application where MPI_Probe is
 called (<a href="http://goo.gl/Jm4Rm">http://goo.gl/Jm4Rm</a>)

I do not understand the cause, and I'd appreciate any help.

Thanks a lot.

Devendra
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20245/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20246.php">Ralph Castain: "Re: [OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>Previous message:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
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
