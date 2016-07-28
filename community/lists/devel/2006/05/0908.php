<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 15:41:12 2006" -->
<!-- isoreceived="20060531194112" -->
<!-- sent="Wed, 31 May 2006 13:41:08 -0600" -->
<!-- isosent="20060531194108" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447DF154.8050505_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="447DECE4.7050602_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-05-31 15:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<br>
<br>
Pak Lui wrote:
<blockquote cite="mid447DECE4.7050602@Sun.COM" type="cite">Ralph
Castain wrote:
  <br>
  <blockquote type="cite">Hi Pak
    <br>
    <br>
I'm afraid I don't fully understand your question, so forgive me if I
don't seem to address the problem adequately. As I understand it, you
are asking about the scenario where someone wants to execute multiple
calls of mpirun, with the applications executing on the same set of
nodes. Your question is: why does OpenRTE spawn a new daemon (orted) on
the node each time we execute mpirun - why doesn't it just use the
existing one to launch the new application process(es)?
    <br>
    <br>
Assuming I have the question right, the short answers are "may not be
permitted" and "not yet implemented".&nbsp; :-)
    <br>
  </blockquote>
  <br>
yes, Ralph, that is precisely the question. good thing that you've
figured
  <br>
that out :)
  <br>
</blockquote>
<span class="moz-smiley-s1"><span> :-) </span></span><br>
<blockquote cite="mid447DECE4.7050602@Sun.COM" type="cite"><br>
  <blockquote type="cite"><br>
First, the fact that an orted already exists on a node is not
sufficient to allow us to use it again for another application. The
orted must be persistent or else we do not allow a new application to
re-use it. This is required because the existing orted will go away
when its original application is done executing - if we use it as our
parent to launch another child, then the new application process will
"die" when the original one completes. Obviously, that isn't desirable.
    <br>
  </blockquote>
  <br>
okay. I used to think that if orted is able to stay and fork other
processes, but I didn't realize orted will go away once the parent
process finishes.
  <br>
</blockquote>
I don't know how to get around this problem for non-persistent orteds.
Perhaps we can devise some mechanism. The problem is that mpirun needs
to exit when it finishes the associated application. Without a
persistent orted, mpirun serves as the parent process for everything
that is executing, including the daemons. So, for mpirun to exit, that
means all of its children must also terminate.<br>
<br>
If we try to link one mpirun to another, then we have the problem that
we must force the first mpirun to "stay alive" until the second one
completes. This could be done, but seems problematic and contrary to
normal user expectations.<br>
<blockquote cite="mid447DECE4.7050602@Sun.COM" type="cite"><br>
  <blockquote type="cite"><br>
Second, even though you can launch persistent orteds today, none of the
current components in the resource management subsystems actually know
how to use them yet. This is something we planned to implement in the
future, but there simply hasn't been time to do so yet.
    <br>
    <br>
So the bottom line is that there really is no way around the need to
launch a new orted on each node every time the user issues an mpirun
command.
    <br>
    <br>
I hope that answers your question. If not, please don't hesitate to let
me know.
    <br>
  </blockquote>
  <br>
Thanks for pointing out these issues. I was hoping something I didn't
know may solve my problem. I guess there may not be a good workaround
for this limitation due to SGE slots. We could try to track and set
some top limit for the number of times that qrsh can exec, before the
spawn program uses up all the available SGE slots and errors out.
  <br>
