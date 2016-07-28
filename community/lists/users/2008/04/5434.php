<?
$subject_val = "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 04:40:54 2008" -->
<!-- isoreceived="20080422084054" -->
<!-- sent="Tue, 22 Apr 2008 10:40:49 +0200" -->
<!-- isosent="20080422084049" -->
<!-- name="gildo.rex_at_[hidden]" -->
<!-- email="gildo.rex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found" -->
<!-- id="20080422084049.235540_at_gmx.net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found<br>
<strong>From:</strong> <a href="mailto:gildo.rex_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20with%20program-execution%20with%20OpenMPI:	Orted:%20command%20not%20found"><em>gildo.rex_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-22 04:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jodi,
<br>
<p>thanks for the quick answer!
<br>
<p><span class="quotelev1">&gt; Have you tried the command ompi_info?
</span><br>
<span class="quotelev1">&gt; What is its output?
</span><br>
<p>No, I haven't. I can try this evening, when I'm back home from work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Furthermore, the command you gave
</span><br>
<span class="quotelev2">&gt;  &gt;   mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
<span class="quotelev1">&gt; is incomplete. There is no executable.
</span><br>
<p>Sorry, it should correctly be
<br>
<p>mpirun -np 2 --hostfile /home/stephan/mpd.hosts /bin/hostname
<br>
<p>The output shows, that the program is only executed on the local machine. This is the same on each of the machines.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try to make sure wether your host file has the correct
</span><br>
<span class="quotelev1">&gt; format. If i remember correctly  Open-MPI does not use
</span><br>
<span class="quotelev1">&gt; the same format for hostfiles as MPICH.
</span><br>
<p>Yes, thats true according to the documentation. There is a possibility to define the number of slots and the max-number of slots in OpenMPI, which I haven't seen in MPICH so far (at least not within the hostfile).
<br>
But when I use a hostfile without a specification regarding the slots, e.g.
<br>
<p>shell$ cat my-hosts
<br>
node0 
<br>
node1
<br>
<p>(which is the same as in MPICH), it should interpret the default values, i.e. slots=1 and max_slots=unlimited). That should work for that simple test.
<br>
<p><span class="quotelev1">&gt; See the FAQ for more info
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<p>I also tried the way to specify the hosts in the command, e.g.
<br>
<p>mpirun --host -np 2 node0,node1 /bin/hostname
<br>
<p>but the result is the same. The program runs only on one host.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't use a hostfile, mpirun will start
</span><br>
<span class="quotelev1">&gt; all processes on the local machine.
</span><br>
<p>Yes, that's what it obviously does. It doesn't recognise the cluster partner in each direction...
<br>
<p>Kind Regards
<br>
<p>Stephan
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 22, 2008 at 8:56 AM,  &lt;gildo.rex_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I wanted to compare MPICH and OpenMPI. MPICH works fine. So I installed
</span><br>
<span class="quotelev1">&gt; OpenMPI the same way (configure, make, make install). The commands are
</span><br>
<span class="quotelev1">&gt; found in the OpenMPI installation directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  When I tried to run programs I was a little bit confused, that there
</span><br>
<span class="quotelev1">&gt; seems not to be a default hosts-file like in MPICH. I included it in the
</span><br>
<span class="quotelev1">&gt; command with &quot;--hostfile&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  When I now want to run my first test with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np 2 --hostfile /home/stephan/mpd.hosts
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I get the error-message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   orted: command not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  The &quot;orted&quot;-executable resides as well as the &quot;mpirun&quot;- and
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec&quot;-executables in the directory /home/stephan/openmpi-install. &quot;orted&quot; is also
</span><br>
<span class="quotelev1">&gt; found by &quot;which orted&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  What might be the problem? How does &quot;orted&quot; work? I'm not conscious
</span><br>
<span class="quotelev1">&gt; about anything equivalent in MPICH...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Thanks in advance for your help!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Kind Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Stephan
</span><br>
<p><pre>
-- 
Psssst! Schon vom neuen GMX MultiMessenger geh&#246;rt?
Der kann`s mit allen: <a href="http://www.gmx.net/de/go/multimessenger">http://www.gmx.net/de/go/multimessenger</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5433.php">Doug Reeder: "Re: [OMPI users] Problems with program-execution with OpenMPI: Orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>Reply:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
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
