<?
$subject_val = "[OMPI devel] more problems with v pml";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 08:41:22 2008" -->
<!-- isoreceived="20080124134122" -->
<!-- sent="Thu, 24 Jan 2008 08:40:45 -0500" -->
<!-- isosent="20080124134045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] more problems with v pml" -->
<!-- id="C3470012-08FC-4F46-A0E5-9A33CE9A0FBB_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] more problems with v pml<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 08:40:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3030.php">Jeff Squyres: "[OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If these problems can't be fixed today, I think the v pml should  
<br>
be .ompi_ignore'd again.
<br>
<p>./configure --prefix=/home/jsquyres/bogus --enable-mpirun-prefix-by- 
<br>
default
<br>
<p>make[4]: Entering directory `/home/jsquyres/svn/ompi/ompi/mca/pml/v/ 
<br>
vprotocol/pessimist'
<br>
make[4]: Nothing to be done for `install-exec-am'.
<br>
test -z &quot;/home/jsquyres/bogus/lib/openmpi&quot; || /bin/mkdir -p &quot;/home/ 
<br>
jsquyres/bogus/lib/openmpi&quot;
<br>
&nbsp;&nbsp;/bin/sh ../../../../../../libtool --mode=install /usr/bin/install - 
<br>
c  'mca_vprotocol_pessimist.la' '/home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_vprotocol_pessimist.la'
<br>
libtool: install: /usr/bin/install -c .libs/ 
<br>
mca_vprotocol_pessimist.so /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_vprotocol_pessimist.so
<br>
libtool: install: /usr/bin/install -c .libs/ 
<br>
mca_vprotocol_pessimist.lai /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_vprotocol_pessimist.la
<br>
/bin/sh: /users/jsquyres/svn/ompi/ompi/mca/libtool: No such file or  
<br>
directory
<br>
make[4]: *** [install-mcacomponentLTLIBRARIES] Error 127
<br>
make[4]: Leaving directory `/home/jsquyres/svn/ompi/ompi/mca/pml/v/ 
<br>
vprotocol/pessimist'
<br>
make[3]: *** [install-am] Error 2
<br>
make[3]: Leaving directory `/home/jsquyres/svn/ompi/ompi/mca/pml/v/ 
<br>
vprotocol/pessimist'
<br>
make[2]: *** [install-recursive] Error 1
<br>
make[2]: Leaving directory `/home/jsquyres/svn/ompi/ompi/mca/pml/v/ 
<br>
vprotocol'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/jsquyres/svn/ompi/ompi/mca/pml/v'
<br>
make: *** [install-recursive] Error 1
<br>
[5:39] svbu-mpi:~/svn/ompi/ompi %
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3032.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3030.php">Jeff Squyres: "[OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
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
