<?
$subject_val = "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 12:48:29 2012" -->
<!-- isoreceived="20120201174829" -->
<!-- sent="Wed, 1 Feb 2012 12:48:24 -0500" -->
<!-- isosent="20120201174824" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun: How to print STDOUT of just one process?" -->
<!-- id="5DF1E46B-EE52-4BA2-99DB-1E4F821F8315_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F296271.7080002_at_byu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun: How to print STDOUT of just one process?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 12:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18370.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18358.php">Lloyd Brown: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18360.php">Eugene Loh: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Frank, Lloyd
<br>
<p>If all you want is to sort out from which process the output is coming from,
<br>
you can use the &quot;-tag-output&quot; switch to the [OpenMPI] mpirun.
<br>
Check it out with 'man mpirun'.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Feb 1, 2012, at 11:04 AM, Lloyd Brown wrote:
<br>
<p><span class="quotelev1">&gt; I don't know about using mpirun to do it, but you can actually call
</span><br>
<span class="quotelev1">&gt; mpirun on a script, and have that script individually call a single
</span><br>
<span class="quotelev1">&gt; instance of your program.  Then that script could use shell redirection
</span><br>
<span class="quotelev1">&gt; to redirect the output of the program's instance to a separate file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've used this technique to play with ulimit sort of things in the
</span><br>
<span class="quotelev1">&gt; script before.  I'm not entirely sure what variables are exposed to you
</span><br>
<span class="quotelev1">&gt; in the script, such that you could come up with a unique filename to
</span><br>
<span class="quotelev1">&gt; output to, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lloyd Brown
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt; Brigham Young University
</span><br>
<span class="quotelev1">&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/01/2012 08:59 AM, Frank wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When running
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 &lt;prg&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the STDOUT streams of both processes are combined and are displayed by
</span><br>
<span class="quotelev2">&gt;&gt; the shell. In such an interleaved format its hard to tell what line
</span><br>
<span class="quotelev2">&gt;&gt; comes from which node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to have mpirun just merger STDOUT of one process to its
</span><br>
<span class="quotelev2">&gt;&gt; STDOUT stream?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Frank
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cross-reference:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://stackoverflow.com/questions/9098781/mpirun-how-to-print-stdout-of-just-one-process">http://stackoverflow.com/questions/9098781/mpirun-how-to-print-stdout-of-just-one-process</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18370.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18358.php">Lloyd Brown: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18360.php">Eugene Loh: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
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
