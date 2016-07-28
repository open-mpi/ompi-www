<?
$subject_val = "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 20:24:51 2014" -->
<!-- isoreceived="20141018002451" -->
<!-- sent="Fri, 17 Oct 2014 17:24:48 -0700" -->
<!-- isosent="20141018002448" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="CAAvDA162kw3OgOjp+Rp35WGtRwwqsaGb=z9jySccHUq391fS+Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 20:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know of two possibilities:
<br>
<p>1) I cannot be certain but since the message concerns a PC-relative
<br>
addressing mode, it is possible that something needs to be compiled with
<br>
-fPIC to fix the issue.  See if adding that option to any of the mpicc
<br>
commands helps.
<br>
<p>2) Try adding ONE of &quot;-ll&quot;, &quot;-lfl&quot; or &quot;-lfl_pic&quot; to include the lex/flex
<br>
support lib.   This is PROBABLY the wrong solution because that lib defines
<br>
its own &quot;main()&quot;.
<br>
<p>-Paul
<br>
<p><p><p>On Fri, Oct 17, 2014 at 4:56 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I think the LSF part of this may be a red herring.  Do you really need to
</span><br>
<span class="quotelev1">&gt; add &quot;-lbat -llsf&quot; to the command line to make it work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message *sounds* like y.tab.o was compiled differently than
</span><br>
<span class="quotelev1">&gt; others...?  It's hard to know without seeing the output of mpicc --showme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2014, at 7:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Forwarding this for Paul until his email address gets updated on the
</span><br>
<span class="quotelev1">&gt; User list:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: October 17, 2014 at 6:35:31 AM PDT
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cc: &quot;Kapinos, Paul&quot; &lt;kapinos_at_[hidden]&gt;, &lt;
</span><br>
<span class="quotelev1">&gt; frings_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured to
</span><br>
<span class="quotelev1">&gt; be used with Platform LSF.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One of our users run into an issue when trying to link his code
</span><br>
<span class="quotelev1">&gt; (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er
</span><br>
<span class="quotelev1">&gt; the code can be linked OK.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; $ make
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpif90 -c main.f90
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; yacc -d example4.y
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc -c mymain.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; lex example4.l
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against
</span><br>
<span class="quotelev1">&gt; symbol `yylval'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation
</span><br>
<span class="quotelev1">&gt; against symbol `yyval'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; .......
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and
</span><br>
<span class="quotelev1">&gt; possibly the philosophy behind it has been changed, there is also a note on
</span><br>
<span class="quotelev1">&gt; it:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # the MPI API.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Well, by now we know two workarounds:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a) add &quot;-lbat -llsf&quot; to the link line
</span><br>
<span class="quotelev3">&gt; &gt;&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What would be better? Maybe one of this should be added to
</span><br>
<span class="quotelev1">&gt; linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As
</span><br>
<span class="quotelev1">&gt; of the note above, (b) would be better?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P.S. $ mpif90 --show-me
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.6.5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include
</span><br>
<span class="quotelev1">&gt; -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib
</span><br>
<span class="quotelev1">&gt; -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib
</span><br>
<span class="quotelev1">&gt; -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev1">&gt; -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf
</span><br>
<span class="quotelev1">&gt; -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.8.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include
</span><br>
<span class="quotelev1">&gt; -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib
</span><br>
<span class="quotelev1">&gt; -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08
</span><br>
<span class="quotelev1">&gt; -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P.S.2 $ man ld
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       --as-needed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       --no-as-needed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           This option affects ELF DT_NEEDED tags for dynamic libraries
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           mentioned on the command line after the --as-needed option.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Normally the linker will add a DT_NEEDED tag for each dynamic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           library mentioned on the command line, regardless of whether
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           library is actually needed or not.  --as-needed causes a
</span><br>
<span class="quotelev1">&gt; DT_NEEDED
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           tag to only be emitted for a library that satisfies an
</span><br>
<span class="quotelev1">&gt; undefined
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           symbol reference from a regular object file or, if the
</span><br>
<span class="quotelev1">&gt; library is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           not found in the DT_NEEDED lists of other libraries linked up
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           that point, an undefined symbol reference from another dynamic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           library.  --no-as-needed restores the default behaviour.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;lexyacc.zip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16071.php">http://www.open-mpi.org/community/lists/devel/2014/10/16071.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16072/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<li><strong>In reply to:</strong> <a href="16071.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when	Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
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
