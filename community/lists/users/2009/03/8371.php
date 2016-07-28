<?
$subject_val = "[OMPI users] OpenMPI program getting stuck at poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 14:25:50 2009" -->
<!-- isoreceived="20090309182550" -->
<!-- sent="Mon, 09 Mar 2009 11:25:43 -0800" -->
<!-- isosent="20090309192543" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI program getting stuck at poll()" -->
<!-- id="C5DAAD37.B64C%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI program getting stuck at poll()<br>
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 15:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>Reply:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>&nbsp;I have a distributed program running on 400+ nodes and using OpenMPI. I
<br>
have run the same binary with nearly the same setup successfully previously.
<br>
However in my last two runs the program seems to be getting stuck after a
<br>
while before it completes. The stack trace at the time it gets stuck is as
<br>
follows:
<br>
<p>&nbsp;#0  0x00002ad0000c00df in poll () from /lib/libc.so.6
<br>
#1  0x00002acfffa49c27 in opal_poll_dispatch () from
<br>
/usr/lib64/libopen-pal.so.0
<br>
#2  0x00002acfffa47add in opal_event_base_loop () from
<br>
/usr/lib64/libopen-pal.so.0
<br>
#3  0x00002acfffa43203 in opal_progress () from /usr/lib64/libopen-pal.so.0
<br>
#4  0x00002acfff78b315 in ompi_request_test_some () from
<br>
/usr/lib64/libmpi.so.0
<br>
#5  0x00002acfff7adf7a in PMPI_Testsome () from /usr/lib64/libmpi.so.0
<br>
....
<br>
<p>I checked all the nodes and they seem to be up and doing fine. Any
<br>
suggestions/hints on what might be happening here would help greatly. Thanks
<br>
in advance.
<br>
<p>I am using OpenMPI 1.2.7 on gentoo linux.
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8371/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8370.php">Rolf Vandevaart: "Re: [OMPI users] inconsistant FAQ entries - building openmpi with sge	and running openmpi with sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>Reply:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
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
