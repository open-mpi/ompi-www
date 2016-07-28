<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 03:45:28 2015" -->
<!-- isoreceived="20150106084528" -->
<!-- sent="Tue, 6 Jan 2015 08:42:31 +0000" -->
<!-- isosent="20150106084231" -->
<!-- name="Waleed Lotfy" -->
<!-- email="Waleed.Lotfy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="72AAB83113C15C4CBB7CDE3037A199CB8B45E81F_at_BEXGW-H20514.local.bibalex.dom" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72AAB83113C15C4CBB7CDE3037A199CB8B45E7BB_at_BEXGW-H20514.local.bibalex.dom" -->
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
<strong>Subject:</strong> Re: [OMPI users] Icreasing OFED registerable memory<br>
<strong>From:</strong> Waleed Lotfy (<em>Waleed.Lotfy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 03:42:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26108.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] 2nd CfP: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="26106.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">Waleed Lotfy: "[OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26109.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26109.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,

Sorry for getting back so late, but we ran into some problems during the installation process and as soon as the system came up I tested the new versions for the problem but it showed another memory related warning.

--------------------------------------------------------------------------
The OpenFabrics (openib) BTL failed to initialize while trying to
allocate some locked memory.  This typically can indicate that the
memlock limits are set too low.  For most HPC installations, the
memlock limits should be set to &quot;unlimited&quot;.  The failure occured
here:

  Local host:    comp003.local
  OMPI source:   btl_openib_component.c:1200
  Function:      ompi_free_list_init_ex_new()
  Device:        mlx4_0
  Memlock limit: 65536

You may need to consult with your system administrator to get this
problem fixed.  This FAQ entry on the Open MPI web site may also be
helpful:

    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
--------------------------------------------------------------------------
--------------------------------------------------------------------------
WARNING: There was an error initializing an OpenFabrics device.

  Local host:   comp003.local
  Local device: mlx4_0
--------------------------------------------------------------------------

&lt;&lt;&lt;Then the output of the program follows.&gt;&gt;&gt;

My current running versions:

OpenMPI: 1.6.4
OFED-internal-2.3-2

I checked /etc/security/limits.d/, the scheduler's configurations (grid engine) and tried adding the following line to /etc/modprobe.d/mlx4_core: 'options mlx4_core log_num_mtt=22 log_mtts_per_seg=1' as suggested by Gus.

I am running out of ideas here, so please any help is appreciated.

P.S. I am not sure if I should open a new thread with this issue or continue with the current one, so please advice.

Waleed Lotfy
Bibliotheca Alexandrina
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26108.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] 2nd CfP: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="26106.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Whether to use the IB BTL or not"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">Waleed Lotfy: "[OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26109.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26109.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
