<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 26 12:25:53 2006" -->
<!-- isoreceived="20061026162553" -->
<!-- sent="Thu, 26 Oct 2006 16:19:10 +0200" -->
<!-- isosent="20061026141910" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="[OMPI users] Error Handling Problem" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA2C5_at_anubis2.clb.tcfr.thales" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Error%20Handling%20Problem"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-10-26 10:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2055.php">Karl Dockendorf: "[OMPI users] OMPI performance vs. LAM"</a>
<li><strong>Previous message:</strong> <a href="2053.php">Ralph H Castain: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Reply:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Maybe reply:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I developped a launcher application : 
<br>
a MPI  application (say main_exe) lauches 2 MPI applications (say exe1 and exe2), using MPI_Comm_spawn_multiple.
<br>
<p>Now, I'm looking at the behavior when an exe crashes.
<br>
<p>What I can see is the following :
<br>
1) when everybody is launched, I see the followings processes, using 'ps' :
<br>
- the 'mpiexec -v -d -n 1 ./main_exe' command
<br>
- the orted server used for 'main_exe' (say 'orted1')
<br>
- main_exe
<br>
- the orted server used for 'exe1' and 'exe2' (say 'orted2')
<br>
- exe1
<br>
- exe2
<br>
<p>2) I use kill -9 to 'crash' exe2
<br>
<p>3) orted2 and exe1 finish.
<br>
<p>4) with ps, I see it remains the following processes : mpiexec, 'orted1', main_exe
<br>
<p>5) main_exe tries to send a message to exe1, using MPI_Bsend :
<br>
main_exe gets killed by a SIG_PIPE signal !!!!
<br>
<p>So what I see is that when a part of an MPI application crashes, the whole application crashes !
<br>
Is there a way to get an other behavior ? For exemple, MPI_Bsend could return an error message.
<br>
<p>A few additionnal informations : 
<br>
- I work on linux, with Open-MPI 1.1.1.
<br>
- I'm developping in C and C++.
<br>
<p>Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2055.php">Karl Dockendorf: "[OMPI users] OMPI performance vs. LAM"</a>
<li><strong>Previous message:</strong> <a href="2053.php">Ralph H Castain: "Re: [OMPI users] how do i link to .la library files?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Reply:</strong> <a href="2066.php">George Bosilca: "Re: [OMPI users] Error Handling Problem"</a>
<li><strong>Maybe reply:</strong> <a href="2070.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] Error Handling Problem"</a>
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
