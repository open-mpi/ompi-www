<?
$subject_val = "Re: [OMPI users] Problem with Filem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 16:40:12 2009" -->
<!-- isoreceived="20090501204012" -->
<!-- sent="Fri, 1 May 2009 16:40:06 -0400" -->
<!-- isosent="20090501204006" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Filem" -->
<!-- id="9CAF88CE-6D0F-41E5-9C24-A1A92C5C5E5A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F9800F.5000102_at_inrialpes.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Filem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 16:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9166.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9164.php">Yaakoub El Khamra: "Re: [OMPI users] Checkpointing configuration problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9150.php">Bouguerra mohamed slim: "[OMPI users] Problem with Filem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9248.php">Bouguerra mohamed slim: "Re: [OMPI users] Problem with Filem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This typically this means that one or more of the rcp/scp or rsh/ssh  
<br>
commands failed. FileM should be printing an error message when one  
<br>
of the copy commands fail. Try turning up the verbose level to 10 to  
<br>
see if it indicates any problems:
<br>
&nbsp;&nbsp;-mca filem_rsh_verbose 10
<br>
<p>Can you send me the MCA parameters that you are setting? That may  
<br>
help narrow down the problem as well. Also I cleaned up some of the  
<br>
filem (and snapc) error reporting in the development trunk if you  
<br>
want to give that a try.
<br>
<p>Let me know what you find out.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Apr 30, 2009, at 6:40 AM, Bouguerra mohamed slim wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have a problem with the Filem module when i would checkpoint on a  
</span><br>
<span class="quotelev1">&gt; remote host without shared space file system.
</span><br>
<span class="quotelev1">&gt; I use the new open-mpi 1.3.2 and it is the same problem as in the  
</span><br>
<span class="quotelev1">&gt; version 1.3.1. Indeed, when i use the NFS system file it works.  
</span><br>
<span class="quotelev1">&gt; Thus i guess that is a problem with the Filem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [azur-6.fr:23223] filem:rsh: wait_all(): Wait failed (-1)
</span><br>
<span class="quotelev1">&gt; [azur-6.fr:23223] [[48784,0],0] ORTE_ERROR_LOG: Error in file /home/ 
</span><br>
<span class="quotelev1">&gt; grenoble/msbouguerra/openmpi-1.3.2/orte/mca/snapc/full/ 
</span><br>
<span class="quotelev1">&gt; snapc_full_global.c at line 1054
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cordialement,
</span><br>
<span class="quotelev1">&gt; Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
</span><br>
<span class="quotelev1">&gt; ENSIMAG - antenne de Montbonnot
</span><br>
<span class="quotelev1">&gt; ZIRST 51, avenue Jean Kuntzmann
</span><br>
<span class="quotelev1">&gt; 38330 MONTBONNOT SAINT MARTIN France
</span><br>
<span class="quotelev1">&gt; Tel :+33 (0)4 76 61 20 79
</span><br>
<span class="quotelev1">&gt; Fax :+33 (0)4 76 61 20 99
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
<li><strong>Next message:</strong> <a href="9166.php">Gus Correa: "Re: [OMPI users] HPL with OpenMPI: Do I have a memory leak?"</a>
<li><strong>Previous message:</strong> <a href="9164.php">Yaakoub El Khamra: "Re: [OMPI users] Checkpointing configuration problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9150.php">Bouguerra mohamed slim: "[OMPI users] Problem with Filem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9248.php">Bouguerra mohamed slim: "Re: [OMPI users] Problem with Filem"</a>
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
