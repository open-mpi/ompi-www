<?
$subject_val = "[OMPI users] Memory corruption?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 07:09:00 2009" -->
<!-- isoreceived="20091222120900" -->
<!-- sent="Tue, 22 Dec 2009 13:10:03 +0100" -->
<!-- isosent="20091222121003" -->
<!-- name="Roy Dragseth" -->
<!-- email="roy.dragseth_at_[hidden]" -->
<!-- subject="[OMPI users] Memory corruption?" -->
<!-- id="200912221310.03942.roy.dragseth_at_uit.no" -->
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
<strong>Subject:</strong> [OMPI users] Memory corruption?<br>
<strong>From:</strong> Roy Dragseth (<em>roy.dragseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 07:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11628.php">Ralph Castain: "Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<li><strong>Previous message:</strong> <a href="11626.php">vishal shorghar: "[OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11721.php">Roy Dragseth: "Re: [OMPI users] Memory corruption?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11721.php">Roy Dragseth: "Re: [OMPI users] Memory corruption?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>We have started to scale up one of our codes and sometimes we get messages 
<br>
like this:
<br>
<p>[c9-13.local:31125] Memory 0x2aaab7b64000:217088 cannot be freed from 
<br>
the registration cache. Possible memory corruption.
<br>
<p>It seems like the application runs normally and it does not crash becaus of 
<br>
this.  Should we be worried?  We have tested the code with up to 1700 cores 
<br>
and the message becomes more frequent as we scale up.
<br>
<p>System details:
<br>
<p>Rocks 5.2 (aka CentOS 5.3) x86_64
<br>
INTEL Compiler 11.1
<br>
OFED 1.4.1
<br>
OpenMPI 1.3.3
<br>
<p>Best regards and Merry Christmas to all,
<br>
r.
<br>
<p><pre>
-- 
  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
	      phone:+47 77 64 41 07, fax:+47 77 64 41 00
        Roy Dragseth, Team Leader, High Performance Computing
	 Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11628.php">Ralph Castain: "Re: [OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<li><strong>Previous message:</strong> <a href="11626.php">vishal shorghar: "[OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11721.php">Roy Dragseth: "Re: [OMPI users] Memory corruption?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11721.php">Roy Dragseth: "Re: [OMPI users] Memory corruption?"</a>
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
