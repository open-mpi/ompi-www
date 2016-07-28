<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 18:11:38 2009" -->
<!-- isoreceived="20090711221138" -->
<!-- sent="Sat, 11 Jul 2009 15:11:32 -0700" -->
<!-- isosent="20090711221132" -->
<!-- name="Klymak Jody" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="9661851F-3697-4AA0-8EEE-F3CC91666FBD_at_uvic.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="972309C6-7419-4FB3-88E3-37049DA4811A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-07-11 18:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9923.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9921.php">Robert Kubrick: "[OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9924.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9924.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If anyone else is using xgrid, there is a mechanism to limit the  
<br>
processes per machine:
<br>
<p>sudo defaults write /Library/Preferences/com.apple.xgrid.agent  
<br>
MaximumTaskCount 8
<br>
<p>on each of the nodes and then restarting xgrid tells the controller to  
<br>
only send 8 processes to that node.  For now that is fine solution for  
<br>
my need.  I'll try and figure out how to specify hosts via xgrid and  
<br>
get back to the list...
<br>
<p>Thanks for everyone's help,
<br>
<p>Cheers, Jody
<br>
<p>On 11-Jul-09, at 12:42 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Looking at the code, you are correct in that the Xgrid launcher is  
</span><br>
<span class="quotelev1">&gt; ignoring hostfiles. I'll have to look at it to determine how to  
</span><br>
<span class="quotelev1">&gt; correct that situation - I didn't write that code, nor do I have a  
</span><br>
<span class="quotelev1">&gt; way to test any changes I might make to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, though, if you add --bynode to your command line, you  
</span><br>
<span class="quotelev1">&gt; should get the layout you want. I'm not sure you'll get the rank  
</span><br>
<span class="quotelev1">&gt; layout you'll want, though...or if that is important to what you are  
</span><br>
<span class="quotelev1">&gt; doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2009, at 1:18 PM, Klymak Jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Vitorio,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for getting back to me!  My hostfile is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.local max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve02.local max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve03.local max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve04.local max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've now checked, and this seems to work fine just using ssh.  i.e.  
</span><br>
<span class="quotelev2">&gt;&gt; if I turn off the Xgrid queue manager I can submit jobs manually to  
</span><br>
<span class="quotelev2">&gt;&gt; the appropriate nodes using --hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I'd really like to use Xgrid as my queue manager as it is  
</span><br>
<span class="quotelev2">&gt;&gt; already set up (though I'll happily take hints on how to set up  
</span><br>
<span class="quotelev2">&gt;&gt; other queue managers on an OS X cluster).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So you have 4 nodes each one with 2 processors, each processor 4- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core - quad-core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So you have capacity for 32 process in parallel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The new Xeon chips designate 2-processes per core, though at a  
</span><br>
<span class="quotelev2">&gt;&gt; reduced clock rate.  This means that Xgrid believes I have 16  
</span><br>
<span class="quotelev2">&gt;&gt; processors/node.  For large jobs I expect that to be useful, but  
</span><br>
<span class="quotelev2">&gt;&gt; for my more modest jobs I really only want 8 processes/node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that the default way xgrid assigns the jobs is to fill  
</span><br>
<span class="quotelev2">&gt;&gt; all 16 slots on one node before moving to the next.  OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't appear to look at the hostfile configuration when using  
</span><br>
<span class="quotelev2">&gt;&gt; Xgrid, so it makes it hard for me to deprecate this behaviour.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that only using the hostfile is enough is how I use. If  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you to specify a specific host or a different sequence, the mpirun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will obey the host sequence in your hostfile to start the process,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also can you put how you configured your host files ? I'm asking  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this because you should have something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This is an example hostfile. Comments begin with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The following node is a single processor machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; foo.example.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The following node is a dual-processor machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bar.example.com slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The following node is a quad-processor machine, and we absolutely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # want to disallow over-subscribing it:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yow.example.com slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so in your case like mine you should have something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your.hostname.domain slots=8 max-slots=8 # for each node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this will help you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vitorio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 09-07-11 &#224; 10:56, Klymak Jody a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry in advance if these are naive questions - I'm not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; experienced in running a grid...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8 cores  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mimic 16 cores and show up in xgrid as each agent having 16  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors.  However, the processing speed goes down as the used  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors exceeds 8, so if possible I'd prefer to not have more  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than 8 processors working on each machine at a time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, if I submit a 16-processor job to xgrid it all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; goes to &quot;xserve03&quot;.  Or even worse, it does so if I submit two  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separate 8-processor jobs.  Is there anyway to steer jobs to less- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; busy agents?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried making a hostfile and then specifying the host, but I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xserve01.local ../build/mitgcmuv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../build/mitgcmuv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The requested hosts were:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xserve01.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so I assume --host doesn't work with xgrid?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is a reasonable alternative to simply not use xgrid and rely on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9923.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9921.php">Robert Kubrick: "[OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9920.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9924.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9924.php">Luis Vitorio Cargnini: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
