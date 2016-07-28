<?
$subject_val = "[OMPI users] mpirun hangs without internet connection";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 11:39:13 2015" -->
<!-- isoreceived="20150115163913" -->
<!-- sent="Thu, 15 Jan 2015 17:39:11 +0100" -->
<!-- isosent="20150115163911" -->
<!-- name="Klara Hornisova" -->
<!-- email="hornisova_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs without internet connection" -->
<!-- id="CAEf2sdhZjRW=87rGanhPFC9rbTD=8zqu9LQojC=tQ5e26DDLbQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hangs without internet connection<br>
<strong>From:</strong> Klara Hornisova (<em>hornisova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 11:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Previous message:</strong> <a href="26185.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Reply:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have installed OpenMPI 1.6.5 under cygwin. When trying test example
<br>
<p>$mpirun hello
<br>
<p>or, e.g., more complex examples from scalapack, such as
<br>
<p>$mpirun -np 4 xslu
<br>
<p>everything works fine when there is an internet connection. However, when
<br>
the cable is disconnected, mpirun hangs without any error message. With -d
<br>
option the output stops before the line
<br>
<p>[my_computer...] [[3169,1],0] node[0].name my_computer... daemon0
<br>
<p>which is included in the output when the internet is on.
<br>
<p>The firewall is turned off.
<br>
I tried also to add options: -host localhost, -mca btl self, --mca
<br>
btl_tcp_if_include &#226;&#128;&#156;127.0.0.1/8&#226;&#128;&#157; and their combinations, but nothing has
<br>
changed.
<br>
<p>Thank you in advance for advice.
<br>
<p>Klara Hornisova
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Previous message:</strong> <a href="26185.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
<li><strong>Reply:</strong> <a href="26187.php">Marco Atzeri: "Re: [OMPI users] mpirun hangs without internet connection"</a>
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
