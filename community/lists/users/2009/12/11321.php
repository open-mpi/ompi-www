<?
$subject_val = "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 15:22:14 2009" -->
<!-- isoreceived="20091201202214" -->
<!-- sent="Tue, 01 Dec 2009 15:22:04 -0500" -->
<!-- isosent="20091201202204" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Elementary question on openMPI application location when using PBS submission" -->
<!-- id="4B157AEC.2070905_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="COL113-W6C2384E15792CC626B4D4F4960_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Elementary question on openMPI application location when using PBS submission<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 15:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11322.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Previous message:</strong> <a href="11320.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>In reply to:</strong> <a href="11319.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11320.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Belaid Moa
<br>
<p>Belaid MOA wrote:
<br>
<span class="quotelev1">&gt; Thanks a lot Gus for your help. Although I used stage_in/stage_out 
</span><br>
<span class="quotelev1">&gt; features before, I found NFS mounting much better and cleaner.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, unless you have very heavy I/O programs (some computational
<br>
Chemistry and genome programs are like that) there is no point
<br>
on using stage_in/out with local directories/disks.
<br>
You are right, NFS is much easier and cleaner,
<br>
and I can see you are now convinced of that.
<br>
<p>However, see my latest email for a correction of what I mistakenly
<br>
had said on the mpiexec capability to stage in the executable
<br>
and other files.
<br>
The OpenMPI mpiexec *can* stage in the executable and other files.
<br>
<p>Good luck.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><span class="quotelev2">&gt;  &gt; Date: Tue, 1 Dec 2009 14:55:53 -0500
</span><br>
<span class="quotelev2">&gt;  &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subject: Re: [OMPI users] Elementary question on openMPI application 
</span><br>
<span class="quotelev1">&gt; location when using PBS submission
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Belaid Moa
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Thank you very very much Gus. Does this mean that OpenMPI does not 
</span><br>
<span class="quotelev1">&gt; copy
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; the executable from the master node to the worker nodes?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Not that I know.
</span><br>
<span class="quotelev2">&gt;  &gt; Making the executable available on the nodes, and any
</span><br>
<span class="quotelev2">&gt;  &gt; input files the program may need, is the user's responsibility,
</span><br>
<span class="quotelev2">&gt;  &gt; not of mpiexec.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; On the other hand,
</span><br>
<span class="quotelev2">&gt;  &gt; Torque/PBS has a &quot;stage_in/stage_out&quot; feature that is supposed to
</span><br>
<span class="quotelev2">&gt;  &gt; copy files over to the nodes, if you want to give it a shot.
</span><br>
<span class="quotelev2">&gt;  &gt; See &quot;man qsub&quot; and look into the (numerous) &quot;-W&quot; option under
</span><br>
<span class="quotelev2">&gt;  &gt; the &quot;stage[in,out]=file_list&quot; sub-options.
</span><br>
<span class="quotelev2">&gt;  &gt; This is a relic from the old days where everything had to be on
</span><br>
<span class="quotelev2">&gt;  &gt; local disks on the nodes, and NFS ran over Ethernet 10/100,
</span><br>
<span class="quotelev2">&gt;  &gt; but it is still used by people that
</span><br>
<span class="quotelev2">&gt;  &gt; run MPI programs with heavy I/O, to avoid pounding on NFS or
</span><br>
<span class="quotelev2">&gt;  &gt; even on parallel file systems.
</span><br>
<span class="quotelev2">&gt;  &gt; I tried the stage_in/out feature a loooong time ago,
</span><br>
<span class="quotelev2">&gt;  &gt; (old PBS before Torque), but it had issues.
</span><br>
<span class="quotelev2">&gt;  &gt; It probably works now with the newer/better
</span><br>
<span class="quotelev2">&gt;  &gt; versions of Torque.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; However, the easy way to get this right is just to use an NFS mounted
</span><br>
<span class="quotelev2">&gt;  &gt; directory.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; If that's case, I will go ahead and NFS mount my working directory.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; This would make your life much easier.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; My $0.02.
</span><br>
<span class="quotelev2">&gt;  &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;  &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;  &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;  &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Date: Tue, 1 Dec 2009 13:50:57 -0500
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Subject: Re: [OMPI users] Elementary question on openMPI application
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; location when using PBS submission
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Hi Belaid MOA
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; See this FAQ:
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tm#tm-obtain-host">http://www.open-mpi.org/faq/?category=tm#tm-obtain-host</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Your executable needs to be on a directory that is accessible
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; by all nodes in your node pool.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; An easy way to achieve this is to put it in a directory that
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; is NFS mounted on all nodes, and launch your pbs script from there.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; A less convenient alternative, if no NFS directory is available,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; is to copy the executable over to the nodes.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; I also find it easier to write a PBS script instead of putting
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; all the PBS directives in the command line.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; In this case you can put the lines below in your PBS script,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; to ensure all nodes will be on your work directory (cd 
</span><br>
<span class="quotelev1">&gt; $PBS_O_WORKDIR):
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ########
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; #PBS ... (PBS directives)
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; mpiexec -n ....
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ########
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; IIRR, by default Torque/PBS puts you in your home directory on
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; the nodes, which may or may not be the location of your executable.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; I am new to this list and I have a very elementary question:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; suppose we
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; have three machines, HN (Head Node hosting the pbs server), WN1 (A
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; worker node) and WN (another worker node). The PBS nodefile has 
</span><br>
<span class="quotelev1">&gt; WN1
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; and
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; WN2 in it (DOES NOT HAVE HN).
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; My openMPI program (hello) and PBS script(my_script.sh) reside 
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; HN. When I submit my PBS script using qsub -l nodes=2 
</span><br>
<span class="quotelev1">&gt; my_script.sh, I
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; get the following error:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; mpirun was unable to launch the specified application as it 
</span><br>
<span class="quotelev1">&gt; could not
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; find an executable:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Executable: hello
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Node: WN2
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; How come my hello program is not copied automatically to the worker
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; nodes? This leads to my elementary question:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; where the application should be when using a PBS submission?
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Note that when I run mpirun from HN with machinefile containing 
</span><br>
<span class="quotelev1">&gt; WN1
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; and
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; WN2, I get the right output.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Any help on this is very appreciated.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; Windows Live: Keep your friends up to date with what you do online.
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;  &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Windows Live: Make it easier for your friends to see what you&#146;re up to
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; on Facebook. &lt;<a href="http://go.microsoft.com/?linkid=9691811">http://go.microsoft.com/?linkid=9691811</a>&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Windows Live: Keep your friends up to date with what you do online. 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11322.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>Previous message:</strong> <a href="11320.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<li><strong>In reply to:</strong> <a href="11319.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11320.php">Gus Correa: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
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
