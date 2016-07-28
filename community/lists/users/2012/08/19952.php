<?
$subject_val = "[OMPI users] Openmpi ./configure error - Fortran compiling error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 17 03:18:38 2012" -->
<!-- isoreceived="20120817071838" -->
<!-- sent="Fri, 17 Aug 2012 15:18:32 +0800" -->
<!-- isosent="20120817071832" -->
<!-- name="matty hbnkjb" -->
<!-- email="thequalitician_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi ./configure error - Fortran compiling error" -->
<!-- id="CAB0Ccr3v4_iBzGW+cJu=J_Ez57jgW8UkqSaEG27aXVvGr=2wbQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi ./configure error - Fortran compiling error<br>
<strong>From:</strong> matty hbnkjb (<em>thequalitician_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-17 03:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>Previous message:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>Reply:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'm having some trouble installing Openmpi and, not being too savvy with
<br>
these sorts of things, I'm in need of some help. I think the problem is
<br>
something to do with locating the lf2c libraries.
<br>
<p>Here's what I've done:
<br>
<p><span class="quotelev1">&gt;From the openmpi directory I do a *./configure* it spits out loads of stuff
</span><br>
until I get:
<br>
<p>*** Fortran 90/95 compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking if Fortran 77 compiler works... no
<br>
**********************************************************************
<br>
* It appears that your Fortran 77 compiler is unable to produce working
<br>
* executables.  A simple test application failed to properly
<br>
* execute.  Note that this is likely not a problem with Open MPI,
<br>
* but a problem with the local compiler installation.  More
<br>
* information (including exactly what command was given to the
<br>
* compiler and what error resulted when the command was executed) is
<br>
* available in the config.log file in this directory.
<br>
**********************************************************************
<br>
configure: error: Could not run a simple Fortran 77 program.  Aborting.
<br>
<p>So after a bit of messing around making sure gfortran is installed - I
<br>
thought it came with XCode - I compile a simple &quot;Hello World&quot; fortran file
<br>
just to make sure it works, and it did. I also checked (after looking at
<br>
the config.log) that f2c was working, and it does.
<br>
<p>I think the relevant text from the output log is below, but the whole thing
<br>
is attached.
<br>
<p>configure:28274: checking for gfortran
<br>
configure:28290: found /usr/local/bin/gfortran
<br>
configure:28301: result: gfortran
<br>
configure:28327: checking for Fortran compiler version
<br>
configure:28336: gfortran --version &gt;&amp;5
<br>
GNU Fortran (GCC) 4.8.0 20120603 (experimental)
<br>
Copyright (C) 2012 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>configure:28347: $? = 0
<br>
configure:28336: gfortran -v &gt;&amp;5
<br>
Using built-in specs.
<br>
COLLECT_GCC=gfortran
<br>
COLLECT_LTO_WRAPPER=/usr/local/libexec/gcc/x86_64-apple-darwin11.4.0/4.8.0/lto-wrapper
<br>
Target: x86_64-apple-darwin11.4.0
<br>
Configured with: ../gcc-4.8-20120603/configure --enable-languages=fortran
<br>
Thread model: posix
<br>
gcc version 4.8.0 20120603 (experimental) (GCC)
<br>
configure:28347: $? = 0
<br>
configure:28336: gfortran -V &gt;&amp;5
<br>
gfortran: error: unrecognized command line option '-V'
<br>
gfortran: fatal error: no input files
<br>
compilation terminated.
<br>
configure:28347: $? = 1
<br>
configure:28336: gfortran -qversion &gt;&amp;5
<br>
gfortran: error: unrecognized command line option '-qversion'
<br>
gfortran: fatal error: no input files
<br>
compilation terminated.
<br>
configure:28347: $? = 1
<br>
configure:28356: checking whether we are using the GNU Fortran compiler
<br>
configure:28369: gfortran -c   conftest.F &gt;&amp;5
<br>
configure:28369: $? = 0
<br>
configure:28378: result: yes
<br>
configure:28384: checking whether gfortran accepts -g
<br>
configure:28395: gfortran -c -g  conftest.f &gt;&amp;5
<br>
configure:28395: $? = 0
<br>
configure:28403: result: yes
<br>
configure:28580: checking if Fortran 77 compiler works
<br>
configure:28609: /usr/local/scisoft//packages/iraf/iraf/unix/hlib//f77.sh
<br>
-o conftest  -L/usr/local/scisoft/lib/ conftest.f  &gt;&amp;5
<br>
+ PATH=/v/bin:/bin:/usr/bin:/usr/local/bin
<br>
+ s=/tmp/stderr_45833
<br>
+ t=/tmp/f77_45833
<br>
+ CC=cc
<br>
+ CFLAGS='-O3 -DNDEBUG -I/usr/local/scisoft/include/ -finline-functions
<br>
-fno-strict-aliasing'
<br>
+ EFL=/v/bin/efl
<br>
+ EFLFLAGS='system=portable deltastno=10'
<br>
+ F2C=/usr/local/scisoft//packages/iraf/iraf/unix/bin.macintel//f2c.e
<br>
+ F2CFLAGS='-KRw8 -Nn802'
<br>
+ keepc=0
<br>
+ warn=1
<br>
+ xsrc=0
<br>
+ rc=0
<br>
+ lib=/lib/num/lib.lo
<br>
+ trap 'rm -f /tmp/stderr_45833 ; exit $rc' 0
<br>
+ OUTF=a.out
<br>
+ cOPT=1
<br>
+ G=
<br>
+ CPP=/bin/cat
<br>
+ CPPFLAGS=
<br>
+ case $? in
<br>
+ test X-o '!=' X--
<br>
+ case &quot;$1&quot; in
<br>
+ OUTF=conftest
<br>
+ shift 2
<br>
+ test X-L/usr/local/scisoft/lib/ '!=' X--
<br>
+ case &quot;$1&quot; in
<br>
+ echo 'invalid parameter -L/usr/local/scisoft/lib/'
<br>
invalid parameter -L/usr/local/scisoft/lib/
<br>
+ shift
<br>
+ test Xconftest.f '!=' X--
<br>
+ case &quot;$1&quot; in
<br>
+ set -- -- conftest.f
<br>
+ test X-- '!=' X--
<br>
+ shift
<br>
+ test -n conftest.f
<br>
+ case &quot;$1&quot; in
<br>
+ case &quot;$1&quot; in
<br>
+ f=.f
<br>
++ basename conftest.f .f
<br>
+ b=conftest
<br>
+ '[' 1 = 0 ']'
<br>
+ /usr/local/scisoft//packages/iraf/iraf/unix/bin.macintel//f2c.e -KRw8
<br>
-Nn802 conftest.f
<br>
conftest.f:
<br>
&nbsp;&nbsp;&nbsp;MAIN main:
<br>
+ '[' 0 = 1 ']'
<br>
+ cc -c -O3 -DNDEBUG -I/usr/local/scisoft/include/ -finline-functions
<br>
-fno-strict-aliasing conftest.c
<br>
+ rc=0
<br>
+ sed '/parameter .* is not referenced/d;/warning: too many parameters/d'
<br>
/tmp/stderr_45833
<br>
conftest.c:17:1: warning: control reaches end of non-void function
<br>
[-Wreturn-type]
<br>
} /* MAIN__ */
<br>
^
<br>
conftest.c:19:52: warning: control reaches end of non-void function
<br>
[-Wreturn-type]
<br>
/* Main program alias */ int main_ () { MAIN__ (); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
2 warnings generated.
<br>
+ case $rc in
<br>
+ '[' 0 = 0 ']'
<br>
+ rm -f conftest.c
<br>
+ OFILES=' conftest.o'
<br>
+ case $cOPT in
<br>
+ cOPT=2
<br>
+ shift
<br>
+ test -n ''
<br>
+ case $cOPT in
<br>
+ cc -o conftest conftest.o -lf2c -lm
<br>
ld: library not found for -lf2c
<br>
clang: error: linker command failed with exit code 1 (use -v to see
<br>
invocation)
<br>
+ rc=1
<br>
+ exit 1
<br>
+ rm -f /tmp/stderr_45833
<br>
+ exit 1
<br>
configure:28609: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
|       program main
<br>
|
<br>
|       end
<br>
configure:28625: result: no
<br>
configure:28639: error: Could not run a simple Fortran 77 program.
<br>
&nbsp;Aborting.
<br>
<p>----------------------
<br>
<p><p>System Software Overview:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System Version: Mac OS X 10.7.4 (11E53)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kernel Version: Darwin 11.4.0
<br>
<p>Hardware Overview:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Model Name: iMac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Model Identifier: iMac12,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processor Name: Intel Core i7
<br>
<p>----------------------
<br>
<p>I hope I've provided the right/enough info, as I said I'm no whizz-kid at
<br>
this stuff! I'd be glad of any help you can offer, please try and
<br>
&quot;dumb-it-down&quot; for me!
<br>
<p>Thanks,
<br>
<p>Matt.
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19952/terminal_out.rtf.bz2">terminal_out.rtf.bz2</a>
</ul>
<!-- attachment="terminal_out.rtf.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19952/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>Previous message:</strong> <a href="19951.php">maryam moein: "Re: [OMPI users] mpi_group_incl erros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<li><strong>Reply:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
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
