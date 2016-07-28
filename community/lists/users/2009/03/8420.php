<?
$subject_val = "[OMPI users] Can't start program across network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 06:17:29 2009" -->
<!-- isoreceived="20090313101729" -->
<!-- sent="Fri, 13 Mar 2009 19:17:23 +0900" -->
<!-- isosent="20090313101723" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="[OMPI users] Can't start program across network" -->
<!-- id="49BA32B3.5090705_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> [OMPI users] Can't start program across network<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 06:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8421.php">Andrew J Caird: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8419.php">Peter Teoh: "[OMPI users] MPI jobs ending up in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm having a problem running mpirun and I was wondering if there are suggestions on how to find out the cause.  I have 3 machines that I can use:  X, Y, and Z.  The important thing is that X is different from Y and Z (the software installed, version of Linux, etc.  Y and Z are identical software installations.)
<br>
<p>All of this works:
<br>
<p>[On X]  mpirun --host Y,Z --np 2 uname -a
<br>
[On X]  mpirun --host X,Y,Z --np 3 uname -a
<br>
[On Y]  mpirun --host Y --np 2 uname -a
<br>
<p>(and likewise, other combinations)
<br>
<p>What doesn't work is:
<br>
<p>[On Y] mpirun --host Y,Z --np 2 uname -a
<br>
[On Y] mpirun --host X,Y,Z --np 3 uname -a
<br>
<p>...and similarly for machine Z.  I can confirm that from any of the 3 machines, I can ssh to the other without typing in a password.  I set up the RSA keys correctly [I think].  When I run the above commands, it just hangs.  Adding &quot;--verbose&quot; doesn't produce any information...I don't know what it's doing.  I had a longer running program than &quot;uname&quot; and I didn't see it appear on any of the machines.  In fact [since it hangs], I don't see uname on &quot;top&quot;, either.  I do, however, see &quot;mpirun&quot; and &quot;orted&quot; on top, though.
<br>
<p>I guess some setup is missing that X has that the other two do not have.  Any suggestions on how to find out the cause of this problem?  Thank you!
<br>
<p>Ray
<br>
<p>PS:  It has been a long time since I got X working...I might have done something that I no longer remember; but I don't remember seeing this problem before.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8421.php">Andrew J Caird: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8419.php">Peter Teoh: "[OMPI users] MPI jobs ending up in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8430.php">Jeff Squyres: "Re: [OMPI users] Can't start program across network"</a>
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
