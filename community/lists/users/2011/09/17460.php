<?
$subject_val = "[OMPI users] orte_grpcomm_modex failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 11:08:47 2011" -->
<!-- isoreceived="20110928150847" -->
<!-- sent="Wed, 28 Sep 2011 16:08:41 +0100 (BST)" -->
<!-- isosent="20110928150841" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] orte_grpcomm_modex failed" -->
<!-- id="1317222521.83015.YahooMailNeo_at_web29601.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E82D656.40606_at_googlemail.com" -->
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
<strong>Subject:</strong> [OMPI users] orte_grpcomm_modex failed<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 11:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,

I have just rebuilt openmpi-1.4-3 on our cluster, and I see this error:

It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.&#160; There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or environment
problems.&#160; This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):

&#160; orte_grpcomm_modex failed
&#160; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
--------------------------------------------------------------------------
--------------------------------------------------------------------------
mpirun noticed that process rank 0 with PID 25633 on node tik40x exited on signal 27 (Profiling timer expired).


[tik40x:25626] [[29400,0],0] odls:default:fork binding child [[29400,1],0] to slot_list 0:0
[tik40x:25633] [[29400,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file grpcomm_bad_module.c at line 535
*** The MPI_Init() function was called before MPI_INIT was invoked.
*** This is disallowed by the MPI standard.
*** Your MPI job will now abort.
[tik40x:25633] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!


I had already tested this application prior to rebuilding openmpi (same version, but without thread support), and it was running well.

I have some discussions on this error in the forum, but I am not getting any useful pointers.

Has anyone else also seen this error?

Best

Devendra Rai



________________________________
From: German Hoecht &lt;german.hoecht_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;; Rob Latham &lt;robl_at_[hidden]&gt;
Sent: Wednesday, 28 September 2011, 10:09
Subject: Re: [OMPI users] maximum size for read buffer in MPI_File_read/write

Hi Rob,

thanks for your comments. I understand that it's most probably not worth
the effort to find the actual reason.

Because I have to deal with very large files I preferred using
&quot;std::numeric_limits&lt;int&gt;::max()&quot; rather than a hard-coded value
to split the read in case an IO request exceeds this amount. (This is
not the usual case but can happen.)

So your advice to use a max IO buffer of 1GB is quite precious.

To be honest, I did not do the check before we observed strange
numbers... Usually, MPI/ROMIO read/write functions are very stable, the
concerned code has read several Terabytes in the meanwhile.

Best regards,
German

On 09/27/2011 10:01 PM, Rob Latham wrote:
&gt; On Thu, Sep 22, 2011 at 11:37:10PM +0200, German Hoecht wrote:
&gt;&gt; Hello,
&gt;&gt;
&gt;&gt; MPI_File_read/write functions uses&#160; an integer to specify the size of
&gt;&gt; the buffer, for instance:
&gt;&gt; int MPI_File_read(MPI_File fh, void *buf, int count, MPI_Datatype
&gt;&gt; datatype, MPI_Status *status)
&gt;&gt; with:
&gt;&gt; count&#160; &#160;  Number of elements in buffer (integer).
&gt;&gt; datatype&#160; Data type of each buffer element (handle).
&gt;&gt;
&gt;&gt; However, using the maximum value of 32 bytes integers:
&gt;&gt; count = 2^31-1 = 2147483647 (and datatype = MPI_BYTE)
&gt;&gt; MPI_file_read only reads&#160; 2^31-2^12 = 2147479552 bytes.
&gt;&gt; This means that 4095 bytes are ignored.
&gt;&gt;
&gt;&gt; I am not aware of this specific limit for integers in (Open) MPI
&gt;&gt; function calls. Is this supposed to be correct?
&gt; 
&gt; Hi.&#160; I'm the ROMIO maintainer.&#160; OpenMPI more or less rolls up ROMIO
&gt; into OpenMPI, so any problems with the MPI_File_* routines is in my
&gt; lap, not OpenMPI.
&gt; 
&gt; I'll be honest with you: i've not given any thought to just how big
&gt; the biggest request could be.&#160; The independent routines, especially
&gt; with a simple type like MPI_BYTE, are going to almost immediately call
&gt; the underlying posix read() or write() call. 
&gt; 
&gt; I can confirm the behavior you observe with your test program.
&gt; Thanks much for providing one.&#160; I'll dig around but I cannot think of
&gt; something in ROMIO that would ignore these 4095 bytes.&#160;  I do think
&gt; it's legal by the letter of the standard to read or write less than
&gt; requested.&#160;  &quot;Upon completion, the amount of data accessed by the
&gt; calling process is returned in a status.&quot;&#160; 
&gt; 
&gt; Bravo to you for actually checking return values and the status.&#160; I
&gt; don't think many non-library codes do that :&gt;
&gt; 
&gt; I should at least be able to explain the behavior, so I'll dig a bit.
&gt; 
&gt; in general, if you plot &quot;i/o performance vs blocksize&quot;, every file
&gt; system tops out around several tens of megabytes.&#160; So, we have given
&gt; the advice to just split up this nearly 2 gb request into several 1 gb
&gt; requests.&#160; 
&gt; 
&gt; ==rob
&gt; 

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17461.php">Blosch, Edwin L: "[OMPI users] Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
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
