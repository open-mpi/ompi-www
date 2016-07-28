<?
$subject_val = "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 10:50:01 2014" -->
<!-- isoreceived="20140919145001" -->
<!-- sent="Fri, 19 Sep 2014 09:49:51 -0500" -->
<!-- isosent="20140919144951" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="541C428F.7090409_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="541B9105.5060005_at_mcs.anl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-19 10:49:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25363.php">Gan, Qi                    PW: "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25361.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25360.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/18/2014 9:12 PM, Rob Latham wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/18/2014 04:56 PM, Beichuan Yan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rob,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for the suggestion. There are two independent
</span><br>
<span class="quotelev2">&gt;&gt; scenarios using parallel IO in my code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. MPI processes conditionally print, i.e., some processes print in
</span><br>
<span class="quotelev2">&gt;&gt; current loop (but may not print in next loop), some processes do not
</span><br>
<span class="quotelev2">&gt;&gt; print in current loop (but may print next loop), and it does not
</span><br>
<span class="quotelev2">&gt;&gt; matter who prints first or last (NOT ordered). Clearly we cannot use a
</span><br>
<span class="quotelev2">&gt;&gt; collective call for this scenario because it is conditional, and I
</span><br>
<span class="quotelev2">&gt;&gt; don't need it to be ordered, so I chose MPI_File_write_shared
</span><br>
<span class="quotelev2">&gt;&gt; (non-collective operation, shared pointer, but not ordered). It works
</span><br>
<span class="quotelev2">&gt;&gt; well if Lustre is mounted with &quot;flock&quot;, but does not work without
</span><br>
<span class="quotelev2">&gt;&gt; &quot;flock&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this scenario 1, we cannot use individual pointer or explicit
</span><br>
<span class="quotelev2">&gt;&gt; offset because we cannot predetermine the offset for each process.
</span><br>
<span class="quotelev2">&gt;&gt; That is why I had to use a shared file pointer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Each MPI process unconditionally prints to a shared file (even if
</span><br>
<span class="quotelev2">&gt;&gt; it prints nothing) and the order does not matter. Your suggestion
</span><br>
<span class="quotelev2">&gt;&gt; works for this scenario. Actually it is even simpler because order
</span><br>
<span class="quotelev2">&gt;&gt; does not matter. We have two options:  (2A) use shared file pointer,
</span><br>
<span class="quotelev2">&gt;&gt; either MPI_File_write_shared (non-collective) or
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_write_ordered (collective) works, and don't need to
</span><br>
<span class="quotelev2">&gt;&gt; predetermine offset, it requires &quot;flock&quot;. (2B). use individual file
</span><br>
<span class="quotelev2">&gt;&gt; pointer, e.g., MPI_File_seek (or MPI_File_set_view) and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_write_all (collective), this requires calculating offset,
</span><br>
<span class="quotelev2">&gt;&gt; which is pre-determinable. It does not require &quot;flock&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In summary, scenario 2 can avoid &quot;flock&quot; requirement by using 2B, but
</span><br>
<span class="quotelev2">&gt;&gt; scenario 1 cannot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the report.  OMPIO might support shared file pointers better
</span><br>
<span class="quotelev1">&gt; -- Edgar Gabriel can comment if that's the case.  I'll dust off our old
</span><br>
<span class="quotelev1">&gt; RMA-based approach for shared file pointers.  It's not perfect, but for
</span><br>
<span class="quotelev1">&gt; folks having difficulty with the file-backed shared file pointer
</span><br>
<span class="quotelev1">&gt; operations it might be useful.
</span><br>
<p>I think there would be one or two options with OMPIO. However, OMPIO is 
<br>
not part of the 1.6 series, its only available starting from the 1.7 series.
<br>
<p>The first option would be to use the &quot;individual file&quot; component for 
<br>
shared file pointers. It works for write-only scenarios only, if the 
<br>
user can live with minor inaccuracies in the ordering. The component 
<br>
basically lets every process write its data into a separate file, every 
<br>
write operation will be extended by a time stamp and some other 
<br>
metadata. Upon MPI_File_close, the individual files are merged using the 
<br>
time stamps to generate the final order between the items. However, 
<br>
since clocks on different nodes are not perfectly synchronized, the 
<br>
order between items as it appears in the final file might not be 
<br>
absolutely correct. No data item is however lost, and the ordering 
<br>
within a process is correct.
<br>
<p>The second option would be to use the &quot;addproc&quot; component, which spawns 
<br>
an additional process to manage the shared file pointer. This component 
<br>
is available on trunk, but was not included in the release for good 
<br>
reasons, i.e. executing an MPI_Comm_spawn underneath the hood without 
<br>
the user actually being aware of it might be - lets say suprprising and 
<br>
have some sideeffects (e.g. exceeding the allocation etc.) . If the user 
<br>
is however aware of that and willing to do that, its fairly  easily to 
<br>
set it up etc.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Beichuan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob Latham
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, September 18, 2014 08:49
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 09/17/2014 05:46 PM, Beichuan Yan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Rob,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you pointed out in April that there are many cases that could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arouse ADIOI_Set_lock error. My code writes to a file at a location
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specified by a shared file pointer (it is a blocking and collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call): MPI_File_write_ordered(contactFile, const_cast&lt;char*&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (inf.str().c_str()), length, MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is why disabling data-sieving does not work for me, even if I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested it with latest openmpi-1.8.2 and gcc-4.9.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I ask a question? Except that Lustre is mounted with &quot;flock&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option, is there other workaround to avoid this ADIOI_Set_lock error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in MPI-2 parallel IO?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shared file pointer operations don't get a lot of attention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ROMIO is going to try to lock a hidden file that contains the 8 byte
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared file pointer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you mix independent shared file pointer operations with ordered
</span><br>
<span class="quotelev2">&gt;&gt; mode operations?  If not, read on for a better way to achieve ordering:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's pretty easy to replace ordered mode operations with a collective
</span><br>
<span class="quotelev2">&gt;&gt; call of the same behavior.  The key is to use MPI_SCAN:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             MPI_File_get_position(mpi_fh, &amp;offset);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             MPI_Scan(&amp;incr, &amp;new_offset, 1, MPI_LONG_LONG_INT,
</span><br>
<span class="quotelev2">&gt;&gt;                             MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;             new_offset -= incr;
</span><br>
<span class="quotelev2">&gt;&gt;             new_offset += offset;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ret = MPI_File_write_at_all(mpi_fh, new_offset, buf, count,
</span><br>
<span class="quotelev2">&gt;&gt;                                     datatype, status);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See: every process has &quot;incr&quot; amount of data.  The MPI_SCAN ensures
</span><br>
<span class="quotelev2">&gt;&gt; the offsets computed are ascending in rank order (as they would for
</span><br>
<span class="quotelev2">&gt;&gt; ordered mode i/o) and the actual I/O happens with a much faster
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_write_at_all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We wrote this up in our 2005 shared memory for shared file pointers
</span><br>
<span class="quotelev2">&gt;&gt; paper, even though this approach doesn't need RMA shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Beichuan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rob
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Latham
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, April 14, 2014 14:24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/08/2014 05:49 PM, Daniel Milroy wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The file system in question is indeed Lustre, and mounting with flock
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isn't possible in our environment.  I recommended the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changes to the users' code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi.  I'm the ROMIO guy, though I do rely on the community to help me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keep the lustre driver up to snuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Info_set(info, &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Info_set(info, &quot;romio_ds_read&quot;, &quot;disable&quot;); MPI_Info_set(info,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;romio_ds_write&quot;, &quot;disable&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which results in the same error as before.  Are there any other MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; options I can set?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to hear more about the workload generating these lock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages, but I can tell you the situations in which ADIOI_SetLock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gets called:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - everywhere in NFS.  If you have a Lustre file system exported to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some clients as NFS, you'll get NFS (er, that might not be true unless
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you pick up a recent patch)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - when writing a non-contiguous region in file, unless you disable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data sieving, as you did above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - note: you don't need to disable data sieving for reads, though you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might want to if the data sieving algorithm is wasting a lot of data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if atomic mode was set on the file (i.e. you called
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_set_atomicity)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if you use any of the shared file pointer operations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - if you use any of the ordered mode collective operations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you've turned off data sieving writes, which is what I would have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first guessed would trigger this lock message.  So I guess you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hitting one of the other cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==rob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob Latham
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mathematics and Computer Science Division Argonne National Lab, IL USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25337.php">http://www.open-mpi.org/community/lists/users/2014/09/25337.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25356.php">http://www.open-mpi.org/community/lists/users/2014/09/25356.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25358.php">http://www.open-mpi.org/community/lists/users/2014/09/25358.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25363.php">Gan, Qi                    PW: "[OMPI users] Can &quot;timeout&quot; be implemented in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25361.php">Nick Papior Andersen: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>In reply to:</strong> <a href="25360.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
