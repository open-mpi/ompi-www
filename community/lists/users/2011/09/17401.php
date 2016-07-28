<?
$subject_val = "[OMPI users] on cluster job slowdown near end";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 17:44:18 2011" -->
<!-- isoreceived="20110922214418" -->
<!-- sent="Thu, 22 Sep 2011 15:44:11 -0600" -->
<!-- isosent="20110922214411" -->
<!-- name="Tom Hilinski" -->
<!-- email="tom.hilinski_at_[hidden]" -->
<!-- subject="[OMPI users] on cluster job slowdown near end" -->
<!-- id="4E7BAC2B.5070305_at_colostate.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] on cluster job slowdown near end<br>
<strong>From:</strong> Tom Hilinski (<em>tom.hilinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 17:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17402.php">Martin Siegert: "[OMPI users] PATH settings"</a>
<li><strong>Previous message:</strong> <a href="17400.php">German Hoecht: "[OMPI users] maximum size for read buffer in  MPI_File_read/write"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<li><strong>Reply:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, A job I am running slows down as it approaches the end. I'd
<br>
appreciate any ideas you may have on possible cause or what else I can
<br>
look at for diagnostic info.
<br>
<p>Environment:
<br>
* Linux cluster, very recent version of Fedora.
<br>
* openmpi 1.5
<br>
<p>Characteristics of job:
<br>
* Tasks are all the same size and duration.
<br>
* 56K tasks, but multiple tasks given to each process.
<br>
* Typically run 120 processes.
<br>
* Slowdown starts at ~52K completed, then rate of completion of each
<br>
task declines geometrically from ~1k/minute to 4/minute at 54K.
<br>
<p>Here are some queries done when the slowdown occurs:
<br>
<p>* &quot;ps&quot; on master node - most processes in suspend state:
<br>
F S   UID   PID  PPID  C PRI  NI ADDR SZ WCHAN  TTY          TIME CMD
<br>
0 S  3348 27933 15675  0  80   0 - 13608 poll_s pts/0    00:00:00 mpiexec
<br>
0 S  3348 28009 27933 14  80   0 - 227632 epoll_ pts/0   00:08:13 C5MPI
<br>
0 S  3348 28011 27933 14  80   0 - 227672 epoll_ pts/0   00:08:17 C5MPI
<br>
0 S  3348 28013 27933 13  80   0 - 227713 epoll_ pts/0   00:08:06 C5MPI
<br>
0 S  3348 28015 27933 13  80   0 - 227844 epoll_ pts/0   00:08:02 C5MPI
<br>
0 S  3348 28017 27933 14  80   0 - 227849 epoll_ pts/0   00:08:13 C5MPI
<br>
0 S  3348 28019 27933 13  80   0 - 227892 epoll_ pts/0   00:08:07 C5MPI
<br>
<p>* file handles (allocated handle count is ~constant):
<br>
$ cat /proc/sys/fs/file-nr
<br>
3968    0       801014
<br>
<p>* Processes in a suspend or run state (varies):
<br>
$ orte-top -pid 27933 | grep ' S |' | wc -l
<br>
124
<br>
$ orte-top -pid 27933 | grep ' R |'
<br>
Rank |  Nodename | Command |   Pid | State |   Time | Pri | #threads | 
<br>
Vsize |    RSS | Peak Vsize | Shr Size |
<br>
&nbsp;&nbsp;&nbsp;0 | rubel-001 |   C5MPI | 14700 |     R |   2.2H |  20 |        1 |
<br>
246208 |  12660 |     246208 |    17664 |
<br>
&nbsp;&nbsp;&nbsp;1 | rubel-001 |   C5MPI | 14702 |     R |   2.2H |  20 |        1 |
<br>
245360 |  44860 |     245360 |    17664 |
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17402.php">Martin Siegert: "[OMPI users] PATH settings"</a>
<li><strong>Previous message:</strong> <a href="17400.php">German Hoecht: "[OMPI users] maximum size for read buffer in  MPI_File_read/write"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
<li><strong>Reply:</strong> <a href="17428.php">Jeff Squyres: "Re: [OMPI users] on cluster job slowdown near end"</a>
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
