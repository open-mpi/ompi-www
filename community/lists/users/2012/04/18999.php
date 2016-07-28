<?
$subject_val = "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 15:26:15 2012" -->
<!-- isoreceived="20120411192615" -->
<!-- sent="Wed, 11 Apr 2012 12:26:10 -0700 (PDT)" -->
<!-- isosent="20120411192610" -->
<!-- name="kidd" -->
<!-- email="q19860103_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart failed &amp;amp;&amp;amp; ompi-migrate" -->
<!-- id="1334172370.13487.YahooMailNeo_at_web130105.mail.mud.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAANzjEn4ERBEcMy4UMr8WOLGBkL6wpPCUDYZ5srtfs-0op=edg_at_mail.gmail.com" -->
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
<strong>From:</strong> kidd (<em>q19860103_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 15:26:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19000.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18998.php">Peter Sels: "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>In reply to:</strong> <a href="18997.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19032.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello !
I check&#194;&#160; my OS(ubuntu 11)&#194;&#160; . it not install prelink . Are there other reasons? (ompi-restart)
&#194;&#160; thanks . 


________________________________
 &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt; 
&#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/11 (&#233;&#128;&#177;&#228;&#184;&#137;) 8:36 PM
&#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate
 
The 1.5 series does not support process migration, so there is no
ompi-migrate option there. This was only contributed to the trunk (1.7
series). However, changes to the runtime environment over the past few
months have broken this functionality. It is currently unclear when
this will be repaired. We hope to have it fixed and functional again
before the first release of the 1.7 series.

As far as your problem with ompi-restart have you checked the prelink
option on all of your nodes, per:
&#194;&#160; <a href="https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>

-- Josh

On Tue, Apr 10, 2012 at 11:14 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt; Hello !
&gt; I had some&#194;&#160; problems .
&gt; This is My environment
&gt; &#194;&#160;&#194;&#160; BLCR= 0.8.4&#194;&#160;&#194;&#160; , openMPI= 1.5.5&#194;&#160; , OS= ubuntu 11.04
&gt; &#194;&#160;&#194;&#160; I have 2 Node : cuda05(Master ,it have NFS&#194;&#160; file system)&#194;&#160; , cuda07(slave
&gt; ,mount Master)
&gt;
&gt; &#194;&#160;&#194;&#160; I had also set&#194;&#160; ~/.openmpi/mca-params.conf-&gt;
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints
&gt;
&gt; &#194;&#160; my configure format=
&gt; ./configure --prefix=/root/kidd_openMPI --with-ft=cr --enable-ft-thread
&gt; &#194;&#160;--with-blcr=/usr/local/BLCR&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib
&gt; --enable-mpirun-prefix-by-default
&gt; &#194;&#160;--enable-static --enable-shared&#194;&#160; --enable-opal-multi-threads;
&gt;
&gt; problem 1:&#194;&#160; ompi-restart&#194;&#160; on multiple Node
&gt; &#194;&#160; command 01: mpirun -hostfile&#194;&#160; Hosts -am ft-enable-cr&#194;&#160; -x&#194;&#160; LD_LIBRARY_PATH
&gt; -np 2&#194;&#160; ./TEST
&gt; &#194;&#160; command 02: ompi-restart&#194;&#160; ompi_global_snapshot_2892.ckpt
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; -&gt; I can checkpoint 2 process on multiples nodes ,but when I restart
&gt; ,it can only restart on Master-Node.
&gt;
&gt; &#194;&#160; &#194;&#160;&#194;&#160; command 03 : ompi-restart&#194;&#160; -hostfile Hosts
&gt; ompi_global_snapshot_2892.ckpt
&gt; &#194;&#160; &#194;&#160; -&gt;Error Message . &#194;&#160; I make sure BLCR&#194;&#160; is OK.
&gt; ################################################################################################
&gt;
&gt; --------------------------------------------------------------------------
&gt; &#194;&#160;&#194;&#160;&#194;&#160; root_at_cuda05:~/kidd_openMPI/checkpoints# ompi-restart -hostfile Hosts
&gt; ompi_global_snapshot_2892.ckpt/
&gt;
&gt; --------------------------------------------------------------------------
&gt; &#194;&#160;&#194;&#160; Error: BLCR was not able to restart the process because exec failed.
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of BLCR on all of the machines in your
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; system. The following information may be of help:
&gt; &#194;&#160;Return Code : -1
&gt; &#194;&#160;BLCR Restart Command : cr_restart
&gt; &#194;&#160;Restart Command Line : cr_restart
&gt; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.2704
&gt; --------------------------------------------------------------------------
&gt; --------------------------------------------------------------------------
&gt; Error: Unable to obtain the proper restart command to restart from the
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of the blcr checkpoint/restart service
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; on all of the machines in your system.essage
&gt; ####################################################################################################
&gt; &#194;&#160;problem 2: ompi-migrate i can't find . &#194;&#160; How to use ompi-migrate ?
&gt;
&gt; &#194;&#160; Please help me , thanks .
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>



-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19000.php">tmishima_at_[hidden]: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18998.php">Peter Sels: "[OMPI users] MPI_Send, MPI_Recv problem on Mac and Linux"</a>
<li><strong>In reply to:</strong> <a href="18997.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19032.php">kidd: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
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
