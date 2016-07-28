<?
$subject_val = "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 17:02:47 2010" -->
<!-- isoreceived="20100517210247" -->
<!-- sent="Mon, 17 May 2010 17:02:42 -0400" -->
<!-- isosent="20100517210242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed" -->
<!-- id="3B762BD9-2B2B-4382-B7C4-A752240819F6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005170956070.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 17:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7950.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7942.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7957.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How's this?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=sm#poor-sm-btl-performance">http://www.open-mpi.org/faq/?category=sm#poor-sm-btl-performance</a>
<br>
<p>What's the advantage of /dev/shm?  (I don't know anything about /dev/shm)
<br>
<p><p>On May 17, 2010, at 4:08 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; I agree with Paul on the fact that a FAQ update would be great on this
</span><br>
<span class="quotelev1">&gt; subject. /dev/shm seems a good place to put the temporary files (when
</span><br>
<span class="quotelev1">&gt; available, of course).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Putting files in /dev/shm also showed better performance on our systems,
</span><br>
<span class="quotelev1">&gt; even with /tmp on a local disk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, 16 May 2010, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If I google &quot;ompi sm btl performance&quot; the top match is
</span><br>
<span class="quotelev2">&gt; &gt;  <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I scanned the entire page from top to bottom and don't see any questions of
</span><br>
<span class="quotelev2">&gt; &gt; the form
</span><br>
<span class="quotelev2">&gt; &gt;   Why is SM performance slower than ...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The words &quot;NFS&quot;, &quot;network&quot;, &quot;file system&quot; or &quot;filesystem&quot; appear nowhere on
</span><br>
<span class="quotelev2">&gt; &gt; the page.  The closest I could find is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 7. Where is the file that sm will mmap in?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The file will be in the OMPI session directory, which is typically
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something like /tmp/openmpi-sessions-myusername_at_mynodename* . The file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; itself will have the name shared_mem_pool.mynodename. For example, the full
</span><br>
<span class="quotelev3">&gt; &gt;&gt; path could be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /tmp/openmpi-sessions-myusername_at_node0_0/1543/1/shared_mem_pool.node0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To place the session directory in a non-default location, use the MCA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parameter orte_tmpdir_base.
</span><br>
<span class="quotelev2">&gt; &gt; which says nothing about where one should or should not place the session
</span><br>
<span class="quotelev2">&gt; &gt; directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not having read the entire FAQ from start to end, I will not contradict
</span><br>
<span class="quotelev2">&gt; &gt; Ralph's claim that the &quot;your SM performance might suck if you put the session
</span><br>
<span class="quotelev2">&gt; &gt; directory on a remote filesystem&quot; FAQ entry does exist, but I will assert
</span><br>
<span class="quotelev2">&gt; &gt; that I did not find it in the SM section of the FAQ.  I tried google on &quot;ompi
</span><br>
<span class="quotelev2">&gt; &gt; session directory&quot; and &quot;ompi orte_tmpdir_base&quot; and still didn't find whatever
</span><br>
<span class="quotelev2">&gt; &gt; entry Ralph is talking about.  So, I think the average user with no clue
</span><br>
<span class="quotelev2">&gt; &gt; about the relationship between the SM BLT and the session directory would
</span><br>
<span class="quotelev2">&gt; &gt; need some help finding it.  Therefore, I still feel an FAQ entry in the SM
</span><br>
<span class="quotelev2">&gt; &gt; category is warranted, even if it just references whatever entry Ralph is
</span><br>
<span class="quotelev2">&gt; &gt; referring to.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have had a FAQ on this for a long time...problem is, nobody reads it :-/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Glad you found the problem!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 14, 2010, at 3:15 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oskar Enoksson wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] Very poor performance with btl sm on twin
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   nehalem servers with Mellanox ConnectX installed
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;   &lt;D45958078CD65C429557B4C5F492B6A60770E51F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 13/05/10 20:56, Oskar Enoksson wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; The problem is that I get very bad performance unless I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; explicitly exclude the &quot;sm&quot; btl and I can't figure out why.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Recently someone reported issues which were traced back to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the fact that the files that sm uses for mmap() were in a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; /tmp which was NFS mounted; changing the location where their
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; files were kept to another directory with the orte_tmpdir_base
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; MCA parameter fixed that issue for them.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Could it be similar for yourself ?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; That was exactly right, as you guessed these are diskless nodes that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mounts the root filesystem over NFS.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Setting orte_tmpdir_base to /dev/shm and btl_sm_num_fifos=9 and then
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; running mpi_stress on eight cores measures speeds of 1650MB/s for both
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1MB messages and 1600MB/s for 10kB messages.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /Oskar
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sounds like a new FAQ entry is warranted.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="7950.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7948.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>In reply to:</strong> <a href="7942.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7957.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
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
