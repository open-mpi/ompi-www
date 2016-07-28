<?
$subject_val = "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 16:01:45 2011" -->
<!-- isoreceived="20110927200145" -->
<!-- sent="Tue, 27 Sep 2011 15:01:39 -0500" -->
<!-- isosent="20110927200139" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximum size for read buffer in MPI_File_read/write" -->
<!-- id="20110927200139.GC9607_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7BAA86.50105_at_googlemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] maximum size for read buffer in MPI_File_read/write<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 16:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17452.php">Reuti: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>In reply to:</strong> <a href="17400.php">German Hoecht: "[OMPI users] maximum size for read buffer in  MPI_File_read/write"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Reply:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 22, 2011 at 11:37:10PM +0200, German Hoecht wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_File_read/write functions uses  an integer to specify the size of
</span><br>
<span class="quotelev1">&gt; the buffer, for instance:
</span><br>
<span class="quotelev1">&gt; int MPI_File_read(MPI_File fh, void *buf, int count, MPI_Datatype
</span><br>
<span class="quotelev1">&gt; datatype, MPI_Status *status)
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt; count     Number of elements in buffer (integer).
</span><br>
<span class="quotelev1">&gt; datatype  Data type of each buffer element (handle).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, using the maximum value of 32 bytes integers:
</span><br>
<span class="quotelev1">&gt; count = 2^31-1 = 2147483647 (and datatype = MPI_BYTE)
</span><br>
<span class="quotelev1">&gt; MPI_file_read only reads  2^31-2^12 = 2147479552 bytes.
</span><br>
<span class="quotelev1">&gt; This means that 4095 bytes are ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not aware of this specific limit for integers in (Open) MPI
</span><br>
<span class="quotelev1">&gt; function calls. Is this supposed to be correct?
</span><br>
<p>Hi.  I'm the ROMIO maintainer.  OpenMPI more or less rolls up ROMIO
<br>
into OpenMPI, so any problems with the MPI_File_* routines is in my
<br>
lap, not OpenMPI.
<br>
<p>I'll be honest with you: i've not given any thought to just how big
<br>
the biggest request could be.  The independent routines, especially
<br>
with a simple type like MPI_BYTE, are going to almost immediately call
<br>
the underlying posix read() or write() call. 
<br>
<p>I can confirm the behavior you observe with your test program.
<br>
Thanks much for providing one.  I'll dig around but I cannot think of
<br>
something in ROMIO that would ignore these 4095 bytes.   I do think
<br>
it's legal by the letter of the standard to read or write less than
<br>
requested.   &quot;Upon completion, the amount of data accessed by the
<br>
calling process is returned in a status.&quot;   
<br>
<p>Bravo to you for actually checking return values and the status.  I
<br>
don't think many non-library codes do that :&gt;
<br>
<p>I should at least be able to explain the behavior, so I'll dig a bit.
<br>
<p>in general, if you plot &quot;i/o performance vs blocksize&quot;, every file
<br>
system tops out around several tens of megabytes.  So, we have given
<br>
the advice to just split up this nearly 2 gb request into several 1 gb
<br>
requests.  
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17452.php">Reuti: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>In reply to:</strong> <a href="17400.php">German Hoecht: "[OMPI users] maximum size for read buffer in  MPI_File_read/write"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Reply:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
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
