<?
$subject_val = "Re: [OMPI users] mca btl_openib_flags default value";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 18:55:56 2008" -->
<!-- isoreceived="20081104235556" -->
<!-- sent="Tue, 4 Nov 2008 18:55:44 -0500" -->
<!-- isosent="20081104235544" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca btl_openib_flags default value" -->
<!-- id="D5BD4D45-3781-41EF-9398-16EBD59F9D4C_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0811041451110.7372_at_lxplus237.cern.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca btl_openib_flags default value<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 18:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7208.php">PattiMichelle: "[OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>Previous message:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>In reply to:</strong> <a href="7203.php">Gilbert Grosdidier: "[OMPI users] mca btl_openib_flags default value"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we fixed this help message in the upcoming v1.3.  The new help  
<br>
message is:
<br>
<p>mca:btl:openib:param:btl_openib_flags:help:BTL bit flags (general  
<br>
flags: SEND=1, PUT=2, GET=4, SEND_INPLACE=8; flags only used by the  
<br>
&quot;dr&quot; PML (ignored by others): ACK=16, CHECKSUM=32, RDMA_COMPLETION=128)
<br>
<p>So 54 corresponds to PUT, GET, ACK, CHECKSUM (SEND is implied; IIRC  
<br>
it's somewhat silly that we have SEND as a flag because we assume that  
<br>
all BTL's can do it).
<br>
<p>...although I see that the v1.3 message doesn't show the HETEROGENEOUS  
<br>
flag, which is 256.  /me goes to fix that...
<br>
<p><p>On Nov 4, 2008, at 8:57 AM, Gilbert Grosdidier wrote:
<br>
<p><span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working with OpenMPI 1.2.5 on RHEL5.2, I noticed a weird default  
</span><br>
<span class="quotelev1">&gt; value for
</span><br>
<span class="quotelev1">&gt; this mca parameter, as printed by ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;54&quot;)
</span><br>
<span class="quotelev1">&gt; BTL flags, added together: SEND=1, PUT=2, GET=4 (cannot be 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected or not ?
</span><br>
<span class="quotelev1">&gt; I could understand any value between 1 &amp; 7, but what does mean 54,  
</span><br>
<span class="quotelev1">&gt; please ?
</span><br>
<span class="quotelev1">&gt; Does it behave like 6, if removal of the unexpected bits ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,                                Gilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev1">&gt;  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev1">&gt;  B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7208.php">PattiMichelle: "[OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>Previous message:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>In reply to:</strong> <a href="7203.php">Gilbert Grosdidier: "[OMPI users] mca btl_openib_flags default value"</a>
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
