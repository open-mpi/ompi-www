<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 10:25:44 2014" -->
<!-- isoreceived="20140610142544" -->
<!-- sent="Tue, 10 Jun 2014 08:25:39 -0600" -->
<!-- isosent="20140610142539" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="20140610142539.GC75396_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E58AA048-ECB0-4828-BA2E-03DDF7E355E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib segfaults with Torque<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 10:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<li><strong>In reply to:</strong> <a href="24616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 10, 2014 at 12:10:28AM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I seem to recall that you have an IB-based cluster, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From a *very quick* glance at the code, it looks like this might be a simple incorrect-finalization issue.  That is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you run the job on a single server
</span><br>
<span class="quotelev1">&gt; - openib disqualifies itself because you're running on a single server
</span><br>
<span class="quotelev1">&gt; - openib then goes to finalize/close itself
</span><br>
<span class="quotelev1">&gt; - but openib didn't fully initialize itself (because it disqualified itself early in the initialization process), and something in the finalization process didn't take that into account
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan -- is that anywhere close to correct?
</span><br>
<p>Nope. udcm_module_finalize is being called because there was an error
<br>
setting up the udcm state. See btl_openib_connect_udcm.c:476. The
<br>
opal_list_t destructor is getting an assert failure. Probably because
<br>
the constructor wasn't called. I can rearrange the constructors to be
<br>
called first but there appears to be a deeper issue with the user's
<br>
system: udcm_module_init should not be failing! It creates a couple of
<br>
CQs, allocates a small number of registered bufferes and starts
<br>
monitoring the fd for the completion channel. All these things are also
<br>
done in the setup of the openib btl itself. Keep in mind that the openib
<br>
btl will not disqualify itself when running single server. Openib may be
<br>
used to communicate on node and is needed for the dynamics case.
<br>
<p>The user might try adding -mca btl_base_verbose 100 to shed some
<br>
light on what the real issue is.
<br>
<p>BTW, I no longer monitor the user mailing list. If something needs my
<br>
attention forward it to me directly.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24619/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in OpenMPI-1.8.1: missing routines mpi_win_allocate_shared, mpi_win_shared_query  called from Ftn95-code"</a>
<li><strong>In reply to:</strong> <a href="24616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib segfaults with Torque"</a>
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
