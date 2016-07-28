<?
$subject_val = "Re: [OMPI users] mpiblast only run in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 22:52:59 2010" -->
<!-- isoreceived="20100402025259" -->
<!-- sent="Fri, 2 Apr 2010 10:52:54 +0800" -->
<!-- isosent="20100402025254" -->
<!-- name="longbow leo" -->
<!-- email="longbow0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast only run in one node" -->
<!-- id="q2r148acf931004011952z6f744c37zd1005062a06efc84_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA17056751_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiblast only run in one node<br>
<strong>From:</strong> longbow leo (<em>longbow0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 22:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12524.php">Jeff Squyres: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Reply:</strong> <a href="12524.php">Jeff Squyres: "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your reply.
<br>
<p>Now the mpiblast run in only one node both inside and outside a torque job.
<br>
<p>How could I setup a hostlist for open mpi? I haven't found this in the open
<br>
mpi faq. Thanks.
<br>
<p>the &quot;ompi_info | grep tm&quot; output is:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
<p><p>I also attached the &quot;ompi_info --all&quot; output with this email. Maybe you'd
<br>
like help me to check it.
<br>
<p>I have set the openmpi/bin to PATH and openmpi/lib to LD_LIBRARY_PATH and I
<br>
think the mpiblast complier chose the right mpicc.
<br>
<p><p>HZ Liu
<br>
<p><p>2010/4/1 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Are you running your job inside a torque job? If you don't, open mpi will
</span><br>
<span class="quotelev1">&gt; not have a hostlist and will assume that it should launch everything on the
</span><br>
<span class="quotelev1">&gt; localhost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are launching inside a torque job, ensure that ompi was build with
</span><br>
<span class="quotelev1">&gt; torque support properly - run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you see 1 or more tm plugins listed, ompi has torque support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, make sure you're using the right mpicc and mpirun, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;  *From*: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To*: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent*: Thu Apr 01 02:07:08 2010
</span><br>
<span class="quotelev1">&gt; *Subject*: [OMPI users] mpiblast only run in one node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed Torque/Maui, Open MPI 1.4.1 and mpiBlast 1.6.0-beta1 in a
</span><br>
<span class="quotelev1">&gt; linux Beowulf culster with 15 nodes (node1~15).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI, mpiBlast were installed and my home directory lies in a directory
</span><br>
<span class="quotelev1">&gt; &quot;/data&quot; which was shared by all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open Mpi was compiled with &quot;--with-tm&quot; to support Torque, and mpiBlast was
</span><br>
<span class="quotelev1">&gt; compiled with &quot;--with-mpi&quot; to the directory where Open MPI installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run mpiBlast by mpirun in command line, like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node1 $ /data/open-mpi/bin/mpirun -np 34 /data/mpiblast/bin/mpiblast -p
</span><br>
<span class="quotelev1">&gt; blastp -d nr -i test.faa -o test.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed all 34 mpiBlast processes run on node1 only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would not change if I submit job to Torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've searched the mailing list archives but it seems won't help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to resolve this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion will be appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HZ Liu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12520/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12520/ompi_info.all">ompi_info.all</a>
</ul>
<!-- attachment="ompi_info.all" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12524.php">Jeff Squyres: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Reply:</strong> <a href="12524.php">Jeff Squyres: "Re: [OMPI users] mpiblast only run in one node"</a>
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
