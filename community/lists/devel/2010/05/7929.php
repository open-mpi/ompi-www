<?
$subject_val = "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 17:16:23 2010" -->
<!-- isoreceived="20100514211623" -->
<!-- sent="Fri, 14 May 2010 14:15:53 -0700" -->
<!-- isosent="20100514211553" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed" -->
<!-- id="4BEDBD89.4070001_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BEDBD8D.5070105_at_lysator.liu.se" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-14 17:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oskar Enoksson wrote:
<br>
<span class="quotelev1">&gt; Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Very poor performance with btl sm on twin
</span><br>
<span class="quotelev2">&gt;&gt; 	nehalem servers with Mellanox ConnectX installed
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;D45958078CD65C429557B4C5F492B6A60770E51F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 13/05/10 20:56, Oskar Enoksson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that I get very bad performance unless I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explicitly exclude the &quot;sm&quot; btl and I can't figure out why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Recently someone reported issues which were traced back to
</span><br>
<span class="quotelev2">&gt;&gt; the fact that the files that sm uses for mmap() were in a
</span><br>
<span class="quotelev2">&gt;&gt; /tmp which was NFS mounted; changing the location where their
</span><br>
<span class="quotelev2">&gt;&gt; files were kept to another directory with the orte_tmpdir_base
</span><br>
<span class="quotelev2">&gt;&gt; MCA parameter fixed that issue for them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could it be similar for yourself ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; That was exactly right, as you guessed these are diskless nodes that
</span><br>
<span class="quotelev1">&gt; mounts the root filesystem over NFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Setting orte_tmpdir_base to /dev/shm and btl_sm_num_fifos=9 and then
</span><br>
<span class="quotelev1">&gt; running mpi_stress on eight cores measures speeds of 1650MB/s for both
</span><br>
<span class="quotelev1">&gt; 1MB messages and 1600MB/s for 10kB messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; /Oskar
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
<span class="quotelev1">&gt;   
</span><br>
<p>Sounds like a new FAQ entry is warranted.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7930.php">Ralph Castain: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
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
