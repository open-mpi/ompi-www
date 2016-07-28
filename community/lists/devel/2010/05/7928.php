<?
$subject_val = "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 17:12:35 2010" -->
<!-- isoreceived="20100514211235" -->
<!-- sent="Fri, 14 May 2010 23:15:57 +0200" -->
<!-- isosent="20100514211557" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed" -->
<!-- id="4BEDBD8D.5070105_at_lysator.liu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3.1273852804.5455.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-14 17:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Very poor performance with btl sm on twin
</span><br>
<span class="quotelev1">&gt; 	nehalem servers with Mellanox ConnectX installed
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;D45958078CD65C429557B4C5F492B6A60770E51F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 13/05/10 20:56, Oskar Enoksson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that I get very bad performance unless I
</span><br>
<span class="quotelev2">&gt;&gt; explicitly exclude the &quot;sm&quot; btl and I can't figure out why.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Recently someone reported issues which were traced back to
</span><br>
<span class="quotelev1">&gt; the fact that the files that sm uses for mmap() were in a
</span><br>
<span class="quotelev1">&gt; /tmp which was NFS mounted; changing the location where their
</span><br>
<span class="quotelev1">&gt; files were kept to another directory with the orte_tmpdir_base
</span><br>
<span class="quotelev1">&gt; MCA parameter fixed that issue for them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could it be similar for yourself ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt;   
</span><br>
That was exactly right, as you guessed these are diskless nodes that
<br>
mounts the root filesystem over NFS.
<br>
<p>Setting orte_tmpdir_base to /dev/shm and btl_sm_num_fifos=9 and then
<br>
running mpi_stress on eight cores measures speeds of 1650MB/s for both
<br>
1MB messages and 1600MB/s for 10kB messages.
<br>
<p>Thanks!
<br>
/Oskar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7929.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
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
