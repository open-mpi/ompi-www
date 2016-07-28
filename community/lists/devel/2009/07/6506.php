<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 13:54:35 2009" -->
<!-- isoreceived="20090722175435" -->
<!-- sent="Wed, 22 Jul 2009 19:54:30 +0200" -->
<!-- isosent="20090722175430" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="36ca99e90907221054u146400a9lbe0c8533fa069fd8_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="364DF00F-CA05-4F8C-ABCC-E0A5FD7EE982_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 13:54:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6504.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6503.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 22, 2009 at 19:24, Jeff Squyres&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Bert -- is this functionality something we'd want to incorporate into PLPA?
</span><br>
What functionality? The complete libcpuset or just the 'get me the
<br>
cpuset mask of this task'? I don't think its good if we duplicate the
<br>
whole functionality of the libcpuset and taking libcpuset as a
<br>
dependency of PLPA sounds too heavy. Actually I really don't know yet.
<br>
<p>That the cpuset should be considered into the decision process of
<br>
ORTE/OMPI is out of question. But I think its suffice if ORTE/OMPI
<br>
query the current affinity mask and takes only these processors into
<br>
account. Whoever set this to something smaller than the cpuset mask or
<br>
the online mask (in absence of cpusets) needs to live with that
<br>
a-priori taken decision or knows what he is doing (maybe a batch
<br>
system without cpuset support).
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6507.php">Don Kerr: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>Previous message:</strong> <a href="6505.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6504.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6503.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
