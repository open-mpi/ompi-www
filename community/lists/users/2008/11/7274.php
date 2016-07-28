<?
$subject_val = "Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 00:57:15 2008" -->
<!-- isoreceived="20081111055715" -->
<!-- sent="Tue, 11 Nov 2008 14:57:08 +0900" -->
<!-- isosent="20081111055708" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual cores --&amp;gt; timing + /usr/bin/time" -->
<!-- id="49191EB4.1090803_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081110214248.2145462d.fabian.haensel_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] dual cores --&gt; timing + /usr/bin/time<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 00:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<li><strong>Previous message:</strong> <a href="7273.php">Keller, Jesse: "[OMPI users] mpirun Only Works When Second Ethernet Interface Disabled"</a>
<li><strong>In reply to:</strong> <a href="7268.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7277.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<li><strong>Reply:</strong> <a href="7277.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Fabian,
<br>
<p>On a separate topic, but related to your post here, how did you do the 
<br>
timing?  [Especially to so many digits of accuracy.  :-) ]
<br>
<p>I will have to time my program and I don't think /usr/bin/time would do 
<br>
it.  Are the numbers it report accurate [for an MPI program]?  I think 
<br>
the &quot;user time&quot; would be inaccurate since I need to get the user time of 
<br>
all the processes...but the &quot;real time&quot; of the main process should be ok?
<br>
<p>Ray
<br>
<p><p>Fabian H&#228;nsel wrote:
<br>
<span class="quotelev1">&gt; Be warned that at least in default config running more MPI threads than
</span><br>
<span class="quotelev1">&gt; you have cores results in dog slow code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Single core machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat my-hosts
</span><br>
<span class="quotelev1">&gt; localhost slots=1
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 -hostfile my-hosts ./sort selectionsort 1024
</span><br>
<span class="quotelev1">&gt;   1024  0.009905000seconds
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 -hostfile my-hosts ./sort selectionsort 1024
</span><br>
<span class="quotelev1">&gt;   1024  4.113605000 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (on dual core both -np 1 and -np 2 run almost equally fast (only
</span><br>
<span class="quotelev1">&gt; slightly speedup due to poor algorithm (developed for demonstration
</span><br>
<span class="quotelev1">&gt; purposes))
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<li><strong>Previous message:</strong> <a href="7273.php">Keller, Jesse: "[OMPI users] mpirun Only Works When Second Ethernet Interface Disabled"</a>
<li><strong>In reply to:</strong> <a href="7268.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7277.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<li><strong>Reply:</strong> <a href="7277.php">Fabian Hänsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
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
