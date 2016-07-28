<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 12:30:44 2010" -->
<!-- isoreceived="20101217173044" -->
<!-- sent="Fri, 17 Dec 2010 18:30:38 +0100" -->
<!-- isosent="20101217173038" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="4D0B9E3E.3010403_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimB2ME=O1Zu-PS0T_2i9VgXUNLGKa4F0qSkPosh_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 12:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<li><strong>Previous message:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John,
<br>
<p>&nbsp;&nbsp;Thanks, more info below.
<br>
<p><p>Le 17/12/2010 17:32, John Hearns a &#233;crit :
<br>
<span class="quotelev1">&gt; On 17 December 2010 15:47, Gilbert Grosdidier
</span><br>
<span class="quotelev1">&gt; &lt;Gilbert.Grosdidier_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; gg= I don't know, and firmware_revs does not seem to be available.
</span><br>
<span class="quotelev2">&gt;&gt; Only thing I got on a worker node was with lspci :
</span><br>
<span class="quotelev1">&gt; If you log into a compute node the command is     /usr/sbin/ibstat
</span><br>
gg= Here it is :
<br>
<p><span class="quotelev1"> &gt; /usr/sbin/ibstat
</span><br>
CA 'mlx4_0'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CA type: MT26418
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of ports: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firmware version: 2.7.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hardware version: a0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node GUID: 0x003048fffff036c4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System image GUID: 0x003048fffff036c7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: Active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical state: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate: 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base lid: 6611
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LMC: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SM lid: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capability mask: 0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port GUID: 0x003048fffff036c5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: Active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical state: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate: 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base lid: 6612
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LMC: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SM lid: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capability mask: 0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port GUID: 0x003048fffff036c6
<br>
<p>&nbsp;&nbsp;Does this mean resize_cq should be available, please ?
<br>
<p>&nbsp;&nbsp;Thanks,    Best,      G.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The firmware_revs command is on the cluster admin node, and is
</span><br>
<span class="quotelev1">&gt; provided by the sgi-admin-node RPM package.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<li><strong>Previous message:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="15190.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
