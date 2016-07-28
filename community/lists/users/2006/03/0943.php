<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 14:18:33 2006" -->
<!-- isoreceived="20060331191833" -->
<!-- sent="Fri, 31 Mar 2006 12:18:26 -0700" -->
<!-- isosent="20060331191826" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General ORTE questions" -->
<!-- id="442D8082.7080604_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="442D5891.7020400_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-03-31 14:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0944.php">Ralph Castain: "[OMPI users] HPCWire article on OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
<li><strong>In reply to:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hi Rolf<br>
<br>
See below!<br>
<br>
Rolf Vandevaart wrote:
<blockquote cite="mid442D5891.7020400@Sun.COM" type="cite">
  <pre wrap="">Hi Ralph:
Thanks for your information.   You said I could ask more so I am!  See 
below.

Ralph Castain wrote On 03/30/06 16:51,:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Hi Rolf

I apologize for the scarce documentation - we are working on it, but 
have a ways to go. I've tried to address your questions below. Please 
feel free to ask more!

Ralph

Rolf Vandevaart wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap="">Greetings:
I am new to the Open MPI world, and I have been trying to get a better
understanding of the ORTE environment.  At this point, I have a few
questions that I was hoping someone could answer.

1. I have heard mention of running the ORTE daemons in persistent mode,
however, I can find no details of how to do this.  Are there arguments
to either orted or mpirun to make this work right?   
      </pre>
    </blockquote>
    <pre wrap="">Normally, we start a persistent daemon with:
orted --seed --persistent --scope=public

This will start the daemon and "daemonize" it so it keeps running 
until told to die. The arguments worth noting are:

(a) --persistent. Tells the daemon to "stay alive" until specifically 
told to "die"

(b) --scope=[public, private, exclusive]. This actually pertains to 
the universe, but you'll need to provide it anyway to ensure proper 
connectivity to anything you try to run. Right now, the daemons 
default to "exclusive", which means nothing can connect to them except 
the application that spawned them - no value to anyone if started with 
the above command! Private would exclude them to contact only from you 
- I haven't tested this enough to guarantee its functionality. I 
usually run them as "public" since security isn't a big concern right 
now - all this means is that anyone who can read the session directory 
tree (which is normally "locked" to only you anyway) would be able to 
connect to the daemon.

(c) --seed. Indicates that this daemon is the first one and therefore 
will host the data storage for the registry and other central services

(d) --universe=userid@hostname:universe_name. Allows you to name your 
universe to whatever you like. We use this to allow you to have 
multiple universes co-existing but separate - I've been explaining the 
reasons for that elsewhere, but will send them to this list if 
desired. You don't have to provide this, nor do you have to provide 
all the fields (e.g., you could just say "--universe=foo" to set the 
universe name).

You can provide the same options to mpirun, if you like - mpirun will 
simply start an orted and pass those parameters along, and the orted 
will merrily stay alive after the specified application completes.

    </pre>
  </blockquote>
  <pre wrap=""><!---->While I understand all that has been written here in theory, I am still 
struggling
to get things to work.

The persistent daemon seems to be ignored when I do an mpirun.  I have 
watched the
system calls and looked at the process tree, and the persistent daemon 
does not seem
to be part of the fun.  So, I will be specific about what I am doing, 
and maybe you can point
out what I am doing wrong.

I have a 3 node cluster.  ct2, ct4, and ct5.  I am launching the job 
from ct2 and trying to
run on ct4 and ct5 which have persistent daemons on them.  I have 
selected the daemon
on ct4 to be the seed.

ct4&gt; orted --seed --persistent --scope public -universe foo
ct5&gt; orted --persistent --scope public -universe foo
ct2&gt; mpirun --mca pls_rsh_agent rsh -np 4 -host ct4,ct5 -universe foo 
my_connectivity -v

While the program is running, I see this on ct4 and ct5.

