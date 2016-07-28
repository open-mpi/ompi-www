<?
$subject_val = "[OMPI users] Restart after code hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 17:26:10 2016" -->
<!-- isoreceived="20160616212610" -->
<!-- sent="Thu, 16 Jun 2016 17:25:40 -0400" -->
<!-- isosent="20160616212540" -->
<!-- name="Alex Kaiser" -->
<!-- email="adkaiser_at_[hidden]" -->
<!-- subject="[OMPI users] Restart after code hangs" -->
<!-- id="CAFvb=+4OL04G9bvWPgVAiDYyfmrDAaNS64Rrj56ByoYFmEPT6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Restart after code hangs<br>
<strong>From:</strong> Alex Kaiser (<em>adkaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 17:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have an MPI code which sometimes hangs, simply stops running. It is not
<br>
clear why and it uses many large third party libraries so I do not want to
<br>
try to fix it. The code is easy to restart, but then it needs to be
<br>
monitored closely by me, and I'd prefer to do it automatically.
<br>
<p>Is there a way, within an MPI process, to detect the hang and abort if so?
<br>
<p>In psuedocode, I would like to do something like
<br>
<p>for (all time steps)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;step
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (nothing has happened for x minutes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi abort to return control to the shell
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>endfor
<br>
<p>This structure does not work however, as it can no longer do anything,
<br>
including check itself, when it is stuck.
<br>
<p><p>Thank you,
<br>
Alex
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29472.php">Ralph Castain: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Reply:</strong> <a href="29473.php">Gus Correa: "Re: [OMPI users] Restart after code hangs"</a>
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
