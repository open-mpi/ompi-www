<?
$subject_val = "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 02:45:44 2009" -->
<!-- isoreceived="20090702064544" -->
<!-- sent="Thu, 2 Jul 2009 12:15:39 +0530" -->
<!-- isosent="20090702064539" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple" -->
<!-- id="fa4af8200907012345x6274cb77ndfb8eccc0661edce_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200906282219t11451maaa6bf59a73ea8e5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 02:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9791.php">Ashika Umanga Umagiliya: "[OMPI users] Error connecting to nodes ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9751.php">vipin kumar: "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I got the solution but its not flexible. I have to provide two host files
<br>
&quot;chfile&quot; and &quot;dhfile&quot;. Contents of host files are as follows
<br>
<p>$ cat chfile
<br>
#This file contains all slaves as well as master node
<br>
localhost
<br>
200.40.70.193
<br>
<p>$cat dhfile
<br>
#This file contains all slave nodes
<br>
200.40.70.193
<br>
<p>and the command line I am using is
<br>
<p>$ mpirun -np 1 -hostfile chfile launcher -hostfile dhfile
<br>
<p>but this is not what I want.
<br>
&nbsp;&nbsp;&nbsp;I don't know in advance which and how many remote nodes can be there.
<br>
Dynamically nodes may be added and requested to serve the master. So I am
<br>
assuming that I have only local machine where I will invoke launcher
<br>
program. When one remote node gets added launcher program will launch one
<br>
&quot;slave&quot; in local machine and one &quot;rslave&quot; in remote machine.
<br>
<p>Is there any other way to do this.
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
<p>On Mon, Jun 29, 2009 at 10:49 AM, vipin kumar &lt;vipinkumar41_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am trying to spawn dynamically processes in remote as well as local
</span><br>
<span class="quotelev1">&gt; machine using MPI::Intracomm::Spawn_multiple. I am using MPI::Info object to
</span><br>
<span class="quotelev1">&gt; tell where to launch processes using &quot;host&quot; key and &quot;&lt;ip_address&gt;&quot; as its
</span><br>
<span class="quotelev1">&gt; value but but I am getting the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;   slaveprocess
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried with &quot;&lt;hostname&gt;&quot; too.
</span><br>
<span class="quotelev1">&gt; but its not working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine if I give the value &quot;localhost&quot; to &quot;host:&quot; key. It launches
</span><br>
<span class="quotelev1">&gt; successfully processes in local machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any help will be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-Dot, Bangalore, India
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9791.php">Ashika Umanga Umagiliya: "[OMPI users] Error connecting to nodes ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9751.php">vipin kumar: "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
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
