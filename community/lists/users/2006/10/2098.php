<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 14:57:09 2006" -->
<!-- isoreceived="20061031195709" -->
<!-- sent="Tue, 31 Oct 2006 11:56:56 -0800" -->
<!-- isosent="20061031195656" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting" -->
<!-- id="20061031195656.GN26310_at_pathscale.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF2387C940.80790190-ON86257218.00612395-86257218.00618103_at_us.ibm.com" -->
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
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 14:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2099.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>In reply to:</strong> <a href="2094.php">Mike Aho: "[OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PSM depends on InfiniPath 2.0, to be released in early November.  We
<br>
are currently packaging psm.h  as part of the infinipath-devel rpm.
<br>
<p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p>On Tue, 31 Oct 2006, Mike Aho wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,  Thank you for moving this over to the right place.  If you look 
</span><br>
<span class="quotelev1">&gt; inside mtl_psm.h, there is a #include &lt;psm.h&gt;. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what we are seeing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here's the specific error (happens during configuration)
</span><br>
<span class="quotelev1">&gt; --- MCA component mtl:psm (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component mtl:psm compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking psm.h usability... no
</span><br>
<span class="quotelev1">&gt; checking psm.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for psm.h... no
</span><br>
<span class="quotelev1">&gt; configure: error: PSM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Courage is what it takes to stand up and speak; courage is also what it 
</span><br>
<span class="quotelev1">&gt; takes to sit down and listen.&quot; -- Winston Churchill 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; 10/31/2006 11:33 AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Mike Aho/Rochester/IBM_at_IBMUS
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Open Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moving this post over from openib-general...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI v1.2 is not yet released.  Where exactly are you getting it 
</span><br>
<span class="quotelev1">&gt; from?  If you're getting it from SVN, mtl_psm.h is in ompi/mca/mtl/ 
</span><br>
<span class="quotelev1">&gt; psm/mtl_psm.h.  What error message, exactly, are you getting?  Please 
</span><br>
<span class="quotelev1">&gt; see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2006, at 12:22 PM, Mike Aho wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I cannot find psm.h which header file mtl_psm.h calls out in ompi 
</span><br>
<span class="quotelev2">&gt; &gt; v1.2  12372.  Any hints on where I would get that?  Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --Mike
</span><br>
<span class="quotelev2">&gt; &gt; Michael E. Aho
</span><br>
<span class="quotelev2">&gt; &gt; Roadrunner Communications Stack Interconnect Lead
</span><br>
<span class="quotelev2">&gt; &gt; MS:  45E/015-2 (Office D116)
</span><br>
<span class="quotelev2">&gt; &gt; Rochester, MN   55901-7829
</span><br>
<span class="quotelev2">&gt; &gt; Phone (507) 253-6222, TL 553-6222
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; openib-general mailing list
</span><br>
<span class="quotelev2">&gt; &gt; openib-general_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/">http://openib.org/mailman/listinfo/</a> 
</span><br>
<span class="quotelev2">&gt; &gt; openib-general
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2099.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2097.php">Ralph H Castain: "Re: [OMPI users] Problem starting rank other than zero"</a>
<li><strong>In reply to:</strong> <a href="2094.php">Mike Aho: "[OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
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
