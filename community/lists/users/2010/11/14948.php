<?
$subject_val = "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 09:36:33 2010" -->
<!-- isoreceived="20101130143633" -->
<!-- sent="Tue, 30 Nov 2010 07:36:25 -0700" -->
<!-- isosent="20101130143625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3" -->
<!-- id="E842DB50-E337-4090-82B3-F775BF48E6B0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101130060542.31128_at_web004.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 09:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14949.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14947.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14942.php">Hicham Mouline: "[OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14949.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It truly does help to know what version of OMPI you are using - otherwise, there is little we can do to help
<br>
<p>On Nov 30, 2010, at 4:05 AM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have successfully run 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 .\test.exe
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; when I try MPMP
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 .\test.exe : -np 3 .\test2.exe
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; where test and test2 are identical (just for a trial), I get this error:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [hostname:04960] [[47427,1],0]-[[47427,0],0] mca_oob_tcp_peer_send_blocking: send() failed: Unknown error (10057)
</span><br>
<span class="quotelev1">&gt; [hostname:04960] [[47427,1],0] routed:binomial: Connection to lifeline [[47427,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Granted this uses boost::mpi, but it worked for SPMD, and the source for the main function is trivial:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi.hpp&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace mpi = boost::mpi;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  mpi::environment env(argc, argv);
</span><br>
<span class="quotelev1">&gt;  mpi::communicator world;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  std::cout &lt;&lt; &quot;Process #&quot; &lt;&lt; world.rank() &lt;&lt; &quot; says &quot;&lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as far as I understand, there should be 1 world with 6 processes, ranking 0 1 2 ,  3 4 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
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
<li><strong>Next message:</strong> <a href="14949.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14947.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14942.php">Hicham Mouline: "[OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14949.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
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
