<?
$subject_val = "Re: [OMPI users] openib errors as user, but not root";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:26:01 2007" -->
<!-- isoreceived="20071108002601" -->
<!-- sent="Wed, 7 Nov 2007 19:25:50 -0500" -->
<!-- isosent="20071108002550" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib errors as user, but not root" -->
<!-- id="8EE0569F-2A4E-49E2-9701-4B11D3AFFCD3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D392D4803D14354CBC49D772E19DD0CD84C29D_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 19:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4445.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4443.php">Andrus, Mr. Brian (Contractor): "[OMPI users] openib errors as user, but not root"</a>
<li><strong>In reply to:</strong> <a href="4443.php">Andrus, Mr. Brian (Contractor): "[OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4445.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4445.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4446.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
<br>
<p>In particular, see the stuff about using resource managers.
<br>
<p><p><p>On Nov 7, 2007, at 7:22 PM, Andrus, Mr. Brian (Contractor) wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I am having some difficulty troubleshooting this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run my hello program without torque, it works fine:
</span><br>
<span class="quotelev1">&gt; [root_at_login1 root]# mpirun --mca btl openib,self -host  
</span><br>
<span class="quotelev1">&gt; n01,n02,n03,n04,n05 /data/root/hello
</span><br>
<span class="quotelev1">&gt; Hello from process 0 of 5 on node n01
</span><br>
<span class="quotelev1">&gt; Hello from process 1 of 5 on node n02
</span><br>
<span class="quotelev1">&gt; Hello from process 2 of 5 on node n03
</span><br>
<span class="quotelev1">&gt; Hello from process 3 of 5 on node n04
</span><br>
<span class="quotelev1">&gt; Hello from process 4 of 5 on node n05
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I submit it as root, it seems happy:
</span><br>
<span class="quotelev1">&gt; [root_at_login1 root]# qsub
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=5:ppn=1
</span><br>
<span class="quotelev1">&gt; #PBS -W x=NACCESSPOLICY:SINGLEJOB
</span><br>
<span class="quotelev1">&gt; #PBS -N TestJob
</span><br>
<span class="quotelev1">&gt; #PBS -q long
</span><br>
<span class="quotelev1">&gt; #PBS -o output.txt
</span><br>
<span class="quotelev1">&gt; #PBS -V
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; rm -f output.txt
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl openib,self /data/root/hello
</span><br>
<span class="quotelev1">&gt; 103.cluster.default.domain
</span><br>
<span class="quotelev1">&gt; [root_at_login1 root]# cat output.txt
</span><br>
<span class="quotelev1">&gt; Wed Nov  7 16:20:33 PST 2007
</span><br>
<span class="quotelev1">&gt; Hello from process 0 of 5 on node n05
</span><br>
<span class="quotelev1">&gt; Hello from process 1 of 5 on node n04
</span><br>
<span class="quotelev1">&gt; Hello from process 2 of 5 on node n03
</span><br>
<span class="quotelev1">&gt; Hello from process 3 of 5 on node n02
</span><br>
<span class="quotelev1">&gt; Hello from process 4 of 5 on node n01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do it as me, not so good:
</span><br>
<span class="quotelev1">&gt; [andrus_at_login1 data]$ qsub
</span><br>
<span class="quotelev1">&gt; [andrus_at_login1 data]$ qsub
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=1
</span><br>
<span class="quotelev1">&gt; #PBS -W x=NACCESSPOLICY:SINGLEJOB
</span><br>
<span class="quotelev1">&gt; #PBS -N TestJob
</span><br>
<span class="quotelev1">&gt; #PBS -q long
</span><br>
<span class="quotelev1">&gt; #PBS -o output.txt
</span><br>
<span class="quotelev1">&gt; #PBS -V
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; rm -f output.txt
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl openib,self /data/root/hello
</span><br>
<span class="quotelev1">&gt; 105.littlemac.default.domain
</span><br>
<span class="quotelev1">&gt; [andrus_at_login1 data]$ cat output.txt
</span><br>
<span class="quotelev1">&gt; Wed Nov  7 16:23:00 PST 2007
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenIB BTL failed to initialize while trying to allocate some
</span><br>
<span class="quotelev1">&gt; locked memory.  This typically can indicate that the memlock limits
</span><br>
<span class="quotelev1">&gt; are set too low.  For most HPC installations, the memlock limits
</span><br>
<span class="quotelev1">&gt; should be set to &quot;unlimited&quot;.  The failure occured here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Host:          n01
</span><br>
<span class="quotelev1">&gt;     OMPI source:   btl_openib.c:828
</span><br>
<span class="quotelev1">&gt;     Function:      ibv_create_cq()
</span><br>
<span class="quotelev1">&gt;     Device:        mthca0
</span><br>
<span class="quotelev1">&gt;     Memlock limit: 32768
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.  This FAQ entry on the Open MPI web site may also be
</span><br>
<span class="quotelev1">&gt; helpful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
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
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; I have checked that ulimit is unlimited. I cannot seem to figure  
</span><br>
<span class="quotelev1">&gt; this. Any help?
</span><br>
<span class="quotelev1">&gt; Brian Andrus perotsystems
</span><br>
<span class="quotelev1">&gt; Site Manager | Sr. Computer Scientist
</span><br>
<span class="quotelev1">&gt; Naval Research Lab
</span><br>
<span class="quotelev1">&gt; 7 Grace Hopper Ave, Monterey, CA  93943
</span><br>
<span class="quotelev1">&gt; Phone (831) 656-4839 | Fax (831) 656-4866
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4445.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4443.php">Andrus, Mr. Brian (Contractor): "[OMPI users] openib errors as user, but not root"</a>
<li><strong>In reply to:</strong> <a href="4443.php">Andrus, Mr. Brian (Contractor): "[OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4445.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4445.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4446.php">Andrus, Mr. Brian (Contractor): "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
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
