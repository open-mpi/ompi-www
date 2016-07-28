<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 20:13:02 2007" -->
<!-- isoreceived="20070807001302" -->
<!-- sent="Mon, 6 Aug 2007 18:12:51 -0600" -->
<!-- isosent="20070807001251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] NAMD/Charm++ Looking for libmpich" -->
<!-- id="16F3D671-0CAE-4580-8164-1A03DDA004C5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46B78C6C.6000108_at_its.monash.edu.au" -->
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
<strong>Date:</strong> 2007-08-06 20:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3816.php">Ralph Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Graham Jenkins: "[OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3818.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3818.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3819.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like charm++ is looking for libmpich, which is not an Open  
<br>
MPI library.  Is there a way to have charm++ look for Open MPI's  
<br>
libraries, or better yet, use our wrapper compilers and not use any  
<br>
hard-coded library names?  (you might need to ask the charm++ support  
<br>
list?)
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=mpi-apps#general-build">http://www.open-mpi.org/faq/?category=mpi-apps#general-build</a>.
<br>
<p><p>On Aug 6, 2007, at 3:02 PM, Graham Jenkins wrote:
<br>
<p><span class="quotelev1">&gt; This iteme was originally sent to the NAMD mailing list, but it  
</span><br>
<span class="quotelev1">&gt; occurred
</span><br>
<span class="quotelev1">&gt; to me that it's something you guys may ahve seen in another vein ..  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; may have a solution for ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build charm++ on a SL5 x86_64 machine on which the
</span><br>
<span class="quotelev1">&gt; openmpi-1.1.1-5.el5.x86_64 RPM has been installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So here's the sequence:
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; cd charm-5.9
</span><br>
<span class="quotelev1">&gt; module load openmpi-intel
</span><br>
<span class="quotelev1">&gt; ./build charm++ mpi-linux-amd64 --libdir=/usr/lib64/openmpi \
</span><br>
<span class="quotelev1">&gt;                                 --incdir=/usr/include/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ..
</span><br>
<span class="quotelev1">&gt; cd tests/charm++/simplearrayhello
</span><br>
<span class="quotelev1">&gt;  make
</span><br>
<span class="quotelev1">&gt; ../../../bin/charmc  -language charm++ -o hello hello.o
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpich
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bottom line .. charm++ doesn't know about libmpi, even though it  
</span><br>
<span class="quotelev1">&gt; exists
</span><br>
<span class="quotelev1">&gt; thus:
</span><br>
<span class="quotelev1">&gt;   ls -1 /opt/sw/openmpi-1.2.3-i/lib/libmpi.??
</span><br>
<span class="quotelev1">&gt;     /opt/sw/openmpi-1.2.3-i/lib/libmpi.la
</span><br>
<span class="quotelev1">&gt;     /opt/sw/openmpi-1.2.3-i/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So .. anybody got a solution .. please?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Graham Jenkins
</span><br>
<span class="quotelev1">&gt; Senior Software Specialist, E-Research
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Email: Graham.Jenkins_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel:   +613 9905-5942
</span><br>
<span class="quotelev1">&gt; Mob:   +614 4850-2491
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
<li><strong>Next message:</strong> <a href="3816.php">Ralph Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>In reply to:</strong> <a href="3812.php">Graham Jenkins: "[OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3818.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3818.php">Brock Palen: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3819.php">Graham Jenkins: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
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
