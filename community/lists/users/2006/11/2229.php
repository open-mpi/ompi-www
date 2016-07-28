<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 26 11:09:05 2006" -->
<!-- isoreceived="20061126160905" -->
<!-- sent="Sun, 26 Nov 2006 09:08:52 -0700" -->
<!-- isosent="20061126160852" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myirnet problems on OSX" -->
<!-- id="8BFB6F2D-AE4C-48A2-A48E-D3527E42F0BC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47EF6A6C-F835-40FE-8EAD-2D3FA23A1BDD_at_myri.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-26 11:08:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2228.php">bremner_at_[hidden]: "[OMPI users] Myrinet/GM can't find any NICs"</a>
<li><strong>In reply to:</strong> <a href="2201.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would suggest trying Open MPI 1.2b1 and PML CM. You can select PML  
<br>
CM at runtime via:
<br>
<p>mpirun -mca pml cm
<br>
<p>Have you tried this?
<br>
<p>- Galen
<br>
<p><p><p>On Nov 21, 2006, at 12:28 PM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 21, 2006, at 1:27 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had sent a message two weeks ago about this problem and talked with
</span><br>
<span class="quotelev2">&gt;&gt; jeff at SC06 about how it might not be a OMPI problem.  But it
</span><br>
<span class="quotelev2">&gt;&gt; appears now working with myricom that it is a problem in both
</span><br>
<span class="quotelev2">&gt;&gt; lam-7.1.2 and openmpi-1.1.2/1.1.1.   Basically the results from a HPL
</span><br>
<span class="quotelev2">&gt;&gt; run are wrong,  Also causes a large number of packets to be dropped
</span><br>
<span class="quotelev2">&gt;&gt; by the fabric.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem does not happen when using mpichgm.  The number of
</span><br>
<span class="quotelev2">&gt;&gt; dropped packets does not go up.  There is a ticket open with myircom
</span><br>
<span class="quotelev2">&gt;&gt; on this.  They are a member of the group working on OMPI but i sent
</span><br>
<span class="quotelev2">&gt;&gt; this out just to bring the list uptodate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have any questions feel free to ask me.  The details are in
</span><br>
<span class="quotelev2">&gt;&gt; the archive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking into this at Myricom.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, I have compiled OMPI version 1.2b1 using the --with-gm=/path/
</span><br>
<span class="quotelev1">&gt; to/gm flag. I have compiled HPCC (contains HPL) using OMPI's mpicc.
</span><br>
<span class="quotelev1">&gt; Trying to run hpcc fails with &quot;Myrinet/GM on host fog33 was unable to
</span><br>
<span class="quotelev1">&gt; find any NICs&quot;. See mpirun output below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run gm_board_info and it finds two NICs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run ompi_info and it has the gm btl (see ompi_info below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried using the --prefix flag to mpirun as well as setting
</span><br>
<span class="quotelev1">&gt; PATH and LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ompi_info -param btl gm
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug
</span><br>
<span class="quotelev1">&gt;                            is output
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the btl framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt;                            means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the btl framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_mpool&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;gm&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_max_ports&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_max_boards&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_max_modules&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_gm_num_high_priority&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_num_repost&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_port_name&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;OMPI&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_min_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_min_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;524288&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_max_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;50&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;250&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_gm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain NICs
</span><br>
<span class="quotelev1">&gt;                            are not used
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
<span class="quotelev1">&gt; % mpirun --prefix $OMPI -np 4 --host fog33,fog33,fog34,fog34 -mca btl
</span><br>
<span class="quotelev1">&gt; self,sm,gm ./hpcc
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [0,1,1]: Myrinet/GM on host fog33 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [0,1,0]: Myrinet/GM on host fog33 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
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
<span class="quotelev1">&gt;    PML add procs failed
</span><br>
<span class="quotelev1">&gt;    --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ls -l $OMPI
</span><br>
<span class="quotelev1">&gt; total 1
</span><br>
<span class="quotelev1">&gt; drwx------  2 atchley softies 496 Nov 21 13:01 bin
</span><br>
<span class="quotelev1">&gt; drwx------  2 atchley softies 168 Nov 21 13:01 etc
</span><br>
<span class="quotelev1">&gt; drwx------  3 atchley softies 184 Nov 21 13:01 include
</span><br>
<span class="quotelev1">&gt; drwx------  3 atchley softies 896 Nov 21 13:01 lib
</span><br>
<span class="quotelev1">&gt; drwx------  4 atchley softies  96 Nov 21 13:01 man
</span><br>
<span class="quotelev1">&gt; drwx------  3 atchley softies  72 Nov 21 13:00 share
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ls -l $OMPI/bin
</span><br>
<span class="quotelev1">&gt; total 340
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpiCC -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpic++ -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpicc -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpicxx -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies      7 Nov 21 13:01 mpiexec -&gt; orterun
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpif77 -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpif90 -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies      7 Nov 21 13:01 mpirun -&gt; orterun
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 138416 Nov 21 13:01 ompi_info
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalCC -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies  24119 Nov 21 13:00 opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalc++ -&gt;
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalcc -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 orteCC -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 ortec++ -&gt;
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 ortecc -&gt;  
</span><br>
<span class="quotelev1">&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies  26536 Nov 21 13:01 orted
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 154770 Nov 21 13:01 orterun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ls -l $OMPI/lib
</span><br>
<span class="quotelev1">&gt; total 1741
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies   1045 Nov 21 13:01 libmca_common_sm.la
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     25 Nov 21 13:01 libmca_common_sm.so
</span><br>
<span class="quotelev1">&gt; -&gt; libmca_common_sm.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     25 Nov 21 13:01 libmca_common_sm.so.
</span><br>
<span class="quotelev1">&gt; 0 -&gt; libmca_common_sm.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies  10074 Nov 21 13:01 libmca_common_sm.so.
</span><br>
<span class="quotelev1">&gt; 0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies   1100 Nov 21 13:01 libmpi.la
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     15 Nov 21 13:01 libmpi.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     15 Nov 21 13:01 libmpi.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 640672 Nov 21 13:01 libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies   1005 Nov 21 13:01 libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_cxx.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 142062 Nov 21 13:01 libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies   1009 Nov 21 13:01 libmpi_f77.la
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_f77.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 283394 Nov 21 13:01 libmpi_f77.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies    996 Nov 21 13:00 libopal.la
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 libopal.so -&gt;
</span><br>
<span class="quotelev1">&gt; libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 libopal.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 285769 Nov 21 13:00 libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies   1051 Nov 21 13:00 liborte.la
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 liborte.so -&gt;
</span><br>
<span class="quotelev1">&gt; liborte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 liborte.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt; liborte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x  1 atchley softies 380223 Nov 21 13:00 liborte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; drwx------  2 atchley softies   4160 Nov 21 13:01 openmpi
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
<li><strong>Next message:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Previous message:</strong> <a href="2228.php">bremner_at_[hidden]: "[OMPI users] Myrinet/GM can't find any NICs"</a>
<li><strong>In reply to:</strong> <a href="2201.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2230.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
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
