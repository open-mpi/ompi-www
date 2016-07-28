<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 15:43:02 2006" -->
<!-- isoreceived="20060330204302" -->
<!-- sent="Thu, 30 Mar 2006 15:42:39 -0500" -->
<!-- isosent="20060330204239" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI users] General ORTE questions" -->
<!-- id="442C42BF.2070108_at_Sun.COM" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 15:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Reply:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Maybe reply:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings:
<br>
I am new to the Open MPI world, and I have been trying to get a better
<br>
understanding of the ORTE environment.  At this point, I have a few
<br>
questions that I was hoping someone could answer.
<br>
<p>1. I have heard mention of running the ORTE daemons in persistent mode,
<br>
however, I can find no details of how to do this.  Are there arguments
<br>
to either orted or mpirun to make this work right? 
<br>
<p>2. I stumbled into a binary called orteconsole.  Is this a useful
<br>
utility?  I have played with it, but have found no documentation
<br>
on it so I am wondering what the state of it is.
<br>
<p>3. I have a similar question about orteprobe.  Is this something
<br>
we should know about?
<br>
<p>4. Is there an easy way to view the data in the General Purpose
<br>
Registry?  This may be related to my first question, in that I
<br>
could imagine having persistent daemons and then I would like
<br>
to see what is stored in the registry.
<br>
<p>5. Is there a way to monitor what processes are running?  For
<br>
example, if I am running 3 MPI programs can I run some command
<br>
that would tell me this? 
<br>
<p>6. From what I can tell, there is no way to specify the slots argument
<br>
with the -host argument.  For example, I cannot do this:
<br>
mpirun -np 8 -host node1:slots=4,node2:slots=4 a.out
<br>
Just wanted to confirm that.
<br>
<p>Thanks for any information,
<br>
Rolf
<br>
<p><pre>
-- 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Reply:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Maybe reply:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
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
