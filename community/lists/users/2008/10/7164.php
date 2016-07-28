<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 15:03:02 2008" -->
<!-- isoreceived="20081031190302" -->
<!-- sent="Fri, 31 Oct 2008 15:02:57 -0400" -->
<!-- isosent="20081031190257" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="f79359b60810311202pcae1d4eva5045f2dca449c37_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56BF90EA-F7AF-4112-B63C-C9EC53EA7891_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 15:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I keep trying to install OpenMPI in Cygwin, I found another
<br>
instance where RTFD_NEXT is assumed to be present. Will keep trying...
<br>
<p>Gustavo.
<br>
<p>=============================
<br>
Making all in vtlib
<br>
make[5]: Entering directory
<br>
`/home/seabra/local/openmpi-1.3b1/ompi/contrib/vt/vt/vtlib'
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_REENTRANT
<br>
-DBINDIR=\&quot;/home/seabra/local/openmpi-1.3b1/bin\&quot;
<br>
-DDATADIR=\&quot;/home/seabra/local/openmpi-1.3b1/share/vampirtrace\&quot; -DRFG
<br>
-DVT_BFD  -DVT_IOWRAP  -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing  -MT vt_comp_gnu.o -MD -MP -MF
<br>
.deps/vt_comp_gnu.Tpo -c -o vt_comp_gnu.o vt_comp_gnu.c
<br>
mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_REENTRANT
<br>
-DBINDIR=\&quot;/home/seabra/local/openmpi-1.3b1/bin\&quot;
<br>
-DDATADIR=\&quot;/home/seabra/local/openmpi-1.3b1/share/vampirtrace\&quot; -DRFG
<br>
-DVT_BFD  -DVT_IOWRAP  -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing  -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo
<br>
-c -o vt_iowrap.o vt_iowrap.c
<br>
vt_iowrap.c: In function `vt_iowrap_init':
<br>
vt_iowrap.c:105: error: `RTLD_NEXT' undeclared (first use in this function)
<br>
vt_iowrap.c:105: error: (Each undeclared identifier is reported only once
<br>
vt_iowrap.c:105: error: for each function it appears in.)
<br>
vt_iowrap.c: In function `open':
<br>
vt_iowrap.c:188: error: `RTLD_NEXT' undeclared (first use in this function)
<br>
[...and a bunch of messages just like those last 2 lines...]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7165.php">Rajesh Ramaya: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7146.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
