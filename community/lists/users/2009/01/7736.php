<?
$subject_val = "[OMPI users] error opal/libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 08:08:25 2009" -->
<!-- isoreceived="20090120130825" -->
<!-- sent="Tue, 20 Jan 2009 18:38:20 +0530" -->
<!-- isosent="20090120130820" -->
<!-- name="nilesh barange" -->
<!-- email="nilesh.barange_at_[hidden]" -->
<!-- subject="[OMPI users] error opal/libltdl" -->
<!-- id="5b2ac7ea0901200508o3f83fda1t1ef2c51de2e35e0d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] error opal/libltdl<br>
<strong>From:</strong> nilesh barange (<em>nilesh.barange_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 08:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7735.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<li><strong>Reply:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi...
<br>
<p>I am trying to install openmpi-1.2.8 on REHL-4.
<br>
I am getting following error.
<br>
<p><p>[clususer_at_vlsiserver openmpi-1.2.8]$ make all install
<br>
Making all in config
<br>
make[1]: Entering directory `/home/clususer/openmpi-1.2.8/config'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/home/clususer/openmpi-1.2.8/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory `/home/clususer/openmpi-1.2.8/contrib'
<br>
make[1]: Nothing to be done for `all'.
<br>
make[1]: Leaving directory `/home/clususer/openmpi-1.2.8/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory `/home/clususer/openmpi-1.2.8/opal'
<br>
Making all in include
<br>
make[2]: Entering directory `/home/clususer/openmpi-1.2.8/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/clususer/openmpi-1.2.8/opal/include'
<br>
make[3]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/include'
<br>
make[2]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/include'
<br>
Making all in libltdl
<br>
make[2]: Entering directory `/home/clususer/openmpi-1.2.8/opal/libltdl'
<br>
make  all-am
<br>
make[3]: Entering directory `/home/clususer/openmpi-1.2.8/opal/libltdl'
<br>
/bin/sh ./libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG  -module
<br>
-avoid-version  -o dlopen.la  dlopen.lo -ldl -ldl -lnsl  -lutil -lm
<br>
libtool: link: false cru .libs/dlopen.a .libs/dlopen.o
<br>
make[3]: *** [dlopen.la] Error 1
<br>
make[3]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/libltdl'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/libltdl'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/clususer/openmpi-1.2.8/opal'
<br>
make: *** [all-recursive] Error 1
<br>
[clususer_at_vlsiserver openmpi-1.2.8]$
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7735.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
<li><strong>Reply:</strong> <a href="7744.php">Jeff Squyres: "Re: [OMPI users] error opal/libltdl"</a>
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
