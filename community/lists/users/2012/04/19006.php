<?
$subject_val = "Re: [OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 12:37:29 2012" -->
<!-- isoreceived="20120413163729" -->
<!-- sent="Fri, 13 Apr 2012 18:36:42 +0200" -->
<!-- isosent="20120413163642" -->
<!-- name="Seyyed Mohtadin Hashemi" -->
<!-- email="haadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="CAKJMja+6sxNszpXvC2SoNenHg_zHty4rn=xiA5Fs=1EMrWy9Fw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="142B902B-F283-4A62-A09D-20703EE85F96_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-04-13 12:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That fixed the issue but have brought a big question mark on why this
<br>
happened.
<br>
<p>I'm pretty sure it's not a system memory issue, the node with least RAM has
<br>
8gb which i would think is more than enough.
<br>
<p>Do you think that adjusting the btl_sm_eager_limit, mpool_sm_min_size, and
<br>
mpool_sm_max_size can help fix the problem? (Found this at
<br>
<a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> )  Because compared to the -np 10
<br>
the performance of -np 18 is worse when running with the cmd you suggested.
<br>
I'll try playing around with the parameters and see what works.
<br>
<p>On Fri, Apr 13, 2012 at 5:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Afraid I have no idea how those packages were built, what release they
</span><br>
<span class="quotelev1">&gt; correspond to, etc. I would suggest sticking with the tarballs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your output indicates a problem with shared memory when you completely
</span><br>
<span class="quotelev1">&gt; fill the machine. Could be a couple of things, like running out of memory -
</span><br>
<span class="quotelev1">&gt; but for now, try adding -mca btl ^sm to your cmd line. Should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2012, at 5:09 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry that it took so long to answer, I didn't get any return mails and
</span><br>
<span class="quotelev1">&gt; had to check the digest for reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, when i compiled from scratch then i did use the tarballs from
</span><br>
<span class="quotelev1">&gt; open-mpi.org. GROMACS is not the problem (or at least i don't think so),
</span><br>
<span class="quotelev1">&gt; i just used it as a check to see if i could run parallel jobs - i am now
</span><br>
<span class="quotelev1">&gt; using OSU benchmarks because i can't be sure that the problem is not with
</span><br>
<span class="quotelev1">&gt; GROMACS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the new installation i have not installed (nor compiled) OMPI from the
</span><br>
<span class="quotelev1">&gt; official tarballs but rather installed the &quot;openmpi-bin, openmpi-common,
</span><br>
<span class="quotelev1">&gt; libopenmpi1.3, openmpi-checkpoint, and libopenmpi-dev&quot; packages using
</span><br>
<span class="quotelev1">&gt; apt-get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the simple examples (i.e. ring_c, hello_c, and connectivity_c
</span><br>
<span class="quotelev1">&gt; extracted from the 1.4.2 official tarball) i get the exact same behavior as
</span><br>
<span class="quotelev1">&gt; with GROMACS/OSU bench.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect you'll have to ask someone familiar with GROMACS about that
</span><br>
<span class="quotelev2">&gt;&gt; specific package. As for testing OMPI, can you run the codes in the
</span><br>
<span class="quotelev2">&gt;&gt; examples directory - e.g., &quot;hello&quot; and &quot;ring&quot;? I assume you are downloading
</span><br>
<span class="quotelev2">&gt;&gt; and installing OMPI from our tarballs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 12, 2012, at 7:04 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a very peculiar problem: I have a micro cluster with three nodes
</span><br>
<span class="quotelev2">&gt;&gt; (18 cores total); the nodes are clones of each other and connected to a
</span><br>
<span class="quotelev2">&gt;&gt; frontend via Ethernet and Debian squeeze as the OS for all nodes. When I
</span><br>
<span class="quotelev2">&gt;&gt; run parallel jobs I can used up ?-np 10? if I go further the job crashes, I
</span><br>
<span class="quotelev2">&gt;&gt; have primarily done tests with GROMACS (because that is what I will be
</span><br>
<span class="quotelev2">&gt;&gt; running) but have also used OSU Micro-Benchmarks 3.5.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For a simple parallel job I use: ?path/mpirun ?hostfile path/hostfile
</span><br>
<span class="quotelev2">&gt;&gt; ?np XX ?d ?display-map path/mdrun_mpi ?s path/topol.tpr ?o path/output.trr?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (path is global) For ?np XX being smaller than or 10 it works, however
</span><br>
<span class="quotelev2">&gt;&gt; as soon as I make use of 11 or larger the whole thing crashes. The terminal
</span><br>
<span class="quotelev2">&gt;&gt; dump is attached to this mail: when_working.txt is for ??np 10?,
</span><br>
<span class="quotelev2">&gt;&gt; when_crash.txt is for ??np 12?, and OpenMPI_info.txt is output from
</span><br>
<span class="quotelev2">&gt;&gt; ?path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v
</span><br>
<span class="quotelev2">&gt;&gt; ompi full ?parsable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all
</span><br>
<span class="quotelev2">&gt;&gt; yield the same result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output files are from a new install I did today: I formatted all
</span><br>
<span class="quotelev2">&gt;&gt; nodes and started from a fresh minimal install of Squeeze and used &quot;apt-get
</span><br>
<span class="quotelev2">&gt;&gt; install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran
</span><br>
<span class="quotelev2">&gt;&gt; two jobs using the parameters described above, I also did one with OSU
</span><br>
<span class="quotelev2">&gt;&gt; bench (data is not included) it also crashed with ?-np? larger than 10.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope somebody can help figure out what is wrong and how I can fix it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mohtadin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; ** **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** WARNING: This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** You are urged NOT to open this attachment unless you are absolutely **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** sure it is legitimate. Opening this attachment may cause irreparable
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** damage to your computer and your files. If you have any questions **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING
</span><br>
<span class="quotelev2">&gt;&gt; IT. **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Archive.zip&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
