<?
$subject_val = "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 17:23:06 2009" -->
<!-- isoreceived="20090624212306" -->
<!-- sent="Wed, 24 Jun 2009 17:22:56 -0400" -->
<!-- isosent="20090624212256" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband" -->
<!-- id="4A429930.60109_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18B660E4699E430FB2EBC8A1C73EDBD9_at_inspiron9100" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 17:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim
<br>
<p><p>Jim Kress wrote:
<br>
<span class="quotelev1"> &gt; Noam, Gus and List,
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Did you statically link your openmpi when you built it?  If you did (the
</span><br>
<span class="quotelev1"> &gt; default is NOT to do this) then that could explain the discrepancy.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Jim
</span><br>
<p>No, I didn't link statically.
<br>
<p>Did you link statically?
<br>
<p>Actually, I tried to do it, and it didn't work.
<br>
I wouldn't get OpenMPI with IB if I tried to
<br>
link statically (i.e. by passing -static or equivalent to CFLAGS, 
<br>
FFLAGS, etc).
<br>
When I removed the &quot;-static&quot; I got OpenMPI with IB.
<br>
I always dump the configure output (and the make output, etc) to
<br>
log files to check these things out after it is done.
<br>
I really suggest you do this, it pays off, saves time, costs nothing.
<br>
I don't remember exactly what symptoms I found on the log,
<br>
whether the log definitely said that there was no IB support,
<br>
or if it didn't have the right flags (-libverbs, etc) like yours.
<br>
However, when I suppressed the &quot;-static&quot; from the compiler flags
<br>
then I've got all the IB goodies!  :)
<br>
<p>Here is how I run configure (CFLAGS etc only have optimization flags,
<br>
no &quot;-static&quot;):
<br>
<p>./configure \
<br>
--prefix=/my/directory \
<br>
--with-libnuma=/usr \
<br>
--with-tm=/usr \
<br>
--with-openib=/usr \
<br>
--enable-static \
<br>
2&gt;&amp;1 configure.log
<br>
<p>Note, &quot;--enable-static&quot; means OpenMPI will build static libraries 
<br>
(besides the shared ones).
<br>
OpenMPI is not being linked statically to system libraries,
<br>
or to IB libraries, etc.
<br>
<p>Some switches may not be needed,
<br>
in particularly the explicit use of /usr directory.
<br>
However, at some point the OpenMPI configure
<br>
would not work without being
<br>
told this (at least for libnuma).
<br>
<p>BTW, I didn't claim your OpenMPI doesn't have IB support.
<br>
Not a categorical syllogism like
<br>
&quot;you don't have the -libverbs flag, hence you don't have IB&quot;.
<br>
It is hard to make definitive statements like this
<br>
in a complex environment like this (OpenMPI build, parallel programs),
<br>
and with limited information via email.
<br>
After all, the list is peer reviewed! :)
<br>
Hence, I only guessed, as I usually do in these exchanges.
<br>
However, considering all the trouble you've been through, who knows,
<br>
maybe it was a guess in the right direction.
<br>
<p>I wonder if there may still be a glitch in the OpenMPI configure
<br>
script, on how it searches for and uses libraries like IB, NUMA, etc,
<br>
which may be causing the problem.
<br>
Jeff:  Is this possible?
<br>
<p>In any case, we have different &quot;Wrapper extra LIBS&quot;.
<br>
I have -lrdmacm -libverbs, you and Noam don't have them.
<br>
(Noam: I am not saying you don't have IB support!  :))
<br>
My configure explicitly asks for ib support, Noam's (and maybe yours) 
<br>
doesn't.
<br>
Somehow, slight differences in how one invokes
<br>
the configure script seems to produce different results.
<br>
<p>I hope this helps,
<br>
Gus Correa
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 24, 2009 9:38 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] 50% performance reduction due to 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead 
</span><br>
<span class="quotelev2">&gt;&gt; of using Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 23, 2009, at 6:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jim, list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On my OpenMPI 1.3.2 ompi_info -config gives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -lnuma -ldl -Wl,-- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yours doesn't seem to have the IB libraries: -lrdmacm -libverbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I would guess your OpenMPI 1.3.2 build doesn't have IB support.
</span><br>
<span class="quotelev2">&gt;&gt; The second of these statements doesn't follow from the first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My &quot;ompi_info -config&quot; returns
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info -config | grep LIBS
</span><br>
<span class="quotelev2">&gt;&gt;                Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt;&gt;        Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic 
</span><br>
<span class="quotelev2">&gt;&gt; -lnsl -lutil - 
</span><br>
<span class="quotelev2">&gt;&gt; lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it does have openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info | grep openib
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: openib (MCA v2.0, API v2.0, 
</span><br>
<span class="quotelev2">&gt;&gt; Component v1.3.2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and osu_bibw returns
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Bi-Directional Bandwidth Test v3.0
</span><br>
<span class="quotelev2">&gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 4194304                1717.43
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which it's sure not getting over ethernet.  I think Jeff 
</span><br>
<span class="quotelev2">&gt;&gt; Squyres' test (ompi_info | grep openib) must be more definitive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 								
</span><br>
<span class="quotelev2">&gt;&gt; 		Noam
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9700.php">Noam Bernstein: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9699.php">Jim Kress: "Re: [OMPI users] 50% performance reduction due to OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
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
