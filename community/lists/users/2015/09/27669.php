<?
$subject_val = "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 11:19:08 2015" -->
<!-- isoreceived="20150924151908" -->
<!-- sent="Thu, 24 Sep 2015 11:18:38 -0400" -->
<!-- isosent="20150924151838" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking" -->
<!-- id="CAFb48S8MY7jpwsskBZ-DaWpTEPRyT7uaKD+YZ0Fdzi9c5Vm8RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 11:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27670.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27670.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Reply:</strong> <a href="27670.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI Users,
<br>
<p>I'm hoping someone here can help. I built Open MPI 1.10.0 with PGI 15.7
<br>
using this configure string:
<br>
<p>&nbsp;./configure --disable-vt --with-tm=/PBS --with-verbs
<br>
--disable-wrapper-rpath \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 CFLAGS='-fpic -m64' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS='-fpic -m64' FCFLAGS='-fpic -m64' FFLAGS='-fpic -m64' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/nobackup/gmao_SIteam/MPI/pgi_15.7-openmpi_1.10.0 |&amp; tee
<br>
configure.pgi15.7.log
<br>
<p>It seemed to pass 'make check'.
<br>
<p>I'm working at pleiades at NAS, and there they have both Sandy Bridge nodes
<br>
with GPUs (maia) and regular Sandy Bridge compute nodes (here after called
<br>
Sandy) without. To be extra careful (since PGI compiles to the architecture
<br>
you build on) I took a Westmere node and built Open MPI there just in case.
<br>
<p>So, as I said, all seems to work with a test. I now grab a maia node,
<br>
maia1, of an allocation of 4 I had:
<br>
<p>(102) $ mpicc -tp=px-64 -o helloWorld.x helloWorld.c
<br>
(103) $ mpirun -np 2 ./helloWorld.x
<br>
Process 0 of 2 is on maia1
<br>
Process 1 of 2 is on maia1
<br>
<p>Good. Now, let's go to a Sandy Bridge (non-GPU) node, r321i7n16, of an
<br>
allocation of 8 I had:
<br>
<p>(49) $ mpicc -tp=px-64 -o helloWorld.x helloWorld.c
<br>
(50) $ mpirun -np 2 ./helloWorld.x
<br>
[r323i5n11:13063] [[62995,0],7] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n6:57417] [[62995,0],2] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n7:67287] [[62995,0],3] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n8:57429] [[62995,0],4] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n10:35329] [[62995,0],6] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n9:13456] [[62995,0],5] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
<p>Hmm. Let's try turning off tcp (often my first thought when on an
<br>
Infiniband system):
<br>
<p>(51) $ mpirun --mca btl sm,openib,self -np 2 ./helloWorld.x
<br>
[r323i5n6:57420] [[62996,0],2] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n9:13459] [[62996,0],5] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n8:57432] [[62996,0],4] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n7:67290] [[62996,0],3] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n11:13066] [[62996,0],7] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
[r323i5n10:35332] [[62996,0],6] tcp_peer_send_blocking: send() to socket 9
<br>
failed: Broken pipe (32)
<br>
<p>Now, the nodes reporting the issue seem to be the &quot;other&quot; nodes on the
<br>
allocation that are in a different rack:
<br>
<p>(52) $ cat $PBS_NODEFILE | uniq
<br>
r321i7n16
<br>
r321i7n17
<br>
r323i5n6
<br>
r323i5n7
<br>
r323i5n8
<br>
r323i5n9
<br>
r323i5n10
<br>
r323i5n11
<br>
<p>Maybe that's a clue? I didn't think this would matter if I only ran two
<br>
processes...and it works on the multi-node maia allocation.
<br>
<p>I've tried searching the web, but the only place I've seen
<br>
tcp_peer_send_blocking is in a PDF where they say it's an error that can be
<br>
seen:
<br>
<p><a href="http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf">http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf</a>
<br>
<p>Any ideas for what this error can mean?
<br>
<p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27670.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27670.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Reply:</strong> <a href="27670.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
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
