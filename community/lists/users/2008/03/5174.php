<?
$subject_val = "Re: [OMPI users] Set GID";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 06:33:21 2008" -->
<!-- isoreceived="20080312103321" -->
<!-- sent="Wed, 12 Mar 2008 12:33:08 +0200" -->
<!-- isosent="20080312103308" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set GID" -->
<!-- id="47D7B164.80502_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080311220419.GC28088_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Set GID<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 06:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5175.php">Jeff Squyres: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5168.php">Jon Mason: "[OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Run opensm with follow parameters:
<br>
opensm -c -o
<br>
<p>It will make 1 loop and will exit (-o parameter). The -c option says to 
<br>
opensm to generate option file.
<br>
The file will be generated under /var/cache/opensm//opensm.opts
<br>
Open the file and find line with &quot;subnet_prefix&quot;. Replace the prefix 
<br>
with new one.
<br>
Re-ran opensm: /etc/init.d/opensm start
<br>
It will automatically load the option file from cache repository and 
<br>
will use new prefix
<br>
<p>Jeff ,
<br>
Do we want to add it to Open-MPI FAQ ?
<br>
<p>Regards,
<br>
Pasha
<br>
<p><p>Jon Mason wrote:
<br>
<span class="quotelev1">&gt; I am getting the following error when I try to run OMPI over my dual
</span><br>
<span class="quotelev1">&gt; port IB adapter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There are more than one active ports on host 'vic20', but the
</span><br>
<span class="quotelev1">&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev1">&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev1">&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev1">&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev1">&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev1">&gt; values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand why it is doing the above based on the description in the
</span><br>
<span class="quotelev1">&gt; link above, but I cannot seem to find anywhere that will tell me how to
</span><br>
<span class="quotelev1">&gt; change the GID to something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5175.php">Jeff Squyres: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5168.php">Jon Mason: "[OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
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
