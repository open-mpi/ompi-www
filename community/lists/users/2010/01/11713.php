<?
$subject_val = "Re: [OMPI users] btl udapl leaves string uninitialised";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 09:59:25 2010" -->
<!-- isoreceived="20100107145925" -->
<!-- sent="Thu, 07 Jan 2010 09:58:52 -0500" -->
<!-- isosent="20100107145852" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl udapl leaves string uninitialised" -->
<!-- id="4B45F6AC.5020108_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="201001071241.59964.devurandom_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl udapl leaves string uninitialised<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 09:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11714.php">Don Kerr: "Re: [OMPI users] does OpenMPI started deprecating udapl support"</a>
<li><strong>Previous message:</strong> <a href="11712.php">Jeff Squyres: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>In reply to:</strong> <a href="11707.php">Dennis Schridde: "[OMPI users] btl udapl leaves string uninitialised"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dennis,
<br>
<p>I will look at this today. And apply the change as appropriate.
<br>
<p>-DON
<br>
<p>On 01/07/10 06:41, Dennis Schridde wrote:
<br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In btl_udapl_proc.c, if peer_proc-&gt;proc_addr_count &lt;= 0, btl_addr_string will 
</span><br>
<span class="quotelev1">&gt; not be initialised. Attached is a patch that initialised btl_addr_string at 
</span><br>
<span class="quotelev1">&gt; the first possible moment, which fixes this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dennis Schridde
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11714.php">Don Kerr: "Re: [OMPI users] does OpenMPI started deprecating udapl support"</a>
<li><strong>Previous message:</strong> <a href="11712.php">Jeff Squyres: "Re: [OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>In reply to:</strong> <a href="11707.php">Dennis Schridde: "[OMPI users] btl udapl leaves string uninitialised"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
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
