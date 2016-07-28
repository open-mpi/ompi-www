<?
$subject_val = "Re: [OMPI users] Problem in remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 14:02:47 2010" -->
<!-- isoreceived="20100330180247" -->
<!-- sent="Tue, 30 Mar 2010 13:02:43 -0500" -->
<!-- isosent="20100330180243" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in remote nodes" -->
<!-- id="4BB23CC3.4020607_at_phys.lsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2733.83.230.231.11.1269944821.squirrel_at_webmail.unavarra.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in remote nodes<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 14:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12476.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12474.php">openmpi_at_[hidden]: "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12491.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been having similar problems using Fedora core 9.  I believe the 
<br>
issue may be with SELinux, but this is just an educated guess.  In my 
<br>
setup, shortly after a login via mpi, there is a notation in the 
<br>
/var/log/messages on the compute node as follows:
<br>
<p>Mar 30 12:39:45 &lt;node_name&gt; kernel: type=1400 audit(1269970785.534:588): 
<br>
avc:  denied  { read } for  pid=8047 comm=&quot;unix_chkpwd&quot; name=&quot;hosts&quot; 
<br>
dev=dm-0 ino=24579 
<br>
scontext=system_u:system_r:system_chkpwd_t:s0-s0:c0.c1023 
<br>
tcontext=unconfined_u:object_r:etc_runtime_t:s0 tclass=file
<br>
<p>which says SELinux denied unix_chkpwd read access to hosts. 
<br>
<p>Are you getting anything like this?
<br>
<p>In the meantime, I'll check if allowing unix_chkpwd read access to hosts 
<br>
eliminates the problem on my system, and if it works, I'll post the 
<br>
steps involved.
<br>
<p>uriz.49949_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; I've benn investigating and there is no firewall that could stop TCP
</span><br>
<span class="quotelev1">&gt; traffic in the cluster. With the option --mca plm_base_verbose 30 I get
</span><br>
<span class="quotelev1">&gt; the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [itanium1] /home/otro &gt; mpirun --mca plm_base_verbose 30 --host itanium2
</span><br>
<span class="quotelev1">&gt; helloworld.out
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: component rsh has no register
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: component rsh open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: component slurm has no
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: components_open: component slurm open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca:base:select:(  plm) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [itanium1:08311] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Hangs here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems a slurm problem??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to any idea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; El Vie, 19 de Marzo de 2010, 17:57, Ralph Castain escribi&#243;:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Did you configure OMPI with --enable-debug? You should do this so that
</span><br>
<span class="quotelev2">&gt;&gt; more diagnostic output is available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can also add the following to your cmd line to get more info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --debug --debug-daemons --leave-session-attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something is likely blocking proper launch of the daemons and processes so
</span><br>
<span class="quotelev2">&gt;&gt; you aren't getting to the btl's at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 19, 2010, at 9:42 AM, uriz.49949_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The processes are running on the remote nodes but they don't give the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; response to the origin node. I don't know why.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the option --mca btl_base_verbose 30, I have the same problems and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't show any message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Mar 17, 2010 at 1:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 17, 2010, at 4:39 AM, &lt;uriz.49949_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi everyone I'm a new Open MPI user and I have just installed Open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a 6 nodes cluster with Scientific Linux. When I execute it in local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works perfectly, but when I try to execute it on the remote nodes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --host  option it hangs and gives no message. I think that the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; could be with the shared libraries but i'm not sure. In my opinion
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem is not ssh because i can access to the nodes with no password
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You might want to check that Open MPI processes are actually running
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the remote nodes -- check with ps if you see any &quot;orted&quot; or other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI-related processes (e.g., your processes).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you have any TCP firewall software running between the nodes?  If
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; so,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you'll need to disable it (at least for Open MPI jobs).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I also recommend running mpirun with the option --mca btl_base_verbose
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30 to troubleshoot tcp issues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In some environments, you need to explicitly tell mpirun what network
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfaces it can use to reach the hosts. Read the following FAQ
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; section for more information:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Item 7 of the FAQ might be of special interest.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12476.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12474.php">openmpi_at_[hidden]: "[OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12472.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Reply:</strong> <a href="12491.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
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
