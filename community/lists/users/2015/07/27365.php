<?
$subject_val = "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 20:58:56 2015" -->
<!-- isoreceived="20150731005856" -->
<!-- sent="Thu, 30 Jul 2015 17:58:50 -0700" -->
<!-- isosent="20150731005850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE problems w/OpenMPI 1.8.7" -->
<!-- id="504E2D2D-2393-471C-BF23-F8D7DD4334C0_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EEEB7C_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE problems w/OpenMPI 1.8.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 20:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27366.php">abhisek Mondal: "[OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#133;puzzling. Unfortunately, the developers don&#146;t have access to SGE machines, so I can only shoot in the dark here. Still, we can see what&#146;s going on if you have patience with us.
<br>
<p>Couple of things we can try so we get more info:
<br>
<p>* there is no MCA param pls_gridengine_verbose in the 1.8 series. Please set &#147;-mca plm_base_verbose 5&#148; on the cmd line
<br>
<p>* I take it you configured 1.8.7 with &#151;enable-debug, yes? If not, please do so
<br>
<p>* Add &#147;&#151;leave-session-attached&#148; to the cmd line
<br>
<p>* You state that this cluster has hetero nodes, but you didn&#146;t set &#147;&#151;hetero-nodes&#148; on the cmd line. You probably need to do so.
<br>
<p>* We set the following qrsh options &#147;under the cover&#148; when we launch via qrsh:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append_nosize(&amp;rsh_agent_argv, &quot;-inherit&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Don't use the &quot;-noshell&quot; flag as qrsh would have a problem 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* swallowing a long command */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append_nosize(&amp;rsh_agent_argv, &quot;-nostdin&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append_nosize(&amp;rsh_agent_argv, &quot;-V&quot;);
<br>
<p>In other words, mpirun will launch the orteds using a cmd line like &#147;qrsh -inherit -nostdin -V orted&#148;. Does your installation have an issue with any of those?
<br>
<p>If you get a chance to run with the above changes, please send along the output and I&#146;ll see what can be done.
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jul 30, 2015, at 2:19 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running a mixed cluster of Blades (HS21 and HS22 chassis), x3550-M3 and X3550-M4 systems, some of which support hyperthreading, while others
</span><br>
<span class="quotelev1">&gt; don't (specifically the HS21 blades) all on CentOS 6.3 w/SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no problems running my simple OpenMPI 1.8.7 test code outside of SGE (with or without the --bind-to core switch, but can only run the jobs within
</span><br>
<span class="quotelev1">&gt; SGE via qrsh on a limited number of slots (4 at most) successfully. The errors are very similar to the ones I was getting running OpenMPI 1.8.5 - 1.8.6 outside of SGE
</span><br>
<span class="quotelev1">&gt; on this same cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strangely, when running the test code outside of SGE w/the --bind-to core switch, mpirun still binds processes to hyperthreading cores. Additionally,
</span><br>
<span class="quotelev1">&gt; the --bind-to core switch prevents the OpenMPI 1.8.7 test code from running at all within SGE (it outputs warnings about missing NUMA libraries reducing performance
</span><br>
<span class="quotelev1">&gt; then exits).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We would rather run out OpenMPI jobs from within SGE so that we can get accounting data on OpenMPI jobs for administrative purposes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The orte PE I'm been using seems to meet all the requirements for previous versions of OpenMPI:
</span><br>
<span class="quotelev1">&gt; the allocation rule is fill-up, rather than round-robin (I'm not sure if this makes a difference or not)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The value NONE in user_lists and xuser_lists mean enable everybody and exclude nobody. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The value of control_slaves must be TRUE; otherwise, qrsh exits with an error message. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The value of job_is_first_task must be FALSE or the job launcher consumes a slot. In other words, mpirun itself will count as one of the slots and the job will fail, because only n-1 processes will start.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; And be sure the queue will make use of the PE that you specified
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the command line I've been using to generate the errors found in the attached file out.txt:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qrsh -V -now yes -pe orte 186 mpirun -np 186 --prefix /hpc/apps/mpi/openmpi/1.8.7/ --mca btl_tcp_if_include eth0 --mca pls_gridengine_verbose 1 /hpc/home/lanew/mpi/openmpi/ProcessColors3 &gt;&gt; out.txt 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the length. Thanks in advance for any help in resolving this nagging issue (I wish we had a homogenous cluster now).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.&lt;out.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27363.php">http://www.open-mpi.org/community/lists/users/2015/07/27363.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/07/27363.php">http://www.open-mpi.org/community/lists/users/2015/07/27363.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27365/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27366.php">abhisek Mondal: "[OMPI users] having an issue with paralleling jobs"</a>
<li><strong>Previous message:</strong> <a href="27364.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
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
