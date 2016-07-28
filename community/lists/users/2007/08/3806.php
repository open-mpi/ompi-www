<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug  5 16:42:04 2007" -->
<!-- isoreceived="20070805204204" -->
<!-- sent="Sun, 5 Aug 2007 21:41:58 +0100" -->
<!-- isosent="20070805204158" -->
<!-- name="Luke Hur" -->
<!-- email="sgh36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system" -->
<!-- id="8d0a3eab0708051341i46025e73k911ffdd221c49ad7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5453C030-B7C9-48E1-BBA7-F04BCC43C9CB_at_cisco.com" -->
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
<strong>From:</strong> Luke Hur (<em>sgh36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-05 16:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3807.php">Glenn Carver: "[OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>In reply to:</strong> <a href="3795.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Reply:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there!
<br>
<p>I have just installed torque and openmpi and trying to make them work.
<br>
I ran ./configure --with-tm=/usr/local for openmpi and torque integration.
<br>
But when I run &quot;mpirun -H node2 hello&quot; on &quot;node1&quot;, it asks the password of
<br>
node2.
<br>
And when I typed the password, eventually it tells below error message.
<br>
<p>mpirun: forcibly killing job...
<br>
[node1:19854] ERROR: A daemon on node blade2--escience failed to start as
<br>
expected.
<br>
[node1:19854] ERROR: There may be more information available from
<br>
[node1:19854] ERROR: the remote shell (see above).
<br>
[node1:19854] The daemon received a signal 2.
<br>
<p>What is the problem?
<br>
Please help!
<br>
Luke
<br>
<p><p><p>On 02/08/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2007, at 11:38 AM, S.Sundar Raman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; dear openmpi users,
</span><br>
<span class="quotelev2">&gt; &gt; i m trying to compile openmpi with pgf90 compiler in AMD opteron
</span><br>
<span class="quotelev2">&gt; &gt; system.
</span><br>
<span class="quotelev2">&gt; &gt; i followed the procedure given in the mailer archives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What procedure are you referring to, specifically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i found the following problem.
</span><br>
<span class="quotelev2">&gt; &gt; please kindly help me in this regard and i m eagerly waiting for
</span><br>
<span class="quotelev2">&gt; &gt; your reply
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory `/usr/local/openmpi-1.2.3/ompi/mpi/f90'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool --mode=link pgf90 -I../../../ompi/include -
</span><br>
<span class="quotelev2">&gt; &gt; I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90 -export-
</span><br>
<span class="quotelev2">&gt; &gt; dynamic -o libmpi_f90.la -rpath /usr/local/mpi/lib mpi.lo
</span><br>
<span class="quotelev2">&gt; &gt; mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo
</span><br>
<span class="quotelev2">&gt; &gt; mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo
</span><br>
<span class="quotelev2">&gt; &gt; mpi_wtick_f90.lo mpi_wtime_f90.lo -lnsl -lutil -lm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: pgf90 -shared -fPIC -Mnomain .libs/mpi.o .libs/
</span><br>
<span class="quotelev2">&gt; &gt; mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/
</span><br>
<span class="quotelev2">&gt; &gt; mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/
</span><br>
<span class="quotelev2">&gt; &gt; mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/
</span><br>
<span class="quotelev2">&gt; &gt; mpi_wtick_f90.o .libs/mpi_wtime_f90.o -lnsl -lutil -lm -Wl,-soname -
</span><br>
<span class="quotelev2">&gt; &gt; Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/bin/ld: .libs/mpi.o: relocation R_X86_64_PC32 against
</span><br>
<span class="quotelev2">&gt; &gt; `__pgio_ini' can not be used when making a shared object; recompile
</span><br>
<span class="quotelev2">&gt; &gt; with -fPIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can usually compile with the PGI compilers without needing to do
</span><br>
<span class="quotelev1">&gt; anything special (PGI v6.2-5 and 7.0-2), although I usually do add
</span><br>
<span class="quotelev1">&gt; the following option to configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        --with-wrapper-cxxflags=-fPIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This puts &quot;-fPIC&quot; in the flags that the mpiCC wrapper compiler will
</span><br>
<span class="quotelev1">&gt; automatically insert when compiling MPI C++ applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3807.php">Glenn Carver: "[OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3805.php">Glenn Carver: "Re: [OMPI users] values of mca parameters whilst running program"</a>
<li><strong>In reply to:</strong> <a href="3795.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>Reply:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
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
