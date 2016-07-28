<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 14:45:48 2007" -->
<!-- isoreceived="20070418184548" -->
<!-- sent="Wed, 18 Apr 2007 14:45:20 -0400" -->
<!-- isosent="20070418184520" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mellanox IB Gold install" -->
<!-- id="DA6AE256-36D4-465F-BCCC-DADB38B4A900_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY108-F12F6F628F980BF7EC7053AAC500_at_phx.gbl" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 14:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3088.php">Michael Gauckler: "[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3085.php">Simple Kaul: "[OMPI users] Mellanox IB Gold install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you probably want to contact your Mellanox support for help  
<br>
with installing IB Gold.
<br>
<p>This list is for support of Open MPI, not IB Gold.
<br>
<p><p>On Apr 18, 2007, at 10:34 AM, Simple Kaul wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install IBGD-1.8.2 on a linux server  
</span><br>
<span class="quotelev1">&gt; (kernel-2.6.9-42.ELsmp)
</span><br>
<span class="quotelev1">&gt; and get the following error when running the ./install script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building ib RPMs. Please wait...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running /tmp/ib-1.8.2/build_rpm.sh --prefix /opt/mellanox --build_root
</span><br>
<span class="quotelev1">&gt; /../..//IBGD --packages ib_verbs -- -kver 2.6.9-42.ELsmp --ksrc
</span><br>
<span class="quotelev1">&gt; /lib/modules/2.6.9-42.ELsmp/source
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt; ERROR: Failed executing &quot;/tmp/ib-1.8.2/build_rpm.sh --prefix /opt/ 
</span><br>
<span class="quotelev1">&gt; mellanox
</span><br>
<span class="quotelev1">&gt; --build_root /../../IBGD --packages ib_verbs -- -kver  
</span><br>
<span class="quotelev1">&gt; 2.6.9-42.ELsmp --ksrc
</span><br>
<span class="quotelev1">&gt; /lib/modules/2.6.9-42.ELsmp/source &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See log file: /tmp/IBGD.12536.log
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; The log file under /tmp leads to the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: ***[libmosal.so] Error 1
</span><br>
<span class="quotelev1">&gt; make: ***[mlxsys_install] Error 2
</span><br>
<span class="quotelev1">&gt; ERROR: Failed to execute: make
</span><br>
<span class="quotelev1">&gt; VAPI_KERNEL_SRC_DIR=../../..//tmp/openib/infiniband/ib_verbs/ 
</span><br>
<span class="quotelev1">&gt; mellanox-hca...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate any support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Simple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Interest Rates Fall Again! $430,000 Mortgage for $1,399/mo -  
</span><br>
<span class="quotelev1">&gt; Calculate new
</span><br>
<span class="quotelev1">&gt; payment
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lowermybills.com/lre/index.jsp">http://www.lowermybills.com/lre/index.jsp</a>? 
</span><br>
<span class="quotelev1">&gt; sourceid=lmb-9632-18679&amp;moid=7581
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3088.php">Michael Gauckler: "[OMPI users] Datatype construction, serious limitation (was: Signal: Segmentation fault (11) Problem)"</a>
<li><strong>Previous message:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>In reply to:</strong> <a href="3085.php">Simple Kaul: "[OMPI users] Mellanox IB Gold install"</a>
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
