<?
$subject_val = "[OMPI users]  High Checkpoint Overhead Ratio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 23:08:57 2010" -->
<!-- isoreceived="20100831030857" -->
<!-- sent="Tue, 31 Aug 2010 11:08:47 +0800" -->
<!-- isosent="20100831030847" -->
<!-- name="&#179;&#194;&#206;&#196;&#186;&#198;" -->
<!-- email="whchen_at_[hidden]" -->
<!-- subject="[OMPI users]  High Checkpoint Overhead Ratio" -->
<!-- id="000001cb48b9$d46aa6a0$7d3ff3e0$_at_shu.edu.cn" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users]  High Checkpoint Overhead Ratio<br>
<strong>From:</strong> &#179;&#194;&#206;&#196;&#186;&#198; (<em>whchen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 23:08:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14135.php">Gilbert Grosdidier: "[OMPI users] Checksuming in openmpi 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="14133.php">David Turner: "[OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14136.php">Joshua Hursey: "Re: [OMPI users] High Checkpoint Overhead Ratio"</a>
<li><strong>Reply:</strong> <a href="14136.php">Joshua Hursey: "Re: [OMPI users] High Checkpoint Overhead Ratio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI Users,
<br>
<p>&nbsp;
<br>
<p>I&#161;&#175;m now using BLCR-0.8.2 and OpenMPI-1.5rc5. The problem is that it takes a
<br>
very long time to checkpoint.
<br>
<p>&nbsp;
<br>
<p>BLCR configuration:
<br>
<p>./onfigure --prefix=/opt/blcr --enable-static
<br>
<p>OpenMPi configuration:
<br>
<p>./configure --prefix=/opt/ompi --with-ft=cr --with-blcr=/opt/blcr
<br>
--enable-static  --enable-ft-thread --enable-mpi-threads
<br>
<p>&nbsp;
<br>
<p>Our blades use NFS. $HOME and /opt are shared.
<br>
<p>&nbsp;
<br>
<p>In $HOME/.opnempi/mca-params.conf:
<br>
<p>crs_base_snapshot_dir=/tmp/
<br>
<p>snapc_base_global_snapshot_dir=/home/chenwh
<br>
<p>snapc_basee_store_in_place=0
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Now I run CG NPB (NPROCS=16, CLASS=C) on two nodes (blade02, blade04).
<br>
<p>With no checkpoint, 'Time in seconds' is about 100s. It's normal.
<br>
<p>But when I take a single checkpoint, 'Time in seconds' is up to 300s. The
<br>
overhead ratio is over 200%! WHY? How can I improve it?
<br>
<p>&nbsp;
<br>
<p>blade02:~&gt; ompi-checkpoint --status 27115
<br>
<p>[blade02:27130] [  0.00 /   0.25]                 Requested - ...
<br>
<p>[blade02:27130] [  0.00 /   0.25]                   Pending - ...
<br>
<p>[blade02:27130] [  0.21 /   0.46]                   Running - ...
<br>
<p>[blade02:27130] [221.25 / 221.71]                  Finished -
<br>
ompi_global_snapshot_27115.ckpt
<br>
<p>Snapshot Ref.:   0 ompi_global_snapshot_27115.ckpt
<br>
<p>&nbsp;
<br>
<p>As you see, it takes 200+ secconds to checkpoint. btw, what the former and
<br>
latter number represent in [ , ]?
<br>
<p>&nbsp;
<br>
<p>Regards
<br>
<p>&nbsp;
<br>
<p>Whchen
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14135.php">Gilbert Grosdidier: "[OMPI users] Checksuming in openmpi 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="14133.php">David Turner: "[OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14136.php">Joshua Hursey: "Re: [OMPI users] High Checkpoint Overhead Ratio"</a>
<li><strong>Reply:</strong> <a href="14136.php">Joshua Hursey: "Re: [OMPI users] High Checkpoint Overhead Ratio"</a>
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