ps -ef | grep orted
   rolfv  9456     1   0 11:24:26 ?           0:00 orted --bootproxy 1 
--name 0.0.2 --num_procs 3 --vpid_start 0 --nodename ct4
   rolfv  9386     1   0 11:21:30 ?           0:00 orted --seed 
--persistent --scope public --universe foo
 
Thanks for any additional details.


  </pre>
</blockquote>
I see the problem - really just a current limit on our implementation.
At the moment, our launchers don't know how to take advantage of
existing daemons on the remote nodes. Your mpirun is correctly
connecting to the persistent daemon on ct2, but will launch its own
daemons on the other nodes.<br>
<br>
This is a known issue that we need to address - just low on the
priority list right now.<br>
<br>
<blockquote cite="mid442D5891.7020400@Sun.COM" type="cite">
  <pre wrap="">*snip*

  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">3. I have a similar question about orteprobe.  Is this something
we should know about?
  
      </pre>
    </blockquote>
    <pre wrap="">Yes and no - there's nothing secret about it. We use it internally to 
OpenRTE to "probe" a machine and see if we have a daemon/universe 
operating on it. Basically, we launch orteprobe on the remote machine 
- it checks to see if a session directory exists on it, attempts to 
connect to any universes it finds, and then reports back on its 
findings. Based on that report, we either launch an orted on the 
remote machine (to act as our surrogate so we can launch an 
application on that cell) or connect to an existing universe on the 
remote machine (and then tell it to launch the application for us).

    </pre>
    <blockquote type="cite">
      <pre wrap="">4. Is there an easy way to view the data in the General Purpose
Registry?  This may be related to my first question, in that I
could imagine having persistent daemons and then I would like
to see what is stored in the registry.
  
      </pre>
    </blockquote>
    <pre wrap="">Well, yes and no. Ideally, that would be a command from within the 
orteconsole function, but I don't think that has been implemented yet. 
I'd be happy to do so, if that is something you would like (shouldn't 
take long at all). There are a set of "dump" functions in the registry 
API for just that purpose. I usually access them via gdb - I attach 
the debugger to the orted process, then use the dump functions to 
output the values in the registry.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
What exactly do you type in for the dump functions?  I saw these functions,
but could not get them to fire properly.

*snip*

  </pre>
</blockquote>
Tell you what I'll do - I'll implement an interface in orteconsole that
will let you execute the dump commands from there. The problem with
doing it from gdb is that gdb doesn't like the volume of text that can
result - so it keeps cutting off the dump output. Also, gdb -
particularly if you are using shared libraries instead of a static
build configuration - can bark when you try to access the registry
functions directly, depending upon when exactly you do so.<br>
<br>
The orteconsole approach will be *much* cleaner. Only negative is that
you won't be able to look at the contents step-by-step as the
application progresses.<br>
<br>
If you really want to do it from gdb, then you have to type in the name
of the replica's dump functions (e.g., orte_gpr_replica_dump_all) or
the proxy's dump functions (e.g., orte_gpr_proxy_dump_all) directly -
you can't go through the orte_gpr.xxx interface. Obviously, you use the
replica commands on the persistent daemon (you'll probably want to tell
it --no-daemonize so gdb can remain connected to it) and the proxy
commands if you are working on one of the application processes.<br>
<br>
Doing this will allow you to step through the process launch
progression within mpirun (or the persistent daemon, if you are using
it) and see what info is being stored where/when. Like I said, though,
gdb will truncate the output, so you won't see everything <span
 class="moz-smiley-s2"><span> :-( </span></span><br>
<br>
<blockquote cite="mid442D5891.7020400@Sun.COM" type="cite">
  <pre wrap="">Regards,
Rolf

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0944.php">Ralph Castain: "[OMPI users] HPCWire article on OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
<li><strong>In reply to:</strong> <a href="0941.php">Rolf Vandevaart: "Re: [OMPI users] General ORTE questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0942.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] General ORTE questions"</a>
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
