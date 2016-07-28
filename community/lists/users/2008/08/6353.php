<?
$subject_val = "Re: [OMPI users] SM btl slows down bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 15:32:27 2008" -->
<!-- isoreceived="20080815193227" -->
<!-- sent="Fri, 15 Aug 2008 15:32:18 -0400" -->
<!-- isosent="20080815193218" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SM btl slows down bandwidth?" -->
<!-- id="48A5D9C2.7070004_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220808150908t62818a21k32c49b9b6f07dca_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SM btl slows down bandwidth?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-15 15:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6354.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6352.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6346.php">Tim Mattox: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tim and list
<br>
<p>Having been listening and participating on this interesting thread from 
<br>
the very beginning,
<br>
I would like to add another two cents.
<br>
<p>I don't oppose moving the specific discussion of OpenMPI memcpy 
<br>
implementation to the developers' list. 
<br>
I am not a developer (or qualified to be one) and I don't subscribe to 
<br>
the developers' list,
<br>
but I would subscribe just to follow this thread.
<br>
<p>However, I have the feeling that the general question originally posed 
<br>
by Daniel Mantione
<br>
(why his programs ran faster under Infiniband than under shared memory)
<br>
has an interest of its own which goes beyond the developers community.
<br>
<p>Just like Daniel and many others, I have seen some disappointing 
<br>
performance of MPI code on multicore machines,
<br>
in code that scales fine in networked environments and single core CPUs,
<br>
particularly in memory-intensive programs.
<br>
The bad performance has been variously ascribed to memory bandwidth / 
<br>
contention,
<br>
to  setting processor and memory affinity versus letting the kernel 
<br>
scheduler do its thing,
<br>
to poor performance of memcpy, and so on.
<br>
<p>All these reasons are interconnected, but it is hard for a simple MPI 
<br>
user to nail down where the
<br>
difficultly really resides, and even more to fix or attenuate the problem.
<br>
Hence, the discussion is very useful for mere users like me.
<br>
<p>I've seen the discussion of this same issue popping up in several 
<br>
mailing lists
<br>
(Beowulf, Rocks Clusters, MPICH, MITgcm, etc),
<br>
On the MPICH list the very same inefficiency of memcpy was blamed as a 
<br>
possible culprit.
<br>
There were suggestions on the MPICH list that simply using  Intel icc 
<br>
instead of gcc
<br>
to compile the MPI library would  improve the situation (due to 
<br>
different implementations of memcpy).
<br>
<p>It would be great if the OpenMPI developers could shed some light on 
<br>
this general issue,
<br>
and perhaps continue here on the users' list the general part of this 
<br>
discussion,
<br>
which is in essence how to handle OpenMPI efficiently in a shared memory 
<br>
multi-core environment.
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Tim Mattox wrote:
&gt;Hi Terry (and others),
&gt;I have previously explored this some on Linux/X86-64 and concluded that
&gt;Open MPI needs to supply it's own memcpy routine to get good sm performance,
&gt;since the memcpy supplied by glibc is not even close to optimal.
&gt;We have an unused MCA framework already set up to supply an opal_memcpy.
&gt;AFAIK, George and Brian did the original work to set up that framework.
&gt;It has been on my to-do list for awhile to start implementing
&gt;opal_memcpy components
&gt;for the architectures I have access to, and to modify OMPI to actually
&gt;use opal_memcpy
&gt;where ti makes sense.  Terry, I presume what you suggest could
&gt;be dealt with similarly when we are running/building on SPARC.
&gt;
&gt;Any followup discussion on this should probably happen on the
&gt;developer mailing list.
&gt;
&gt;On Thu, Aug 14, 2008 at 12:19 PM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
&gt;  
&gt;
&gt;&gt;Interestingly enough on the SPARC platform the Solaris memcpy's actually use
&gt;&gt;non-temporal stores for copies &gt;= 64KB.  By default some of the mca
&gt;&gt;parameters to the sm BTL stop at 32KB.  I've done experimentations of
&gt;&gt;bumping the sm segment sizes to above 64K and seen incredible speedup on our
&gt;&gt;M9000 platforms.  I am looking for some nice way to integrate a memcpy that
&gt;&gt;lowers this boundary to 32KB or lower into Open MPI.
&gt;&gt;I have not looked into whether Solaris x86/x64 memcpy's use the non-temporal
&gt;&gt;stores or not.
&gt;&gt;
&gt;&gt;--td
&gt;&gt;    
&gt;&gt;
&gt;&gt;&gt;Message: 1
&gt;&gt;&gt;Date: Thu, 14 Aug 2008 09:28:59 -0400
&gt;&gt;&gt;From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt;Subject: Re: [OMPI users] SM btl slows down bandwidth?
&gt;&gt;&gt;To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt;&gt;Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
&gt;&gt;&gt;Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
&gt;&gt;&gt;
&gt;&gt;&gt;At this time, we are not using non-temporal stores for shared memory
&gt;&gt;&gt; operations.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;[...]
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;&gt;MPICH2 manages to get about 5GB/s in shared memory performance on the
&gt;&gt;&gt;&gt;&gt;&gt;&gt;Xeon 5420 system.
&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Does the sm btl use a memcpy with non-temporal stores like MPICH2?
&gt;&gt;&gt;&gt;&gt;This can be a big win for bandwidth benchmarks that don't actually
&gt;&gt;&gt;&gt;&gt;touch their receive buffers at all...
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;-Ron
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;_______________________________________________
&gt;&gt;&gt;&gt;&gt;users mailing list
&gt;&gt;&gt;&gt;&gt;users_at_[hidden]
&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt;          
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;-- Jeff Squyres Cisco Systems
&gt;&gt;&gt;      
&gt;&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;    
&gt;&gt;
&gt;
&gt;
&gt;
&gt;  
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6354.php">Jeff Squyres: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6352.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6346.php">Tim Mattox: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
<li><strong>Reply:</strong> <a href="6362.php">Jeff Squyres: "Re: [OMPI users] SM btl slows down bandwidth?"</a>
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
