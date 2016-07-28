<?
$subject_val = "Re: [OMPI users] How to debug Open MPI programs with gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 12:33:31 2010" -->
<!-- isoreceived="20100422163331" -->
<!-- sent="Thu, 22 Apr 2010 18:33:23 +0200" -->
<!-- isosent="20100422163323" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to debug Open MPI programs with gdb" -->
<!-- id="87mxwvqwfg.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201004221311.50053.nemanja.ilic.81_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to debug Open MPI programs with gdb<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 12:33:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 22 Apr 2010 13:11:49 +0200, &quot;=?utf-8?b?0J3QtdC80LDRmtCwINCY0LvQuNGb?= (Nemanja Ilic)&quot; &lt;nemanja.ilic.81_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On the contrary when I debug with &quot;mpirun -np 4 xterm -e gdb
</span><br>
<span class="quotelev1">&gt; my_mpi_application&quot; the four debugger windows are started with
</span><br>
<span class="quotelev1">&gt; separate thread each, just as it should be.  Since I will be using
</span><br>
<span class="quotelev1">&gt; debugger on a remote computer I can only run gdb in console mode. Can
</span><br>
<span class="quotelev1">&gt; anyone help me with this?
</span><br>
<p>An alternative to opening xterms (e.g. if that host isn't running an X
<br>
server, you can't get X11 forwarding to work, or you just don't want
<br>
xterms) is to use GNU &quot;screen&quot;.  It's basically the same command line,
<br>
but it will open a screen terminal for each thread.  When debugging
<br>
multiple threads with xterms or screens, I recommend gdb's -ex 'break
<br>
somewhere' -ex run --args ./app -args -for -your application to save you
<br>
from entering commands into each terminal separately.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>Previous message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<li><strong>In reply to:</strong> <a href="12729.php">&#208;&#157;&#208;&#181;&#208;&#188;&#208;&#176;&#209;&#154;&#208;&#176; &#208;&#152;&#208;&#187;&#208;&#184;&#209;&#155; (Nemanja Ilic): "[OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
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
