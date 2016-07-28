<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 21:01:02 2007" -->
<!-- isoreceived="20070125020102" -->
<!-- sent="Wed, 24 Jan 2007 21:00:51 -0500" -->
<!-- isosent="20070125020051" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc adds an inexitant directory in the include path." -->
<!-- id="34277E4C-D634-47CB-A122-A17590D476C4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F57C_at_webmail.imi.nrc.ca" -->
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
<strong>Date:</strong> 2007-01-24 21:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2543.php">Peter Kjellstrom: "[OMPI users] MPI comparison on openib"</a>
<li><strong>Previous message:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>In reply to:</strong> <a href="2538.php">Audet, Martin: "[OMPI users] mpicc adds an inexitant directory in the include path."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct -- disabling the C++ bindings caused that directory  
<br>
to not get created.
<br>
<p>I've committed a fix on the trunk.  Thanks!
<br>
<p><p>On Jan 24, 2007, at 1:47 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use sometimes OpenMPI and it looks like the mpicc wrapper gives  
</span><br>
<span class="quotelev1">&gt; gcc an inexistant directory with -I option. If I ask mpicc how it  
</span><br>
<span class="quotelev1">&gt; calls gcc it prints the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    [audet_at_linux15 libdfem]$ mpicc -show
</span><br>
<span class="quotelev1">&gt;    gcc -I/usr/local/openmpi-1.1.2/include -I/usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.2/include/openmpi -pthread -L/usr/local/openmpi-1.1.2/ 
</span><br>
<span class="quotelev1">&gt; lib -lmpi -lorte -lopal -ldl -Wl,--export-dynamic -lnsl -lutil -lm - 
</span><br>
<span class="quotelev1">&gt; ldl
</span><br>
<span class="quotelev1">&gt;    [audet_at_linux15 libdfem]$ ls /usr/local/openmpi-1.1.2/include / 
</span><br>
<span class="quotelev1">&gt; usr/local/openmpi-1.1.2/include/openmpi
</span><br>
<span class="quotelev1">&gt;    ls: /usr/local/openmpi-1.1.2/include/openmpi: No such file or  
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;    /usr/local/openmpi-1.1.2/include:
</span><br>
<span class="quotelev1">&gt;    mpi.h  mpif-common.h  mpif-config.h  mpif.h
</span><br>
<span class="quotelev1">&gt;    [audet_at_linux15 libdfem]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The directory 'usr/local/openmpi-1.1.2/include/openmpi' doesn't  
</span><br>
<span class="quotelev1">&gt; exist. And this explains the annoying warnings I get when I compile  
</span><br>
<span class="quotelev1">&gt; my sources (I like to have no warning):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    cc1plus: warning: /usr/local/openmpi-1.1.2/include/openmpi: No  
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens with OpenMPI 1.1.2 configured as follow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure --prefix=/usr/local/openmpi-1.1.2 --disable-mpi-f90  
</span><br>
<span class="quotelev1">&gt; --disable-mpi-cxx --disable-cxx-exceptions   --with-io-romio- 
</span><br>
<span class="quotelev1">&gt; flags=--with-file-system=ufs+nfs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin Audet
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2543.php">Peter Kjellstrom: "[OMPI users] MPI comparison on openib"</a>
<li><strong>Previous message:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>In reply to:</strong> <a href="2538.php">Audet, Martin: "[OMPI users] mpicc adds an inexitant directory in the include path."</a>
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
