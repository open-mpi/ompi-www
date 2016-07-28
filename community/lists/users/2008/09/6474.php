<?
$subject_val = "[OMPI users] Why compilig in global paths (only) for configuretion files?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 05:33:19 2008" -->
<!-- isoreceived="20080908093319" -->
<!-- sent="Mon, 08 Sep 2008 11:33:13 +0200" -->
<!-- isosent="20080908093313" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Why compilig in global paths (only) for configuretion files?" -->
<!-- id="48C4F159.4010401_at_rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Why compilig in global paths (only) for configuretion files?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 05:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6473.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all!
<br>
<p>We are using OpenMPI on an variety of machines (running Linux, 
<br>
Solaris/Sparc and /Opteron) using couple of compilers (GCC, Sun Studio, 
<br>
Intel, PGI, 32 and 64 bit...) so we have at least 15 versions of each 
<br>
release of OpenMPI (SUN Cluster Tools not included).
<br>
<p>This shows, that we have to support an complete petting zoo of 
<br>
OpenMPI's. Sometimes we may need to move things around.
<br>
<p><p>If OpenMPI is being configured, the install path may be provided using 
<br>
--prefix keyword, say so:
<br>
<p>./configure --prefix=/my/love/path/for/openmpi/tmp1
<br>
<p>After &quot;gmake all install&quot; in ...tmp1 an installation of OpenMPI may be 
<br>
found.
<br>
<p>Then, say, we need to *move* this Version to an another path, say 
<br>
/my/love/path/for/openmpi/blupp
<br>
<p>Of course we have to set $PATH and $LD_LIBRARY_PATH accordingly (we can 
<br>
that ;-)
<br>
<p>And if we tried to use OpenMPI from new location, we got error message like
<br>
<p>$ ./mpicc
<br>
Cannot open configuration file 
<br>
/my/love/path/for/openmpi/tmp1/share/openmpi/mpicc-wrapper-data.txt
<br>
Error parsing data file mpicc: Not found
<br>
<p>(note the old installation path used)
<br>
<p>That looks for me, that the install path provided with --prefix in 
<br>
configuration step, is compiled into opal_wrapper executable file and 
<br>
opal_wrapper works iff the set of configuration files is in this path. 
<br>
But after move of the OpenMP installation directory the configuration 
<br>
files aren't there...
<br>
<p>An side effect of this behaviour is the certainty that binary 
<br>
distributions of OpenMPI (RPM's) are not relocatable. That's 
<br>
uncomfortably. (Actually, this mail is initiated by the fact that Sun 
<br>
ClusterTools RPM's are not relocatable)
<br>
<p><p>So, does this behavior have an deeper sence I cannot recognise, or maybe 
<br>
&nbsp;&nbsp;the configuring of global paths is not needed?
<br>
<p>What I mean, is that the paths for the configuration files, which 
<br>
opal_wrapper need, may be setted locally like ../share/openmpi/*** 
<br>
without affectiong the integrity of OpenMPI. Maybe there were were more 
<br>
places where the usage of local paths may be needed to allowe movable 
<br>
(relocable) OpenMPI.
<br>
<p>What do you mean about?
<br>
<p>Best regards
<br>
Paul Kapinos
<br>
<p><p><p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6474/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6473.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
<li><strong>Reply:</strong> <a href="6475.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for configuretion files?"</a>
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
