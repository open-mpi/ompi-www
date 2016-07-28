<?
$subject_val = "Re: [OMPI users] btl parameter is not set to openib on node with ibcard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 12:16:36 2008" -->
<!-- isoreceived="20080617161636" -->
<!-- sent="Tue, 17 Jun 2008 17:15:50 +0100" -->
<!-- isosent="20080617161550" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl parameter is not set to openib on node with ibcard" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF605_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="79CC616B-724C-4388-BC25-B3F8EA37E01B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl parameter is not set to openib on node with ibcard<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 12:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks, I forgot I had a ~/.openmpi/mca-params.conf file laying around
<br>
from a previous test.
<br>
<p>Henk
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 17 June 2008 16:03
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] btl parameter is not set to openib 
</span><br>
<span class="quotelev1">&gt; on node with ibcard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you surmised, it looks like your &quot;btl&quot; parameter is being 
</span><br>
<span class="quotelev1">&gt; set somewhere, and it excludes the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check out this FAQ entry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 17, 2008, at 10:49 AM, SLIM H.A. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI does not pick up the infiniband component on our nodes with 
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox cards:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info --param btl openib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; returns
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 	If btl_base_debug is 1 standard debug is output, if &gt; 1 
</span><br>
<span class="quotelev1">&gt; verbose debug 
</span><br>
<span class="quotelev2">&gt; &gt; is output MCA btl: parameter &quot;btl&quot; (current value: &quot;mx,self,sm&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 	Default selection set of components for the btl 
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; means &quot;use all components that can
</span><br>
<span class="quotelev2">&gt; &gt;                          be found&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 	Verbosity level for the btl framework (0 = no 
</span><br>
<span class="quotelev1">&gt; verbosity) MCA btl: 
</span><br>
<span class="quotelev2">&gt; &gt; parameter &quot;btl_base_warn_component_unused&quot; (current value:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; 	This parameter is used to turn on warning messages when 
</span><br>
<span class="quotelev1">&gt; certain NICs 
</span><br>
<span class="quotelev2">&gt; &gt; are not used
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that the btl parameter has the value &quot;mx,self,sm&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have configured openmpi-1.2.5 with the --with-openib=dir and 
</span><br>
<span class="quotelev2">&gt; &gt; --with-mx=dir switches and with ofed-1.2. This is part of 
</span><br>
<span class="quotelev1">&gt; the config 
</span><br>
<span class="quotelev2">&gt; &gt; output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- MCA component btl:mx (m4 configuration macro) checking for MCA 
</span><br>
<span class="quotelev2">&gt; &gt; component btl:mx compile mode... dso checking myriexpress.h 
</span><br>
<span class="quotelev2">&gt; &gt; usability... yes checking myriexpress.h presence... yes 
</span><br>
<span class="quotelev1">&gt; checking for 
</span><br>
<span class="quotelev2">&gt; &gt; myriexpress.h... yes looking for library in lib checking for 
</span><br>
<span class="quotelev2">&gt; &gt; mx_finalize in -lmyriexpress... yes checking for MX version 1.0 or 
</span><br>
<span class="quotelev2">&gt; &gt; later... yes checking for MX_API...
</span><br>
<span class="quotelev2">&gt; &gt; checking for a MX version with mx_register_match_callback... yes 
</span><br>
<span class="quotelev2">&gt; &gt; checking if MCA component btl:mx can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- MCA component btl:openib (m4 configuration macro) 
</span><br>
<span class="quotelev1">&gt; checking for MCA 
</span><br>
<span class="quotelev2">&gt; &gt; component btl:openib compile mode... dso checking 
</span><br>
<span class="quotelev1">&gt; infiniband/verbs.h 
</span><br>
<span class="quotelev2">&gt; &gt; usability... yes checking infiniband/verbs.h presence... 
</span><br>
<span class="quotelev1">&gt; yes checking 
</span><br>
<span class="quotelev2">&gt; &gt; for infiniband/verbs.h... yes checking for ibv_open_device in 
</span><br>
<span class="quotelev2">&gt; &gt; -libverbs... yes checking number of arguments to ibv_create_cq... 5 
</span><br>
<span class="quotelev2">&gt; &gt; checking for ibv_create_srq... yes checking for 
</span><br>
<span class="quotelev1">&gt; ibv_get_device_list... 
</span><br>
<span class="quotelev2">&gt; &gt; yes checking for ibv_resize_cq... yes checking for ibv_fork_init... 
</span><br>
<span class="quotelev2">&gt; &gt; yes checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It appears the configuraion for both interconnects succeeded.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why does ompi_info find the mx btl instead of openib?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for any advice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Henk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5915.php">Jeff Squyres: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5913.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
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
