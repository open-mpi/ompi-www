<?
$subject_val = "[OMPI users] btl parameter is not set to openib on node with ib card";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 10:51:17 2008" -->
<!-- isoreceived="20080617145117" -->
<!-- sent="Tue, 17 Jun 2008 15:49:36 +0100" -->
<!-- isosent="20080617144936" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] btl parameter is not set to openib on node with ib card" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF603_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] btl parameter is not set to openib on node with ib card<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 10:49:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>Previous message:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>Reply:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>OpenMPI does not pick up the infiniband component on our nodes with
<br>
Mellanox cards:
<br>
<p>ompi_info --param btl openib
<br>
<p>returns
<br>
<p>MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose
<br>
debug is output
<br>
MCA btl: parameter &quot;btl&quot; (current value: &quot;mx,self,sm&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the btl framework
<br>
(&lt;none&gt; means &quot;use all components that can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be found&quot;)
<br>
MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the btl framework (0 = no verbosity)
<br>
MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This parameter is used to turn on warning messages when certain
<br>
NICs are not used
<br>
<p>Note that the btl parameter has the value &quot;mx,self,sm&quot;.
<br>
<p>I have configured openmpi-1.2.5 with the --with-openib=dir and
<br>
--with-mx=dir switches
<br>
and with ofed-1.2. This is part of the config output:
<br>
<p>--- MCA component btl:mx (m4 configuration macro)
<br>
checking for MCA component btl:mx compile mode... dso
<br>
checking myriexpress.h usability... yes
<br>
checking myriexpress.h presence... yes
<br>
checking for myriexpress.h... yes
<br>
looking for library in lib
<br>
checking for mx_finalize in -lmyriexpress... yes
<br>
checking for MX version 1.0 or later... yes
<br>
checking for MX_API... 
<br>
checking for a MX version with mx_register_match_callback... yes
<br>
checking if MCA component btl:mx can compile... yes
<br>
<p>--- MCA component btl:openib (m4 configuration macro)
<br>
checking for MCA component btl:openib compile mode... dso
<br>
checking infiniband/verbs.h usability... yes
<br>
checking infiniband/verbs.h presence... yes
<br>
checking for infiniband/verbs.h... yes
<br>
checking for ibv_open_device in -libverbs... yes
<br>
checking number of arguments to ibv_create_cq... 5
<br>
checking for ibv_create_srq... yes
<br>
checking for ibv_get_device_list... yes
<br>
checking for ibv_resize_cq... yes
<br>
checking for ibv_fork_init... yes
<br>
checking if MCA component btl:openib can compile... yes
<br>
<p>It appears the configuraion for both interconnects succeeded.
<br>
<p>Why does ompi_info find the mx btl instead of openib?
<br>
<p>Thanks for any advice
<br>
<p>Henk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>Previous message:</strong> <a href="5907.php">Ralph H Castain: "Re: [OMPI users] Application Context and OpenMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
<li><strong>Reply:</strong> <a href="5909.php">Jeff Squyres: "Re: [OMPI users] btl parameter is not set to openib on node with ib card"</a>
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
