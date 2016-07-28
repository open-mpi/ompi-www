<?
$subject_val = "Re: [OMPI devel] Open MPI v1.10.2rc1 available";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 12:52:56 2015" -->
<!-- isoreceived="20151221175256" -->
<!-- sent="Mon, 21 Dec 2015 10:52:55 -0700" -->
<!-- isosent="20151221175255" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.10.2rc1 available" -->
<!-- id="56783C77.5080001_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5E507A70-3536-456E-A460-3F8FDB110A17_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.10.2rc1 available<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 12:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18443.php">Ralph Castain: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18431.php">Ralph Castain: "[OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/19/2015 09:35 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hello folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don&#146;t want your holiday to be too boring, so we are also making available the
</span><br>
<span class="quotelev1">&gt; v1.10.2 release candidate for review. We won&#146;t release until sometime in
</span><br>
<span class="quotelev1">&gt; January, but hopefully some of you will have a chance to test it in the
</span><br>
<span class="quotelev1">&gt; meantime. You&#146;ll find it in the usual place:
</span><br>
<p>Seeing the following on Fedora Rawhide with gcc 5.3.1:
<br>
<p>checking size of Fortran type(test_mpi_handle)... configure: WARNING: Could
<br>
not determine size of type(test_mpi_handle)
<br>
configure: WARNING: See config.log for details
<br>
configure: error: Cannot continue
<br>
<p>config.log shows:
<br>
<p>configure:59062: checking size of Fortran type(test_mpi_handle)
<br>
configure:59132: gcc -DNDEBUG -O2 -g -pipe -Wall -Werror=format-security
<br>
-Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector-strong
<br>
--param=ssp-buffer-size=4 -grecord-gcc-switches
<br>
-specs=/usr/lib/rpm/redhat/redhat-hardened-cc1 -m64 -mtune=generic
<br>
-finline-functions -fno-strict-aliasing -I. -c conftest.c
<br>
configure:59139: $? = 0
<br>
configure:59149: gfortran   conftestf.f90 conftest.o -o conftest -Wl,-z,relro
<br>
-specs=/usr/lib/rpm/redhat/redhat-hardened-ld
<br>
/usr/bin/ld: /tmp/ccCHL5mV.o: relocation R_X86_64_32 against `.rodata' can not
<br>
be used when making a shared object; recompile with -fPIC
<br>
/tmp/ccCHL5mV.o: error adding symbols: Bad value
<br>
collect2: error: ld returned 1 exit status
<br>
configure:59156: $? = 1
<br>
configure:59177: here is the Fortran program:
<br>
program fsize
<br>
type, BIND(C) :: test_mpi_handle
<br>
&nbsp;&nbsp;integer :: MPI_VAL
<br>
end type test_mpi_handle
<br>
&nbsp;&nbsp;&nbsp;external size
<br>
&nbsp;&nbsp;&nbsp;type(test_mpi_handle) :: x(2)
<br>
&nbsp;&nbsp;&nbsp;call size(x(1),x(2))
<br>
end program
<br>
configure:59186: WARNING: Could not determine size of type(test_mpi_handle)
<br>
configure:59188: WARNING: See config.log for details
<br>
configure:59190: error: Cannot continue
<br>
<p>This is triggered by the use of hardening flags in Fedora builds - but the
<br>
problem seems to be that something is resetting FCFLAGS to empty during the
<br>
configure processes by the time this step is reached.  I believe this is in
<br>
OMPI_FORTRAN_CHECK_USE_ONLY from
<br>
./openmpi-1.10.2rc1/config/ompi_fortran_check_use_only.m4.  FCFLAGS gets set to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=$FCFLAGS_save
<br>
<p>but nothing appears to be setting FCFLAGS_save.
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Previous message:</strong> <a href="18443.php">Ralph Castain: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>In reply to:</strong> <a href="18431.php">Ralph Castain: "[OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18445.php">Paul Hargrove: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
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
