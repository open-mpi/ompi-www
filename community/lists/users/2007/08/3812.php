<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 17:02:42 2007" -->
<!-- isoreceived="20070806210242" -->
<!-- sent="Tue, 07 Aug 2007 07:02:36 +1000" -->
<!-- isosent="20070806210236" -->
<!-- name="Graham Jenkins" -->
<!-- email="Graham.Jenkins_at_[hidden]" -->
<!-- subject="[OMPI users] NAMD/Charm++ Looking for libmpich" -->
<!-- id="46B78C6C.6000108_at_its.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Graham Jenkins (<em>Graham.Jenkins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 17:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3811.php">Ralph H Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This iteme was originally sent to the NAMD mailing list, but it occurred
<br>
to me that it's something you guys may ahve seen in another vein .. and
<br>
may have a solution for ..
<br>
<p>I'm trying to build charm++ on a SL5 x86_64 machine on which the
<br>
openmpi-1.1.1-5.el5.x86_64 RPM has been installed.
<br>
<p>So here's the sequence:
<br>
<pre>
--
cd charm-5.9
module load openmpi-intel
./build charm++ mpi-linux-amd64 --libdir=/usr/lib64/openmpi \
                                --incdir=/usr/include/openmpi
 ..
cd tests/charm++/simplearrayhello
 make
../../../bin/charmc  -language charm++ -o hello hello.o
/usr/bin/ld: cannot find -lmpich
collect2: ld returned 1 exit status
--
Bottom line .. charm++ doesn't know about libmpi, even though it exists
thus:
  ls -1 /opt/sw/openmpi-1.2.3-i/lib/libmpi.??
    /opt/sw/openmpi-1.2.3-i/lib/libmpi.la
    /opt/sw/openmpi-1.2.3-i/lib/libmpi.so
So .. anybody got a solution .. please?
-- 
Graham Jenkins
Senior Software Specialist, E-Research
Email: Graham.Jenkins_at_[hidden]
Tel:   +613 9905-5942
Mob:   +614 4850-2491
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3813.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3811.php">Ralph H Castain: "Re: [OMPI users] memory leaks on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
<li><strong>Reply:</strong> <a href="3815.php">Jeff Squyres: "Re: [OMPI users] NAMD/Charm++ Looking for libmpich"</a>
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
