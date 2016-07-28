<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 12:05:06 2009" -->
<!-- isoreceived="20090420160506" -->
<!-- sent="Mon, 20 Apr 2009 12:04:57 -0400" -->
<!-- isosent="20090420160457" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EC9D29.6000208_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904200808j4c0f3a61x9b04bb7a1c6894c5_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-20 12:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; Thanks a lot, I m implementing the passwordless cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I m also tryin different benchmarking software n got fed up of all the 
</span><br>
<span class="quotelev1">&gt; probs in all de sofwares i try. will list few:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *1) VampirTrace*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I extracted de tar in /vt then followed following steps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I never used it.
<br>
<p><span class="quotelev1">&gt; *$ ./configure --prefix=/vti*
</span><br>
<span class="quotelev1">&gt;          [...lots of output...]
</span><br>
<span class="quotelev1">&gt; *$ make all install*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after this the FAQ on open-mpi.org &lt;<a href="http://open-mpi.org">http://open-mpi.org</a>&gt; asks to 
</span><br>
<span class="quotelev1">&gt; '/Simply replace the compiler wrappers to activate vampir trace/' but 
</span><br>
<span class="quotelev1">&gt; does not tell how do i replace the compiler wrappers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i try to run *mpicc-vt -c hello.c -o hello
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; but it gives a error
</span><br>
<span class="quotelev1">&gt; /bash: mpicc-vt: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It is not on your path.
<br>
Use the full path name, which should be /vti/bin/...  or similar
<br>
if you did install it in /vti.
<br>
<p>Remember, &quot;locate&quot; is your friend!
<br>
<p><span class="quotelev1">&gt; /*2) HPL
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; for this i didnt undersatnd the installation steps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; I extracted the tar in /hpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then is asks to '/create a file Make.&lt;arch&gt; in the  top-level 
</span><br>
<span class="quotelev1">&gt; directory/' i created a file Make.i386.
</span><br>
<p>Are you talking about the Netlib HPL-2.0?
<br>
<a href="http://netlib.org/benchmark/hpl/">http://netlib.org/benchmark/hpl/</a>
<br>
<p>Are your computers i386 (32-bit) or x86_64/em64t (64-bit)?
<br>
&quot;uname -a&quot; will tell.
<br>
<p>Anyway, read their INSTALL file for where to find
<br>
template Make.arch files!
<br>
<p><span class="quotelev1">&gt; then it says '/This file essentially contains the compilers
</span><br>
<span class="quotelev1">&gt;  and librairies with their paths to be used/' how do i put that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after that it asks to run command *make arch=i386
</span><br>
<span class="quotelev1">&gt; *but it gives error*
</span><br>
<span class="quotelev1">&gt; */make[3]: Entering directory `/hpl'
</span><br>
<span class="quotelev1">&gt; make -f Make.top startup_dir     arch=i386
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/hpl'
</span><br>
<span class="quotelev1">&gt; Make.top:161: warning: overriding commands for target `clean_arch_all'
</span><br>
<span class="quotelev1">&gt; Make.i386:84: warning: ignoring old commands for target `clean_arch_all'
</span><br>
<span class="quotelev1">&gt; include/i386
</span><br>
<span class="quotelev1">&gt; make[4]: include/i386: Command not found
</span><br>
<span class="quotelev1">&gt; make[4]: [startup_dir] Error 127 (ignored)
</span><br>
<span class="quotelev1">&gt; lib
</span><br>
<span class="quotelev1">&gt; make[4]: lib: Command not found
</span><br>
<span class="quotelev1">&gt; make[4]: [startup_dir] Error 127 (ignored)
</span><br>
<span class="quotelev1">&gt; lib/i386
</span><br>
<span class="quotelev1">&gt; make[4]: lib/i386: Command not found
</span><br>
<span class="quotelev1">&gt; make[4]: [startup_dir] Error 127 (ignored)
</span><br>
<span class="quotelev1">&gt; bin
</span><br>
<span class="quotelev1">&gt; make[4]: bin: Command not found
</span><br>
<span class="quotelev1">&gt; make[4]: [startup_dir] Error 127 (ignored)
</span><br>
<span class="quotelev1">&gt; bin/i386
</span><br>
<span class="quotelev1">&gt; make[4]: bin/i386: Command not found
</span><br>
<span class="quotelev1">&gt; make[4]: [startup_dir] Error 127 (ignored)
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/hpl'
</span><br>
<span class="quotelev1">&gt; make -f Make.top startup_src     arch=i386
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/hpl'
</span><br>
<span class="quotelev1">&gt; Make.top:161: warning: overriding commands for target `clean_arch_all'
</span><br>
<span class="quotelev1">&gt; Make.i386:84: warning: ignoring old commands for target `clean_arch_all'
</span><br>
<span class="quotelev1">&gt; make -f Make.top leaf le=src/auxil       arch=i386
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory `/hpl'
</span><br>
<span class="quotelev1">&gt; Make.top:161: warning: overriding commands for target `clean_arch_all'
</span><br>
<span class="quotelev1">&gt; Make.i386:84: warning: ignoring old commands for target `clean_arch_all'
</span><br>
<span class="quotelev1">&gt; (  src/auxil ;  i386 )
</span><br>
<span class="quotelev1">&gt; /bin/sh: src/auxil: is a directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /then it enters shell prompt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help, is there a simpler Benchmarking software?
</span><br>
<span class="quotelev1">&gt; i dont wanna give at this point :(
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<p>I may have sent you the Intel MPI Benchmark link already.
<br>
Google will find it for you.
<br>
<p>I wouldn't spend too much time benchmarking
<br>
on standard Ethernet TCP/IP.
<br>
Did you try your own programs?
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8981.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8983.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
