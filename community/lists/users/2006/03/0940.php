<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 16:51:25 2006" -->
<!-- isoreceived="20060330215125" -->
<!-- sent="Thu, 30 Mar 2006 14:51:20 -0700" -->
<!-- isosent="20060330215120" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General ORTE questions" -->
<!-- id="442C52D8.1070504_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="442C42BF.2070108_at_Sun.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 16:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<li><strong>In reply to:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Reply:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf
<br>
<p>I apologize for the scarce documentation - we are working on it, but 
<br>
have a ways to go. I've tried to address your questions below. Please 
<br>
feel free to ask more!
<br>
<p>Ralph
<br>
<p>Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; Greetings:
</span><br>
<span class="quotelev1">&gt; I am new to the Open MPI world, and I have been trying to get a better
</span><br>
<span class="quotelev1">&gt; understanding of the ORTE environment.  At this point, I have a few
</span><br>
<span class="quotelev1">&gt; questions that I was hoping someone could answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I have heard mention of running the ORTE daemons in persistent mode,
</span><br>
<span class="quotelev1">&gt; however, I can find no details of how to do this.  Are there arguments
</span><br>
<span class="quotelev1">&gt; to either orted or mpirun to make this work right? 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Normally, we start a persistent daemon with:
<br>
orted --seed --persistent --scope=public
<br>
<p>This will start the daemon and &quot;daemonize&quot; it so it keeps running until 
<br>
told to die. The arguments worth noting are:
<br>
<p>(a) --persistent. Tells the daemon to &quot;stay alive&quot; until specifically 
<br>
told to &quot;die&quot;
<br>
<p>(b) --scope=[public, private, exclusive]. This actually pertains to the 
<br>
universe, but you'll need to provide it anyway to ensure proper 
<br>
connectivity to anything you try to run. Right now, the daemons default 
<br>
to &quot;exclusive&quot;, which means nothing can connect to them except the 
<br>
application that spawned them - no value to anyone if started with the 
<br>
above command! Private would exclude them to contact only from you - I 
<br>
haven't tested this enough to guarantee its functionality. I usually run 
<br>
them as &quot;public&quot; since security isn't a big concern right now - all this 
<br>
means is that anyone who can read the session directory tree (which is 
<br>
normally &quot;locked&quot; to only you anyway) would be able to connect to the 
<br>
daemon.
<br>
<p>(c) --seed. Indicates that this daemon is the first one and therefore 
<br>
will host the data storage for the registry and other central services
<br>
<p>(d) --universe=userid_at_hostname:universe_name. Allows you to name your 
<br>
universe to whatever you like. We use this to allow you to have multiple 
<br>
universes co-existing but separate - I've been explaining the reasons 
<br>
for that elsewhere, but will send them to this list if desired. You 
<br>
don't have to provide this, nor do you have to provide all the fields 
<br>
(e.g., you could just say &quot;--universe=foo&quot; to set the universe name).
<br>
<p>You can provide the same options to mpirun, if you like - mpirun will 
<br>
simply start an orted and pass those parameters along, and the orted 
<br>
will merrily stay alive after the specified application completes.
<br>
<p><span class="quotelev1">&gt; 2. I stumbled into a binary called orteconsole.  Is this a useful
</span><br>
<span class="quotelev1">&gt; utility?  I have played with it, but have found no documentation
</span><br>
<span class="quotelev1">&gt; on it so I am wondering what the state of it is.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I happen to like this utility myself - it allows you to connect to a 
<br>
running universe (persistent or not - you can use it, for example, to 
<br>
connect to the universe of a running application and see what is going 
<br>
on) and explore the OpenRTE internal data structures, issue commands, 
<br>
etc. Not everything is implemented yet - our initial need was just a way 
<br>
of politely telling persistent daemons to &quot;die&quot; and cleanup after 
<br>
themselves. I've forgotten which commands have been implemented, but can 
<br>
look at it and write a &quot;man&quot; page for it if you like.
<br>
<span class="quotelev1">&gt; 3. I have a similar question about orteprobe.  Is this something
</span><br>
<span class="quotelev1">&gt; we should know about?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes and no - there's nothing secret about it. We use it internally to 
<br>
OpenRTE to &quot;probe&quot; a machine and see if we have a daemon/universe 
<br>
operating on it. Basically, we launch orteprobe on the remote machine - 
<br>
it checks to see if a session directory exists on it, attempts to 
<br>
connect to any universes it finds, and then reports back on its 
<br>
findings. Based on that report, we either launch an orted on the remote 
<br>
machine (to act as our surrogate so we can launch an application on that 
<br>
cell) or connect to an existing universe on the remote machine (and then 
<br>
tell it to launch the application for us).
<br>
<span class="quotelev1">&gt; 4. Is there an easy way to view the data in the General Purpose
</span><br>
<span class="quotelev1">&gt; Registry?  This may be related to my first question, in that I
</span><br>
<span class="quotelev1">&gt; could imagine having persistent daemons and then I would like
</span><br>
<span class="quotelev1">&gt; to see what is stored in the registry.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Well, yes and no. Ideally, that would be a command from within the 
<br>
orteconsole function, but I don't think that has been implemented yet. 
<br>
I'd be happy to do so, if that is something you would like (shouldn't 
<br>
take long at all). There are a set of &quot;dump&quot; functions in the registry 
<br>
API for just that purpose. I usually access them via gdb - I attach the 
<br>
debugger to the orted process, then use the dump functions to output the 
<br>
values in the registry.
<br>
<p>Not as easy as the orteconsole interface would be, I admit.
<br>
<span class="quotelev1">&gt; 5. Is there a way to monitor what processes are running?  For
</span><br>
<span class="quotelev1">&gt; example, if I am running 3 MPI programs can I run some command
</span><br>
<span class="quotelev1">&gt; that would tell me this? 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Josh has been working on an &quot;orte_ps&quot; command, but I don't think he has 
<br>
it done yet.
<br>
<span class="quotelev1">&gt; 6. From what I can tell, there is no way to specify the slots argument
</span><br>
<span class="quotelev1">&gt; with the -host argument.  For example, I cannot do this:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host node1:slots=4,node2:slots=4 a.out
</span><br>
<span class="quotelev1">&gt; Just wanted to confirm that.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Now that's an interesting question! Since Jeff was the one who wrote all 
<br>
that &quot;hostfile&quot; stuff, I'll have to defer to him - quick glance at the 
<br>
code would seem to support your understanding, but I might have missed 
<br>
something.
<br>
<p><span class="quotelev1">&gt; Thanks for any information,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<li><strong>In reply to:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Reply:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
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
