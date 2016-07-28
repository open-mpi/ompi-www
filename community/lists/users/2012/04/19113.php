<?
$subject_val = "Re: [OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 19:03:52 2012" -->
<!-- isoreceived="20120424230352" -->
<!-- sent="Tue, 24 Apr 2012 23:03:46 +0000" -->
<!-- isosent="20120424230346" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="543A618A-7E70-4E10-9330-839E6912A92A_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44B93915-D5FA-449B-8F3A-62C1FF5F0BBD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI fails to run with -np larger than 10<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 19:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19114.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19112.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19111.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19034.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Yes, you are absolutely correct.  A user can suppress the warning, however, by simply setting shmem_mmap_enable_nfs_warning to 0.
<br>
<p>For what it's worth, I just verified that the warning shows itself on Panasas and NFS. Looks like Lustre and GPFS will behave similarly.
<br>
<p>Sam
<br>
<p>On Apr 24, 2012, at 4:15 PM, Ralph Castain wrote:
<br>
<p>I thought we had code in the 1.5 series that would &quot;bark&quot; if the tmp dir was on a network mount? Is that not true?
<br>
<p>On Apr 24, 2012, at 3:20 PM, Gutierrez, Samuel K wrote:
<br>
<p>Hi,
<br>
<p>I just wanted to record the behind the scenes resolution to this particular issue.  For more info, take a look at: <a href="https://svn.open-mpi.org/trac/ompi/ticket/3076">https://svn.open-mpi.org/trac/ompi/ticket/3076</a>
<br>
<p>It seems as if the problem stems from /tmp being mounted as an NFS space that is shared between the compute nodes.
<br>
<p>This problem can be resolved in a variety of ways.  Below are a few avenues that can help get around the &quot;globally mounted /tmp space&quot; issue, but others are welcome to add to the list.
<br>
<p>o Change the place where ORTE stores its session information
<br>
-mca orte_tmpdir_base /path/to/some/local/store
<br>
For example:
<br>
-mca orte_tmpdir_base /dev/shm
<br>
<p>**Note: the following options are only available in Open MPI v1.5.5+**
<br>
<p>o Change where shmem mmap places its files.
<br>
-mca shmem_mmap_relocate_backing_file -1 -mca shmem_mmap_backing_file_base_dir /dev/shm
<br>
<p>o Change the backing facility used by the sm mpool and sm BTL to posix or sysv
<br>
-mca shmem posix
<br>
-mca shmem sysv
<br>
<p>Sam
<br>
<p>On Apr 24, 2012, at 12:34 PM, Seyyed Mohtadin Hashemi wrote:
<br>
<p>Hi,
<br>
<p>I ran those cmd's and have posted the outputs on: <a href="https://svn.open-mpi.org/trac/ompi/ticket/3076">https://svn.open-mpi.org/trac/ompi/ticket/3076</a>
<br>
<p>-mca shmem posix worked for all -np (even when oversubscribing), however sysv did not work for any -np.
<br>
<p>On Tue, Apr 24, 2012 at 5:36 PM, Gutierrez, Samuel K &lt;samuel_at_[hidden]&lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
<p>Just out of curiosity, what happens when you add
<br>
<p>-mca shmem posix
<br>
<p>to your mpirun command line using 1.5.5?
<br>
<p>Can you also please try:
<br>
<p>-mca shmem sysv
<br>
<p>I'm shooting in the dark here, but I want to make sure that the failure isn't due to a small backing store.
<br>
<p>Thanks,
<br>
<p>Sam
<br>
<p>On Apr 16, 2012, at 8:57 AM, Gutierrez, Samuel K wrote:
<br>
<p>Hi,
<br>
<p>Sorry about the lag.  I'll take a closer look at this ASAP.
<br>
<p>Appreciate your patience,
<br>
<p>Sam
<br>
________________________________
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Monday, April 16, 2012 8:52 AM
<br>
To: Seyyed Mohtadin Hashemi
<br>
Cc: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI fails to run with -np larger than 10
<br>
<p>No earthly idea. As I said, I'm afraid Sam is pretty much unavailable for the next two weeks, so we probably don't have much hope of fixing it.
<br>
<p>I see in your original note that you tried the 1.5.5 beta rc and got the same results, so I assume this must be something in  your system config that is causing the issue. I'll file a bug for him (pointing to this thread) so this doesn't get lost, but would suggest you run ^sm for now unless someone else has other suggestions.
<br>
<p><p>On Apr 16, 2012, at 2:57 AM, Seyyed Mohtadin Hashemi wrote:
<br>
<p>I recompiled everything from scratch with GCC 4.4.5 and 4.7 using OMPI 1.4.5 tarball.
<br>
<p>I did some tests and it does not seem that i can make it work, i tried these:
<br>
<p>btl_sm_num_fifos 4
<br>
btl_sm_free_list_num 1000
<br>
btl_sm_free_list_max 1000000
<br>
mpool_sm_min_size 1500000000
<br>
mpool_sm_max_size 7500000000
<br>
<p>but nothing helped. I started out with varying one parameter at the time from default to 1000000 (except fifo which i only varied till 100, and sm_min and sm_max which i varied from 67mb [default was set to 67xxxxxx] to 7.5gb) to see what reactions i could get. When running with 10 npp everything worked, but as soon as i went to 11 npp it crashed with the same old error.
<br>
<p>On Fri, Apr 13, 2012 at 6:41 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>On Apr 13, 2012, at 10:36 AM, Seyyed Mohtadin Hashemi wrote:
<br>
<p>That fixed the issue but have brought a big question mark on why this happened.
<br>
<p>I'm pretty sure it's not a system memory issue, the node with least RAM has 8gb which i would think is more than enough.
<br>
<p>Do you think that adjusting the btl_sm_eager_limit, mpool_sm_min_size, and mpool_sm_max_size can help fix the problem? (Found this at<a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> )  Because compared to the -np 10 the performance of -np 18 is worse when running with the cmd you suggested. I'll try playing around with the parameters and see what works.
<br>
<p>Yes, performance will definitely be worse - I was just trying to isolate the problem. I would play a little with those sizes and see what you can do. Our shared memory person is pretty much unavailable for the next two weeks, but the rest of us will at least try to get you working.
<br>
<p>We typically do run with more than 10 ppn, so I know the base sm code works at that scale. However, those nodes usually have 32Gbytes of RAM, and the default sm params are scaled accordingly.
<br>
<p><p><p>On Fri, Apr 13, 2012 at 5:44 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Afraid I have no idea how those packages were built, what release they correspond to, etc. I would suggest sticking with the tarballs.
<br>
<p>Your output indicates a problem with shared memory when you completely fill the machine. Could be a couple of things, like running out of memory - but for now, try adding -mca btl ^sm to your cmd line. Should work.
<br>
<p><p>On Apr 13, 2012, at 5:09 AM, Seyyed Mohtadin Hashemi wrote:
<br>
<p>Hi,
<br>
<p>Sorry that it took so long to answer, I didn't get any return mails and had to check the digest for reply.
<br>
<p>Anyway, when i compiled from scratch then i did use the tarballs from open-mpi.org&lt;<a href="http://open-mpi.org/">http://open-mpi.org/</a>&gt;. GROMACS is not the problem (or at least i don't think so), i just used it as a check to see if i could run parallel jobs - i am now using OSU benchmarks because i can't be sure that the problem is not with GROMACS.
<br>
<p>On the new installation i have not installed (nor compiled) OMPI from the official tarballs but rather installed the &quot;openmpi-bin, openmpi-common, libopenmpi1.3, openmpi-checkpoint, and libopenmpi-dev&quot; packages using apt-get.
<br>
<p>As for the simple examples (i.e. ring_c, hello_c, and connectivity_c extracted from the 1.4.2 official tarball) i get the exact same behavior as with GROMACS/OSU bench.
<br>
<p>I suspect you'll have to ask someone familiar with GROMACS about that specific package. As for testing OMPI, can you run the codes in the examples directory - e.g., &quot;hello&quot; and &quot;ring&quot;? I assume you are downloading and installing OMPI from our tarballs?
<br>
<p>On Apr 12, 2012, at 7:04 AM, Seyyed Mohtadin Hashemi wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very peculiar problem: I have a micro cluster with three nodes (18 cores total); the nodes are clones of each other and connected to a frontend via Ethernet and Debian squeeze as the OS for all nodes. When I run parallel jobs I can used up ?-np 10? if I go further the job crashes, I have primarily done tests with GROMACS (because that is what I will be running) but have also used OSU Micro-Benchmarks 3.5.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a simple parallel job I use: ?path/mpirun ?hostfile path/hostfile ?np XX ?d ?display-map path/mdrun_mpi ?s path/topol.tpr ?o path/output.trr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (path is global) For ?np XX being smaller than or 10 it works, however as soon as I make use of 11 or larger the whole thing crashes. The terminal dump is attached to this mail: when_working.txt is for ??np 10?, when_crash.txt is for ??np 12?, and OpenMPI_info.txt is output from ?path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v ompi full ?parsable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all yield the same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output files are from a new install I did today: I formatted all nodes and started from a fresh minimal install of Squeeze and used &quot;apt-get install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran two jobs using the parameters described above, I also did one with OSU bench (data is not included) it also crashed with ?-np? larger than 10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope somebody can help figure out what is wrong and how I can fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Mohtadin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt; ** WARNING: This email contains an attachment of a very suspicious type. **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate. Opening this attachment may cause irreparable **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files. If you have any questions **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner. **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Archive.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><p><pre>
--
De venligste hilsner/I am, yours most sincerely
Seyyed Mohtadin Hashemi
--
De venligste hilsner/I am, yours most sincerely
Seyyed Mohtadin Hashemi
--
De venligste hilsner/I am, yours most sincerely
Seyyed Mohtadin Hashemi
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19114.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19112.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19111.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19034.php">Jeffrey Squyres: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
