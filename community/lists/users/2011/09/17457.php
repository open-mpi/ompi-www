<?
$subject_val = "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 04:10:12 2011" -->
<!-- isoreceived="20110928081012" -->
<!-- sent="Wed, 28 Sep 2011 10:09:58 +0200" -->
<!-- isosent="20110928080958" -->
<!-- name="German Hoecht" -->
<!-- email="german.hoecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] maximum size for read buffer in MPI_File_read/write" -->
<!-- id="4E82D656.40606_at_googlemail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110927200139.GC9607_at_mcs.anl.gov" -->
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
<strong>From:</strong> German Hoecht (<em>german.hoecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 04:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17458.php">Wiegers, Bert: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>Previous message:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17460.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Reply:</strong> <a href="17460.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rob,
<br>
<p>thanks for your comments. I understand that it's most probably not worth
<br>
the effort to find the actual reason.
<br>
<p>Because I have to deal with very large files I preferred using
<br>
&quot;std::numeric_limits&lt;int&gt;::max()&quot; rather than a hard-coded value
<br>
to split the read in case an IO request exceeds this amount. (This is
<br>
not the usual case but can happen.)
<br>
<p>So your advice to use a max IO buffer of 1GB is quite precious.
<br>
<p>To be honest, I did not do the check before we observed strange
<br>
numbers... Usually, MPI/ROMIO read/write functions are very stable, the
<br>
concerned code has read several Terabytes in the meanwhile.
<br>
<p>Best regards,
<br>
German
<br>
<p>On 09/27/2011 10:01 PM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt; On Thu, Sep 22, 2011 at 11:37:10PM +0200, German Hoecht wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_read/write functions uses  an integer to specify the size of
</span><br>
<span class="quotelev2">&gt;&gt; the buffer, for instance:
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_File_read(MPI_File fh, void *buf, int count, MPI_Datatype
</span><br>
<span class="quotelev2">&gt;&gt; datatype, MPI_Status *status)
</span><br>
<span class="quotelev2">&gt;&gt; with:
</span><br>
<span class="quotelev2">&gt;&gt; count     Number of elements in buffer (integer).
</span><br>
<span class="quotelev2">&gt;&gt; datatype  Data type of each buffer element (handle).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, using the maximum value of 32 bytes integers:
</span><br>
<span class="quotelev2">&gt;&gt; count = 2^31-1 = 2147483647 (and datatype = MPI_BYTE)
</span><br>
<span class="quotelev2">&gt;&gt; MPI_file_read only reads  2^31-2^12 = 2147479552 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; This means that 4095 bytes are ignored.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not aware of this specific limit for integers in (Open) MPI
</span><br>
<span class="quotelev2">&gt;&gt; function calls. Is this supposed to be correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi.  I'm the ROMIO maintainer.  OpenMPI more or less rolls up ROMIO
</span><br>
<span class="quotelev1">&gt; into OpenMPI, so any problems with the MPI_File_* routines is in my
</span><br>
<span class="quotelev1">&gt; lap, not OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll be honest with you: i've not given any thought to just how big
</span><br>
<span class="quotelev1">&gt; the biggest request could be.  The independent routines, especially
</span><br>
<span class="quotelev1">&gt; with a simple type like MPI_BYTE, are going to almost immediately call
</span><br>
<span class="quotelev1">&gt; the underlying posix read() or write() call. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can confirm the behavior you observe with your test program.
</span><br>
<span class="quotelev1">&gt; Thanks much for providing one.  I'll dig around but I cannot think of
</span><br>
<span class="quotelev1">&gt; something in ROMIO that would ignore these 4095 bytes.   I do think
</span><br>
<span class="quotelev1">&gt; it's legal by the letter of the standard to read or write less than
</span><br>
<span class="quotelev1">&gt; requested.   &quot;Upon completion, the amount of data accessed by the
</span><br>
<span class="quotelev1">&gt; calling process is returned in a status.&quot;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bravo to you for actually checking return values and the status.  I
</span><br>
<span class="quotelev1">&gt; don't think many non-library codes do that :&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should at least be able to explain the behavior, so I'll dig a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in general, if you plot &quot;i/o performance vs blocksize&quot;, every file
</span><br>
<span class="quotelev1">&gt; system tops out around several tens of megabytes.  So, we have given
</span><br>
<span class="quotelev1">&gt; the advice to just split up this nearly 2 gb request into several 1 gb
</span><br>
<span class="quotelev1">&gt; requests.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17458.php">Wiegers, Bert: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>Previous message:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17460.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>Reply:</strong> <a href="17460.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
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
