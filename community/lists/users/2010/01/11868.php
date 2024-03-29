<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 11:55:15 2010" -->
<!-- isoreceived="20100125165515" -->
<!-- sent="Mon, 25 Jan 2010 11:55:11 -0500" -->
<!-- isosent="20100125165511" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="52002637-9184-4CAD-BC2C-FD0516A87E36_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="68119efe1001250248t196e8e31xa91d4b7f92209280_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart error<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 11:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11869.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11867.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>In reply to:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11946.php">Jazcek Braden: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tested the 1.4.1 release, and everything worked fine for me (tested  
<br>
a few different configurations of nodes/environments).
<br>
<p>The ompi-checkpoint error you cited is usually caused by one of two  
<br>
things:
<br>
&nbsp;&nbsp;- The PID specified is wrong (which I don't think that is the case  
<br>
here)
<br>
&nbsp;&nbsp;- The session directory cannot be found in /tmp.
<br>
<p>So I think the problem is the latter. The session directory looks  
<br>
something like:
<br>
&nbsp;&nbsp;&nbsp;/tmp/openmpi-sessions-USERNAME_at_LOCALHOST_0
<br>
Within this directory the mpirun process places its contact  
<br>
information. ompi-checkpoint uses this contact information to connect  
<br>
to the job. If it cannot find it, then it errors out. (We definitely  
<br>
need a better error message here. I filed a ticket [1]).
<br>
<p>We usually do not recommend running Open MPI as a root user. So I  
<br>
would strongly recommend that you do not run as a root user.
<br>
<p>With a regular user, check the location of the session directory. Make  
<br>
sure that it is in /tmp on the node where 'mpirun' and 'ompi- 
<br>
checkpoint' are run.
<br>
<p>-- Josh
<br>
<p>[1] <a href="https://svn.open-mpi.org/trac/ompi/ticket/2189">https://svn.open-mpi.org/trac/ompi/ticket/2189</a>
<br>
<p>On Jan 25, 2010, at 5:48 AM, Andreea Costea wrote:
<br>
<p><span class="quotelev1">&gt; So? anyone? any clue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summarize:
</span><br>
<span class="quotelev1">&gt; - installed OpenMPI 1.4.1 on fresh Centos 5
</span><br>
<span class="quotelev1">&gt; - mpirun works but ompi-checkpoint throws this error:
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line 405
</span><br>
<span class="quotelev1">&gt; - on another VM I have OpenMPI 1.3.3. installed. Checkpointing works  
</span><br>
<span class="quotelev1">&gt; fine on guest but has the previous mentioned error on root. Both  
</span><br>
<span class="quotelev1">&gt; root and guest show the same output after &quot;param -all -all&quot; except  
</span><br>
<span class="quotelev1">&gt; for the $HOME (which only matters for mca_component_path,  
</span><br>
<span class="quotelev1">&gt; mca_param_files, snapc_base_global_snapshot_dir)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 19, 2010 at 9:01 PM, Andreea Costea &lt;andre.costea_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; I noticed one more thing. As I still have some VMs that have OpenMPI  
</span><br>
<span class="quotelev1">&gt; version 1.3.3 installed I started to use those machines 'till I fix  
</span><br>
<span class="quotelev1">&gt; the problem with 1.4.1 And while checkpointing on one of this VMs I  
</span><br>
<span class="quotelev1">&gt; realized that checkpointing as a guest works fine and checkpointing  
</span><br>
<span class="quotelev1">&gt; as a root outputs the same error like in 1.4.1. : ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; Not found in file orte-checkpoint.c at line 405
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I logged the outputs of &quot;ompi_info --param all all&quot; which I run for  
</span><br>
<span class="quotelev1">&gt; root and for another user and the only differences were at these  
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_component_path
</span><br>
<span class="quotelev1">&gt; mca_param_files
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All 3 params differ because of the $HOME.
</span><br>
<span class="quotelev1">&gt; One more thing: I don't have the directory $HOME/.openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 19, 2010 at 12:51 PM, Andreea Costea &lt;andre.costea_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; Well... I decided to install a fresh OS to be sure that there is no  
</span><br>
<span class="quotelev1">&gt; OpenMPI version conflict. So I formatted one of my VMs, did a fresh  
</span><br>
<span class="quotelev1">&gt; CentOS install, installed BLCR 0.8.2 and OpenMPI 1.4.1 and the  
</span><br>
<span class="quotelev1">&gt; result: the same. mpirun works but ompi-checkpoint has that error at  
</span><br>
<span class="quotelev1">&gt; line 405:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[35906,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at  
</span><br>
<span class="quotelev1">&gt; line 405
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for the files remaining after uninstalling: Jeff you were rigth.  
</span><br>
<span class="quotelev1">&gt; There is no file left, just some empty directories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which might be the problem with that ORTE_ERROR_LOG error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 11:47 PM, Andreea Costea &lt;andre.costea_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; It's almost midnight here, so I left home, but I will try it tomorrow.
</span><br>
<span class="quotelev1">&gt; There were some directories left after &quot;make uninstall&quot;. I will give  
</span><br>
<span class="quotelev1">&gt; more details tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Jeff,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 11:30 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2010, at 8:07 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; - I wanted to update to version 1.4.1 and I uninstalled previous  
</span><br>
<span class="quotelev1">&gt; version like this: make uninstall, and than manually deleted all the  
</span><br>
<span class="quotelev1">&gt; left over files. the directory where I installed was /usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let Josh answer your CR questions, but I did want to ask about  
</span><br>
<span class="quotelev1">&gt; this point.  AFAIK, &quot;make uninstall&quot; removes *all* Open MPI files.   
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [7:25] $ cd /path/to/my/OMPI/tree
</span><br>
<span class="quotelev1">&gt; [7:25] $ make install &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; [7:26] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev1">&gt;    646     646   28082
</span><br>
<span class="quotelev1">&gt; [7:26] $ make uninstall &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; [7:27] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev1">&gt;      0       0       0
</span><br>
<span class="quotelev1">&gt; [7:27] $
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize that some *directories* are left in $prefix, but there  
</span><br>
<span class="quotelev1">&gt; should be no *files* left.  Are you seeing something different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11869.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11867.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>In reply to:</strong> <a href="11861.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11946.php">Jazcek Braden: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
