<?
$subject_val = "[OMPI users] Conflict between OpenMPI 1.7.3 and libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  3 09:03:54 2013" -->
<!-- isoreceived="20131103140354" -->
<!-- sent="Sun, 3 Nov 2013 09:03:26 -0500" -->
<!-- isosent="20131103140326" -->
<!-- name="Dominique Orban" -->
<!-- email="dominique.orban_at_[hidden]" -->
<!-- subject="[OMPI users] Conflict between OpenMPI 1.7.3 and libevent" -->
<!-- id="etPan.527657ea.795194ee.c7be_at_Aragorn" -->
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
<strong>Subject:</strong> [OMPI users] Conflict between OpenMPI 1.7.3 and libevent<br>
<strong>From:</strong> Dominique Orban (<em>dominique.orban_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-03 09:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22899.php">Ralph Castain: "Re: [OMPI users] running an open mpi application on  hadoop  ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Maybe reply:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>I'm a humble indirect user of Open-MPI. On OSX, my Open-MPI installation is supplied by the Homebrew package manager [1]. Another package supplied by Homebrew is libevent.
<br>
<p>I recently read on the dev list [2] a discussion about libevent having always been part of Open-MPI but being more apparent in 1.7.3.
<br>
<p>At least on OSX, this causes unfortunate header file conflicts. If a user were to install both libevent and Open-MPI by hand to /usr/local (which is essentially what Homebrew does), one of the two would obliterate the 'event2' header files of the other. As far as I can tell, the 'event2' header files in Open-MPI differ from those in libevent 2.0.21 (the version currently distributed in Homebrew). This kind of conflict was absent from Open-MPI 1.6.
<br>
<p>Homebrew supplies Open-MPI 1.7.3 by default because the compilers shipped with the latest OSX development environment (Xcode 5.0) fail to build Open-MPI 1.6.5 correctly (I do not use those compilers myself, but I am told `make check` fails) [3].&#194;&#160;
<br>
<p>In view of the header file conflict, I'm wondering if there is a strong argument for not keeping the libevent-related header files of Open-MPI private. Stashing libevent-related stuff to a private location could probably be done more easily than adding logic to build Open-MPI against an external libevent.&#194;&#160;It's unfortunate for Open-MPI to conflict in this way with seemingly unrelated software packages that rely on libevent (e.g., tmux).
<br>
<p>Thanks.
<br>
<p>--&#194;&#160;
<br>
Dominique
<br>
<p>[1] <a href="http://brew.sh">http://brew.sh</a>
<br>
[2]&#194;&#160;<a href="http://www.open-mpi.org/community/lists/devel/2013/04/12273.php">http://www.open-mpi.org/community/lists/devel/2013/04/12273.php</a>
<br>
[3]&#194;&#160;<a href="https://github.com/mxcl/homebrew/issues/23642">https://github.com/mxcl/homebrew/issues/23642</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22899.php">Ralph Castain: "Re: [OMPI users] running an open mpi application on  hadoop  ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Reply:</strong> <a href="22901.php">Ralph Castain: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Maybe reply:</strong> <a href="22917.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
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
