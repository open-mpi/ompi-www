<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 16:00:34 2006" -->
<!-- isoreceived="20060416200034" -->
<!-- sent="Sun, 16 Apr 2006 13:00:25 -0700" -->
<!-- isosent="20060416200025" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling C++ program" -->
<!-- id="F2D155B1-CCDC-43D8-9071-C2ABC78D0664_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1145213573.44429285aa4d1_at_mymail.tcd.ie" -->
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
<strong>Date:</strong> 2006-04-16 16:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1079.php">Shekhar Tyagi: "[OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1079.php">Shekhar Tyagi: "[OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1085.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1085.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 16, 2006, at 11:52 AM, Shekhar Tyagi wrote:
<br>
<p><span class="quotelev1">&gt; I am new to MPI and prallel programming, recently i made two  
</span><br>
<span class="quotelev1">&gt; programs one in C
</span><br>
<span class="quotelev1">&gt; and other in C++. The cluster on which i work is able to compile  
</span><br>
<span class="quotelev1">&gt; and execute
</span><br>
<span class="quotelev1">&gt; the C program but its not able to make an executable file for C++  
</span><br>
<span class="quotelev1">&gt; program.
</span><br>
<span class="quotelev1">&gt; The command i am using is mpiCC for C++ program but it looks as  
</span><br>
<span class="quotelev1">&gt; though, the
</span><br>
<span class="quotelev1">&gt; wrapping compiler sends this to an infinte loop as its not able to  
</span><br>
<span class="quotelev1">&gt; form an
</span><br>
<span class="quotelev1">&gt; executable file. My command window looks like this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [styagi_at_borelli Mpi]$ mpiCC -o mathbyvec.out mathbyvec.cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and nothing happens afterwards. Please help me out in this regard.
</span><br>
<p>I'd be surprised if this was the wrapper compiler, but it can be  
<br>
pretty easy to choke a C++ compiler and make it take a long time to  
<br>
compile.  An easy way to figure out which is the problem is to use  
<br>
the command:
<br>
<p>&nbsp;&nbsp;&nbsp;mpiCC -o mathbyvec.out mathbyvec.cc -showme
<br>
<p>which will cause the wrapper compiler to show what command it is  
<br>
going to execute rather than executing it.  You can then take that  
<br>
command and run it.  If the underlying compiler takes a long time to  
<br>
run, you know where the problem lies.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1079.php">Shekhar Tyagi: "[OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1079.php">Shekhar Tyagi: "[OMPI users] Compiling C++ program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1085.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>Reply:</strong> <a href="1085.php">Shekhar Tyagi: "Re: [OMPI users] Compiling C++ program"</a>
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
