<?
$subject_val = "[OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 11:23:00 2011" -->
<!-- isoreceived="20110722152300" -->
<!-- sent="Fri, 22 Jul 2011 17:22:56 +0200" -->
<!-- isosent="20110722152256" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)" -->
<!-- id="4E2995D0.6040605_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 11:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16970.php">Paul Kapinos: "[OMPI users] One more pgi+libtool issue"</a>
<li><strong>Previous message:</strong> <a href="16968.php">tma_at_[hidden]: "[OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>just found out: the --instantiation_dir, --one_instantiation_per_object, 
<br>
and --template_info_file flags are deprecated in the newer versions of 
<br>
the PGI compilers, cf. <a href="http://www.pgroup.com/support/release_tprs_2010.htm">http://www.pgroup.com/support/release_tprs_2010.htm</a>
<br>
<p>But, compiling OpenMPI /1.4.3 with 11.7 PGI compilers, I see the warnings:
<br>
<p>pgCC-Warning-prelink_objects switch is deprecated
<br>
pgCC-Warning-instantiation_dir switch is deprecated
<br>
<p>coming from the below-noted call.
<br>
<p>I do not know about this is a Libtool or a libtool usage (=OpenMPI 
<br>
issue, but I do not want to keep secret this...
<br>
<p>Best wishes
<br>
Paul Kapinos
<br>
<p><p><p><p><p><p>libtool: link:  pgCC --prelink_objects --instantiation_dir Template.dir 
<br>
&nbsp;&nbsp;&nbsp;.libs/mpicxx.o .libs/intercepts.o .libs/comm.o .libs/datatype.o 
<br>
.libs/win.o .libs/file.o   -Wl,--rpath 
<br>
-Wl,/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/ompi/.libs 
<br>
-Wl,--rpath 
<br>
-Wl,/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/orte/.libs 
<br>
-Wl,--rpath 
<br>
-Wl,/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/opal/.libs 
<br>
-Wl,--rpath -Wl,/opt/MPI/openmpi-1.4.3/linux/pgi/lib/lib32 
<br>
-L/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/orte/.libs 
<br>
-L/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/opal/.libs 
<br>
-L/opt/lsf/8.0/linux2.6-glibc2.3-x86/lib ../../../ompi/.libs/libmpi.so 
<br>
/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/orte/.libs/libopen-rte.so 
<br>
/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux32_pgi/opal/.libs/libopen-pal.so 
<br>
-ldl -lnsl -lutil
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16969/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16970.php">Paul Kapinos: "[OMPI users] One more pgi+libtool issue"</a>
<li><strong>Previous message:</strong> <a href="16968.php">tma_at_[hidden]: "[OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk"</a>
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
