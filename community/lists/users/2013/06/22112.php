<?
$subject_val = "Re: [OMPI users] jobs are hanging with btl_openib_component error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 17 14:03:15 2013" -->
<!-- isoreceived="20130617180315" -->
<!-- sent="Mon, 17 Jun 2013 14:03:09 -0400" -->
<!-- isosent="20130617180309" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs are hanging with btl_openib_component error" -->
<!-- id="F47A229B-9496-459D-8924-82D0226734F5_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F68A2D2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] jobs are hanging with btl_openib_component error<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-17 14:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22111.php">Haroogan: "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>In reply to:</strong> <a href="22109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may use tools like this <a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>
<br>
to debug your ib network problems. Most likely, you have some bad cable or connector somewhere in the network.
<br>
The tool should be able to pin-point the problem.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jun 17, 2013, at 9:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
That sounds like there's a problem with your InfiniBand fabric.
You should run a complete level-0 diagnostic on your IB network.
On Jun 17, 2013, at 5:23 AM, &quot;Singh, Bharati (GE Global Research, consultant)&quot; &lt;Bharati.Singh_at_[hidden]&lt;mailto:Bharati.Singh_at_[hidden]&gt;&gt; wrote:
Hi Team,
Our users jobs are hanging and we notice below errors.
[[61410,1],65][btl_openib_component.c:3238:handle_wc] from bng1aviationdc22 to: bng1aviationdc26 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 774739584 opcode 1  vendor error 129 qp_idx 0
PFA file for more information.
Thanks,
Bharati Singh
*****************************************************************************
**                                                                         **
** WARNING:  This email contains an attachment of a very suspicious type.  **
** You are urged NOT to open this attachment unless you are absolutely     **
** sure it is legitimate.  Opening this attachment may cause irreparable   **
** damage to your computer and your files.  If you have any questions      **
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
**                                                                         **
** This warning was added by the IU Computer Science Dept. mail scanner.   **
*****************************************************************************
&lt;output.14807.zip&gt;_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22113.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread hangs in OpenMPI 1.7.1 when using --enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="22111.php">Haroogan: "[OMPI users] Troubles Building OpenMPI on MinGW-w64 (GCC 4.8.0)"</a>
<li><strong>In reply to:</strong> <a href="22109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
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
