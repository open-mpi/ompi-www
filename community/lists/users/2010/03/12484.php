<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 18:39:34 2010" -->
<!-- isoreceived="20100330223934" -->
<!-- sent="Tue, 30 Mar 2010 18:39:24 -0400" -->
<!-- isosent="20100330223924" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="4BB27D9C.3070504_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF854D1BB1_at_HVXMSPA.us.lmco.com" -->
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
<strong>Date:</strong> 2010-03-30 18:39:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12483.php">Cole, Derek E: "[OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12483.php">Cole, Derek E: "[OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Derek
<br>
<p>Great to read that you parallelized the code.
<br>
Sorry to hear about the OO problems,
<br>
although I enjoyed to read your characterization of it.  :)
<br>
We also have plenty of that,
<br>
mostly with some Fortran90 codes that go OOverboard.
<br>
<p>I think I suggested &quot;YZ-books&quot;, i.e., decompose the domain across X,
<br>
which I guess would take advantage of the C array &quot;row major order&quot;,
<br>
and obviate the need for creating MPI vector types.
<br>
However, I guess your choice really depends on how your data
<br>
is laid out in memory.
<br>
<p>I am not sure if I understood the I/O (output) problem you described.
<br>
However, here is a suggestion.
<br>
I think I sent it in a previous email.
<br>
It assumes the global array fits rank 0/master process memory:
<br>
<p>A) To input data (at the beginning) ,
<br>
rank 0 can read the all the data from a file to a big buffer/global 
<br>
array, then all processes call MPI_Scatter[v],
<br>
which distributes the subarrays
<br>
to all ranks/slave processes;
<br>
<p>B) To output data (at the end),
<br>
all processes call MPI_Gather[v],
<br>
which allows rank 0/master to collect the final results on a big 
<br>
buffer/global array,
<br>
and then rank 0 does the output to a file (and in your case,
<br>
also converts to &quot;Tecplot&quot;, I suppose).
<br>
<p>If your domain decomposition took advantage of the array layout
<br>
in memory, each process can do a single call to MPI_Scatter
<br>
and/or to MPI_Gather[v] to do the job.  All you need know is
<br>
the pointer to the first element of the (sub)array and its size
<br>
(and for the global array on rank0/master).
<br>
<p>If the domain decomposition cuts across the array memory layout,
<br>
you may need to define an MPI vector type, with strides, etc,
<br>
and use it in the MPI functions above, which again can be called
<br>
only once.
<br>
With MPI type vector it is a  bit more work and bookkeeping,
<br>
but not too hard.
<br>
<p>This master/slave I/O pattern is quite common,
<br>
and admittedly old fashioned, since it doesn't take advantage of MPI-IO.
<br>
However, it is a reliable workhorse,
<br>
particularly if you have a plain NFS
<br>
mounted file system (as opposed to a parallel file system).
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
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
<p><p>Cole, Derek E wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I posted before about doing a domain decomposition on a 3D array in C, 
</span><br>
<span class="quotelev1">&gt; and this is sort of a follow up to that.  I was able to get the 
</span><br>
<span class="quotelev1">&gt; calculations working correctly by performing the calculations on XZ 
</span><br>
<span class="quotelev1">&gt; sub-domains for all Y dimensions of the space. I think someone referred 
</span><br>
<span class="quotelev1">&gt; to this as a &#147;book.&#148; In the space.  Being that I now have an X starting 
</span><br>
<span class="quotelev1">&gt; and ending point, a Z starting and ending point, and a total number of X 
</span><br>
<span class="quotelev1">&gt; and Z points to visit in each direction during the computation, I am now 
</span><br>
<span class="quotelev1">&gt; at another hanging point.  First, some background.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on modifying a code that was originally written to be run 
</span><br>
<span class="quotelev1">&gt; serially. That being said, there is a massive amount of object oriented 
</span><br>
<span class="quotelev1">&gt; crap that is making this a total nightmare to work on. All of the 
</span><br>
<span class="quotelev1">&gt; properties that are computed for each point in the 3D mesh are stored in 
</span><br>
<span class="quotelev1">&gt; structures, and those structures are stored in structures, blah blah, it 
</span><br>
<span class="quotelev1">&gt; looks very gross. In order to speed this code up, I was able to pull out 
</span><br>
<span class="quotelev1">&gt; the most computationally sensitive property (potential) and get it set 
</span><br>
<span class="quotelev1">&gt; up in this 3D array that is allocated nicely, etc. The problem is, this 
</span><br>
<span class="quotelev1">&gt; code eventually outputs after all the iterations to a Tecplot format. 
</span><br>
<span class="quotelev1">&gt; The code to do this is very, very contrived.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My idea was to, for the sake of wanting to move on, stuff back all of 
</span><br>
<span class="quotelev1">&gt; these XZ subdomains that I have calculated into a single array on the 
</span><br>
<span class="quotelev1">&gt; first processor, so it can go about its way and do the file output on 
</span><br>
<span class="quotelev1">&gt; the WHOLE domain. I seem to be having problems though, extracting out 
</span><br>
<span class="quotelev1">&gt; these SubX * SubZ * Y sized portions of the original that can be sent to 
</span><br>
<span class="quotelev1">&gt; the first processor. Does anyone have any examples anywhere of code that 
</span><br>
<span class="quotelev1">&gt; does something like that?  It appears that my 3D mesh is in X major 
</span><br>
<span class="quotelev1">&gt; format in memory, so I tried to create some loops to extract Y, SubZ 
</span><br>
<span class="quotelev1">&gt; sized columns of X to send back to the zero&#146;th processor but I haven&#146;t 
</span><br>
<span class="quotelev1">&gt; had much luck yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any tips are appreciated&#133;thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12483.php">Cole, Derek E: "[OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12483.php">Cole, Derek E: "[OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12485.php">Ricardo Reis: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
