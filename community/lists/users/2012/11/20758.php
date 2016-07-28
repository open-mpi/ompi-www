<?
$subject_val = "[OMPI users] network timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 24 04:00:17 2012" -->
<!-- isoreceived="20121124090017" -->
<!-- sent="Sat, 24 Nov 2012 10:00:09 +0100" -->
<!-- isosent="20121124090009" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI users] network timeout" -->
<!-- id="50B08C99.7060208_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] network timeout<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-24 04:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20757.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<li><strong>Reply:</strong> <a href="20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
on cygwin running on localhost on standalone computer I noticed
<br>
a large time discrepancy when the computer is connected or not to
<br>
the network.
<br>
<p>Physical Connected:
<br>
<p>marco_at_MARCOATZERI /pub/devel/openmpi/examples
<br>
$ time mpirun -n 4 ./hello_c.exe
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 3 of 4
<br>
<p>real    1m14.568s
<br>
user    0m1.496s
<br>
sys     0m2.602s
<br>
<p>NOT connected (all interface down)
<br>
<p>$ time mpirun -n 4 ./hello_c.exe
<br>
Hello, world, I am 0 of 4
<br>
Hello, world, I am 2 of 4
<br>
Hello, world, I am 1 of 4
<br>
Hello, world, I am 3 of 4
<br>
<p>real    0m3.323s
<br>
user    0m1.480s
<br>
sys     0m2.118s
<br>
<p><p>I guess the 1 minute is due to some time of timeout.
<br>
Is such delay present on any other platform ?
<br>
Any workaround to remove it ?
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20759.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20757.php">Rayson Ho: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
<li><strong>Reply:</strong> <a href="20760.php">Ralph Castain: "Re: [OMPI users] network timeout"</a>
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
