<?
$subject_val = "Re: [OMPI users] strange bug";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 18:36:16 2009" -->
<!-- isoreceived="20090512223616" -->
<!-- sent="Wed, 13 May 2009 00:35:58 +0200" -->
<!-- isosent="20090512223558" -->
<!-- name="Anton Starikov" -->
<!-- email="ant.starikov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange bug" -->
<!-- id="A8B9951E-A04A-4E48-BDC6-4881E3B58CA9_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A09AA82.6050005_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2009-05-12 18:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9320.php">shan axida: "[OMPI users] ****---How to configure NIS and MPI on spread NICs?----****"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will try to prepare test-case.
<br>
<p><p><pre>
--
Anton Starikov.
On May 12, 2009, at 6:57 PM, Edgar Gabriel wrote:
&gt; hm, so I am out of ideas. I created multiple variants of test- 
&gt; programs which did what you basically described, and they all passed  
&gt; and did not generate problems. I compiled the MUMPS library and ran  
&gt; the tests that they have in the examples directory, and they all  
&gt; worked.
&gt;
&gt; Additionally, I checked in the source code of Open MPI. In comm_dup  
&gt; there is only a single location where we raise the error  
&gt; MPI_ERR_INTERN (which was reported in your email). I am fairly  
&gt; positive, that this can not occur, else we would segfault prior to  
&gt; that (it is a stupid check, don't ask). Furthermore, the code  
&gt; segment that has been modified does not raise anywhere  
&gt; MPI_ERR_INTERN. Of course, it could be a secondary effect and be  
&gt; created somewhere else (PML_ADD or collective module selection) and  
&gt; comm_dup just passes the error code up.
&gt;
&gt; One way or the other, I need more hints on what the code does. Any  
&gt; chance of getting a smaller code fragment which replicates the  
&gt; problem? It could use the MUMPS library, I am fine with that since I  
&gt; just compiled and installed it with the current ompi trunk...
&gt;
&gt; Thanks
&gt; Edgar
&gt;
&gt; Edgar Gabriel wrote:
&gt;&gt; I would say the probability is large that it is due to the recent  
&gt;&gt; 'fix'.  I will try to create a testcase similar to what you  
&gt;&gt; suggested. Could you give us maybe some hints on which  
&gt;&gt; functionality of MUMPS you are using, or even share the code/ a  
&gt;&gt; code fragment?
&gt;&gt; Thanks
&gt;&gt; Edgar
&gt;&gt; Jeff Squyres wrote:
&gt;&gt;&gt; Hey Edgar --
&gt;&gt;&gt;
&gt;&gt;&gt; Could this have anything to do with your recent fixes?
&gt;&gt;&gt;
&gt;&gt;&gt; On May 12, 2009, at 8:30 AM, Anton Starikov wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; hostfile from torque PBS_NODEFILE (OMPI is compilled with torque
&gt;&gt;&gt;&gt; support)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; It happens with or without rankfile.
&gt;&gt;&gt;&gt; Started with
&gt;&gt;&gt;&gt; mpirun -np 16 ./somecode
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; mca parameters:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; btl = self,sm,openib
&gt;&gt;&gt;&gt; mpi_maffinity_alone = 1
&gt;&gt;&gt;&gt; rmaps_base_no_oversubscribe = 1 (rmaps_base_no_oversubscribe = 0
&gt;&gt;&gt;&gt; doesn't change it)
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I tested with both: &quot;btl=self,sm&quot; on 16c-core nodes and
&gt;&gt;&gt;&gt; &quot;btl=self,sm,openib&quot; on 8x dual-core nodes , result is the same.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; It looks like it always occurs exactly at the same point in the
&gt;&gt;&gt;&gt; execution, not at the beginning, it is not first MPI_Comm_dup in  
&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt; code.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I can't say too much about particular piece of the code, where it  
&gt;&gt;&gt;&gt; is
&gt;&gt;&gt;&gt; happening, because it is in the 3rd-party library (MUMPS).  When  
&gt;&gt;&gt;&gt; error
&gt;&gt;&gt;&gt; occurs, MPI_Comm_dup in every task deals with single-task  
&gt;&gt;&gt;&gt; communicator
&gt;&gt;&gt;&gt; (MPI_Comm_split of initial MPI_Comm_world for 16 processes into 16
&gt;&gt;&gt;&gt; groups, 1 process per group). And I  can guess that before this  
&gt;&gt;&gt;&gt; error,
&gt;&gt;&gt;&gt; MPI_Comm_dup is called something like 100 of times by the same  
&gt;&gt;&gt;&gt; piece
&gt;&gt;&gt;&gt; of code on the same communicators without any problems.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; I can say that it used to work correctly with all previous  
&gt;&gt;&gt;&gt; versions of
&gt;&gt;&gt;&gt; openmpi we used (1.2.8-1.3.2 and some earlier versions). It also  
&gt;&gt;&gt;&gt; works
&gt;&gt;&gt;&gt; correctly on other platforms/MPI implementations.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; All environmental variables (PATH, LD_LIBRARY_PATH) are correct.
&gt;&gt;&gt;&gt; I recompiled code and 3rd-party libraries with this version of  
&gt;&gt;&gt;&gt; OMPI.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; &lt;config.log.gz&gt;&lt;ompi-info.txt.gz&gt;&lt;ATT9775601.txt&gt;&lt;ATT9775603.txt&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;
&gt; -- 
&gt; Edgar Gabriel
&gt; Assistant Professor
&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
&gt; Department of Computer Science          University of Houston
&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9317.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9320.php">shan axida: "[OMPI users] ****---How to configure NIS and MPI on spread NICs?----****"</a>
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
