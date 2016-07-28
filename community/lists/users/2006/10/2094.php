<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 12:45:03 2006" -->
<!-- isoreceived="20061031174503" -->
<!-- sent="Tue, 31 Oct 2006 11:44:57 -0600" -->
<!-- isosent="20061031174457" -->
<!-- name="Mike Aho" -->
<!-- email="ahomike_at_[hidden]" -->
<!-- subject="[OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting" -->
<!-- id="OF2387C940.80790190-ON86257218.00612395-86257218.00618103_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2CE691AB-4731-45E7-8540-0C1B60C226AD_at_cisco.com" -->
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
<strong>From:</strong> Mike Aho (<em>ahomike_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 12:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<li><strong>Previous message:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI users] [openib-general] psm.h not found"</a>
<li><strong>In reply to:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI users] [openib-general] psm.h not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2098.php">Christian Bell: "Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<li><strong>Reply:</strong> <a href="2098.php">Christian Bell: "Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,  Thank you for moving this over to the right place.  If you look 
<br>
inside mtl_psm.h, there is a #include &lt;psm.h&gt;. 
<br>
<p>Here is what we are seeing:
<br>
<p>here's the specific error (happens during configuration)
<br>
--- MCA component mtl:psm (m4 configuration macro)
<br>
checking for MCA component mtl:psm compile mode... dso
<br>
checking psm.h usability... no
<br>
checking psm.h presence... no
<br>
checking for psm.h... no
<br>
configure: error: PSM support requested but not found.  Aborting
<br>
<p><p>&quot;Courage is what it takes to stand up and speak; courage is also what it 
<br>
takes to sit down and listen.&quot; -- Winston Churchill 
<br>
<p><p><p><p>Jeff Squyres &lt;jsquyres_at_[hidden]&gt; 
<br>
10/31/2006 11:33 AM
<br>
<p>To
<br>
Mike Aho/Rochester/IBM_at_IBMUS
<br>
cc
<br>
Open Users &lt;users_at_[hidden]&gt;
<br>
Subject
<br>
<p><p><p><p><p><p><p>Moving this post over from openib-general...
<br>
<p>Open MPI v1.2 is not yet released.  Where exactly are you getting it 
<br>
from?  If you're getting it from SVN, mtl_psm.h is in ompi/mca/mtl/ 
<br>
psm/mtl_psm.h.  What error message, exactly, are you getting?  Please 
<br>
see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Oct 31, 2006, at 12:22 PM, Mike Aho wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find psm.h which header file mtl_psm.h calls out in ompi 
</span><br>
<span class="quotelev1">&gt; v1.2  12372.  Any hints on where I would get that?  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Mike
</span><br>
<span class="quotelev1">&gt; Michael E. Aho
</span><br>
<span class="quotelev1">&gt; Roadrunner Communications Stack Interconnect Lead
</span><br>
<span class="quotelev1">&gt; MS:  45E/015-2 (Office D116)
</span><br>
<span class="quotelev1">&gt; Rochester, MN   55901-7829
</span><br>
<span class="quotelev1">&gt; Phone (507) 253-6222, TL 553-6222
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; openib-general mailing list
</span><br>
<span class="quotelev1">&gt; openib-general_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://openib.org/mailman/listinfo/openib-general">http://openib.org/mailman/listinfo/openib-general</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To unsubscribe, please visit <a href="http://openib.org/mailman/listinfo/">http://openib.org/mailman/listinfo/</a> 
</span><br>
<span class="quotelev1">&gt; openib-general
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2095.php">Rainer Keller: "Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<li><strong>Previous message:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI users] [openib-general] psm.h not found"</a>
<li><strong>In reply to:</strong> <a href="2093.php">Jeff Squyres: "Re: [OMPI users] [openib-general] psm.h not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2098.php">Christian Bell: "Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<li><strong>Reply:</strong> <a href="2098.php">Christian Bell: "Re: [OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
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
