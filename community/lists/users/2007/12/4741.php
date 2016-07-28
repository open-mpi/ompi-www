<?
$subject_val = "Re: [OMPI users] error with Vprotocol pessimist";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 11:59:57 2007" -->
<!-- isoreceived="20071219165957" -->
<!-- sent="Wed, 19 Dec 2007 17:59:51 +0100" -->
<!-- isosent="20071219165951" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with Vprotocol pessimist" -->
<!-- id="47694E07.5080404_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95C16EE8-563D-459F-BFB4-45F3261D94A9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with Vprotocol pessimist<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 11:59:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4742.php">Brian Budge: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>Previous message:</strong> <a href="4740.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>In reply to:</strong> <a href="4667.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have the same error message when fault tolerance is activated.
<br>
I'm using gcc version 4.1.3, with Ubuntu 7.10 (i686) (kernel 
<br>
2.6.22-14-generic)
<br>
<p>Thomas
<br>
<p>Aurelien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; If you want to use the pessimist message logging you have to use the &quot;- 
</span><br>
<span class="quotelev1">&gt; mca vprotocol pessimist&quot; flag on your command line. This should work  
</span><br>
<span class="quotelev1">&gt; despite the bug because if I understand correctly, the issue you  
</span><br>
<span class="quotelev1">&gt; experience should occur only when fault tolerance is disabled.
</span><br>
<span class="quotelev1">&gt; I have troubles to reproduce the particular bug you are experiencing.  
</span><br>
<span class="quotelev1">&gt; What compiler and what architecture are you using ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; Le 13 d&#233;c. 07 &#224; 07:58, Thomas Ropars a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I still have the same error after update (r16951).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the lib/openmpi/mca_pml_v.so file in my builld and the command
</span><br>
<span class="quotelev2">&gt;&gt; line I use is: mpirun -np 4 my_application
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I could reproduce and fix the bug. It will be corrected in trunk as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; soon as the svn is online again. Thanks for reporting the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 11 d&#233;c. 07 &#224; 15:02, Aurelien Bouteiller a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I cannot reproduce the error. Please make sure you have the lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi/mca_pml_v.so file in your build. If you don't, maybe you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; forgot to run autogen.sh at the root of the trunk when you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; removed .ompi_ignore.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If this does not fix the problem, please let me know your command  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; options to mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 11 d&#233;c. 07 &#224; 14:36, Aurelien Bouteiller a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mmm, I'll investigate this today.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Le 11 d&#233;c. 07 &#224; 08:46, Thomas Ropars a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've tried to test the message logging component vprotocol
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pessimist.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (svn checkout revision 16926)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I run an mpi application, I get the following error :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mca: base: component_find: unable to open vprotocol pessimist:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /local/openmpi/lib/openmpi/mca_vprotocol_pessimist.so: undefined
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; symbol:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pml_v_output (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dr. Aurelien Bouteiller, Sr. Research Associate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Innovative Computing Laboratory - MPI group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +1 865 974 6321
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1122 Volunteer Boulevard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Claxton Education Building Suite 350
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Knoxville, TN 37996
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
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
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4742.php">Brian Budge: "Re: [OMPI users] new to MPI+infiniband"</a>
<li><strong>Previous message:</strong> <a href="4740.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>In reply to:</strong> <a href="4667.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
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
