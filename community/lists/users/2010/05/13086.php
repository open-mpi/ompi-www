<?
$subject_val = "[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 08:38:26 2010" -->
<!-- isoreceived="20100519123826" -->
<!-- sent="Wed, 19 May 2010 14:38:15 +0200" -->
<!-- isosent="20100519123815" -->
<!-- name="Dr. Vincent Keller" -->
<!-- email="Vincent.Keller_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)" -->
<!-- id="4BF3DBB7.9060409_at_id.uzh.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BF3C911.7040300_at_q-leap.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI + IB makes problem (btl_openib_component.c)<br>
<strong>From:</strong> Dr. Vincent Keller (<em>Vincent.Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 08:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>In reply to:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>One of our users faces problems running his application (large CP2K cases)
<br>
<p>Cluster:
<br>
OpenMPI 1.4.2, SLES 9, gcc 4.1.2, OFED 1.4 on Intel Nehalem (5350)
<br>
<p>The message is:
<br>
<p>[[45776,1],214][btl_openib_component.c:2951:handle_wc] from node140 to:
<br>
node400 error polling LP CQ with status LOCAL QP OPERATION ERROR status
<br>
number 2 for wr_id 250502144 opcode 1  vendor error 103 qp_idx 0
<br>
<p>OpenMPI has been compiled using the following flags:
<br>
<p>./configure --prefix=/som/prefix/dir --enable-branch-probabilities
<br>
--enable-mem-debug --enable-mem-profile --enable-picky --enable-peruse
<br>
--enable-per-user-config-files --enable-cxx-exceptions
<br>
--enable-mpi-threads --enable-openib-ibcm --enable-openib-rdmacm --with-sge
<br>
<p>Any idea why and/or if something is wrong in the configuration ? Any fix ?
<br>
<p>Thanks in advance
<br>
<p>Best regards
<br>
Vince
<br>
<p><pre>
-- 
---------------------------------------------------
Dr. Vincent KELLER
Universit&#228;t Z&#252;rich
           <a href="http://www.hpcn.uzh.ch">http://www.hpcn.uzh.ch</a>
ADDRESS:   Winterthurstrasse 190
           CH - 8057 Z&#252;rich
           Switzerland
PHONE  :   + 41 (0) 44/635'40'37
FAX    :   + 41 (0) 44/635'45'05
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>In reply to:</strong> <a href="13085.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13087.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
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
