<?
$subject_val = "Re: [OMPI devel] Trunk problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 12:19:03 2008" -->
<!-- isoreceived="20080625161903" -->
<!-- sent="Wed, 25 Jun 2008 12:18:56 -0400" -->
<!-- isosent="20080625161856" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problems" -->
<!-- id="0DAF297E-FC8F-4FE8-B9A5-4A5CABE4124B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990806250106j11a48ffbh9e62670b0bce0fd9_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-06-25 12:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4228.php">Jeff Squyres: "Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<li><strong>In reply to:</strong> <a href="4226.php">Lenny Verkhovsky: "[OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny --
<br>
<p>I'm unable to replicate your problem:
<br>
<p>[9:15] svbu-mpi:~/svn/ompi-tests/osu % !mpir
<br>
mpirun -np 2 --bynode osu_bw
<br>
# OSU MPI Bandwidth Test (Version 2.1)
<br>
# Size		Bandwidth (MB/s)
<br>
1		0.425076
<br>
2		0.853165
<br>
4		1.694802
<br>
8		3.391638
<br>
16		6.811678
<br>
32		13.523623
<br>
64		27.016621
<br>
128		51.709992
<br>
256		101.808140
<br>
512		187.450837
<br>
1024		319.050440
<br>
2048		545.181739
<br>
4096		832.515562
<br>
8192		1046.272073
<br>
16384		904.408174
<br>
32768		836.400835
<br>
65536		940.743520
<br>
131072		1004.702270
<br>
262144		1014.897703
<br>
524288		1079.696249
<br>
1048576		1107.400559
<br>
2097152		1005.330338
<br>
4194304		1163.132235
<br>
[9:16] svbu-mpi:~/svn/ompi-tests/osu %
<br>
<p>This is with the current trunk head (r18741).
<br>
<p>How did you compile OMPI?
<br>
<p><p>On Jun 25, 2008, at 4:06 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I downloaded new version from trunk and got the fallowing
</span><br>
<span class="quotelev1">&gt; 1. opal_output for no reason ( probaly something was forgotten )
</span><br>
<span class="quotelev1">&gt; 2. it got stacked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun -np 2 -hostfile  
</span><br>
<span class="quotelev1">&gt; hostfile_w4_8 ./osu_bw
</span><br>
<span class="quotelev1">&gt; [witch4:20920] Using eager rdma: 1
</span><br>
<span class="quotelev1">&gt; [witch4:20921] Using eager rdma: 1
</span><br>
<span class="quotelev1">&gt; # OSU MPI Bandwidth Test (Version 2.1)
</span><br>
<span class="quotelev1">&gt; # Size          Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( got stacked )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
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
<li><strong>Next message:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Previous message:</strong> <a href="4228.php">Jeff Squyres: "Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<li><strong>In reply to:</strong> <a href="4226.php">Lenny Verkhovsky: "[OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
<li><strong>Reply:</strong> <a href="4230.php">George Bosilca: "Re: [OMPI devel] Trunk problems"</a>
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
