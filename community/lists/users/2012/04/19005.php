<?
$subject_val = "Re: [OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 11:44:52 2012" -->
<!-- isoreceived="20120413154452" -->
<!-- sent="Fri, 13 Apr 2012 09:44:43 -0600" -->
<!-- isosent="20120413154443" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="142B902B-F283-4A62-A09D-20703EE85F96_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKJMjaLwU3=W_5AMWi0LM1gs9J1KnESY7Fv-CT57Q+S3p6KjJw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 11:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19004.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19004.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I have no idea how those packages were built, what release they correspond to, etc. I would suggest sticking with the tarballs.
<br>
<p>Your output indicates a problem with shared memory when you completely fill the machine. Could be a couple of things, like running out of memory - but for now, try adding -mca btl ^sm to your cmd line. Should work.
<br>
<p><p>On Apr 13, 2012, at 5:09 AM, Seyyed Mohtadin Hashemi wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry that it took so long to answer, I didn't get any return mails and had to check the digest for reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, when i compiled from scratch then i did use the tarballs from open-mpi.org. GROMACS is not the problem (or at least i don't think so), i just used it as a check to see if i could run parallel jobs - i am now using OSU benchmarks because i can't be sure that the problem is not with GROMACS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the new installation i have not installed (nor compiled) OMPI from the official tarballs but rather installed the &quot;openmpi-bin, openmpi-common, libopenmpi1.3, openmpi-checkpoint, and libopenmpi-dev&quot; packages using apt-get.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the simple examples (i.e. ring_c, hello_c, and connectivity_c extracted from the 1.4.2 official tarball) i get the exact same behavior as with GROMACS/OSU bench.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect you'll have to ask someone familiar with GROMACS about that specific package. As for testing OMPI, can you run the codes in the examples directory - e.g., &quot;hello&quot; and &quot;ring&quot;? I assume you are downloading and installing OMPI from our tarballs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2012, at 7:04 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a very peculiar problem: I have a micro cluster with three nodes (18 cores total); the nodes are clones of each other and connected to a frontend via Ethernet and Debian squeeze as the OS for all nodes. When I run parallel jobs I can used up ?-np 10? if I go further the job crashes, I have primarily done tests with GROMACS (because that is what I will be running) but have also used OSU Micro-Benchmarks 3.5.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For a simple parallel job I use: ?path/mpirun ?hostfile path/hostfile ?np XX ?d ?display-map path/mdrun_mpi ?s path/topol.tpr ?o path/output.trr?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (path is global) For ?np XX being smaller than or 10 it works, however as soon as I make use of 11 or larger the whole thing crashes. The terminal dump is attached to this mail: when_working.txt is for ??np 10?, when_crash.txt is for ??np 12?, and OpenMPI_info.txt is output from ?path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v ompi full ?parsable?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all yield the same result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output files are from a new install I did today: I formatted all nodes and started from a fresh minimal install of Squeeze and used &quot;apt-get install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran two jobs using the parameters described above, I also did one with OSU bench (data is not included) it also crashed with ?-np? larger than 10.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope somebody can help figure out what is wrong and how I can fix it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Mohtadin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; ** **
</span><br>
<span class="quotelev2">&gt; &gt; ** WARNING: This email contains an attachment of a very suspicious type. **
</span><br>
<span class="quotelev2">&gt; &gt; ** You are urged NOT to open this attachment unless you are absolutely **
</span><br>
<span class="quotelev2">&gt; &gt; ** sure it is legitimate. Opening this attachment may cause irreparable **
</span><br>
<span class="quotelev2">&gt; &gt; ** damage to your computer and your files. If you have any questions **
</span><br>
<span class="quotelev2">&gt; &gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev2">&gt; &gt; ** **
</span><br>
<span class="quotelev2">&gt; &gt; ** This warning was added by the IU Computer Science Dept. mail scanner. **
</span><br>
<span class="quotelev2">&gt; &gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Archive.zip&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19004.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19004.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19006.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
