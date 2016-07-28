<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 27 12:55:45 2006" -->
<!-- isoreceived="20060427165545" -->
<!-- sent="Thu, 27 Apr 2006 12:55:39 -0400" -->
<!-- isosent="20060427165539" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun problem" -->
<!-- id="FB59815E-DA34-4EC5-806B-5D80E38FC901_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4452A2EB_at_webmail.colostate.edu" -->
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
<strong>Date:</strong> 2006-04-27 12:55:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1161.php">Marcus G. Daniels: "[OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<li><strong>Previous message:</strong> <a href="1159.php">sdamjad: "[OMPI users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="1159.php">sdamjad: "[OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2006, at 12:09 PM, sdamjad wrote:
<br>
<p><span class="quotelev1">&gt; I can not find mpirun or mpicc executables.  Hence i send the logs
</span><br>
<p>It's generally useful to include that information in your report - I  
<br>
couldn't tell what problem you were having from your log files.
<br>
<p>Anyway, I would guess that the problem you are having is a simple  
<br>
PATH issue - you installed the library into something that isn't in  
<br>
your default PATH.  It looks like you installed into your home  
<br>
directory, from your configure line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ ./configure --enable-mpi-f77 --prefix=/Users/amjad
<br>
<p>That means the executables are in /Users/amjad/bin and libraries in / 
<br>
Users/amjad/lib.  If you add /Users/amjad/bin into your PATH  
<br>
environment variable, everything should work for you.
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
<li><strong>Next message:</strong> <a href="1161.php">Marcus G. Daniels: "[OMPI users] crash inside mca_btl_tcp_proc_remove"</a>
<li><strong>Previous message:</strong> <a href="1159.php">sdamjad: "[OMPI users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="1159.php">sdamjad: "[OMPI users] mpirun problem"</a>
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
