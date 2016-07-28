<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:20:42 2013" -->
<!-- isoreceived="20130110152042" -->
<!-- sent="Thu, 10 Jan 2013 15:20:37 +0000" -->
<!-- isosent="20130110152037" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B0A2B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOJJ1ZoXQmq6y_MnT0fE1kWE-fJzqFpcGSD-OWaQVRS7Xq2LTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 10:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21096.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21094.php">Kumar, Sudhir: "[OMPI users] Open MPI error in Windows"</a>
<li><strong>In reply to:</strong> <a href="21053.php">Lee Eric: "[OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mmmm.  Let's rope in our ARM expert here...
<br>
<p>Leif, do you know what the issue is here?
<br>
<p><p>On Jan 3, 2013, at 4:28 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am going to compile OpenMPI 1.6.3 in Raspberry Pi and encounter following errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev1">&gt;   CC     class/opal_bitmap.lo
</span><br>
<span class="quotelev1">&gt;   CC     class/opal_free_list.lo
</span><br>
<span class="quotelev1">&gt;   CC     class/opal_hash_table.lo
</span><br>
<span class="quotelev1">&gt;   CC     class/opal_list.lo
</span><br>
<span class="quotelev1">&gt;   CC     class/opal_object.lo
</span><br>
<span class="quotelev1">&gt; /tmp/ccniCtj0.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt; /tmp/ccniCtj0.s:83: Error: selected processor does not support ARM mode `ldrex r3,[r1]'
</span><br>
<span class="quotelev1">&gt; /tmp/ccniCtj0.s:86: Error: selected processor does not support ARM mode `strex r4,r0,[r1]'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [class/opal_object.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone have any idea to fix that issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Fedora 17 rootfs and kernel version is &quot;Linux fedora-arm 3.6.11+ #1 PREEMPT Wed Jan 2 15:14:23 CST 2013 armv6l armv6l armv6l GNU/Linux&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Lee
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21096.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21094.php">Kumar, Sudhir: "[OMPI users] Open MPI error in Windows"</a>
<li><strong>In reply to:</strong> <a href="21053.php">Lee Eric: "[OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
