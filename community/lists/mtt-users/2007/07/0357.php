<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 07:52:16 2007" -->
<!-- isoreceived="20070718115216" -->
<!-- sent="Wed, 18 Jul 2007 07:52:04 -0400" -->
<!-- isosent="20070718115204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Some mtt,mpi issues for newbie" -->
<!-- id="F621B2F5-92A0-4AB9-A4AD-44A6CCDB74DA_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C901E738AA_at_mtlexch01.mtl.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 07:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/08/0358.php">Ethan Mallove: "[MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Shai Venter: "[MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>In reply to:</strong> <a href="0356.php">Shai Venter: "[MTT users] Some mtt,mpi issues for newbie"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2007, at 10:54 AM, Shai Venter wrote:
<br>
<p><span class="quotelev1">&gt; I know you guys are busy. Any attention to my questions will be  
</span><br>
<span class="quotelev1">&gt; mostly appreciated.
</span><br>
<p>Glad to help; sorry I didn't get to this yesterday.
<br>
<p><span class="quotelev1">&gt; Is there a FAQ for mtt? May be some of my Q have been answered before.
</span><br>
<p>Most of the information on MTT is currently on the MTT wiki:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/wiki">https://svn.open-mpi.org/trac/mtt/wiki</a>
<br>
<p>We have a paper being published about MTT in the Euro PVM/MPI  
<br>
conference in the beginning of October.  The plan is to release MTT  
<br>
as an open source package at the conference (to including having a  
<br>
web site for it).
<br>
<p><span class="quotelev1">&gt; I intend to run mtt and test some performance over Infiniband. My  
</span><br>
<span class="quotelev1">&gt; setup is a 2-Dell uni-core machines (i.e.: sw160,sw170) running  
</span><br>
<span class="quotelev1">&gt; SLES10.0. Each host has an Infiniband HCA Card installed. Each HCA  
</span><br>
<span class="quotelev1">&gt; Card has 2 Physical ports which are assigned unique IP&#146;s (i.e.:  
</span><br>
<span class="quotelev1">&gt; 11.4.3.160,12.4.3.160 and 11.4.3.170,12.4.3.170 respectively)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ports are connected back-to-back (port1 &lt;-&gt; port1 and port2 &lt;-&gt; port2)
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; Q #1: Can I override INI file value for hostlist in command line?  
</span><br>
<span class="quotelev1">&gt; If yes, please provide example.
</span><br>
<p>Yes.  You can override any INI file value on the command line.  For  
<br>
example:
<br>
<p>&nbsp;&nbsp;./mtt ... field=value
<br>
<p>I *believe* that these field=value tokens must be last on the command  
<br>
line, after all --flags, etc.
<br>
<p>Check out the ./mtt --help message for a list of all the command line  
<br>
options.
<br>
<span class="quotelev1">&gt; Q #2: In your opinion, what should I specify to hostlist in order  
</span><br>
<span class="quotelev1">&gt; to run mpi jobs over my Infiniband fabric?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it hostlist = sw160 sw170
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it hostlist = 11.4.3.160 12.4.3.160 11.4.3.170 12.4.3.170
</span><br>
<p>Using either the names or IP addresses is fine; MTT doesn't really  
<br>
differentiate between them.  However, if you want to specify that you  
<br>
want to start 2 MPI procs on each, then you need to either list the  
<br>
name/IP twice or use the :num_procs notation, like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostlist = node1:2 node2:2 node3:2 node4:2
<br>
<p>Did you look at the ompi-core-template.ini file in the samples  
<br>
directory?  It has a lot of comments in it explaining the fields, etc.
<br>
<p><span class="quotelev1">&gt; Q #3: How do I determine which Interfaces mpi uses?
</span><br>
<p>In the Cisco setup, I use MCA parameters to specifically force which  
<br>
interfaces to use.  For example, in my MPI Details section, I have  
<br>
the following:
<br>
<p>-----
<br>
[MPI Details: Open MPI]
<br>
exec = mpirun -np &amp;test_np() @mca@ --mca btl_tcp_if_include ib0 --mca  
<br>
oob_tcp_if_include ib0 --prefix &amp;test_prefix() &amp;test_executable()  
<br>
&amp;test_argv()
<br>
<p>mca = &amp;enumerate( \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,tcp,self @common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl tcp,self @common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl sm,openib,self @common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl openib,self @common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca mpi_leave_pinned 1 --mca btl openib,self  
<br>
@common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca mpi_leave_pinned_pipeline 1 --mca btl openib,self  
<br>
@common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl_openib_use_eager_rdma 0 --mca btl openib,self  
<br>
@common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca btl_openib_use_srq 1 --mca btl openib,self  
<br>
@common_params@&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;--mca mpi_leave_pinned 1 --mca btl sm,openib,self  
<br>
@common_params@&quot; )
<br>
<p>common_params = --mca btl_openib_max_btls 1
<br>
<pre>
----
So I'm using --mca btl ... to force specifically which OMPI BTLs to use.
In short -- MTT doesn't know/care what interfaces you use.  It just  
lets you set exactly which command lines you use to execute MPI jobs.
&gt; Q #4: How can I determine max num of processes for my setup? In the  
&gt; case of hostlist = sw160 sw170 , mtt will evaluate max_np to 2.
&gt;
&gt; In the case of hostlist = 11.4.3.160 12.4.3.160 11.4.3.170  
&gt; 12.4.3.170 , max_np will result to 4.
Right.  Because in the first case, you listed each host once, so MTT  
assumes that you only want one process per host.  In the 2nd case,  
you list each host twice, so MTT assumes that you want two processes  
per host.
&gt; Q #5: I what terms can I ask mtt to use a local scratch directory  
&gt; on one of the host&#146; s hard drive  as oppose to some shared scratch  
&gt; folder on Network file system.
We don't really have a good solution for this at the moment; the  
issue is that we need to have the target MPI installed and available  
on all the nodes that you want to run.  So we took the easy way out  
and just have a single scratch that spans all nodes (usually a  
network filesystem).  A better solution would be to have a local  
scratch and a global scratch; building the MPI could take place in  
the local scratch and the install could go to the global scratch.   
But we never got around to implementing that... patches would be  
welcome.  ;-)
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/08/0358.php">Ethan Mallove: "[MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<li><strong>Previous message:</strong> <a href="0356.php">Shai Venter: "[MTT users] Some mtt,mpi issues for newbie"</a>
<li><strong>In reply to:</strong> <a href="0356.php">Shai Venter: "[MTT users] Some mtt,mpi issues for newbie"</a>
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
