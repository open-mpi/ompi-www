<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 20:07:13 2006" -->
<!-- isoreceived="20060601000713" -->
<!-- sent="Wed, 31 May 2006 18:07:08 -0600" -->
<!-- isosent="20060601000708" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted" -->
<!-- id="447E2FAC.1000106_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="447E280B.5000205_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-05-31 20:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hmmm...no, it appears that we are not talking about the same problem at
all. An internal comm_spawn is not at all equivalent to an external
execution of another mpirun command - even though the same functions
may get called, there is a very large fundamental difference between
the two scenarios: one executes inside of the same universe, and the
other does not.<br>
<br>
I didn't understand that this was a comm_spawn problem - my bad.<br>
<br>
You can disregard the entire prior discussion - this has nothing to do
with persistent vs non-persistent orteds. Everything is executing just
fine within one common universe.<br>
<br>
The problem is a known issue with comm_spawn. The current
implementation was a pre-production prototype - we simply have not had
the time to go back and clean it all up. Hence, it works fine in *most*
cases, but has definite problems in the more unusual cases.
Unfortunately, SGE falls into that latter category because it imposes a
strict limit on the available resources.<br>
<br>
I actually noted the problem you are encountering in my OpenRTE 2.0
documentation, though that doesn't help here. The problem is that the
majority of our systems do *not* count the daemons against any resource
reservation. Hence, in the current implementation of the mapper and
other resource manager components, we never count the daemons against
the number of process slots available to us.<br>
<br>
This is further aggravated by two other facts:<br>
<br>
(a) currently, we always start our mapping from the first node in the
reservation list, even when we comm_spawn multiple times. Hence, we
always drop the first process on the first node - instead of starting
where we last left off.<br>
<br>
(b) our rsh/ssh launcher doesn't know how to re-use daemons on the
compute nodes, so it always launches a new one every time it launches
processes on the node. Hence, the number of "uncounted" processes on a
node rises with each launch. A comm_spawn counts as a single launch in
your environment, as does mpirun - thus, if your application does a
comm_spawn, you wind up with two (uncounted) daemons + some number of
application processes trying to run on each node.<br>
<br>
Fixing this would be a significant effort that I believe is best put
off until version 2.0. It requires a fairly significant overhaul of the
rsh/ssh launcher, as well as several of the default ras and rmap base
component support functions. Since these are getting overhauled anyway
in the next major version, we had decided a while ago to hold off
fixing the base problem of comm_spawn until that time.<br>
<br>
Of course, that decision may need to be revisited - depends just how
big an issue this is, relative release dates, other commitments, etc.
etc.<br>
<br>
Ralph<br>
<br>
<br>
Pak Lui wrote:
<blockquote cite="mid447E280B.5000205@Sun.COM" type="cite">Ralph
Castain wrote:
  <br>
  <blockquote type="cite">
    <blockquote type="cite">
      <blockquote type="cite">First, the fact that an orted already
exists on a node is not sufficient to allow us to use it again for
another application. The orted must be persistent or else we do not
allow a new application to re-use it. This is required because the
existing orted will go away when its original application is done
executing - if we use it as our parent to launch another child, then
the new application process will "die" when the original one completes.
Obviously, that isn't desirable.
        <br>
      </blockquote>
      <br>
      <br>
okay. I used to think that if orted is able to stay and fork other
processes, but I didn't realize orted will go away once the parent
process finishes.
      <br>
    </blockquote>
    <br>
I don't know how to get around this problem for non-persistent orteds.
Perhaps we can devise some mechanism. The problem is that mpirun needs
to exit when it finishes the associated application. Without a
persistent orted, mpirun serves as the parent process for everything
that is executing, including the daemons. So, for mpirun to exit, that
means all of its children must also terminate.
    <br>
  </blockquote>
  <br>
wow, that's a thought. Do you mean that after we start a SGE
(interactive/batch) job, we first have the user to fire up persistent
orted, in order to have 'qrsh' to launch the persistent orted onto all
of the SGE nodes, and have them running for the duration of the SGE
job. So that way, the subsequent mpirun will not need to use qrsh again
to launch on the remote nodes. I think that may actually solve the
problem.
  <br>
  <br>
  <blockquote type="cite"><br>
If we try to link one mpirun to another, then we have the problem that
we must force the first mpirun to "stay alive" until the second one
completes. This could be done, but seems problematic and contrary to
normal user expectations.
    <br>
  </blockquote>
  <br>
agree, that is not good.
  <br>
  <br>
  <blockquote type="cite"><br>
    <blockquote type="cite"><br>
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
      <br>
Thanks for pointing out these issues. I was hoping something I didn't
know may solve my problem. I guess there may not be a good workaround
for this limitation due to SGE slots. We could try to track and set
some top limit for the number of times that qrsh can exec, before the
spawn program uses up all the available SGE slots and errors out.
      <br>
    </blockquote>
    <br>
Hmmm...it sounds to me like the problem here is that the second OpenRTE
universe (the one created by the second mpirun) has no knowledge of
what the other universe may already have done. </blockquote>
  <br>
