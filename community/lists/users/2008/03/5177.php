<?
$subject_val = "Re: [OMPI users] Set GID";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 08:44:02 2008" -->
<!-- isoreceived="20080312124402" -->
<!-- sent="Wed, 12 Mar 2008 14:43:54 +0200" -->
<!-- isosent="20080312124354" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set GID" -->
<!-- id="47D7D00A.30204_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3F29E466-1B8F-4FBC-9984-64C97A32E86E_at_cisco.com" -->
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
<strong>Date:</strong> 2008-03-12 08:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I will do.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sure, that would be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you write it up in a little more FAQ-ish style?  I can add it to 
</span><br>
<span class="quotelev1">&gt; the web page.  See this wiki item:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2008, at 5:33 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Run opensm with follow parameters:
</span><br>
<span class="quotelev2">&gt;&gt; opensm -c -o
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It will make 1 loop and will exit (-o parameter). The -c option says to
</span><br>
<span class="quotelev2">&gt;&gt; opensm to generate option file.
</span><br>
<span class="quotelev2">&gt;&gt; The file will be generated under /var/cache/opensm//opensm.opts
</span><br>
<span class="quotelev2">&gt;&gt; Open the file and find line with &quot;subnet_prefix&quot;. Replace the prefix
</span><br>
<span class="quotelev2">&gt;&gt; with new one.
</span><br>
<span class="quotelev2">&gt;&gt; Re-ran opensm: /etc/init.d/opensm start
</span><br>
<span class="quotelev2">&gt;&gt; It will automatically load the option file from cache repository and
</span><br>
<span class="quotelev2">&gt;&gt; will use new prefix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff ,
</span><br>
<span class="quotelev2">&gt;&gt; Do we want to add it to Open-MPI FAQ ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jon Mason wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting the following error when I try to run OMPI over my dual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port IB adapter:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: There are more than one active ports on host 'vic20', but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand why it is doing the above based on the description in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link above, but I cannot seem to find anywhere that will tell me how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change the GID to something else.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
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
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5178.php">Pavel Shamis (Pasha): "Re: [OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>In reply to:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
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
