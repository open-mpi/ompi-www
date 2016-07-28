<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb  4 00:48:51 2007" -->
<!-- isoreceived="20070204054851" -->
<!-- sent="Sat, 3 Feb 2007 23:48:46 -0600" -->
<!-- isosent="20070204054846" -->
<!-- name="Bo Peng" -->
<!-- email="ben.bob_at_[hidden]" -->
<!-- subject="[OMPI users] Choices on how to implement a python module in MPI." -->
<!-- id="6ea7b5430702032148m2f2a2360w5308f3076e8388dc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Bo Peng (<em>ben.bob_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-04 00:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2600.php">Gurhan Ozen: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2601.php">Tom Rosmond: "Re: [OMPI users] Choices on how to implement a python module in	MPI."</a>
<li><strong>Reply:</strong> <a href="2601.php">Tom Rosmond: "Re: [OMPI users] Choices on how to implement a python module in	MPI."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list,
<br>
<p>I have a python module written in C++ to help users manipulate a huge
<br>
amount of genetics data. Using this module, users can write a script
<br>
to create/load/manipulate data easily. For efficiency and memory
<br>
management reasons, I would like to write a MPI version of the module
<br>
so that I can spread the data to other machines.
<br>
<p>I have some experience with MPI-1 so I started with the conventional
<br>
design. That is to say, a fixed number of nodes are started and
<br>
execute the same script. The data is split across nodes but  all nodes
<br>
can read/write data as if the data is local. That is to say, write
<br>
operation is done on one of the nodes that has that piece of data, and
<br>
results of read operation are broadcasted so that they appear to be
<br>
local to all the nodes. The broadcast is needed to ensure identical
<br>
execution logic of the script on all nodes.
<br>
<p>Although a test module is up and running, making sure all scripts
<br>
*see* the same data and execute the same script has proven to be very
<br>
inefficient and difficult. For example, if a script perform some
<br>
action based on a local random number, different nodes would probably
<br>
be out of sync.
<br>
<p>I am thinking of an implementation in which only the head node
<br>
executes the script. It creates the slave nodes and asks them to act
<br>
on their local data if needed. RMA can be used so that the head node
<br>
can access data from slave nodes directly. This looks like an
<br>
efficient solution but I am not sure how to instruct the slave nodes
<br>
on what they should do. I mean, it is difficult to tell a slave node
<br>
to execute a certain function with such and such parameters. Treating
<br>
slave nodes as memory storage and use RMA for all the operations does
<br>
not sound like a good idea either.
<br>
<p>I have been evaluating different approaches and have not decided which
<br>
&nbsp;way to do. I would highly appreciate any advise on how to design and
<br>
implement such a module.
<br>
<p>Many thanks in advance.
<br>
Bo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2600.php">Gurhan Ozen: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="2598.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intelcompiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2601.php">Tom Rosmond: "Re: [OMPI users] Choices on how to implement a python module in	MPI."</a>
<li><strong>Reply:</strong> <a href="2601.php">Tom Rosmond: "Re: [OMPI users] Choices on how to implement a python module in	MPI."</a>
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
