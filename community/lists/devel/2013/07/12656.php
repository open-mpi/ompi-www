<?
$subject_val = "Re: [OMPI devel] KNEM + user-space hybrid for sm BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 11:52:43 2013" -->
<!-- isoreceived="20130718155243" -->
<!-- sent="Thu, 18 Jul 2013 11:52:38 -0400" -->
<!-- isosent="20130718155238" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] KNEM + user-space hybrid for sm BTL" -->
<!-- id="03243D2E-4F18-4BD6-A83E-F7720C25E8E0_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5A5117ABD18DE547BB3D3FE3D0CB3188389A4A_at_MBX1.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] KNEM + user-space hybrid for sm BTL<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 11:52:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12655.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12650.php">Iliev, Hristo: "[OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18 juil. 2013 &#224; 11:12, &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Could someone, who is more familiar with the architecture of the sm BTL, comment on the technical feasibility of the following: is it possible to easily extend the BTL (i.e. without having to rewrite it completely from scratch) so as to be able to perform transfers using both KNEM (or other kernel-assisted copying mechanism) for messages over a given size and the normal user-space mechanism for smaller messages with the switch-over point being a user-tunable parameter?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From what I&#146;ve seen, both implementations have something in common, e.g. both use FIFOs to communicate controlling information.
</span><br>
<span class="quotelev1">&gt; The motivation behind this are our efforts to become greener by extracting the best possible out of the box performance on our systems without having to profile each and every user application that runs on them. We&#146;ve already determined that activating KNEM really benefits some collective operations on big shared-memory systems, but the increased latency significantly slows down small message transfers, which also hits the pipelined implementations.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p><p>Hristo, 
<br>
<p>The knem BTL currently available in the trunk does just this :) You can use either Knem or Linux CMA to accelerate interprocess transfers. You can use the following mca parameters to turn on knem mode: 
<br>
<p>-mca btl_sm_use_knem 1
<br>
<p>If my memory serves me well, anything under eager limit is sent by regular double copy: 
<br>
<p>-mca btl_sm_eager_limit 4096 (is the default, so anything below 1 page is copy-in, copy-out). If I remember correctly, anything below 16k decreased performance. 
<br>
<p><p><p>We also have a collective component leveraging on knem capabilities. If you want more info about the details,
<br>
you can look at the following paper we published at IPDPS last year. It covers what we found to be the best cutoff values for using (or not) knem in several collective. 
<br>
<p>Teng Ma, George Bosilca, Aurelien Bouteiller, Jack Dongarra, &quot;HierKNEM: An Adaptive Framework for Kernel-Assisted and Topology-Aware Collective Communications on Many-core Clusters,&quot; Parallel and Distributed Processing Symposium, International, pp. 970-982, 2012 IEEE 26th International Parallel and Distributed Processing Symposium, 2012 
<br>
<p><a href="http://www.computer.org/csdl/proceedings/ipdps/2012/4675/00/4675a970-abs.html">http://www.computer.org/csdl/proceedings/ipdps/2012/4675/00/4675a970-abs.html</a>
<br>
<p><p>Enjoy, 
<br>
Aurelien 
<br>
<p><p><p><span class="quotelev1">&gt; sm&#146;s code doesn&#146;t seem to be very complex but still I&#146;ve decided to ask first before diving any deeper.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, PhD &#150; High Performance Computing Team
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23, D 52074 Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 309b
* Knoxville, TN 37996
* 865 974 9375
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12655.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12650.php">Iliev, Hristo: "[OMPI devel] KNEM + user-space hybrid for sm BTL"</a>
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