</blockquote>
Hmmm...it sounds to me like the problem here is that the second OpenRTE
universe (the one created by the second mpirun) has no knowledge of
what the other universe may already have done. So, the RAS in the
second universe reads the qrsh environmental variable to see how many
slots are available - and doesn't know that the other mpirun already
used some. I assume, therefore, that the other mpirun is basically
being run in the background - we don't complete it first before letting
the next one begin executing?<br>
<br>
The only solution I can think of to that problem would be to kickoff a
persistent daemon to act as the "seed" for the entire time we are in
the shell (either interactive or batch). This will ensure that the
knowledge of resource usage carries over from one execution to the
next. We actually do this with the Eclipse folks, so I know the
mechanism works. We also actually kickoff a daemon that does the launch
in many of the different systems - only difference here is that we
normally don't make it persistent (it is just a child of mpirun).
Problem here is to figure out how to handle the persistent part of this
transparently to the user.<br>
<br>
What we could do is bury this in an appropriate component somewhere (I
have an idea where it might go, but need to think a little more to be
sure). If this is the first mpirun within a given shell, then we
kickoff a persistent orted to act as the seed and connect ourselves to
it (we have functions in the system to do this already). If we are not
the first mpirun, then we just connect to the existing "seed". The
"seed" does all the actual launching of applications.<br>
<br>
This lets each mpirun exit as usual - only the seed keeps alive. We
would need to establish a way to kill the seed when all the mpiruns are
complete - sort of a "last-one-out kills the orted" procedure. That
would take a little care as we don't want a race condition to creep
into the system - if another mpirun is coming, but the prior one exits
quickly, we don't want the seed to die just yet.<br>
<br>
Hope all that helps. We may be able to resolve this in a fairly
straightforward manner - I think a lot of the necessary tools are
already in the system, we just need to "hook them up" appropriately for
SGE.<br>
<br>
<blockquote cite="mid447DECE4.7050602@Sun.COM" type="cite"><br>
  <br>
  <blockquote type="cite">Ralph
    <br>
    <br>
    <br>
    <br>
Pak Lui wrote:
    <br>
    <br>
    <blockquote type="cite">Hi,
      <br>
      <br>
When I run a spawn program over rsh/ssh, I notice that each time the
      <br>
child program gets spawned, it will need to establish a new rsh/ssh
      <br>
connection to the remote node to launch orted on that node, even the
      <br>
parent executable and the orted are running on that node.
      <br>
      <br>
So I wonder if there is any way that we can use the parent orted to
      <br>
launch the child program if they happen to be on the same node?
      <br>
      <br>
I try to compare to the spawn program to the scenario where I run
multiple executables in one mpirun command. For this run, I only
establish one connection to the remote node only, and both executables
shared the same remote connection.
      <br>
      <br>
% ./mpirun -np 2 -host burl-ct-v440-5 -prefix `pwd`/.. sleep 12 : -np 2
      <br>
sleep 10
      <br>
Password:
      <br>
      <br>
15015 /workspace/paklui/ompi/trunk/builds/sparc32-g/bin/../bin/orted
      <br>
--bootprox
      <br>
&nbsp;&nbsp; 15017 sleep 12
      <br>
&nbsp;&nbsp; 15019 sleep 12
      <br>
&nbsp;&nbsp; 15021 sleep 10
      <br>
&nbsp;&nbsp; 15023 sleep 10
      <br>
      <br>
The reason that I want to find out if it is possible for orted to
launch child executable(s) without having to establish a new
connection, is because the number of times that I can run 'qrsh' in SGE
(or N1GE) is actually depended on the number of slots that the user
initially allocated. That the slot number corresponds to the number of
CPUs on a node. Each slot allows one 'qrsh' connection.
      <br>
      <br>
The issue is when I try to run a spawn job on a single node, or a
cluster of many 1-cpu nodes under SGE. The number of times that the
program can spawn is limited by 'qrsh', that it forbids the child
program to connect to the same node where the parent executable's orted
might be already running there.
      <br>
      <br>
I am curious to see if I can find some solution to the problem here. I
am also looking to see if there are some tricks in SGE to get around
this issue, but workaround I can see aren't pretty though. So I welcome
your questions, comments or suggestions on this.
      <br>
      <br>
&nbsp; </blockquote>
  </blockquote>
  <br>
  <br>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0907.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Maybe in reply to:</strong> <a href="0905.php">Pak Lui: "[OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
