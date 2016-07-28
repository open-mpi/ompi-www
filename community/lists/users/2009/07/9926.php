<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 07:07:17 2009" -->
<!-- isoreceived="20090712110717" -->
<!-- sent="Sun, 12 Jul 2009 05:07:00 -0600" -->
<!-- isosent="20090712110700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="095D0BAB-34A0-46C9-8AB7-21C99ACAB1E5_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7BAC316A-B241-4DDF-9986-472BE10854C0_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Xgrid and choosing agents...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 07:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9927.php">Lee Amy: "[OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Previous message:</strong> <a href="9925.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9925.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2009, at 11:13 PM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Vitorio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11-Jul-09, at 8:40 PM, Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; did you saw that, maybe, just maybe using:
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.local slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve02.local slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve03.local slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve04.local slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it can set the number of process specifically for each node, the  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slots&quot; does this setting the configuration of slots per each node,  
</span><br>
<span class="quotelev2">&gt;&gt; try it with the old conf of Xgrid and also test with your new Xgrid  
</span><br>
<span class="quotelev2">&gt;&gt; conf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As per Ralph's message, the xgrid launcher ignores --hostfiles...   
</span><br>
<span class="quotelev1">&gt; Further, &quot;max_slots=2&quot; is the same as &quot;slots=2 max_slots=2&quot;  
</span><br>
<span class="quotelev1">&gt; according to the man page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xgrid does have a somewhat convoluted, and poorly documented, method  
</span><br>
<span class="quotelev1">&gt; of directing jobs to specified machines.  Its called Scoreboard and  
</span><br>
<span class="quotelev1">&gt; it allows the scheduler to query each machine with a script that  
</span><br>
<span class="quotelev1">&gt; gathers info about the machine and compute a &quot;score&quot;.  Nodes with  
</span><br>
<span class="quotelev1">&gt; the highest score get the job.  However, how one would implement  
</span><br>
<span class="quotelev1">&gt; that using openMPI is unclear to me.  Does openMPI have the  
</span><br>
<span class="quotelev1">&gt; capability of passing arbitrary arguments to the resource managers?
</span><br>
<p>Assuming that Scoreboard is appropriately licensed (i.e., is not  
<br>
licensed under GPL, but preferably something like FreeBSD), and that  
<br>
it has an accessible API, then we can link against it when in that  
<br>
environment and interact any way we desire - including asking  
<br>
Scoreboard for its recommended list of nodes.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; Vitorio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 09-07-11 &#224; 18:11, Klymak Jody a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anyone else is using xgrid, there is a mechanism to limit the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes per machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sudo defaults write /Library/Preferences/com.apple.xgrid.agent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MaximumTaskCount 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each of the nodes and then restarting xgrid tells the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; controller to only send 8 processes to that node.  For now that is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine solution for my need.  I'll try and figure out how to specify  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hosts via xgrid and get back to the list...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for everyone's help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers, Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11-Jul-09, at 12:42 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the code, you are correct in that the Xgrid launcher  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is ignoring hostfiles. I'll have to look at it to determine how  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to correct that situation - I didn't write that code, nor do I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have a way to test any changes I might make to it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For now, though, if you add --bynode to your command line, you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should get the layout you want. I'm not sure you'll get the rank  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layout you'll want, though...or if that is important to what you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are doing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 11, 2009, at 1:18 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Vitorio,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for getting back to me!  My hostfile is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xserve01.local max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xserve02.local max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xserve03.local max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; xserve04.local max-slots=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've now checked, and this seems to work fine just using ssh.   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i.e. if I turn off the Xgrid queue manager I can submit jobs  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; manually to the appropriate nodes using --hosts.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, I'd really like to use Xgrid as my queue manager as it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is already set up (though I'll happily take hints on how to set  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up other queue managers on an OS X cluster).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So you have 4 nodes each one with 2 processors, each processor  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4-core - quad-core.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So you have capacity for 32 process in parallel.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The new Xeon chips designate 2-processes per core, though at a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reduced clock rate.  This means that Xgrid believes I have 16  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processors/node.  For large jobs I expect that to be useful, but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for my more modest jobs I really only want 8 processes/node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It appears that the default way xgrid assigns the jobs is to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fill all 16 slots on one node before moving to the next.   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI doesn't appear to look at the hostfile configuration  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when using Xgrid, so it makes it hard for me to deprecate this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; behaviour.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think that only using the hostfile is enough is how I use. If  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you to specify a specific host or a different sequence, the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun will obey the host sequence in your hostfile to start  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the process, also can you put how you configured your host  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; files ? I'm asking this because you should have something like:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # This is an example hostfile. Comments begin with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The following node is a single processor machine:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; foo.example.com
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The following node is a dual-processor machine:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bar.example.com slots=2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # The following node is a quad-processor machine, and we  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; absolutely
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; yow.example.com slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so in your case like mine you should have something like:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; your.hostname.domain slots=8 max-slots=8 # for each node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I hope this will help you.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Vitorio.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 09-07-11 &#224; 10:56, Klymak Jody a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry in advance if these are naive questions - I'm not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; experienced in running a grid...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cores mimic 16 cores and show up in xgrid as each agent having  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 16 processors.  However, the processing speed goes down as the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; used processors exceeds 8, so if possible I'd prefer to not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have more than 8 processors working on each machine at a time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, if I submit a 16-processor job to xgrid it all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; goes to &quot;xserve03&quot;.  Or even worse, it does so if I submit two  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; separate 8-processor jobs.  Is there anyway to steer jobs to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; less-busy agents?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried making a hostfile and then specifying the host, but I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; xserve01.local ../build/mitgcmuv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocation for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../build/mitgcmuv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The requested hosts were:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; xserve01.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; so I assume --host doesn't work with xgrid?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is a reasonable alternative to simply not use xgrid and rely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on ssh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9926/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9927.php">Lee Amy: "[OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Previous message:</strong> <a href="9925.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9925.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
