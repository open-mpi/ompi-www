<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 13:11:55 2009" -->
<!-- isoreceived="20090401171155" -->
<!-- sent="Wed, 1 Apr 2009 13:11:52 -0400" -->
<!-- isosent="20090401171152" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem" -->
<!-- id="1AB44A51-1AF8-4D57-BB35-CA0EE8694F49_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87vdpopbos.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 13:11:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8721.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8735.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="8735.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2009, at 12:42 PM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Josh Hursey &lt;jjhursey_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The configure flag that you are looking for is:
</span><br>
<span class="quotelev2">&gt;&gt; --with-ft=cr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a good reason why --with-blcr doesn't imply it?
</span><br>
<p>Not really. Though it is most likely difficult to make it happen given  
<br>
the configure logic in Open MPI (at least the way I understand it). It  
<br>
has to do with BLCR being a component, but the --with-ft flag being a  
<br>
fundamental flag and the ordering between when the two would be  
<br>
evaluated in the configure script.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may also want to consider using the thread options too for
</span><br>
<span class="quotelev2">&gt;&gt; improved C/R response:
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-threads --enable-ft-thread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Incidentally, the draft document linked from the FAQ has a typo:
</span><br>
<span class="quotelev1">&gt; `--enable-mpi-thread' (with a missing `s').
</span><br>
<p>Thanks. I'll fix this and post a new draft soon (I have a few other  
<br>
items to put in there anyway).
<br>
<p>Cheers,
<br>
Josh
<br>
<p><p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8723.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8721.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8720.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8735.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Reply:</strong> <a href="8735.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
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
