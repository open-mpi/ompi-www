<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 11:08:37 2009" -->
<!-- isoreceived="20090420150837" -->
<!-- sent="Mon, 20 Apr 2009 20:38:32 +0530" -->
<!-- isosent="20090420150832" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904200808j4c0f3a61x9b04bb7a1c6894c5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49EC817A.5010803_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 11:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8982.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8982.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8982.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, I m implementing the passwordless cluster
<br>
<p>I m also tryin different benchmarking software n got fed up of all the probs
<br>
in all de sofwares i try. will list few:
<br>
<p>*1) VampirTrace*
<br>
<p>&nbsp;I extracted de tar in /vt then followed following steps
<br>
<p>*$ ./configure --prefix=/vti*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...lots of output...]
<br>
*$ make all install*
<br>
<p>after this the FAQ on open-mpi.org asks to '*Simply replace the compiler
<br>
wrappers to activate vampir trace*' but does not tell how do i replace
<br>
the compiler
<br>
wrappers.
<br>
<p>i try to run *mpicc-vt -c hello.c -o hello
<br>
*
<br>
but it gives a error
<br>
*bash: mpicc-vt: command not found
<br>
<p><p>**2) HPL
<br>
*
<br>
for this i didnt undersatnd the installation steps.
<br>
<p>I extracted the tar in /hpl
<br>
<p>Then is asks to '*create a file Make.&lt;arch&gt; in the  top-level directory*' i
<br>
created a file Make.i386.
<br>
then it says '*This file essentially contains the compilers
<br>
&nbsp;and librairies with their paths to be used*' how do i put that?
<br>
<p>after that it asks to run command *make arch=i386
<br>
*but it gives error*
<br>
**make[3]: Entering directory `/hpl'
<br>
make -f Make.top startup_dir     arch=i386
<br>
make[4]: Entering directory `/hpl'
<br>
Make.top:161: warning: overriding commands for target `clean_arch_all'
<br>
Make.i386:84: warning: ignoring old commands for target `clean_arch_all'
<br>
include/i386
<br>
make[4]: include/i386: Command not found
<br>
make[4]: [startup_dir] Error 127 (ignored)
<br>
lib
<br>
make[4]: lib: Command not found
<br>
make[4]: [startup_dir] Error 127 (ignored)
<br>
lib/i386
<br>
make[4]: lib/i386: Command not found
<br>
make[4]: [startup_dir] Error 127 (ignored)
<br>
bin
<br>
make[4]: bin: Command not found
<br>
make[4]: [startup_dir] Error 127 (ignored)
<br>
bin/i386
<br>
make[4]: bin/i386: Command not found
<br>
make[4]: [startup_dir] Error 127 (ignored)
<br>
make[4]: Leaving directory `/hpl'
<br>
make -f Make.top startup_src     arch=i386
<br>
make[4]: Entering directory `/hpl'
<br>
Make.top:161: warning: overriding commands for target `clean_arch_all'
<br>
Make.i386:84: warning: ignoring old commands for target `clean_arch_all'
<br>
make -f Make.top leaf le=src/auxil       arch=i386
<br>
make[5]: Entering directory `/hpl'
<br>
Make.top:161: warning: overriding commands for target `clean_arch_all'
<br>
Make.i386:84: warning: ignoring old commands for target `clean_arch_all'
<br>
(  src/auxil ;  i386 )
<br>
/bin/sh: src/auxil: is a directory
<br>
<p>*then it enters shell prompt.
<br>
<p>Please help, is there a simpler Benchmarking software?
<br>
i dont wanna give at this point :(
<br>
*
<br>
*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8982.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8980.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8982.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8982.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
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
