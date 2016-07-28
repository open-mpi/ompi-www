<?
$subject_val = "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 01:55:04 2014" -->
<!-- isoreceived="20141020055504" -->
<!-- sent="Sun, 19 Oct 2014 22:55:01 -0700" -->
<!-- isosent="20141020055501" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="CAAvDA16qkSRHfZ3mS0JK6pQRamus7s2RmGR5Osq_wcCsQixRAQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cf26f5ec-7c9f-449f-9cf1-e33a6ebd1c91_at_HUB1.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-20 01:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16075.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Markus,
<br>
<p>I based my suggestion on the presence of certain keywords in the error
<br>
message, not on any mental model of the compiler or linker action on your
<br>
input.  I don't think there is any valid reason one should *expect* a need
<br>
to compile or link with &quot;mpif90 -fPIC&quot;.  So, I am afraid I cannot answer as
<br>
to why this fixes the problem.
<br>
<p>-Paul
<br>
<p>On Sun, Oct 19, 2014 at 10:44 PM, Frings, Markus &lt;frings_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;  Compiling the sources with -fPIC fixes the issue. But I wonder why I have
</span><br>
<span class="quotelev1">&gt; to add -fPIC when I want to compile with mpif90, but not when I use ifort
</span><br>
<span class="quotelev1">&gt; directly. With mpif90 I also use ifort with some additional flags and
</span><br>
<span class="quotelev1">&gt; libraries as mpif90 --show-me shows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --------------------------------
</span><br>
<span class="quotelev1">&gt; Markus Frings, M.Sc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Chair for Computational Analysis of Technical Systems (CATS)
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University
</span><br>
<span class="quotelev1">&gt; Schinkelstrasse 2, Room 222a
</span><br>
<span class="quotelev1">&gt; D-52062 Aachen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Phone +49 (0)241 80 99932
</span><br>
<span class="quotelev1">&gt; frings_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cats.rwth-aachen.de">http://www.cats.rwth-aachen.de</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On 18.10.2014, at 02:24, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I know of two possibilities:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1) I cannot be certain but since the message concerns a PC-relative
</span><br>
<span class="quotelev1">&gt; addressing mode, it is possible that something needs to be compiled with
</span><br>
<span class="quotelev1">&gt; -fPIC to fix the issue.  See if adding that option to any of the mpicc
</span><br>
<span class="quotelev1">&gt; commands helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Try adding ONE of &quot;-ll&quot;, &quot;-lfl&quot; or &quot;-lfl_pic&quot; to include the lex/flex
</span><br>
<span class="quotelev1">&gt; support lib.   This is PROBABLY the wrong solution because that lib defines
</span><br>
<span class="quotelev1">&gt; its own &quot;main()&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Oct 17, 2014 at 4:56 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the LSF part of this may be a red herring.  Do you really need to
</span><br>
<span class="quotelev2">&gt;&gt; add &quot;-lbat -llsf&quot; to the command line to make it work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error message *sounds* like y.tab.o was compiled differently than
</span><br>
<span class="quotelev2">&gt;&gt; others...?  It's hard to know without seeing the output of mpicc --showme.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2014, at 7:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Forwarding this for Paul until his email address gets updated on the
</span><br>
<span class="quotelev2">&gt;&gt; User list:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Date: October 17, 2014 at 6:35:31 AM PDT
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Cc: &quot;Kapinos, Paul&quot; &lt;kapinos_at_[hidden]&gt;, &lt;
</span><br>
<span class="quotelev2">&gt;&gt; frings_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured
</span><br>
<span class="quotelev2">&gt;&gt; to be used with Platform LSF.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; One of our users run into an issue when trying to link his code
</span><br>
<span class="quotelev2">&gt;&gt; (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er
</span><br>
<span class="quotelev2">&gt;&gt; the code can be linked OK.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; $ make
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpif90 -c main.f90
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; yacc -d example4.y
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpicc -c mymain.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; lex example4.l
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation
</span><br>
<span class="quotelev2">&gt;&gt; against symbol `yylval'
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation
</span><br>
<span class="quotelev2">&gt;&gt; against symbol `yyval'
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; .......
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and
</span><br>
<span class="quotelev2">&gt;&gt; possibly the philosophy behind it has been changed, there is also a note on
</span><br>
<span class="quotelev2">&gt;&gt; it:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; # the MPI API.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Well, by now we know two workarounds:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; a) add &quot;-lbat -llsf&quot; to the link line
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; What would be better? Maybe one of this should be added to
</span><br>
<span class="quotelev2">&gt;&gt; linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As
</span><br>
<span class="quotelev2">&gt;&gt; of the note above, (b) would be better?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Best
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; P.S. $ mpif90 --show-me
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 1.6.5
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include
</span><br>
<span class="quotelev2">&gt;&gt; -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf
</span><br>
<span class="quotelev2">&gt;&gt; -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 1.8.3
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include
</span><br>
<span class="quotelev2">&gt;&gt; -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags
</span><br>
<span class="quotelev2">&gt;&gt; -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; P.S.2 $ man ld
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       --as-needed
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;       --no-as-needed
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           This option affects ELF DT_NEEDED tags for dynamic libraries
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           mentioned on the command line after the --as-needed option.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           Normally the linker will add a DT_NEEDED tag for each dynamic
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           library mentioned on the command line, regardless of whether
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           library is actually needed or not.  --as-needed causes a
</span><br>
<span class="quotelev2">&gt;&gt; DT_NEEDED
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           tag to only be emitted for a library that satisfies an
</span><br>
<span class="quotelev2">&gt;&gt; undefined
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           symbol reference from a regular object file or, if the
</span><br>
<span class="quotelev2">&gt;&gt; library is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           not found in the DT_NEEDED lists of other libraries linked
</span><br>
<span class="quotelev2">&gt;&gt; up to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           that point, an undefined symbol reference from another
</span><br>
<span class="quotelev2">&gt;&gt; dynamic
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;           library.  --no-as-needed restores the default behaviour.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;lexyacc.zip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16071.php">http://www.open-mpi.org/community/lists/devel/2014/10/16071.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16075.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
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
