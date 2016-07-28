<?
$subject_val = "Re: [OMPI users] Set GID";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 08:23:30 2008" -->
<!-- isoreceived="20080312122330" -->
<!-- sent="Wed, 12 Mar 2008 07:23:00 -0500" -->
<!-- isosent="20080312122300" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set GID" -->
<!-- id="3F29E466-1B8F-4FBC-9984-64C97A32E86E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47D7B164.80502_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-12 08:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5175.php">Jeff Squyres: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5174.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, that would be fine.
<br>
<p>Can you write it up in a little more FAQ-ish style?  I can add it to  
<br>
the web page.  See this wiki item:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
<br>
<p><p><p>On Mar 12, 2008, at 5:33 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Run opensm with follow parameters:
</span><br>
<span class="quotelev1">&gt; opensm -c -o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will make 1 loop and will exit (-o parameter). The -c option says  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; opensm to generate option file.
</span><br>
<span class="quotelev1">&gt; The file will be generated under /var/cache/opensm//opensm.opts
</span><br>
<span class="quotelev1">&gt; Open the file and find line with &quot;subnet_prefix&quot;. Replace the prefix
</span><br>
<span class="quotelev1">&gt; with new one.
</span><br>
<span class="quotelev1">&gt; Re-ran opensm: /etc/init.d/opensm start
</span><br>
<span class="quotelev1">&gt; It will automatically load the option file from cache repository and
</span><br>
<span class="quotelev1">&gt; will use new prefix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff ,
</span><br>
<span class="quotelev1">&gt; Do we want to add it to Open-MPI FAQ ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jon Mason wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am getting the following error when I try to run OMPI over my dual
</span><br>
<span class="quotelev2">&gt;&gt; port IB adapter:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: There are more than one active ports on host 'vic20', but  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev2">&gt;&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev2">&gt;&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev2">&gt;&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev2">&gt;&gt; values.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt;      btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand why it is doing the above based on the description in  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; link above, but I cannot seem to find anywhere that will tell me  
</span><br>
<span class="quotelev2">&gt;&gt; how to
</span><br>
<span class="quotelev2">&gt;&gt; change the GID to something else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jon
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>Previous message:</strong> <a href="5175.php">Jeff Squyres: "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5174.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5177.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
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
