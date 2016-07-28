<?
$subject_val = "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 17 20:45:37 2012" -->
<!-- isoreceived="20120818004537" -->
<!-- sent="Fri, 17 Aug 2012 20:45:31 -0400" -->
<!-- isosent="20120818004531" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi ./configure error - Fortran compiling error" -->
<!-- id="706096FE-DB69-4F95-B141-8E04FCC3F5A3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAB0Ccr3v4_iBzGW+cJu=J_Ez57jgW8UkqSaEG27aXVvGr=2wbQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi ./configure error - Fortran compiling error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-17 20:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19952.php">matty hbnkjb: "[OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>In reply to:</strong> <a href="19952.php">matty hbnkjb: "[OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, Xcode does not come with a Fortran compiler.  You must have gotten that elsewhere (perhaps hpc.sf.net, or Macports?).
<br>
<p>I can't tell from the files you sent, but perhaps you have an environment variable for FC that specifies gfortran, and an F77 environment variable that specifies /usr/local/scisoft//packages/iraf/iraf/unix/hlib//f77.sh ...?
<br>
<p>I say this because it seems to be picking up that script for the Fortran 77 compiler, and it doesn't seem to work.
<br>
<p>If you use gfortran for both, it should work.  Or, if you don't need Fortran support, you can --disable-mpi-f77 and it should disable both f77 and f90 MPI support.
<br>
<p><p>On Aug 17, 2012, at 3:18 AM, matty hbnkjb wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having some trouble installing Openmpi and, not being too savvy with these sorts of things, I'm in need of some help. I think the problem is something to do with locating the lf2c libraries. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I've done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From the openmpi directory I do a ./configure it spits out loads of stuff until I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... no
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; * It appears that your Fortran 77 compiler is unable to produce working
</span><br>
<span class="quotelev1">&gt; * executables.  A simple test application failed to properly
</span><br>
<span class="quotelev1">&gt; * execute.  Note that this is likely not a problem with Open MPI,
</span><br>
<span class="quotelev1">&gt; * but a problem with the local compiler installation.  More
</span><br>
<span class="quotelev1">&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev1">&gt; * compiler and what error resulted when the command was executed) is
</span><br>
<span class="quotelev1">&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; configure: error: Could not run a simple Fortran 77 program.  Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So after a bit of messing around making sure gfortran is installed - I thought it came with XCode - I compile a simple &quot;Hello World&quot; fortran file just to make sure it works, and it did. I also checked (after looking at the config.log) that f2c was working, and it does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the relevant text from the output log is below, but the whole thing is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:28274: checking for gfortran
</span><br>
<span class="quotelev1">&gt; configure:28290: found /usr/local/bin/gfortran
</span><br>
<span class="quotelev1">&gt; configure:28301: result: gfortran
</span><br>
<span class="quotelev1">&gt; configure:28327: checking for Fortran compiler version
</span><br>
<span class="quotelev1">&gt; configure:28336: gfortran --version &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; GNU Fortran (GCC) 4.8.0 20120603 (experimental)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2012 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:28347: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:28336: gfortran -v &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; COLLECT_GCC=gfortran
</span><br>
<span class="quotelev1">&gt; COLLECT_LTO_WRAPPER=/usr/local/libexec/gcc/x86_64-apple-darwin11.4.0/4.8.0/lto-wrapper
</span><br>
<span class="quotelev1">&gt; Target: x86_64-apple-darwin11.4.0
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc-4.8-20120603/configure --enable-languages=fortran
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.8.0 20120603 (experimental) (GCC) 
</span><br>
<span class="quotelev1">&gt; configure:28347: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:28336: gfortran -V &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gfortran: error: unrecognized command line option '-V'
</span><br>
<span class="quotelev1">&gt; gfortran: fatal error: no input files
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; configure:28347: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:28336: gfortran -qversion &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; gfortran: error: unrecognized command line option '-qversion'
</span><br>
<span class="quotelev1">&gt; gfortran: fatal error: no input files
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; configure:28347: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:28356: checking whether we are using the GNU Fortran compiler
</span><br>
<span class="quotelev1">&gt; configure:28369: gfortran -c   conftest.F &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:28369: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:28378: result: yes
</span><br>
<span class="quotelev1">&gt; configure:28384: checking whether gfortran accepts -g
</span><br>
<span class="quotelev1">&gt; configure:28395: gfortran -c -g  conftest.f &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:28395: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:28403: result: yes
</span><br>
<span class="quotelev1">&gt; configure:28580: checking if Fortran 77 compiler works
</span><br>
<span class="quotelev1">&gt; configure:28609: /usr/local/scisoft//packages/iraf/iraf/unix/hlib//f77.sh -o conftest  -L/usr/local/scisoft/lib/ conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; + PATH=/v/bin:/bin:/usr/bin:/usr/local/bin
</span><br>
<span class="quotelev1">&gt; + s=/tmp/stderr_45833
</span><br>
<span class="quotelev1">&gt; + t=/tmp/f77_45833
</span><br>
<span class="quotelev1">&gt; + CC=cc
</span><br>
<span class="quotelev1">&gt; + CFLAGS='-O3 -DNDEBUG -I/usr/local/scisoft/include/ -finline-functions -fno-strict-aliasing'
</span><br>
<span class="quotelev1">&gt; + EFL=/v/bin/efl
</span><br>
<span class="quotelev1">&gt; + EFLFLAGS='system=portable deltastno=10'
</span><br>
<span class="quotelev1">&gt; + F2C=/usr/local/scisoft//packages/iraf/iraf/unix/bin.macintel//f2c.e
</span><br>
<span class="quotelev1">&gt; + F2CFLAGS='-KRw8 -Nn802'
</span><br>
<span class="quotelev1">&gt; + keepc=0
</span><br>
<span class="quotelev1">&gt; + warn=1
</span><br>
<span class="quotelev1">&gt; + xsrc=0
</span><br>
<span class="quotelev1">&gt; + rc=0
</span><br>
<span class="quotelev1">&gt; + lib=/lib/num/lib.lo
</span><br>
<span class="quotelev1">&gt; + trap 'rm -f /tmp/stderr_45833 ; exit $rc' 0
</span><br>
<span class="quotelev1">&gt; + OUTF=a.out
</span><br>
<span class="quotelev1">&gt; + cOPT=1
</span><br>
<span class="quotelev1">&gt; + G=
</span><br>
<span class="quotelev1">&gt; + CPP=/bin/cat
</span><br>
<span class="quotelev1">&gt; + CPPFLAGS=
</span><br>
<span class="quotelev1">&gt; + case $? in
</span><br>
<span class="quotelev1">&gt; + test X-o '!=' X--
</span><br>
<span class="quotelev1">&gt; + case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt; + OUTF=conftest
</span><br>
<span class="quotelev1">&gt; + shift 2
</span><br>
<span class="quotelev1">&gt; + test X-L/usr/local/scisoft/lib/ '!=' X--
</span><br>
<span class="quotelev1">&gt; + case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt; + echo 'invalid parameter -L/usr/local/scisoft/lib/'
</span><br>
<span class="quotelev1">&gt; invalid parameter -L/usr/local/scisoft/lib/
</span><br>
<span class="quotelev1">&gt; + shift
</span><br>
<span class="quotelev1">&gt; + test Xconftest.f '!=' X--
</span><br>
<span class="quotelev1">&gt; + case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt; + set -- -- conftest.f
</span><br>
<span class="quotelev1">&gt; + test X-- '!=' X--
</span><br>
<span class="quotelev1">&gt; + shift
</span><br>
<span class="quotelev1">&gt; + test -n conftest.f
</span><br>
<span class="quotelev1">&gt; + case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt; + case &quot;$1&quot; in
</span><br>
<span class="quotelev1">&gt; + f=.f
</span><br>
<span class="quotelev1">&gt; ++ basename conftest.f .f
</span><br>
<span class="quotelev1">&gt; + b=conftest
</span><br>
<span class="quotelev1">&gt; + '[' 1 = 0 ']'
</span><br>
<span class="quotelev1">&gt; + /usr/local/scisoft//packages/iraf/iraf/unix/bin.macintel//f2c.e -KRw8 -Nn802 conftest.f
</span><br>
<span class="quotelev1">&gt; conftest.f:
</span><br>
<span class="quotelev1">&gt;    MAIN main:
</span><br>
<span class="quotelev1">&gt; + '[' 0 = 1 ']'
</span><br>
<span class="quotelev1">&gt; + cc -c -O3 -DNDEBUG -I/usr/local/scisoft/include/ -finline-functions -fno-strict-aliasing conftest.c
</span><br>
<span class="quotelev1">&gt; + rc=0
</span><br>
<span class="quotelev1">&gt; + sed '/parameter .* is not referenced/d;/warning: too many parameters/d' /tmp/stderr_45833
</span><br>
<span class="quotelev1">&gt; conftest.c:17:1: warning: control reaches end of non-void function [-Wreturn-type]
</span><br>
<span class="quotelev1">&gt; } /* MAIN__ */
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; conftest.c:19:52: warning: control reaches end of non-void function [-Wreturn-type]
</span><br>
<span class="quotelev1">&gt; /* Main program alias */ int main_ () { MAIN__ (); }
</span><br>
<span class="quotelev1">&gt;                                                    ^
</span><br>
<span class="quotelev1">&gt; 2 warnings generated.
</span><br>
<span class="quotelev1">&gt; + case $rc in
</span><br>
<span class="quotelev1">&gt; + '[' 0 = 0 ']'
</span><br>
<span class="quotelev1">&gt; + rm -f conftest.c
</span><br>
<span class="quotelev1">&gt; + OFILES=' conftest.o'
</span><br>
<span class="quotelev1">&gt; + case $cOPT in
</span><br>
<span class="quotelev1">&gt; + cOPT=2
</span><br>
<span class="quotelev1">&gt; + shift
</span><br>
<span class="quotelev1">&gt; + test -n ''
</span><br>
<span class="quotelev1">&gt; + case $cOPT in
</span><br>
<span class="quotelev1">&gt; + cc -o conftest conftest.o -lf2c -lm
</span><br>
<span class="quotelev1">&gt; ld: library not found for -lf2c
</span><br>
<span class="quotelev1">&gt; clang: error: linker command failed with exit code 1 (use -v to see invocation)
</span><br>
<span class="quotelev1">&gt; + rc=1
</span><br>
<span class="quotelev1">&gt; + exit 1
</span><br>
<span class="quotelev1">&gt; + rm -f /tmp/stderr_45833
</span><br>
<span class="quotelev1">&gt; + exit 1
</span><br>
<span class="quotelev1">&gt; configure:28609: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt; configure:28625: result: no
</span><br>
<span class="quotelev1">&gt; configure:28639: error: Could not run a simple Fortran 77 program.  Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System Software Overview:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       System Version: Mac OS X 10.7.4 (11E53)
</span><br>
<span class="quotelev1">&gt;       Kernel Version: Darwin 11.4.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hardware Overview:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       Model Name: iMac
</span><br>
<span class="quotelev1">&gt;       Model Identifier: iMac12,1
</span><br>
<span class="quotelev1">&gt;       Processor Name: Intel Core i7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope I've provided the right/enough info, as I said I'm no whizz-kid at this stuff! I'd be glad of any help you can offer, please try and &quot;dumb-it-down&quot; for me!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt.
</span><br>
<span class="quotelev1">&gt; &lt;terminal_out.rtf.bz2&gt;&lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19954.php">Jeff Squyres: "Re: [OMPI users] mpi_group_incl erros"</a>
<li><strong>Previous message:</strong> <a href="19952.php">matty hbnkjb: "[OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>In reply to:</strong> <a href="19952.php">matty hbnkjb: "[OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19959.php">devendra rai: "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
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
