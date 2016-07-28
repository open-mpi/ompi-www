<?
$subject_val = "[OMPI users] IB to some nodes but TCP for others";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 13:25:47 2015" -->
<!-- isoreceived="20150616172547" -->
<!-- sent="Tue, 16 Jun 2015 13:25:46 -0400" -->
<!-- isosent="20150616172546" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="[OMPI users] IB to some nodes but TCP for others" -->
<!-- id="CAMsSzSAbWu-8kRCArTvwKvgy4=d6+tVSOD1a4TNVPoj1_8bdvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] IB to some nodes but TCP for others<br>
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-16 13:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27142.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Previous message:</strong> <a href="27140.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Reply:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Reply:</strong> <a href="27144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>We have a set of nodes which are all connected via InfiniBand, but all are
<br>
mutually connected. For example, nodes 1-32 are connected to IB switch A
<br>
and 33-64 are connected to switch B, but there is no IB connection between
<br>
switches A and B. However, all nodes are mutually routable over TCP.
<br>
<p>What we'd like to do is tell OpenMPI to use IB when communicating amongst
<br>
nodes 1-32 or 33-64, but to use TCP whenever a node in the set 1-32 needs
<br>
to talk to another node in the set 33-64 or vice-versa. We've written an
<br>
application in such a way that we can confine most of the bandwidth and
<br>
latency sensitive operations to within groups of 32 nodes, but members of
<br>
the two groups do have to communicate infrequently via MPI.
<br>
<p>Is there any way to tell OpenMPI to use IB within an IB-connected group and
<br>
TCP for inter-group communications? Obvoiously, we would need to tell
<br>
OpenMPI the membership of the two groups. If there's no such functionality,
<br>
would it be a difficult thing to hack in (I'd be glad to give it a try
<br>
myself, but I'm not that familiar with the codebase, so a couple of
<br>
pointers would be helpful, or a note saying I'm crazy for trying).
<br>
<p>Thanks,
<br>
Tim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27142.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error building openmpi-dev-1883-g7cce015 on Linux"</a>
<li><strong>Previous message:</strong> <a href="27140.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Reply:</strong> <a href="27143.php">Ralph Castain: "Re: [OMPI users] IB to some nodes but TCP for others"</a>
<li><strong>Reply:</strong> <a href="27144.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IB to some nodes but TCP for others"</a>
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
