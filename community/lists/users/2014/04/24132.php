<?
$subject_val = "Re: [OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 10:01:18 2014" -->
<!-- isoreceived="20140410140118" -->
<!-- sent="Thu, 10 Apr 2014 07:00:26 -0700" -->
<!-- isosent="20140410140026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="ED043B9B-A1E5-4410-A675-FB95FBD8502B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375DC211905A_at_UWMBX04.uw.lu.se" -->
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
<strong>Date:</strong> 2014-04-10 10:00:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24133.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24133.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24133.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to ensure I understand what you are saying: it appears that 1.8 is much faster than 1.6.5 with the default settings, but slower when you set btl=tcp,self?
<br>
<p>This seems rather strange. I note that the 1.8 value is identical in the two cases, but somehow 1.6.5 went much faster in the latter case. Is this a copy/paste error?
<br>
<p><p>On Apr 10, 2014, at 2:05 AM, Victor Vysotskiy &lt;Victor.Vysotskiy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have faced a performance degradation on multi-core single processor machine. Specifically,  in the most recent Open MPI v1.8 the  initialization and process startup stage became ~10x slower compared to v1.6.5. In order to measure timings I have used the following code snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*-------------------------------------------*/
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; /*-------------------------------------------*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The execution wall time has been measured in a trivial way by using the 'time'  command, i.e.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; time mpirun -np 2 ./a.out 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below are given averaged timings for both versions on Linux x86_64 (Intel i7-3630): 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Default settings:
</span><br>
<span class="quotelev1">&gt; 1.8   : 0.679 s 
</span><br>
<span class="quotelev1">&gt; 1.6.5: 1.041 s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=tcp,self:
</span><br>
<span class="quotelev1">&gt; 1.8   : 0.679 s 
</span><br>
<span class="quotelev1">&gt; 1.6.5: 0.041 s 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same problem has been detected on Mac OS X v10.9.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here I should stress that others MPI distributions perform as the OpenMPI v1.6.5 with the TCP byte transfer layer activated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I am wondering whether it is possible to tune v1.8 in order to boost the startup process? The problem is that during the automatic nightly verification of our program we usually spawn parallel binaries a thousands of times. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you In advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Victor.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24133.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24133.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24133.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
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
