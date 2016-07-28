<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 10:24:37 2009" -->
<!-- isoreceived="20090421142437" -->
<!-- sent="Tue, 21 Apr 2009 16:24:32 +0200" -->
<!-- isosent="20090421142432" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="b4f9bf870904210724l5cb57fb8y327d47a4fa1a17d0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 10:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9001.php">Eugene Loh: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="8999.php">jody: "[OMPI users] Open-MPI and gprof"</a>
<li><strong>Maybe in reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9007.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9007.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lenny,
<br>
<p>Here is the basic mpirun command I would like to run :
<br>
<p>mpirun -rf rankfile -n 1 -host r001n001 master.x options1  : -n 1 -host
<br>
r001n002 master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1
<br>
-host r001n002 slave.x options4
<br>
<p>with cat rankfile
<br>
rank 0=r001n001 slot=0:*
<br>
rank 1=r001n002 slot=0:*
<br>
rank 3=r001n001 slot=1:*
<br>
rank 4=r001n002 slot=1:*
<br>
<p>It should be equivalent and more elegant to run :
<br>
mpirun -hostfile myhostfile -rf rankfile -n 1 master.x options1 : -n 1
<br>
master.x options2 : -n 1 slave.x options3 : -n 1 slave.x options4
<br>
<p>with cat myhostfile
<br>
r001n001 slots=2
<br>
r001n002 slots=2
<br>
<p>I hope these examples will set you straight about I want to do
<br>
<p>Regards
<br>
<p>Geoffroy
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's something in the basis, right,
</span><br>
<span class="quotelev1">&gt; I tried to investigate it yesterday and saw that for some reason
</span><br>
<span class="quotelev1">&gt; jdata-&gt;bookmark-&gt;index is 2 instead of 1 ( in this example ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [dellix7:28454] [ ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev1">&gt; +417 ]  node-&gt;index = 1, jdata-&gt;bookmark-&gt;index=2
</span><br>
<span class="quotelev1">&gt; [dellix7:28454] [ ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev1">&gt; +417 ]  node-&gt;index = 2, jdata-&gt;bookmark-&gt;index=2
</span><br>
<span class="quotelev1">&gt; I am not so familiar with this part of code, since it appears in all rmap
</span><br>
<span class="quotelev1">&gt; component and I just copied it :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am also not quite understand what Geoffroy tries to run, so I can think
</span><br>
<span class="quotelev1">&gt; od
</span><br>
<span class="quotelev1">&gt; workaround.
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9001.php">Eugene Loh: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="8999.php">jody: "[OMPI users] Open-MPI and gprof"</a>
<li><strong>Maybe in reply to:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9007.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9007.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
