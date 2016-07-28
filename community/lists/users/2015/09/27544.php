<?
$subject_val = "[OMPI users] openmpi-dev-2453-g1989999: missing file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 04:05:43 2015" -->
<!-- isoreceived="20150908080543" -->
<!-- sent="Tue, 8 Sep 2015 10:05:10 +0200" -->
<!-- isosent="20150908080510" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-dev-2453-g1989999: missing file" -->
<!-- id="55EE96B6.4050608_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-dev-2453-g1989999: missing file<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 04:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27545.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27543.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I tried to build openmpi-dev-2453-g1989999 on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
<br>
Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I got the
<br>
following error on all machines with the GNU compiler and
<br>
on my Linux box also with the Sun compiler.
<br>
<p>...
<br>
make[4]: Entering directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_object.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_list.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_pointer_array.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_hash_table.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/include/pmix_globals.lo
<br>
In file included from 
<br>
../../../../../../openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
<br>
/export2/src/openmpi-master/openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: 
<br>
fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or 
<br>
directory
<br>
compilation terminated.
<br>
make[4]: *** [src/include/pmix_globals.lo] Error 1
<br>
make[4]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
...
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27544/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27545.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27543.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27548.php">Ralph Castain: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
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
