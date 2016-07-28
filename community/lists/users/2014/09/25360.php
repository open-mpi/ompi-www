<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 22:12:23 2014" -->
<!-- isoreceived="20140919021223" -->
<!-- sent="Thu, 18 Sep 2014 21:12:21 -0500" -->
<!-- isosent="20140919021221" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="541B9105.5060005_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D67303F39678724DA65819E042CB36989649A73DD1_at_EXC2.ad.colorado.edu" -->
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
<strong>Date:</strong> 2014-09-18 22:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25361.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/18/2014 04:56 PM, Beichuan Yan wrote:
<br>
<span class="quotelev1">&gt; Rob,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for the suggestion. There are two independent scenarios using parallel IO in my code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. MPI processes conditionally print, i.e., some processes print in current loop (but may not print in next loop), some processes do not print in current loop (but may print next loop), and it does not matter who prints first or last (NOT ordered). Clearly we cannot use a collective call for this scenario because it is conditional, and I don't need it to be ordered, so I chose MPI_File_write_shared (non-collective operation, shared pointer, but not ordered). It works well if Lustre is mounted with &quot;flock&quot;, but does not work without &quot;flock&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this scenario 1, we cannot use individual pointer or explicit offset because we cannot predetermine the offset for each process. That is why I had to use a shared file pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Each MPI process unconditionally prints to a shared file (even if it prints nothing) and the order does not matter. Your suggestion works for this scenario. Actually it is even simpler because order does not matter. We have two options:  (2A) use shared file pointer, either MPI_File_write_shared (non-collective) or MPI_File_write_ordered (collective) works, and don't need to predetermine offset, it requires &quot;flock&quot;. (2B). use individual file pointer, e.g., MPI_File_seek (or MPI_File_set_view) and MPI_File_write_all (collective), this requires calculating offset, which is pre-determinable. It does not require &quot;flock&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In summary, scenario 2 can avoid &quot;flock&quot; requirement by using 2B, but scenario 1 cannot.
</span><br>
<p>Thanks for the report.  OMPIO might support shared file pointers better 
<br>
-- Edgar Gabriel can comment if that's the case.  I'll dust off our old 
<br>
RMA-based approach for shared file pointers.  It's not perfect, but for 
<br>
folks having difficulty with the file-backed shared file pointer 
<br>
operations it might be useful.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Beichuan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob Latham
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, September 18, 2014 08:49
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/17/2014 05:46 PM, Beichuan Yan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rob,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you pointed out in April that there are many cases that could
</span><br>
<span class="quotelev2">&gt;&gt; arouse ADIOI_Set_lock error. My code writes to a file at a location
</span><br>
<span class="quotelev2">&gt;&gt; specified by a shared file pointer (it is a blocking and collective
</span><br>
<span class="quotelev2">&gt;&gt; call): MPI_File_write_ordered(contactFile, const_cast&lt;char*&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (inf.str().c_str()), length, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is why disabling data-sieving does not work for me, even if I tested it with latest openmpi-1.8.2 and gcc-4.9.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I ask a question? Except that Lustre is mounted with &quot;flock&quot; option, is there other workaround to avoid this ADIOI_Set_lock error in MPI-2 parallel IO?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shared file pointer operations don't get a lot of attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ROMIO is going to try to lock a hidden file that contains the 8 byte location of the shared file pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mix independent shared file pointer operations with ordered mode operations?  If not, read on for a better way to achieve ordering:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's pretty easy to replace ordered mode operations with a collective call of the same behavior.  The key is to use MPI_SCAN:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_File_get_position(mpi_fh, &amp;offset);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             MPI_Scan(&amp;incr, &amp;new_offset, 1, MPI_LONG_LONG_INT,
</span><br>
<span class="quotelev1">&gt;                             MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             new_offset -= incr;
</span><br>
<span class="quotelev1">&gt;             new_offset += offset;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ret = MPI_File_write_at_all(mpi_fh, new_offset, buf, count,
</span><br>
<span class="quotelev1">&gt;                                     datatype, status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See: every process has &quot;incr&quot; amount of data.  The MPI_SCAN ensures the offsets computed are ascending in rank order (as they would for ordered mode i/o) and the actual I/O happens with a much faster MPI_File_write_at_all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We wrote this up in our 2005 shared memory for shared file pointers paper, even though this approach doesn't need RMA shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob
</span><br>
<span class="quotelev2">&gt;&gt; Latham
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, April 14, 2014 14:24
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/08/2014 05:49 PM, Daniel Milroy wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file system in question is indeed Lustre, and mounting with flock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't possible in our environment.  I recommended the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes to the users' code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi.  I'm the ROMIO guy, though I do rely on the community to help me keep the lustre driver up to snuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Info_set(info, &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Info_set(info, &quot;romio_ds_read&quot;, &quot;disable&quot;); MPI_Info_set(info,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;romio_ds_write&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which results in the same error as before.  Are there any other MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options I can set?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to hear more about the workload generating these lock messages, but I can tell you the situations in which ADIOI_SetLock gets called:
</span><br>
<span class="quotelev2">&gt;&gt; - everywhere in NFS.  If you have a Lustre file system exported to
</span><br>
<span class="quotelev2">&gt;&gt; some clients as NFS, you'll get NFS (er, that might not be true unless
</span><br>
<span class="quotelev2">&gt;&gt; you pick up a recent patch)
</span><br>
<span class="quotelev2">&gt;&gt; - when writing a non-contiguous region in file, unless you disable data sieving, as you did above.
</span><br>
<span class="quotelev2">&gt;&gt; - note: you don't need to disable data sieving for reads, though you might want to if the data sieving algorithm is wasting a lot of data.
</span><br>
<span class="quotelev2">&gt;&gt; - if atomic mode was set on the file (i.e. you called
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_set_atomicity)
</span><br>
<span class="quotelev2">&gt;&gt; - if you use any of the shared file pointer operations
</span><br>
<span class="quotelev2">&gt;&gt; - if you use any of the ordered mode collective operations
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you've turned off data sieving writes, which is what I would have first guessed would trigger this lock message.  So I guess you are hitting one of the other cases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Rob Latham
</span><br>
<span class="quotelev2">&gt;&gt; Mathematics and Computer Science Division Argonne National Lab, IL USA
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">http://www.open-mpi.org/community/lists/users/2014/09/25337.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25356.php">http://www.open-mpi.org/community/lists/users/2014/09/25356.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25358.php">http://www.open-mpi.org/community/lists/users/2014/09/25358.php</a>
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
<li><strong>Next message:</strong> <a href="25361.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25359.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25358.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="25362.php">Edgar Gabriel: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
