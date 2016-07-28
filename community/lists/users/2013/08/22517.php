<?
$subject_val = "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 01:18:26 2013" -->
<!-- isoreceived="20130819051826" -->
<!-- sent="Sun, 18 Aug 2013 22:18:24 -0700" -->
<!-- isosent="20130819051824" -->
<!-- name="Richard Haney" -->
<!-- email="rfhaney_at_[hidden]" -->
<!-- subject="[OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="CACpvy6BfJb9O1rpSaCUwZ0hTF0C9_OPMFGWy3-WzsY0bKxmHYA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Addendum to: Assembler instruction errors for push and pop during make<br>
<strong>From:</strong> Richard Haney (<em>rfhaney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 01:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22516.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe reply:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe reply:</strong> <a href="22524.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe reply:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about the last, attempted message being too large.  I did not know
<br>
that there was such a size limit.  I am re-sending the last attempted
<br>
message with the attachments removed.  The relevant attachments were
<br>
included with the original message with subject &quot;Assembler instruction
<br>
errors for push and pop during make&quot;.  I would appreciate any help anyone
<br>
can provide.
<br>
<p>At present I am trying to brush up on assembly &amp; machine coding concepts
<br>
and to study the differences between 32-bit and 64-bit processing.
<br>
&nbsp;Hopefully, that will allow me to create a fix for the problem.  One hope
<br>
is that, for the assembly programs in question, it does not matter whether
<br>
they are assembled as 32-bit code &quot;as is&quot; with only an explicit invocation
<br>
of the gnu assembler and a --32 flag adjustment or as 64-bit code with code
<br>
adjustments.  But at present that is just wishful thinking.
<br>
<p>Also, it is not clear whether building the OpenMPI package entirely as
<br>
32-bit code would limit my use of OpenMPI as a library to 64-bit programs
<br>
or whether there would be a significant speed penalty.
<br>
<p>Here are some ideas that may lead to a solution, but I still need help
<br>
solving this problem.
<br>
<p><a href="http://stackoverflow.com/questions/6268745/invalid-instruction-suffix-for-push-when-assembling-with-gassuggests">http://stackoverflow.com/questions/6268745/invalid-instruction-suffix-for-push-when-assembling-with-gassuggests</a>
<br>
that the problem is caused by trying to assemble 32-bit assembly
<br>
code in 64-bit mode and that an option of --32 would likely solve the
<br>
problem.  But in my case, would this solution create 32-bit/64-bit
<br>
incompatibilities between object modules?
<br>
<p>There is also in the same source the suggestion &quot;Prepend .code32 as your
<br>
first line.&quot;  But there are numerous .s modules in the openmpi-1.6.5 tree,
<br>
and perhaps only some of them have this problem.  Perhaps I could modify
<br>
all such .s modules and then restore the time stamps so as not to confuse
<br>
the makefiles.  But the same question about 32-bit/64-bit incompatibilities
<br>
arises.  The only experience I have with assembler code is with an IBM 360
<br>
assembler (for debug tracebacks in Fortran) and embedded assembly code in
<br>
Turbo Pascal and/or Turbo C/C++ coordinated with assembly output from those
<br>
compilers for 8086 code and perhaps a machine-code-to-symbolic disassembler
<br>
as well.  I have only the vaguest idea how the gnu assembler works.
<br>
<p>There is in my C:\MinGW64\bin directory an assembler as.exe whose --version
<br>
output says in part &quot;This assembler was configured for a target of
<br>
`x86_64-w64-mingw32'.&quot;
<br>
<p>There is described in &quot;as --help&quot; output the option:
<br>
--32/--64/--x32         generate 32bit/64bit/x32 code
<br>
<p>Perhaps I could pass option --32 to the back-end assembler (as.exe ?) via
<br>
the gcc option -Wa,--32 in CFLAGS, but it seems this would likely apply to
<br>
back-end processing of all compilations and likely cause 32-bit/64-bit
<br>
incompatibilities (especially with gfortran objects generated using the
<br>
-m64 option).  It seems also that this would largely negate the benefit of
<br>
64-bit processing even if no incompatibilities resulted.
<br>
<p>&quot;configure --help&quot; output indicates under &quot;Some influential environment
<br>
variables:&quot; --
<br>
CCAS        assembler compiler command (defaults to CC)
<br>
CCASFLAGS   assembler compiler flags (defaults to CFLAGS)
<br>
<p>Depending on how configure and its Makefiles work, perhaps I could use CCAS
<br>
and perhaps CCASFLAGS to invoke as.exe specifically for the assembly .s
<br>
source processing, but, if I use the flag --32 for the .s assembly
<br>
programs, would this also create 32-bit/64-bit incompatibilities?
<br>
<p><pre>
-- 
*- Richard Haney*
---------- Forwarded message ----------
From: Richard Haney &lt;rfhaney_at_[hidden]&gt;
Date: Sat, Aug 17, 2013 at 9:29 PM
Subject: Assembler instruction errors for push and pop during make
To: users_at_[hidden]
During make I get several instruction errors for push, pushl, pop, and popl
 at atomic-asm.S , which is included indirectly in asm.c .  For example,
for the first reported &quot;Error&quot;, the instruction
pushl  %ebp
apparently generates the error message
atomic-asm.S:5: Error: invalid instruction suffix for `push'
There are several more Error messages like that.
---
And the instruction
push    %ebx
apparently generates the error message
atomic-asm.S:64: Error: operand type mismatch for `push'
---
And the instruction
pop   %ebx
apparently generates the error message
atomic-asm.S:68: Error: operand type mismatch for `pop'
---
And the instruction
popl  %ebp
apparently generates the error message
atomic-asm.S:75: Error: invalid instruction suffix for `pop'
-----------------------------------------------
It seems worth noting that make does a symbolic link involving &quot;atomic-asm.S&quot;
immediately before the processing of this file, which generates the errors,
but the configure output reports
checking whether ln -s works... no, using cp -p
as if symbolic links will not be used.
----------------------------------------
The configure output was generated by executing the script file &quot;
mpiconfigure&quot; via command
*$ mpiconfigure  &amp;&gt;  openmpi-1.6.5_configure.out*
&quot;mpiconfigure&quot; executes
*export LD_LIBRARY_PATH=/c/MinGW64/lib/gcc/x86_64-w64-mingw32/4.6.1*
just before executing ./configure ... so that I won't forget to set
LD_LIBRARY_PATH
.
The make command used was
*$ make -j 2     &amp;&gt;  make_-j_2.out*
I am using the Mingw MSYS 1.0 command-window/bash in a Windows 7
environment for processing the commands.
The compilers are Mingw 64-bit as reported in config.log ; these are not
&quot;official&quot; Mingw compiler versions, but supposedly are very nearly so --
see <a href="http://tdm-gcc.tdragon.net/">http://tdm-gcc.tdragon.net/</a> for details:
configure:5375: gcc --version &gt;&amp;5
gcc.exe (tdm64-1) 4.6.1
configure:15880: g++ --version &gt;&amp;5
g++.exe (tdm64-1) 4.6.1
configure:28191: gfortran.exe --version &gt;&amp;5
GNU Fortran (tdm64-1) 4.6.1
The processor is an Intel Sandybridge i5, with capability for parallel
execution of four threads.
My guess is that these errors are due simply to a mismatch between the
assembly instructions gcc can understand and the assembly instructions that
OpenMPI assumes gcc can understand.
Is there some flag I can set to tell gcc that a particular assembly
language (dialect) is being used?  And, if so, can I set it for make
without having to re-run configure?
-- 
*- Richard Haney*
*
*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22516.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe reply:</strong> <a href="22518.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe reply:</strong> <a href="22524.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe reply:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
