<?
$subject_val = "[OMPI users] OMPI as a batch system";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 14:01:24 2009" -->
<!-- isoreceived="20091208190124" -->
<!-- sent="Tue, 08 Dec 2009 11:01:12 -0800" -->
<!-- isosent="20091208190112" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI as a batch system" -->
<!-- id="1260298872.30000.74.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> [OMPI users] OMPI as a batch system<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 14:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<li><strong>Previous message:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<li><strong>Reply:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the difference between running a set of programs with
<br>
independent invocations of mpirun vs specifying --app?  The programs do
<br>
not need to talk to each other.
<br>
<p>I think that if one job fails it will take the others down if I use
<br>
--app.  Is that correct?  This is the main reason I'm considering
<br>
alternatives.
<br>
<p>On the other hand, if my app file is something like
<br>
-np 1 prog1
<br>
-np 1 prog2
<br>
...
<br>
I believe I will avoid oversubcription.  But, if I do
<br>
mpirun -np 1 prog1
<br>
miprun -np 1 prog2
<br>
....
<br>
do I end up oversubscribing the first node?
<br>
<p><p>It would also be nice if OMPI automatically picked the least loaded node
<br>
(the load might come from other programs), but it does not appear it
<br>
takes this into account.  Is that right?  The FAQ mentions load leveler,
<br>
but we don't seem to have it installed.
<br>
<p>Context: we have a cluster without a batch system or scheduler, and want
<br>
to run multiple independent jobs at once.  The cluster is running Debian
<br>
Lenny -&gt; OMPI 1.2.7rc2.
<br>
<p>Thanks for any help you can offer.
<br>
Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<li><strong>Previous message:</strong> <a href="11455.php">Jonathan Ferland: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
<li><strong>Reply:</strong> <a href="11457.php">Ralph Castain: "Re: [OMPI users] OMPI as a batch system"</a>
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
