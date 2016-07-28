<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 11:57:50 2009" -->
<!-- isoreceived="20090406155750" -->
<!-- sent="Mon, 06 Apr 2009 11:57:35 -0400" -->
<!-- isosent="20090406155735" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49DA266F.80708_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904060819o3364dfa6ua3e4847b37429465_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 11:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8782.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>If I remember right,
<br>
mpirun will put you on your home directory, not on /tmp,
<br>
when it starts your ssh session.
<br>
To run on /tmp (or on /mnt/nfs)
<br>
you may need to use &quot;-path&quot; option.
<br>
<p>Likewise, you may want to give mpirun a list of hosts (-host option)
<br>
or a hostfile (-hostfile option), to specify where you want the
<br>
program to run.
<br>
<p>Do
<br>
&quot;/full/path/to/openmpi/mpriun -help&quot;
<br>
for details.
<br>
<p>Make sure your NFS export/mount of /tmp is working,
<br>
say, by doing:
<br>
<p>ssh slave_node 'hostname; ls /tmp; ls /mnt/nfs'
<br>
<p>or similar, and see if your  program &quot;pi&quot; is really there (and where).
<br>
<p>Actually, it may be confusing to export /tmp, as it is part
<br>
of the basic Linux directory tree,
<br>
which is the reason why you mounted it on /mnt/nfs.
<br>
You may want to choose to export/mount
<br>
a directory that is not so generic as /tmp,
<br>
so that you can use a consistent name on both computers.
<br>
For instance, you can create a /my_export or /work directory
<br>
(or whatever name you prefer) on the master node,
<br>
export it to the slave node, mount it on the slave node
<br>
with the same name/mountpoint, and use it for your MPI work.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; Thank you sir,
</span><br>
<span class="quotelev1">&gt; one more thing i am confused about, suppose i have 2 run a 'pi' program 
</span><br>
<span class="quotelev1">&gt; using open mpi, where do i place the program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently i have placed it in /tmp folder on de master node. this /tmp 
</span><br>
<span class="quotelev1">&gt; folder is mounted on /mnt/nfs of the compute node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i run de progam from the tmp folder on de master node, is this correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i m a newbie n really need some help, thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 6, 2009 at 8:43 PM, John Hearns &lt;hearnsj_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hearnsj_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     2009/4/6 Ankush Kaul &lt;ankush.rkaul_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:ankush.rkaul_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Also how do i come to know that the program is using resources
</span><br>
<span class="quotelev1">&gt;     of both the
</span><br>
<span class="quotelev2">&gt;      &gt; nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Log into the second node before you start the program.
</span><br>
<span class="quotelev1">&gt;     Run 'top'
</span><br>
<span class="quotelev1">&gt;     Seriously - top is a very, very useful utility.
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8783.php">Gus Correa: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8782.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8785.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
