<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 21:11:34 2007" -->
<!-- isoreceived="20070502011134" -->
<!-- sent="Tue, 1 May 2007 18:11:26 -0700 (PDT)" -->
<!-- isosent="20070502011126" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="[OMPI users] Alpha system &amp;amp; OpenMPI 1.2.1 does not work..." -->
<!-- id="589235.55179.qm_at_web33305.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rob (<em>spamrefuse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 21:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Previous message:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Maybe reply:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Reply:</strong> <a href="3210.php">Jeff Squyres: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A few emails back I reported that I could build
<br>
openmpi on Alpha system (except the static libraries).
<br>
However, it seems that the built result is unusable.
<br>
With every simple program (even non-mpi) I compile,
<br>
I get:
<br>
<p>&nbsp;&nbsp;$ mpicc myprog.c --showme:version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc: Open MPI 1.2.1 (Language: C)
<br>
<p>&nbsp;&nbsp;$ mpicc myprog.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc: dummy: No such file or directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc: ranlib: No such file or directory
<br>
<p>&nbsp;&nbsp;$ mpicc myprog.c --showme
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/gcc/bin/gcc -I/opt/openmpi/include/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I/opt/openmpi/include -pthread -mfp-trap-mode=su
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myprog.c -L/opt/openmpi/lib -lmpi -lopen-rte
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-lopen-pal -ldl dummy ranlib
<br>
<p>(Note: the &quot;-mfp-trap-mode=su&quot; prevents a runtime
<br>
SIGSEGV crash with GNU compiler on Alpha system)
<br>
<p>&nbsp;&nbsp;$ mpicc myprog.c --showme:link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-pthread -mfp-trap-mode=su myprog.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/opt/openmpi/lib -lmpi -lopen-rte -lopen-pal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-ldl dummy ranlib
<br>
<p>What is the &quot;dummy&quot; and &quot;ranlib&quot; doing here?
<br>
<p>I'm now trying the nightly build from SVN
<br>
(version 1.3a1r14551), but I'm afraid that Alpha
<br>
support is still not there.....if that's the case,
<br>
is there any chance to fix openmpi for Alpha?
<br>
<p>My OS is CentOS 4.4
<br>
(the equivalent of RedHat Enterprise Edition 4).
<br>
Hence, my packages are not so up-to-date versions:
<br>
<p>autoconf-2.59-5
<br>
automake15-1.5-13
<br>
automake-1.9.2-3
<br>
automake14-1.4p6-12
<br>
automake17-1.7.9-5
<br>
automake16-1.6.3-5
<br>
libtool-1.5.6-4.EL4.1.c4.2
<br>
libtool-libs-1.5.6-4.EL4.1.c4.2
<br>
flex-2.5.4a-33
<br>
(what else is essential to build OpenMpi?)
<br>
<p><p>Any ideas what to do?
<br>
<p>Thanks,
<br>
Rob.
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Previous message:</strong> <a href="3172.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Maybe reply:</strong> <a href="3174.php">Rob: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Reply:</strong> <a href="3210.php">Jeff Squyres: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
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
