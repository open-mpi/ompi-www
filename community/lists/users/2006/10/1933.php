<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  5 12:05:22 2006" -->
<!-- isoreceived="20061005160522" -->
<!-- sent="Thu, 5 Oct 2006 09:05:18 -0700" -->
<!-- isosent="20061005160518" -->
<!-- name="Andrus, Mr. Brian \(Contractor\)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD16E395_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Andrus, Mr. Brian \(Contractor\) (<em>brian.andrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-05 12:05:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1934.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<li><strong>Reply:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I am having some trouble getting the RPM to compile when I add
<br>
PBSPro.
<br>
I have been able to successfully create it with Myrinet and using PGI
<br>
compilers.
<br>
<p>Now getting it to package up with PBSPro is another story. It looks like
<br>
it compiles fine, but the packaging may be the issue. I thought I should
<br>
post here to see if anyone has already been down this path.
<br>
<p>When I use:
<br>
rpmbuild --rebuild --define configure_options&quot; --with-gm=/opt/gm
<br>
--disable-shared --with-tm=/usr/pbs CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90
<br>
FFLAGS=-fastsse FCFLAGS=-fastsse &quot; ./openmpi-1.1.1-1.src.rpm
<br>
<p>I eventually get:
<br>
.
<br>
.
<br>
make[2]: Entering directory `/usr/src/redhat/BUILD/openmpi-1.1.1'
<br>
make[2]: Nothing to be done for `install-exec-am'.
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.1.1'
<br>
make[1]: Leaving directory `/usr/src/redhat/BUILD/openmpi-1.1.1'
<br>
+ rm -f /var/tmp/openmpi-1.1.1-1-root//usr/bin/openmpi
<br>
+ rm -f /var/tmp/openmpi-1.1.1-1-root//usr/bin/orteconsole
<br>
+ rm -f /var/tmp/openmpi-1.1.1-1-root//usr/bin/orteprobe
<br>
+ find /var/tmp/openmpi-1.1.1-1-root -type f -o -type l
<br>
+ sed -e s@/var/tmp/openmpi-1.1.1-1-root@@
<br>
+ egrep 'lib.*.so|mca.*so'
<br>
error: Bad exit status from /var/tmp/rpm-tmp.30796 (%install)
<br>
<p><p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bad exit status from /var/tmp/rpm-tmp.30796 (%install)
<br>
<p><p>Brian Andrus
<br>
QSS Group, Inc.
<br>
Naval Research Laboratory
<br>
Monterey, California
<br>
Desk: 831-656-4839
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1934.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1932.php">George Bosilca: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<li><strong>Reply:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
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
