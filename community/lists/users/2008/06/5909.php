<?
$subject_val = "Re: [OMPI users] btl parameter is not set to openib on node with ib card";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 11:03:17 2008" -->
<!-- isoreceived="20080617150317" -->
<!-- sent="Tue, 17 Jun 2008 11:02:59 -0400" -->
<!-- isosent="20080617150259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl parameter is not set to openib on node with ib card" -->
<!-- id="79CC616B-724C-4388-BC25-B3F8EA37E01B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF603_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl parameter is not set to openib on node with ib card<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 11:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5910.php">Tony Smith: "[OMPI users] [SPAM:### 82%] RE:  help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5908.php">SLIM H.A.: "[OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>In reply to:</strong> <a href="5908.php">SLIM H.A.: "[OMPI users] btl parameter is not set to openib on node with ib card"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5914.php">SLIM H.A.: "Re: [OMPI users] btl parameter is not set to openib on node with ibcard"</a>
<li><strong>Reply:</strong> <a href="5914.php">SLIM H.A.: "Re: [OMPI users] btl parameter is not set to openib on node with ibcard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As you surmised, it looks like your &quot;btl&quot; parameter is being set  
<br>
somewhere, and it excludes the openib BTL.
<br>
<p>Check out this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p><p>On Jun 17, 2008, at 10:49 AM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI does not pick up the infiniband component on our nodes with
</span><br>
<span class="quotelev1">&gt; Mellanox cards:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; returns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose
</span><br>
<span class="quotelev1">&gt; debug is output
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl&quot; (current value: &quot;mx,self,sm&quot;)
</span><br>
<span class="quotelev1">&gt; 	Default selection set of components for the btl framework
</span><br>
<span class="quotelev1">&gt; (&lt;none&gt; means &quot;use all components that can
</span><br>
<span class="quotelev1">&gt;                          be found&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; 	Verbosity level for the btl framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt; 	This parameter is used to turn on warning messages when certain
</span><br>
<span class="quotelev1">&gt; NICs are not used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the btl parameter has the value &quot;mx,self,sm&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have configured openmpi-1.2.5 with the --with-openib=dir and
</span><br>
<span class="quotelev1">&gt; --with-mx=dir switches
</span><br>
<span class="quotelev1">&gt; and with ofed-1.2. This is part of the config output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:mx (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:mx compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking myriexpress.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking myriexpress.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for myriexpress.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for mx_finalize in -lmyriexpress... yes
</span><br>
<span class="quotelev1">&gt; checking for MX version 1.0 or later... yes
</span><br>
<span class="quotelev1">&gt; checking for MX_API...
</span><br>
<span class="quotelev1">&gt; checking for a MX version with mx_register_match_callback... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:mx can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:openib (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:openib compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_open_device in -libverbs... yes
</span><br>
<span class="quotelev1">&gt; checking number of arguments to ibv_create_cq... 5
</span><br>
<span class="quotelev1">&gt; checking for ibv_create_srq... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_get_device_list... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_resize_cq... yes
</span><br>
<span class="quotelev1">&gt; checking for ibv_fork_init... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:openib can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears the configuraion for both interconnects succeeded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does ompi_info find the mx btl instead of openib?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any advice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
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
<li><strong>Next message:</strong> <a href="5910.php">Tony Smith: "[OMPI users] [SPAM:### 82%] RE:  help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5908.php">SLIM H.A.: "[OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>In reply to:</strong> <a href="5908.php">SLIM H.A.: "[OMPI users] btl parameter is not set to openib on node with ib card"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5914.php">SLIM H.A.: "Re: [OMPI users] btl parameter is not set to openib on node with ibcard"</a>
<li><strong>Reply:</strong> <a href="5914.php">SLIM H.A.: "Re: [OMPI users] btl parameter is not set to openib on node with ibcard"</a>
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
