<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 12:16:07 2009" -->
<!-- isoreceived="20090406161607" -->
<!-- sent="Mon, 6 Apr 2009 21:46:01 +0530" -->
<!-- isosent="20090406161601" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904060916g2bbcd43fpbe59428d854208b1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49DA266F.80708_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 12:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8784.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not able to check if NFS export/mount of /tmp is working,
<br>
when i give the command *ssh 192.168.45.65 192.168.67.18* i get the error :
<br>
bash: 192.168.67.18: command not found
<br>
<p>let me explain what i understood using an example.
<br>
<p>First, i make a folder '/work directory' on my master node.
<br>
<p>Then i mount this directory on a folder named '/work directory/mnt' on the
<br>
slave node
<br>
<p>is this correct?
<br>
<p>also how and where (is it on the master node) do i give the list of hosts?
<br>
and by hosts you mean the compute nodes.
<br>
<p>Plez bear with me as this is the first time i am doin a project on Linux
<br>
clustering.
<br>
<p>On Mon, Apr 6, 2009 at 9:27 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ankush
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remember right,
</span><br>
<span class="quotelev1">&gt; mpirun will put you on your home directory, not on /tmp,
</span><br>
<span class="quotelev1">&gt; when it starts your ssh session.
</span><br>
<span class="quotelev1">&gt; To run on /tmp (or on /mnt/nfs)
</span><br>
<span class="quotelev1">&gt; you may need to use &quot;-path&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Likewise, you may want to give mpirun a list of hosts (-host option)
</span><br>
<span class="quotelev1">&gt; or a hostfile (-hostfile option), to specify where you want the
</span><br>
<span class="quotelev1">&gt; program to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do
</span><br>
<span class="quotelev1">&gt; &quot;/full/path/to/openmpi/mpriun -help&quot;
</span><br>
<span class="quotelev1">&gt; for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure your NFS export/mount of /tmp is working,
</span><br>
<span class="quotelev1">&gt; say, by doing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh slave_node 'hostname; ls /tmp; ls /mnt/nfs'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or similar, and see if your  program &quot;pi&quot; is really there (and where).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, it may be confusing to export /tmp, as it is part
</span><br>
<span class="quotelev1">&gt; of the basic Linux directory tree,
</span><br>
<span class="quotelev1">&gt; which is the reason why you mounted it on /mnt/nfs.
</span><br>
<span class="quotelev1">&gt; You may want to choose to export/mount
</span><br>
<span class="quotelev1">&gt; a directory that is not so generic as /tmp,
</span><br>
<span class="quotelev1">&gt; so that you can use a consistent name on both computers.
</span><br>
<span class="quotelev1">&gt; For instance, you can create a /my_export or /work directory
</span><br>
<span class="quotelev1">&gt; (or whatever name you prefer) on the master node,
</span><br>
<span class="quotelev1">&gt; export it to the slave node, mount it on the slave node
</span><br>
<span class="quotelev1">&gt; with the same name/mountpoint, and use it for your MPI work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you sir,
</span><br>
<span class="quotelev2">&gt;&gt; one more thing i am confused about, suppose i have 2 run a 'pi' program
</span><br>
<span class="quotelev2">&gt;&gt; using open mpi, where do i place the program?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; currently i have placed it in /tmp folder on de master node. this /tmp
</span><br>
<span class="quotelev2">&gt;&gt; folder is mounted on /mnt/nfs of the compute node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i run de progam from the tmp folder on de master node, is this correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i m a newbie n really need some help, thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 6, 2009 at 8:43 PM, John Hearns &lt;hearnsj_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; hearnsj_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    2009/4/6 Ankush Kaul &lt;ankush.rkaul_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;mailto:ankush.rkaul_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;     &gt;&gt; Also how do i come to know that the program is using resources
</span><br>
<span class="quotelev2">&gt;&gt;    of both the
</span><br>
<span class="quotelev3">&gt;&gt;     &gt; nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Log into the second node before you start the program.
</span><br>
<span class="quotelev2">&gt;&gt;    Run 'top'
</span><br>
<span class="quotelev2">&gt;&gt;    Seriously - top is a very, very useful utility.
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8786.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8784.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8784.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8788.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
