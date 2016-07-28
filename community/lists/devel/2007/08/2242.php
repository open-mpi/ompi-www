<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 09:52:46 2007" -->
<!-- isoreceived="20070828135246" -->
<!-- sent="Tue, 28 Aug 2007 09:53:07 -0400" -->
<!-- isosent="20070828135307" -->
<!-- name="Rolf.Vandevaart_at_[hidden]" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="46D428C3.4010300_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46D3FE08.5070306_at_sun.com" -->
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
<strong>From:</strong> <a href="mailto:Rolf.Vandevaart_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Maximum%20Shared%20Memory%20Segment%20-%20OK%20to%20increase?"><em>Rolf.Vandevaart_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-08-28 09:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2241.php">Terry D. Dontje: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2241.php">Terry D. Dontje: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are 3 parameters that control how much memory is used by the SM BTL.
<br>
<p>&nbsp;MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current value: &quot;536870912&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maximum size of the sm mpool shared memory file
<br>
&nbsp;MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;134217728&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minimum size of the sm mpool shared memory file
<br>
&nbsp;MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Size (in bytes) to allocate per local peer in the sm mpool 
<br>
shared memory file,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bounded by min_size and max_size
<br>
<p>To paraphrase the above, the default ceiling is 512M, the default floor 
<br>
is 128M,
<br>
and the scaling factor is 32M*procs_on_node.   Therefore, changing it 
<br>
would only
<br>
effect cases where there were more than 16 processes on a node. (16*32=512M)
<br>
<p>My suggestion was to increase the ceiling from 512M to 2G-1.  And yes, we
<br>
could adjust as suggested by Rich by adding setting the parameter in
<br>
our customized openmpi-mca-params.conf file.   I just was not sure
<br>
that was the optimal solution.
<br>
<p>Rolf
<br>
<p><p>Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt;Maybe an clarification of the SM BTL implementation is needed.  Does the 
</span><br>
<span class="quotelev1">&gt;SM BTL not set a limit based on np using the max allowable as a 
</span><br>
<span class="quotelev1">&gt;ceiling?  If not and all jobs are allowed to use up to max allowable I 
</span><br>
<span class="quotelev1">&gt;see the reason for not wanting to raise the max allowable. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That being said it seems to me that the memory usage of the SM BTL is a 
</span><br>
<span class="quotelev1">&gt;lot larger than it should be.   Wasn't there some work done around June 
</span><br>
<span class="quotelev1">&gt;that looked why the SM BTL was allocating a lot of memory, anything come 
</span><br>
<span class="quotelev1">&gt;out of that? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Markus Daene wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I think it is not a good idea to increase the default value to 2G.  You
</span><br>
<span class="quotelev2">&gt;&gt;have to keep in mind that there are not so many people who have  a 
</span><br>
<span class="quotelev2">&gt;&gt;machine with 128 and more cores on a single node. The average people
</span><br>
<span class="quotelev2">&gt;&gt;will have nodes with 2,4 maybe 8 cores and therefore it is not necessary
</span><br>
<span class="quotelev2">&gt;&gt;to set this parameter to such a high value. Eventually it allocates all
</span><br>
<span class="quotelev2">&gt;&gt;of this memory per node, and if you have only 4 or 8G per node it will
</span><br>
<span class="quotelev2">&gt;&gt;be inbalanced. For my 8core nodes I have even decreased the sm_max_size
</span><br>
<span class="quotelev2">&gt;&gt;to 32G and I had no problems with that. As far as I know (if not
</span><br>
<span class="quotelev2">&gt;&gt;otherwise specified during runtime) this parameter is global. So even if
</span><br>
<span class="quotelev2">&gt;&gt;you  run on your machine with 2 procs it might allocate the 2G for the
</span><br>
<span class="quotelev2">&gt;&gt;MPI smp module.
</span><br>
<span class="quotelev2">&gt;&gt;I would recommend like Richard suggests to set the parameter for your
</span><br>
<span class="quotelev2">&gt;&gt;machine in
</span><br>
<span class="quotelev2">&gt;&gt;etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt;&gt;and not to change the default value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Markus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt;used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;like to increase the default maximum from 512Mbytes to 2G-1 Gigabytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;have larger CPU counts and would like to increase the odds that things
</span><br>
<span class="quotelev3">&gt;&gt;&gt;work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On a side note, I did a quick comparison of the shared memory needs of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the old Sun ClusterTools to Open MPI and came up with this table.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                        Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;np      Sun ClusterTools 6        current   suggested
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2         20M                      128M        128M
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4         20M                      128M        128M
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8         22M                      256M        256M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;16         27M                      512M        512M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;32         48M                      512M          1G
</span><br>
<span class="quotelev3">&gt;&gt;&gt;64        133M                      512M        2G-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;128        476M                      512M        2G-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2241.php">Terry D. Dontje: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2241.php">Terry D. Dontje: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
