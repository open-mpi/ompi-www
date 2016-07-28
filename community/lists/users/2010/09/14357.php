<?
$subject_val = "Re: [OMPI users] [openib] segfault when using openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 14:34:12 2010" -->
<!-- isoreceived="20100929183412" -->
<!-- sent="Wed, 29 Sep 2010 20:33:58 +0200" -->
<!-- isosent="20100929183358" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [openib] segfault when using openib btl" -->
<!-- id="4CA38696.4050306_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3486875E-F1E6-40C6-B744-43088640AC5C_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [openib] segfault when using openib btl<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 14:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>In reply to:</strong> <a href="14355.php">Shamis, Pavel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Pasha,
<br>
Thanks for your help.
<br>
<p>I'm not aware of such memory configuration on the new cluster of our 
<br>
customer (each computing node is running the Red-Hat 5.x operating 
<br>
system on Intel X5570 processors).
<br>
Anyway, I've already tried to deactivate eager_rdma, but this wouldn't 
<br>
solve the hdr-&gt;tag=0 issue (in 
<br>
share/openmpi/mca-btl-openib-device-params.ini, eager_rdma is on 
<br>
[vendor_part_id=26428]).
<br>
<p>Ishai,
<br>
If you need anymore information, please feel free to ask.
<br>
<p>Regards,
<br>
Eloi
<br>
<p>On 29/09/2010 19:49, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt; Ishai Rabinovitz is HPC team manager (I added him to CC)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back to issue. I have seen very similar issue long time ago on some hardware platforms that support relaxed ordering memory operations. If I remember correct it was some IBM platform.
</span><br>
<span class="quotelev1">&gt; Do you know if relaxed memory ordering is enabled on your platform ? If it is enabled you have to disable eager rdma.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2010, at 1:04 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha, do you by any chance know who at Mellanox might be responsible for OMPI working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry wrote:
</span><br>
<span class="quotelev1">&gt;   Hi Nysal, Terry,
</span><br>
<span class="quotelev1">&gt; Thanks for your input on this issue.
</span><br>
<span class="quotelev1">&gt; I'll follow your advice. Do you know any Mellanox developer I may discuss with, preferably someone who has spent some time inside the openib btl ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29/09/2010 06:01, Nysal Jan wrote:
</span><br>
<span class="quotelev1">&gt; Hi Eloi,
</span><br>
<span class="quotelev1">&gt; We discussed this issue during the weekly developer meeting&amp;  there were no further suggestions, apart from checking the driver and firmware levels. The consensus was that it would be better if you could take this up directly with your IB vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT00002..txt&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>In reply to:</strong> <a href="14355.php">Shamis, Pavel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
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
