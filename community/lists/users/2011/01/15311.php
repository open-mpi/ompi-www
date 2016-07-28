<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:14:47 2011" -->
<!-- isoreceived="20110107151447" -->
<!-- sent="Fri, 07 Jan 2011 10:14:40 -0500" -->
<!-- isosent="20110107151440" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="4F56A246-9EE9-41F4-A90C-B2FB587F2BD6_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D0B9E3E.3010403_at_cern.ch" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:14:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15312.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Previous message:</strong> <a href="15310.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15191.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The FW version looks ok. But it may be driver issues as well. I guess that OFED 1.4.X or 1.5.x driver should be ok.
<br>
To check driver version , you may run ofed_info command.
<br>
<p>Regards,
<br>
&nbsp;
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
Email: shamisp_at_[hidden]
On Dec 17, 2010, at 12:30 PM, Gilbert Grosdidier wrote:
&gt; John,
&gt; 
&gt;  Thanks, more info below.
&gt; 
&gt; 
&gt; Le 17/12/2010 17:32, John Hearns a &#233;crit :
&gt;&gt; On 17 December 2010 15:47, Gilbert Grosdidier
&gt;&gt; &lt;Gilbert.Grosdidier_at_[hidden]&gt;  wrote:
&gt;&gt;&gt; gg= I don't know, and firmware_revs does not seem to be available.
&gt;&gt;&gt; Only thing I got on a worker node was with lspci :
&gt;&gt; If you log into a compute node the command is     /usr/sbin/ibstat
&gt; gg= Here it is :
&gt; 
&gt;&gt; /usr/sbin/ibstat
&gt; CA 'mlx4_0'
&gt;     CA type: MT26418
&gt;     Number of ports: 2
&gt;     Firmware version: 2.7.0
&gt;     Hardware version: a0
&gt;     Node GUID: 0x003048fffff036c4
&gt;     System image GUID: 0x003048fffff036c7
&gt;     Port 1:
&gt;         State: Active
&gt;         Physical state: LinkUp
&gt;         Rate: 20
&gt;         Base lid: 6611
&gt;         LMC: 0
&gt;         SM lid: 1
&gt;         Capability mask: 0x02510868
&gt;         Port GUID: 0x003048fffff036c5
&gt;     Port 2:
&gt;         State: Active
&gt;         Physical state: LinkUp
&gt;         Rate: 20
&gt;         Base lid: 6612
&gt;         LMC: 0
&gt;         SM lid: 1
&gt;         Capability mask: 0x02510868
&gt;         Port GUID: 0x003048fffff036c6
&gt; 
&gt;  Does this mean resize_cq should be available, please ?
&gt; 
&gt;  Thanks,    Best,      G.
&gt; 
&gt;&gt; 
&gt;&gt; The firmware_revs command is on the cluster admin node, and is
&gt;&gt; provided by the sgi-admin-node RPM package.
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15312.php">Jeff Squyres: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>Previous message:</strong> <a href="15310.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15191.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15314.php">Jeff Squyres: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
