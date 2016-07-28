<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 19:01:39 2009" -->
<!-- isoreceived="20090422230139" -->
<!-- sent="Thu, 23 Apr 2009 00:03:40 +0100" -->
<!-- isosent="20090422230340" -->
<!-- name="Tiago Almeida" -->
<!-- email="tiago.b.almeida_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="49EFA24C.10102_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0904210214p39d86b3el6a5b1439c6a4dfd4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI and gprof<br>
<strong>From:</strong> Tiago Almeida (<em>tiago.b.almeida_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 19:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9037.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="8999.php">jody: "[OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I've never done this, but I believe that an executable compiled with 
<br>
profilling support (-pg) will generate the gmon.out file in its current 
<br>
directory, regardless of running under MPI or not. So I think that 
<br>
you'll have a gmon.out on each node and therefore you can &quot;gprof&quot; them 
<br>
independently.
<br>
<p>Best regards,
<br>
Tiago Almeida
<br>
---------------------------------
<br>
jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev1">&gt; when profiling a normal application:
</span><br>
<span class="quotelev1">&gt; - compile everything with option -pg
</span><br>
<span class="quotelev1">&gt; - run application
</span><br>
<span class="quotelev1">&gt; - call gprof
</span><br>
<span class="quotelev1">&gt; This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev1">&gt; whether this is the data for node 0 only or accumulated for all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev1">&gt; Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev1">&gt; If not, is there another profiling tool which can?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9037.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="8999.php">jody: "[OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
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
