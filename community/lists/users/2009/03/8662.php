<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:29:18 2009" -->
<!-- isoreceived="20090331012918" -->
<!-- sent="Mon, 30 Mar 2009 21:29:10 -0400" -->
<!-- isosent="20090331012910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble" -->
<!-- id="CF5D8E90-17CA-4B60-AE85-2BC2EE318AED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CE5244.2000607_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 21:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8661.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="8626.php">Jerome BENOIT: "[OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Reply:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you supply all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>We need to know exactly how you are invoking mpirun, what MCA  
<br>
parameters have been set, etc.
<br>
<p><p>On Mar 28, 2009, at 12:37 PM, Jerome BENOIT wrote:
<br>
<p><span class="quotelev1">&gt; Hello List,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just tried the current SVN Debian package:
</span><br>
<span class="quotelev1">&gt; it does not work even without firewall
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find in attachement my test files and the associated outputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hth,
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Manuel Prinz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Am Freitag, den 27.03.2009, 20:34 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have just tried the Sid package (1.3-2), but it does not work  
</span><br>
<span class="quotelev1">&gt; properly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (when the firewall are off)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Though this should work, the version in Sid is broken in other  
</span><br>
<span class="quotelev1">&gt; respects.
</span><br>
<span class="quotelev2">&gt; &gt; I do not recommend using it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have just read that the current stable version for OpenMPI is  
</span><br>
<span class="quotelev1">&gt; now 1.3.1:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I will give it a try once it will be packaged in Sid.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm the Open MPI maintainer in Debian and am planning to upload a  
</span><br>
<span class="quotelev1">&gt; fixed
</span><br>
<span class="quotelev2">&gt; &gt; version soon, possible around middle of next week. (It has to be
</span><br>
<span class="quotelev2">&gt; &gt; coordinated with the release team.) There is a working version  
</span><br>
<span class="quotelev1">&gt; availble
</span><br>
<span class="quotelev2">&gt; &gt; in SVN (try &quot;debcheckout openmpi&quot;). You can either build it  
</span><br>
<span class="quotelev1">&gt; yourself or
</span><br>
<span class="quotelev2">&gt; &gt; I could build it for you. You can mail me in private if you'd like  
</span><br>
<span class="quotelev1">&gt; me to
</span><br>
<span class="quotelev2">&gt; &gt; do so. Please not that installing the new version will break other
</span><br>
<span class="quotelev2">&gt; &gt; MPI-related Debian packages. I can explain you the details in  
</span><br>
<span class="quotelev1">&gt; private
</span><br>
<span class="quotelev2">&gt; &gt; mail since I think this is off-topic for the list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards
</span><br>
<span class="quotelev2">&gt; &gt; Manuel
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jerome BENOIT
</span><br>
<span class="quotelev1">&gt; jgmbenoit_at_mailsnare_dot_net
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // `phello.c' MPI C file
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; // last major modification 2003/01/05
</span><br>
<span class="quotelev1">&gt; // last minor modification 2009/03/27
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // mpicc -o phello phello.c
</span><br>
<span class="quotelev1">&gt; // mpirun -np 5 phello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int narg, char *args[]){
</span><br>
<span class="quotelev1">&gt;  int rank,size;
</span><br>
<span class="quotelev1">&gt; 	char ProcessorName[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; 	int ProcessorNameLength;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;narg,&amp;args);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	MPI_Get_processor_name(ProcessorName,&amp;ProcessorNameLength);
</span><br>
<span class="quotelev1">&gt; 	sleep(11);
</span><br>
<span class="quotelev1">&gt; 	fprintf(stdout,
</span><br>
<span class="quotelev1">&gt; 			&quot;Hello world! I am %d of %d and my name is `%s'\n&quot;,
</span><br>
<span class="quotelev1">&gt; 		rank,size,
</span><br>
<span class="quotelev1">&gt; 		ProcessorName);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  return 0; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; // End of file `phello.c'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;phello.sh&gt;[green][[7042,1],6][../../../../../../ompi/mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind()  
</span><br>
<span class="quotelev1">&gt; failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; [green][[7042,1],5][../../../../../../ompi/mca/btl/tcp/ 
</span><br>
<span class="quotelev1">&gt; btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind()  
</span><br>
<span class="quotelev1">&gt; failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Process 1 ([[7042,1],2]) is on host: violet
</span><br>
<span class="quotelev1">&gt;  Process 2 ([[7042,1],5]) is on host: green
</span><br>
<span class="quotelev1">&gt;  BTLs attempted: self sm tcp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [violet:12941] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [green:13026] Abort before MPI_INIT completed successfully; not able  
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 12941 on
</span><br>
<span class="quotelev1">&gt; node violet exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [blue:15300] Abort before MPI_INIT completed successfully; not able  
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [indigo:12605] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [red:12874] Abort before MPI_INIT completed successfully; not able  
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [orange:14888] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; [yellow:11441] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [orange:14887] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [yellow:11440] Abort before MPI_INIT completed successfully; not  
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [violet:12932] 8 more processes have sent help message help-mca-bml- 
</span><br>
<span class="quotelev1">&gt; r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; [violet:12932] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to  
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt; [violet:12932] 8 more processes have sent help message help-mpi- 
</span><br>
<span class="quotelev1">&gt; runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /local/benoit
</span><br>
<span class="quotelev1">&gt; /scratch/benoit
</span><br>
<span class="quotelev1">&gt; /local/benoit
</span><br>
<span class="quotelev1">&gt; /local/benoit/FAKEROOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT8008991.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>Previous message:</strong> <a href="8661.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="8626.php">Jerome BENOIT: "[OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Reply:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