it sounds like a good assumption but it actually turns out that the
orted for both the spawner (parent) and spawnee (child) belong to the
same universe. So, it may not be the case as you mention.
  <br>
  <br>
parent:
  <br>
&nbsp;15923 ??&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S&nbsp; 0:00 orted --no-daemonize --bootproxy 1 --name 0.0.1
--num_procs 2 --vpid_start 0 --nodename burl-ct-v440-5 --universe
paklui@burl-ct-v440-5:default-universe --nsreplica
"0.0.0;tcp://10.8.30.128:47797" --gprreplica
"0.0.0;tcp://10.8.30.128:47797" --mpi-call-yield 0
  <br>
  <br>
child on the same node as parent:
  <br>
&nbsp;15935 ??&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S&nbsp; 0:00 orted --no-daemonize --bootproxy 2 --name 0.0.3
--num_procs 4 --vpid_start 0 --nodename burl-ct-v440-5 --universe
paklui@burl-ct-v440-5:default-universe --nsreplica
"0.0.0;tcp://10.8.30.128:47797" --gprreplica
"0.0.0;tcp://10.8.30.128:47797" --mpi-call-yield 0
  <br>
  <br>
child on the different node:
  <br>
&nbsp; 5563 ??&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S&nbsp; 0:00 orted --no-daemonize --bootproxy 2 --name 0.0.2
--num_procs 4 --vpid_start 0 --nodename burl-ct-v440-4 --universe
paklui@burl-ct-v440-5:default-universe --nsreplica
"0.0.0;tcp://10.8.30.128:47797" --gprreplica
"0.0.0;tcp://10.8.30.128:47797" --mpi-call-yield 0
  <br>
  <br>
I assume when you say the second mpirun it means internally the
MPI_Comm_spawn is treated as a mpirun (or orterun). I use only 1 mpirun
to run the spawner executable, just to clarify.
  <br>
  <br>
So, the RAS in the second
  <br>
  <blockquote type="cite">universe reads the qrsh environmental
variable to see how many slots are available - and doesn't know that
the other mpirun already used some. </blockquote>
  <br>
I can definately agree with that. In fact, there's actually no easy way
(no env vars) to find out out many slots (for qrsh tasks) have been
used up already. The SGE engineer that I worked with also agrees that
can be useful, not just for us, but for other MPI implementations out
there as well. So it's something I might need to work out with them.
  <br>
  <br>
I
  <br>
  <blockquote type="cite">assume, therefore, that the other mpirun is
basically being run in the background - we don't complete it first
before letting the next one begin executing?
    <br>
  </blockquote>
  <br>
there is only 1 mpirun, but the orted for both the parent and child are
actually running in parallel at the same time.
  <br>
  <br>
  <blockquote type="cite"><br>
The only solution I can think of to that problem would be to kickoff a
persistent daemon to act as the "seed" for the entire time we are in
the shell (either interactive or batch). This will ensure that the
knowledge of resource usage carries over from one execution to the
next. We actually do this with the Eclipse folks, so I know the
mechanism works. We also actually kickoff a daemon that does the launch
in many of the different systems - only difference here is that we
normally don't make it persistent (it is just a child of mpirun).
Problem here is to figure out how to handle the persistent part of this
transparently to the user.
    <br>
    <br>
What we could do is bury this in an appropriate component somewhere (I
have an idea where it might go, but need to think a little more to be
sure). If this is the first mpirun within a given shell, then we
kickoff a persistent orted to act as the seed and connect ourselves to
it (we have functions in the system to do this already). If we are not
the first mpirun, then we just connect to the existing "seed". The
"seed" does all the actual launching of applications.
    <br>
    <br>
This lets each mpirun exit as usual - only the seed keeps alive. We
would need to establish a way to kill the seed when all the mpiruns are
complete - sort of a "last-one-out kills the orted" procedure. That
would take a little care as we don't want a race condition to creep
into the system - if another mpirun is coming, but the prior one exits
quickly, we don't want the seed to die just yet.
    <br>
  </blockquote>
  <br>
this is good information, but I haven't played around with persistent
daemons at all. It should all make sense after a day or two. I'll get
back to you on this later.
  <br>
  <br>
  <blockquote type="cite"><br>
Hope all that helps. We may be able to resolve this in a fairly
straightforward manner - I think a lot of the necessary tools are
already in the system, we just need to "hook them up" appropriately for
SGE.
    <br>
  </blockquote>
  <br>
yup, that's the goal.
  <br>
  <br>
  <blockquote type="cite"><br>
    <blockquote type="cite"><br>
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
        <br>
      </blockquote>
      <br>
      <br>
    </blockquote>
    <br>
------------------------------------------------------------------------
    <br>
    <br>
_______________________________________________
    <br>
devel mailing list
    <br>
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
    <br>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
    <br>
  </blockquote>
  <br>
  <br>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>In reply to:</strong> <a href="0909.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
<li><strong>Reply:</strong> <a href="0911.php">Pak Lui: "Re: [OMPI devel] MPI_Comm_spawn[_multiple] and orted"</a>
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
