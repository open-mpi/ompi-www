<?
$subject_val = "Re: [OMPI users] strange bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 08:31:02 2009" -->
<!-- isoreceived="20090512123102" -->
<!-- sent="Tue, 12 May 2009 14:30:49 +0200" -->
<!-- isosent="20090512123049" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange bug" -->
<!-- id="990B7C73-D000-4DDD-BBD8-A7E6B0346B66_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B28F078D-DE08-4ED4-9604-CBD9D4989187_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange bug<br>
<strong>From:</strong> Anton Starikov (<em>ant.starikov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 08:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9307.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9301.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hostfile from torque PBS_NODEFILE (OMPI is compilled with torque  
<br>
support)
<br>
<p>It happens with or without rankfile.
<br>
Started with
<br>
mpirun -np 16 ./somecode
<br>
<p>mca parameters:
<br>
<p>btl = self,sm,openib
<br>
mpi_maffinity_alone = 1
<br>
rmaps_base_no_oversubscribe = 1 (rmaps_base_no_oversubscribe = 0  
<br>
doesn't change it)
<br>
<p>I tested with both: &quot;btl=self,sm&quot; on 16c-core nodes and  
<br>
&quot;btl=self,sm,openib&quot; on 8x dual-core nodes , result is the same.
<br>
<p>It looks like it always occurs exactly at the same point in the  
<br>
execution, not at the beginning, it is not first MPI_Comm_dup in the  
<br>
code.
<br>
<p>I can't say too much about particular piece of the code, where it is  
<br>
happening, because it is in the 3rd-party library (MUMPS).  When error  
<br>
occurs, MPI_Comm_dup in every task deals with single-task communicator  
<br>
(MPI_Comm_split of initial MPI_Comm_world for 16 processes into 16  
<br>
groups, 1 process per group). And I  can guess that before this error,  
<br>
MPI_Comm_dup is called something like 100 of times by the same piece  
<br>
of code on the same communicators without any problems.
<br>
<p>I can say that it used to work correctly with all previous versions of  
<br>
openmpi we used (1.2.8-1.3.2 and some earlier versions). It also works  
<br>
correctly on other platforms/MPI implementations.
<br>
<p>All environmental variables (PATH, LD_LIBRARY_PATH) are correct.
<br>
I recompiled code and 3rd-party libraries with this version of OMPI.
<br>
<p><p><p><p>


<br><p>
<p><pre>
--
Anton Starikov.
Computational Material Science,
Faculty of Science and Technology,
University of Twente.
Phone: +31 (0)53 489 2986
Fax: +31 (0)53 489 2910
On May 12, 2009, at 12:35 PM, Jeff Squyres wrote:
&gt; Can you send all the information listed here:
&gt;
&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt;
&gt;
&gt; On May 11, 2009, at 10:03 PM, Anton Starikov wrote:
&gt;
&gt;&gt; By the way, this if fortran code, which uses F77 bindings.
&gt;&gt;
&gt;&gt; --
&gt;&gt; Anton Starikov.
&gt;&gt;
&gt;&gt;
&gt;&gt; On May 12, 2009, at 3:06 AM, Anton Starikov wrote:
&gt;&gt;
&gt;&gt; &gt; Due to rankfile fixes I switched to SVN r21208, now my code dies
&gt;&gt; &gt; with error
&gt;&gt; &gt;
&gt;&gt; &gt; [node037:20519] *** An error occurred in MPI_Comm_dup
&gt;&gt; &gt; [node037:20519] *** on communicator MPI COMMUNICATOR 32 SPLIT  
&gt;&gt; FROM 4
&gt;&gt; &gt; [node037:20519] *** MPI_ERR_INTERN: internal error
&gt;&gt; &gt; [node037:20519] *** MPI_ERRORS_ARE_FATAL (your MPI job will now  
&gt;&gt; abort)
&gt;&gt; &gt;
&gt;&gt; &gt; --
&gt;&gt; &gt; Anton Starikov.
&gt;&gt; &gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9306/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9306/ompi-info.txt.gz">ompi-info.txt.gz</a>
</ul>
<!-- attachment="ompi-info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9307.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9301.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>Reply:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
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
