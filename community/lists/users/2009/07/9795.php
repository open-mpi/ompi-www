<?
$subject_val = "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 03:28:46 2009" -->
<!-- isoreceived="20090702072846" -->
<!-- sent="Thu, 2 Jul 2009 12:58:41 +0530" -->
<!-- isosent="20090702072841" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple" -->
<!-- id="fa4af8200907020028q4eae0652w290425b394eadf7e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200907020016ob010012w63e5c0870d1778ff_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-02 03:28:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9796.php">Raymond Wan: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>Previous message:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9949.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9949.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>&nbsp;To add few more points to my queries, as you said earlier &quot;addhost&quot; and
<br>
&quot;addhostfile&quot; features will come soon. So can you please tell how we are
<br>
going to use those features, will there be any API for that to calll from
<br>
inside the program or we have to execute command to use those features.
<br>
<p>Thanks,
<br>
<p>Regards,
<br>
On Thu, Jul 2, 2009 at 12:46 PM, vipin kumar &lt;vipinkumar41_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am thankful to your reply regarding the matter, however to carry forward
</span><br>
<span class="quotelev1">&gt; with my activities it would be of great help if I can know where
</span><br>
<span class="quotelev1">&gt; OpenMpi/mpirun holds the contents of &quot;hostfile&quot; so that I can dynamically
</span><br>
<span class="quotelev1">&gt; add/alter the values till such a feature is officially included in OpenMpi
</span><br>
<span class="quotelev1">&gt; in the form of &quot;addhost&quot; and &quot;addhostfile&quot;.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 2, 2009 at 12:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, the answer is &quot;no&quot;. :-/
</span><br>
<span class="quotelev2">&gt;&gt; However, we do have a &quot;ticket&quot; in our plans to add a &quot;addhost&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; &quot;addhostfile&quot; capability to the system. I haven't implemented it yet because
</span><br>
<span class="quotelev2">&gt;&gt; of other priorities and the fact that nobody has asked for it before now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well...actually, people -did- ask for it a long time ago, but not for
</span><br>
<span class="quotelev2">&gt;&gt; quite awhile now. ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, I can implement those features pretty easily. Could get to it in
</span><br>
<span class="quotelev2">&gt;&gt; the next few days - otherwise, it will have to wait another week as I will
</span><br>
<span class="quotelev2">&gt;&gt; be out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either way, though, it would only be in the OMPI devel trunk until the
</span><br>
<span class="quotelev2">&gt;&gt; next feature series (1.5) has its first release. Haven't set the date for
</span><br>
<span class="quotelev2">&gt;&gt; that, though it will likely be this summer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2009, at 12:45 AM, vipin kumar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the solution but its not flexible. I have to provide two host files
</span><br>
<span class="quotelev2">&gt;&gt; &quot;chfile&quot; and &quot;dhfile&quot;. Contents of host files are as follows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat chfile
</span><br>
<span class="quotelev2">&gt;&gt; #This file contains all slaves as well as master node
</span><br>
<span class="quotelev2">&gt;&gt; localhost
</span><br>
<span class="quotelev2">&gt;&gt; 200.40.70.193
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $cat dhfile
</span><br>
<span class="quotelev2">&gt;&gt; #This file contains all slave nodes
</span><br>
<span class="quotelev2">&gt;&gt; 200.40.70.193
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the command line I am using is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 1 -hostfile chfile launcher -hostfile dhfile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but this is not what I want.
</span><br>
<span class="quotelev2">&gt;&gt;    I don't know in advance which and how many remote nodes can be there.
</span><br>
<span class="quotelev2">&gt;&gt; Dynamically nodes may be added and requested to serve the master. So I am
</span><br>
<span class="quotelev2">&gt;&gt; assuming that I have only local machine where I will invoke launcher
</span><br>
<span class="quotelev2">&gt;&gt; program. When one remote node gets added launcher program will launch one
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slave&quot; in local machine and one &quot;rslave&quot; in remote machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any other way to do this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jun 29, 2009 at 10:49 AM, vipin kumar &lt;vipinkumar41_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I am trying to spawn dynamically processes in remote as well as local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine using MPI::Intracomm::Spawn_multiple. I am using MPI::Info object to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tell where to launch processes using &quot;host&quot; key and &quot;&lt;ip_address&gt;&quot; as its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value but but I am getting the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   slaveprocess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried with &quot;&lt;hostname&gt;&quot; too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but its not working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works fine if I give the value &quot;localhost&quot; to &quot;host:&quot; key. It launches
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully processes in local machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any help will be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vipin K.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C-Dot, Bangalore, India
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-DOTB, India
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9796.php">Raymond Wan: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>Previous message:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9949.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9949.php">Ralph Castain: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
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
