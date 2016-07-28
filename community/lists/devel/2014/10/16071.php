<?
$subject_val = "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 19:56:44 2014" -->
<!-- isoreceived="20141017235644" -->
<!-- sent="Fri, 17 Oct 2014 23:56:42 +0000" -->
<!-- isosent="20141017235642" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF" -->
<!-- id="36FC6015-5E77-4432-9440-D039B73D03E7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A6C71EB9-074A-4AC9-BC64-5111F5D44340_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 19:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing f08 binding for Win_allocate"</a>
<li><strong>In reply to:</strong> <a href="16064.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the LSF part of this may be a red herring.  Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
<br>
<p>The error message *sounds* like y.tab.o was compiled differently than others...?  It's hard to know without seeing the output of mpicc --showme.
<br>
<p><p>On Oct 17, 2014, at 7:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Forwarding this for Paul until his email address gets updated on the User list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: October 17, 2014 at 6:35:31 AM PDT
</span><br>
<span class="quotelev2">&gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: &quot;Kapinos, Paul&quot; &lt;kapinos_at_[hidden]&gt;, &lt;frings_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured to be used with Platform LSF.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One of our users run into an issue when trying to link his code (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er the code can be linked OK.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -c main.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yacc -d example4.y
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -c mymain.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lex example4.l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .......
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and possibly the philosophy behind it has been changed, there is also a note on it:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
</span><br>
<span class="quotelev2">&gt;&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev2">&gt;&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev2">&gt;&gt; # the MPI API.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, by now we know two workarounds:
</span><br>
<span class="quotelev2">&gt;&gt; a) add &quot;-lbat -llsf&quot; to the link line
</span><br>
<span class="quotelev2">&gt;&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What would be better? Maybe one of this should be added to linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As of the note above, (b) would be better?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. $ mpif90 --show-me
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5
</span><br>
<span class="quotelev2">&gt;&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.3
</span><br>
<span class="quotelev2">&gt;&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S.2 $ man ld
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt;       --as-needed
</span><br>
<span class="quotelev2">&gt;&gt;       --no-as-needed
</span><br>
<span class="quotelev2">&gt;&gt;           This option affects ELF DT_NEEDED tags for dynamic libraries
</span><br>
<span class="quotelev2">&gt;&gt;           mentioned on the command line after the --as-needed option.
</span><br>
<span class="quotelev2">&gt;&gt;           Normally the linker will add a DT_NEEDED tag for each dynamic
</span><br>
<span class="quotelev2">&gt;&gt;           library mentioned on the command line, regardless of whether the
</span><br>
<span class="quotelev2">&gt;&gt;           library is actually needed or not.  --as-needed causes a DT_NEEDED
</span><br>
<span class="quotelev2">&gt;&gt;           tag to only be emitted for a library that satisfies an undefined
</span><br>
<span class="quotelev2">&gt;&gt;           symbol reference from a regular object file or, if the library is
</span><br>
<span class="quotelev2">&gt;&gt;           not found in the DT_NEEDED lists of other libraries linked up to
</span><br>
<span class="quotelev2">&gt;&gt;           that point, an undefined symbol reference from another dynamic
</span><br>
<span class="quotelev2">&gt;&gt;           library.  --no-as-needed restores the default behaviour.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;lexyacc.zip&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing f08 binding for Win_allocate"</a>
<li><strong>In reply to:</strong> <a href="16064.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="16072.php">Paul Hargrove: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
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
