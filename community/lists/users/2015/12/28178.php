<?
$subject_val = "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 17:40:01 2015" -->
<!-- isoreceived="20151217224001" -->
<!-- sent="Thu, 17 Dec 2015 22:39:56 +0000" -->
<!-- isosent="20151217223956" -->
<!-- name="Bathke, Chuck" -->
<!-- email="bathke_at_[hidden]" -->
<!-- subject="[OMPI users] Need help resolving &amp;quot;error obtaining device context for mlx4_0&amp;quot;" -->
<!-- id="80e3112050a442509e65c19b5ff2b628_at_EXG13-P-MBX03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;<br>
<strong>From:</strong> Bathke, Chuck (<em>bathke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 17:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28179.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>Previous message:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28179.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>Reply:</strong> <a href="28179.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I have a system of AMD blades that I am trying to run MCNP6 on using OPENMPI. I installed openmpi-1.6.5. I also have installed Intel FORTRAN and C compiles. I compiled MCNP6 using FC=&quot;mpif90&quot; CC=&quot;mpicc&quot; ... It runs just fine when I run it on a 1-hour test case on just one blade. I need to run it on several blades, but it issues an error and crashes and burns. I have sought help here, but no one seems to know how to fix it. I have mounted /opt and /home on bud and bud6 on the corresponding /opt and /home on bud4, at their suggestion. That did not fix anything. Please look at the attached file (created with bud4&gt;tar -zcf info.tgz mpihT3) that holds the data that is requested at <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a> and in bullet 13 on <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a> . Can you look at it and suggest a solution? I suspect that it is something trivial that does not stand out and say, &quot;look here you idiot.&quot; Thanks.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charles &quot;Chuck&quot; Bathke
<br>
<p>MS-C921
<br>
Los Alamos National Laboratory
<br>
P.O. Box 1663
<br>
Los Alamos, NM 87545
<br>
Phone:(505)667-7214
<br>
Cell:(505)695-5709
<br>
Fax: 505-665-2897
<br>
Location: TA-16, Building 0200, Room 125
<br>
NEN-5 Group Office: 505-667-0914
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28178/info.tgz">info.tgz</a>
</ul>
<!-- attachment="info.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28179.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>Previous message:</strong> <a href="28177.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28179.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>Reply:</strong> <a href="28179.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
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
