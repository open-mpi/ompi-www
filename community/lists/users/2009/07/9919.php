<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 15:18:15 2009" -->
<!-- isoreceived="20090711191815" -->
<!-- sent="Sat, 11 Jul 2009 12:18:10 -0700" -->
<!-- isosent="20090711191810" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="CEB4CFD1-A712-40F8-964C-E7DB27385AD4_at_uvic.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8912CBE8-CDD6-4291-B994-43C0A6B445C8_at_gmail.com" -->
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
<strong>From:</strong> Klymak Jody (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-11 15:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vitorio,
<br>
<p>Thanks for getting back to me!  My hostfile is
<br>
<p>xserve01.local max-slots=8
<br>
xserve02.local max-slots=8
<br>
xserve03.local max-slots=8
<br>
xserve04.local max-slots=8
<br>
<p>I've now checked, and this seems to work fine just using ssh.  i.e. if  
<br>
I turn off the Xgrid queue manager I can submit jobs manually to the  
<br>
appropriate nodes using --hosts.
<br>
<p>However, I'd really like to use Xgrid as my queue manager as it is  
<br>
already set up (though I'll happily take hints on how to set up other  
<br>
queue managers on an OS X cluster).
<br>
<p><span class="quotelev1">&gt; So you have 4 nodes each one with 2 processors, each processor 4- 
</span><br>
<span class="quotelev1">&gt; core - quad-core.
</span><br>
<span class="quotelev1">&gt; So you have capacity for 32 process in parallel.
</span><br>
<p>The new Xeon chips designate 2-processes per core, though at a reduced  
<br>
clock rate.  This means that Xgrid believes I have 16 processors/ 
<br>
node.  For large jobs I expect that to be useful, but for my more  
<br>
modest jobs I really only want 8 processes/node.
<br>
<p>It appears that the default way xgrid assigns the jobs is to fill all  
<br>
16 slots on one node before moving to the next.  OpenMPI doesn't  
<br>
appear to look at the hostfile configuration when using Xgrid, so it  
<br>
makes it hard for me to deprecate this behaviour.
<br>
<p>Thanks,  Jody
<br>
<p><p><p><span class="quotelev1">&gt; I think that only using the hostfile is enough is how I use. If you  
</span><br>
<span class="quotelev1">&gt; to specify a specific host or a different sequence, the mpirun will  
</span><br>
<span class="quotelev1">&gt; obey the host sequence in your hostfile to start the process, also  
</span><br>
<span class="quotelev1">&gt; can you put how you configured your host files ? I'm asking this  
</span><br>
<span class="quotelev1">&gt; because you should have something like:
</span><br>
<span class="quotelev1">&gt; # This is an example hostfile. Comments begin with
</span><br>
<span class="quotelev1">&gt; # #
</span><br>
<span class="quotelev1">&gt; # The following node is a single processor machine:
</span><br>
<span class="quotelev1">&gt; foo.example.com
</span><br>
<span class="quotelev1">&gt; # The following node is a dual-processor machine:
</span><br>
<span class="quotelev1">&gt; bar.example.com slots=2
</span><br>
<span class="quotelev1">&gt; # The following node is a quad-processor machine, and we absolutely
</span><br>
<span class="quotelev1">&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev1">&gt; yow.example.com slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; so in your case like mine you should have something like:
</span><br>
<span class="quotelev1">&gt; your.hostname.domain slots=8 max-slots=8 # for each node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this will help you.
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; Vitorio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 09-07-11 &#224; 10:56, Klymak Jody a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry in advance if these are naive questions - I'm not experienced  
</span><br>
<span class="quotelev2">&gt;&gt; in running a grid...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8 cores  
</span><br>
<span class="quotelev2">&gt;&gt; mimic 16 cores and show up in xgrid as each agent having 16  
</span><br>
<span class="quotelev2">&gt;&gt; processors.  However, the processing speed goes down as the used  
</span><br>
<span class="quotelev2">&gt;&gt; processors exceeds 8, so if possible I'd prefer to not have more  
</span><br>
<span class="quotelev2">&gt;&gt; than 8 processors working on each machine at a time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, if I submit a 16-processor job to xgrid it all goes  
</span><br>
<span class="quotelev2">&gt;&gt; to &quot;xserve03&quot;.  Or even worse, it does so if I submit two separate  
</span><br>
<span class="quotelev2">&gt;&gt; 8-processor jobs.  Is there anyway to steer jobs to less-busy agents?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried making a hostfile and then specifying the host, but I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host  
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.local ../build/mitgcmuv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev2">&gt;&gt; allocation for the
</span><br>
<span class="quotelev2">&gt;&gt; application:
</span><br>
<span class="quotelev2">&gt;&gt; ../build/mitgcmuv
</span><br>
<span class="quotelev2">&gt;&gt; The requested hosts were:
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.local
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so I assume --host doesn't work with xgrid?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is a reasonable alternative to simply not use xgrid and rely on ssh?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>In reply to:</strong> <a href="9918.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
