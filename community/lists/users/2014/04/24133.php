<?
$subject_val = "Re: [OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 10:08:41 2014" -->
<!-- isoreceived="20140410140841" -->
<!-- sent="Thu, 10 Apr 2014 07:07:49 -0700" -->
<!-- isosent="20140410140749" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="BE8E9BBC-0CBB-4EF8-A544-CFC204B988A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED043B9B-A1E5-4410-A675-FB95FBD8502B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance issue of mpirun/mpi_init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 10:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Previous message:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Going on the assumption that it was a copy/paste error, the next question is: how many nodes were in your allocation?
<br>
<p>I ask because there is a change in the way we launch between 1.8 and 1.6.5. Starting in the 1.7 series, mpirun launches daemons across your allocation at startup so it can collect information on the topology of the nodes in the allocation - this info is then used when mapping the job. In the 1.6 series, we only launched daemons on the nodes actually being used.
<br>
<p>So 1.6.5 would indeed be faster IF you have a large allocation, but only launch a small number of procs. What you can do to compensate is add the --novm option to mpirun (or use the &quot;state_novm_select=1&quot; MCA param) which reverts back to the 1.6.5 behavior.
<br>
<p><p>On Apr 10, 2014, at 7:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just to ensure I understand what you are saying: it appears that 1.8 is much faster than 1.6.5 with the default settings, but slower when you set btl=tcp,self?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems rather strange. I note that the 1.8 value is identical in the two cases, but somehow 1.6.5 went much faster in the latter case. Is this a copy/paste error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2014, at 2:05 AM, Victor Vysotskiy &lt;Victor.Vysotskiy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have faced a performance degradation on multi-core single processor machine. Specifically,  in the most recent Open MPI v1.8 the  initialization and process startup stage became ~10x slower compared to v1.6.5. In order to measure timings I have used the following code snippet:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /*-------------------------------------------*/
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /*-------------------------------------------*/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The execution wall time has been measured in a trivial way by using the 'time'  command, i.e.:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; time mpirun -np 2 ./a.out 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Below are given averaged timings for both versions on Linux x86_64 (Intel i7-3630): 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Default settings:
</span><br>
<span class="quotelev2">&gt;&gt; 1.8   : 0.679 s 
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5: 1.041 s
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl=tcp,self:
</span><br>
<span class="quotelev2">&gt;&gt; 1.8   : 0.679 s 
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.5: 0.041 s 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The same problem has been detected on Mac OS X v10.9.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here I should stress that others MPI distributions perform as the OpenMPI v1.6.5 with the TCP byte transfer layer activated. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I am wondering whether it is possible to tune v1.8 in order to boost the startup process? The problem is that during the automatic nightly verification of our program we usually spawn parallel binaries a thousands of times. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you In advance!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Victor.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24134.php">Gan, Qi                    PW: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Previous message:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
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
