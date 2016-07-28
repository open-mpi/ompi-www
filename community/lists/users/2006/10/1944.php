<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  6 14:27:28 2006" -->
<!-- isoreceived="20061006182728" -->
<!-- sent="Fri, 6 Oct 2006 11:27:25 -0700" -->
<!-- isosent="20061006182725" -->
<!-- name="Andrus, Mr. Brian \(Contractor\)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="[OMPI users] PBSPro/PGI/Myrinet Woes continued..." -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD16E39B_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>Date:</strong> 2006-10-06 14:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1945.php">Galen Shipman: "Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>Previous message:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1945.php">Galen Shipman: "Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>Reply:</strong> <a href="1945.php">Galen Shipman: "Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I am getting an error when I run make after configuring with the
<br>
following options:
<br>
./configure --with-gm=/opt/gm --with-tm=/usr/pbs --disable-shared
<br>
--enable-static CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 FFLAGS=-fastsse
<br>
FCFLAGS=-fastsse
<br>
<p>It aborts after a bit with:
<br>
/opt/gm/lib/libgm.so: could not read symbols: File in wrong format
<br>
<p>The config.out and make.out are attached fwiw.
<br>
<p>Has anyone seen this before?
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
<p>

<br><hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1944/make.out.tgz">make.out.tgz</a>
</ul>
<!-- attachment="make.out.tgz" -->
<hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1944/config.out.tgz">config.out.tgz</a>
</ul>
<!-- attachment="config.out.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1945.php">Galen Shipman: "Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>Previous message:</strong> <a href="1943.php">Jeff Squyres: "Re: [OMPI users] Compiling RPM for RHEL4 with PGI/GM/PBSPro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1945.php">Galen Shipman: "Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
<li><strong>Reply:</strong> <a href="1945.php">Galen Shipman: "Re: [OMPI users] PBSPro/PGI/Myrinet Woes continued..."</a>
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
