<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 11:18:01 2009" -->
<!-- isoreceived="20090421151801" -->
<!-- sent="Tue, 21 Apr 2009 09:17:56 -0600" -->
<!-- isosent="20090421151756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="71d2d8cc0904210817p604bcb70j94699141ddad92bc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b4f9bf870904210724l5cb57fb8y327d47a4fa1a17d0_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 11:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9008.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9000.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9152.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm working on it - the code was not written for multiple app_contexts, and
<br>
I have to fix a few compensating errors as well.
<br>
<p>Hope to have it in the next couple of days.
<br>
<p><p><p>On Tue, Apr 21, 2009 at 8:24 AM, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the basic mpirun command I would like to run :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -rf rankfile -n 1 -host r001n001 master.x options1  : -n 1 -host
</span><br>
<span class="quotelev1">&gt; r001n002 master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1
</span><br>
<span class="quotelev1">&gt; -host r001n002 slave.x options4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with cat rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=r001n001 slot=0:*
</span><br>
<span class="quotelev1">&gt; rank 1=r001n002 slot=0:*
</span><br>
<span class="quotelev1">&gt; rank 3=r001n001 slot=1:*
</span><br>
<span class="quotelev1">&gt; rank 4=r001n002 slot=1:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be equivalent and more elegant to run :
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile myhostfile -rf rankfile -n 1 master.x options1 : -n 1
</span><br>
<span class="quotelev1">&gt; master.x options2 : -n 1 slave.x options3 : -n 1 slave.x options4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with cat myhostfile
</span><br>
<span class="quotelev1">&gt; r001n001 slots=2
</span><br>
<span class="quotelev1">&gt; r001n002 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope these examples will set you straight about I want to do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's something in the basis, right,
</span><br>
<span class="quotelev2">&gt;&gt; I tried to investigate it yesterday and saw that for some reason
</span><br>
<span class="quotelev2">&gt;&gt; jdata-&gt;bookmark-&gt;index is 2 instead of 1 ( in this example ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dellix7:28454] [
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev2">&gt;&gt; +417 ]  node-&gt;index = 1, jdata-&gt;bookmark-&gt;index=2
</span><br>
<span class="quotelev2">&gt;&gt; [dellix7:28454] [
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev2">&gt;&gt; +417 ]  node-&gt;index = 2, jdata-&gt;bookmark-&gt;index=2
</span><br>
<span class="quotelev2">&gt;&gt; I am not so familiar with this part of code, since it appears in all rmap
</span><br>
<span class="quotelev2">&gt;&gt; component and I just copied it :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am also not quite understand what Geoffroy tries to run, so I can think
</span><br>
<span class="quotelev2">&gt;&gt; od
</span><br>
<span class="quotelev2">&gt;&gt; workaround.
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9008.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9000.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9152.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
