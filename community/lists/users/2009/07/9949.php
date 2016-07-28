<?
$subject_val = "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 10:42:03 2009" -->
<!-- isoreceived="20090714144203" -->
<!-- sent="Tue, 14 Jul 2009 08:41:49 -0600" -->
<!-- isosent="20090714144149" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple" -->
<!-- id="A15120F4-3FCB-4CE2-9914-7D3BA65E6DE9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa4af8200907020028q4eae0652w290425b394eadf7e_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 10:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9950.php">Evans, Thomas M.: "[OMPI users] Stumped again by dynamic loading"</a>
<li><strong>Previous message:</strong> <a href="9948.php">Evans, Thomas M.: "Re: [OMPI users] Python bindings for openmpi"</a>
<li><strong>In reply to:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9965.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9965.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vipin
<br>
<p>I have added support for these features to the OMPI trunk repository.  
<br>
They are only accessible via MPI_Comm_spawn or  
<br>
MPI_Comm_spawn_multiple, specified as MPI Info keys &quot;add-host&quot; and  
<br>
&quot;add-hostfile&quot;. Check the man pages for those functions to see how  
<br>
they are used.
<br>
<p>Quick summary: I add the hosts found in any add-host and add-hostfile  
<br>
specifications to the list of hosts known to mpirun, and then use the  
<br>
provided hosts to constrain the launch of the specified apps. So  
<br>
spawning an app of &quot;foo&quot; with an info key of &quot;add-host mike&quot; will  
<br>
result in foo being launched on mike, without mpirun having previous  
<br>
knowledge of &quot;mike&quot;.
<br>
<p>You'll have to wait to try it, though, until another problem in  
<br>
comm_spawn on the trunk gets fixed - hopefully, real soon (someone is  
<br>
working on it).
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jul 2, 2009, at 1:28 AM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  To add few more points to my queries, as you said earlier &quot;addhost&quot;  
</span><br>
<span class="quotelev1">&gt; and &quot;addhostfile&quot; features will come soon. So can you please tell  
</span><br>
<span class="quotelev1">&gt; how we are going to use those features, will there be any API for  
</span><br>
<span class="quotelev1">&gt; that to calll from inside the program or we have to execute command  
</span><br>
<span class="quotelev1">&gt; to use those features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 2, 2009 at 12:46 PM, vipin kumar  
</span><br>
<span class="quotelev1">&gt; &lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am thankful to your reply regarding the matter, however to carry  
</span><br>
<span class="quotelev1">&gt; forward with my activities it would be of great help if I can know  
</span><br>
<span class="quotelev1">&gt; where OpenMpi/mpirun holds the contents of &quot;hostfile&quot; so that I can  
</span><br>
<span class="quotelev1">&gt; dynamically add/alter the values till such a feature is officially  
</span><br>
<span class="quotelev1">&gt; included in OpenMpi in the form of &quot;addhost&quot; and &quot;addhostfile&quot;.
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
<span class="quotelev1">&gt; On Thu, Jul 2, 2009 at 12:23 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; At the moment, the answer is &quot;no&quot;. :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we do have a &quot;ticket&quot; in our plans to add a &quot;addhost&quot; and  
</span><br>
<span class="quotelev1">&gt; &quot;addhostfile&quot; capability to the system. I haven't implemented it yet  
</span><br>
<span class="quotelev1">&gt; because of other priorities and the fact that nobody has asked for  
</span><br>
<span class="quotelev1">&gt; it before now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well...actually, people -did- ask for it a long time ago, but not  
</span><br>
<span class="quotelev1">&gt; for quite awhile now. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I can implement those features pretty easily. Could get to  
</span><br>
<span class="quotelev1">&gt; it in the next few days - otherwise, it will have to wait another  
</span><br>
<span class="quotelev1">&gt; week as I will be out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, though, it would only be in the OMPI devel trunk until  
</span><br>
<span class="quotelev1">&gt; the next feature series (1.5) has its first release. Haven't set the  
</span><br>
<span class="quotelev1">&gt; date for that, though it will likely be this summer.
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
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the solution but its not flexible. I have to provide two host  
</span><br>
<span class="quotelev2">&gt;&gt; files &quot;chfile&quot; and &quot;dhfile&quot;. Contents of host files are as follows
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
<span class="quotelev2">&gt;&gt;    I don't know in advance which and how many remote nodes can be  
</span><br>
<span class="quotelev2">&gt;&gt; there. Dynamically nodes may be added and requested to serve the  
</span><br>
<span class="quotelev2">&gt;&gt; master. So I am assuming that I have only local machine where I  
</span><br>
<span class="quotelev2">&gt;&gt; will invoke launcher program. When one remote node gets added  
</span><br>
<span class="quotelev2">&gt;&gt; launcher program will launch one &quot;slave&quot; in local machine and one  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rslave&quot; in remote machine.
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
<span class="quotelev2">&gt;&gt; On Mon, Jun 29, 2009 at 10:49 AM, vipin kumar  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am trying to spawn dynamically processes in remote as well as  
</span><br>
<span class="quotelev2">&gt;&gt; local machine using MPI::Intracomm::Spawn_multiple. I am using  
</span><br>
<span class="quotelev2">&gt;&gt; MPI::Info object to tell where to launch processes using &quot;host&quot; key  
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;&lt;ip_address&gt;&quot; as its value but but I am getting the error
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
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using  
</span><br>
<span class="quotelev2">&gt;&gt; the
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
<span class="quotelev2">&gt;&gt; It works fine if I give the value &quot;localhost&quot; to &quot;host:&quot; key. It  
</span><br>
<span class="quotelev2">&gt;&gt; launches successfully processes in local machine.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9949/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9950.php">Evans, Thomas M.: "[OMPI users] Stumped again by dynamic loading"</a>
<li><strong>Previous message:</strong> <a href="9948.php">Evans, Thomas M.: "Re: [OMPI users] Python bindings for openmpi"</a>
<li><strong>In reply to:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9965.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9965.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
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
