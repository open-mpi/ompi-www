<?
$subject_val = "Re: [OMPI users] fortran and MPI_Barrier, not working?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 12:24:26 2009" -->
<!-- isoreceived="20091115172426" -->
<!-- sent="Sun, 15 Nov 2009 17:24:13 +0000 (WET)" -->
<!-- isosent="20091115172413" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran and MPI_Barrier, not working?" -->
<!-- id="alpine.DEB.2.00.0911151718160.3979_at_localhost" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AFF2A80.8080101_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran and MPI_Barrier, not working?<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 12:24:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11201.php">Charles Salvia: "[OMPI users] Behavior of MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="11199.php">Jeff Squyres: "Re: [OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ol&#225; Gus
<br>
<p>&nbsp;&nbsp;&#193;lvaro would be a better name for me... Oh GRRRRRRRR Eterno!
<br>
<p>&nbsp;&nbsp;;)
<br>
<p>On Sat, 14 Nov 2009, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; I think MPI doesn't ensure that the output will come ordered
</span><br>
<span class="quotelev1">&gt; according to process rank, as in your expected output list.
</span><br>
<span class="quotelev1">&gt; Even MPI_Barrier doesn't sync the output, I suppose.
</span><br>
<span class="quotelev1">&gt; It syncs only the communication among the processes,
</span><br>
<span class="quotelev1">&gt; but you actually have no communication on your code!
</span><br>
<span class="quotelev1">&gt; (Other than the barrier itself, of course.)
</span><br>
<p>The definition of barrier is
<br>
<p>Blocks the caller until all group members have called it; the call returns 
<br>
at any process only after all group members have entered the call.
<br>
<p><span class="quotelev1">&gt; You have a different stdout buffer for each process,
</span><br>
<span class="quotelev1">&gt; and the processes probably compete for access
</span><br>
<span class="quotelev1">&gt; to the (single) output file,
</span><br>
<span class="quotelev1">&gt; when they hit &quot;call flush&quot;, I would guess.
</span><br>
<p>There is not a diferent stdout for each process, I'm testing in the same 
<br>
machine. The stdout is the console. When in the cicle, they should all 
<br>
sync at the BArrier. As only one of them is allowed, by the if, to print 
<br>
and then is forced to flush, there is only one process for each main 
<br>
iteration with access to stdout.
<br>
<p><span class="quotelev1">&gt; Note that both lists you sent have exactly the same lines,
</span><br>
<span class="quotelev1">&gt; though in different order.
</span><br>
<span class="quotelev1">&gt; I think this is telling that there is nothing wrong
</span><br>
<span class="quotelev1">&gt; with MPI_Barrier or with your code.
</span><br>
<p>No, the problem is that they are in different order. My small inner cicle 
<br>
should guarantee they would be outputing in the right order
<br>
<p><span class="quotelev1">&gt; Also, on your outer loop istep runs from 1 to 4,
</span><br>
<span class="quotelev1">&gt; and process rank zero prints an asterisk at each outer loop iteration.
</span><br>
<span class="quotelev1">&gt; Hence, I think four asterisks, not three, should be expected, right?
</span><br>
<span class="quotelev1">&gt; Four asterisks is what I see on your first list (the shuffled one),
</span><br>
<span class="quotelev1">&gt; not on the ordered one.
</span><br>
<p>Yes, your right, there should be 4 * . But that is not my main worry about 
<br>
this code output.
<br>
<p><span class="quotelev1">&gt; One way would be to send everything to process 0,
</span><br>
<span class="quotelev1">&gt; and let it order the messages, `a la mode de &quot;hello_world&quot;,
</span><br>
<span class="quotelev1">&gt; but this would be kind of cheating.
</span><br>
<span class="quotelev1">&gt; Maybe there is a solution with MPI-IO,
</span><br>
<span class="quotelev1">&gt; to concatenate the output file they way you want first,
</span><br>
<span class="quotelev1">&gt; then flush it.
</span><br>
<p>Yes, I know. But this should function if the Barrier would be working has 
<br>
supposed. I've seen it working previously and I'm seing it working in 
<br>
other MPI implementations (mvapich)
<br>
<p>So, what's the catch?
<br>
<p>Grande abra&#231;o a um conhecedor de Pessoa e habitante do pa&#237;s de Walt 
<br>
Whitman,
<br>
<p><p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD candidate @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;Keep them Flying! Ajude a/help Aero F&#233;nix!
<br>
<p>&nbsp;&nbsp;<a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11201.php">Charles Salvia: "[OMPI users] Behavior of MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="11199.php">Jeff Squyres: "Re: [OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11195.php">Gus Correa: "Re: [OMPI users] fortran and MPI_Barrier, not working?"</a>
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
