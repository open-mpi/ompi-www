<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 14:41:52 2009" -->
<!-- isoreceived="20090402184152" -->
<!-- sent="Fri, 03 Apr 2009 02:41:41 +0800" -->
<!-- isosent="20090402184141" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="49D506E5.7000804_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 14:41:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Maybe in reply to:</strong> <a href="8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-------- Original Message --------
<br>
Subject: Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)
<br>
Date: Fri, 03 Apr 2009 02:41:01 +0800
<br>
From: Jerome BENOIT &lt;ml.jgmbenoit_at_[hidden]&gt;
<br>
Reply-To: ml.jgmbenoit_at_[hidden]
<br>
To: Dirk Eddelbuettel &lt;edd_at_[hidden]&gt;
<br>
CC: ml.jgmbenoit_at_[hidden]
<br>
References: &lt;49CE5244.2000607_at_[hidden]&gt;	&lt;CF5D8E90-17CA-4B60-AE85-2BC2EE318AED_at_[hidden]&gt;	&lt;49D4EF88.6060506_at_[hidden]&gt; &lt;18901.114.820349.347227_at_ron.nulle.part&gt;
<br>
<p>Hello List,
<br>
<p>so let me precise:
<br>
<p>I submitted on a SLURM box the attached C source phello.c via sbatch with the attached script phello.sh
<br>
<p>mpicc -o phello phello.c
<br>
sbatch phello.sh
<br>
<p>I have set no MCA parameter, and the firewalls are off, and the kernels (2.6.16) were built with no Security feature.
<br>
<p>I have also attached the error output.
<br>
<p>Thanks in advance,
<br>
Jerome
<br>
<p>Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; On 3 April 2009 at 01:02, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; | Hello List,
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | I am trying to fix the following issue (with firewall off): 
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | [green][[32664,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | I have tried with new kernel without security features, but without success.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Any hint to solve this issue is welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look five lines below where Jeff told you to provide _complete_ information.
</span><br>
<span class="quotelev1">&gt; How are we to guess what you did from a one-line error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dirk 
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; | &gt; Can you supply all the information listed here:
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | &gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | &gt; We need to know exactly how you are invoking mpirun, what MCA parameters 
</span><br>
<span class="quotelev1">&gt; | &gt; have been set, etc.
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | &gt; On Mar 28, 2009, at 12:37 PM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; Hello List,
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; I have just tried the current SVN Debian package:
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; it does not work even without firewall
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; Please find in attachement my test files and the associated outputs.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; hth,
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; Jerome
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; Manuel Prinz wrote:
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; Am Freitag, den 27.03.2009, 20:34 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;&gt; I have just tried the Sid package (1.3-2), but it does not work 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; properly
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;&gt; (when the firewall are off)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; Though this should work, the version in Sid is broken in other 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; respects.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; I do not recommend using it.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;&gt; I have just read that the current stable version for OpenMPI is now 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; 1.3.1:
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;&gt; I will give it a try once it will be packaged in Sid.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; I'm the Open MPI maintainer in Debian and am planning to upload a fixed
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; version soon, possible around middle of next week. (It has to be
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; coordinated with the release team.) There is a working version availble
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; in SVN (try &quot;debcheckout openmpi&quot;). You can either build it yourself or
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; I could build it for you. You can mail me in private if you'd like 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; me to
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; do so. Please not that installing the new version will break other
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; MPI-related Debian packages. I can explain you the details in private
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; mail since I think this is off-topic for the list.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; Best regards
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; Manuel
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; Jerome BENOIT
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; jgmbenoit_at_mailsnare_dot_net
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; // `phello.c' MPI C file
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; //
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; // last major modification 2003/01/05
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; // last minor modification 2009/03/27
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; //
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; // mpicc -o phello phello.c
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; // mpirun -np 5 phello
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; int main(int narg, char *args[]){
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  int rank,size;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;     char ProcessorName[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;     int ProcessorNameLength;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  MPI_Init(&amp;narg,&amp;args);
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;     MPI_Get_processor_name(ProcessorName,&amp;ProcessorNameLength);
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;     sleep(11);
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;     fprintf(stdout,
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;             &quot;Hello world! I am %d of %d and my name is `%s'\n&quot;,
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;         rank,size,
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;         ProcessorName);
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  return 0; }
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; //
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; // End of file `phello.c'.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &lt;phello.sh&gt;[green][[7042,1],6][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; bind() failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [green][[7042,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; bind() failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  Process 1 ([[7042,1],2]) is on host: violet
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  Process 2 ([[7042,1],5]) is on host: green
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  BTLs attempted: self sm tcp
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; environment
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [violet:12941] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [green:13026] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; mpirun has exited due to process rank 2 with PID 12941 on
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; node violet exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [blue:15300] Abort before MPI_INIT completed successfully; not able to 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [indigo:12605] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [red:12874] Abort before MPI_INIT completed successfully; not able to 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [orange:14888] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [yellow:11441] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [orange:14887] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [yellow:11440] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [violet:12932] 8 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [violet:12932] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; [violet:12932] 8 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; /local/benoit
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; /scratch/benoit
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; /local/benoit
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; /local/benoit/FAKEROOT
</span><br>
<span class="quotelev1">&gt; | &gt;&gt;
</span><br>
<span class="quotelev1">&gt; | &gt;&gt; &lt;ATT8008991.txt&gt;
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | &gt; 
</span><br>
<span class="quotelev1">&gt; | _______________________________________________
</span><br>
<span class="quotelev1">&gt; | users mailing list
</span><br>
<span class="quotelev1">&gt; | users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>


<br><p>
[green][[25547,1],6][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
[green][[25547,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[25547,1],12]) is on host: violet
<br>
&nbsp;&nbsp;Process 2 ([[25547,1],5]) is on host: green
<br>
&nbsp;&nbsp;BTLs attempted: self sm tcp
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[indigo:5078] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[indigo:5081] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[blue:5391] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[green:5033] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[yellow:5069] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 5081 on
<br>
node indigo exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[orange:5032] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[orange:5033] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[red:5047] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[indigo:05071] 8 more processes have sent help message help-mca-bml-r2.txt / unreachable proc
<br>
[indigo:05071] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[indigo:05071] 7 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
<p><p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8744/phello.c">phello.c</a>
</ul>
<!-- attachment="phello.c" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8744/phello.sh">phello.sh</a>
</ul>
<!-- attachment="phello.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Maybe in reply to:</strong> <a href="8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
