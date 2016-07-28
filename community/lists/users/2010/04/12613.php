<?
$subject_val = "Re: [OMPI users] btl_tcp_if_exclude param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 13 08:08:57 2010" -->
<!-- isoreceived="20100413120857" -->
<!-- sent="Tue, 13 Apr 2010 08:08:52 -0400" -->
<!-- isosent="20100413120852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_exclude param" -->
<!-- id="33F1E96F-80B2-44B2-9D0F-550D0DAD4A18_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="i2x3a37617f1004130306gbf337fadv34e801f7b18c12a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_if_exclude param<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-13 08:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12614.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12612.php">Gabriele Fatigati: "[OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12612.php">Gabriele Fatigati: "[OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12614.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12614.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, that param is still there:
<br>
<p>$ ompi_info --param btl tcp --parsable | grep clude:
<br>
mca:btl:tcp:param:btl_tcp_if_include:value:
<br>
mca:btl:tcp:param:btl_tcp_if_include:data_source:default value
<br>
mca:btl:tcp:param:btl_tcp_if_include:status:writable
<br>
mca:btl:tcp:param:btl_tcp_if_include:help:Comma-delimited list of devices or CIDR notation of networks to use for MPI communication (e.g., &quot;eth0,eth1&quot; or &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with btl_tcp_if_exclude.
<br>
mca:btl:tcp:param:btl_tcp_if_include:deprecated:no
<br>
mca:btl:tcp:param:btl_tcp_if_exclude:value:lo,sppp
<br>
mca:btl:tcp:param:btl_tcp_if_exclude:data_source:default value
<br>
mca:btl:tcp:param:btl_tcp_if_exclude:status:writable
<br>
mca:btl:tcp:param:btl_tcp_if_exclude:help:Comma-delimited list of devices or CIDR notation of networks to NOT use for MPI communication -- all devices not matching these specifications will be used (e.g., &quot;eth0,eth1&quot; or &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with btl_tcp_if_include.
<br>
mca:btl:tcp:param:btl_tcp_if_exclude:deprecated:no
<br>
$
<br>
<p><p>Did your TCP BTL plugin somehow not get built / installed? 
<br>
<p><p>On Apr 13, 2010, at 6:06 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying OpenMPI 1.3.3 and i've noted that btl_tcp_if_exclude is not supported from new version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the response to this command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --param all all | grep btl_tcp_if_exclude
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is empty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe that params is renamed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
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
<li><strong>Next message:</strong> <a href="12614.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Previous message:</strong> <a href="12612.php">Gabriele Fatigati: "[OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>In reply to:</strong> <a href="12612.php">Gabriele Fatigati: "[OMPI users] btl_tcp_if_exclude param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12614.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
<li><strong>Reply:</strong> <a href="12614.php">Gabriele Fatigati: "Re: [OMPI users] btl_tcp_if_exclude param"</a>
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
