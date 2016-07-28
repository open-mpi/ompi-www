<?
$subject_val = "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 08:36:51 2012" -->
<!-- isoreceived="20120411123651" -->
<!-- sent="Wed, 11 Apr 2012 08:36:47 -0400" -->
<!-- isosent="20120411123647" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart failed &amp;amp;&amp;amp; ompi-migrate" -->
<!-- id="CAANzjEn4ERBEcMy4UMr8WOLGBkL6wpPCUDYZ5srtfs-0op=edg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1334114079.67563.YahooMailNeo_at_web130103.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 08:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18998.php">Peter Sels: "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Previous message:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18986.php">kidd: "[OMPI users] ompi-restart  failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Reply:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Reply:</strong> <a href="19032.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.5 series does not support process migration, so there is no
<br>
ompi-migrate option there. This was only contributed to the trunk (1.7
<br>
series). However, changes to the runtime environment over the past few
<br>
months have broken this functionality. It is currently unclear when
<br>
this will be repaired. We hope to have it fixed and functional again
<br>
before the first release of the 1.7 series.
<br>
<p>As far as your problem with ompi-restart have you checked the prelink
<br>
option on all of your nodes, per:
<br>
&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>-- Josh
<br>
<p>On Tue, Apr 10, 2012 at 11:14 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello !
</span><br>
<span class="quotelev1">&gt; I had some&#160; problems .
</span><br>
<span class="quotelev1">&gt; This is My environment
</span><br>
<span class="quotelev1">&gt; &#160;&#160; BLCR= 0.8.4&#160;&#160; , openMPI= 1.5.5&#160; , OS= ubuntu 11.04
</span><br>
<span class="quotelev1">&gt; &#160;&#160; I have 2 Node : cuda05(Master ,it have NFS&#160; file system)&#160; , cuda07(slave
</span><br>
<span class="quotelev1">&gt; ,mount Master)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160; I had also set&#160; ~/.openmpi/mca-params.conf-&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; my configure format=
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/root/kidd_openMPI --with-ft=cr --enable-ft-thread
</span><br>
<span class="quotelev1">&gt; &#160;--with-blcr=/usr/local/BLCR&#160; --with-blcr-libdir=/usr/local/BLCR/lib
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; &#160;--enable-static --enable-shared&#160; --enable-opal-multi-threads;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; problem 1:&#160; ompi-restart&#160; on multiple Node
</span><br>
<span class="quotelev1">&gt; &#160; command 01: mpirun -hostfile&#160; Hosts -am ft-enable-cr&#160; -x&#160; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; -np 2&#160; ./TEST
</span><br>
<span class="quotelev1">&gt; &#160; command 02: ompi-restart&#160; ompi_global_snapshot_2892.ckpt
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160; -&gt; I can checkpoint 2 process on multiples nodes ,but when I restart
</span><br>
<span class="quotelev1">&gt; ,it can only restart on Master-Node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;&#160; command 03 : ompi-restart&#160; -hostfile Hosts
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_2892.ckpt
</span><br>
<span class="quotelev1">&gt; &#160; &#160; -&gt;Error Message . &#160; I make sure BLCR&#160; is OK.
</span><br>
<span class="quotelev1">&gt; ################################################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; root_at_cuda05:~/kidd_openMPI/checkpoints# ompi-restart -hostfile Hosts
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_2892.ckpt/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &#160;&#160; Error: BLCR was not able to restart the process because exec failed.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Check the installation of BLCR on all of the machines in your
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; system. The following information may be of help:
</span><br>
<span class="quotelev1">&gt; &#160;Return Code : -1
</span><br>
<span class="quotelev1">&gt; &#160;BLCR Restart Command : cr_restart
</span><br>
<span class="quotelev1">&gt; &#160;Restart Command Line : cr_restart
</span><br>
<span class="quotelev1">&gt; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.2704
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; Check the installation of the blcr checkpoint/restart service
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; on all of the machines in your system.essage
</span><br>
<span class="quotelev1">&gt; ####################################################################################################
</span><br>
<span class="quotelev1">&gt; &#160;problem 2: ompi-migrate i can't find . &#160; How to use ompi-migrate ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; Please help me , thanks .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18998.php">Peter Sels: "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>Previous message:</strong> <a href="18996.php">Ralph Castain: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18986.php">kidd: "[OMPI users] ompi-restart  failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Reply:</strong> <a href="18999.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Reply:</strong> <a href="19032.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
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
