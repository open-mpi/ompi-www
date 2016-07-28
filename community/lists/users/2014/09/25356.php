<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:48:42 2014" -->
<!-- isoreceived="20140918144842" -->
<!-- sent="Thu, 18 Sep 2014 09:48:40 -0500" -->
<!-- isosent="20140918144840" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="541AF0C8.8040708_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D67303F39678724DA65819E042CB36989649A73D09_at_EXC2.ad.colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 10:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25357.php">Gus Correa: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/17/2014 05:46 PM, Beichuan Yan wrote:
<br>
<span class="quotelev1">&gt; Hi Rob,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you pointed out in April that there are many cases that could arouse ADIOI_Set_lock error. My code writes to a file at a location specified by a shared file pointer (it is a blocking and collective call): MPI_File_write_ordered(contactFile, const_cast&lt;char*&gt; (inf.str().c_str()), length, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is why disabling data-sieving does not work for me, even if I tested it with latest openmpi-1.8.2 and gcc-4.9.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I ask a question? Except that Lustre is mounted with &quot;flock&quot; option, is there other workaround to avoid this ADIOI_Set_lock error in MPI-2 parallel IO?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Shared file pointer operations don't get a lot of attention.
<br>
<p>ROMIO is going to try to lock a hidden file that contains the 8 byte 
<br>
location of the shared file pointer.
<br>
<p>Do you mix independent shared file pointer operations with ordered mode 
<br>
operations?  If not, read on for a better way to achieve ordering:
<br>
<p>It's pretty easy to replace ordered mode operations with a collective 
<br>
call of the same behavior.  The key is to use MPI_SCAN:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_get_position(mpi_fh, &amp;offset);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scan(&amp;incr, &amp;new_offset, 1, MPI_LONG_LONG_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_offset -= incr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_offset += offset;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MPI_File_write_at_all(mpi_fh, new_offset, buf, count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype, status);
<br>
<p>See: every process has &quot;incr&quot; amount of data.  The MPI_SCAN ensures the 
<br>
offsets computed are ascending in rank order (as they would for ordered 
<br>
mode i/o) and the actual I/O happens with a much faster 
<br>
MPI_File_write_at_all.
<br>
<p>We wrote this up in our 2005 shared memory for shared file pointers 
<br>
paper, even though this approach doesn't need RMA shared memory.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Beichuan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob Latham
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 14, 2014 14:24
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/08/2014 05:49 PM, Daniel Milroy wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The file system in question is indeed Lustre, and mounting with flock
</span><br>
<span class="quotelev2">&gt;&gt; isn't possible in our environment.  I recommended the following
</span><br>
<span class="quotelev2">&gt;&gt; changes to the users' code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi.  I'm the ROMIO guy, though I do rely on the community to help me keep the lustre driver up to snuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;); MPI_Info_set(info,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;); MPI_Info_set(info,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;romio_ds_read&quot;, &quot;disable&quot;); MPI_Info_set(info, &quot;romio_ds_write&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;disable&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which results in the same error as before.  Are there any other MPI
</span><br>
<span class="quotelev2">&gt;&gt; options I can set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to hear more about the workload generating these lock messages, but I can tell you the situations in which ADIOI_SetLock gets called:
</span><br>
<span class="quotelev1">&gt; - everywhere in NFS.  If you have a Lustre file system exported to some clients as NFS, you'll get NFS (er, that might not be true unless you pick up a recent patch)
</span><br>
<span class="quotelev1">&gt; - when writing a non-contiguous region in file, unless you disable data sieving, as you did above.
</span><br>
<span class="quotelev1">&gt; - note: you don't need to disable data sieving for reads, though you might want to if the data sieving algorithm is wasting a lot of data.
</span><br>
<span class="quotelev1">&gt; - if atomic mode was set on the file (i.e. you called
</span><br>
<span class="quotelev1">&gt; MPI_File_set_atomicity)
</span><br>
<span class="quotelev1">&gt; - if you use any of the shared file pointer operations
</span><br>
<span class="quotelev1">&gt; - if you use any of the ordered mode collective operations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you've turned off data sieving writes, which is what I would have first guessed would trigger this lock message.  So I guess you are hitting one of the other cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division Argonne National Lab, IL USA _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">http://www.open-mpi.org/community/lists/users/2014/09/25337.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="25357.php">Gus Correa: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25355.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
