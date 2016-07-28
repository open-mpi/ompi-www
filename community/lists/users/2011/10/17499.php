<?
$subject_val = "[OMPI users] Private and public IP mixing.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  4 13:21:40 2011" -->
<!-- isoreceived="20111004172140" -->
<!-- sent="Tue, 4 Oct 2011 19:21:16 +0200" -->
<!-- isosent="20111004172116" -->
<!-- name=".-=Kiwi=-." -->
<!-- email="heffeque_at_[hidden]" -->
<!-- subject="[OMPI users] Private and public IP mixing." -->
<!-- id="CAD4g32RBSPjGBfo2Gu9v6ffi=W_ojjBSgPzz1rKq4+0L0qPn+g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Private and public IP mixing.<br>
<strong>From:</strong> .-=Kiwi=-. (<em>heffeque_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-04 13:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are constructing a set of computers with Open MPI and there's a small
<br>
problem with mixing public and private IPs.
<br>
<p>We aren't sure about what's causing the problem or how to solve it.
<br>
<p>The files are shared thanks to NFS and we have a couple computers with
<br>
private IPs and public IPs that we want them to send MPI work to some
<br>
machines that have public IPs.
<br>
<p>I'm going to try to describe with example IPs.
<br>
<p>Computer 1 sees itself as eth0:  172...2  but has a public IP assigned:
<br>
210...2
<br>
Computer 2 sees itself as eth0:  172...3  but has a public IP assigned:
<br>
210...3
<br>
Computers outside the subnet directly have public IPs assigned:  210...100+
<br>
<p>The computers outside see Computer 1 and 2 only with 210... they can't see
<br>
the 172... internal IPs.
<br>
<p>If an outside computer launches mpirun to Computer 1, it works ok.
<br>
If Computer 1 tries to launch mpirun to Computer 2 (with 172...) it also
<br>
works ok (not with 210... because they don't know that that's their public
<br>
IP, but that's not an issue).
<br>
<p>The problem comes when Computer 1 or 2 try to launch mpirun to outside
<br>
computers.
<br>
<p>We tried to check out what was happening and installed wireshark on an
<br>
outside computer and it seems that the ssh part works ok (the ssh talk
<br>
between 210...2 and 210...101 is ok), but after that the outside computer
<br>
tries to send a TCP SYN package to 172...2 instead of 210...2 and the rest
<br>
of the packets onward the same.
<br>
<p>Is there a way to solve this problem?
<br>
<p>I've read this (
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a> ) but I'm
<br>
not really sure what he's doing there.
<br>
<p>We have the option of plugging Computer 1 and Computer 2 directly to the
<br>
switch that the outside computers are on, but we'd rather not because we'd
<br>
prefer the computers to stay on the private network, but if there's no other
<br>
way, I guess we can.
<br>
<p>Can it be done without having to change the network topology?
<br>
<p>Thanks in advance.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
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
