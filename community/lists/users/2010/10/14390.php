<?
$subject_val = "Re: [OMPI users] Bad performance when scattering big size of data?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 22:19:37 2010" -->
<!-- isoreceived="20101005021937" -->
<!-- sent="Mon, 04 Oct 2010 19:18:11 -0700" -->
<!-- isosent="20101005021811" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad performance when scattering big size of data?" -->
<!-- id="4CAA8AE3.4050501_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikc8NG0YQE05RXtOX+CRKWaYsen2U7pJnMX1d08_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad performance when scattering big size of data?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 22:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14391.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14389.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14389.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Storm Zhang wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I meant: the results of 500 procs in fact shows it with 
</span><br>
<span class="quotelev1">&gt; 272-304(&lt;500) real cores, the program's running time is good, which is 
</span><br>
<span class="quotelev1">&gt; almost five times 100 procs' time. So it can be handled very well. 
</span><br>
<span class="quotelev1">&gt; Therefore I guess OpenMPI or Rocks OS does make use of hyperthreading 
</span><br>
<span class="quotelev1">&gt; to do the job. But with 600 procs, the running time is more than 
</span><br>
<span class="quotelev1">&gt; double of that of 500 procs. I don't know why. This is my problem.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, how to use -bind-to-core? I added it as mpirun's options. It 
</span><br>
<span class="quotelev1">&gt; always gives me error &quot; the executable 'bind-to-core' can't be found. 
</span><br>
<span class="quotelev1">&gt; Isn't it like:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_include eth0 -np 600  -bind-to-core scatttest
</span><br>
<p>Thanks for sending the mpirun run and error message.  That helps.
<br>
<p>It's not recognizing the --bind-to-core option.  (Single hyphen, as you 
<br>
had, should also be okay.)  Skimming through the e-mail, it looks like 
<br>
you are using OMPI 1.3.2 and 1.4.2.  Did you try --bind-to-core with 
<br>
both?  If I remember my version numbers, --bind-to-core will not be 
<br>
recognized with 1.3.2, but should be with 1.4.2.  Could it be that you 
<br>
only tried 1.3.2?
<br>
<p>Another option is to try &quot;mpirun --help&quot;.  Make sure that it reports 
<br>
--bind-to-core.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14391.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14389.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14389.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Reply:</strong> <a href="14393.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
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
