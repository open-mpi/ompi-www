<?
$subject_val = "Re: [OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 14:35:24 2012" -->
<!-- isoreceived="20120424183524" -->
<!-- sent="Tue, 24 Apr 2012 20:34:38 +0200" -->
<!-- isosent="20120424183438" -->
<!-- name="Seyyed Mohtadin Hashemi" -->
<!-- email="haadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="CAKJMja+AJJNWj5va1M=sb9QFEjXbNZ2SEYUJxxMuy2CwP0yvFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54C29030-EC1B-4D43-ABF7-1C20C9013353_at_lanl.gov" -->
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
<strong>From:</strong> Seyyed Mohtadin Hashemi (<em>haadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 14:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>In reply to:</strong> <a href="19092.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I ran those cmd's and have posted the outputs on:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/3076">https://svn.open-mpi.org/trac/ompi/ticket/3076</a>
<br>
<p>-mca shmem posix worked for all -np (even when oversubscribing), however
<br>
sysv did not work for any -np.
<br>
<p>On Tue, Apr 24, 2012 at 5:36 PM, Gutierrez, Samuel K &lt;samuel_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Just out of curiosity, what happens when you add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -mca shmem posix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  to your mpirun command line using 1.5.5?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Can you also please try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -mca shmem sysv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I'm shooting in the dark here, but I want to make sure that the failure
</span><br>
<span class="quotelev1">&gt; isn't due to a small backing store.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 16, 2012, at 8:57 AM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sorry about the lag.  I'll take a closer look at this ASAP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Appreciate your patience,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sam
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf
</span><br>
<span class="quotelev1">&gt; of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, April 16, 2012 8:52 AM
</span><br>
<span class="quotelev1">&gt; *To:* Seyyed Mohtadin Hashemi
</span><br>
<span class="quotelev1">&gt; *Cc:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI fails to run with -np larger than 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  No earthly idea. As I said, I'm afraid Sam is pretty much unavailable
</span><br>
<span class="quotelev1">&gt; for the next two weeks, so we probably don't have much hope of fixing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I see in your original note that you tried the 1.5.5 beta rc and got the
</span><br>
<span class="quotelev1">&gt; same results, so I assume this must be something in  your system config
</span><br>
<span class="quotelev1">&gt; that is causing the issue. I'll file a bug for him (pointing to this
</span><br>
<span class="quotelev1">&gt; thread) so this doesn't get lost, but would suggest you run ^sm for now
</span><br>
<span class="quotelev1">&gt; unless someone else has other suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 16, 2012, at 2:57 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I recompiled everything from scratch with GCC 4.4.5 and 4.7 using OMPI
</span><br>
<span class="quotelev1">&gt; 1.4.5 tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I did some tests and it does not seem that i can make it work, i tried
</span><br>
<span class="quotelev1">&gt; these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  btl_sm_num_fifos 4
</span><br>
<span class="quotelev1">&gt; btl_sm_free_list_num 1000
</span><br>
<span class="quotelev1">&gt; btl_sm_free_list_max 1000000
</span><br>
<span class="quotelev1">&gt; mpool_sm_min_size 1500000000
</span><br>
<span class="quotelev1">&gt; mpool_sm_max_size 7500000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  but nothing helped. I started out with varying one parameter at the time
</span><br>
<span class="quotelev1">&gt; from default to 1000000 (except fifo which i only varied till 100, and
</span><br>
<span class="quotelev1">&gt; sm_min and sm_max which i varied from 67mb [default was set to 67xxxxxx] to
</span><br>
<span class="quotelev1">&gt; 7.5gb) to see what reactions i could get. When running with 10 npp
</span><br>
<span class="quotelev1">&gt; everything worked, but as soon as i went to 11 npp it crashed with the same
</span><br>
<span class="quotelev1">&gt; old error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 13, 2012 at 6:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Apr 13, 2012, at 10:36 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  That fixed the issue but have brought a big question mark on why this
</span><br>
<span class="quotelev2">&gt;&gt; happened.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I'm pretty sure it's not a system memory issue, the node with least RAM
</span><br>
<span class="quotelev2">&gt;&gt; has 8gb which i would think is more than enough.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Do you think that adjusting the btl_sm_eager_limit, mpool_sm_min_size,
</span><br>
<span class="quotelev2">&gt;&gt; and mpool_sm_max_size can help fix the problem? (Found this at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> )  Because compared to the -np
</span><br>
<span class="quotelev2">&gt;&gt; 10 the performance of -np 18 is worse when running with the cmd you
</span><br>
<span class="quotelev2">&gt;&gt; suggested. I'll try playing around with the parameters and see what works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Yes, performance will definitely be worse - I was just trying to
</span><br>
<span class="quotelev2">&gt;&gt; isolate the problem. I would play a little with those sizes and see what
</span><br>
<span class="quotelev2">&gt;&gt; you can do. Our shared memory person is pretty much unavailable for the
</span><br>
<span class="quotelev2">&gt;&gt; next two weeks, but the rest of us will at least try to get you working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  We typically do run with more than 10 ppn, so I know the base sm code
</span><br>
<span class="quotelev2">&gt;&gt; works at that scale. However, those nodes usually have 32Gbytes of RAM, and
</span><br>
<span class="quotelev2">&gt;&gt; the default sm params are scaled accordingly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Fri, Apr 13, 2012 at 5:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid I have no idea how those packages were built, what release they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correspond to, etc. I would suggest sticking with the tarballs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Your output indicates a problem with shared memory when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completely fill the machine. Could be a couple of things, like running out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of memory - but for now, try adding -mca btl ^sm to your cmd line. Should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Apr 13, 2012, at 5:09 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Sorry that it took so long to answer, I didn't get any return mails
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and had to check the digest for reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Anyway, when i compiled from scratch then i did use the tarballs from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-mpi.org. GROMACS is not the problem (or at least i don't think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so), i just used it as a check to see if i could run parallel jobs - i am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now using OSU benchmarks because i can't be sure that the problem is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with GROMACS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On the new installation i have not installed (nor compiled) OMPI from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the official tarballs but rather installed the &quot;openmpi-bin,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-common, libopenmpi1.3, openmpi-checkpoint, and libopenmpi-dev&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; packages using apt-get.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  As for the simple examples (i.e. ring_c, hello_c, and connectivity_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extracted from the 1.4.2 official tarball) i get the exact same behavior as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with GROMACS/OSU bench.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I suspect you'll have to ask someone familiar with GROMACS about that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific package. As for testing OMPI, can you run the codes in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; examples directory - e.g., &quot;hello&quot; and &quot;ring&quot;? I assume you are downloading
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and installing OMPI from our tarballs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On Apr 12, 2012, at 7:04 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;  &gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; I have a very peculiar problem: I have a micro cluster with three
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes (18 cores total); the nodes are clones of each other and connected to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a frontend via Ethernet and Debian squeeze as the OS for all nodes. When I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run parallel jobs I can used up ?-np 10? if I go further the job crashes, I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have primarily done tests with GROMACS (because that is what I will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running) but have also used OSU Micro-Benchmarks 3.5.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; For a simple parallel job I use: ?path/mpirun ?hostfile path/hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ?np XX ?d ?display-map path/mdrun_mpi ?s path/topol.tpr ?o path/output.trr?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; (path is global) For ?np XX being smaller than or 10 it works,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; however as soon as I make use of 11 or larger the whole thing crashes. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminal dump is attached to this mail: when_working.txt is for ??np 10?,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when_crash.txt is for ??np 12?, and OpenMPI_info.txt is output from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ?path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi full ?parsable?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; yield the same result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; The output files are from a new install I did today: I formatted all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes and started from a fresh minimal install of Squeeze and used &quot;apt-get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two jobs using the parameters described above, I also did one with OSU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bench (data is not included) it also crashed with ?-np? larger than 10.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; I hope somebody can help figure out what is wrong and how I can fix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; Mohtadin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** WARNING: This email contains an attachment of a very suspicious
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type. **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** You are urged NOT to open this attachment unless you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; absolutely **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** sure it is legitimate. Opening this attachment may cause
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; irreparable **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** damage to your computer and your files. If you have any questions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPENING IT. **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; ** This warning was added by the IU Computer Science Dept. mail
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scanner. **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; &lt;Archive.zip&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; De venligste hilsner/I am, yours most sincerely
</span><br>
<span class="quotelev2">&gt;&gt; Seyyed Mohtadin Hashemi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; De venligste hilsner/I am, yours most sincerely
</span><br>
<span class="quotelev1">&gt; Seyyed Mohtadin Hashemi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
De venligste hilsner/I am, yours most sincerely
Seyyed Mohtadin Hashemi
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19096/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19095.php">Gus Correa: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>In reply to:</strong> <a href="19092.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
