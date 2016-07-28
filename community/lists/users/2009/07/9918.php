<?
$subject_val = "Re: [OMPI users] Xgrid and choosing agents...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 14:49:07 2009" -->
<!-- isoreceived="20090711184907" -->
<!-- sent="Sat, 11 Jul 2009 14:48:55 -0400" -->
<!-- isosent="20090711184855" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Xgrid and choosing agents..." -->
<!-- id="8912CBE8-CDD6-4291-B994-43C0A6B445C8_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A6282054-7BCC-4261-9822-AD080B5A68EA_at_uvic.ca" -->
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
<strong>From:</strong> Luis Vitorio Cargnini (<em>lvcargnini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-11 14:48:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI users] And anyone know what limits connections?"</a>
<li><strong>In reply to:</strong> <a href="9916.php">Klymak Jody: "[OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>So you have 4 nodes each one with 2 processors, each processor 4-core  
<br>
- quad-core.
<br>
So you have capacity for 32 process in parallel.
<br>
I think that only using the hostfile is enough is how I use. If you to  
<br>
specify a specific host or a different sequence, the mpirun will obey  
<br>
the host sequence in your hostfile to start the process, also can you  
<br>
put how you configured your host files ? I'm asking this because you  
<br>
should have something like:
<br>
# This is an example hostfile. Comments begin with
<br>
# #
<br>
# The following node is a single processor machine:
<br>
foo.example.com
<br>
&nbsp;&nbsp;# The following node is a dual-processor machine:
<br>
bar.example.com slots=2
<br>
# The following node is a quad-processor machine, and we absolutely
<br>
# want to disallow over-subscribing it:
<br>
&nbsp;&nbsp;yow.example.com slots=4 max-slots=4
<br>
so in your case like mine you should have something like:
<br>
your.hostname.domain slots=8 max-slots=8 # for each node
<br>
<p>I hope this will help you.
<br>
Regards.
<br>
Vitorio.
<br>
<p><p>Le 09-07-11 &#224; 10:56, Klymak Jody a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry in advance if these are naive questions - I'm not experienced  
</span><br>
<span class="quotelev1">&gt; in running a grid...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openMPI on 4  duo Quad-core Xeon xserves.  The 8 cores  
</span><br>
<span class="quotelev1">&gt; mimic 16 cores and show up in xgrid as each agent having 16  
</span><br>
<span class="quotelev1">&gt; processors.  However, the processing speed goes down as the used  
</span><br>
<span class="quotelev1">&gt; processors exceeds 8, so if possible I'd prefer to not have more  
</span><br>
<span class="quotelev1">&gt; than 8 processors working on each machine at a time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, if I submit a 16-processor job to xgrid it all goes  
</span><br>
<span class="quotelev1">&gt; to &quot;xserve03&quot;.  Or even worse, it does so if I submit two separate 8- 
</span><br>
<span class="quotelev1">&gt; processor jobs.  Is there anyway to steer jobs to less-busy agents?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried making a hostfile and then specifying the host, but I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun -n 8 --hostfile hostfile --host  
</span><br>
<span class="quotelev1">&gt; xserve01.local ../build/mitgcmuv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev1">&gt; allocation for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt;  ../build/mitgcmuv
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt;  xserve01.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so I assume --host doesn't work with xgrid?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is a reasonable alternative to simply not use xgrid and rely on ssh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak">http://web.uvic.ca/~jklymak</a>
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
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9918/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9918/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9917.php">Ralph Castain: "Re: [OMPI users] And anyone know what limits connections?"</a>
<li><strong>In reply to:</strong> <a href="9916.php">Klymak Jody: "[OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Reply:</strong> <a href="9919.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
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
