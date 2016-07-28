<?
$subject_val = "Re: [OMPI users] MPI_Init() time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 10:03:59 2015" -->
<!-- isoreceived="20150415140359" -->
<!-- sent="Wed, 15 Apr 2015 07:03:54 -0700" -->
<!-- isosent="20150415140354" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() time" -->
<!-- id="4555EF3B-3004-4A21-BC9C-726B573A016A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="552E478F.9010808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init() time<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 10:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26738.php">Mike Dubman: "Re: [OMPI users] Select a card in a multi card system"</a>
<li><strong>Previous message:</strong> <a href="26736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26735.php">cristian: "[OMPI users] MPI_Init() time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init() time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With an OMPI that old, it&#226;&#128;&#153;s anyone&#226;&#128;&#153;s guess - I have no idea.
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2015, at 4:12 AM, cristian &lt;cristian.ruiz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed when performing a profiling of an application that the MPI_init() function takes a considerable amount of time. 
</span><br>
<span class="quotelev1">&gt; There is a big difference when running 32 processes over 32 machines and 32 processes over 8 machines (Each machine has 8 cores).
</span><br>
<span class="quotelev1">&gt; These are the results of the profiling:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Results for 32 cores (8 machines)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Group.1 percent        usec
</span><br>
<span class="quotelev1">&gt; 38            SSOR 79.1125 2557445.625
</span><br>
<span class="quotelev1">&gt; 7       EXCHANGE_1 31.8125      33.250
</span><br>
<span class="quotelev1">&gt; 24      MPI_Recv() 26.0750      33.375
</span><br>
<span class="quotelev1">&gt; 2             BLTS 24.7500     103.125
</span><br>
<span class="quotelev1">&gt; 3             BUTS 22.2375      92.500
</span><br>
<span class="quotelev1">&gt; 12       INIT_COMM 19.8500 1311003.375
</span><br>
<span class="quotelev1">&gt; 22      MPI_Init() 19.8500 1310925.750
</span><br>
<span class="quotelev1">&gt; 33             RHS 18.4000    4690.500
</span><br>
<span class="quotelev1">&gt; 8       EXCHANGE_3  9.2750    1179.000
</span><br>
<span class="quotelev1">&gt; 26      MPI_Wait()  7.2250     565.125
</span><br>
<span class="quotelev1">&gt; 13           JACLD  6.4875      27.000
</span><br>
<span class="quotelev1">&gt; 25      MPI_Send()  6.3500       8.000
</span><br>
<span class="quotelev1">&gt; 14            JACU  6.2500      26.000
</span><br>
<span class="quotelev1">&gt; 37           SETIV  0.6625   20908.500
</span><br>
<span class="quotelev1">&gt; 6            EXACT  0.2188       0.000
</span><br>
<span class="quotelev1">&gt; 4             ERHS  0.2000   11499.000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Results for 32 machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Group.1  percent         usec
</span><br>
<span class="quotelev1">&gt; 38            SSOR 97.28889 2573471.0000
</span><br>
<span class="quotelev1">&gt; 7       EXCHANGE_1 39.25556      33.3333
</span><br>
<span class="quotelev1">&gt; 2             BLTS 29.11111      98.7778
</span><br>
<span class="quotelev1">&gt; 3             BUTS 27.96667      95.0000
</span><br>
<span class="quotelev1">&gt; 24      MPI_Recv() 27.48889      28.7778
</span><br>
<span class="quotelev1">&gt; 33             RHS 23.98889    5018.6667
</span><br>
<span class="quotelev1">&gt; 25      MPI_Send() 13.51111      14.0000
</span><br>
<span class="quotelev1">&gt; 8       EXCHANGE_3 13.06667    1361.1111
</span><br>
<span class="quotelev1">&gt; 26      MPI_Wait()  9.37778     599.0000
</span><br>
<span class="quotelev1">&gt; 13           JACLD  7.72222      26.0000
</span><br>
<span class="quotelev1">&gt; 14            JACU  7.37778      25.0000
</span><br>
<span class="quotelev1">&gt; 12       INIT_COMM  1.46667   76713.6667
</span><br>
<span class="quotelev1">&gt; 22      MPI_Init()  1.45556   76253.4444
</span><br>
<span class="quotelev1">&gt; 37           SETIV  0.80000   20914.0000
</span><br>
<span class="quotelev1">&gt; 6            EXACT  0.25000       0.0000
</span><br>
<span class="quotelev1">&gt; 4             ERHS  0.21111   10458.3333
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The function MPI_init() in the first case (4 processes per machine) was 17 times slower than the second case (1 process per machine). Is this behaviour normal? 
</span><br>
<span class="quotelev1">&gt; The command I used for running the application was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  --machinefile machine_file -npernode 4 --mca btl self,sm,tcp  lu.A.32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  --machinefile machine_file  --mca btl self,sm,tcp  lu.A.32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used the version of mpi: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the system I used is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux kameleon-debian 3.2.0-4-amd64 #1 SMP Debian 3.2.65-1+deb7u2 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will appreciate any feedback, thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26735.php">http://www.open-mpi.org/community/lists/users/2015/04/26735.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26738.php">Mike Dubman: "Re: [OMPI users] Select a card in a multi card system"</a>
<li><strong>Previous message:</strong> <a href="26736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>In reply to:</strong> <a href="26735.php">cristian: "[OMPI users] MPI_Init() time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init() time"</a>
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
