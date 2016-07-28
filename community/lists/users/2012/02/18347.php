<?
$subject_val = "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 11:04:16 2012" -->
<!-- isoreceived="20120201160416" -->
<!-- sent="Wed, 01 Feb 2012 09:04:01 -0700" -->
<!-- isosent="20120201160401" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun: How to print STDOUT of just one process?" -->
<!-- id="4F296271.7080002_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKpxCzL4perw6hz+zGGC52NaaTKx1g14R2kK9wo=aeHmLWbEbw_at_mail.gmail.com" -->
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
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 11:04:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Previous message:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Reply:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Reply:</strong> <a href="18358.php">Gustavo Correa: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know about using mpirun to do it, but you can actually call
<br>
mpirun on a script, and have that script individually call a single
<br>
instance of your program.  Then that script could use shell redirection
<br>
to redirect the output of the program's instance to a separate file.
<br>
<p>I've used this technique to play with ulimit sort of things in the
<br>
script before.  I'm not entirely sure what variables are exposed to you
<br>
in the script, such that you could come up with a unique filename to
<br>
output to, though.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 02/01/2012 08:59 AM, Frank wrote:
<br>
<span class="quotelev1">&gt; When running
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 &lt;prg&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the STDOUT streams of both processes are combined and are displayed by
</span><br>
<span class="quotelev1">&gt; the shell. In such an interleaved format its hard to tell what line
</span><br>
<span class="quotelev1">&gt; comes from which node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to have mpirun just merger STDOUT of one process to its
</span><br>
<span class="quotelev1">&gt; STDOUT stream?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Frank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cross-reference:
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/9098781/mpirun-how-to-print-stdout-of-just-one-process">http://stackoverflow.com/questions/9098781/mpirun-how-to-print-stdout-of-just-one-process</a>
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
<li><strong>Next message:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Previous message:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>In reply to:</strong> <a href="18346.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Reply:</strong> <a href="18348.php">Noam Bernstein: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Reply:</strong> <a href="18358.php">Gustavo Correa: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
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
