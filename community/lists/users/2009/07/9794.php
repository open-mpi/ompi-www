<?
$subject_val = "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 03:16:39 2009" -->
<!-- isoreceived="20090702071639" -->
<!-- sent="Thu, 2 Jul 2009 12:46:34 +0530" -->
<!-- isosent="20090702071634" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple" -->
<!-- id="fa4af8200907020016ob010012w63e5c0870d1778ff_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E7405FC-9ECB-426D-B649-2F9AAC34F728_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-07-02 03:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I am thankful to your reply regarding the matter, however to carry forward
<br>
with my activities it would be of great help if I can know where
<br>
OpenMpi/mpirun holds the contents of &quot;hostfile&quot; so that I can dynamically
<br>
add/alter the values till such a feature is officially included in OpenMpi
<br>
in the form of &quot;addhost&quot; and &quot;addhostfile&quot;.
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
<p>On Thu, Jul 2, 2009 at 12:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At the moment, the answer is &quot;no&quot;. :-/
</span><br>
<span class="quotelev1">&gt; However, we do have a &quot;ticket&quot; in our plans to add a &quot;addhost&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;addhostfile&quot; capability to the system. I haven't implemented it yet because
</span><br>
<span class="quotelev1">&gt; of other priorities and the fact that nobody has asked for it before now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well...actually, people -did- ask for it a long time ago, but not for quite
</span><br>
<span class="quotelev1">&gt; awhile now. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I can implement those features pretty easily. Could get to it in
</span><br>
<span class="quotelev1">&gt; the next few days - otherwise, it will have to wait another week as I will
</span><br>
<span class="quotelev1">&gt; be out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, though, it would only be in the OMPI devel trunk until the next
</span><br>
<span class="quotelev1">&gt; feature series (1.5) has its first release. Haven't set the date for that,
</span><br>
<span class="quotelev1">&gt; though it will likely be this summer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2009, at 12:45 AM, vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the solution but its not flexible. I have to provide two host files
</span><br>
<span class="quotelev1">&gt; &quot;chfile&quot; and &quot;dhfile&quot;. Contents of host files are as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat chfile
</span><br>
<span class="quotelev1">&gt; #This file contains all slaves as well as master node
</span><br>
<span class="quotelev1">&gt; localhost
</span><br>
<span class="quotelev1">&gt; 200.40.70.193
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $cat dhfile
</span><br>
<span class="quotelev1">&gt; #This file contains all slave nodes
</span><br>
<span class="quotelev1">&gt; 200.40.70.193
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the command line I am using is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 -hostfile chfile launcher -hostfile dhfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this is not what I want.
</span><br>
<span class="quotelev1">&gt;    I don't know in advance which and how many remote nodes can be there.
</span><br>
<span class="quotelev1">&gt; Dynamically nodes may be added and requested to serve the master. So I am
</span><br>
<span class="quotelev1">&gt; assuming that I have only local machine where I will invoke launcher
</span><br>
<span class="quotelev1">&gt; program. When one remote node gets added launcher program will launch one
</span><br>
<span class="quotelev1">&gt; &quot;slave&quot; in local machine and one &quot;rslave&quot; in remote machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any other way to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 10:49 AM, vipin kumar &lt;vipinkumar41_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am trying to spawn dynamically processes in remote as well as local
</span><br>
<span class="quotelev2">&gt;&gt; machine using MPI::Intracomm::Spawn_multiple. I am using MPI::Info object to
</span><br>
<span class="quotelev2">&gt;&gt; tell where to launch processes using &quot;host&quot; key and &quot;&lt;ip_address&gt;&quot; as its
</span><br>
<span class="quotelev2">&gt;&gt; value but but I am getting the error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev2">&gt;&gt;   slaveprocess
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried with &quot;&lt;hostname&gt;&quot; too.
</span><br>
<span class="quotelev2">&gt;&gt; but its not working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It works fine if I give the value &quot;localhost&quot; to &quot;host:&quot; key. It launches
</span><br>
<span class="quotelev2">&gt;&gt; successfully processes in local machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any help will be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-Dot, Bangalore, India
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9793.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
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
