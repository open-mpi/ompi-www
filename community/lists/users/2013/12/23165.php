<?
$subject_val = "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  9 04:39:02 2013" -->
<!-- isoreceived="20131209093902" -->
<!-- sent="Mon, 9 Dec 2013 10:38:29 +0100" -->
<!-- isosent="20131209093829" -->
<!-- name="Ola.Widlund_at_[hidden]" -->
<!-- email="Ola.Widlund_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
<!-- id="OF581B6859.38E95F14-ONC1257C3C.0034BC3A-C1257C3C.00350170_at_se.abb.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?<br>
<strong>From:</strong> <a href="mailto:Ola.Widlund_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi%2Btorque:%20How%20run%20job%20in%20a%20subset%20of%20the%20allocation?"><em>Ola.Widlund_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-09 04:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23166.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to Ralph, Gus and Georg for your input!
<br>
<p>I was diverted to other things for a week, but now back on track...
<br>
<p>You deserve to have the question marks straightened out first: The two 
<br>
application are (1) a commercial solver and (2) an in-house code handling 
<br>
some special physics. The two codes will run sequentially, taking turns 
<br>
one time step at a time. The commercial solver runs one time step, outputs 
<br>
some data to file, then waits for the in-house code to do some work, then 
<br>
goes to next time step. The in-house code is actually restarted each time 
<br>
it has work to do. (This is what I mean with &quot;loosely coupled&quot;.)
<br>
<p>As the two codes never work at the same time, I would like them to use the 
<br>
same hardware. The commercial solver may be reluctant to release its cores 
<br>
to other processes (&quot;agressive&quot;), but I hope it will at the end of time 
<br>
steps... The commercial code will just be started as usual, using the full 
<br>
allocation of the MOAB job. The in-house code is the one using openmpi, 
<br>
and I want it to use all of the cores in the first node of the allocation, 
<br>
and only those.
<br>
<p>As Ralph suggests, it seems very convenient to use the -host option with 
<br>
relative node syntax. I also found some other references on how mpirun 
<br>
handles host info from the resources managers. Starting the two codes as 
<br>
background jobs, like Georg does, sounds good. I will simply give it a 
<br>
spin and see how it works...
<br>
<p>Thanks again for your time,
<br>
<p>Ola
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23166.php">ºúÑî: "[OMPI users] &#187;&#216;&#184;&#180;&#163;&#186; &#187;&#216;&#184;&#180;&#163;&#186; can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23164.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under	Torque manager"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23088.php">Ola.Widlund_at_[hidden]: "[OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
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
