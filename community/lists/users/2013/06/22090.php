<?
$subject_val = "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 05:09:26 2013" -->
<!-- isoreceived="20130614090926" -->
<!-- sent="Fri, 14 Jun 2013 17:08:51 +0800" -->
<!-- isosent="20130614090851" -->
<!-- name="Zehan Cui" -->
<!-- email="zehan.cui_at_[hidden]" -->
<!-- subject="[OMPI users] unknow option &amp;quot;--tree-spawn&amp;quot; with OpenMPI-1.7.1" -->
<!-- id="CALr9+a7tv3PrQyMKV8Dwe1Y6-FfchpUxzcjPWWJNomGw8TLnUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1<br>
<strong>From:</strong> Zehan Cui (<em>zehan.cui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 05:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22089.php">Gus Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Reply:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have just install OpenMPI-1.7.1 and cannot get it running.
<br>
<p>Here is the error messages:
<br>
<p>[cmy_at_gLoginNode1 test_nbc]$ mpirun -n 4 -host gnode100 ./hello
<br>
[gnode100:31789] Error: unknown option &quot;--tree-spawn&quot;
<br>
input in flex scanner failed
<br>
[gLoginNode1:14920] [[62542,0],0] ORTE_ERROR_LOG: A message is attempting
<br>
to be sent to a process whose contact information is unknown in file
<br>
rml_oob_send.c at line 362
<br>
[gLoginNode1:14920] [[62542,0],0] attempted to send to [[62542,0],1]: tag 15
<br>
[gLoginNode1:14920] [[62542,0],0] ORTE_ERROR_LOG: A message is attempting
<br>
to be sent to a process whose contact information is unknown in file
<br>
base/grpcomm_base_xcast.c at line 166
<br>
<p>I have run it on several nodes, and got the same messages.
<br>
<p><p>- Zehan Cui
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22089.php">Gus Correa: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Reply:</strong> <a href="22092.php">Ralph Castain: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
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
