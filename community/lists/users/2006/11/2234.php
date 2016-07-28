<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 27 15:25:37 2006" -->
<!-- isoreceived="20061127202537" -->
<!-- sent="Mon, 27 Nov 2006 15:25:30 -0500" -->
<!-- isosent="20061127202530" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myirnet problems on OSX" -->
<!-- id="EDCA41FF-C157-45D0-B8E0-65D6EEDA5259_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CD507631-A5EC-4A43-BC3D-09D0F4F9A20D_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-27 15:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2235.php">Tony Ladd: "[OMPI users] Parallel application performance tests"</a>
<li><strong>Previous message:</strong> <a href="2233.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2248.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 27, 2006, at 10:56 AM, Galen Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Note that MX is supported as both a BTL and an MTL, I would recommend
</span><br>
<span class="quotelev1">&gt; using the MX MTL as the performance is much better. If you are using
</span><br>
<span class="quotelev1">&gt; GM you can only use OB1 or DR, I would recommend OB1 as DR is only
</span><br>
<span class="quotelev1">&gt; available in the trunk and is in development.
</span><br>
<p>In fact it depend on what you're looking for. If your algorithm is  
<br>
latency bounded then using the MTL is the right choice. If what  
<br>
you're looking at is bandwidth or if the MPI data-type used are not  
<br>
contiguous then using the MX BTL will give you better performances.  
<br>
Reading the 3 papers about the message layer in Open MPI might give  
<br>
you a better understanding on how everything works inside.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To choose a specific PML at runtime use the MCA parameter facilities,
</span><br>
<span class="quotelev1">&gt; for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -mca pml cm ./mpi-ping
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
<span class="quotelev1">&gt; On Nov 27, 2006, at 7:48 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, im not finding much good information on what 'pml'  is.  Or
</span><br>
<span class="quotelev2">&gt;&gt; what ones are available what one is used by default,  or how to
</span><br>
<span class="quotelev2">&gt;&gt; switch between them.  Is there a paper someplace that describes this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 26, 2006, at 11:10 AM, Galen Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, just noticed you are using GM, PML CM is only available for MX..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sorry..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 26, 2006, at 9:08 AM, Galen Shipman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would suggest trying Open MPI 1.2b1 and PML CM. You can select
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PML CM at runtime via:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -mca pml cm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you tried this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Galen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 21, 2006, at 12:28 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 21, 2006, at 1:27 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I had sent a message two weeks ago about this problem and talked
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jeff at SC06 about how it might not be a OMPI problem.  But it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; appears now working with myricom that it is a problem in both
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lam-7.1.2 and openmpi-1.1.2/1.1.1.   Basically the results from a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HPL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run are wrong,  Also causes a large number of packets to be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dropped
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; by the fabric.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This problem does not happen when using mpichgm.  The number of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dropped packets does not go up.  There is a ticket open with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; myircom
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on this.  They are a member of the group working on OMPI but i
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sent
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this out just to bring the list uptodate.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you have any questions feel free to ask me.  The details  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the archive.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am looking into this at Myricom.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So far, I have compiled OMPI version 1.2b1 using the --with-gm=/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; path/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to/gm flag. I have compiled HPCC (contains HPL) using OMPI's  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Trying to run hpcc fails with &quot;Myrinet/GM on host fog33 was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; find any NICs&quot;. See mpirun output below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I run gm_board_info and it finds two NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I run ompi_info and it has the gm btl (see ompi_info below).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have tried using the --prefix flag to mpirun as well as setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH and LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What am I missing?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; % ompi_info -param btl gm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_base_debug&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            If btl_base_debug is 1 standard  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debug is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output, if &gt; 1 verbose debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            is output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the btl framework (&lt;none&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            Verbosity level for the btl framework
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (0 =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_debug&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_mpool&quot; (current  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;gm&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_max_ports&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_max_boards&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_max_modules&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_num_high_priority&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_num_repost&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_port_name&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;OMPI&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_min_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_min_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;524288&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_gm_max_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_flags&quot; (current  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;50&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;250&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter &quot;btl_gm_priority&quot; (current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   MCA btl: parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            This parameter is used to turn on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; warning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages when certain NICs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                            are not used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; % mpirun --prefix $OMPI -np 4 --host fog33,fog33,fog34,fog34 -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; self,sm,gm ./hpcc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,1]: Myrinet/GM on host fog33 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; result in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0,1,0]: Myrinet/GM on host fog33 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another transport will be used instead, although this may  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; result in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PML add procs failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; % ls -l $OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; total 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  2 atchley softies 496 Nov 21 13:01 bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  2 atchley softies 168 Nov 21 13:01 etc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  3 atchley softies 184 Nov 21 13:01 include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  3 atchley softies 896 Nov 21 13:01 lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  4 atchley softies  96 Nov 21 13:01 man
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  3 atchley softies  72 Nov 21 13:00 share
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; % ls -l $OMPI/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; total 340
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpiCC -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpic++ -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpicc -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpicxx -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies      7 Nov 21 13:01 mpiexec -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpif77 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpif90 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies      7 Nov 21 13:01 mpirun -&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 138416 Nov 21 13:01 ompi_info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalCC -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies  24119 Nov 21 13:00 opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalc++ -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalcc -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 orteCC -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 ortec++ -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 ortecc -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies  26536 Nov 21 13:01 orted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 154770 Nov 21 13:01 orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; % ls -l $OMPI/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; total 1741
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies   1045 Nov 21 13:01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmca_common_sm.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     25 Nov 21 13:01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -&gt; libmca_common_sm.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     25 Nov 21 13:01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 -&gt; libmca_common_sm.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies  10074 Nov 21 13:01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmca_common_sm.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies   1100 Nov 21 13:01 libmpi.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     15 Nov 21 13:01 libmpi.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     15 Nov 21 13:01 libmpi.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 640672 Nov 21 13:01 libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies   1005 Nov 21 13:01 libmpi_cxx.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_cxx.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_cxx.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 142062 Nov 21 13:01 libmpi_cxx.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies   1009 Nov 21 13:01 libmpi_f77.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_f77.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_f77.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libmpi_f77.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 283394 Nov 21 13:01 libmpi_f77.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies    996 Nov 21 13:00 libopal.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 libopal.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 libopal.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 285769 Nov 21 13:00 libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies   1051 Nov 21 13:00 liborte.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 liborte.so -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; liborte.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 liborte.so.0 -&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; liborte.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rwxr-xr-x  1 atchley softies 380223 Nov 21 13:00 liborte.so.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; drwx------  2 atchley softies   4160 Nov 21 13:01 openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2235.php">Tony Ladd: "[OMPI users] Parallel application performance tests"</a>
<li><strong>Previous message:</strong> <a href="2233.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2248.php">Scott Atchley: "Re: [OMPI users] myirnet problems on OSX"</a>
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
