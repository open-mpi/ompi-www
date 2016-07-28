<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 11:28:06 2006" -->
<!-- isoreceived="20060331162806" -->
<!-- sent="Fri, 31 Mar 2006 11:28:01 -0500" -->
<!-- isosent="20060331162801" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General ORTE questions" -->
<!-- id="442D5891.7020400_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="442C52D8.1070504_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-03-31 11:28:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>In reply to:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0943.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Reply:</strong> <a href="0943.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph:
<br>
Thanks for your information.   You said I could ask more so I am!  See 
<br>
below.
<br>
<p>Ralph Castain wrote On 03/30/06 16:51,:
<br>
<p><span class="quotelev1">&gt; Hi Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I apologize for the scarce documentation - we are working on it, but 
</span><br>
<span class="quotelev1">&gt; have a ways to go. I've tried to address your questions below. Please 
</span><br>
<span class="quotelev1">&gt; feel free to ask more!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings:
</span><br>
<span class="quotelev2">&gt;&gt; I am new to the Open MPI world, and I have been trying to get a better
</span><br>
<span class="quotelev2">&gt;&gt; understanding of the ORTE environment.  At this point, I have a few
</span><br>
<span class="quotelev2">&gt;&gt; questions that I was hoping someone could answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. I have heard mention of running the ORTE daemons in persistent mode,
</span><br>
<span class="quotelev2">&gt;&gt; however, I can find no details of how to do this.  Are there arguments
</span><br>
<span class="quotelev2">&gt;&gt; to either orted or mpirun to make this work right?   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Normally, we start a persistent daemon with:
</span><br>
<span class="quotelev1">&gt; orted --seed --persistent --scope=public
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will start the daemon and &quot;daemonize&quot; it so it keeps running 
</span><br>
<span class="quotelev1">&gt; until told to die. The arguments worth noting are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) --persistent. Tells the daemon to &quot;stay alive&quot; until specifically 
</span><br>
<span class="quotelev1">&gt; told to &quot;die&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) --scope=[public, private, exclusive]. This actually pertains to 
</span><br>
<span class="quotelev1">&gt; the universe, but you'll need to provide it anyway to ensure proper 
</span><br>
<span class="quotelev1">&gt; connectivity to anything you try to run. Right now, the daemons 
</span><br>
<span class="quotelev1">&gt; default to &quot;exclusive&quot;, which means nothing can connect to them except 
</span><br>
<span class="quotelev1">&gt; the application that spawned them - no value to anyone if started with 
</span><br>
<span class="quotelev1">&gt; the above command! Private would exclude them to contact only from you 
</span><br>
<span class="quotelev1">&gt; - I haven't tested this enough to guarantee its functionality. I 
</span><br>
<span class="quotelev1">&gt; usually run them as &quot;public&quot; since security isn't a big concern right 
</span><br>
<span class="quotelev1">&gt; now - all this means is that anyone who can read the session directory 
</span><br>
<span class="quotelev1">&gt; tree (which is normally &quot;locked&quot; to only you anyway) would be able to 
</span><br>
<span class="quotelev1">&gt; connect to the daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) --seed. Indicates that this daemon is the first one and therefore 
</span><br>
<span class="quotelev1">&gt; will host the data storage for the registry and other central services
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (d) --universe=userid_at_hostname:universe_name. Allows you to name your 
</span><br>
<span class="quotelev1">&gt; universe to whatever you like. We use this to allow you to have 
</span><br>
<span class="quotelev1">&gt; multiple universes co-existing but separate - I've been explaining the 
</span><br>
<span class="quotelev1">&gt; reasons for that elsewhere, but will send them to this list if 
</span><br>
<span class="quotelev1">&gt; desired. You don't have to provide this, nor do you have to provide 
</span><br>
<span class="quotelev1">&gt; all the fields (e.g., you could just say &quot;--universe=foo&quot; to set the 
</span><br>
<span class="quotelev1">&gt; universe name).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can provide the same options to mpirun, if you like - mpirun will 
</span><br>
<span class="quotelev1">&gt; simply start an orted and pass those parameters along, and the orted 
</span><br>
<span class="quotelev1">&gt; will merrily stay alive after the specified application completes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
While I understand all that has been written here in theory, I am still 
<br>
struggling
<br>
to get things to work.
<br>
<p>The persistent daemon seems to be ignored when I do an mpirun.  I have 
<br>
watched the
<br>
system calls and looked at the process tree, and the persistent daemon 
<br>
does not seem
<br>
to be part of the fun.  So, I will be specific about what I am doing, 
<br>
and maybe you can point
<br>
out what I am doing wrong.
<br>
<p>I have a 3 node cluster.  ct2, ct4, and ct5.  I am launching the job 
<br>
from ct2 and trying to
<br>
run on ct4 and ct5 which have persistent daemons on them.  I have 
<br>
selected the daemon
<br>
on ct4 to be the seed.
<br>
<p>ct4&gt; orted --seed --persistent --scope public -universe foo
<br>
ct5&gt; orted --persistent --scope public -universe foo
<br>
ct2&gt; mpirun --mca pls_rsh_agent rsh -np 4 -host ct4,ct5 -universe foo 
<br>
my_connectivity -v
<br>
<p>While the program is running, I see this on ct4 and ct5.
<br>
<p>ps -ef | grep orted
<br>
&nbsp;&nbsp;&nbsp;rolfv  9456     1   0 11:24:26 ?           0:00 orted --bootproxy 1 
<br>
--name 0.0.2 --num_procs 3 --vpid_start 0 --nodename ct4
<br>
&nbsp;&nbsp;&nbsp;rolfv  9386     1   0 11:21:30 ?           0:00 orted --seed 
<br>
--persistent --scope public --universe foo
<br>
&nbsp;
<br>
Thanks for any additional details.
<br>
<p><p>*snip*
<br>
<p><span class="quotelev2">&gt;&gt; 3. I have a similar question about orteprobe.  Is this something
</span><br>
<span class="quotelev2">&gt;&gt; we should know about?
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes and no - there's nothing secret about it. We use it internally to 
</span><br>
<span class="quotelev1">&gt; OpenRTE to &quot;probe&quot; a machine and see if we have a daemon/universe 
</span><br>
<span class="quotelev1">&gt; operating on it. Basically, we launch orteprobe on the remote machine 
</span><br>
<span class="quotelev1">&gt; - it checks to see if a session directory exists on it, attempts to 
</span><br>
<span class="quotelev1">&gt; connect to any universes it finds, and then reports back on its 
</span><br>
<span class="quotelev1">&gt; findings. Based on that report, we either launch an orted on the 
</span><br>
<span class="quotelev1">&gt; remote machine (to act as our surrogate so we can launch an 
</span><br>
<span class="quotelev1">&gt; application on that cell) or connect to an existing universe on the 
</span><br>
<span class="quotelev1">&gt; remote machine (and then tell it to launch the application for us).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Is there an easy way to view the data in the General Purpose
</span><br>
<span class="quotelev2">&gt;&gt; Registry?  This may be related to my first question, in that I
</span><br>
<span class="quotelev2">&gt;&gt; could imagine having persistent daemons and then I would like
</span><br>
<span class="quotelev2">&gt;&gt; to see what is stored in the registry.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, yes and no. Ideally, that would be a command from within the 
</span><br>
<span class="quotelev1">&gt; orteconsole function, but I don't think that has been implemented yet. 
</span><br>
<span class="quotelev1">&gt; I'd be happy to do so, if that is something you would like (shouldn't 
</span><br>
<span class="quotelev1">&gt; take long at all). There are a set of &quot;dump&quot; functions in the registry 
</span><br>
<span class="quotelev1">&gt; API for just that purpose. I usually access them via gdb - I attach 
</span><br>
<span class="quotelev1">&gt; the debugger to the orted process, then use the dump functions to 
</span><br>
<span class="quotelev1">&gt; output the values in the registry.
</span><br>
<p>What exactly do you type in for the dump functions?  I saw these functions,
<br>
but could not get them to fire properly.
<br>
<p>*snip*
<br>
<p>Regards,
<br>
Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>In reply to:</strong> <a href="0940.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0943.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
<li><strong>Reply:</strong> <a href="0943.php">Ralph Castain: "Re: [OMPI users] General ORTE questions"</a>
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
