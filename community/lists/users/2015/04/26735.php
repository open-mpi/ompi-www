<?
$subject_val = "[OMPI users] MPI_Init() time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 07:12:17 2015" -->
<!-- isoreceived="20150415111217" -->
<!-- sent="Wed, 15 Apr 2015 13:12:15 +0200" -->
<!-- isosent="20150415111215" -->
<!-- name="cristian" -->
<!-- email="cristian.ruiz_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init() time" -->
<!-- id="552E478F.9010808_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init() time<br>
<strong>From:</strong> cristian (<em>cristian.ruiz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 07:12:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26734.php">John Hearns: "[OMPI users] Select a card in a multi card system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26737.php">Ralph Castain: "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>Reply:</strong> <a href="26737.php">Ralph Castain: "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>Reply:</strong> <a href="26741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init() time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I noticed when performing a profiling of an application that the 
<br>
MPI_init() function takes a considerable amount of time.
<br>
There is a big difference when running 32 processes over 32 machines and 
<br>
32 processes over 8 machines (Each machine has 8 cores).
<br>
These are the results of the profiling:
<br>
<p><p>Results for 32 cores (8 machines)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group.1 percent        usec
<br>
38            SSOR 79.1125 2557445.625
<br>
7       EXCHANGE_1 31.8125      33.250
<br>
24      MPI_Recv() 26.0750      33.375
<br>
2             BLTS 24.7500     103.125
<br>
3             BUTS 22.2375      92.500
<br>
12       INIT_COMM 19.8500 1311003.375
<br>
*22      MPI_Init() 19.8500 1310925.750*
<br>
33             RHS 18.4000    4690.500
<br>
8       EXCHANGE_3  9.2750    1179.000
<br>
26      MPI_Wait()  7.2250     565.125
<br>
13           JACLD  6.4875      27.000
<br>
25      MPI_Send()  6.3500       8.000
<br>
14            JACU  6.2500      26.000
<br>
37           SETIV  0.6625   20908.500
<br>
6            EXACT  0.2188       0.000
<br>
4             ERHS  0.2000   11499.000
<br>
<p>Results for 32 machines
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group.1  percent         usec
<br>
38            SSOR 97.28889 2573471.0000
<br>
7       EXCHANGE_1 39.25556      33.3333
<br>
2             BLTS 29.11111      98.7778
<br>
3             BUTS 27.96667      95.0000
<br>
24      MPI_Recv() 27.48889      28.7778
<br>
33             RHS 23.98889    5018.6667
<br>
25      MPI_Send() 13.51111      14.0000
<br>
8       EXCHANGE_3 13.06667    1361.1111
<br>
26      MPI_Wait()  9.37778     599.0000
<br>
13           JACLD  7.72222      26.0000
<br>
14            JACU  7.37778      25.0000
<br>
12       INIT_COMM  1.46667   76713.6667
<br>
*22      MPI_Init()  1.45556   76253.4444*
<br>
37           SETIV  0.80000   20914.0000
<br>
6            EXACT  0.25000       0.0000
<br>
4             ERHS  0.21111   10458.3333
<br>
<p>The function MPI_init() in the first case (4 processes per machine) was 
<br>
17 times slower than the second case (1 process per machine). Is this 
<br>
behaviour normal?
<br>
The command I used for running the application was:
<br>
<p>First case:
<br>
<p>mpirun  --machinefile machine_file -npernode 4 --mca btl self,sm,tcp  
<br>
lu.A.32
<br>
<p>Second case:
<br>
<p>mpirun  --machinefile machine_file  --mca btl self,sm,tcp  lu.A.32
<br>
<p>I used the version of mpi:
<br>
<p>mpirun --V
<br>
mpirun (Open MPI) 1.4.5
<br>
<p>and the system I used is the following:
<br>
<p>Linux kameleon-debian 3.2.0-4-amd64 #1 SMP Debian 3.2.65-1+deb7u2 x86_64 
<br>
GNU/Linux
<br>
<p>I will appreciate any feedback, thank you.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26735/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26734.php">John Hearns: "[OMPI users] Select a card in a multi card system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26737.php">Ralph Castain: "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>Reply:</strong> <a href="26737.php">Ralph Castain: "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>Reply:</strong> <a href="26741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init() time"</a>
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
