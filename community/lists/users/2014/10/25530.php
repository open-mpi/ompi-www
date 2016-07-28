<?
$subject_val = "Re: [OMPI users] Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 13:13:46 2014" -->
<!-- isoreceived="20141017171346" -->
<!-- sent="Fri, 17 Oct 2014 10:13:40 -0700" -->
<!-- isosent="20141017171340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="5AE326FA-E973-46BD-A4BA-D8C57A39408C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FF324B6D-6693-4122-A96D-3D6B69482904_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8: link problem when Fortran+C+Platform LSF<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 13:13:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25531.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25529.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [FEniCS] Question about MPI barriers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh - the original message didn&#146;t get in there, I think. See below:
<br>
<p>Paul - it looks to me like we are adding the required libraries, but perhaps not to the wrapper compilers. Jeff is on travel today, but I&#146;ll check with him next week.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured to be used with Platform LSF.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of our users run into an issue when trying to link his code (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er the code can be linked OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ make
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 -c main.f90
</span><br>
<span class="quotelev2">&gt; &gt; yacc -d example4.y
</span><br>
<span class="quotelev2">&gt; &gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev2">&gt; &gt; mpicc -c mymain.c
</span><br>
<span class="quotelev2">&gt; &gt; lex example4.l
</span><br>
<span class="quotelev2">&gt; &gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev2">&gt; &gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval'
</span><br>
<span class="quotelev2">&gt; &gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval'
</span><br>
<span class="quotelev2">&gt; &gt; .......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and possibly the philosophy behind it has been changed, there is also a note on it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a> &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>&gt;, we
</span><br>
<span class="quotelev1">&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev1">&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev1">&gt; # the MPI API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, by now we know two workarounds:
</span><br>
<span class="quotelev1">&gt; a) add &quot;-lbat -llsf&quot; to the link line
</span><br>
<span class="quotelev1">&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What would be better? Maybe one of this should be added to linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As of the note above, (b) would be better?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. $ mpif90 --show-me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.6.5
</span><br>
<span class="quotelev1">&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.8.3
</span><br>
<span class="quotelev1">&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S.2 $ man ld
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;        --as-needed
</span><br>
<span class="quotelev1">&gt;        --no-as-needed
</span><br>
<span class="quotelev1">&gt;            This option affects ELF DT_NEEDED tags for dynamic libraries
</span><br>
<span class="quotelev1">&gt;            mentioned on the command line after the --as-needed option.
</span><br>
<span class="quotelev1">&gt;            Normally the linker will add a DT_NEEDED tag for each dynamic
</span><br>
<span class="quotelev1">&gt;            library mentioned on the command line, regardless of whether the
</span><br>
<span class="quotelev1">&gt;            library is actually needed or not.  --as-needed causes a DT_NEEDED
</span><br>
<span class="quotelev1">&gt;            tag to only be emitted for a library that satisfies an undefined
</span><br>
<span class="quotelev1">&gt;            symbol reference from a regular object file or, if the library is
</span><br>
<span class="quotelev1">&gt;            not found in the DT_NEEDED lists of other libraries linked up to
</span><br>
<span class="quotelev1">&gt;            that point, an undefined symbol reference from another dynamic
</span><br>
<span class="quotelev1">&gt;            library.  --no-as-needed restores the default behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><span class="quotelev1">&gt; On Oct 17, 2014, at 7:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should probably update your email address to the list so you can respond to the comments. I&#146;ll forward this for you in the meantime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: we did do some fixes to the LSF linkage (provided by IBM) for the 1.8 series. I&#146;ll check and see if they made it to 1.8.3 (in which case, it sounds like we may need to revisit the patch) or are sitting in the branch waiting for release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2014, at 6:38 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff, Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; sorry for this - but it seem I'm not allowed to post anything, maybe because my mail has been changed from &lt;kapinos_at_[hidden]&gt; to &lt;kapinos_at_[hidden]&gt;. Could you please forward my question to the developer? Thank!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------- Original Message --------
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 17 Oct 2014 09:35:36 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: &lt;users-owner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You are not allowed to post to this mailing list, and your message has
</span><br>
<span class="quotelev2">&gt;&gt; been automatically rejected.  If you think that your messages are
</span><br>
<span class="quotelev2">&gt;&gt; being rejected in error, contact the mailing list owner at
</span><br>
<span class="quotelev2">&gt;&gt; users-owner_at_open-mpi.org.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ForwardedMessage.eml&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25531.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25529.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [FEniCS] Question about MPI barriers"</a>
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
