<?
$subject_val = "[OMPI users] Infiniband requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 12:54:11 2009" -->
<!-- isoreceived="20090625165411" -->
<!-- sent="Thu, 25 Jun 2009 12:53:54 -0400" -->
<!-- isosent="20090625165354" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband requirements" -->
<!-- id="0228C6B6F0A7447C8B0B30FB7E65B37E_at_inspiron9100" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A42B731.7040507_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Infiniband requirements<br>
<strong>From:</strong> Jim Kress (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 12:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9715.php">Dave Love: "[OMPI users] MX questions"</a>
<li><strong>Previous message:</strong> <a href="9713.php">Robert Jackson: "[OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>In reply to:</strong> <a href="9705.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Reply:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Reply:</strong> <a href="9726.php">Jeff Squyres: "Re: [OMPI users] Infiniband requirements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it correct to assume that, when one is configuring openmpi v1.3.2 and if
<br>
one leaves out the
<br>
<p>--with-openib=/dir
<br>
<p>from the ./configure command line, that InfiniBand support will NOT be built
<br>
into openmpi v1.3.2?  Then, if an Ethernet network is present that connects
<br>
all the nodes, openmpi will use that network?
<br>
<p>Also, is it required to add
<br>
<p>--enable-static
<br>
<p>to the ./configure command line to make sure Infiniband support is
<br>
available?  
<br>
If I do not then the ompi_info --config command yields
<br>
<p>Wrapper extra LIBS:  -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
<p>Note the absence of -lrdmacm and -libverbs which, I am told, are essential
<br>
for Infiniband support.
<br>
<p>Whereas if --enable-static IS included, the ompi_info --config command
<br>
yields
<br>
<p>Wrapper extra LIBS: -lrdmacm -libverbs  -ldl -Wl,--export-dynamic -lnsl
<br>
-lutil -lm -ldl
<br>
<p>And  -lrdmacm and -libverbs are now present.
<br>
<p>Thanks for your help.
<br>
<p>Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9715.php">Dave Love: "[OMPI users] MX questions"</a>
<li><strong>Previous message:</strong> <a href="9713.php">Robert Jackson: "[OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>In reply to:</strong> <a href="9705.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Reply:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>Reply:</strong> <a href="9726.php">Jeff Squyres: "Re: [OMPI users] Infiniband requirements"</a>
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
