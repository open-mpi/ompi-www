<?
$subject_val = "[OMPI users] OpenMPI fails to run with -np larger than 10";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 12 09:04:52 2012" -->
<!-- isoreceived="20120412130452" -->
<!-- sent="Thu, 12 Apr 2012 15:04:07 +0200" -->
<!-- isosent="20120412130407" -->
<!-- name="Seyyed Mohtadin Hashemi" -->
<!-- email="haadah_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI fails to run with -np larger than 10" -->
<!-- id="13469_1334235892_q3CD4mc9022257_CAKJMjaJE65+mm-NK82dfs1G1Y5gFbYrqxqPtYashrc_RSbeH_A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI fails to run with -np larger than 10<br>
<strong>From:</strong> Seyyed Mohtadin Hashemi (<em>haadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-12 09:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe reply:</strong> <a href="19004.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe reply:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe reply:</strong> <a href="19012.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a very peculiar problem: I have a micro cluster with three nodes (18
<br>
cores total); the nodes are clones of each other and connected to a
<br>
frontend via Ethernet and Debian squeeze as the OS for all nodes. When I
<br>
run parallel jobs I can used up &#226;&#128;&#156;-np 10&#226;&#128;&#157; if I go further the job crashes, I
<br>
have primarily done tests with GROMACS (because that is what I will be
<br>
running) but have also used OSU Micro-Benchmarks 3.5.2.
<br>
<p>For a simple parallel job I use: &#226;&#128;&#156;path/mpirun &#226;&#128;&#147;hostfile path/hostfile &#226;&#128;&#147;np
<br>
XX &#226;&#128;&#147;d &#226;&#128;&#147;display-map path/mdrun_mpi &#226;&#128;&#147;s path/topol.tpr &#226;&#128;&#147;o path/output.trr&#226;&#128;&#157;
<br>
<p>(path is global) For &#226;&#128;&#147;np XX being smaller than or 10 it works, however as
<br>
soon as I make use of 11 or larger the whole thing crashes. The terminal
<br>
dump is attached to this mail: when_working.txt is for &#226;&#128;&#156;&#226;&#128;&#147;np 10&#226;&#128;&#157;,
<br>
when_crash.txt is for &#226;&#128;&#156;&#226;&#128;&#147;np 12&#226;&#128;&#157;, and OpenMPI_info.txt is output from
<br>
&#226;&#128;&#156;path/mpirun --bynode --hostfile path/hostfile --tag-output ompi_info -v
<br>
ompi full &#226;&#128;&#147;parsable&#226;&#128;&#157;
<br>
<p>I have tried OpenMPI v.1.4.2 all the way up to beta v1.5.5, and all yield
<br>
the same result.
<br>
<p>The output files are from a new install I did today: I formatted all nodes
<br>
and started from a fresh minimal install of Squeeze and used &quot;apt-get
<br>
install gromacs gromacs-openmpi&quot; and installed all dependencies. Then I ran
<br>
two jobs using the parameters described above, I also did one with OSU
<br>
bench (data is not included) it also crashed with &#226;&#128;&#156;-np&#226;&#128;&#157; larger than 10.
<br>
<p>I hope somebody can help figure out what is wrong and how I can fix it.
<br>
<p>Best regards,
<br>
Mohtadin
<br>
<p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19002/Archive.zip">Archive.zip</a>
</ul>
<!-- attachment="Archive.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19001.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19003.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe reply:</strong> <a href="19004.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Reply:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe reply:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Maybe reply:</strong> <a href="19012.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
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
