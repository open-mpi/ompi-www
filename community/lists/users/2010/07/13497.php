<?
$subject_val = "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 09:58:12 2010" -->
<!-- isoreceived="20100707135812" -->
<!-- sent="Wed, 7 Jul 2010 07:58:00 -0600" -->
<!-- isosent="20100707135800" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept" -->
<!-- id="BA4EB60A-2E33-4E4B-A0F0-9C923328068E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTin5sJunS-LZMaSruuYzQ9vc-T25G22ZTwDGvmHE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 09:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Previous message:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>In reply to:</strong> <a href="13477.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13504.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="13504.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2010, at 8:48 AM, Grzegorz Maj wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; sorry for the late response, but I couldn't find free time to play
</span><br>
<span class="quotelev1">&gt; with this. Finally I've applied the patch you prepared. I've launched
</span><br>
<span class="quotelev1">&gt; my processes in the way you've described and I think it's working as
</span><br>
<span class="quotelev1">&gt; you expected. None of my processes runs the orted daemon and they can
</span><br>
<span class="quotelev1">&gt; perform MPI operations. Unfortunately I'm still hitting the 65
</span><br>
<span class="quotelev1">&gt; processes issue :(
</span><br>
<span class="quotelev1">&gt; Maybe I'm doing something wrong.
</span><br>
<span class="quotelev1">&gt; I attach my source code. If anybody could have a look on this, I would
</span><br>
<span class="quotelev1">&gt; be grateful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run that code with clients_count &lt;= 65 everything works fine:
</span><br>
<span class="quotelev1">&gt; all the processes create a common grid, exchange some information and
</span><br>
<span class="quotelev1">&gt; disconnect.
</span><br>
<span class="quotelev1">&gt; When I set clients_count &gt; 65 the 66th process crashes on
</span><br>
<span class="quotelev1">&gt; MPI_Comm_connect (segmentation fault).
</span><br>
<p>I didn't have time to check the code, but my guess is that you are still hitting some kind of file descriptor or other limit. Check to see what your limits are - usually &quot;ulimit&quot; will tell you.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another thing I would like to know is if it's normal that any of my
</span><br>
<span class="quotelev1">&gt; processes when calling MPI_Comm_connect or MPI_Comm_accept when the
</span><br>
<span class="quotelev1">&gt; other side is not ready, is eating up a full CPU available.
</span><br>
<p>Yes - the waiting process is polling in a tight loop waiting for the connection to be made.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/4/24 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Actually, OMPI is distributed with a daemon that does pretty much what you
</span><br>
<span class="quotelev2">&gt;&gt; want. Checkout &quot;man ompi-server&quot;. I originally wrote that code to support
</span><br>
<span class="quotelev2">&gt;&gt; cross-application MPI publish/subscribe operations, but we can utilize it
</span><br>
<span class="quotelev2">&gt;&gt; here too. Have to blame me for not making it more publicly known.
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch upgrades ompi-server and modifies the singleton startup
</span><br>
<span class="quotelev2">&gt;&gt; to provide your desired support. This solution works in the following
</span><br>
<span class="quotelev2">&gt;&gt; manner:
</span><br>
<span class="quotelev2">&gt;&gt; 1. launch &quot;ompi-server -report-uri &lt;filename&gt;&quot;. This starts a persistent
</span><br>
<span class="quotelev2">&gt;&gt; daemon called &quot;ompi-server&quot; that acts as a rendezvous point for
</span><br>
<span class="quotelev2">&gt;&gt; independently started applications.  The problem with starting different
</span><br>
<span class="quotelev2">&gt;&gt; applications and wanting them to MPI connect/accept lies in the need to have
</span><br>
<span class="quotelev2">&gt;&gt; the applications find each other. If they can't discover contact info for
</span><br>
<span class="quotelev2">&gt;&gt; the other app, then they can't wire up their interconnects. The
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi-server&quot; tool provides that rendezvous point. I don't like that
</span><br>
<span class="quotelev2">&gt;&gt; comm_accept segfaulted - should have just error'd out.
</span><br>
<span class="quotelev2">&gt;&gt; 2. set OMPI_MCA_orte_server=file:&lt;filename&gt;&quot; in the environment where you
</span><br>
<span class="quotelev2">&gt;&gt; will start your processes. This will allow your singleton processes to find
</span><br>
<span class="quotelev2">&gt;&gt; the ompi-server. I automatically also set the envar to connect the MPI
</span><br>
<span class="quotelev2">&gt;&gt; publish/subscribe system for you.
</span><br>
<span class="quotelev2">&gt;&gt; 3. run your processes. As they think they are singletons, they will detect
</span><br>
<span class="quotelev2">&gt;&gt; the presence of the above envar and automatically connect themselves to the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi-server&quot; daemon. This provides each process with the ability to perform
</span><br>
<span class="quotelev2">&gt;&gt; any MPI-2 operation.
</span><br>
<span class="quotelev2">&gt;&gt; I tested this on my machines and it worked, so hopefully it will meet your
</span><br>
<span class="quotelev2">&gt;&gt; needs. You only need to run one &quot;ompi-server&quot; period, so long as you locate
</span><br>
<span class="quotelev2">&gt;&gt; it where all of the processes can find the contact file and can open a TCP
</span><br>
<span class="quotelev2">&gt;&gt; socket to the daemon. There is a way to knit multiple ompi-servers into a
</span><br>
<span class="quotelev2">&gt;&gt; broader network (e.g., to connect processes that cannot directly access a
</span><br>
<span class="quotelev2">&gt;&gt; server due to network segmentation), but it's a tad tricky - let me know if
</span><br>
<span class="quotelev2">&gt;&gt; you require it and I'll try to help.
</span><br>
<span class="quotelev2">&gt;&gt; If you have trouble wiring them all into a single communicator, you might
</span><br>
<span class="quotelev2">&gt;&gt; ask separately about that and see if one of our MPI experts can provide
</span><br>
<span class="quotelev2">&gt;&gt; advice (I'm just the RTE grunt).
</span><br>
<span class="quotelev2">&gt;&gt; HTH - let me know how this works for you and I'll incorporate it into future
</span><br>
<span class="quotelev2">&gt;&gt; OMPI releases.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 24, 2010, at 1:49 AM, Krzysztof Zarzycki wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; I'm Krzysztof and I'm working with Grzegorz Maj on this our small
</span><br>
<span class="quotelev2">&gt;&gt; project/experiment.
</span><br>
<span class="quotelev2">&gt;&gt; We definitely would like to give your patch a try. But could you please
</span><br>
<span class="quotelev2">&gt;&gt; explain your solution a little more?
</span><br>
<span class="quotelev2">&gt;&gt; You still would like to start one mpirun per mpi grid, and then have
</span><br>
<span class="quotelev2">&gt;&gt; processes started by us to join the MPI comm?
</span><br>
<span class="quotelev2">&gt;&gt; It is a good solution of course.
</span><br>
<span class="quotelev2">&gt;&gt; But it would be especially preferable to have one daemon running
</span><br>
<span class="quotelev2">&gt;&gt; persistently on our &quot;entry&quot; machine that can handle several mpi grid starts.
</span><br>
<span class="quotelev2">&gt;&gt; Can your patch help us this way too?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Krzysztof
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 24 April 2010 03:51, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In thinking about this, my proposed solution won't entirely fix the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem - you'll still wind up with all those daemons. I believe I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resolve that one as well, but it would require a patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would you like me to send you something you could try? Might take a couple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of iterations to get it right...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 23, 2010, at 12:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm....I -think- this will work, but I cannot guarantee it:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. launch one process (can just be a spinner) using mpirun that includes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the following option:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -report-uri file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where file is some filename that mpirun can create and insert its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contact info into it. This can be a relative or absolute path. This process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; must remain alive throughout your application - doesn't matter what it does.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's purpose is solely to keep mpirun alive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. set OMPI_MCA_dpm_orte_server=FILE:file in your environment, where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;file&quot; is the filename given above. This will tell your processes how to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find mpirun, which is acting as a meeting place to handle the connect/accept
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now run your processes, and have them connect/accept to each other.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason I cannot guarantee this will work is that these processes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will all have the same rank &amp;&amp; name since they all start as singletons.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hence, connect/accept is likely to fail.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But it -might- work, so you might want to give it a try.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 23, 2010, at 8:10 AM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To be more precise: by 'server process' I mean some process that I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could run once on my system and it could help in creating those
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; groups.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My typical scenario is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. run N separate processes, each without mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. connect them into MPI group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. do some job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4. exit all N processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5. goto 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2010/4/23 Grzegorz Maj &lt;maju3_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you Ralph for your explanation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And, apart from that descriptors' issue, is there any other way to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; solve my problem, i.e. to run separately a number of processes,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; without mpirun and then to collect them into an MPI intracomm group?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If I for example would need to run some 'server process' (even using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun) for this task, that's OK. Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Okay, but here is the problem. If you don't use mpirun, and are not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; operating in an environment we support for &quot;direct&quot; launch (i.e., starting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes outside of mpirun), then every one of those processes thinks it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a singleton - yes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What you may not realize is that each singleton immediately
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fork/exec's an orted daemon that is configured to behave just like mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is required in order to support MPI-2 operations such as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn, MPI_Comm_connect/accept, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So if you launch 64 processes that think they are singletons, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; you have 64 copies of orted running as well. This eats up a lot of file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; descriptors, which is probably why you are hitting this 65 process limit -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; your system is probably running out of file descriptors. You might check you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; system limits and see if you can get them revised upward.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 17, 2010, at 4:24 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, I know. The problem is that I need to use some special way for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running my processes provided by the environment in which I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and unfortunately I can't use mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Guess I don't understand why you can't use mpirun - all it does is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; start things, provide a means to forward io, etc. It mainly sits there
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; quietly without using any cpu unless required to support the job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sounds like it would solve your problem. Otherwise, I know of no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; way to get all these processes into comm_world.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 17, 2010, at 2:27 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'd like to dynamically create a group of processes communicating
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; via
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI. Those processes need to be run without mpirun and create
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intracommunicator after the startup. Any ideas how to do this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; efficiently?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I came up with a solution in which the processes are connecting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; one by
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; one using MPI_Comm_connect, but unfortunately all the processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are already in the group need to call MPI_Comm_accept. This means
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when the n-th process wants to connect I need to collect all the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; n-1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes on the MPI_Comm_accept call. After I run about 40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; every subsequent call takes more and more time, which I'd like to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; avoid.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Another problem in this solution is that when I try to connect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 66-th
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process the root of the existing group segfaults on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Comm_accept.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe it's my bug, but it's weird as everything works fine for at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; most
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 65 processes. Is there any limitation I don't know about?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My last question is about MPI_COMM_WORLD. When I run my processes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; without mpirun their MPI_COMM_WORLD is the same as MPI_COMM_SELF.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; there any way to change MPI_COMM_WORLD and set it to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intracommunicator that I've created?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;client.c&gt;&lt;server.c&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13498.php">Jeff Squyres: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Previous message:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>In reply to:</strong> <a href="13477.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13504.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="13504.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
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
