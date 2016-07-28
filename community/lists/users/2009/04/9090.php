<?
$subject_val = "Re: [OMPI users] few Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 16:13:23 2009" -->
<!-- isoreceived="20090424201323" -->
<!-- sent="Fri, 24 Apr 2009 16:13:17 -0400" -->
<!-- isosent="20090424201317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] few Problems" -->
<!-- id="7E77B7BA-8605-435C-8F94-A6F2143B16EF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66B5EA7C-773E-4314-8CB2-3DEDB846325E_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] few Problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 16:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9091.php">Anton Starikov: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>Previous message:</strong> <a href="9089.php">Jeff Squyres: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>In reply to:</strong> <a href="9081.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2009, at 3:59 PM, Luis Vitorio Cargnini wrote:
<br>
<p><span class="quotelev1">&gt; I'm using NFS, my home dir is the same in all nodes the problem is
</span><br>
<span class="quotelev1">&gt; when generating the key it is been generated for a specific machine
</span><br>
<span class="quotelev1">&gt; end of the key is the user_at_host, the system is consulting id_dsa in
</span><br>
<span class="quotelev1">&gt; each machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That's ok.  I have a similar setup: svbu-mpi is my cluster &quot;head node&quot;  
<br>
and that's where I generated my DSA key.  So  my id_dsa.pub file looks  
<br>
like this:
<br>
<p>[13:05] svbu-mpi:~/hg % cat ~/.ssh/id_dsa.pub
<br>
ssh-dss  
<br>
AAAAB3NzaC1kc3MAAACBAPhFvzoDPw1da2aYf2PCW9sQfOT4SYmvI5EYfJvJXyyVLs7C 
<br>
+ETY5Zma7js2PCfk4kgHUVJQgglP5V/Dp9uBjgP/zpNdOWbP 
<br>
+chULEXaz0HKOV3NZM5BH6oBRTSGTZh4DhqnQjotQsp6gi9LZ+GGl00tzc 
<br>
+ 
<br>
EzlfqIfSuKHQjSTADAAAAFQCM1AbE8Z7+mcCzFpNUAa7eLBFOhQAAAIEAjMEiDNceRdvMjf 
<br>
+Of1nwaMb8ndx/w4ltEH67P0g2xn8PfJP56rYn7ffiEuB5Ndu 
<br>
+iLskII5CkDwLZOmv4nP32gNzxxyo23Qbnd88a+BYe+j9yu35czqvPzxHBKlP5t0zaeZQt/ 
<br>
fXr/VKd1P9OhZKMVmGZm1m2Yn5M21d16V1j4QAAACBALe2hbtgzqSMSVyX7ED31MfJsYxW/ 
<br>
y01VH9f7Ot+WfJrpTsTRTWMYb6x1jTAozC/DvZlx/KPKiekQH 
<br>
+ApkfL1e6TSlug1Y5Kv9zCvXwEAbgwHEwUoWvTT 
<br>
+IpBwD318AjraZtJXlIb03tkX7l2gZNncwOmzFbwqGwypD3YtHAY3j1 jsquyres_at_svbu- 
<br>
mpi
<br>
[13:05] svbu-mpi:~/hg %
<br>
<p>And that same $HOME/.ssh/id_dsa.pub (and corresponding $HOME/.ssh/ 
<br>
id_dsa) file is available on all my nodes via NFS.  The email address  
<br>
at the end is not really part of the key; it's just there for human  
<br>
reference for you to remember where it came from.  It doesn't affect  
<br>
the authentication at all.
<br>
<p><span class="quotelev1">&gt; so to fix the problem since my applications are launch from node srv0
</span><br>
<span class="quotelev1">&gt; I just create the keys in node 0 and that is it start to work in to
</span><br>
<span class="quotelev1">&gt; connect in the others node, the problem is the reverse path I can't
</span><br>
<span class="quotelev1">&gt; access from srv1 srv0 for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Why not?  If you copy your id_dsa.pub file to authorized_keys, it  
<br>
should Just Work (assuming the permissions are all set correctly:
<br>
<p>- $HOME/.ssh needs, owned by you, 0700
<br>
- $HOME/.ssh/authorized_keys owned by you, 0600
<br>
- $HOME/.ssh/id_dsa.pub owned by you, 0644
<br>
- $HOME/.ssh/id_dsa owned by you, 0600
<br>
<p>The SSH setup HOWTOs and recipes sent in this thread (I assume) must  
<br>
talk about such things..?
<br>
<p><span class="quotelev1">&gt; The point is working from node0, the connections trough ssh. Now the
</span><br>
<span class="quotelev1">&gt; execution it start but do not stop, like keep running ad infinitum,
</span><br>
<span class="quotelev1">&gt; any ideas ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  -d -v -hostfile chosts -np 35 ~/mpi/hello
</span><br>
<span class="quotelev1">&gt; [cluster-srv0:29466] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; lvcargnini_at_cluster-
</span><br>
<span class="quotelev1">&gt; srv0_0/44411/0/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
[snipped]
<br>
<p>Are you able to run non-MPI apps through mpirun?  For example:
<br>
<p>mpirun  -d -v -hostfile chosts hostname | sort
<br>
<p>If that works, then did you compile &quot;hello&quot; correctly (e.g., with  
<br>
mpicc)?  I assume this is a simple &quot;hello world&quot; kind of MPI program  
<br>
-- calls MPI_INIT, maybe MPI_COMM_RANK and MPI_COMM_SIZE, and  
<br>
MPI_FINALIZE?
<br>
<p>Do you have TCP firewalling disabled on all of your cluster nodes?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9091.php">Anton Starikov: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<li><strong>Previous message:</strong> <a href="9089.php">Jeff Squyres: "Re: [OMPI users] Open-MPI Presentation"</a>
<li><strong>In reply to:</strong> <a href="9081.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
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
