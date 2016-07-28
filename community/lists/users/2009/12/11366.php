<?
$subject_val = "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 08:49:34 2009" -->
<!-- isoreceived="20091202134934" -->
<!-- sent="Wed, 2 Dec 2009 08:49:29 -0500" -->
<!-- isosent="20091202134929" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Elementary question on openMPI application location when using PBS submission" -->
<!-- id="A33B3EB6-60E1-4CB2-A00C-FECFB0086A36_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="COL113-W488AC2EFB449E2E1590629F4960_at_phx.gbl" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 08:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11367.php">Jonathan Ferland: "[OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="11322.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The --preload-* options to 'mpirun' currently use the ssh/scp commands (or rsh/rcp via an MCA parameter) to move files from the machine local to the 'mpirun' command to the compute nodes during launch. This assumes that you have Open MPI already installed on all of the machines. It was an option targeted to users that do not wish to have an NFS or similar mount on all machines.
<br>
<p>Torque/PBS may be faster at this depending on how they organize the staging, but I assume that we are essentially doing the same thing. There was a post on the users list a little while back discussing these options a bit more fully.
<br>
<p>-- Josh
<br>
<p>On Dec 1, 2009, at 3:21 PM, Belaid MOA wrote:
<br>
<p><span class="quotelev1">&gt; I saw those options before but somehow I did not pay attention to them :(. 
</span><br>
<span class="quotelev1">&gt; I was thinking that the copying is done automatically, so I felt the options were useless but I was wrong.
</span><br>
<span class="quotelev1">&gt; Thanks a lot Gus; that's exactly what I was looking for. I will try them then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ~Belaid. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 1 Dec 2009 15:14:01 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Elementary question on openMPI application location when using PBS submission
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I spoke too fast, and burnt my tongue.
</span><br>
<span class="quotelev2">&gt; &gt; I should have double checked before speaking out.
</span><br>
<span class="quotelev2">&gt; &gt; I just looked up &quot;man mpiexec&quot; and found the options below.
</span><br>
<span class="quotelev2">&gt; &gt; I never used or knew about them, but you may want to try.
</span><br>
<span class="quotelev2">&gt; &gt; They seem to be similar to the Torque/PBS stage_in feature.
</span><br>
<span class="quotelev2">&gt; &gt; I would guess they use scp to copy the executable and other
</span><br>
<span class="quotelev2">&gt; &gt; files to the nodes, but I don't really know which copying
</span><br>
<span class="quotelev2">&gt; &gt; mechanism is used.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #############################################
</span><br>
<span class="quotelev2">&gt; &gt; Excerpt from (OpenMPI 1.3.2) &quot;man mpiexec&quot;:
</span><br>
<span class="quotelev2">&gt; &gt; #############################################
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --preload-binary
</span><br>
<span class="quotelev2">&gt; &gt; Copy the specified executable(s) to remote machines 
</span><br>
<span class="quotelev2">&gt; &gt; prior to
</span><br>
<span class="quotelev2">&gt; &gt; starting remote processes. The executables will be 
</span><br>
<span class="quotelev2">&gt; &gt; copied to
</span><br>
<span class="quotelev2">&gt; &gt; the Open MPI session directory and will be deleted 
</span><br>
<span class="quotelev2">&gt; &gt; upon com-
</span><br>
<span class="quotelev2">&gt; &gt; pletion of the job.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --preload-files &lt;files&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Preload the comma separated list of files to the 
</span><br>
<span class="quotelev2">&gt; &gt; current
</span><br>
<span class="quotelev2">&gt; &gt; working directory of the remote machines where 
</span><br>
<span class="quotelev2">&gt; &gt; processes will
</span><br>
<span class="quotelev2">&gt; &gt; be launched prior to starting those processes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --preload-files-dest-dir &lt;path&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The destination directory to be used for 
</span><br>
<span class="quotelev2">&gt; &gt; preload-files, if
</span><br>
<span class="quotelev2">&gt; &gt; other than the current working directory. By 
</span><br>
<span class="quotelev2">&gt; &gt; default, the
</span><br>
<span class="quotelev2">&gt; &gt; absolute and relative paths provided by 
</span><br>
<span class="quotelev2">&gt; &gt; --preload-files are
</span><br>
<span class="quotelev2">&gt; &gt; used.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ################################
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Belaid Moa
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thank you very very much Gus. Does this mean that OpenMPI does not 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; copy the executable from the master node to the worker nodes?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Not that I know.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Making the executable available on the nodes, and any
</span><br>
<span class="quotelev3">&gt; &gt; &gt; input files the program may need, is the user's responsibility,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not of mpiexec.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On the other hand,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Torque/PBS has a &quot;stage_in/stage_out&quot; feature that is supposed to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; copy files over to the nodes, if you want to give it a shot.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; See &quot;man qsub&quot; and look into the (numerous) &quot;-W&quot; option under
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the &quot;stage[in,out]=file_list&quot; sub-options.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is a relic from the old days where everything had to be on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; local disks on the nodes, and NFS ran over Ethernet 10/100,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but it is still used by people that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run MPI programs with heavy I/O, to avoid pounding on NFS or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; even on parallel file systems.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried the stage_in/out feature a loooong time ago,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (old PBS before Torque), but it had issues.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It probably works now with the newer/better
</span><br>
<span class="quotelev3">&gt; &gt; &gt; versions of Torque.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, the easy way to get this right is just to use an NFS mounted
</span><br>
<span class="quotelev3">&gt; &gt; &gt; directory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If that's case, I will go ahead and NFS mount my working directory.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This would make your life much easier.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My $0.02.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ~Belaid.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Date: Tue, 1 Dec 2009 13:50:57 -0500
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Subject: Re: [OMPI users] Elementary question on openMPI 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; application location when using PBS submission
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Hi Belaid MOA
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; See this FAQ:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a> 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=tm#tm-obtain-host">http://www.open-mpi.org/faq/?category=tm#tm-obtain-host</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Your executable needs to be on a directory that is accessible
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; by all nodes in your node pool.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; An easy way to achieve this is to put it in a directory that
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; is NFS mounted on all nodes, and launch your pbs script from there.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; A less convenient alternative, if no NFS directory is available,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; is to copy the executable over to the nodes.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I also find it easier to write a PBS script instead of putting
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; all the PBS directives in the command line.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; In this case you can put the lines below in your PBS script,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; to ensure all nodes will be on your work directory (cd 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; $PBS_O_WORKDIR):
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ########
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; #PBS ... (PBS directives)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; mpiexec -n ....
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ########
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; IIRR, by default Torque/PBS puts you in your home directory on
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; the nodes, which may or may not be the location of your executable.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Belaid MOA wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; I am new to this list and I have a very elementary question: 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; suppose we
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; have three machines, HN (Head Node hosting the pbs server), WN1 (A
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; worker node) and WN (another worker node). The PBS nodefile has 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; WN1 and
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; WN2 in it (DOES NOT HAVE HN).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; My openMPI program (hello) and PBS script(my_script.sh) reside on 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; HN. When I submit my PBS script using qsub -l nodes=2 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; my_script.sh, I
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; get the following error:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; mpirun was unable to launch the specified application as it could 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; not
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; find an executable:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; Executable: hello
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; Node: WN2
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; How come my hello program is not copied automatically to the worker
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; nodes? This leads to my elementary question:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; where the application should be when using a PBS submission?
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; Note that when I run mpirun from HN with machinefile containing 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; WN1 and
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; WN2, I get the right output.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; Any help on this is very appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; ~Belaid.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; Windows Live: Keep your friends up to date with what you do online.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; &lt;<a href="http://go.microsoft.com/?linkid=9691810">http://go.microsoft.com/?linkid=9691810</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Windows Live: Make it easier for your friends to see what you&#146;re up to 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; on Facebook. &lt;<a href="http://go.microsoft.com/?linkid=9691811">http://go.microsoft.com/?linkid=9691811</a>&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Get a great deal on Windows 7 and see how it works the way you want. See the Windows 7 offers now._______________________________________________
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
<li><strong>Next message:</strong> <a href="11367.php">Jonathan Ferland: "[OMPI users] ompi-restart using different nodes"</a>
<li><strong>Previous message:</strong> <a href="11365.php">David Singleton: "Re: [OMPI users] exceedingly virtual memory consumption of MPI, environment if higher-setting &quot;ulimit -s&quot;"</a>
<li><strong>In reply to:</strong> <a href="11322.php">Belaid MOA: "Re: [OMPI users] Elementary question on openMPI application location when using PBS submission"</a>
<!-- nextthread="start" -->
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
