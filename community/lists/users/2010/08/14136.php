<?
$subject_val = "Re: [OMPI users] High Checkpoint Overhead Ratio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 08:25:56 2010" -->
<!-- isoreceived="20100831122556" -->
<!-- sent="Tue, 31 Aug 2010 08:25:46 -0400" -->
<!-- isosent="20100831122546" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] High Checkpoint Overhead Ratio" -->
<!-- id="70769154-E207-4415-9346-9CBBA66CF357_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="000001cb48b9$d46aa6a0$7d3ff3e0$_at_shu.edu.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] High Checkpoint Overhead Ratio<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 08:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14137.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="14135.php">Gilbert Grosdidier: "[OMPI users] Checksuming in openmpi 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="14134.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users]  High Checkpoint Overhead Ratio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried testing without using the NFS? So setting the mca-params.conf to something like:
<br>
crs_base_snapshot_dir=/tmp/
<br>
snapc_base_global_snapshot_dir=/tmp/global
<br>
snapc_basee_store_in_place=0
<br>
<p>This would remove the NFS time from the checkpoint time. However if you are using staging this may or may not reduce the application overhead significantly.
<br>
<p>If you want to save to NFS, and it is globally mounted you could try setting the 'snapc_base_global_shared' parameter (deprecated in the trunk) which tells the system to use standard UNIX copy commands (i.e., cp) instead of the rsh varieties.
<br>
<p>You might try changing the '--mca filem_rsh_max_incomming' parameter (default 10) to increase or decrease the number of concurrent rcp/scp operations.
<br>
<p>Something else to try is to look at the SnapC timing to pinpoint where the system is taking the most time:
<br>
&nbsp;&nbsp;snapc_full_enable_timing=1
<br>
<p>Dince you are using the C/R thread, it takes up some CPU cycles that may interfere with application performance. You can adjust the agressiveness of this thread by adjusting the 'opal_cr_thread_sleep_wait' parameter. In 1.5.0 it defaults to 0 microseconds, but on the trunk this has been adjusted to 1000 microseconds. Try setting the parameter:
<br>
&nbsp;&nbsp;opal_cr_thread_sleep_wait=1000
<br>
<p>Depending on how much memory is required by CG.C and available on each node, you may be hitting a memory barrier that BLCR is struggling to overcome. What happens if you reduce the number of processes per node?
<br>
<p>Those are some things to play around with to see what works best for your system and application. For a full list of parameters available in the C/R infrastructure see the link below:
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php">http://osl.iu.edu/research/ft/ompi-cr/api.php</a>
<br>
<p>-- Josh
<br>
<p>On Aug 30, 2010, at 11:08 PM, &#179;&#194;&#206;&#196;&#186;&#198; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI Users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#161;&#175;m now using BLCR-0.8.2 and OpenMPI-1.5rc5. The problem is that it takes a very long time to checkpoint.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; BLCR configuration:
</span><br>
<span class="quotelev1">&gt; ./onfigure --prefix=/opt/blcr --enable-static
</span><br>
<span class="quotelev1">&gt; OpenMPi configuration:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/ompi --with-ft=cr --with-blcr=/opt/blcr --enable-static  --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Our blades use NFS. $HOME and /opt are shared.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In $HOME/.opnempi/mca-params.conf:
</span><br>
<span class="quotelev1">&gt; crs_base_snapshot_dir=/tmp/
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir=/home/chenwh
</span><br>
<span class="quotelev1">&gt; snapc_basee_store_in_place=0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Now I run CG NPB (NPROCS=16, CLASS=C) on two nodes (blade02, blade04).
</span><br>
<span class="quotelev1">&gt; With no checkpoint, 'Time in seconds' is about 100s. It's normal.
</span><br>
<span class="quotelev1">&gt; But when I take a single checkpoint, 'Time in seconds' is up to 300s. The overhead ratio is over 200%! WHY? How can I improve it?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; blade02:~&gt; ompi-checkpoint --status 27115
</span><br>
<span class="quotelev1">&gt; [blade02:27130] [  0.00 /   0.25]                 Requested - ...
</span><br>
<span class="quotelev1">&gt; [blade02:27130] [  0.00 /   0.25]                   Pending - ...
</span><br>
<span class="quotelev1">&gt; [blade02:27130] [  0.21 /   0.46]                   Running - ...
</span><br>
<span class="quotelev1">&gt; [blade02:27130] [221.25 / 221.71]                  Finished - ompi_global_snapshot_27115.ckpt
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.:   0 ompi_global_snapshot_27115.ckpt
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; As you see, it takes 200+ secconds to checkpoint. btw, what the former and latter number represent in [ , ]?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Whchen
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14137.php">Nicolas Deladerriere: "Re: [OMPI users] Memory allocation error when linking with MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="14135.php">Gilbert Grosdidier: "[OMPI users] Checksuming in openmpi 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="14134.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users]  High Checkpoint Overhead Ratio"</a>
<!-- nextthread="start" -->
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
