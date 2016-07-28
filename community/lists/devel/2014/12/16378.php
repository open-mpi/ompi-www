<?
$subject_val = "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 14:48:40 2014" -->
<!-- isoreceived="20141201194840" -->
<!-- sent="Mon, 1 Dec 2014 19:48:39 +0000" -->
<!-- isosent="20141201194839" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="B7CFA3B4-7544-4F1C-AB6E-16E934E48D57_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7a65a0d3-42f3-4c4a-b0b3-7e135a081b5f_at_HUB1.rwth-ad.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 14:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16379.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Sorry for the delay -- SC and the US Thanksgiving holiday last week got in the way of responding to this properly.
<br>
<p>I talked with Dave Goodell about this issue a bunch today.  
<br>
<p>Going back to the original email in this thread (<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16064.php">http://www.open-mpi.org/community/lists/devel/2014/10/16064.php</a>), it seems like this is the original problem:
<br>
<p><pre>
----
$ make 
mpif90 -c main.f90 
yacc -d example4.y 
mpicc -c y.tab.c 
mpicc -c mymain.c 
lex example4.l 
mpicc -c lex.yy.c 
mpif90 -o example main.o y.tab.o mymain.o lex.yy.o 
ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval' 
ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval' 
-----
You later confirmed that adding -fPIC to the compile/link lines make everything work without adding -lbat -llsf.
Dave and I are sorta convinced (i.e., we could still be wrong, but we *think* this is right) that adding -lbat and -llsf to the link line is the Wrong solution.  The issue seems to be that a correct/matching yylval symbol is not being found during your final link.  
Crucial point: the yylval symbol should be in *your* code, not in the bat and lsf libraries.  Indeed, if adding -lbat -llsf resolves the problem (because a matching yylval symbol is found in libbat or liblsf), then it means you're using the lex/yacc-generated yylval symbol in the LSF libraries, not your code (!).
And that definitely does not seem right.
(even though it *works* [in v1.6 and/or by adding -lbat -llsf in v1.8], it may not be actually doing what you expect under the covers, and you're really just getting lucky that it actually works at all)
It *seems* like this is a generic C/Fortran linkage issue; i.e., it would be good to look at the docs for your version of icc/ifort to see if they are generating different modes of .o files by default, or somesuch (i.e., why adding -fPIC to the compile/link line makes it work).
Make sense?
That being said, you previously sent the v1.6/v1.8 differences between &quot;mpicc --showme&quot; -- can you send the differences between &quot;mpif90 -o example main.o y.tab.o mymain.o lex.yy.o --showme&quot;?
Thanks.
On Oct 21, 2014, at 4:13 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
&gt; Jeff,
&gt; the output of &quot;mpicc --showme&quot; is attached below.
&gt; 
&gt; &gt; Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
&gt; As both 1.6.5 and 1.8.3 versions are build for work with Platform LSF, yes, we need libbat and liblsf. The 1.6.5 version links this library explicitly in the link line. The 1.8.3 does not.
&gt; 
&gt; 
&gt; 
&gt; ### 1.6.5:
&gt; icc -I/opt/MPI/openmpi-1.6.5/linux/intel/include/openmpi/opal/mca/hwloc/hwloc132/hwloc/include -I/opt/MPI/openmpi-1.6.5/linux/intel/include -I/opt/MPI/openmpi-1.6.5/linux/intel/include/openmpi -fexceptions -pthread -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
&gt; 
&gt; ### 1.8.3:
&gt; icc -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/hwloc/hwloc172/hwloc/include -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/event/libevent2021/libevent -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/event/libevent2021/libevent/include -I/opt/MPI/openmpi-1.8.3/linux/intel/include -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi -fexceptions -pthread -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi
&gt; 
&gt; 
&gt; On 10/18/14 01:56, Jeff Squyres (jsquyres) wrote:
&gt;&gt; I think the LSF part of this may be a red herring.  Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
&gt;&gt; 
&gt;&gt; The error message *sounds* like y.tab.o was compiled differently than others...?  It's hard to know without seeing the output of mpicc --showme.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Oct 17, 2014, at 7:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; Forwarding this for Paul until his email address gets updated on the User list:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Begin forwarded message:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Date: October 17, 2014 at 6:35:31 AM PDT
&gt;&gt;&gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt;&gt; Cc: &quot;Kapinos, Paul&quot; &lt;kapinos_at_[hidden]&gt;, &lt;frings_at_[hidden]&gt;
&gt;&gt;&gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Dear Open MPI developer,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured to be used with Platform LSF.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; One of our users run into an issue when trying to link his code (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er the code can be linked OK.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; $ make
&gt;&gt;&gt;&gt;&gt; mpif90 -c main.f90
&gt;&gt;&gt;&gt;&gt; yacc -d example4.y
&gt;&gt;&gt;&gt;&gt; mpicc -c y.tab.c
&gt;&gt;&gt;&gt;&gt; mpicc -c mymain.c
&gt;&gt;&gt;&gt;&gt; lex example4.l
&gt;&gt;&gt;&gt;&gt; mpicc -c lex.yy.c
&gt;&gt;&gt;&gt;&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
&gt;&gt;&gt;&gt;&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval'
&gt;&gt;&gt;&gt;&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval'
&gt;&gt;&gt;&gt;&gt; .......
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and possibly the philosophy behind it has been changed, there is also a note on it:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
&gt;&gt;&gt;&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
&gt;&gt;&gt;&gt; # pulled in implicitly) because we intend MPI applications to only use
&gt;&gt;&gt;&gt; # the MPI API.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Well, by now we know two workarounds:
&gt;&gt;&gt;&gt; a) add &quot;-lbat -llsf&quot; to the link line
&gt;&gt;&gt;&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; What would be better? Maybe one of this should be added to linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As of the note above, (b) would be better?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Best
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Paul Kapinos
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; P.S. $ mpif90 --show-me
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 1.6.5
&gt;&gt;&gt;&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 1.8.3
&gt;&gt;&gt;&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; P.S.2 $ man ld
&gt;&gt;&gt;&gt; ....
&gt;&gt;&gt;&gt;       --as-needed
&gt;&gt;&gt;&gt;       --no-as-needed
&gt;&gt;&gt;&gt;           This option affects ELF DT_NEEDED tags for dynamic libraries
&gt;&gt;&gt;&gt;           mentioned on the command line after the --as-needed option.
&gt;&gt;&gt;&gt;           Normally the linker will add a DT_NEEDED tag for each dynamic
&gt;&gt;&gt;&gt;           library mentioned on the command line, regardless of whether the
&gt;&gt;&gt;&gt;           library is actually needed or not.  --as-needed causes a DT_NEEDED
&gt;&gt;&gt;&gt;           tag to only be emitted for a library that satisfies an undefined
&gt;&gt;&gt;&gt;           symbol reference from a regular object file or, if the library is
&gt;&gt;&gt;&gt;           not found in the DT_NEEDED lists of other libraries linked up to
&gt;&gt;&gt;&gt;           that point, an undefined symbol reference from another dynamic
&gt;&gt;&gt;&gt;           library.  --no-as-needed restores the default behaviour.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; ....
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
&gt;&gt;&gt;&gt; RWTH Aachen University, IT Center
&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt;&gt;&gt;&gt; Tel: +49 241/80-24915
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; &lt;lexyacc.zip&gt;
&gt;&gt; 
&gt;&gt; 
&gt; 
&gt; 
&gt; -- 
&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
&gt; RWTH Aachen University, IT Center
&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt; Tel: +49 241/80-24915
&gt; 
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16379.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16077.php">Paul Kapinos: "Re: [OMPI devel] Fwd: Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16733.php">Paul Kapinos: "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
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
