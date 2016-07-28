<?
$subject_val = "Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 21:43:45 2010" -->
<!-- isoreceived="20100715014345" -->
<!-- sent="Wed, 14 Jul 2010 18:43:39 -0700 (PDT)" -->
<!-- isosent="20100715014339" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]" -->
<!-- id="340108.3876.qm_at_web80805.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C3E0138.1090500_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 21:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>In reply to:</strong> <a href="13636.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13630.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I have finally solved the issue, or as it should be said, discovered my oversight. And it's a mistake that will have je mad at myself for a while. I'm new to MPI, though, and not versed in the MPP communications of LS-DYNA at all though, so it was an oversight easily made.
<br>
<p>The key to fixing the entire situation was the test input file I was using. LS-DYNA accepts input files that contain all of the data that tell LS-DYNA what to do with the simulation. So I would invoke mpi as such: mpirun -np 16 mppLSDYNA input=myfile.k . That's not related to the issue but important to differentiate between the mpi program input and ls dyna application input.
<br>
<p>Anyhow, I made up a simple collision simulation in LSDYNA to use as a test file (~15 kB) because our typical jobs have very large files (50-150MB) that have very long run times (often 7+ days). Therefore I chose a simple analysis that could be executed fast so I could see data from all parts of it and how OpenMPI behaved during the entire simulation...and that's where the problem was.
<br>
<p>(I have read in various places that MPI_Allreduce is LS-DYNA's heavy hitter in the MPI communications and that is why I hypothesize the following:) The MPP communications of LS-DYNA do an MPI_Allreduce to coordinate for EVERY or very nearly every iteration of the program. My executable file ran so fast that it was completing 5000 iterations within a single second on a single core (I found this out very recently, minutes ago in-fact, when I was testing mpirun with only two cores locally). And that was where my network tie ups were happening. 
<br>
<p>I started measuring throughputs of the 16 core, 8 core, 4 core, and 2 core jobs over the network and was shocked to see that 16 cores was capping my network out at 120 Mbits/sec. 8 cores was also using 120 Mbits/sec, 4 cores used 75 Mbits/sec and 2 cores used around 30 or 40 Mbits/sec.
<br>
<p>Needless to say, it finally clicked in my brain a few minutes ago, and I started up a 16 core job of our standard issue file once I realized that the communications were just happening too often, and not that they were taking a long time. I had the right idea initially, because typically the issue of the subroutines taking a long time is worrisome, but, with very repetitive and iterative programs comes the need for them to coordinate on a continuous and rapid basis. The 16 core job file I started up typically takes 100-120 hours, and typically runs on 8 cores for that amount of time (SMP). When I started this OpenMPI job, LS-DYNA gave me an estimate of 43 hours! This earns OpenMPI some great respect, quite a powerful program once setup correctly. 
<br>
<p>As a side note, the throughput of this job was around 17 Mbits/sec.
<br>
<p>All in all, easily fixed, just a few days of frustration. Thank you all again for all of your help. It was paramount in enabling me to discover the issue. Thanks again.
<br>
<p>Best Regards,
<br>
Robert Walters
<br>
<p>--- On Wed, 7/14/10, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p>From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
<br>
Subject: [OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, July 14, 2010, 2:26 PM
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13640/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13641.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13639.php">Jeff Squyres: "Re: [OMPI users] first cluster [was trouble using openmpi under slurm]"</a>
<li><strong>In reply to:</strong> <a href="13636.php">Eugene Loh: "[OMPI users] LS-DYNA profiling [was: OpenMPI Hangs, No Error]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13630.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
