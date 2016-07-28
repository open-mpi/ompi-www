<?
$subject_val = "Re: [OMPI users] openib errors as user, but not root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 12:47:51 2007" -->
<!-- isoreceived="20071108174751" -->
<!-- sent="Thu, 8 Nov 2007 09:47:47 -0800" -->
<!-- isosent="20071108174747" -->
<!-- name="Andrus, Mr. Brian (Contractor)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib errors as user, but not root" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD84C2A5_at_zeus.w2k.nrlmry.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF92FB3634.056277DE-ON8625738D.004BE0C3-8625738D.004C7037_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib errors as user, but not root<br>
<strong>From:</strong> Andrus, Mr. Brian (Contractor) (<em>brian.andrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 12:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep. I thought it was the startup script, but it was merely the fact I
<br>
restarted it that got it going.
<br>
<p>I wonder if adding ulimit -l unlimited to the startup script will help,
<br>
tho. 
<br>
<p><p>Brian Andrus perotsystems 
<br>
Site Manager | Sr. Computer Scientist 
<br>
Naval Research Lab
<br>
7 Grace Hopper Ave, Monterey, CA  93943
<br>
Phone (831) 656-4839 | Fax (831) 656-4866 
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of pat.o'bryant_at_[hidden]
<br>
Sent: Thursday, November 08, 2007 5:55 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] openib errors as user, but not root
<br>
<p>What we discovered is that our PBS mom daemon did not have unlimited
<br>
locked memory. So, when your job is created by the mom daemon it
<br>
inherits the memory limits. The fix was to cycle the PBS mom daemon
<br>
after a boot (and yes, we do start the mom daemon at boot but for some
<br>
reason it doesn't inherit unlimited locked memory). The way to determine
<br>
if this is the problem is to place a &quot;ulimit -a&quot; in the text of your PBS
<br>
job. Run your job and you will see a limit of 32K. Next cycle the mom
<br>
daemon on the node(s) of interest and re-run your job. You will now see
<br>
unlimited memory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pat O'Bryant
<br>
<p><p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
<p><p><p><p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_cisc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o.com&gt;
<br>
To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                 Open MPI Users
<br>
&lt;users_at_[hidden]&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces@
<br>
cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open-mpi.org
<br>
<p>&nbsp;
<br>
Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] openib errors as
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11/07/07 06:25           user, but not root
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PM
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mp
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.org&gt;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p><p><p>Check out:
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
<span class="quotelev1">&gt;
</span><br>
------------------------------------------------------------------------
<br>
<pre>
--
&gt; The OpenIB BTL failed to initialize while trying to allocate some 
&gt; locked memory.  This typically can indicate that the memlock limits 
&gt; are set too low.  For most HPC installations, the memlock limits 
&gt; should be set to &quot;unlimited&quot;.  The failure occured here:
&gt;
&gt;     Host:          n01
&gt;     OMPI source:   btl_openib.c:828
&gt;     Function:      ibv_create_cq()
&gt;     Device:        mthca0
&gt;     Memlock limit: 32768
&gt;
&gt; You may need to consult with your system administrator to get this 
&gt; problem fixed.  This FAQ entry on the Open MPI web site may also be
&gt; helpful:
&gt;
&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
&gt;
------------------------------------------------------------------------
--
&gt;
------------------------------------------------------------------------
--
&gt; It looks like MPI_INIT failed for some reason; your parallel process 
&gt; is likely to abort.  There are many reasons that a parallel process 
&gt; can fail during MPI_INIT; some of which are due to configuration or 
&gt; environment problems.  This failure appears to be an internal failure;
&gt; here's some additional information (which may only be relevant to an 
&gt; Open MPI
&gt; developer):
&gt;
&gt;   PML add procs failed
&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
&gt;
------------------------------------------------------------------------
--
&gt; *** An error occurred in MPI_Init
&gt; *** before MPI was initialized
&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
&gt;
&gt;
&gt;
&gt; I have checked that ulimit is unlimited. I cannot seem to figure this.
&gt; Any help?
&gt; Brian Andrus perotsystems
&gt; Site Manager | Sr. Computer Scientist
&gt; Naval Research Lab
&gt; 7 Grace Hopper Ave, Monterey, CA  93943 Phone (831) 656-4839 | Fax 
&gt; (831) 656-4866 _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>Previous message:</strong> <a href="4451.php">Rainer Keller: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
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
