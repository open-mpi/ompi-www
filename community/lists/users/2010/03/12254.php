<?
$subject_val = "[OMPI users] change hosts to restart the checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 03:06:29 2010" -->
<!-- isoreceived="20100305080629" -->
<!-- sent="Fri, 5 Mar 2010 16:06:20 +0800" -->
<!-- isosent="20100305080620" -->
<!-- name="&#194;&#237;&#201;&#217;&#189;&#220;" -->
<!-- email="mashao_jie_at_[hidden]" -->
<!-- subject="[OMPI users] change hosts to restart the checkpoint" -->
<!-- id="201003051606204849011_at_163.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="A5519F4A-AE12-485B-AAED-F16C05430914_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI users] change hosts to restart the checkpoint<br>
<strong>From:</strong> &#194;&#237;&#201;&#217;&#189;&#220; (<em>mashao_jie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 03:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12255.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12253.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12253.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12260.php">Josh Hursey: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12260.php">Josh Hursey: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>

<br>

<br>
2010-03-05 
<br>

<br>

<br>

<br>
&#194;&#237;&#201;&#217;&#189;&#220; 
<br>

<br>

<br>

<br>
Dear Sir:
<br>
&nbsp;&nbsp;&nbsp;I want to use openmpi and blcr to checkpoint.However, I want restart the check point
<br>
on other hosts.  For example, I run mpi program using openmpi on
<br>
host1 and host2, and I save the checkpoint file at a nfs shared path.
<br>
Then I wan to restart the job (ompi-restart -machinefile ma ompi_global_snapshot_15865.ckpt) on host3 and
<br>
&nbsp;host4. The 4 host have same hardware and software. If I change the hostname (host3 and host4) on machinfile, the error always  occur,
<br>
&nbsp;[node182:27278] *** Process received signal ***
<br>
[node182:27278] Signal: Segmentation fault (11)
<br>
[node182:27278] Signal code: Address not mapped (1)
<br>
[node182:27278] Failing at address: 0x3b81009530
<br>
[node182:27275] *** Process received signal ***
<br>
[node182:27275] Signal: Segmentation fault (11)
<br>
[node182:27275] Signal code: Address not mapped (1)
<br>
[node182:27275] Failing at address: 0x3b81009530
<br>
[node182:27274] *** Process received signal ***
<br>
[node182:27274] Signal: Segmentation fault (11)
<br>
[node182:27274] Signal code: Address not mapped (1)
<br>
[node182:27274] Failing at address: 0x3b81009530
<br>
[node182:27276] *** Process received signal ***
<br>
[node182:27276] Signal: Segmentation fault (11)
<br>
[node182:27276] Signal code: Address not mapped (1)
<br>
[node182:27276] Failing at address: 0x3b81009530
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 9 with PID 27973 on node node183 exited on signal 11 (Segmentation fault).
<br>

<br>
&nbsp;&nbsp;if I comeback the hostname as host1 and host2, it can restart succesfully.
<br>

<br>
&nbsp;my openmpi version is 1.3.4
<br>
&nbsp;./configure  --with-ft=cr --enable-mpi-threads --enable-ft-thread --with-blcr=$dir --with-blcr-libdir=/$dir/lib --prefix=$dir_ompi --enable-mpirun-prefix-by-default
<br>

<br>
&nbsp;the command run the mpi progrom as 
<br>
mpirun -np 8 --am ft-enable-cr --mca opal_cr_use_thread 0  -machinefile ma ./cpi
<br>

<br>
vim $HOME/.openmpi/mca-params.conf
<br>
crs_base_snapshot_dir=/tmp/cr
<br>
snapc_base_global_snapshot_dir=/disk/cr
<br>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12254/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12255.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12253.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12253.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12260.php">Josh Hursey: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12260.php">Josh Hursey: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
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
