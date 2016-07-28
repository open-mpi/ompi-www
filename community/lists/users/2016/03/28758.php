<?
$subject_val = "[OMPI users] Why does 'self' needs to be explicitly mentioned?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 19 14:53:17 2016" -->
<!-- isoreceived="20160319185317" -->
<!-- sent="Sat, 19 Mar 2016 14:53:16 -0400" -->
<!-- isosent="20160319185316" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Why does 'self' needs to be explicitly mentioned?" -->
<!-- id="CAHXxYDiW0biGwrGUAAo1hw3-6iVcxOC63ZLDcmpMBGXp2HcA-w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Why does 'self' needs to be explicitly mentioned?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-19 14:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28759.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28757.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Reply:</strong> <a href="28770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I am wondering as to:
<br>
<p>1. Why 'self' needs to be explicitly mentioned when using the BTL
<br>
communication? Since it must always be there for MPI communication to work,
<br>
should it not be implicit? I am sure there is some architectural rationale
<br>
behind this; could someone please elaborate?
<br>
<p>2. Why is this (using 'self') not needed when using MTL communication?
<br>
<p>3. Is it possible to mix BTL and MTL on a single OMPI job? For example, if
<br>
I have a card, let's say Texas Instruments Hyperlink, that is only
<br>
available as BTL, and I also have Qlogic cards on the same nodes, can I use
<br>
something like this:
<br>
<p>mpirun -np 3 -H h1,h2,h3 -mca MTL psm -mca BTL self,hlink
<br>
<p>4. If the above answer is yes, then would OpenMPI use both cards
<br>
*simultaneously* (and stripe messages) or would it use the one with higher
<br>
exclusivity and put the other as standby for failure recovery?
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28759.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28757.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Reply:</strong> <a href="28770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
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
