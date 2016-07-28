<?
$subject_val = "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 14:05:57 2015" -->
<!-- isoreceived="20150105190557" -->
<!-- sent="Mon, 5 Jan 2015 20:05:49 +0100" -->
<!-- isosent="20150105190549" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF" -->
<!-- id="d5caeccf-2c65-4f37-8f03-cc39af18d255_at_HUB2.rwth-ad.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B7CFA3B4-7544-4F1C-AB6E-16E934E48D57_at_cisco.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 14:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and All,
<br>
Belated Merry Christmas and a Happy New Year! And now we can be back to business :)
<br>
<p>I did some additional tests with versions installed on our cluster (1.8.3 ++ 
<br>
1.8.4) and I *believe* I can confirm, that the problem seem to be not rooted on 
<br>
LSF support and yessir, adding &quot;-lbat -llsf&quot; is not a solution but a weird 
<br>
&quot;workaround&quot; which is not a real true workaround(*), as you wrote.
<br>
<p>Back to error description:
<br>
<p>a) the problem only arise in 1.8.x series when configured with these flags:
<br>
<span class="quotelev1"> &gt;  --disable-dlopen  --disable-mca-dso
</span><br>
<p>We add these flags since early 2012 in order to minimise the NFS activity at 
<br>
start-up time.
<br>
In the 1.6.x versions we *probably* do not see the error due to (*) - yessir, 
<br>
'libbat.so' and 'liblsf.so' contain all the symbols missed and as these two libs 
<br>
are linked in by default prior 1.8.x, there is the mess you described below 
<br>
(symbols from libbat.so and liblsf.so *probably* used instead of symbols in the 
<br>
code).
<br>
<p>b) the problem vanish when
<br>
<span class="quotelev1"> &gt;  --as-needed
</span><br>
command is passed to the linker:
<br>
$ mpif90 -o example main.o y.tab.o mymain.o lex.yy.o  -Wl,--as-needed
<br>
<p>c) yes it seem to be a general linkage issue: the behaviour of Intel compiler is 
<br>
the same as of GCC and studio compilers.
<br>
<p>a bit logs: version 1.8.3, configured with &quot;--disable-dlopen  --disable-mca-dso&quot;
<br>
<p>$ mpif90 -o example main.o y.tab.o mymain.o lex.yy.o -showme
<br>
ifort -o example main.o y.tab.o mymain.o lex.yy.o 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/lib 
<br>
-L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath 
<br>
-Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath 
<br>
-Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags 
<br>
-L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr 
<br>
-lmpi_mpifh -lmpi
<br>
(===&gt; error)
<br>
<p>(===&gt; add -Wl,--as-needed)
<br>
$ mpif90 -o example main.o y.tab.o mymain.o lex.yy.o -Wl,--as-needed -showme
<br>
ifort -o example main.o y.tab.o mymain.o lex.yy.o -Wl,--as-needed 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/lib 
<br>
-L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath 
<br>
-Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath 
<br>
-Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags 
<br>
-L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr 
<br>
-lmpi_mpifh -lmpi
<br>
(===&gt; OK)
<br>
<p><p>(===&gt; try to remove the LSF linking stuff at all:)
<br>
ifort -o example main.o y.tab.o mymain.o lex.yy.o -Wl,--as-needed 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions 
<br>
-I/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,-rpath 
<br>
-Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags 
<br>
-L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr 
<br>
-lmpi_mpifh -lmpi
<br>
(===&gt; OK)
<br>
<p>(the same line as above but without -Wl,--as-needed ===&gt; error).
<br>
<p>now the fun fact: omitting all the Open MPI part,
<br>
<span class="quotelev1"> &gt; ifort -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
lead to OK linking (the compiled app is not an MPI app).
<br>
<p><p><p>Recap:
<br>
1) - the error is related to configure with '--disable-dlopen --disable-mca-dso'
<br>
2) - the error vanishes when added   '-Wl,--as-needed' to the link line
<br>
3) - the error is not special to any compiler or version
<br>
4) - the error is not related to LSF but linking with these libs just shut down 
<br>
it due to some symbols mess
<br>
<p>Well, I'm not really sure that (2) is the true workaround, or just starts some 
<br>
more library deep search and binds to LSF libs linked in somewhere in the bush.
<br>
<p>Could someone with moar xperience in linking libs and especially Open MPI take a 
<br>
look at this? (sorry for pushing this, but all this smells for me being an 
<br>
general linking problem rooted somewhere in Open MPI and '--disable-dlopen', see 
<br>
&quot;fun fact&quot; above)
<br>
<p>best
<br>
<p>Paul Kapinos
<br>
<p>P.S. Never used &quot;-fPIC&quot; here
<br>
<p><p>On 12/01/14 20:48, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay -- SC and the US Thanksgiving holiday last week got in the way of responding to this properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I talked with Dave Goodell about this issue a bunch today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Going back to the original email in this thread (<a href="http://www.open-mpi.org/community/lists/devel/2014/10/16064.php">http://www.open-mpi.org/community/lists/devel/2014/10/16064.php</a>), it seems like this is the original problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; mpif90 -c main.f90
</span><br>
<span class="quotelev1">&gt; yacc -d example4.y
</span><br>
<span class="quotelev1">&gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev1">&gt; mpicc -c mymain.c
</span><br>
<span class="quotelev1">&gt; lex example4.l
</span><br>
<span class="quotelev1">&gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev1">&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev1">&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval'
</span><br>
<span class="quotelev1">&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval'
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You later confirmed that adding -fPIC to the compile/link lines make everything work without adding -lbat -llsf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave and I are sorta convinced (i.e., we could still be wrong, but we *think* this is right) that adding -lbat and -llsf to the link line is the Wrong solution.  The issue seems to be that a correct/matching yylval symbol is not being found during your final link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Crucial point: the yylval symbol should be in *your* code, not in the bat and lsf libraries.  Indeed, if adding -lbat -llsf resolves the problem (because a matching yylval symbol is found in libbat or liblsf), then it means you're using the lex/yacc-generated yylval symbol in the LSF libraries, not your code (!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And that definitely does not seem right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (even though it *works* [in v1.6 and/or by adding -lbat -llsf in v1.8], it may not be actually doing what you expect under the covers, and you're really just getting lucky that it actually works at all)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It *seems* like this is a generic C/Fortran linkage issue; i.e., it would be good to look at the docs for your version of icc/ifort to see if they are generating different modes of .o files by default, or somesuch (i.e., why adding -fPIC to the compile/link line makes it work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, you previously sent the v1.6/v1.8 differences between &quot;mpicc --showme&quot; -- can you send the differences between &quot;mpif90 -o example main.o y.tab.o mymain.o lex.yy.o --showme&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2014, at 4:13 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; the output of &quot;mpicc --showme&quot; is attached below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
</span><br>
<span class="quotelev2">&gt;&gt; As both 1.6.5 and 1.8.3 versions are build for work with Platform LSF, yes, we need libbat and liblsf. The 1.6.5 version links this library explicitly in the link line. The 1.8.3 does not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### 1.6.5:
</span><br>
<span class="quotelev2">&gt;&gt; icc -I/opt/MPI/openmpi-1.6.5/linux/intel/include/openmpi/opal/mca/hwloc/hwloc132/hwloc/include -I/opt/MPI/openmpi-1.6.5/linux/intel/include -I/opt/MPI/openmpi-1.6.5/linux/intel/include/openmpi -fexceptions -pthread -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ### 1.8.3:
</span><br>
<span class="quotelev2">&gt;&gt; icc -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/hwloc/hwloc172/hwloc/include -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/event/libevent2021/libevent -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi/opal/mca/event/libevent2021/libevent/include -I/opt/MPI/openmpi-1.8.3/linux/intel/include -I/opt/MPI/openmpi-1.8.3/linux/intel/include/openmpi -fexceptions -pthread -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/18/14 01:56, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the LSF part of this may be a red herring.  Do you really need to add &quot;-lbat -llsf&quot; to the command line to make it work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error message *sounds* like y.tab.o was compiled differently than others...?  It's hard to know without seeing the output of mpicc --showme.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 17, 2014, at 7:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Forwarding this for Paul until his email address gets updated on the User list:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: October 17, 2014 at 6:35:31 AM PDT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cc: &quot;Kapinos, Paul&quot; &lt;kapinos_at_[hidden]&gt;, &lt;frings_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Open MPI 1.8: link problem when Fortran+C+Platform LSF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we have both Open MPI 1.6(.5) and 1.8(.3) in our cluster, configured to be used with Platform LSF.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One of our users run into an issue when trying to link his code (combination of lex/C and Fortran) with v.1.8, whereby with OpenMPI/1.6er the code can be linked OK.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpif90 -c main.f90
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; yacc -d example4.y
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc -c y.tab.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc -c mymain.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lex example4.l
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpicc -c lex.yy.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpif90 -o example main.o y.tab.o mymain.o lex.yy.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ld: y.tab.o(.text+0xd9): unresolvable R_X86_64_PC32 relocation against symbol `yylval'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ld: y.tab.o(.text+0x16f): unresolvable R_X86_64_PC32 relocation against symbol `yyval'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; .......
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; looking into &quot;mpif90 --show-me&quot; let us see that the link line and possibly the philosophy behind it has been changed, there is also a note on it:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # the MPI API.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, by now we know two workarounds:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a) add &quot;-lbat -llsf&quot; to the link line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; b) add &quot; -Wl,--as-needed&quot; to the link line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What would be better? Maybe one of this should be added to linker_flags=...&quot; in the .../share/openmpi/mpif90-wrapper-data.txt file? As of the note above, (b) would be better?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P.S. $ mpif90 --show-me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.6.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ifort -nofor-main -I/opt/MPI/openmpi-1.6.5/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.6.5/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -L/opt/MPI/openmpi-1.6.5/linux/intel/lib -lmpi_f90 -lmpi_f77 -lmpi -losmcomp -lrdmacm -libverbs -lrt -lnsl -lutil -lpsm_infinipath -lbat -llsf -ldl -lm -lnuma -lrt -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.8.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ifort             -I/opt/MPI/openmpi-1.8.3/linux/intel/include -fexceptions -I/opt/MPI/openmpi-1.8.3/linux/intel/lib -L/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/lsf/9.1/linux2.6-glibc2.3-x86_64/lib -Wl,-rpath -Wl,/opt/MPI/openmpi-1.8.3/linux/intel/lib -Wl,--enable-new-dtags -L/opt/MPI/openmpi-1.8.3/linux/intel/lib -lmpi_usempif08 -lmpi_usempi_ignore_tkr -lmpi_mpifh -lmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P.S.2 $ man ld
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        --as-needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        --no-as-needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            This option affects ELF DT_NEEDED tags for dynamic libraries
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            mentioned on the command line after the --as-needed option.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            Normally the linker will add a DT_NEEDED tag for each dynamic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            library mentioned on the command line, regardless of whether the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            library is actually needed or not.  --as-needed causes a DT_NEEDED
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            tag to only be emitted for a library that satisfies an undefined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            symbol reference from a regular object file or, if the library is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            not found in the DT_NEEDED lists of other libraries linked up to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            that point, an undefined symbol reference from another dynamic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;            library.  --no-as-needed restores the default behaviour.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;lexyacc.zip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16733/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16734.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can require	autotools"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16732.php">Devendar Bureddy: "Re: [OMPI devel] openib receive queue settings"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Reply:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
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
