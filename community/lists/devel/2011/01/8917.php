<?
$subject_val = "[OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 11:37:39 2011" -->
<!-- isoreceived="20110124163739" -->
<!-- sent="Mon, 24 Jan 2011 17:37:33 +0100" -->
<!-- isosent="20110124163733" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI-MIGRATE error" -->
<!-- id="AANLkTikxFz1EvU=RM=ZRnft_rp=wK8RZj_6YPhksuEmu_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI-MIGRATE error<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 11:37:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8918.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll
<br>
<p>I've got a problem when i try to use the ompi-migrate command.
<br>
<p>What i'm doing is execute for example the next application in one node of a
<br>
cluster (both process wil run on the same node):
<br>
<p>*mpirun -np 2 -am ft-enable-cr ./whoami 10 10*
<br>
<p>Then in the same node i try to migrate the processes to another node:
<br>
<p>*ompi-migrate -x node9 -t node3 14914*
<br>
*
<br>
*
<br>
And then i get this message:
<br>
<p>*[clus9:15620] *** Process received signal ****
<br>
*[clus9:15620] Signal: Segmentation fault (11)*
<br>
*[clus9:15620] Signal code: Address not mapped (1)*
<br>
*[clus9:15620] Failing at address: (nil)*
<br>
*[clus9:15620] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b8d40]*
<br>
*[clus9:15620] *** End of error message ****
<br>
*Segmentation fault*
<br>
*
<br>
*
<br>
I assume that maybe there is something wrong with the thread level, but i
<br>
have configured the open-mpi like this:
<br>
<p>*../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/
<br>
--enable-debug --enable-debug-symbols --enable-trace --with-ft=cr
<br>
--disable-ipv6 --enable-opal-multi-threads --enable-ft-thread
<br>
--without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/
<br>
--with-blcr-libdir=/soft/blcr-0.8.2/lib/*
<br>
*
<br>
*
<br>
The checkpoint and restart works fine, but when i restore an application
<br>
that has more than one process, this one is restored and executed until the
<br>
last line before MPI_FINALIZE(), but the processes never finalize, i assume
<br>
that they never call the MPI_FINALIZE(), but with one process
<br>
ompi-checkpoint and ompi-restart work great.
<br>
<p>Best regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8918.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8916.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
