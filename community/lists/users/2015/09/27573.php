<?
$subject_val = "[OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 19:14:34 2015" -->
<!-- isoreceived="20150914231434" -->
<!-- sent="Tue, 15 Sep 2015 00:14:31 +0100" -->
<!-- isosent="20150914231431" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3" -->
<!-- id="51B1917D-37E2-4130-8FFD-FB0E7973A039_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 19:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<li><strong>Previous message:</strong> <a href="27572.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<li><strong>Reply:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody,
<br>
<p>I desperately trying to compile on a SLES 11 SP3 OpenMPI 1.10.0 with MXM and FCA support.
<br>
<p>export MXM_DIR=/opt/mellanox/mxm
<br>
export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
<br>
export FCA_DIR=/opt/mellanox/fca
<br>
export HCOLL_DIR=/opt/mellanox/hcoll
<br>
<p>rm -rf build
<br>
mkdir build 
<br>
cd build
<br>
<p>../configure --prefix=$FINAL_DIR --with-lsf --enable-mca-no-build=btl-usnic --with-verbs --with-hwloc=internal --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR --enable-static
<br>
<p><p>I had to enable static otherwise MXM fails. Anyway, almost at the end it continues to fails because of -lz problem
<br>
<p>Creating mpi/man/man3/OpenMPI.3 man page...
<br>
&nbsp;&nbsp;CCLD     libmpi.la
<br>
/usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld: cannot find -lz
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [libmpi.la] Error 1
<br>
make[2]: Leaving directory `/tmp/openmpi-1.10.0/build/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.10.0/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Any suggestion to overcome this issue?
<br>
<p>The kernel is not very old but the GCC is...
<br>
<p>$gcc --version
<br>
gcc (SUSE Linux) 4.3.4 [gcc-4_3-branch revision 152973]
<br>
Copyright (C) 2008 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ uname -a
<br>
Linux testing 3.0.93-0.8-default #1 SMP Tue Aug 27 08:44:18 UTC 2013 (70ed288) x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p>I see libz.so under /lib64 ...
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<li><strong>Previous message:</strong> <a href="27572.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<li><strong>Reply:</strong> <a href="27574.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
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
