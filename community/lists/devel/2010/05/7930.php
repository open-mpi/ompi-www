<?
$subject_val = "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 17:50:05 2010" -->
<!-- isoreceived="20100514215005" -->
<!-- sent="Fri, 14 May 2010 15:49:54 -0600" -->
<!-- isosent="20100514214954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed" -->
<!-- id="984F0DE0-3345-494F-97FD-25DD8A501E2A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BEDBD89.4070001_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-14 17:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7939.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7939.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7940.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have had a FAQ on this for a long time...problem is, nobody reads it :-/
<br>
<p>Glad you found the problem!
<br>
<p>On May 14, 2010, at 3:15 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Oskar Enoksson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] Very poor performance with btl sm on twin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	nehalem servers with Mellanox ConnectX installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&lt;D45958078CD65C429557B4C5F492B6A60770E51F_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 13/05/10 20:56, Oskar Enoksson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem is that I get very bad performance unless I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; explicitly exclude the &quot;sm&quot; btl and I can't figure out why.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recently someone reported issues which were traced back to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fact that the files that sm uses for mmap() were in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp which was NFS mounted; changing the location where their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files were kept to another directory with the orte_tmpdir_base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA parameter fixed that issue for them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could it be similar for yourself ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt; That was exactly right, as you guessed these are diskless nodes that
</span><br>
<span class="quotelev2">&gt;&gt; mounts the root filesystem over NFS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Setting orte_tmpdir_base to /dev/shm and btl_sm_num_fifos=9 and then
</span><br>
<span class="quotelev2">&gt;&gt; running mpi_stress on eight cores measures speeds of 1650MB/s for both
</span><br>
<span class="quotelev2">&gt;&gt; 1MB messages and 1600MB/s for 10kB messages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; /Oskar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds like a new FAQ entry is warranted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7931.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7939.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7939.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7940.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
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
