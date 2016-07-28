<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 02:40:00 2012" -->
<!-- isoreceived="20120409064000" -->
<!-- sent="Sun, 8 Apr 2012 23:39:55 -0700 (PDT)" -->
<!-- isosent="20120409063955" -->
<!-- name="ffffaa fffff4 ffffaem ffffb3 fffff3" -->
<!-- email="q19860103_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="1333953595.85874.YahooMailNeo_at_web130102.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> ffffaa fffff4 ffffaem ffffb3 fffff3 (<em>q19860103_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-09 02:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18969.php">ffffaa fffff4 ffffaem ffffb3 fffff3: "[OMPI users] ompi-restart multiple &amp;&amp; how to use ompi-Migrate"</a>
<li><strong>Previous message:</strong> <a href="18967.php">Jason Murphy: "[OMPI users] Ramifications of not posting receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello !&#160; 
I had some&#160; problems . 
My environment 
&#160;&#160; BLCR= 0.8.4&#160;&#160; , openMPI= 1.5.5&#160; , OS= ubuntu 11.04
&#160;&#160; I have 2 Node : cuda05(Master ,it have NFS&#160; file system)&#160; , cuda07(slave ,mount Master)

&#160;&#160; I had also set&#160; ~/.openmpi/mca-params.conf-&gt;
&#160;&#160;&#160;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&#160;&#160;&#160;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints

&#160; my configure format=./configure --prefix=/root/kidd_openMPI --with-ft=cr --enable-ft-thread&#160; --with-blcr=/usr/local/BLCR&#160; 
--with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
 --enable-static --enable-shared&#160; --enable-opal-multi-threads;

problem 1: ompi-restart&#160; on multiple Node
&#160;&#160;&#160;&#160; command 01: mpirun -hostfile&#160; Hosts -am ft-enable-cr&#160; -x&#160; LD_LIBRARY_PATH&#160; -np 2&#160; ./TEST &#160;&#160;&#160;&#160;&#160;&#160;&#160; 
&#160;&#160;&#160; command 02: ompi-restart&#160; ompi_global_snapshot_2892.ckpt
&#160;&#160;&#160;&#160;&#160; -&gt; I can checkpoint 2 process on multiples nodes ,but when I restart ,it can only restart on Master-Node.
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 
&#160; &#160;&#160; command 03 : ompi-restart&#160; -hostfile Hosts ompi_global_snapshot_2892.ckpt
&#160; &#160; -&gt;Error Message . &#160; I make sure BLCR&#160; is OK.
################################################################################################
&#160;&#160; --------------------------------------------------------------------------
&#160;&#160;&#160; root_at_cuda05:~/kidd_openMPI/checkpoints# ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
&#160;&#160; --------------------------------------------------------------------------
&#160;&#160; Error: BLCR was not able to restart the process because exec failed.
&#160;&#160;&#160;&#160;&#160;&#160; Check the installation of BLCR on all of the machines in your
&#160;&#160;&#160;&#160;&#160;&#160; system. The following information may be of help:
&#160;Return Code : -1
&#160;BLCR Restart Command : cr_restart
&#160;Restart Command Line : cr_restart /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.2704
--------------------------------------------------------------------------
--------------------------------------------------------------------------
Error: Unable to obtain the proper restart command to restart from the 
&#160;&#160;&#160;&#160;&#160;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
&#160;&#160;&#160;&#160;&#160;&#160; Check the installation of the blcr checkpoint/restart service
&#160;&#160;&#160;&#160;&#160;&#160; on all of the machines in your system.essage
####################################################################################################
&#160;problem 2: ompi-migrate i can't find . &#160; How to use ompi-migrate ?
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18969.php">ffffaa fffff4 ffffaem ffffb3 fffff3: "[OMPI users] ompi-restart multiple &amp;&amp; how to use ompi-Migrate"</a>
<li><strong>Previous message:</strong> <a href="18967.php">Jason Murphy: "[OMPI users] Ramifications of not posting receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
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
