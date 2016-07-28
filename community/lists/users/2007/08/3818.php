<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 21:48:20 2007" -->
<!-- isoreceived="20070807014820" -->
<!-- sent="Mon, 6 Aug 2007 21:47:15 -0400" -->
<!-- isosent="20070807014715" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NAMD/Charm++ Looking for libmpich" -->
<!-- id="D3E858D7-B079-4B05-868C-526B95E05E30_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="16F3D671-0CAE-4580-8164-1A03DDA004C5_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 21:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3819.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3817.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3820.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3820.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have done work before to make namd and charm++ work with openMPI I  
<br>
dont remember what but it is doable.  Something like removing -lmpich  
<br>
was enough i think, maybe a hack to use mpiCC and -fPIC (pgi compilers).
<br>
<p>I could look more if you want.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Aug 6, 2007, at 8:12 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It looks like charm++ is looking for libmpich, which is not an Open
</span><br>
<span class="quotelev1">&gt; MPI library.  Is there a way to have charm++ look for Open MPI's
</span><br>
<span class="quotelev1">&gt; libraries, or better yet, use our wrapper compilers and not use any
</span><br>
<span class="quotelev1">&gt; hard-coded library names?  (you might need to ask the charm++ support
</span><br>
<span class="quotelev1">&gt; list?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=mpi-apps#general-build">http://www.open-mpi.org/faq/?category=mpi-apps#general-build</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 6, 2007, at 3:02 PM, Graham Jenkins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This iteme was originally sent to the NAMD mailing list, but it
</span><br>
<span class="quotelev2">&gt;&gt; occurred
</span><br>
<span class="quotelev2">&gt;&gt; to me that it's something you guys may ahve seen in another vein ..
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; may have a solution for ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build charm++ on a SL5 x86_64 machine on which the
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.1.1-5.el5.x86_64 RPM has been installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So here's the sequence:
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; cd charm-5.9
</span><br>
<span class="quotelev2">&gt;&gt; module load openmpi-intel
</span><br>
<span class="quotelev2">&gt;&gt; ./build charm++ mpi-linux-amd64 --libdir=/usr/lib64/openmpi \
</span><br>
<span class="quotelev2">&gt;&gt;                                 --incdir=/usr/include/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ..
</span><br>
<span class="quotelev2">&gt;&gt; cd tests/charm++/simplearrayhello
</span><br>
<span class="quotelev2">&gt;&gt;  make
</span><br>
<span class="quotelev2">&gt;&gt; ../../../bin/charmc  -language charm++ -o hello hello.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -lmpich
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bottom line .. charm++ doesn't know about libmpi, even though it
</span><br>
<span class="quotelev2">&gt;&gt; exists
</span><br>
<span class="quotelev2">&gt;&gt; thus:
</span><br>
<span class="quotelev2">&gt;&gt;   ls -1 /opt/sw/openmpi-1.2.3-i/lib/libmpi.??
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/sw/openmpi-1.2.3-i/lib/libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/sw/openmpi-1.2.3-i/lib/libmpi.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So .. anybody got a solution .. please?
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Graham Jenkins
</span><br>
<span class="quotelev2">&gt;&gt; Senior Software Specialist, E-Research
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Email: Graham.Jenkins_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Tel:   +613 9905-5942
</span><br>
<span class="quotelev2">&gt;&gt; Mob:   +614 4850-2491
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3819.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Previous message:</strong> <a href="3817.php">Glenn Carver: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>In reply to:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3820.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3820.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
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
