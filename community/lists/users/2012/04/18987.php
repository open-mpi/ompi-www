<?
$subject_val = "[OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 02:27:54 2012" -->
<!-- isoreceived="20120411062754" -->
<!-- sent="Wed, 11 Apr 2012 15:26:26 +0900" -->
<!-- isosent="20120411062626" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="OF7F74ACFF.55283FAD-ON492579DD.0022E3FC-492579DD.0023807C_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] wrong core binding by openmpi-1.5.5<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20wrong%20core%20binding%20by%20openmpi-1.5.5"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-04-11 02:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18986.php">kidd: "[OMPI users] ompi-restart  failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I updated openmpi from version 1.5.4 to 1.5.5.
<br>
Then, an execution speed of my application becomes quite slower than
<br>
before,
<br>
due to wrong core bindings. As far as I checked, it seems that
<br>
openmpi-1.5.4
<br>
gives correct core bindings for my magnycore based machine.
<br>
<p>1) my script is as follows:
<br>
export OMP_NUM_THREADS=4
<br>
mpirun -machinefile pbs_hosts \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 8 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x OMP_NUM_THREADS \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bind-to-core \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-cpus-per-proc ${OMP_NUM_THREADS} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-report-bindings \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./Solver
<br>
<p>2)binding reports are as follows:
<br>
openmpi-1.5.4:
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],3] to cpus 22220000
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],4] to cpus 4444
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],5] to cpus 44440000
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],6] to cpus 8888
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],7] to cpus 88880000
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],0] to cpus 1111
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],1] to cpus 11110000
<br>
[node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
<br>
[[55518,1],2] to cpus 2222
<br>
openmpi-1.5.5:
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],3] to cpus f000
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],4] to cpus 000f0000
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],5] to cpus 00f00000
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],6] to cpus 0f000000
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],7] to cpus f0000000
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],0] to cpus 000f
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],1] to cpus 00f0
<br>
[node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
<br>
[[40566,1],2] to cpus 0f00
<br>
<p>3)node03 has 32 cores with 4 magnycores(8cores/cpu-type).
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18986.php">kidd: "[OMPI users] ompi-restart  failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
