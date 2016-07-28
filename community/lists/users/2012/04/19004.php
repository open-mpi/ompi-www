<?
$subject_val = "Re: [OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 07:10:14 2012" -->
<!-- isoreceived="20120413111014" -->
<!-- sent="Fri, 13 Apr 2012 13:09:30 +0200" -->
<!-- isosent="20120413110930" -->
<!-- name="Seyyed Mohtadin Hashemi" -->
<!-- email="haadah_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="CAKJMjaLwU3=W_5AMWi0LM1gs9J1KnESY7Fv-CT57Q+S3p6KjJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] OpenMPI fails to run with -np larger than 10" -->
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
<strong>Date:</strong> 2012-04-13 07:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="19002.php">Seyyed Mohtadin Hashemi: "[OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry that it took so long to answer, I didn't get any return mails and had
<br>
to check the digest for reply.
<br>
<p>Anyway, when i compiled from scratch then i did use the tarballs from
<br>
open-mpi.org. GROMACS is not the problem (or at least i don't think so), i
<br>
just used it as a check to see if i could run parallel jobs - i am now
<br>
using OSU benchmarks because i can't be sure that the problem is not with
<br>
GROMACS.
<br>
<p>On the new installation i have not installed (nor compiled) OMPI from the
<br>
official tarballs but rather installed the &quot;openmpi-bin, openmpi-common,
<br>
libopenmpi1.3, openmpi-checkpoint, and libopenmpi-dev&quot; packages using
<br>
apt-get.
<br>
<p>As for the simple examples (i.e. ring_c, hello_c, and connectivity_c
<br>
extracted from the 1.4.2 official tarball) i get the exact same behavior as
<br>
with GROMACS/OSU bench.
<br>
<p>I suspect you'll have to ask someone familiar with GROMACS about that
<br>
<span class="quotelev1">&gt; specific package. As for testing OMPI, can you run the codes in the
</span><br>
<span class="quotelev1">&gt; examples directory - e.g., &quot;hello&quot; and &quot;ring&quot;? I assume you are downloading
</span><br>
<span class="quotelev1">&gt; and installing OMPI from our tarballs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; On Apr 12, 2012, at 7:04 AM, Seyyed Mohtadin Hashemi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a very peculiar problem: I have a micro cluster with three nodes
</span><br>
<span class="quotelev1">&gt; (18 cores total); the nodes are clones of each other and connected to a
</span><br>
<span class="quotelev1">&gt; frontend via Ethernet and Debian squeeze as the OS for all nodes. When I
</span><br>
<span class="quotelev1">&gt; run parallel jobs I can used up ?-np 10? if I go further the job crashes, I
</span><br>
<span class="quotelev1">&gt; have primarily done tests with GROMACS (because that is what I will be
</span><br>
<span class="quotelev1">&gt; running) but have also used OSU Micro-Benchmarks 3.5.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a simple parallel job I use: ?path/mpirun ?hostfile path/hostfile ?np
</span><br>
<span class="quotelev1">&gt; XX ?d ?display-map path/mdrun_mpi ?s path/topol.tpr ?o path/output.trr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (path is global) For ?np XX being smaller than or 10 it works, however as
</span><br>
<span class="quotelev1">&gt; soon as I make use of 11 or larger the whole thing crashes. The terminal
</span><br>
<span class="quotelev1">&gt; dump is attached to this mail: when_working.txt is for ??np 10?,
</span><br>
<span class="quotelev1">&gt; when_crash.txt is for ??np 12?, and OpenMPI_info.txt is output from
</span><br>
<span class="quotelev1">&gt; ?path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v
</span><br>
<span class="quotelev1">&gt; ompi full ?parsable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all yield
</span><br>
<span class="quotelev1">&gt; the same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output files are from a new install I did today: I formatted all
</span><br>
<span class="quotelev1">&gt; nodes and started from a fresh minimal install of Squeeze and used &quot;apt-get
</span><br>
<span class="quotelev1">&gt; install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran
</span><br>
<span class="quotelev1">&gt; two jobs using the parameters described above, I also did one with OSU
</span><br>
<span class="quotelev1">&gt; bench (data is not included) it also crashed with ?-np? larger than 10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope somebody can help figure out what is wrong and how I can fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mohtadin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1"> &gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** WARNING: This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate. Opening this attachment may cause irreparable **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files. If you have any questions **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING
</span><br>
<span class="quotelev1">&gt; IT. **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Archive.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1"> &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19004/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="19002.php">Seyyed Mohtadin Hashemi: "[OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19005.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
