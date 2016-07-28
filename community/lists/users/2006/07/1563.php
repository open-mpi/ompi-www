<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 06:50:37 2006" -->
<!-- isoreceived="20060706105037" -->
<!-- sent="Thu, 6 Jul 2006 06:50:18 -0400" -->
<!-- isosent="20060706105018" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] run time Error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB2485B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] run time Error" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 06:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1561.php">usha devi regadi: "[OMPI users] run time Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually with this kind of error, more information is shown regarding the
<br>
failure.  Are there any other failure messages displayed?  Please see
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>.
<br>
&nbsp;
<br>
Also be aware that &quot;test&quot; is the name of a Unix executable (e.g.,
<br>
/bin/test).  I'm assuming that you're trying to run your own executable
<br>
named &quot;test&quot; (probably an MPI application).  Once you get Open MPI
<br>
working, you may want to run &quot;mpirun -np 2 ./test&quot; to ensure that you
<br>
run the test executable that you intend.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of usha devi regadi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Thursday, July 06, 2006 6:25 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] run time Error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dear openmpi users,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am using openmpi-1.0.2 on Redhat linux. I am not able to
<br>
succussfully run mpirun in single PC with 2 np. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Can you give me some advices? thank you very much in advance.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 2 test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERROR: A daemon on node wolf46 failed to start as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expected.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERROR: There may be more information available from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERROR: the remote shell (see above).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ERROR: The daemon exited unexpectedly with status 1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;usha 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1563/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Previous message:</strong> <a href="1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1561.php">usha devi regadi: "[OMPI users] run time Error"</a>
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
