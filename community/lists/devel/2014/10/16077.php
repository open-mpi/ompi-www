<?
$subject_val = "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 04:13:08 2014" -->
<!-- isoreceived="20141021081308" -->
<!-- sent="Tue, 21 Oct 2014 10:13:02 +0200" -->
<!-- isosent="20141021081302" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="7a65a0d3-42f3-4c4a-b0b3-7e135a081b5f_at_HUB1.rwth-ad.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36FC6015-5E77-4432-9440-D039B73D03E7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 04:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16078.php">Joshua Ladd: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Previous message:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
the output of &quot;mpicc --showme&quot; is attached below.
<br>
<p><span class="quotelev1"> &gt; Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
</span><br>
As both 1.6.5 and 1.8.3 versions are build for work with Platform LSF, yes, we 
<br>
need libbat and liblsf. The 1.6.5 version links this library explicitly in the 
<br>
link line. The 1.8.3 does not.
<br>
<p><p><p>### 1.6.5:
<br>
icc 
<br>
-I/opt/MPI/openmpi-1.6.5/linux/intel/include/openmpi/opal/mca/hwloc/hwloc132/hwloc/include 
<br>
-I/opt/MPI/openmpi-1.6.5/linux/intel/include 
<br>
-I/opt/MPI/openmpi-1.6.5/linux/intel/include/openmpi -fexceptions -pthread 
<br>
-L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib 
<br>
-L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi -losmcomp -lrdmacm -libverbs -lrt 
<br>
-lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
<br>
<p>### 1.8.3:
<br>
icc 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/hwloc/hwloc172/hwloc/include 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/event/libevent2021/libevent 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/event/libevent2021/libevent/include 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi -fexceptions -pthread 
<br>
-L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath 
<br>
-Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath 
<br>
-Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags 
<br>
-L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi
<br>
<p><p>On 10/18/14 01:56, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I think the LSF part of this may be a red herring.  Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message *sounds* like y.tab.o was compiled differently than others...?  It's hard to know without seeing the output of mpicc --showme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2014, at 7:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Forwarding this for Paul until his email address gets updated on the User list:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: October 17, 2014 at 6:35:31 AM PDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: &quot;Kapinos, Paul&quot; &lt;kapinos_at_[hidden]&gt;, &lt;frings_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured to be used with Platform LSF.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One of our users run into an issue when trying to link his code (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er the code can be linked OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpif90 -c main.f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yacc -d example4.y
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -c mymain.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lex example4.l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .......
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and possibly the philosophy behind it has been changed, there is also a note on it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # the MPI API.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, by now we know two workarounds:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) add &quot;-lbat -llsf&quot; to the link line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What would be better? Maybe one of this should be added to linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As of the note above, (b) would be better?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. $ mpif90 --show-me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S.2 $ man ld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --as-needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --no-as-needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            This option affects ELF DT_NEEDED tags for dynamic libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            mentioned on the command line after the --as-needed option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Normally the linker will add a DT_NEEDED tag for each dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            library mentioned on the command line, regardless of whether the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            library is actually needed or not.  --as-needed causes a DT_NEEDED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            tag to only be emitted for a library that satisfies an undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            symbol reference from a regular object file or, if the library is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            not found in the DT_NEEDED lists of other libraries linked up to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            that point, an undefined symbol reference from another dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            library.  --no-as-needed restores the default behaviour.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lexyacc.zip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16077/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16078.php">Joshua Ladd: "Re: [OMPI devel] OMPI BCOL hang with PMI1"</a>
<li><strong>Previous message:</strong> <a href="16076.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
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
