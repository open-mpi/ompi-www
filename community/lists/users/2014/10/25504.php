<?
$subject_val = "[OMPI users] Open MPI on Cray xc30 and getpwuid";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 03:36:23 2014" -->
<!-- isoreceived="20141016073623" -->
<!-- sent="Thu, 16 Oct 2014 03:36:18 -0400" -->
<!-- isosent="20141016073618" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI on Cray xc30 and getpwuid" -->
<!-- id="FD2571D2-D2B5-427F-82DF-2FF81A615E58_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI on Cray xc30 and getpwuid<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 03:36:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>Previous message:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>Reply:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building trunk on the Cray xc30. 
<br>
I get the following warning during link (static link) 
<br>
../../../orte/.libs/libopen-rte.a(session_dir.o): In function `orte_session_dir_get_name':
<br>
session_dir.c:(.text+0x226): warning: Using 'getpwuid' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
/nics/c/home/bouteill/DARTER/ompi-fast/opal/.libs/libopen-pal.a(if.o): In function `opal_ifaddrtoname':
<br>
if.c:(.text+0x222): warning: Using 'getaddrinfo' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
/nics/c/home/bouteill/DARTER/ompi-fast/opal/.libs/libopen-pal.a(evutil.o): In function `opal_libevent2021_evutil_getaddrinfo_common':
<br>
evutil.c:(.text+0x19fb): warning: Using 'getprotobynumber' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
<p>Of course, the resulting code does crash in getpwuid. 
<br>
<p>I know Nathan has successfully compiled for cray machines. What&#146;s the trick ?
<br>
<p>Aurelien 
<br>
<p><p><p><pre>
--
          ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
             ~ Research Scientist @ ICL ~
The University of Tennessee, Innovative Computing Laboratory
1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25504/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>Previous message:</strong> <a href="25503.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
<li><strong>Reply:</strong> <a href="25505.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray xc30 and getpwuid"</a>
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
