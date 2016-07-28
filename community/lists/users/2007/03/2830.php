<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 00:44:14 2007" -->
<!-- isoreceived="20070319044414" -->
<!-- sent="Mon, 19 Mar 2007 00:44:06 -0400 (EDT)" -->
<!-- isosent="20070319044406" -->
<!-- name="3db14_at_[hidden]" -->
<!-- email="3db14_at_[hidden]" -->
<!-- subject="[OMPI users] remote execution problem" -->
<!-- id="36042.130.15.29.85.1174279446.squirrel_at_qlink.queensu.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:3db14_at_[hidden]?Subject=Re:%20[OMPI%20users]%20remote%20execution%20problem"><em>3db14_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-03-19 00:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Previous message:</strong> <a href="2829.php">Robin Humble: "[OMPI users] quadrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Reply:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If anyone could help me out with this I would greatly appreciate it. I
<br>
have already read through the entire FAQ and havent seen anyone with a
<br>
similar problem.
<br>
<p>I have successfully tested and run the ompi application I've coded locally
<br>
on both computers talisker2 and talisker4
<br>
<p>mpirun -np 1 --host localhost fdtd : -np 2 --host localhost rnode
<br>
<p>However, when attempting to execute processes remotely, eg
<br>
<p>mpirun -np 1 --host localhost fdtd : -np 2 --host talisker4 rnode
<br>
<p>Nothing happens. The shell just sits there, nothing prints (despite
<br>
stdouts), and does not return until I kill it. I have set up ssh with
<br>
rsa-authentication, no passphrase. The paths are all set; I have tried
<br>
purposefully missetting them and the error is reported and returns as
<br>
expected (so it isnt that).
<br>
<p>More info about the system- fedora core 5, (Open MPI) 1.1.4. config.log
<br>
and ompi_info outputs attached. Any help or ideas of where to go next
<br>
would be greatly appreciated.
<br>
<p>Thanks,
<br>
David
<br>
<p>
<br><p>
<p><p><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2830/ompi_confdat.tar.bz2">ompi_confdat.tar.bz2</a>
</ul>
<!-- attachment="ompi_confdat.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Previous message:</strong> <a href="2829.php">Robin Humble: "[OMPI users] quadrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>Reply:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
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
