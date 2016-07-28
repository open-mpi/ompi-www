<?
$subject_val = "Re: [OMPI users] strange behavior of MPI_wait() method";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 10:03:14 2015" -->
<!-- isoreceived="20150728140314" -->
<!-- sent="Tue, 28 Jul 2015 23:03:12 +0900" -->
<!-- isosent="20150728140312" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange behavior of MPI_wait() method" -->
<!-- id="CAAkFZ5txyM+E+saRDQsRuZ38ftmXM8qA8UJeVH68jvdAsQXVdw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55B78258.1090403_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange behavior of MPI_wait() method<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 10:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27346.php">Cristian RUIZ: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>In reply to:</strong> <a href="27346.php">Cristian RUIZ: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks for clarifying there is only one container per host.
<br>
<p>do you always run 16 tasks per host/container ?
<br>
or do you always run 16 hosts/containers ?
<br>
<p>also, do lxc sets iptables when you start a container ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, July 28, 2015, Cristian RUIZ &lt;cristian.ruiz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Thank you for answering. I executed the test with the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  --mca btl self,sm,tcp --machinefile machine_file cg.B.128 in both
</span><br>
<span class="quotelev1">&gt; setups. My machine file is composed of 128 lines (each machine hostname is
</span><br>
<span class="quotelev1">&gt; repeated 16 times). There is just one container per machine and the
</span><br>
<span class="quotelev1">&gt; container is configured with 16 cores. So, they are able to use &quot;sm&quot;.
</span><br>
<span class="quotelev1">&gt; Everything is set properly I used LXC[1], I dont observe any problem with
</span><br>
<span class="quotelev1">&gt; the other benchmarks I executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on the network I observe 2 dropped packets over almost all interfaces of
</span><br>
<span class="quotelev1">&gt; the participating nodes. I think this is normal becuase I observe the same
</span><br>
<span class="quotelev1">&gt; thing when I use real machine and the perfomance in this case is much
</span><br>
<span class="quotelev1">&gt; better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://linuxcontainers.org/">https://linuxcontainers.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/28/2015 02:31 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cristian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If the message takes some extra time to land into the receiver, then
</span><br>
<span class="quotelev1">&gt; MPI_Wait will take more time.
</span><br>
<span class="quotelev1">&gt; or even worse, if the sender is late, the receiver will spend even more
</span><br>
<span class="quotelev1">&gt; time in MPI_Wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  First, how do you run 128 tasks on 16 nodes ?
</span><br>
<span class="quotelev1">&gt; if you do a simple mpirun, then you will use sm or vader btl.
</span><br>
<span class="quotelev1">&gt; containers can only use the tcp btl, even within the same physical node.
</span><br>
<span class="quotelev1">&gt; so I encourage you to mpirun --mca tcp,self -np 128 ...
</span><br>
<span class="quotelev1">&gt; and see if you observe any degradation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I know very few about containers, but if I remember correctly, you can do
</span><br>
<span class="quotelev1">&gt; stuff such as cgroup (cpu caping, network bandwidth caping, memory limit)
</span><br>
<span class="quotelev1">&gt; do you use such things ?
</span><br>
<span class="quotelev1">&gt; a possible explanation is a container reaches it's limit and is given a
</span><br>
<span class="quotelev1">&gt; very low priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  regardless the containers, you end up having 16 tasks sharing the same
</span><br>
<span class="quotelev1">&gt; interconnect.
</span><br>
<span class="quotelev1">&gt; I can imagine that an unfair share can lead to this kind of behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  on the network, did you measure zero or few errors ?
</span><br>
<span class="quotelev1">&gt; few errors take some extra time to be fixed, and if your application is
</span><br>
<span class="quotelev1">&gt; communication intensive, these delays get propagated and you can end up
</span><br>
<span class="quotelev1">&gt; with huge performance hit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, July 28, 2015, Cristian RUIZ &lt;cristian.ruiz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','cristian.ruiz_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm measuring the overhead of using Linux container for HPC applications.
</span><br>
<span class="quotelev2">&gt;&gt; To do so I was comparing the execution time of NAS parallel benchmarks on
</span><br>
<span class="quotelev2">&gt;&gt; two infrastructures:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) real: 16 real machines
</span><br>
<span class="quotelev2">&gt;&gt; 2) container: 16 containers distributed over 16 real machines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each machine used is equipped with two Intel Xeon E5-2630v3 processors
</span><br>
<span class="quotelev2">&gt;&gt; (with 8 cores each), 128 GB of RAM and a 10 Gigabit Ethernet adapter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my results, I found a particular performance degradation for CG.B
</span><br>
<span class="quotelev2">&gt;&gt; benchmark:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     walltime numprocess      type      ci1      ci2    overhead
</span><br>
<span class="quotelev2">&gt;&gt; 1   6615085         16    native  6473340  6756830   1.1271473
</span><br>
<span class="quotelev2">&gt;&gt; 2   6349030         32    native  6315947  6382112   2.2187747
</span><br>
<span class="quotelev2">&gt;&gt; 3   5811724         64    native  5771509  5851938   0.8983445
</span><br>
<span class="quotelev2">&gt;&gt; 4   4002865        128    native  3966314  4039416 *180.7472715*
</span><br>
<span class="quotelev2">&gt;&gt; 5   4077885        256    native  4044667  4111103
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *402.8036531 *    walltime numprocess      type      ci1      ci2
</span><br>
<span class="quotelev2">&gt;&gt; overhead
</span><br>
<span class="quotelev2">&gt;&gt; 6   6540523         16 container  6458503  6622543   0.0000000
</span><br>
<span class="quotelev2">&gt;&gt; 7   6208159         32 container  6184888  6231431   0.0000000
</span><br>
<span class="quotelev2">&gt;&gt; 8   5759514         64 container  5719453  5799575   0.0000000
</span><br>
<span class="quotelev2">&gt;&gt; 9  11237935        128 container 10762906 11712963   0.0000000
</span><br>
<span class="quotelev2">&gt;&gt; 10 20503755        256 container 19830425 21177085   0.0000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (16 MPI processes per machine/container)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use containers everything is fine before 128 MPI processes.  I got
</span><br>
<span class="quotelev2">&gt;&gt; 180% and 400% performance degration with 128  and 256 MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; respectively. I repeated again the meaures and I had statistically the same
</span><br>
<span class="quotelev2">&gt;&gt; results. So, I decided to generate a trace of the execution using TAU. I
</span><br>
<span class="quotelev2">&gt;&gt; discovered that the source of the overhead is the MPI_wait() method that
</span><br>
<span class="quotelev2">&gt;&gt; sometimes takes around 0.2 seconds and this happens around 20 times which
</span><br>
<span class="quotelev2">&gt;&gt; adds around 4 seconds to the execution time. The method is called 25992
</span><br>
<span class="quotelev2">&gt;&gt; times and in avarage takes between 50 and 300 usecs (values obtained with
</span><br>
<span class="quotelev2">&gt;&gt; profiling).
</span><br>
<span class="quotelev2">&gt;&gt; This strange behavior was reported in this paper[1] (page 10)  that says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We can see two outstanding zones of MPI_Send and MPI_Wait. Such
</span><br>
<span class="quotelev2">&gt;&gt; operations typically take few microseconds to less than a millisecond. Here
</span><br>
<span class="quotelev2">&gt;&gt; they take 0.2 seconds&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They attributed that strange behavior to package loss and network
</span><br>
<span class="quotelev2">&gt;&gt; malfunctioning. In my experiments I measured the number of packets dropped
</span><br>
<span class="quotelev2">&gt;&gt; and nothing unusual happened.
</span><br>
<span class="quotelev2">&gt;&gt; I used two versions of OpenMPI 1.6.5 and 1.8.5 and in both versions I got
</span><br>
<span class="quotelev2">&gt;&gt; the same strange behavior. Any clues of what could be the source of that
</span><br>
<span class="quotelev2">&gt;&gt; strange behavior? could you please suggest any method to
</span><br>
<span class="quotelev2">&gt;&gt; debug this problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1] <a href="https://hal.inria.fr/hal-00919507/file/smpi_pmbs13.pdf">https://hal.inria.fr/hal-00919507/file/smpi_pmbs13.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27344.php">http://www.open-mpi.org/community/lists/users/2015/07/27344.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27348.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27346.php">Cristian RUIZ: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
<li><strong>In reply to:</strong> <a href="27346.php">Cristian RUIZ: "Re: [OMPI users] strange behavior of MPI_wait() method"</a>
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
