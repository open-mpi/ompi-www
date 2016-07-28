<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 11:54:17 2009" -->
<!-- isoreceived="20090227165417" -->
<!-- sent="Fri, 27 Feb 2009 09:54:12 -0700" -->
<!-- isosent="20090227165412" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="d105ee120902270854h2b7ecfbds30f9b303dd7eee76_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49A7510D.8020208_at_vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 11:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8244.php">흆e Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>In reply to:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8244.php">흆e Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8244.php">흆e Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8265.php">Brett Pemberton: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/2/26 Brett Pemberton &lt;brett_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; [[1176,1],0][btl_openib_component.c:2905:handle_wc] from tango092.vpac.org
</span><br>
<span class="quotelev1">&gt; to: tango090 error polling LP CQ with status RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev1">&gt; number 12 for wr_id 38996224 opcode 0 qp_idx 0
</span><br>
<p>What OS are you using?  I've seen this error and many other Infiniband
<br>
related errors on RedHat enterprise linux 4 update 4, with ConnectX
<br>
cards and various versions of OFED, up to version 1.3.  Depending on
<br>
the MCA parameters, I also see hangs often enough to make native
<br>
Infiniband unusable on this OS.
<br>
<p>However, the openib btl works just fine on the same hardware and the
<br>
same OFED/OpenMPI stack when used with Centos 4.6.  I suspect there
<br>
may be something about the kernel that is contributing to these
<br>
problems, but I haven't had a chance to test the kernel from 4.6 on
<br>
4.4.
<br>
<p>mch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8244.php">흆e Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8242.php">Ralph Castain: "Re: [OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>In reply to:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8244.php">흆e Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8244.php">흆e Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8265.php">Brett Pemberton: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
