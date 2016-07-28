<?
$subject_val = "[OMPI users] orted daemon no found! --- environment not passed to slave nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 27 10:41:46 2012" -->
<!-- isoreceived="20120227154146" -->
<!-- sent="Mon, 27 Feb 2012 10:41:54 -0500" -->
<!-- isosent="20120227154154" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="[OMPI users] orted daemon no found! --- environment not passed to slave nodes?" -->
<!-- id="4F4B5DF2.13971.C25FFA2_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] orted daemon no found! --- environment not passed to slave nodes?<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20orted%20daemon%20no%20found!%20---%20environment%20not%20passed%20to%20slave%20nodes?"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-02-27 10:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18563.php">Pinero, Pedro_jose: "[OMPI users] ompi 1.5.5 mpicc linker problem"</a>
<li><strong>Previous message:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>Reply:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings!
<br>
<p>I have tried to run ring_c example test from a bash script. In this 
<br>
bash script, I setup PATH and LD_LIBRARY_PATH(I donot want to 
<br>
disturb ~/.bashrc, etc), then use a full path of mpirun to invoke mpi 
<br>
processes, the mpirun and orted are both on the PATH. However, 
<br>
from the Open MPI message, orted was not found, to me, it was 
<br>
not found only on slave nodes. Then I tried to set the --prefix or -x 
<br>
PATH -x LD_LIBRARY_PATH to hope these envars passed to 
<br>
slave nodes, but it turned out they are not forwarded to slave 
<br>
nodes. 
<br>
<p>On the other hand, if I set the same PATH and 
<br>
LD_LIBRARY_PATH in ~/.bashrc which shared by all nodes, 
<br>
mpirun from bash script runs fine and orted could be found. This is 
<br>
easy to understand though, but I realy do not want to change 
<br>
~/.bashrc.
<br>
<p>It seems the non-interactive bash shell does not pass envars to 
<br>
slave nodes. 
<br>
<p>Any comments and solutions?
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18563.php">Pinero, Pedro_jose: "[OMPI users] ompi 1.5.5 mpicc linker problem"</a>
<li><strong>Previous message:</strong> <a href="18561.php">Ralph Castain: "Re: [OMPI users] Environment variables [documentation]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<li><strong>Reply:</strong> <a href="18584.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
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
