<?
$subject_val = "[OMPI users] --bynode vs --byslot";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 21:07:32 2008" -->
<!-- isoreceived="20080524010732" -->
<!-- sent="Sat, 24 May 2008 09:07:25 +0800" -->
<!-- isosent="20080524010725" -->
<!-- name="Cally K" -->
<!-- email="kalpana0611_at_[hidden]" -->
<!-- subject="[OMPI users] --bynode vs --byslot" -->
<!-- id="b05971d10805231807u1820c954i98f90c37b0c63f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] --bynode vs --byslot<br>
<strong>From:</strong> Cally K (<em>kalpana0611_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 21:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5730.php">Cally K: "[OMPI users] include port 80 in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="5728.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I have a question about --bynode and --byslot that i would like to
<br>
clarify
<br>
<p>Say, for example, I have a hostfile
<br>
<p>#Hostfile
<br>
<p>__________________________
<br>
node0
<br>
node1 slots=2 max_slots=2
<br>
node2 slots=2 max_slots=2
<br>
node3 slots=4 max_slots=4
<br>
___________________________
<br>
<p>There are 4 nodes and 9 slots, how do I run my mpirun, for now I use
<br>
<p>a) mpirun -np --bynode 4 ./abcd
<br>
<p>I know that the slot thingy is for SMPs, and I have tried running mpirun -np
<br>
--byslot 9 ./abcd
<br>
<p>and I noticed that its longer when I do --byslot when compared to --bynode
<br>
<p>and I just read the faq that said, by defauly the byslot option is used, so
<br>
I dun have to use it rite,,,
<br>
<p><p>I am testing my application's performance, need to do some
<br>
benchmarking...amd I doing it right by using the bynode option Or I dun mind
<br>
benchmarking the byslot option, but only if I am doing it rite.... Could
<br>
someone tell me
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5730.php">Cally K: "[OMPI users] include port 80 in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="5728.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
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
