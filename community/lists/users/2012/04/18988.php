<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 02:42:54 2012" -->
<!-- isoreceived="20120411064254" -->
<!-- sent="Wed, 11 Apr 2012 08:39:56 +0200" -->
<!-- isosent="20120411063956" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="faab1405-07ca-402e-a51c-035b00b782db_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="OF7F74ACFF.55283FAD-ON492579DD.0022E3FC-492579DD.0023807C_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong core binding by openmpi-1.5.5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 02:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18987.php">tmishima_at_[hidden]: "[OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18987.php">tmishima_at_[hidden]: "[OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the output of lstopo -p ? (you'll have to install hwloc)
<br>
Brice
<br>
<p><p>tmishima_at_[hidden] a &#195;&#169;crit :
<br>
<p><p>Hi,
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
-np 8 \
<br>
-x OMP_NUM_THREADS \
<br>
-bind-to-core \
<br>
-cpus-per-proc ${OMP_NUM_THREADS} \
<br>
-report-bindings \
<br>
./Solver
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
<p>_____________________________________________
<br>
<p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18988/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18987.php">tmishima_at_[hidden]: "[OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18987.php">tmishima_at_[hidden]: "[OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18989.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
