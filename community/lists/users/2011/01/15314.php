<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:22:53 2011" -->
<!-- isoreceived="20110107152253" -->
<!-- sent="Fri, 7 Jan 2011 10:22:48 -0500" -->
<!-- isosent="20110107152248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="5F328ACE-49DB-4076-8A1B-CB9495F6C6A9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F56A246-9EE9-41F4-A90C-B2FB587F2BD6_at_ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>AFAIR (and I stopped being an IB vendor a long time ago, so I might be wrong), the _resize_cq function being there or not is not an issue of the underlying HCA; it's a function of what version of OFED you're running.
<br>
<p><p>On Jan 7, 2011, at 10:14 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; The FW version looks ok. But it may be driver issues as well. I guess that OFED 1.4.X or 1.5.x driver should be ok.
</span><br>
<span class="quotelev1">&gt; To check driver version , you may run ofed_info command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; Email: shamisp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2010, at 12:30 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; John,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, more info below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 17/12/2010 17:32, John Hearns a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 17 December 2010 15:47, Gilbert Grosdidier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Gilbert.Grosdidier_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gg= I don't know, and firmware_revs does not seem to be available.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Only thing I got on a worker node was with lspci :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you log into a compute node the command is     /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt;&gt; gg= Here it is :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt;&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev2">&gt;&gt;    CA type: MT26418
</span><br>
<span class="quotelev2">&gt;&gt;    Number of ports: 2
</span><br>
<span class="quotelev2">&gt;&gt;    Firmware version: 2.7.0
</span><br>
<span class="quotelev2">&gt;&gt;    Hardware version: a0
</span><br>
<span class="quotelev2">&gt;&gt;    Node GUID: 0x003048fffff036c4
</span><br>
<span class="quotelev2">&gt;&gt;    System image GUID: 0x003048fffff036c7
</span><br>
<span class="quotelev2">&gt;&gt;    Port 1:
</span><br>
<span class="quotelev2">&gt;&gt;        State: Active
</span><br>
<span class="quotelev2">&gt;&gt;        Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;        Rate: 20
</span><br>
<span class="quotelev2">&gt;&gt;        Base lid: 6611
</span><br>
<span class="quotelev2">&gt;&gt;        LMC: 0
</span><br>
<span class="quotelev2">&gt;&gt;        SM lid: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Capability mask: 0x02510868
</span><br>
<span class="quotelev2">&gt;&gt;        Port GUID: 0x003048fffff036c5
</span><br>
<span class="quotelev2">&gt;&gt;    Port 2:
</span><br>
<span class="quotelev2">&gt;&gt;        State: Active
</span><br>
<span class="quotelev2">&gt;&gt;        Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;        Rate: 20
</span><br>
<span class="quotelev2">&gt;&gt;        Base lid: 6612
</span><br>
<span class="quotelev2">&gt;&gt;        LMC: 0
</span><br>
<span class="quotelev2">&gt;&gt;        SM lid: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Capability mask: 0x02510868
</span><br>
<span class="quotelev2">&gt;&gt;        Port GUID: 0x003048fffff036c6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does this mean resize_cq should be available, please ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,    Best,      G.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The firmware_revs command is on the cluster admin node, and is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided by the sgi-admin-node RPM package.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15315.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
