<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 21 14:28:59 2006" -->
<!-- isoreceived="20061121192859" -->
<!-- sent="Tue, 21 Nov 2006 14:28:53 -0500" -->
<!-- isosent="20061121192853" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] myirnet problems on OSX" -->
<!-- id="47EF6A6C-F835-40FE-8EAD-2D3FA23A1BDD_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0DDDAB2-F940-4BE2-987F-EE1A9819FCE1_at_umich.edu" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-21 14:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2202.php">Greg Wolffe: "[OMPI users] Hostfile parse error"</a>
<li><strong>Previous message:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2229.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 21, 2006, at 1:27 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; I had sent a message two weeks ago about this problem and talked with
</span><br>
<span class="quotelev1">&gt; jeff at SC06 about how it might not be a OMPI problem.  But it
</span><br>
<span class="quotelev1">&gt; appears now working with myricom that it is a problem in both
</span><br>
<span class="quotelev1">&gt; lam-7.1.2 and openmpi-1.1.2/1.1.1.   Basically the results from a HPL
</span><br>
<span class="quotelev1">&gt; run are wrong,  Also causes a large number of packets to be dropped
</span><br>
<span class="quotelev1">&gt; by the fabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem does not happen when using mpichgm.  The number of
</span><br>
<span class="quotelev1">&gt; dropped packets does not go up.  There is a ticket open with myircom
</span><br>
<span class="quotelev1">&gt; on this.  They are a member of the group working on OMPI but i sent
</span><br>
<span class="quotelev1">&gt; this out just to bring the list uptodate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have any questions feel free to ask me.  The details are in
</span><br>
<span class="quotelev1">&gt; the archive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<p>Hi all,
<br>
<p>I am looking into this at Myricom.
<br>
<p>So far, I have compiled OMPI version 1.2b1 using the --with-gm=/path/ 
<br>
to/gm flag. I have compiled HPCC (contains HPL) using OMPI's mpicc.  
<br>
Trying to run hpcc fails with &quot;Myrinet/GM on host fog33 was unable to  
<br>
find any NICs&quot;. See mpirun output below.
<br>
<p>I run gm_board_info and it finds two NICs.
<br>
<p>I run ompi_info and it has the gm btl (see ompi_info below).
<br>
<p>I have tried using the --prefix flag to mpirun as well as setting  
<br>
PATH and LD_LIBRARY_PATH.
<br>
<p>What am I missing?
<br>
<p>Scott
<br>
<p><p>% ompi_info -param btl gm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_base_debug&quot; (current value:  
<br>
&quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If btl_base_debug is 1 standard debug is  
<br>
output, if &gt; 1 verbose debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for  
<br>
the btl framework (&lt;none&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;means &quot;use all components that can be found&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_base_verbose&quot; (current  
<br>
value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the btl framework (0 =  
<br>
no verbosity)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_free_list_num&quot; (current  
<br>
value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_free_list_max&quot; (current  
<br>
value: &quot;-1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_free_list_inc&quot; (current  
<br>
value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_debug&quot; (current value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_mpool&quot; (current value:  
<br>
&quot;gm&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_ports&quot; (current  
<br>
value: &quot;16&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_boards&quot; (current  
<br>
value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_modules&quot; (current  
<br>
value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter  
<br>
&quot;btl_gm_num_high_priority&quot; (current value: &quot;8&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_num_repost&quot; (current  
<br>
value: &quot;4&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_port_name&quot; (current  
<br>
value: &quot;OMPI&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_exclusivity&quot; (current  
<br>
value: &quot;1024&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_eager_limit&quot; (current  
<br>
value: &quot;32768&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_min_send_size&quot; (current  
<br>
value: &quot;32768&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_send_size&quot; (current  
<br>
value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_min_rdma_size&quot; (current  
<br>
value: &quot;524288&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_max_rdma_size&quot; (current  
<br>
value: &quot;131072&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_flags&quot; (current value:  
<br>
&quot;50&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_bandwidth&quot; (current  
<br>
value: &quot;250&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_gm_priority&quot; (current  
<br>
value: &quot;0&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter  
<br>
&quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This parameter is used to turn on warning  
<br>
messages when certain NICs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are not used
<br>
<p><p><p><p><p>% mpirun --prefix $OMPI -np 4 --host fog33,fog33,fog34,fog34 -mca btl  
<br>
self,sm,gm ./hpcc
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
[0,1,1]: Myrinet/GM on host fog33 was unable to find any NICs.
Another transport will be used instead, although this may result in
lower performance.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
[0,1,0]: Myrinet/GM on host fog33 was unable to find any NICs.
Another transport will be used instead, although this may result in
lower performance.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
Process 0.1.3 is unable to reach 0.1.0 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of
usable components.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of
usable components.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or  
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
   PML add procs failed
   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------ 
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
% ls -l $OMPI
total 1
drwx------  2 atchley softies 496 Nov 21 13:01 bin
drwx------  2 atchley softies 168 Nov 21 13:01 etc
drwx------  3 atchley softies 184 Nov 21 13:01 include
drwx------  3 atchley softies 896 Nov 21 13:01 lib
drwx------  4 atchley softies  96 Nov 21 13:01 man
drwx------  3 atchley softies  72 Nov 21 13:00 share
% ls -l $OMPI/bin
total 340
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpiCC -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpic++ -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpicc -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpicxx -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies      7 Nov 21 13:01 mpiexec -&gt; orterun
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpif77 -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 mpif90 -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies      7 Nov 21 13:01 mpirun -&gt; orterun
-rwxr-xr-x  1 atchley softies 138416 Nov 21 13:01 ompi_info
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalCC -&gt; opal_wrapper
-rwxr-xr-x  1 atchley softies  24119 Nov 21 13:00 opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalc++ -&gt;  
opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:00 opalcc -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 orteCC -&gt; opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 ortec++ -&gt;  
opal_wrapper
lrwxrwxrwx  1 atchley softies     12 Nov 21 13:01 ortecc -&gt; opal_wrapper
-rwxr-xr-x  1 atchley softies  26536 Nov 21 13:01 orted
-rwxr-xr-x  1 atchley softies 154770 Nov 21 13:01 orterun
% ls -l $OMPI/lib
total 1741
-rwxr-xr-x  1 atchley softies   1045 Nov 21 13:01 libmca_common_sm.la
lrwxrwxrwx  1 atchley softies     25 Nov 21 13:01 libmca_common_sm.so  
-&gt; libmca_common_sm.so.0.0.0
lrwxrwxrwx  1 atchley softies     25 Nov 21 13:01 libmca_common_sm.so. 
0 -&gt; libmca_common_sm.so.0.0.0
-rwxr-xr-x  1 atchley softies  10074 Nov 21 13:01 libmca_common_sm.so. 
0.0.0
-rwxr-xr-x  1 atchley softies   1100 Nov 21 13:01 libmpi.la
lrwxrwxrwx  1 atchley softies     15 Nov 21 13:01 libmpi.so -&gt;  
libmpi.so.0.0.0
lrwxrwxrwx  1 atchley softies     15 Nov 21 13:01 libmpi.so.0 -&gt;  
libmpi.so.0.0.0
-rwxr-xr-x  1 atchley softies 640672 Nov 21 13:01 libmpi.so.0.0.0
-rwxr-xr-x  1 atchley softies   1005 Nov 21 13:01 libmpi_cxx.la
lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_cxx.so -&gt;  
libmpi_cxx.so.0.0.0
lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_cxx.so.0 -&gt;  
libmpi_cxx.so.0.0.0
-rwxr-xr-x  1 atchley softies 142062 Nov 21 13:01 libmpi_cxx.so.0.0.0
-rwxr-xr-x  1 atchley softies   1009 Nov 21 13:01 libmpi_f77.la
lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_f77.so -&gt;  
libmpi_f77.so.0.0.0
lrwxrwxrwx  1 atchley softies     19 Nov 21 13:01 libmpi_f77.so.0 -&gt;  
libmpi_f77.so.0.0.0
-rwxr-xr-x  1 atchley softies 283394 Nov 21 13:01 libmpi_f77.so.0.0.0
-rwxr-xr-x  1 atchley softies    996 Nov 21 13:00 libopal.la
lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 libopal.so -&gt;  
libopal.so.0.0.0
lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 libopal.so.0 -&gt;  
libopal.so.0.0.0
-rwxr-xr-x  1 atchley softies 285769 Nov 21 13:00 libopal.so.0.0.0
-rwxr-xr-x  1 atchley softies   1051 Nov 21 13:00 liborte.la
lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 liborte.so -&gt;  
liborte.so.0.0.0
lrwxrwxrwx  1 atchley softies     16 Nov 21 13:00 liborte.so.0 -&gt;  
liborte.so.0.0.0
-rwxr-xr-x  1 atchley softies 380223 Nov 21 13:00 liborte.so.0.0.0
drwx------  2 atchley softies   4160 Nov 21 13:01 openmpi
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2202.php">Greg Wolffe: "[OMPI users] Hostfile parse error"</a>
<li><strong>Previous message:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<li><strong>In reply to:</strong> <a href="2200.php">Brock Palen: "[OMPI users] myirnet problems on OSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2203.php">Brock Palen: "Re: [OMPI users] myirnet problems on OSX"</a>
<li><strong>Reply:</strong> <a href="2229.php">Galen Shipman: "Re: [OMPI users] myirnet problems on OSX"</a>
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
