<?
$subject_val = "Re: [OMPI users] dual cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 00:21:03 2008" -->
<!-- isoreceived="20081110052103" -->
<!-- sent="Mon, 10 Nov 2008 14:20:57 +0900" -->
<!-- isosent="20081110052057" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual cores" -->
<!-- id="4917C4B9.7080500_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="70A5AC06FDB5E54482D19E1C04CDFCF303F74EC2_at_BALI.uhd.campus" -->
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
<strong>Subject:</strong> Re: [OMPI users] dual cores<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 00:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7249.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7249.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7249.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Erin,
<br>
<p>I'm nowhere near a guru, so I hope you don't what I have to say (it 
<br>
might be wrong...).
<br>
<p>But what I did was just put a long loop into the program and while it 
<br>
was running, I opened another window and looked at the output of &quot;top&quot;.  
<br>
Obviously, without the loop, the program would terminate too fast.
<br>
<p>If you have two CPUs and the total of the process exceeds 100% (i.e., if 
<br>
you run with np=2, you might have 98% and 98%), then I would think this 
<br>
is enough proof that both cores are being used.
<br>
<p>I'm saying this on the list hoping that someone can correct my knowledge 
<br>
of it, too... 
<br>
<p>Ray
<br>
<p><p>Hodgess, Erin wrote:
<br>
<span class="quotelev1">&gt; Dear Open MPI gurus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just installed Open MPI this evening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a dual core laptop and I would like to have both cores running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the following my-hosts file:
</span><br>
<span class="quotelev1">&gt; localhost slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and here is the command and output:
</span><br>
<span class="quotelev1">&gt;  mpirun --hostfile my-hosts -np 4 --byslot hello_c |sort
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev1">&gt; hodgesse_at_erinstoy:~/Desktop/openmpi-1.2.8/examples&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I know if both cores are running, please?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7249.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7247.php">Hodgess, Erin: "[OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7249.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7249.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
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
