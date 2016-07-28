<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 17 21:59:19 2006" -->
<!-- isoreceived="20060518015919" -->
<!-- sent="Wed, 17 May 2006 21:59:12 -0400" -->
<!-- isosent="20060518015912" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and OpenIB" -->
<!-- id="22587040-752F-47C0-BA93-F899494856EB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5849f1820605150614h3efc7a9ej59be8b9bf28d98aa_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-17 21:59:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1252.php">Brian Barrett: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Previous message:</strong> <a href="1250.php">Gurhan Ozen: "[OMPI users] Fwd:  Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2006, at 9:14 AM, Gurhan Ozen wrote:
<br>
<p><span class="quotelev1">&gt; Jeff, George, Brian thanks for your inputs in this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did &quot;kind of&quot; get openib working. Different revisions of kernel was
</span><br>
<span class="quotelev1">&gt; running on both boxes, getting them running on the very same revisions
</span><br>
<span class="quotelev1">&gt; of kernel and recompiling open-mpi with that rev. of kernel got me
</span><br>
<span class="quotelev1">&gt; hello_world program running over openib stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, most MPI_* functions , such as MPI_Isend(), MPI_Barrier() are
</span><br>
<span class="quotelev1">&gt; not working. For each one of them, i get the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hostname:11992] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [hostname:11992] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [hostname:11992] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [hostname:11992] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hostname:11998] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [hostname:11998] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [hostname:11998] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [hostname:11998] *** MPI_ERRORS_ARE_FATAL (goodby
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hostname:01916] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [hostname:01916] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [hostname:01916] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [hostname:01916] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not just happening over network, but also locally. I am
</span><br>
<span class="quotelev1">&gt; inclined to think that i miss some compilation flags or whatever.. I
</span><br>
<span class="quotelev1">&gt; have tried this with  openmpi-1.1a4 version as well , but kept on
</span><br>
<span class="quotelev1">&gt; getting the same errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions of the day:
</span><br>
<span class="quotelev1">&gt; 1- Does anyone know why I might be getting this errors?
</span><br>
<p>This generally means that there was no btl available to move data  
<br>
between nodes.  So I think you still have some issues with your  
<br>
network setup (unfortunately, I'm not able to help here. George asked  
<br>
for some debugging information that would be most helpful to us --  
<br>
you might want to try getting that data with your current setup).
<br>
<p><span class="quotelev1">&gt; 2- I couldn't find any &quot;free&quot; debuggers for debugging open-mpi
</span><br>
<span class="quotelev1">&gt; programs, does anyone know of any? Are there any tricks to use gdb ,
</span><br>
<span class="quotelev1">&gt; at least to debug locally running mpi programs?
</span><br>
<p>The simple, dirty trick is to setup X11 forwarding with ssh and run:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np X -d xterm -e gdb &lt;myapp&gt;
<br>
<p>You'll get a bunch of xterms open and can debug that way.  It's  
<br>
simple, it's cheap, but it definitely doesn't scale.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1252.php">Brian Barrett: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Previous message:</strong> <a href="1250.php">Gurhan Ozen: "[OMPI users] Fwd:  Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1241.php">Gurhan Ozen: "Re: [OMPI users] Open MPI and OpenIB"</a>
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
