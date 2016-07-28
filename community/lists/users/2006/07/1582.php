<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 22:38:01 2006" -->
<!-- isoreceived="20060707023801" -->
<!-- sent="Thu, 6 Jul 2006 20:37:35 -0600" -->
<!-- isosent="20060707023735" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging with mpirun" -->
<!-- id="9E2F6344-BFD0-405E-A073-C5E02CEE1533_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1152239238.12557.2.camel_at_localhost" -->
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
<strong>Date:</strong> 2006-07-06 22:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1583.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Previous message:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<li><strong>In reply to:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1584.php">Manal Helal: "Re: [OMPI users] debugging with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2006, at 8:27 PM, Manal Helal wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to debug my mpi program, but printf debugging is not doing
</span><br>
<span class="quotelev1">&gt; much, and I need something that can show me variable values, and which
</span><br>
<span class="quotelev1">&gt; line of execution (and where it is called from), something like gdb  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; mpi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is there anything like that?
</span><br>
<p>There are a couple of options.  The first (works best with ssh, but  
<br>
can be made to work with most starting mechanisms) is to start a  
<br>
bunch of gdb sessions in xterms.  Something like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np XX -d xterm -e gdb &lt;your app&gt;
<br>
<p>The '-d' option is necessary so that mpirun doesn't close the ssh  
<br>
sessions, severing its X11 forwarding channel.  This has the  
<br>
advantage of being free, but has the disadvantage of being a major  
<br>
pain.  A better option is to try a real parallel debugger, such as  
<br>
TotalView or Portland Group's PGDBG.  This has the advantage of  
<br>
working very well (I use TotalView whenever possible), but has the  
<br>
disadvantage of generally not being free.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
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
<li><strong>Next message:</strong> <a href="1583.php">s anwar: "Re: [OMPI users] MPI_Comm_spawn error messages"</a>
<li><strong>Previous message:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<li><strong>In reply to:</strong> <a href="1581.php">Manal Helal: "[OMPI users] debugging with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1584.php">Manal Helal: "Re: [OMPI users] debugging with mpirun"</a>
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
