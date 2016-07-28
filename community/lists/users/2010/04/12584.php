<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 12:42:21 2010" -->
<!-- isoreceived="20100407164221" -->
<!-- sent="Wed, 07 Apr 2010 12:42:11 -0400" -->
<!-- isosent="20100407164211" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="4BBCB5E3.1020306_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF8707C294_at_HVXMSPA.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to reduce 3D array<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 12:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12585.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Derek
<br>
<p>Cole, Derek E wrote:
<br>
<span class="quotelev1">&gt; Thanks for the ideas. 
</span><br>
<span class="quotelev1">&gt; I did finally end up getting this working by sending back to 
</span><br>
<span class="quotelev1">&gt; the master process. It's quite ugly, and added a good bit of 
</span><br>
<span class="quotelev1">&gt; MPI to the code, but it works for now, 
</span><br>
<span class="quotelev1">&gt; and I will revisit this later.
</span><br>
Is the MPI code uglier than the OO-stuff you mentioned before? :)
<br>
<p>That you parallelized the code is an accomplishment anyway.
<br>
Maybe &quot;It works&quot; is the first level of astonishment and
<br>
reward one can get from programming, particularly in MPI! :)
<br>
Unfortunately, &quot;It is efficient&quot;, &quot;It is portable&quot;,
<br>
&quot;It is easy to change and maintain&quot;, etc, seem to come later,
<br>
at least in real world conditions.
<br>
(OK, throw me eggs and tomatoes ...)
<br>
<p>However, your quick description suggests that you cared about the
<br>
other items too, using MPI types to make the code more elegant and 
<br>
efficient, for instance.
<br>
<p>In principle I agree with another posting
<br>
(I can't find it now) that advocated careful code design,
<br>
from scratch, with a parallel algorithm in mind,
<br>
and, whenever possible, taking advantage of quality libraries built
<br>
on top of MPI (e.g. PETSc).
<br>
<p>However, most of the time we are patching and refurbishing
<br>
existing code, particularly when it comes parallelization
<br>
(with MPI, OpenMP or other).
<br>
At least this is the reality I see in our area here (Earth Sciences).
<br>
<p>I would guess in other areas of engineering it is the same.
<br>
Most of the time architects are dealing with building maintenance,
<br>
then sometimes with building reform, but only rarely they work on the
<br>
design of a new building, or not?
<br>
<p><span class="quotelev1">&gt; I am not sure what the file system is, 
</span><br>
<span class="quotelev1">&gt; I think it is XFS, but I don't know much about why this 
</span><br>
<span class="quotelev1">&gt; has an effect on the output - just the way files can be 
</span><br>
<span class="quotelev1">&gt; opened at once or something? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I meant parallel (PVFS, etc) versus serial (ext3, xfs, etc)
<br>
file systems.
<br>
I guess you have XFS one one machine,
<br>
mounted over NFS across the cluster.
<br>
If you send too many read and write requests you may
<br>
overwhelm NFS, at least this is my experience.
<br>
By contrast, MPI scales much better with the number of
<br>
processes that exchange messages.
<br>
Hence, better funnel the data flow through MPI instead,
<br>
and let NFS talk to a single process (or to a single process at a time).
<br>
For this type of situation the old scheme:
<br>
&quot;master reads and data is scattered;
<br>
data is gathered and master writes&quot;,
<br>
works fine, regardless of whether you
<br>
may think your code looks ugly or not.
<br>
Ricardo Reis suggested another solution, using a loop and MPI_Barrier
<br>
to serialize the writes from all processes,
<br>
and avoid file contention on NFS.
<br>
Another way would be to use MPI-IO.
<br>
<p><span class="quotelev1">&gt; I did have to end up using an MPI Data type, 
</span><br>
<span class="quotelev1">&gt; because this 3D domain was strided nicely in X, 
</span><br>
<span class="quotelev1">&gt; but not the other dimensions. 
</span><br>
<span class="quotelev1">&gt; The domain is larger in Z, 
</span><br>
<span class="quotelev1">&gt; so I wanted to order my loops such that Z is the innermost. 
</span><br>
<span class="quotelev1">&gt; This helped cut down some of the MPI overhead. 
</span><br>
<span class="quotelev1">&gt; It would have been nice to avoid this, 
</span><br>
<span class="quotelev1">&gt; but I could not think of the way to do it, 
</span><br>
<span class="quotelev1">&gt; and still have all of the computes working on the largest =
</span><br>
<span class="quotelev1">&gt; section of data possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1"> &gt; Derek
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<p>I agree.  The underlying algorithm to some extent dictates how MPI
<br>
should be used, and how the data is laid out and distributed.
<br>
<p>In the best of the worlds you could devise and develop
<br>
an algorithm that is both computationally and MPI (i.e. 
<br>
communication-wise) efficient, and simple, and clean, etc.
<br>
More often then not one doesn't have the time or support to
<br>
do this, right?  The end user seldom cares about it either.
<br>
At least this has been my experience here.
<br>
<p><p>Gus Correa
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
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ricardo Reis
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 05, 2010 3:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Best way to reduce 3D array
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 5 Apr 2010, Rob Latham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Mar 30, 2010 at 11:51:39PM +0100, Ricardo Reis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  If using the master/slace IO model, would it be better to cicle 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through all the process and each one would write it's part of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array into the file. This file would be open in &quot;stream&quot; mode...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  do p=0,nprocs-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if(my_rank.eq.i)then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      openfile (append mode)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      write_to_file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      closefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    call MPI_Barrier(world,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  enddo
</span><br>
<span class="quotelev2">&gt;&gt; Note that there's no guarantee of the order here, though. Nothing 
</span><br>
<span class="quotelev2">&gt;&gt; prevents rank 30 from hitting that loop before rank 2 does.  To ensure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; don't they all have to hit the same Barrier? I think that will ensure order in this business... or am I being blind to something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will agree, though, this is not the best solution to do it. I use this kind of arrangment when I'm desperate to do some prinf kind of debugging and want it ordered by process. Never had a problem with it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I mean, I assume there is some sort of sync before the do cycle starts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   cheers!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Ricardo Reis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   'Non Serviam'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PhD candidate @ Lasef
</span><br>
<span class="quotelev1">&gt;   Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                             &lt; sent with alpine 2.00 &gt;
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
<li><strong>Next message:</strong> <a href="12585.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
