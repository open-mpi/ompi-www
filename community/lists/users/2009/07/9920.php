<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 15:42:26 2009" -->
<!-- isoreceived="20090711194226" -->
<!-- sent="Sat, 11 Jul 2009 13:42:12 -0600" -->
<!-- isosent="20090711194212" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="972309C6-7419-4FB3-88E3-37049DA4811A_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEB4CFD1-A712-40F8-964C-E7DB27385AD4_at_uvic.ca" -->
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
<strong>Date:</strong> 2009-07-11 15:42:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9921.php">Robert Kubrick: "[OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9922.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9922.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the code, you are correct in that the Xgrid launcher is  
<br>
ignoring hostfiles. I'll have to look at it to determine how to  
<br>
correct that situation - I didn't write that code, nor do I have a way  
<br>
to test any changes I might make to it.
<br>
<p>For now, though, if you add --bynode to your command line, you should  
<br>
get the layout you want. I'm not sure you'll get the rank layout  
<br>
you'll want, though...or if that is important to what you are doing.
<br>
<p>Ralph
<br>
<p>On Jul 11, 2009, at 1:18 PM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi Vitorio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for getting back to me!  My hostfile is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xserve01.local max-slots=8
</span><br>
<span class="quotelev1">&gt; xserve02.local max-slots=8
</span><br>
<span class="quotelev1">&gt; xserve03.local max-slots=8
</span><br>
<span class="quotelev1">&gt; xserve04.local max-slots=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've now checked, and this seems to work fine just using ssh.  i.e.  
</span><br>
<span class="quotelev1">&gt; if I turn off the Xgrid queue manager I can submit jobs manually to  
</span><br>
<span class="quotelev1">&gt; the appropriate nodes using --hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I'd really like to use Xgrid as my queue manager as it is  
</span><br>
<span class="quotelev1">&gt; already set up (though I'll happily take hints on how to set up  
</span><br>
<span class="quotelev1">&gt; other queue managers on an OS X cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you have 4 nodes each one with 2 processors, each processor 4- 
</span><br>
<span class="quotelev2">&gt;&gt; core - quad-core.
</span><br>
<span class="quotelev2">&gt;&gt; So you have capacity for 32 process in parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new Xeon chips designate 2-processes per core, though at a  
</span><br>
<span class="quotelev1">&gt; reduced clock rate.  This means that Xgrid believes I have 16  
</span><br>
<span class="quotelev1">&gt; processors/node.  For large jobs I expect that to be useful, but for  
</span><br>
<span class="quotelev1">&gt; my more modest jobs I really only want 8 processes/node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that the default way xgrid assigns the jobs is to fill  
</span><br>
<span class="quotelev1">&gt; all 16 slots on one node before moving to the next.  OpenMPI doesn't  
</span><br>
<span class="quotelev1">&gt; appear to look at the hostfile configuration when using Xgrid, so it  
</span><br>
<span class="quotelev1">&gt; makes it hard for me to deprecate this behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that only using the hostfile is enough is how I use. If you  
</span><br>
<span class="quotelev2">&gt;&gt; to specify a specific host or a different sequence, the mpirun will  
</span><br>
<span class="quotelev2">&gt;&gt; obey the host sequence in your hostfile to start the process, also  
</span><br>
<span class="quotelev2">&gt;&gt; can you put how you configured your host files ? I'm asking this  
</span><br>
<span class="quotelev2">&gt;&gt; because you should have something like:
</span><br>
<span class="quotelev2">&gt;&gt; # This is an example hostfile. Comments begin with
</span><br>
<span class="quotelev2">&gt;&gt; # #
</span><br>
<span class="quotelev2">&gt;&gt; # The following node is a single processor machine:
</span><br>
<span class="quotelev2">&gt;&gt; foo.example.com
</span><br>
<span class="quotelev2">&gt;&gt; # The following node is a dual-processor machine:
</span><br>
<span class="quotelev2">&gt;&gt; bar.example.com slots=2
</span><br>
<span class="quotelev2">&gt;&gt; # The following node is a quad-processor machine, and we absolutely
</span><br>
<span class="quotelev2">&gt;&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev2">&gt;&gt; yow.example.com slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; so in your case like mine you should have something like:
</span><br>
<span class="quotelev2">&gt;&gt; your.hostname.domain slots=8 max-slots=8 # for each node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this will help you.
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; Vitorio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 09-07-11 &#224; 10:56, Klymak Jody a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry in advance if these are naive questions - I'm not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experienced in running a grid...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8 cores  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mimic 16 cores and show up in xgrid as each agent having 16  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors.  However, the processing speed goes down as the used  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors exceeds 8, so if possible I'd prefer to not have more  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than 8 processors working on each machine at a time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, if I submit a 16-processor job to xgrid it all goes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to &quot;xserve03&quot;.  Or even worse, it does so if I submit two separate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8-processor jobs.  Is there anyway to steer jobs to less-busy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; agents?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried making a hostfile and then specifying the host, but I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve01.local ../build/mitgcmuv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../build/mitgcmuv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The requested hosts were:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve01.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I assume --host doesn't work with xgrid?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is a reasonable alternative to simply not use xgrid and rely on ssh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9921.php">Robert Kubrick: "[OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9922.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9922.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
