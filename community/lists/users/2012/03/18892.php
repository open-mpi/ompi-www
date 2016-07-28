<?
$subject_val = "Re: [OMPI users] redirecting output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 11:44:58 2012" -->
<!-- isoreceived="20120330154458" -->
<!-- sent="Fri, 30 Mar 2012 09:44:47 -0600" -->
<!-- isosent="20120330154447" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] redirecting output" -->
<!-- id="6870B775-FAB5-4626-84F7-A071A95A32E5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FEDD277BE5C6E9439BE85976C98CDB3015EDAF5F_at_CH1PRD0102MB137.prod.exchangelabs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] redirecting output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 11:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18893.php">Gus Correa: "Re: [OMPI users] redirecting output"</a>
<li><strong>Previous message:</strong> <a href="18891.php">tyler.balson_at_[hidden]: "Re: [OMPI users] redirecting output"</a>
<li><strong>In reply to:</strong> <a href="18891.php">tyler.balson_at_[hidden]: "Re: [OMPI users] redirecting output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18893.php">Gus Correa: "Re: [OMPI users] redirecting output"</a>
<li><strong>Reply:</strong> <a href="18893.php">Gus Correa: "Re: [OMPI users] redirecting output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you looked at &quot;mpirun -h&quot;? There are several options available for redirecting output, including redirecting it to files by rank so it is separated by application process.
<br>
<p>In general, mpirun will send the output to stdout or stderr, based on what your process does. The provided options just let you tag it, or separate it by rank for convenience.
<br>
<p><p>On Mar 30, 2012, at 9:22 AM, tyler.balson_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I am using openmpi-1.4.5 and I just tried |tee ~/outputfile.txt and it generated the file named outputfile.txt but again it was empty
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Marc Cozzi [cozzi_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 30, 2012 9:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] redirecting output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does    Pcrystal |tee ./outputfile.txt    work?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   --marc
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Fran&#231;ois Tessier
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 30, 2012 10:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] redirecting output
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you try to redirect also the error output? Maybe your application write its output on stderr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fran&#231;ois
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 30/03/2012 16:41, tyler.balson_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the command mpirun -np nprocs -machinefile machines.arch Pcrystal and my output strolls across my terminal I would like to send this output to a file and I cannot figure out how to do so....I have tried the general      &gt; FILENAME and &gt; log &amp; ....these generate files however they are empty.....any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for reading 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tyler
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18892/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18893.php">Gus Correa: "Re: [OMPI users] redirecting output"</a>
<li><strong>Previous message:</strong> <a href="18891.php">tyler.balson_at_[hidden]: "Re: [OMPI users] redirecting output"</a>
<li><strong>In reply to:</strong> <a href="18891.php">tyler.balson_at_[hidden]: "Re: [OMPI users] redirecting output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18893.php">Gus Correa: "Re: [OMPI users] redirecting output"</a>
<li><strong>Reply:</strong> <a href="18893.php">Gus Correa: "Re: [OMPI users] redirecting output"</a>
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
