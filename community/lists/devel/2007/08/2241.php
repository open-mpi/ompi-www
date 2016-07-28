<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 06:49:47 2007" -->
<!-- isoreceived="20070828104947" -->
<!-- sent="Tue, 28 Aug 2007 06:50:48 -0400" -->
<!-- isosent="20070828105048" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="46D3FE08.5070306_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46D3D27F.4000006_at_physik.uni-halle.de" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 06:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe an clarification of the SM BTL implementation is needed.  Does the 
<br>
SM BTL not set a limit based on np using the max allowable as a 
<br>
ceiling?  If not and all jobs are allowed to use up to max allowable I 
<br>
see the reason for not wanting to raise the max allowable. 
<br>
<p>That being said it seems to me that the memory usage of the SM BTL is a 
<br>
lot larger than it should be.   Wasn't there some work done around June 
<br>
that looked why the SM BTL was allocating a lot of memory, anything come 
<br>
out of that? 
<br>
<p>--td
<br>
<p><p>Markus Daene wrote:
<br>
<p><span class="quotelev1">&gt;Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think it is not a good idea to increase the default value to 2G.  You
</span><br>
<span class="quotelev1">&gt;have to keep in mind that there are not so many people who have  a 
</span><br>
<span class="quotelev1">&gt;machine with 128 and more cores on a single node. The average people
</span><br>
<span class="quotelev1">&gt;will have nodes with 2,4 maybe 8 cores and therefore it is not necessary
</span><br>
<span class="quotelev1">&gt;to set this parameter to such a high value. Eventually it allocates all
</span><br>
<span class="quotelev1">&gt;of this memory per node, and if you have only 4 or 8G per node it will
</span><br>
<span class="quotelev1">&gt;be inbalanced. For my 8core nodes I have even decreased the sm_max_size
</span><br>
<span class="quotelev1">&gt;to 32G and I had no problems with that. As far as I know (if not
</span><br>
<span class="quotelev1">&gt;otherwise specified during runtime) this parameter is global. So even if
</span><br>
<span class="quotelev1">&gt;you  run on your machine with 2 procs it might allocate the 2G for the
</span><br>
<span class="quotelev1">&gt;MPI smp module.
</span><br>
<span class="quotelev1">&gt;I would recommend like Richard suggests to set the parameter for your
</span><br>
<span class="quotelev1">&gt;machine in
</span><br>
<span class="quotelev1">&gt;etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;and not to change the default value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Markus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev2">&gt;&gt;using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev2">&gt;&gt;with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev2">&gt;&gt;2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev2">&gt;&gt;used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev2">&gt;&gt;like to increase the default maximum from 512Mbytes to 2G-1 Gigabytes.
</span><br>
<span class="quotelev2">&gt;&gt;Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev2">&gt;&gt;have larger CPU counts and would like to increase the odds that things
</span><br>
<span class="quotelev2">&gt;&gt;work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On a side note, I did a quick comparison of the shared memory needs of
</span><br>
<span class="quotelev2">&gt;&gt;the old Sun ClusterTools to Open MPI and came up with this table.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                                         Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;np      Sun ClusterTools 6        current   suggested
</span><br>
<span class="quotelev2">&gt;&gt;-----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  2         20M                      128M        128M
</span><br>
<span class="quotelev2">&gt;&gt;  4         20M                      128M        128M
</span><br>
<span class="quotelev2">&gt;&gt;  8         22M                      256M        256M
</span><br>
<span class="quotelev2">&gt;&gt; 16         27M                      512M        512M
</span><br>
<span class="quotelev2">&gt;&gt; 32         48M                      512M          1G
</span><br>
<span class="quotelev2">&gt;&gt; 64        133M                      512M        2G-1
</span><br>
<span class="quotelev2">&gt;&gt;128        476M                      512M        2G-1
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2242.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
