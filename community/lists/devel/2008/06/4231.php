<?
$subject_val = "Re: [OMPI devel] Trunk problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 13:00:24 2008" -->
<!-- isoreceived="20080625170024" -->
<!-- sent="Wed, 25 Jun 2008 13:00:13 -0400" -->
<!-- isosent="20080625170013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problems" -->
<!-- id="C592FF55-0E65-4378-94F8-86F2D6ECC183_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BEEB3F39-22B9-4BF6-B6D1-554B3D9B2084_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-25 13:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4232.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>In reply to:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4232.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4232.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, right -- I can replicate, too.  Enjoy, George.  :-)
<br>
<p>On Jun 25, 2008, at 12:50 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I can replicate it. But only with shared memory. Jeff, if you remove  
</span><br>
<span class="quotelev1">&gt; the --bynode I guess you will run into the same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take care of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2008, at 12:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm unable to replicate your problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [9:15] svbu-mpi:~/svn/ompi-tests/osu % !mpir
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --bynode osu_bw
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bandwidth Test (Version 2.1)
</span><br>
<span class="quotelev2">&gt;&gt; # Size		Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1		0.425076
</span><br>
<span class="quotelev2">&gt;&gt; 2		0.853165
</span><br>
<span class="quotelev2">&gt;&gt; 4		1.694802
</span><br>
<span class="quotelev2">&gt;&gt; 8		3.391638
</span><br>
<span class="quotelev2">&gt;&gt; 16		6.811678
</span><br>
<span class="quotelev2">&gt;&gt; 32		13.523623
</span><br>
<span class="quotelev2">&gt;&gt; 64		27.016621
</span><br>
<span class="quotelev2">&gt;&gt; 128		51.709992
</span><br>
<span class="quotelev2">&gt;&gt; 256		101.808140
</span><br>
<span class="quotelev2">&gt;&gt; 512		187.450837
</span><br>
<span class="quotelev2">&gt;&gt; 1024		319.050440
</span><br>
<span class="quotelev2">&gt;&gt; 2048		545.181739
</span><br>
<span class="quotelev2">&gt;&gt; 4096		832.515562
</span><br>
<span class="quotelev2">&gt;&gt; 8192		1046.272073
</span><br>
<span class="quotelev2">&gt;&gt; 16384		904.408174
</span><br>
<span class="quotelev2">&gt;&gt; 32768		836.400835
</span><br>
<span class="quotelev2">&gt;&gt; 65536		940.743520
</span><br>
<span class="quotelev2">&gt;&gt; 131072		1004.702270
</span><br>
<span class="quotelev2">&gt;&gt; 262144		1014.897703
</span><br>
<span class="quotelev2">&gt;&gt; 524288		1079.696249
</span><br>
<span class="quotelev2">&gt;&gt; 1048576		1107.400559
</span><br>
<span class="quotelev2">&gt;&gt; 2097152		1005.330338
</span><br>
<span class="quotelev2">&gt;&gt; 4194304		1163.132235
</span><br>
<span class="quotelev2">&gt;&gt; [9:16] svbu-mpi:~/svn/ompi-tests/osu %
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with the current trunk head (r18741).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How did you compile OMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2008, at 4:06 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I downloaded new version from trunk and got the fallowing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. opal_output for no reason ( probaly something was forgotten )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. it got stacked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun -np 2 -hostfile  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile_w4_8 ./osu_bw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch4:20920] Using eager rdma: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [witch4:20921] Using eager rdma: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI Bandwidth Test (Version 2.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size          Bandwidth (MB/s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( got stacked )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4232.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>In reply to:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4232.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4232.php">Jeff Squyres: "Re: [OMPI devel] Trunk problems"</a>
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
