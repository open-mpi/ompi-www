<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 20:08:55 2007" -->
<!-- isoreceived="20070807000855" -->
<!-- sent="Mon, 6 Aug 2007 18:08:40 -0600" -->
<!-- isosent="20070807000840" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system" -->
<!-- id="7FC43D2D-6E44-4216-B29A-16891EFFE9C6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8d0a3eab0708051341i46025e73k911ffdd221c49ad7_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 20:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this a different problem than issues with pgf90 in an AMD opteron  
<br>
system?
<br>
<p>If so, please a) use a different subject line (and/or don't reply to  
<br>
other posts -- makes it much less confusing when the subject actually  
<br>
matches the body ;-) ), and b) supply all the information requested  
<br>
here: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks.
<br>
<p><p>On Aug 5, 2007, at 2:41 PM, Luke Hur wrote:
<br>
<p><span class="quotelev1">&gt; Hi there!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just installed torque and openmpi and trying to make them work.
</span><br>
<span class="quotelev1">&gt; I ran ./configure --with-tm=/usr/local for openmpi and torque  
</span><br>
<span class="quotelev1">&gt; integration.
</span><br>
<span class="quotelev1">&gt; But when I run &quot;mpirun -H node2 hello&quot; on &quot;node1&quot;, it asks the  
</span><br>
<span class="quotelev1">&gt; password of node2.
</span><br>
<span class="quotelev1">&gt; And when I typed the password, eventually it tells below error  
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun: forcibly killing job...
</span><br>
<span class="quotelev1">&gt; [node1:19854] ERROR: A daemon on node blade2--escience failed to  
</span><br>
<span class="quotelev1">&gt; start as expected.
</span><br>
<span class="quotelev1">&gt; [node1:19854] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [node1:19854] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [node1:19854] The daemon received a signal 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the problem?
</span><br>
<span class="quotelev1">&gt; Please help!
</span><br>
<span class="quotelev1">&gt; Luke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/08/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Aug 1,  
</span><br>
<span class="quotelev1">&gt; 2007, at 11:38 AM, S.Sundar Raman wrote:
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
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3806.php">Luke Hur: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
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
