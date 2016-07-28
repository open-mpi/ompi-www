<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 07:01:51 2006" -->
<!-- isoreceived="20061017110151" -->
<!-- sent="Tue, 17 Oct 2006 12:01:10 +0100 (BST)" -->
<!-- isosent="20061017110110" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.3a1r12121 ..." -->
<!-- id="Pine.GSO.4.53.0610171156150.29896_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-17 07:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Previous message:</strong> <a href="1993.php">Laurent.POREZ_at_[hidden]: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Reply:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Reply:</strong> <a href="2001.php">Lydia Heck: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know that with 1.3a1xxxx I a looking at a development release.
<br>
HOwever I do need the SGE (GridEngine) support and I could not find
<br>
a download for a stable (or any other) 1.2 release.
<br>
<p>So I downloaded 1.3a1r12121 and tried to configure it.
<br>
<p>In my configuration I use
<br>
<p>--with-mx=/opt/mx (where the MX software is installed); also
<br>
--with-mx-libdir=/opt/mx/lib64, because I build for 64 bit only.
<br>
<p>Then I use the Sun Studio11 compilers and the configuration fails
<br>
<p>with
<br>
<p><p>--- MCA component btl:mx (m4 configuration macro)
<br>
checking for MCA component btl:mx compile mode... dso
<br>
checking myriexpress.h usability... no
<br>
checking myriexpress.h presence... no
<br>
checking for myriexpress.h... no
<br>
<p><p>configure: error: MX support requested but not found.  Aborting
<br>
<p><p>I have tried everything, entering under CFLAGS etc
<br>
-I/opt/mx/include
<br>
<p>modifying
<br>
<p>--with-mx=/opt/mx/include ....
<br>
<p>each the configure fails with the same error.
<br>
<p>Yes, mx is definitely installed, and yes the path to mx is definitely
<br>
/opt/mx ...
<br>
<p>Any ideas ....
<br>
<p>Lydia Heck
<br>
<p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Previous message:</strong> <a href="1993.php">Laurent.POREZ_at_[hidden]: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Reply:</strong> <a href="1995.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
<li><strong>Reply:</strong> <a href="2001.php">Lydia Heck: "Re: [OMPI users] openmpi 1.3a1r12121 ..."</a>
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
