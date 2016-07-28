<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb  4 15:40:59 2007" -->
<!-- isoreceived="20070204204059" -->
<!-- sent="Sun, 04 Feb 2007 12:41:27 -0800" -->
<!-- isosent="20070204204127" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Choices on how to implement a python module in	MPI." -->
<!-- id="1170621687.3380.12.camel_at_cedar.reachone.com" -->
<!-- inreplyto="6ea7b5430702032148m2f2a2360w5308f3076e8388dc_at_mail.gmail.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-04 15:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2602.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="2600.php">Gurhan Ozen: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="2599.php">Bo Peng: "[OMPI users] Choices on how to implement a python module in MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2607.php">Bo Peng: "Re: [OMPI users] Choices on how to implement a python module in MPI."</a>
<li><strong>Reply:</strong> <a href="2607.php">Bo Peng: "Re: [OMPI users] Choices on how to implement a python module in MPI."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you looked at the self-scheduling algorithm described in &quot;USING
<br>
MPI&quot; by Gropp, Lusk, and Skjellum.  I have seen efficient
<br>
implementations of it for large satellite data assimilation problems in
<br>
numerical weather prediction, where load distribution across processors
<br>
cannot be predicted in advance.  It is somewhat analogous to similar
<br>
algorithms in OPENMP, where the number of 'tasks' is significantly
<br>
larger than the number of processors.
<br>
<p>T. Rosmond
<br>
<p><p><p>On Sat, 2007-02-03 at 23:48 -0600, Bo Peng wrote:
<br>
<span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a python module written in C++ to help users manipulate a huge
</span><br>
<span class="quotelev1">&gt; amount of genetics data. Using this module, users can write a script
</span><br>
<span class="quotelev1">&gt; to create/load/manipulate data easily. For efficiency and memory
</span><br>
<span class="quotelev1">&gt; management reasons, I would like to write a MPI version of the module
</span><br>
<span class="quotelev1">&gt; so that I can spread the data to other machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some experience with MPI-1 so I started with the conventional
</span><br>
<span class="quotelev1">&gt; design. That is to say, a fixed number of nodes are started and
</span><br>
<span class="quotelev1">&gt; execute the same script. The data is split across nodes but  all nodes
</span><br>
<span class="quotelev1">&gt; can read/write data as if the data is local. That is to say, write
</span><br>
<span class="quotelev1">&gt; operation is done on one of the nodes that has that piece of data, and
</span><br>
<span class="quotelev1">&gt; results of read operation are broadcasted so that they appear to be
</span><br>
<span class="quotelev1">&gt; local to all the nodes. The broadcast is needed to ensure identical
</span><br>
<span class="quotelev1">&gt; execution logic of the script on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although a test module is up and running, making sure all scripts
</span><br>
<span class="quotelev1">&gt; *see* the same data and execute the same script has proven to be very
</span><br>
<span class="quotelev1">&gt; inefficient and difficult. For example, if a script perform some
</span><br>
<span class="quotelev1">&gt; action based on a local random number, different nodes would probably
</span><br>
<span class="quotelev1">&gt; be out of sync.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am thinking of an implementation in which only the head node
</span><br>
<span class="quotelev1">&gt; executes the script. It creates the slave nodes and asks them to act
</span><br>
<span class="quotelev1">&gt; on their local data if needed. RMA can be used so that the head node
</span><br>
<span class="quotelev1">&gt; can access data from slave nodes directly. This looks like an
</span><br>
<span class="quotelev1">&gt; efficient solution but I am not sure how to instruct the slave nodes
</span><br>
<span class="quotelev1">&gt; on what they should do. I mean, it is difficult to tell a slave node
</span><br>
<span class="quotelev1">&gt; to execute a certain function with such and such parameters. Treating
</span><br>
<span class="quotelev1">&gt; slave nodes as memory storage and use RMA for all the operations does
</span><br>
<span class="quotelev1">&gt; not sound like a good idea either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been evaluating different approaches and have not decided which
</span><br>
<span class="quotelev1">&gt;  way to do. I would highly appreciate any advise on how to design and
</span><br>
<span class="quotelev1">&gt; implement such a module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks in advance.
</span><br>
<span class="quotelev1">&gt; Bo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2602.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="2600.php">Gurhan Ozen: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="2599.php">Bo Peng: "[OMPI users] Choices on how to implement a python module in MPI."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2607.php">Bo Peng: "Re: [OMPI users] Choices on how to implement a python module in MPI."</a>
<li><strong>Reply:</strong> <a href="2607.php">Bo Peng: "Re: [OMPI users] Choices on how to implement a python module in MPI."</a>
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
