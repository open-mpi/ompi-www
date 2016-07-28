<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 16:35:23 2011" -->
<!-- isoreceived="20110214213523" -->
<!-- sent="Tue, 15 Feb 2011 10:35:17 +1300" -->
<!-- isosent="20110214213517" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="8abfa108644ba3b9fa3f0692d92b891d.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20How%20does%20authentication%20between%20nodes%20work%20without%20password?%20(Newbie%20alert%20on)"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-02-14 16:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15606.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15604.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Maybe in reply to:</strong> <a href="15546.php">Tena Sakai: "[OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This probably shows my lack of understanding as to how OpenMPI
<br>
negotiates the connectivity between nodes when given a choice
<br>
of interfaces but anyway:
<br>
<p>&nbsp;does dasher have any network interfaces that vixen does not?
<br>
<p>The scenario I am imgaining would be that you ssh into dasher
<br>
from vixen using a &quot;network&quot; that both share and similarly, when
<br>
you mpirun from vixen, the network that OpenMPI uses is constrained
<br>
by the interfaces that can be seen from vixen, so you are fine.
<br>
<p>However when you are on dasher, mpirun sees another interface which
<br>
it takes a liking to and so tries to use that, but that interface
<br>
is not available to vixen so the OpenMPI processes spawned there
<br>
terminate when they can't find that interface so as to talk back
<br>
to dasher's controlling process.
<br>
<p>I know that you are no longer working with VMs but it's along those
<br>
lines that I was thinking: extra network interfaces that you assume
<br>
won't be used but which are and which could then be overcome by use
<br>
of an explicit
<br>
<p>&nbsp;--mca btl_tcp_if_exclude virbr0
<br>
<p>or some such construction (virbr0 used as an example here).
<br>
<p>Kevin
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15606.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15604.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Maybe in reply to:</strong> <a href="15546.php">Tena Sakai: "[OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
