<?
$subject_val = "Re: [OMPI users] pure static &quot;mpirun&quot; launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 01:24:37 2012" -->
<!-- isoreceived="20120125062437" -->
<!-- sent="Wed, 25 Jan 2012 07:24:29 +0100" -->
<!-- isosent="20120125062429" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pure static &amp;quot;mpirun&amp;quot; launcher" -->
<!-- id="16F9DC7AC786F7488506CEDBB9F7298B023F966C5649_at_mailbox1.umb.sk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] pure static &amp;quot;mpirun&amp;quot; launcher" -->
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
<strong>Subject:</strong> Re: [OMPI users] pure static &quot;mpirun&quot; launcher<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 01:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18267.php">Victor Pomponiu: "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>Previous message:</strong> <a href="18265.php">George Bosilca: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Maybe in reply to:</strong> <a href="18249.php">Ilias Miroslav: "[OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Reply:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again,
<br>
<p>I need own static &quot;mpirun&quot; for porting (together with the static executable) onto various (unknown) grid servers. In grid computing one can not expect OpenMPI-ILP64 installtion on each computing element. 
<br>
<p>Jeff: I tried LDFLAGS in configure
<br>
<p>ilias_at_194.160.135.47:~/bin/ompi-ilp64_full_static/openmpi-1.4.4/../configure --prefix=/home/ilias/bin/ompi-ilp64_full_static -without-memory-manager --without-libnuma --enable-static --disable-shared CXX=g++ CC=gcc F77=gfortran FC=gfortran FFLAGS=&quot;-m64 -fdefault-integer-8 -static&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -static&quot; CFLAGS=&quot;-m64 -static&quot; CXXFLAGS=&quot;-m64 -static&quot;  LDFLAGS=&quot;-static  -Wl,-E&quot; 
<br>
<p>but still got dynamic, not static &quot;mpirun&quot;:
<br>
ilias_at_194.160.135.47:~/bin/ompi-ilp64_full_static/bin/.ldd ./mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff6090c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fd7277cf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007fd7275b7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007fd7273b3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007fd727131000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007fd726f15000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fd726b90000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007fd7279ef000)
<br>
<p>Any help please ? config.log is here:
<br>
<p><a href="https://docs.google.com/open?id=0B8qBHKNhZAipNTNkMzUxZDEtNjJmZi00YzY3LWI4MmYtY2RkZDVkMjhiOTM1">https://docs.google.com/open?id=0B8qBHKNhZAipNTNkMzUxZDEtNjJmZi00YzY3LWI4MmYtY2RkZDVkMjhiOTM1</a>
<br>
<p>Best, Miro
<br>
------------------------------
<br>
Message: 10
<br>
Date: Tue, 24 Jan 2012 11:55:21 -0500
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] pure static &quot;mpirun&quot; launcher
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;A86D3721-9BF8-4A7D-B745-32E60652101F_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=windows-1252
<br>
<p>Ilias: Have you simply tried building Open MPI with flags that force static linking?  E.g., something like this:
<br>
<p>&nbsp;&nbsp;./configure --enable-static --disable-shared LDFLAGS=-Wl,-static
<br>
<p>I.e., put in LDFLAGS whatever flags your compiler/linker needs to force static linking.  These LDFLAGS will be applied to all of Open MPI's executables, including mpirun.
<br>
<p><p>On Jan 24, 2012, at 10:28 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Good point! I'm traveling this week with limited resources, but will try to address when able.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2012, at 7:07 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.01.2012 um 15:49 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm a little confused. Building procs static makes sense as libraries may not be available on compute nodes. However, mpirun is only executed in one place, usually the head node where it was built. So there is less reason to build it purely static.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you trying to move mpirun somewhere? Or is it the daemons that mpirun launches that are the real problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This depends: if you have a queuing system, the master node of a parallel job may be one of the slave nodes already where the jobscript runs. Nevertheless I have the nodes uniform, but I saw places where it wasn't the case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An option would be to have a special queue, which will execute the jobscript always on the headnode (i.e. without generating any load) and use only non-local granted slots for mpirun. For this it might be necssary to have a high number of slots on the headnode for this queue, and request always one slot on this machine in addition to the necessary ones on the computing node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2012, at 5:54 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear experts,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following <a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a> I successfully build static OpenMPI library.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using such prepared library I succeeded in building parallel static executable - dirac.x (ldd dirac.x-not a dynamic executable).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem remains, however,  with the mpirun (orterun) launcher.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While on the local machine, where I compiled both static OpenMPI &amp; static dirac.x  I am able to launch parallel job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;OpenMPI_static&gt;/mpirun -np 2 dirac.x ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can not lauch it elsewhere, because &quot;mpirun&quot; is dynamically linked, thus machine dependent:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ldd mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     linux-vdso.so.1 =&gt;  (0x00007fff13792000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f40f8cab000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007f40f8a93000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f40f888f000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f40f860d000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f40f83f1000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f40f806c000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /lib64/ld-linux-x86-64.so.2 (0x00007f40f8ecb000)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please how to I build &quot;pure&quot; static mpirun launcher, usable (in my case together with static dirac.x) also on other computers  ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, Miro
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RNDr. Miroslav Ilia?, PhD.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Katedra ch?mie
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fakulta pr?rodn?ch vied
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Univerzita Mateja Bela
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tajovsk?ho 40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 97400 Bansk? Bystrica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email : Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Chemistry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Faculty of Natural Sciences
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matej Bel University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tajovsk?ho 40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 97400 Banska Bystrica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Slovakia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email :  Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
------------------------------
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 2133, Issue 1
**************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18267.php">Victor Pomponiu: "[OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>Previous message:</strong> <a href="18265.php">George Bosilca: "Re: [OMPI users] Are the Messages delivered in order in the MPI?"</a>
<li><strong>Maybe in reply to:</strong> <a href="18249.php">Ilias Miroslav: "[OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Reply:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
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
