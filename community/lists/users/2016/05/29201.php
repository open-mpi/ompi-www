<?
$subject_val = "[OMPI users] Building vs packaging";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 14 07:37:22 2016" -->
<!-- isoreceived="20160514113722" -->
<!-- sent="Sat, 14 May 2016 12:37:25 +0100" -->
<!-- isosent="20160514113725" -->
<!-- name="Rob Malpass" -->
<!-- email="lug_at_[hidden]" -->
<!-- subject="[OMPI users] Building vs packaging" -->
<!-- id="01c801d1add4$fd059ad0$f710d070$_at_getiton.myzen.co.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Building vs packaging<br>
<strong>From:</strong> Rob Malpass (<em>lug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-14 07:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29200.php">Jeff Squyres (jsquyres): "Re: [OMPI users] One more (possible) bug report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>&nbsp;
<br>
<p>I posted about a fortnight ago to this list as I was having some trouble
<br>
getting my nodes to be controlled by my master node.   Perceived wisdom at
<br>
the time was to compile with the -enable-orterun-prefix-by-default.
<br>
<p>&nbsp;
<br>
<p>For some time I'd been getting cannot open libopen-rte.so.7 which points to
<br>
a problem with LD_LIBRARY_PATH.   I had been able to run it on nodes 3 and 4
<br>
even though (from headnode) if I do
<br>
<p>&nbsp;
<br>
<p>ssh node4 'echo $LD_LIBRARY_PATH'
<br>
<p>&nbsp;
<br>
<p>returns a blank line.   However - as I say it's working on nodes 3 and 4.
<br>
<p>&nbsp;
<br>
<p>I had been hacking for ages on nodes 1 and 2 getting the same error but
<br>
still with LD_LIBRARY_PATH apparently not set for an interactive login.
<br>
<p>&nbsp;
<br>
<p>Almost in desperation, I cheated:
<br>
<p>&nbsp;
<br>
<p>sudo  apt-get install openmpi-bin
<br>
<p>&nbsp;
<br>
<p>and hey presto.   I can now do (from head node)
<br>
<p>&nbsp;
<br>
<p>mpirun -H node2,node3,node4 -n 10 foo
<br>
<p>&nbsp;
<br>
<p>and it works fine.   So clearly apt-get install has set something that I'd
<br>
not done (and it's seemingly not LD_LIBRARY_PATH) as ssh node2 'echo
<br>
$LD_LIBRARY_PATH' still returns a blank line.
<br>
<p>&nbsp;
<br>
<p>Can anyone tell me what might be in the install script so I can get a clue?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29200.php">Jeff Squyres (jsquyres): "Re: [OMPI users] One more (possible) bug report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29202.php">Gilles Gouaillardet: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29209.php">David Shrader: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Reply:</strong> <a href="29212.php">Dave Love: "Re: [OMPI users] Building vs packaging"</a>
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
