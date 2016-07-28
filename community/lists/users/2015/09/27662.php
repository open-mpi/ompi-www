<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 10:21:14 2015" -->
<!-- isoreceived="20150924142114" -->
<!-- sent="Thu, 24 Sep 2015 07:21:09 -0700" -->
<!-- isosent="20150924142109" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="C335E34A-E746-4F1C-99D4-90706F3C9898_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5603B060.1070409_at_legi.grenoble-inp.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.10.0 bind-to core error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 10:21:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>In reply to:</strong> <a href="27659.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ha! I finally tracked it down - a new code path that bypassed the prior error output. I have a fix going into master shortly, and will then port it to 1.10.1.
<br>
<p>Thanks for your patience!
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Sep 24, 2015, at 1:12 AM, Patrick Begou &lt;Patrick.Begou_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay. Runing mpirun whith wrong OMPI_MCA_plm_rsh_agent doesn't give any explicit message in OpenMPI-1.10.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How I can show the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I request 2 nodes, 1cpu on each node, 4 cores on each cpu (so 8 cores availables with cpusets). Node file is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ cat $OAR_NODEFILE
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog7
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; frog8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I launch the application (I've added a grep here to limit the output on stdout and juste check processes location):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ mpirun -np 8 --hostfile $OAR_NODEFILE --bind-to core ./location.exe |grep 'thread is now running on PU'
</span><br>
<span class="quotelev1">&gt; (process 2) thread is now running on PU logical index 2 (OS/physical index 6) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 3) thread is now running on PU logical index 3 (OS/physical index 7) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 0) thread is now running on PU logical index 0 (OS/physical index 0) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 1) thread is now running on PU logical index 1 (OS/physical index 5) on system frog7
</span><br>
<span class="quotelev1">&gt; (process 6) thread is now running on PU logical index 2 (OS/physical index 2) on system frog8
</span><br>
<span class="quotelev1">&gt; (process 7) thread is now running on PU logical index 3 (OS/physical index 3) on system frog8
</span><br>
<span class="quotelev1">&gt; (process 4) thread is now running on PU logical index 0 (OS/physical index 0) on system frog8
</span><br>
<span class="quotelev1">&gt; (process 5) thread is now running on PU logical index 1 (OS/physical index 1) on system frog8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So one process on each core, no oversubscribing allowed with the patch applied in OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I set OMPI_MCA_plm_rsh_agent so something wrong and launch agin the job (without the final grep to have all informations):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ export OMPI_MCA_plm_rsh_agent=do-not-exist
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ mpirun -np 8 --hostfile $OAR_NODEFILE --bind-to core ./location.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;   Node:        frog7
</span><br>
<span class="quotelev1">&gt;   #processes:  2
</span><br>
<span class="quotelev1">&gt;   #cpus:       1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message only show only that OpenMPI try to allocate all processes on the local node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course:
</span><br>
<span class="quotelev1">&gt; [begou_at_frog7 MPI_TESTS]$ which do-not-exist
</span><br>
<span class="quotelev1">&gt; /usr/bin/which: no do-not-exist in (/home/PROJECTS/...............
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; |  Equipe M.O.S.T.         |                                      |
</span><br>
<span class="quotelev1">&gt; |  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev1">&gt; |  LEGI                    |                                      |
</span><br>
<span class="quotelev1">&gt; |  BP 53 X                 | Tel 04 76 82 51 35                   |
</span><br>
<span class="quotelev1">&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
</span><br>
<span class="quotelev1">&gt; ===================================================================
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27659.php">http://www.open-mpi.org/community/lists/users/2015/09/27659.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>In reply to:</strong> <a href="27659.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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
