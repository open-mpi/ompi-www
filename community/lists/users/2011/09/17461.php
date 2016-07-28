<?
$subject_val = "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 11:56:16 2011" -->
<!-- isoreceived="20110928155616" -->
<!-- sent="Wed, 28 Sep 2011 09:55:59 -0600" -->
<!-- isosent="20110928155559" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE48FFA_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 11:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17462.php">Jeff Squyres: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17460.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17462.php">Jeff Squyres: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17462.php">Jeff Squyres: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting some undefined references in building OpenMPI 1.5.4 and I would like to know how to work around it.
<br>
<p>The errors look like this:
<br>
<p>/scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_alloc_membind':
<br>
topology-linux.c:(.text+0x1da): undefined reference to `mbind'
<br>
topology-linux.c:(.text+0x213): undefined reference to `mbind'
<br>
/scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_set_area_membind':
<br>
topology-linux.c:(.text+0x414): undefined reference to `mbind'
<br>
topology-linux.c:(.text+0x46c): undefined reference to `mbind'
<br>
/scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_get_thisthread_membind':
<br>
topology-linux.c:(.text+0x4ff): undefined reference to `get_mempolicy'
<br>
topology-linux.c:(.text+0x5ff): undefined reference to `get_mempolicy'
<br>
/scratch1/bloscel/builds/release/openmpi-intel/lib/libmpi.a(topology-linux.o): In function `hwloc_linux_set_thisthread_membind':
<br>
topology-linux.c:(.text+0x7b5): undefined reference to `migrate_pages'
<br>
topology-linux.c:(.text+0x7e9): undefined reference to `set_mempolicy'
<br>
topology-linux.c:(.text+0x831): undefined reference to `set_mempolicy'
<br>
make: *** [main] Error 1
<br>
<p>Some  configure output that is probably relevant:
<br>
<p>checking numaif.h usability... yes
<br>
checking numaif.h presence... yes
<br>
checking for numaif.h... yes
<br>
checking for set_mempolicy in -lnuma... yes
<br>
checking for mbind in -lnuma... yes
<br>
checking for migrate_pages in -lnuma... yes
<br>
<p>The FAQ says that I should have to give -with-libnuma explicitly, but I did not do that.   Is there a problem with configure? Or the FAQ?  Or perhaps the system has a configuration peculiarity?
<br>
<p>On another system, the configure output is different, and there are no unresolved references:
<br>
<p>checking numaif.h usability... no
<br>
checking numaif.h presence... no
<br>
checking for numaif.h... no
<br>
<p>What is the configure option that will make the unresolved references go away?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17462.php">Jeff Squyres: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17460.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17462.php">Jeff Squyres: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17462.php">Jeff Squyres: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="17464.php">Brice Goglin: "Re: [OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
