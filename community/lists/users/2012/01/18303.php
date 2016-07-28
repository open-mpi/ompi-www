<?
$subject_val = "Re: [OMPI users] pure static &quot;mpirun&quot; launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 13:44:54 2012" -->
<!-- isoreceived="20120127184454" -->
<!-- sent="Fri, 27 Jan 2012 13:44:49 -0500" -->
<!-- isosent="20120127184449" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pure static &amp;quot;mpirun&amp;quot; launcher" -->
<!-- id="BE6DBE92-784C-4594-8F4A-397A19C55EEA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C98836B5-FD91-4B96-BEBF-4C03554F0E53_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 13:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Previous message:</strong> <a href="18302.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah ha, I think I got it.  There was actually a bug about disabling the memory manager in trunk/v1.5.x/v1.4.x.  I fixed it on the trunk and scheduled it for v1.6 (since we're trying very hard to get v1.5.5 out the door) and v1.4.5.
<br>
<p>On the OMPI trunk on RHEL 5 with gcc 4.4.6, I can do this:
<br>
<p>./configure --without-memory-manager LDFLAGS=--static --disable-shared --enable-static
<br>
<p>And get a fully static set of OMPI executables.  For example:
<br>
<p>-----
<br>
[10:41] svbu-mpi:~ % cd $prefix/bin
<br>
[10:41] svbu-mpi:/home/jsquyres/bogus/bin % ldd *
<br>
mpic++:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpicc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpiCC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpicxx:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpiexec:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpif77:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpif90:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
mpirun:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ompi-clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ompi_info:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ompi-ps:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ompi-server:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ompi-top:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
opal_wrapper:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ortec++:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
ortecc:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orteCC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orte-clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orted:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orte-info:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orte-ps:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orterun:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
orte-top:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not a dynamic executable
<br>
-----
<br>
<p>So I think the answer here is: it depends on a few factors:
<br>
<p>1. Need that bug fix that I just committed.
<br>
2. Libtool is stripping out -static (and/or --static?).  So you have to find some other flags to make your compiler/linker do static.
<br>
3. Your OS has to support static builds.  For example, RHEL6 doesn't install libc.a by default (it's apparently on the optional DVD, which I don't have).  My RHEL 5.5 install does have it, though.
<br>
<p><p>On Jan 27, 2012, at 11:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I've tried a bunch of variations on this, but I'm actually getting stymied by my underlying OS not supporting static linking properly.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do see that Libtool is stripping out the &quot;-static&quot; standalone flag that you passed into LDFLAGS.  Yuck.  What's -Wl,-E?  Can you try &quot;-Wl,-static&quot; instead?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2012, at 1:24 AM, Ilias Miroslav wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I need own static &quot;mpirun&quot; for porting (together with the static executable) onto various (unknown) grid servers. In grid computing one can not expect OpenMPI-ILP64 installtion on each computing element. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff: I tried LDFLAGS in configure
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ilias_at_194.160.135.47:~/bin/ompi-ilp64_full_static/openmpi-1.4.4/../configure --prefix=/home/ilias/bin/ompi-ilp64_full_static -without-memory-manager --without-libnuma --enable-static --disable-shared CXX=g++ CC=gcc F77=gfortran FC=gfortran FFLAGS=&quot;-m64 -fdefault-integer-8 -static&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8 -static&quot; CFLAGS=&quot;-m64 -static&quot; CXXFLAGS=&quot;-m64 -static&quot;  LDFLAGS=&quot;-static  -Wl,-E&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; but still got dynamic, not static &quot;mpirun&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; ilias_at_194.160.135.47:~/bin/ompi-ilp64_full_static/bin/.ldd ./mpirun
</span><br>
<span class="quotelev2">&gt;&gt; 	linux-vdso.so.1 =&gt;  (0x00007fff6090c000)
</span><br>
<span class="quotelev2">&gt;&gt; 	libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007fd7277cf000)
</span><br>
<span class="quotelev2">&gt;&gt; 	libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007fd7275b7000)
</span><br>
<span class="quotelev2">&gt;&gt; 	libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007fd7273b3000)
</span><br>
<span class="quotelev2">&gt;&gt; 	libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007fd727131000)
</span><br>
<span class="quotelev2">&gt;&gt; 	libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007fd726f15000)
</span><br>
<span class="quotelev2">&gt;&gt; 	libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007fd726b90000)
</span><br>
<span class="quotelev2">&gt;&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007fd7279ef000)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help please ? config.log is here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://docs.google.com/open?id=0B8qBHKNhZAipNTNkMzUxZDEtNjJmZi00YzY3LWI4MmYtY2RkZDVkMjhiOTM1">https://docs.google.com/open?id=0B8qBHKNhZAipNTNkMzUxZDEtNjJmZi00YzY3LWI4MmYtY2RkZDVkMjhiOTM1</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best, Miro
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Message: 10
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 24 Jan 2012 11:55:21 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] pure static &quot;mpirun&quot; launcher
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;A86D3721-9BF8-4A7D-B745-32E60652101F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ilias: Have you simply tried building Open MPI with flags that force static linking?  E.g., something like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-static --disable-shared LDFLAGS=-Wl,-static
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I.e., put in LDFLAGS whatever flags your compiler/linker needs to force static linking.  These LDFLAGS will be applied to all of Open MPI's executables, including mpirun.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 24, 2012, at 10:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good point! I'm traveling this week with limited resources, but will try to address when able.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2012, at 7:07 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 24.01.2012 um 15:49 schrieb Ralph Castain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm a little confused. Building procs static makes sense as libraries may not be available on compute nodes. However, mpirun is only executed in one place, usually the head node where it was built. So there is less reason to build it purely static.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you trying to move mpirun somewhere? Or is it the daemons that mpirun launches that are the real problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This depends: if you have a queuing system, the master node of a parallel job may be one of the slave nodes already where the jobscript runs. Nevertheless I have the nodes uniform, but I saw places where it wasn't the case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An option would be to have a special queue, which will execute the jobscript always on the headnode (i.e. without generating any load) and use only non-local granted slots for mpirun. For this it might be necssary to have a high number of slots on the headnode for this queue, and request always one slot on this machine in addition to the necessary ones on the computing node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 24, 2012, at 5:54 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dear experts,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; following <a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a> I successfully build static OpenMPI library.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Using such prepared library I succeeded in building parallel static executable - dirac.x (ldd dirac.x-not a dynamic executable).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The problem remains, however,  with the mpirun (orterun) launcher.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; While on the local machine, where I compiled both static OpenMPI &amp; static dirac.x  I am able to launch parallel job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;OpenMPI_static&gt;/mpirun -np 2 dirac.x ,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can not lauch it elsewhere, because &quot;mpirun&quot; is dynamically linked, thus machine dependent:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ldd mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   linux-vdso.so.1 =&gt;  (0x00007fff13792000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f40f8cab000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007f40f8a93000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f40f888f000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f40f860d000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f40f83f1000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f40f806c000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   /lib64/ld-linux-x86-64.so.2 (0x00007f40f8ecb000)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please how to I build &quot;pure&quot; static mpirun launcher, usable (in my case together with static dirac.x) also on other computers  ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks, Miro
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; RNDr. Miroslav Ilia?, PhD.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Katedra ch?mie
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fakulta pr?rodn?ch vied
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Univerzita Mateja Bela
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tajovsk?ho 40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 97400 Bansk? Bystrica
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; email : Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Department of Chemistry
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Faculty of Natural Sciences
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Matej Bel University
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tajovsk?ho 40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 97400 Banska Bystrica
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Slovakia
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; email :  Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 2133, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Previous message:</strong> <a href="18302.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
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
