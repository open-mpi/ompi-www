<?
$subject_val = "Re: [OMPI users] MXM problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 12:04:32 2015" -->
<!-- isoreceived="20150525160432" -->
<!-- sent="Mon, 25 May 2015 09:04:24 -0700" -->
<!-- isosent="20150525160424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MXM problem" -->
<!-- id="067FA377-C224-46DF-9625-AF339680C8A3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1432569345.557415000_at_f173.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] MXM problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 12:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26922.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>Previous message:</strong> <a href="26920.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="26919.php">Timur Ismagilov: "[OMPI users] MXM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26922.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>Reply:</strong> <a href="26922.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can&#226;&#128;&#153;t speak to the mxm problem, but the no-tree-spawn issue indicates that you don&#226;&#128;&#153;t have password-less ssh authorized between the compute nodes
<br>
<p><p><span class="quotelev1">&gt; On May 25, 2015, at 8:55 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use ompi-v1.8.4 from hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2;
</span><br>
<span class="quotelev1">&gt; OFED-1.5.4.1;
</span><br>
<span class="quotelev1">&gt; CentOS release 6.2;
</span><br>
<span class="quotelev1">&gt; infiniband 4x FDR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two problems:
</span><br>
<span class="quotelev1">&gt; 1. I can not use mxm:
</span><br>
<span class="quotelev1">&gt; 1.a) $mpirun --mca pml cm --mca mtl mxm -host node5,node14,node28,node29 -mca plm_rsh_no_tree_spawn 1 -np 4 ./hello 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This                                   
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be                                     
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries                                    
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that                                   
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.                                   
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; Host:      node14                                                                                        
</span><br>
<span class="quotelev1">&gt; Framework: pml                                                                                           
</span><br>
<span class="quotelev1">&gt; Component: yalla                                                                                         
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init                                                                        
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is                                  
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can                                     
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment                              
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some                                   
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI                                        
</span><br>
<span class="quotelev1">&gt; developer):                                                                                              
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt;   mca_pml_base_open() failed                                                                             
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)                                                
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator                                                                               
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)                                                                     
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init                                                                        
</span><br>
<span class="quotelev1">&gt; [node28:102377] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,
</span><br>
<span class="quotelev1">&gt;  and not able to guarantee that all other processes were killed!                                         
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator                                                                               
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)                                                                     
</span><br>
<span class="quotelev1">&gt; [node29:105600] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,
</span><br>
<span class="quotelev1">&gt;  and not able to guarantee that all other processes were killed!                                         
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init                                                                        
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator                                                                               
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)                                                                     
</span><br>
<span class="quotelev1">&gt; [node5:102409] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, 
</span><br>
<span class="quotelev1">&gt; and not able to guarantee that all other processes were killed!                                          
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init                                                                        
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator                                                                               
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)                                                                     
</span><br>
<span class="quotelev1">&gt; [node14:85284] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, 
</span><br>
<span class="quotelev1">&gt; and not able to guarantee that all other processes were killed!                                          
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------                                                  
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned                                                 
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.                                     
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------                                                  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing                     
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:                                                
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt;   Process name: [[9372,1],2]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1                                                                                        
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; [login:08295] 3 more processes have sent help message help-mca-base.txt / find-available:not-valid       
</span><br>
<span class="quotelev1">&gt; [login:08295] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages         
</span><br>
<span class="quotelev1">&gt; [login:08295] 3 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failur
</span><br>
<span class="quotelev1">&gt; e                                                                                                        
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.b $mpirun --mca pml yalla -host node5,node14,node28,node29 -mca plm_rsh_no_tree_spawn 1 -np 4 ./hello 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                              
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This                                  
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be                                    
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries                                   
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that                                  
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.                                  
</span><br>
<span class="quotelev1">&gt;                                                                                                         
</span><br>
<span class="quotelev1">&gt; Host:      node5                                                                                        
</span><br>
<span class="quotelev1">&gt; Framework: pml                                                                                          
</span><br>
<span class="quotelev1">&gt; Component: yalla                                                                                        
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                              
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init                                                                       
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator                                                                              
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)                                                                    
</span><br>
<span class="quotelev1">&gt; [node5:102449] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,
</span><br>
<span class="quotelev1">&gt; and not able to guarantee that all other processes were killed!                                         
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                              
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is                                 
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can                                    
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment                             
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some                                  
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI                                       
</span><br>
<span class="quotelev1">&gt; developer):                                                                                             
</span><br>
<span class="quotelev1">&gt;                                                                                                         
</span><br>
<span class="quotelev1">&gt;   mca_pml_base_open() failed                                                                            
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)                                               
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                              
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------                                                 
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned                                                
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.                                    
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------                                                 
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init                                                                       
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator                                                                              
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)                                                                    
</span><br>
<span class="quotelev1">&gt; [node14:85325] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,
</span><br>
<span class="quotelev1">&gt; and not able to guarantee that all other processes were killed!                                         
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                              
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing                    
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:                                               
</span><br>
<span class="quotelev1">&gt;                                                                                                         
</span><br>
<span class="quotelev1">&gt;   Process name: [[9619,1],0]                                                                            
</span><br>
<span class="quotelev1">&gt;   Exit code:    1                                                                                       
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                              
</span><br>
<span class="quotelev1">&gt; [login:08552] 1 more process has sent help message help-mca-base.txt / find-available:not-valid         
</span><br>
<span class="quotelev1">&gt; [login:08552] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages        
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I can not remove -mca plm_rsh_no_tree_spawn 1 from mpirun cmd line:
</span><br>
<span class="quotelev1">&gt; $mpirun -host node5,node14,node28,node29 -np 4 ./hello
</span><br>
<span class="quotelev1">&gt; sh: -c: line 0: syntax error near unexpected token `--tree-spawn'                                        
</span><br>
<span class="quotelev1">&gt; sh: -c: line 0: `( test ! -r ./.profile || . ./.profile; OPAL_PREFIX=/gpfs/NETHOME/oivt1/nicevt/itf/sourc
</span><br>
<span class="quotelev1">&gt; es/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8 ; export OPAL_PREFIX; PATH=/gpfs/NETHOME/o
</span><br>
<span class="quotelev1">&gt; ivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8/bin:$PATH ; export PA
</span><br>
<span class="quotelev1">&gt; TH ; LD_LIBRARY_PATH=/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi
</span><br>
<span class="quotelev1">&gt; -mellanox-v1.8/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD_LIBRARY_PATH=/gpfs/NETHOME/oivt1/nice
</span><br>
<span class="quotelev1">&gt; vt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8/lib:$DYLD_LIBRARY_PATH ; expor
</span><br>
<span class="quotelev1">&gt; t DYLD_LIBRARY_PATH ;   /gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/o
</span><br>
<span class="quotelev1">&gt; mpi-mellanox-v1.8/bin/orted --hnp-topo-sig 2N:2S:2L3:16L2:16L1:16C:32H:x86_64 -mca ess &quot;env&quot; -mca orte_es
</span><br>
<span class="quotelev1">&gt; s_jobid &quot;625606656&quot; -mca orte_ess_vpid 3 -mca orte_ess_num_procs &quot;5&quot; -mca orte_parent_uri &quot;625606656.1;tc
</span><br>
<span class="quotelev1">&gt; p://10.65.0.105,10.64.0.105,10.67.0.105:56862&quot; -mca orte_hnp_uri &quot;625606656.0;tcp://10.65.0.2,10.67.0.2,8
</span><br>
<span class="quotelev1">&gt; 3.149.214.101,10.64.0.2:54893&quot; --mca pml &quot;yalla&quot; -mca plm_rsh_no_tree_spawn &quot;0&quot; -mca plm &quot;rsh&quot; ) --tree-s
</span><br>
<span class="quotelev1">&gt; pawn'                                                                                                    
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.                                                   
</span><br>
<span class="quotelev1">&gt; This usually is caused by:                                                                               
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on                                                  
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH                                          
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default                                    
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.                                           
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.                                                         
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).                            
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.                             
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required                              
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using                               
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.                                          
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a                                            
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between                                        
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls                                           
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).                                                                     
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------                               
</span><br>
<span class="quotelev1">&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate                          
</span><br>
<span class="quotelev1">&gt;                                                                                                          
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your comments.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Timur.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26919.php">http://www.open-mpi.org/community/lists/users/2015/05/26919.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26922.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>Previous message:</strong> <a href="26920.php">Ralph Castain: "Re: [OMPI users] Default value of btl_openib_memalign_threshold"</a>
<li><strong>In reply to:</strong> <a href="26919.php">Timur Ismagilov: "[OMPI users] MXM problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26922.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>Reply:</strong> <a href="26922.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
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
