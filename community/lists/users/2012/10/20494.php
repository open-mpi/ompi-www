<?
$subject_val = "[OMPI users] singleton spawn regression";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 16 13:46:38 2012" -->
<!-- isoreceived="20121016174638" -->
<!-- sent="Tue, 16 Oct 2012 10:46:34 -0700" -->
<!-- isosent="20121016174634" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] singleton spawn regression" -->
<!-- id="CANjXV69u1xxxUURrsDf2B9sPCaS+kk3X2gOH8zpCgcvaXPLWzA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] singleton spawn regression<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-16 13:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20495.php">marco atzeri: "[OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20493.php">Anup Rao: "[OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20500.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>Reply:</strong> <a href="20500.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>There was a bug in version 1.6.1 that caused singleton spawn not to
<br>
work correctly with multi-machine configurations.  I verified that a
<br>
nightly build of 1.6.2 fixed this issue, in particular 1.6.2a1r27234
<br>
works.  I just grabbed the 1.6.2 official release, and it appears that
<br>
somehow the fix has been removed.
<br>
<p>I am testing with the simple_spawn.c example.  Instead of passing
<br>
MPI_INFO_NULL to the spawn call, I create an Info object, and set the
<br>
&quot;add-host&quot; to a comma delimited list of nodes.  When I run this in the
<br>
nightly mentioned above, without mpirun, everything works as expected
<br>
(the nodes I list in the &quot;add-host&quot; are in the output text of the
<br>
program).  When I run the same code with the released 1.6.2, I get the
<br>
old behavior from 1.6.1 where all slaves run on localhost.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20495.php">marco atzeri: "[OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20493.php">Anup Rao: "[OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20500.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>Reply:</strong> <a href="20500.php">Ralph Castain: "Re: [OMPI users] singleton spawn regression"</a>
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
