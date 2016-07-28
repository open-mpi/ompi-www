<?
$subject_val = "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 13:02:06 2009" -->
<!-- isoreceived="20090402170206" -->
<!-- sent="Fri, 03 Apr 2009 01:02:00 +0800" -->
<!-- isosent="20090402170200" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="49D4EF88.6060506_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CF5D8E90-17CA-4B60-AE85-2BC2EE318AED_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 13:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Maybe reply:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello List,
<br>
<p>I am trying to fix the following issue (with firewall off): 
<br>
<p>[green][[32664,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
<p>I have tried with new kernel without security features, but without success.
<br>
<p>Any hint to solve this issue is welcome.
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you supply all the information listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We need to know exactly how you are invoking mpirun, what MCA parameters 
</span><br>
<span class="quotelev1">&gt; have been set, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 28, 2009, at 12:37 PM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have just tried the current SVN Debian package:
</span><br>
<span class="quotelev2">&gt;&gt; it does not work even without firewall
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please find in attachement my test files and the associated outputs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hth,
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Manuel Prinz wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am Freitag, den 27.03.2009, 20:34 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have just tried the Sid package (1.3-2), but it does not work 
</span><br>
<span class="quotelev2">&gt;&gt; properly
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; (when the firewall are off)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Though this should work, the version in Sid is broken in other 
</span><br>
<span class="quotelev2">&gt;&gt; respects.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I do not recommend using it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have just read that the current stable version for OpenMPI is now 
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I will give it a try once it will be packaged in Sid.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm the Open MPI maintainer in Debian and am planning to upload a fixed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; version soon, possible around middle of next week. (It has to be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; coordinated with the release team.) There is a working version availble
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in SVN (try &quot;debcheckout openmpi&quot;). You can either build it yourself or
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I could build it for you. You can mail me in private if you'd like 
</span><br>
<span class="quotelev2">&gt;&gt; me to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; do so. Please not that installing the new version will break other
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI-related Debian packages. I can explain you the details in private
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mail since I think this is off-topic for the list.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Manuel
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jerome BENOIT
</span><br>
<span class="quotelev2">&gt;&gt; jgmbenoit_at_mailsnare_dot_net
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // `phello.c' MPI C file
</span><br>
<span class="quotelev2">&gt;&gt; //
</span><br>
<span class="quotelev2">&gt;&gt; // last major modification 2003/01/05
</span><br>
<span class="quotelev2">&gt;&gt; // last minor modification 2009/03/27
</span><br>
<span class="quotelev2">&gt;&gt; //
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; // mpicc -o phello phello.c
</span><br>
<span class="quotelev2">&gt;&gt; // mpirun -np 5 phello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int narg, char *args[]){
</span><br>
<span class="quotelev2">&gt;&gt;  int rank,size;
</span><br>
<span class="quotelev2">&gt;&gt;     char ProcessorName[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;     int ProcessorNameLength;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;narg,&amp;args);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(ProcessorName,&amp;ProcessorNameLength);
</span><br>
<span class="quotelev2">&gt;&gt;     sleep(11);
</span><br>
<span class="quotelev2">&gt;&gt;     fprintf(stdout,
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;Hello world! I am %d of %d and my name is `%s'\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;         rank,size,
</span><br>
<span class="quotelev2">&gt;&gt;         ProcessorName);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  return 0; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //
</span><br>
<span class="quotelev2">&gt;&gt; // End of file `phello.c'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;phello.sh&gt;[green][[7042,1],6][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] 
</span><br>
<span class="quotelev2">&gt;&gt; bind() failed: Permission denied (13)
</span><br>
<span class="quotelev2">&gt;&gt; [green][[7042,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] 
</span><br>
<span class="quotelev2">&gt;&gt; bind() failed: Permission denied (13)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process 1 ([[7042,1],2]) is on host: violet
</span><br>
<span class="quotelev2">&gt;&gt;  Process 2 ([[7042,1],5]) is on host: green
</span><br>
<span class="quotelev2">&gt;&gt;  BTLs attempted: self sm tcp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [violet:12941] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [green:13026] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 2 with PID 12941 on
</span><br>
<span class="quotelev2">&gt;&gt; node violet exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [blue:15300] Abort before MPI_INIT completed successfully; not able to 
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [indigo:12605] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [red:12874] Abort before MPI_INIT completed successfully; not able to 
</span><br>
<span class="quotelev2">&gt;&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [orange:14888] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; [yellow:11441] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [orange:14887] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [yellow:11440] Abort before MPI_INIT completed successfully; not able 
</span><br>
<span class="quotelev2">&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [violet:12932] 8 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt; [violet:12932] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
</span><br>
<span class="quotelev2">&gt;&gt; see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [violet:12932] 8 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /local/benoit
</span><br>
<span class="quotelev2">&gt;&gt; /scratch/benoit
</span><br>
<span class="quotelev2">&gt;&gt; /local/benoit
</span><br>
<span class="quotelev2">&gt;&gt; /local/benoit/FAKEROOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT8008991.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Maybe reply:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
