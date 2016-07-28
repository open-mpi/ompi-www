<?
$subject_val = "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 15:15:45 2015" -->
<!-- isoreceived="20150601191545" -->
<!-- sent="Mon, 1 Jun 2015 13:15:41 -0600" -->
<!-- isosent="20150601191541" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88" -->
<!-- id="20150601191541.GB42459_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201506011106.t51B6hlM008922_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 15:15:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>In reply to:</strong> <a href="27007.php">Siegmar Gross: "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, a master-ism that made it into 1.10. Wasn't caught by Jenkins. Will
<br>
fix now.
<br>
<p>-Nathan
<br>
<p>On Mon, Jun 01, 2015 at 01:06:43PM +0200, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-v1.10-dev-41-g57faa88 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the following error
</span><br>
<span class="quotelev1">&gt; on all platforms with gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc/omp
</span><br>
<span class="quotelev1">&gt; i/mca/osc/pt2pt'
</span><br>
<span class="quotelev1">&gt;   CC       osc_pt2pt_module.lo
</span><br>
<span class="quotelev1">&gt; In file included from 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt.h:39:0,
</span><br>
<span class="quotelev1">&gt;                  from 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_module.c
</span><br>
<span class="quotelev1">&gt; :23:
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_header.h
</span><br>
<span class="quotelev1">&gt; : In function 'osc_pt2pt_hton_intr':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v1.10-dev-41-g57faa88/ompi/mca/osc/pt2pt/osc_pt2pt_header.h
</span><br>
<span class="quotelev1">&gt; :389:21: error: 'opal_list_item_t' has no member named 'proc_arch'
</span><br>
<span class="quotelev1">&gt;      if(!(proc-&gt;super.proc_arch &amp; OPAL_ARCH_ISBIGENDIAN))
</span><br>
<span class="quotelev1">&gt;                      ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [osc_pt2pt_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc/omp
</span><br>
<span class="quotelev1">&gt; i/mca/osc/pt2pt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.10.0/openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc/omp
</span><br>
<span class="quotelev1">&gt; i'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-v1.10-dev-41-g57faa88-Linux.x86_64.64_gcc 149 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27007.php">http://www.open-mpi.org/community/lists/users/2015/06/27007.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27016/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>Previous message:</strong> <a href="27015.php">Nathan Hjelm: "Re: [OMPI users] Memory usage for MPI program"</a>
<li><strong>In reply to:</strong> <a href="27007.php">Siegmar Gross: "[OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
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
