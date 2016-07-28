<?
$subject_val = "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 02:53:48 2009" -->
<!-- isoreceived="20090702065348" -->
<!-- sent="Thu, 2 Jul 2009 00:53:34 -0600" -->
<!-- isosent="20090702065334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple" -->
<!-- id="2E7405FC-9ECB-426D-B649-2F9AAC34F728_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa4af8200907012345x6274cb77ndfb8eccc0661edce_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-02 02:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the moment, the answer is &quot;no&quot;. :-/
<br>
<p>However, we do have a &quot;ticket&quot; in our plans to add a &quot;addhost&quot; and  
<br>
&quot;addhostfile&quot; capability to the system. I haven't implemented it yet  
<br>
because of other priorities and the fact that nobody has asked for it  
<br>
before now.
<br>
<p>Well...actually, people -did- ask for it a long time ago, but not for  
<br>
quite awhile now. ;-)
<br>
<p>Anyway, I can implement those features pretty easily. Could get to it  
<br>
in the next few days - otherwise, it will have to wait another week as  
<br>
I will be out.
<br>
<p>Either way, though, it would only be in the OMPI devel trunk until the  
<br>
next feature series (1.5) has its first release. Haven't set the date  
<br>
for that, though it will likely be this summer.
<br>
<p>Ralph
<br>
<p>On Jul 2, 2009, at 12:45 AM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the solution but its not flexible. I have to provide two host  
</span><br>
<span class="quotelev1">&gt; files &quot;chfile&quot; and &quot;dhfile&quot;. Contents of host files are as follows
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
<span class="quotelev1">&gt;    I don't know in advance which and how many remote nodes can be  
</span><br>
<span class="quotelev1">&gt; there. Dynamically nodes may be added and requested to serve the  
</span><br>
<span class="quotelev1">&gt; master. So I am assuming that I have only local machine where I will  
</span><br>
<span class="quotelev1">&gt; invoke launcher program. When one remote node gets added launcher  
</span><br>
<span class="quotelev1">&gt; program will launch one &quot;slave&quot; in local machine and one &quot;rslave&quot; in  
</span><br>
<span class="quotelev1">&gt; remote machine.
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
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 10:49 AM, vipin kumar  
</span><br>
<span class="quotelev1">&gt; &lt;vipinkumar41_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am trying to spawn dynamically processes in remote as well as  
</span><br>
<span class="quotelev1">&gt; local machine using MPI::Intracomm::Spawn_multiple. I am using  
</span><br>
<span class="quotelev1">&gt; MPI::Info object to tell where to launch processes using &quot;host&quot; key  
</span><br>
<span class="quotelev1">&gt; and &quot;&lt;ip_address&gt;&quot; as its value but but I am getting the error
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
<span class="quotelev1">&gt; It works fine if I give the value &quot;localhost&quot; to &quot;host:&quot; key. It  
</span><br>
<span class="quotelev1">&gt; launches successfully processes in local machine.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9792.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="9794.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
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
